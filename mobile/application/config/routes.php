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
$route['users/insert'] = 'welcome/users';
$route['users/insert_validation'] = 'welcome/users';
$route['users/add'] = 'welcome/users';
$route['users/edit/:num'] = 'welcome/users';
$route['users/upload_file/image'] = 'welcome/users';
$route['users/update_validation/:num'] = 'welcome/users';
$route['users/update/:num'] = 'welcome/users';
$route['users/success/:num'] = 'welcome/users';
$route['users/read/:num'] = 'welcome/users';
$route['users/ajax_list'] = 'welcome/users';
$route['users/delete_file'] = 'welcome/users';
$route['users/export'] = 'welcome/users';
$route['users/delete/:num'] = 'welcome/users';
$route['users/delete_file/image/:any'] = 'welcome/users';

$route['sessions'] = 'welcome/sessions';
$route['sessions/read/:any'] = 'welcome/sessions';

$route['routers/insert'] = 'welcome/routers';
$route['routers/insert_validation'] = 'welcome/routers';
$route['routers/add'] = 'welcome/routers';
$route['routers/edit/:num'] = 'welcome/routers';
$route['routers/upload_file/image'] = 'welcome/routers';
$route['routers/update_validation/:num'] = 'welcome/routers';
$route['routers/update/:num'] = 'welcome/routers';
$route['routers/success/:num'] = 'welcome/routers';
$route['routers/read/:num'] = 'welcome/routers';
$route['routers/ajax_list'] = 'welcome/routers';

$route['tenants/insert'] = 'welcome/tenants';
$route['tenants/insert_validation'] = 'welcome/tenants';
$route['tenants/add'] = 'welcome/tenants';
$route['tenants/edit/:num'] = 'welcome/tenants';
$route['tenants/upload_file/image'] = 'welcome/tenants';
$route['tenants/update_validation/:num'] = 'welcome/tenants';
$route['tenants/update/:num'] = 'welcome/tenants';
$route['tenants/success/:num'] = 'welcome/tenants';
$route['tenants/read/:num'] = 'welcome/tenants';
$route['tenants/ajax_list'] = 'welcome/tenants';

$route['units/insert'] = 'welcome/units';
$route['units/insert_validation'] = 'welcome/units';
$route['units/add'] = 'welcome/units';
$route['units/edit/:num'] = 'welcome/units';
$route['units/upload_file/image'] = 'welcome/units';
$route['units/update_validation/:num'] = 'welcome/units';
$route['units/update/:num'] = 'welcome/units';
$route['units/success/:num'] = 'welcome/units';
$route['units/read/:num'] = 'welcome/units';
$route['units/ajax_list'] = 'welcome/units';

$route['cameras/insert'] = 'welcome/cameras';
$route['cameras/insert_validation'] = 'welcome/cameras';
$route['cameras/add'] = 'welcome/cameras';
$route['cameras/edit/:num'] = 'welcome/cameras';
$route['cameras/upload_file/image'] = 'welcome/cameras';
$route['cameras/update_validation/:num'] = 'welcome/cameras';
$route['cameras/update/:num'] = 'welcome/cameras';
$route['cameras/success/:num'] = 'welcome/cameras';
$route['cameras/read/:num'] = 'welcome/cameras';
$route['cameras/ajax_list'] = 'welcome/cameras';

$route['log'] = 'welcome/log';
$route['log/insert'] = 'welcome/log';
$route['log/insert_validation'] = 'welcome/log';
$route['log/add'] = 'welcome/log';
$route['log/edit/:num'] = 'welcome/log';
$route['log/upload_file/image'] = 'welcome/log';
$route['log/update_validation/:num'] = 'welcome/log';
$route['log/update/:num'] = 'welcome/log';
$route['log/success/:num'] = 'welcome/log';
$route['log/read/:num'] = 'welcome/log';
$route['log/ajax_list'] = 'welcome/log';

$route['receive/:any'] = 'welcome/receive';
$route['alarms/details/:num'] = 'welcome/details';
$route['map'] = 'welcome/map';
$route['button'] = 'welcome/button';
$route['front/:any'] = 'welcome/front';
$route['login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';
$route['routers'] = 'welcome/routers';
$route['cameras'] = 'welcome/cameras';
$route['cameras/1'] = 'welcome/cameras';
$route['units'] = 'welcome/units';
$route['users'] = 'welcome/users';
$route['front'] = 'welcome/front';
$route['auth'] = 'welcome/auth';
$route['tenants'] = 'welcome/tenants';

$route['privacy'] = 'welcome/privacy';
$route['terms'] = 'welcome/terms';
$route['blank'] = 'welcome/blank';
$route['recordings'] = 'welcome/recordings';

$route['updatePositionInit'] = 'welcome/updatePositionInit';

$route['cameraStatus'] = '/welcome/cameraStatus';
$route['cameraStreams'] = '/welcome/cameraStreams';
$route['sendAlarm'] = '/welcome/sendAlarm';
$route['indexAjaxDataUnits'] = '/welcome/indexAjaxDataUnits';
$route['indexAjaxDataAlarms'] = '/welcome/indexAjaxDataAlarms';
$route['indexAjaxDataNotificationAlarm'] = '/welcome/indexAjaxDataNotificationAlarm';
$route['addComment'] = '/welcome/addComment';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
