<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include("include/css.php"); ?>
        <?php include("include/scripts.php"); ?>
        <style>
            #map_canvas {
                width: 450px;
                height: 400px;
            }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script>
            function initialize() {
                var map_canvas = document.getElementById('map_canvas');
                var map_options = {
                    center: new google.maps.LatLng(-34.073422, 18.837605),
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(map_canvas, map_options)
            }
            google.maps.event.addDomListener(window, 'load', initialize);

        </script>
    </head>
    <body>
        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div id="content">
                <div class="contentinner">
                    <p>&nbsp;</p>
                    <div class="left" style="width:388px;">
                        <div style="margin-top:0px!important;padding-top:10px;">
                            <p><span style="font-size: 18px; color:#666;"><strong>Please contact:</strong></span></p>
                            <br/>
                            <p><span style="font-size: 16px;color:#666;"><strong>Saria Delport</strong></span></p>
                            <br/>
                            <p><span style="font-size: 16px;color:#666;"><strong>072 601 9736</strong></span></p>
                        </div>
                        <p>&nbsp;</p>
                        <p class="txtlt">
                            <strong>Physical Address:</strong>Plein Street, Somerset West<br>
                            <strong>Postal Address:</strong> Plein Street, Somerset West<br>
                            <strong>Postal Code:</strong> 7130<br />
                            <br>
                            <strong>Telephone:</strong> +27(0)726019736<br>
                            <strong>Fax:</strong>  +27(0)865748572<br>
                            <strong>Email:</strong> &#105;&#110;&#102;&#111;&#64;&#99;&#97;&#114;&#105;&#110;&#103;&#104;&#97;&#110;&#100;&#115;&#110;&#117;&#114;&#115;&#105;&#110;&#103;&#46;&#99;&#111;&#46;&#122;&#97;<br>
                            <br>
                            <strong>Latitude:</strong> -34.073422<br>
                            <strong>Longitude:</strong> 18.837605<br></p>		</div>

                    <div id="map_canvas" class="right"></div>
                    <div style="clear:both;"></div>


                </div>
                <div class="contentfooterbar">
                    Disabled Home Care | Elderly Home Care | Post-Operative Home Care
                </div>
                <?php include("include/footer.php"); ?>
            </div>
    </body>
</html>
