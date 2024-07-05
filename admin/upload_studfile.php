
<div class="row">
	<section class="col-lg-12" style="color:black">
		<br>
		<br>
		<div class="panel panel-default" style="border:solid 1px #000033;">
			<div class="panel-heading" style="background-color:#000033; color:#FFF;">
				<h3 class="panel-title">Upload Student Data</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6 col-md-offset-3">
						<div class="form-group" >
							<form role="form" action="../servers/stdserver.php" enctype="multipart/form-data" name="stdform" id="stdform" > 
									<table class="table editable" align="center">
										<tr>
											<td colspan="2" align="center"> <p style="color:red;"> Please Supply the Details below </p> </td>
										</tr>
										<tr>
											<td>Department:</td>
											<td align="left"> 
											<select id="dept" name="dept">
												<option value="Please Select"> Please Select</option>
												<option value="Computer Science"> Computer Science</option>
												<option value="Statistics"> Statistics</option>
												<option value="Mass Communication"> Mass Communication</option>
												<option value="Marketing"> Marketing</option>
												<option value="Accountancy"> Accountancy</option>

											</select>
											</td>
										</tr>
										<tr>
											<td>Level:</td>
											<td align="left"> 
											<select id="lvl" name="lvl">
												<option>Please Select</option>
												<option> ND I</option>
												<option> ND II</option>
											</select>
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center"><i>Please Supply the Excel Version of the Students Record	</i></td>
										</tr>	
										<tr>
											<td colspan="2" align="center"><input type="file" id="stdfile" name="stdfile"></td>
										</tr>
										<tr>
											<td colspan="2" align="center"><button type="button" value="upload student" class="btn btn-primary" id="btnsubs">Upload Student Data</button></td>
										</tr>

									</table>
							</form>
							
						</div>			
					</div>
				</div>

			</div>
				
			</div>
		</div>
		
	
	
	</section>
</div>
<script type="text/javascript" src="script/js/script.js"></script>