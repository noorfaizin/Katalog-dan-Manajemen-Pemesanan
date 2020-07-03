<div class="col-md-7 mx-auto"><?= $this->session->flashdata('message');?></div>

<div class="row mx-auto pb-5 pt-5 bg-white" style="width:100%;">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">KERANJANG BELANJA</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>
<div class="row col-lg-8 mx-auto">
  <?php
    if (!$cart->result() ) { ?>
      <div class="col-md-12">
      <center>
        <div class="row col-md-12 mt-5">
          <img class="mx-auto" alt="foto" src="<?php echo base_url('assets/dist/img/box-null.png')?>" style="width:250px;">
        </div>
        <div class="mb-5">
          <strong class="text-danger">Keranjang belanja kosong!</strong> silahkan memilih produk terlebih dahulu.
        </div>
        <a class="mt-5" href="<?php echo base_url('produk')?>"><div class="btn btn-warning btn-lg">
          <i class="fas fa-cart-plus"></i> Belanja Sekarang
        </div></a>
      </center>
      </div>
    <?php } else { ?>
      <div class="row col-md-12 mt-4">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <div class="form-group">
            <div class="input-group">
              <input class="form-control" type="text" name="search_text" id="search_text" placeholder="Cari Pesananmu">
            </div>
          </div>
        </div>
      </div>
      <div id="result" class="col-md-12 mx-auto"></div>

    <div class="col-md-12 text-right mb-5">
      <a href="<?php echo base_url('cart/delete_all_cart')?>"><div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Kosongkan Keranjang</div></a>
      <a href="<?php echo base_url('produk')?>"><div class="btn btn-warning btn-sm"><i class="fas fa-cart-plus"></i> Lanjutkan Belanja</div></a>
      <a href="<?php echo base_url('cart/transaction')?>"><div class="btn btn-sm btn-success"><i class="fas fa-money"></i> Transaksi</div></a>
    </div>
  <?php } ?>

</div>

</div>
    
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script>
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.2em solid #343a40}";
        document.body.appendChild(css);
    };
</script>
</body>
</html>