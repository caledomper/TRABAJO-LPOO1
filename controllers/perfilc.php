<?php
include '../application/config.php';
require_once BASE_URL.'models/perfilm.php';
require_once BASE_URL.'entities/perfile.php';

class perfilc extends perfilm {
    private static $instancia;

    public function __perfilc() {
        perfilm::singletonperfilm();
    }
    
    public static function singletonperfilc() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }

        return self::$instancia;
    }
    
    public function listarperfilc() {
        $data = array();
        $rs = perfilm::listarperfilm();

        for ($i = 0; $i < count($rs); $i++) {
            $objperfil = new perfile();
            $objperfil->setidperfil($rs[$i]['iidperfil']);
            $objperfil->setnombreperfil($rs[$i]['vnombreperfil']);
            $objperfil->setfecharegistro($rs[$i]['dfecharegistro']);
            $objperfil->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objperfil->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objperfil->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objperfil->setestado($rs[$i]['bestado']);
            $data[] = $objperfil;
        }
        
        return $data;
    }
    
    public function insertarperfilc($nombreperfil, $usuarioregistro, $usuarioactualizacion) {
        $objperfil = new perfile();
        $nombreperfil = $objperfil->setnombreperfil($nombreperfil);
        $usuarioregistro = $objperfil->setusuarioregistro($usuarioregistro);
        $usuarioactualizacion = $objperfil->setusuarioactualizacion($usuarioactualizacion);
        $data = perfilm::insertarperfilm($nombreperfil, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function actualizarperfilc($idperfil, $nombreperfil, $usuarioregistro, $usuarioactualizacion) {
        $objperfil = new perfile();
        $idperfil = $objperfil->setidperfil($idperfil);
        $nombreperfil = $objperfil->setnombreperfil($nombreperfil);
        $usuarioregistro = $objperfil->setusuarioregistro($usuarioregistro);
        $usuarioactualizacion = $objperfil->setusuarioactualizacion($usuarioactualizacion);
        $data = perfilm::actualizarperfilm($idperfil, $nombreperfil, $usuarioregistro, $usuarioactualizacion);
        
        return $data;
    }
    
    public function eliminarperfilc($idperfil) {
        $objperfil = new perfile();
        $idperfil = $objperfil->setidperfil($idperfil);
        $data = perfilm::eliminarperfilm($idperfil);
        
        return $data;
    }
    
    public function recuperarperfilporcodigoc($idperfil) {
        $row = perfilm::recuperarperfilporcodigom($idperfil);
        
        $objperfil = new perfile();
        $objperfil->setidperfil($row['iidperfil']);
        $objperfil->setnombreperfil($row['vnombreperfil']);
        $objperfil->setfecharegistro($row['dfecharegistro']);
        $objperfil->setusuarioregistro($row['vusuarioregistro']);
        $objperfil->setfechaactualizacion($row['dfechaactualizacion']);
        $objperfil->setusuarioactualizacion($row['vusuarioactualizacion']);
        $objperfil->setestado($row['bestado']);
        $data = $objperfil;
        
        return $data;
    }
}