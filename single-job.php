<?php get_header(); ?>

	




			<div class="content wrapper main-wrapper">
			  <!--hero part-->
			  <div class="page_hero" style="background:url('<?php the_field('header_background_image');?>') no-repeat scroll center center / cover #333;">
			    <div class="extra-padding-inner">
			      <div class="grid">
			        <div class="unit whole">
			          <h1 class="main" style="text-transform:uppercase;">
			            CARREERS
			          </h1>
			        </div>      
			      </div> 
			  </div>    
			</div>



      <div class="extra-padding-page">


      <section>
         <div class="grid align-left">
           <div class="unit whole">
            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'carreers' ) ) ); ?>" class="main-links align-left jobs-padding">
              Back to Jobs
            </a>
            <h3 class="section-titles-b align-left jobs-padding">
              <?php the_title();?>
            </h3>
          </div>
        </div>
      </section>


<?php while ( have_posts() ) : the_post(); ?>

<section>

        <div class="grid align-center">
          <div class="unit golden-small">
            <h5 class="sub-sub-titles align-left jobs-padding">Summary</h5>
            <?php the_field('summary');?>
          </div>

          <div class="unit golden-large">
           <h5 class="sub-sub-titles align-left jobs-padding">What You’ll Do</h5>
           <?php the_field('what_youll_do');?>
        </div>

          <div class="unit golden-large">
        </div>

          <div class="unit golden-large">
           <h5 class="sub-sub-titles align-left jobs-padding">What You Need to Have</h5>
           <?php the_field('need_to_have');?>
        </div>

          <div class="unit golden-large">
        </div>

                  <div class="unit golden-large">
          <p class="green-cta"><a class="green-button" href="mailto:jobs@visionfleet.us">APPLY TO THIS JOB</a></p>
          <span style="color:#a6cc4a;">reference code 010</span>
  </div>


      </div>
    </section>



    <section>
      <div class="grid align-center">
        <div class="unit golden-small">
          <h5 class="sub-sub-titles align-left jobs-padding">Perks</h5>
          <?php the_field('perks');?>
            <br/>

            <h5 class="sub-sub-titles align-left jobs-padding">Compensation</h5>
            <?php the_field('compensation');?>   
          </div>

      </div>


</section>      

        

		<?php endwhile; // end of the loop. ?>

  </div>




<?php get_footer(); ?>