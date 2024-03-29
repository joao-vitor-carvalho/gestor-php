
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Dashboard - JP Stats</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
	<!-- Apexcharts  CSS -->
	<link rel="stylesheet" href="assets/modules/apexcharts/apexcharts.css">
</head>
<body>
  
  <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="fa fa-bars"></i>
		</button>
	</div>
		<div class="menu">
			<ul>
				<li class="nav-item dropdown dropdown-list-toggle">
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					   <i class="fa fa-bell size-icon-1"></i><span class="badge bg-danger notif">4</span>
					</a> 				 
					<div class="dropdown-menu dropdown-list">
						<div class="dropdown-header">Notificações</div>
						<!-- texto para as notificações, trabalhar com js e api -->
						<div class="dropdown-list-content dropdown-list-icons">
							<div class="custome-list-notif"> 
							<a href="#" class="dropdown-item dropdown-item-unread">
								<div class="dropdown-item-icon bg-primary text-white">
								  <i class="fas fa-code"></i>
								</div>
								<div class="dropdown-item-desc">
									The Atrana template has the latest update!
								  <div class="time text-primary">3 Min Ago</div>
								</div>
							  </a>

							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-info text-white">
								  <i class="far fa-user"></i>
								</div>
								<div class="dropdown-item-desc">
								   Sri asks you for friendship!
								  <div class="time">12 Hours Ago</div>
								</div>
							  </a>

							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-danger text-white">
								  <i class="fas fa-check"></i>
								</div>
								<div class="dropdown-item-desc">
									Storage has been cleared, now you can get back to work!
								  <div class="time">20 Hours Ago</div>
								</div>
							  </a>

						  
							  <a href="#" class="dropdown-item">
								<div class="dropdown-item-icon bg-info text-white">
								  <i class="fas fa-bell"></i>
								</div>
								<div class="dropdown-item-desc">
								    Welcome to Atrana Template, I hope you enjoy using this template!
								  <div class="time">Yesterday</div>
								</div>
							  </a>
 
							</div>
						</div>

						<div class="dropdown-footer text-center">
						  <a href="#">View All</a>
						</div>

					  
				  </li>
			 
				  <li class="nav-item dropdown">
					<a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					  <img src="assets/images/avatar/avatar-1.png" alt="">
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>Meu Perfil</span></a>
						<a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i> <span>Configurações</span></a>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="index.php"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>Sair</span></a>
					</ul>
				  </li>
			</ul>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
        <div class="sidebar-content"> 
        	<div id="sidebar">
			
			<!-- Logo -->
			<div class="logo">
					<h2 class="mb-0"><img src="assets/images/logo.png"> JP Stats </h2>
			</div>

            <ul class="side-menu">
                <li>
					<a href="home.html" class="active">
						<i class='bx bxs-dashboard icon' ></i> Dashboard
					</a>
				</li>

				<!-- Divider-->
                <li class="divider" data-text="STARTER"> Opções </li>

                <li>
                    <a href="#">
						<i class='bx bx-columns icon' ></i> 
						Visão Geral  
						<i class='bx bx-chevron-right icon-right' ></i>
					</a>
                    <ul class="side-dropdown">
                        <li><a href="users.php">Usuários</a></li>
                        <li><a href="groups.html">Grupos</a></li>
                    </ul>
                </li>

                <li>
					<a href="resources.php">
						<i class='bx bxs-meh-blank icon'></i> 
						Recursos Gerais
					</a>
				</li>

				<!-- Divider-->
                <li class="divider" data-text="Atrana">Detalhamento</li>

				<li>
                    <a href="#">
						<i class='bx bx-columns icon' ></i> 
						Relatórios  
						<i class='bx bx-chevron-right icon-right' ></i>
					</a>
                    <ul class="side-dropdown">
                        <li><a href="geral.html">Balanço evolutivo</a></li>
						<li><a href="detalhado.html">Balanço específico</a></li>
                        <li><a href="patrimonial.html">Balanço patrimonial</a></li>
                        <li><a href="clientes.html">Clientes</a></li>
                    </ul>
                </li>

				<!-- Divider-->
				<li class="divider" data-text="Pages">Ajustes</li>

				<li>
                    <a href="account.html"><i class='bx bxs-user icon' ></i> 
						Conta 
					</a>
                </li>

				<!-- <li>
                    <a href="#">
						<i class='bx bxs-error icon' ></i> 
						Errors 
						<i class='bx bx-chevron-right icon-right' ></i>
					</a>
                    <ul class="side-dropdown">
                        <li><a href="errors-403.html">403</a></li>
                        <li><a href="errors-404.html">404</a></li>
                        <li><a href="errors-500.html">500</a></li>
                        <li><a href="errors-503.html">503</a></li>
                    </ul>
                </li> -->


				<li>
					<a href="config.html"><i class='fa fa-pencil-ruler icon' ></i> 
						Configurações
					</a>
				</li>

            </ul>
			<!--
            <div class="ads">
				<div class="wrapper">
					<div class="help-icon"><i class="fa fa-circle-question fa-3x"></i></div>
					<p>Need Help with <strong>Atrana</strong>?</p>
                    <a href="docs/" class="btn-upgrade">Documentation</a>
                 </div>
            </div> -->
        </div>

       </div> 
	 </div>
	</div><!-- End Sidebar-->


	<div class="sidebar-overlay"></div>


	<!--Content Start-->
	<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Dashboard</h1>
				<p></p>
			</div>
					
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<p>
								Acompanhamento de metas 
							</p>
						</div>
						<div class="card-body">
							<div class="mt-4">
								<div id="progress1"></div>
								<td><button class="btn btn-primary" onclick="process1()">Adicionar Progresso</button></td>
								<td><button class="btn btn-primary">Ver Detalhes</button></td>
							  </div>
							  <div class="mt-4">
								<div id="progress2"></div>
							  </div>
							  <div class="mt-4">
								<div id="progress3"></div>
							  </div>
						</div>
					</div>
				</div>
				<!-- inserir api de conversas -->
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Mensagens recentes</h4>
						</div>
						<div class="card-body pb-4">
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="assets/images/message/4.jpg">
								</div>
								<div class="name ms-4">
								<a href="https://wa.me/556192525843" title="Fale diretamente com João Pedro">
									<h5 class="mb-1">João Vitor</h5>
									<h6 class="text-muted mb-0">@teste</h6>
								</a>
								</div>
							</div>
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="assets/images/message/5.jpg">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">Teste</h5>
									<h6 class="text-muted mb-0">@teste</h6>
								</div>
							</div>
							<div class="recent-message d-flex px-4 py-3">
								<div class="avatar avatar-lg">
									<img src="assets/images/message/1.jpg">
								</div>
								<div class="name ms-4">
									<h5 class="mb-1">Teste</h5>
									<h6 class="text-muted mb-0">@teste</h6>
								</div>
							</div>
							<div class="px-4">
								<a href="https://web.whatsapp.com/" alt="Inicie ou Continue uma Conversa por Whatsapp">
								<button class='btn btn-block btn-xl btn-primary font-bold mt-3'>Inicie ou Continue uma Conversa</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Últimas Transações</h4>
						</div>
						<div class="card-body"> 
						<div class="table-responsive"> 
						<table class="table table-striped">
							<thead>
							  <tr>
								<th scope="col">Id do Pedido</th>
								<th scope="col">Nome da Cobrança</th>
								<th scope="col">Data</th>
								<th scope="col">Total</th>
								<th scope="col">Status do Pagamento</th>
								<th scope="col">Método de Pagamento</th>
								<th scope="col">Ver Detalhes</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<th scope="row">#SK2548	</th>
								<td>Neal Matthews</td>
								<td>07 Oct, 2022</td>
								<td>$400</td>
								<td><span class="text-success">Paid</span></td>
								<td>Mastercard</td>
								<td><button class="btn btn-primary">Ver Detalhes</button></td>
							  </tr>

							  <tr>
								<th scope="row">#SK2548	</th>
								<td>Neal Matthews</td>
								<td>07 Oct, 2022</td>
								<td>$400</td>
								<td><span class="text-success">Paid</span></td>
								<td>Visa</td>
								<td><button class="btn btn-primary">Ver Detalhes</button></td>
							  </tr>

							  <tr>
								<th scope="row">#SK2548	</th>
								<td>Neal Matthews</td>
								<td>07 Oct, 2022</td>
								<td>$400</td>
								<td><span class="text-danger">Chargeback</span></td>
								<td>Paypal</td>
								<td><button class="btn btn-primary">Ver Detalhes</button></td>
							  </tr>

							  <tr>
								<th scope="row">#SK2548	</th>
								<td>Neal Matthews</td>
								<td>07 Oct, 2022</td>
								<td>$400</td>
								<td><span class="text-warning">Refund</span></td>
								<td>Visa</td>
								<td><button class="btn btn-primary">Ver Detalhes</button></td>
							  </tr>
							</tbody>
						  </table>
						  </div>
						</div>
					</div>
				</div>

		   </div>
		</div>
	</div>


	<!-- Footer -->				
	<footer>
		<div class="footer">
			<!-- <div class="float-start">
				<p>2022 &copy; Atrana</p>
			</div>
				<div class="float-end">
					<p>Crafted with 
						<span class="text-danger">
							<i class="fa fa-heart"></i> by 
							<a href="https://www.facebook.com/andreew.co.id/" class="author-footer">Andre Tri Ramadana</a>
						</span> 
					</p>
			</div> -->
		</div>
	</footer>


	<!-- Preloader -->
	<div class="loader">
		<div class="spinner-border text-light" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	
	<!-- Loader -->
	<div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="assets/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>

	<!-- Chart Js -->
	<script src="assets/modules/apexcharts/apexcharts.js"></script>
	<script src="assets/js/ui-apexcharts.js"></script>

	<!-- Toastify Js -->
	<script src="assets/modules/toastify/toastify.js"></script>

    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		var p0 = 0; 
		
		function process1(){
			
		};
	</script>
 </body>
</html>
