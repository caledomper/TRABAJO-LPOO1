<?php
abstract class database  {
    private $cnx;
    private static $instancia;

    public function __construct() {
        $this->cnx = self::conectar();
        return $this->cnx;
    }
    
    public static function singletondatabase() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }

        return self::$instancia;
    }
    
    protected function conectar($file = 'configuracion.ini') {
        if (!$param = parse_ini_file($file, TRUE)) { 
            throw new exception('No se puede abrir el archivo '.$file.'.'); 
        }
        
        $driver = $param['database']['driver'];
        $server = $param['database']['host'];
        $port = $param['database']['port'];
        $db = $param['database']['schema'];
        
        try {
            $this->cnx = new PDO("$driver:host={$server};port={$port};dbname={$db}", 
                    $param['database']['username'], 
                    $param['database']['password'], 
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        catch (PDOException $e) {
            self::error("A ocurrido un error mientras se conectaba a la base de datos. "."El error reportado por el servidor es: ".$e->getMessage());
        }
        
        return $this->cnx;
    }
    
    protected function execute($bindings = array(), $sql = NULL) {
        if ($sql == NULL) {
            $sql = $bindings; 
        }
        
        $resultado = false;
        $campo = NULL;
        
        if($stmt = $this->cnx->prepare($sql)) {  //prepara la consulta
            if(preg_match_all("/(:\w+)/", $sql, $campo, PREG_PATTERN_ORDER)) {
                $campo = array_pop($campo); //inserto en un arreglo
                foreach($campo as $param) {
                    $stmt->bindValue($param, $bindings[substr($param, 1)]);
                }
            }
            try {
                if (!$stmt->execute()) { //si no se ejecuta la consulta...
                    print_r($stmt->errorInfo()); //imprimir errores
                }
                
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); //si es una consulta que devuelve valores los guarda en un arreglo.
                $stmt->closeCursor();
            }
            catch(PDOException $e) {
                echo "A ocurrido un error al ejecutar consulta: \n";
                print_r($e->getMessage());
            }
        }
        
        return $resultado;
        $this->cnx = null;
    }
    
    protected function executeentity($bindings = array(), $sql = NULL) {
        if ($sql == NULL) {
            $sql = $bindings; 
        }
        
        $resultado = false;
        $campo = NULL;
        
        if($stmt = $this->cnx->prepare($sql)) {  //prepara la consulta
            if(preg_match_all("/(:\w+)/", $sql, $campo, PREG_PATTERN_ORDER)) {
                $campo = array_pop($campo); //inserto en un arreglo
                foreach($campo as $param) {
                    $stmt->bindValue($param, $bindings[substr($param, 1)]);
                }
            }
            try {
                if (!$stmt->execute()) { //si no se ejecuta la consulta...
                    print_r($stmt->errorInfo()); //imprimir errores
                }
                
                $resultado = $stmt->fetch(); //si es una consulta que devuelve valores los guarda en un arreglo.
                $stmt->closeCursor();
            }
            catch(PDOException $e) {
                echo "A ocurrido un error al ejecutar consulta: \n";
                print_r($e->getMessage());
            }
        }
        
        return $resultado;
        $this->cnx = null;
    }

    protected function executeregister($bindings = array(), $sql = NULL) {
        if ($sql == NULL) {
            $sql = $bindings; 
        }
        
        $resultado = false;
        $campo = NULL;
        
        if($stmt = $this->cnx->prepare($sql)) {  //prepara la consulta
            if(preg_match_all("/(:\w+)/", $sql, $campo, PREG_PATTERN_ORDER)) {
                $campo = array_pop($campo); //inserto en un arreglo
                foreach($campo as $param) {
                    $stmt->bindValue($param, $bindings[substr($param, 1)]);
                }
            }
            try {
                if (!$stmt->execute()) { //si no se ejecuta la consulta...
                    print_r($stmt->errorInfo()); //imprimir errores
                }
                
                $resultado = $this->cnx->lastInsertId(); //si es una consulta que devuelve valores los guarda en un arreglo.
                $stmt->closeCursor();
            }
            catch(PDOException $e) {
                echo "A ocurrido un error al ejecutar consulta: \n";
                print_r($e->getMessage());
            }
        }
        
        return $resultado;
        $this->cnx = null;
    }
    
    protected function executerowcount($bindings = array(), $sql = NULL) {
        if ($sql == NULL) {
            $sql = $bindings; 
        }
        
        $resultado = false;
        $campo = NULL;
 
        if($stmt = $this->cnx->prepare($sql)){  //prepara la consulta
            if(preg_match_all("/(:\w+)/", $sql, $campo, PREG_PATTERN_ORDER)){
                $campo = array_pop($campo); //inserto en un arreglo
                foreach($campo as $param) {
                    $stmt->bindValue($param, $bindings[substr($param, 1)]);
                }
            }
            try {
                if (!$stmt->execute()) { //si no se ejecuta la consulta...
                    print_r($stmt->errorInfo()); //imprimir errores
                }
                $resultado = $stmt->rowCount(); //devuelva la cantidad de registros en una consulta.
                $stmt->closeCursor();
            }
            catch(PDOException $e){
                echo "A ocurrido un error al ejecutar consulta: \n";
                print_r($e->getMessage());
            }
        }
        
        return $resultado;
        $this->cnx = null;
    }
    
    protected function error($msg) {
        echo json_encode(array("error" => $msg));
        exit(0);
    }
}