<?php
    $ss = $_GET["ss"];
	$webss = str_replace(' ', '+', $ss);
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
                        <h2>Webpage Screenshot</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                <div class="col-md-8">
				<img width="70%" height="auto" class="responsive-img-neko" src="<?php echo "https://api.apiflash.com/v1/urltoimage?access_key=fc6f081a239d45ceb140716ac78ad463&url=$webss" ?>"><br /> <br />
				<a href="<?php echo "https://api.apiflash.com/v1/urltoimage?access_key=fc6f081a239d45ceb140716ac78ad463&url=$webss" ?>"><button type="button" class="btn btn-primary">Download</button></a>
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
