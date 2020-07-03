<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_Cart');
		$this->load->helper('url');
	}
	public function index(){
		$data['judul'] = "K⍜PIKU | Keranjang Belanja";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
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
		$rows = $this->db->query('select * from cart where prod_id ="'.$id.'" and id_user = "'.$id_user.'"');
		$prod = $this->M_Cart->find($id);
		$data = array(
			'prod_name'	=> $prod->prod_name
		);

		$this->session->set_flashdata('message', '<div id="message" class="alert alert-dismissible shadow" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><div class="row"><div class="col-md-2"><img src="'.base_url('assets/dist/gif/trash-bin.gif').'" width="70px"></div><div class="col-md">Anda telah menghapus <span class="font-weight-bold text-danger">'.$prod->prod_name.'</span><br>dari keranjang belanja anda</div></div></div>');
		redirect('cart');
	}
	public function delete_cart_transaction($id){
		$where = array ('prod_id' => $id);
		$this->M_Cart->hapus_cart_transaction($where, 'cart');
		$rows = $this->db->query('select * from cart where prod_id ="'.$id.'" and id_user = "'.$id_user.'"');
		$prod = $this->M_Cart->find($id);
		$data = array(
			'prod_name'	=> $prod->prod_name
		);
		$this->session->set_flashdata('message', '<div id="message" class="alert alert-dismissible shadow" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><div class="row"><div class="col-md-2"><img src="'.base_url('assets/dist/gif/trash-bin.gif').'" width="70px"></div><div class="col-md">Anda telah menghapus <span class="font-weight-bold text-danger">'.$prod->prod_name.'</span><br>dari keranjang belanja anda</div></div></div>');
		redirect('user_dashboard');
	}
	public function delete_all_cart(){
		$this->M_Cart->hapus_all_cart();
		$this->session->set_flashdata('message', '<div id="message" class="alert alert-dismissible shadow text-left text-danger font-weight-bold" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><div class="row"><div class="col-md-2"><img src="'.base_url('assets/dist/gif/trash.gif').'" width="70px"></div><div class="col-md">Keranjang belanja kosong!</div></div></div>');
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
			if(!$prod->quantity == 0){
				$data = array(
					'prod_id'	=> $prod->prod_id,
					'qty'		=> 1,
					'price'		=> $prod->prod_price,
					'prod_name'	=> $prod->prod_name,
					'id_user'	=> $id_user
				);
				$this->M_Cart->input_data($data,'cart');
				$this->session->set_flashdata('message', '<div id="message" class="alert alert-dismissible shadow" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><div class="row"><div class="col-md-2"><img src="'.base_url('assets/dist/gif/check-circle.gif').'" width="70px"></div><div class="col-md">Anda telah menambahkan <span class="font-weight-bold text-success">'.$prod->prod_name.'</span><br>ke keranjang belanja anda</div></div></div>');
				redirect('cart');
			}else{
				$this->session->set_flashdata('message', '<div id="message" class="alert alert-dismissible shadow" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button><div class="row"><div class="col-md-2"><img src="'.base_url('assets/dist/gif/warning-blink.gif').'" width="70px"></div><div class="col-md">Maaf untu produk <span class="font-weight-bold text-danger">'.$prod->prod_name.'</span> sedang kosong<br>silahkan memilih produk yang masih ada ya.. :)</div></div></div>');
				redirect('produk');
			}
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

		// Konfigurasi email
        $config = [
            'mailtype'    => 'html',
            'charset'     => 'utf-8',
            'protocol'    => 'smtp',
            'smtp_host'   => 'smtp.gmail.com',
            'smtp_user'   => 'kopiqucoffee@gmail.com',  // Email gmail
            'smtp_pass'   => 'kopiqukuduscoffee2020',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('kopiqucoffee@gmail.com', 'K⍜PIKU OFFICIAL');

        // Email penerima
        $this->email->to('faiz.jetak@gmail.com'); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

        // Subject email
        $this->email->subject('Proses Transaksi Pembelian Sukses | K⍜PIKU OFFICIAL');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Klik <strong><a href='https://masrud.com/post/kirim-email-dengan-smtp-gmail' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
		$this->M_Cart->co();
	}
}