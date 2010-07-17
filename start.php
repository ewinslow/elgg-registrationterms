<?php
/*******************************************************************************
 * registrationterms
 *
 * @author Administrator
 ******************************************************************************/

	function registrationterms_init()
	{
		global $CONFIG;

		//put the terms agreement at the very end
		extend_view('register/extend', 'registrationterms/register', 1000);
		
		//block user registration if they don't check the box
		register_plugin_hook('action', 'register', 'registrationterms_register_hook');
	}
	
	function registrationterms_register_hook()
	{
		if (get_input('agreetoterms',false) != 'true') {
			register_error(elgg_echo('agreetoterms:required'));
			forward($_SERVER['HTTP_REFERER']);
		}
	}
	
	register_elgg_event_handler('init', 'system', 'registrationterms_init');
?>