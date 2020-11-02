<?php

if (!function_exists('base_path')) {
    function base_path($path = '') {

        $paths = explode('src', __FILE__);

        if (array_key_exists(0, $paths)) {
            return $path ? $paths[0] . $path . DIRECTORY_SEPARATOR : $paths[0];
        }

        return $path ? $path : '';
    }
}

if (!function_exists('json_logger')) {
    function json_logger($data, $path = '') {

        if (is_array($data)) {
            $data = json_encode($data);
        }

        $logger_file = base_path('src/tmp') . 'rows.json';
        file_put_contents($logger_file, $data);
    }
}