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
                api_key: '69882ce7b78329557bafacedc5fc66b3',
                user_id: '136111591@N02',
                format: 'json',
                nojsoncallback: '1'
                // auth_token: '72157660823674147-674f3f6a43e64fb0'
//                api_sig: '18214db396f4d526bfd722ee6702b3aa'
            }
        }).success(function (data) {
            if (data.stat === 'ok') {
                self.displayImages(data.photos.photo);
            } else {
                console.log(data);
                var $err = $("<p/>").css("color", "red").text("An error occured : impossible to access flickr photos")
                $("#image").append($err);
            }
        });

    },
    afterLoad: function () {
        //Appelé après la transition

    },
    displayImages: function (imgArr) {
        var $imgRoot = $('<div/>', {id: 'photos'});
        $.each(imgArr, function (index, val) {
            var $my_a = $('<a/>', {
                'href': '#popup_' + val.id,
                'data-rel': 'popup',
                'data-position-to': "window",
                'data-transition': 'fade'
            });
            var $img = $("<img/>", {
                'class': "popphoto",
                src: 'https://farm' + val.farm + '.staticflickr.com/' + val.server + '/' + val.id + '_' + val.secret + '.jpg'
            });
            var $popup = $("<div/>", {
                'data-role': "popup",
                'id': 'popup_' + val.id
            });
            var $aInsidePopup = $("<a/>", {
                'href': '#',
                'data-rel': 'back',
                'class': 'ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right'
            }).text("Close");
            
            var imgSrc = 'https://farm' + val.farm +
                    ['.staticflickr.com',val.server,''].join('/') +
                    [val.id,val.secret,'b'].join('_') + '.jpg';
            console.log(imgSrc);
            var $enlargedImg = $("<img/>", {
                'class': 'popphoto',
                'src': imgSrc,
                'style': 'max-height:512px'
            });

            $my_a.append($img);
            $popup.append($aInsidePopup);
            $popup.append($enlargedImg);
            $imgRoot.append($my_a);

            $popup.on({popupbeforeposition: function () {
                    var maxHeight = $(window).height() - 60 + "px";
                    $(this).find('img').css("height", maxHeight);
                    console.log($(this).find('img'));
                }});

            $.mobile.activePage.append($popup.get(0)).trigger("pagecreate");
        });
        $("#flickr").page("destroy").page();//Here is the solution
        $("#image").append($imgRoot);
    }
};

window.flickr = new Flickr();
