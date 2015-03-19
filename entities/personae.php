<?php
class personae {
    var $idpersona;
    var $idtipodocumento; 
    var $idtipoestadocivil; 
    var $idtiposexo; 
    var $idtipersona; 
    var $apellidopaterno; 
    var $apellidomaterno; 
    var $nombres; 
    var $nrodocumento; 
    var $razonsocial; 
    var $ruc; 
    var $fechanacimiento; 
    var $telefono1; 
    var $telefono2; 
    var $email; 
    var $nombrecompleto;
    var $fecharegistro;
    var $usuarioregistro;
    var $fechaactualizacion;
    var $usuarioactualizacion;
    var $estado;
    var $nombretipodocumento;
    var $nombretipoestadocivil;
    var $nombretiposexo;
    var $nombretipopersona;
    var $idusuario;
    var $codigousuario;
    
    public function getidpersona() {
        return $this->idpersona;
    }
    
    public function getidtipodocumento() {
        return $this->idtipodocumento;
    }

    public function getidtipoestadocivil() {
        return $this->idtipoestadocivil;
    }

    public function getidtiposexo() {
        return $this->idtiposexo;
    }
    
    public function getidtipopersona() {
        return $this->idtipopersona;
    }
    
    public function getapellidopaterno() {
        return $this->apellidopaterno;
    }
    
    public function getapellidomaterno() {
        return $this->apellidomaterno;
    }
    
    public function getnombres() {
        return $this->nombres;
    }

    public function getnrodocumento() {
        return $this->nrodocumento;
    }

    public function getrazonsocial() {
        return $this->razonsocial;
    }

    public function getruc() {
        return $this->ruc;
    }

    public function getfechanacimiento() {
        return $this->fechanacimiento;
    }

    public function gettelefono1() {
        return $this->telefono1;
    }
    
    public function gettelefono2() {
        return $this->telefono2;
    }

    public function getemail() {
        return $this->email;
    }

    public function getnombrecompleto() {
        return $this->nombrecompleto;
    }

    public function getfecharegistro() {
        return $this->fecharegistro;
    }
    
    public function getusuarioregistro() {
        return $this->usuarioregistro;
    }

    public function getfechaactualizacion() {
        return $this->fechaactualizacion;
    }

    public function getusuarioactualizacion() {
        return $this->usuarioactualizacion;
    }
    
    public function getestado() {
        return $this->estado;
    }

    public function getnombretipodocumento() {
        return $this->nombretipodocumento;
    }
    
    public function getnombretipoestadocivil() {
        return $this->nombretipoestadocivil;
    }
    
    public function getnombretiposexo() {
        return $this->nombretiposexo;
    }

    public function getnombretipopersona() {
        return $this->nombretipopersona;
    }
    
    public function getidusuario() {
        return $this->idusuario;
    }
    
    public function getcodigousuario() {
        return $this->codigousuario;
    }

    public function setidpersona($idpersona) {
        return $this->idpersona = $idpersona;
    }
    
    public function setidtipodocumento($idtipodocumento) {
        return $this->idtipodocumento = $idtipodocumento;
    }

    public function setidtipoestadocivil($idtipoestadocivil) {
        return $this->idtipoestadocivil = $idtipoestadocivil;
    }

    public function setidtiposexo($idtiposexo) {
        return $this->idtiposexo = $idtiposexo;
    }
    
    public function setidtipopersona($idtipopersona) {
        return $this->idtipopersona = $idtipopersona;
    }
    
    public function setapellidopaterno($apellidopaterno) {
        return $this->apellidopaterno = $apellidopaterno;
    }
    
    public function setapellidomaterno($apellidomaterno) {
        return $this->apellidomaterno = $apellidomaterno;
    }
    
    public function setnombres($nombres) {
        return $this->nombres = $nombres;
    }

    public function setnrodocumento($nrodocumento) {
        return $this->nrodocumento = $nrodocumento;
    }

    public function setrazonsocial($razonsocial) {
        return $this->razonsocial = $razonsocial;
    }

    public function setruc($ruc) {
        return $this->ruc = $ruc;
    }

    public function setfechanacimiento($fechanacimiento) {
        return $this->fechanacimiento = $fechanacimiento;
    }

    public function settelefono1($telefono1) {
        return $this->telefono1 = $telefono1;
    }
    
    public function settelefono2($telefono2) {
        return $this->telefono2 = $telefono2;
    }

    public function setemail($email) {
        return $this->email = $email;
    }

    public function setnombrecompleto($nombrecompleto) {
        return $this->nombrecompleto = $nombrecompleto;
    }
       
    public function setfecharegistro($fecharegistro) {
        return $this->fecharegistro = $fecharegistro;
    }
    
    public function setusuarioregistro($usuarioregistro) {
        return $this->usuarioregistro = $usuarioregistro;
    }
    
    public function setfechaactualizacion($fechaactualizacion) {
        return $this->fechaactualizacion = $fechaactualizacion;
    }

    public function setusuarioactualizacion($usuarioactualizacion) {
        return $this->usuarioactualizacion = $usuarioactualizacion;
    }

    public function setestado($estado) {
        return $this->estado = $estado;
    }

    public function setnombretipodocumento($nombretipodocumento) {
        return $this->nombretipodocumento = $nombretipodocumento;
    }

    public function setnombretipoestadocivil($nombretipoestadocivil) {
        return $this->nombretipoestadocivil = $nombretipoestadocivil;
    }
    
    public function setnombretiposexo($nombretiposexo) {
        return $this->nombretiposexo = $nombretiposexo;
    }
    
    public function setnombretipopersona($nombretipopersona) {
        return $this->nombretipopersona = $nombretipopersona;
    }

    public function setidusuario($idusuario) {
        return $this->idusuario = $idusuario;
    }
    
    public function setcodigousuario($codigousuario) {
        return $this->codigousuario = $codigousuario;
    }
}