<?php

$data="data.json";

$file= file_get_contents($data);

$json_data = json_decode($file, true);


?>
<html>
    <head>
        
        <meta charset="UTF-8">
        
        <title>esame_descrizione_numero</title>
        
        <style>
            ul{
                list-style-type: none;
            }
            
            #div_1{
                margin: auto;
                
                width: 500px;
            }
            
            ul li{
                padding: 10px 10px;
            }
        </style>
        
        <script>
            
            function remove_li(x){
                
                var li=document.getElementsByTagName("li");
                
                x.parentNode.remove(li);
                
                 
                numeri_rimasti = document.getElementsByClassName('number');
                
                             
                var sum = 0;
                
                for(i=0; i< numeri_rimasti.length; i++){
                    
                        sum += Number(numeri_rimasti[i].value);
                        
                }             
                
                document.getElementById("valore").innerHTML= "La somma dei valori è"+" "+ sum;
                              
                
            }
                        
        </script>
        
    </head>
    
    <body>
        
        <div id="div_1">
            
            <ul id="ul">
                <?php global $somma?>
                
                <?php foreach ($json_data as $jfile):?>
                
                    <li><?php echo $jfile['descrizione']  ?><?php echo $jfile['numero']?>
                    
                            <input type="hidden" class='number' value="<?php echo $jfile['numero'] ?>"/>
                    
                            <button onclick="remove_li(this)">elimina</button></li>
                
                            <?php
                
                            $somma=$somma+$jfile['numero'];
                    
                            ?>
                
                <?php endforeach; ?>             
                
                    <p id="valore">La somma dei numeri è <?php echo $somma?></p>
                
            </ul>
        
        </div>
        
    </body>
    
</html>
