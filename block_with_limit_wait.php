<?php 

    $ip = $_SERVER['REMOTE_ADDR'];

    $ip = str_replace(":", "", $ip);
    $path = __DIR__ . DIRECTORY_SEPARATOR . "urls".DIRECTORY_SEPARATOR."{$ip}.txt";

    $time_request = time();

    if (checkRequestLimit($path, $time_request)) {

        echo ("Вы слишком часто отправляете форму, подождите " . (string)($time_request + TIME_LIMIT) . " секунд <br>");
        exit;
    }
