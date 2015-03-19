<?php
include '../application/config.php';
require_once BASE_URL.'models/tipoestadocivilm.php';
require_once BASE_URL.'entities/tipoestadocivile.php';

class tipoestadocivilc extends tipoestadocivilm {
    private static $instancia;
    
    public function __tipoestadocivilc() {
        tipoestadocivilm::singletontipoestadocivilm();
    }
    
    public static function singletontipoestadocivilc() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listartipoestadocivilc() {
        $data = array();
        $rs = tipoestadocivilm::listartipoestadocivilm();
        
        for ($i = 0; $i < count($rs); $i++) {
            $objtipoestadocivil = new tipoestadocivile();
            $objtipoestadocivil->setidtipoestadocivil($rs[$i]['iidtipoestadocivil']);
            $objtipoestadocivil->setnombretipoestadocivil($rs[$i]['vnombretipoestadocivil']);
            $objtipoestadocivil->setfecharegistro($rs[$i]['dfecharegistro']);
            $objtipoestadocivil->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objtipoestadocivil->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objtipoestadocivil->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objtipoestadocivil->setestado($rs[$i]['bestado']);
            $data[] = $objtipoestadocivil;
        }
        
        return $data;
    }
    
    public function insertartipoestadocivilc($nombretipoestadocivil, $usuarioregistro, $usuarioactualizacion) {
        $objtipoestadocivil = new tipoestadocivile();
        $nombretipoestadocivil = $objtipoestadocivil->setnombretipoestadocivil($nombretipoestadocivil);
        $usuarioregistro = $objtipoestadocivil->setusuarioregistro($usuarioregistro);
        $usuarioactualizacion = $objtipoestadocivil->setusuarioactualizacion($usuarioactualizacion);
        $data = tipoestadocivilm::insertartipoestadocivilm($nombretipoestadocivil, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function actualizartipoestadocivilc($idtipoestadocivil, $nombretipoestadocivil, $usuarioactualizacion) {
        $objtipoestadocivil = new tipoestadocivile();
        $idtipoestadocivil = $objtipoestadocivil->setidtipoestadocivil($idtipoestadocivil);
        $nombretipoestadocivil = $objtipoestadocivil->setnombretipoestadocivil($nombretipoestadocivil);
        $fecharegistro = $objtipoestadocivil->setfecharegistro($fecharegistro);
        $usuarioregistro = $objtipoestadocivil->setusuarioregistro($usuarioregistro);
        $fechaactualizacion = $objtipoestadocivil->setfechaactualizacion($fechaactualizacion);
        $usuarioactualizacion = $objtipoestadocivil->setusuarioactualizacion($usuarioactualizacion);
        $data = tipoestadocivilm::actualizartipoestadocivilm($idtipoestadocivil, $nombretipoestadocivil, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function eliminartipoestadocivilc($idtipoestadocivil) {
        $objtipoestadocivil = new tipoestadocivile();
        $idtipoestadocivil = $objtipoestadocivil->setidtipoestadocivil($idtipoestadocivil);
        $data = tipoestadocivilm::eliminartipoestadocivilm($idtipoestadocivil);
        
        return $data;
    }
    
    public function recuperartipoestadocivilporcodigoc($idtipoestadocivil) {
        $row = tipoestadocivilm::recuperartipoestadocivilporcodigom($idtipoestadocivil);
        
        $objtipoestadocivil = new tipoestadocivile();
        $objtipoestadocivil->setidtipoestadocivil($row['iidtipoestadocivil']);
        $objtipoestadocivil->setnombretipoestadocivil($row['vnombretipoestadocivil']);
        $objtipoestadocivil->setfecharegistro($row['dfecharegistro']);
        $objtipoestadocivil->setusuarioregistro($row['vusuarioregistro']);
        $objtipoestadocivil->setfechaactualizacion($row['dfechaactualizacion']);
        $objtipoestadocivil->setusuarioactualizacion($row['vusuarioactualizacion']);
        $objtipoestadocivil->setestado($row['bestado']);
        $data = $objtipoestadocivil;
            
        return $data;
    }
}