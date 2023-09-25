<?php get_header(); ?>
  <div class="container">
  <main>
  <div class="hero">
  <img class="fade-in" src="<?php echo
    esc_url(get_theme_file_uri('img/top.jpg'));
    ?>" alt="ヒーローエリア">
        <div class="hero-text">
          ホームページ制作、動画編集、イラスト作成などのサービスを請け負っております。お問い合わせはtwitterまで
        </div>
      </div>
      <section class="intro wrapper">
        <h2 class="section-title">自分のホームベースを持つ</h2>
        <p class="fade-in">SNS時代が到来し、誰しもが自分の意見、制作物をSNSを通じて公開することができます。しかしながらイーロンマスクのtwitter買収後の改革などをみれば分かる通り、体制が変わると一瞬にして規約が変更され<span>SNSのアカウントは簡単に停止、凍結</span>してしまい、特に匿名で運用している方は一瞬で名もなき人になってしまいます。SNSを複数持ち、リスクを分散させる方法もありますが、おすすめは<span>自分独自のドメインを持ち、自分自身のサイトを開設することです。</span>我々はそのサポートをできれば幸いと思っております</p>   
      </section>
      <section id="about" class="wrapper">
        <h2 class="section-title">私について</h2>
        <div class="about-me">
          <div class="picture">
            <img src="<?php echo 
    esc_url(get_theme_file_uri('img/profimage.png'));
    ?>" alt="#">
          </div>
          <div class="prof">
            <h3 class="name">鈴木マン</h3>
            <div class="activity">
            複数のミニサイトを解説し、月間10万PV達成。個人向けのサイト制作を中心に活動しています。だれでも気軽に個人サイトをモットーに、を目指しております。
            </div>
          </div>
        </div>
      </section>
      <section id="product" class="wrapper">
        <h2 class="section-title">サービス</h2>
        <ul>
          <li class="fade-in">
            <a href="<?php echo esc_url(home_url('/homepage')); ?>"><img src="<?php echo
    esc_url(get_theme_file_uri('img/code.jpg'));
    ?>" alt=""></a>
            ホームページ作成
          </li>
          <li class="fade-in">
            <a href="<?php echo esc_url(home_url('/video')); ?>"><img src="<?php echo
    esc_url(get_theme_file_uri('img/video.jpg'));
    ?>" alt="#"></a>
            動画編集
          </li>
          <li class="fade-in">
            <a href="<?php echo esc_url(home_url('/illust')); ?>"><img src="<?php echo
    esc_url(get_theme_file_uri('img/illust.jpg'));
    ?>" alt="<?php echo esc_url(home_url('/video')); ?>"></a>
            イラスト制作
          </li>
        </ul>
      </section>
      <section id="must-read" class="wrapper">
        <h2 class="section-title">必読記事</h2>
        <div class="must-read-article">
          <article class="fade-in">
            <a href="<?php echo esc_url(home_url('/must-read')); ?>">
              <img src="<?php echo
    esc_url(get_theme_file_uri('img/video.jpg'));
    ?>" alt="#">
            <h3 class="text">ご依頼について(まずお読みください)</h3>
            </a>
          </article>
          <article class="fade-in">
            <a href="<?php echo esc_url(home_url('/wordpress')); ?>">
              <img src="<?php echo
    esc_url(get_theme_file_uri('img/WordPress.png'));
    ?>" alt="#">
            <h3 class="text">wordpressの使い方</h3>
            </a>
          </article>
          <article class="fade-in">
            <a href="<?php echo esc_url(home_url('/coconala')); ?>">
              <img src="<?php echo
    esc_url(get_theme_file_uri('img/video.jpg'));
    ?>" alt="#">
            <h3 class="text">coconalaの使い方</h3>
            </a>
          </article>
        </div>
      </section>
      <section id="blog" class="wrapper">
        <h2 class="section-title">ブログ</h2>
        <div class="blog-article">

          <?php 
          $args = array (
            'post_type' => 'post',
            'posts_per_page' => 3,
          );
          $posts = get_posts($args);
          ?>

          <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <?php $cat = get_the_category();
          $catname = $cat[0] -> cat_name; ?>

          <article class="fade-in">
            <a href="<?php echo esc_url(get_the_permalink()); ?>">
              <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="#">
            <h3 class="text"><?php the_title(); ?></h3>
            </a>
            <div class="meta">
              <div class="category">
                <?php echo $catname; ?>
                </div>
            </div>
          </article>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </section>
    
  </main>
  </div>

  <?php get_footer(); ?>