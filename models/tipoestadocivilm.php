<?php
include '../application/config.php';
require_once BASE_URL.'application/database.php';

class tipoestadocivilm extends database {
    private $query;
    private static $instancia;
    
    public function __tipoestadocivilm() { 
        database::singletondatabase();
    }
    
    public static function singletontipoestadocivilm() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listartipoestadocivilm() {
        try {
            $sql = "select iidtipoestadocivil, vnombretipoestadocivil, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado ";
            $sql.= "from tipoestadocivil ";
            $sql.= "where bestado <> 0 ";
            $sql.= "order by vnombretipoestadocivil DESC";
            $bindings = null;

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function insertartipoestadocivilm($nombretipoestadocivil, $usuarioregistro, $usuarioactualizacion) {
        try {
            $registrar = FALSE;
            $sql = "insert into tipoestadocivil values(:idtipoestadocivil, :nombretipoestadocivil, now(), :usuarioregistro, now(), :usuarioactualizacion, :estado)";
            $bindings = array("idtipoestadocivil" => NULL,
                "nombretipoestadocivil" => $nombretipoestadocivil, 
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
    
    public function actualizartipoestadocivilm($idtipoestadocivil, $nombretipoestadocivil, $usuarioactualizacion) {
        try {
            $sql = "update tipoestadocivil set vnombretipoestadocivil = :nombretipoestadocivil, dfechaactualizacion = now(), vusuarioactualizacion = :usuarioactualizacion ";
            $sql.= "where iidtipoestadocivil = :idtipoestadocivil";
            $bindings = array("nombretipoestadocivil" => $nombretipoestadocivil, 
                "usuarioactualizacion" => $usuarioactualizacion, 
                "idtipoestadocivil" => $idtipoestadocivil
            );

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function eliminartipoestadocivilm($idtipoestadocivil) {
        try {
            $sql = "update tipoestadocivil set bestado = 0, dfechaactualizacion = now() ";
            $sql.= "where iidtipoestadocivil = :idtipoestadocivil";
            $bindings = array("idtipoestadocivil" => $idtipoestadocivil);

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function recuperartipoestadocivilporcodigom($idtipoestadocivil) {
        try {
            $sql = "select iidtipoestadocivil, vnombretipoestadocivil, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado "; 
            $sql.= "from tipoestadocivil ";
            $sql.= "where iidtipoestadocivil = :idtipoestadocivil and bestado <> 0";
            $bindings = array("idtipoestadocivil" => $idtipoestadocivil);

            $this->query = database::executeentity($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}