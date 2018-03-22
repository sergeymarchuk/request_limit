<?php 

    $ip = $_SERVER['REMOTE_ADDR'];

    $ip = str_replace(":", "", $ip);
    $path = __DIR__ . DIRECTORY_SEPARATOR . "urls".DIRECTORY_SEPARATOR."{$ip}.txt";

    $time_request = time();

    if (checkRequestLimit($path, $time_request)) {
        header("HTTP/1.0 403 Forbidden");
        exit;
    }
