<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>


<div class="content wrapper main-wrapper">
<!--hero part-->
  <div class="home_hero" style="background: url('<?php the_field('header_background_image'); ?>') no-repeat scroll left top / cover #333;">
    <div class="extra-padding">
      <div class="grid">
        <div class="unit half">
            <h1 class="main jobs-padding align-left">
              <?php the_field('hero_title'); ?>
            </h1>
            <h2 class="sub-main jobs-padding align-left ">
              <?php the_field('hero_subtitle'); ?>
            </h1>
            <p class="green-cta jobs-padding align-left"><a class="green-button" href="<?php echo esc_url( get_permalink( get_page_by_title( 'contact' ) ) ); ?>">Contact us</a></p>
          <div class="unit half">&nbsp;
          </div>
        </div>
      </div> 
    </div>    
  </div>

  <div style="clear:both;"></div>

  <section id="products">
    <div class="grid">

<?php endwhile; // end of the loop. ?>

<?php $productLoop = new WP_Query( array( 'post_type' => 'product') ); ?>
      <?php while ( $productLoop->have_posts() ) : $productLoop->the_post(); ?>


      <div class="unit one-third">
        <a href="<?php the_permalink(); ?>">
        <div class="vf_home" style="background: url('<?php the_field('thumbnail_image'); ?>') no-repeat scroll center center / cover <?php the_field('thumbnail_background_color'); ?>">
          <h3 class="section-titles-w left-right-box align-center">
            <?php the_title(); ?>
          </h3>
          <p class="body-copy-w left-right-box align-center">
            <?php the_field('thumbnail_subtitle'); ?>
          </p>
        </div>
        </a>
      </div>



<?php endwhile; // end of the loop. ?>


    </div>
  </section>

<?php while ( have_posts() ) : the_post(); ?>

<script>
$(document).ready(function() {
    
    $(".fancybox")
    .fancybox({
      padding : 0,
      helpers: {

          overlay: {
            locked: false,
        css : {
                'background' : 'rgba(194, 194, 194, 0.75)'
            }
              }
          }
        });
    
    $(".various").fancybox({
    maxWidth  : 800,
    maxHeight : 600,
    fitToView : false,
    width   : '70%',
    height    : '70%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });
    
  });
</script>

	
<section id="video">
    <div class="grid">
     
  
    <div class="unit half">
     <div class="extra-padding-video">
    <h3 class="section-titles-b align-center "><?php the_field('video_title'); ?></h3>
             <p class="body-copy-b align-center left-right-padding"><?php the_field('video_subtitle'); ?></p>
     <p class="line-cta-g align-center"><a class="fb-video fancybox.iframe line-button-g" href="<?php the_field('video_url'); ?>">Watch Video</a></p>
      </div>
    </div>
    <div class="unit half">
      <div class="video_hero">
      </div>
      
     
</div>
    
    
    </div>
</section>


<?php endwhile; // end of the loop. ?>


<section id="case_study">
  <div class="case_study_bg">
    <div class="grid">
      <div class="unit half">
        <img src="<?php bloginfo( 'template_url' ); ?>/images/case_study_pic.png">
    </div>
    
    <div class="unit half">
    <h5 class="sub-sub-titles-w align-center left-right-box">Case Study: </h5>
      <h2 class="case_study_title align-center left-right-box">Indianapolis</h2>
      <div class="white-line-under"></div>
        <p class="body-copy-w align-center left-right-box">425 Clean Vehicles. Dozens of use cases. Guaranteed savings.</p>
        <p class="align-center line-cta"><a class="line-button" href="<?php echo esc_url( get_permalink( get_page_by_title( 'projects' ) ) ); ?>">Learn More</a></p>
    </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>
