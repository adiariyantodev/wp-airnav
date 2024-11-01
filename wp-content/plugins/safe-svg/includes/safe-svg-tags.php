<?php
/**
 * Safe SVG allowed tags
 *
 * @package safe-svg
 */

namespace SafeSvg\SafeSvgTags;

/**
 * SVG Allowed Tags class.
 */
class safe_svg_tags extends \enshrined\svgSanitize\data\AllowedTags {

	/**
	 * Returns an array of tags
	 *
	 * @return array
	 */
	public static function getTags() {

		/**
		 * var  array Tags that are allowed.
		 */
		return apply_filters( 'svg_allowed_tags', parent::getTags() );
	}
}
