
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Blank Pages  &mdash; Atrana</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="assets/modules/boxicons/css/boxicons.min.css">
</head>
<style>

	.row{
		color: black;
		background-color: white;
	}

</style>
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
						<div class="dropdown-header">Notifications</div>
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
						<a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
						<a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i> <span>Settings</span></a>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>My Profile</span></a>
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
                        <li><a href="groups.php">Grupos</a></li>
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


	<?php 

	$mysqli = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');
	$query = 'SELECT * FROM customers ORDER BY name';
	$logsql = mysqli_query($mysqli, $query); 

	?>


	<!--Content Start-->
	<div class="content-start transition  "> 
		<div class="container-fluid dashboard">
			<div class="content-header">
				<h1>Clientes</h1>
			</div>
            
            <div class="row">
				<div class="col-12">

					<div class="card">
						<div class="card-body"> 
						<p>Pensar em recursos que podem ser listados, adicionados, editados ou deletados nessa página. 
						<br>
							<?php 
							$resultado = mysqli_fetch_all($logsql, MYSQLI_ASSOC); 

							echo '<div class="row">';
    						echo '<div class="col-2"><b>Nome</b></div>';
    						echo '<div class="col-2"><b>E-mail</b></div>';
							echo '<div class="col-2"><b>Tipo</b></div>';
    						echo '<div class="col-2"><b>Contrato</b></div>';
							echo '<div class="col-2"><a href="javascript:void(0)" onclick= "adicionar()"><button id="adicionar" style="background-color: #ebf3ff; color: black; position:right; height:50%; width:25%; border-radius: 100px" type="submit">  +  </button></a></div><hr>';
							echo '
										<div id="myModal1" class="modal" style="padding-top:100px;width: 100%; position:fixed; text-align: center ;background-color: rgba(0,0,0,0.4); ">
							
											<!-- Modal content -->

												<div class="container" style="width:250px; height:400px; background-color: white">
													<form id="myForm" action="adicionar_cliente.php" method="get">
														Nome: <input type="text" name="name"><br>
														E-mail: <input type="text" name="email"><br>
														Tipo: <input type="text" name="type"><br>
														Grupos: <input type="text" name="contract"><br>
														Status: <input type="text" name="user_id"><br>
														<br>
															<div class="col-6"><input type="submit" onclick="myFunction()" value="Cadastrar"></div>
															<div class="col-6"><input onclick="fecharmodal1()" style="background-color:red; color:black; border-radius:10px" value="Fechar"></div>
													</form>
												</div>
										</div>
								</div>
										';										

							foreach ($resultado as $item){
								echo '<div class="row">';
								echo '<div class="col-2" >' .$item['name']. '</div>';
								echo '<div class="col-2" >' .$item['email']. '</div>'; 
								echo '<div class="col-2" >' .$item['type']. '</div>'; 
								echo '<div class="col-2" >' .$item['contract']. '</div>';
								echo '<div class="col-2"><a href="javascript:void(0)" onclick= "deletar()"><button id="botaoexclui" style="background-color: #ebf3ff; color: white; position:right; height:50%; width:25%; border-radius: 100px" type="submit"> 🗑</button></a></div>';
								echo '</div>';
								echo '
								<div class="container">
										<div id="myModal" class="modal" style="padding-top:100px;width: 100%; position:fixed; text-align: center ;background-color: rgba(0,0,0,0.4); ">
							
											<!-- Modal content -->
											<div class="modal-content" style="width: 50%;padding: 20px;  margin:auto;">
												
												<p><b>Você tem certeza que deseja apagar este usuário? </b></p>
												<div class="row">
												
													<div class="col-4"></div>
													<div class="col-2"><button onclick="deletaritem('.$item['id'].')" style="background-color:green; color:white"><a>Excluir</a></button></div>
													
													<div class="col-2"><button onclick="fecharmodal()" style="background-color:red; color:white"><a>Fechar</a></button></div>
													<div class="col-4"></div>
												
												</div>
											</div>
							
										</div>
								</div>
										';
							}
						
						?>
						</div>
						</p>
					</div>
				</div>

				</div>
			</div> 
		 
            	
        </div><!-- End Container-->
    </div><!-- End Content-->

	<!-- Footer -->				
	<footer>
		<div class="footer">
			<div class="float-start">
				<p>2022 &copy; Atrana</p>
			</div>
				<div class="float-end">
					<p>Crafted with 
						<span class="text-danger">
							<i class="fa fa-heart"></i> by 
							<a href="https://www.facebook.com/andreew.co.id/" class="author-footer">Andre Tri Ramadana</a>
						</span> 
					</p>
			</div>
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
	
    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
		<script>

		function deletar(){
        document.getElementById("myModal").style.display="block";



   		}


    	function fecharmodal(){

        document.getElementById("myModal").style.display="none";


   		}
		
		function deletaritem(x){
		var id = x;
		var url = "deletar_cliente.php?id=" + id;
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", url, false);
		xhttp.send();
		alert( xhttp.responseText);
		document.getElementById("myModal").style.display="none";
		document.location.reload(true);

		}

		function adicionar(){
        document.getElementById("myModal1").style.display="block";



   		}


		function fecharmodal1(){

		document.getElementById("myModal1").style.display="none";


   		}

		function myFunction() {
 	 	document.getElementById("myForm").submit();
		alert('Registro criado com sucesso');
		}
	</script>
 </body>
</html>
