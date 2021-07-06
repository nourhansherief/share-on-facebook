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
        <meta property="og:site_name" content="Vodafone Promo">
      <meta property="og:url"           content="<?php echo 'https://web.vodafone.com.eg/ar/home' ;?>" />
      <meta property="og:type"          content="website" />
       <meta property="og:title"         content="<?php echo (!empty($title_header)?$title_header:'I just voted to Amr Diab');?>" /> 
      <meta property="og:image"         content="<?php echo (!empty($image_header)?$image_header:'https://img.pngio.com/free-download-regular-polygon-shape-octadecagon-angle-round-png-round-png-260_260.jpg');?>" />
    <meta property="og:image:alt"    content="car picture"/>
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property="fb:app_id" content='838833720360017'>
   <?PHP  echo("<script>history.replaceState({},'','https://web.vodafone.com.eg/ar/home');</script>"); ?>
    </head>
    <body>
    </body>