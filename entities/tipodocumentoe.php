<?php
class tipodocumentoe {
    var $idtipodocumento;
    var $idtipopersona;
    var $nombretipodocumento;
    var $fecharegistro;
    var $usuarioregistro;
    var $fechaactualizacion;
    var $usuarioactualizacion;
    var $estado;
    var $nombretipopersona;
    
    public function getidtipodocumento() {
        return $this->idtipodocumento;
    }
    
    public function getidtipopersona() {
        return $this->idtipopersona;
    }
    
    public function getnombretipodocumento() {
        return $this->nombretipodocumento;
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
    
    public function getnombretipopersona() {
        return $this->nombretipopersona;
    }

    public function setidtipodocumento($idtipodocumento) {
        return $this->idtipodocumento = $idtipodocumento;
    }

    public function setidtipopersona($idtipopersona) {
        return $this->idtipopersona = $idtipopersona;
    }
    
    public function setnombretipodocumento($nombretipodocumento) {
        return $this->nombretipodocumento = $nombretipodocumento;
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

    public function setnombretipopersona($nombretipopersona) {
        return $this->nombretipopersona = $nombretipopersona;
    }
}