<?php
session_start();
if (@!$_SESSION['usuario']) {
    header("Location:../../index.php");
} elseif ($_SESSION['tipo_usuario'] == 'EST') {
//header("Location:index2.php");
    echo "eres estudiante";
} elseif ($_SESSION['tipo_usuario'] == 'ADM') {
    echo "eres administrador";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>

    <meta charset="utf-8"></meta>
    <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css"></link>
    <script type="text/javascript" src="../../plugins/bootstrap/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
    <title>Proyecto SGOA</title>
</head>
<style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 390px}

    /* Set gray background color and 100% height */
    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }

    html{
        min-height: 100%;
        position: relative;
    }
    body{
        margin:0;
        margin-bottom: 40px;
    }
    /* Set black background color, white text and some padding */
    footer {
        background-color: #555;
        color: white;
        padding: 15px;
        position: fixed;
        bottom: 0;
        width: 100%;
        padding-top:5px;
        padding-bottom:5px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}
    }

    .table > tbody > tr > td {
        vertical-align: middle;
    }

    .estadistica{
        -webkit-column-count: 3; /* Chrome, Safari, Opera */
        -moz-column-count: 3; /* Firefox */
        column-count: 2;
        
    }
</style>


<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bienvenid@: <strong><?php echo $_SESSION['usuario'] ?></strong></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="../modulos_profesor/pro_importar_catalogar.php">Importar y catalogar</a></li>
                <li><a href="../modulos_profesor/pro_buscar.php">Buscar</a></li>
                <li><a href="../modulos_profesor/pro_herramientas.php">Herramientas</a></li>
				<li><a href="../sistema-de-comentarios/index.php">Sala de Chat</a></li>
				<li class="active"><a href="../modulos_comunes/index.php">Foro</a></li>
			
			
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../desconectar_sesion.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Inicio formulario de búsqueda -->








<!-- presentacion de objetos de aprendizaje
<div class="container-fluid text-center">
    <div class="row content">
        
        <div class="col-sm-12 text-center">
            <h2> Administración de objetos de aprendizaje</h2>
            <form action="../modulos_profesor/pro_ejecutar_buscar.php" method="post" enctype="multipart/form-data">
                <div class="col-md-3">
                </div>
                <div class="col-md-3 text-left ">
                    <select class= "form-control" name="tipo_criterio" dir="ltr" required>
                        <option value="">Filtrar por:</option>
                        <option value="autor">autor</option>
                        <option value="nombre">nombre</option>
                        <option value="descripcion">descripcion</option>
                        <option value="institucion">institucion</option>
                        <option value="palabras_clave">palabra clave</option>
                        <option value="cbx_materia">materia</option>
                    </select></br>
                </div>
                <div class="col-md-3 text-center">
                    <input type="text" class="form-control" id="criterio_busqueda" placeholder="Buscar...." name="criterio_busqueda" required></br>
                </div>
                <div class="col-md-3 text-left">
                    <button id="registrar" type="submit" class="btn btn-success">Buscar</button>
                    </br></br>
                </div>

            </form>

 
            </div>
            <div class="container" >
                <table class="table table-striped"border ="1|1" class="table table-bordered" id="tabla">
                    <thead>
                    <tr class="warning">
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Institución</td>
                        <td>Fecha Creación</td>
                        <td>Palabras Clave</td>
                        <td>Tamaño</td>
                        <td>Autor</td>
                        <td>Comentarios</td>
                        <td>Descargas</td>
                    </tr>
                    </thead>
            </div>-->


<div class="container">
            <div class="row content">
				<img src="../../images/epn.jpg"style="float:center"></a>
                <div class="col-sm-12 text-center">
                        <h2> <img src="../../images/foro.jpg"style="float:left;width:300px;height:170px">AÑADE UN NUEVA TEMA EN EL FORO</h2> 
                </div>
                        
                <div class="col-sm-12" method="post">           
<?php
	if(isset($_GET["respuestas"]))
		$respuestas = $_GET['respuestas'];
	else
		$respuestas = 0;
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
?>
				<form name="form" action="agregar.php" method="post">
                        <input type="hidden" name="identificador" value="<?php echo $identificador;?>">
                        <input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
                        <div class="row">
                            <label class="col-xs-3">Autor:</label>
                            <div class="col-xs-9">
                                <input type="text" name="autor" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-sm-3">Titulo:</label>
                            <div class="col-sm-9">
                                <input type="text"  name="titulo" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-sm-3">Mensaje:</label>
                            <div class="col-sm-9">
                                <textarea name="mensaje" cols="70" rows="5" required="required"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
                   
            
    
<footer class="label-default container-fluid text-center">
    <p class="copyright small">Copyright &copy; Michael Morales, Karen Morocho, Veronica Olmedo, Fernando Pogo 2018</p>
</footer>
</body>

</html>





