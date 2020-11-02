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
