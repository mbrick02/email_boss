<?php
//The main config file
define('BASE_URL', 'http://localhost:8080/email_boss/');
define('ENV', 'dev');
define('DEFAULT_MODULE', 'welcome');
define('DEFAULT_CONTROLLER', 'Welcome');
define('DEFAULT_METHOD', 'test'); // default was 'index'
define('APPPATH', dirname(dirname(__FILE__)).'/');
define('REQUEST_TYPE', $_SERVER['REQUEST_METHOD']);
define('MODULE_ASSETS_TRIGGER', '_module');
// MB NOTE: 2022/3/15 for Trongate course email_boxx and Trongate CSS YouTube ***
