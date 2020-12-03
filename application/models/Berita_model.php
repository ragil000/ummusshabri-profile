<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model{

    public function getContentData($table, $type = 'news', $limit, $start, $level = NULL){
                      $this->db->limit($limit, $start);
                      if($level){
                        $this->db->where('level', $level);
                      }
                      $this->db->order_by('created_at', 'DESC');
        $results    = $this->db->get_where($table, ['type' => $type])->result_array();
        return $results;
    }

    public function getTotalData($table, $type, $level = NULL){
      if($level){
        $this->db->where('level', $level);
      }
      $results    = $this->db->get_where($table, ['type' => $type])->num_rows();
      return $results;
    }

    public function getPopularNews($limit, $level = NULL){
                      $this->db->limit($limit, 0);
                      if($level){
                        $this->db->where('level', $level);
                      }
                      $this->db->order_by('views', 'DESC');
        $results    = $this->db->get_where('articles', ['type' => 'news'])->result_array();
        return $results;
    }

    public function getRandomNews($limit, $level = NULL){
                      $this->db->limit($limit, 0);
                      if($level){
                        $this->db->where('level', $level);
                      }
                      $this->db->order_by('rand()');
        $results    = $this->db->get_where('articles', ['type' => 'news'])->result_array();
        return $results;
    }

    public function getNewNews($limit, $level = NULL){
                      $this->db->limit($limit, 0);
                      if($level){
                        $this->db->where('level', $level);
                      }
                      $this->db->order_by('created_at', 'DESC');
        $results    = $this->db->get_where('articles', ['type' => 'news'])->result_array();
        return $results;
    }

    public function getGalery($limit, $level = NULL){
              $this->db->limit($limit, 0);
              if($level){
                $this->db->where('level', $level);
              }
              $this->db->order_by('created_at', 'DESC');
        $results    = $this->db->get_where('articles', ['type' => 'images'])->result_array();
        return $results;
    }

    public function getDetailData($table, $slug) {
        $results    = $this->db->get_where($table, ['slug' => $slug])->result_array();
        $this->db->update($table, ['views' => (int)$results[0]['views']+1], ['id' => $results[0]['id']]);
        return $results;
    }

    public function getProfileData($table, $level) {
                    $this->db->where('level', $level);
      $results    = $this->db->get_where($table, ['type' => 'profile'])->result_array();
      return $results;
    }

}