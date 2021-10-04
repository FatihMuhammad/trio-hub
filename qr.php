
	
	<?php
	include("head.php");
	?>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>QR Code Generator</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
						<div class="col-md-7">
							 <form action="qr2.php" method="GET">
							 <div class="form-group">
							 <textarea type="text" class="form-control" name="qr" placeholder="Tulis Disini..." value=""></textarea>
							 </div>
							 <button type="submit" class="btn btn-primary">Submit</button>
							 </form>
						</div>
            </div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
