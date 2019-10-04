<?php


class Units extends CI_Model
{
    public function init() {

        $routers = $this->routers->all();

        foreach($routers as $router) {

            $number = $this->generateSerial(3);
            $route = $this->generateSerial(3);
            $plateNumber = $this->generateSerial(3) . '-' . $this->generateSerial(3);

            $unit = array(
                "id_router" => $router->id,
                "number" => $number,
                "route" => $route,
                "plate_number" => $plateNumber,
                "driver" => 'Nombre del conductor',
                "owner" => 'Nombre del responsable de la concesión',
                "company" => 'Empresa'
            );

            $this->db->insert("units", $unit);

            echo $this->db->insert_id();
        }
    }

    public function createRandomVIN(){

        $query = 'SELECT id FROM units';

        $result = $this->db->query($query);

        if($result->num_rows()) {

            $units = $result->result_array();

            foreach ($units as $unit) {

                $vin = $this->generateSerial(12);

                $this->db->set('vin', $vin)
                    ->where('id', $unit['id'])
                    ->update('units');
            }

        }
    }

    private function generateSerial($length = 10){

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;

    }

    public function all(){

        $units =  array();

        $query = '
                    SELECT 
                        U.*, 
                        R.*, 
                        T.name AS tenant 
                    FROM 
                         units U, 
                         routers R, 
                         tenants T 
                    WHERE 
                          U.active = 1 AND 
                          U.id_router = R.id AND 
                          R.id_tenant = T.id';

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $units = $result->result_array();
        }

        return $units;

    }

    public function allGroupByTenant($vehicle, $strTenants){

        $tenantsGroup = array();

        if($strTenants) {

            $whereTenants = " WHERE id IN ($strTenants) ";

            $query = "SELECT id, name FROM tenants $whereTenants";

            $result = $this->db->query($query);

            if ($result->num_rows()) {

                $tenants = $result->result_array();

                foreach ($tenants as $tenant) {

                    $units = array();

                    $id_tenant = $tenant['id'];
                    $tenantName = $tenant['name'];

                    $query = "SELECT 
                            U.*, 
                            R.*, 
                            T.name AS tenant, 
                            (SELECT GROUP_CONCAT(C.cameraId) FROM cameras C WHERE C.id_unit = U.id) AS cameraIds,
                            (SELECT GROUP_CONCAT(C.online) FROM cameras C WHERE C.id_unit = U.id) AS camerasOnline
                        FROM units U
                            LEFT JOIN routers R ON U.id_router = R.id
                            LEFT JOIN tenants T ON T.id = R.id_tenant
                        WHERE 
                            U.active = 1 AND 
                            R.id_tenant = $id_tenant AND 
                            vehicle = $vehicle";

                    $result = $this->db->query($query);

                    if ($result->num_rows()) {
                        $units = $result->result_array();
                        $tenantsGroup[$tenantName] = $units;
                    }

                }

            }
        }

        return $tenantsGroup;

    }

    public function cameras($idUnit){

        $cameras =  array();

        if($idUnit) {

            $query = "SELECT * FROM cameras WHERE id_unit = $idUnit";

            $result = $this->db->query($query);

            if ($result->num_rows()) {
                $cameras = $result->result_array();
            }
        }

        return $cameras;
    }
}