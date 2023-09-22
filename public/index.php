<?php
require_once('bootstrap.php');

try {
    router();
} catch (Exception $e) {
    echo $e->getMessage();
}