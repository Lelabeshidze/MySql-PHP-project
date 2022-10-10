<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Scandiweb Assignment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <h1>Product List</h1>
  <a href="/addproduct" type="button" class="btn btn-primary">Add Product</a>
  <!-- <form method="post" action="/products/delete">
    <input type="hidden" name="id" value="<?php echo $product['SKU'] ?>"/>
    <button type="submit" class="btn btn-primary">Mass Delete</button>
  </form> -->
  <div>
    <?php foreach ($products as $product) { ?>
      <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $product['SKU'] ?></li>
          <li class="list-group-item"><?php echo $product['Name'] ?></li>
          <li class="list-group-item">$<?php echo $product['Price'] ?></li>
          <form method="post" action="/products/delete">
            <input type="hidden" name="id" value="<?php echo $product['SKU'] ?>" />
            <button type="submit" class="btn btn-primary">Mass Delete</button>
          </form>
        </ul>
        <div class="card-footer">
          Card footer
        </div>
      </div>
    <?php } ?>
  </div>
</body>

</html>