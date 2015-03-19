<?php
include '../application/config.php';
require_once BASE_URL.'models/tipodocumentom.php';
require_once BASE_URL.'entities/tipodocumentoe.php';

class tipodocumentoc extends tipodocumentom {
    private static $instancia;
    
    public function __tipodocumentoc() {
        tipodocumentom::singletontipodocumentom();
    }
    
    public static function singletontipodocumentoc() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listartipodocumentoc() {
        $data = array();
        $rs = tipodocumentom::listartipodocumentom();
        
        for ($i = 0; $i < count($rs); $i++) {
            $objtipodocumento = new tipodocumentoe();
            $objtipodocumento->setidtipodocumento($rs[$i]['iidtipodocumento']);
            $objtipodocumento->setidtipopersona($rs[$i]['iidtipopersona']);
            $objtipodocumento->setnombretipodocumento($rs[$i]['vnombretipodocumento']);
            $objtipodocumento->setfecharegistro($rs[$i]['dfecharegistro']);
            $objtipodocumento->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objtipodocumento->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objtipodocumento->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objtipodocumento->setestado($rs[$i]['bestado']);
            $objtipodocumento->setnombretipopersona($rs[$i]['vnombretipopersona']);
            $data[] = $objtipodocumento;
        }
        
        return $data;
    }
    
    public function insertartipodocumentoc($idtipopersona ,$nombretipodocumento, $usuarioregistro, $usuarioactualizacion) {
        $objtipodocumento = new tipodocumentoe();
        $idtipopersona = $objtipodocumento->setidtipopersona($idtipopersona);
        $nombretipodocumento = $objtipodocumento->setnombretipodocumento($nombretipodocumento);
        $usuarioregistro = $objtipodocumento->setusuarioregistro($usuarioregistro);
        $usuarioactualizacion = $objtipodocumento->setusuarioactualizacion($usuarioactualizacion);
        $data = tipodocumentom::insertartipodocumentom($idtipopersona, $nombretipodocumento, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function actualizartipodocumentoc($idtipodocumento, $idtipopersona, $nombretipodocumento, $usuarioactualizacion) {
        $objtipodocumento = new tipodocumentoe();
        $idtipodocumento = $objtipodocumento->setidtipodocumento($idtipodocumento);
        $idtipopersona = $objtipodocumento->setidtipopersona($idtipopersona);
        $nombretipodocumento = $objtipodocumento->setnombretipodocumento($nombretipodocumento);
        $fecharegistro = $objtipodocumento->setfecharegistro($fecharegistro);
        $usuarioregistro = $objtipodocumento->setusuarioregistro($usuarioregistro);
        $fechaactualizacion = $objtipodocumento->setfechaactualizacion($fechaactualizacion);
        $usuarioactualizacion = $objtipodocumento->setusuarioactualizacion($usuarioactualizacion);
        $data = tipodocumentom::actualizartipodocumentom($idtipodocumento, $idtipopersona, $nombretipodocumento, $usuarioactualizacion);
        
        return $data;
    }
    
    public function eliminartipodocumentoc($idtipodocumento) {
        $objtipodocumento = new tipodocumentoe();
        $idtipodocumento = $objtipodocumento->setidtipodocumento($idtipodocumento);
        $data = tipodocumentom::eliminartipodocumentom($idtipodocumento);
        
        return $data;
    }
    
    public function recuperartipodocumentoporcodigoc($idtipodocumento) {
        $row = tipodocumentom::recuperartipodocumentoporcodigom($idtipodocumento);
        
        $objtipodocumento = new tipodocumentoe();
        $objtipodocumento->setidtipodocumento($row['iidtipodocumento']);
        $objtipodocumento->setidtipopersona($row['iidtipopersona']);
        $objtipodocumento->setnombretipodocumento($row['vnombretipodocumento']);
        $objtipodocumento->setfecharegistro($row['dfecharegistro']);
        $objtipodocumento->setusuarioregistro($row['vusuarioregistro']);
        $objtipodocumento->setfechaactualizacion($row['dfechaactualizacion']);
        $objtipodocumento->setusuarioactualizacion($row['vusuarioactualizacion']);
        $objtipodocumento->setestado($row['bestado']);
        $data = $objtipodocumento;
        
        return $data;
    }

    public function listartipodocumentoporidtipopersonac($idtipopersona) {
        $data = array();
        $rs = tipodocumentom::listartipodocumentoporidtipopersonam($idtipopersona);
        
        for ($i = 0; $i < count($rs); $i++) {
            $objtipodocumento = new tipodocumentoe();
            $objtipodocumento->setidtipodocumento($rs[$i]['iidtipodocumento']);
            $objtipodocumento->setidtipopersona($rs[$i]['iidtipopersona']);
            $objtipodocumento->setnombretipodocumento($rs[$i]['vnombretipodocumento']);
            $objtipodocumento->setfecharegistro($rs[$i]['dfecharegistro']);
            $objtipodocumento->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objtipodocumento->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objtipodocumento->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objtipodocumento->setestado($rs[$i]['bestado']);
            $data[] = $objtipodocumento;
        }
        
        return $data;
    }
}