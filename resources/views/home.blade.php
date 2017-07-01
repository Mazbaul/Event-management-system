<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

    <style type="text/css">
        #mymap {
            border:1px solid red;
            width: 800px;
            height: 500px;
        }
    </style>




</head>


<body >
<div id="mymap" >

</div>
<script type="text/javascript">

    var locations = <?php print_r(json_encode($event)) ?>;

    var mymap = new GMaps({
        el: '#mymap',
        lat: 23.6850,
        lng: 90.3563,
        zoom:6
    });

    $.each( locations, function( index, value ){
        mymap.addMarker({
            lat: value.lat,
            lng: value.lng,
            title: value.location,
            click: function(e) {
                alert('This is '+value.location+'');
            },
            infoWindow: {
                content: '<a href="#"><p>HTML Content</p></a>'
            }
        });
    });

</script>


</body>
</html>
