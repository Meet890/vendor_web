<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'M_Square');
defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'includes');

// load config file first 
require_once("config.php");
//load basic functions next so that everything after can use them
require_once("functions.php");
//later here where we are going to put our class session
require_once("session.php");
require_once('user.php');
require_once("accomodation.php");
require_once("guest.php"); 
require_once("reserve.php");  
//Load Core objects

require_once("database.php");

//load database-related classes
?>