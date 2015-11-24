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
                api_key: 'e9b9fd859bfb0eb780853a74aa165146',
                user_id: '136111591@N02',
                format: 'json',
                nojsoncallback: '1',
                auth_token: '72157660823674147-674f3f6a43e64fb0',
                api_sig: '18214db396f4d526bfd722ee6702b3aa'
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
//            console.log(val);
            var $my_a = $('<a/>',{
                'href':'#popup'+val.title,
                'data-rel':'popup',
                'data-position-to':"window",
                'data-transition':'fade'
            });
            var $img = $("<img/>", {
                'class':"popphoto", 
                src: 'https://farm' + val.farm + '.staticflickr.com/' + val.server + '/' + val.id + '_' + val.secret + '.jpg'
            });
            var $popup = $("<div/>",{
                'data-role':"popup",
                'id':'popup'+val.title,
                'data-overlay-theme':"b",
                'data-theme':"b",
                'data-corners':"false"
            });
            var $aInsidePopup = $("<a/>",{
                'href':'#',
                'data-rel':'back',
                'class':'ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right'
            }).text("Close");
            var $enlargedImg = $("<img/>",{
               'class':'popphoto',
               'src':'https://farm' + val.farm + '.staticflickr.com/' + val.server + '/' + val.id + '_' + val.secret + '.jpg',
               'style':'max-height:512px'
            });
//            console.log($my_a);
            
            $div.append($my_a);
            $my_a.append($img);
            $popup.append($aInsidePopup);
            $popup.append($enlargedImg);
            
        });
        $("#image").append($div);
    }
};

window.flickr = new Flickr();   
