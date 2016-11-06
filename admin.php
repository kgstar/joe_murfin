<?php 
	$loggedIn = true;
	if ($loggedIn) {
		// header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
	<head>
		<meta charset="utf-8">
		<title>People</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="libs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="libs/bootstrap-datepicker/datepicker.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<script src="libs/jquery-2.1.4.min.js"></script>
		<script src="libs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

	</head>
	<body>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row logo">
					<a href="index.php">
						<img src="imgs/logo.png" class="img-responsive" alt="Responsive image">
					</a>
				</div>
				<div class="row header">
					<div class="col-md-2 col-md-offset-10 menu-text">
						<a href="login.php">Log Out</a>
					</div>
				</div>			
				<div class="row content">
					<ul class="nav nav-tabs">
					  	<li class="active"><a data-toggle="tab" href="#stored_videos">Stored Videos</a></li>
					  	<li><a data-toggle="tab" href="#get_videos">Scrap Videos</a></li>
					</ul>

					<div class="tab-content">
					  	<div id="stored_videos" class="tab-pane fade in active">
					    	<div class="row">
					    		<table id="example" class="table" cellspacing="0" width="100%">
							        <thead>
							            <tr>
							                <th class="text-center">No</th>
							                <th class="text-center">Title</th>
							                <th class="text-center">Description</th>
							                <th class="text-center">Video</th>
							                <th class="text-center">Date</th>
							                <th class="text-center">Edit/Delete</th>
							            </tr>
							        </thead>
							        <tbody>
							        <?php for ($r = 1; $r <= 5; $r ++) { ?>
							            <tr>
							                <td class="text-center"><?php echo $r; ?></td>
							                <td>System Architect</td>
							                <td>Edinburgh</td>
							                <td class="text-center">
							                	<div class="embed-responsive embed-responsive-4by3">
												    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
												</div>
							                </td>
							                <td class="text-center">2011/04/25</td>
							                <td class="text-center">
							                	<button type="button" onclick="editVideo(<?php echo $r; ?>);" class="btn btn-info">
											      	<span class="glyphicon glyphicon-edit"></span>
											    </button>
							                	<button type="button" onclick="deleteVideo(<?php echo $r; ?>);" class="btn btn-danger">
											      	<span class="glyphicon glyphicon-remove"></span>
											    </button>
							                </td>
							            </tr>
							            <?php } ?>
							        </tbody>
							    </table>
					    	</div>
					  	</div>

					  	<div id="get_videos" class="tab-pane fade">
					    	<div class="row">
					    		<div class="form-group">
									<div class="row">
										<div class="col-sm-5">
											<select class="form-control">
												<option value="Wimp.com">Wimp.com</option>
												<option value="Devour.com">Devour.com</option>
											</select>
										</div>
										<div class="col-sm-2">
											<button class="form-control btn btn-lg btn-info" id="login-form-link">Scrap</button>
										</div>
									</div>
								</div>
					    	</div>
					    	<div class="row">
					    		<table id="example1" class="table" cellspacing="0" width="100%">
							        <thead>
							            <tr>
							                <th class="text-center">No</th>
							                <th class="text-center">Title</th>
							                <th class="text-center">Description</th>
							                <th class="text-center">Video</th>
							                <th class="text-center">Add</th>
							            </tr>
							        </thead>
							        <tbody>
							        <?php for ($r = 1; $r <= 5; $r ++) { ?>
							            <tr>
							                <td class="text-center"><?php echo $r; ?></td>
							                <td>System Architect</td>
							                <td>Edinburgh</td>
							                <td class="text-center">
							                	<div class="embed-responsive embed-responsive-4by3">
												    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
												</div>
							                </td>
							                <td class="text-center">
							                	<button type="button" onclick="addVideo(<?php echo $r; ?>);" class="btn btn-primary">
											      	<span class="glyphicon glyphicon-plus"></span>
											    </button>
							                </td>
							            </tr>
							            <?php } ?>
							        </tbody>
							    </table>
					    	</div>
					  	</div>
					</div>


					<!-- <div class="form-group">
						<div class="row">
							<div class="col-sm-7">
								<select class="form-control">
									<option value="Wimp.com">Wimp.com</option>
									<option value="Devour.com">Devour.com</option>
								</select>
							</div>
							<div class="col-sm-5">
								<button class="form-control btn btn-lg btn-info" id="login-form-link">Fetch</button>
							</div>
						</div>
						<div class="row video-div">
							
						</div>
					</div> -->
				</div>
				<div class="row footer ">
					
				</div>
				<div class="row copyright">
					COPYRIGHT © WILL NEED NAME INSERTING HERE
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable();

		    
		});

		function addVideo (videoId) {
	    	alert('added 1 video in your database.');
	    }

	    function editVideo (videoId) {
	    	alert('asdfasdf');
	    }

	    function deleteVideo (videoId) {
	    	confirm('Are you sure want to delete this video?');
	    }

	    // https://datatables.net/reference/event/page
	</script>
</html>


