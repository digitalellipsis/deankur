<?php include_once '../header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/product.css">
<div class="breadcrumb-area mb-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="iindex.php"><i class="fa fa-home"></i> All Product</a></li>
                            <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                            <li class="breadcrumb-item"><a href="../sangram/category/chair.php">Chair</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cane</li>
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
						  <div class="tab-pane active" id="pic-1"><img src="https://lh3.google.com/u/0/d/1jDcRktaWpLkl2HGdWE6y-sSoDqlBS6nG=w1366-h608-iv1" /></div>
						  <div class="tab-pane" id="pic-2"><img src="https://lh3.google.com/u/0/d/1TSKdJ_R963fza-8o-tyuSafcMiQVzk86=w1366-h608-iv1" /></div>

						  
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://lh3.google.com/u/0/d/1jDcRktaWpLkl2HGdWE6y-sSoDqlBS6nG=w1366-h608-iv1" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="https://lh3.google.com/u/0/d/1TSKdJ_R963fza-8o-tyuSafcMiQVzk86=w1366-h608-iv1" /></a></li>

						  
						</ul>
						
					</div>
					<div class="details col-md-7">
						<h3 class="product-title">Cane</h3>
						<div class="variation">
							  <h4>Variations</h2>
							  <ul class="list-group mt-4 mb-4 w-50">
							    <li class="list-group-item">Blue</li>
							    <li class="list-group-item">Brown</li>

							  </ul>
						</div>
						<div class="action">
							<button type="button" class="btn btn-success add-to-cart" data-product="Cane" id="enquiryProduct" data-toggle="modal" data-target="#myModal">Enquiry</button>
							
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
