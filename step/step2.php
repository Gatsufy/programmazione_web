<?php

session_start();

$nome="";

$mail="";

if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $_SESSION['nome']=$_POST['nome'];
}

if(!isset($_SESSION['email'])){
    $_SESSION['email']="";
}

if(!isset($_POST['email'])){
    $mail=$_SESSION['email'];
    $_POST['email']=$_SESSION['email'];
}



?>

<title>esame step</title>

<form id="form_2" action="final.php" method="post">    
    
    email<input type="email" value="<?= $mail ?>" name="email" id="email">
    
         <input type="hidden" value="<?= $nome ?>" name="nome" id="nome">
         
         <input type="submit" value="final">
         
         <a href="step1.php">back</a>
    
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


