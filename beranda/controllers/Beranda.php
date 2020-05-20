<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_Beranda');
		$this->load->helper('url');
	}
	public function index(){
		$data['judul'] = "K⍜PIKU OFFICIAL";
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']		= $this->M_Cart->jumlah_cart();
		$data['products'] 		= $this->M_Beranda->tampil_data_limit(3,0);
		$data['baru'] 			= $this->M_Beranda->produk_baru(3,0);
		$data['hargarendah'] 	= $this->M_Beranda->produk_harga_rendah(3,0);
		$data['hargatinggi'] 	= $this->M_Beranda->produk_harga_tinggi(3,0);
		$data['category'] 		= $this->M_Beranda->kategori();
		
		$this->load->model('category/M_Cat');
		$data['category'] = $this->M_Cat->tampil_data();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/beranda',$data);
		$this->load->view('template/user_footer', $data);
	}
	function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->M_Beranda->search_blog($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->prod_name,
                );
                echo json_encode($arr_result);
            }
        }
    }
 
    function search(){
		$data['judul'] = "K⍜PIKU OFFICIAL";
		$this->load->model('cart/M_Cart');
		$data['cart']		= $this->M_Cart->get_data();
		$data['sum_jumlah']	= $this->M_Cart->jumlah_cart();
		//Load Library
		$this->load->library('pagination');
		$config['base_url']		= 'http://localhost/kopiku/beranda/search';
		
		//KEYWORD SEARCH
		$title=$this->input->post('caridata');
		$this->db->like('prod_name', 	 $title);
		$this->db->or_like('vend_id', 	 $title);
		$this->db->or_like('quantity', 	 $title);
		$this->db->or_like('prod_price', $title);
		$this->db->or_like('harga_beli', $title);
		$this->db->or_like('cat_name',   $title);
		$this->db->from('products');
		$this->db->join('category', 'products.cat_id = category.cat_id');
		$config['total_rows']	= $this->db->count_all_results();
		$data['total_rows'] 	= $config['total_rows'];
		$config['per_page'] 	= 6;
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['products'] = $this->M_Beranda->search_blog($title, $config['per_page'], $data['start']);
		$data['category'] = $this->M_Beranda->kategori();
		$this->load->view('template/user_header', $data);
        $this->load->view('produk/produkv',$data);
		$this->load->view('template/user_footer', $data);
    }
	function about(){
		$data['judul'] = "K⍜PIKU | About Us";
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/about',$data);
		$this->load->view('template/user_footer', $data);
	}
	function contact(){
		$data['judul'] = "K⍜PIKU | Contact Us";
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/contactv',$data);
		$this->load->view('template/user_footer', $data);
	}
	function addKomentar(){
		$data = array(
			'nama'=> $this->input->post('nama'),
			'email'=> $this->input->post('email'),
			'telp'=> $this->input->post('telp'),
			'komen'=> $this->input->post('komen')
			);
		$query = $this->db->insert('contacts',$data);
		redirect('beranda/contact');
	}
	function pemesanan(){
		$data['judul'] = "K⍜PIKU | Proses Pesan";
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/pemesananv',$data);
		$this->load->view('template/user_footer', $data);
	}
	function detail($prod_id){
		$data['judul'] = "K⍜PIKU | Detail Produk";
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$where = array('prod_id' => $prod_id);
		$data['products'] = $this->M_Beranda->detail_data($where,'products')->result();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/detailv',$data);
		$this->load->view('template/user_footer', $data);
	}
}
