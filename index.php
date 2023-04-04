<?php get_header(); ?>
<!-- top page -->
<section class="w-full relative flex-nowrap overflow-hidden">
    <div
      class="sidebar flex items-center justify-center absolute z-50 bg-white h-screen"
    >
      <div class="title">
        <img
          class="site-title"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/JIA.png"
          alt="萩森じあ"/>
      </div>
      <div class="text-primary mt-16">OFFICIAL&emsp;SITE</div>
    </div>
    <img class="water-droplets" />
    <div class="main-content w-full h-screen">
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/top1.jpg" />
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/top2.jpg" />
    <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/top3.jpg" />
    </div>
  </section>
<?php get_footer(); ?>
