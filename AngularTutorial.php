<!DOCTYPE html>
<html>
<head>
<title>Angular Tutorial</title>

<meta charset="utf-8"> 

<!--JavaScript-->
<script src="js/basic.js"></script>
<script src="js/javascriptObject.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--CSS-->
<link rel="stylesheet" href="css/main.css">

<!--Bootstrap-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<h1 id="header1">Single Page Application (SPA) concept and Bootstrap,Angular, JavaScript, PHP and MySQL</h1>
<hr/>

<!--Title-->
<div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
</div>

<!--Content-->
<div class="row">
		<form role="form">
		  <fieldset>
			<legend>Employee information:</legend>
		  <div class="form-group">
			<label for="firstName">First name:</label>
			<input type="text" class="form-control" id="firstname">
		  </div>
		  <div class="form-group">
			<label for="firstName">Last name:</label>
			<input type="text" class="form-control" id="lastname">
		  </div>  
		  <div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" class="form-control" id="email">
		  </div>    
		  <input type="button" class="btn btn-primary pull-right" value="Add">
		  <input type="reset" class="btn btn-default pull-right" value="Clear">  
		 </fieldset>
		</form>

		<div class="container">
		  <h2>Employees</h2>
		  <p>All employees</p>
		  <table class="table table-striped">
			<thead>
			  <tr>
				<th>ID</th>
				<th>First name</th>
				<th>Last name</th>
				<th>E-mail</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>John</td>
				<td>Doe</td>
				<td>john@example.com</td>
				<td><button type="button" class="btn btn-danger">Delete</button></td>
			  </tr>
			  <tr>
				<td>2</td>
				<td>Mary</td>
				<td>Moe</td>
				<td>mary@example.com</td>
				<td><button type="button" class="btn btn-danger">Delete</button></td>
			  </tr>
			  <tr>
				<td>3</td>
				<td>July</td>
				<td>Dooley</td>
				<td>july@example.com</td>
				<td><button type="button" class="btn btn-danger">Delete</button></td>
			  </tr>
			</tbody>
		  </table>
		</div>

</div>

</body>
</html>
