   <!DOCTYPE html>
<?php 
$args = array(
    'post_type' => 'attachment',
    'posts_per_page' =>25,
);
$attachments = get_posts($args);

$args = array(
    'post_type' => 'attachment',
    'posts_per_page' =>25,
    'author' => 2
);
$slides = get_posts($args);
?>

<?php 
$rooms = new WP_Query(array(
    'post_type' => 'post',
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
         <!--Divider section-->
               <?php 
                  $random = rand(0, count($attachments));
                  $img =  wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),"full");
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
                           <h1 class="uppercase mb-0 text-white "><?=get_the_title() ?></h1>
                           <span class=" text-white  "><?=bloginfo('description') ?></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!--End row-->
            </div>
            <!--End container-->        
            <div class="poly-slider"></div>
         </section>
         <!--End divider section-->
         <!--Reservation section-->
         <section id="reservation" class="main pattern">
            <div class="container">
               <div class="row justify-content-around align-items-center">
                     <?php 
                        $my_postid = get_the_ID();//This is page id or post id
                        $content_post = get_post($my_postid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                        echo $content;
                      ?>
                     <h4 class="alt-font mb-5 uppercase"><?=bloginfo('description')?></h4>

                  <a href="#contact" class="btn btn-primary scroll">Contact us</a>
                  
               </div>
               <!--end of row-->
            </div>

         </section>
         <!--End reservation section-->
         <!--Offer section-->
         <section id="offer" class="main bg-light">
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
                                 <a href="<?=$rooms->get_the_permalink()?>"><div 
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
                                 </div></a>
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

