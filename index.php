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
    </head>
    <body>
        <!-- Début de la première page -->
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
                <p>Voir la page interne appelée </p>
            </div><!-- /content -->

            <div data-role="footer">
                <h4>Pied de page</h4>
            </div><!-- /footer -->
        </div><!-- /page -->

        <!-- Début de la seconde page -->
        <div data-role="page" id="blog">
            <div data-role="header">
                <h1>Blog</h1>
            </div><!-- /header -->

            <div data-role="content">
                <p>Here is the content of the blog</p>
            </div><!-- /content -->

            <div data-role="footer">
                <h4><a href="#home">Retour vers foo</a></h4>
            </div><!-- /footer -->
        </div><!-- /page -->

        <div data-role="page" id="flickr" >
            <div data-role="header">
                <h1>Flickr</h1>
            </div><!-- /header -->

            <div data-role="content">
                <p>Here are the pictures of flickr</p>
            </div><!-- /content -->

            <div data-role="footer">
                <h4><a href="#home">Back to homepage</a></h4>
            </div><!-- /footer -->
        </div>
    </body>
</html>
