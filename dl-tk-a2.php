<?php
    $vt = $_GET["vt"];

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

$profile = http_request("https://hadi-api.herokuapp.com/api/tiktok?url=$vt");

// ubah string JSON menjadi array
$profile = json_decode($profile, TRUE);
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
						Tiktok Video Downloader No Watermark
						</div>	
                            <div class="card-body">
                             <form action="dl-tk-a2.php" method="GET">
							 <div class="form-group">
								<input type="text" class="form-control" name="vt" placeholder="https://vt.tiktok.com/ZSeeSEB5Y/" value="">
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
							<video controls> <source src="<?php echo $profile["result"]["video"]["nowm"] ?>" type="video/mp4"> Your browser does not support the video tag. </video>
							<br /><br />
							<a href="<?php echo $profile["result"]["video"]["nowm"] ?>">
							<button type="button" class="btn btn-primary">Download S1</button>
							</a>
							<a href="<?php echo $profile["result"]["video"]["mp4"] ?>">
							<button type="button" class="btn btn-primary">Download S2</button>
							</a>
							<a href="<?php echo $profile["result"]["video"]["original"] ?>&type=mp4">
							<button type="button" class="btn btn-primary">Download Original</button>
							</a>
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
