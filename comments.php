<div class="pt-5 mt-5">
  <?php if ( have_comments() ) : ?><h3 class="mb-5"><?php echo get_comments_number(); ?> Comments</h3><?php endif;?>
  <ul class="comment-list">
    <?php wp_list_comments(); ?> 
  </ul>
  <!-- END comment-list -->

  <div class="comment-form-wrap pt-5">
    <?php comment_form(); ?>
  </div>
</div>