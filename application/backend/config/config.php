<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (ENVIRONMENT === 'production')
{
	$config['log_threshold'] = 1; //日志配置
    $config['defaultChannel'] = array(
        'web' => 10001,
        'app' => 10002,
    );
} 
elseif (ENVIRONMENT === 'checkout') 
{
	$config['log_threshold'] = 5; //日志配置
    $config['defaultChannel'] = array(
        'web' => 1,
        'app' => 2,
    );
}
else
{
	$config['log_threshold'] = 5; //日志配置
    $config['defaultChannel'] = array(
        'web' => 1,
        'app' => 2,
    );
}

$config['sms_url'] = 'http://duanxin.km.com/Api/Sms/Send';

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$config['base_url']	= '888.166cai.cn';
$config['m_pages_url'] = 'https://8.166cai.cn/';  // M版地址
$config['base_path'] = dirname(BASEPATH);
$config['ios_domain'] = 'https://www.ka5188.com';
$config['android_domain'] = 'https://www.ka5188.com';
$config['url_prefix'] = array(
		'www.166cai.com' => 'https',
		'www.166cai.net' => 'http',
		'888.166cai.cn' => 'https',
);
/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
$config['index_page'] = 'index.php';

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of 'AUTO' works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'			Default - auto detects
| 'PATH_INFO'		Uses the PATH_INFO
| 'QUERY_STRING'	Uses the QUERY_STRING
| 'REQUEST_URI'		Uses the REQUEST_URI
| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol']	= 'AUTO';

/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
|
| This option allows you to add a suffix to all URLs generated by CodeIgniter.
| For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/urls.html
*/

$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which set of language files should be used. Make sure
| there is an available translation if you intend to use something other
| than english.
|
*/
$config['language']	= 'english';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| If you would like to use the 'hooks' feature you must enable it by
| setting this variable to TRUE (boolean).  See the user guide for details.
|
*/
$config['enable_hooks'] = TRUE;


/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
*/
$config['subclass_prefix'] = 'MY_';


/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
|
| This lets you specify with a regular expression which characters are permitted
| within your URLs.  When someone tries to submit a URL with disallowed
| characters they will get a warning message.
|
| As a security measure you are STRONGLY encouraged to restrict URLs to
| as few characters as possible.  By default only these are allowed: a-z 0-9~%.:_-
|
| Leave blank to allow all characters -- but only if you are insane.
|
| DO NOT CHANGE THIS UNLESS YOU FULLY UNDERSTAND THE REPERCUSSIONS!!
|
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';


/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default CodeIgniter uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| By default CodeIgniter enables access to the $_GET array.  If for some
| reason you would like to disable it, set 'allow_get_array' to FALSE.
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string 'words' that will
| invoke your controllers and its functions:
| example.com/index.php?c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since CodeIgniter is designed primarily to
| use segment based URLs.
|
*/
$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to
| determine what gets logged. Threshold options are:
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|   1 = Log Messages	
|	2 = Error Messages (including PHP errors)
|	3 = Debug Messages
|	4 = Informational Messages
|	5 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
| $config['log_threshold'] = 5;
*/


/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/logs/ folder. Use a full server path with trailing slash.
|
*/
$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| system/cache/ folder.  Use a full server path with trailing slash.
|
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Session class you
| MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key'] = 'caipiao-2345-com';

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
| 'sess_cookie_name'		= the name you want for the cookie
| 'sess_expiration'			= the number of SECONDS you want the session to last.
|   by default sessions last 7200 seconds (two hours).  Set to zero for no expiration.
| 'sess_expire_on_close'	= Whether to cause the session to expire automatically
|   when the browser window is closed
| 'sess_encrypt_cookie'		= Whether to encrypt the cookie
| 'sess_use_database'		= Whether to save the session data to a database
| 'sess_table_name'			= The name of the session database table
| 'sess_match_ip'			= Whether to match the user's IP address when reading the session data
| 'sess_match_useragent'	= Whether to match the User Agent when reading the session data
| 'sess_time_to_update'		= how many seconds between CI refreshing Session Information
|
*/
$config['sess_cookie_name']		= 'ci_session';
$config['sess_expiration']		= 7200;
$config['sess_expire_on_close']	= TRUE;
$config['sess_encrypt_cookie']	= TRUE;
$config['sess_use_database']	= FALSE;
$config['sess_table_name']		= 'ci_sessions';
$config['sess_match_ip']		= FALSE;
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix' = Set a prefix if you need to avoid collisions
| 'cookie_domain' = Set to .your-domain.com for site-wide cookies
| 'cookie_path'   =  Typically will be a forward slash
| 'cookie_secure' =  Cookies will only be set if a secure HTTPS connection exists.
|
*/
$config['cookie_prefix']	= "";
$config['cookie_domain']	= "";
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
| Determines whether the XSS filter is always active when GET, POST or
| COOKIE data is encountered
|
*/
$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
| Enables a CSRF cookie token to be set. When set to TRUE, token will be
| checked on a submitted form. If you are accepting user data, it is strongly
| recommended CSRF protection be enabled.
|
| 'csrf_token_name' = The token name
| 'csrf_cookie_name' = The cookie name
| 'csrf_expire' = The number in seconds the token should expire.
*/
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;

/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
|
| Enables Gzip output compression for faster page loads.  When enabled,
| the output class will test whether your server supports Gzip.
| Even if it does, however, not all browsers support compression
| so enable only if you are reasonably sure your visitors can handle it.
|
| VERY IMPORTANT:  If you are getting a blank page when compression is enabled it
| means you are prematurely outputting something to your browser. It could
| even be a line of whitespace at the end of one of your scripts.  For
| compression to work, nothing can be sent before the output buffer is called
| by the output class.  Do not 'echo' any values with compression enabled.
|
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are 'local' or 'gmt'.  This pref tells the system whether to use
| your server's local time as the master 'now' reference, or convert it to
| GMT.  See the 'date helper' page of the user guide for information
| regarding date handling.
|
*/
$config['time_reference'] = 'local';


/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags'] = FALSE;


/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy IP
| addresses from which CodeIgniter should trust the HTTP_X_FORWARDED_FOR
| header in order to properly identify the visitor's IP address.
| Comma-delimited, e.g. '10.0.1.200,10.0.1.201'
|
*/
$config['proxy_ips'] = '';

$config['rediskeys'] = array(
  "count_yestoday" => "caipiao:backend:hash:count_yestoday",
  "count_thirty" => "caipiao:backend:hash:count_thirty"  
   
);

/**
 * redis keys
 * 该数组值要和前端config值保持一致
 * 之所以在该处添加该数组是为了后台程序中用到时，不需要加载前端config去获取相应值
 */
$config['REDIS'] = array(
    'UNIQUE_KEY'              => '_unique_key:',
    'ORDERS_CHECK_START_TIME' => '_orders_check_start_time:',
    'USER_INFO'               => '_user_info:',
	'BANK_INFO'               => '_bank_info:',
    'CX_DATA'                 => '_cx_data:',
    'CX_API'                  => '_cx_api:',
    'CX_API_PARAMS'           => '_cx_params:',
    'CX_API_SETS'             => '_cx_api_sets:',
    'CACHE_TYPE'              => array(
        'ticket_data_pl0' => '_cache_key0:6:1',//key:timeout:switch
    ),
    'NOTICE_RECORDS'          => '_notice_records:',
    'TOTAL_WIN'               => '_total_win:',
    'validChannels'           => '_validChannels',
	'SSQ_ISSUE'               => '_ssq_issue:',
	'DLT_ISSUE'               => '_dlt_issue:',
	'FC3D_ISSUE'              => '_fc3d_issue:',
	'PLS_ISSUE'               => '_pls_issue:',
	'PLW_ISSUE'               => '_plw_issue:',
	'QXC_ISSUE'               => '_qxc_issue:',
	'QLC_ISSUE'               => '_qlc_issue:',
	'SYXW_ISSUE_TZ'           => '_syxw_issue_tz:',
	'JXSYXW_ISSUE_TZ'           => '_jxsyxw_issue_tz:',
	'HBSYXW_ISSUE_TZ'           => '_hbsyxw_issue_tz:',
    'GDSYXW_ISSUE_TZ'           => '_gdsyxw_issue_tz:',
	'KS_ISSUE_TZ'           => '_ks_issue_tz:',
    'JLKS_ISSUE_TZ'           => '_jlks_issue_tz:',
    'JXKS_ISSUE_TZ'           => '_jxks_issue_tz:',
    'CQSSC_ISSUE_TZ'          => '_cqssc_issue_tz:',
	'ssSelling'               => '_ssSelling:',	
	'SHOUYE'			 	  => '_shouye:',
	'NBA'                     => '_nba:',
    'JCZQ_MATCH'              => '_jczq_match:',
    'JCLQ_MATCH'              => '_jclq_match:',
    'ADD_INFO'                => '_add_info:',
    'LOTTERY_INFO'            => '_lottery_info:',
    'APP_CONFIG'              => '_app_config:',
    'AWARD_NOTICE'            => '_award_notice:',
    'BANNER'                  => '_banner',
    'JCJJ_HOVER'              => 'jcjj_hover:',
    'USERVPOP'                => 'uservpop',            //用户服务弹层
    'SSQ_MISS'                => '_ssq_miss',
    'DLT_MISS'                => '_dlt_miss',
    'SYXW_MISS'               => '_syxw_miss',
    'JXSYXW_MISS'             => '_jxsyxw_miss',
    'HBSYXW_MISS'             => '_hbsyxw_miss',
    'GDSYXW_MISS'             => '_gdsyxw_miss',
    'KS_MISS'                 => '_ks_miss',
    'JLKS_MISS'               => '_jlks_miss',
    'JXKS_MISS'               => '_jxks_miss',
    'KLPK_MISS'               => '_klpk_miss',
    'CQSSC_MISS'              => '_cqssc_miss',
    'QLC_MISS'                => '_qlc_miss',
    'QXC_MISS'                => '_qxc_miss',
    'PL3_MISS'                => '_pl3_miss',
    'PL5_MISS'                => '_pl5_miss',
    'FC3D_MISS'               => '_fc3d_miss',
    'SSQ_MISS_MORE'           => '_ssq_miss_more',
    'DLT_MISS_MORE'           => '_dlt_miss_more',
    'SYXW_MISS_MORE'          => '_syxw_miss_more',
    'JXSYXW_MISS_MORE'        => '_jxsyxw_miss_more',
    'HBSYXW_MISS_MORE'        => '_hbsyxw_miss_more',
    'GDSYXW_MISS_MORE'        => '_gdsyxw_miss_more',
    'KS_MISS_MORE'            => '_ks_miss_more',
    'JLKS_MISS_MORE'          => '_jlks_miss_more',
    'JXKS_MISS_MORE'          => '_jxks_miss_more',
    'KLPK_MISS_MORE'          => '_klpk_miss_more',
    'CQSSC_MISS_MORE'         => '_cqssc_miss_more',
    'QLC_MISS_MORE'           => '_qlc_miss_more',
    'QXC_MISS_MORE'           => '_qxc_miss_more',
    'PL3_MISS_MORE'           => '_pl3_miss_more',
    'PL5_MISS_MORE'           => '_pl5_miss_more',
    'FC3D_MISS_MORE'          => '_fc3d_miss_more',
    'BANNERS'                 => '_banners',
    'PAY_CONFIG'			  => '_pay_config:',
    'RCG_DISPATCH'            => '_rcg_dispatch:',      //充值渠道分配缓存
    'CS_PAY_CONFIG'	      => '_cs_pay_config:',         //199,194测试充值渠道分配缓存
    'CS_RCG_DISPATCH'            => '_cs_rcg_dispatch:',      //199,194测试充值渠道分配缓存
    'PAY_RATE_CONFIG'         => '_pay_rate_config:',   // 支付宝微信比例
    'LIMIT_CODE'			  => '_limit_code:',
    'LOTTERY_CONFIG'          => '_lottery_config:',
    'USER_HOT'                => '_isHot:',
    'LIMIT_CHANNEL'           => '_limit_channels:',
    'JIFEN'                   => '_jifen:',//积分
    'PC_PAY_CONFIG'	      => '_pc_pay_config:',
    'CS_PC_PAY_CONFIG'	      => '_cs_pc_pay_config:',
    'PC_PAY_GUIDE_CONFIG'     => '_pc_pay_guide_config:',
);

$config['OUTTIME'] = array('captche' => 30, 'cx_data' => 5);
$config['MESSAGE'] = array(
	'withdraw_succ' => '您于#MM#月#DD#日申请提现已处理，提现金额#MONEY#元。下载APP查看进度： t.cn/R9SyzIp ',
	'withdraw_fail' => '您于#MM#月#DD#日申请提现未完成，#REASON#，提现金额已返还您的彩票帐户。下载APP查看进度： t.cn/R9SyzIp ',
);

//投注站所接彩种
$config['cfg_partner_lid'] = array(
		'53' => array('ename' => 'ks', 'cname' => '上海快三'),
		'21406' => array('ename' => 'syxw', 'cname' => '老11选5'),
		'21407' => array('ename' => 'jxsyxw', 'cname' => '新11选5'),
		'21408' => array('ename' => 'hbsyxw', 'cname' => '惊喜11选5'),
		'23529' => array('ename' => 'dlt', 'cname' => '大乐透'),
        '54' => array('ename' => 'klpk', 'cname' => '快乐扑克'),
        '55' => array('ename' => 'cqssc', 'cname' => '老时时彩'),
        '56' => array('ename' => 'jlks', 'cname' => '易快3'),
        '57' => array('ename' => 'jxks', 'cname' => '红快3'),
        '21421' => array('ename' => 'gdsyxw', 'cname' => '乐11选5')
);

$config['split_lid'] = array('53', '21406', '21407', '21408', '54', '55', '56', '57', '21421');

//提现额度(百分之)
$config['txed'] = 50;
/* End of file config.php */
/* Location: ./application/config/config.php */