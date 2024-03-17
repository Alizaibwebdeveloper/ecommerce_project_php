<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>

    <!-- Bootsrap-Link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container">

<div class="row">

<div class="col-md-6 m-auto border border-primary mt-3">

<form action="insert.php" method="post" enctype="multipart/form-data">

<div class="mb-3 ">

<p class="text-center fw-bold fs-3 text-warning">Product Detail</p>
</div>

<div>
  <label class="form-label">Product Name:</label>
  <input type="text" name="Pname" class="form-control" placeholder="Enter product name">
</div>

<div>
  <label class="form-label">Product price:</label>
  <input type="text" name="Pprice" class="form-control" placeholder="Enter product price">
</div>

<div>
  <label class="form-label">Add Product Image</label>
  <input type="file" name="Pimage" class="form-control">
</div>



<div>
  <label class="form-label">Select page category</label>
  <select class="form-select" name="pages">
  <option selected value="Home">Home</option>
  <option value="Laptop">Laptop</option>
  <option value="Bag">Bag</option>
  <option value="Mobile">Mobile</option>
</select>
  
</div>

<button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>

</form>

</div>

</div>
</div>


<!-- Fetch Data -->

<div class="container">

<div class="row">

<div class="col-md-8 m-auto">


<table class="table table-hover border my-5">

<thead>
    <th>id</th>
    <th>Name</th>
    <th>price</th>
    <th>image</th>
    <th>Category</th>
    <th>Update</th>
    <th>Delete</th>
</thead>




<tbody>

<?php

include 'config.php';

$record = mysqli_query($conn,"SELECT * FROM`tblproduct`");

 while($row = mysqli_fetch_array($record)){

echo"

<tr>

<td>$row[id]</td>
<td>$row[PNAME]</td>
<td>$row[PPRICE]</td>
<td><img src=$row[Pimage] height= '50px' width = '50px' ></td>
<td>$row[PCategory]</td>
<td></td>

</tr>

";
}

?>

</tbody>

</table>

  
</div>
</div>
</div>

</body>
</html>