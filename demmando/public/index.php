<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$env   = $_ENV['APP_ENV'] ?? 'prod';
$debug = ($_ENV['APP_DEBUG'] ?? '0') === '1';

echo '<h1>Beží to 🎉</h1>';
echo '<p>APP_ENV = ' . htmlspecialchars($env) . '</p>';
echo '<p>DEBUG = ' . ($debug ? 'ON' : 'OFF') . '</p>';

use Milos\Demmando\Hello;

echo '<p>' . Hello::greet('Miloš') . '</p>';
