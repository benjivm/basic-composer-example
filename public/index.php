<?php
// Load our dependencies
require __DIR__ . '/../vendor/autoload.php';

// Import dependencies
use eftec\bladeone\BladeOne as Blade;
use GuzzleHttp\Client as Guzzle;

// Setup Blade for rendering our templates
// edit the 'views/hello.blade.php' file to
$views_directory = __DIR__ . '/../views';
$cache_directory = __DIR__ . '/../cache';
$blade = new Blade($views_directory, $cache_directory, Blade::MODE_AUTO);

// Our HTTP Client, thanks, Guzzle!
$client = new Guzzle([
    'base_uri' => 'https://jsonplaceholder.typicode.com/',
    'verify' => false, // We need to disable SSL verification because we're just running with PHP's built-in server
    'headers' => [
        'Accept' => 'application/json'
    ]
]);

// Let's grab some example posts from jsonplaceholder's test API
$response = $client->get('posts');

// Put the JSON response into an Object. If we want an array we can add 'true'
// as the 2nd argument of json_decode()
$posts = json_decode($response->getBody());

// Thanks to blade we can use our template to display the posts
echo $blade->run('hello', ['posts' => $posts]);