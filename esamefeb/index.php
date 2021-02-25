<html>
<head>
    <title>Feb 2018</title>
</head>
<body>
    
    <form id="form" method="post">
        <div id="formContent">
  
        <input type="submit" id="send" value="SEND" >
        <input type="button" id="add" value="ADD ROW" onclick="addrow();"> 
        <br><br>
      
       
        <?php
           if(isset($_POST["values"])){
               $sum=0;
               foreach($_POST["values"] as $value)
                   $sum+=$value;
               echo "<p>The sum is: $sum</p>";
           }        
        ?>   
    </form>

    <script type="text/javascript">
        var i=0;  
            function addrow(){
                var formContent = document.getElementById("formContent");
                var input = document.createElement("input");
                //var br = document.createElement("br");
                //formContent.appendChild(br);
                var p = document.createElement("p");
                formContent.appendChild(p);
                p.innerHTML = "Value "+i;
                i++;
                input.setAttribute("type","number");
                input.setAttribute("name","values[]");
                input.setAttribute("value","<?php $_POST ?>")
                formContent.appendChild(input);
       }         
       
    </script>

</body>
</html>
