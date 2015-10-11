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
            <hgroup>Editar utilizadores - Passo 02</hgroup>
   
				<?php
				$link = mysqli_connect("localhost","root","");
				mysqli_select_db($link, "Instrumentos");
		
				if (!$link) {
					die("Nao foi possivel ligar à base de dados<br>");
				} else {
					$cc = $_GET['cc'];
					$query = "SELECT * FROM utilizadores WHERE cc=" . $cc;
					$result = mysqli_query($link, $query);
					$row = mysqli_fetch_assoc($result);
				}
				
				?>                
                
                <form action="editarBD.php" method="post" name="editarForm">
                    <table>
                        <tr>
                        	<td>Nome:</td>
                            <td><input type="text" name="nome" size="50" value="<?php echo $row['nome']; ?>"></td>
                        </tr>
                        <tr>
                        	<td>Cartão de Cidadão:</td>
                            <td><input type="text" name="cc" size="50" value="<?php echo $row['cc']; ?>" readonly></td>
                        </tr>
                        <tr>
                        	<td>Morada:</td>
                            <td><input type="text" name="morada" size="50" value="<?php echo $row['morada']; ?>"></td>
                        </tr>
                        <tr>
                        	<td>Localidade:</td>
                            <td><input type="text" name="localidade" size="50" value="<?php echo $row['localidade']; ?>"></td>
                        </tr>
                        <tr>
                        	<td>Email:</td>
                            <td><input type="text" name="email" size="50" value="<?php echo $row['email']; ?>"></td>
                        <tr>
                        	<td>Password:</td>
                            <td><input type="text" name="password" size="50" value="<?php echo $row['password']; ?>"></td>
                        </tr>
                        </tr>                        
                        <tr>
                        	<td>Tipo de Pessoa: </td>
                        	<td>
                                <select name="tipo">
									<?php if ($row['localidade'] == 1) { ?>
                                	<option value="1" selected>Visitante</option>
                                    <option value="2">Vendedor</option>
                                    <option value="3">Comprador</option>
    	                            <?php } if ($row['localidade'] == 2) { ?>
                                	<option value="1">Visitante</option>
                                    <option value="2" selected>Vendedor</option>
                                    <option value="3">Comprador</option>
									<?php } else { ?>
                                	<option value="1">Visitante</option>
                                    <option value="2">Vendedor</option>
                                    <option value="3" selected>Comprador</option>
            	                    <?php } ?>    
                                </select>
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2"><input type="submit" value="Atualizar" name="atualizar"></td>
                        </tr>                        
                    </table>

                </form>
                
			<?php 
			mysqli_free_result($result);
			mysqli_close($link); 
			?>

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