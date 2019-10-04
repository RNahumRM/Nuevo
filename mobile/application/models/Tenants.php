<?php

class Tenants extends CI_Model {

    public function allByUSer($id) {

        $tenants = array();

        $query = "SELECT GROUP_CONCAT(id_tenant) AS tenants FROM users_tenants WHERE id_user = $id";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $tenants =  $result->result_array();
            $tenants = $tenants[0]['tenants'];
        }

        return $tenants;

    }

}