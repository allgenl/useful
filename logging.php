<?php
function log($data) {
  $log = date('Y-m-d H:i:s') . ' ' . print_r($data, true);
  file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
}
