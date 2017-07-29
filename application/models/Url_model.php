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
        
        $number = rand(2,5);
        switch ($number) {
          case '2':
            $short_code = random_string('alnum', 2);
            $this->db->where('short_url', $short_code);
            $this->db->from('urls');
            $num = $this->db->count_all_results();
            break;
          
          case '3':
            $short_code = random_string('alnum', 3);
            $this->db->where('short_url', $short_code);
            $this->db->from('urls');
            $num = $this->db->count_all_results();
            break;
          case '4':
            $short_code = random_string('alnum', 4);
            $this->db->where('short_url', $short_code);
            $this->db->from('urls');
            $num = $this->db->count_all_results();
            break;
          case '5':
            $short_code = random_string('alnum', 5);
            $this->db->where('short_url', $short_code);
            $this->db->from('urls');
            $num = $this->db->count_all_results();
            break;
        }

      } while($num>=1);
      $db_fill = array(
                        'short_url' => $short_code,
                        'long_url' => $data['long_url'],
                        'url_timestamp' => $data['url_timestamp']);

       $query = $this->db->insert('urls', $db_fill);
       $idInserted = $this->db->insert_id();
       $this->insert_stat($idInserted);
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
      $idInserted = $this->db->insert_id();
      $this->insert_stat($idInserted);
      $result = $query;
      
      if ($result) {
                return $cstm_url;
              } else{
                return false;
              }
  }

  function insert_stat($lastID){
    $stats = array('url_id'=>$lastID);
    $query = $this->db->insert('stats', $stats);
  }

  function long_url($shorty=''){
    $query=$this->db->get_where('urls', array('short_url'=> $shorty, ));
      if($query->num_rows()>0)
      {
        foreach ($query->result() as $row)
        {
            return $row->long_url;
        }
      }else return false;
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
    $this->db->where('url_id',urldecode($id));
    $this->db->select('clicks');
    $count = $this->db->get('stats')->row();

    $this->db->where('url_id',urldecode($id));
    $this->db->set('clicks', ($count->clicks + 1));
    $this->db->update('stats');
  }

}