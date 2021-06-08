<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="sidebar">
		<div class="topo">
			<h3>Dashboard</h3>
		</div><!--topo-->
		<div class="menu">
			<ul>
				<li><a href="controle_mensal.php"><p class="con">Controle diário
</p></a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Total de colaboradores</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href="taxa.php"> Taxa de Presença</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Total de colaboradores que fizeram horas extras</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Total de colaboradores que tiveram atrasos ou faltas</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Pontos: pendentes, aprovados, rejeitados</a></li>
				<li><a href="controle_mensal.php"><p class="con">Controle Mensal</p></a></a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Pontos: pendentes, aprovados, rejeitados</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Ajustes: pendentes, aprovados, rejeitados</a></li>
				<li><i class="fas fa-angle-double-right"></i><a href=""> Inconsistências: pendentes, resolvidas</a></li>
			</ul>
		</div><!--menu-->
	</div><!--sidebar-->

	<!--FIM DA SIDEBAR-->

	<div class="main-content">
		<header>

			<div class="nome-usuario">
				<h2><i class="fas fa-align-justify"></i></h2>
			</div>

			<div class="pesquisa-campo">
				<div class="icone-pesquisa"><i class="fas fa-search"></i></div><form><input type="text" /></form>
			</div><!--pesquisa-campo-->

			<div class="icone-alerta">
				<p>2</p>
				<i class="fas fa-bell"></i>
			</div><!--icone-alerta-->

			<div class="clear"></div>
		</header>

		<div class="content1">
			<div class="panel">
				<h2>Total de colaboradores!</h2>
				<div class="search1">
					<h2>Filtre por numero de colaboradores</h2>
					<div class="barra-preco">
						<div class="barra-preco-fill"></div><!--barra-preco-fill-->
						<div class="pointer-barra"></div>
					</div><!--barra-preco-->
					<div class="valor-pesquisa">
						<p class="preco_pesquisa">1</p>
						<p>100</p>
						<div class="clear"></div>
					</div><!--valor-pesquisa-->
				</div><!--search1-->
			</div><!--panel-->
		<div style="width: 49%;margin-right: 1%;" class="panel">
				<div class="search2">
					<h2>Filtre por nome colaborador</h2>
					<form>
					<div class="form-venda-wraper">
						<input type="checkbox" id="item1" />
						<label for="item1">
							<div class="circle"></div>
						</label><!--item-->
						<span>Taxa de Presença</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2">
							<div class="circle"></div>
						</label>
						<span>1% - 10%</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item3" />
						<label for="item3">
							<div class="circle"></div>
						</label>
						<span>20% - 30%</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>40% - 50%</span>
					</div><!--form-venda-wraper-->
					</form>
				</div><!--search2-->
			</div><!--panel-->
			
		<div style="width: 49%;margin-left: 1%;" class="panel">
				<div class="search2">
					<h2>Filtre por nome colaborador</h2>
					<form>
					<div class="form-venda-wraper">
						<input type="checkbox" id="item1" />
						<label for="item1">
							<div class="circle"></div>
						</label><!--item-->
						<span>Status dia colaboradores</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2">
							<div class="circle"></div>
						</label>
						<span>Ativo</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item3" />
						<label for="item3">
							<div class="circle"></div>
						</label>
						<span>Inativo</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>Frequênte</span>
					</div><!--form-venda-wraper-->
					</form>
				</div><!--search2-->
		</div><!--panel-->

		<div style="width: 49%;margin-left: 1%;" class="panel">
				<div class="search2">
					<h2>Filtre por nome colaborador</h2>
					<form>
					<div class="form-venda-wraper">
						<input type="checkbox" id="item1" />
						<label for="item1">
							<div class="circle"></div>
						</label><!--item-->
						<span>Colaboradores horas extras;</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2">
							<div class="circle"></div>
						</label>
						<span>7 - 15</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item3" />
						<label for="item3">
							<div class="circle"></div>
						</label>
						<span>20 a 30</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>40 - 50</span>
					</div><!--form-venda-wraper-->
					</form>
				</div><!--search2-->


		</div><!--panel-->

		<div style="width: 49%;margin-left: 1%;" class="panel">
				<div class="search2">
					<h2>Filtre por nome colaborador</h2>
					<form>
					<div class="form-venda-wraper">
						<input type="checkbox" id="item1" />
						<label for="item1">
							<div class="circle"></div>
						</label><!--item-->
						<span>Total atrasos ou faltas;</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2">
							<div class="circle"></div>
						</label>
						<span>7 - 15</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item3" />
						<label for="item3">
							<div class="circle"></div>
						</label>
						<span>20 a 30</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>40 - 50</span>
					</div><!--form-venda-wraper-->
					</form>
				</div><!--search2-->

				
		</div><!--panel-->


			<div class="clear"></div>
			
		</div><!--content1-->

		<div class="ultimas-atividades">
			<div class="atividades-topo">
				<h2>Últimas atividades</h2>
			</div><!--atividades-topo--->
			<br />
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>
			<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>
						<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>

						<div class="atividade-registro">
				<div class="circle-atividade"></div>
				<h2>Há 2 minutos</h2>
				<p>Uma nova <b>página</b> foi inserida</p>
			</div>
		</div>

	</div><!--main-content-->
	<div class="clear"></div>

<script src="js/jquery.js"></script>
<script src="js/functions.js"></script>

</body>
</html>