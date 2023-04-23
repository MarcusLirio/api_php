<?php

require_once '../vendor/autoload.php';

if ($_GET['url']) {
    $url = explode('/', $_GET['url']);

    var_dump($url);

    if ($url[0] === 'api') {

        $service = 'App\Services\\' . ucfirst($url[1]) . 'Service';

        $method = strtolower($_SERVER['REQUEST_METHOD']);

        var_dump($method);

        try {
            $response = call_user_func_array(array(new $service, $method), $url);
            echo json_encode(array('status' => 'sucess', 'data' => $response));
            exit;
        } catch (\Exception $e) {
            echo json_encode(array('status' => 'Error', 'data' => $e));
            exit;
        }
    }
}
