<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos del formulario y los sub-dropdowns específicos
    $data = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'email' => $_POST['email'],
        'service' => $_POST['service'],
        'customOption' => '', // Inicializar el campo para evitar errores de índice

        // Capturar la opción del sub-dropdown correspondiente basado en el servicio seleccionado
        'Message' => $_POST['Message']
    );

    // Asignar el valor del sub-dropdown correcto basado en el servicio seleccionado
    switch ($_POST['service']) {
        case 'Marketing':
            $data['customOption'] = isset($_POST['marketingOption']) ? $_POST['marketingOption'] : '';
            break;
        case 'HubSpot Consulting':
            $data['customOption'] = isset($_POST['hubspotOption']) ? $_POST['hubspotOption'] : '';
            break;
        case 'Web Development':
            $data['customOption'] = isset($_POST['webDevOption']) ? $_POST['webDevOption'] : '';
            break;
        case 'Data Extraction':
            $data['customOption'] = isset($_POST['dataExtractionOption']) ? $_POST['dataExtractionOption'] : '';
            break;
        case 'Design Services':
            $data['customOption'] = isset($_POST['designOption']) ? $_POST['designOption'] : '';
            break;
    }

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
