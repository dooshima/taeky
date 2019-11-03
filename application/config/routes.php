<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['post'] = 'post/index';
$route['log'] = 'user/log';
$route['change'] = 'user/change_password';

$route['home'] = 'cms/view';
$route['reset'] = 'user/reset';
$route['resetting'] = 'user/change_password';

$route['change'] = 'user/change';
$route['email'] = 'email/index';

$route['sign'] = 'user/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
//$route['sign'] = 'register';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
                                                                                