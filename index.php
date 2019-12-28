<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Arademy.CS</title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top" id="mainNav">
			<div class="container">
				<a class="navbar-brand" href="#page-top">Arkademy</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
			 </button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item active">
		    <a class="nav-link" href="#">ADD <span class="sr-only">(current)</span></a>
		  </li>
		</ul>
		</div>
		</div>
		</nav>
		</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<body>
	<?php
include"conf/koneksi.php";
$tampil=mysqli_query($con,"select * from product");
	?>

<div class="container"><br><br>            
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Cashier</th>
        <th>Product</th>
        <th>Category</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php  
    		$no;
    		while ($r=mysqli_fetch_array($tampil)) {
    			echo "<tr><td>$no</td>
    						<td>$Cashier</td>
    						<td>$product</td>
    						<td>$Category</td>
    						<td>$Price</td>
    						<td>$no</td>
    						<button type='button' class='btn btn-primary'>Edit</button>
    						<button type='button' class='btn btn-warning'>Hapus</button>
    						</td>";

    		}
    	?>
    </tbody>
  </table>
</div>


</body>		 
</html>