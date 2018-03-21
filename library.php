<?php
    //function for file block_with_limit
    function checkRequestLimit($path, $time) {
        if (!file_exists($path)) {
            writeToFile($path, $time);
            return true;
        } else {
            return requestNumber($path, $time);
        }


    }

    function requestNumber($path, $time) {
        $requests = unserialize(file_get_contents($path));

    }

    function writeToFile($path, $time) {

    }

    //functions for file block_with_limit_wait
