<?php
    $ln = $_GET["ln"];
?>

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
						Sticker Line Batch Downloader
						</div>	
                            <div class="card-body">
                             <form action="dl-lnb2.php" method="GET">
							 <form action="dl-lnb2.php" method="GET">
							 <div class="form-group">
								<input type="number" class="form-control" name="ln" placeholder="16792881" value="">
							 </div>
							 <button type="submit" class="btn btn-primary">Submit</button>
							 </form>
							 <br>
							 <p>https://store.line.me/stickershop/product/<b style="color:red;">16792881</b></p>
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
							
							
							<center>
							
							<img src="https://stickershop.line-scdn.net/stickershop/v1/product/<?php echo $ln ?>/LINEStorePC/main.png">
							<br><br>
							
							<a href="http://dl.stickershop.line.naver.jp/products/0/0/1/<?php echo $ln ?>/iphone/stickers@2x.zip">
							<button type="button" class="btn btn-primary">Download S1</button>
							</a>
							
							<a href="http://dl.stickershop.line.naver.jp/products/0/0/1/<?php echo $ln ?>/iphone/stickerpack@2x.zip">
							<button type="button" class="btn btn-primary">Download S2</button>
							</a>
							
							</center>
							
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
