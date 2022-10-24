<?php

include 'database_connection.php';
include 'function.php';

if(is_user_login())
{
	header('location:issue_book_details.php');
}

include 'header.php';



?>

	<div class="container w-25 d-flex justify-content-center align-items-center  ">
	
		<div class="container border bg-white text-dark shadow p-0 bg-white rounded">

			<div class="card text-center" style="width: 18rem;" >
			
				<img class="card-img-top" src="asset/images/1657116210710.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Mohammed Danish</h5>
					<p class="card-text">Developer</p>
					<a href="#" class="btn btn-primary">View Portfolio</a>
				</div>

			</div>
		</div>
	</div>


<?php

include 'footer.php';

?>



