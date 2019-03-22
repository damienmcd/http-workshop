<?php

class HttpRequest {
    public $value;

    public function getRequest() {
        if( isset( $_GET['hello'] ) ) {
            $value = $_GET['hello'];
            return $value;
        } else {
            $value = 'Nothing to see here!';
            return $value;
        }
    }
}

$httpRequest = new HttpRequest();
$result = $httpRequest->getRequest();
echo $result;
