<?php get_header(); ?>
<?php get_template_part('template-parts/header-nav-pc'); ?>

<main>
  <!-- main visual -->
  <div class="hts-mv">
    <img class="hts-mv__icon_left" src="<?php echo get_template_directory_uri(); ?>/img/mv-icon-left.png">
    <img class="hts-mv__logo" src="<?php echo get_template_directory_uri(); ?>/img/mv-logo.png">
    <img class="hts-mv__icon_right" src="<?php echo get_template_directory_uri(); ?>/img/mv-icon-right.png">
  </div>

  <!-- corporation -->
  <section class="hts-corporation">
    <div class="hts-title">
      <p>Corporation</p>
      <h2 id="#corporation">会社概要</h2>
    </div>
    <div class="hts-corporation__image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/technology-marketing.png">
    </div>
    <p>私たちは、テクノロジーとマーケティングの力でさらなる価値提供をミッションとしています。<br>
       サービスを提供するクライアントと享受するユーザーの双方向に<br>
       本質を見極めた価値の提供を行うことで、より良い社会の実現を目指しています。</p>
  </section>

  <!-- service -->
  <section class="hts-service">
    <div class="hts-title">
      <p>Service</p>
      <h2 id="#service">サービス</h2>
    </div>
    <div class="hts-service__wrap">
      <div class="hts-service__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/web-development.png">
        <p class="hts-service__item_title">サービス開発</p>
        <ul class="hts-service__item_list">
          <li>ランディングページ</li>
          <li>コーポレートサイト</li>
          <li>ECサイト</li>
          <li>プロダクトサイト</li>
          <li>etc...</li>
        </ul>
      </div>
      <div class="hts-service__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/marketing.png">
        <p class="hts-service__item_title">マーケティング</p>
        <ul class="hts-service__item_list">
          <li>コンテンツマーケティングの各種コンサルティング</li>
          <li>WEB広告プランニング、運用</li>
          <li>SEOコンサルティング</li>
          <li>etc...</li>
        </ul>
      </div>
      <div class="hts-service__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/creative.png">
        <p class="hts-service__item_title">クリエイティブ</p>
        <ul class="hts-service__item_list">
          <li>WEBバナーデザイン</li>
          <li>ロゴデザイン</li>
          <li>コピーライティング</li>
          <li>PR動画作成</li>
          <li>etc...</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- works -->
  <section class="hts-works">
    <div class="hts-title">
      <p>Works</p>
      <h2 id="#works">制作実績</h2>
    </div>
    <div>
      <?php $args = array(
        'numberposts' => 3,
        'post_type' => 'works'
      );
      $works = get_posts($args);
      if($works):
        foreach($works as $work):
          global $work;
          setup_postdata( $work );
          $id = get_the_id();
          $url = get_post_meta($id, 'wurks_url', true);
      ?>

      <a href="<?php echo $url ?>">
        <p class="hts-works__title"><?php the_title(); ?></p>
        <img src="<?php the_post_thumbnail_url('medium'); ?>">
        <p class="hts-works__url"><?php echo $url ?></p>
      </a>

      <?php endforeach; ?>
      <?php else : //記事が無い場合 ?>
      <p>制作実績はありません。</p>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット ?>
    </div>
  </section>

  <!-- blog -->
  <section class="hts-blog">
    <div class="hts-title">
      <p>Blog</p>
      <h2 id="#blog">記事メディア</h2>
    </div>
  </section>

  <!-- contact -->
  <section class="hts-contact">
    <div class="hts-title">
      <p>Contact</p>
      <h2 id="#contact">お問い合わせ</h2>
    </div>
  </section>
<main>
<?php get_footer(); ?>
