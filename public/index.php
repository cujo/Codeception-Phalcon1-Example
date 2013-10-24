<?php

error_reporting(E_ALL);

try {

	/**
	 * Handle the request
	 */
	$application = include __DIR__ . '/../app/config/application.php';
	
	echo $application->handle()->getContent();

} catch (\Exception $e) {
	echo $e->getMessage();
} 
