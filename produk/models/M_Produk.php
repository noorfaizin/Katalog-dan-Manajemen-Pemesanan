<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produk extends CI_Model{

  	function kategori(){
		return $this->db->get('category')->result_array();
	}
	  
	function getKat($id){
		$this->db->select('*');
		$this->db->from('products');
        $this->db->join('category', 'products.cat_id = category.cat_id');
		$this->db->where('category.cat_id', $id);
		$query = $this->db->count_all_results();
		return $query;
  	}
  
  	function tampil_data($limit, $start, $caridata = null){
		if($caridata){
			$this->db->like('prod_name', $caridata);
		}
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

	function show_produk(){
		$sql = "products";
		$this->db->order_by("prod_id");
        $this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql);
        return $query->result_array();
	}
}