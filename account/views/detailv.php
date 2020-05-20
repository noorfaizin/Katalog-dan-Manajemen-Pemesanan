<!-- Content Header (Page header) -->
<?php foreach($products as $u){ ?>
<section class="content-header bg-light">
  <div class="container-fluid mt-2">
    <div class="col-sm-6">
      <h4 class="font-weight-light"> <a href="<?= base_url('beranda'); ?>" class="text-warning"><i class="fas fa-home"></i> </a> / Detail <b class="text-dark font-weight-bold"><?php echo $u->prod_name ?></b></h4>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="col-7 mx-auto">
            <img src="<?= base_url()?>gambar/<?php echo $u->prod_img?>" class="product-image" alt="Product Image">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="font-weight-bold"><?php echo $u->prod_name ?></h3>
          <p><?php echo $u->prod_desc ?></p>

          <hr>
          <h4>Stok Masih Tersedia</h4>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-default text-center active">
              <input type="radio" name="color_option" id="color_option1" autocomplete="off" checked="">
              <?php echo $u->quantity ?>
              <br>
            </label>
          </div>
          <hr>

          <h2 class="mb-0">
            <div class="badge badge-dark">RP. <?php echo number_format($u->prod_price) ?></div>
          </h2>

          <div class="mt-4">
            <?php echo anchor('cart/add_cart/'.$u->prod_id,'<div class="btn btn-dark btn-lg btn-flat"><i class="fas fa-cart-plus fa-lg mr-2"></i> Add to Cart</div>')?>

            <div class="btn btn-warning btn-lg btn-flat">
              <i class="fas fa-heart fa-lg mr-2"></i> 
              Add to Wishlist
            </div>
          </div>

          <div class="mt-4 product-share">
            <a href="#" class="text-dark"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="#" class="text-dark"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="#" class="text-dark"><i class="fa fa-google fa-2x"></i></a>
            
          </div>

        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<?php } ?>
<!-- /.content -->
    
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