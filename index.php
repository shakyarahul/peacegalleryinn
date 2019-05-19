<!DOCTYPE html>
<?php 
$args = array(
    'post_type' => 'attachment',
);
$attachments = get_posts($args);
?>

<?php 
$rooms = new WP_Query(array(
    'post_type' => 'bb_room',
));
?>
<html lang="en">
<head>
      <!-- Metas -->
      <meta charset="utf-8">
      <title><?= bloginfo('title') ?> - <?= bloginfo('description') ?></title>
      <meta name="description" content="<?= bloginfo('description') ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css -->
      <link href="<?= get_template_directory_uri() ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="<?= get_template_directory_uri() ?>/css/base.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="<?= get_template_directory_uri() ?>/css/main.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="<?= get_template_directory_uri() ?>/css/flexslider.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="<?= get_template_directory_uri() ?>/css/magnific-popup.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="<?= get_template_directory_uri() ?>/css/fonts.css" rel="stylesheet" type="text/css"  media="all" />
      <link href="<?= get_template_directory_uri() ?>/style.css" rel="stylesheet" type="text/css" media="all"/>
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet"> 
   </head>
   <body>
      <!-- Preloader -->
      <div class="loader">
         <!-- Preloader inner -->
         <div class="loader-inner">
            <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
               <circle class="spinner" cx="50" cy="50" r="21" fill="#212932" stroke-width="4"/>
            </svg>
         </div>
         <!-- End preloader inner -->
      </div>
      <!-- End preloader-->
      <!--Wrapper-->
      <div class="wrapper">
         <!--Hero section-->
         <section class="hero">
         
         	<!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
            <h2 class="indent">Hero</h2>
            <!--Main slider-->
            <div class="main-slider slider flexslider">
               <ul class="slides">
                  <li>
                     <div class="background-img overlay zoom">
                        <img src="<?=get_template_directory_uri() ?>/img/1.jpg" alt="">
                     </div>
                  </li>
                  <li>
                     <div class="background-img overlay zoom">
                        <img src="img/2.jpg" alt="">
                     </div>
                  </li>
               </ul>
            </div>
            <!--End main slider-->
            <!--Header-->
            <header class="header default">
               <div class=" left-part">
                  <a class="logo scroll" href="#wrapper">
                  <img src="<?= get_option('logo_section_option_four'); ?>" alt="">
                  </a>
               </div>
               <div class="right-part">
                  <nav class="main-nav">
                     <div class="toggle-mobile-but">
                        <a href="#" class="mobile-but" >
                           <div class="lines"></div>
                        </a>
                     </div>
                     <ul class="main-menu list-inline">
                        <li><a class="scroll list-inline-item" href="#about">about</a></li>
                        <li><a class="scroll list-inline-item" href="#menu">menu</a></li>
                        <li><a class="scroll list-inline-item" href="#offer">Offer</a></li>
                        <li><a class="scroll list-inline-item" href="#location">Location</a></li>
                        <li><a class="scroll list-inline-item" href="#reservation">Reservation</a></li>
                        <li><a class="scroll list-inline-item" href="#gallery">Gallery</a></li>
                        <li><a class="scroll list-inline-item" href="#contact">Contact</a></li>
                     </ul>
                  </nav>
               </div>
            </header>
            <!--End header-->
            <div class="inner-hero">
               <!--Container-->
               <div class="container hero-content">
                  <!--Row-->
                  <div class="row">
                     <div class="col-sm-12 text-center">
                        <h1 class="large uppercase mb-0">Coffee Drinks &amp; Pastry</h1>
                        <h5 class="uppercase mb-0 alt-font h6">making coffee drinks &amp; pastry since 1998</h5>
                     </div>
                  </div>
                  <!--End row-->
               </div>
               <!--End container-->
            </div>
            <div class="poly-slider"></div>
         </section>
         <!--End hero section-->
         <!--About section-->
         <section id="about" class="main md-top bg-light">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9 ">
                     <div class="block-content text-center gap-one-bottom-md">
                        <div class="block-title ">
                           <img class="waves" src="<?= get_template_directory_uri() ?>img/waves-dark.png" alt="">
                           <h1 class="uppercase mb-0">the <?= bloginfo('title') ?></h1>
                           <span class=" beige"><?= bloginfo('description') ?></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center text-center">
                  <div class="col-12 col-lg-9 ">
                     <div class="card-gallery image-gallery mb-5">
                        <?php
                           $aboutGallery = get_option('gallery_section_option_three');
                           $aboutGallery = explode("|", $aboutGallery);
                           foreach($aboutGallery as $item){
                        ?>
                           <img class="" alt="" src="<?=$item ?>" >
                        <?php }?>
                     </div>
                  </div>
                  <div class="col-12 col-md-8 col-lg-6">
                     <div class="block-about">
                        <p class="quote mb-5 "><?=get_option('about_section_option_one') ?></p>
                        <img class="sing mb-0" src="<?=get_option('signature_section_option_two') ?>" alt="">
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </section>
         <!--End about section-->
         <!--Divider section-->
               <?php 
                  $random = rand(0, count($attachments));
                  $img =  wp_get_attachment_image_src($attachments[$random]->ID, 'full');
               ?>
         <section id="menu" class="overlay divider bg-light">
            <div class="background-img" >
               <img  src="<?=$img[0] ?>" style="opacity: 0.2" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9 ">
                     <div class="block-content text-center front-p">
                        <div class="block-title ">
                           <img class="waves" src="<?= get_template_directory_uri() ?>/img/waves-light.png" alt="">
                           <h1 class="uppercase mb-0 text-white ">Discover menu</h1>
                           <span class=" text-white  "> Delicious Drinks and Pastry</span>
                        </div>
                        <p class="lead text-white mt-4 mb-0">Coffee lovers love the aroma of coffee especially in the morning <br>because coffee has a way to brighten moods.</p>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->        
         </section>
         <!--End divider section-->
         <!--Menu section-->
         <section   class="menu main pattern bg-light">
            	<div class="background-img grain-img" >
               <img class=""  src="<?=get_template_directory_uri() ?>/img/16.png" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-11 col-lg-10 ">
                     <div class="block-content  gap-one-top-lg">
                        <ul class="block-tabs">
                           <li class="active ">Dedicated</li>
                           <li class="">Shared</li>
                           <li class="">On Demand</li>
                        </ul>
                        <ul class="block-tab">
                           <!--Menu list-->
                           <li class="active block-list mt-5">
                              <div class="row">
                                 <?php 
                                       $dedicatedFacilities = new WP_Query(array(
                                           'post_type' => 'bb_facilities',
                                           'tax_query' => array(
                                               array (
                                                   'taxonomy' => 'cate',
                                                   'field' => 'slug',
                                                   'terms' => 'personal',
                                               )
                                             ),
                                       ));
                                       if($dedicatedFacilities->have_posts()){
                                          while($dedicatedFacilities->have_posts()){
                                             $dedicatedFacilities->the_post();
                                    ?>
                                 <div class="col-sm-6">
                                    <div class="block-content mb-4 pb-4">
                                       <h5 class="uppercase"><?php echo get_the_title(); ?> </h5>
                                       <p class="mb-1 mt-1"><?= get_the_content() ?></p>
                                       <span class="dots"></span>
                                    </div>
                                 </div>
                                    <?php 
                                          }
                                       }
                                    ?>
                              </div>
                           </li>
                           <!--Menu list-->
                           <li class=" block-list mt-5">
                                 <div class="row">
                                 <?php 
                                       $dedicatedFacilities = new WP_Query(array(
                                           'post_type' => 'bb_facilities',
                                           'tax_query' => array(
                                               array (
                                                   'taxonomy' => 'cate',
                                                   'field' => 'slug',
                                                   'terms' => 'shared',
                                               )
                                             ),
                                       ));
                                       if($dedicatedFacilities->have_posts()){
                                          while($dedicatedFacilities->have_posts()){
                                             $dedicatedFacilities->the_post();
                                    ?>
                                 <div class="col-sm-6">
                                    <div class="block-content mb-4 pb-4">
                                       <h5 class="uppercase"><?php echo get_the_title(); ?> </h5>
                                       <p class="mb-1 mt-1"><?= get_the_content() ?></p>
                                       <span class="dots"></span>
                                    </div>
                                 </div>
                                    <?php 
                                          }
                                       }
                                    ?>
                              </div>
                           </li>
                           <!--Menu list-->
                           <li class=" block-list mt-5">
                              <div class="row">
                                 <?php 
                                       $dedicatedFacilities = new WP_Query(array(
                                           'post_type' => 'bb_facilities',
                                           'tax_query' => array(
                                               array (
                                                   'taxonomy' => 'cate',
                                                   'field' => 'slug',
                                                   'terms' => 'ondemand',
                                               )
                                             ),
                                       ));
                                       if($dedicatedFacilities->have_posts()){
                                          while($dedicatedFacilities->have_posts()){
                                             $dedicatedFacilities->the_post();
                                    ?>
                                 <div class="col-sm-6">
                                    <div class="block-content mb-4 pb-4">
                                       <h5 class="uppercase"><?php echo get_the_title(); ?> </h5>
                                       <p class="mb-1 mt-1"><?= get_the_content() ?></p>
                                       <span class="dots"></span>
                                    </div>
                                 </div>
                                    <?php 
                                          }
                                       }
                                    ?>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->        
         </section>
         <!--End Menu section-->
         <!--Review section-->
         <section  class="overlay review gap-double-md">
            <div class="background-img" >
               <?php 
                  $random = rand(0, count($attachments));
                  $img =  wp_get_attachment_image_src($attachments[$random]->ID, 'full');
               ?>
               <img  src="<?= $img[0] ?>" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-md-end">
                  <div class="col-md-6 col-lg-5 col-xl-4">
                     <div class="block-content review-content text-center front-p">
                        <img  src="<?= get_template_directory_uri() ?>/img/grains.png" alt="">
                        <div class="review-slider flexslider">
                           <ul class="slides">
                              <li>
                                 <div class="block-review w-75 m-auto">
                                    <h4 class=" uppercase"></h4>
                                    <p>It’s an unlikely setting for an exquisite dining experience—served up by a couple straight out of a rom-com plot. </p>
                                    <ul class="block-star list-inline">
                                       <li class="list-inline-item"><i class="icon-star"></i></li>
                                       <li class="list-inline-item"><i class="icon-star"></i></li>
                                       <li class="list-inline-item"><i class="icon-star"></i></li>
                                       <li class="list-inline-item"><i class="icon-star"></i></li>
                                       <li class="list-inline-item"><i class="icon-star"></i></li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->        
         </section>
         <!--End review section-->
         <!--Offer section-->
         <section id="offer" class="main bg-light">
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-12 col-md-10 col-lg-9 ">
                     <div class="block-content text-center gap-one-bottom-md">
                        <div class="block-title ">
                           <img class="waves" src="<?= get_template_directory_uri() ?>/img/waves-dark.png" alt="">
                           <h1 class="uppercase mb-0">What we offer</h1>
                           <span class=" beige">Our facilities</span>
                        </div>
                        <p class="lead mb-0 mt-4">Coffee lovers love the aroma of coffee especially in the morning <br>because coffee has a way to brighten moods.</p>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-center">
                  <div class="col-sm-12 col-lg-12">
                     <div class="block-content text-center front-p">
                        <div class="offer-slider flexslider">
                           <ul class="slides">
                              <?php
                                 if($rooms->have_posts()){
                                    while($rooms->have_posts()){
                                       $rooms->the_post();
                                ?>
                              <li>
                                 <div 
                              <?php if (has_post_thumbnail( $rooms->ID ) ){ ?>
                                 <?php $image =  wp_get_attachment_image_src(get_post_thumbnail_id($rooms->ID),"full") ?>
                              style="background-image:url('<?php echo $image[0]; ?>');background-size: cover"
                           <?php } ?>
                              class="block-offer m-auto pt-5 pb-5\ text-white">
                                    <div style="background-color: rgba(0,0,0,0.3)" class="block-offer m-auto pt-5 pb-5">
                                       <ul class="block-icon list-inline">
                                          <li class="list-inline-item"><i class="flaticon-021-cookies "></i></li>
                                          <li class="list-inline-item"><i class="flaticon-009-muffin "></i></li>
                                          <li class="list-inline-item"><i class="flaticon-019-donut "></i></li>
                                       </ul>
                                       <h4 class=" uppercase"><?= get_the_title(); ?></h4>
                                       <p class=" m-auto"><?= get_the_excerpt() ?></p>
                                    </div>
                                 </div>
                              </li>
                             <?php
                                  }
                                 }
                              ?>
                              <!-- <li>
                                 <div class="block-offer  m-auto pt-5 pb-5">
                                    <ul class="block-icon list-inline">
                                       <li class="list-inline-item"><i class="flaticon-033-coffee-bag "></i></li>
                                       <li class="list-inline-item"><i class="flaticon-034-cappuccino "></i></li>
                                       <li class="list-inline-item"><i class="flaticon-026-coffee-machine "></i></li>
                                    </ul>
                                    <h4 class=" uppercase">Types of Coffee</h4>
                                    <p class=" m-auto">Another thing about coffee is the community. Coffee drinkers have something in common when we walk into a coffee shop. We are all anticipating for that ultimate cup as we stay in line for our names to be called. We already made up about coffee.</p>
                                 </div>
                              </li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->        
         </section>
         <!--End offer section-->
         <!--Locations section-->
         <section id="location" class="location overlay divider">
            <div class="background-img" >
               <?php 
                  $random = rand(0, count($attachments));
                  $img =  wp_get_attachment_image_src($attachments[$random]->ID, 'full');
               ?>
               <img  src="<?= $img[0] ?>" alt="">
            </div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <ul class="block-location  row front-p">
                      <?php
                              $addresses = get_option('address_section_option_seven');
                              $addresses = explode("|", $addresses);
                              foreach($addresses as $address){
                           ?>
                     <li class="col-lg-3 ">
                     <div class="block-flip">
                        <div class="block-flip-front">
                           <div class="block-inner-flip">
                              <div class="block-centred">
                                 <div class="block-content-inner">
                                    <h3 class="mb-3 uppercase"><?= bloginfo('title') ?></h3>
                                    <?=$address ?><br/>
                                    <span class=" link uppercase underline">More info</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="block-flip-back">
                           <div class="block-inner-flip">
                              <div class="block-centred">
                                 <div class="block-content-inner">
                                    <h3 class=" mb-3 uppercase"><?= bloginfo('title') ?></h3>
                                    <h6 class="alt-font uppercase "><?= bloginfo('description') ?></h6>
                                    <p class="mb-4">
                                       <?= get_option('openingclosing_section_option_six') ?>
                                    </p>
                                    <a href="#contact" target="_blank" class="link uppercase btn btn-primary scroll">Find Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                           <?php } ?>
               </ul>
            </div>
            <!--End container--> 
         </section>
         <!--End locations section-->
         <!--Reservation section-->
         <section id="reservation" class="main pattern">
            <div class="container">
               <div class="row justify-content-around align-items-center">
                  <div class="col-12 col-md-6 col-lg-5 text-center text-md-left ">
                     <h1 class="uppercase mb-4">make a reservation</h1>
                                          
                     <p class="lead">
                        In any event, CoffeeBen staff will be thrilled to welcome you! We are impatient to keep possible waiting periods as short as possible for you, 
                        Have a pleasant coffee experience !
                     </p>
                     
                     <h4 class="alt-font mb-5 uppercase">For group reservations over 10 people please contact us via mail or give us a call.</h4>

                  <a href="#contact" class="btn btn-primary scroll">Contact us</a>
                  </div>
                  <div class="col-8 col-md-6 col-lg-4">
                     <img alt="Image" src="<?=get_option('logo_section_option_four') ?>" class="img-fluid mb-0 box-shadow">
                     <img alt="Image" src="<?=get_option('signature_section_option_two') ?>" class="img-fluid mb-0 box-shadow">
                  </div>
               </div>
               <!--end of row-->
            </div>
         </section>
         <!--End reservation section-->
         <!--Gallery section-->
         <section id="gallery" class="gallery pt-2  bg-light">
         <!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
            <h2 class="indent">Gallery</h2>
            <div class="masonry-wrapper"><div class="masonry"><?php
            $i=0;
if ($attachments) {
    foreach ($attachments as $attachment) {
      $url = get_attachment_link($attachment->ID);// extraigo la _posturl del attachmnet      
        $img =  wp_get_attachment_image_src($attachment->ID, 'medium');
        //$img1 =  wp_get_attachment_image_src($attachment->ID, 'full');
        $title = get_the_title($attachment->post_parent);//extraigo titulo
            ?>
                        <div class="masonry-item">
                           <img src="<?= $img[0] ?>" alt="Dummy Image" class="masonry-content">
                       </div>
            <?php 
    }   
}
            ?>
                     </div></div>
         </section>
         <!--End gallery section-->
         <!--Contact section-->
         <section id="contact" class="contact gap-after large-space bg-dark">
            <div class="block-map ">
               <div id="map" class="map gap-before"></div>
            </div>
            <!--Container-->
            <div class="container block-contact">
               <!--Row-->
               <div class="row">
                  <div class="col-md-5  offset-md-7 offset-xs-7">
                     <h1 class="uppercase text-white mb-4">get in touch with us</h1>
                     <div class="block-info mb-30">
                        <p class="text-white lead mb-0">We are open from <?= get_option('openingclosing_section_option_six')?>
                           <?php
                              $addresses = get_option('address_section_option_seven');
                              $addresses = explode("|", $addresses);
                              foreach($addresses as $address){
                           ?>
                                 <br><br>
                           <?= $address;
                           } ?>
                           <br/>
                           <span><a href="<?= bloginfo('admin_email')?>"><?= bloginfo('admin_email')?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
            <div class="poly-contact"></div>
         </section>
         <!--End contact section-->
         <footer class="footer gap-one-top-sm gap-one-bottom-md ">
            <div class="poly-footer"></div>
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-around align-items-center">
                  <div class="col-12 col-md-6 col-lg-5 text-center ">
                     <div class="block-content logo">
                        <img class="mb-0" src="<?= get_option('logo_section_option_four'); ?>" title="<?=bloginfo('title') ?>" alt="<?=bloginfo('title') ?>">
                     </div>
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--End container-->
            <!--Container-->
            <div class="container">
               <!--Row-->
               <div class="row justify-content-between align-items-center mt-5">
                  <div class="col-md-4 text-md-left">
                     <small class="small"><span>&copy; <?= date('Y',strtotime("now")) ?> Mutation Media all rights reserved.</span> <br>
                     <span>Product of</span> mutationthemes.</small>
                  </div>
                  <div class="col-md-4 text-md-center">
                     <ul class="block-social list-inline mb-30">
                        <li class="list-inline-item"><a href="<?=get_option('facebook_section_option_eight')?>"><i class="icon-wechat"></i></a></li>
                        <li class="list-inline-item"><a href="<?=get_option('instagram_section_option_nine') ?>"><i class="icon-instagram"></i></a></li>
                        <li class="list-inline-item "><a class="scroll" href="<?=get_option('wechat_section_option_ten') ?>"><i class="icon-facebook"></i></a></li>
                     </ul>
                     <a class="scroll" href="<?=get_option('booking_section_option_eleven') ?>"><img src="<?= get_template_directory_uri()?>/img/ebc77706da3aae4aee7b05dadf182390f0d26d11.png" /></a>
                  </div>
                  <div class="col-md-4 text-md-right">
                     <small class="small text-left"><span>Font generated by</span> <a href="https://www.flaticon.com/">flaticon.com</a><br>
                     <span>Under </span><a href="http://creativecommons.org/licenses/by/3.0/">CC</a>: <a data-file="001-toast" href="https://www.flaticon.com/authors/smalllikeart">smalllikeart</a></small>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->
         </footer>
      </div>
      <!-- End wrapper-->
      <!--Javascript--> 
      <script src="<?= get_template_directory_uri() ?>/js/jquery-1.12.4.min.js" ></script>
      <script src="<?= get_template_directory_uri() ?>/js/jquery.flexslider-min.js" ></script>
      <script src="<?= get_template_directory_uri() ?>/js/smooth-scroll.js" ></script>
      <script src="<?= get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js" ></script>
      <script src="<?= get_template_directory_uri() ?>/js/masonry.min.js" ></script>
      <script src="<?= get_template_directory_uri() ?>/js/script.js" ></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbGQXiGt-6UAmOFFdSzYI-byeE7ewBuVM&amp;callback=initializeMap"></script>
      <!-- Google analytics -->
      <!-- End google analytics -->
   </body>

<!-- Mirrored from mutationmedia.net/COFFEEBEN/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Mar 2019 02:11:05 GMT -->
</html>

