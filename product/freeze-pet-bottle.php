<?php include_once '../header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/product.css">
<div class="breadcrumb-area mb-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> All Product</a></li>
                            <li class="breadcrumb-item"><a href="#">Houseware</a></li>
                            <li class="breadcrumb-item"><a href="../sangram/category/bottles.php">Bottles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Freeze PET Bottle</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<div class="container">
		<div class="card product-page mb-2">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-5">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="https://lh3.google.com/u/0/d/1nO9_uWn7KWt-0oOT3_r2bNYkmNLZXPPg=w1279-h528-iv1" /></div>
						  <div class="tab-pane" id="pic-2"><img src="https://lh3.google.com/u/0/d/1wUShiXiKBTTpCvBxcufzSyBzg5AMaHl_=w725-h528-iv1" /></div>
						  <div class="tab-pane" id="pic-3"><img src="https://lh3.google.com/u/0/d/12qz1NB5sc9-rejyjCrzETw3AH7I-a9Q-=w725-h528-iv1" /></div>
						  <div class="tab-pane" id="pic-4"><img src="https://lh3.google.com/u/0/d/1aFZqdydno7jUUKu_tJLBQLKxDLvWPJ_Z=w725-h528-iv1" /></div>
						  
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://lh3.google.com/u/0/d/1nO9_uWn7KWt-0oOT3_r2bNYkmNLZXPPg=w1279-h528-iv1" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="https://lh3.google.com/u/0/d/1wUShiXiKBTTpCvBxcufzSyBzg5AMaHl_=w725-h528-iv1" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="https://lh3.google.com/u/0/d/12qz1NB5sc9-rejyjCrzETw3AH7I-a9Q-=w725-h528-iv1" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="https://lh3.google.com/u/0/d/1aFZqdydno7jUUKu_tJLBQLKxDLvWPJ_Z=w725-h528-iv1" /></a></li>
						  
						</ul>
						
					</div>
					<div class="details col-md-7">
						<h3 class="product-title">Freeze PET Bottle</h3>
						<div class="variation">
							  <h4>Variations</h2>
							  <ul class="list-group mt-4 mb-4 w-50">
							    <li class="list-group-item">Blue</li>
							    <li class="list-group-item">Green</li>
							    <li class="list-group-item">Orange</li>
							    <li class="list-group-item">Pink</li>
							  </ul>
						</div>
						<div class="action">
							<button type="button" class="btn btn-success add-to-cart" data-product="Freeze PET Bottle" id="enquiryProduct" data-toggle="modal" data-target="#myModal">Enquiry</button>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once '../footer.php'; ?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title text-info"><b>Enquiry</b></h4>

        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
         <form  method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-body p-3">
                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                       
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="tel" class="form-control" id="telphone" name="phone" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="message" id="message" placeholder="Enter message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-block rounded-0 py-2" id="enquiryproduct">Enquiry</button>
                                </div>
                            </div>

                        </div>
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
