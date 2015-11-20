<?php header("Access-Control-Allow-Origin: http://localhost"); ?>

<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Champagne houses</title>

        <!-- To be changed with the custome versions of jquery-mobile -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link rel="stylesheet" href="assets/css/justifiedGallery.min.css"
              <link rel="stylesheet" href="assets/css/home.css" />

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="assets/js/jquery.justifiedGallery.min.js"></script>
        <script src="assets/js/blog.js" type="text/javascript"  ></script>
        <script src="assets/js/flickr.js" type="text/javascript" ></script>
        <script src="assets/js/map.js" type="text/javascript" ></script>
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
                    <li data-icon="location" ><a href="#map">Map</a></li>
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
        <div data-role="page" id="map" >
            <div data-role="header">
                <h1>Flickr</h1>
            </div>

            <!-- Contenu -->
            <div data-role="content" class="full_height ui-grid-a" >
                <div id="map_container" class="ui-block-a" ></div>
                <div id="map_direction" class="ui-block-b" ></div>
            </div>

            <div data-position="fixed" data-role="footer">
                <h4><a href="#home">Back to homepage</a></h4>
            </div><!-- /footer -->
        </div>
        <script src="assets/js/home.js" ></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4wcYndpXCDGPxRRm5r5yhIJOfoyE8Fi8&callback=initMap"></script>
    </body>
</html>
