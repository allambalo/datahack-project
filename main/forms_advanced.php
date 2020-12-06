<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/eduadmin-template/main/forms_advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Dec 2020 10:27:13 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/eduadmin-template/images/favicon.ico">

    <title>EduAdmin - Dashboard  Advanced form elements </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>
<body class="hold-transition light-skin sidebar-mini theme-primary">
	
<div class="wrapper">
	<div id="loader"></div>

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>	
		<!-- Logo -->
		<a href="index-2.html" class="logo">
		  <!-- logo-->
		  <div class="logo-lg">
			  <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item d-md-none">
				<a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
					<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
					<i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
					<i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group nav-item d-none d-xl-inline-block">
				<a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
					<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
			    </a>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>	  
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
				<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
              </li>
            </ul>
          </li>	
		  
          <!-- Control Sidebar Toggle Button -->
          <li>
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
			  	<i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
			  </a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
<? require "sidebar.php";?>
  
  <!-- Content Wrapper. Contains page content --> <div
class="content-wrapper"> <div class="container-full"> <!-- Content Header
(Page header) --> <div class="content-header"> <div class="d-flex
align-items-center"> <div class="mr-auto"> <h3 class="page-title">Материалы
курса</h3> <div class="d-inline-block align-items-center"> <nav> <ol
class="breadcrumb"> <li class="breadcrumb-item"><a href="#"><i class="mdi
mdi-home-outline"></i></a></li> <li class="breadcrumb-item"
aria-current="page">Добавить</li> <li class="breadcrumb-item active"
aria-current="page">Материалы курса</li> </ol> </nav> </div> </div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">

			<div class="col-12">
			  <div class="box">
				  
				<div class="box-header">
					<h4 class="box-title">Type options</h4>  
				</div>
				<div class="box-body">
					<div class="form-group row">
						<label class="col-form-label col-md-2">Дата урока</label>
						<div class="col-md-10">
							<input class="form-control" type="datetime-local" name="datetime">
							<span class="form-text text-muted">Using <code>input type="datetime-local"</code> <code> type="datetime-local" is not supported in Firefox, Safari or Internet Explorer 12 (or earlier).</code></span>
						</div>
					</div>

				<!-- 	<div class="form-group row">
						<label class="col-form-label col-md-2">Date</label>
						<div class="col-md-10">
							<input class="form-control" type="date" name="date">
							<span class="form-text text-muted">Using <code>input type="date"</code></span>
						</div>
					</div> -->
<!-- 
					<div class="form-group row">
						<label class="col-form-label col-md-2">Month</label>
						<div class="col-md-10">
							<input class="form-control" type="month" name="month">
							<span class="form-text text-muted">Using <code>input type="month"</code></span>
						</div>
					</div> -->

					<!-- <div class="form-group row">
						<label class="col-form-label col-md-2">Time</label>
						<div class="col-md-10">
							<input class="form-control" type="time" name="time">
							<span class="form-text text-muted">Using <code>input type="time"</code></span>
						</div>
					</div> -->

					<!-- <div class="form-group row">
						<label class="col-form-label col-md-2">Week</label>
						<div class="col-md-10">
							<input class="form-control" type="week" name="week">
							<span class="form-text text-muted">Using <code>input type="week"</code></span>
						</div>
					</div> -->

					<!-- <div class="form-group row">
						<label class="col-form-label col-md-2">Number</label>
						<div class="col-md-10">
							<input class="form-control" type="number" name="number">
							<span class="form-text text-muted">Using <code>input type="number"</code></span>
						</div>
					</div> -->

					<div class="form-group row">
						<label class="col-form-label col-md-2">Комментарии</label>
						<div class="col-md-10">
							<input class="form-control" type="email" name="email">
							<span class="form-text text-muted">Using <code>input type="text"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Cсылки</label>
						<div class="col-md-10">
							<input class="form-control" type="url" name="url">
							<span class="form-text text-muted">Using <code>input type="url"</code></span>
						</div>
					</div>

					<!-- <div class="form-group row">
						<label class="col-form-label col-md-2">Search</label>
						<div class="col-md-10">
							<input class="form-control" type="search" name="search">
							<span class="form-text text-muted">Using <code>input type="search"</code></span>
						</div>
					</div> -->

					<!-- <div class="form-group row">
						<label class="col-form-label col-md-2">Tel</label>
						<div class="col-md-10">
							<input class="form-control" type="tel" name="tel">
							<span class="form-text text-muted">Using <code>input type="tel"</code></span>
						</div>
					</div>
 -->
					<!-- <div class="form-group row">
						<label class="col-form-label col-md-2">Цвет</label>
						<div class="col-md-10">
							<input class="form-control" type="color" name="color">
							<span class="form-text text-muted">Using <code>input type="color"</code></span>
						</div>
					</div>	 -->			
				</div>
				<!-- /.box-body -->
				  
				<div class="box-header">
					<h4 class="box-title">Загрузить файл</h4>  
				</div>
				 <div class="box-body">
					<!--<div class="form-group row">
						<label class="col-form-label col-lg-2">Загрузить</label>
						<div class="col-lg-10">
							<input type="file" class="form-control">
						</div>
					</div> -->

					<div class="form-group row">
						<label class="col-form-label col-lg-2">Загрузить</label>
						<div class="col-lg-10">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile">
								<label class="custom-file-label" for="customFile">Выбирите файл</label>
							</div>
						</div>
					</div>  
				</div>
				<!-- /.box-body -->
				<!-- <div class="box-header with-border">
				  <h4 class="box-title">Input masks</h4>
				</div>
				<div class="box-body"> -->
				  <!-- Date dd/mm/yyyy -->
				 <!--  <div class="form-group">
					<label>Date masks:</label>
					<div class="row">
						<div class="col-6">
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
							</div> -->
							<!-- /.input group -->
						<!-- </div>
						<div class="col-6"> -->
						  <!-- Date mm/dd/yyyy -->
							<!-- <div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
							</div> -->
							<!-- /.input group -->
				<!-- 		</div>
					</div>
				  </div> -->
				  <!-- /.form group -->

				  <!-- phone mask -->
				 <!--  <div class="form-group">
					<label>US phone mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-phone"></i>
					  </div>
					  <input type="text" class="form-control" data-inputmask="'mask':[ '(999) 999-9999']" data-mask>
					</div> -->
					<!-- /.input group -->
				 <!--  </div> -->
				  <!-- /.form group -->

				  <!-- phone mask -->
				<!--   <div class="form-group">
					<label>Intl US phone mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-phone"></i>
					  </div>
					  <input type="text" class="form-control"
							 data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
					</div> -->
					<!-- /.input group -->
				 <!--  </div> -->
				  <!-- /.form group -->

				  <!-- IP mask -->
				 <!--  <div class="form-group">
					<label>IP mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-laptop"></i>
					  </div>
					  <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
					</div> -->
					<!-- /.input group -->
				<!--   </div> -->
				  <!-- /.form group -->
<!-- 
				</div> -->
				<!-- /.box-body -->					  
				<!-- <div class="box-header with-border">
				  <h4 class="box-title">Color & Time Picker</h4>
				</div>				  
				<div class="box-body"> -->
				  <!-- Color Picker -->
				 <!--  <div class="form-group">
					<label>Color picker:</label>
					<input type="text" class="form-control my-colorpicker1">
				  </div> -->
				  <!-- /.form group -->

				  <!-- Color Picker -->
				<!--   <div class="form-group">
					<label>Color picker with addon:</label>

					<div class="input-group my-colorpicker2">
					  <input type="text" class="form-control">

					  <div class="input-group-addon">
						<i class="ion ion-paintbucket"></i>
					  </div>
					</div> -->
					<!-- /.input group -->
				 <!--  </div> -->
				  <!-- /.form group -->

				  <!-- time Picker -->
				  <!-- <div class="bootstrap-timepicker">
					<div class="form-group">
					  <label>Time picker:</label>

					  <div class="input-group">
						<input type="text" class="form-control timepicker">

						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div> -->
					  <!-- /.input group -->
					<!-- </div> -->
					<!-- /.form group -->
					<!-- <div class="form-group">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
						<input type="text" class="form-control timepicker">
					  </div> -->
					  <!-- /.input group -->
<!-- 					</div> -->
					<!-- /.form group -->
				 <!--  </div> -->
				<!-- </div> -->
				<!-- /.box-body -->
				<!-- <div class="box-header with-border">
				  <h4 class="box-title">Date picker</h4>
				</div>
				<div class="box-body"> -->
				  <!-- Date -->
				  <!-- <div class="form-group">
					<label>Date:</label>

					<div class="input-group date">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="datepicker">
					</div> -->
					<!-- /.input group -->
				 <!--  </div> -->
				  <!-- /.form group -->

				  <!-- Date range -->
				 <!--  <div class="form-group">
					<label>Date range:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="reservation">
					</div> -->
					<!-- /.input group -->
				  <!-- </div> -->
				  <!-- /.form group -->

				  <!-- Date and time range -->
				 <!--  <div class="form-group">
					<label>Date and time range:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-clock-o"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="reservationtime">
					</div> -->
					<!-- /.input group -->
				 <!--  </div> -->
				  <!-- /.form group -->

				  <!-- Date and time range -->
				 <!--  <div class="form-group">
					<label>Date range button:</label>

					<div class="input-group">
					  <button type="button" class="btn btn-default pull-right btn-rounded" id="daterange-btn">
						<span>
						  <i class="fa fa-calendar"></i> Date range picker
						</span>
						<i class="fa fa-caret-down"></i>
					  </button>
					</div>
				  </div> -->
				  <!-- /.form group -->

				<!-- </div> -->
				<!-- /.box-body -->
				<!-- <div class="box-header with-border">
				  <h4 class="box-title">Select Elements</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					</ul>
				</div>
				<div class="box-body pb-0">
				  <div class="row">
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label>Minimal</label>
						<select class="form-control select2" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div> -->
					  <!-- /.form-group -->
					<!-- </div> -->
					<!-- /.col -->
					<!-- <div class="col-md-3 col-12">
					  <div class="form-group">
						<label>Disabled</label>
						<select class="form-control select2" disabled="disabled" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div> -->
					  <!-- /.form-group -->
					<!-- </div> -->
					<!-- /.col -->
					<!-- <div class="col-md-3 col-12">
					  <div class="form-group">
						<label>Multiple</label>
						<select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
								style="width: 100%;">
						  <option>Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div> -->
					  <!-- /.form-group -->
					<!-- </div> -->
					<!-- /.col -->
					<!-- <div class="col-md-3 col-12">
					  <div class="form-group">
						<label>Disabled Result</label>
						<select class="form-control select2" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option disabled="disabled">California (disabled)</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div> -->
					  <!-- /.form-group -->
					<!-- </div> -->
					<!-- /.col -->
				 <!--  </div> -->
				  <!-- /.row -->
				<!-- </div> -->
				<!-- /.box-body -->
				 <!--  <div class="box-header with-border">
					<h4 class="box-title">Bootstrap Select boxes</h4>
				  </div>
				  <div class="box-body">
					  <div class="row">
						<div class="col-md-4">
							<h5 class="my-10">Select box</h5>
							<select class="selectpicker">
								<option>Lorem</option>
								<option>Ipsum</option>
								<option>Dummy</option>
							</select>
						</div>
						<div class="col-md-4">
							<h5 class="my-10">Select boxes with Option groups</h5>
							<select class="selectpicker">
								<optgroup label="">
									<option>Lorem</option>
									<option>Ipsum</option>
									<option>Dummy</option>
								</optgroup>
								<optgroup label="">
									<option>Lorem</option>
									<option>Ipsum</option>
									<option>Dummy</option>
								</optgroup>
							</select>
						</div>
						<div class="col-md-4">
							<h5 class="my-10">Multiple select boxes</h5>
							<select class="selectpicker" multiple>
								<option>Lorem</option>
								<option>Ipsum</option>
								<option>Dummy</option>
							</select>
						</div>
					</div>
					<h5 class="my-10">With colored Button Classes</h5>
						<div class="row">
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-primary">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-info btn-outline-info">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-warning ">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-danger">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20 mr-10" data-style="btn-success">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker mb-20" data-style="btn-default">
									<option data-tokens="Lorem">Sed posuere metus vel maximus fringilla.</option>
									<option data-tokens="ipsum">Nam in nisl a ligula semper euismod.</option>
									<option data-tokens="dolor">Ut rhoncus diam et elit tristique venenatis.</option>
								</select>
							</div>
						</div>
				  </div> -->
				<!-- /.box-body -->
				
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
	<script src="../assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
	<script src="../assets/vendor_components/select2/dist/js/select2.full.js"></script>
	<script src="../assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<script src="../assets/vendor_plugins/iCheck/icheck.min.js"></script>
	
	<!-- EduAdmin App -->
	<script src="js/template.js"></script>
	
	<script src="js/pages/advanced-form-element.js"></script>
	


</body>

<!-- Mirrored from www.multipurposethemes.com/admin/eduadmin-template/main/forms_advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Dec 2020 10:27:18 GMT -->
</html>
