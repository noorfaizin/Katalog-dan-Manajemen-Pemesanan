<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_Cat');
		$this->load->helper('url');
		$this->cek_login->user();
	}
	
	function index(){
		$data['judul'] = "Dashboard | Kategori Produk";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$data['products'] = $this->M_Cat->tampil_data();
		$this->load->model('cart_beli/M_Cart_Beli');
		$data['sum_jumlah']= $this->M_Cart_Beli->jumlah_cart();
		$this->load->view('dashboard/template/admin_header', $data);
		$this->load->view('dashboard/template/admin_sidebar');
		$this->load->view('index',$data);
		$this->load->view('dashboard/template/admin_footer');
	}

	function tambah(){
		$this->load->view('category');
	}
 
	function tambah_aksi(){
		$cat_id = $this->input->post('cat_id');
		$cat_name = $this->input->post('cat_name');
 
		$data = array(
			'cat_id' => $cat_id,
			'cat_name' => $cat_name
			);
		$this->M_Cat->input_data($data,'category');
		redirect('category');
	}

	function update(){
		$cat_id = $this->input->post('cat_id');
		$cat_name = $this->input->post('cat_name');
	 
		$data = array(
			'cat_name' => $cat_name
		);
		$this->M_Cat->update_data($data,$cat_id);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('category');
	 
		$where = array(
			'cat_id' => $cat_id
		);
	 
		$this->M_Cat->update_data($where,$data,'category');
		redirect('category');
	}

    public function delete($cat_id){
        $this->db->where('cat_id', $cat_id);
        $this->db->delete('category');
        redirect('category');
	}
	
	public function produk(){
		$data['judul'] = "Dashboard | Produk Kategori";
		$data['category'] = $this->M_Cat->tampil_data();
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart_beli/M_Cart_Beli');
		$data['sum_jumlah']= $this->M_Cart_Beli->jumlah_cart();
		$this->load->view('dashboard/template/admin_header', $data);
		$this->load->view('dashboard/template/admin_sidebar');
		$this->load->view('produk', $data);
		$this->load->view('dashboard/template/admin_footer');
	}

	public function daftar($id){
		$data['judul'] = "Dashboard | Produk Kategori";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart_beli/M_Cart_Beli');
		$data['sum_jumlah']= $this->M_Cart_Beli->jumlah_cart();
		//Load Library
		$this->load->library('pagination');
		$config['base_url']		= base_url('category/daftar/'.$id);

		//Tampil data searching
		if($this->input->post('submit')){
			$data['caridata'] = $this->input->post('caridata');
			$this->session->set_userdata('caridata', $data['caridata']);
		}else{
			$data['caridata'] = $this->session->userdata('caridata');
		}
		
		$this->db->like('prod_name', $data['caridata']);
		$this->load->model('produk/M_Produk');
		$config['total_rows']	= $this->M_Produk->getKat($id);
		$config['per_page'] 	= 6;
		$config["uri_segment"] 	= 4;
		$data['total_rows'] 	= $config['total_rows'];
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);
        $data['products'] = $this->M_Cat->getBarangKategori($id, $config['per_page'], $data['start'], $data['caridata']);
		$this->load->view('dashboard/template/admin_header', $data);
		$this->load->view('dashboard/template/admin_sidebar');
		$this->load->view('dataproduk/dataprodukv', $data);
		$this->load->view('dashboard/template/admin_footer');
	}

}