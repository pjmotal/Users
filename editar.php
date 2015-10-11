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
            <hgroup>Editar utilizadores - Passo 01</hgroup>

                <form action="" method="post">
					Nome que pretende pesquisar: 
                    <input type="text" name="nome" size="50" placeholder="Nome a pesquisar...">
                    <input type="submit" name="pesquisa" value="Pesquisa">
                </form>      
   
				<?php
                
                if (isset($_POST["nome"])){				
					$link = mysqli_connect("localhost","root","");
					mysqli_select_db($link, "Instrumentos");
			
					if (!$link) {
						die("Nao foi possivel ligar à base de dados<br>");
					} else {
						$query = "SELECT nome, cc FROM utilizadores WHERE nome='" . $_POST["nome"] . "'";
						$result = mysqli_query($link, $query);
						$num_linhas = mysqli_num_rows($result);
			
						echo "<br>Total de utilizadores na base de dados: " . $num_linhas . "<br>";
			
						while($row = mysqli_fetch_assoc($result)) {
						echo "<br>";
						echo "<table>
								<tr>
									<th>Cartão Cidadão</th>
									<th>Nome</th>
									<th></th>
								</tr>
								<tr>
									<td>" . $row['cc'] . "</td>
									<td>" . $row['nome'] . "</td>
									<td><a href=\"editarForm.php?cc=" . $row['cc'] . "\">Editar</a></td>
								</tr>
							  </table>";
						}
					}
				mysqli_free_result($result);
				mysqli_close($link);
				}

                ?>
                
                <br>
                <a href="index.php">Ver todos os utilizadores</a>                
                
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