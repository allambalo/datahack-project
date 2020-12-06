<?
	require_once 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/eduadmin-template/images/favicon.ico">

    <title>MEducation</title>
    
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
<? require "logo.php"; ?>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
<? require "app-menu.php"; ?>	
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
  
  
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="box pull-up">
						<div class="box-body bg-img" style="background-image: url(../images/bg-5.png);" data-overlay-light="9">
							<div class="d-lg-flex align-items-center justify-content-between">
								<div class="d-md-flex align-items-center mb-30 mb-lg-0 w-p100">
									<img src="https://www.multipurposethemes.com/admin/eduadmin-template/images/svg-icon/color-svg/custom-14.svg" class="img-fluid max-w-150" alt="" />
									<div class="ml-30">
										<h4 class="mb-10">Привет, "name" у вас сейчас урок Английского!</h4>
										<p class="mb-0 text-fade">Преподователь:Арифова Д.А  </p>
									</div>
								</div>
								<div>
									<button type="button" class="waves-effect waves-light btn-block btn btn-primary" style="white-space: nowrap;">Зайти</button>
								</div>
							</div>							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<a href="#" class="box bg-danger bg-hover-danger pull-up">
						<div class="box-body">
							<div class="d-flex align-items-center">
								<div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center">
									<span class="text-white icon-Cart2 font-size-40"><span class="path1"></span><span class="path2"></span></span>
								</div>
								<div class="ml-10">
									<h4 class="text-white mb-0">Заметка создана 12.10</h4>
									<h5 class="text-white-50 mb-0">Сдать что то</h5>
								</div>
							</div>							
						</div>
					</a>
				</div>
				<!-- <div class="col-12">														
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Cours Classes</h4>	
							<ul class="box-controls pull-right d-md-flex d-none">
							  <li>
								<button class="btn btn-primary-light px-10">View All</button>
							  </li>
							</ul>
						</div>
					</div>
				</div> -->
		<!-- 		<div class="col-lg-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body d-flex align-items-center">
							<img src="../images/front-end-img/courses/cor-logo-6.png" alt="" class="align-self-end h-80 w-80">
							<div class="d-flex flex-column flex-grow-1">
								<h5 class="box-title font-size-16 mb-2">Angular Class</h5>
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body d-flex align-items-center">
							<img src="../images/front-end-img/courses/cor-logo-5.png" alt="" class="align-self-end h-80 w-80">
							<div class="d-flex flex-column flex-grow-1">
								<h5 class="box-title font-size-16 mb-2">Android  Class</h5>
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body d-flex align-items-center">
							<img src="../images/front-end-img/courses/cor-logo-4.png" alt="" class="align-self-end h-80 w-80">
							<div class="d-flex flex-column flex-grow-1">
								<h5 class="box-title font-size-16 mb-2">Python Class</h5>
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="box pull-up">
						<div class="box-body d-flex align-items-center">
							<img src="../images/front-end-img/courses/cor-logo-3.png" alt="" class="align-self-end h-80 w-80">
							<div class="d-flex flex-column flex-grow-1">
								<h5 class="box-title font-size-16 mb-2">laravel </h5>
								<a href="#">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="row fx-element-overlay">
				<div class="col-12">														
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Мои курсы</h4>	
							<ul class="box-controls pull-right d-md-flex d-none">
							  <li>
								<button class="btn btn-primary-light px-10">Показать все</button>
							  </li>
							<!--   <li class="dropdown"> -->
								<!-- <button class="dropdown-toggle btn btn-primary-light px-10" data-toggle="dropdown" href="#" aria-expanded="false">Most Popular</button> -->										  
								<!-- <div class="dropdown-menu dropdown-menu-right" style="">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>-->
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="box">
						<div class="fx-card-item">
							<div class="fx-card-avatar fx-overlay-1"> <img src="../images/front-end-img/courses/4.jpg" alt="user" class="bbrr-0 bblr-0">
								<div class="fx-overlay">
									<ul class="fx-info">
										<li><a class="btn btn-danger no-border" href="javascript:void(0);">Перейти</a></li>
									</ul>
								</div>
							</div>
							<div class="fx-card-content">
								<h4 class="box-title mb-0">Менеджмент</h4>
							</div>
						</div>
					</div>
				</div>		
				<div class="col-lg-3 col-md-6 col-12">
					<div class="box">
						<div class="fx-card-item">
							<div class="fx-card-avatar fx-overlay-1"> <img src="../images/front-end-img/courses/9.jpg" alt="user" class="bbrr-0 bblr-0">
								<div class="fx-overlay">
									<ul class="fx-info">
										<li><a class="btn btn-danger no-border" href="javascript:void(0);">Перейти</a></li>
									</ul>
								</div>
							</div>
							<div class="fx-card-content">
								<h4 class="box-title mb-0">Социология</h4>
							</div>
						</div>
					</div>
				</div>		
				<div class="col-lg-3 col-md-6 col-12">
					<div class="box">
						<div class="fx-card-item">
							<div class="fx-card-avatar fx-overlay-1"> <img src="../images/front-end-img/courses/8.jpg" alt="user" class="bbrr-0 bblr-0">
								<div class="fx-overlay">
									<ul class="fx-info">
										<li><a class="btn btn-danger no-border" href="javascript:void(0);">Перейти</a></li>
									</ul>
								</div>
							</div>
							<div class="fx-card-content">
								<h4 class="box-title mb-0">ООП</h4>
							</div>
						</div>
					</div>
				</div>		
				<div class="col-lg-3 col-md-6 col-12">
					<div class="box">
						<div class="fx-card-item">
							<div class="fx-card-avatar fx-overlay-1"> <img src="../images/front-end-img/courses/2.jpg" alt="user" class="bbrr-0 bblr-0">
								<div class="fx-overlay">
									<ul class="fx-info">
										<li><a class="btn btn-danger no-border" href="javascript:void(0);">Перейти</a></li>
									</ul>
								</div>
							</div>
							<div class="fx-card-content">
								<h4 class="box-title mb-0">Английский</h4>
							</div>
						</div>	
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col-12">														
					<div class="box no-shadow mb-0 bg-transparent">
						<div class="box-header no-border px-0">
							<h4 class="box-title">Ваш прогресс</h4>	
							<ul class="box-controls pull-right d-md-flex d-none">
							  <li>
								<button class="btn btn-primary-light px-10">Все</button>
							  </li>
							  <li class="dropdown">
								<button class="dropdown-toggle btn btn-primary-light px-10" data-toggle="dropdown" href="#" aria-expanded="false">Выбрать дату</button>										  
								<div class="dropdown-menu dropdown-menu-right" style="">
								  <a class="dropdown-item active" href="#">Сегодня</a>
								  <a class="dropdown-item" href="#">Вчера</a>
								  <a class="dropdown-item" href="#">Прошлая неделья</a>
								  <a class="dropdown-item" href="#">Прошлый месяц</a>
								</div>
							  </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-xl-8 col-12">
							<div class="row">						
								<div class="col-xl-5 col-lg-6 col-12">
									<div class="box">
										<div class="box-header">
											<h4 class="box-title">Прогресс</h4>
											<ul class="box-controls pull-right d-md-flex d-none">
											  <li>
												<button class="btn btn-primary-light px-10">Все</button>
											  </li>
											</ul>
										</div>
										<div class="box-body">
											<div class="mb-25">
												<div class="d-flex align-items-center justify-content-between">
													<div class="w-p85">
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
															</div>
														</div>
													</div>
													<div>
														<div>40%</div>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<p class="mb-0 text-primary">Анлийский</p>
													<p class="text-fade mb-0">117 студентов</p>
												</div>
											</div>
											<div class="mb-25">
												<div class="d-flex align-items-center justify-content-between">
													<div class="w-p85">
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
															</div>
														</div>
													</div>
													<div>
														<div>20%</div>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<p class="mb-0 text-primary">Курс</p>
													<p class="text-fade mb-0">74 студентов</p>
												</div>
											</div>
											<div class="mb-25">
												<div class="d-flex align-items-center justify-content-between">
													<div class="w-p85">
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
															</div>
														</div>
													</div>
													<div>
														<div>18%</div>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<p class="mb-0 text-primary">Курс</p>
													<p class="text-fade mb-0">58 студентов</p>
												</div>
											</div>
											<div class="mb-25">
												<div class="d-flex align-items-center justify-content-between">
													<div class="w-p85">
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
															</div>
														</div>
													</div>
													<div>
														<div>07%</div>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<p class="mb-0 text-primary">Курс</p>
													<p class="text-fade mb-0">11 студентов</p>
												</div>
											</div>
											<div class="mb-25">
												<div class="d-flex align-items-center justify-content-between">
													<div class="w-p85">
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
															</div>
														</div>
													</div>
													<div>
														<div>40%</div>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<p class="mb-0 text-primary">Курс</p>
													<p class="text-fade mb-0">117 студентов</p>
												</div>
											</div>
											<div class="mb-5">
												<div class="d-flex align-items-center justify-content-between">
													<div class="w-p85">
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
															</div>
														</div>
													</div>
													<div>
														<div>20%</div>
													</div>
												</div>
												<div class="d-flex align-items-center justify-content-between">
													<p class="mb-0 text-primary">Курс</p>
													<p class="text-fade mb-0">74 студентов</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-7 col-lg-6 col-12">
									<div class="box bg-transparent no-shadow mb-30">
										<div class="box-header no-border pb-0">
											<h4 class="box-title">Расписание на сегодня</h4>
											<ul class="box-controls pull-right d-md-flex d-none">
											  <li>
												<button class="btn btn-primary-light px-10">Все</button>
											  </li>
											</ul>
										</div>
									</div>
									<div class="box mb-15 pull-up">
										<div class="box-body">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<div class="mr-15 bg-warning h-50 w-50 l-h-60 rounded text-center">
														<span class="icon-Book-open font-size-24"><span class="path1"></span><span class="path2"></span></span>
													</div>
													<div class="d-flex flex-column font-weight-500">
														<a href="#" class="text-dark hover-primary mb-1 font-size-16">Информатика</a>
														<span class="text-fade">Мр. Doe</span>
													</div>
												</div>
												<a href="#">
													<span class="icon-Arrow-right font-size-24"><span class="path1"></span><span class="path2"></span></span>
												</a>
											</div>
										</div>
									</div>
									<div class="box mb-15 pull-up">
										<div class="box-body">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<div class="mr-15 bg-primary h-50 w-50 l-h-60 rounded text-center">
														<span class="icon-Mail font-size-24"></span>
													</div>
													<div class="d-flex flex-column font-weight-500">
														<a href="#" class="text-dark hover-primary mb-1 font-size-16">Черчение</a>
														<span class="text-fade">асс.Петров А.В</span>
													</div>
												</div>
												<a href="#">
													<span class="icon-Arrow-right font-size-24"><span class="path1"></span><span class="path2"></span></span>
												</a>
											</div>
										</div>
									</div>
									<div class="box mb-15 pull-up">
										<div class="box-body">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<div class="mr-15 bg-danger h-50 w-50 l-h-60 rounded text-center">
														<span class="icon-Book-open font-size-24"><span class="path1"></span><span class="path2"></span></span>
													</div>
													<div class="d-flex flex-column font-weight-500">
														<a href="#" class="text-dark hover-primary mb-1 font-size-16">Исскуство</a>
														<span class="text-fade">Пр. Смирнов </span>
													</div>
												</div>
												<a href="#">
													<span class="icon-Arrow-right font-size-24"><span class="path1"></span><span class="path2"></span></span>
												</a>
											</div>
										</div>
									</div>
									<div class="box mb-15 pull-up">
										<div class="box-body">
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center">
													<div class="mr-15 bg-info h-50 w-50 l-h-60 rounded text-center">
														<span class="icon-Mail font-size-24"></span>
													</div>
													<div class="d-flex flex-column font-weight-500">
														<a href="#" class="text-dark hover-info mb-1 font-size-16">Английский</a>
														<span class="text-fade">Арифова Д.А</span>
													</div>
												</div>
												<a href="#">
													<span class="icon-Arrow-right font-size-24"><span class="path1"></span><span class="path2"></span></span>
												</a>
											</div>
										</div>
									</div>
								</div>								
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="box">
								<div class="box-body">							
									<div id="calendar" class="dask evt-cal min-h-400"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
 <!--    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">ЧАВО</a>
		  </li> -->
		 <!--  <li class="nav-item">
			<a class="nav-link" href="#">Purchase Now</a>
		  </li>
		</ul>
    </div> -->
	  &copy; 2020 <a href="https://www.multipurposethemes.com/">Majestic Education</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	<div class="sticky-toolbar">	    
	    <a href="#" data-toggle="tooltip" data-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-toggle="tooltip" data-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-toggle="tooltip" data-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	<!-- Sidebar -->
		
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat font-size-30"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-toggle="dropdown">
                      <span class="icon-Add-user font-size-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Color mr-15"></span>
                        New Group</a>
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Clipboard mr-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Group mr-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Active-call mr-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Settings1 mr-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Question-circle mr-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item font-size-16" href="#">
                        <span class="icon-Notifications mr-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark font-size-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted font-size-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close font-size-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
                                <p class="text-muted font-size-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">You</a>
                                <p class="text-muted font-size-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary font-weight-bold">Mayra Sibley</a>
                                <p class="text-muted font-size-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send font-size-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>	
	
	<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../assets/vendor_components/fullcalendar/fullcalendar.js"></script>
	
	<!-- EduAdmin App -->
	<script src="js/template.js"></script>
	<script src="js/pages/calendar.js"></script>
	
</body>

</html>
