<?php 
if ( ! defined( 'JM_TC_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

?>
<div class="wrap" style="max-width:1024px;">
<h2><i class="dashicons dashicons-twitter" style="font-size:2em; margin-right:1em; color:#292F33;"></i> <?php echo esc_html( get_admin_page_title() ); ?></h2>

<?php $admin = new JM_TC_Admin(); ?>


	<?php
	
	function robots_options(){
	
		$plugin_options = array(
			'id'         => 'jm_tc',
			'show_on'    => array( 'key' => 'options-page', 'value' => array( 'jm_tc_robots', ), ),
			'show_names' => true,
			'fields'     => array(
			
				array(
				'type' => 'title',
				'name' => __( 'Robots.txt', 'jm-tc' ),
				'id'   => 'robots_txt_title', // Not used but needed for plugin
				'desc' => __('Important !', 'jm-tc'),
				),

				array(
				'name' 		=> __( 'Twitter\'s bot', 'jm-tc' ),
				'desc' 		=> __('Add required rules in robots.txt', 'jm-tc'),
				'id'   		=> 'twitterCardRobotsTxt',
				'type' 		=> 'select',
				'options'	 => array(
				'yes' 			=> __( 'Yes', 'jm-tc' ),
				'no' 			=> __( 'No', 'jm-tc' ),
				)
				),
			)
			);			
			
		return $plugin_options;
	}
	?>
	
	<?php cmb_metabox_form( robots_options(), $admin->key() ); ?>
</div>


