<?php

$number = 77;

if ($number >= 0) {
    $message = "The input number is even number.";
} else {
    $message =  "The input number is odd number.\n";
}
echo $message
    
?>

<!doctype html>
<html lang="en">

<head>
    <title>even or odd</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-dark text-center h1"> Products </h1>
            </div>
            <div class="offset-4 col-4">
                <form action="invoice.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="products">Products</label>
                        <select name="product" id="products" class="form-control">
                            <option value="Laptop">Laptop</option>
                            <option value="Tv">Tv</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Tshirt">Tshirt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="City">City</label>
                        <select name="city" class="form-control" id="City">
                            <option value="Cairo">Cairo</option>
                            <option value="Alex">Alex</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button name="sale" class="btn btn-dark rounded">Buy Now!</button>
                        <button name="cart" class="btn btn-dark rounded">Add To Cart!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="contianer">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center text-danger">
                    Enter the Number
                </h1>
            </div>
            <div class="col-4 offset-4">
                <form method="post">
                    <div class="form-group">
                        <input type="number" name="Number" class="form-control" placeholder="Please Enter the Number" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark rounded"> show the answer </button>
                    </div>
                </form>
                <?php 
                if(isset($number)){
                    echo "<div class='alert alert-$number'> $number </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>