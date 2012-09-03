<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php if ($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:500|Open+Sans:300italic,400italic,600italic,300,400,600|Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link href="<?php Site::out_url( 'theme' ); ?>/easyontheeyes.css" rel="stylesheet" type="text/css">
	<link href="<?php Site::out_url( 'theme' ); ?>/fancybox/jquery.fancybox.css?v=2.1.0" rel="stylesheet" type="text/css" media="screen">
	<?php $theme->header(); ?>
</head>
<body>
	<script type="text/javascript">
		var activateCommentsForm = false;
	</script>
	<?php if( Session::has_messages() ) { ?>
		<div id="message"><strong>There were problems submitting your <a href="#comments">comment</a>:</strong>
		<?php Session::messages_out(); ?>
		</div>
		<script type="text/javascript">
			activateCommentsForm = true;
		</script>
	<?php } ?>
