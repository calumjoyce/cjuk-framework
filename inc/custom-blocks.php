<?php
/**
 * Create custom blocks here.
 * @return array
 */
function YD_definedBlocks() {
	$blocks   = [];
	$blocks[] = [
		'name'     => 'hero',
		'title'    => 'Hero',
		'keywords' => [],
		'mode'     => 'edit',
		'category' => 'intros',
		'supports' => [ 'mode' => false, 'align' => false ]
    ];
	$blocks[] = [
		'name'     => 'work-blocks',
		'title'    => 'Work blocks',
		'keywords' => [],
		'mode'     => 'edit',
		'category' => 'intros',
		'supports' => [ 'mode' => false, 'align' => false ]
    ];
	return $blocks;
}

/**
 * Loop through defined blocks from YD_definedBlocks and register them.
 */
function YD_registerBlocks() {
	foreach ( YD_definedBlocks() as $block ) {
		$block['render_template'] = sprintf('template-parts/blocks/%s.php', $block['name']);
		$block['example'] = [
			'attributes' => [
				'mode' => 'preview',
				'data' => ['is_example' => true],
			]
		];
		acf_register_block_type( $block );
	}
}

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'YD_registerBlocks' );
}


/**
 * @param $allowed_block_types
 *
 * @return array
 */
function YD_limitBlocks( $allowed_block_types ) {
	$allowed = [];
	foreach ( YD_definedBlocks() as $block ) {
		$allowed[] = 'acf/' . $block['name'];
	}

	return $allowed;
}

add_filter( 'allowed_block_types', 'YD_limitBlocks' );
