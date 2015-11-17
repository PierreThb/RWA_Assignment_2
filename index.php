<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Champagne houses</title>

        <!-- To be changed with the custome versions of jquery-mobile -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="assets/js/blog.js" ></script>
        <script src="assets/js/flickr.js"></script>
    </head>
    <body>
        <!-- Début HOMEPAGE -->
        <div data-role="page" id="home">

            <div data-role="header">
                <h1>Homepage</h1>
            </div><!-- /header -->

            <div data-role="content">
                <ul data-role="listview">
                    <li data-icon="edit" ><a href="#blog">Blog</a></li>
                    <li data-icon="grid" ><a href="#flickr">Pictures</a></li>
                    <li data-icon="location" ><a href="#bar">Map</a></li>
                </ul>
            </div><!-- /content -->

            <div data-position="fixed" data-role="footer">
                <h4>Pied de page</h4>
            </div><!-- /footer -->
        </div><!-- /page -->

        <!-- Début BLOG -->
        <div data-role="page" id="blog">
            <div data-role="header">
                <h1>Blog</h1>
            </div><!-- /header -->

            <div data-role="content" id="blog_content" >
            </div><!-- /content -->

            <div data-position="fixed" data-role="footer">
                <h4><a href="#home">Back to homepage</a></h4>
            </div>
        </div>

        <!-- DÉBUT DIV FLICKR -->
        <div data-role="page" id="flickr" >
            <div data-role="header">
                <h1>Flickr</h1>
            </div>

            <!-- Contenu -->
            <div data-role="content" id="image">
                
            </div>

            <div data-position="fixed" data-role="footer">
                <h4><a href="#home">Back to homepage</a></h4>
            </div><!-- /footer -->
        </div>
        <script src="assets/js/home.js" ></script>
<!--        <script src="https://api.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=ca53bc81589d3ad195743451a4d28869&user_id=136111591%40N02&format=json&auth_token=72157660572844919-8e4de90c75e75a14&api_sig=bb6bb873aa97d3c50adfb18496b5561e" type="text/javascript"></script>-->
            
    </body>
</html>
