<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_Cart');
		$this->load->helper('url');
	}
	public function index(){
		$data['judul'] = "K⍜PIKU | Cart Shopping";
		$this->load->model('M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$this->load->view('beranda/template/user_header', $data);
		$this->load->view('cartv', $data);
		$this->load->view('beranda/template/user_footer', $data);
	}
	function fetch(){
		$output = '';
		$query = '';
		if($this->input->post('query')){
			$query = $this->input->post('query');
		}
		$data = $this->M_Cart->fetch_data($query);
		$sum_jumlah = $this->M_Cart->jumlah_cart();
		$output .= '
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead class="bg-warning">
					<tr>
						<th class="text-center" width="1px">NO</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Harga</th>
						<th class="text-center" width="150px">Jumlah</th>
						<th class="text-center">Sub-Total</th>
						<th class="text-center" width="120px">Hapus</th>
					</tr>
				</thead>
		';
		if($data->num_rows() > 0){
			$no=1;
			$total_bayar = 0;
			foreach($data->result() as $row){
				$output .='
					<tr>
						<td class="text-center">' .$no++. '</td>
						<td>'.$row->prod_name.'</td>
						<td align="right">Rp. '.number_format($row->price, 0,',','.').',-</td>
						<td class="text-center">
							'.anchor('cart/min_qty/'.$row->prod_id,'<div class="btn btn-sm btn-warning mx-auto"><i class="fas fa-minus"></i></div>').'
							<div id="demo" class="btn btn-sm btn-light mx-auto">'.$row->qty.'</div>
							'.anchor('cart/add_cart/'.$row->prod_id,'<div class="btn btn-sm btn-warning mx-auto"><i class="fas fa-plus"></i></div>').'
						</td>
						<td align="right">Rp. '.number_format($row->total_harga, 0,',','.').',-</td>
						<td align="center">'.anchor('cart/delete_cart/'.$row->prod_id,'<div class="text-dark mx-auto" style="border-radius: 50%;"><i class="fas fa-trash"></i></div>').'</td>
					</tr>
				';
				$total_bayar+=$row->total_harga;}
				$output .='
					<tr>
						<td class="bg-light text-center font-weight-bold" colspan="3">TOTAL</td>
						<td class="bg-light text-center font-weight-bold">'.$sum_jumlah->jumlah.'</td>
						<td class="bg-warning font-weight-bold" align="right" colspan="2">Rp. '.number_format($total_bayar, 0,',','.').' ,-</td>
					</tr>
				';
		}else{
			$output .= '
			<tr>
				<td class="text-center" colspan="6">Produk tidak ada</td>
			</tr>';
		}
		$output .= '</table>';
		echo $output;
	}

	public function delete_cart($id){
		$where = array ('prod_id' => $id);
		$this->M_Cart->hapus_cart($where, 'cart');
		redirect('cart');
	}
	public function delete_cart_transaction($id){
		$where = array ('prod_id' => $id);
		$this->M_Cart->hapus_cart_transaction($where, 'cart');
		redirect('user_dashboard');
	}
	public function delete_all_cart(){
		$this->M_Cart->hapus_all_cart();
		redirect('cart');
	}
	public function add_cart($id){
		$this->cek_login->user();
		$id_user = $this->M_Cart->id_user();

		$rows = $this->db->query('select * from cart where prod_id ="'.$id.'" and id_user = "'.$id_user.'"');
		if ($rows->num_rows() == 1) {
			$prod = $rows->row();
			$qty = $prod->qty + 1;
			$data = array(
					'qty' => $qty
			);
			$this->db->where('prod_id', $id);
			$this->db->update('cart', $data);
		} else {
			$prod = $this->M_Cart->find($id);
			$data = array(
				'prod_id'	=> $prod->prod_id,
				'qty'		=> 1,
				'price'		=> $prod->prod_price,
				'prod_name'	=> $prod->prod_name,
				'id_user'	=> $id_user
			);
			$this->M_Cart->input_data($data,'cart');
		}
		redirect('cart');
	}

	public function min_qty($id){
		$rows = $this->db->query('select * from cart where prod_id ="'.$id.'" ');
		if ($rows->num_rows() == 1) {
            $prod = $rows->row();
            $qty = $prod->qty - 1;
            $data = array(
                    'qty' => $qty
            );
            $this->db->where('prod_id', $id);
            $this->db->update('cart', $data);
        } else {
            $prod = $this->M_Cart->find($id);
			$data = array(
				'prod_id'	=> $prod->prod_id,
				'qty'		=> 1,
				'price'		=> $prod->prod_price,
				'prod_name'	=> $prod->prod_name
			);
			$this->M_Cart->input_data($data,'cart');
        }
		redirect('cart');
	}
	
	public function transaction(){
		$this->cek_login->user();
		if ($this->cek_login->user() == TRUE ) {
            $this->load->view('login');
		} else {
			redirect('user_dashboard');
		}
		redirect('user_dashboard');
	}
	
	public function order_now(){
		$this->M_Cart->co();
	}
}