<?php
include '../application/config.php';
require_once BASE_URL.'application/database.php';

class tiposexom extends database {
    private $query;
    private static $instancia;
    
    public function __tiposexom() { 
        database::singletondatabase();
    }
    
    public static function singletontiposexom() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listartiposexom() {
        try {
            $sql = "select iidtiposexo, vnombretiposexo, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado ";
            $sql.= "from tiposexo ";
            $sql.= "where bestado <> 0 ";
            $sql.= "order by vnombretiposexo ASC";
            $bindings = null;

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function insertartiposexom($nombretiposexo, $usuarioregistro, $usuarioactualizacion) {
        try {
            $registrar = FALSE;
            $sql = "insert into tiposexo values(:idtiposexo, :nombretiposexo, now(), :usuarioregistro, now(), :usuarioactualizacion, :estado)";
            $bindings = array("idtiposexo" => NULL,
                "nombretiposexo" => $nombretiposexo, 
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
    
    public function actualizartiposexom($idtiposexo, $nombretiposexo, $usuarioactualizacion) {
        try {
            $sql = "update tiposexo set vnombretiposexo = :nombretiposexo, dfechaactualizacion = now(), vusuarioactualizacion = :usuarioactualizacion ";
            $sql.= "where iidtiposexo = :idtiposexo";
            $bindings = array("nombretiposexo" => $nombretiposexo, 
                "usuarioactualizacion" => $usuarioactualizacion, 
                "idtiposexo" => $idtiposexo
            );

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function eliminartiposexom($idtiposexo) {
        try {
            $sql = "update tiposexo set bestado = 0, dfechaactualizacion = now() ";
            $sql.= "where iidtiposexo = :idtiposexo";
            $bindings = array("idtiposexo" => $idtiposexo);

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function recuperartiposexoporcodigom($idtiposexo) {
        try {
            $sql = "select iidtiposexo, vnombretiposexo, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado "; 
            $sql.= "from tiposexo ";
            $sql.= "where iidtiposexo = :idtiposexo and bestado <> 0";
            $bindings = array("idtiposexo" => $idtiposexo);

            $this->query = database::executeentity($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}