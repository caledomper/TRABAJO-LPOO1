<?php
include '../application/config.php';
require_once BASE_URL.'models/personam.php';
require_once BASE_URL.'entities/personae.php';

class personac extends personam {
    private static $instancia;

    public function __personac() {
        personam::singletonpersonam();
    }
    
    public static function singletonpersonac() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }

        return self::$instancia;
    }
    
    public function listarpersonac() {
        $data = array();
        $rs = personam::listarpersonam();

        for ($i = 0; $i < count($rs); $i++) {
            $objpersona = new personae();
            $objpersona->setidpersona($rs[$i]['iidpersona']);
            $objpersona->setidtipodocumento($rs[$i]['iidtipodocumento']);
            $objpersona->setidtipoestadocivil($rs[$i]['iidtipoestadocivil']);
            $objpersona->setidtiposexo($rs[$i]['iidtiposexo']);
            $objpersona->setidtipopersona($rs[$i]['iidtipopersona']);
            $objpersona->setapellidopaterno($rs[$i]['vapellidopaterno']);
            $objpersona->setapellidomaterno($rs[$i]['vapellidomaterno']);
            $objpersona->setnombres($rs[$i]['vnombres']);
            $objpersona->setnrodocumento($rs[$i]['vnrodocumento']);
            $objpersona->setrazonsocial($rs[$i]['vrazonsocial']);
            $objpersona->setruc($rs[$i]['vruc']);
            $objpersona->setfechanacimiento($rs[$i]['dfechanacimiento']);
            $objpersona->settelefono1($rs[$i]['vtelefono1']);
            $objpersona->settelefono2($rs[$i]['vtelefono2']);
            $objpersona->setemail($rs[$i]['temail']);
            $objpersona->setnombrecompleto($rs[$i]['vnombrecompleto']);
            $objpersona->setfecharegistro($rs[$i]['dfecharegistro']);
            $objpersona->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objpersona->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objpersona->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objpersona->setestado($rs[$i]['bestado']);
            $objpersona->setnombretipodocumento($rs[$i]['vnombretipodocumento']);
            $objpersona->setnombretipoestadocivil($rs[$i]['vnombretipoestadocivil']);
            $objpersona->setnombretiposexo($rs[$i]['vnombretiposexo']);
            $objpersona->setnombretipopersona($rs[$i]['vnombretipopersona']);
            $objpersona->setidusuario($rs[$i]['iidusuario']);
            $data[] = $objpersona;
        }
        
        return $data;
    }
    
    public function listarpersonausuarioc() {
        $data = array();
        $rs = personam::listarpersonausuariom();

        for ($i = 0; $i < count($rs); $i++) {
            $objpersona = new personae();
            $objpersona->setidpersona($rs[$i]['iidpersona']);
            $objpersona->setidtipodocumento($rs[$i]['iidtipodocumento']);
            $objpersona->setidtipoestadocivil($rs[$i]['iidtipoestadocivil']);
            $objpersona->setidtiposexo($rs[$i]['iidtiposexo']);
            $objpersona->setidtipopersona($rs[$i]['iidtipopersona']);
            $objpersona->setapellidopaterno($rs[$i]['vapellidopaterno']);
            $objpersona->setapellidomaterno($rs[$i]['vapellidomaterno']);
            $objpersona->setnombres($rs[$i]['vnombres']);
            $objpersona->setnrodocumento($rs[$i]['vnrodocumento']);
            $objpersona->setrazonsocial($rs[$i]['vrazonsocial']);
            $objpersona->setruc($rs[$i]['vruc']);
            $objpersona->setfechanacimiento($rs[$i]['dfechanacimiento']);
            $objpersona->settelefono1($rs[$i]['vtelefono1']);
            $objpersona->settelefono2($rs[$i]['vtelefono2']);
            $objpersona->setemail($rs[$i]['temail']);
            $objpersona->setnombrecompleto($rs[$i]['vnombrecompleto']);
            $objpersona->setfecharegistro($rs[$i]['dfecharegistro']);
            $objpersona->setusuarioregistro($rs[$i]['vusuarioregistro']);
            $objpersona->setfechaactualizacion($rs[$i]['dfechaactualizacion']);
            $objpersona->setusuarioactualizacion($rs[$i]['vusuarioactualizacion']);
            $objpersona->setestado($rs[$i]['bestado']);
            $objpersona->setnombretipodocumento($rs[$i]['vnombretipodocumento']);
            $objpersona->setnombretipoestadocivil($rs[$i]['vnombretipoestadocivil']);
            $objpersona->setnombretiposexo($rs[$i]['vnombretiposexo']);
            $objpersona->setnombretipopersona($rs[$i]['vnombretipopersona']);
            $objpersona->setidusuario($rs[$i]['iidusuario']);
            $data[] = $objpersona;
        }
        
        return $data;
    }
    
    public function insertarpersonac($idtipodocumento, $idtipoestadocivil, $idtiposexo, $idtipopersona, $apellidopaterno, $apellidomaterno, $nombres, $nrodocumento, $razonsocial, $ruc, $fechanacimiento, $telefono1, $telefono2, $email, $nombrecompleto, $usuarioregistro, $usuarioactualizacion) {
        $objpersona = new personae();
        $idtipodocumento = $objpersona->setidtipodocumento($idtipodocumento);
        $idtipoestadocivil = $objpersona->setidtipoestadocivil($idtipoestadocivil);
        $idtiposexo = $objpersona->setidtiposexo($idtiposexo);
        $idtipopersona = $objpersona->setidtipopersona($idtipopersona);
        $apellidopaterno = $objpersona->setapellidopaterno($apellidopaterno);
        $apellidomaterno = $objpersona->setapellidomaterno($apellidomaterno);
        $nombres = $objpersona->setnombres($nombres);
        $nrodocumento = $objpersona->setnrodocumento($nrodocumento);
        $razonsocial = $objpersona->setrazonsocial($razonsocial);
        $ruc = $objpersona->setruc($ruc);
        $fechanacimiento = $objpersona->setfechanacimiento($fechanacimiento);
        $telefono1 = $objpersona->settelefono1($telefono1);
        $telefono2 = $objpersona->settelefono2($telefono2);
        $email = $objpersona->setemail($email);
        $nombrecompleto = $objpersona->setnombrecompleto($nombrecompleto);
        $usuarioregistro = $objpersona->setusuarioregistro($usuarioregistro);
        $usuarioactualizacion = $objpersona->setusuarioactualizacion($usuarioactualizacion);
        $data = personam::insertarpersonam($idtipodocumento, $idtipoestadocivil, $idtiposexo, $idtipopersona, $apellidopaterno, $apellidomaterno, $nombres, $nrodocumento, $razonsocial, $ruc, $fechanacimiento, $telefono1, $telefono2, $email, $nombrecompleto, $usuarioregistro, $usuarioactualizacion);
        return $data;
    }
    
    public function actualizarpersonac($idpersona, $idtipodocumento, $idtipoestadocivil, $idtiposexo, $idtipopersona, $apellidopaterno, $apellidomaterno, $nombres, $nrodocumento, $razonsocial, $ruc, $fechanacimiento, $telefono1, $telefono2, $email, $nombrecompleto, $usuarioactualizacion) {
        $objpersona = new personae();
        $idpersona = $objpersona->setidpersona($idpersona);
        $idtipodocumento = $objpersona->setidtipodocumento($idtipodocumento);
        $idtipoestadocivil = $objpersona->setidtipoestadocivil($idtipoestadocivil);
        $idtiposexo = $objpersona->setidtiposexo($idtiposexo);
        $idtipopersona = $objpersona->setidtipopersona($idtipopersona);
        $apellidopaterno = $objpersona->setapellidopaterno($apellidopaterno);
        $apellidomaterno = $objpersona->setapellidomaterno($apellidomaterno);
        $nombres = $objpersona->setnombres($nombres);
        $nrodocumento = $objpersona->setnrodocumento($nrodocumento);
        $razonsocial = $objpersona->setrazonsocial($razonsocial);
        $ruc = $objpersona->setruc($ruc);
        $fechanacimiento = $objpersona->setfechanacimiento($fechanacimiento);
        $telefono1 = $objpersona->settelefono1($telefono1);
        $telefono2 = $objpersona->settelefono2($telefono2);
        $email = $objpersona->setemail($email);
        $nombrecompleto = $objpersona->setnombrecompleto($nombrecompleto);
        $usuarioactualizacion = $objpersona->setusuarioactualizacion($usuarioactualizacion);
        $data = personam::actualizarpersonam($idpersona, $idtipodocumento, $idtipoestadocivil, $idtiposexo, $idtipopersona, $apellidopaterno, $apellidomaterno, $nombres, $nrodocumento, $razonsocial, $ruc, $fechanacimiento, $telefono1, $telefono2, $email, $nombrecompleto, $usuarioactualizacion);
        
        return $data;
    }
    
    public function eliminarpersonac($idpersona) {
        $objpersona = new personae();
        $idpersona = $objpersona->setidpersona($idpersona);
        $data = personam::eliminarpersonam($idpersona);
             
        return $data;
    }
    
    public function recuperarpersonaporcodigoc($idpersona) {
        $row = personam::recuperarpersonaporcodigom($idpersona);
        
        $objpersona=new personae();
        $objpersona->setidpersona($row['iidpersona']);
        $objpersona->setidtipodocumento($row['iidtipodocumento']);
        $objpersona->setidtipoestadocivil($row['iidtipoestadocivil']);
        $objpersona->setidtiposexo($row['iidtiposexo']);
        $objpersona->setidtipopersona($row['iidtipopersona']);
        $objpersona->setapellidopaterno($row['vapellidopaterno']);
        $objpersona->setapellidomaterno($row['vapellidomaterno']);
        $objpersona->setnombres($row['vnombres']);
        $objpersona->setnrodocumento($row['vnrodocumento']);
        $objpersona->setrazonsocial($row['vrazonsocial']);
        $objpersona->setruc($row['vruc']);
        $objpersona->setfechanacimiento($row['dfechanacimiento']);
        $objpersona->settelefono1($row['vtelefono1']);
        $objpersona->settelefono2($row['vtelefono2']);
        $objpersona->setemail($row['temail']);
        $objpersona->setnombrecompleto($row['vnombrecompleto']);
        $objpersona->setfecharegistro($row['dfecharegistro']);
        $objpersona->setusuarioregistro($row['vusuarioregistro']);
        $objpersona->setfechaactualizacion($row['dfechaactualizacion']);
        $objpersona->setusuarioactualizacion($row['vusuarioactualizacion']);
        $objpersona->setestado($row['bestado']);
        $objpersona->setidusuario($row['iidusuario']);
        $objpersona->setcodigousuario($row['vcodigousuario']);
        $data = $objpersona;
        
        return $data;
    }
}