<?php


class Comments extends CI_Model {

    //because the MySQL server si UTC
//    const UTC_DIFF_TIME = 5;

    public function all() {

        $comments = array();

        $query = "SELECT *  FROM comments";

        $result = $this->db->query($query);

        if($result->num_rows()) {
            $comments =  $result->result();
        }

        return $comments;

    }

    public function create($id_alarm, $comments){

        $now = date('Y-m-d H:i:s');

        $comment = array(
            "id_alarm" => $id_alarm,
            "comments" => $comments,
            'created' => $now,
        );

        $this->db->insert("comments", $comment);

        return $this->db->insert_id();
    }

    public function find($idAlarm){

        $comments = array();

        if($idAlarm){

            $query = "SELECT * FROM comments WHERE id_alarm = $idAlarm";

            $result = $this->db->query($query);

            if($result->num_rows()) {
                $comments =  $result->result();
            }
        }

        return $comments;

    }

}