<?php
/*
KeyCAPTCHA plugin for WordPress
Version		2.5.1
Author		Mersane, Ltd
Author URI	https://www.keycaptcha.com
License		GNU GPL2
*/
/*
ATTENTION! Please do not edit this file if you do not have a network of sites (Multisite) based on WordPress.
*/
/*
Copyright (C) 2011-2013 Mersane, Ltd (www.keycaptcha.com). All rights reserved.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License,
version 2, as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

global $keycaptcha_multisite_settings;

$keycaptcha_multisite_settings = array	(
	'keycaptcha_site_private_key' => 'REPLACE_WITH_YOUR_PRIVATE_KEY',
	'keycaptcha_code' => <<<EOT

REPLACE_WITH_YOUR_KEYCAPTCHA_JS_CODE

EOT
,
	'keycaptcha_on_register' => 'true',
	'keycaptcha_on_login' => 'false',
	'keycaptcha_on_lostpwd' => 'true',
	'keycaptcha_on_cf7' => 'true',
	'keycaptcha_posts_cnt' => 0,
);

?>
