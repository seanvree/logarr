<?php // adapted from this website: https://bojanz.wordpress.com/2014/03/11/detecting-the-system-timezone-php/
include_once 'config/config.php';

$timezone = $config['timezone']; // set in config.php
    if (is_link('/etc/localtime')) {
        // Mac OS X (and older Linuxes)    
        // /etc/localtime is a symlink to the 
        // timezone in /usr/share/zoneinfo.
        $filename = readlink('/etc/localtime');
        if (strpos($filename, '/usr/share/zoneinfo/') === 0) {
            $timezone = substr($filename, 20);
        }
    } elseif (file_exists('/etc/timezone')) {
        // Ubuntu / Debian.
        $data = file_get_contents('/etc/timezone');
        if ($data) {
            $timezone = $data;
        }
    } elseif (file_exists('/etc/sysconfig/clock')) {
        // RHEL / CentOS
        $data = parse_ini_file('/etc/sysconfig/clock');
        if (!empty($data['ZONE'])) {
            $timezone = $data['ZONE'];
        }
    }
	date_default_timezone_set($timezone);
	$timestamp = time();
	$server_date = date("D, d M Y");
	$server_time = date("H:i:s T", $timestamp);
?>
