<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                        
  #conteudoBranco {
    color: black;
    background-color: white; /* Define a cor de fundo como branco */
    padding: 10px; /* Ajuste o espaçamento interno conforme necessário */
    margin-bottom: 10px; /* Ajuste o espaçamento externo na parte inferior conforme necessário */
    display: block; /* Faz com que os spans se comportem como blocos, permitindo a configuração de margens */
    max-width: 66%; /* Limita a largura máxima dos spans a 70% do contêiner pai */
    margin-left: +200px;
   
    border-radius: 5px;
    
}
                .cabeça{        width: 100%;
            text-align: center;
            background-color: #0c066a;
    color: white;
      box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.10);
    
        } 
        body{     background-color: #cdcdcd;
            font-family: Arial, Helvetica, sans-serif;
            text-align: justify;
            color: white;
             margin: 0;
    padding: 0;
     
        }
        input[type="text"]{
margin-left: +200px;
width: 500px;
padding: 10px;
margin: 5px 0;
border: 1px solid #ccc;
border-radius: 3px;
}
button{  background-color:#0c066a;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    cursor: pointer;
    margin-left: +490px;
  }
  .mover{
    margin-left: +100px;
  }
  .moverq{
    margin-left: -200px;
  }
</style>
</head>
<body>
      
<div class="cabeça">
          
          <img src="logo IILP.png" alt="" width="130">
          <h1 style="font-size: 22px;">Dicionário da Republica</h1>
          </div>      
</body>
</html><?php 
include 'conexao.php';

$sql = "SELECT * FROM dicionario";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div id='conteudoBranco'>Termo: " . $row["termo"]. " - Classe Gramatical: " . $row["classe_gramatical"]. "<br>";
        echo "De: " . $row["de"]. "<br>";
        echo "Imagem: " . $row["imagem"]. "<br>";
        echo "Divisão: " . $row["divisao"]. "<br>";
        echo "Relacionado 1: " . $row["relacionado1"]. "<br>";
        echo "Relacionado 2: " . $row["relacionado2"]. "<br>";
        echo "Relacionado 3: " . $row["relacionado3"]. "<br>";
        echo "Definição 1: " . $row["definicao1"]. "<br>";
        echo "Definição 2: " . $row["definicao2"]. "<br>";
        echo "Definição 3: " . $row["definicao3"]. "<br>";
        echo "<a href='editar.php?id=".$row["id"]."'>Editar</a> | <a href='deletar.php?id=".$row["id"]."'>Deletar</a></div><br><br>";
    }
} else {
    echo "0 resultados";
}

$conexao->close();
?>
