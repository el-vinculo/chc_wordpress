<?php
session_start();
error_reporting(1);
//$filename =  __DIR__.'ajax.php';
require_once('wp-config.php'); 
require_once('api.php');
//

$function_name=$_POST['funtion'];

$res=call_user_func($function_name);
echo $res;

function getAssesmentByReferralId(){
  if(!empty($_POST)){
    
    $referral_id = $_POST['referral_id'];
    $email       = $_POST['email'];

    $assessments = interviewDetailsTest($referral_id,$email);
    $detailsData  = $assessments['details_array'];
    //echo "<pre>";
    //print_r(count($detailsData)); die; 
     //$dataId =  count($detailsData)-1;
    $assesmentHtml = assesmentHtml($detailsData,$referral_id);
    echo  $assesmentHtml;
  }

}

/*function assesmentHtml($assessments,$referralid){
     $assesmentHtml= '
    <div class="alert alert-success alert-dismissible"  id="interview-msg" style="display: none" >
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Success!</strong> Assessment detail successfully added.
    </div>
    <input type="hidden" id="assement-refid" value="'.$referralid.'">
	<div id="panel1" class="panel-collapse collapse in" aria-expanded="true">
	<a class="addmore" data-ref = "'.$referralid.'"   href="javascript:void(0);"  ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>';

     if(!empty($assessments)){
      foreach ($assessments as $intkey => $intvalue) {
    $assesmentHtml .= '
       <div class="panel-body">
          <div class="main-interview box-shadow">
            <div class="row">
              <div class="col-md-6">
                 <h3 ><a class="accordion-toggle need_obs" data-toggle="collapse"  href="#panelneed_'.$intkey.'">'.$intvalue['need_title'].'</a></h3>
              </div>
              <div id="panelneed_'.$intkey.'" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="col-md-6">
                  
                    <div class="pull-right btn-right">

                      <a href="javascript:void(0)" data-check = "'.$intkey.'"  class="addmoreObstacle"  onclick="add(this)" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
                    </div>
                  </div>
                </div>
                <div class="alert alert-success alert-dismissible" id="need-msg-'.$intkey.'" style="display: none">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Need detail successfully updated.
                </div>
                <form action="">
                   <div class="row">
                   <div class="col-md-6">
                   <div class="row">
                      <div class="form-group col-md-8 left">
                        <label for="first">Title <em style="color:red">*</em></label>
                        <input type="hidden" id="last_obs_'.$intkey.'" value="'.end(array_keys($intvalue['obstacles_array'])).'">
                        <input type="hidden" id="saved_needid_'.$intkey.'" value="'.$intvalue['need_id'].'">
                        <input type="text" data-check="'.$intkey.'" id="need_title_'.$intkey.'" class="form-control" value="'.$intvalue['need_title'].'" onblur="checkneedupdate(this)">
                      </div>
                      <div class="form-group col-md-4 pull-right">
                          <label for="first">Urgency</label><br>
                            <select id="need_urgency_'.$intkey.'" data-check="'.$intkey.'" onchange="checkneedupdate(this)" class="form-control">
                            
                            <option value="Critical"'; 
                              if($intvalue['need_urgency'] == "Critical"){  "selected"; }
                              $assesmentHtml .='>Critical</option>
                              <option value="High"'; 
                              if($intvalue['need_urgency'] == "High"){  "selected"; }
                              $assesmentHtml .='>High </option>
                              <option value="Modrate"'; 

                               if($intvalue['need_urgency'] == "Modrate"){  "selected"; }

                               $assesmentHtml .='>Modrate </option>
                               <option value="Low"'; 

                               if($intvalue['need_urgency'] == "Low"){  "selected"; }

                               $assesmentHtml .='>Low </option>
                            </select>
                        </div>

                        
                    </div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="row">
                    <div class="form-group col-md-4 ">
                           <label for="first">Status</label><br>
                            <select id="need_status_'.$intkey.'" data-check="'.$intkey.'" onchange="checkneedupdate(this)" class="form-control">
                              <option value="New"'; 

                              if($intvalue['need_status'] == "New"){  "selected"; }

                              $assesmentHtml .='>New </option>
                              <option value="Pending"'; 

                              if($intvalue['need_status'] == "Pending"){  "selected"; }

                              $assesmentHtml .='>Pending</option>
                              <option value="Close"'; 

                              if($intvalue['need_status'] == "Close"){  "selected"; }

                              $assesmentHtml .='>Close </option>
                              <option value="Review"'; 

                              if($intvalue['need_status'] == "Review"){  "selected"; }

                              $assesmentHtml .='>Review </option>
                            </select>
                        </div>
                        <div class="col-md-2">
                         <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="need-'.$intkey.'" onclick="removedata(this.id)" style="color: red;font-size: 31px;position: relative;top: 23px;"><i class="fa fa-trash"></i></a>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="first">Description <em style="color:red">*</em></label><br>
                          <textarea class="focus-edit" rows="5" id="need_desc_'.$intkey.'" data-check="'.$intkey.'" onblur="checkneedupdate(this)" >'.$intvalue['need_description'].'</textarea>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label for="first"> Notes</label><br>
                            <textarea rows="5" data-check="'.$intkey.'" onblur="checkneedupdate(this)" id="need_notes_'.$intkey.'" >'.$intvalue['need_note'].'</textarea>
                        </div>

                        
                    </div>
                   </div>
                 </form>
               </div>
              </div>';
               if(!empty($intvalue['obstacles_array']) && is_array($intvalue['obstacles_array'])){ 
                  foreach ($intvalue['obstacles_array'] as $obskey => $obsvalue) {

                $assesmentHtml .= '<div id="main-interview"></div>
                <div class="main-interview box-shadow obstacle-inter">
                  <div class="row">
                    <div class="col-md-4 ">
                        <h3><a id="obstacleancher" class="accordion-toggle" data-toggle="collapse"  href="#panelobs_'.$intkey.'_'.$obskey.'">'.$obsvalue['obstacle_title'].'</a> </h3>
                    </div>
                    <div id="panelobs_'.$intkey.'_'.$obskey.'" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="col-md-8 inline">

                           
                            <div class="pull-right btn-right  ">
                              
                              <a href="javascript:void(0)" style="color: red;" data-check = "'.$intkey.'" data-neck = "'.$obskey.'"   onclick="addobsoln(this)"><i class="fa fa-plus" aria-hidden="true"></i> Add solution </a>
                            </div>
                        </div>
                      </div>
                             
                      <div class="alert alert-success alert-dismissible" id="msg-obs-'.$intkey.'-'.$obskey.'" style="display: none">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                           <strong>Success!</strong> Obstacle detail successfully added.
                      </div>

                      <form action="">
                        <div class="row">
                        <div class="col-md-6">
                        <div class="row">
                          <div class="form-group col-md-8 left">
                            <input type="hidden" id="last_sol_'.$intkey.'_'.$obskey.'" value="'.end(array_keys($obsvalue['solutions_array'])).'">
                            <input type="hidden" id="saved_obstacleid_'.$intkey.'_'.$obskey.'" value="'.$obsvalue['obstacle_id'].'">
                            <label for="first">Title</label>
                            <input type="text" id="obstacle_title_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'" class="form-control" value="'.$obsvalue['obstacle_title'].'" onblur="updateInterviewObstacle(this)">
                           </div>
                           <div class="form-group col-md-4 pull-right">
                            <label for="first">Urgency</label><br>
                              <select id="obstacle_urgency_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'" onchange="updateInterviewObstacle(this)" class="form-control">
                              <option value="Critical"'; 


                              if(!empty($obsvalue['obstacle_urgency'] == "Critical")){  "selected"; }


                              $assesmentHtml .='>Critical</option>
                               <option value="High"'; 
                               if(!empty($obsvalue['obstacle_urgency'] == "High")){  "selected"; }

                               $assesmentHtml .='>High </option>
                               
                               <option value="Modrate"'; 

                               if(!empty($obsvalue['obstacle_urgency'] == "Modrate")){  "selected"; }

                               $assesmentHtml .='>Modrate</option>
                               <option value="Low"'; 

                               if(!empty($obsvalue['obstacle_urgency'] == "Low")){  "selected"; }

                                $assesmentHtml .='>Low</option>
                              </select>
                          </div>
                           </div>

                           </div>
                           <div class="col-md-6">
                           <div class="row">

                          <div class="form-group col-md-4 ">
                            <label for="first">Status</label><br>
                              <select id="obstacle_status_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'" onchange="updateInterviewObstacle(this)" class="form-control">
                                <option value="New"'; 

                                if(!empty($obsvalue['obstacle_status'] == "New")){  "selected"; }
                                $assesmentHtml .='>New </option>
                                <option value="Pending"';
                                if(!empty($obsvalue['obstacle_status'] == "Pending")){  "selected"; }

                                $assesmentHtml .='>Pending</option>
                                <option value="Close"'; 

                                if(!empty($obsvalue['obstacle_status'] == "Close")){  "selected"; }

                                $assesmentHtml .='>Close </option>
                                <option value="Review"'; 

                                if(!empty($obsvalue['obstacle_status'] == "Review")){  "selected"; }

                                $assesmentHtml .='>Review </option>
                               </select>
                           </div>
                           <div class="col-md-6">
                           <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="obstacle-'.$intkey.'_'.$obskey.'" onclick="removedata(this.id)" style="color: red;font-size: 31px;position: relative;top: 23px;"><i class="fa fa-trash"></i></a>
                        </div> 
                           </div>
                           </div>
                           </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="first">Description</label><br>
                              <textarea rows="5" id="obstacle_desc_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'"  onblur="updateInterviewObstacle(this)"> '.$obsvalue['obstacle_description'].'</textarea>
                          </div>
                          <div class="form-group col-md-6">
                             <label for="first"> Notes</label><br>
                             <textarea rows="5" id="obstacle_notes_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'"  onblur="updateInterviewObstacle(this)">'.$obsvalue['obstacle_notes'].'</textarea>
                          </div>
                         
                         </div>
                        </div>
                      </form></div>
                    </div>';
                    
                  
                    if(!empty($obsvalue['solutions_array']) && is_array($obsvalue['solutions_array'])){ 
                      foreach ($obsvalue['solutions_array'] as $solkey => $solvalue) {
                          $lastsol = end(array_keys($obsvalue['solutions_array'])); 
                     $assesmentHtml .= '<div class="main-interview obstacle-inter1 box-shadow">
                      <div class="row">
                        <div class="col-md-4 ">
                          <h3><a id="solutionancher" class="accordion-toggle" data-toggle="collapse"  href="#panelsol_'.$intkey.'_'.$obskey.'_'.$solkey.'">'.$solvalue['solution_title'].'</a> </h3>
                        </div>
                        <div id="panelsol_'.$intkey.'_'.$obskey.'_'.$solkey.'" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-md-8 inline">
                         
                            <div class="pull-left btn-right btn-right1 "> 
                          </div>
                            </div>
                           </div>

                                    
                    <div class="alert alert-success alert-dismissible" id="msg-sol-'.$intkey.'_'.$obskey.'_'.$solkey.'" style="display: none" >
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Success!</strong> Solution detail successfully added.
                    </div>

                    <form action="">
                      <div class="row">
                          <div class="form-group col-md-3 left">
                              <label for="first">Title</label>
                              <input type="hidden" id="last_sol_'.$intkey.'_'.$obskey.'" value="'.$lastsol.'">
                              <input type="hidden" id="saved_solutionid_'.$intkey.'_'.$obskey.'_'.$solkey.'" class="form-control" value="'.$solvalue['solution_id'].'">
                              <input type="hidden" id="saved_solutiontaskid_'.$intkey.'_'.$obskey.'_'.$solkey.'" value="'.$solvalue['task_id'].'">
                              <input type="text" id="solution_title_'.$intkey.'_'.$obskey.'_'.$solkey.'" class="form-control" data-tot="'.$intkey.'" data-fot="'.$obskey.'" data-got="'.$solkey.'" value="'.$solvalue['solution_title'].'" onblur="updateInterviewSolutiondeatils(this)">
                          </div>
                          <div class="col-md-2"> <a href="javascript:void(0)"  id="solution-'.$intkey.'_'.$obskey.'_'.$solkey.'" onclick="removedata(this.id)" style="color: red;font-size: 31px;position: relative;top: 23px;"><i class="fa fa-trash"></i></a></div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-4">
                              <label for="first">Description</label>
                              <textarea rows="5" data-tot="'.$intkey.'" data-fot="'.$obskey.'" data-got="'.$solkey.'" id="solution_desc_'.$intkey.'_'.$obskey.'_'.$solkey.'" onblur="updateInterviewSolutiondeatils(this)" >'.$solvalue['solution_description'].'</textarea>
                          </div>

                      </div>

                      <div class="row">

                          <div class="form-group col-md-4">
                              <h5><button type="button" class="btn1 btn-success btn-primary button-all"  data-toggle="modal"  data-target="#myProviderModal" id="search-'.$intkey.'_'.$obskey.'_'.$solkey.'" onclick="searchprovider(this.id)">Search Provider</button></h5>
                              <label for="first">Selected Provider</label>
                              <input type="text"  placeholder="Search Entire Database"  id="solution_provider_'.$intkey.'_'.$obskey.'_'.$solkey.'" data-tot="'.$intkey.'" data-fot="'.$obskey.'" data-got="'.$solkey.'" value="'.$solvalue['solution_provider'].'" onblur="updateInterviewSolutiondeatils(this)" onclick="updateInterviewSolutiondeatils(this)">
                              
                          </div>';
                          if($solvalue['task_id'] !='' && $solvalue['solution_provider']=='' && $solvalue['task_transferable']=='1'){
        
                          $assesmentHtml .= '<a href="javascript:void(0)" data-toggle="modal"  data-target="#myTransferModal" id="'.$solvalue['task_id'].'" onclick="getTransferTaskdetails(this.id)"   class="custom-task">Transfer task</a>';

                          } else{
                            $assesmentHtml .= '<a href="javascript:void(0)" data-toggle="modal"  data-target="#myTransferModal" disabled="disabled" id="'.$solvalue['task_id'].'" onclick="getTransferTaskdetails(this.id)"   class="custom-task disabled-link">Transfer task</a>';
                          } 

                         $assesmentHtml .=  '</div>
                      </div>
                    </form>
                 </div></div>';
    // 3rd loop closed             
                 } } 
                 $assesmentHtml .= '<div id="main-interview"></div>
                    <div class="input_fields_wrap_solution_'.$intkey.'_'.$obskey.'"></div>';
  // 2nd loop closed               
                  }} 
                   $assesmentHtml .= '<div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles_'.$intkey.' obstacle-inter ">
                <div class="post-tags"></div>
                            </div>';
           
// 1st loop closed
                 }} else{ 
                   $assesmentHtml .= '<div class="main-interview">
                     <div class="row">
                        <div class="col-md-6">
                            <h3 ><a class="accordion-toggle" data-toggle="collapse"  href="#editpanel1">Need</a></h3>
                        </div>
                        <div id="editpanel1" class="panel-collapse collapse box-shadow">
                            <div class="panel-body">
                             <div class="col-md-6">
                                <div class="pull-right btn-right">
                                  <a class="add-need" href="javascript:void(0)" id="addmore" ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>
                                  <a href="javascript:void(0)" data-check = "1"  class="addmoreObstacle"  onclick="add(this)" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
                                </div>
                             </div>
                            </div>
                                        
                        <div class="alert alert-success alert-dismissible" id="need-msg-1" style="display: none">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> Need detail successfully added.
                        </div>

                        <form action="">
                           <div class="row">
                           <div class="col-md-6">
                           <div class="row">
                              <div class="form-group col-md-8 left">
                                 <label for="first">Title <em style="color:red">*</em></label>
                                 <input type="hidden" id="saved_needid_1" value="">
                                 <input type="text" id="need_title_1" class="form-control">
                                 <input type="hidden" id="referral_id_1" value="'.$referralid.'" class="form-control">
                               </div>
                               <div class="col-md-4 pull-right">
                               <div class="form-group  ">
                                  <label for="first">Urgency</label>
                                                <br>
                                                <select id="need_urgency_1" data-check="1" onchange="checkneedupdate(this)" class="form-control">
                                                   <option value="">Select</option>
                                                   <option value="Critical">Critical</option>
                                                   <option value="High">High </option>
                                                    
                                                    <option value="Modrate">Modrate</option>
                                                    <option value="Low">Low</option>

                                                </select>
                                           </div>
                                           </div>
                                       </div>
                                       </div>
                                       <div class="col-md-6">
                                       <div class="row">
                                       <div class="form-group col-md-4 ">
                                                <label for="first">Status</label>
                                                <br>
                                                <select id="need_status_1" data-check="1" onchange="checkneedupdate(this)" class="form-control">
                                                     <option value="">Select</option>
                                                     <option value="New">New </option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Close">Close </option>
                                                    <option value="Review">Review </option>

                                                </select>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                          </div>
                           </div>
                           </div>
                           
                           <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="first">Description <em style="color:red">*</em></label><br>
                                  <textarea rows="5" id="need_desc_1" data-check="1" onblur="checkinterviewneeddeatils(this)" cols="41"></textarea>
                               </div>
                               <div class="form-group col-md-6">
                                  <label for="first"> Notes</label><br>
                                   <textarea rows="5" cols="41" id="need_notes_1" data-check="1" onblur="checkneedupdate(this)"></textarea>
                               </div>
                               
                                            
                                        </div>
                                </div>
                                </form>
                                <div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles_1 obstacle-inter ">
                <div class="post-tags"></div>
                            </div>
                            
                            <div id="main-interview "></div>
                            <div class="input_fields_wrap" >';
                           
                            }

                 $assesmentHtml.='<div id="main-interview"></div>

                            <div id="main-interview "></div>
                            <div class="input_fields_wrap" >

                        </div>

                            

                        </div>

                    </div>

                </div>

</div></div>
            </div>
        </div>
    </div>';

    echo  $assesmentHtml;

}*/

function assesmentHtml($assessments,$referralid){
	$sel='';
     $assesmentHtml= '
    <div class="alert alert-success alert-dismissible"  id="interview-msg" style="display: none" >
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Success!</strong> Assessment detail successfully added.
    </div>
    <input type="hidden" id="assement-refid" value="'.$referralid.'">
	<div id="panel1" class="panel-collapse collapse in" aria-expanded="true">';
     if(!empty($assessments)){
      foreach ($assessments as $intkey => $intvalue) {
		  if( sizeof(array_keys($intvalue['obstacles_array'])) == 0 ) {
			   $last_obs = 0;
		  }else{
			   $last_obs = end(array_keys($intvalue['obstacles_array']));
		  }
    $assesmentHtml .= '
	   <div class="panel-body">
       <div class="main-border">
          <div class="main-interview box-shadow">
            <div class="row">
              <div class="col-md-12">
                 <h3 >Need : <a class="accordion-toggle need_obs" data-toggle="collapse"  href="#panelneed_'.$intkey.'">'.$intvalue['need_title'].'</a></h3>
              </div>
              <div id="panelneed_'.$intkey.'" class="panel-collapse collapse">
                <div class="panel-body">
                  
                
                <div class="alert alert-success alert-dismissible" id="need-msg-'.$intkey.'" style="display: none">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Need detail successfully updated.
                </div>
                <form action="">
                   <div class="row">
                   <div class="col-md-6">
                   <div class="row">
                      <div class="form-group col-md-8 left">
                        <label for="first">Title <em style="color:red">*</em></label>
                        <input type="hidden" id="last_obs_'.$intkey.'" value="'.$last_obs.'">
                        <input type="hidden" id="saved_needid_'.$intkey.'" value="'.$intvalue['need_id'].'">
                        <input type="text" data-check="'.$intkey.'" id="need_title_'.$intkey.'" class="form-control" value="'.$intvalue['need_title'].'" onblur="checkneedupdate(this)">
                      </div>
                      <div class="form-group col-md-4 pull-right">
                          <label for="first">Urgency</label><br>
                            <select id="need_urgency_'.$intkey.'" data-check="'.$intkey.'" onchange="checkneedupdate(this)" class="form-control">
                            
                            <option value="Critical"'; 
                              if($intvalue['need_urgency'] == "Critical"){ $sel ="selected"; }else{ $sel = '';}
                              $assesmentHtml .=$sel.'>Critical</option>
                              <option value="High"'; 
                              if($intvalue['need_urgency'] == "High"){  $sel ="selected"; }else{ $sel = '';}
                              $assesmentHtml .=$sel.'>High </option>
                              <option value="Modrate"'; 

                               if($intvalue['need_urgency'] == "Modrate"){  $sel="selected"; }else{ $sel = '';}

                               $assesmentHtml .=$sel.'>Modrate </option>
                               <option value="Low"'; 

                               if($intvalue['need_urgency'] == "Low"){  $sel="selected"; }else{ $sel = '';}

                               $assesmentHtml .=$sel.'>Low </option>
                            </select>
                        </div>

                        
                    </div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="row">
                    <div class="form-group col-md-4 ">
                           <label for="first">Status</label><br>
                            <select id="need_status_'.$intkey.'" data-check="'.$intkey.'" onchange="checkneedupdate(this)" class="form-control">
                              <option value="New"'; 

                              if($intvalue['need_status'] == "New"){ $sel ="selected"; }else{ $sel = '';}

                              $assesmentHtml .=$sel.'>New </option>
                              <option value="Pending"'; 

                              if($intvalue['need_status'] == "Pending"){ $sel ="selected"; }else{ $sel = '';}

                              $assesmentHtml .=$sel.'>Pending</option>
                              <option value="Close"'; 

                              if($intvalue['need_status'] == "Close"){ $sel ="selected"; }else{ $sel = '';}

                              $assesmentHtml .=$sel.'>Close </option>
                              <option value="Review"'; 

                              if($intvalue['need_status'] == "Review"){ $sel ="selected"; }else{ $sel = '';}

                              $assesmentHtml .=$sel.'>Review </option>
                            </select>
                        </div>
                        <div class="col-md-2">
                         <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="need-'.$intkey.'" onclick="removedata(this.id)" style="color: red;font-size: 31px;position: relative;top: 23px;"><i class="fa fa-trash"></i></a>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="first">Description <em style="color:red">*</em></label><br>
                          <textarea class="focus-edit" rows="5" id="need_desc_'.$intkey.'" data-check="'.$intkey.'" onblur="checkneedupdate(this)" >'.$intvalue['need_description'].'</textarea>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label for="first"> Notes</label><br>
                            <textarea rows="5" data-check="'.$intkey.'" onblur="checkneedupdate(this)" id="need_notes_'.$intkey.'" >'.$intvalue['need_note'].'</textarea>
                        </div>

                        
                    </div>
                   </div>';
				   
				   if(!empty($intvalue['obstacles_array']) && is_array($intvalue['obstacles_array'])){ 
                  foreach ($intvalue['obstacles_array'] as $obskey => $obsvalue) {

                $assesmentHtml .= '<div id="main-interview"></div>
                <div class="main-interview box-shadow obstacle-inter main-border width">
                  <div class="row">
                    <div class="col-md-12 ">
                        <h3 class="padding-left">Obstacle : <a id="obstacleancher" class="accordion-toggle" data-toggle="collapse"  href="#panelobs_'.$intkey.'_'.$obskey.'">'.$obsvalue['obstacle_title'].'</a> </h3>
                    </div>
                    <div id="panelobs_'.$intkey.'_'.$obskey.'" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="col-md-8 inline">

                           
                           
                        
                             
                      <div class="alert alert-success alert-dismissible" id="msg-obs-'.$intkey.'-'.$obskey.'" style="display: none">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                           <strong>Success!</strong> Obstacle detail successfully added.
                      </div>

                      <form action="">
                        <div class="row">
                        <div class="col-md-6">
                        <div class="row">
                          <div class="form-group col-md-8 left">
                            <input type="hidden" id="last_sol_'.$intkey.'_'.$obskey.'" value="'.end(array_keys($obsvalue['solutions_array'])).'">
                            <input type="hidden" id="saved_obstacleid_'.$intkey.'_'.$obskey.'" value="'.$obsvalue['obstacle_id'].'">
                            <label for="first">Title</label>
                            <input type="text" id="obstacle_title_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'" class="form-control" value="'.$obsvalue['obstacle_title'].'" onblur="updateInterviewObstacle(this)">
                           </div>
                           <div class="form-group col-md-4 pull-right">
                            <label for="first">Urgency</label><br>
                              <select id="obstacle_urgency_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'" onchange="updateInterviewObstacle(this)" class="form-control">
                              <option value="Critical"'; 


                              if(!empty($obsvalue['obstacle_urgency'] == "Critical")){ $sel ="selected"; }else{ $sel = '';}

                              $assesmentHtml .=$sel.'>Critical</option>
                               <option value="High"'; 
                               if(!empty($obsvalue['obstacle_urgency'] == "High")){ $sel ="selected"; }else{ $sel = '';}

                               $assesmentHtml .=$sel.'>High </option>
                               
                               <option value="Modrate"'; 

                               if(!empty($obsvalue['obstacle_urgency'] == "Modrate")){ $sel ="selected"; }else{ $sel = '';}

                               $assesmentHtml .=$sel.'>Modrate</option>
                               <option value="Low"'; 

                               if(!empty($obsvalue['obstacle_urgency'] == "Low")){ $sel ="selected"; }else{ $sel = '';}

                                $assesmentHtml .=$sel.'>Low</option>
                              </select>
                          </div>
                           </div>

                           </div>
                           <div class="col-md-6">
                           <div class="row">

                          <div class="form-group col-md-4 ">
                            <label for="first">Status</label><br>
                              <select id="obstacle_status_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'" onchange="updateInterviewObstacle(this)" class="form-control">
                                <option value="New"'; 

                                if(!empty($obsvalue['obstacle_status'] == "New")){ $sel ="selected"; }else{ $sel = '';}
                                $assesmentHtml .=$sel.'>New </option>
                                <option value="Pending"';
                                if(!empty($obsvalue['obstacle_status'] == "Pending")){ $sel ="selected"; }else{ $sel = '';}

                                $assesmentHtml .=$sel.'>Pending</option>
                                <option value="Close"'; 

                                if(!empty($obsvalue['obstacle_status'] == "Close")){ $sel ="selected"; }else{ $sel = '';}

                                $assesmentHtml .=$sel.'>Close </option>
                                <option value="Review"'; 

                                if(!empty($obsvalue['obstacle_status'] == "Review")){ $sel ="selected"; }else{ $sel = '';}

                                $assesmentHtml .=$sel.'>Review </option>
                               </select>
                           </div>
                           <div class="col-md-6">
                           <div class="pull-left btn-right btn-right1 "> 
                           <a href="javascript:void(0)"  id="obstacle-'.$intkey.'_'.$obskey.'" onclick="removedata(this.id)" style="color: red;font-size: 31px;position: relative;top: 23px;"><i class="fa fa-trash"></i></a>
                        </div> 
                           </div>
                           </div>
                           </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="first">Description</label><br>
                              <textarea rows="5" id="obstacle_desc_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'"  onblur="updateInterviewObstacle(this)"> '.$obsvalue['obstacle_description'].'</textarea>
                          </div>
                          <div class="form-group col-md-6">
                             <label for="first"> Notes</label><br>
                             <textarea rows="5" id="obstacle_notes_'.$intkey.'_'.$obskey.'" data-pop="'.$intkey.'" data-mom="'.$obskey.'"  onblur="updateInterviewObstacle(this)">'.$obsvalue['obstacle_notes'].'</textarea>
                          </div>
                         
                         </div>
                        </div>
                      </form>
                      </div>
                    ';

                    
                  
                    if(!empty($obsvalue['solutions_array']) && is_array($obsvalue['solutions_array'])){ 
                      foreach ($obsvalue['solutions_array'] as $solkey => $solvalue) {
                          $lastsol = end(array_keys($obsvalue['solutions_array'])); 
                     $assesmentHtml .= '<div class="main-interview obstacle-inter1 main-border box-shadow">
                      <div class="row">
                        <div class="col-md-4 ">
                          <h3>Solution : <a id="solutionancher" class="accordion-toggle" data-toggle="collapse"  href="#panelsol_'.$intkey.'_'.$obskey.'_'.$solkey.'">'.$solvalue['solution_title'].'</a> </h3>
                        </div>
                        <div id="panelsol_'.$intkey.'_'.$obskey.'_'.$solkey.'" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="col-md-8 inline">
                         
                            <div class="pull-left btn-right btn-right1 "> 
                          </div>
                            </div>
                           </div>

                                    
                    <div class="alert alert-success alert-dismissible" id="msg-sol-'.$intkey.'_'.$obskey.'_'.$solkey.'" style="display: none" >
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Success!</strong> Solution detail successfully added.
                    </div>

                    <form action="">
                      <div class="row">
                          <div class="form-group col-md-3 left">
                              <label for="first">Title</label>
                              <input type="hidden" id="last_sol_'.$intkey.'_'.$obskey.'" value="'.$lastsol.'">
                              <input type="hidden" id="saved_solutionid_'.$intkey.'_'.$obskey.'_'.$solkey.'" class="form-control" value="'.$solvalue['solution_id'].'">
                              <input type="hidden" id="saved_solutiontaskid_'.$intkey.'_'.$obskey.'_'.$solkey.'" value="'.$solvalue['task_id'].'">
                              <input type="text" id="solution_title_'.$intkey.'_'.$obskey.'_'.$solkey.'" class="form-control" data-tot="'.$intkey.'" data-fot="'.$obskey.'" data-got="'.$solkey.'" value="'.$solvalue['solution_title'].'" onblur="updateInterviewSolutiondeatils(this)">
                          </div>
                          <div class="col-md-2"> <a href="javascript:void(0)"  id="solution-'.$intkey.'_'.$obskey.'_'.$solkey.'" onclick="removedata(this.id)" style="color: red;font-size: 31px;position: relative;top: 23px;"><i class="fa fa-trash"></i></a></div>
                      </div>
                      <div class="row">
                          <div class="form-group col-md-4">
                              <label for="first">Description</label>
                              <textarea rows="5" data-tot="'.$intkey.'" data-fot="'.$obskey.'" data-got="'.$solkey.'" id="solution_desc_'.$intkey.'_'.$obskey.'_'.$solkey.'" onblur="updateInterviewSolutiondeatils(this)" >'.$solvalue['solution_description'].'</textarea>
                          </div>

                      </div>

                      <div class="row">

                          <div class="form-group col-md-4">
                              <h5><button type="button" class="btn1 btn-success btn-primary button-all"  data-toggle="modal"  data-target="#myProviderModal" id="search-'.$intkey.'_'.$obskey.'_'.$solkey.'" onclick="searchprovider(this.id)">Search Provider</button></h5>
                              <label for="first">Selected Provider</label>
                              <input type="text"  placeholder="Search Entire Database"  id="solution_provider_'.$intkey.'_'.$obskey.'_'.$solkey.'" data-tot="'.$intkey.'" data-fot="'.$obskey.'" data-got="'.$solkey.'" value="'.$solvalue['solution_provider'].'" onblur="updateInterviewSolutiondeatils(this)" onclick="updateInterviewSolutiondeatils(this)">
                              
                          </div>';
                          if($solvalue['task_id'] !='' && $solvalue['solution_provider']=='' && $solvalue['task_transferable']=='1'){
        
                          $assesmentHtml .= '<a href="javascript:void(0)" data-toggle="modal"  data-target="#myTransferModal" id="'.$solvalue['task_id'].'" onclick="getTransferTaskdetails(this.id)"   class="custom-task">Transfer task</a>';

                          } else{
                            $assesmentHtml .= '<a href="javascript:void(0)" data-toggle="modal"  data-target="#myTransferModal" disabled="disabled" id="'.$solvalue['task_id'].'" onclick="getTransferTaskdetails(this.id)"   class="custom-task disabled-link">Transfer task</a>';
                          } 

                         $assesmentHtml .=  '</div>
                      </div>
					  
                    </form> 
                 </div></div><br/>';
    // 3rd loop closed             
                 } } 
                 $assesmentHtml .= '
							<div id="main-interview"></div>
                    <div class="input_fields_wrap_solution_'.$intkey.'_'.$obskey.'"></div>
					
					  <div class="test-btn">
                              
                              <a href="javascript:void(0)" style="color: red;" data-check = "'.$intkey.'" data-neck = "'.$obskey.'"   onclick="addobsoln(this)"><i class="fa fa-plus" aria-hidden="true"></i> Add solution </a>
                      </div>
					  </div>
                      </div>
					  </div>
                      </br>
					';
	
  // 2nd loop closed               
                  }
				    // $assesmentHtml .=  '</br>';
				  }
				    $assesmentHtml .= '
					<div id="main-interview " ></div>
                            <div class="input_fields_wrap_obstcles_'.$intkey.' obstacle-inter ">
                <div class="post-tags"></div>
                            </div> ';
                   $assesmentHtml.='<div class="test-btn"><a href="javascript:void(0)" data-check = "'.$intkey.'"  class="addmoreObstacle"  onclick="add(this)" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a></div>
                 </form>
                 </div>
				 </div>
               </div>
			   </div>
			   </div>
			   </div>
			   </div>
              ';
                
                  
				
           
// 1st loop closed
                 }}

                  else{ 
				  
				  // $assesmentHtml .= '
				  // <div class="test-btn"><a href="javascript:void(0)" data-check = "0"  class="addmoreObstacle"  onclick="add(this)" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a></div>'
                   // $assesmentHtml .= '
				   // <div class="main-interview box-shadow">
                     // <div class="row">
                        // <div class="col-md-12">
							 // <h3 >Need : <a class="accordion-toggle need_obs" data-toggle="collapse"  href="#panelneed_'.$intkey.'">'.$intvalue['need_title'].'</a></h3>
						// </div>
                        // <div id="editpanel1" class="panel-collapse collapse box-shadow">
                            // <div class="panel-body">
                             // <div class="col-md-6">
                                // <div class="pull-right btn-right">
                                  // <a class="add-need" href="javascript:void(0)" id="addmore" ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a><br>
                                  // <a href="javascript:void(0)" data-check = "1"  class="addmoreObstacle"  onclick="add(this)" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a>
                                // </div>
                             // </div>
                            // </div>
                                        
                        // <div class="alert alert-success alert-dismissible" id="need-msg-1" style="display: none">
                        // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        // <strong>Success!</strong> Need detail successfully added.
                        // </div>

                        // <form action="">
                           // <div class="row">
                           // <div class="col-md-6">
                           // <div class="row">
                              // <div class="form-group col-md-8 left">
                                 // <label for="first">Title <em style="color:red">*</em></label>
                                 // <input type="hidden" id="saved_needid_1" value="">
                                 // <input type="text" id="need_title_1" class="form-control">
                                 // <input type="hidden" id="referral_id_1" value="'.$referralid.'" class="form-control">
                               // </div>
                               // <div class="col-md-4 pull-right">
                               // <div class="form-group  ">
                                  // <label for="first">Urgency</label>
                                                // <br>
                                                // <select id="need_urgency_1" data-check="1" onchange="checkneedupdate(this)" class="form-control">
                                                   // <option value="">Select</option>
                                                   // <option value="Critical">Critical</option>
                                                   // <option value="High">High </option>
                                                    
                                                    // <option value="Modrate">Modrate</option>
                                                    // <option value="Low">Low</option>

                                                // </select>
                                           // </div>
                                           // </div>
                                       // </div>
                                       // </div>
                                       // <div class="col-md-6">
                                       // <div class="row">
                                       // <div class="form-group col-md-4 ">
                                                // <label for="first">Status</label>
                                                // <br>
                                                // <select id="need_status_1" data-check="1" onchange="checkneedupdate(this)" class="form-control">
                                                     // <option value="">Select</option>
                                                     // <option value="New">New </option>
                                                    // <option value="Pending">Pending</option>
                                                    // <option value="Close">Close </option>
                                                    // <option value="Review">Review </option>

                                                // </select>
                                            // </div>
                                            // <div class="col-md-6">

                                            // </div>
                                          // </div>
                           // </div>
                           // </div>
                           
                           // <div class="row">
                              // <div class="form-group col-md-6">
                                  // <label for="first">Description <em style="color:red">*</em></label><br>
                                  // <textarea rows="5" id="need_desc_1" data-check="1" onblur="checkinterviewneeddeatils(this)" cols="41"></textarea>
                               // </div>
                               // <div class="form-group col-md-6">
                                  // <label for="first"> Notes</label><br>
                                   // <textarea rows="5" cols="41" id="need_notes_1" data-check="1" onblur="checkneedupdate(this)"></textarea>
                               // </div>
                               
                                            
                                        // </div>
                                // </div>
                                // </form>
                                // <div id="main-interview " ></div>
                            // <div class="input_fields_wrap_obstcles_1 obstacle-inter ">
                // <div class="post-tags"></div>
				// <div class="test-btn"><a href="javascript:void(0)" data-check = "0"  class="addmoreObstacle"  onclick="add(this)" style="color: red;"><i class="fa fa-plus" aria-hidden="true"></i> Add Obstacle </a></div>
                            // </div>
                            
                            // <div id="main-interview "></div>
                            // <div class="input_fields_wrap" >';
                          
                            }


                 $assesmentHtml.='<div id="main-interview"></div>

                            <div id="main-interview "></div>
                            

                            

                        

                   
                </div></div>
 <div id="main-interview "></div>
<div class="input_fields_wrap" >

                        </div>
</div></div><br>

<a class="addmore" data-ref = "'.$referralid.'"   href="javascript:void(0);"  ><i class="fa fa-plus" aria-hidden="true"></i> Add Need</a>
            </div>
        ';

    echo  $assesmentHtml;

}