<?php get_header(); ?>
<div class="page-container float-right">
  <div class="row">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="col-md-6">
          <div class="blog-entry ftco-animate">
            <?php if(has_post_thumbnail()) : ?>
              <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
              <a href="<?php the_permalink(); ?>" class="blog-image">
                <img src="<?php echo $featured_img_url; ?>" class="img-fluid" alt="">
              </a>
            <?php endif; ?>
            <div class="text py-4">
              <div class="meta">
                <div><a href="#"><?php the_time('F y, j g:i a'); ?></a></div>
                <div><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">By <?php the_author(); ?></a></div>
              </div>
              <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php else : ?>
        <p><?php echo __('No Posts Found'); ?></p>
      <?php endif; ?>
    </div>
    <?php if(have_posts()) : ?>
<!--     <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div> -->
    <?php endif; ?>
  </div><!-- end: page-container-->
</section>
<?php get_footer(); ?>