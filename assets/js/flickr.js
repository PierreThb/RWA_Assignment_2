/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Flickr() {

}

Flickr.prototype = {
    beforeLoad: function () {
        $("#image").empty();
        //Appelé avant la transition 
        $.ajax({
            dataType: "json",
            url: "https://api.flickr.com/services/rest/",
            type: 'GET',
            data: {
                method: 'flickr.people.getPublicPhotos',
                api_key: 'ca53bc81589d3ad195743451a4d28869',
                user_id: '136111591@N02',
                format: 'json',
                nojsoncallback: '1',
                auth_token: '72157660572844919-8e4de90c75e75a14',
                api_sig: '4afba70cad92d15201e142818fd9c1bf'
            }
        }).success(function (data) {
            console.log(data);
            if (data.stat === 'ok') {
                var output = $("<div/>", {id: "my_div"});
                $.each(data.photos.photo, function (index, val) {
                    var img = $("<img/>", {
                        src: 'https://farm' + val.farm + '.staticflickr.com/' + val.server + '/' + val.id + '_' + val.secret + '.jpg'
                    });
                    console.log(img);
                    output.append(img);
                });
                $("#image").append(output);
            } else {
                var $err = $("<p/>").css("color","red").text("An error occured : impossible to access flickr photos")
                $("#image").append($err);
            }
        });

    },
    afterLoad: function () {
        //Appelé après la transition
        
    }
};

window.flickr = new Flickr();