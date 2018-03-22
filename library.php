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

    function getData($path) {
        returns unserialize(file_get_contents($path));
    }

    function writeToFile($path, $time) {
        $data = [];

        if (!file_exists($path)) {
            $data = getData();
        }

        array_unshift($data, $time);
        file_put_contents($path, serialize($data), );
    }

    //functions for file block_with_limit_wait
