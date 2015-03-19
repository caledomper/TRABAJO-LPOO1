<?php
class usuarioe {   
    var $idusuario;
    var $idpersona;
    var $codigousuario;
    var $claveusuario;
    var $reset;
    var $fecharegistro;
    var $usuarioregistro;
    var $fechaactualizacion;
    var $usuarioactualizacion;
    var $estado;
    var $nombrecompleto;
    
    public function getidusuario() {
        return $this->idusuario;
    }
    
    public function getidpersona() {
        return $this->idpersona;
    }
    
    public function getcodigousuario() {
        return $this->codigousuario;
    }
    
    public function getclaveusuario() {
        return $this->claveusuario;
    }

    public function getreset() {
        return $this->reset;
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

    public function getnombrecompleto() {
        return $this->nombrecompleto;
    }
    
    public function setidusuario($idusuario) {
        return $this->idusuario = $idusuario;
    }

    public function setidpersona($idpersona) {
        return $this->idpersona = $idpersona;
    }
    
    public function setcodigousuario($codigousuario) {
        return $this->codigousuario = $codigousuario;
    }
    
    public function setclaveusuario($claveusuario) {
        return $this->claveusuario = $claveusuario;
    }

    public function setreset($reset) {
        return $this->reset = $reset;
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

    public function setnombrecompleto($nombrecompleto) {
        return $this->nombrecompleto = $nombrecompleto;
    }
}