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
 
				<form action="inserirBD.php" method="post" name="inserirUtilizador">
                    <table>
                        <tr>
                        	<td>Nome:</td>
                            <td><input type="text" name="nome" size="50" required></td>
                        </tr>
                        <tr>
                        	<td>Cartão de Cidadão:</td>
                            <td><input type="text" name="cc" size="10" required></td>
                        </tr>
                        <tr>
                        	<td>Morada:</td>
                            <td><input type="text" name="morada" size="50"></td>
                        </tr>
                        <tr>
                        	<td>Localidade:</td>
                            <td><input type="text" name="localidade" size="50"></td>
                        </tr>
                        <tr>
                        	<td>Email:</td>
                            <td><input type="text" name="email" size="50" placeholder="nome@exemplo.com" required></td>
                        </tr>
                        <tr>
                        	<td>Password:</td>
                            <td><input type="password" name="password" required></td>
                        </tr>                        
                        <tr>
                        	<td>Tipo de Pessoa: </td>
                        	<td>
                                <select name="tipo">
                                      <option value="1" selected>Visitante</option>
                                      <option value="2">Comprador</option>
                                      <option value="3">Vendedor</option>
                                </select>
                            </td>
                        </tr>                     
                      <tr>
                      	<td colspan="2"><input type="submit" value="Inserir"></td>
                      </tr>                        
                      <tr>
                      	<td colspan="2">[ Os campos com cortorno azul são de preenchimento obrigatório! ]</td>
                      </tr>                        
                      
                    </table>
                </form>        
            
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