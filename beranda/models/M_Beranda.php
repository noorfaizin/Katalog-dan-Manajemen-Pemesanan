<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Beranda extends CI_Model{

	function fetch_data($query){
		$this->db->like('prod_name', $query);
		$query = $this->db->get('products');
			if($query->num_rows() > 0){
				foreach($query->result_array() as $row)
			{
				$output[] = array(
				'name'	 => $row["prod_name"],
				'price'  => $row["prod_price"],
				'image'  => $row["prod_img"]
				);
			}
		echo json_encode($output);
		}
	}
	
	function search_data($title, $start){
		$sql = "products";
		if($title){
			$this->db->like('prod_name', $title);
		}
		$this->db->order_by('prod_id', 'ASC');
    	$this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $start);
    	return $query->result_array();
    }
	function tampil_data_limit($limit, $start){
		$sql = "products";
		$this->db->order_by('prod_id');
    	$this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
    	return $query->result_array();
	}
	function data_menu_kopi(){
		$sql = "products";
		$this->db->order_by('prod_id');
		$this->db->join('category', 'products.cat_id = category.cat_id');
		$this->db->where('cat_name', 'Menu Kopi');
		$query = $this->db->get($sql);
    	return $query->result_array();
	}
	function data_tidak_kopi(){
		$sql = "products";
		$this->db->order_by('prod_id');
		$this->db->join('category', 'products.cat_id = category.cat_id');
		$this->db->where('cat_name', 'Menu Tidak Kopi');
		$query = $this->db->get($sql);
    	return $query->result_array();
	}

	function kategori(){
		return $this->db->get('category')->result_array();
	}

	public function detail_data($id){ 
		$this->db->where('prod_id', $id);
		$this->db->select('*');
		$this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get('products');
		return $query->result_array();
	}
}