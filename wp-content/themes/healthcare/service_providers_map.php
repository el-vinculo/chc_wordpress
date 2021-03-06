<style >
h1 {
  text-align: center;
 font-family: 'Montserrat', sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border: 4px solid rgba(3, 169, 244, 0.69);
    width: 80%;
    position: relative;
    transition: all 5s ease-in-out;
    font-family: 'Montserrat', sans-serif;
}
.popup h2 {
  margin-top: 0;
  font-size: 32px;
  font-weight: 700;
  color: rgba(3, 169, 244, 0.69);
font-family: 'Montserrat', sans-serif;}
.popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-shadow: none;
    width: 40px;
    text-align: center;
    height: 40px;
    padding: 6px;
    border-radius: 100%;
    box-shadow: none;
    background: rgba(3, 169, 244, 0.69)!important;
    text-decoration: none;
    color: #fff;
}
.popup .close:hover {
  color: #fff!important;
}
.popup .content {
  max-height: 80%;
  overflow: auto;
}
.content ul li {
    padding: 12px 0;
    font-size: 16px;
}
.content ul li span{
   font-weight: 700;
   font-family: 'Montserrat', sans-serif;
}
@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
.content p{
  font-weight: 700;
   font-family: 'Montserrat', sans-serif;
   font-size: 17px;
       color: #949292;

}
</style>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.js'></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJogAvmB0OvLY12hWXPw0g4c6gnUjgT1M" type="text/javascript"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/gmaps.js'></script>

<?php

/**
 * Template Name: Service_providers_map
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage healthcare
*/


$error = 0;
$serachData = array();
if(isset($_SESSION['userdata'])){
    $email = $_SESSION['userdata']['email'];
    if(!empty($_POST['search']) && $_POST['search'] == 'Search'){
      $serachData = $_POST;
    }

    $practicesdata = serviceproviderslist($serachData);
    if(!empty($practicesdata['status'] == 'ok')){
       $practices = $practicesdata['provider_list'];
    }else{
      $error = 1;
      $msg   = 'Error ! Some thing went wrong';
    }
}else{
  $error = 1;
  $msg   = 'unauthorized ! you have to login';
}
get_header(); 
//get_template_part('cover');
?>


<div class="container-fluid space">
	<div class="container blogs">
	<div class="col-md-12 rightside">
	    <div class="post-73 page type-page status-publish hentry">	
			<div class="row post-area">
	            <div class="post-73 page type-page status-publish hentry">
	                
					<div class="col-md-12 border">
				        <div class="line"></div>
							<div class="post_title"><h3>Practices</h3></div>
              <div class="post_title pull-right"><h3><a href="<?php echo site_url().'/practises/service-providers';?>" "><i class="fa fa-map" aria-hidden="true"></i></a>|<a href="<?php echo site_url().'/provider';?>"><i class="fa fa-bars" aria-hidden="true"></i></a></h3></div>

				            <div class="post-tags"></div>
				            <div class="post-tags"></div>
				            
				            <div class="post_content">
				                <?php if($error == 0){ ?>
                          <table class="table table-bordered">
									        <form method="post" action="">                
                  <thead>
                      <tr>
                        <th scope="col">
                        <label>Zipcode</label>
                        <input type="text" name="zipcode" class="form-control" placeholder="Zipcode" value="<?php if(!empty($_POST['zipcode'])){ echo $_POST['zipcode']; } ?>"></th>
                        <th scope="col">
                            <label>Radius</label>
                            <select class="form-control" name="radius">
                              <option value="">Select</option>
                              <option value="5" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '5')){ echo "selected"; } ?>>5 Miles</option>
                              <option value="10" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '10')){ echo "selected"; } ?>>10 Miles</option>
                              <option value="15" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '15')){ echo "selected"; } ?>>15 Miles</option>
                              <option value="20" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '20')){ echo "selected"; } ?>>20 Miles</option>
                              <option value="25" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '25')){ echo "selected"; } ?>>25 Miles</option>
                              <option value="30" <?php if(!empty($_POST['radius']) && ($_POST['radius'] == '30')){ echo "selected"; } ?>>30 Miles</option>
                            </select>
                        </th>
                        <th scope="col">
                            <label>Service Type</label>
                            <select class="form-control" name="services_type">
                            <option value=''>-Select-</option>
                            <option value='Extractions' <?php if(!empty($_POST['services_type']) && ($_POST['services_type'] == 'Extractions')){ echo "selected"; } ?>>Extractions</option>
                            <option value='Orthodontics' <?php if(!empty($_POST['services_type']) && ($_POST['services_type'] == 'Orthodontics')){ echo "selected"; } ?>>Orthodontics</option>
                            <option value='Dentures' <?php if(!empty($_POST['services_type']) && ($_POST['services_type'] == 'Dentures')){ echo "selected"; } ?>>Dentures</option>
                            </select>
                        </th>
                        <th scope="col">
                        <label>Provider Name</label>
                        <input type="text" value="<?php if(!empty($_POST['provider_name'])){ echo $_POST['provider_name']; } ?>" name="provider_name" class="form-control" placeholder="Provider Name"> </th>
                        <th scope="col">
                            <label>&nbsp;&nbsp;</label>
                            <input name="search" type="submit" class="btn-success" value="Search" ></th>
                        
                      </tr>
                  </thead>
                  </form>
								</table>

                <div class="row">
                <div class="col-md-12">
                <div class="col-md-8">
                   <div class="google-map-wrap" itemscope itemprop="hasMap" itemtype="http://schema.org/Map">
          <div id="google-map" class="google-map">
          </div><!-- #google-map -->
        </div> <?php
        $locations = array();

        /* Marker #1 */
        $locations[] = array(
          'google_map' => array(
            'lat' => '-6.976622',
            'lng' => '110.39068959999997',
          ),
          'location_address' => 'Puri Anjasmoro B1/22 Semarang',
          'location_name'    => 'Loc A',
        );

        /* Marker #2 */
        $locations[] = array(
          'google_map' => array(
            'lat' => '-6.974426',
            'lng' => '110.38498099999993',
          ),
          'location_address' => 'Puri Anjasmoro P5/20 Semarang',
          'location_name'    => 'Loc B',
        );

        /* Marker #3 */
        $locations[] = array(
          'google_map' => array(
            'lat' => '-7.002475',
            'lng' => '110.30163800000003',
          ),
          'location_address' => 'Ngaliyan Semarang',
          'location_name'    => 'Loc C',
        );

        /* Marker #4 */
        $locations[] = array(
          'google_map' => array(
            'lat' => '47.642039',
            'lng' => '-117.417213',
          ),
          'location_address' => 'Ngaliyan Semarang',
          'location_name'    => 'Loc E',
        );

         ?>
        <?php
         /* Set Default Map Area Using First Location */
        $map_area_lat = isset( $locations[0]['google_map']['lat'] ) ? $locations[0]['google_map']['lat'] : '';
        $map_area_lng = isset( $locations[0]['google_map']['lng'] ) ? $locations[0]['google_map']['lng'] : '';
        ?>
                </div>
                <div class="col-md-4">
				 			
                  </div>
                  
                  </div>
                  </div>
									<?php }else{ ?>
									<div class="alert alert-danger alert-dismissible">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong><?php echo $msg; ?></strong> 
									</div>

									    
                                    <?php } ?>
                            </div>
					</div>
	            </div>
            </div>				
							
        </div>
	</div>
	<?php //get_sidebar(); ?>
	</div>
</div>



<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="overlay">

    <div class="popup container">
        <h2 id="practicsname"></h2>
        <a class="close"  data-dismiss="modal" aria-label="Close" href="#">&times;</a>
        <div class="content col-md-6">
      <div class="row">
      <div class="col-md-7">
            <ul class="nav  ">
                <li id="practicsaddress"></li>
                <li id="practicshour"></li>
                <li id="practicscontact"></li>
                <li id="practicsservice"></li>
            </ul>
    
    </div>
    <div class="col-md-5"><img src="https://www.vikramhospital.com/images/doctors/dummy-men.jpg" class="img-responsive" width="170px " ></div></div>
    <div class="row">
    <div class="col-md-12 content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>   </div>

        </div></div>
        <div class=" col-md-6" style="padding-top: 10px;" id="practicsmap" >
            
        </div>
            
          
    </div>
    </div>
            
<?php get_footer(); ?>


<script type="text/javascript">
	
function getpracticsdetails(practicesname,maplink,officehours,address1,city,zipcode,state,officeemail,Services){
    
    var addresshtml = "<span>Address:</span><br>"+address1+" , "+city+" , "+state+" "+zipcode;
    var hourshtml = "<span>Hours:</span><br>"+officehours;
    var maphtml = "<iframe  src='"+maplink+"' width='100%'' height='250px' frameborder='0' style='border:0' allowfullscreen></iframe>";
    var contacthtml = "<span>Contact:</span><br>"+officeemail;
    var serviceHtml = "<span>Services:</span><br>"+Services;

    //alert(maphtml);
    jQuery('#practicsname').html(practicesname);
    jQuery('#practicsaddress').html(addresshtml);
    jQuery('#practicshour').html(hourshtml);
    //jQuery('#practicstime').html(phonehtml);
    jQuery('#practicscontact').html(contacthtml);
    jQuery('#practicsmap').html(maphtml);
    jQuery('#practicsservice').html(serviceHtml);
}	
</script>

<script>
        jQuery( document ).ready( function() {

          /* Do not drag on mobile. */
          var is_touch_device = 'ontouchstart' in document.documentElement;

          var map = new GMaps({
            el: '#google-map',
            lat: '<?php echo $map_area_lat; ?>',
            lng: '<?php echo $map_area_lng; ?>',
            scrollwheel: false,
            draggable: ! is_touch_device
          });

          /* Map Bound */
          var bounds = [];

          <?php /* For Each Location Create a Marker. */
          foreach( $locations as $location ){
            $name = $location['location_name'];
            $addr = $location['location_address'];
            $map_lat = $location['google_map']['lat'];
            $map_lng = $location['google_map']['lng'];
            ?>
            /* Set Bound Marker */
            var latlng = new google.maps.LatLng(<?php echo $map_lat; ?>, <?php echo $map_lng; ?>);
            bounds.push(latlng);
            /* Add Marker */
            map.addMarker({
              lat: <?php echo $map_lat; ?>,
              lng: <?php echo $map_lng; ?>,
              title: '<?php echo $name; ?>',
              infoWindow: {
                content: '<p><?php echo $name; ?></p>'
              }
            });
          <?php } //end foreach locations ?>

          /* Fit All Marker to map */
          map.fitLatLngBounds(bounds);

          /* Make Map Responsive */
          var $window = jQuery(window);
          function mapWidth() {
            var size = jQuery('.google-map-wrap').width();
            jQuery('.google-map').css({width: size + 'px', height: (size/2) + 'px'});
          }
          mapWidth();
          jQuery(window).resize(mapWidth);

        });
        </script>
