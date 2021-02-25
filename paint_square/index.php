<?php

    $file = "data.json";
  
    $json = file_get_contents($file);
    
    $json_data = json_decode($json, true);
    
?>
<html>
   
    <head>
        
        <meta charset="UTF-8">
        
        <title>paint_square</title>
        
        <style>
            
            #main{
                margin: auto;
                height:400px;
                width: 400px;
            }
            
            #square{
                margin: auto;
                width: 400px;
                height: 400px;
                background-color: #e1e1e1;
                position: relative;
            }
        </style>
        
        <script>
            
            function remove_div(){
                
                var rand_num= Math.floor(Math.random()* document.getElementById("square").childNodes.length);
                
                var div=document.getElementById("square").childNodes[rand_num];
                               
                console.log(document.getElementById("square").childNodes.length);

                div.parentNode.removeChild(div);
                
                //console.log(rand_num);
                                
            }
            
            function change_div_color(){
                
                var rand_num_1=Math.floor(Math.random()*5);
                
                var rand_num_2=Math.floor(Math.random() *5);
                
                //console.log(rand_num_1);
                
                //console.log(rand_num_2);
                
                    var div_1=document.getElementById("square").childNodes[rand_num_1];
                    
                    var div_2=document.getElementById("square").childNodes[rand_num_2];
                                       
                if(rand_num_1!=rand_num_2){
                   
                    var div_1=document.getElementById("square").childNodes[rand_num_1];
                    
                    var div_2=document.getElementById("square").childNodes[rand_num_2];
                    
                    var temp=div_1.style.backgroundColor;
                    
                    div_1.style.backgroundColor=div_2.style.backgroundColor;
                    
                    div_2.style.backgroundColor=temp;
                    
                }else{
                    alert("numeri uguali");
                }
                    
            }
        
        
        </script>
    
    </head>
    
    <body>
        
        <div id="main">
                           
                <?php  var_dump($json_data) ?>
    
            <div id="square"><?php foreach ($json_data as $jfile):?><div id="square_div" style="position:absolute; left: <?= $jfile['x'] ?>px; top: <?= $jfile['y'] ?>px ; width: <?= $jfile['w']?>px;height: <?= $jfile['h']?>px; background-color: <?= $jfile['c'] ?>"></div><?php  endforeach; ?></div>

            <button onclick="remove_div()">remove</button>
            
            <button onclick="change_div_color()">change</button>
              
        </div>
     
    </body>
    
</html>
