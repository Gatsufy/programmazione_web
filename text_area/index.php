<?php

$file="data.txt";

if(isset($_POST['txta'])){
    $nome=$_POST['txta'];
    file_put_contents($file, $nome . PHP_EOL,FILE_APPEND);
}else{
    $nome= file_get_contents($file);
}

?> 
<html>
    <head>
        <meta charset="UTF-8">
        <title>esame_text_area</title>
        <style>
            #main{
                margin: auto;
                width: 500px;
            }
            #txta{
                width: 500px;
                font-family: Arial;
                font-size: 14px;
            }
        </style>
        
        <script>
            //la funzione che è al suo interno sarà eseguita quando la pagina è caricata tutta
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById("txta").style.fontSize = '14px';
            });
            function aumenta(){
                var font_size=document.getElementById("txta").style.fontSize; //16px
                font_size = font_size.replace('px', '');//16
                font_size = Number(font_size);
                if(font_size+2 > 20){
                    return;
                }
                font_size = font_size + 2;
                document.getElementById("txta").style.fontSize=font_size+"px";
            }
            function riduci(){
                var font_size=document.getElementById("txta").style.fontSize; //14px
                font_size = font_size.replace('px', '');//14
                font_size = Number(font_size);
                if(font_size-2<=0){
                    return;
                }
                font_size = font_size - 2;
                document.getElementById("txta").style.fontSize=font_size+"px";
                
            }
        </script>
    </head>
    <body>
        <div id="main">
            <form id="text_area" method="post" name="txt">
                        <input type="button" value="+" onclick="aumenta()">
                        <input type="button" value="-" onclick="riduci()">
                <textarea rows="10" id="txta" name="txta" ><?= $nome ?></textarea>
                     <input type="submit" value="salva">
            </form>

        </div>
    </body>
</html>



