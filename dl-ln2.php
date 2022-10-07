<?php
    $ln = $_GET["ln"];

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

$profile = http_request("https://api-xcoders.xyz/api/download/linesticker?url=$ln&apikey=aYLriql82A");

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
							

<?php
$array = $profile["result"]["sticker"];

for ($i=0; $i < count($array) ; $i++) {
echo "<center><img  src='" . $array[$i]["static_url"] . "'></center>";
echo "<center><a href='" . $array[$i]["static_url"] . "'<button type='button' class='btn btn-primary'>Download</button></a></center><br><br>";
}
?>

							
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
