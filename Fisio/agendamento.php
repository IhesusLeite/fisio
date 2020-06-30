<html>
    <head>
        <title>Fisio</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <meta charset=UTF-8>
        
        <style type="text/css">
            .body{
                margin: 0;
            	padding: 0;
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

                .linha1{
                    width: 65%;
                    height: 3px;
                    background-color: rgb(8, 116, 116);
                    float: right;
                }

                

                

                
            
                .cont img{
                     width: 700px;
                     height: 93%;
                     border-radius: 30px;
                     float: left;

                    
                }

                .pedido {
                        width: 40%;
                        height: auto;
                        background-size: cover;
                        border: 2px solid white;
                        border-radius: 80px 0px 80px 0px;
                        color: #fff;
                        background-color:#1C527C;
                        top: 95%;
                        left: 73%;
                        position: absolute;
                        transform: translate(-50%, -50%);
                        padding: 68px 28px; 
                    }
	
                .cliente {
                    
                    position: absolute;
                    top: -50px;
                    left: 10%;
                }   
                
                .linha{
                    background-color: white;
                    height: 2px;
                    width: 100%;
                    top: 5%;
                }

                .radio{
                    
                    margin-top:25px;
                }
                .clear{
                    clear: both;
                }
                .salvar{
                        
                        float: right;
                        
                }

        </style>
    </head>

    <body>
        
        <p><h3>Agendamento</h3></p><div class="logo"><p><h1>FISIOTERAPEUTICO</h1></p>
        </div>
        <div class="menu">

            <ul>  
                
               <li><a href="agendados.php" class="lkmenu">Consultas agendadas</a></li>
                <li><a href="agendamento.php" class="lkmenu">Agendar Consulta</a></li>
                <li><a href="serviços.php" class="lkmenu">Serviços</a></li>
				<li><a href="index.php" class="lkmenu">Home</a></li>
            </ul>
        </div>
             
            

        <div class="linha1">
            
        </div>

        <div class="conteudo1">

            <br>
            
            <div class="cont">
                <img src="1.jpeg">
            </div>
            
        
           

        </div>
        
        
        <form action="agendamento.php" method="POST">
        <div class="pedido">
                
                
               <h1>Cadastro da consulta</h1>
               <div class="linha"></div>
            <div class="form-row">
        
                    <div class="form-group col-md-5">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
                      </div>
                
                        
                        
                      <div class="form-group col-md-3">
                        <label for="phone">Telefone</label>
                        <input type="text" name="telefone" placeholder="Telefone" class="form-control" id="telefone">
                      </div>
            </div>
                        <div class="form-group col-md-4">
                          <label>Data da consulta</label>
                          <input type="date" name="wdata" class="form-control" id="data">
                        </div>
                                      
                          
                              
                          <div class="radio">
                              <label>Horário</label>
                          <div class="form-check">
                            <input type="radio" value="tarde" name="horario" id="horario" class="form-check-input">
                            <label >Manhã</label> 
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="tarde" id="horario" name="horario">
                            <label class="form-check-label" for="defaultCheck2" id="horario" name="horario">
                              Tarde
                            </label>
                          </div>
                        </div>

                         <div class="salvar"> 
                            <input type="submit" name="enviar" value="Agendar" class="btn btn-success">
                        </div> 
                        </div>
              
        </form>
        <?php
          include_once "conexao.php";
          if(isset($_POST['enviar'])){
              $nome = $_POST['nome'];
              $telefone = $_POST['telefone'];
              $wdata = $_POST['wdata'];
              $horario = $_POST['horario'];
              mysqli_query($con,"INSERT INTO consulta (nome, telefone, wdata, horario)VALUES('$nome', '$telefone', '$wdata', '$horario')");
              mysqli_close($con);
          }
        ?> 
    </body>
</html>