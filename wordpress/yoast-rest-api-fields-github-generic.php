<?php
/**
 * Plugin Name: Yoast REST API Fields
 * Description: Custom REST endpoint for updating Yoast SEO fields.
 * Version: 3.0
 * Author: Andreas Olsen
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('rest_api_init', function () {

	// Customize the namespace and endpoint path for your WordPress setup.
	register_rest_route('your-namespace/v1', '/yoast', [
		'methods'  => 'POST',
		'callback' => 'your_namespace_update_yoast',
		'permission_callback' => function () {
			return current_user_can('edit_posts');
		}
	]);

});

function your_namespace_update_yoast(WP_REST_Request $request) {

	$post_id = intval($request->get_param('post_id'));

	if (!$post_id) {
		return new WP_Error(
			'invalid_post',
			'Missing post_id',
			['status' => 400]
		);
	}

	if ($request->has_param('title')) {
		update_post_meta(
			$post_id,
			'_yoast_wpseo_title',
			sanitize_text_field($request['title'])
		);
	}

	if ($request->has_param('description')) {
		update_post_meta(
			$post_id,
			'_yoast_wpseo_metadesc',
			sanitize_textarea_field($request['description'])
		);
	}

	if ($request->has_param('focus_keyword')) {
		update_post_meta(
			$post_id,
			'_yoast_wpseo_focuskw',
			sanitize_text_field($request['focus_keyword'])
		);
	}

	return [
		'success' => true,
		'post_id' => $post_id
	];
}