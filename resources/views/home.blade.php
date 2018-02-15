<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


    <style type="text/css">
        #mymap {
            height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);
        }
    </style>




</head>


<body >
<div class="container">

<div class="row">
<div id="mymap" class="col-md-12" >

</div>
    <div class="row">
        <div class="col-md-10 col-md-offset-2 alert alert-success" role="alert">
            <h4> <strong>CLICK ON THE MARKER AND RESERVE YOUR PLACE FOR EVENTS</strong></h4>
        </div>
    </div>
</div>
<div class="row">
<div id="bookplace" class="col-md-2">

</div>
</div>

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
            name: value.name,
            click: function(e) {


            },
            infoWindow: {

                details:'askdasjdkasjdkasd',
                content: '<p>EVENT </p>' +
                '<a href="{{route('hallmaps.show','print_r(value.name)' )}}" class="btn btn-flat btn-primary">' +
                value.name +
                '<p>BOOK YOUR PLACE</p></a>'
            }
        });
    });



</script>


</body>
</html>
