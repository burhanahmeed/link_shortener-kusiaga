<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Url_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

// function save_url($data){
// 	do{
// 		$urls_code = random_string('alnum',8);

// 		$this->db->where('url_code= ',$urls_code);
// 		$this->db->from('urls');
// 		$num = $this->db->count_all_result();
// 	}	while($num >= 1);

// 	$query = "INSERT INTO `urls` (`url_code`, `url_address`) VALUES (?,?) ";
//     $result = $this->db->query($query, array($url_code, $data['url_address']));

//     if ($result) {
//       return $url_code;
//     } else {
//       return false;
//     }
// }

//   function fetch_url($url_code) {
//     $query = "SELECT * FROM `urls` WHERE `url_code` = ? ";
//     $result = $this->db->query($query, array($url_code));
//     if ($result) {
//       return $result;
//     } else {
//       return false;
//     }
//   }

  function store_long($data){
    do{
        $short_code = random_string('alnum', 5);
        $this->db->where('short_url', $short_code);
        $this->db->from('urls');
        $num = $this->db->count_all_results();
      } while($num>=1);
      $db_fill = array(
                        'short_url' => $short_code,
                        'long_url' => $data['long_url'],
                        'url_timestamp' => $data['url_timestamp']);

       $query = $this->db->insert('urls', $db_fill);
       $result = $query;
      
      if ($result) {
                return $short_code;
              } else{
                return false;
              }
  }

  function store_long_get_custom($data,$cstm_url){
    // do{
    //   $this->db->where('short_url',$cstm_url);
    //   $this->db->from('urls');
    //   $num = $this->db->count_all_results();
    // }while($num>=1);
      $db_fill = array(
                        'short_url' => $cstm_url,
                        'long_url' => $data['long_url'],
                        'url_timestamp' => $data['url_timestamp']);

       $query = $this->db->insert('urls', $db_fill);
       $result = $query;
      
      if ($result) {
                return $cstm_url;
              } else{
                return false;
              }
  }

  function long_url($shorty=''){
    $query=$this->db->get_where('urls', array('short_url'=> $shorty, ));
      if($query->num_rows()>0)
      {
        foreach ($query->result() as $row)
      {
          return $row->long_url;
      }
      }
      return '/error_404';
  }
  function get_Id($urlShort){
    $query = $this->db->get_where('urls',array('short_url' => $urlShort, ));

    if($query->num_rows()>0)
      {
        foreach ($query->result() as $row)
      {
          return $row->id;
      }
  }
}
  function update_counter($id){
    $this->db->where('id',urldecode($id));
    $this->db->select('url_views');
    $count = $this->db->get('urls')->row();

    $this->db->where('id',urldecode($id));
    $this->db->set('url_views', ($count->url_views + 1));
    $this->db->update('urls');
  }

}