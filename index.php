<?php

include 'database_connection.php';
include 'function.php';

if(is_user_login())
{
	header('location:issue_book_details.php');
}

include 'header.php';



?>

<div class="p-3 mb-1 bg-light rounded-3">

	<div class="container-fluid py-1 text-center">

		<h1 class="display-5 fw-bold">
			<span>
				<img src="asset/images/books_icon.PNG" alt="books" width="70px" height="70px">
			</span>Library Management System</h1>

		<p class="fs-4">This is simple Library Management System used for maintaining library records. This Library Managment System has been made by using PHP script, MySQL Database, Vanilla JavaScript and Bootstrap 5 framework. This is PHP Project on Online Library Management System.</p>

	</div>

</div>

<div class="row align-items-md-stretch text-center">

	<div class="col-md-6">

		<div class="h-100 p-3 text-white bg-dark rounded-3">

			<h2><span>
				<img src="asset/images/admin_icon.PNG" alt="books" width="60px" height="60px">
			</span>Admin Login</h2>
			<p></p>
			<a href="admin_login.php" class="btn btn-outline-light">Admin Login</a>

		</div>

	</div>

	<div class="col-md-6">

		<div class="h-100 p-3 bg-light border rounded-3">

			<h2><span>
				<img src="asset/images/user_icon.PNG" alt="books" width="60px" height="60px">
			</span>User Login</h2>

			<p></p>

			<a href="user_login.php" class="btn btn-outline-secondary">User Login</a>

			<a href="user_registration.php" class="btn btn-outline-primary">User Sign Up</a>

		</div>

	</div>

</div>

<?php

include 'footer.php';

?>



