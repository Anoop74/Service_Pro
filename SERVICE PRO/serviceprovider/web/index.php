<!DOCTYPE html>
<html>
<head>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<?php
  require_once "../web/db.php";
ob_start();
session_start();


    
  if (isset($_POST['qr'])) {
    $t_id=$_SESSION['rid']; 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "../images/qr".$filename;
         
        $sqlinert="SELECT * FROM pay_tbl where t_id='".$t_id."'";
        $result=mysqli_query($conn, $sqlinert);
        $num_rows = mysqli_num_rows($result);
        if($num_rows==0)
        {

        $sql="INSERT INTO pay_tbl VALUES (null,'".$t_id."','".$filename."')";
        // Execute query
       $i=mysqli_query($conn, $sql);

         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  { ?>
        <script>
            alert ("successfully uploaded");
            </script>
            <?php
        }else{?>

           <script>
            alert ("Failed to upload image");
            </script>
            <?php
         }
        }

        else{
          $sql="UPDATE pay_tbl SET  pro_pic='".$filename."' where t_id='".$t_id."'";

        // Execute query
       $i=mysqli_query($conn, $sql);

         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  { ?>
        <script>
            alert ("successfully updated");
            </script>
            <?php
        }else{?>

           <script>
            alert ("Failed to upload image");
            </script>
            <?php
         }
        }

        }




 
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    $t_id=$_SESSION['rid']; 
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "../images/".$filename;
         
        $sqlinert="SELECT * FROM profile where t_id='".$t_id."'";
        $result=mysqli_query($conn, $sqlinert);
        $num_rows = mysqli_num_rows($result);
        if($num_rows==0)
        {

        $sql="INSERT INTO profile VALUES (null,'".$t_id."',0,0,'".$filename."')";
        // Execute query
       $i=mysqli_query($conn, $sql);

         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  { ?>
        <script>
            alert ("successfully uploaded");
            </script>
            <?php
        }else{?>

           <script>
            alert ("Failed to upload image");
            </script>
            <?php
         }
        }

        else{
          $sql="UPDATE profile SET  pro_pic='".$filename."' where t_id='".$t_id."'";

        // Execute query
       $i=mysqli_query($conn, $sql);

         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  { ?>
        <script>
            alert ("successfully updated");
            </script>
            <?php
        }else{?>

           <script>
            alert ("Failed to upload image");
            </script>
            <?php
         }
        }

        }

        if (isset($_POST['btn_upload']))
        {
           $t_id=$_SESSION['t_id'];
           $filename = $_FILES["photo"]["name"];
           $tempname = $_FILES["photo"]["tmp_name"];   
           $folder = "images/gallery/".$filename;

           if ($_FILES['photo']['size'] == 0 && $_FILES['photo']['error'] == 0)
            {
                // cover_image is empty (and not an error)
            }
            else{
              
               if($filename !='')
               {
                $sql ="INSERT INTO tbl_gallery (photo,p_id) VALUES ('".$filename."','".$t_id."')";
                $i=mysqli_query($conn, $sql);
                header("Location: index.php");

              if (move_uploaded_file($tempname, $folder))  { ?>
                <script>
                    alert ("successfully uploaded");
                    </script>
                    <?php
                }else{?>

                  <script>
                    alert ("Failed to upload image");
                    </script>
                    <?php
            }
               }
            }
           
           

           
        }

?>

 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">


<!--<link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" /> -->
<!--<script src="fullcalendar/lib/jquery.min.js"></script> -->
<style>
html *{
    -webkit-font-smoothing: antialiased;
}

.h6, h6 {
    font-size: .75rem !important;
    font-weight: 500;
    font-family: Roboto,Helvetica,Arial,sans-serif;
    line-height: 1.5em;
    text-transform: uppercase;
}

.name h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}
.navbar-translate{
  text-align: left;

}

.navbar {
    border: 0;
    border-radius: 3px;
    padding: .625rem 0;
    margin-bottom: 20px;
    color: #555;
    background-color: #fff!important;
    box-shadow: 0 4px 18px 0 rgba(0,0,0,.12), 0 7px 10px -5px rgba(0,0,0,.15) !important;
    z-index: 1000 !important;
    transition: all 150ms ease 0s;
    
}

.navbar.navbar-transparent {
    z-index: 1030;
    background-color: transparent!important;
    box-shadow: none !important;
    padding-top: 25px;
    color: #fff;
}

.navbar .navbar-brand {
    position: relative;
    color: red;
    height: 50px;
    font-size: 2.5rem;
    line-height: 30px;
    padding: .65rem 0;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
}

.navbar .navbar-nav .nav-item .nav-link:not(.btn) .material-icons {
    margin-top: -7px;
    top: 3px;
    position: relative;
    margin-right: 3px;
}

.navbar .navbar-nav .nav-item .nav-link .material-icons {
    font-size: 5rem;
    max-width: 24px;
    margin-top: -1.1em;
}

.navbar .navbar-nav .nav-item .nav-link .fa, .navbar .navbar-nav .nav-item .nav-link .material-icons {
    font-size: 5rem;
    max-width: 24px;
    margin-top: 0px;
}
.nav-item a{
  font-size:20px;
  color: red;

  
}

.navbar .navbar-nav .nav-item .nav-link {
    position: relative;
    color: inherit;
    padding: .9375rem;
    font-weight: 400;
    font-size: 20px;
    border-radius: 3px;
    line-height: 20px;
}

a .material-icons {
    vertical-align: middle;
}

.fixed-top {
    position: fixed;
    z-index: 1030;
    left: 0;
    right: 0;
}

.profile-page .page-header {
    height: 380px;
    background-position:center;
}

.page-header {
    height: 100vh;
    background-size: cover;
    margin: 0;
    padding: 0;
    border: 0;
    display: flex;
    align-items: center;
}

.header-filter:after, .header-filter:before {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
}

.header-filter::before {
    background: rgba(0,0,0,.5);
}

.main-raised {
    margin: -60px 30px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
}

.main {
    background: #FFF;
    position: relative;
    z-index: 3;
}

.profile-page .profile {
    text-align: center;
}

.profile-page .profile img {
    max-width: 160px;
    width: 100%;
    margin: 0 auto;
    -webkit-transform: translate3d(0,-50%,0);
    -moz-transform: translate3d(0,-50%,0);
    -o-transform: translate3d(0,-50%,0);
    -ms-transform: translate3d(0,-50%,0);
    transform: translate3d(0,-50%,0);
}

.img-raised {
    box-shadow: 0 5px 15px -8px rgba(0,0,0,.24), 0 8px 10px -5px rgba(0,0,0,.2);
}

.rounded-circle {
    border-radius: 50%!important;
}

.img-fluid, .img-thumbnail {
    max-width: 100%;
    height: auto;
}

.title {
    margin-top: 30px;
    margin-bottom: 25px;
    min-height: 32px;
    color: #3C4858;
    font-weight: 700;
    font-family: "Roboto Slab","Times New Roman",serif;
}

.profile-page .description {
    margin: 1.071rem auto 0;
    max-width: 600px;
    color: #999;
    font-weight: 300;
}

p {
    font-size: 14px;
    margin: 0 0 10px;
}

.profile-page .profile-tabs {
    margin-top: 4.284rem;
}

.nav-pills, .nav-tabs {
    border: 0;
    border-radius: 3px;
    padding: 0 15px;
}

.nav .nav-item {
    position: relative;
    margin: 0 2px;
}

.nav-pills.nav-pills-icons .nav-item .nav-link {
    border-radius: 4px;
}

.nav-pills .nav-item .nav-link.active {
    color: #fff;
    background-color: #9c27b0;
    box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 13px 24px -11px rgba(156,39,176,.6);
}

.nav-pills .nav-item .nav-link {
    line-height: 24px;
    font-size: 20px;
    font-weight: 1000;
    min-width: 100px;
    color: #555;
    transition: all .3s;
    border-radius: 30px;
    padding: 10px 15px;
    text-align: center;
}

.nav-pills .nav-item .nav-link:not(.active):hover {
    background-color: rgba(200,200,200,.2);
}


.nav-pills .nav-item i {
    display: block;
    font-size: 30px;
    padding: 15px 0;
}

.tab-space {
    padding: 20px 0 50px;
}
.button3 {background-color: #f44336;}

.profile-page .gallery {
    margin-top: 3.213rem;
    padding-bottom: 50px;
}

.profile-page .gallery img {
    width: 100%;
    margin-bottom: 2.142rem;
}

.profile-page .profile .name{
    margin-top: -80px;
}

img.rounded {
    border-radius: 6px!important;
}

.tab-content>.active {
    display: block;
}

/*buttons*/
.btn {
    position: relative;
    padding: 12px 30px;
    margin: .3125rem 1px;
    font-size: .75rem;
    font-weight: 400;
    line-height: 1.428571;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0;
    border: 0;
    border-radius: .2rem;
    outline: 0;
    transition: box-shadow .2s cubic-bezier(.4,0,1,1),background-color .2s cubic-bezier(.4,0,.2,1);
    will-change: box-shadow,transform;
}

.btn.btn-just-icon {
    font-size: 20px;
    height: 41px;
    min-width: 41px;
    width: 41px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: 41px;
}

.btn.btn-just-icon fa{
    margin-top: 0;
    position: absolute;
    width: 100%;
    transform: none;
    left: 0;
    top: 0;
    height: 100%;
    line-height: 41px;
    font-size: 20px;
}
.btn.btn-link{
    background-color: transparent;
    color: #999;
}

/* dropdown */




.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    min-width: 11rem !important;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    background-color: #fff;
    background-clip: padding-box;
    border-radius: .25rem;
    transition: transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);
}

.dropdown-menu.show{
    transition: transform .3s cubic-bezier(.4,0,.2,1),opacity .2s cubic-bezier(.4,0,.2,1);
}


.dropdown-menu .dropdown-item:focus, .dropdown-menu .dropdown-item:hover, .dropdown-menu a:active, .dropdown-menu a:focus, .dropdown-menu a:hover {
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(156,39,176,.4);
    background-color: #9c27b0;
    color: #FFF;
}
.show .dropdown-toggle:after {
    transform: rotate(180deg);
}

.dropdown-toggle:after {
    will-change: transform;
    transition: transform .15s linear;
}


.dropdown-menu .dropdown-item, .dropdown-menu li>a {
    position: relative;
    width: auto;
    display: flex;
    flex-flow: nowrap;
    align-items: center;
    color: #333;
    font-weight: 400;
    text-decoration: none;
    font-size: .8125rem;
    border-radius: .125rem;
    margin: 0 .3125rem;
    transition: all .15s linear;
    min-width: 7rem;
    padding: 0.625rem 1.25rem;
    min-height: 1rem !important;
    overflow: hidden;
    line-height: 1.428571;
    text-overflow: ellipsis;
    word-wrap: break-word;
}

.dropdown-menu.dropdown-with-icons .dropdown-item {
    padding: .75rem 1.25rem .75rem .75rem;
}

.dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
    vertical-align: middle;
    font-size: 24px;
    position: relative;
    margin-top: -4px;
    top: 1px;
    margin-right: 12px;
    opacity: .5;
}

/* footer */

footer{
    margin-top: 10px;
    color: #555;
    padding: 25px;
    font-weight: 300;
    
}
.footer p{
    margin-bottom: 0;
    font-size: 14px;
    margin: 0 0 10px;
    font-weight: 300;
}
footer p a{
    color: #555;
    font-weight: 400;
}

footer p a:hover {
    color: #9f26aa;
    text-decoration: none;
}</style>
<script>
var big_image;

$(document).ready(function() {
  BrowserDetect.init();

  // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
  $('body').bootstrapMaterialDesign();

  window_width = $(window).width();

  $navbar = $('.navbar[color-on-scroll]');
  scroll_distance = $navbar.attr('color-on-scroll') || 500;

  $navbar_collapse = $('.navbar').find('.navbar-collapse');

  //  Activate the Tooltips
  $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

  // Activate Popovers
  $('[data-toggle="popover"]').popover();

  if ($('.navbar-color-on-scroll').length != 0) {
    $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
  }

  materialKit.checkScrollForTransparentNavbar();

  if (window_width >= 768) {
    big_image = $('.page-header[data-parallax="true"]');
    if (big_image.length != 0) {
      $(window).on('scroll', materialKit.checkScrollForParallax);
    }

  }


});

$(document).on('click', '.navbar-toggler', function() {
  $toggle = $(this);

  if (materialKit.misc.navbar_menu_visible == 1) {
    $('html').removeClass('nav-open');
    materialKit.misc.navbar_menu_visible = 0;
    $('#bodyClick').remove();
    setTimeout(function() {
      $toggle.removeClass('toggled');
    }, 550);

    $('html').removeClass('nav-open-absolute');
  } else {
    setTimeout(function() {
      $toggle.addClass('toggled');
    }, 580);


    div = '<div id="bodyClick"></div>';
    $(div).appendTo("body").click(function() {
      $('html').removeClass('nav-open');

      if ($('nav').hasClass('navbar-absolute')) {
        $('html').removeClass('nav-open-absolute');
      }
      materialKit.misc.navbar_menu_visible = 0;
      $('#bodyClick').remove();
      setTimeout(function() {
        $toggle.removeClass('toggled');
      }, 550);
    });

    if ($('nav').hasClass('navbar-absolute')) {
      $('html').addClass('nav-open-absolute');
    }

    $('html').addClass('nav-open');
    materialKit.misc.navbar_menu_visible = 1;
  }
});

materialKit = {
  misc: {
    navbar_menu_visible: 0,
    window_width: 0,
    transparent: true,
    fixedTop: false,
    navbar_initialized: false,
    isWindow: document.documentMode || /Edge/.test(navigator.userAgent)
  },

  initFormExtendedDatetimepickers: function() {
    $('.datetimepicker').datetimepicker({
      icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
      }
    });
  },

  initSliders: function() {
    // Sliders for demo purpose
    var slider = document.getElementById('sliderRegular');

    noUiSlider.create(slider, {
      start: 40,
      connect: [true, false],
      range: {
        min: 0,
        max: 100
      }
    });

    var slider2 = document.getElementById('sliderDouble');

    noUiSlider.create(slider2, {
      start: [20, 60],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    });
  },

  checkScrollForParallax: function() {
    oVal = ($(window).scrollTop() / 3);
    big_image.css({
      'transform': 'translate3d(0,' + oVal + 'px,0)',
      '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
    });
  },

  checkScrollForTransparentNavbar: debounce(function() {
    if ($(document).scrollTop() > scroll_distance) {
      if (materialKit.misc.transparent) {
        materialKit.misc.transparent = false;
        $('.navbar-color-on-scroll').removeClass('navbar-transparent');
      }
    } else {
      if (!materialKit.misc.transparent) {
        materialKit.misc.transparent = true;
        $('.navbar-color-on-scroll').addClass('navbar-transparent');
      }
    }
  }, 17)
};

// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    }, wait);
    if (immediate && !timeout) func.apply(context, args);
  };
};

var BrowserDetect = {
  init: function() {
    this.browser = this.searchString(this.dataBrowser) || "Other";
    this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
  },
  searchString: function(data) {
    for (var i = 0; i < data.length; i++) {
      var dataString = data[i].string;
      this.versionSearchString = data[i].subString;

      if (dataString.indexOf(data[i].subString) !== -1) {
        return data[i].identity;
      }
    }
  },
  searchVersion: function(dataString) {
    var index = dataString.indexOf(this.versionSearchString);
    if (index === -1) {
      return;
    }

    var rv = dataString.indexOf("rv:");
    if (this.versionSearchString === "Trident" && rv !== -1) {
      return parseFloat(dataString.substring(rv + 3));
    } else {
      return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
    }
  },

  dataBrowser: [{
      string: navigator.userAgent,
      subString: "Chrome",
      identity: "Chrome"
    },
    {
      string: navigator.userAgent,
      subString: "MSIE",
      identity: "Explorer"
    },
    {
      string: navigator.userAgent,
      subString: "Trident",
      identity: "Explorer"
    },
    {
      string: navigator.userAgent,
      subString: "Firefox",
      identity: "Firefox"
    },
    {
      string: navigator.userAgent,
      subString: "Safari",
      identity: "Safari"
    },
    {
      string: navigator.userAgent,
      subString: "Opera",
      identity: "Opera"
    }
  ]

};</script>
</head>

<body class="profile-page">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  color-on-scroll="100"  id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" target="_blank" >SERVICE PRO </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
      					<a class="nav-link" href="index.php" target="_blank">
      						PROFILE
      					</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="req.php" target="_blank">
      						REQUEST
      					</a>
      				</li>
<!--*************************************************************-->
      				<li class="nav-item">
      					<a class="nav-link" href="calendar.php" target="_blank">
      						CALENDAR
      					</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link"  href="feedb.php" target="_blank">
      						 FEEDBACK
      					</a>
      				</li>
              <li class="nav-item">
              <button class="button button3"> <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal">PAY</a> </button>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
                          <?php
                          $t_id=$_SESSION['rid']; 
                          echo $t_id;
                          exit();
                          $sqlselect = "SELECT pro_pic FROM profile WHERE t_id=$t_id ";
                          $result = mysqli_query($conn, $sqlselect);
                         $num_rows = mysqli_num_rows($result);
                          if($num_rows==0)
                            {
                               $path="1.jpg";
                                  
                            }
                            else
                            {
                              $row=mysqli_fetch_assoc($result);
                              $path=$row['pro_pic'];
                            }
                          ?>
	                            <img src="../images/<?php echo $path ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
	                        <div class="name">
                          <?php
                          $t_id=$_SESSION['rid']; 
                          $sqlselect = "SELECT * FROM tech_login WHERE t_id=$t_id ";
                          $result = mysqli_query($conn, $sqlselect);

                          if(!empty($result))
                            {
                                  $row=mysqli_fetch_assoc($result);
                                  $name=$row['t_name'];
                                  $prof=$row['t_fld'];
                            }
                          ?>
	                            <h3 class="title"><?php echo $name; ?></h3>
                              <form method="POST" action="" enctype="multipart/form-data">
                                  <input type="file" name="uploadfile" value=""/>
                                  
                                  <div>
                                      <button type="submit" name="upload">UPLOAD</button>
                                    </div>
                              </form>							
                           	<h4><?php echo $prof; ?></h4>

	                        </div>
	                    </div>
    	            </div>
                </div>
                <div class="description text-center">
                <?php


                    $t_id=$_SESSION['t_id'];
                    $sqlinert="SELECT descri FROM profile where t_id='".$t_id."'";
                    $result = mysqli_query($conn, $sqlinert);
                    $num_rows = mysqli_num_rows($result);
                          if($num_rows==0)
                            {
                               $name="NO BIO";
                                  
                            }
                            else
                            {
                              $row =mysqli_fetch_assoc($result);
                                $name=$row['descri'];
                              
                            }
                          ?>
                    <p><?php echo $name;?> </p>
                </div>
                <div class="description text-center">
                <button style="background-color: #4CAF50;" onClick="myFunction()">EDIT Bio</button>
                <div class="col-sm-4 col-xs-12  offset-sm-4" style="margin-top:20px;">
                    
                <?php 
                        unset($_POST['photo']);
                      
                      ?>
                     <center>
                      <form action="" method="post"  enctype="multipart/form-data">
                          <input type="file"  name="photo" style="margin-bottom:20px;">
                          <input type="submit" name="btn_upload" value="upload">
                      </form>
                      </center>
                 </div>
                <script>
                       function myFunction() {
                     window.location.href="bio.php";  
                        }     
                        </script>
                </div>
			
        

                <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    SERVICE PRO
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="loginf_module">
                        <div class="module form-module">
                                <div class="toggle">
                                    <i class="fa fa-times fa-pencil"></i>
                                    <div class="tooltip">QR</div>
                                </div>
                                <div class="form">
                                    <h3>UPLOAD QR CODE</h3>
                                    <form action="#" method="post">
                                      <input type="file" name='name' style="margin-bottom:20px">
                                      <input type="button" value="Upload" name="qr_upload">
                                    </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
  				<div class="row">
          <?php 
           $t_id2=$_SESSION['t_id'];
           $sqlgallery="SELECT * FROM tbl_gallery where p_id='".$t_id."'";
           $result = mysqli_query($conn, $sqlgallery);
           $num_rows = mysqli_num_rows($result);
           $results2 = mysqli_fetch_assoc($result);
           while($row = mysqli_fetch_array($result)) 
           {
           ?>
  					<div class="col-md-2">
  					    <img src="images/gallery/<?php echo $row['photo'];?>" class="rounded">
  					</div>
          <?php } ?>
  				
        
            </div>
        </div>
	</div>
	
	<footer class="footer text-center ">
  <p>© 2021 Service Pro. All Rights Reserved </p>    </footer>
  
  <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
 -->
 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>