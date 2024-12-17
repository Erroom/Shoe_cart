<?php
include("../includes/connect.php");
if (isset($_POST['insert_product'])) {
  $product_title = $_POST['product_title'];
  $product_description = $_POST['product_description'];
  $product_keywords = $_POST['product_keywords'];
  $product_category = $_POST['product_category'];
  $product_brands = $_POST['product_brands'];
  $product_image1 = $_POST['product_image1'];
  $product_image2 = $_POST['product_image2'];
  $product_image3 = $_POST['product_image3'];
  $product_price = $_POST['product_price'];
  $product_status = 'true';

  //acessing images
  $product_image1 = $_FILES['product_image1']['name'];
  $product_image2 = $_FILES['product_image2']['name'];
  $product_image3 = $_FILES['product_image3']['name'];

  //accessing image temp name
  $temp_image1 = $_FILES['product_image1']['tmp_name'];
  $temp_image2 = $_FILES['product_image2']['tmp_name'];
  $temp_image3 = $_FILES['product_image3']['tmp_name'];
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";
  //checking empty condition
  try {

    // Check if any required fields are empty

    if (

        $product_title == '' || $product_description == '' || $product_keywords == '' || $product_category == '' ||

        $product_brands == '' || $product_price == '' || $product_image1 == '' || $product_image2 == '' || $product_image3 == ''

    ) {

        throw new Exception('Please fill all the available fields');

    }


    // Attempt to move uploaded files
    echo "<script>alert('" . $temp_image1 . "');</script>";
    if (

      !move_uploaded_file($_FILES['image1']['tmp_name'], "./product_images/$product_image1") ||

      !move_uploaded_file($_FILES['image2']['tmp_name'], "./product_images/$product_image2") ||

      !move_uploaded_file($_FILES['image3']['tmp_name'], "./product_images/$product_image3")

  ) {

      throw new Exception('Error uploading files');

  }


    // If everything is successful

    echo "<script>alert('Files uploaded successfully');</script>";


} catch (Exception $e) {

    // Catch any exceptions and display the error message

    echo "<script>alert('" . $e->getMessage() . "');</script>";

    exit();

}
  // insert query
  $insert_products = "INSERT INTO products (product_title,product_description,product_keywords,
  category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) 
   VALUES ('$product_title','$product_description','$product_keywords','$product_category','$product_brands',
   '$product_image1', '$product_image2', '$product_image3','$product_price',NOW(),'$product_status')";

  $result_query = mysqli_query($con, $insert_products);
  if ($result_query) {
    echo "<script>alert('Successfully inserted the products')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Product</title>
  <!-- bootstrap Css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- font awesomelink -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css link -->
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">
  <div class="container mt-3">
    <h1 class="text-center fw-bold">Insert Products</h1>
    <br>
    <!-- form -->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-label">Product title</label>
        <input type="text" name="product_title" id="product_title" class="form-control"
          placeholder="Enter product title" autocomplete="off" required="required">
      </div>
      <br>
      <!-- description-->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="description" class="form-label">Product description</label>
        <input type="text" name="product_description" id="product_description" class="form-control"
          placeholder="Enter product description" autocomplete="off" required="required">
      </div>
      <br>
      <!-- Keywords-->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-label">Product keywords</label>
        <input type="text" name="product_keywords" id="product_keywords" class="form-control"
          placeholder="Enter product keywords" autocomplete="off" required="required">
      </div>
      <br>

      <!-- categories-->
      <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_category" id="" class="form-control">
          <option value="">Select a Category</option>
          <?php
          $select_query = "SELECT * FROM categories";
          $result_query = mysqli_query($con, $select_query);
          while ($row = mysqli_fetch_array($result_query)) {
            $category_title = $row['category_title'];
            $category_id = $row['category_id'];
            echo "<option value='$category_id'>$category_title</option>";
          }
          ?>
        </select>
      </div>
      <br>
      <!-- brands-->
      <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_brands" id="" class="form-control">
          <option value="">Select Brands</option>
          <?php
          $select_query = "SELECT * FROM brands";
          $result_query = mysqli_query($con, $select_query);
          while ($row = mysqli_fetch_array($result_query)) {
            $brand_title = $row['brand_title'];
            $brand_id = $row['brand_id'];
            echo "<option value='$brand_id'>$brand_title</option>";
          }
          ?>

          <!-- <option value>Select Brands</option>
  <option value="">Air jordan</option>
  <option value="">Nike</option>
  <option value="">Adidas</option>
  <option value="">Puma</option>
  <option value="">Skechers</option>
  <option value="">Crocs</option>
  <option value="">Reebook</option>
  <option value="">Duke</option>
  <option value="">Fila</option>
  <option value="">Goldstar</option> -->
        </select>
      </div>
      <br>

      <!--image1-->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image1" class="form-label">Product image 1</label>
        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
      </div>
      <br>
      <!--image2-->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image2" class="form-label">Product image 2</label>
        <input type="file" name="product_image2" id="product_image1" class="form-control" required="required">
      </div>
      <br>
      <!--image3-->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_image3" class="form-label">Product image 3</label>
        <input type="file" name="product_image3" id="product_image1" class="form-control" required="required">
      </div>
      <br>
      <!--Price-->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_Price" class="form-label">Product keywords</label>
        <input type="text" name="product_price" id="product_price" class="form-control"
          placeholder="Enter product price" autocomplete="off" required="required">
      </div>
      <br>
      <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" class="btn-info mb-3 px-3" value="Insert Products">
    </form>
  </div>
  </div>
  <br>
</body>

</html>