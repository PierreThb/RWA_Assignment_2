/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Blog() {

}

Blog.prototype = {
    beforeLoad : function(){
         $("#blog_content").empty();
    },
    afterLoad : function () {
        $.mobile.loading('show', {
            text: "Loading blog content",
            textVisible: true,
        });
        var self = this;
        $.ajax({
            url: 'http://cowgow.byethost7.com',
            type: 'GET',
            dataType: 'jsonp',
            data: {json: 1}
        }).success(function (data) {
            $.mobile.loading("hide");
            self.displayPosts(data.posts);
        }).fail(function (er) {
            console.error(er);
        });
    },
    displayPosts: function (postsArr) {
        var $posts = $('<div/>');
        $.each(postsArr, function (index, post) {
            console.log(post);
            var $resume = $($(post.content)[0]);
            $resume.text($resume.text() + '...');
            var $dummyDiv = $('<div/>')
                    .append($('<a/>').wrap('h4').text(post.title).attr({"href": post.url, 'target': '_blank'}))
                    .append($('<p/>').html($resume));
            $posts.append($dummyDiv);
        });
        $('#blog_content').append($posts);
    }
};

window.blog = new Blog();