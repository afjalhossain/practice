<?php

	function service_cmb2_metabox(){
		$service = new_cmb2_box(array(
			'title' => 'Service Metabox',
			'id'  => 'service-metabox',
			'object_types' => array('service')
		));
 		
 		$service-> add_field(array(
			'name' => 'Service Metabox',
			'id'  => 'service-icon',
			'type' => 'text'
		));

	}
	add_action('cmb2_admin_init', 'service_cmb2_metabox');




?>