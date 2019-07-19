<?php	
	//Meu código PHP que ainda não sei nenhum
?>

<?php
	//Vou abrir mais esse PHP aqui pra ver se consigo chamar antes do Doctype
?>

<!Doctype html>
<html>
	<body>
		<meta charset="utf-8" />
		<h1>MY FIRST CODE IN PHP</h1>
		<style>

			h1 {
			  text-align: center;
			  text-transform: uppercase;
			  color: #00BFFF;
			  text-shadow: 3px 2px #FF1493;
			}

			p {
			  text-indent: 50px;
			  text-align: center;
			  letter-spacing: 3px;
			}
			body {
			background-color: lightblue;
			}
		</style>
		<?php
			//Vou abrir aqui no head mesmo bem louco, vou criar uma váriavel, olha só.
			$nome = 'Matheus Jollyl';
			$nascimento = '22/04/2003';
			$sobre_nome = 'Silva';
			$titulo = 'MY FIRST CODE IN PHP';
			$conteudo = 'Ainda não tenho conteudo é tudo um teste';
			define('ESTADO', 'Blumenau - SC');
			$hello = "Hello World"; 
		?>
			
			<title>MY FIRST CODE IN PHP</title>
			<p>Antes de tudo <strong><?php echo $hello; ?></strong> agora posso continuar...</p>
			<p>Olha só que divertimento fazer isso aqui, agora vou chamar minhas váriaveis enquanto escrevo esse texto aqui por exemplo agora vou chamar o titulo <?php echo $titulo; ?></p>
			<p>Esse código faz parte de um estudo que fiz sobre PHP e espero que um dia sirva de recordação, agradecimentos ao meu colega de trabalho Kelvin Ott. Não era nem de perto o melhor programador que já vi na minha vida, mas me auxiliou nisso.<?php echo $conteudo; ?></p>
			<p>Era uma vez um cara chamado <?php echo $nome; ?> e ele nasceu em <?php echo $nascimento; ?> e nasceu em <?php echo ESTADO; ?> Seu sobrenome era <?php echo $sobre_nome ?></p>

	</body>
	<head>
		
	</head>
	<?php
		$titulo = "Utilização de constantes";
		//Irei adicionar um <p> lá em cima pegando essa informação.
	?>	
</html>