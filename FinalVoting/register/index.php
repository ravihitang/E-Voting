
<?php include ('head.php');?>
<body>

    <div id="wrapper">
    	<?php    
        include ('index_banner.php');
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
			
					<div class="form-panel"  style="width:600px;top:10px;border-radius:30px;position:relative;padding:10px;background-color:rgba(103, 226, 165, 0.781);">
                      
                        <div class="form-body"> 

                         <form method = "post" enctype = "multipart/form-data">
                         	
                                <div class="form-heading">
                         		<center>Voter Registeration</center>
                         		</div>
											<div class="form-field">
												<label>Student USN</label><br/>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "Student ID" required="true">
													
											</div>
											
											<div class="form-field">											
												<label>Password</label><br/>
													<input class="form-control"  type = "password" name = "password" id = "pass" placeholder="Password" required="true"/>
											</div>
											<div class="form-field">											
												<label>Confirm Password</label><br/>
													<input class="form-control"  type = "password" name = "password1" id = "pass" placeholder="Retype Password" required="true"/>
											</div>

											<div class="form-field">
												<label>First Name</label><br/>
													<input class="form-control" type ="text" name = "firstname" placeholder="First Name" required="true">
											</div>
											
											<div class="form-field">
												<label>Last Name</label><br/>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Last Name" required="true">
											</div>

											<div class="form-field">
												<label>Gender</label> <br/>
													<select class = "form-control" name = "gender">
														<option >Male</option>
														<option >Female</option>														
													</select>
											</div>
											
											<div class="form-field">
											<label>Branch</label> <br/>
													<select class = "form-control" name = "prog_study">
														<option >CSE</option>
														<option >CSBS</option>		
														<option >CSD</option>														
														<option >ISE</option>														
														<option >AIML</option>														
														<option >ECE</option>														
														<option >MECH</option>														
													</select>
											</div>

											<div class="form-field">
												<label>Year</label> <br/>
													<select class = "form-control" name = "year_level">
														<option>1st Year</option>
														<option>2nd Year</option>
														<option>3rd Year</option>
														<option>4th Year</option>
														
													</select>
											</div>
												<br/>					
											 	 <center><button name = "save" type="submit">Create My Account</button></center>
                                            <div class="link">
											 	 <h2><center><a href="../login.php" style = "font-size:16px;">Login to vote</a></center></h2>
											</div>

						  				 </div>
                                       
										
										</form>
								
							<?php //PHP script to insert signup data into database
								require 'signUpData.php';
								
							?>

						</div>
						    
					</form>
					
                    </div>
                </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        <?php 
        include ('footer.php');
        ?>

    </div>
    <!-- /#wrapper -->
</body>

</html>

