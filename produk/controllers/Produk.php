<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_Produk');
		$this->load->helper('url');
	}
	public function index(){
		$data['judul'] = "K⍜PIKU | Daftar Produk";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		//Load Library
		$this->load->library('pagination');
		$config['base_url']		= base_url('produk/index');

		//Tampil data searching
		if($this->input->post('submit')){
			$data['caridata'] = $this->input->post('caridata');
			$this->session->set_userdata('caridata', $data['caridata']);
		}else{
			$data['caridata'] = $this->session->userdata('caridata');
		}

		//Tampil jumlah produk
		$this->db->like('prod_name', $data['caridata']);
		$this->db->from('products');
		$config['total_rows']	= $this->db->count_all_results();
		$data['total_rows'] 	= $config['total_rows'];
		$config['per_page'] 	= 6;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['products'] = $this->M_Produk->tampil_data($config['per_page'], $data['start'], $data['caridata']);
		$data['category'] = $this->M_Produk->kategori();
		$this->load->view('beranda/template/user_header', $data);
		$this->load->view('produkv',$data);
		$this->load->view('beranda/template/user_footer', $data);
	}
	public function produkbaru(){
		$data['judul'] = "K⍜PIKU | Produk Baru";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		
		//Tampil jumlah produk
		$config['total_rows']	= ('6');
		$data['total_rows'] 	= $config['total_rows'];

		$data['products'] = $this->M_Produk->produkbaru(6,0);
		$data['category'] = $this->M_Produk->kategori();

		$this->load->view('beranda/template/user_header', $data);
		$this->load->view('produkv',$data);
		$this->load->view('beranda/template/user_footer', $data);
	}
	public function hargarendah(){
		$data['judul'] = "K⍜PIKU | Harga Terendah";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		//Load Library
		$this->load->library('pagination');
		$config['base_url']		= base_url('produk/hargarendah/');
		//Tampil jumlah produk
		$this->db->from('products');
		$config['total_rows']	= $this->db->count_all_results();
		$data['total_rows'] 	= $config['total_rows'];
		$config['per_page'] 	= 6;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['products'] = $this->M_Produk->hargarendah($config['per_page'], $data['start']);
		$data['category'] = $this->M_Produk->kategori();

		$this->load->view('beranda/template/user_header', $data);
		$this->load->view('produkv',$data);
		$this->load->view('beranda/template/user_footer', $data);
	}
	public function hargatinggi(){
		$data['judul'] = "K⍜PIKU | Harga Tertinggi";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		//Load Library
		$this->load->library('pagination');
		$config['base_url']		= base_url('produk/hargatinggi/');
		//Tampil jumlah produk
		$this->db->from('products');
		$config['total_rows']	= $this->db->count_all_results();
		$data['total_rows'] 	= $config['total_rows'];
		$config['per_page'] 	= 6;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['products'] = $this->M_Produk->hargatinggi($config['per_page'], $data['start']);
		$data['category'] = $this->M_Produk->kategori();

		$this->load->view('beranda/template/user_header', $data);
		$this->load->view('produkv',$data);
		$this->load->view('beranda/template/user_footer', $data);
	}
	public function daftar($id){
		$data['judul'] = "K⍜PIKU | Produk Kategori";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$this->load->model('category/M_Cat');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		//Load Library
		$this->load->library('pagination');
		$config['base_url']		= base_url('produk/daftar/'.$id);
		
		//Tampil data searching
		if($this->input->post('submit')){
			$data['caridata'] = $this->input->post('caridata');
			$this->session->set_userdata('caridata', $data['caridata']);
		}else{
			$data['caridata'] = $this->session->userdata('caridata');
		}
		
		$this->db->like('prod_name', $data['caridata']);
		$config['total_rows']	= $this->M_Produk->getKat($id);
		$config['per_page'] 	= 6;
		$config["uri_segment"] 	= 4;
		$data['total_rows'] 	= $config['total_rows'];
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(4);
		$data['products'] = $this->M_Cat->getBarangKategori($id, $config['per_page'], $data['start'], $data['caridata']);
		$data['category'] = $this->M_Produk->kategori();
		$this->load->view('beranda/template/user_header', $data);
		$this->load->view('produkv', $data);
		$this->load->view('beranda/template/user_footer', $data);
	}
}