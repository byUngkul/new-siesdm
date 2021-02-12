<?php
defined('BASEPATH') || exit('No direct script access allowed');

$route['pajakabt/(:any)/(:num)'] = 'PajakAbt/$1/$2';
$route['pajakabt/(:any)'] = 'PajakAbt/$1';
$route['pajakabt'] = 'PajakAbt';
$route['penggunaanair/(:any)/(:num)'] = 'PenggunaanAir/$1/$2';
$route['penggunaanair/(:any)'] = 'PenggunaanAir/$1';
$route['penggunaanair'] = 'PenggunaanAir';
$route['logout'] = 'auth/logout';
$route['login'] = 'auth';
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
