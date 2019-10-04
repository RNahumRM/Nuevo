<?php


class Facilities extends CI_Model
{

    public function all(){

        $units =  array();

        $query = 'SELECT F.*, R.*, T.name AS tenant FROM facilities F, routers R, tenants T WHERE F.active = 1 AND F.id_router = R.id AND R.id_tenant = T.id';

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $units = $result->result_array();
        }

        return $units;

    }

    public function allGroupByTenant(){

        $tenantsGroup =  array();

        $query = 'SELECT id, name FROM tenants';

        $result = $this->db->query($query);

        if($result->num_rows()) {

            $tenants = $result->result_array();

            foreach ($tenants as $tenant){

                $id_tenant = $tenant['id'];
                $tenantName = $tenant['name'];

                $query = "SELECT F.*, R.* FROM facilities F, routers R WHERE F.active = 1 AND F.id_router = R.id AND R.id_tenant = $id_tenant";

                $result = $this->db->query($query);

                if($result->num_rows()) {
                    $units = $result->result_array();
                    $tenantsGroup[$tenantName] = $units;
                }

            }

        }



        return $tenantsGroup;

    }
}