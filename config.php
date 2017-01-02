<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Kiev" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:mysql.hostinger.com.ua;dbname=u879646543_cms" );
define( "DB_USERNAME", "u879646543_ivan" );
define( "DB_PASSWORD", "Zxcv!234" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
