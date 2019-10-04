<?php


class Routers extends CI_Model
{
    public function init() {

        for($i = 1001; $i < 1501;  $i++) {

            $serial = $this->generateSerial();

            $router = array(
                "id" => $i,
                "imei" => $serial
            );

            $this->db->insert("routers", $router);

            echo $this->db->insert_id();
        }
    }

    private function generateSerial(){

        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;

    }

    public function all(){

        $routers = array();

        $query = "SELECT * FROM routers";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $routers =  $result->result();
        }

        return $routers;

    }

    public function random(){

        $router = array();

        $query = "SELECT * FROM routers ORDER BY RAND() LIMIT 1;";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $router =  $result->result();
            $router =  $router[0];
        }

        return $router;

    }

    public function find($id){

        $router = array();

        $query = "SELECT * FROM routers WHERE id = $id LIMIT 1;";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $router =  $result->result();
            $router =  $router[0];
        }

        return $router;

    }

    public function findByImei($imei){

        $router = array();

        $query = "SELECT * FROM routers WHERE imei = '" . $imei . "' LIMIT 1;";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $router =  $result->result();
            $router =  $router[0];
        }

        return $router;

    }

    public function updatePosition($id_router, $lat, $lng){

        $position = array(
            "lat" => $lat,
            "lng" => $lng
        );

        $this->db->where('id', $id_router);
        $this->db->update('routers',$position);

        return $id_router;
    }

    public function updateIdRouterFacilitie(){

        $id_facilitie = 1;

        for($i = 1001; $i <1501; $i++) {

            $facilitie = array(
                "id_router" => $i
            );

            $this->db->where('id', $id_facilitie++);
            $this->db->update('facilities', $facilitie);
        }

    }

    public function updatePositionInit(){

        $query = "SELECT * FROM routers WHERE LENGTH(imei) != LENGTH('861585040631416') AND vehicle = 1";

        $result = $this->db->query($query);

        if($result->num_rows()) {

            foreach ($result->result() as $router) {

                // echo $lat = '19.' . rand(1, 9) . '86332';
                $lat = '19.' . rand(900, 9963) . '332';
                // echo '<br>';
                // echo $lng = '-99.' . rand(1, 9) . '47865';
                $lng = '-99.' . rand(900, 9978) . '65';

                $this->updatePosition($router->id, $lat, $lng);
            }

        }
    }
}