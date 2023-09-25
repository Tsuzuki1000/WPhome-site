<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo bloginfo('description'); ?>">
  <title><?php 
  echo bloginfo('name');
  ?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.mini.js"></script>
</head>
<body>
  <header id="header">
    <h1 class="site-title">
      <a href="/">
      <img src="<?php echo esc_url(get_theme_file_uri('img/icon.png')); ?>" alt="icon">
      </a>
    </h1>
    <nav id="navi">
      <ul class="nav-menu">
        <li><a href="/">ホーム</a></li>
        <li><a href="<?php echo 
        esc_url(get_theme_file_uri('/must-read'));
        ?>">ご依頼について</a></li>
        <li><a href="<?php echo 
        esc_url(get_theme_file_uri('/homepage'));
        ?>">ホームページ作成</a></li>
        <li><a href="https://coconala.com/users/3811861">coconala</a></li>
      </ul>
      <ul class="twitter">
        <li><a href="https://twitter.com/tomweakness">問い合わせ(twitter)</a></li>
      </ul>
    </nav>

    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div id="mask"></div>
    <?php wp_head();  ?>
  </header>