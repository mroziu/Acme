<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Verify_New_Reservation extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('surname', 'Surname', 'trim|required|min_length[2]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'e-mail', 'trim|required|min_length[6]|max_length[30]|xss_clean|callback__validemail');
        $this->form_validation->set_rules('adulttickets', 'Adult tickets', 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]|xss_clean');
        $this->form_validation->set_rules('childtickets', 'Child tickets', 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]|xss_clean');
        $this->form_validation->set_rules('seniortickets', 'Senior tickets', 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]|xss_clean|callback__checkmaxticketallowed');

        if ($this->form_validation->run() == FALSE) {
            $view['page_title'] = 'Ticket reservation';
            $this->load->view('headerview', $view);
            $this->load->view('ticketreservation/new_ticket_reservation_view');
            $this->load->view('footerview');
        } else {
            $statement = str_replace("%s", $data['name'], $this->lang->line("msg_confirmation"));
            $this->session->set_flashdata($statement);
                $hash = md5($this->input->post('email').date("U"));
                $sess_array = array(
                    'name' => $this->input->post('name'),
                    'surname' => $this->input->post('surname'),
                    'address' => $this->input->post('address'),
                    'email' => $this->input->post('email'),
                    'adulttickets' => $this->input->post('adulttickets'),
                    'childtickets' => $this->input->post('childtickets'),
                    'seniortickets' => $this->input->post('seniortickets'),
                    'hash' => $hash,
                );
                $this->session->set_userdata('reservation', $sess_array);
            redirect('ticket/confirm_reservation', 'location');
        }
    }

    public function _validemail($email) {

        $this->load->helper('email');
        if (valid_email($email))
        {
            return true;
        }
        else
        {
            $message = $this->lang->line('msg_email_is_not_valid');
            $text = $message['text'];
            $statement = str_replace("%s", $email, $text);
            $this->form_validation->set_message('_validemail', $statement);
            return false;
        }        
    }
    
    public function _checkmaxticketallowed($str)
    {
        $n_adult_tickets = $this->input->post('adulttickets');
        $n_child_tickets = $this->input->post('childtickets');
        $n_senior_tickets = $this->input->post('seniortickets');
        $sum = $n_adult_tickets + $n_child_tickets + $n_senior_tickets;
        $e = '';
        if ($n_adult_tickets > 4 || $n_child_tickets > 4 || $n_senior_tickets > 3) $e='maxticketover';
        else if ($sum < 1 || $sum > 6) $e='badnumberoftickets';
        else if ($n_child_tickets > 0 && $n_adult_tickets < 1) $e='requiredadultticket';
        switch ($e) {
                case 'maxticketover':
                $message = $this->lang->line('msg_max_ticket_over');
                $text = $message['text'];
                $this->form_validation->set_message('_checkmaxticketallowed', $text);
                break;
                case 'badnumberoftickets':
                $message = $this->lang->line('msg_bad_number_of_tickets');
                $text = $message['text'];
                $this->form_validation->set_message('_checkmaxticketallowed', $text);
                break;
                case 'requiredadultticket':
                $message = $this->lang->line('msg_one_adult_required');
                $text = $message['text'];
                $this->form_validation->set_message('_checkmaxticketallowed', $text);
                break;
            }
        if ($e == '') return true;
            else return false;
    }

}
