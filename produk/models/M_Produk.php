<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produk extends CI_Model{

  	function kategori(){
		return $this->db->get('category')->result_array();
  	}
  
  	function tampil_data($limit, $start){
		$sql = "products";
		$this->db->order_by("prod_id");
        $this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
        return $query->result_array();
	}
	function produkbaru($limit, $start){
		$sql = "products";
		$this->db->order_by('products.prod_id','DESC');
        $this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
        return $query->result_array();
	}
	function hargarendah($limit, $start){
		$sql = "products";
		$this->db->order_by("prod_price");
        $this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
        return $query->result_array();
	}
	function hargatinggi($limit, $start){
		$sql = "products";
		$this->db->order_by('products.prod_price','DESC');
        $this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
        return $query->result_array();
	}
}