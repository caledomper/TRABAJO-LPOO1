<?php
include '../application/config.php';
require_once BASE_URL.'application/database.php';

class tipopersonam extends database { 
    private $query;
    private static $instancia;

    public function __tipopersonam() { 
        database::singletondatabase();
    }
    
    public static function singletontipopersonam() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listartipopersonam() {
        try {
            $sql = "select iidtipopersona, vnombretipopersona, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado ";
            $sql.= "from tipopersona ";
            $sql.= "where bestado <> 0 ";
            $sql.= "order by iidtipopersona DESC";
            $bindings = null;

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function insertartipopersonam($nombretipopersona, $usuarioregistro, $usuarioactualizacion) {
        try {
            $registrar = FALSE;
            $sql = "insert into tipopersona values(:idtipopersona, :nombretipopersona, now(), :usuarioregistro, now(), :usuarioactualizacion, :estado)";
            $bindings = array("idtipopersona" => NULL, 
                "nombretipopersona" => $nombretipopersona, 
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
    
    public function actualizartipopersonam($idtipopersona, $nombretipopersona, $usuarioactualizacion) {
        try {
            $sql = "update tipopersona set vnombretipopersona = :nombretipopersona, dfechaactualizacion = now(), vusuarioactualizacion = :usuarioactualizacion ";
            $sql.= "where iidtipopersona = :idtipopersona";
            $bindings = array("nombretipopersona" => $nombretipopersona, 
                "usuarioactualizacion" => $usuarioactualizacion, 
                "idtipopersona" => $idtipopersona
            );

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function eliminartipopersonam($idtipopersona) {
        try {
            $sql = "update tipopersona set bestado = 0, dfechaactualizacion = now() ";
            $sql.= "where iidtipopersona = :idtipopersona";
            $bindings = array("idtipopersona" => $idtipopersona);

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function recuperartipopersonaporcodigom($idtipopersona) {
        try {
            $sql = "select iidtipopersona, vnombretipopersona, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado "; 
            $sql.= "from tipopersona ";
            $sql.= "where iidtipopersona = :idtipopersona and bestado <> 0";
            $bindings = array("idtipopersona" => $idtipopersona);

            $this->query = database::executeentity($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}