<?php
use App\Model\LliAut;

$app->group('/lliaut/', function () {
    
    $this->get('{id}', function ($req, $res, $args) {
        $obj = new LliAut();   
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $obj->allAutorLlibres($args["id"])
            )
        );
    });
});