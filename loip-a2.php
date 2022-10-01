<?php
$ip = $_GET["ip"];
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

$profile = http_request("https://www.iplocate.io/api/lookup/$ip");

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
						IP Geolocation Lookup
						</div>	
                            <div class="card-body">
                             <form action="loip-a2.php" method="GET">
							 <div class="form-group">
							<input type="text" class="form-control" name="ip" placeholder="<?php echo $profile["ip"] ?>" value="">
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
							<table class="table result-table no-script">
                        <tr>
                            <th class="ip_header">IP Address</th>
                            <td><b class="query"><?php echo $profile["ip"] ?></b></td>
                        </tr>                   
                        <tr>
                            <th>City</th>
                            <td><span class="city"><?php echo $profile["city"] ?></span></td>
                        </tr>
                        <tr>
                            <th>Region</th>
                            <td><span class="region"><?php echo $profile["subdivision"] ?></span></td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td class="country"><?php echo $profile["country"] ?></td>
                        </tr>
                         <tr>
                            <th>Continent</th>
                            <td class="continent"><?php echo $profile["continent"] ?></td>
                        </tr>
                        <tr>
                            <th>ISP</th>
                            <td class="isp"><?php echo $profile["org"] ?></td>
                        </tr>
                    </table>
										<iframe width='100%' height='400px' src="https://api.mapbox.com/styles/v1/suryagiri200/cktzgfnpb0i5r17phh8sv9qo3.html?title=false&access_token=pk.eyJ1Ijoic3VyeWFnaXJpMjAwIiwiYSI6ImNrbmxhdTg4bTBnZWIydW55NmtoMmZ1MGwifQ.MQTgmTuz0yVHRU2l02d0lA&zoomwheel=true#12/<?php echo $profile["latitude"] ?>/<?php echo $profile["longitude"] ?>" title="Basic" style="border:none;"></iframe>
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
