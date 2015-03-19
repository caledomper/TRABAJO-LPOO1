<?php
include '../application/config.php';
require_once BASE_URL.'application/database.php';

class usuariom extends database {
    private $query;
    private $instancia;

    public function __usuariom() {
        database::singletondatabase();
    }
    
    public static function singletonusuariom() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }

        return self::$instancia;
    }

    public function listarusuariom() {
        try {
            $sql = "select u.iidusuario, u.iidpersona, u.vcodigousuario, u.vclaveusuario, u.bestado, p.vnombrecompleto ";
            $sql.= "from usuario u ";
            $sql.= "inner join persona p ";
            $sql.= "on u.iidpersona = p.iidpersona ";
            $sql.= "where u.bestado <> 0 ";
            $sql.= "order by p.vnombrecompleto ASC";
            $bindings = null;

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function insertarusuariom($idpersona, $codigousuario, $claveusuario, $reset, $usuarioregistro, $usuarioactualizacion) {
         try {
            $registrar = FALSE;
            $sql = "insert into usuario values(:idusuario, :idpersona, :codigousuario, :claveusuario, :reset, now(), :usuarioregistro, now(), :usuarioactualizacion, :estado)";
            $bindings = array("idusuario" => NULL,
                "idpersona" => $idpersona,
                "codigousuario" => $codigousuario, 
                "claveusuario" => $claveusuario,
                "reset" => $reset,
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
    
    public function actualizarusuariom($idusuario, $idpersona, $codigousuario, $claveusuario, $reset, $usuarioactualizacion) {
        try {
            if ($claveusuario != NULL) {
                $sql = "update usuario set iidpersona = :idpersona, vcodigousuario = :codigousuario, vclaveusuario = :claveusuario, breset = :reset, dfechaactualizacion = now(), vusuarioactualizacion = :usuarioactualizacion "; 
            }
            else {
                $sql = "update usuario set iidpersona = :idpersona, vcodigousuario = :codigousuario, breset = :reset, dfechaactualizacion = now(), vusuarioactualizacion = :usuarioactualizacion "; 
            }
            $sql.= "where iidusuario = :idusuario";
            $bindings = array("idpersona" => $idpersona, 
                "codigousuario" => $codigousuario, 
                "claveusuario" => $claveusuario,
                "reset" => $reset,
                "usuarioactualizacion" => $usuarioactualizacion,
                "idusuario" => $idusuario,
                );
            
            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function eliminarusuariom($idusuario) {
        try {
            $sql = "update usuario set bestado = 0, dfechaactualizacion = now() "; 
            $sql.= "where iidusuario = :idusuario";
            $bindings = array("idusuario" => $idusuario);
            
            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function recuperarusuarioporcodigom($idusuario) {
        try {
            $sql = "select u.iidusuario, u.iidpersona, u.vcodigousuario, u.vclaveusuario, u.bestado, p.vnombrecompleto ";
            $sql.= "from usuario u ";
            $sql.= "inner join persona p ";
            $sql.= "on u.iidpersona = p.iidpersona ";
            $sql.= "where u.iidusuario = :idusuario and u.bestado <> 0";
            $bindings = array("idusuario" => $idusuario);

            $this->query = database::executeentity($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function autenticarusuariom($codigousuario, $claveusuario) {
        try {
            $sql = "select u.iidusuario, u.iidpersona, u.vcodigousuario, u.vclaveusuario, u.breset, u.bestado, p.vnombrecompleto ";
            $sql.= "from usuario u ";
            $sql.= "inner join persona p ";
            $sql.= "on u.iidpersona = p.iidpersona ";
            $sql.= "where u.vcodigousuario = :codigousuario and u.vclaveusuario = :claveusuario";
            $bindings = array("codigousuario" => $codigousuario, 
                "claveusuario" => $claveusuario
                );

            $this->query = database::executeentity($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function validarusuariom($codigousuario) {
        try {
            $sql = "select vcodigousuario ";
            $sql.= "from usuario ";
            $sql.= "where vcodigousuario = :codigousuario";
            $bindings = array("codigousuario" => $codigousuario);

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}