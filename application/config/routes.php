<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'Pages/login';
$route['logout'] = 'Pages/logout';

$route['add'] = 'Pages/add';
$route['edit/(:any)'] = 'Pages/edit/$1';
$route['delete'] = 'Pages/delete';

$route['search'] = 'Pages/search';

$route['default_controller'] = 'Pages/view';
$route['(:any)'] = 'Pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
