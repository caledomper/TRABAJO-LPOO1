<?php
include '../application/config.php';
require_once BASE_URL.'application/database.php';

class perfilm extends database { 
    private $query;
    private static $instancia;

    public function __perfilm() { 
        database::singletondatabase();
    }
    
    public static function singletonperfilm() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listarperfilm() {
        try {
            $sql = "select iidperfil, vnombreperfil, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado ";
            $sql.= "from perfil ";
            $sql.= "where bestado <> 0 ";
            $sql.= "order by iidperfil DESC";
            $bindings = null;

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function insertarperfilm($nombreperfil, $usuarioregistro, $usuarioactualizacion) {
        try {
            $registrar = FALSE;
            $sql = "insert into perfil values(:idperfil, :nombreperfil, now(), :usuarioregistro, now(), :usuarioactualizacion, :estado)";
            $bindings = array("idperfil" => NULL, 
                "nombreperfil" => $nombreperfil, 
                "usuarioregistro" => $usuarioregistro, 
                "usuarioactualizacion" => $usuarioactualizacion, 
                "estado" => 1
            );

            $registrar = database::executeregister($bindings, $sql);

            if (empty($registrar) or $registrar != FALSE) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function actualizarperfilm($idperfil, $nombreperfil, $usuarioactualizacion) {
        try {
            $sql = "update perfil set vnombreperfil = :nombreperfil, dfechaactualizacion = now(), vusuarioactualizacion = :usuarioactualizacion ";
            $sql.= "where iidperfil = :idperfil";
            $bindings = array("nombreperfil" => $nombreperfil, 
                "usuarioactualizacion" => $usuarioactualizacion, 
                "idperfil" => $idperfil
            );

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function eliminarperfilm($idperfil) {
        try {
            $sql = "update perfil set bestado = 0, dfechaactualizacion = now() ";
            $sql.= "where iidperfil = :idperfil";
            $bindings = array("idperfil" => $idperfil);

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function recuperarperfilporcodigom($idperfil) {
        try {
            $sql = "select iidperfil, vnombreperfil, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado "; 
            $sql.= "from perfil ";
            $sql.= "where iidperfil = :idperfil and bestado <> 0";
            $bindings = array("idperfil" => $idperfil);

            $this->query = database::executeentity($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}