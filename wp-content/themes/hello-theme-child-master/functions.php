<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );


function fetch_data_from_api() {
	$data = file_get_contents("https://jsonplaceholder.typicode.com/posts");
	$posts = json_decode($data);

	if ($posts !== null) {
		$output = '<table border="1">';
		$output .= '<tr><th>User ID</th><th>ID</th><th>Title</th><th>Body</th></tr>';

		foreach ($posts as $post) {
			$output .= '<tr>';
			$output .= '<td>' . htmlspecialchars($post->userId) . '</td>';
			$output .= '<td>' . htmlspecialchars($post->id) . '</td>';
			$output .= '<td>' . htmlspecialchars($post->title) . '</td>';
			$output .= '<td>' . htmlspecialchars($post->body) . '</td>';
			$output .= '</tr>';
		}

		$output .= '</table>';
	} else {
		$output = 'Failed to fetch data.';
	}

	return $output;
}

function display_data_table($content) {
	if (is_page(79)) {
		$data_table = fetch_data_from_api();
		$content .= $data_table;
	}

	return $content;
}

add_filter("the_content", "display_data_table");