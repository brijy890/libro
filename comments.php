              <div class="pt-5 mt-5">
                <h3 class="mb-5"><?php echo get_comments_number(); ?> Comments</h3>
                <ul class="comment-list">

				<?php
				//Get only the approved comments 
				$args = array(
				'status' => 'approve'
				);

				// The comment Query
				$comments_query = new WP_Comment_Query;
				$comments = $comments_query->query( $args );
				//print_r($comments); die;

				// Comment Loop
				if ( $comments ) {foreach ( $comments as $comment ) { ?>
					<li class="comment">
                    <div class="vcard bio">
                      <?php echo get_avatar( $comment, 32 ); ?>
                    </div>
                    <div class="comment-body">
                      <h3><?php comment_author(); ?></h3>
                      <div class="meta"><?php comment_date('F y, j g:i a'); ?></div>
                      <p><?php echo $comment->comment_content; ?></p>
                     <!--  <p><a href="#" class="reply">Reply</a></p> -->
                    </div>
                  </li>
				<?php }
				} else {
				echo 'No comments found.';
				}
				?>
                </ul>
                <!-- END comment-list -->

                <div class="comment-form-wrap pt-5">
                  <h3 class="mb-5">Leave a comment</h3>
                  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="bg-light p-4">
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" name="author" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                     <input type="hidden" name="comment_post_ID" value="2" id="comment_post_ID">
            		 <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>

                  </form>
                </div>
              </div>