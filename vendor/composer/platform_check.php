<?php

// platform_check.php @generated by Composer

$issues = array();

$missingExtensions = array();
extension_loaded('libxml') || $missingExtensions[] = 'libxml';
extension_loaded('simplexml') || $missingExtensions[] = 'simplexml';
extension_loaded('zlib') || $missingExtensions[] = 'zlib';

if ($missingExtensions) {
    $issues[] = 'Your Composer dependencies require the following PHP extensions to be installed: ' . implode(', ', $missingExtensions);
}

if ($issues) {
    echo 'Composer detected issues in your platform:' . "\n\n" . implode("\n", $issues);
    exit(104);
}
