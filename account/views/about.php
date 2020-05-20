<!------- ABOUT US ------->
<div class="row mx-auto pb-5 pt-5 bg-light" style="width:100%;">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">TENTANG KAMI</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>
  <div class="row mx-auto pl-3 pr-3" style="width: 100%;">

    <div class="row col-md-12 mt-3 mb-5">
      <div class="col-sm-3">
          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
              <a id="btnpills" onclick="openPills('tentang')" class="nav-link text-dark active" data-toggle="pill" role="tab" aria-selected="true" style="cursor:pointer;">About Us</a>
              <a id="btnpills" onclick="openPills('cabang')" class="nav-link text-dark" data-toggle="pill" role="tab" aria-selected="true" style="cursor:pointer;">Kedai Kopi</a>
          </div>
      </div>

      <div class="row col-md-9">
        <div class="container-pills">

        <div id="tentang" class="w3-container pills row col-md-12">
          <div class="tab-content" id="tentang">
            <div class="tab-pane text-left fade show active" role="tabpanel">
              <div class="row col-md-12 bg-white">
                <h4 class="font-weight-bold p-3 m-4 rounded bg-warning col-md-12">About Us</h4>
                <img class="mx-auto" src="<?php echo base_url('assets/dist/img/favicon.png')?>" alt="KOPIKU" style="width:200px;">
                <p class="ml-5 mr-5 text-justify mt-3 font-weight-bold" style="text-indent: 50px;">Konsep produk Ecommerce yang akan kami buat adalah Ecommerce untuk penjualan produk produk yang berhubungan dengan kopi secara online. Dimana setiap orang bisa dengan mudah untuk membeli produk kopi dengan mudah.</p>
                <p class="ml-5 mr-5 text-justify font-weight-bold" style="text-indent: 50px;">Kami berencana untuk membuat platfrom penjualan produk kopi secara online. Produk itu akan kami beri nama “KopiKu”. Dalam pemilihan nama kami sesuaikan dengan produk ini. “Kopi” berarti biji kopi dari petani kopi di seluruh indonesia dan “Ku” berarti saya dan maksutnya adalah milik kita bersama. Tujuan dalam pembuatan produk ini agar semua orang yang ingin membeli biji kopi di mudahkan dengan adanya produk kami jadi orang bisa memesan dari rumah saja.</p>
                <p class="ml-5 mr-5 mb-5 text-justify font-weight-bold" style="text-indent: 50px;">Alasan kami memilih empat situs diatas ialah untuk membandingkan dari semua tersebut kemudian kami akan menggunakan sistem yang paling mudah digunakan untuk para pengguna yang akan menggunakan website kami. Kami akan menggunakan sistem yang pengguna dapat memilih lebih dari satu produk yang akan dibeli kemudian memilih pembayaran dengan metode apa. Kemudian pengguna hanya menunggu ditempat barang akan dikirimkan dengan mencantumkan alamat yang akan dikirim.</p>
              </div>

            </div>
          </div>
        </div>

        <div id="cabang" class="w3-container pills row col-md-12" style="display:none;">
          <div class="tab-content" id="cabang">
            <div class="tab-pane text-left fade show active" role="tabpanel">
              <div class="row col-md-12 bg-white">
                <h4 class="font-weight-bold p-3 m-4 rounded bg-warning col-md-12">Kedai K⍜PIKU</h4>
                <div class="row col-md-12">
                  <div class="col-md-4 ml-3 mr-3 ">
                    <img class="mx-auto" src="<?php echo base_url('assets/dist/img/favicon.png')?>" alt="KOPIKU" >
                  </div>
                  <div class="col-md-7 mr-3 mb-5">
                    <p class="text-justify mt-3" style="text-indent: 50px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="ml-3 mr-3 mb-5 col-md-7">
                    <p class=" text-justify mt-3" style="text-indent: 50px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <div class="col-md-4">
                    <img class="mx-auto" src="<?php echo base_url('assets/dist/img/favicon.png')?>" alt="KOPIKU" >
                  </div>
                </div>
                
              </div>

            </div>
          </div>
        </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script>
function openPills(cityName) {
  var i;
  var x = document.getElementsByClassName("pills");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";
}
</script>