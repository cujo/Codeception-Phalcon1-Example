<?php
/**
 * Read the configuration
 */
$config = include __DIR__ . "/config.php";

/**
 * Read auto-loader
 */
include __DIR__ . "/loader.php";

/**
 * Read services
 */
include __DIR__ . "/services.php";

/**
 * Return application 
 */
return new \Phalcon\Mvc\Application($di);
