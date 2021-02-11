<?php
defined('BASEPATH') || exit('No direct script access allowed');

$route['penggunaanair/(:any)/(:num)'] = 'PenggunaanAir/$1/$2';
$route['penggunaanair/(:any)'] = 'PenggunaanAir/$1';
$route['penggunaanair'] = 'PenggunaanAir';
$route['logout'] = 'auth/logout';
$route['login'] = 'auth';
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
