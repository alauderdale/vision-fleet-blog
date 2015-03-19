<?php
/**
 * @package boiler
 */
?>


<div class="content wrapper main-wrapper">
  <!--hero part-->
  <div class="page_hero" style="background:url('<?php the_field('header_background_image');?>') no-repeat scroll center center / cover #333;">
    <div class="extra-padding-inner">
      <div class="grid">
        <div class="unit whole">
          <h1 class="main" style="text-transform:uppercase;">
            <?php the_title(); ?>
          </h1>
          <h2 class="sub-main"><?php the_field('subtitle'); ?></h2>
        </div>      
      </div> 
  </div>    
</div>

