<?php

session_start();

if(isset($_POST['valore_r'])){
    $_SESSION['valore_r']=$_POST['valore_r'];
}else{
    if(!isset($_SESSION['valore_r'])){
        $_SESSION['valore_r']="";
    }
}

if(isset($_POST['valore_g'])){
    $_SESSION['valore_g']=$_POST['valore_g'];
}else{
    if(!isset($_SESSION['valore_g'])){
        $_SESSION['valore_g']="";
    }
}

if(isset($_POST['valore_b'])){
    $_SESSION['valore_b']=$_POST['valore_b'];
}else{
    if(!isset($_SESSION['valore_b'])){
        $_SESSION['valore_b']="";
    }
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>esame_r_g_b</title>
        
        <style>
            #main{
                margin: auto;
                width: 700px;
            }
            
            #div_2{
                height: 400px;
                border: 10px solid;
                background-color: rgb(<?php echo $_SESSION['valore_r'] ?>,<?php echo $_SESSION['valore_g'] ?>,<?php echo $_SESSION['valore_b'] ?>);
            }
        </style>
        
        <script>
            function change_r_b(){
                var valore_r=document.getElementById('valore_b').value;
                var valore_g=document.getElementById('valore_g').value;
                var valore_b=document.getElementById('valore_r').value;
                var div_da_cambiare=document.getElementById('div_2');
                div_da_cambiare.style.border= "10px solid rgb("+valore_r+","+valore_g+","+valore_b+")" ;
            }
        </script>
    </head>
    <body>
        <div id="main">
            <div id="div_1">
                <form id="form" method="post">
                    valore_r<input type="number" min="0" max="255" id="valore_r" name="valore_r" value="<?php echo $_SESSION['valore_r'] ?>" >
                    valore_g<input type="number" min="0" max="255" id="valore_g" name="valore_g" value="<?php echo $_SESSION['valore_g'] ?>">
                    valore_b<input type="number" min="0" max="255" id="valore_b" name="valore_b" value="<?php echo $_SESSION['valore_b'] ?>">
                    <input type="submit" value="submit">
                    <input type="button" onclick="change_r_b()" value="set">
                </form>
                    
                    
            </div>
            
            <div id="div_2">
                
            </div>
        </div>
    </body>
</html>
