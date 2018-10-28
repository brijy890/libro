<div class="pt-5 mt-5">
  <h3 class="mb-5"><?php echo get_comments_number(); ?> Comments</h3>
  <ul class="comment-list">
    <?php wp_list_comments(); ?> 
  </ul>
  <!-- END comment-list -->

  <div class="comment-form-wrap pt-5">
    <?php comment_form(); ?>
  </div>
</div>