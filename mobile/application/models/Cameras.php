<?php


class Cameras extends CI_Model
{

    public function all(){

        $cameras = array();

        $query = "SELECT * FROM cameras";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $cameras =  $result->result_array();
        }

        return $cameras;

    }

    public function find($id){

        $camera = array();

        $query = "SELECT * FROM cameras WHERE id = $id LIMIT 1;";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $camera =  $result->result();
            $camera =  $camera[0];
        }

        return $camera;

    }

    public function update($camera){

        if(array_key_exists('cameraId', $camera)){

            $cameraId = $camera['cameraId'];

            // check if the camera already exist
            $query = "SELECT id FROM cameras WHERE cameraId = $cameraId LIMIT 1;";

            $result = $this->db->query($query);

            if($result->num_rows()) {
                // the camera exist then update
                $this->db->where('cameraId', $cameraId);
                $this->db->update('cameras',$camera);
            } else {
                // add the camera to th DB
                $this->db->insert("cameras", $camera);
            }

        }

    }

}