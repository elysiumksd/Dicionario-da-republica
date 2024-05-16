<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flipbook</title>
  <style>
      #menu {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 200px;
            height: 100%;
            background-color: #084d6e;
            color: white;
            padding-top: 50px;
            text-align: center;
            z-index: 1000;
        }

        #menu a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }

        /* Estilos do botão de abrir o menu */
        #openMenu {
            border-radius: 7px;
            border-color: whitesmoke;
            background-color:  whitesmoke;
            color: black;
            padding: 10px 20px;
            cursor: pointer;
            z-index: 1001;
            margin-left: -230px;
        }

        /* Estilos do link do menu quando o mouse passa sobre ele */
        #menu a:hover {
            background-color: whitesmoke;
            color: #084d6e;
        }
   body{
            background-color: #cdcdcd;
            font-family: Arial, Helvetica, sans-serif;
            text-align: justify;
            color: white;
             margin: 0;
    padding: 0;
        }
    /* Estilos para o layout do livro */
    .page {
    width: 300px; /* ou um valor maior, dependendo do conteúdo */
    padding: 5px;
    height: 352px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);   
    color: black;
    border: 1px solid #ccc;
  
}

    .cabeça{
        width: 100%;
            text-align: center;
            background-color: #084d6e;
      color: white;
      box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.10);
        }     
        .pesquisa{
            width: 600px;
        padding: 10px;
        border-radius: 7px;
        background-color: whitesmoke;
    
        border: none;
        border-width: 0;
        }
        .botao{
        width: 800px;
        padding: 10px;
        border-radius: 7px;
        background-color: whitesmoke;
        margin-left: -330px;
        border: none;
        border-width: 0;
    }
     .botao1{
        padding: 10px;
        border-radius: 7px;
        border-color: whitesmoke;
        margin-right: -20px;
     }
     #botao1{
      padding: 10px;
        border-radius: 7px;
        border-color: whitesmoke;
     
     }
     #botao2{
      padding: 10px;
        border-radius: 7px;
        border-color: whitesmoke;
     
     }
     #album{
      width: 863px;
      margin-left: +5px;
       padding: 0.1px;
        border-radius: 7px;
        border-color: whitesmoke;
     }
     .slider-container {
            width: 300px;
            margin: auto;
            overflow: hidden;
            position: relative;
           margin-top: -400px;
            border-radius: 15px;
            margin-right: 85px;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
          
            min-width: 100%;
            box-sizing: border-box;
        }
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            cursor: pointer;
        }
        .prev {
            left: 10px;
            color: black;
        }

        .next {
            right: 10px;
            color: black;
        }
        #divisao{
    margin-top: -42px;
    margin-left: +90px;
}
.vertical-bar5 {
            background-color: #084d6e;
            width: 6px; /* Largura da barra */
            height: 8vh; 
            margin-left: +10px;
            margin-top: -20px;
        }
        
#contexto1{
    margin-top: -42px;
    margin-left: +30px;
}
#r{
  margin-right: +10px;
}
.word-of-the-day {
  text-align: justify;
  height: 290px;
    color: black;
    position: center;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 15px;
    width: 271px;
    padding: 15px;
    
    margin-top: -622px;
    margin-left: +870px;
}
.botoes{
    margin-top: -57px;
    margin-left: 1030px;
}
#mover{
    margin-left: 45px;
}

@media screen and (max-width: 1280px){
    .slider-container{
        margin-left: +873px;
    }
.botoes{
    margin-left: +1035px;
}
}

@media screen and (max-width: 885px){
    .cabeça{
        width: 100%;
          
        }

#mover{
    margin-left: +5px;
}
.page {
    width: 10px; /* ou um valor maior, dependendo do conteúdo */
    padding: 5px;
    height: 240px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);   
    color: black;
    border: 1px solid #ccc;
}
.botao{
    width: 700px;
    margin-left: -87px;
}
#botao1{
    display: none;
}
.slider-container{
    display: none;
}
.word-of-the-day{
    display: none;
}
#img2{
    display: none;
}
#imaga{
    display: none;
}
}
@media screen and (max-width: 360px){
    
#img2{
    display: none;
}
#imaga{
    display: none;
}
    #bd{
    width: 50px; 
    height: 80px; 
    object-fit: cover; 
    margin-left:-10px;
    }
    #divisao{
        margin-top: +10px;
        margin-left: -2px;
    }
    .slider-container{
    display: none;
}
.word-of-the-day{
    display: none;
}
    body{
        width:100%; 
        margin: 0;
    padding: 0;
    
    }
.botao{
    width: 200px;
    margin-left: -70px;
}
#album{
    
      width: 300px;
      margin-left: +5px;
       padding: 0.1px;
        border-radius: 7px;
        border-color: whitesmoke;
     }
     #tema{
        font-size: 20px;
    }
    #img{
        width: 200px;
    }
}

@media screen and (max-width: 393px){
    .slider-container{
    display: none;
}
#img2{
    display: none;
}
#imaga{
    display: none;
}
.word-of-the-day{
    display: none;
}
    body{
        width:100%; 
        margin: 0;
    padding: 0;
    
    }
.botao{
    width: 200px;
    margin-left: -70px;
}
#album{
    
      width: 300px;
      margin-left: +5px;
       padding: 0.1px;
        border-radius: 7px;
        border-color: whitesmoke;
     }
     #tema{
        font-size: 20px;
    }
    #img{
        width: 200px;
    }
}
#img2{
    width: 250px;
       margin-left: -10px;
       margin-top: -700px;
    }
    
#imaga{
       margin-left: +500px;
       margin-top: -400px;
    }
@media screen and (max-width: 493px){
    .slider-container{
    display: none;
}
#img2{
    display: none;
}
#imaga{
    display: none;
}
.word-of-the-day{
    display: none;
}
    body{
        width:100%; 
        margin: 0;
    padding: 0;
    
    }
.botao{
    width: 200px;
    margin-left: -70px;
}
#album{
    
      width: 300px;
      margin-left: +5px;
       padding: 0.1px;
        border-radius: 7px;
        border-color: whitesmoke;
     }
     #tema{
        font-size: 20px;
    }
    #img{
        width: 200px;
    }
}
@media screen and (max-width: 393px){
    .slider-container{
    display: none;
}
#img2{
    display: none;
}
#imaga{
    display: none;
}
.word-of-the-day{
    display: none;
}
    body{
        width:100%; 
        margin: 0;
    padding: 0;
    
    }
.botao{
    width: 200px;
    margin-left: -70px;
}
#album{
      width: 300px;
      margin-left: +5px;
       padding: 0.1px;
        border-radius: 7px;
        border-color: whitesmoke;
     }
     #tema{
        font-size: 20px;
    }
    #img{
        width: 200px;
    }
    #divisao{
        margin-top: +10px;
        margin-left: -5px;
    }
}
@media screen and (max-width: 428px){
    #divisao{
        margin-top: +20px;
        margin-left: -5px;
    }
}
  </style>
</head>
<body>

<div class="cabeça"> 
 <img src="logo IILP.png" alt="" width="300" id="img">
 
    <h1 id="tema">Proverbios</h1>
    <img src="ima.png" alt=""  id="img2"><img src="imaga" alt="" width="250" id="imaga">
</div>
    

<!-- Barra de pesquisa -->

<center><input type="text" id="searchInput" class="botao" placeholder="Digite o termo de pesquisa">
<button onclick="search()" class="botao1">Pesquisar</button></center> <br>
<!-- Botões de navegação -->
<div class="botoes">
 <button class='nav-button left' onclick="$('#album').turn('previous')" id="botao1">Anterior</button>
<button class='nav-button right' onclick="$('#album').turn('next')" id="botao1">Próxima</button> 


    <a href="#">Adivinhas</a>


</div> <br>
<div id="mover"> <br><br>
<div id="album">
  <?php
  // Conectar ao banco de dados (substitua as credenciais conforme necessário)
  $conn = new mysqli('localhost', 'root', '', 'dicionario2');
  // Verificar conexão
  if ($conn->connect_error) {
      die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
  }
  
  // Consulta SQL para selecionar todos os registros da tabela
  $sql = "SELECT * FROM proverbios";
  $result = $conn->query($sql);
  
  // Se houver resultados, exibir cada linha em uma página do flipbook
  if ($result->num_rows > 0) {
      // Loop através de cada linha do resultado
      while($row = $result->fetch_assoc()) {
          // Gerar HTML para cada página
          echo "<div class='page'>";
          echo '<center><h2 id="r">' . $row['autor'] . '</h2></center> ';
         
            
          echo '<p id="r">' . $row['definicao1'] . '</p>';
          echo '<br><div class="vertical-bar5"></div>';
        


          echo '<p id="r"> ' . $row['definicao2'] . '</p>';
          echo '<br><div class="vertical-bar5"></div>';
          echo '<strong><p id="contexto1">Contexto</p></strong> <br>';

          echo '<p " id="r"> ' . $row['definicao3'] . '</p><br>';
          echo '<br><div class="vertical-bar5"></div>';
          echo ' <strong><p id="contexto1">Contexto</p></strong><br>';

           
          if (!empty($row['imagem'])) {
            echo '<center><audio controls id="audio">';
            echo ' <source src="'.$row['imagem'].'.mp3" type="audio/mp3" id="audio">';
            echo '</audio></center>';
        }
           echo '<center><strong><p>Imagem</p></strong></center> <br>';
           
               if (!empty($row['imagem'])) {
                   echo '<center><img src="' . $row['imagem'] . '" style="width: 350px; height: 80px; object-fit: cover; margin-left:-10px;" id="bd"></center>';
               }
          echo "</div> ";
      }
  } else {
      echo "0 resultados encontrados";
  }
  
  // Fechar conexão com o banco de dados
  $conn->close();
  ?>
</div>

<div class="slider-container">
    <div class="slider">
        <br>
    <div class="slide"><img src="12.jpg" alt="Imagem 2" width = 320 height=280 ></div>
        <div class="slide"><img src="13.jpg" alt="Imagem 2" width = 320 height=280 ></div>
        <div class="slide"><img src="14.png" alt="Imagem 2" width = 320 height=280 ></div>
        <div class="slide"><img src="15.jpg" alt="Imagem 2" width = 320 height=280 ></div>
        <div class="slide"><img src="angola.jpeg" alt="Imagem 2" width = 320 height=280 ></div>
        
        <div class="slide"><img src="3.jpg" alt="Imagem 4" width = 320 height=280></div>
        <div class="slide"><img src="4.jpg" alt="Imagem 5" width = 320 height=280></div>
        <div class="slide"><img src="5.jpg" alt="Imagem 1" width = 320 height=280></div>
        <div class="slide"><img src="6.jpg" alt="Imagem 2" width = 320 height=280 ></div>
        <div class="slide"><img src="7.jpg" alt="Imagem 3" width = 320 height=280></div>
        <div class="slide"><img src="8.jpg" alt="Imagem 4" width = 320 height=280></div>
        <div class="slide"><img src="9.jpg" alt="Imagem 5" width = 320 height=280></div>
        <div class="slide"><img src="10.jpg" alt="Imagem 1" width = 320 height=280></div>
        <div class="slide"><img src="11.jpg" alt="Imagem 2" width = 320 height=280 ></div>
        <!-- Adicione mais slides conforme necessário -->
    </div>
    <div class="arrow prev" onclick="prevSlide()">&#10094;</div>
    <div class="arrow next" onclick="nextSlide()">&#10095;</div>
                    </div><br>



<div class="word-of-the-day">
<center><h2>Palavra do dia</h2></center>
                                 <?php include("word_of_the_day.php"); ?> 
</div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
<script src="turn.js"></script>
<script>
    $('#album').turn({gradients: true, acceleration: true});

    function search() {
    var searchTerm = document.getElementById('searchInput').value.toLowerCase();
    var pages = document.querySelectorAll('.page');

    for (var i = 0; i < pages.length; i++) {
        var pageContent = pages[i].innerText.toLowerCase();
        if (pageContent.includes(searchTerm)) {
            // Encontrou o termo na página, navega para essa página
            $('#album').turn('page', i + 1); // +1 porque os índices começam em 0, mas as páginas no flipbook começam em 1
            return;
        }
    }
    
    // Se o termo não foi encontrado em nenhuma página
    alert("Termo não encontrado.");
}

</script>

<script>
    var currentIndex = 0;

    function showSlide(index) {
        var slider = document.querySelector('.slider');
        var totalSlides = document.querySelectorAll('.slide').length;

        if (index >= totalSlides) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides - 1;
        } else {
            currentIndex = index;
        }
        var translateValue = -currentIndex * 100 + '%';
        slider.style.transform = 'translateX(' + translateValue + ')';
    }
    function nextSlide() {
        showSlide(currentIndex + 1);
    }
    function prevSlide() {
        showSlide(currentIndex - 1);
    }
    // Adiciona transição automática a cada 3 segundos
    setInterval(function() {
        nextSlide();
    }, 3000);

</script>

<script>
    // Função para abrir e fechar o menu
    function toggleMenu() {
        var menu = document.getElementById("menu");
        if (menu.style.display === "block") {
            menu.style.display = "none";
        } else {
            menu.style.display = "block";
        }
    }

    // Adiciona um evento de clique ao botão de abrir o menu
    document.getElementById("openMenu").addEventListener("click", toggleMenu);
</script>


</body>
</html>
