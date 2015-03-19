<?php
include '../application/config.php';
require_once BASE_URL.'models/tiposexom.php';
require_once BASE_URL.'entities/tiposexoe.php';

class tiposexoc extends tiposexom {
    private static $instancia;
    
    public function __tiposexoc() {
        tiposexom::singletontiposexom();
    }
    
    public static function singletontiposexoc() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listartiposexoc() {
        $data = array();
        $rs = tiposexom::listartiposexom();
        
        for ($i = 0; $i < count($rs); $i++) {
            $objtiposexo = new tiposexoe();
            $objtiposexo->setidtiposexo($rs[$i]['iidtiposexo']);
            $objtiposexo->setnombretiposexo($rs[$i]['vnombretiposexo']);
            $objtiposexo->setfecharegistro($rs[$i]['dfecharegistro']);
            $objtiposexo->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objtiposexo->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objtiposexo->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objtiposexo->setestado($rs[$i]['bestado']);
            $data[] = $objtiposexo;
        }
        
        return $data;
    }
    
    public function insertartiposexoc($nombretiposexo, $usuarioregistro, $usuarioactualizacion) {
        $objtiposexo = new tiposexoe();
        $nombretiposexo = $objtiposexo->setnombretiposexo($nombretiposexo);
        $usuarioregistro = $objtiposexo->setusuarioregistro($usuarioregistro);
        $usuarioactualizacion = $objtiposexo->setusuarioactualizacion($usuarioactualizacion);
        $data = tiposexom::insertartiposexom($nombretiposexo, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function actualizartiposexoc($idtiposexo, $nombretiposexo, $usuarioactualizacion) {
        $objtiposexo = new tiposexoe();
        $idtiposexo = $objtiposexo->setidtiposexo($idtiposexo);
        $nombretiposexo = $objtiposexo->setnombretiposexo($nombretiposexo);
        $fecharegistro = $objtiposexo->setfecharegistro($fecharegistro);
        $usuarioregistro = $objtiposexo->setusuarioregistro($usuarioregistro);
        $fechaactualizacion = $objtiposexo->setfechaactualizacion($fechaactualizacion);
        $usuarioactualizacion = $objtiposexo->setusuarioactualizacion($usuarioactualizacion);
        $data = tiposexom::actualizartiposexom($idtiposexo, $nombretiposexo, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function eliminartiposexoc($idtiposexo) {
        $objtiposexo = new tiposexoe();
        $idtiposexo = $objtiposexo->setidtiposexo($idtiposexo);
        $data = tiposexom::eliminartiposexom($idtiposexo);
        
        return $data;
    }
    
    public function recuperartiposexoporcodigoc($idtiposexo) {
        $data = NULL;
        $rs = tiposexom::recuperartiposexoporcodigom($idtiposexo);
        
        for ($i = 0; $i < count($rs); $i++) {
            $objtiposexo = new tiposexoe();
            $objtiposexo->setidtiposexo($rs[$i]['iidtiposexo']);
            $objtiposexo->setnombretiposexo($rs[$i]['vnombretiposexo']);
            $objtiposexo->setfecharegistro($rs[$i]['dfecharegistro']);
            $objtiposexo->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objtiposexo->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objtiposexo->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objtiposexo->setestado($rs[$i]['bestado']);
            $data = $objtiposexo;
        }
        
        return $data;
    }
}