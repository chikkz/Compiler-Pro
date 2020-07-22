<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Compiler Pro</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      Compiler Pro
    </div>
    <form method="post">
    Enter The Code:<br>
    <!-- <input type="textarea" name="textdata"><br> -->
    <textarea name="textdata" cols="40" rows="15">
      
    </textarea>
   <input type="submit" name="submit" id="submit" value="Submit" />
  <a href="run.php" class="btn btn-dark">Run</a>
    
  </form>
  </div>
</body>
</html>
<style>
  div{
   
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
  }
</style>

<h2>Output:</h2>
<?php
     
     if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
// $fp = time().'C:\Users\Dell\Desktop\test.py';
 $fp = fopen('C:\Users\Dell\Desktop\test.py', 'a');

fwrite($fp, $data);
fclose($fp);
    $command = escapeshellcmd('C:\Users\Dell\Desktop\test.py');
    $output = shell_exec($command);
    echo '<span style="color: white; font-size: 20px;">'.$output;


}         

?>

 