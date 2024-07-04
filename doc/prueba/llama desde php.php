
<?php

$buscar = ""; // Esto se enviará por GET
$tipobusqueda = 1; // Esto se enviará por POST

// Construir la URL para la solicitud GET
$urlGet = "http://localhost/SCUPTOS/controlador/?lista_menu";
//----------------------------

// Datos que se enviarán por GET
//$dataGet = '&buscar='.$buscar;
// Construir la URL para la solicitud GET
//$urlGet = $urlGet . $dataGet;

//--------------------------
// Datos que se enviarán por POST
$dataPost = array(
    'buscar' => 'arroz'
);

// Realizar la solicitud POST
$responsePost = file_get_contents($urlGet, false, stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($dataPost)
    ]
]));

if ($responsePost === false) {
    echo "Error en la solicitud POST.";
} else {
    // Procesar la respuesta de la solicitud POST
    $data = json_decode($responsePost,true); 
    echo "datos respuestas";
    print_r($data);
    echo "<h1>".$data[0][0]['descripcion_menu']."<h1>";
    //echo $responsePost;

    }


?>
