<?php
header('Content-Type: application/json'); 


$url = "https://webapi.bps.go.id/v1/api/list/model/data/lang/ind/domain/3312/var/574/th/126/key/d3e573a5bfa1b72f6faa5adc3dc920cb";


$response = file_get_contents($url);

// cek error
if ($response === FALSE) {
    echo json_encode(["error" => "Gagal mengambil data"]);
    exit;
}


echo $response;
?>