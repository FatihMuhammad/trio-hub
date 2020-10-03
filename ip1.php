		<?php
function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

$profile = http_request("https://extreme-ip-lookup.com/json/");

// ubah string JSON menjadi array
$profile = json_decode($profile, TRUE);
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
                        <h2>IP Lookup Geolocation</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
						<div class="col-md-5">
							<form action="ip2.php" method="GET" class="form-inline my-1 my-lg-3">
							<input class="form-control mr-sm-2" type="text" name="ip" placeholder="Search" value="<?php echo $profile["query"] ?>">
							<button class="btn btn-secondary my-2 my-sm-0" type="submit">Track</button>
							</form>
						</div>
						<br /><br /><br />
                <div class="col-md-8">
                        <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th class="ip_header">IP Address</th>
                            <td><b class="ip"><?php echo $profile["query"] ?></b></td>
                        </tr>     
                        <tr>
                            <th class="ip_header">ISP</th>
                            <td><b class="ip"><?php echo $profile["isp"] ?></b></td>
                        </tr> 						
                        <tr>
                            <th>Daerah</th>
                            <td><span class="region_name"><?php echo $profile["city"] ?></span></td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <td><span class="city"><?php echo $profile["region"] ?></span></td>
                        </tr>
                        <tr>
                            <th>Negara</th>
                            <td class="country_name"><?php echo $profile["country"] ?></td>
                        </tr>
                         <tr>
                            <th>Benua</th>
                            <td class="continent_name"><?php echo $profile["continent"] ?></td>
                        </tr>
                        <tr>
                            <th>Latitude</th>
                            <td class="lat"><?php echo $profile["lat"] ?></td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <td class="lng"><?php echo $profile["lon"] ?></td>
                        </tr>
                    </table>
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
