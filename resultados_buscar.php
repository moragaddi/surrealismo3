<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
     
     <title>doc</title>
     <link rel="stylesheet" href="css/estilos.css">
 </head>
<header>
    <input type="checkbox" name="" id="chk1">
        <div class="logo"><a href="index.html"><h1>S</h1></a></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
            <li><a href=vanguardia.html>Vanguardia</a></li>
            <li><a href=artistas.html>Artistas</a></li>
            <li><a href=galeria.html>Galeria</a></li>
            <li><a href=contacto.html>Contacto</a></li>
            <li><a href="login.html"><i class="fa-solid fa-user"></i></a>

            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
 
</header>

<body>
<div class="banner-artistas"></div>
	<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo  "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<article>
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php

		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p class="resultado-artistas" >
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['bio'] . " ";
            echo $resultados['foto'] . " ";

			
	?>
    <br clear="both"/>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
	</main>

</body>
 <script src="https://kit.fontawesome.com/06d0e98269.js" crossorigin="anonymous"></script>
</html>