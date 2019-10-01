<section class="hero">
  <div class="hero-media">
    <div class="hero-img">
      <?php responsive_img(get_field('hero_media_image', 'option')['ID'], 'full'); ?>
    </div>
    <div class="hero-video">
      <video src="<?php the_field('hero_media_video', 'option'); ?>" loop muted playsinline></video>
    </div>
  </div>
  <div class="hero-inner">
    <article class="hero-article">
      <div class="hero-title">
        <?php $words = explode(' ', get_field('hero_title', 'option')); ?>
        <h1>
          <?php foreach($words as $word): ?>
            <span><?php echo $word; ?></span>
          <?php endforeach; ?>
        </h1>
      </div>
      <div class="hero-text">
        <?php the_field('hero_text', 'option'); ?>
      </div>
      <div class="hero-cta">
        <a href="#" class="btn">View Portfolio</a>
      </div>
    </article>
  </div>
</section>
