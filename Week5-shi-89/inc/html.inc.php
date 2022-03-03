<?php

function html_header($title = "Please dock marks, I hate them... thank you.")  { ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $title ?></title>
  </head>
  <body>
    <div class="container">
    <h1><?php echo $title ?></h1>

<?php

function html_footer() { ?>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php }
//product,price,quantity,grams
function html_ProductView($products)  { ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Weight</th>
    </tr>
  </thead>
  <tbody>

  <?php

    foreach ($products as $p) {
      echo '   <tr>
      <td>'.$p[0].'</td>
      <td>'.$p[1].'</td>
      <td>'.$p[2].'</td>
      <td>'.$p[3].'</td>
    </tr>';
    }

  ?>
    </tbody>
  </table>
<?php }

function html_uploadForm()  { ?>
<div class="mb-3">
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" class="form-control" name="csvUpload">
    <input type="submit" value="Upload">
  </form>
</div>

<?php }

}