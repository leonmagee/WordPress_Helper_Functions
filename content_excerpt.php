<?php
/**
 * Content Excerpt
 *
 * @param $content
 * @param $length
 * @param string $suffix
 *
 * @return string
 */
function content_excerpt( $content, $length, $suffix = '...' ) {

	$string = substr( $content, 0, $length );

	$exploded = explode( ' ', $string );

	array_pop( $exploded );

	$implode = implode( ' ', $exploded );

	$final = $implode . $suffix;

	return $final;
}
