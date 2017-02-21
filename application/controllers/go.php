<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Go extends CI_Controller {
function __construct() {
        parent::__construct();
            $this->load->helper('string');
          
        }

public function index() {
    $data['desc'] = 'Have A Nice Day!';

if (!$this->uri->segment(1)) {
redirect (base_url());
        } else {
            $url_code = $this->uri->segment(1);
              $this->load->model('Url_model');
            $query = $this->Url_model->fetch_url($url_code);

if ($query->num_rows() == 1) {
foreach ($query->result() as $row) {
                    $url_address = $row->url_address;
                }

redirect (prep_url($url_address));
            } else {
                $page_data = array('success'   => null,
                                   'encoded_url'    => false);

                $this->load->view('layout/header',$data);
                $this->load->view('create/create', $page_data);
                $this->load->view('layout/footer');
            }
        }
    }
}