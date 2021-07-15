<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRIME NUMBERS</title>
    <link rel = "stylesheet" type = "text/css" href = "Style.css" />
</head>
<body>
<h3>PRIME NUMBERS</h3>
<p><?php 
    for($i = 1; $i <= 2000; $i++){  
        $count1 = 0; 
        for($x = 1; $x <= $i; $x++){ 


              if($i % $x == 0){ 
                    $count1++;
              }
        }
      if($count1 == 2){
            echo "$i, ";
      }
  }
?></p>
<hr>
<p><a href= "number_series.php">CLICK HERE TO GO BACK TO FIBONACCI SERIES</a></p>
<p><a href= "info.php">CLICK HERE TO SEE INFORMATION ABOUT PRIME NUMBERS</a></p>

<h2>-Naima H.</h2>
</body>
<footer>&copy; Copyright <?php echo date("Y"); ?> Naima H.</footer>
</html>
