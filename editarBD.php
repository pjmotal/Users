<!doctype html>
<html lang="pt-PT">
<head>
	<meta charset="utf-8">
	<title>Aplicação Web - Editar Utilizadores</title>
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
            <hgroup>Editar utilizadores - Passo 03</hgroup>
   			<p>
				<?php
                
                if (isset($_POST["nome"])){				
					$link = mysqli_connect("localhost","root","");
					mysqli_select_db($link, "Instrumentos");
			
					if (!$link) {
						die("Nao foi possivel ligar à base de dados<br>");
					} else {
						$query = "UPDATE utilizadores SET nome='".$_POST['nome']."', 
								  morada='".$_POST['morada']."', 
								  localidade='".$_POST['localidade']."', 
								  email='".$_POST['email']."', 								  
								  password='".$_POST['password']."', 								
								  id_tipo_pessoa=".$_POST['tipo'] ." 
								  WHERE cc=".$_POST['cc'];
					
						$result = mysqli_query($link, $query) or die(mysqli_error($link));
					
						if ($result) {
							echo "<em>Utilizador atualizado com sucesso na base de dados</em><br>";
						}
						else {
							echo "<em>Não foi possível inserir na base de dados</em><br>";
						}	
						mysqli_free_result($result);
						mysqli_close($link);											
					}
				}

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