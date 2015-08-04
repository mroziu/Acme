<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Confirm_Reservation extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $view['page_title'] = 'Confirm reservation';
        $this->load->view('headerview', $view);
        $reservation_data = $this->session->userdata('reservation');
        $this->load->view('ticketreservation/confirm_ticket_reservation_view', $reservation_data);
        $this->load->view('footerview');
    }
}
