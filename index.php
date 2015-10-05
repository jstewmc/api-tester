<?php

/**
 * An api tester
 *
 * @author     Jack Clayton
 * @copyright  2015 Jack Clayton
 *
 * @param  string  $format  the response's format (accepts "json" or "xml") 
 *     (optional; if omitted, defaults to "json")
 * @param  int  $code  the response's HTTP status code (optional; if omitted, 
 *     defaults to 200)
 * @param  string  $output  the response's output (optional; if omitted, defaults to
 *     '')
 */
 
/**
 * @var  int  the http response code
 */
$code = isset($_GET['code']) ? $_GET['code'] : 200;

/**
 * @var  string  the response format (aka, "content-type")
 */
$format = isset($_GET['format']) ? $_GET['format'] : 'json';

/**
 * @var  string  the response's body
 */
$output = isset($_GET['output']) ? $_GET['output'] : '';



// set the page's response code
http_response_code($code);

// set the page's content type from the format
if ($format === 'json') {
	header('Content-Type: application/json');	
} elseif ($format === 'xml') {
	header('Content-Type: text/xml');
}

// echo the page's output
echo $output;
