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
				<li><a href="index.php"><p class="con">Controle diário</p></a></li>
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
				<h2>Pontos: pendentes, aprovados, rejeitados!</h2>
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
						<span>Ajustes: pendentes</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2">
							<div class="circle"></div>
						</label>
						<span>A - H</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item3" />
						<label for="item3">
							<div class="circle"></div>
						</label>
						<span>I - S</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>T - Z</span>
					</div><!--form-venda-wraper-->
					</form>
				</div><!--search2-->
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
						<span>Inconsistências: pendentes</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2">
							<div class="circle"></div>
						</label>
						<span>A - H</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item3" />
						<label for="item3">
							<div class="circle"></div>
						</label>
						<span>I - S</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>T - Z</span>
					</div><!--form-venda-wraper-->
					</form>
				</div><!--search2-->
			</div><!--panel-->

		<div style="width: 49%;margin-left: 1%;" class="panel">
				<div class="search2">
					<h2>Filtre por ano</h2>
					<form>
					<div class="form-venda-wraper">
						<input type="checkbox" id="item1" />
						<label for="item1">
							<div class="circle"></div>
						</label><!--item-->
						<span>Pontos:</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2">
							<div class="circle"></div>
						</label>
						<span>1 - 24</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item3" />
						<label for="item3">
							<div class="circle"></div>
						</label>
						<span>25 - 49</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>50 - 75</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>76 - 100</span>
					</div><!--form-venda-wraper-->
					</form>
				</div><!--search2-->
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
						<span>Autorizações de dispositivos</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2">
							<div class="circle"></div>
						</label>
						<span>Sim</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item3" />
						<label for="item3">
							<div class="circle"></div>
						</label>
						<span>Não</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item4" />
						<label for="item4">
							<div class="circle"></div>
						</label>
						<span>Testes</span>
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