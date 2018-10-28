<?php get_header(); ?>
<div class="page-container float-right">
  <div class="row">
    <div class="col-md-12">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
          <h2 class="mb-3"><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
          <p>
            <img src="<?php echo $featured_img_url; ?>" alt="" class="img-fluid">
          </p>
        <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        <?php $post_tags = get_the_tags(); ?>
        <?php if ( $post_tags ) : ?>
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <?php foreach( $post_tags as $tag ) : ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag-cloud-link"><?php echo $tag->name; ?></a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <div class="about-author d-flex pt-5">
          <?php if($avatar = get_avatar(get_the_author_meta('ID'))): ?>
            <div class="bio align-self-md-center mr-4">
              <?php echo $avatar; ?>
            </div>
            <?php else: ?>
              <div class="bio align-self-md-center mr-4">
                <img src="<?php bloginfo('template_url'); ?>/images/no-image-default.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
            <?php endif; ?>
            <div class="desc align-self-md-center">
              <h3>About <?php the_author(); ?></h3>
              <p><?php the_author_meta('description'); ?></p>
            </div>
          </div>

          <hr>
          <?php comments_template(); ?>
        </div> <!-- .col-md-12 -->
      </div>
    </div><!-- end: page-container-->
  </section>
  <?php get_footer();?>