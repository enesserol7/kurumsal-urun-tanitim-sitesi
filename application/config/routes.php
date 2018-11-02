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
$route['default_controller'] = 'duratiles';
$route["panel"] = "panel/index";

$route["en/index"] = "duratiles/enindex";
$route["contact-information"] = "duratiles/enibilgi";

$route["corporate/(:any)"] = "duratiles/enkurumsal/$1";
$route["media/(:any)"] = "duratiles/enmedya/$1";
$route["media-detail/(:any)"] = "duratiles/ensayfadetay/$1";
$route["references/(:any)"] = "duratiles/enreferanslar/$1";
$route["catalog/(:any)"] = "duratiles/enkatalog/$1";
$route["products/(:any)"] = "duratiles/enurunler/$1";
$route["product-detail-(:any)"] = "duratiles/enurundetay/$1";

$route["kurumsal/(:any)"] = "duratiles/kurumsal/$1";
$route["medya/(:any)"] = "duratiles/medya/$1";
$route["medya-detay/(:any)"] = "duratiles/sayfadetay/$1";
$route["referanslar/(:any)"] = "duratiles/referanslar/$1";
$route["iletisim-bilgileri"] = "duratiles/ibilgi";
$route["katalog/(:any)"] = "duratiles/katalog/$1";
$route["urunler/(:any)"] = "duratiles/urunler/$1";
$route["urunlerliste/(:any)"] = "duratiles/urunlerliste/$1";
$route["urun-detay-(:any)"] = "duratiles/urundetay/$1";

$route["index.php/front/urunler/urunler"] = "duratiles/urunler";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
