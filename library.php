<?php
    //function for file block_with_limit

    function checkRequestLimit($path, $time) {
        if (!file_exists($path)) {
            writeToFile($path, $time);
            return false;
        } else {
            return requestNumber($path, $time);
        }
    }

    function requestNumber($path, $time) {
        $data = getData($path);
        $counter = 0;

        foreach ($data as $value) {
            if ($time - $value <= TIME_LIMIT) {
                $counter++;
            }
        }

        writeToFile($path, $time);

        if ($counter > REQUEST_NUMBER) {
            return true;
        } else {
            return false;
        }
    }

    //functions for file block_with_limit_wait

    //function for both cases

    function getData($path) {
        return unserialize(file_get_contents($path));
    }

    function writeToFile($path, $time) {
        
        if (file_exists($path)) {  
            $data = getData($path);
            array_unshift($data, $time);
        } else {
            $data = array($time);
        }
        var_dump($data);
        file_put_contents($path, serialize($data), FILE_APPEND | LOCK_EX);
    }
