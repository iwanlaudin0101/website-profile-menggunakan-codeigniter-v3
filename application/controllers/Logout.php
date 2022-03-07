<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends MY_Controller
{

    public function index()
    {
        $sess_data = ['id', 'username', 'email', 'role', 'is_active', 'is_login'];
        $this->session->unset_userdata($sess_data);
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}

/* End of file Logout.php */
