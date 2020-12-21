<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin']                                 = 'admin/Auth/index';

$route['admin/dashboard']                       = 'admin/dashboard/index';

// new ummusabri
$route['foundation']    = 'Home/index/foundation';
$route['foundation/galery']    = 'Galery/index/foundation';
$route['foundation/galery/(:num)']    = 'Galery/index/foundation/$1';
$route['foundation/profile']    = 'Profile/detail/foundation';
$route['foundation/news']    = 'Berita/index/foundation';
$route['foundation/news/(:num)']    = 'Berita/index/foundation/$1';
$route['foundation/news/detail/(:any)']    = 'Berita/detail/foundation/$1';

$route['ece']    = 'Home/index/ece';
$route['ece/galery']    = 'Galery/index/ece';
$route['ece/galery/(:num)']    = 'Galery/index/ece/$1';
$route['ece/profile']    = 'Profile/detail/ece';
$route['ece/news']    = 'Berita/index/ece';
$route['ece/news/(:num)']    = 'Berita/index/ece/$1';
$route['ece/news/detail/(:any)']    = 'Berita/detail/ece/$1';

$route['mi']    = 'Home/index/mi';
$route['mi/galery']    = 'Galery/index/mi';
$route['mi/galery/(:num)']    = 'Galery/index/mi/$1';
$route['mi/profile']    = 'Profile/detail/mi';
$route['mi/news']    = 'Berita/index/mi';
$route['mi/news/(:num)']    = 'Berita/index/mi/$1';
$route['mi/news/detail/(:any)']    = 'Berita/detail/mi/$1';

$route['mts']    = 'Home/index/mts';
$route['mts/galery']    = 'Galery/index/mts';
$route['mts/galery/(:num)']    = 'Galery/index/mts/$1';
$route['mts/profile']    = 'Profile/detail/mts';
$route['mts/news']    = 'Berita/index/mts';
$route['mts/news/(:num)']    = 'Berita/index/mts/$1';
$route['mts/news/detail/(:any)']    = 'Berita/detail/mts/$1';

$route['ma']    = 'Home/index/ma';
$route['ma/galery']    = 'Galery/index/ma';
$route['ma/galery/(:num)']    = 'Galery/index/ma/$1';
$route['ma/profile']    = 'Profile/detail/ma';
$route['ma/news']    = 'Berita/index/ma';
$route['ma/news/(:num)']    = 'Berita/index/ma/$1';
$route['ma/news/detail/(:any)']    = 'Berita/detail/ma/$1';
// end

// new admin
$route['admin/news/create']             = 'admin/Berita/create';
$route['admin/news/update/(:num)']      = 'admin/Berita/update/$1';
$route['admin/news/put/(:num)']         = 'admin/Berita/put/$1';
$route['admin/news']                    = 'admin/Berita/index';
$route['admin/news/(:num)']             = 'admin/Berita/index/$1';
$route['admin/news/post']               = 'admin/Berita/post';
$route['admin/news/delete/(:num)']      = 'admin/Berita/delete/$1';

$route['admin/profile/update/(:num)']    = 'admin/Profile/update/$1';
$route['admin/profile/put/(:num)']       = 'admin/Profile/put/$1';
$route['admin/profile']           = 'admin/Profile/index';
$route['admin/profile/post']                  = 'admin/Profile/post';
$route['admin/profile/delete/(:num)']                  = 'admin/Profile/delete/$1';

$route['admin/galery/detail/(:num)']    = 'admin/Galery/detail/$1';
$route['admin/galery/create']           = 'admin/Galery/create';
$route['admin/galery/update/(:num)']    = 'admin/Galery/update/$1';
$route['admin/galery/put/(:num)']       = 'admin/Galery/put/$1';
$route['admin/galery']                  = 'admin/Galery/index';
$route['admin/galery/(:num)']           = 'admin/Galery/index/$1';
// end