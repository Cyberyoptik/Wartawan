<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="keywords" content="<?php echo $kw ?>" />
  <meta name="description" content="<?php echo $des ?>"  />
  <meta name="generator" content="Sanzuke Developer Sysytem" />

  <!-- <link rel="stylesheet" href="css/ddsmoothmenu.css" type="text/css" /> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/lightbox.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>css/cupertino/jquery-ui-1.8.23.custom.css" type="text/css" />
  <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.png" type="image/png"/>
  <link href="<?php echo base_url() ?>css/tango/skin.css" type="text/css" rel="stylesheet">
  <link type="text/css" href="<?php echo base_url() ?>css/nivo-slider.css" rel="stylesheet" media="screen">
  <!-- <link href='http://fonts.googleapis.com/css?family=Lemon' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.css">

  <!-- <script type="text/javascript" src="js/ddsmoothmenu.js" ></script> -->
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.6.2.min.js" ></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui-1.8.16.custom.min.js" ></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/lightbox.js" ></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/waktu.js" ></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.nivo.slider.js"></script>

  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.galleryview-2.0-pack.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.timers-1.1.2.js"></script>

  <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.cookie.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap.js"></script>

  <script type="text/javascript">
  $(document).ready(function(e) {
      $("#checkin").datepicker({ dateFormat: 'yy-mm-dd' });
  	$("#checkout").datepicker({ dateFormat: 'yy-mm-dd' });

  	$('#slider').nivoSlider();

  	$('#tabs').tabs();

  	$('#photos').galleryView({
  		panel_width: 660,
  		panel_height: 450,
  		frame_width: 100,
  		frame_height: 67,
  		filmstrip_size: 630,
  		overlay_color: '#000000',
  		overlay_text_color: 'yellow',
  		caption_text_color: 'white',
  		background_color: '#082148',
  		border: 'none',
  		nav_theme: 'light',
  		easing: 'easeInOutQuad',
  		pause_on_hover: true
  	});

  	$("#reservasiFrm").submit(function() {
          $.ajax({
  			type : "POST",
  			url :"",
  			data :"",
  			success : function(){
  				$("#frmReservasi").fadeToggle(300)
  				$("#overlay").delay(700).fadeOut(300)
  			}
  		});
  		return false;
      });

  	$("#frmreservasion").click(function() {
          $("#overlay").show()
  		$("#frmReservasi").hide().fadeIn(300)
      });

  	$("#closeBtn").click(function(){
  		$("#frmReservasi").fadeToggle(300)
  		$("#overlay").delay(700).fadeOut(300)
  	});

  $("#closepopup").click(function(){
      $("#overlays").hide();
      $("#popupmsg").hide();
  });

  });



  function zoomimage(pathimg){
      $("#overlays").show();
      $("#popupmsg").html('<img src="'+pathimg+'" width="600px" /><br><button type="button" name="close" id="closepopup" onclick="$(\'#overlays\').hide(); $(\'#popupmsg\').hide();"><i class="fa fa-close"></i> Close</button>').fadeIn('slow');
  }

  // ddsmoothmenu.init({
  // 	mainmenuid: "smoothmenu1", //menu DIV id
  // 	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
  // 	classname: 'ddsmoothmenu', //class added to menu's outer DIV
  // 	//customtheme: ["#1c5a80", "#18374a"],
  // 	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
  // })
  </script>
  <title>Wartabandung - <?php echo $this->main_model->getTitle(); ?></title>
</head>
<body onload="showTime()">
  <div id="overlays"></div>
  <div id="popupmsg"></div>
  <div id="overlay"></div>
  <div class="container">
    <div class="row">
      <div id="headerx" class="col-md-12">
        <div class="logox col-md-4 col-sm-12 col-xs-12" style="margin:0;"><img src="<?php echo base_url() ?>images/logo.png" width="300" /></div>
        <div class="col-md-8 col-sm-12 col-xs-12 text-right"><?php $this->main_model->loadIklan("bannerataskecil"); ?></div>
      </div>

	    <div class="clearfix"></div>

	    <div class="rowx">
	      <div class="col-md-1x"><?php //$main->loadMenuLink() ?></div>
	      <div id="clear"></div>
	    </div>
		</div>
		<div class="col-md-12"><?php $this->main_model->loadMenuLink() ?></div>
    <div id="eventTopx" class="row">
      <!--<div class="btn">
        <div id="hide" onclick="$('#isiEvent').slideUp(300); $('#show').show(); $(this).hide()">Hide</div>
        <div id="show" style="display:none;" onclick="$('#isiEvent').slideDown(300); $('#hide').show(); $(this).hide()">Show</div>
      </div>-->
			<div class="col-md-12">
	      <div id="isiEventx" class="col-md-12"> <?php $this->main_model->loadIklan("banneratasbesar"); ?> </div>
			</div>
    </div>

    <div id="kontenx" class="col-md-12x" style="margin-top:5px;">
			<!-- <div class="row"> -->
      <!-- <div class="col-md-8 col-sm-8 col-xs-8" style="margin:0px; padding:0px;"> -->
        <?php
          // $this->main_model->loadPage($page);
          $this->load->view($konten, false);
        ?>
      <!-- </div> -->
      <?php if( $page != '') { ?>
              <div class="iklanx col-md-4 col-sm-4 col-xs-12">
                <!-- ====================================== Banner Iklan Display 1 ======================== -->
                <?php
                $this->main_model->loadIklan("display1");
                echo '<div style="height:10px;"></div>';/*$main->loadPolling();*/
                $this->main_model->loadIklan("display2"); ?>
              </div>
			<?php }?>

      <!-- <div id="clear"></div> -->
			<!-- </div> -->
    </div>
    <div class="clearfix"></div>
		<footer id="footer" class="col-md-12">
			<div class="social"> <a href="<?php echo base_url() ?>rss.php"><img src="<?php echo base_url() ?>images/ico_rss.gif" /></a> <?php $this->main_model->loadSocial() ?> </div>
			<a href="<?php echo base_url() ?>page/lihat/8">Tentang Kami</a> | <a href="<?php echo base_url() ?>page/lihat/9">Redaksi</a> | <a href="<?php echo base_url() ?>page/lihat/10">Kontak Kami</a> | <a href="<?php echo base_url() ?>page/lihat/11">Disclimer</a> <br />
			&copy; 2016 JABARNEWS.id - All rights reserved </div>
			<div id="iklanFooter">
				<div id="close" style="bottom:100px; right:0; cursor:pointer;">
					<img src="images/publish_x.png" onclick="$('#iklanFooter').fadeOut(3000); $('#tmpIklanFooter').delay(300).hide();" />
				</div>
				<div class="col-md-12 text-center" style="text-align:center;"><?php $this->main_model->loadIklan("footerbanner"); ?></div>
			</div>
		</footer>
		<br><br>
		<div style="height:75px; text-align:center" align="center" id="tmpIklanFooter"></div>
  </div>
</body>
</html>
