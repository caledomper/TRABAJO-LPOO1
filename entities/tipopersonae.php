<?php
class tipopersonae {
    var $idtipopersona;
    var $nombretipopersona;
    var $fecharegistro;
    var $usuarioregistro;
    var $fechaactualizacion;
    var $usuarioactualizacion;
    var $estado;
    
    public function getidtipopersona() {
        return $this->idtipopersona;
    }
    
    public function getnombretipopersona() {
        return $this->nombretipopersona;
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

    public function setidtipopersona($idtipopersona) {
        return $this->idtipopersona = $idtipopersona;
    }
    
    public function setnombretipopersona($nombretipopersona) {
        return $this->nombretipopersona = $nombretipopersona;
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