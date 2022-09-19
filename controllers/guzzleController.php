<?php

use GuzzleHttp\Client;

// $response = json_decode(file_get_contents('https://dog.ceo/api/breeds/image/random'));
$response = json_decode(file_get_contents('https://www.fishwatch.gov/api/species'),1);

$client = new Client();
// $response =$client->request('GET', 'https://www.fishwatch.gov/api/species');
// $response =  $response>getBody();

$client = new \GuzzleHttp\Client();
// $response = $client->get('https://dog.ceo/api/breeds/image/random');

// aff((array) json_decode($response->getBody()));

// dump($response[115]);

// // aff($response->getStatusCode()); // 200
// aff($response->getHeaderLine('content-type')); // 'application/json; charset=utf8');
// aff($response->getHeader('content-type')); // 'application/json; charset=utf8');
// // aff($response->getBody("id"), 'XXX'); // '{"id": 1420053, "name": "guzzle", ...}'
// aff($response->message);
// Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $promise = $client->sendAsync($request)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });

// $promise->wait();

// if ($response->hasHeader('Content-Length')) {
//   echo "It exists";
// } else echo 'nooooooooooooooooooo';
// aff($response);
// $data['count']       = count($response);
// $id                  = $data['id'] = rand(0, ($data['count']));
// // $id                  = $data['id'] = 115;
// $data['name']        = $response[$id]['Scientific Name'];
// $data['description'] = $response[$id]['Biology'];
// $data['photo']       = $response[$id]['Species Illustration Photo'];
// $data['gallery']     = $response[$id]['Image Gallery'];

// aff($data['gallery']);