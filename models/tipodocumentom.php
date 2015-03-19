<?php
include '../application/config.php';
require_once BASE_URL.'application/database.php';

class tipodocumentom extends database {
    private $query;
    private static $instancia;
    
    public function __tipodocumentom() { 
        database::singletondatabase();
    }
    
    public static function singletontipodocumentom() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listartipodocumentom() {
        try {
            $sql = "select td.iidtipodocumento, td.iidtipopersona, td.vnombretipodocumento, td.dfecharegistro, td.vusuarioregistro, td.dfechaactualizacion, td.vusuarioactualizacion, td.bestado, tp.vnombretipopersona ";
            $sql.= "from tipodocumento td ";
            $sql.= "inner join tipopersona tp ";
            $sql.= "on td.iidtipopersona = tp.iidtipopersona ";
            $sql.= "where td.bestado <> 0 ";
            $sql.= "order by td.vnombretipodocumento DESC";
            $bindings = null;

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function insertartipodocumentom($idtipopersona, $nombretipodocumento, $usuarioregistro, $usuarioactualizacion) {
        try {
            $registrar = FALSE;
            $sql = "insert into tipodocumento values(:idtipodocumento, :idtipopersona, :nombretipodocumento, now(), :usuarioregistro, now(), :usuarioactualizacion, :estado)";
            $bindings = array("idtipodocumento" => NULL,
                "idtipopersona" => $idtipopersona, 
                "nombretipodocumento" => $nombretipodocumento, 
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
    
    public function actualizartipodocumentom($idtipodocumento, $idtipopersona, $nombretipodocumento, $usuarioactualizacion) {
        try {
            $sql = "update tipodocumento set iidtipopersona = :idtipopersona, vnombretipodocumento = :nombretipodocumento, dfechaactualizacion = now(), vusuarioactualizacion = :usuarioactualizacion ";
            $sql.= "where iidtipodocumento = :idtipodocumento";
            $bindings = array("idtipopersona" => $idtipopersona, 
                "nombretipodocumento" => $nombretipodocumento, 
                "usuarioactualizacion" => $usuarioactualizacion, 
                "idtipodocumento" => $idtipodocumento
            );

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function eliminartipodocumentom($idtipodocumento) {
        try {
            $sql = "update tipodocumento set bestado = 0, dfechaactualizacion = now() ";
            $sql.= "where iidtipodocumento = :idtipodocumento";
            $bindings = array("idtipodocumento" => $idtipodocumento);

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function recuperartipodocumentoporcodigom($idtipodocumento) {
        try {
            $sql = "select iidtipodocumento, iidtipopersona, vnombretipodocumento, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado "; 
            $sql.= "from tipodocumento ";
            $sql.= "where iidtipodocumento = :idtipodocumento and bestado <> 0";
            $bindings = array("idtipodocumento" => $idtipodocumento);

            $this->query = database::executeentity($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function listartipodocumentoporidtipopersonam($idtipopersona) {
        try {
            $sql = "select iidtipodocumento, iidtipopersona, vnombretipodocumento, dfecharegistro, vusuarioregistro, dfechaactualizacion, vusuarioactualizacion, bestado "; 
            $sql.= "from tipodocumento ";
            $sql.= "where iidtipopersona = :idtipopersona and bestado <> 0";
            $bindings = array("idtipopersona" => $idtipopersona);

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}