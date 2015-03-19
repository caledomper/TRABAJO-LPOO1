<?php
class tiposexoe {
    var $idtiposexo;
    var $nombretiposexo;
    var $fecharegistro;
    var $usuarioregistro;
    var $fechaactualizacion;
    var $usuarioactualizacion;
    var $estado;
    
    public function getidtiposexo() {
        return $this->idtiposexo;
    }
    
    public function getnombretiposexo() {
        return $this->nombretiposexo;
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

    public function setidtiposexo($idtiposexo) {
        return $this->idtiposexo = $idtiposexo;
    }
    
    public function setnombretiposexo($nombretiposexo) {
        return $this->nombretiposexo = $nombretiposexo;
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