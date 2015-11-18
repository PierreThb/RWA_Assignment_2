<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Champagne houses</title>

        <!-- To be changed with the custome versions of jquery-mobile -->
        <link type="text/css" rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

        <link type="text/css" rel="stylesheet" href="assets/css/home.css" />

        <!--Libraries-->
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

        <!--Custom-->
        <script src="assets/js/blog.js" type="text/javascript"  ></script>
        <script src="assets/js/flickr.js" type="text/javascript" ></script>
        <script src="assets/js/map.js" type="text/javascript" ></script>
    </head>
    <body>



        <!-- Début HOMEPAGE -->
        <div data-role="page" id="home">
            <div data-role="header">
                <a href="#myPopupDialog" 
                   data-rel="popup" 
                   data-position-to="window" 
                   data-transition="pop"
                   class="ui-btn ui-icon-info ui-btn-icon-left ui-corner-all">
                    Information
                </a>
                <h1>Homepage</h1>
            </div>

            <div data-role="main" class="ui-content">
                <div data-role="popup" id="myPopupDialog">
                    <div data-role="header">
                        <a href="#" 
                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-delete ui-btn-icon-left" 
                           data-rel="back">close</a>
                        <h1>Informations</h1>
                    </div>

                    <div data-role="main" class="ui-content">
                        <h2>Champanges houses</h2>
                        <p>Looking for some houses in France ?
                            <br/> What a good choice !
                            In this website, you will find some informations about
                            the best houses in Champagne.
                        </p>
                    </div>
                </div>

                <ul data-role="listview">
                    <li data-icon="edit" ><a href="#blog">Blog</a></li>
                    <li data-icon="grid" ><a href="#flickr">Pictures</a></li>
                    <li data-icon="location" ><a href="#map">Map</a></li>
                </ul>
            </div>

            <div data-role="footer" data-position="fixed">
                <h1>Footer Text</h1>
            </div>
        </div> 


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
        
        <!--DÉBUT MAP-->
        <div data-role="page" id="map" >
            <div data-role="header">
                <h1>Map</h1>
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
