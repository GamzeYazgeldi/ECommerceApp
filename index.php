<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>HW-II: Simple E-Commerce App</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top text-white ml-4">HW-II by GY</nav>
    <div class="container text-center py-5">
      <h1 class="display-4">HW-II: Simple E-Commerce App</h1>
      <p class="lead"> Welcome to HW-II</p>
    </div>

    <div class="container text-center">
      <div class= "row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card shadow-lg">
              <div class="card-header">
                <img src="/iphone.png" style="width:60px;" width="30" >
                <h4>Iphone XS</h4>
                <h1 class="my-0 font-weight-normal">TRY 10.000</h1>
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>128GB</li>
                    <li>X CPU</li>
                    <li>1920x1080</li>
                  </ul>
                  <div class="quantity mt-3 mb-4">
                    <input type="number" step="1" min="1" max="" 
                     class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric"
                     name= "quantity" required placeholder="Quantity">
                  </div>
                  <br>
                  <button class="btn
                  btn-outline-primary btn-lg btn-block">Add to Basket</button>
              </div>
            </div>
        </div>  
        <br>
        <div class="col mb-4"> 
          <div class="card shadow-lg">
            <div class="card-header">
              <img src="View/samsunga51.png" style="width:60px;" width="30" >
              <h4>Samsung A51</h4>
              <h1 class="my-0 font-weight-normal">TRY 900.25</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>256GB</li>
                  <li>Y CPU</li>
                  <li>1920x1080</li>
                </ul>
                <div class="quantity mt-3 mb-4">
                  <input type="number" step="1" min="1" max="" 
                   class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric"
                   name= "quantity" required placeholder="Quantity">
                </div>
                <br>
                <button class="btn
                btn-outline-primary btn-lg btn-block">Add to Basket</button>
            </div>
          </div>
        </div>
        <br>
        <div class="col mb-4">
          <div class="card shadow-lg">
            <div class="card-header">
              <h4>Wiskas Cat Feed</h4>
              <h1 class="my-0 font-weight-normal">TRY 240.5</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Dry</li>
                  <li>25Kg</li>
                  <li>A Package</li>
                </ul>
                <div class="quantity mt-3 mb-4">
                  <input type="number" step="1" min="1" max="" 
                   class="input-text qty text" size="4" pattern="[0-9]*" name= "quantity" 
                   inputmode="numeric" required placeholder="Quantity">
                </div>
                <br>
                <button class="btn
                btn-outline-primary btn-lg btn-block">Add to Basket</button>
            </div>
          </div>
        </div>
        <br>
        <div class="col mb-4">
          <div class="card shadow-lg">
            <div class="card-header">
              <h4>Wiskas Dog Dry Feed</h4>
              <h1 class="my-0 font-weight-normal">TRY 125.75</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>5Kg</li>
                  <li>Small Race</li>
                  <li>B Package</li>
                </ul>
                <div class="quantity mt-3 mb-4">
                  <input type="number" step="1" min="1" max="" 
                   class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric"
                   name= "quantity" required placeholder="Quantity">
                </div>
                <br>
                <button class="btn
                btn-outline-primary btn-lg btn-block">Add to Basket</button>
            </div>
          </div>
        </div>
        <br>
        <div class="col mb-4">
          <div class="card shadow-lg">
            <div class="card-header">
              <h4>Wiskas Dog Dry Feed Premium</h4>
              <h1 class="my-0 font-weight-normal">TRY 125.75</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>5Kg</li>
                  <li>Big Race</li>
                  <li>B Package</li>
                </ul>
                <div class="quantity mt-3 mb-4">
                  <input type="number" step="1" min="1" max="" 
                   class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric"
                   name= "quantity" required placeholder="Quantity">
                </div>
                <br>
                <button class="btn
                btn-outline-primary btn-lg btn-block">Add to Basket</button>
            </div>
          </div>
        </div>
        <br>
        <div class="col">
          <div class="card shadow-lg">
            <div class="card-header">
              <h4>Friends Cupa</h4>
              <h1 class="my-0 font-weight-normal">TRY 23.99</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Green</li>
                </ul>
                <div class="quantity mt-3 mb-4">
                  <input type="number" step="1" min="1" max="" 
                   class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric"
                   name= "quantity" required placeholder="Quantity">
                </div>
                <br>
                <button class="btn
                btn-outline-primary btn-lg btn-block">Add to Basket</button>
            </div>
          </div>
        </div>
        <br>
        <div class="col mb-4">
          <div class="card shadow-lg">
            <div class="card-header">
              <h4>Friends Sweat</h4>
              <h1 class="my-0 font-weight-normal">TRY 79.99</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Gray</li>
                </ul>
                <div class="quantity mt-3 mb-4">
                  <input type="number" step="1" min="1" max="" 
                   class="input-text qty text" size="4" pattern="[0-9]*" name= "quantity" 
                   inputmode="numeric" required placeholder="Quantity">
                </div>
                <br>
                <button class="btn
                btn-outline-primary btn-lg btn-block">Add to Basket</button>
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

<?php
// Sessions hold user based variables as array structure - key value format.
session_start();
// All errors reporting and displaying on screen.
error_reporting(E_ALL);

// automatically loading Db, EcommerceApp, Basket, User classes
// included classes' name are same with file name
spl_autoload_register(function ($className) {
    $exploded = explode('\\',$className);
    $namespace = $exploded[0];
    if (count($exploded) === 1){
        $class = $exploded[0];
    } else {
        $class = $exploded[1];
    }
    if ($namespace === 'App'){
        include $class.'.php';
    } elseif ($namespace === 'Product' ){
        include 'Product' . DIRECTORY_SEPARATOR .$class.'.php';
    } elseif ($namespace=== 'Payment' ){
        include 'Payment' . DIRECTORY_SEPARATOR . $class.'.php';
    } else {
        include $class . '.php';
    }
});

$app = new App\EcommerceApp();
$rawProducts = $app->product->getProductList();
$products = [];
foreach($rawProducts as $product){
    $product = (object)$product;
    switch($product->category){
        case 'cellphone':
            $products[] = new \Product\CellPhone($product);
            break;
        case 'animalFood':
            if ($product->subCategory==='dog'){
                $products[] = new \Product\DogFood($product);
            } elseif ($product->subCategory==='cat'){
                $products[] = new \Product\CatFood($product);
            }
            break;
    }
}

        
/**
 * TODO: Ürünleri listele. STATUS: Done.
 * TODO : Sepete Ekle. STATUS: Not done.
 * TODO : Sepeti Listele & Update & Delete İşlemleri. STATUS: Not done.
 * TODO : Ürün Detay Sayfası. STATUS: Not done
 */

 
?>

<style>
    .product_container {
        display: flex;
        flex-direction: row;
    }
    .product {
        flex:1;
        border:#ccc solid 1px;
        padding:15px;
        margin:15px;
    }
</style>

</body>
</html>