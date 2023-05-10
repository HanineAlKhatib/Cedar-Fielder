<?php
class Cookie {
    public static function set($name, $value, $expire = 0, $path = '/', $domain = null, $secure = false, $httponly = false) {
      setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
    }
  
    public static function get($name, $default = null) {
      return isset($_COOKIE[$name]) ? $_COOKIE[$name] : $default;
    }
  
    public static function delete($name, $path = '/', $domain = null, $secure = false, $httponly = false) {
      setcookie($name, null, time() - 3600, $path, $domain, $secure, $httponly);
    }
  }
  

?>