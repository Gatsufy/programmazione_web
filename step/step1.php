<?php

session_start();

$nome="";

if(!isset($_SESSION['nome'])){
    $_SESSION['nome']="";
}

if(!isset($_POST['nome'])){
    $nome=$_SESSION['nome'];
    $_POST['nome']=$_SESSION['nome'];
}

?>

<title>esame step</title>

<form id="form_1" action="step2.php" method="post">
    
    
    nome<input type="text" value="<?=$nome ?>" name="nome" id="nome">
    
    <input type="submit" value="step2">
    
    <a href="index.php">back</a>
    
</form>

<button onclick="hide_footer()">hide_footer</button>

<footer id="footer">
    <?php
    
    var_dump($_SESSION);
    
    var_dump($_POST);
    
    ?>
</footer>

<script> 
    
    function hide_footer(){
        
        var footer=document.getElementById("footer");
        
        if(footer.style.display!="none"){
            footer.style.display="none";
        }else{
            footer.style.display="inline";
        }
    }
    
</script>



