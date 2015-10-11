<!doctype html>
<html lang="pt-PT">
<head>
	<meta charset="utf-8">
	<title>Aplicação Web - Inserir Utilizadores</title>
    <link href="stylesheets/main.css" rel="stylesheet">
</head>

<body>

    <!-- cabeçalho da página -->
	<header>ITAP - Instituto Técnico Artístico e Profissional de Coimbra</header>
    
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
            <hgroup>Inserir utilizadores</hgroup>
 			<p>
			<?php
				$link = mysqli_connect("localhost","root","");
				mysqli_select_db($link, "Instrumentos");
		
				if (!$link) {
					die("Nao foi possivel ligar à base de dados<br>");
				}
				else {
					$query = "INSERT INTO utilizadores(cc, nome, morada, localidade, email, password, id_tipo_pessoa) VALUES('" .
						$_POST["cc"] . "','" . 
						$_POST["nome"] . "','" . 
						$_POST["morada"] . "','" . 
						$_POST["localidade"] . "','" . 
						$_POST["email"] . "','" . 						
						$_POST["password"] . "','" . 						
						$_POST["tipo"] . "')";
				
					//mysqli_set_charset($link, 'utf8');
					
					$result = mysqli_query($link, $query) or die(mysqli_error($link));
					if ($result) {
						echo "Utilizador inserido com <strong>sucesso</strong> na base de dados<br>";
					}
					else {
						echo "Não foi possível inserir na base de dados<br>";				
					}	
					//mysqli_free_result($result);				
				}
								
				mysqli_close($link);											
			?>

			<br>
			<a href="inserir.php">Voltar</a>
			<br>
			<a href="index.php">Ver todos os utilizadores</a>
            
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