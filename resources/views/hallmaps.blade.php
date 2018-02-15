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








</head>


<body >
<div class="container">
  <div class="row">
      <div  class="col-md-4 col-md-offset-5" >
      <h2> EVENTS NAME  </h2>
      <h3> Events Time  </h3>
      <h3> EVENTS NAME  </h3>
      <h3> EVENTS NAME  </h3>
      </div>

  </div>

    <div class="row">
        <div  class="well col-md-4 col-md-offset-2" >
          <h4> VIP STAND  </h4>
          <?php $vip= $hallmap->vip; ?>
          @for($i =1; $i <= $vip; $i++)

                      <tr>

                          <td>  {{$i}}</td>


                      </tr>
          @endfor

        </div>
        <div  class="well col-md-4 col-md-offset-1" >
            <h4> General STAND  </h4>
            <?php $gn= $hallmap->general; ?>
            @for($i =1; $i <= $gn; $i++)

                        <tr>

                            <td>{{$i}}</td>


                        </tr>
            @endfor
        </div>
    </div>
    <div class="row">
        <div id="bookplace" class="col-md-2">

        </div>
    </div>

</div>
<script type="text/javascript">





</script>


</body>
</html>
