<?php
session_start();
require 'src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
'app_id' => '1185459628242040',
'app_secret' => 'f4c28cfd686b9ffd36091e1cb90b8ac3',
'default_graph_version' => 'v2.8',
]);
