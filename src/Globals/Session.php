<?php
namespace App\Globals;


class Session {

    public function set($values = []): bool
    {
        foreach($values as $key => $value) {
            $_SESSION[$key] = $value;
        }
        return true;
    }

    public function getAll()
    {
        if(isset($_SESSION) and is_array($_SESSION)) {
            return $_SESSION;
        }
        return null;
    }

    public function get($key) {
        if(isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

}