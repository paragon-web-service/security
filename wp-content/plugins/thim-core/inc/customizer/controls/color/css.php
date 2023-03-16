<?php
namespace ThimPress\Customizer\CSS;

use ThimPress\Customizer\Modules\CSS\Output;

class Color extends Output {

	protected function process_output( $output, $value ) {
		$output = wp_parse_args(
			$output,
			array(
				'media_query' => 'global',
				'element'     => '',
				'property'    => 'color',
				'prefix'      => '',
				'suffix'      => '',
			)
		);

		if ( ! is_array( $value ) ) {
			$this->styles[ $output['media_query'] ][ $output['element'] ][ $output['property'] ] = $output['prefix'] . $value . $output['suffix'];
			return;
		}

		$alpha_enabled = false;

		if ( isset( $value['r'] ) || isset( $value['g'] ) || isset( $value['b'] ) ) {
				$color_mode    = isset( $value['a'] ) ? 'rgba' : 'rgb';
				$alpha_enabled = 'rgba' === $color_mode ? true : $alpha_enabled;

				$pos_1 = $value['r'];
				$pos_2 = $value['g'];
				$pos_3 = $value['b'];
				$pos_4 = 'rgba' === $color_mode ? $value['a'] : 1;
		} elseif ( isset( $value['h'] ) || isset( $value['s'] ) ) {
			$pos_1 = $value['h'];

			if ( isset( $value['l'] ) ) {
				$color_mode = isset( $value['a'] ) ? 'hsla' : 'hsl';
				$pos_2      = is_numeric( $value['l'] ) ? $value['l'] . '%' : $value['l'];
			} elseif ( isset( $value['v'] ) ) {
				$color_mode = isset( $value['a'] ) ? 'hvla' : 'hvl';
				$pos_2      = is_numeric( $value['v'] ) ? $value['v'] . '%' : $value['v'];
			}

			$alpha_enabled = 'hsla' === $color_mode || 'hsva' === $color_mode ? true : $alpha_enabled;

			$pos_3 = is_numeric( $value ) ? $value['s'] . '%' : $value['s'];
			$pos_4 = $alpha_enabled ? $value['a'] : 1;
		}

		if ( $alpha_enabled ) {
			$formatted_value = $color_mode . '(' . $pos_1 . ', ' . $pos_2 . ', ' . $pos_3 . ', ' . $pos_4 . ')';
		} else {
			$formatted_value = $color_mode . '(' . $pos_1 . ', ' . $pos_2 . ', ' . $pos_3 . ')';
		}

		$this->styles[ $output['media_query'] ][ $output['element'] ][ $output['property'] ] = $output['prefix'] . $formatted_value . $output['suffix'];
	}
}
