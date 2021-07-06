<head>
   <?php 
      $title_header="";
      $description_header="";
      $features_header="";
      $image_header="";
      if(isset($_GET['Details']))
    {

     $car_id=$_GET['Details'];
     $car_details= //get from database width $car_id;
     $title_header=$car_details['header'];
     $description_header=$car_details['description'];
     $image_header=$car_details['image'];

    }
    ?>
        <!-- You can use Open Graph tags to customize link previews.
        Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
      <meta property="og:url"           content="<?php echo 'http://motorcarmyanmar.com' . $_SERVER['REQUEST_URI'];?>" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="<?php echo (!empty($title_header)?$title_header:'Some Buy,Sell,Rent');?>" />

      <meta property="og:description"   content="<?php echo (!empty($description_header)?$description_header:'Car Sales,Car Rentals,Car Accessories Sales');?>" />
      <meta property="og:image"         content="<?php echo (!empty($image_header)?$image_header:'https://img.pngio.com/free-download-regular-polygon-shape-octadecagon-angle-round-png-round-png-260_260.jpg');?>" />
    <meta property="og:image:alt"    content="car picture"/>
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="400" />
    <meta property="fb:app_id" content='328716478755626'>
    </head>
    <body>
    </body>