<!------- FOOTER ------->
<div class="row mx-auto bg-dark pb-5">
	<div class="col-lg-4 text-right">
		<a href="<?php echo base_url('beranda')?>"><img class="img-footer mr-5" alt="foto" width="60%" src="<?php echo base_url('assets/dist/img/favicon.png')?>"></a>
  </div>
	<div class="col-lg-2 pt-5 d-flex">
		<div class="col-footer">
			<h4 class="font-weight-bold text-warning">K⍜PIKU OFFICIAL</h4>
			<p class="card-text text-white">
      About Us<br>
      Video<br>
      Stores<br>
      Restaurants<br>
      Privacy Policy<br>
      Terms & Condition<br>
      Work at The Goods</p>
		</div>
  </div>
	<div class="col-lg-2 pt-5 d-flex">
		<div class="col-footer">
			<h4 class="font-weight-bold text-warning">Customer Service</h4>
			<p class="card-text text-white">
      Contact Us<br>
      F.A.Q<br>
      Delivery Info<br>
      How to Buy<br>
      Payment Confirmation</p>
		</div>
  </div>
	<div class="col-lg-4 pt-5 d-flex">
		<div class="col-footer">
			<h4 class="font-weight-bold text-warning">Follow Us</h4>
      <a href="#" class="fa fa-facebook text-white text-center p-2 rounded mr-2" style="font-size:50px;"></a>
      <a href="#" class="fa fa-instagram text-white text-center p-2 rounded mr-2" style="font-size:50px;"></a>
      <a href="#" class="fa fa-google text-white text-center p-2 rounded mr-2" style="font-size:50px;"></a>
      <div class="col-lg-12 d-flex">
        <div class="row mx-auto mt-2 mb-3" style="width:100%;">
          <input type="text" class="col-lg-8 form-control mr-1" id="recipient-name" placeholder="Email">
          <button type="button" class="mx-auto btn btn-warning col-lg">Subcribe</button>
        </div>
      </div>
		</div>
  </div>
</div>
  <div class="row col-md-12 p-3 m-0" style="background-color:black;">
    <div class="col-md-1"></div>
    <div class="col-md-4 ml-5 text-white">Copyright © 2020 | Powered by K⍜PIKU</div>
    <div class="col-md-6 text-right">
      <img class="img-footer" alt="foto" width="60px" src="<?php echo base_url('assets/dist/img/payment/mandiri.png')?>">
      <img class="img-footer" alt="foto" width="60px" src="<?php echo base_url('assets/dist/img/payment/bri.png')?>">
      <img class="img-footer" alt="foto" width="60px" src="<?php echo base_url('assets/dist/img/payment/indomart.png')?>">
      <img class="img-footer" alt="foto" width="60px" src="<?php echo base_url('assets/dist/img/payment/alfamart.png')?>">
    </div>
    <div class="col-md-1 text-right"></div>
  </div>

<div id="wa-pop" class="dropdown">
    <a class="btn btn-success btn-sm font-weight-bold float-right p-2 shadow" role="button" id="cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">
        <h4 class="text-white m-0"><i class="fas fa-phone mt-1 mr-1"></i> WHATSAPP</h4>
    </a>
    <div class="dropdown-menu dropdown-menu-right p-0 mb-2" aria-labelledby="cart">
      <div class="card bg-light m-0 shadow" style="width:300px;">
        <div class="card-header bg-success"><h4 class="text-white m-0">Mulai Konsultasi</h4></div>
        <div class="card-body p-3">
          <small class="card-title text-gray mb-2" style="font-size:10px;">Hubungi kami jalur pribadi</small>
          <p class="card-text">
            <a href="https://bit.ly/2Prl2YS" target="blank" style="text-decoration:none">
            <div class="callout callout-success m-0 p-2">
              <div class="row col-md-12">
                <div class="col-md-3">
                  <img alt="foto" width="50px" src="<?php echo base_url('assets/dist/img/favicon.png')?>">
                </div>
                <div class="col-md-9">
                  <h6 class="font-weight-bold m-0">K⍜PIKU OFFICIAL</h6>
                  <h6 class="font-weight-light m-0" style="font-size:10px;">Ngopi Kui Uripku</h6>
                </div>
              </div>
            </div>
            </a>
          </p>
        </div>
      </div>
    </div>
</div>
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">TOP<span></span></a>

<!------- Optional JavaScript ------->
  <script src="<?php echo base_url('assets/dist/js/code.jquery.js')?>"></script>
	<script src="<?php echo base_url('assets/dist/js/cdn.jsdelivr.js')?>"></script>
	<script src="<?php echo base_url('assets/dist/js/stackpath.bootstrapcdn.js')?>"></script>
	<script src="<?php echo base_url('assets/dist/js/ScrollSmooth.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
  <script src="<?php echo base_url('assets/dist/js/jquery.min.js')?>"></script>
	<script src="<?php echo base_url('assets/dist/js/jquery.scrolly.min.js')?>"></script>
	<script src="<?php echo base_url('assets/dist/js/skel.min.js')?>"></script>
	<script src="<?php echo base_url('assets/dist/js/util.js')?>"></script>
  <script src="<?php echo base_url('assets/dist/js/main.js')?>"></script>
  <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#scroll').fadeIn();
        }else{
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
</script>

<!------- POP OVER ------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>

<!------- AJAX SEARCH CART ------->
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>cart/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>