<?php
include '../application/config.php';
require_once BASE_URL.'models/usuariom.php';
require_once BASE_URL.'entities/usuarioe.php';

class usuarioc extends usuariom {
    private static $instancia;

    public function __usuarioc() {
        usuariom::singletonusuariom();
    }
    
    public static function singletonusuarioc() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }

        return self::$instancia;
    }
    
    public function listarusuarioc() {
        $data = array();
        $rs = usuariom::listarusuariom();
        
        for ($i = 0; $i < count($rs); $i++) {
            $objusuario = new usuarioe();
            $objusuario->setidusuario($rs[$i]['iidusuario']);
            $objusuario->setidpersona($rs[$i]['iidpersona']);
            $objusuario->setcodigousuario($rs[$i]['vcodigousuario']);
            $objusuario->setclaveusuario($rs[$i]['vclaveusuario']);
            $objusuario->setestado($rs[$i]['bestado']);
            $objusuario->setnombrecompleto($rs[$i]['vnombrecompleto']);
            $data[] = $objusuario;
        }

        return $data;
    }
    
    public function insertarusuarioc($idpersona, $codigousuario, $claveusuario, $reset, $usuarioregistro, $usuarioactualizacion) {
        $objusuario = new usuarioe();
        $idpersona = $objusuario->setidpersona($idpersona);
        $codigousuario = $objusuario->setcodigousuario($codigousuario);
        $claveusuario = $objusuario->setclaveusuario($claveusuario);
        $reset = $objusuario->setreset($reset);
        $usuarioregistro= $objusuario->setusuarioregistro($usuarioregistro);
        $usuarioactualizacion = $objusuario->setusuarioactualizacion($usuarioactualizacion);
        $data = usuariom::insertarusuariom($idpersona, $codigousuario, $claveusuario, $reset, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function actualizarusuarioc($idusuario, $idpersona, $codigousuario, $claveusuario, $reset, $usuarioactualizacion) {
        $objusuario = new usuarioe();
        $idusuario = $objusuario->setidusuario($idusuario);
        $idpersona = $objusuario->setidpersona($idpersona);
        $codigousuario = $objusuario->setcodigousuario($codigousuario);
        $claveusuario = $objusuario->setclaveusuario($claveusuario);
        $reset = $objusuario->setreset($reset);
        $usuarioactualizacion = $objusuario->setusuarioactualizacion($usuarioactualizacion);
        $data = usuariom::actualizarusuariom($idusuario, $idpersona, $codigousuario, $claveusuario, $reset, $usuarioactualizacion);
        
        return $data;
    }
    
    public function eliminarusuarioc($idusuario) {
        $objusuario = new usuarioe();
        $idusuario = $objusuario->setidusuario($idusuario);
        $data = usuariom::eliminarusuariom($idusuario);
        
        return $data;
    }
    
    public function recuperarusuarioporcodigoc($idusuario) {
        $rs = usuariom::recuperarusuarioporcodigom($idusuario);
        
        $objusuario = new usuarioe();
        $objusuario->setidusuario($rs['iidusuario']);
        $objusuario->setidpersona($rs['iidpersona']);
        $objusuario->setcodigousuario($rs['vcodigousuario']);
        $objusuario->setclaveusuario($rs['vclaveusuario']);
        $objusuario->setestado($rs['bestado']);
        $objusuario->setnombrecompleto($rs['vnombrecompleto']);
        $data = $objusuario;

        return $data;
    }
        
    public function autenticarusuarioc($codigousuario, $claveusuario) {
        $rs = usuariom::autenticarusuariom($codigousuario, $claveusuario);
        
        $objusuario = new usuarioe();
        $objusuario->setidusuario($rs['iidusuario']);
        $objusuario->setidpersona($rs['iidpersona']);
        $objusuario->setcodigousuario($rs['vcodigousuario']);
        $objusuario->setclaveusuario($rs['vclaveusuario']);
        $objusuario->setreset($rs['breset']);
        $objusuario->setestado($rs['bestado']);
        $objusuario->setnombrecompleto($rs['vnombrecompleto']);
        $data = $objusuario;
        
        return $data;
    }
    
    public function validarusuarioc($codigousuario) {
        $rs = usuariom::validarusuariom($codigousuario);
        $data = $rs;
        
        return $data;
    }
}