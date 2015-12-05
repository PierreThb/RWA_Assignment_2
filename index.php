<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/bottle.png" />
        <title>Champagne houses</title>

        <!-- To be changed with the custome versions of jquery-mobile -->
        <link type="text/css" rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/Nature.css" />
        <link type="text/css" rel="stylesheet" href="assets/css/home.css" />
        <link media="screen and (max-width:1200px)" type="text/css" rel="stylesheet" href="assets/css/home-mobile.css" />


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
            <div data-role="header" data-position="fixed">
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
                    <div data-role="header" data-position="fixed">
                        <a href="#"
                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-delete ui-btn-icon-left"
                            data-rel="back" >close</a>
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

                <div class="ui-grid-a">
                    <a id="blog_link" class="ui-block-a ui-btn ui-btn-icon-top ui-icon-edit btn-home"  href="#blog">Blog</a>
                    <a id="pictures_link" class="ui-block-b ui-btn ui-btn-icon-top ui-icon-grid bth-home" href="#flickr">Pictures</a>
                </div>
                <div class="ui-grid-a">
                    <a id="map_link" class="ui-block-a ui-btn ui-btn-icon-top ui-icon-location btn-home" href="#map">Map</a>
                    <a id="contact_link" class="ui-block-b ui-btn ui-btn-icon-top ui-icon-mail btn-home" href="#contact">Contact</a>
                </div>
            </div>

            <div data-role="footer" data-position="fixed">
                <h1>Footer Text</h1>
            </div>
        </div>


        <!-- Début BLOG -->
        <div data-role="page" id="blog"  >
            <div data-role="header" data-position="fixed" >
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
            <div data-role="header" data-position="fixed">
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
            <div data-role="header" data-position="fixed">
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

        <!--DÉBUT CONTACT-->
        <div data-role="page" id="contact" >
            <div data-role="header" data-position="fixed">
                <h1>Contact us</h1>
            </div>

            <!-- Contenu -->
            <div data-role="content" class="ui-grid-b" id="social-buttons" >
                <div class="ui-block-a" >
                    <h3>Join us on facebook</h3>
                    <div id="fb-root"></div>
                    <div class="fb-like" data-layout="box_count" ></div>
                    <div class="fb-follow social-div" data-href="https://www.facebook.com/zuck" data-layout="box_count" data-show-faces="true"></div>
                </div>
                <div class="ui-block-b">
                    <h3>Talk with us on twitter</h3>
                    <a href="https://twitter.com/twitter" class="twitter-share-button"data-size="large"></a>

                </div>
                <div class="ui-block-c">
                    <h3>Have a chat with us on Google+</h3>
                    <g:plusone class="social-div" data-href="https://plus.google.com/u/0/photos/photo/102773355997909430376/5996507794497573938" size="tall" ></g:plusone>
                    <div data-annotation="vertical-bubble" class="g-follow" data-href="https://plus.google.com/108828246759706048862" data-rel="author"></div>
                </div>
            </div>

            <div data-position="fixed" data-role="footer">
                <h4><a href="#home">Back to homepage</a></h4>
            </div><!-- /footer -->
        </div>

        <script src="assets/js/home.js" ></script>
        <!--Google maps API-->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4wcYndpXCDGPxRRm5r5yhIJOfoyE8Fi8&callback=initMap"></script>
        <!--Google plus API-->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!--Twitter API-->
        <script async defer src="https://platform.twitter.com/widgets.js"></script>
        <!--Facebook API-->
        <script defer src="https://connect.facebook.net/en_IRL/sdk.js#xfbml=1&version=v2.5" ></script>
    </body>
</html>
