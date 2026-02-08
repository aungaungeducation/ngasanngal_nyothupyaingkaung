<?php
namespace Query\Responsecontroller;
class Response {
    public static function responsebody($data) {
        header('Content-Type: application/json');
        http_response_code($data['code']);
        echo json_encode($data);
        exit();
    }
    public static function responseheader() {

    }
}
?>