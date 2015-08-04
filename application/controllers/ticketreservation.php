<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class TicketReservation extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page_title'] = 'Ticket Reservation';
        $this->load->view('headerview', $data);
        $this->load->view('ticketreservation/new_ticket_reservation_view');
        $this->load->view('footerview');
    }
}
