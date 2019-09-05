<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Inventory Management System</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>

	<?php include_once("./template/header.php") ?>
<br/><br/>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card mx-auto">
			  <img src="./img/user.png" style="width: 60%" class="card-img-top mx-auto" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Profile Info</h5>
			    <p class="card-text"><i class="fa fa-user">&nbsp</i>Thilini Bandara</p>
			    <p class="card-text"><i class="fa fa-user">&nbsp</i>Admin</p>
			    <p class="card-text">Last login:  xxxx-xx-xx</p>
			    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp</i>Edit Profile</a>
			  </div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="jumbotron" style="width: 100%,height: 100%">
				<h1>Welcome Admin,</h1>
				<div class="row">
					<div class="col-sm-6">
						<iframe src="http://free.timeanddate.com/clock/i6x7v6d5/n389/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
					</div>

					<div class="col-sm-6">
						<div class="card" style="width: 18rem;">
						  <div class="card-body">
						    <h5 class="card-title">New orders</h5>
						    <p class="card-text">Here you can make invoices and create new orders.</p>
						    <a href="#" class="btn btn-primary">New orders</a>
						  </div>
						</div>
					</div>
					
				</div>

			</div>
		</div>
	</div>
</div>
<p></p>
<p></p>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
						  <div class="card-body">
						    <h5 class="card-title">Categories</h5>
						    <p class="card-text">Here you can add and manage categories.
						    </p>
						    <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary"><i class="fa fa-add"></i>Add</a>
						    <a href="#" class="btn btn-primary"><i class="fa fa-manage"></i>Manage</a>
						  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
						  <div class="card-body">
						    <h5 class="card-title">Brands</h5>
						    <p class="card-text">Here you can add and manage Brands
						    </p>
						    <a href="#"data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
						    <a href="#" class="btn btn-primary">Manage</a>
						  </div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
						  <div class="card-body">
						    <h5 class="card-title">Products</h5>
						    <p class="card-text">Here you can add and products
						    </p>
						    <a href="#" data-toggle="modal" data-target="#form_product" class="btn btn-primary">Add</a>
						    <a href="#" class="btn btn-primary">Manage</a>
						  </div>
			</div>
		</div>
	</div>
</div>

</div>	
<?php include_once("./template/category.php"); ?>
<?php include_once("./template/brand.php"); ?>
<?php include_once("./template/product.php"); ?>

		
</body>
</html>