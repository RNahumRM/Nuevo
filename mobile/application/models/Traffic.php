<?php


class Traffic extends CI_Model {

    //because the MySQL server si UTC
//    const UTC_DIFF_TIME = 5;

    public function all($filter = 'all') {

        $traffic = array();

        $query = "SELECT * FROM traffic";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $traffic =  $result->result();
        }

        return $traffic;

    }

    public function add($request){

        echo $now = date('Y-m-d H:i:s');

        $args = explode(',', $request);

        $imei = count($args) > 4 ? $args[3] : '';

        $data = array(
            "request" => $request,
            "created" => $now,
            "imei" => $imei
        );

        $this->db->insert("traffic", $data);

        return $this->db->insert_id();
    }

}