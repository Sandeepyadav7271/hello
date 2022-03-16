------------------localhost---------------------------
// $db['default'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'localhost',
// 	'username' => 'root',
// 	'password' => '',
// 	'database' => 'igtweb',
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );
c-----confi-------------
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'gmartind_gmartindia',
	'password' => 'K?_o?=QhlE#g',
	'database' => 'gmartind_igtbeta',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

c----- confi-------------
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$base_url .= "://". @$_SERVER['HTTP_HOST'];
$base_url .=     str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$config['base_url'] = $base_url;

------------------dynamic --------- page-------------------confi-------------

$route['default_controller'] = 'welcome';
$route['about'] = 'welcome/page/about';
$route['career'] = 'welcome/page/career';
$route['registration_domain'] = 'welcome/page/Registration';
$route['transfer_domain'] = 'welcome/page/Transfer';
$route['pricing_domain'] = 'welcome/page/Pricing';
$route['vps_server'] = 'welcome/page/VPS';
$route['cloud_server'] = 'welcome/page/cloud';
$route['dedicated_server'] = 'welcome/page/Dedicated';
$route['server_management'] = 'welcome/page/Server';
$route['cloud_hosting'] = 'welcome/page/Cloud';
$route['contactus'] = 'welcome/page/contact';
$route['technologies'] = 'welcome/page/technologiesall';
$route['services'] = 'welcome/page/servicesall';
$route['services/(:any)'] = 'welcome/page/services/$1';
$route['technologies/(:any)'] = 'welcome/page/technologies/$1';
$route['job/(:any)'] = 'welcome/page/job-decription/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;