<?php
defined('BASEPATH') || exit('No direct script access allowed');

$route['penggunaanair/(:any)'] = 'PenggunaanAir/$1';
$route['penggunaanair'] = 'PenggunaanAir';
$route['login'] = 'auth';
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
