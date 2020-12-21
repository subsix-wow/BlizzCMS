<?php
/**
 * BlizzCMS
 *
 * @author  WoW-CMS
 * @copyright  Copyright (c) 2017 - 2020, WoW-CMS.
 * @license https://opensource.org/licenses/MIT MIT License
 * @link    https://wow-cms.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/index';

$route['admin/system']['get'] = 'system/index';
$route['admin/system/cache']['get'] = 'system/cache';
$route['admin/system/sessions']['get'] = 'system/sessions';
$route['admin/system/general'] = 'system/general';
$route['admin/system/captcha'] = 'system/captcha';
$route['admin/system/email'] = 'system/email';

$route['admin/mods']['get'] = 'mods/index';
$route['admin/mods/install/(:any)']['get'] = 'mods/install/$1';
$route['admin/mods/uninstall/(:any)']['get'] = 'mods/uninstall/$1';

$route['admin/users']['get'] = 'users/index';
$route['admin/users/view/(:num)']['get'] = 'users/view/$1';
$route['admin/users/logs/(:num)']['get'] = 'users/logs/$1';

$route['admin/menu']['get'] = 'menu/index';
$route['admin/menu/create'] = 'menu/create';
$route['admin/menu/edit/(:num)'] = 'menu/edit/$1';
$route['admin/menu/delete/(:num)']['get'] = 'menu/delete/$1';

$route['admin/realms']['get'] = 'realms/index';
$route['admin/realms/create'] = 'realms/create';
$route['admin/realms/edit/(:num)'] = 'realms/edit/$1';
$route['admin/realms/delete/(:num)']['get'] = 'realms/delete/$1';
$route['admin/realms/check/(:num)']['get'] = 'realms/check/$1';

$route['admin/slides']['get'] = 'slides/index';
$route['admin/slides/create'] = 'slides/create';
$route['admin/slides/edit/(:num)'] = 'slides/edit/$1';
$route['admin/slides/delete/(:num)']['get'] = 'slides/delete/$1';

$route['admin/news']['get'] = 'news/index';
$route['admin/news/create'] = 'news/create';
$route['admin/news/edit/(:num)'] = 'news/edit/$1';
$route['admin/news/delete/(:num)']['get'] = 'news/delete/$1';

$route['admin/changelogs']['get'] = 'changelogs/index';
$route['admin/changelogs/create'] = 'changelogs/create';
$route['admin/changelogs/edit/(:num)'] = 'changelogs/edit/$1';
$route['admin/changelogs/delete/(:num)']['get'] = 'changelogs/delete/$1';

$route['admin/pages']['get'] = 'pages/index';
$route['admin/pages/create'] = 'pages/create';
$route['admin/pages/edit/(:num)'] = 'pages/edit/$1';
$route['admin/pages/delete/(:num)']['get'] = 'pages/delete/$1';

$route['admin/store'] = 'store/index';
$route['admin/store/create'] = 'store/create';
$route['admin/store/edit/(:num)'] = 'store/edit/$1';
$route['admin/store/delete/(:num)']['get'] = 'store/delete/$1';

$route['admin/donate']['get'] = 'donate/index';
$route['admin/donate/create'] = 'donate/create';
$route['admin/donate/edit/(:num)'] = 'donate/edit/$1';
$route['admin/donate/delete/(:num)']['get'] = 'donate/delete/$1';

$route['admin/topsites']['get'] = 'topsites/index';
$route['admin/topsites/create'] = 'topsites/create';
$route['admin/topsites/edit/(:num)'] = 'topsites/edit/$1';
$route['admin/topsites/delete/(:num)']['get'] = 'topsites/delete/$1';

$route['admin/forum']['get'] = 'forum/index';
$route['admin/forum/create'] = 'forum/create';
$route['admin/forum/edit/(:num)'] = 'forum/edit/$1';
$route['admin/forum/delete/(:num)']['get'] = 'forum/delete/$1';