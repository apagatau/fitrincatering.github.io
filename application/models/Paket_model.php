<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Paket_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('paket', $formArray);
    }

    public function getMenu() {
        $result = $this->db->get('paket')->result_array();
        return $result;
    }

    public function getSingleDish($id) {
        $this->db->where('id', $id);
        $dish = $this->db->get('paket')->row_array();
        return $dish;
    }

    public function update($id, $formArray) {
        $this->db->where('id', $id);
        $this->db->update('paket', $formArray);
    } 

    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('paket');
    }

    public function countDish() {
        $query = $this->db->get('paket');
        return $query->num_rows();
    }

    public function getDishesh($id) {
        $this->db->where('id', $id);
        $dish = $this->db->get('paket')->result_array();
        return $dish;
    }
}
