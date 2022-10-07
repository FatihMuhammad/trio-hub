<?php
	include("head.php");
	?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
						<div class="card-header card-blue">
						Sticker Line Downloader
						</div>	
                            <div class="card-body">
                             <form action="dl-ln2.php" method="GET">
							 <div class="form-group">
								<input type="text" class="form-control" name="ln" placeholder="https://store.line.me/stickershop/product/16804042/en" value="">
							 </div>
							 <button type="submit" class="btn btn-primary">Submit</button>
							 </form>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-12">
                        <div class="card">
						<div class="card-header card-blue">
						Result
						</div>	
                            <div class="card-body">
							<br /><br /><br />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
			
<?php
	include("foot.php");
	?>
