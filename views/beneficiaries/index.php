<!DOCTYPE>

<head>

	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/jquery-ui.min.css">
	<link rel="stylesheet" href="../../css/beneficiaries.css">

	<script src="../../js/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/moment.js"></script>

	<script type="text/javascript">
		function addRecField() {
				strFirst = '<div id="recquirments1"><label class="col-md-4 control-label"></label><div class="col-md-6"><input type="text" class="form-control" autofocus></div> <div class="col-md-1"><button type="button" class="btn btn-default btn-sm pull-right " onclick="removeReqField()"><span class="glyphicon glyphicon-remove"></span></button></div></div>';
				$(".input_post_recquirments").append(strFirst);
			}
			function removeReqField() {
				$("#recquirments1").remove();
			}
			function addbenefitsField() {
					strFirst = '<div id="beneifts1"><label class="col-md-4 control-label"></label><div class="col-md-6"><input type="text" class="form-control" autofocus></div> <div class="col-md-1"><button type="button" class="btn btn-default btn-sm pull-right " onclick="removeBenefitsField()"><span class="glyphicon glyphicon-remove"></span></button></div></div>';
					$(".input_post_benefits").append(strFirst);
			}
			function addRevField(i,txt) {
					if(i == 1){
						strFirst = '<div class="req2"><label class="col-md-4 control-label"></label><div class="col-md-6"><input type="text" class="form-control" value="'+txt+'" autofocus></div> <div class="col-md-1"><button type="button" class="btn btn-default btn-sm pull-right input_post_recquirments_rev_btn" onclick="removeRecField(1)"><span class="glyphicon glyphicon-remove"></span></button></div></div>';
						$(".input_post_recquirments_rev").append(strFirst);
					}
					else{
						strFirst = '<div class="ben2"><label class="col-md-4 control-label"></label><div class="col-md-6"><input type="text" class="form-control" value="'+txt+'" autofocus></div> <div class="col-md-1"><button type="button" class="btn btn-default btn-sm pull-right input_post_benefits_rev_btn" onclick="removeRecField(2)"><span class="glyphicon glyphicon-remove"></span></button></div></div>';
						$(".input_post_benefits_rev").append(strFirst);
					}
			}
			function removeRecField(i){
					if(i == 1){
						$(".input_post_recquirments_rev").on('click',".input_post_recquirments_rev_btn", function(e){
							e.preventDefault(); $(this).closest('.req2').remove(); eventCount--;
						});
					}
					else{
							$(".input_post_benefits_rev").on('click',".input_post_benefits_rev_btn", function(e){
								e.preventDefault(); $(this).closest('.ben2').remove(); eventCount--;
							});
					}
			}
			function removeBenefitsField() {
				$("#beneifts1").remove();
			}

			$(document).ready(function(){
				$('#scholarshipList').change(function(){
					$('.req2').remove();
					$('.ben2').remove();
					if($('#scholarshipList').val() == 'KFF College Scholarship 1'){
						$('#descRev').val("Sample description for the Scholarship offered by KFF number 1");
						$('#requirementsRev').val('valid ID');
						$('#benefitsRev').val('Monthly Allowance');
						addRevField(1,'Certificatie of Indigency');
						addRevField(1,'General Average of 90%');
						addRevField(2,'Free Tuition fee');
					}
					else
					{
						$('#descRev').val("Sample description for the Scholarship offered by KFF number 2");
						$('#requirementsRev').val('General Average of 95%');
						$('#benefitsRev').val('Free College Tuition Fee');
						addRevField(2,'High Monthly Allowance');
						addRevField(2,'Insurance');
					}
    		});
				$("#btnDisconitnue").click(function(){
				    $("#opt1").remove();
						$('.req2').remove();
						$('.ben2').remove();

						$("#scholarshipList").val("");
						$('#descRev').val("");
						$('#requirementsRev').val('');
						$('#benefitsRev').val('');
				});
			});
	</script>
</head>

<body>

	<div class="container">

		<div class="row">
			<div class="col-lg-12" id="div-nav">
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <img style="max-width:100px; margin-top: 5px; padding-right: 8px" src="../../assets/images/one-stop-scholar-logo.png" alt="Logo"></a>
				    </div>
				    <ul class="nav navbar-nav">
				      <li class="active"><a href="index.php">Home</a></li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Scholarships<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#" data-toggle="modal" data-target="#openModal">Post Scholarship</a></li>
											<li><a href="#" data-toggle="modal" data-target="#reviewModal">Review Scholarships</a></li>
									</ul>
							</li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students<span class="caret"></span></a>
									<ul class="dropdown-menu">
											<li><a href="applicants.php">Applicants</a></li>
											<li><a href="#">Granted</a></li>
									</ul>
							</li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				    </ul>
				  </div>
				</nav>
			</div>
	  	</div>

	  	<div class="row">
				<div class = "col-sm-2">
					<div class="row">
						<div class="col-sm-1">
							<img class="media-object" src="../../assets/images/anonymous.png" width="144" height="144" alt>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-1 centered col-centered">
							 <button type="button" class="btn btn-default">Change</button>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<h4> Keh Family Foundation</h4>
					<h5><i class="glyphicon glyphicon-map-marker"></i>Malabon Quezon, Balete drive, Talyer, Ermita Manila</h5>
					<h5><i class="glyphicon glyphicon-phone"></i> 09051563994</h5>
				</div>
				<div class="col-sm-4" style="border-left: 6px solid gray;">
					<p class="text-center">something</p>
				</div>
			</div>
			<div class="modal fade" id="openModal">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
							<h3 class="text-center">Post Scholarships</h3>
						</div>

						<div class="modal-body">
							<form class="form-horizontal"  role="form" method="post" action='controller/transactions.php'>

								<div class="form-group">
									<label for="title" class="col-md-4 control-label">Scholarship Name</label>
									<div class="col-md-6">
										<input type="text" name="title" class="form-control">
									</div>
								</div>

								<div class="form-group">
                  <label for="desc" class="col-md-4 control-label">Brief Description</label>
									<div class="col-md-6">
                  	<textarea class="form-control" rows="5" id="desc"></textarea>
									</div>
                </div>

								<div class="form-group">
                  <label for="slot" class="col-md-4 control-label">Alloted Slot</label>
									<div class="col-md-6">
                  	<input type="number" min="0" step="2" value="10" class="form-control">
									</div>
                </div>

								<div class="form-group input_post_recquirments">
										<label for="requirements" class="col-md-4 control-label">Requirments</label>
										<div class="col-md-6">
												<input id="requirements" type="text" class="form-control" required>
										</div>
										<div class="col-md-1">
												<button type="button" class="btn btn-default btn-md pull-right" onclick="addRecField();"><span class="glyphicon glyphicon-plus"></span></button>
										</div>
								</div>

								<div class="form-group input_post_benefits">
										<label for="benefits" class="col-md-4 control-label">Benefits</label>
										<div class="col-md-6">
												<input id="benefits" type="text" class="form-control" required>
										</div>
										<div class="col-md-1">
												<button type="button" class="btn btn-default btn-md pull-right" onclick="addbenefitsField();"><span class="glyphicon glyphicon-plus"></span></button>
										</div>
								</div>

	            </form>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-right" data-dismiss="modal" onclick="">Close</button>
							<button type="submit" class="btn btn-primary pull-right" name="btnAddTicket">Post Scholarship</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="reviewModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="text-center">Review Scholarship</h3>
					</div>
					<div class="modal-body">
							<form class="form-horizontal"  role="form">

								<div class="form-group">
									<label for="title" class="col-md-4 control-label">Scholarship Name</label>
									<div class="col-md-6">
										<input list="isko" name="title" id="scholarshipList" class="form-control">
										<datalist id="isko">
										  <option id="opt1" value="KFF College Scholarship 1">
										  <option id="opt2" value="KFF College Scholarship 2">
										</datalist>
									</div>
								</div>

								<div class="form-group">
                  <label for="desc" class="col-md-4 control-label">Brief Description</label>
									<div class="col-md-6">
                  	<textarea class="form-control" rows="5" id="descRev"></textarea>
									</div>
                </div>

								<div class="form-group">
                  <label for="slot" class="col-md-4 control-label">Alloted Slot</label>
									<div class="col-md-6">
                  	<input type="number" min="0" step="2" value="10" class="form-control">
									</div>
                </div>

								<div class="form-group input_post_recquirments_rev">
										<label for="requirements" class="col-md-4 control-label">Requiremens</label>
										<div class="col-md-6">
												<input id="requirementsRev" type="text" class="form-control" required>
										</div>
										<div class="col-md-1">
												<button type="button" class="btn btn-default btn-md pull-right" onclick="addRevField(1,'');"><span class="glyphicon glyphicon-plus"></span></button>
										</div>
								</div>

								<div class="form-group input_post_benefits_rev">
										<label for="beneifts" class="col-md-4 control-label">Benefits</label>
										<div class="col-md-6">
												<input id="benefitsRev" type="text" class="form-control" required>
										</div>
										<div class="col-md-1">
												<button type="button" class="btn btn-default btn-md pull-right" onclick="addRevField(2,'');"><span class="glyphicon glyphicon-plus"></span></button>
										</div>
								</div>
	            </form>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary pull-right" id="btnUpdateTicket">Update Scholarship</button>
								<button type="button" class="btn btn-danger pull-right" id="btnDisconitnue">Discontinue</button>
								<button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</body>
