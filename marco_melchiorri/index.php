<?php

$data="data.json";

$file= file_get_contents($data);

$json_data = json_decode($file, true);


$rand1= rand(0, 255);

$rand2= rand(0, 255);

$rand3=rand(0,255);

var_dump($rand1);

var_dump($rand2);

var_dump($rand3);



?>

<html>
    
    <head>
        
        <meta charset="UTF-8">
        
        <title>esame_marco_melchiorri</title>
        
        <style>
            

            header h1{
                color: rgb(<?php echo $rand1?>,<?php echo $rand2?>,<?php echo $rand3?>);
                border: 1px solid;
                
            }
            #div_1{
                margin: auto;
                width: 500px;
                
            }
            
            footer {
                    border:1px solid;
                }
            
            @media (max-width: 1000px){
                
                #div_1{
                margin: auto;
                width: 400px;
                
            }
            
            ul li{
                
             list-style-type:none;
             border:1px solid;
             margin-bottom:10px;
            }
                
            }
            
            @media (min-width: 1001px){
                #div_1{
                    margin: auto;
                    width: 900px;
                                                            
                }
                
                ul li{
                    border:1px solid;
                    display:inline;
                    
            }
            
            }
        </style>
        
        <script type="text/javascript">
            
                        
            function change_footer(){

                var footer=document.getElementById('footer');
                
                var a=document.getElementById('a');
                
                var rand_num_1= Math.floor(Math.random()*255);
                
                var rand_num_2= Math.floor(Math.random()*255);
                
                var rand_num_3= Math.floor(Math.random()*255);
                
                console.log(rand_num_1);
                
                console.log(rand_num_2);
                
                console.log(rand_num_3);
                
                footer.style.border= "1px solid rgb("+rand_num_1+","+rand_num_2+","+rand_num_3+")" ;
                
                a.style.color= "rgb("+rand_num_1+","+rand_num_2+","+rand_num_3+")";
                
            }
            
                function hide_footer(){
        
                        var footer=document.getElementById("footer");
        
                            if(footer.style.display!="none"){
                                footer.style.display="none";
                            }else{
                                footer.style.display="inline";
                    }
                }
            
        </script>
        
        
    </head>
    
    <body>
        
        <div id="div_1">
            <header>
              
            <h1>
                Example.com
            </h1>
            </header>
                                         
            <nav>
                MENU
            </nav>
            
            <main>
                
            
            <ul>
                 <?php foreach ($json_data as $jfile):?>
 
                    <li><a href="<?php $jfile['link']?>"><?php echo $jfile['desc']?></a></li>
                        
                 <?php endforeach; ?> 
            </ul>
            
            
                <h1>HOME PAGE</h1>
                CIAO CIAO CIAO CIAO CIAO CIAO CIAO CIAO
            
            </main>
        
    </body>
    
    
    <footer id="footer">
        <p>
            <a id="a" href="">Copyright Example.Com </a>
        </p>
        
    </footer>
    
    <button onclick="hide_footer()">MENU</button>
   
    </div>  
    
</html>
