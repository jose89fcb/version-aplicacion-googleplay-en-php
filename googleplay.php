<?php
error_reporting(0);

// Obtener la respuesta JSON desde la URL
$response = json_decode(file_get_contents("https://jose89fcb.es/googleplay/googleplay?package=me.pou.app"), true);

// Comprobamos si la respuesta tiene los datos de la versión y la imagen
if (isset($response['version']) && isset($response['image_url'])) {
    // Si ambos existen, respondemos en formato JSON con la versión y la URL de la imagen
    echo json_encode([
        "Version" => $response["version"],
        "Image" => $response["image_url"]
    ]);
} else {
    // Si faltan los datos, devolvemos un error
    echo json_encode(["error" => "No se encontraron los datos requeridos"]);
}
?>
