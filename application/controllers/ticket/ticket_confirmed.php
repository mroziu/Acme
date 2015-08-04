<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ticket_Confirmed extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page_title'] = 'Ticket Confirmation';
        $this->load->view('headerview', $data);
        $reservation_data = $this->session->userdata('reservation');
        $this->load->view('ticketreservation/ticket_confirmed_view', $reservation_data);
        $this->load->view('footerview');
    }
}
