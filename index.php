<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="dist/output.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body >
  <h1 class="text-2xl
 font-bold underline px-2.5	bg-green-100  font-mono">
   Harry Potter Characters! </h1>
  <div >
     <form action="index.php" method="post">
        <div class="main-conteiner">
        <input type="text" name ="character_name" class="input-class border-solid border-2 border-indigo-600 ..."  placeholder="Enter Character" >
          <input type="submit" name="submit"  value = "search" id="button-addon1" placeholder="Search" class="input-class border-solid border-2 border-indigo-600 ...  bg-sky-500 hover:bg-sky-700 ... " >
          
          <?php 
if(isset($_POST['submit'])){

$character = $_POST['character_name'];
require 'pdo.php';
require 'api.php';

foreach($data as $item){
    $name = $item['name'];
    $actor = $item['actor'];
    $house = $item['house'];
    $avatar = $item['image'];
    if($character === $name){
        echo "<p class='decoration-solid font-bold'> $name - $actor - $house </p>" .'<br>';
        echo "<img src=$avatar>" ;
        

        
       require 'bind.php';
    }
} 
} 
?> 

        </div>
      </form>
  </div>
</body>

</html>


      


        
       
       








    
     
   

        




            
            
           
               
           

    

 











 