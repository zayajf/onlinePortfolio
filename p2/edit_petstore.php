<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My Body of work ">
	<meta name="author" content="Jonathon Zayas">
	<link rel="icon" href="../img/favicon.ico">

	<title>LIS4381 - Project 2</title>
        <?php include_once("../css/include_css.php"); ?>
</head>
<body>

	</head>
<body>

	<?php require_once("../global/nav.php"); ?>

	<div class="container">
		<div class="starter-template">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">

					<div class="page-header">
						<?php include_once("global/header.php"); ?>
					</div>

				<form id="edit_petstore" method="post" class="form-horizontal" action="edit_petstore_process.php">
				
				
				<?php


			require_once "global/connection.php";

			$pst_id_v = $_POST['pst_id'];

			$query =
				"SELECT *
				FROM petstore
				WHERE pst_id = :pst_id_p";


			$statement = $db->prepare($query);
			$statement->bindParam(':pst_id_p', $pst_id_v);
			$statement->execute();
			$result = $statement->fetch();
			while ($result != null) {
				?>
						<input type="hidden" name="pst_id" value="<?php echo $result['pst_id']; ?>"/>
								<div class="form-group">
										<label class="col-sm-3 control-label">Name:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_name" value="<?php echo $result['pst_name']; ?>" placeholder="(max 30 characters)" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">Street:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_street" value="<?php echo $result['pst_name']; ?>" placeholder="(max 30 characters)" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">City:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_city" value="<?php echo $result['pst_city']; ?>" placeholder="(max 30 characters)" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">State:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_state" value="<?php echo $result['pst_state']; ?>" placeholder="Example: FL" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">Zip:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_zip" value="<?php echo $result['pst_state']; ?>" placeholder="(5 or 9 digits no dashes)" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">Phone:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_phone" value="<?php echo $result['pst_phone']; ?>" placeholder="(10 digits no other characters)" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">Email:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_email" value="<?php echo $result['pst_email']; ?>"placeholder="Example: jdoe@gmail.com" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">URL:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_url" value="<?php echo $result['pst_url']; ?>" placeholder="Example: www.jdoe.com" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">YTD Sales:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_ytd_sales" value="<?php echo $result['pst_ytd_sales']; ?>" placeholder="Example: 100.00 (no other charcters)" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-3 control-label">Notes:</label>
										<div class="col-sm-5">
												<input type="text" class="form-control" name="pst_notes" value="<?php echo $result['pst_notes']; ?>"/>
										</div>
								</div>
								
								<?php

							$result = $statement->fetch();
						}
						$db = null;
						?>
								

								<div class="form-group">
										<div class="col-sm-5 col-sm-offset-3">
												<button type="submit" class="btn btn-primary" name="edit" value="edit">Update</button>
										</div>
								</div>
						</form>
					</div>
			</div>
			<?php include_once "global/footer.php"; ?>
		</div> <!-- end starter-template -->
 </div> 
 <!-- end container -->

	
	<!-- Bootstrap JavaScript
    ================================================== -->
    <!-- Placed at end of document so pages load faster -->
    <?php include_once("js/include_js.php"); ?>

<script type="text/javascript">
 //See Regular Expressions: http://www.qcitr.com/usefullinks.htm#lesson7
 $(document).ready(function() {
	$('#edit_petstore').formValidation({
			message: 'This value is not valid',
			icon: {
					valid: 'fa fa-check',
					invalid: 'fa fa-times',
					validating: 'fa fa-refresh'
			},
			fields: {
					name: {
							validators: {
									notEmpty: {
											message: 'Name is required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'Name must be less than 30 characters long'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z0-9\-_\s]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[\w\-\s]+$/,
										message: 'Name can only contain letters, numbers, hyphens, and underscore'
									},									
							},
					},
					street: {
							validators: {
									notEmpty: {
											message: 'Street required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'Street no more than 30 characters'
									},
									regexp: {
										//street: only letters, numbers, comma, space character, and period
										regexp: /^[a-zA-Z0-9,\s\.]+$/,		
									message: 'Street can only contain letters, numbers, commas, or periods'
									},									
							},
					},
					
					city: {
							validators: {
									notEmpty: {
											message: 'City required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'City no more than 30 characters'
									},
									regexp: {
										regexp: /^[a-zA-Z0-9\s]+$/,		
									message: 'Street can only contain letters and numbers'
									},									
							},
					},
					
					state: {
							validators: {
									notEmpty: {
											message: 'State required'
									},
									stringLength: {
											min: 2,
											max: 2,
											message: 'State must be two characetrs'
									},
									regexp: {
										regexp: /^[a-zA-Z]+$/,		
									message: 'State can only contain letters'
									},									
							},
					},
					
					zip: {
							validators: {
									notEmpty: {
											message: 'Zip required'
									},
									stringLength: {
											min: 5,
											max: 9,
											message: 'Zip must be 5 and no more than 9 digits'
									},
									regexp: {
										regexp: /^[0-9]+$/,		
									message: 'Zip can only contain numbers'
									},									
							},
					},
					
					phone: {
							validators: {
									notEmpty: {
											message: 'Phone required, including area code, only numbers'
									},
									stringLength: {
											min: 10,
											max: 10,
											message: 'Phone must be ten digits'
									},
									regexp: {
										regexp: /^[0-9]+$/,		
									message: 'Phone can only contain numbers'
									},									
							},
					},
					
					email: {
							validators: {
									notEmpty: {
											message: 'Email address required'
									},
									stringLength: {
											min: 1,
											max: 100,
											message: 'Email no more than 100 characters'
									},
									regexp: {
										regexp: /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/,		
									message: 'Must include valid Email'
									},									
							},
					},
					
					url: {
							validators: {
									notEmpty: {
											message: 'URL required'
									},
									stringLength: {
											min: 1,
											max: 100,
											message: 'URL no more than 100 characters'
									},
									regexp: {
										regexp: /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/,		
									message: 'Must include valid URL'
									},									
							},
					},
					
					ytdsales: {
							validators: {
									notEmpty: {
											message: 'YTD sales is required'
									},
									stringLength: {
											min: 1,
											max: 11,
											message: 'YTD sales can be no more than 10 digits including decimal point'
									},
									regexp: {
										regexp: /^[0-9\.]+$/,		
									message: 'YTD sales can only contain numbers and decimal point'
									},									
							},
					},
					
					notes: {
						validators:{
							
						},
					},
					
			}
	});
});
</script>

</body>
</html>