<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Log extends CI_Controller
{
    function __construct() {
        parent::__construct();
        // Load user model
        $this->load->model('User_model');
    }
    
    public function index(){
        // Include the google api php libraries
        // require_once APPPATH.'libraries/Google/autoload.php';
        include_once APPPATH."libraries/Google/src/Google_Client.php";
        include_once APPPATH."libraries/Google/src/contrib/Google_Oauth2Service.php";
        
        // Google Project API Credentials
        $clientId = '964118721025-ensdmlj9f4g01ugcf5p6o2rqe2lms80l.apps.googleusercontent.com';
        $clientSecret = '59ahVcoO4KQY-EFxuc0SNyqc';
        $redirectUrl = base_url() ;
        
        // Google Client Configuration
        $gClient = new Google_Client();
        $gClient->setApplicationName('KUSIAGA');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if (isset($_REQUEST['code'])) {
            $gClient->authenticate();
            $this->session->set_userdata('token', $gClient->getAccessToken());
            redirect($redirectUrl);
        }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }

        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'google';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['email'] = $userProfile['email'];
            $userData['profile_url'] = $userProfile['link'];
            $userData['picture_url'] = $userProfile['picture'];
            // Insert or update user data
            $userID = $this->User_model->checkUser($userData);
            if(!empty($userID)){
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
            } else {
               $data['userData'] = array();
            }
        } else {
            $data['authUrl'] = $gClient->createAuthUrl();
        }
        $this->load->view('signin',$data);
    }
    
    // public function logout() {
    //     $this->session->unset_userdata('token');
    //     $this->session->unset_userdata('userData');
    //     $this->session->sess_destroy();
    //     redirect('shortener');
    // }
}