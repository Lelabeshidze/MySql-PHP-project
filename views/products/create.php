<?php

$errors = [];
$SKU = '';
$Name = '';
$Price = '';
$Size = '';
$Weight = '';
$Height = '';
$Length = '';
$Width = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Product Add</h1>
    <?php
    if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <div><?php echo $error ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label>SKU</label>
            <input type="number" class="form-control" name="SKU">
        </div>
        <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="Name">
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" class="form-control" name="Price">
        </div>
        <!-- <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">DVD</option>
            <option value="2">Furniture</option>
            <option value="3">Book</option>
        </select> -->

        <div class="mb-3">
            <label>Size</label>
            <input type="number" class="form-control" name="Size">
        </div>
        <div class="mb-3">
            <label>Weight</label>
            <input type="number" class="form-control" name="Weight">
        </div>
        <div class="mb-3">
            <label>Height</label>
            <input type="number" class="form-control" name="Height">
        </div>
        <div class="mb-3">
            <label>Length</label>
            <input type="number" class="form-control" name="Length">
        </div>
        <div class="mb-3">
            <label>Width</label>
            <input type="number" class="form-control" name="Width" value="<?php echo $Width ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>