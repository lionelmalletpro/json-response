<?php

require_once __DIR__ . "/vendor/autoload.php";

use Lmallet\Response\JsonResponse;

$test = array(
    'firstname' => 'Lionel',
    'lastname' => 'Mallet'
);

new JsonResponse('exception', '', $test);
