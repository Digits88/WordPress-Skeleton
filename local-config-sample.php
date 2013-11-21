<?php

define( 'DB_NAME', 'local_db_name' );
define( 'DB_USER', 'local_db_user' );
define( 'DB_PASSWORD', 'local_db_password' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );

define( 'WP_DEBUG', true );
if( WP_DEBUG ) {
	define( 'SCRIPT_DEBUG', true );
	define( 'WP_DEBUG_LOG', true );
	define( 'WP_DEBUG_DISPLAY', false );
	@ini_set( 'display_errors', 0 );
}

define( 'WP_CACHE', false );
