<?php

// Show all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load our dependencies
require __DIR__ . '/vendor/autoload.php';

// Our HTTP Client, thanks, Guzzle!
$client = new GuzzleHttp\Client([
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
$posts = json_decode($response->getBody()->getContents());

// We don't have a templating engine, so this is gonna' get ugly
echo '<div style="padding:20px;font-family:sans-serif;">';
foreach($posts as $post) {
    echo '<div style="padding:20px;border-bottom: 1px #CCC solid;">';
    echo "<h1>{$post->title}</h1>";
    echo "<p>{$post->body}</p>";
    echo '</div>';
}
echo '</div>';