<?php

$file="elementi.txt";

$data="";
if(isset($_POST['txt_area'])){
    $data=$_POST['txt_area'];
    file_put_contents($file, $data . PHP_EOL,FILE_APPEND);
}else{
    $data=file_get_contents($file);
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>append_paragraph</title>
        
        <style>
            #main{
                width: 700px;
                margin: auto;
            }
            #txt_area{
                width: 700px;
            }
                      
            #div_2 p{
                margin: 25px;
                background-color: #cecece;
                               
            }
        </style>
        
        <script> 
            function remove_p(){
                var p=document.getElementsByTagName("p");
                for(i=0;i<p.length;i++){
                    p[i].innerHTML="";
                }
            }
            
            function reset(){
                document.getElementById("txt_area").innerHTML="";
            }
        </script>
    </head>
    <body>
        <div id="main">
            <div id="div_1">
                <!--campo che identifica la form -->
                <form id="txt" name="txt" method="post" action="index.php">
                    <!--campo che identifica la text_area -->
                    <textarea id="txt_area" name="txt_area" rows="40"><?=$data?></textarea>
                    <!--campo che identifica 3 button ognuno con 1 compito -->
                    
                    <input type="submit" value="submit">
                    
                </form>
                
                <!-- submit prende il contenuto della text_area e lo appende come par del secondo div--> 
                        
                    
                
            </div>
            <!-- resetta la form -->
                        <button onclick="reset()">Reset</button>
                        <!--elimina i par nel secondo div attraverso una funzione in js -->
                        <button onclick="remove_p()">clear</button>
            <div id="div_2">
                <p id="paragraph">
                  <?php
                  if(file_exists($file) ){
                      echo file_get_contents($file);
                  }
                  ?>
                </p>
            </div>
        </div>
    </body>
</html>
