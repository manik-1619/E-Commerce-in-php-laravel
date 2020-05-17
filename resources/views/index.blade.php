<!doctype html>
<html>
<head>
<meta charset = "utf-8">  
<title> E-Commerce site </title>
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<link rel = "stylesheet" href = "{{asset('style.css')}} ">

</head>
<body>
<div class = "wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class = "container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search products" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class = "fa fa-search"></i></button>
    </form>
  </div>
  </div>
</nav>

<div class = 'container margin-top-20'>
	<div class= "row">
		<div class = "col-md-4">
          <div class="list-group">
           <a href="#" class="list-group-item list-group-item-action">First item</a>
           <a href="#" class="list-group-item list-group-item-action">Second item</a>
           <a href="#" class="list-group-item list-group-item-action">Third item</a>
           <a href="#" class="list-group-item list-group-item-action">Fourth item</a>
           <a href="#" class="list-group-item list-group-item-action">Fifth item</a>
           <a href="#" class="list-group-item list-group-item-action">Sixth item</a>
           <a href="#" class="list-group-item list-group-item-action">Seventh item</a>
           <a href="#" class="list-group-item list-group-item-action">Eighth item</a>
           <a href="#" class="list-group-item list-group-item-action">Ninth item</a>
           <a href="#" class="list-group-item list-group-item-action">Tenth item</a>
           <a href="#" class="list-group-item list-group-item-action">Eleventh item</a>
           </div>
           </div>
          
		<div class = "col-md-8">
			<h2>Welcome to our online Shopping</h2>
		<div class = "widget">
			<h3>Featured products</h3>
			<div class = "row">
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-500</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-500</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-500</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-500</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-500</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-500</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-500</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-500</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Samsung</h4>
						    <p class="card-text">Taka-700</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Symphony</h4>
						    <p class="card-text">Taka-800</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
				<div class ="col-md-3">
					<div class="card" >
						  <img class="card-img-top feature-img" src="{{asset('images/products/' .'samsung.webp')}}" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Oppo</h4>
						    <p class="card-text">Taka -900</p>
						    <a href="#" class="btn btn-outline-warning">add to cart</a>
  </div>
</div>

				</div>
          </div>
		</div>

		</div>
		</div>
		</div>	

<footer class = "footer-bootom">
<p class = "text-center">&copy;All Rights reserved 2020 | E-Commerce Site developed by jobit-bd.com </p>
  

</footer>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





 
</body>
</html>