<?php 
 include_once 'common/imports.php';

    include_once PATH.'/src/Services/UsuarioHandler.php'; 
    $db = new UsuarioHandler();

    include_once 'common/http.php';

    function get(){
        $res = $_GET;
        $api = new SisgesproApi(false,null, $res, false);
        $db = new UsuarioHandler();
        $response = $db->getUsuarios($res);
        $api->echoResponse($response->status, $response);
    }

    ?>