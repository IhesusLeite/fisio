<?php
include_once "conexao.php";
$sql = mysqli_query($con, "SELECT * FROM consulta") or die( 
  mysqli_error($con) 
);
?>
<html>
    <head>
        <title>Fisio</title>
        
        <meta charset=UTF-8>
        
        <style type="text/css">
            .body{
                margin: 0;
            	padding: 0;
            }
            .clear{
                clear: both;
            }
            .logo{
                color:rgb(13, 148, 137);
            }
            .menu {
                height: 18%;
                padding: 1%;
                font-size: 30px;
            }
                a:hover{
                    text-decoration: none;
                    float: right;
                    top: 25px;
                    color: black;
                }
                .lkmenu{
                    text-decoration: none;
                    padding: 18px;
                    float: right;
                    top: 25px;
                    color: rgb(8, 116, 116);   
                } 
                li{
                    display: inline;
                    margin: 1,1,1,1;
                    text-align: center;
                }

                .linha{
                    width: 65%;
                    height: 3px;
                    background-color: rgb(8, 116, 116);
                    float: right;
                }

                .pedido {
                    width: 90%;
                    height: auto;
                    border: 2px solid white;
                    border-radius: 80px 0px 80px 0px;
                    color: white;
                    margin: 0px auto;
                    background-color:#1C527C;
                    box-sizing: border-box;
                    padding: 68px 28px; 
                }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    </head>

    <body>
        
        <p><h3>Agendamento</h3></p>
        <div class="logo"><p><h1>FISIOTERAPEUTICO</h1></p>
        </div>
        <div class="menu">

            <ul>  
                
               <li><a href="agendados.php" class="lkmenu">Consultas agendadas</a></li>
                <li><a href="agendamento.php" class="lkmenu">Agendar Consulta</a></li>
                <li><a href="serviços.php" class="lkmenu">Serviços</a></li>
				<li><a href="index.php" class="lkmenu">Home</a></li>
            </ul>
            <div class="clear"></div>
        </div>
      
            <div class="pedido">
                <h1>Lista dos agendados</h1>
                <table>
                 
                     
                     <table>
                          <thead>
                             
                                 <thead style="color: white;">
                                    <?php
                                        while($linha = mysqli_fetch_assoc($sql)) {
                                    ?>
                                   <tr>
                                     <th scope="col"><?php echo $linha['codigo']; ?></th>
                                     <th scope="col"><?php echo $linha['nome']; ?></th>
                                     <th scope="col"><?php echo $linha['telefone']; ?></th>
                                     <th scope="col"><?php echo $linha['wdata']; ?></th>
                                     <th scope="col"><?php echo $linha['horario']; ?></th>
                                   </tr>
                                   <?php
        
                                   }
?>
                          </thead>
                          
                         <thead>
                    
            </div>
      </div>
    </body>
</html>
