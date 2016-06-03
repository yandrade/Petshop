<!-- / Arquivo include com painel scripts e css do mesmo -->
<script src="js/lumino.glyphs.js"></script>
<script type="text/javascript" src="view.js"></script>
<link rel="stylesheet" type="text/css" href="menu/styles.css" media="all">
<link href="menu/bootstrap.min.css" rel="stylesheet">
<link href="menu/datepicker3.css" rel="stylesheet">
<link href="menu/styles.css" rel="stylesheet">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon	-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Salão </span>do Dog</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-md-2 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="index.html"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg> Dashboard</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></span> Funcionário 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="funcInsert.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Cadastrar
						</a>
					</li>
					<li>
						<a class="" href="funcDelete.php">
							<svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg> Deletar
						</a>
					</li>
					<li>
						<a class="" href="funcUpdate.php">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Alterar
						</a>
					</li>
						<li>
						<a class="" href="funcSelect.php">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
							 Listar
						</a>
					</li>
				</ul>
			</li>
						<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-6"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></span> Animal
				</a>
				<ul class="children collapse" id="sub-item-6">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Cadastrar
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg> Deletar
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Alterar
						</a>
					</li>
						<li>
						<a class="" href="#">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
							 Listar
						</a>
					</li>
				</ul>
			</li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></span> Raça
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Cadastrar
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg> Deletar
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Alterar
						</a>
					</li>
						<li>
						<a class="" href="#">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
							 Listar
						</a>
					</li>
				</ul>
			</li>
			<li class="parent ">
			<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></span> Pelo 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="peloInsert.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Cadastrar
						</a>
					</li>
					<li>
						<a class="" href="peloDelete.php">
							<svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg> Deletar
						</a>
					</li>
					<li>
						<a class="" href="peloUpdate.php">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Alterar
						</a>
					</li>
						<li>
						<a class="" href="peloSelect.php">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
 							Listar
						</a>
					</li>
				</ul>
			</li>
						<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-5"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></span> Porte
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Cadastrar
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg> Deletar
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Alterar
						</a>
					</li>
						<li>
						<a class="" href="#">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
							 Listar
						</a>
					</li>
				</ul>
			</li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg></span> Produto
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Cadastrar
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked trash"><use xlink:href="#stroked-trash"/></svg> Deletar
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Alterar
						</a>
					</li>
						<li>
						<a class="" href="#">
							<svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>
							 Listar
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
	
	
