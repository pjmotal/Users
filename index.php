<!doctype html>
<html lang="pt-PT">
<head>
	<meta charset="utf-8">
	<title>Aplicação Web - Utilizadores</title>
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
            <hgroup>Atividade na tabela utilizadores</hgroup>
            <p>
            
            	<?php
				
					$link = mysqli_connect("localhost", "root", "");
					mysqli_select_db($link, "Instrumentos");
					
					//mysqli_set_charset($link, 'utf8');
					
					if (!$link) {
						die ("Nao foi possivel ligar à base de dados<br>");
					} else {
						$query = "SELECT cc, nome FROM utilizadores";
						$result = mysqli_query($link, $query);
						$num_linhas = mysqli_num_rows($result);
			
						echo "Total de utilizadores na base de dados: " . $num_linhas . "<br><br>";
			
						while($row = mysqli_fetch_assoc($result)) {
							echo "Cartão de Cidadão: " . $row["cc"] . "<br>Nome: " . $row["nome"] . "<br><br>";
						}						
					}
					
					mysqli_free_result($result);
					
					mysqli_close($link);
				?>          
            
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