<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<?php $theme->display( 'header' ); ?>

<div id="header">
	<h1 id="pageTitle">
		<?php Options::out( 'title' ) ?></h1>
</div>
<div class="posts">

<?php foreach ( $posts as $post ) { ?>

	<div class="homePost">
		<div class="homePostMeta">
			<h2>
				<a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>">
					<?php echo $post->title_out; ?></a></h2>
			<span class="homePostDate">
				<?php echo $post->pubdate_out; ?></span>
			<span class="homePostComments">
				<?php
					if( !$post->info->comments_disabled && $post->comments->approved->count > 0
						|| $post->comments->approved->count > 0 )
						echo $theme->comments_link($post,'%d Comments','%d Comment','%d Comments');
				?>
			</span>
			<span class="homePostLikes">
				&hearts; 3</span></div>
		<div class="homePostContent content">
			<?php echo $post->content_out; ?></div>
	</div>

<?php } ?>

</div>

<script type="text/javascript">
	var factor = 0.49;
</script>

<?php $theme->display ( 'footer' ); ?>
