<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'email' => $_POST['email'],
        'service' => $_POST['service'],
        'customOption' => isset($_POST['customOption']) ? $_POST['customOption'] : '',
        'Message' => $_POST['Message']
    );

    $url = 'https://script.google.com/macros/s/AKfycbxglbrcp3eT19Sxk0jhrFr3RwJ3L5Xv2W3qRYwgG9tXmUE_WVDqadceBYANERcZ5NkC/exec'; // Reemplaza esto con la URL de tu aplicación web de Google

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ),
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Responder con JSON indicando el resultado
    if ($result === FALSE) {
        echo json_encode(['success' => false, 'message' => 'Error al enviar datos']);
    } else {
        echo json_encode(['success' => true, 'message' => 'Datos enviados exitosamente']);
    }
    exit();
}
?>
