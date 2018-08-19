<!DOCTYPE html>
<html lang="en">
<head>
  <title>the project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/maincss/main.css">
  <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/icon/ionicons.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<style>
/* Member */
.member-area {
  padding-top: 80px;
  background-color: #F7FFE6;
  padding-bottom: 80px;
}

.member_image
{
  width: 200px;
  height: 200px;
  margin: 0 auto;
}
.member_image img
{
  max-width: 100%;
}
.member_title
{
  font-family: 'gill', sans-serif;
  font-size: 22px;
  color: #212121;
  margin-top: 10px;
  margin-bottom: 10px; 
}
.member_btn
{
margin-bottom: 10px; 
}
</style>

<body>
<!-- Navbar Menu -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
    </button>
    <a class="navbar-brand" href="<?php echo base_url() ?>">The Project</a>
    </div>
    
  <div class="collapse navbar-collapse" id="myNavbar">
  
  <ul class="nav navbar-nav">
    <li><a href="#"><span>Menu 1</span></a></li>
    <li><a href="#"><span>Menu 2</span></a></li>
  </ul>
  
  <ul class="nav navbar-nav navbar-right">
    <li>
      <a href="#" data-target="#modal_login_admin" data-toggle="modal">
        <span class="glyphicon glyphicon-log-in"></span> Login </a>
    </li>
  </ul>
  </div>
  </div>
</nav>
<!-- Navbar Menu -->

<?php 
    $open = $this->uri->segment(3);
    if($open=='open'){ 
?>
      <div class="container">
      <div class="alert alert-success" style="text-align:center">
        <strong>Success!</strong> Data Telah Berhasil di Simpan. Silahkan Login Menggunakan Akun Anda.
      </div>
      </div>
      </br>
<?php      
    }
?>

<!-- Image Dashbor -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-20px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url()?>assets/image/1.png" alt="">
    </div>

    <div class="item">
      <img src="<?php echo base_url()?>assets/image/2.png" alt="">
    </div>

    <div class="item">
      <img src="<?php echo base_url()?>assets/image/3.png" alt="">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Image Dashbor -->

<!-- Company Profile -->
<div class="intro">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="intro_image text-lg-right text-center"><img src="<?php echo base_url();?>assets/image/tp.png" alt=""></div>
        </div>
        <div class="col-lg-6">
          <div class="intro_content">
            <div class="intro_title_container">
              <div class="intro_subtitle">take a look at our</div>
              <h1 class="intro_title">The Project</h1>
            </div>
            <div class="intro_text">
              <p>
              Description the project ......
              </p>
            </div>
            <div class="link_button intro_button"><a href="#">read more</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Company Profile -->

<!-- Member -->
<div class="member-area">
<div class="container">
  <div class="row" style="text-align:center;">
    <h1 class="intro_title">Mulai Bergabung Dengan The Project</h1>
  </div>
  <div class="row">
    <div class="col-md-3 col-xs-12" style="text-align:center;">
      <div class="member_image"><img src="<?php echo base_url();?>assets/image/user.png" alt=""></div>
      <div class="member_title">Admin Sekolah</div>
      <div class="member_btn"><a href="#" data-target="#modal_daftar_admin" data-toggle="modal" class="btn btn-sm btn-success">Daftar</a></div>
    </div>
    <div class="col-md-3 col-xs-12" style="text-align:center;">
      <div class="member_image"><img src="<?php echo base_url();?>assets/image/user.png" alt=""></div>
      <div class="member_title">Pengajar</div>
      <div class="member_btn"><a href="#" data-target="#modal_daftar_kgw" data-toggle="modal" class="btn btn-sm btn-success">Daftar</a></div>
    </div>
    <div class="col-md-3 col-xs-12" style="text-align:center;">
      <div class="member_image"><img src="<?php echo base_url();?>assets/image/user.png" alt=""></div>
      <div class="member_title">Murid</div>
      <div class="member_btn"><a href="#" class="btn btn-sm btn-success">Daftar</a></div>
    </div>
    <div class="col-md-3 col-xs-12" style="text-align:center;">
      <div class="member_image"><img src="<?php echo base_url();?>assets/image/user.png" alt=""></div>
      <div class="member_title">Wali Murid</div>
      <div class="member_btn"><a href="#" class="btn btn-sm btn-success">Daftar</a></div>
    </div>
  </div>
</div>
</div>
<!-- Member -->

<!-- Footer -->
<footer class="footer-area section-gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6>About Us</h6>
                <p style="color:#9696C2;">
                We are a super team.
                </p>
                <p class="footer-text" style="color:#9696C2;">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://media-konseling.net" target="_blank">Media Konseling</a>
                </p>                
              </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
              <div class="single-footer-widget">
                <h6>Contact Us</h6>
                <p style="color:#9696C2;"><i class="fa fa-whatsapp"></i> +62 888 888 888 888 </p>
                
              </div>
            </div>            
            <div class="col-lg-3 col-md-6 col-sm-6 social-widget">
              <div class="single-footer-widget">
                <h6>Follow Us</h6>
                <p style="color:#9696C2;">Let us be social</p>
                <div class="footer-social d-flex align-items-center">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>              
          </div>
        </div>
      </footer>
<!-- Footer -->

<!-- modal login -->
<div id="modal_login_admin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Login </h4>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url('Dashboard/pr_login'); ?>" method="POST">
          <div class="form-group has-feedback">
            <input name="in_user" type="text" class="form-control" placeholder="UserID">
          </div>
          <div class="form-group has-feedback">
            <input name="in_password" type="password" class="form-control" placeholder="Password">
          </div>
        
      <div class="modal-footer">
        <button class="btn btn-success" type="submit">
          Submit
        </button>
        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
          Cancel
        </button>
      </div>
      
        </form>
      </div> 
    </div>

  </div>
</div>
<!-- modal login -->

<!-- Daftar Member Admin -->
<div id="modal_daftar_admin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Daftar Admin Sekolah</h4>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url('registrasi/registrasi_baru_admin'); ?>" method="POST">
          <div class="form-group has-feedback">
            <input name="in_nama" type="text" class="form-control" placeholder="Nama Lengkap">
          </div>
          <div class="form-group has-feedback">
            <input name="in_userid" type="text" class="form-control" placeholder="NIP">
          </div>
          <div class="form-group has-feedback">
            <input name="in_email" type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group has-feedback">
            <input name="in_password" type="password" id="reg_password" class="form-control" placeholder="Password">
            <input type='checkbox' id='toggle' value='0' onchange='togglePassword(this);'>
                &nbsp; <span id='toggleText'>Show</span>
          </div>
        
      <div class="modal-footer">
        <button class="btn btn-success" type="submit">
          Submit
        </button>
        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
          Cancel
        </button>
      </div>
      
        </form>
      </div> 
    </div>

  </div>
</div>
<!-- Daftar Member Admin -->

<!-- Daftar Member KepSek, GuruBK, WaliKelas -->
<div id="modal_daftar_kgw" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Daftar</h4>
      </div>

      <div class="modal-body">
        <form action="<?php echo base_url('registrasi/registrasi_baru_gbw'); ?>" method="POST">
          <div class="form-group has-feedback">
            <select name="in_role" class="form-control" required>
              <option value="">Jabatan di Sekolah</option>
              <?php 
              foreach ($role as $rl) {
              ?>
              <option value="<?php echo $rl->m_role_id;?>"><?php echo $rl->role_nama; ?></option>
              <?php 
              }
              ?>
            </select>
          </div>
          <div class="form-group has-feedback">
            <input name="in_nama" type="text" class="form-control" placeholder="Nama Lengkap">
          </div>
          <div class="form-group has-feedback">
            <input name="in_email" type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group has-feedback">
            <input name="in_password" type="password" id="reg_password" class="form-control" placeholder="Password">
            <input type='checkbox' id='toggle' value='0' onchange='togglePassword(this);'>
                &nbsp; <span id='toggleText'>Show</span>
          </div>
        
      <div class="modal-footer">
        <button class="btn btn-success" type="submit">
          Submit
        </button>
        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
          Cancel
        </button>
      </div>
      
        </form>
      </div> 
    </div>

  </div>
</div>
<!-- Daftar Member KepSek, GuruBK, WaliKelas -->

<!-- Auto Open Modal -->
<div id="autoopenmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Auto Open Modal -->

<!-- Javascript Online
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
-->
<!-- Javascript On File -->
<script src="<?php echo base_url();?>assets/bootstrap/js/jquery2_1_3.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Show/Hide Password -->
<script type="text/javascript">
 function togglePassword(el){
  // Checked State
  var checked = el.checked;

  if(checked){
   // Changing type attribute
   document.getElementById("reg_password").type = 'text';
   // Change the Text
   document.getElementById("toggleText").textContent= "Hide";
  }else{
   // Changing type attribute
   document.getElementById("reg_password").type = 'password';

   // Change the Text
   document.getElementById("toggleText").textContent= "Show";
  }
 }
</script>
<!-- JS Show/Hide Password -->

<!-- Auto Open Modal  <script type="text/javascript"> $(window).load(function(){$('#autoopenmodal').modal('show');}); </script> -->
</body>
</html>