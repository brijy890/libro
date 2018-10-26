<?php get_header(); ?>
    <div id="colorlib-page">
      <header>
      	<div class="container-fluid">
	        <div class="row no-gutters">
	          <div class="col-md-12">
	            <div class="colorlib-navbar-brand">
	              <a class="colorlib-logo" href="index.html">Libro</a>
	            </div>
	            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
	          </div>
	        </div>
        </div>
      </header>

      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">
      		<div class="home-slider owl-carousel js-fullheight">
		        <div class="slider-item js-fullheight" style="background-image: url('wp-content/themes/libro/images/bg_1.jpg');">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="cat"><span>Fashion</span></p>
		                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Popular Lifestyle with Fashion &amp; Modeling</h1>
		              </div>
		            </div>
		          </div>
		        </div>

		        <div class="slider-item js-fullheight" style="background-image: url('wp-content/themes/libro/images/bg_2.jpg');">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="cat"><span>Model</span></p>
		                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Canadian Girl make your world go round</h1>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
      	</div>
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
                        <div><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></div>
                      </div>
                      <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <p><?php the_content(); ?></p>
                    </div>
                  </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
      		</div>
<!--       		<div class="row mt-5">
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
      	</div><!-- end: page-container-->
      </section>
<?php get_footer(); ?>