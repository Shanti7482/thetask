<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


// define("HOHE_SWIPER_IAMGE", array('assets/images/banner_1.avif','assets/images/banner_2.avif','assets/images/banner_3.avif','assets/images/banner_4.avif','assets/images/banner_5.avif','assets/images/banner_6.jpeg'));
define("HOHE_SWIPER_IAMGE", array('assets/images/hero/hero_1.jpeg','assets/images/hero/hero_2.jpeg','assets/images/hero/hero_3.jpeg','assets/images/hero/hero_4.jpeg','assets/images/hero/hero_5.jpeg'));

define("SERVICE_IMAGE",array(array('name'=>'Gynaecology','image'=>'assets/images/services_img/service_1.png'),
                            array('name'=>'Urology','image'=>'assets/images/services_img/service_2.png'),
                            array('name'=>'Male Infertility','image'=>'assets/images/services_img/service_3.png'),
                            array('name'=>'IVF Fertilization','image'=>'assets/images/services_img/service_4.png'),
                            array('name'=>'Adult Vaccination','image'=>'assets/images/services_img/service_5.png'),
                            array('name'=>'Obstetrics, Gynecology & infertility (I.V.F)','image'=>'assets/images/services_img/service_6.png'),
                            array('name'=>'Neonatology (NICU)','image'=>'assets/images/services_img/service_7.png'),
                            array('name'=>'Immunisation','image'=>'assets/images/services_img/service_8.png'),
                            array('name'=>'Yoga & Physiotherapy','image'=>'assets/images/services_img/service_9.png')));






define('DOCTOR_INFO',array(
    array('name'=>'Dr. Supriya Narayan',
    'image'=>'assets/images/doctor_image/doctor_image_1.png',
    'title'=>'MBBS (PMCH Patna), MD Radiology (Gold Medalist - DMCH Darbhanga)',
    'subtitle'=>'CEO and Senior Consultant Obstetrician & Gynecologist',
    'description'=>' Dr. Supriya Narayan is a renowned Obstetrician & Gynaecologist associated with Paras Global
                        Hospital, Laheriasarai. With over 11+ years of clinical experience, she has worked across
                        multiple esteemed hospitals across India.<br>
                        She is widely respected for her accurate diagnosis and empathetic approach to patient care.
                        Her core expertise lies in Obstetrics, Prenatal Care, Childbirth, and managing various
                        Gynecological conditions.<br>
                        Dr. Narayan completed her MBBS from the University of Patna in 2008 and earned her MS in
                        Obstetrics & Gynaecology from PMCH, Patna. She has actively contributed to research,
                        authored academic papers, and participated in several national workshops. She has also
                        received awards in surgical excellence within her field.',
    'status'=>1
),
    array('name'=>'Dr. Surya Narayan',
    'image'=>'assets/images/doctor_image/doctor_image_2.jpeg',
    'title'=>'un',
    'subtitle'=>'un',
    'description'=>'un',
    'status'=>1
),
    array('name'=>'Dr. Deepak Kumar Sah',
    'image'=>'assets/images/doctor_image/doctor_image_3.jpeg',
    'title'=>'un',
    'subtitle'=>'un',
    'description'=>'un',
    'status'=>1
),
    array('name'=>'Dr. Abhijit',
    'image'=>'assets/images/doctor_image/doctor_image_4.jpeg',
    'title'=>'un',
    'subtitle'=>'un',
    'description'=>'un',
    'status'=>1
),
    array('name'=>'Dr. Rajeev Ranjan',
    'image'=>'assets/images/doctor_image/doctor_image_5.jpeg',
    'title'=>'un',
    'subtitle'=>'un',
    'description'=>'un',
    'status'=>1
    )

));