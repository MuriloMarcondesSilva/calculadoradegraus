<html>
 <head>
  <title>Calculadora de Converção</title>
 </head>
 <body>

 <form action=ae method="get">
 <p>
  Digite 1 para: Celsius para Farenheit<br />
  Digite 2 para: Farenheit para Celsius<br />
  <input class=box1 type="number" name="opt" /><br />
</p>
<p class="temp">
  Temperatura:</p>
  <br>
  <p>
  <input type="number" name="number" /><br />
  <input class= "box" type="submit" name="submit" value="Calcular" />
  </p> 
 </form> 

 
 <?php
  $op = $_GET['opt'];
  $temp = $_GET['number']; 
  
  function CtoF($temperatura){
   return ($temperatura*9/5) + 32;
  }
  function FtoC($temperatura){
   return ($temperatura-32)*5/9;
  }
 ?>
 <p class= resposta>
     <?php
        if($op==1){
         echo "Temperatura em Farenheit: ".CtoF($temp);
        }
        elseif($op==2){
         echo "Temperatura em Celsius: ".FtoC($temp);
        }
        else{
         echo "Opção inválida";
        }
     ?>
 </p>

<style>
    p{
        color : rgb(255, 217, 0);
        font-size: 40px;
        align-items: center;
        text-align: center;
        justify: center;
        margin-top:16%;
    }
    .resposta{
        color : rgb(255, 217, 0);
        font-size: 30px;
        align-items: center;
        text-align: center;
        justify: center;
        margin-top:-10%;
    }
    body{
        background-color:black
    }
    .temp{
        margin-top: -10;
        margin-left: -20;
    }
    .box{
        background-color:black;
        font-size: 40px;
        border: rgb(255, 217, 0);
        border-radius:30px;
        margin-right:0;
        margin-top: -250;
        color:rgb(255, 217, 0);
    }
    input{
        border-radius:30px;
        font-size: 30px;
        margin-top: -310;
        margin-left: 0;
        background-color:Grey;
    }
    .box1{
        border-radius:30px;
        font-size: 30px;
        margin-top: 30;
        margin-left: 0;
    }
</style>
 </body>
</html>
