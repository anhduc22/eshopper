<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo base_url(); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <script src="<?php echo base_url(); ?>/public/site/js/jquery.js"></script>
    <link href="<?php echo base_url(); ?>/public/site/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/site/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/site/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/site/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/site/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/site/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/site/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/public/site/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo base_url(); ?>/public/site/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo base_url(); ?>/public/site/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo base_url(); ?>/public/site/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo base_url(); ?>/public/site/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<!-- ========= header ========= -->
<header id="header">
    <!-- Header_top -->
    <?php $this->load->view('site/inc/header/top'); ?>
    <!-- /.Header_top -->

    <!-- Header_middle -->
    <?php $this->load->view('site/inc/header/middle'); ?>
    <!-- /.Header_middle -->

    <!-- Header_bottom -->
    <?php $this->load->view('site/inc/header/bottom'); ?>
    <!-- /.Header_bottom -->
    
</header>
<!-- ========= end header ========= -->

    <!-- Slider -->
    <?php $this->load->view('site/inc/slider/slider'); ?>
    <!-- /Slider -->

<!-- ========= Content ========= -->
<?php $this->load->view($template, isset($data) ? $data : null); ?>
<!-- ========= End content ========= -->


<!-- ========= Footer ========= -->
<footer id="footer">
    <!-- Footer top -->
    <?php $this->load->view('site/inc/footer/footer_top'); ?>
    <!-- End footer top -->

    <!-- Footer widget -->
    <?php $this->load->view('site/inc/footer/footer_widget'); ?>
    <!-- End footer widget -->

    <!-- Footer bottom -->
    <?php $this->load->view('site/inc/footer/footer_bottom'); ?>
    <!-- End footer bottom -->
</footer>
<!-- ========= End footer ========= -->


<script src="<?php echo base_url(); ?>/public/site/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/public/site/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url(); ?>/public/site/js/price-range.js"></script>
<script src="<?php echo base_url(); ?>/public/site/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url(); ?>/public/site/js/main.js"></script>
</body>
</html>