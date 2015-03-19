<?php
class perfile {
    var $idperfil;
    var $nombreperfil;
    var $fecharegistro;
    var $usuarioregistro;
    var $fechaactualizacion;
    var $usuarioactualizacion;
    var $estado;
    
    public function getidperfil() {
        return $this->idperfil;
    }
    
    public function getnombreperfil() {
        return $this->nombreperfil;
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

    public function setidperfil($idperfil) {
        return $this->idperfil = $idperfil;
    }
    
    public function setnombreperfil($nombreperfil) {
        return $this->nombreperfil = $nombreperfil;
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
}