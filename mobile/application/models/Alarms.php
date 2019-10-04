<?php


class Alarms extends CI_Model {

    //because the MySQL server si UTC
//    const UTC_DIFF_TIME = 5;

    public function all($filter, $strTenants = '') {

        $alarms = array();

            $where = '';

            $filter = $filter ? $filter : 'all';

            switch ($filter) {
                case 'all':
                    $where = '';
                    break;
                case 'waiting':
                    $where = ' WHERE waiting = 1';
                    break;
                case 'attending':
                    $where = ' WHERE attending = 1';
                    break;
                case 'attended':
                    $where = ' WHERE attended = 1';
                    break;
                case 'canceled':
                    $where = ' WHERE canceled = 1';
                    break;
            }

            $whereTenants = $strTenants ? " T.id IN ($strTenants) " : '';

            $whereTenants = $where ? ($whereTenants ? ' AND ' . $whereTenants : $whereTenants) : ' WHERE ' . $whereTenants;

            $query = "SELECT
       A.*,
       U.plate_number,
       U.number,
       U.route,
       U.driver,
       U.company,
       U.owner,
       R.imei,
       U.id AS id_unit,
       # C.cameraId
       (SELECT GROUP_CONCAT(C.cameraId) FROM cameras C WHERE C.id_unit = U.id) AS cameraIds,
       (SELECT GROUP_CONCAT(C.online) FROM cameras C WHERE C.id_unit = U.id) AS camerasOnline
FROM
     alarms A
     LEFT JOIN routers R ON A.id_router = R.id
     LEFT JOIN units U ON U.id_router = R.id
     LEFT JOIN tenants T ON T.id = R.id_tenant
 " . $where . $whereTenants . " 
 ORDER BY A.id";

            $resultado = $this->db->query($query);

            if ($resultado->num_rows()) {
                $alarms = $resultado->result();
            }

        return $alarms;

    }

    public function create($id_router, $lat, $lng){

        $now = date('Y-m-d H:i:s');

        $router = array(
            "id_router" => $id_router,
            "lat" => $lat,
            "lng" => $lng,
            'created' => $now,
            'updated' => $now
        );

        $this->db->insert("alarms", $router);

        return $this->db->insert_id();
    }

    public function find($idAlarm){

        $alarm = array();

        if($idAlarm){

            $query = "SELECT A.*, U.plate_number, U.number, U.route, U.driver, U.company, U.owner, R.imei FROM alarms A, routers R, units U WHERE A.id_router = R.id AND U.id_router = R.id AND A.id = $idAlarm";

            $result = $this->db->query($query);

            if($result->num_rows()) {
                $alarm =  $result->result();
                $alarm =  $alarm[0];
            }
        }

        return $alarm;

    }

    public function update($idAlarm, $waiting, $attending, $cancel_comments, $solved_comments, $canceled, $attended){

        $alarm = array();

        if($idAlarm){

            $query = "UPDATE alarms SET waiting = $waiting, attending = $attending, canceled = $canceled, attended = $attended, cancel_comments = '" . $cancel_comments ."', solved_comments = '" . $solved_comments ."' WHERE id = $idAlarm";

            $this->db->query($query);

            $query = "SELECT A.*, U.plate_number, U.number, U.route, U.driver, U.company, U.owner, R.imei FROM alarms A, routers R, units U WHERE A.id_router = R.id AND U.id_router = R.id AND A.id = $idAlarm";

            $result = $this->db->query($query);

            if($result->num_rows()) {
                $alarm =  $result->result();
                $alarm =  $alarm[0];
            }

        }

        return $alarm;

    }

}