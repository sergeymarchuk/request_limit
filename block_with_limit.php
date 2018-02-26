<?php
    function blockRequest($timeLimit) {
        $result = false;

        $ip = $_SERVER['REMOTE_ADDR'];
        $month = date('M');
        
        $pathToFile = "storage". DIRECTORY_SEPARATOR . $month . DIRECTORY_SEPARATOR ."{$ip}.txt";
        echo $ip;

        if (file_exists("storage". DIRECTORY_SEPARATOR ."{$ip}.txt")) {

        } else {
            $date = new DateTime();
            $data = [];
            array_push($data, $date->getTimestamp());

            $file = fopen($pathToFile, 'w');
            fwrite($file, serialize($data));
            fclose($file);
        }

        return $result;
    }