<?php get_header(); ?>
      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">
      		<div class="home-slider owl-carousel js-fullheight">
		        <div class="slider-item js-fullheight" style="background-image: url('<?php bloginfo('template_url'); ?>/images/bg_1.jpg');">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span>Blog</span></p>
		                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog Single</h1>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
      	</div><!-- end:image -->

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
              <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">Life</a>
                  <a href="#" class="tag-cloud-link">Sport</a>
                  <a href="#" class="tag-cloud-link">Tech</a>
                  <a href="#" class="tag-cloud-link">Travel</a>
                </div>
              </div>
              
              <div class="about-author d-flex pt-5">
                 <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                  <div class="bio align-self-md-center mr-4">
                    <img src="<?php echo $avatar; ?>" alt="Image placeholder" class="img-fluid mb-4">
                  </div>
                  <?php else: ?>
                    <div class="bio align-self-md-center mr-4">
                    <img src="<?php bloginfo('template_url'); ?>/images/no-image-default.jpg" alt="Image placeholder" class="img-fluid mb-4">
                  </div>
                <?php endif; ?>
                <div class="desc align-self-md-center">
                  <h3>About The Author</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
              </div>

              <hr>
              <?php comments_template(); ?>
            </div> <!-- .col-md-12 -->
          </div>
      	</div><!-- end: page-container-->
      </section>
<?php get_footer();?>