/*
 * Created on :
 * Author :
 */

function Blog() {

}

Blog.prototype = {
    beforeLoad: function () {
        $("#blog_content").empty();
    },
    afterLoad: function () {
        $.mobile.loading('show', {
            text: "Loading blog content",
            textVisible: true
        });
        var self = this;
        $.ajax({
            url: 'http://cowgow.byethost7.com/',
            type: 'GET',
            dataType: 'json',
            data: {json: 1}, //Count to reduce the number of posts
            error: function (er,data) {
                console.log(er,data);
                var $p = $("<p/>", {class: 'error-text'}).text("An error occured - may happen for security reasons");
                $("#blog_content").append($p);
                $.mobile.loading("hide");
            },
            success: function (data) {
                $.mobile.loading("hide");
                self.displayPosts(data.posts);
            }
        });
    },
    displayPosts: function (postsArr) {
        var $posts = $('<div/>',{
            "data-role" :"listview"
        });
        $.each(postsArr, function (index, post) {
            console.log(post.thumbnail);
            var $thumb = $("<img/>", {
                src: post.thumbnail || 'assets/images/bottle.png',
                class: 'thumbnail'
            });
            var $resume = $($(post.content)[0]);
            $resume.text($resume.text() + '...');
            var $dummyDiv = $('<div/>', {
                class: 'blog-post ui-corner-all ui-overlay-shadow ui-btn ui-btn-icon-right ui-icon-arrow-r'
            })
                    .append($("<div/>")
                            .append($('<a/>').wrap('h4').text(post.title).attr({"href": post.url, 'target': '_blank'}))
                            .append($('<p/>').html($resume.html())));
            $dummyDiv.prepend($thumb);
            $posts.append($dummyDiv);
        });
        $('#blog_content').append($posts);
    }
};

window.blog = new Blog();
