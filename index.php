<?php 
    include_once 'Model/Usuario.php';
 ?>

<html>
    <head>
        <title>Arvore Binária</title>
        <style>
            * { 
               margin: 0; 
               padding: 0;
               font-family: arial;
            } 
            
            p { 
               margin-left: 25px; 
               color: blue;
            }
            
            h4 { 
               margin-left: 25px; 
               color: #0000BB;
            }
        </style>
    </head>
    
    <body>
        <?php 
            
            $usuario1 = new Usuario(1,"Usuario 1", null, null); 
            $usuario2 = new Usuario(2,"Usuario 2", 200, 1); 
            $usuario3 = new Usuario(3,"Usuario 3", 100, 1); 
                    
            
            echo "<h4>Usuários do Sistema e Seus Pontos</h4>";
              
                echo "<br>";
              
                if($usuario1->getParent() == null) { 
                    echo "<p>".$usuario2->getPontos(). " Pontos || ".$usuario1->getUsuario()
                            ."|| ".$usuario3->getPontos()." Pontos</p>";
                } else { 
                     $usuario1->exibeArvoreUsuarios();
                }
                
                echo "<br>";
                if($usuario2->getParent() == null) { 
                    echo "<p>".$usuario1->getPontos(). " Pontos || ".$usuario2->getUsuario()
                            ."|| ".$usuario3->getPontos()." Pontos</p>";
                } else { 
                     $usuario2->exibeArvoreUsuarios();
                }
                
                echo "<br>";
                if($usuario3->getParent() == null) { 
                    echo "<p>".$usuario1->getPontos(). " Pontos || ".$usuario3->getUsuario()
                            ."|| ".$usuario2->getPontos()." Pontos</p>";
                } else { 
                     $usuario3->exibeArvoreUsuarios();
                }
                
                
            
        ?>

       
               
    </body>
</html>