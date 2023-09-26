

<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title> Bem vindo ao meu mundo!</title>
		<link rel="stylesheet" href="agendamentoo.css">
		<link rel="stylesheet" href="reset.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="=ie-edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

	</head>

    <body>
  <!-- Inicio do menu fixo -->
    <header  class = "header">
        <a href="index.html" class="logo"><img src="img/logo3.png" ></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu" id="device">
          <li><a href="index.html"class="a">Home</a></li>
          <li><a href="sobre.html"class="a">Sobre nós</a></li>
          <li><a href="projetos.html" class="a">Projetos</a></li>
          <li><a href="agendamento.php"class="a">Contato</a></li>    </ul>
    </header>
      <!-- Fim do menu fixo -->

                
                <!--ESPAÇO PARA O SLIDE-->
            <div class="slider">
            <div class="load"></div>
            <div class= content>
            <div class="principal">
        
        </div>
    </div>
</div>
                
            <!--FIM DO SLIDE -->
 
<main>
    

        
<!--BANG DOIDO DA IMAGEM-->
        
<div id="imagem">
    <div class="placeholder"></div> 
        <script>
      var options = {
        // aqui também 
      imgSrc : "img/lumineition.jpg",
      containerName : "placeholder",
      rows: 3,
      columns: 3,
      margin: 0.5,
      animTime: 0.3
    }

    function ImageGrid(defaults)
    {
      var r = defaults.rows;
      var c = defaults.columns;
      var margin = defaults.margin;
        
      var placeholder = document.getElementsByClassName(defaults.containerName)[0];
      var container = document.createElement('div');
      container.className = "gridContainer";
      placeholder.appendChild(container); 
        
      var gridTile;  

      var w = (container.offsetWidth / c) -margin;
      var h = (container.offsetHeight / r) -margin;
      var arr = [];
        
      for (var i=0, l=r*c; i < l; i++)
      {    
        gridTile = document.createElement('div');
        gridTile.className = "gridTile";
          
        arr = [(w+margin)*(i%c), (h+margin)*Math.floor(i/c), ((w+margin)*(i%c)+w-margin), (h+margin)*Math.floor(i/c), ((w+margin)*(i%c)+w-margin), ((h+margin)*Math.floor(i/c) + h-margin), (w+margin)*(i%c), ((h+margin)*Math.floor(i/c) + h-margin)];
        
        gridTile.style.webkitClipPath = 'polygon('+arr[0]+'px '+ arr[1]+'px,'+arr[2]+'px '+arr[3]+'px, '+arr[4]+'px '+ arr[5] +'px, '+arr[6]+'px '+ arr[7] +'px)';
        
        gridTile.style.clipPath = 'polygon('+arr[0]+'px '+ arr[1]+'px,'+arr[2]+'px '+arr[3]+'px, '+arr[4]+'px '+ arr[5] +'px, '+arr[6]+'px '+ arr[7] +'px)';
              
        container.appendChild(gridTile);    
        
        fixTilePosition(gridTile, i);
      }
    
      
      function fixTilePosition(tile, ind)
      {
        var centr, centrCol, centrRow, offsetW, offsetH, left, top;
        
        centr = Math.floor(c * r / 2);
        centrCol = Math.ceil(centr/c);
        centrRow = Math.ceil(centr/r);
            
        offsetW = w/centrCol;
        offsetH = h/centrRow;
        
        left = (Math.round((ind % c - centrCol + 1) * offsetW));
        top = (Math.round((Math.floor(ind/c) - centrRow + 1) * offsetH));
        
        tile.style.backgroundPosition = left + "px " + top + "px";
        
      }
    }

    ImageGrid(options);
        </script>
</div>
        <div class="wrapper">

  <div class="title">
    <h1>Solicite seu Orçamento</h1>
  </div>
  <form action="agendamento.php" method="POST" class="contact-form">
    <div class="input-fields">
      <input type="text"name="nome" class="input" placeholder="Nome:" required>
      <input type="email" name="email" class="input" placeholder="E-mail:" required>
      <input type="text" name="celular"class="input" placeholder="Telefone:" required>
      <input type="text" name="assunto" class="input" placeholder="Assunto:"required>
      <input type="date" name="data" class="input" placeholder="Data:" required>
    </div>
    <div class="msg" >
      <textarea type="text" name ="mensagem" placeholder="Mensagem:"required ></textarea>
     
     <button type ="submit"  value="enviar" name="enviar" Placeholder="Enviar" class="btn">Enviar</button>

     </div>
        
  
  </form>
  <div class="mapa">
    <div class="localtxt"><h1>Localização</h1></div>
    <div class="local">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7942870068114!2d-46.45873724990101!3d-23.53990018461841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf22458913%3A0xecdac462b58a9475!2sSenac%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1601511107027!5m2!1spt-BR!2sbr" width="400" height="400" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  
  <?php 
  if (isset($_POST['enviar'])){
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $celular = $_POST['celular'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $data = $_POST['data'];


    $servidor = 'softkleen.com.br';
    $username = 'minasti';
    $senha = 'Qhg#r476';
    $banco = 'wellington_minasca';

//testar a conexao

$connect = new PDO ("mysql:host=$servidor;dbname=$banco",$username,$senha);
    

    #require_once('conexao.php');
    $result = $connect->query("INSERT INTO agendamento (id_agendamento,nome_agendamento,email_agendamento,telefone_agendamento,assunto_agendamento,mensagem_agendamento,data_agendamento) VALUES(default,'$nome','$email','$celular','$assunto','$mensagem','$data')");
    #var_dump($result);
    echo "Obrigada por agendar com Concept Architecture. Dentro de 24 horas, entraremos em contato por meio do";

  }
    

   ?>


 



    <div class="contato">
    <h2>Concept Architecture</h2>
    <h4>TEL+55 11966155026</h4>
    <h4>Av. Itaquera, 800 - Vila Carmosina</h4>
    <h4>São Paulo - SP, 082925-000</h4>
    <h4>Conceptarchitecture@gmail.com</h4>
            </div>
    </div>
</main>    

<footer>
	<aside class="bloco-rodape">
        <div id="loguin"> <img src="img/logo3.png"> </div>
		<div class="texto-rodape"> <p>Conceptarchitecture@gmail.com</p> <p>Desenvolvido por Minas Dev ©2019</p>
        </div>
    </aside>
		
		</footer>
		
                	 <script>
        /* SCRIPT JQUERY PARA TROCAR DE COR NAVBAR */
        $(window).scroll(function () {
            if ($(this).scrollTop()> 150) {
                $('.header').css ("background-color", "rgba(0,0,0,0.6)")
            } else {
                $('.header').css ("background-color", "transparent")
            }
        });
    </script>    
    
</body>	
</html>