<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<?php

class EasyOnTheEyes extends Theme
{

	public function action_init_theme()
	{
		/*
		// Apply Format::autop() to comment content...
		Format::apply( 'autop', 'comment_content_out' );
		// Creates an excerpt option. echo $post->content_excerpt;
		Format::apply( 'autop', 'post_content_excerpt' );
		Format::apply_with_hook_params( 'more', 'post_content_excerpt', 'more',60, 1 );
		// Format the calendar like date for home, entry.single and entry.multiple templates
		Format::apply( 'format_date', 'post_pubdate_out','<span class="calyear">{Y}</span><br><span class="calday">{j}</span><br><span  class="calmonth">{F}</span>' );
		*/

		// Only uses the <!--more--> tag, with the 'more' as the link to full post
		Format::apply_with_hook_params( 'more', 'post_content_out', 'more &rarr;' );

		Format::apply('nice_date', 'post_pubdate_out', 'F jS, Y' );

		// Apply Format::autop() to comment content...
		Format::apply( 'autop', 'comment_content_out' );
	}

	public function action_form_publish( $form, $post)
	{
		$settings = $form->publish_controls->append('fieldset', 'themeSettings', 'Theme Settings');

		$settings->append('text', 'factor', 'null:null', 'Page Title Scaling Factor', 'tabcontrol_text');
		$settings->factor->value = $post->info->factor;
	}

	public function action_publish_post( $post, $form )
	{
		$post->info->factor = $form->factor->value;
	}

	public function action_form_comment( $form ) {

		//move the textarea before the name
		$form->move_before( $form->cf_content, $form->cf_commenter );
		$form->cf_content->caption = 'Add your appreciated thoughts:';

		$form->cf_commenter->caption = 'Your displayed name: <span class="required">*</span>';
		$form->cf_email->caption = 	'Your undisclosed email: <span class="required">*</span>';
		$form->cf_url->caption = 'Your public website:';
		//add a disclaimer/message
		$form->append('static','cf_disclaimer', '<div class="formcontrol" id="cf_disclaimer"><em><small><span class="required">* Required information</span></small></em></div>');
		$form->move_before( $form->cf_disclaimer, $form->cf_submit );

		// reset the tabindexes
		$form->cf_commenter->tabindex = 0;
		$form->cf_email->tabindex = 0;
		$form->cf_url->tabindex = 0;
		$form->cf_content->tabindex = 0;
		$form->cf_submit->tabindex = 0;
	}
}

?>
