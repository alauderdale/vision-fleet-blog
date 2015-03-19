<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>





<div class="content wrapper main-wrapper">
<!--hero part-->
  <div class="home_hero">
    <div class="extra-padding">
      <div class="grid">
        <div class="unit half">
            <h1 class="main jobs-padding align-left">Clean vehicles are the future of fleets.</h1>
            <h2 class="sub-main jobs-padding align-left ">Vision Fleet makes it possible.</h1>
            <p class="green-cta jobs-padding align-left"><a class="green-button" href="contact.html">Contact us</a></p>
          <div class="unit half">&nbsp;
          </div>
        </div>
      </div> 
    </div>    
  </div>

  <div style="clear:both;"></div>

  <section id="products">
    <div class="grid">
      <div class="unit one-third">
        <a href="vision-fleet-capital.html">
        <div class="vf_capital_home">
          <h3 class="section-titles-w left-right-box align-center">Vision Fleet Capital</h3>
          <p class="body-copy-w left-right-box align-center">Fixed-rate, long-term AFV financing.</p>
        </div>
        </a>
      </div>
    
      <div class="unit one-third">
        <a href="vision-fleet-iq.html">
        <div class="vf_iq_home">
          <h3 class="section-titles-w left-right-box align-center">Vision Fleet iQ</h3>
          <p class="body-copy-w left-right-box align-center">Analytics for data-driven AFV decision makers.</p>
        </div>
      </a>
      </div>

      <div class="unit one-third">
        <a href="vision-fleet-assist.html">
        <div class="vf_assist_home">
          <h3 class="section-titles-w left-right-box align-center">Vision Fleet Assist</h3>
          <p class="body-copy-w left-right-box align-center">Your AFV partner in the field.</p>
        </div>
      </a>
      </div>
    </div>
  </section>

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
    <h3 class="section-titles-b align-center ">Like cartoons? Have AFV goals?</h3>
             <p class="body-copy-b align-center left-right-padding">Well, then you should meet Larry.</p>
     <p class="line-cta-g align-center"><a class="fb-video fancybox.iframe line-button-g" href="http://player.vimeo.com/video/109723777?autoplay=1">Watch Video</a></p>
      </div>
    </div>
    <div class="unit half">
      <div class="video_hero">
      </div>
      
     
</div>
    
    
    </div>
</section>





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
        <p class="align-center line-cta"><a class="line-button" href="projects.html">Learn More</a></p>
    </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>
