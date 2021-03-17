<div id="comments" class="p-comments">
	<?php if( have_comments() ): ?>
    <h3>コメント</h3>
    <ol class="p-comments__list">
      <?php wp_list_comments( 
				'avatar_size=80' 
			); ?>
    </ol>
			<?php
				if(get_comment_pages_count() > 1){
				echo '<div class="p-comments__pagenation">';
				paginate_comments_links();
				echo '</div>';
				}
				endif;
			?>
	<?php $args = array(
		'title_reply' => 'コメントする',
		'label_submit' => '送信'
	);
	comment_form( $args ); ?>
</div><!-- #comments -->
