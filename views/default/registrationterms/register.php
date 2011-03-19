<?php
/**
 *
 */

$label = elgg_echo('registrationterms:agree', array(elgg_get_site_url() . 'expages/read/Terms'));

$input = elgg_view('input/checkbox', array(
	'name' => 'agreetoterms',
	'value' => 'true',
));
?>
<div>
	<label><?php echo "$input $label"; ?></label>
</div>