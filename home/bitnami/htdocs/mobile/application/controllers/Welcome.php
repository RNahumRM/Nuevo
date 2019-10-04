<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url());
    }

    public function auth()
    {
        $recaptchaPassed = true;
        /*
        // Build POST request:
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6LfkZrsUAAAAADksutL240uM39k4eNXwiC7sq32m';
        $recaptcha_response = $this->input->post('recaptcha_response');

        // Make and decode POST request:
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);
        print_r($recaptcha);
        // Take action based on the score returned:
        if ($recaptcha->score >= 0.5) {
            $recaptchaPassed = true;
        } else {
            $data['message'] = 'No ha sido posible validar que usted sea un humano';
            $this->load->view('welcome_message');
        }
        */

        //validamos que el correo este con el formato
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|max_length[255]');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('welcome_message');

        } elseif($recaptchaPassed) {

            $user = $this->users->isValidUser($this->input->post('email'), $this->input->post('password'));

            if(!empty($user)) {

                $tenants = $this->tenants->allByUSer($user->id);

                $this->session->sess_expiration = 14400;
                $this->session->sess_expire_on_close = FALSE;

                $this->session->set_userdata('idUser', $user->id);
                $this->session->set_userdata('email', $this->input->post('email'));
                $this->session->set_userdata('name', $user->name);
                $this->session->set_userdata('image', $user->image);
                $this->session->set_userdata('profile', $user->profile);
                $this->session->set_userdata('tenants', $tenants);

                //nos hemos autenticado correctamente
//                redirect($_SERVER['HTTP_REFERER']);
                redirect('/front');

            } else {
                //el usuario no esta registrado en la BD o esta inactivo, le volvemos a mostrar la pantalla de entrar

                $data['message'] = 'Combinación incorrecta de usuario contraseña';

                $this->load->view('welcome_message', $data);

            }
        }

    }

    public function front()
    {
        if( $this->session->userdata('idUser') ) {

            $filter = $this->uri->segment(2);

            switch ($filter) {
                case 'all':
                    $title = 'Todas las alarmas';
                    $data["view"] = "front";
                    break;
                case 'waiting':
                    $title = 'Alarmas en espera';
                    $data["view"] = "front";
                    break;
                case 'attending':
                    $title = 'Alarmas en atención';
                    $data["view"] = "front";
                    break;
                case 'attended':
                    $title = 'Alarmas atendidas';
                    $data["view"] = "front";
                    break;
                case 'canceled':
                    $title = 'Alarmas canceladas';
                    $data["view"] = "front";
                    break;
                case 'facilities':
                    $title = 'Mapa de instalaciones';
                    $data['vehicle'] = 0;
                    $data["view"] = "map";
                    break;
                default:
                    $title = 'Mapa de vehículos';
                    $data['vehicle'] = 1;
                    $data["view"] = "map";
                    break;
            }

            $data["title"] = $title;

            $this->load->view("template", $data);

        } else {
            redirect("/");
        }

    }

    public function _callback_format_date($value, $row)
    {
        return $value;
    }

    public function indexAjaxDataUnits(){

        // check if need to get a vehicle or facility
        $vehicle = $this->input->post('vehicle');

        // first check if is necessary to check the camera status

        /*
        if($this->input->post('checkCameraStatus')){
            $token = $this->tokenCameraManager();
            $alarms = $this->cameras->all();
            foreach ($alarms as $alarm) {
                $this->cameraStatusCameraManager($alarm['cameraId'], $token);
            }
        }
        */

        /*
        if($vehicle == 'vehicles') {
            // update the position random for demo purpose
            $this->routers->updatePositionInit();
        }
        */

        $tenants = $this->session->userdata('tenants');

        $units = $this->units->allGroupByTenant($vehicle, $tenants);

        $waiting = $this->alarms->all('waiting');
        $attending = $this->alarms->all('attending');

        echo json_encode(
            array(
                'success' => 1,
                'units' => $units,
                'waiting' => $waiting,
                'attending' => $attending
            ), JSON_NUMERIC_CHECK
        );

    }

    public function indexAjaxDataAlarms(){

        $filter = $this->input->post('filter');

        $alarms = $this->alarms->all($filter);

        echo json_encode(
            array(
                'success' => 1,
                'alarms' => $alarms
            ), JSON_NUMERIC_CHECK
        );

    }

    public function indexAjaxDataNotificationAlarm(){

        $alarms = $this->alarms->all('waiting');

        echo json_encode(
            array(
                'success' => 1,
                'alarms' => $alarms
            ), JSON_NUMERIC_CHECK
        );

    }

    public function indexAjaxDataAlarmsUpdate(){

        $idAlarm = $this->input->post('idAlarm');
        $waiting = $this->input->post('waiting');
        $attending = $this->input->post('attending');
        $cancelComments = $this->input->post('cancel_comments');
        $solvedComments = $this->input->post('solved_comments');
        $canceled = $this->input->post('canceled');
        $attended = $this->input->post('attended');

        $alarm = $this->alarms->update($idAlarm, $waiting, $attending, $cancelComments, $solvedComments, $canceled, $attended);

        echo json_encode(array(
            'success' => 1,
            'alarms' => $alarm
        ));

    }

    public function updatePositionInit(){
        $this->routers->updatePositionInit();
    }

    public function sendAlarm(){

        $success = 0;
        $data['result'] = '';

        $idAlarm = $this->input->post('idAlarm');
        $solvedComments = $this->input->post('solved_comments');

        if($idAlarm) {

            $alarm = $this->alarms->find($idAlarm);
            $seconds = time();

            $alarmString = "P\tPRUEBA DE $alarm->company PLACA $alarm->plate_number\t$alarm->imei\t$alarm->imei\t$alarm->plate_number\t$seconds\t$alarm->lat\t$alarm->lng\t100\t123\t1\t1";
            $alarmHeader = str_pad(dechex(strlen($alarmString)), 8, "0", STR_PAD_LEFT);
            $data['alarmString'] = $alarmHeader . $alarmString;
            $data['alarm'] = $alarm;
            $success = 1;

            $result = 'Alarma enviada exitósamente';

            $data['result'] = $result;

            //             update($idAlarm, $waiting, $attending, $cancel_comments, $solved_comments, $canceled, $attended)
            $this->alarms->update($alarm->id, 0, 1, $alarm->cancel_comments, $alarm->solved_comments, 0, 0);

        }

        $data['success'] = $success;

        echo json_encode($data, JSON_NUMERIC_CHECK);

    }

    public function addComment(){

        $id = 0;
        $success = 0;

        $idAlarm = $this->input->post('idAlarm');
        $comments = $this->input->post('comments');

        if($idAlarm && $comments){
            $id = $this->comments->create($idAlarm, $comments);
            if($id){
                $success = 1;
            }
        }

        $data['id'] = $id;
        $data['success'] = $success;

        echo json_encode($data);
    }

    public function routers()
    {
        try {

            if ($this->session->userdata("idUser")) {

                $crud = new grocery_CRUD();

                $crud->set_theme('bootstrap');
                $crud->set_table('routers');
                $crud->set_subject('Router');

                $crud->set_field_upload("image", "assets/img");

                $crud->columns('id_tenant', 'imei', 'description', 'lat', 'lng', 'active');

                $crud->display_as("name", "Nombre")
                    ->display_as("id_tenant", "Tenant")
                    ->display_as("imei", "IMEI")
                    ->display_as("description", "Descripción")
                    ->display_as("lat", "Latitud")
                    ->display_as("lng", "Longitud")
                    ->display_as("alt", "Altitud")
                    ->display_as("speed", "Velocidad (km/h)")
                    ->display_as("direction", "Dirección")
                    ->display_as("panic_button", "Botón de pánico")
                    ->display_as("created", "Creado")
                    ->display_as("updated", "Actualizado")
                    ->display_as("active", "Activo");

                $crud->change_field_type('active', 'true_false');

                $crud->set_relation("id_tenant", "tenants", "name");

                $crud->unique_fields(array('imei'));

                $crud->field_type('created', 'readonly');
                $crud->field_type('updated', 'readonly');

                $crud->unset_bootstrap();
                $crud->unset_jquery();
                //$crud->unset_jquery_ui();

                $output = $crud->render();

                $data["title"] = "Routers";
                $data["view"] = "routers";
                $data["crud"] = $output;
                $this->load->view("template", $data);

            } else {
                redirect("/");
            }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function users()
    {
        try {

            if ($this->session->userdata("idUser")) {

                $crud = new grocery_CRUD();

                $crud->set_theme('bootstrap');
                $crud->set_table('users');
                $crud->set_subject('Usuario');

                $crud->set_field_upload("image", "assets/img");

                $crud->display_as("name", "Nombre")
                    ->display_as("created", "Creado")
                    ->display_as("password", "Contraseña")
                    ->display_as("updated", "Actualizado")
                    ->display_as("active", "Activo")
                    ->display_as("id_profile", "Perfil")
                    ->display_as("image", "Imagen");

                $crud->callback_edit_field('password',array($this,'_edit_field_password_callback'));

                $crud->change_field_type('active', 'true_false');
                $crud->set_relation("id_profile", "profiles", "type");
                $crud->set_rules('email','Email','trim|valid_email|max_length[255]');

                $crud->set_relation_n_n('tenant', 'users_tenants', 'tenants', 'id_user', 'id_tenant', 'name', 'priority');

                $crud->field_type('created', 'readonly');
                $crud->field_type('updated', 'readonly');

                $crud->callback_before_update(array($this,'_encrypt_password_callback'));

                $crud->unset_bootstrap();
                $crud->unset_jquery();
//                $crud->unset_jquery_ui();

                $output = $crud->render();

                $data["title"] = "Usuarios";
                $data["view"] = "users";
                $data["crud"] = $output;
                $this->load->view("template", $data);

            } else {
                redirect("/");
            }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    function _encrypt_password_callback($post_array, $primary_key) {

        //Encrypt password only if is not empty. Else don't change the password to an empty field
        if(!empty($post_array['password'])) {
            if(strlen($post_array['password']) != 40) {
                $post_array['password'] = sha1($post_array['password']);
            }
        } else {
            unset($post_array['password']);
        }

        return $post_array;
    }

    function _edit_field_password_callback($value, $primary_key)
    {
        return '<input class="form-control" maxlength="255" type="text" value="'.$value.'" name="password"><div><em class="text-danger">Si desea cambiar el password indroduzca un texto diferente a 40 caracteres</em></div>';
    }

    public function sessions()
    {
        try {

            if ($this->session->userdata("idUser")) {

                $crud = new grocery_CRUD();

                $crud->set_theme('bootstrap');
                $crud->set_table('ci_sessions');
                $crud->set_subject('Sesiones');

                $crud->callback_column('timestamp',array($this,'_callback_format_timestamp_date'));

                $crud->unset_add();
                $crud->unset_edit();
                $crud->unset_delete();

                $crud->unset_bootstrap();
                $crud->unset_jquery();

                $output = $crud->render();

                $data["title"] = "Sesiones";
                $data["view"] = "sessions";
                $data["crud"] = $output;
                $this->load->view("template", $data);

            } else {
                redirect("/");
            }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function tenants()
    {
        try {

            if ($this->session->userdata("idUser")) {

                $crud = new grocery_CRUD();

                $crud->set_theme('bootstrap');
                $crud->set_table('tenants');
                $crud->set_subject('Tenant');

                $crud->display_as("name", "Nombre")
                    ->display_as("description", "Descripción")
                    ->display_as("created", "Creado")
                    ->display_as("updated", "Actualizado")
                    ->display_as("active", "Activo");

                $crud->change_field_type('active', 'true_false');

                $crud->field_type('created', 'readonly');
                $crud->field_type('updated', 'readonly');

                $crud->unset_bootstrap();
                $crud->unset_jquery();

                $output = $crud->render();

                $data["title"] = "Tenants";
                $data["view"] = "tenants";
                $data["crud"] = $output;
                $this->load->view("template", $data);

            } else {
                redirect("/");
            }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function _callback_format_timestamp_date($value, $row)
    {
        return date('Y-m-d H:i:s', $value);
    }

    public function units()
    {
        try {

            if ($this->session->userdata("idUser")) {

                $crud = new grocery_CRUD();

                $crud->set_theme('bootstrap');
                $crud->set_table('units');
                $crud->set_subject('Unidad');

                $crud->columns('id_router', 'number', 'route', 'plate_number', 'active');

                $crud->display_as("id_router", "Router")
                    ->display_as("number", "Número")
                    ->display_as("route", "Ruta")
                    ->display_as("plate_number", "Placa")
                    ->display_as("provider", "Proveedor")
                    ->display_as("vin", "VIN")
                    ->display_as("driver", "Conductor")
                    ->display_as("owner", "Concesionario")
                    ->display_as("url_camera", "Url cámara")
                    ->display_as("vehicle", "¿Es vehículo?")
                    ->display_as("active", "Activa")
                    ->display_as("company", "Empresa");

                $crud->set_relation("id_router", "routers", "imei");

                $crud->unique_fields(array('vin', 'id_router'));

                $crud->unset_bootstrap();
                $crud->unset_jquery();
                //$crud->unset_jquery_ui();

                $output = $crud->render();

                $data["title"] = "Unidades";
                $data["view"] = "units";
                $data["crud"] = $output;
                $this->load->view("template", $data);

            } else {
                redirect("/");
            }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function cameras()
    {
        try {

            if ($this->session->userdata("idUser")) {

                if($this->uri->segment(2) == 1) {
                    $this->updateCamerasCamaraManager();
                    $data['message'] = 'Cámaras actualizadas exítosaente desde Camera Manager a través de la API';
                }

                $crud = new grocery_CRUD();

                $crud->set_theme('bootstrap');
                $crud->set_table('cameras');
                $crud->set_subject('Cámara');

                $crud->columns('id_unit', 'cameraId', 'name', 'deviceTypeId', 'zoneId', 'accountId', 'ethMacAddress', 'online');

                $crud->display_as("id_unit", "Unidad")
                    ->display_as("created", "Creada")
                    ->display_as("updated", "Actualizada");

                $crud->change_field_type('online', 'true_false');

                $crud->set_relation("id_unit", "units", "plate_number");

                $crud->field_type('cameraId', 'readonly');
                $crud->field_type('name', 'readonly');
                $crud->field_type('deviceTypeId', 'readonly');
                $crud->field_type('zoneId', 'readonly');
                $crud->field_type('accountId', 'readonly');
                $crud->field_type('ethMacAddress', 'readonly');
                $crud->field_type('created', 'readonly');
                $crud->field_type('updated', 'readonly');
                $crud->field_type('online', 'readonly');

                $crud->unset_add();
                $crud->unset_delete();

                $crud->unset_bootstrap();
                $crud->unset_jquery();
                //$crud->unset_jquery_ui();

                $output = $crud->render();

                $data["title"] = "Cámaras";
                $data["view"] = "cameras";
                $data["crud"] = $output;
                $this->load->view("template", $data);

            } else {
                redirect("/");
            }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function log()
    {
        try {

            if ($this->session->userdata("idUser")) {

                $crud = new grocery_CRUD();

                $crud->set_theme('bootstrap');
                $crud->set_table('traffic');
                $crud->set_subject('Trafico');

                $crud->display_as("request", "Petición")
                    ->display_as("created", "Llegada");

                $crud->callback_column('created',array($this,'_callback_format_date'));

                $crud->unset_delete();
                $crud->unset_edit();
                $crud->unset_add();

                $crud->unset_bootstrap();
                $crud->unset_jquery();
                //$crud->unset_jquery_ui();

                $output = $crud->render();

                $data["title"] = "Log";
                $data["view"] = "traffic";
                $data["crud"] = $output;
                $this->load->view("template", $data);

            } else {
                redirect("/");
            }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }

    public function details(){

        if( $this->session->userdata('idUser') ) {

            $idAlarm = $this->uri->segment(3);

            $data["alarm"] = $this->alarms->find($idAlarm);
            $data["comments"] = $this->comments->find($idAlarm);
            $data["view"] = "details";

            $data["title"] = 'Detalles de la alarma: ' . $idAlarm;

            $this->load->view("template", $data);

        } else {
            redirect("/");
        }

    }

    public function receive(){

        $result = '';

        $args = $this->uri->segment(2);

        $this->traffic->add($args);

        $args = explode(',', $args);


        if(count($args) == 12){

            $gpsr = $args[0];
            $imei = $args[3];
            $lat = $args[6];
            $lng = $args[7];
            $confirmPanic = $args[11];

            $router = $this->routers->findByImei($imei);

            if($router){

                if(is_numeric($lat) && is_numeric($lng)){

                    $panic = strtoupper(substr($gpsr, strlen($gpsr)-1, 1));

                    if($panic == 'P' && $confirmPanic == '1') {
                        $result = $this->alarms->create($router->id, $lat, $lng);
                    } else {

                        $distance = $this->distance_on_geoid($router->lat, $router->lng, $lat, $lng);

                        $now = new DateTime();
                        $last = new DateTime($router->updated);

                        $diff = $now->diff($last);

                        $time = $diff->s;

                        $speedMPS = $distance / $time;
                        $speedKPH = ($speedMPS * 3600.0) / 1000.0;

                        // just update the position of the router
                        $result = $this->routers->updatePosition($router->id, $lat, $lng, $speedKPH);
                    }

                } else {

                    $result = 'Coordenadas invalidas';

                }

            } else {

                $result = 'Router no encontrado';

            }

        } else {

            $result = 'Argumentos incompletos';

        }

        print_r(json_encode($result));

    }

    private function distance_on_geoid($lat1, $lon1, $lat2, $lon2) {

        // Convert degrees to radians
        $lat1 = $lat1 * M_PI / 180.0;
        $lon1 = $lon1 * M_PI / 180.0;

        $lat2 = $lat2 * M_PI / 180.0;
        $lon2 = $lon2 * M_PI / 180.0;

        // radius of earth in metres
        $r = 6378100;

        // P
        $rho1 = $r * cos($lat1);
        $z1 = $r * sin($lat1);
        $x1 = $rho1 * cos($lon1);
        $y1 = $rho1 * sin($lon1);

        // Q
        $rho2 = $r * cos($lat2);
        $z2 = $r * sin($lat2);
        $x2 = $rho2 * cos($lon2);
        $y2 = $rho2 * sin($lon2);

        // Dot product
        $dot = ($x1 * $x2 + $y1 * $y2 + $z1 * $z2);
        $cos_theta = $dot / ($r * $r);

        $theta = acos($cos_theta);

        // Distance in Metres
        return $r * $theta;
    }

    public function init(){
        $this->routers->updateIdRouterFacilitie();
    }

    public function updateCamerasCamaraManager(){

        $token = $this->tokenCameraManager();

        if($token) {

            $ch = curl_init();

            $url = "https://rest.cameramanager.com/rest/v2.0/cameras";

            $request_headers = array();
            $request_headers[] = 'Accept: application/json';
            $request_headers[] = 'Authorization: Bearer ' . $token;

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);

            $cameras = json_decode(curl_exec($ch), true);

            curl_close($ch);

            foreach ($cameras as $camera){
                if(array_key_exists('cameraId', $camera)){
                    $this->cameras->update($camera);
                }
            }

        }

    }

    private function cameraStatusCameraManager($cameraId, $token = '', $updateDb = false){

        $status = '';

        if($cameraId) {

            if(!$token) {
                $token = $this->tokenCameraManager();
            }

            if ($token) {

                $ch = curl_init();

                $url = "http://rest.cameramanager.com/rest/v2.3/cameras/$cameraId/status";

                $request_headers = array();
                $request_headers[] = 'Accept: application/json';
                $request_headers[] = 'Authorization: Bearer ' . $token;

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);

                $status = json_decode(curl_exec($ch), true);

                curl_close($ch);

                if($updateDb) {
                    $camera['cameraId'] = $cameraId;
                    $camera['online'] = $status['online'];

                    $this->cameras->update($camera);
                }

            }
        }

        return $status;

    }

    public function cameraStatus(){

        $data = array();
        $status = '';
        $success = 0;

        $cameraId = $this->input->post('cameraId');

        if($cameraId) {
            $status = $this->cameraStatusCameraManager($cameraId);
            if($status){
                $success = 1;
            }
        }

        $data['success'] = $success;
        $data['status'] = $status;

        echo json_encode($data, JSON_NUMERIC_CHECK);

    }

    private function tokenCameraManager(){

        $token = '';

        $username = 'steel@ubeenet.com';
        $client_id = 'omniaDevelopment';
        $client_secret = 'VRTS3Ok4bTZC7zOYcaoMefi8oVjGW22h';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://rest.cameramanager.com/oauth/token?grant_type=password&scope=write");
        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "username=$username&password=be5eUX1o&client_id=$client_id&client_secret=$client_secret");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);

        curl_close($ch);

        $jsonoutput = json_decode($server_output, true);

        if (array_key_exists('access_token', $jsonoutput)) {
            $token = $jsonoutput['access_token'];
        }

        return $token;
    }

    public function cameraStreams(){

        $cameras = array();
        $success = 0;
        $status = '';
        $streams = '';

        $cameraIds = $this->input->post('cameraIds');
        $cameraIds = explode(',', $cameraIds);

        if($cameraIds) {

            $token = $this->tokenCameraManager();

            if ($token) {

                foreach ($cameraIds as $cameraId) {
                    $ch = curl_init();

                    $url = "http://rest.cameramanager.com/rest/v2.3/cameras/$cameraId/streams?includeUrlTypes=mjpegHttp&includeUrlTypes=rtsp";

                    $request_headers = array();
                    $request_headers[] = 'Accept: application/json';
                    $request_headers[] = 'Authorization: Bearer ' . $token;

                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);

                    $streams = json_decode(curl_exec($ch), true);

                    curl_close($ch);

                    $url = $streams[0]['urls']['mjpegHttp'] . "&access_token=$token";
                    // $rtsp = $status[0]['urls']['rtsp'] . "&access_token=$token";

                    $data['cameras'][$cameraId]['url'] = $url;
                    // $data['rtsp'] = $rtsp;

                    $success = 1;

                    $status = $this->cameraStatusCameraManager($cameraId, $token);

                    $data['cameras'][$cameraId]['status'] = $status;
                    $data['cameras'][$cameraId]['streams'] = $streams;
                    $data['cameras'][$cameraId]['success'] = $success;

                }

            }
        }

        $data['success'] = $success;

        echo json_encode($data);

    }

    public function blank(){

        $this->load->view("blank");

    }
}
