<?php

header("Content-Type: text/html; charset=utf-8");

require_once("../src/vendor/autoload.php");

Sentry\init(['dsn' => SENTRY_DSN ]);

new App\Dispatch();

Sentry\captureLastError();








