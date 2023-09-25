<?php get_header(); ?>
<div class="container">
    <main>
      <div class="hero">
        <img class="fade-in" src="img/pickup5.jpg" alt="ヒーローエリア">
        <div class="hero-text">
          ホームページ制作、動画編集、イラスト作成などのサービスを請け負っております。お問い合わせはtwitterまで
        </div>
      </div>
      <h2 class="section-title">カテゴリー名</h2>
      <div class="category-article wrapper fade-in">
      <?php
      if(have_posts()): ?>

      <?php while(have_posts()): the_post(); ?>
        <article>
          <img src="img/pickup5.jpg" alt="#">
          <h3 class="text">ああああああああああああああああああああああああああああああああ</h3>  
          <div class="meta">カテゴリー名</div>    
        </article> 
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </main>
  </div>

<?php get_footer(); ?>