<?php
    $qr = $_GET["qr"];
	$qrs = str_replace(' ', '+', $qr);
	?>
	
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
                <div class="col-md-8">
				<center><img width="50%" height="auto" class="responsive-img-neko" src="<?php echo "https://chart.apis.google.com/chart?cht=qr&chs=500x500&chld=H|0&chl=$qrs" ?>"></center><br/>
				<center> <a href="<?php echo "https://chart.apis.google.com/chart?cht=qr&chs=500x500&chld=H|0&chl=$qrs" ?>"><button type="button" class="btn btn-primary">Download</button></a></center><br/>
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
