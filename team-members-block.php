<?php
/**
 * Plugin Name:       Team Members Block
 * Description:       Team members grid block.
 * Requires at least: 6.3
 * Requires PHP:      8.1
 * Version:           0.1.0
 * Author:            Cristian Raiber
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       team-members-block
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function blocks_course_team_members_block_init() {
	register_block_type_from_metadata( __DIR__ . '/build' );
}
add_action( 'init', 'blocks_course_team_members_block_init' );
