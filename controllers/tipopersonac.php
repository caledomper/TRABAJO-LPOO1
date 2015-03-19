<?php
include '../application/config.php';
require_once BASE_URL.'models/tipopersonam.php';
require_once BASE_URL.'entities/tipopersonae.php';

class tipopersonac extends tipopersonam {
    private static $instancia;

    public function __tipopersonac() {
        tipopersonam::singletontipopersonam();
    }
    
    public static function singletontipopersonac() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }

        return self::$instancia;
    }
    
    public function listartipopersonac() {
        $data = array();
        $rs = tipopersonam::listartipopersonam();

        for ($i = 0; $i < count($rs); $i++) {
            $objtipopersona = new tipopersonae();
            $objtipopersona->setidtipopersona($rs[$i]['iidtipopersona']);
            $objtipopersona->setnombretipopersona($rs[$i]['vnombretipopersona']);
            $objtipopersona->setfecharegistro($rs[$i]['dfecharegistro']);
            $objtipopersona->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objtipopersona->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objtipopersona->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objtipopersona->setestado($rs[$i]['bestado']);
            $data[] = $objtipopersona;
        }
        
        return $data;
    }
    
    public function insertartipopersonac($nombretipopersona, $usuarioregistro, $usuarioactualizacion) {
        $objtipopersona = new tipopersonae();
        $nombretipopersona = $objtipopersona->setnombretipopersona($nombretipopersona);
        $usuarioregistro = $objtipopersona->setusuarioregistro($usuarioregistro);
        $usuarioactualizacion = $objtipopersona->setusuarioactualizacion($usuarioactualizacion);
        $data = tipopersonam::insertartipopersonam($nombretipopersona, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function actualizartipopersonac($idtipopersona, $nombretipopersona, $usuarioactualizacion) {
        $objtipopersona = new tipopersonae();
        $idtipopersona = $objtipopersona->setidtipopersona($idtipopersona);
        $nombretipopersona = $objtipopersona->setnombretipopersona($nombretipopersona);
        $usuarioactualizacion = $objtipopersona->setusuarioactualizacion($usuarioactualizacion);
        $data = tipopersonam::actualizartipopersonam($idtipopersona, $nombretipopersona, $usuarioactualizacion);
        
        return $data;
    }
    
    public function eliminartipopersonac($idtipopersona) {
        $objtipopersona = new tipopersonae();
        $idtipopersona = $objtipopersona->setidtipopersona($idtipopersona);
        $data = tipopersonam::eliminartipopersonam($idtipopersona);
        
        return $data;
    }
    
    public function recuperartipopersonaporcodigoc($idtipopersona) {
        $data = NULL;
        $rs = tipopersonam::recuperartipopersonaporcodigom($idtipopersona);
        
        for ($i = 0; $i < count($rs); $i++) {
            $objtipopersona = new tipopersonae();
            $objtipopersona->setidtipopersona($rs[$i]['iidtipopersona']);
            $objtipopersona->setnombretipopersona($rs[$i]['vnombretipopersona']);
            $objtipopersona->setfecharegistro($rs[$i]['dfecharegistro']);
            $objtipopersona->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objtipopersona->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objtipopersona->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objtipopersona->setestado($rs[$i]['bestado']);
            $data = $objtipopersona;
        }
        
        return $data;
    }
}