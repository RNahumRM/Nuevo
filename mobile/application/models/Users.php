<?php


class Users extends CI_Model {

    public function isValidUser($email, $password) {

        $usuario = array();

        $password = sha1($password);

        $query = "SELECT U.*, P.type AS profile FROM users U, profiles P WHERE active = 1 AND email = '$email' AND password = '$password' AND U.id_profile = P.id";

        $resultado = $this->db->query($query);

        if($resultado->num_rows()) {
            $usuario =  $resultado->result();
            $usuario = $usuario[0];
        }

        return $usuario;

    }

    public function info($id) {

        $usuario = array();

        $query = "SELECT U.* FROM users U WHERE U.active = 1 AND U.id = $id";

        $resultado = $this->db->query($query);

        if($resultado->num_rows()) {
            $usuario =  $resultado->result();
            $usuario = $usuario[0];
        }

        return $usuario;

    }

}