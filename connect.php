<?php
require 'config.php';

$param = array(
    'response_type' => 'code',
    'client_id' => $client_id,
    'scope' => $scope,
    'redirect_uri' => $redirect_uri
);

$url = "https://jawbone.com/auth/oauth2/auth?" . http_build_query($param);

header("Location: {$url}");
exit;