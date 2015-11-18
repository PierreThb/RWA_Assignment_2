/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Flickr() {

}

Flickr.prototype = {
    beforeLoad: function () {
        var self = this;
        $("#image").empty();
        //Appelé avant la transition 
        $.ajax({
            dataType: "json",
            url: "https://api.flickr.com/services/rest/",
            type: 'GET',
            data: {
                method: 'flickr.people.getPublicPhotos',
                api_key: '65b72d0896274b08406273ce69db4f59',
                user_id: '136111591@N02',
                format: 'json',
                nojsoncallback: '1',
                auth_token: '72157659044746593-de9fbe6ba8cef4b5',
                api_sig: '25f3bae3d4de72e13b85cb62cc2eb1f2'
            }
        }).success(function (data) {
            if (data.stat === 'ok') {
                self.displayImages(data.photos.photo);
            } else {
                var $err = $("<p/>").css("color", "red").text("An error occured : impossible to access flickr photos")
                $("#image").append($err);
            }
        });

    },
    afterLoad: function () {
        //Appelé après la transition

    },
    displayImages:function (imgArr) {
        var $div = $('<div/>', {id: 'photos'});
        $.each(imgArr, function (index, val) {
            var img = $("<img/>", {
                src: 'https://farm' + val.farm + '.staticflickr.com/' + val.server + '/' + val.id + '_' + val.secret + '.jpg'
            });
            $div.append(img);
        });
        $("#image").append($div);
    }
};

window.flickr = new Flickr();