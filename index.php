  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEstingLogin</title>
  </head>
  <body>
        <form action="index.php" method="post">
            <label>quantity:</label><br>
            <input type="text" name="quantity">
            <input type="submit" value="total">
            fdghiusrngsun
        </form>
  </body>
  </html>
  <?php
          $item="pizza";
          $prise = 5.99;
          $quantity=$_POST["quantity"] ;
          $totel =null;
  
          $totel= $quantity * $prise;

      echo"You have ordered {$quantity} x {$item}/s <br>";
      echo "Your total is:\${$totel}";
  ?>   