<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'trangchu/index';
$route['trang-chu'] = 'trangchu/index';

$route['congvanden'] = 'congvanden/index';
$route['congvanden/(:num)'] = 'congvanden/index/$1';

$route['congvandi'] = 'congvandi/index';
$route['congvandi/(:num)'] = 'congvandi/index/$1';

$route['tin-tuc/(:num)'] = 'tintuc/index/$1';
$route['tin-tuc/(:any)'] = 'tintuc/detail';

$route['congvandi'] = 'congvandi/index';

$route['search?(:any)'] = 'search/index/$1';
$route['search?(:any)/(:num)'] = 'search/index/$1';

$route['timkiem?(:any)'] = 'timkiem/index/$1';
$route['timkiem?(:any)/(:num)'] = 'timkiem/index/$1';

$route['admin'] = 'admin/dashboard';
$route['admin/congvanden'] = 'admin/congvanden/index';
$route['admin/congvanden/(:num)'] = 'admin/congvanden/index/$1';

$route['admin/congvandi'] = 'admin/congvandi/index';
$route['admin/congvandi/(:num)'] = 'admin/congvandi/index/$1';

$route['admin/themtintuc'] ='admin/tintuc/insert';
$route['admin/tintuc'] ='admin/tintuc';

$route['vanthu'] = 'vanthu/dashboard';
$route['vanthu/search?(:any)'] = 'vanthu/search/index/$1';
$route['vanthu/search?(:any)/(:num)'] = 'vanthu/search/index/$1';

$route['vanthu/timkiem?(:any)'] = 'vanthu/timkiem/index/$1';
$route['vanthu/timkiem?(:any)/(:num)'] = 'vanthu/timkiem/index/$1';

$route['vanthu/congvanden'] = 'vanthu/congvanden/index';
$route['vanthu/congvanden/(:num)'] = 'vanthu/congvanden/index/$1';

$route['vanthu/congvandi'] = 'vanthu/congvandi/index';
$route['vanthu/congvandi/(:num)'] = 'vanthu/congvandi/index/$1';

$route['vanthu/tintuc'] ='vanthu/tintuc';

$route['translate_uri_dashes'] = FALSE;
