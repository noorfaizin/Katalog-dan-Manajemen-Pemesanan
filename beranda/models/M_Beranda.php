<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Beranda extends CI_Model{

	function search_blog($title, $limit, $start){
		$sql = "products";
		if($title){
			$this->db->like('prod_name', $title);
			$this->db->or_like('vend_id', $title);
			$this->db->or_like('quantity', $title);
			$this->db->or_like('prod_price', $title);
			$this->db->or_like('harga_beli', $title);
			$this->db->or_like('cat_name', $title);
		}
		$this->db->order_by('prod_id', 'ASC');
    	$this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
    	return $query->result_array();
    }
	function tampil_data_limit($limit, $start){
		$sql = "products";
		$this->db->order_by("prod_id");
    	$this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
    	return $query->result_array();
	}
	function produk_baru($limit, $start){
		$sql = "products";
		$this->db->order_by('products.prod_id','DESC');
    	$this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
    	return $query->result_array();
	}
	function produk_harga_rendah($limit, $start){
		$sql = "products";
		$this->db->order_by("prod_price");
    	$this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
    	return $query->result_array();
	}
	function produk_harga_tinggi($limit, $start){
		$sql = "products";
		$this->db->order_by('products.prod_price','DESC');
    	$this->db->join('category', 'products.cat_id = category.cat_id');
		$query = $this->db->get($sql, $limit, $start);
    	return $query->result_array();
	}
	function kategori(){
		return $this->db->get('category')->result_array();
	}
	function detail_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
}