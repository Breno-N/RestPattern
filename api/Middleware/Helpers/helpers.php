<?php

use Slim\Slim as Slim;

class helpers
{
        static function jsonResponse($error = TRUE, $message = '', $data = array())
        {
                $app = Slim::getInstance();
                $response = new stdClass();
                $response->error = $error;
                $response->message = $message;
                $response->data = $data;
                
                $app->response()->header('Content-Type', 'application/json');
                return $app->response()->body( json_encode($response) );
        }
}