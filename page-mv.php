<?php get_header(); ?>
<!-- mv page -->

<?php

$query = new WP_Query(
  [
      'post_type' => 'mv_post',
      'posts_per_page' => -1,
  ]
);

?>
<style>
  .openbtn{
    background-color:rgba(255,255,255,0);
  }
  .mv-img{
    background-img:url()
  }
</style>
<section class="music-video">

  <?php if ( $query->have_posts() ) : ?>
  <ul class="mv-list-wrapper">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <li class="mv-list">
      <div class="mv-item">
      <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
        
        <a class="aspect-video" href="<?php echo CFS()->get('youtube_url'); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
         <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="mv-img">
        </a>
      </div>
       <?php else: /* 登録されていなかったら */ ?>
        <iframe width="560" height="315" class="lazyload" data-src="<?php echo CFS()->get('youtube_url'); ?>?modestbranding=1&mute=1&?playsinline=1&rel=0" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen>
        </iframe>
        <div class="youtube-icon"></div>
          <?php endif; ?>
      </div>
      <p class="mv-title">
        <?php echo get_the_title(); ?>
      </p>
    </li>
    <?php endwhile; ?>
  </ul>
  <?php endif; ?>

</section>
<?php get_footer(); ?>