<?php

session_start();

if(isset($_POST['email'])){
    $_SESSION['email']=$_POST['email'];
}

echo $_POST['email'];

echo " ";

echo $_POST['nome'];


?>

<title>esame step</title>

<a href="step2.php">back</a>

<a href="index.php">save</a>

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