<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Precision Golf School</title>

<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/core.css" type="text/css" media="all"/>

<link href='http://fonts.googleapis.com/css?family=Lato:400,700,700italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>

</head>
<body>

<div class="signinBox">
  <div id="signinHold">
      <div class="imgContain">
        <img alt="Clarity" src="<?php echo base_url();?>img/precision_logo.png"/>
      </div>
    <div class="signin">

        <h2>Login to your Precision Golf School account:</h2>
        <?php echo form_open('login/validate_credentials');?>
        <input size="30" class="input-medium" type="email" placeholder="Email" name="username" value="contact@wafflesplease.com"/>

        <input size="30" class="input-medium" type="password" placeholder="Password" name="password" value="samplepass1"/>
        <button class="btn-success btn btn-large pull-right" id="signin-btn" href="index.html" name="submit">Sign In</button>
        <?php echo form_close();?>
<div style="color:#c0188d;" <?php if($show_error){echo'class="alert"';}?> ><b><?php echo $show_error;?></b></div>
    </div>

  </div>
</div>
</body>
</html>