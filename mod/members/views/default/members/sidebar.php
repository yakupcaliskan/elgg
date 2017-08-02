<?php
/**
 * Members sidebar
 */

// Tag search
$params = array(
	'method' => 'get',
	'action' => 'members/search',
	'disable_security' => true,
);

$body = elgg_view_form('members/search', $params);

echo elgg_view_module('aside', elgg_echo('üyeler:arama'), $body);
