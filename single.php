<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<?php $theme->display( 'header' ); ?>

<div id="header">
	<div id="topNavigation">
		&larr; <a href="<?php Site::out_url( 'habari'); ?>" title="Back Home">Home</a>
	</div>
	<h1 id="pageTitle">
		<?php echo $post->title_out; ?></h1>
</div>
<div class="posts">
	<div class="postContent content">
		<?php echo $post->content_out; ?>
	</div>
	<div class="postDate">
		<?php echo $post->pubdate_out; ?>
	</div>
	<div class="empty">&nbsp;</div>
	<div class="comments" id="comments">

		<?php
		if( !$post->info->comments_disabled || $post->comments->approved->count > 0 ) {

			if( !$post->info->comments_disabled ) {
				$post->comment_form()->out();
			}
			else
				echo('<p><em>Adding new comments has been disabled.</em><p>');
			?>

			<span class="commentsTitle">
				Comments <!-- (<?php echo $post->comments->approved->count; ?>) -->
			</span>

			<?php
			if( $post->comments->approved->count == 0)
				echo('<p><em>No comments yet</em></p>');

			foreach ( $post->comments->approved as $comment ) { ?>
				<div class="comment" id="comment-<?php echo $comment->id; ?>">
					<?php echo $comment->content_out; ?>

					<span class="commentAuthor">
						<?php if($comment->url != '')
							echo '<a href="'.$comment->url_out.'" target="_blank">'.$comment->name_out.'</a>';
						else
							echo $comment->name_out; ?>
					</span>

					<?php
					$timeDiff = time() - $comment->date->int;
					$commentDate = 'A few seconds ago';
					if( $timeDiff > 60)
						$commentDate = floor( $timeDiff / 60 ).' minutes ago';
					if( $timeDiff > 3600) // 1 hour
						$commentDate = '1 hour ago';
					if( $timeDiff > 7200) // 2 hours
						$commentDate = floor( $timeDiff / 60 / 60 ).' hours ago';
					if( $timeDiff > 21600) // 6 hours
						$commentDate = $comment->date->get('F jS, Y - H:i'); ?>
					<span class="commentDate"><?php echo $commentDate; ?></span>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
</div>
<?php if(isset($post->info->factor)) {?>
	<script type="text/javascript">
	var factor = <?php echo $post->info->factor; ?>;
	</script>
<?php } ?>

<?php $theme->display ( 'footer' ); ?>
