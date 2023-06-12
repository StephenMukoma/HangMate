<?php

    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    if(isset($_POST['send'])){
	            $Name = $_POST['name'];
		            $Email = $_POST['email'];
		            $Phone = $_POST['phone'];
			            $Address = $_POST['address'];
			            $Location = $_POST['location'];
				            $Guests = $_POST['guests'];
				            $Arrivals = $_POST['arrivals'];
					            $Leaving = $_POST['leaving'];

					            $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$Name','$Email','$Phone','$Address','$Location','$Guests','$Arrivals','$Leaving') ";

						            mysqli_query($connection, $request);

						            header('location:book.php');
							        }else{
									        echo 'something went wrong try again';
										    }

?>
