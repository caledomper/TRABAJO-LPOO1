<?php
class tipoestadocivile {
    var $idtipoestadocivil;
    var $nombretipoestadocivil;
    var $fecharegistro;
    var $usuarioregistro;
    var $fechaactualizacion;
    var $usuarioactualizacion;
    var $estado;
    
    public function getidtipoestadocivil() {
        return $this->idtipoestadocivil;
    }
    
    public function getnombretipoestadocivil() {
        return $this->nombretipoestadocivil;
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

    public function setidtipoestadocivil($idtipoestadocivil) {
        return $this->idtipoestadocivil = $idtipoestadocivil;
    }
    
    public function setnombretipoestadocivil($nombretipoestadocivil) {
        return $this->nombretipoestadocivil = $nombretipoestadocivil;
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