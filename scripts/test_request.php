<?php

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// Create kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::create('/students', 'GET');

$response = $kernel->handle($request);

http_response_code($response->getStatusCode());

echo "Status: " . $response->getStatusCode() . PHP_EOL;
echo "Headers:\n";
foreach ($response->headers->all() as $k => $v) {
    echo "$k: " . implode(',',$v) . PHP_EOL;
}

$content = $response->getContent();
echo "\n-- Content (first 800 chars) --\n";
echo substr(strip_tags($content),0,800) . PHP_EOL;

$kernel->terminate($request, $response);
