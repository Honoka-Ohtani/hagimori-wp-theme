<?php get_header(); ?>
<!-- about page -->
<?php

$query = new WP_Query(
  [
      'post_type' => 'archivement_post',
      'posts_per_page' => -1,
  ]
);

?>
<style>
body::before {
  content: "";
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
  width: 100vw;
  height: 100vh;
  background-repeat: no-repeat;
  background-position: 30% 100%;
  background-image: url("<?php echo get_template_directory_uri(); ?>/assets//img/about-top.jpg");
  /* background: inherit; 
    filter: blur(5px);  */
  /* filter: blur(10px); */
  background-size: cover;
}
.openbtn{
    background-color:rgba(255,255,255,0);
  }

@media screen and (max-width: 768px) {
  .bg-main-image_sp {
    display: block;
    top: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100vh;
    background-repeat: no-repeat;
    background-position: 50% 100%;
    background-image: url("../img/about-top-sp.png");
    background-size: cover;
  }
  
}
</style>
<section class="top-img-wrapper">
  <div class="section-top-img">
    <h2 class="jia">萩森じあ</h2>
    <img class="name" src="<?php echo get_template_directory_uri(); ?>/assets/img/JIA-yoko.png" />
    <h3 class="en-name">JIA-HAGIMORI</h3>
  </div>
</section>
<section class="introduction">
  <div class="introduction-wrapper">
    <p class="introduction-description">
      兵庫県出身のイラストレーター。<br />
      繊細なタッチを得意とし、透明感や憂いを帯びた”学生”をよく描く。
    </p>
    <p class="introduction-description">
      クライアントワークでは書籍表紙やMV（ミュージックビデオ）用のイラスト、<br />
      アニメーション・キャラクターデザインなど様々なジャンルを手掛けている。<br />

      その他、展示会やアートイベントへの出展など幅広い活動を行っている。
    </p>
  </div>
  <div class="wrap">
    <h2 class="clip transparent-heading ml-8 md:ml-28 md:mb-12 md:pt-60 pt-12  pb-20 text-left text-6xl md:text-7xl">
      ARCHIVEMENT
    </h2>
    <?php if ( $query->have_posts() ) : ?>
    <div class="archive-list">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <dl class="archive-item">
        <dt class="archive-item__dt">
          ■ <?php echo get_the_title(); ?>
        </dt>
        <dd class="archive-item__dd">
          <?php echo get_the_content(); ?>
        </dd>
      </dl>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
  </div>
  <div class="md:pt-40 pt-12 pb-60">
    <div class="text-center">
    <a href="<?php echo home_url('illust'); ?>" class="button1 mx-auto">
        <div class="button1__wrapper"></div>
        <div class="button1__box contact-btn">view&nbsp;more</div>
      </a>
    </div>
  </div>

</section>

<?php get_footer(); ?>