<?php
use App\Model\Llibre;

$app->group('/llibre/', function () {
    
    $this->get('', function ($req, $res, $args) {
        $obj = new Llibre();   
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $obj->getAll()
            )
        );
    });
    
    $this->get('{id}', function ($req, $res, $args) {
        $obj = new Llibre();   
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $obj->get($args["id"])
            )
        );         
    });
    
    $this->post('', function ($req, $res, $args) {
        $atributs=$req->getParsedBody();
        $obj = new Llibre();   
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $obj->insert($atributs)
            )
        ); 
    });
    
    $this->put('', function ($req, $res, $args) {
        $atributs=$req->getParsedBody();
        $obj = new Llibre();   
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $obj->modificaLlibre($atributs)
            )
        ); 
    });
    
    $this->delete('', function ($req, $res, $args) {
        $atributs=$req->getParsedBody();
        $obj = new Llibre();   
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $obj->borrarLlibre($atributs)
            )
        ); 
    });
});
