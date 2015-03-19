<?php
class hash {
    private static $instancia;

    public static function singletonhash() {
        if (!isset(self::$instancia)) {
            $myclass = __CLASS__;
            self::$instancia = new $myclass;
        }

        return self::$instancia;
    }

    public static function obtenerhash($algoritmo, $data, $key) {
        $hash = hash_init($algoritmo, HASH_HMAC, $key);
        hash_update($hash, $data);
        return hash_final($hash);
    }
}