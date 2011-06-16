<?php

function registrationterms_init() {
	//put the terms agreement at the very end
	elgg_extend_view('register/extend', 'registrationterms/register', 1000);

	//block user registration if they don't check the box
	elgg_register_plugin_hook_handler('action', 'register', 'registrationterms_register_hook');
}

function registrationterms_register_hook() {
	if (get_input('agreetoterms', false) != 'true') {
		register_error(elgg_echo('registrationterms:required'));
		forward(REFERER);
	}
}

elgg_register_event_handler('init', 'system', 'registrationterms_init');
