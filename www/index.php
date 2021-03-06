<! DOCTYPE html>
<html>
<head>
    <title>Display</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.css">
    <script src="jquerymobile/jquery.js"></script>
    <script src="jquerymobile/jquery.mobile-1.4.5.js"></script>

    <link href="css/menu.css" rel="stylesheet">


     <!-- Load  Leaflet from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>


    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@2.2.4/dist/esri-leaflet.js"
    integrity="sha512-tyPum7h2h36X52O2gz+Pe8z/3l+Y9S1yEUscbVs5r5aEY5dFmP1WWRY/WLLElnFHa+k1JBQZSCDGwEAnm2IxAQ=="
    crossorigin=""></script>


     <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.13/dist/esri-leaflet-geocoder.css"
    integrity="sha512-v5YmWLm8KqAAmg5808pETiccEohtt8rPVMGQ1jA6jqkWVydV5Cuz3nJ9fQ7ittSxvuqsvI9RSGfVoKPaAJZ/AQ=="
    crossorigin="">
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.13/dist/esri-leaflet-geocoder.js"
    integrity="sha512-zdT4Pc2tIrc6uoYly2Wp8jh6EPEWaveqqD3sT0lf5yei19BC1WulGuh5CesB0ldBKZieKGD7Qyf/G0jdSe016A=="
    crossorigin=""></script>


</head>

<body>

    <!-- page 1 -->
    <div data-role="page" id="page1" data-theme="b">


        <div data-role ="panel" id="menu" data-display="overlay" data-position="left">
            <div data-role="controlgroup" data-corner="false">
                <a href="#" data-icon="home" data-role="button">Home</a>
                <a href="#page2" data-icon="location" data-role="button">Center</a>
                <a href="#page3" data-icon="user" data-role="button">Statistic</a>
                <a href="#" data-icon="phone" data-role="button">Friends</a>
                <a href="#" data-icon="info" data-role="button">Help</a>
            </div>
        </div>

        <div data-role="header" id="header">
            <a id="menu-button" data-icon="bars"  class="ui-btn-left" style="margin-top:10px;" href="#menu">Menu</a>
        </div>
        <div>
            <img id="carousel"/>
        </div>


        <div data-role="main" class="ui-content">
            <h3>Why?</h3>
            <ul>
                <li>More productive and creative</li>
                <li>Higher confidence</li>
                <li>Freedom from alcohol slavery</li>
                <li>Clear mind</li>
                <li>Less depression & less anger</li>
                <li>More healthy</li>
                <li>Get rid of bad habits</li>
            </ul>
        </div>


        <div data-role="footer">
            <h1>Alcohol_Addiction@Copyright</h1>
        </div>

    </div>
    <!-- page 1 end -->

     <!-- page 2 -->
    <div data-role="page" id="page2" data-theme="b">

        <div data-role ="panel" id="menu2" data-display="overlay" data-position="left">
            <div data-role="controlgroup">
                <a href="#page1" data-icon="home" data-role="button">Home</a>
                <a href="#" data-icon="location" data-role="button">Center</a>
                <a href="#page3" data-icon="user" data-role="button">Statistic</a>
                <a href="#" data-icon="phone" data-role="button">Friends</a>
                <a href="#" data-icon="info" data-role="button">Help</a>
            </div>
        </div>

        <div data-role="header" id="header">
            <a id="menu-button" data-icon="bars"  class="ui-btn-left" style="margin-top:10px;" href="#menu2">Menu</a>
        </div>



        <div data-role="main" class="ui-content">


            <?php $xml = simplexml_load_file('xml/geomap.xml'); ?>
            <select id="quake">
                <?php foreach($xml->children() as $hospital): ?>
                    <?php
                    $h_child = $hospital->children();
                    $text = $h_child->name;
                    ?>
                    <option value="<?php echo $text ?>">
                        <?php echo $text; ?>
                    </option>
                <?php endforeach; ?>
            </select><br/><br/><br/><br/><br/><br/>

            <div id="map_container">

            </div>


            <!-- <a href="#" id="SearchCenter" class="ui-btn"> Search Center</a>

            <div id="map" style="width:300px; height:300px;"></div> -->

        </div>


        <div data-role="footer">
            <h1>Alcohol_Addiction@Copyright</h1>
        </div>

    </div>
     <!-- page 2 end here -->

     <!-- page 3 -->
    <div data-role="page" id="page3" data-theme="b">

        <div data-role ="panel" id="menu3" data-display="overlay" data-position="left">
            <div data-role="controlgroup">
                <a href="#page1" data-icon="home" data-role="button">Home</a>
                <a href="#page2" data-icon="location" data-role="button">Center</a>
                <a href="#" data-icon="user" data-role="button">Statistic</a>
                <a href="#" data-icon="phone" data-role="button">Friends</a>
                <a href="#" data-icon="info" data-role="button">Help</a>
            </div>
        </div>

        <div data-role="header" id="header">
            <a id="menu-button" data-icon="bars"  class="ui-btn-left" style="margin-top:10px;" href="#menu3">Menu</a>
        </div>



        <div data-role="main" class="ui-content">
            page 3
        </div>


        <div data-role="footer">
            <h1>Alcohol_Addiction@Copyright</h1>
        </div>

    </div>

     <!-- page 3 end -->

    <script src="js/app.js"></script>
    <script src="js/map.js"></script>

</body>
</htm>
