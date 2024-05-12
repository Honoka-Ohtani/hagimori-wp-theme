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

.openbtn {
  background-color: rgba(255, 255, 255, 0);
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
    <!-- <?php if ( $query->have_posts() ) : ?>
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
    <?php endif; ?> -->
    <div class="archivement">
      <h3>2020-2022</h3>
      <ul>
        <li>進研ゼミ中学講座『My style』『いち高合格BOOK』表紙、巻頭イラスト</li>
        <li>進研ゼミ小学講座、高校講座DMイラスト</li>
      </ul>
    </div>
    <div class="archivement">
      <h3>2020</h3>
      <ul class="archivement-wrap">
        <li class="archivement-list">株式会社トイズファクトリー　ミテイノハナシ『あの日、あの世界で』MVイラスト</li>
      </ul>
    </div>
    <div class=" archivement">
      <h3>2021</h3>
      <ul class="archivement-wrap">
        <li class="archivement-list">株式会社Chouette.天月 -あまつき-『Caffe latte』MVイラスト</li>
        <li class="archivement-list">児島株式会社　春夏制服販促ポスターイラスト</li>
        <li class="archivement-list">カバー株式会社　ホロライブ　角巻わため　『御伽の詩と永久なるミライ』MVイラスト</li>
      </ul>
    </div>
    <div class=" archivement">
      <h3>2022</h3>
      <ul class="archivement-wrap">
        <li class="archivement-list">角川メディアワークス文庫『永遠のあなたと、死ぬ私の 10の掟』装画</li>
        <li class="archivement-list">双葉社『ワカレ花』/けんご　装画</li>
        <li class="archivement-list">ホロライブ　角巻わため 『君色ハナミズキ』MVイラスト</li>
        <li class="archivement-list">プロジェクトセカイ Vivid BAD SQUAD X 鏡音レン『Flyer!』MVイラスト</li>
        <li class="archivement-list">ソニーミュージック　しまも『ミュージック』ジャケット、MVイラスト</li>
        <li class="archivement-list">雄之助『シュガーハイヴ』MVイラスト</li>
        <li class="archivement-list">Neo-Porte 水無瀬アクリルスタンド</li>
        <li class="archivement-list">Amber's『生馴れNight』MVイラスト</li>
        <li class="archivement-list">そらるミニアルバム「創空とメルヒェン賛歌」特典アクリルスタンド</li>
        <li class="archivement-list">株式会社Chouette.天月　『少女レイ』/みきとp 歌ってみた　MVイラスト</li>
        <li class="archivement-list">『シンデレラボーイ』/Saucy dog cover by 天月　MVイラスト</li>
      </ul>
    </div>
    <div class="archivement">
      <h3>2023</h3>
      <ul class="archivement-wrap">
        <li class="archivement-list">児島学生服　春夏学生服販促ポスターイラスト</li>
        <li class="archivement-list">株式会社 Colorful paletteプロジェクトセカイ イラストメイキングムービー</li>
        <li class="archivement-list">スターツ出版文庫『大嫌いな世界にさよならを』/音はつき　装画</li>
        <li class="archivement-list">スターツ出版文庫『さよなら、灰色の世界』/丸井とまと　装画</li>
        <li class="archivement-list">文芸社文庫 NEO『言ノ葉のツルギ』/佐木呉羽 装画</li>
        <li class="archivement-list">After the Rain 『アイスクリームコンプレックス』MVイラスト</li>
        <li class="archivement-list">KAMITSUBAKI STUDIO 狐子公式ファンアート</li>
        <li class="archivement-list">あらなるめい　アクリルスタンドイラスト</li>
        <li class="archivement-list">ホロライブクリエイターコンテスト2023応援イラスト</li>
        <li class="archivement-list">小学館　ガガガ文庫『いつか憧れたキャラクターは、現在使われておりません。』/詠井晴佳　装画、挿絵、口絵</li>
        <li class="archivement-list">ヒップランドミュージック　ユアネス『伝えたかったこと』アートワーク</li>
        <li class="archivement-list">ソニーミュージック　企画30秒のタイムスリップ『青い栞』/Galileo Galilei アートワーク</li>
        <li class="archivement-list">ヒップランドミュージック　ユアネス『伝えたかったこと』アートワーク</li>
        <li class="archivement-list">ユニバーサルミュージック　シイナナルミアイドルプロジェクト　オーディションHPイラスト</li>
        <li class="archivement-list">ヒップランドミュージック　ユアネス『伝えたかったこと』アートワーク</li>
        <li class="archivement-list">いれいす『Surges』/orangestar 歌ってみた　MVイラスト</li>
        <li class="archivement-list">講談社　青い鳥文庫『9時半までのシンデレラ』/宮下恵茉　装画</li>
        <li class="archivement-list">KADOKAWA 『塾で教わる中学三年分の総復習』/監修:弦巻桂　表紙イラスト</li>
        <li class="archivement-list">ヒップランドミュージック　ユアネス『伝えたかったこと』アートワーク</li>
        <li class="archivement-list">双葉社『好きです、死んでください』/中村あき　装画</li>
        <li class="archivement-list">株式会社Chouette.天月『月をくれ』MVイラスト</li>
        <li class="archivement-list">プラネタリウムLive サムネイルイラスト</li>
        <li class="archivement-list">『なんでもないよ』/マカロニえんぴつcover by天月　MVイラスト</li>
        <li class="archivement-list">『Subtitle』/Official髭男dism cover by天月　MVイラスト</li>
        <li class="archivement-list">ホロライブ　SorAZ 『ハジメノイッポ』MVイラスト</li>
        <li class="archivement-list">ナツノセ『アネモネと炭酸水』feat.tai MVイラスト</li>
        <li class="archivement-list">カバー株式会社　ホロスターズ　岸堂天真　岸堂天真メンバーシップ歌ってみたイラスト</li>
        <li class="archivement-list"> buzzG 『エンドロールには載らない君へ』</li>
        <li class="archivement-list">株式会社MWC めいちゃん　『流声』MVイラスト　</li>
        <li class="archivement-list">株式会社parasleep まふまふ『かわいくてごめん』/HoneyWorks 歌ってみたイラスト</li>
        <li class="archivement-list">雨宿り　『猫かぶり』MVイラスト</li>
        <li class="archivement-list">すとぷり　『シンデレラボーイ』/Saucy dog /莉犬　歌ってみたイラスト</li>
        <li class="archivement-list">ユニバーサルミュージック　『球体』/GOOD ON THE REEL MVイラスト</li>
        <li class="archivement-list">進研ゼミ中学講座　DM用イラスト</li>
        <li class="archivement-list">株式会社ライフデザインギフト キャリアサポートビライラスト</li>
        <li class="archivement-list">株式会社フライングドッグ　大渕野々花　ロゴデザイン</li>
      </ul>
      <div class=" archivement">
        <h3>2024</h3>
        <ul class="archivement-wrap">
          <li class="archivement-list">株式会社 Colorful paletteプロジェクトセカイ 「25時、ナイトコードで。」8th シングル　ジャケットイラスト</li>
          <li class="archivement-list">ピクシブ株式会社　Pastela キービジュアル</li>
          <li class="archivement-list">メディアワークス文庫『無謀の君へ、白紙の君より』/にのまえあきら　装画</li>
        </ul>
      </div>
    </div>


  </div>
  </div>
  <div class=" md:pt-40 pt-12 pb-60">
    <div class="text-center">
      <a href="<?php echo home_url('illust'); ?>" class="button1 mx-auto">
        <div class="button1__wrapper"></div>
        <div class="button1__box contact-btn">view&nbsp;more</div>
      </a>
    </div>
  </div>

</section>

<?php get_footer(); ?>