<?php

$file="data.json";


if(isset($_POST['nome']) && isset($_POST['mail'])){

    var_dump(json_encode($_POST, true));
    
    file_put_contents($file, json_encode($_POST));   

}

?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>esame_marco_melchiorri</title>
        
        <style>
            

            #form{
                margin: auto;
                width: 500px;
                
            }
        </style>

    </head>
    <body>
        
            
            <form id="form" method="post">
              
                <label for="nome">Nome</label> <input type="text" name="nome" id="nome" >
                
                <label for="mail">Mail</label> <input type="email" name="mail" id="mail" >
                
                <div id="div_1">
                    maggiorenne<select id="magg">
                        <option>si</option>
                        <option>no</option>
                    </select>
                </div>
                
                </select>
                    <div id="button">
                        <input type="submit" value="submit" >
                        
                        <input type="reset" value="reset">
                    </div>
            </form>
       

    </body>


<script type="text/javascript">
    
    controlla_mail = function (event){
        console.log(controlla_mail)
        
        var mail=document.getElementById("mail").value;
        
        var i=0;
        
        var startWrite = false;
        
        var domain = '';
        
        for(i=0;i<mail.length;i++){
            if(mail[i]=="@"){
                startWrite = true;
            }
            
            if(startWrite == true){
                domain += mail[i];
            }
            
            
        }
        
        console.log(domain);
        
        
        if(domain=="@gmail.com" || domain=="@hotmail.com" || domain=="@email.com" || domain=="@me.com"){
            alert("mail corretta");
        }else{
            alert("mail non corretta")
            event.preventDefault();
        }
     
    }
    
    document.addEventListener('submit', controlla_mail)
        
        /*var pos= mail.search("@");
        
        console.log(pos);
        
        console.log(mail.length);
        
        var sub_string=mail.substring(pos,mail.length);
        
        console.log(sub_string);
        
        if(sub_string=="@gmail.com" || sub_string=="@hotmail.com" || sub_string=="@email.com" || sub_string=="@me.com"){
            alert("mail corretta");
        }else{
            alert("mail non corretta")
            controlla_mail.preventDefault()
        }
        
    }
    }
                )
    */
    
</script>

</html>