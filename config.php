<?php
// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.

// Set the database access information as constants:
DEFINE ('DBHOST', 'localhost');
DEFINE ('DBUSER', 'root');
DEFINE ('DBPASS', '');
DEFINE ('DB', 'categories');

spl_autoload_register(function($className){
    require_once($_SERVER['DOCUMENT_ROOT'] ."/active-record/classes/{$className}.php");
});