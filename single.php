<?php get_header(); ?>

<div class="container">
    <main>
      <div class="wrapper">
      <?php 
        if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <h2 class="section-title"><?php the_title(); ?></h2>
      <div class="content">
        <div class="thumbnail">
        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="#">
        </div>
        <?php the_content(); ?>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      </div>

    </main>
  </div>


<?php get_footer(); ?>