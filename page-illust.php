<?php get_header(); ?>
<!-- illust page -->

<?php
  $count_front = $count_modal = 1;
  $query = new WP_Query(
    [
        'post_type' => 'illust_post',
        'posts_per_page' => -1,
        // 'orderby'=> 'ASC'
    ]
  );
?>
<style>
  .openbtn{
    background-color:rgba(255,255,255,0);
  }
</style>
<section class="works">
  <?php if ( $query->have_posts() ) : ?>
  <ul class="works-list">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <li class="js-open-modal works-item item<?php echo $count_front; ?>" data-slide-index="<?php echo $count_front; ?>">
      <a href="#modal-<?php echo sprintf('%02d', $count_front); ?>" class="modal-button">
        <article>
          <figure class="m-0">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="property-image mb-4 lazyload" />
            <figcaption class="hidden">
              <?php echo get_the_title(); ?>
            </figcaption>
          </figure>
        </article>
      </a>
    </li>
    <?php ++$count_front; endwhile; ?>
  </ul>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="modal-wrapper" id="modal-<?php echo sprintf('%02d', $count_modal); ?>">
    <a href="#!" class="modal-overlay"></a>
    <div class="modal-window">
      <div class="modal-content">
        <article class="relative w-full px-20">
          <?php if($count_modal > 1): ?>
          <a href="#modal-<?php echo sprintf('%02d', $count_modal - 1 ); ?>" class="arrow arrow-left"></a>
          <?php endif; ?>
          <img src="<?php echo get_the_post_thumbnail_url(); ?>"
            class="property-image property-detail-image  mb-4 lazeload" />
          <h3 class="works__title modal-title">
            <?php echo get_the_title(); ?>
          </h3>
          <?php if($query->post_count != $count_modal): ?>
          <a href="#modal-<?php echo sprintf('%02d', $count_modal + 1 ); ?>" class="arrow arrow-right"></a>
          <?php endif; ?>
        </article>
      </div>
      <a href="#!" class="modal-close"></a>
    </div>
  </div>
  <?php ++$count_modal; endwhile; ?>
  <?php endif; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>