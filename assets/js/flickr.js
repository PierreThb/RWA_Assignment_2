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
                api_key: '439d3c788d4c522138a62a1a9faf2f10',
                user_id: '136111591@N02',
                format: 'json',
                nojsoncallback: '1',
                auth_token: '72157661417747795-2664a1b6c33f3c77',
                api_sig: '7a9a87389711f553ecd044a5ddc695ff'
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
