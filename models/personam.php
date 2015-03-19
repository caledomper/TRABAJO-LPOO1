<?php
include '../application/config.php';
require_once BASE_URL.'application/database.php';

class personam extends database { 
    private $query;
    private static $instancia;

    public function __personam() { 
        database::singletondatabase();
    }
    
    public static function singletonpersonam() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }
        
        return self::$instancia;
    }
    
    public function listarpersonam() {
        try {
            $sql = "select p.iidpersona, p.iidtipodocumento, p.iidtipoestadocivil, p.iidtiposexo, p.iidtipopersona, p.vapellidopaterno, p.vapellidomaterno, p.vnombres, p.vnrodocumento, p.vrazonsocial, p.vruc, DATE_FORMAT(p.dfechanacimiento,'%d/%m/%Y') AS dfechanacimiento, p.vtelefono1, p.vtelefono2, p.temail, p.vnombrecompleto, p.dfecharegistro, p.vusuarioregistro, p.dfechaactualizacion, p.vusuarioactualizacion, p.bestado, td.vnombretipodocumento, tec.vnombretipoestadocivil, ts.vnombretiposexo, tp.vnombretipopersona, u.iidusuario ";
            $sql.= "from persona p ";
            $sql.= "inner join usuario u ";
            $sql.= "on p.iidpersona = u.iidpersona ";
            $sql.= "inner join tipodocumento td ";
            $sql.= "on p.iidtipodocumento = td.iidtipodocumento ";
            $sql.= "inner join tipoestadocivil tec ";
            $sql.= "on p.iidtipoestadocivil = tec.iidtipoestadocivil ";
            $sql.= "inner join tiposexo ts ";
            $sql.= "on p.iidtiposexo = ts.iidtiposexo ";
            $sql.= "inner join tipopersona tp ";
            $sql.= "on p.iidtipopersona = tp.iidtipopersona ";
            $sql.= "where p.bestado <> 0 ";
            $sql.= "order by p.vnombrecompleto ASC";
            $bindings = null;

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function listarpersonausuariom() {
        try {
            $sql = "select p.iidpersona, p.iidtipodocumento, p.iidtipoestadocivil, p.iidtiposexo, p.iidtipopersona, p.vapellidopaterno, p.vapellidomaterno, p.vnombres, p.vnrodocumento, p.vrazonsocial, p.vruc, DATE_FORMAT(p.dfechanacimiento,'%d/%m/%Y') AS dfechanacimiento, p.vtelefono1, p.vtelefono2, p.temail, p.vnombrecompleto, p.dfecharegistro, p.vusuarioregistro, p.dfechaactualizacion, p.vusuarioactualizacion, p.bestado, td.vnombretipodocumento, tec.vnombretipoestadocivil, ts.vnombretiposexo, tp.vnombretipopersona, u.iidusuario ";
            $sql.= "from persona p ";
            $sql.= "inner join usuario u ";
            $sql.= "on p.iidpersona = u.iidpersona ";
            $sql.= "inner join tipodocumento td ";
            $sql.= "on p.iidtipodocumento = td.iidtipodocumento ";
            $sql.= "inner join tipoestadocivil tec ";
            $sql.= "on p.iidtipoestadocivil = tec.iidtipoestadocivil ";
            $sql.= "inner join tiposexo ts ";
            $sql.= "on p.iidtiposexo = ts.iidtiposexo ";
            $sql.= "inner join tipopersona tp ";
            $sql.= "on p.iidtipopersona = tp.iidtipopersona ";
            $sql.= "where p.bestado <> 0 and tp.iidtipopersona = 1 ";
            $sql.= "order by p.vnombrecompleto ASC";
            $bindings = null;

            $this->query = database::execute($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function insertarpersonam($idtipodocumento, $idtipoestadocivil, $idtiposexo, $idtipopersona, $apellidopaterno, $apellidomaterno, $nombres, $nrodocumento, $razonsocial, $ruc, $fechanacimiento, $telefono1, $telefono2, $email, $nombrecompleto, $usuarioregistro, $usuarioactualizacion)  {
        try {
            $registrar = FALSE;
            $sql = "insert into persona values(:idpersona, :idtipodocumento, :idtipoestadocivil, :idtiposexo, :idtipopersona, :apellidopaterno, :apellidomaterno, :nombres, :nrodocumento, :razonsocial, :ruc, :fechanacimiento, :telefono1, :telefono2, :email, :nombrecompleto, now(), :usuarioregistro, now(), :usuarioactualizacion, :estado); select LAST_INSERT_ID() as idpersonalast;";
            $bindings = array("idpersona" => NULL, 
                "idtipodocumento" => $idtipodocumento, 
                "idtipoestadocivil" => $idtipoestadocivil, 
                "idtiposexo" => $idtiposexo, 
                "idtipopersona" => $idtipopersona, 
                "apellidopaterno" => $apellidopaterno, 
                "apellidomaterno" => $apellidomaterno, 
                "nombres" => $nombres, 
                "nrodocumento" => $nrodocumento, 
                "razonsocial" => $razonsocial, 
                "ruc" => $ruc, 
                "fechanacimiento" => $fechanacimiento, 
                "telefono1" => $telefono1, 
                "telefono2" => $telefono2, 
                "email" => $email, 
                "nombrecompleto" => $nombrecompleto, 
                "usuarioregistro" => $usuarioregistro, 
                "usuarioactualizacion" => $usuarioactualizacion, 
                "estado" => 1
            );

            $this->query = database::executeregister($bindings, $sql);

            if (empty($registrar) or $registrar != FALSE) {
                return $this->query;
            }
            else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function actualizarpersonam($idpersona, $idtipodocumento, $idtipoestadocivil, $idtiposexo, $idtipopersona, $apellidopaterno, $apellidomaterno, $nombres, $nrodocumento, $razonsocial, $ruc, $fechanacimiento, $telefono1, $telefono2, $email, $nombrecompleto, $usuarioactualizacion) {
        try {
            $sql = "update persona set iidtipodocumento = :idtipodocumento, iidtipoestadocivil = :idtipoestadocivil, iidtiposexo = :idtiposexo, iidtipopersona = :idtipopersona, vapellidopaterno = :apellidopaterno, vapellidomaterno = :apellidomaterno, vnombres = :nombres, vnrodocumento = :nrodocumento, vrazonsocial = :razonsocial, vruc = :ruc, dfechanacimiento = :fechanacimiento, vtelefono1 = :telefono1, vtelefono2 = :telefono2, temail = :email, vnombrecompleto = :nombrecompleto, dfechaactualizacion = now(), vusuarioactualizacion = :usuarioactualizacion ";
            $sql.= "where iidpersona = :idpersona";
            $bindings = array("idtipodocumento" => $idtipodocumento, 
                "idtipoestadocivil" => $idtipoestadocivil, 
                "idtiposexo" => $idtiposexo, 
                "idtipopersona" => $idtipopersona, 
                "apellidopaterno" => $apellidopaterno, 
                "apellidomaterno" => $apellidomaterno, 
                "nombres" => $nombres, 
                "nrodocumento" => $nrodocumento, 
                "razonsocial" => $razonsocial, 
                "ruc" => $ruc, 
                "fechanacimiento" => $fechanacimiento, 
                "telefono1" => $telefono1, 
                "telefono2" => $telefono2, 
                "email" => $email, 
                "nombrecompleto" => $nombrecompleto, 
                "usuarioactualizacion" => $usuarioactualizacion, 
                "idpersona" => $idpersona 
            );

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
    
    public function eliminarpersonam($idpersona) {
        try {
            $sql = "update persona set bestado = 0, dfechaactualizacion = now() ";
            $sql.= "where iidpersona = :idpersona";
            $bindings = array("idpersona" => $idpersona);

            $this->query = database::executerowcount($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function recuperarpersonaporcodigom($idpersona) {
        try {
            $sql = "select p.iidpersona, p.iidtipodocumento, p.iidtipoestadocivil, p.iidtiposexo, p.iidtipopersona, p.vapellidopaterno, p.vapellidomaterno, p.vnombres, p.vnrodocumento, p.vrazonsocial, p.vruc, p.vruc, DATE_FORMAT(p.dfechanacimiento,'%d/%m/%Y') AS dfechanacimiento, p.vtelefono1, p.vtelefono2, p.temail, p.vnombrecompleto, p.dfecharegistro, p.vusuarioregistro, p.dfechaactualizacion, p.vusuarioactualizacion, p.bestado, u.iidusuario, u.vcodigousuario ";
            $sql.= "from persona p ";
            $sql.= "inner join usuario u ";
            $sql.= "on p.iidpersona = u.iidpersona ";
            $sql.= "where p.iidpersona = :idpersona and p.bestado <> 0 ";
            $sql.= "order by p.vnombrecompleto ASC";
            $bindings = array("idpersona" => $idpersona);

            $this->query = database::executeentity($bindings, $sql);
            return $this->query;
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }
}