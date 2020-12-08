<?php include_once '../header.php'; ?>

<div class="container jointeam">
	<h1 class="text-center mt-3">JOIN OUR TEAM!</h1>
	<p class="teamtext mt-3">The company may need qualified professional in different fields and in different levels related to its field from time to time such as, Manufacturing, Quality, Sales and Marketing, Finance and Accounts, Logistics etc. If you wish to be associated with us, you can send your CV through email at <a href="mailto:career@jagdambapolymers.co.in">career@jagdambapolymers.co.in</a>, even though, there may not be immediate opening, but for our data base. As and when there is any opening suitable to your qualification, you may be contacted. All such CVs are kept confidential.</p>
	<div class="row mt-3">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<h2><strong>Current Openings</strong></h2>
			<ul class="carrerlink mt-3">
				<li>
					<a href="http://ankurwares.com/institutional-business-development/">Institutional Sales Manager (Business Development)</a>
					<span>
						<img loading="lazy" src="img/new.gif"  width="30" height="14" alt="">
					</span>
				</li>
				<li>
					<a href="http://ankurwares.com/asst-manager-manager-accounts/">Asst Manager / Manager Accounts</a>
					<span>
						<img loading="lazy" src="img/new.gif"  width="30" height="14" alt="">
					</span>
				</li>
				<li>
					<a href="http://ankurwares.com/security-supervisor-officer/">Security Supervisor/ Officer</a>
					<span>
						<img loading="lazy" src="img/new.gif"  width="30" height="14" alt="">
					</span>
				</li>
			</ul>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<form method="POST">
				<div class="row mb-5">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group ">
					    	<input type="text" class="form-control form-control-lg" placeholder="Name" id="name" name="name" required>
					    	
					 	</div>
					 	
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
						    <input type="email" class="form-control form-control-lg" placeholder="Email Address" id="email" name="email" required>
						</div>
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
						    <input type="tel" class="form-control form-control-lg" placeholder="Phone Number" id="phone" name="phone" required>
						</div>
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
						    <input type="text" class="form-control form-control-lg" placeholder="Qualification" id="qualification" name="qualification" required>
						</div>
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
						    <input type="text" class="form-control form-control-lg" placeholder="Location" id="location" name="location" required>
						</div>
						
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="form-group">
						  <select class="form-control form-control-lg h-100" id="career" name="carrer" required>
						  	<option value="">Carrer</option>
						    <option value="fresher">Fresher</option>
						    <option value="experienced">Experienced</option>
						  </select>
						</div>
						
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="form-group">
						  <textarea class="form-control form-control-lg" rows="5" id="message" placeholder="Message" name="message" required></textarea>
						</div>
						
					</div>
					<!-- <div class="col-lg-12 col-md-12 col-sm-12 ">
						<div class="alert alert-danger" id="errormessage">
							Please Fill all field.
						</div>
					</div> -->
					<div class="col-lg-12 col-md-12 col-sm-12">
						<button type="submit" id="submit" class="btn btn-primary pull-right">Submit</button>
						
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once '../footer.php'; ?>
