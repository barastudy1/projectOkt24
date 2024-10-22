<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<body>

 <div class="container">
      <?php $this->load->view('v_admin');?> 
      <div class="container">
        <div class="row">
          <h2>Welcome back <?php echo $this->session->userdata('ses_nama');?></h2>
        </div>
      </div>
    </div> <!-- /container -->
</body>
</html>