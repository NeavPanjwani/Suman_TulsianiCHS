<?php
// inc/helpers.php
function safePost($key) {
    return isset($_POST[$key]) ? trim($_POST[$key]) : '';
}
function redirect($url) {
    header("Location: $url");
    exit;
}
