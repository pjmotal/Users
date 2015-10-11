<!doctype html>
<html lang="pt-PT">
<head>
	<meta charset="utf-8">
	<title>Aplicação Web - Eliminar Utilizadores</title>
    <link href="stylesheets/main.css" rel="stylesheet">
</head>

<body>

    <!-- cabeçalho da página -->
	<header><a href="images/LogoITAP.jpg" title="ITAP"></header>
    
    <!-- navegação da página -->
    <nav>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="editar.php">Editar</a></li>
            <li><a href="eliminar.php">Eliminar</a></li>
            <li><a href="inserir.php">Inserir</a></li>
        </ul>
    </nav>
    
    <!-- secção de artigos da página -->
    <section>
        <!-- artigo que está contido na secção referida -->
		<article>
        <!-- grupo de títulos da página -->
            <hgroup>Eliminar  utilizadores - Passo 02</hgroup>
			<p>
				<?php
				$link = mysqli_connect("localhost","root","");
				mysqli_select_db($link, "Instrumentos");		
				if (!$link) {
					die("Nao foi possivel ligar à base de dados<br>");
				} else {
					$query = "DELETE FROM utilizadores where cc='" . $_GET["cc"] . "'";
					$result = mysqli_query($link, $query);
	
					if ($result){ 
						echo "<em>Utilizador eliminado com sucesso</em><br>"; 
					}
					else { 
						echo "<em>Não foi possivel eliminar o utilizador selecionado</em><br>"; 
					}

				}				
				mysqli_close($link);
                ?>
                
                <br>
                <a href="index.php">Ver todas os utilizadores</a>                
              </p>  
        </article>
        <aside>EspaçoparaRedesSociais</aside>
    </section>
    
    <!-- rodapé da página -->
    <footer>
            Copyright © 2015 ITAP. All Rights Reserved. Designed by Paulo Mota Lopes <br>
            <a href="#">politica de Privacidade</a> | <a href="#">Termos de uso</a>
    </footer>

</body>
</html>