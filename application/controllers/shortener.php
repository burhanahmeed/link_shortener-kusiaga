<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shortener extends CI_Controller {

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
	function __construct() {
        parent::__construct();
       		$this->load->helper(array('form', 'url','string'));
			$this->load->library('form_validation');
			$this->load->model('Url_model');
        }

	public function index(){

		$data['desc'] = 'Have A Nice Day!';
		$page_data = array();

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('url_address', 'URL', 'required|min_length[4]|max_length[1000]|trim|prep_url|valid_url|callback_checkurl');
		$this->form_validation->set_rules('customUrl','Custom URL','min_length[4]|trim|is_unique[urls.short_url]|callback_no_space_func');
		$this->form_validation->set_message('is_unique','%s has been taken');
		$this->form_validation->set_message('valid_url','%s is invalid format');
		$long_bad = $this->input->post('url_address');
    	$long = $this->addhttp($long_bad);
    	$cstm = $this->input->post('customUrl');

    	if ($this->form_validation->run() == false) {
    		$page_data['error'] = validation_errors();
		} else{
			$now = new DateTime ( NULL, new DateTimeZone('Asia/Jakarta'));
			$url = array( 'long_url' => $long,
						'url_timestamp' => $now->format('Y-m-d H:i:s'));

		if (!empty($cstm)) {
				if ($res_cstm = $this->Url_model->store_long_get_custom($url,$cstm)) {
					$page_data['short_url'] = $res_cstm;
					$page_data['long_one'] = $this->Url_model->long_url($res_cstm);
				} else{
					$page_data['error'] = 'error';
				}
			} else{
				if ($res = $this->Url_model->store_long($url)) {
					$page_data['short_url'] = $res;
					$page_data['long_one'] = $this->Url_model->long_url($res);
				} else {
					$page_data['error'] = 'error';
				}
			}
		}
		// echo json_encode($page_data);
		$this->load->view('layout/header', $data);
		$this->load->view('shorten', $page_data);
		$this->load->view('layout/footer');
	}

	function short_ajax(){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('url_address', 'URL', 'required|min_length[4]|max_length[1000]|trim|prep_url|valid_url|callback_checkurl');
		$this->form_validation->set_rules('customUrl','Custom URL','min_length[4]|trim|is_unique[urls.short_url]|callback_no_space_func');
		$this->form_validation->set_message('is_unique','%s has been taken');
		$this->form_validation->set_message('valid_url','%s is invalid format');
		$long_bad = $this->input->post('url_address');
    	$long = $this->addhttp($long_bad);
    	$cstm = $this->input->post('customUrl');
    	$url=$this->config->base_url();

    	if ($this->form_validation->run() == false) {
    		$page_data['error'] = validation_errors();
    		// $this->load->view('javascript_parse',$page_data);
		} else{
			$now = new DateTime ( NULL, new DateTimeZone('Asia/Jakarta'));
			$url = array( 'long_url' => $long,
						'url_timestamp' => $now->format('Y-m-d H:i:s'));

		if (!empty($cstm)) {
				if ($res_cstm = $this->Url_model->store_long_get_custom($url,$cstm)) {
					$page_data['short_url'] = $res_cstm;
					$page_data['long_one'] = $this->Url_model->long_url($res_cstm);
					// $this->load->view('javascript_parse',$page_data);
				} else{
					$page_data['error'] = 'error';
				}
			} else{
				if ($res = $this->Url_model->store_long($url)) {
					$page_data['short_url'] = $res;
					$page_data['long_one'] = $this->Url_model->long_url($res);
				} else {
					$page_data['error'] = 'error';
				}
			}
		}
		if (isset($page_data['short_url'])) {
			echo json_encode(array('msg'=>'url', 'isi' => $page_data['short_url'], 'base'=> base_url()));
		} else if (isset($page_data['error'])) {
			echo json_encode(array('msg'=>'err', 'isi' => $page_data['error'], 'base'=> base_url()));
		}
	}

	function checkurl($string_url)
 	{
        $reg_exp = "^(?:https?://)?(?:[a-z0-9-]+\.)*((?:[a-z0-9-]+\.)[a-z0-9]+)^";
        if(preg_match($reg_exp, $string_url)){
         return TRUE;
        }
        else{
         $this->form_validation->set_message('checkurl', '%s is invalid format');
         return FALSE;
        }
 	}
 	function no_space_func($str)
	{
    	if (preg_match("/[^a-z_0-9]/i", $str)) {
    		$this->form_validation->set_message('no_space_func', 'Bad custom URL format');
    		return false;
    	} else{
    		return true;
    	}
	} 

	function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
	}

	public function get_shorty(){
		$this->load->model('Url_model');
		$urlShorty = $this->uri->segment(1);
		$urlId = $this->Url_model->get_Id($urlShorty);
		$this->add_count($urlId);
		redirect($this->Url_model->long_url($urlShorty));
	}

	public function add_count($id){
		$this->load->helper('cookie');
		$check_visitor = $this->input->cookie(urldecode($id), false);
		$ip = $this->input->ip_address();
		
		$cookie = array( "name" => urldecode($id),
		 "value" => "$ip", 
		 "expire" => time() + 7200, 
		 "secure" => false ); 

		$this->input->set_cookie($cookie); 
		$this->Url_model->update_counter(urldecode($id));
	}

	public function err_404(){
		$page_data['error'] = 'Whoops cannot find that URL!';
		$data['desc'] = 'Have A Nice Day!';
		$this->load->view('layout/header', $data);
		$this->load->view('err404', $page_data);
		$this->load->view('layout/footer');

	}
}
