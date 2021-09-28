<?php


trello : https://trello.com/c/WM0b2tdE/228-newly-created-student-associated-to-incorrect-parent -> instaging

Enchane:
I believe that we need to implement logic such that a student record cannot be associated to a phone number more than once.
For example, if student A is associated to parent A with phone 123-456-7890, then it should be impossible to create a caregiver associated to student A with phone 123-456-7890.


function and working files: (parent and cargiver duplicate phone number varifications)

admin dashboard	
	1) admin_model->student_bulk_upload_admin();
	2) admin_model->master_bulk_upload();
	3) controller ->admin->student();
	4) controller ->master_bulk_upload();	
user dashboard
 	5) controller->user->add_and_update_student();
 	6) model->usermodel->student_bulk_upload();	
 	7) view->managestudent	= jquery code update 
	
	
-----------------------------------------------------------------
	
	
Trello : https://trello.com/c/i1eelN14/232-message-language-translations-deleted-from-the-bottom-of-the-list -> in staging

issue: 
The translations will delete in order from bottom -up instead of deleting the language you have intended to delete.	



-----------------------------------------------------------------

view/admin/playlist: 

<input type="submit" class="fr create-message" id="create-message" name="createmessage" value="Add" style="display:none" />
<input type="submit" class="fr create-poll" id="create-poll" name="submit" value="Add" style="display:none"/>

<input type="submit" class="fr cplaylist" name="submitt" value="Submit"/>
<input type="submit" class="fr create-playlist" name="submit" value="Submit" style="display:none"/>


// dinesh - Add button function include in subcmit button
	$(document).ready(function(){
		
		var var1;
		$( "#message" ).click( function () {
			var1 = '0'; 
		});
		$( "#poll" ).click( function () {
			var1 = '1'; 
		} );
				
        $(".cplaylist").click(function(){
			var messagename 		= 	$( "#messagename_0" ).val();
			var txtmessage 			=	$( "#txtMesScheduledate_0" ).val();
			var txtmsgscheduletime	= $( "#txtMesScheduletime_0" ).val();
			var txtmsgstxt			= $( "#txtMessageText_0_0" ).val();
			
			var pollname 			= 	$( "#txtPollName_0").val();
			var pollscheduledate 	=  	$( "#pollscheduledate_0").val();
			var pollscheduletime 	= 	$( "#pollscheduletime_0").val(); 
			
			if(var1 == '1'){	
				if(pollname == "" &&  pollscheduledate == "" &&  pollscheduletime == "" ){
					var missingFields_poll = "";
				}else{
					$('input#create-poll').trigger('click');
				}	
			}else{
				if(messagename == "" &&  txtmessage == "" &&  txtmsgscheduletime == "" && txtmsgstxt  == "" ){
					var missingFields_msg = "";
				}else{
					$('input#create-message').trigger('click');
				}
			}			
			
			var missingFields_msg = validatemessage();
			var missingFields_poll = validatepoll();
			
			if ( missingFields_msg == "" || missingFields_poll == "" ) {
				// $('#form1').trigger('submit');
				setTimeout(function(){
					$('input.create-playlist').trigger('click');
				},2000);
			}
        });
    });	
	
	
view/users/manageplaylist.php


<input type="submit" class="fr create-poll" id="create-poll" name="submit" value="Add" style="display:none"/>
<input type="submit" class="fr create-message" id="create-message" name="createmessage" value="Add" style="display:none" /> 
 
 
<input type="submit" class="fr cplaylist" name="submit" value="Submit"/>
<input type="submit" class="fr create-playlist" id="create-playlist"  name="submit" value="Submit" style="display:none"/>


var createdby = $( this ).closest( ".e-proj-list" ).attr( "data-createdby" );
			if ( createdby == 1 ) {
				
				// dinesh - add button remove 
			       $( ".cplaylist" ).hide();
			    // $( ".create-playlist" ).hide();
				// $( ".create-message" ).hide();
				// $( ".create-poll" ).hide();
			} else {
				 $( ".cplaylist" ).show();
			}
 
			var createdby = $( this ).closest( ".e-proj-list" ).attr( "data-createdby" );
			if ( createdby == 1 ) {
				
				// dinesh
					$( ".cplaylist" ).hide();
			    // $( ".create-playlist" ).hide();
				// $( ".create-message" ).hide();
				// $( ".create-poll" ).hide();
			} else {
				 $( ".cplaylist" ).show();
			}

	function restvalues() {
		$( "#playlistmesid" ).val( "" );
		$( "#playlistpollid" ).val( "" );
		$( "#playlistids" ).val( "" );
		$( "#pollids" ).val( "" );
		
		//dinesh
			$( ".cplaylist" ).show();
		// $( ".create-playlist" ).show();
		// $( ".create-message" ).show();
		// $( ".create-poll" ).show();
	}


// dinesh - single button
	$(document).ready(function(){
		
		var var1;
		$( "#message" ).click( function () {
			var1 = '0'; 
		});
		$( "#poll" ).click( function () {
			var1 = '1'; 
		} );
				
        $(".cplaylist").click(function(){
			
			var messagename 		= 	$( "#messagename_0" ).val();
			var txtmessage 			=	$( "#txtMesScheduledate_0" ).val();
			var txtmsgscheduletime	= 	$( "#txtMesScheduletime_0" ).val();
			var txtmsgstxt			= 	$( "#txtMessageText_0_0" ).val();
			
			var pollname 			= 	$( "#txtPollName_0").val();
			var pollscheduledate 	=  	$( "#pollscheduledate_0").val();
			var pollscheduletime 	= 	$( "#pollscheduletime_0").val(); 
			
			var missingFields_msg 	= 	validatemessage();
			var missingFields_poll	= 	validatepoll();
			
			if(var1 == '1'){
				if(pollname == "" &&  pollscheduledate == "" &&  pollscheduletime == "" ){
					var missingFields_poll = "";
				}else{
					$('input#create-poll').trigger('click');
				}
			}else{
				if(messagename == "" &&  txtmessage == "" &&  txtmsgscheduletime == "" && txtmsgstxt  == "" ){
					var missingFields_msg = "";
				}else{
				$('input#create-message').trigger('click');
				}
			}
			if ( missingFields_msg == "" || missingFields_poll == "" ) {
			
            // $('#form1').trigger('submit');
			setTimeout(function(){
				$('input#create-playlist').trigger('click');
				},1000);
			}
			
        });
    });	
---------------------------------------------------------------


trello : Add Einstein Charter Schools (LA) to database :


alter functions : get_common_data: get_district_list() ;


public
	function get_district_list() {
		$districtresult = array();

		$stateid = $_POST['stateid'];
		$cityid = $_POST['cityid'];
		
		/* Desc- Clever district does not have state and city code associated with it. So fetching the state and city from the apischool and get the district */
		// $where = "(b.id = '" . $stateid . "' and c.CityId = '" . $cityid . "' and a.apidistrictname !='')";	
		
		$where = "(b.id = '" . $stateid . "' and a.CityId = '" . $cityid . "' and a.apidistrictname !='')";	

		$this->db->select( "a.*" );
		$this->db->from( "ApiDistrict as a" );
		// hide this line in dinesh - not retrive in api schools.
		// $this->db->join( "apischool as c", "c.apidistrictid=a.ApiDistrictId", "inner" ); 
		$this->db->join( "states as b", "b.state_code=a.StateCode", "left" ); 			
        $this->db->where($where);
		$this->db->group_by( "a.ApiDistrictName" );
		
		$districtquery = $this->db->get();
		//echo $this->db->last_query();

		if ( $districtquery->num_rows() > 0 ) {

			$districtvalues = $districtquery->result_array();

			foreach ( $districtvalues as $list ) {

				$districtresult[] = array( "districtid" => $list['ApiDistrictId'], "incescode" => $list['ApincesCode'], "districtname" => $list['ApiDistrictName'] );
			}
		}

		echo json_encode( array( "districtresponse" => $districtresult ) );
	}	
-----------------------------------------
<!-- June  -->

// 04-06-2020
// student report export files not empty and archive students are show in report files+

working files : admin_model-> stuDetExport
				 admin_model-> get_teacher_det
				 
	
	
 public function stuDetExport(){
		
				$ApiDistrictId = $this->input->post('district');
				$where ="";		
				// print_r($ApiDistrictId); exit;
				if($this->input->post('district') != "")
				{
					$where.= " and a.DistrictId='".$ApiDistrictId."'";
				}
								
				$query = $this->db->query("SELECT a.StudentId as clever_id,REPLACE(b.FirstName,'\\\\','') as SFirstName,REPLACE(b.LastName,'\\\\','') as SLastName,REPLACE(e.PFirstName,'\\\\','') as PFirstName,REPLACE(e.PLastName,'\\\\','') as PLastName,e.PMobile,e.PhoneType,f.LanguageName,h.Type,(SELECT GROUP_CONCAT( CONCAT_WS('^', COALESCE(cg.CFirstName,''), COALESCE(cg.CLastName,''),COALESCE(cg.CMobile,''),COALESCE(cg.PhoneType,''), COALESCE((SELECT lan.LanguageName FROM language as lan WHERE LanguageId=cg.CLanguage),''),COALESCE((SELECT r.Type FROM relationship as r WHERE RelationshipId=cg.CRelationship),'')) SEPARATOR '|') FROM caregiver as cg WHERE cg.UserId=b.UserId) as cgDet,(SELECT GROUP_CONCAT(sec.Grade) FROM sectionmapping as s LEFT JOIN section as sec ON s.SectionId=sec.SectionId WHERE s.StudentId=a.UserId) as secGrades,(SELECT b.EmailId FROM user as b WHERE b.UserId=c.TeacherId) as teacherEmail FROM user as a,user as b JOIN StudentMapping as c ON c.StudentId=b.UserId LEFT JOIN parent as e ON b.UserId=e.UserId LEFT JOIN language as f ON e.PLanguage=f.LanguageId LEFT JOIN relationship as h ON e.PRelationship=h.RelationshipId WHERE a.UserId = b.UserId AND a.RoleId=7 $where  GROUP BY a.UserId ORDER BY a.CreatedDate DESC");
						
				
						
				// $query = $this->db->query("SELECT (SELECT clr.student_sisid FROM cleverapistudent as clr WHERE clr.student_id=a.C_userId) as clever_id,REPLACE(b.FirstName,'\\\\','') as SFirstName,REPLACE(b.LastName,'\\\\','') as SLastName,REPLACE(e.PFirstName,'\\\\','') as PFirstName,REPLACE(e.PLastName,'\\\\','') as PLastName,e.PMobile,e.PhoneType,f.LanguageName,h.Type,
				// (SELECT GROUP_CONCAT( CONCAT_WS(',', cg.CFirstName, cg.CLastName,cg.CMobile,cg.PhoneType,(SELECT lan.LanguageName FROM language as lan WHERE LanguageId=cg.CLanguage),(SELECT r.Type FROM relationship as r WHERE RelationshipId=cg.CRelationship)) SEPARATOR '|') FROM caregiver as cg WHERE cg.UserId=b.UserId) as cgDet,
				// (SELECT GROUP_CONCAT(sec.Grade) FROM sectionmapping as s LEFT JOIN section as sec ON s.SectionId=sec.SectionId WHERE s.StudentId=a.UserId) as secGrades,
				// (SELECT b.EmailId FROM user as b WHERE b.UserId=c.TeacherId) as teacherEmail FROM user as a,user as b JOIN StudentMapping as c ON c.StudentId=b.UserId
				// LEFT JOIN parent as e ON b.UserId=e.UserId LEFT JOIN language as f ON e.PLanguage=f.LanguageId LEFT JOIN relationship as h ON e.PRelationship=h.RelationshipId
				// WHERE a.UserId = b.UserId AND a.RoleId=7 $where  GROUP BY a.UserId ORDER BY a.CreatedDate DESC");
						
				// echo $this->db->last_query(); exit;
				
				$additional_query = $this->db->query("SELECT u.StudentId as clever_id,u.FirstName as SFirstName, u.LastName as SLastName,p.PFirstName as PFirstNamem,p.PLastName as PLastName,p.PMobile as PMobile,p.PhoneType as PhoneType,(SELECT lan.LanguageName FROM language as lan WHERE LanguageId = p.PLanguage) as LanguageName,(SELECT r.Type FROM relationship as r WHERE RelationshipId= p.PRelationship) as Type,
				(SELECT GROUP_CONCAT(CONCAT_WS('^', COALESCE(CFirstName,''), COALESCE(CLastName,''),COALESCE(CMobile,''),COALESCE(PhoneType,''),COALESCE((SELECT lan.LanguageName FROM language as lan WHERE LanguageId= CLanguage),''),COALESCE((SELECT r.Type FROM relationship as r WHERE RelationshipId= CRelationship),'')) SEPARATOR '|' )as a
				FROM archive_caregiver
				where UserId = u.UserId) as cgDet , '' AS secGrades ,  '' AS teacherEmail  FROM archive_user as u
				LEFT JOIN archive_parent as p
				ON u.UserId = p.UserId where DistrictId = '".$ApiDistrictId."' ");
				

				$res = $query->result_array();
				
				$archive_result = $additional_query->result_array();
				
				
				foreach($res as $key=>$value){
					
					$teacherEmail=$value['teacherEmail'];
					
					$cgDet=$value['cgDet'];
					$cgDetnew=explode('|',$value['cgDet']);
					
					$cgDetails=$cgDetnew;
					foreach($cgDetnew as $k=>$v){
						$cgDetails[$k]=explode('^',$v);
					}

					$cgdata=$this->getCaregiver($cgDetails);

					$secGrades=explode(',',$value['secGrades']);
					$first=$this->get_teacher_det($teacherEmail);
					$second=$this->getsectionDet($secGrades);
					$joined=array_merge($first,$second);
					$joinedarr1=array_merge($joined,$cgdata);
					$final1[]=array_merge($value,$joinedarr1);
				}
				
			
				foreach($archive_result as $key=>$value){
					
					$s_id =  $value['clever_id'];
					
					$query1 = $this->db->query("select UserId from  archive_user  where StudentId = '".$s_id."' ");
					$result1 = $query1->row_array();
					
					// print_r($result1['UserId']); exit;
					
					// $query2 = $this->db->query("select TeacherId from  archive_studentmapping  where StudentId = '".$result1['UserId']."' ");
					$query2 = $this->db->query("select TeacherId from  archive_studentmapping  where StudentId = '".$result1['UserId']."' ");
					$result2 = $query2->row_array();
					
					if($result2>0){	
							$teacher_id = $result2['TeacherId']; 
					}else{
		
						$query3 = $this->db->query("select TeacherId from  studentmapping  where StudentId = '".$result1['UserId']."' ");
						$result3 = $query3->row_array();
						$teacher_id = $result3['TeacherId']; 

					}
					
						$tec_email = $this->db->query("select EmailId from  user  where UserId = '".$teacher_id."' ");
						$tec_email_res = $tec_email->row_array();
						
						if($tec_email_res>0){	
							
							 $teacherEmail = $tec_email_res['EmailId'] ;
						}else{
			
							$tec_email = $this->db->query("select EmailId from  archive_user where UserId = '".$teacher_id."' ");
							$tec_email_res = $tec_email->row_array();
							
							$teacherEmail = $tec_email_res['EmailId'] ;

						}
						
			
					
					
					// $teacherEmail=$value['teacherEmail'];
					
					$cgDet=$value['cgDet'];
					$cgDetnew=explode('|',$value['cgDet']);
					
					$cgDetails=$cgDetnew;
					foreach($cgDetnew as $k=>$v){
						$cgDetails[$k]=explode('^',$v);
					}

					$cgdata=$this->getCaregiver($cgDetails);
					
					
					
					if($cgdata['Caregiver1FirstName'] == '' ){
						
						$status = array(
							
							"Caregiver1FirstName" => "",
							"Caregiver1LastName" => "",
							"Caregiver1Relationship" => "",
							"caregiver1MobileNumber" => "",
							"caregiver1MobNoPhoneType" => "",
							"cargiver1Language" => "",
							
							"Caregiver2FirstName" => "",
							"Caregiver2LastName" => "",
							"Caregiver2Relationship" => "",
							"caregiver2MobileNumber" => "",
							"caregiver2MobNoPhoneType" => "",
							"cargiver2Language" => "",
							
							"status"=>"Archived"
							
						);
						
					}elseif($cgdata['Caregiver2FirstName'] == ''){
						$status = array(
							"Caregiver2FirstName" => "",
							"Caregiver2LastName" => "",
							"Caregiver2Relationship" => "",
							"caregiver2MobileNumber" => "",
							"caregiver2MobNoPhoneType" => "",
							"cargiver2Language" => "",
							
							"status"=>"Archived"
						);
					}

					$secGrades=explode(',',$value['secGrades']);
					$first=$this->get_teacher_det($teacherEmail);
					$second=$this->getsectionDet($secGrades);
					$joined=array_merge($first,$second);
					$joinedarr1=array_merge($joined,$cgdata);
					$joinedarr3=array_merge($joinedarr1,$status);
					$final2[]=array_merge($value,$joinedarr3);
					
				}
				
				if($final2 == ''){
					
					$final = $final1; 
					
				}else{
					
					$final = array_merge($final1,$final2); 	
				}
				
						// echo "<pre>";
						// print_r($final); exit;
			
		
        $ResultArr = array_map(function($tmp) { unset($tmp['secGrades']); return $tmp; }, $final);
		
		$exportData = array_map(function($tmp) { unset($tmp['cgDet']); return $tmp; }, $ResultArr);

		// echo "<pre>";
		// print_r($exportData);

		$fields=array("CleverStudentId","StudentFirstName","StudentLastName","ParentFirstName","ParentLastName","ParentMobileNumber","ParentMobilePhoneType","ParentLanguage","ParentRelationship","TeacherEmailId","TeacherFirstname","TeacherLastName","TeacherTwilioNumber","DistrictName","SchoolName","SectionGrade","Section1Grade","Section2Grade","Section3Grade","Section4Grade","Section5Grade","Section6Grade","Section7Grade","Section8Grade","Section9Grade","CaregiverFirstName","CaregiverLastName","CaregiverRelationship","caregiverMobileNumber","caregiverMobNoPhoneType","cargiverLanguage","Caregiver1FirstName","Caregiver1LastName","Caregiver1Relationship","caregiver1MobileNumber","caregiver1MobNoPhoneType","caregiver1Language","Caregiver2FirstName","Caregiver2LastName","Caregiver2Relationship","caregiver2MobileNumber","caregiver2MobNoPhoneType","caregiver2Language","status");

	
	    $this->get_common_data->export_to_excel('studentReport',$fields,$exportData);
	    
	}
	
	public function get_teacher_det($email){
		//LEFT JOIN apidistrict as at ON at.ApiDistrictId=t.tDistrictId  at.ApiDistrictName
		
		$query = $this->db->query("SELECT t.tFirstName,t.tLastName,t.twilio_phonenum,at.ApiDistrictName,aps.ApiSchoolName FROM teacher as t  LEFT JOIN apidistrict as at ON at.ApiDistrictId=t.tDistrictId LEFT JOIN apischool as aps ON aps.ApiSchoolId=t.tSchoolId WHERE t.tEmailId='".$email."'");
	    $res = $query->row_array();
		
		
		
		if($query->num_rows() > 0){
			return $res;
		}else{
			
		  $secempty=array("tFirstName"=>"","tLastName"=>"","twilio_phonenum"=>"","ApiDistrictName"=>"","ApiSchoolName"=>"");
		  return $secempty;
		}
		
	}

// form validation 

 function validateForm(){
		
		var role = $("#role_id").val();
		var studentid = $('#id').val();
		var caregiverid = $("#cid").val();
		 
		var missingFormFields = '';
		
		if(role==4){
			if($('#teacherid').val() == 0)
			missingFormFields += '<li> Please Select Teacher Name </li>';
		}
		
		if($('#txtFname').val() == "")
			missingFormFields += '<li> Student First Name </li>';
		else if(validateSpecialChar($('#txtFname').val(),4))
			missingFormFields += '<li> Special Characters are not allowed in Student First Name </li>';
		
		if($('#txtLname').val() == "")
			missingFormFields += '<li> Student Last Name </li>';
		else if(validateSpecialChar($('#txtLname').val(),4))
			missingFormFields += '<li> Special Characters are not allowed in Student Last Name </li>';
		
		
		/* Email field remove and email validation removed by dinesh - 19/03/2020
		if($('#txtParentemail').val() == "")
			missingFormFields += '<li> Parent Email ID</li>';
		
		if($('#txtParentemail').val()!=""){
			if(!validateEmail($('#txtParentemail').val()))
				missingFormFields += '<li> Invalid Parent Email ID</li>';
	    }
		*/
		
		if($('#txtParenFname').val() == "")
			missingFormFields += '<li> Parent First Name</li>';
		else if(validateSpecialChar($('#txtParenFname').val(),4))
			missingFormFields += '<li> Special Characters are not allowed in Parent First Name </li>';
		
		if($('#txtParenLname').val() == "")
			missingFormFields += '<li> Parent Last Name</li>';
		else if(validateSpecialChar($('#txtParenLname').val(),4))
			missingFormFields += '<li> Special Characters are not allowed in Parent Last Name </li>';
		
		if($('#txtLanguage').val() == "")
			missingFormFields += '<li> User Language </li>';
		
		if($('#txtParentMphone').val() != ""){
			if(validateMobilenolength($('#txtParentMphone').val()))
			 missingFormFields += '<li> Please Enter 10 Digit Parent Mobile Number and no special characters.</li>';
		}

		if($('.parentsmsnotifiy:checked').length == 0)
			missingFormFields += '<li> Parent Receive notifications </li>';
		
		if($('.parentsmsnotifiy:checked').length == 2)
			missingFormFields += '<li> Parent Receive notifications - Please Choose Yes or No</li>';
		
		//Added by Agnes student id field is mandatory Date:02/03/2020
		if($('#txtStudentId').val() == "")
			missingFormFields += '<li> School/District Student ID </li>';
		
		if(studentid!="" && caregiverid!=""){
		
			if($('#txteditCargFname').val() == "")
				missingFormFields += '<li> Caregiver First Name </li>';
			else if(validateSpecialChar($('#txteditCargFname').val(),4))
				missingFormFields += '<li> Special Characters are not allowed in Caregiver First Name </li>';
			
			/* if($('#txteditCargLname').val() == "")
				missingFormFields += '<li> Caregiver Last Name </li>';
			else if(validateSpecialChar($('#txteditCargLname').val(),4))
				missingFormFields += '<li> Special Characters are not allowed in Caregiver Last Name </li>';
			 */
			if($('#txteditCarglangu').val() == 0)
				missingFormFields += '<li> Caregiver Language </li>';
			
			if($('#txteditCargMobileno').val() !=""){
				if(validateMobilenolength($('#txteditCargMobileno').val()))	{
					missingFormFields += '<li> Pllease Enter 10 Digit Caregiver Mobile Number and no special characters. </li>';
				}
			
				//Added by dinesh date 12/05/2020 to parent and caregiver mobile number
				/* if($('#txtParentMphone').val() == $("#txteditCargMobileno").val() ){
					if($('#txteditCargFname').val() == '' &&   $('#txteditCargLname').val()  == ''){
						missingFormFields += '<li>A parent/caregiver with phone number:  ' + $('#txtParentMphone').val() +  ' ,is already associated to this student. Newly entered the mobile number. </li>';
					}else{
						missingFormFields += '<li>A parent/caregiver with phone number:  ' + $('#txtParentMphone').val() +  ' ,is already associated to this student.  Please edit: [ ' + $('#txteditCargFname').val() +' ' + $('#txteditCargLname').val() +  ' ] instead of creating a new record</li>';
					}
				} */
			}	
			
			if($('#txtCargRelation').val() == 0)
				missingFormFields += '<li> Caregiver Relationship </li>';
			
			if($('.editcaregiversmsnotifiy:checked').length == 0)
				missingFormFields += '<li> Caregiver Receive notifications </li>';
		
			if($('.editcaregiversmsnotifiy:checked').length == 2)
				missingFormFields += '<li> Caregiver Receive notifications - Please Choose Yes or No</li>';
		}
			
		if($('.caregiver:visible').length > 0 || studentid!="" && caregiverid!="")
		{
		
			var unitcval = parseInt($("#unitcount").val());
		
		
		/* if($('.txtCargFname').val() == "")
			missingFormFields += '<li> Caregiver First Name </li>';
		else if(validateSpecialChar($('#txtCargFname').val(),1))
			missingFormFields += '<li> Special Characters are not allowed in Caregiver First Name </li>';
		
		if($('.txtCargLname').val() == "")
			missingFormFields += '<li> Caregiver Last Name </li>';
		else if(validateSpecialChar($('#txtCargLname').val(),1))
			missingFormFields += '<li> Special Characters are not allowed in Caregiver Last Name </li>';
		
		if($('.txtCarglangu').val() == "")
			missingFormFields += '<li> Caregiver Language </li>';
		
		if($('.txtCargEmail').val()!=""){
			if(!validateEmail($('#txtCargEmail').val()))
				missingFormFields += '<li> Invalid Caregiver Email ID</li>';
	    } */
		
		
		// if($('.txtCargMobileno').val() == "")
			// missingFormFields += '<li> Caregiver Mobile </li>';
		
		/* if($('.txtCargRelation').val() == "")
			missingFormFields += '<li> Caregiver Relationship </li>'; */
		
			var smsflag = 0; var cfnameflag = 0; var clnameflag = 0; var cemailflag = 0; var clangflag = 0; var crelationflag = 0;
			var cmobileflag = 0; var Parent_Caregiver_Mobile =0; var Caregiver_Caregiver_Mobile =0; 
			val_alert_parent_car_phone = ''; val_alert_parentphoneno = '';edit_val_car_no = ''; val_alert_carfname= '';val_alert_txteditCargFname = ''; alert_car_fname = '';alert_edit_carfname = ''; edit_PCNames = '';
			//Added by agnes
			var val_alert_carfname=[];
			var val_alert_carlname=[];
			var alert_edit_carfname=[];

			var txtCargLname_=[];
			
			var edit_val_car_no;
			var val_alert_parentphoneno;
			var val_alert_parent_car_phone;
			
			var alert_car_fname ;
			var alert_car_lname	;
		
			var result_array = [];
			for(i=0;i<=unitcval-1;i++){
			result_array.push($("#txtCargMobileno_"+i).val());
			var CMobile_length=result_array.length;
			
			}	
			
			//Agnes  cFName and CLName
			var result_array1 = [];
			for(i=0;i<=unitcval-1;i++){
				var FName =  $("#txtCargFname_"+i).val(); 
				var space = " ";
				var FName_space = FName.concat(space);
				var LName =   $("#txtCargLname_"+i).val();
				var duplicatePCName= FName_space.concat(LName);
				result_array1.push(duplicatePCName);
			}	
			
			// dinesh - edit cargiver validation issue fix
			var txtvaleditCargMobileno = $('#txteditCargMobileno').val();
			var val_txteditCargFname  = $('#txteditCargFname').val();
			var val_txteditCargLname  = $('#txteditCargLname').val();
			

			if(jQuery.inArray(txtvaleditCargMobileno, result_array) !== -1){
				edit_val_car_no = txtvaleditCargMobileno;
				var val_alert_txteditCargFname= result_array1;
			}else {
				edit_val_car_no = '';
			}


			
			//Added by agnes and dinesh on 05/06/2020
			var CMobileNoArray = result_array.sort(); 
			// var CMobileNoArray = result_array; 
			var reportCargiverDuplicate = [];
			var alert_car_fname = [];
			for (var i = 0; i < result_array.length - 1; i++) {
				if (result_array[i + 1] == result_array[i]) {
					reportCargiverDuplicate.push(result_array[i]);
					alert_car_fname.push(result_array1[i]);
				}
			}
	
		
			// added by dinesh and agnesh - get duplicate phone in validation display
			let strArray = result_array;
			let findDuplicates = arr => arr.filter((item, index) => arr.indexOf(item) != index)
			var reportCargiverDuplicate1=[...new Set(findDuplicates(strArray))];
			
			if(reportCargiverDuplicate1 == ''){
				
				reportCargiverDuplicate1 = '';
				
			}
			
			
			for(i=0;i<=unitcval-1;i++){
	
				var cfirstname      = $("#txtCargFname_"+i).val();
				var clastname       = $("#txtCargLname_"+i).val();
				var clanguage       = $("#txtCarglangu_"+i).val();
				var cemail          = $("#txtCargEmail_"+i).val();
				var cmobileno       = $("#txtCargMobileno_"+i).val();
				var crelatioship    = $("#txtCargRelation_"+i).val();
				var caregiversmschk = "caregiversmsnotifiy_"+i;
				
				if(cfirstname == "")
					cfnameflag = 1;
				else if(validateSpecialChar(cfirstname,4))
					cfnameflag = 2;
				
				if(clastname == "")
					clnameflag = 1;
				else if(validateSpecialChar(clastname,4))
					clnameflag = 2;
				
				if(clanguage == 0)
					clangflag = 1;
				
				if(cemail!=''){
					if(!validateEmail(cemail))
						cemailflag = 1;
				}	
				
				if(cmobileno!=''){
					if(validateMobilenolength(cmobileno)){
						cmobileflag = 1;
					}
					//Added by dinesh and agnes date 12/05/2020 to parent and caregiver mobile number
					
					if($('#txtParentMphone').val() == $("#txtCargMobileno_"+i).val() ){
						Parent_Caregiver_Mobile = 1;
						
						if($("#txtCargMobileno_"+i).val() != ''){
							$("#txtCargFname_"+i).val()
							val_alert_parentphoneno = $("#txtCargMobileno_"+i).val();
							var FName =  $("#txtCargFname_"+i).val(); 
							var space = " ";
							var FName_space = FName.concat(space);
							var LName =   $("#txtCargLname_"+i).val();
							var duplicatePCName= FName_space.concat(LName);
							val_alert_carfname.push(duplicatePCName);

						}else{
							
							val_alert_parentphoneno = '';
						}	
						// val_alert_parentphoneno = $("#txtParentMphone").val();
						// alert(val_alert_parentphoneno);
					}	
					
					// added by dinesh
					if($('#txtParentMphone').val() == txtvaleditCargMobileno ){
						
						
						val_alert_parent_car_phone = 1;		
						val_alert_parent_car_phone = $('#txtParentMphone').val();/* 
						
						val_alert_txteditCargFname  = val_txteditCargFname;
						val_alert_txteditCargLname = val_txteditCargLname;  */
					}	
					
					
					if(edit_val_car_no ==  cmobileno){
							var edit_car_FName =  $("#txtCargFname_"+i).val(); 
							var space = " ";
							var edit_car_FName_space = edit_car_FName.concat(space);
							var edit_car_LName =   $("#txtCargLname_"+i).val();
							edit_duplicatePCName = edit_car_FName_space.concat(edit_car_LName);
							alert_edit_carfname.push(edit_duplicatePCName);
					}
					
					var unique_caregiver_mobile =jQuery.unique(result_array);
					var unique_CMobile_length = unique_caregiver_mobile.length;
					
					if (CMobile_length!=unique_CMobile_length) {
						Caregiver_Caregiver_Mobile=1;
					} 
				}
				if(crelatioship == 0)
					crelationflag = 1;
				
				if($('input[name='+caregiversmschk+']:checked').length==0){
					smsflag = 1;
				}
				
				if($('input[name='+caregiversmschk+']:checked').length==2){
					smsflag = 2;
				}
			}
			
			if(cfnameflag==1 || cfnameflag==2)
				if(cfnameflag==1)
					missingFormFields += '<li> Caregiver First Name </li>';
				else if(cfnameflag==2)
					missingFormFields += '<li> Special Characters are not allowed in Caregiver First Name </li>';
				
			/* if(clnameflag==1 || clnameflag==2)	
				if(clnameflag==1)
					missingFormFields += '<li> Caregiver Last Name </li>';
				else if(clnameflag==2)	
					missingFormFields += '<li> Special Characters are not allowed in Caregiver Last Name </li>'; */
				
			if(clangflag==1)	
				missingFormFields += '<li> Caregiver Language </li>';
			
			if(cemailflag==1)
				missingFormFields += '<li> Invalid Caregiver Email ID</li>';
			
			if(cmobileflag==1)
				missingFormFields += '<li> Please Enter 10 Digit Caregiver Mobile Number and no special characters.</li>';
			
			//added by dinesh - duplicate parent and cargiver validation
			function unique(list) {
			var result = [];
			$.each(list, function(i, e) {
				if ($.inArray(e, result) == -1) result.push(e);
			});
			return result;
			}

			 
			 if($('#txtParentMphone').val() == $("#txteditCargMobileno").val() ){
				if($('#txteditCargFname').val() == '' &&   $('#txteditCargLname').val()  == ''){
					 var edit_num = $('#txtParentMphone').val();
				}else{
					 var edit_num = $('#txtParentMphone').val();	
					 var edit_f_name = $('#txteditCargFname').val(); 
					 var space = " ";
					 var edit_f_name_space = edit_f_name.concat(space);
					 var edit_l_name = $('#txteditCargLname').val(); 					 
					 var edit_PCNames = edit_f_name_space.concat(edit_l_name);
				}
			} 
			
		
			var val_par_car_mno = Array.prototype.concat(val_alert_parentphoneno,val_alert_parent_car_phone,reportCargiverDuplicate1,edit_val_car_no,edit_num);
			var val_par_car_mno_uniq = unique(val_par_car_mno);
			// console.log(unique(val_par_car_mno_uniq));
			var fil_val_par_car_mno_uniq = val_par_car_mno_uniq.filter(function (el) {
				return el != null && el != "";
			});
			console.log(fil_val_par_car_mno_uniq);
			
			var val_par_car_name = Array.prototype.concat(val_alert_carfname,val_alert_txteditCargFname,alert_car_fname,alert_edit_carfname,edit_PCNames);
			var val_par_car_name_uniq = unique(val_par_car_name);
			// console.log(unique(val_par_car_name_uniq));
			
			var fil_val_par_car_name_uniq = val_par_car_name_uniq.filter(function (el) {
				return el != null && el != "";
			});
			console.log(fil_val_par_car_name_uniq);
			

			if(fil_val_par_car_mno_uniq != ''){
				if(fil_val_par_car_name_uniq == ''){
						missingFormFields += '<li> A parent/caregiver with phone number: ' + fil_val_par_car_mno_uniq +  ' is already associated to this student.  Newly entered the mobile number.</li>';
				}else{
						missingFormFields += '<li> A parent/caregiver with phone number: ' + fil_val_par_car_mno_uniq +  ' is already associated to this student.  Please edit:[ ' + fil_val_par_car_name_uniq +' ] instead of creating a new record.  </li>';
				}
			} 
			
			/* //Parent vs caregiver mobile number - Create new student
			if(Parent_Caregiver_Mobile==1 ){
				if(val_alert_carfname == ''){
						missingFormFields += '<li> A parent/caregiver with phone number: ' + val_alert_parentphoneno +  ' is already associated to this student.  Newly entered the mobile number.</li>';
				}else{
						missingFormFields += '<li> A parent/caregiver with phone number: ' + val_alert_parentphoneno +  ' is already associated to this student.  Please edit:[ ' + val_alert_carfname +' , ] instead of creating a new record.</li>';
				}
			}
			
			//Parent vs edit caregiver mobile number - edit student
			if(val_alert_parent_car_phone == 1){
				if(val_alert_txteditCargFname == ''){
						missingFormFields += '<li> A parent/caregiver with phone number: ' + val_alert_parent_car_phone +  ' is already associated to this student. Newly entered the mobile number</li>';
				}else{
						missingFormFields += '<li> A parent/caregiver with phone number: ' + val_alert_parent_car_phone +  ' is already associated to this student.  Please edit:[ ' + val_alert_txteditCargFname +', ] instead of creating a new record</li>';
				}
			}
			
			//caregiver vs caregiver mobile number - Create new student
			if(Caregiver_Caregiver_Mobile==1 ){
				if(alert_car_fname == ''){
						missingFormFields += '<li>A parent/caregiver with phone number: ' + reportCargiverDuplicate1 +  ' is already associated to this student. Newly entered the mobile number </li>';
				}else{
						missingFormFields += '<li>A parent/caregiver with phone number: ' + reportCargiverDuplicate1 +  ' is already associated to this student. Please edit: [ ' + alert_car_fname +' ,] instead of creating a new record </li>';
				}
			}
			
			//edit caregiver vs add extra caregiver in to it mobile number - edit student
			if(edit_val_car_no != ''){
				if(alert_edit_carfname == ''){
						missingFormFields += '<li>A parent/caregiver with phone number:  ' + edit_val_car_no +' is already associated to this student. Newly entered the mobile number </li>';
				}else{
						missingFormFields += '<li>A parent/caregiver with phone number:  ' + edit_val_car_no +' is already associated to this student.   is already associated to this student. Please edit: [ ' + alert_edit_carfname +' ,] instead of creating a new record </li>';
				}
			}
  */

			if(crelationflag==1)
				missingFormFields += '<li> Caregiver Relationship </li>';
			
			if(smsflag==1 || smsflag==2){
				if(smsflag==1){	
					missingFormFields += '<li> Caregiver Receive Notifications </li>';
				}	
				if(smsflag==2){
					missingFormFields += '<li> Caregiver Receive Notifications,Please choose yes or No. </li>';
				}	
			} 	
		
		}
		return missingFormFields;
	}
	
	// form validation end

	// Added by Agnes for master bulk upload of users 
	public function master_bulk_upload($worksheet ,$user_details =false){
		$actualrec=0;
		$adduser=0;
		$duplicate =0;
		$duplicatemail ="";
		$duplicatschool="";
		$duplicatestudent="";
		$schl_duplicate=0;
		$teacher_duplicate=0;
		$student_duplicate=0;
		$empty=0;
		$schoolempty=0;
		$teacherempty=0;
		$studentempty=0;
		$gradeempty=0;
		$addschool =0;
		$addteacher = 0;
		$actualrec=0;
		$noteacher=0;
		$noschool=0;
		$nostudent=0;
		$SchoolId=0;
		$districtId = 0;
		$stateId = 0;
		$cityId = 0;
		$dup_parent_cargiver_phonenumber = 0;
		if($this->input->post('txtDistrictBulk')!="")
		{
		$ApiDistrictId = $this->input->post('txtDistrictBulk');
		}
		if($this->input->post('statebulk')!="")
		{
		$StateId = $this->input->post('statebulk');
		}			
		if($this->input->post('citybulk')!="")
		{
		$CityId = $this->input->post('citybulk');
		}
		
		foreach ( $worksheet as $key => $info ) {
			/* $state=trim($info[0]);
			$city=trim($info[1]);
			$district=trim($info[2]); */
			$schoolName=trim($info[0]);
			$contactName=trim($info[1]);
			$contactEmail=trim($info[2]);
			$tFirstName=trim($info[3]);
			$tLastName=trim($info[4]);
			$tNickName=trim($info[5]);
			$tEmailId=trim($info[6]);
			$stdentFirstName=trim($info[7]);
			$studentLastName=trim($info[8]);
			$studentIdNo=trim($info[9]);
			$studentGrade=trim($info[10]);
			$parentFirstName=trim($info[11]);
			$parentLastName=trim($info[12]);
			$parentLanguage=trim($info[13]);
			$PRelationship=trim($info[14]);
			$parentMobile=trim($info[15]);
			$parentEmail=trim($info[16]);
			$cFirstName=trim($info[17]);
			$cLastName=trim($info[18]);
			$cLanguage=trim($info[19]);
			$cMobileNO=trim($info[20]);
			$cRelationship = trim($info[21]);
			$section_name = trim($info[22]);
			$SchoolId=0;
			
			$this->db->select("a.StateCode,a.ApincesCode");
			$this->db->from("apidistrict as a");
			$this->db->where("a.ApiDistrictId = '".$ApiDistrictId."' ");
			$ApiDistrict = $this->db->get();
			$ApiDistrict=$ApiDistrict->row_array();
			
			$StateCode=$ApiDistrict['StateCode'];
			$ApincesCode=$ApiDistrict['ApincesCode'];
			echo"<pre>";
			
			
					
			if($schoolName!="" && $contactEmail!="" && $contactName!="" && $ApiDistrictId!=""){
						$Apischooldata1 = array(
						"ApiSchoolName" => $schoolName,
						"CityId" => $CityId,						
						"StateCode" => $StateCode,
						"ApidistrictNCESId" => $ApincesCode,
						"CDate" => date('Y-m-d H:i:s')
						);
						
						$query_school = $this->db->get_where( "apischool", array( "ApiSchoolName" => $schoolName ) );

						if($query_school->num_rows() == 0){
							$this->db->insert("apischool",$Apischooldata1);
							//echo "<pre>happy Apischooldata1";
							//print_r($Apischooldata1);
						}
												
						$this->db->select("a.ApiSchoolId");
						$this->db->from("apischool as a");
						$this->db->where("a.ApiSchoolName = '".$schoolName."' ");
						$ApiSchoolId = $this->db->get();
						$ApiSchoolId=$ApiSchoolId->row_array();
						$ApiSchoolId=$ApiSchoolId['ApiSchoolId'];
						
						$schooldata1 = array(
						"ApiSchoolId"=> $ApiSchoolId,
						"SchoolName" => $schoolName,
						"EmailId" => $contactEmail,
						"CreatedBy"=>$user_details['RoleID'],
						"City" => $CityId,						
						"State" => $StateId,
						"District" => $ApiDistrictId,
						"CDate" => date('Y-m-d H:i:s')
						);
						
						$query_school = $this->db->get_where( "school", array( "SchoolName" => $schoolName ) );

						if($query_school->num_rows() == 0){
							$this->db->insert("school",$schooldata1);
							//echo "<pre>happy schooldata1";
							$actualrec++;	
							$addschool++;
							//print_r($schooldata1);
						}
						else{
							$duplicate++;
							$schl_duplicate++;
							$duplicatschool=$duplicatschool.", ".$schoolName;
						}
						
						
					}
			else{
				$empty++;
				$schoolempty++;
			}
			
			if($schoolName!="" && $contactEmail!="" && $contactName!="" ){
				$this->db->select("a.SchoolId");
				$this->db->from("school as a");
				$this->db->where("a.SchoolName = '".$schoolName."' ");
				$SchoolId = $this->db->get();
				$SchoolId=$SchoolId->row_array();
				$SchoolId=$SchoolId['SchoolId'];
				}
			
			if($tEmailId!="" && $tFirstName !="" && $tLastName !=""){
				
				$teacherdata1 = array(
				"MembershipId" => "",
				"CreateUserId" => $user_details['RoleID'],
				"tStateId" => $StateId,
				"tCityId" => $CityId,						
				"tDistrictId" => $ApiDistrictId,
				"tFirstName" => $tFirstName,
				"tLastName" => $tLastName,
				"tEmailId" => $tEmailId,
				//"name_goes_by" => $name_goes_by
				"CDate" => date('Y-m-d H:i:s')
				);
				if($schoolName!="" && $contactEmail!="" && $contactName!="")
				{
					$teacherdata2 = array(
					"SchoolId" => $SchoolId ,
					"tSchoolId" => $ApiSchoolId,
					"NotAssociated" => 0
					);
				}
				else{
					$teacherdata2 = array(
					"NotAssociated" => 1
					);
				}
				
				$teacherdata = array_merge($teacherdata1, $teacherdata2 );
				
				$query_teacher = $this->db->get_where( "Teacher", array( "tEmailId" => $tEmailId ) );

				if($query_teacher->num_rows() == 0){
					$this->db->insert("teacher",$teacherdata);
					//echo "happy teacherdata<pre>";
					//print_r($teacherdata);
					$addteacher++;
				}
				else{
						$duplicate++;
						$teacher_duplicate++;
						$duplicatemail=$duplicatemail.", ".$tEmailId;
					}
			}
			else{
				$empty++;
				$teacherempty++;
			}
				
				$random_password = $this->get_common_data->get_gen_password();
				$Password=$this->get_common_data->encrypt->encode( $random_password );
				
				
				$languageId = 1;
				$query2 = $this->db->get_where('language',array('LanguageName' => $language));									
				if($query2->num_rows()>0){					
					$lang_data = $query2->row_array();
					$languageId = $lang_data['LanguageId'];
				}
				
				
				
				if(!empty($schoolName) && $ApiDistrictId!="" && $contactEmail!="" && $contactName!=""){
					$data1 = array(
						"Password" => $Password,
						"City" => $CityId,
						"StateId"  => $StateId,
						"DistrictId"  => $ApiDistrictId,
						"SchoolId"  => $SchoolId,
						"FirstName" => $contactName,
						"EmailId" => $contactEmail,
						"LanguageId" => $languageId,
						"RoleId" => 4,
						"CreatedDate" => date( 'Y-m-d H:i:s' )
					);
					
					$query_school = $this->db->get_where( "user", array( "SchoolId" => $SchoolId ) );
				
				if($query_school->num_rows() == 0){
					$this->db->insert( 'User', $data1 );
					//echo "User school data";
					//print_r($data1);
				}
				}				
				
				
				if($tEmailId != "" && $tFirstName !="" && $tLastName !=""){
					$data2 = array(
						"MembershipId" => "",
						"FirstName" => $tFirstName,
						"LastName" => $tLastName,
						"EmailId" => $tEmailId,
						"NickName" => $tNickName,
						"Password" => $Password,
						"City" => $CityId,
						"StateId"  => $StateId,
						"DistrictId"  => $ApiDistrictId,
						"SchoolId"  => $SchoolId,
						"LanguageId" => $languageId,
						"RoleId" => 6,
						"CreatedDate" => date( 'Y-m-d H:i:s' )
					);
					
					$query_teacher = $this->db->get_where( "user", array( "EmailId" => $tEmailId ) );

				if($query_teacher->num_rows() == 0){
					$this->db->insert( 'User', $data2 );
					//echo "User teacher data";
					$actualrec++;	
					//print_r($data2);
				}
				}
				
				//Added by Agnes made grade field as mandatory Date:08/07/2020.
				if($studentGrade!=''){
					$gradequery1 = $this->db->get_where("grade", array("Grade" => $studentGrade));
					
					if($gradequery1->num_rows()>0){
						$result = $gradequery1->row_array();
						$student_grade = $result['GradeId'];
					}else{
						$student_grade = '';
					}
				}
				else{
					$gradeempty++;
				}
				/* print_r($student_grade);
				exit; */
				//Added by Agnes Date 02/03/2020 Made studentid feild as mandatory field 
				
				if($stdentFirstName != "" && $studentLastName !="" && $parentFirstName != "" && $parentLastName !="" && $parentLanguage !="" && $studentIdNo !='' && $ApiDistrictId != ""){
					
					
					
					$data3 = array(
						"MembershipId" => "",
						"FirstName" => $stdentFirstName,
						"LastName" => $studentLastName,
						"Password" => $Password,
						"LanguageId" => $languageId,
						"Grade" => $student_grade,
						"City" => $CityId,
						"StateId"  => $StateId,
						"DistrictId"  => $ApiDistrictId,
						"SchoolId"  => $SchoolId,
						"RoleId" => 7,
						"CreatedDate" => date( 'Y-m-d H:i:s' )
					);
					
					$duplicateStudent = 0;
					if($studentIdNo !=""){
					//Added by Agnes to get unique student number with district id validation Date 30/03/2020
					//$query_student = $this->db->get_where( "user", array( "StudentId" => $studentIdNo) );
					$this->db->select("a.StudentId");
					$this->db->from("user as a");
					$this->db->where("a.StudentId = '".$studentIdNo."' ");
					$this->db->where("a.DistrictId = '".$ApiDistrictId."' ");
					$query_student= $this->db->get();
					$query_student_number=$query_student->row_array();
						if($query_student->num_rows() == 0){
							$data4 = array(
								"StudentId" => $studentIdNo
							);
							$data3= array_merge($data3,$data4);
						}
						else{
							$duplicateStudent = 1;
						}
					}
					
					// Added by dinesh - validation duplicate phone number in parent and cargiver - 14-05-2020
					$caregiver_dup_mobile_no = 0;
					if($cMobileNO!=''){
						if($parentMobile == $cMobileNO){
						$caregiver_dup_mobile_no = 1;
					}
					}

					if($duplicateStudent != 1){
						if($caregiver_dup_mobile_no == 0 ){	
							if($student_grade != '' ){	
								$this->db->insert( 'User', $data3 );
								$studentid = $this->db->insert_id();
								$actualrec++;	
								$adduser++;
								
								if($parentFirstName != "" && $parentLastName !="" && $parentLanguage !=""){
									$this->db->select("a.LanguageId");
									$this->db->from("language as a");
									$this->db->where("a.LanguageName = '".$parentLanguage."' ");
									$parentLanguageid = $this->db->get();
									$parentLanguageid=$parentLanguageid->row_array();
									//$parentLanguageid = $this->get_common_data->get_language_code($parentLanguage);
									$parentLanguageid=$parentLanguageid['LanguageId'];
									
									if(empty($parentLanguageid))
									{
										$parentLanguageid=1;
									}
									
									$PRelationshipId = $this->get_common_data->get_relationship_code($PRelationship);
									$PRelationshipId=$PRelationshipId['RelationshipId'];
									
									if(empty($PRelationshipId))
									{
										$PRelationshipId="";
									}
									
									if($parentMobile!=''){
										$parentmobileNo  = str_replace("-","",$parentMobile);
									}else{
										$parentmobileNo  = '';
									}

									$dataparent = array(
												"PFirstName" => $parentFirstName,
												"PLastName" => $parentLastName,
												"PRelationship" => $PRelationshipId,
												"PLanguage" => $parentLanguageid,
												"PEmailId" => $parentEmail,
												"PMobile" => $parentmobileNo,
												"UserId" => $studentid,
												"CDate" => date("Y-m-d H:i:s")	
													  );	
									
									$this->db->insert('Parent',$dataparent);
								}
									
								if($cFirstName != "" && $cLastName != "" && $cLanguage !="" && $cRelationship != ""){
									
									$this->db->select("a.LanguageId");
									$this->db->from("language as a");
									$this->db->where("a.LanguageName = '".$cLanguage."' ");
									$cLanguageId = $this->db->get();
									$cLanguageId=$cLanguageId->row_array();
									$cLanguageId=$cLanguageId['LanguageId'];
									/* $cLanguageId = $this->get_common_data->get_language_code($cLanguage);
									$cLanguageId=$cLanguageId['LanguageId']; */
									
									if(empty($cLanguageId))
									{
										$cLanguageId=1;
									}
									
									if($cMobileNO!=''){
										$cMobileNO = str_replace("-","",$cMobileNO);
									}else{
										$cMobileNO  = '';
									}
									
									$cRelationshipId = $this->get_common_data->get_relationship_code($cRelationship);
									$cRelationshipId=$cRelationshipId['RelationshipId'];
									
									if(empty($cRelationshipId))
									{
										$cRelationshipId="";
									}
									
									
									$datacaregiver= array(
													"CFirstName" => $cFirstName,
													"CLastName" => $cLastName,
													"CLanguage" => $cLanguageId,
													"CMobile" => $cMobileNO,
													"CRelationship" => $cRelationshipId,
													"UserId" => $studentid,
													"CDate" => date("Y-m-d H:i:s")	
													);
									
									$this->db->insert('caregiver',$datacaregiver);
								}
													   
								if($tEmailId != "" ){
									
									$this->db->select("a.UserId");
									$this->db->from("user as a");
									$this->db->where("a.EmailId = '".$tEmailId."'");
									$teacherId = $this->db->get();
									$teacherId=$teacherId->row_array();	
									//Added by Agnes cdate for studentmapping date:11/03/2020
									$studentmapping = array(
									"StudentId" => $studentid,
									"TeacherId" => $teacherId['UserId'],
									"CDate" => date("Y-m-d H:i:s")	
									);
									//echo "studentmapping";
									//print_r($studentmapping);
									$this->db->insert( 'studentmapping', $studentmapping );
									
									// dinesh section mapping 
									if($section_name != ''){
											
										$section_data = array(
										"SectionName" => $section_name,
										"TeacherId" => $teacherId['UserId'],
										"CDate" => date("Y-m-d H:i:s")	
										);
										$query_section = $this->db->get_where( "section", array( "SectionName" => $section_name ,"TeacherId" =>$teacherId['UserId'] ) );
										if($query_section->num_rows() == 0){
											$this->db->insert( 'section', $section_data );
										}									
										
										$this->db->select("a.SectionId");
										$this->db->from("section as s");
										$this->db->where("s.SectionName = '".$section_name."', s.TeacherId = '".$teacherId['UserId']."'  ");
										$section_Id = $this->db->get();
										$sectionId=$section_Id->row_array();	
										
										$sectionmapping = array(
										"SectionId" => $sectionId['SectionId'],
										"StudentId" => $studentid,
										"TeacherId" => $teacherId['UserId'],
										"Status" => '0'
										);
										
										$this->db->insert( 'sectionmapping', $sectionmapping );
									
									}
									
									
									
								}
							}
						}else{
							$dup_parent_cargiver_phonenumber++;
						}
					}
					else{
						$duplicate++;
						$student_duplicate++;
						$duplicatestudent=$duplicatestudent.", ".$stdentFirstName;
					}
					
				}else {
					$empty++;
					$studentempty++;
				}
				
		}
		
		$totalrecord = count($worksheet);
		$totalrec=($totalrecord*3);
		
		if($actualrec == $totalrec)
		{
       // echo "===>".$i;exit;
        $res="success";
		}
		else
		{
		$errortxt= $totalrecord." records are in file.<br>".$addschool." schools created.<br>
		".$addteacher." teachers created.<br>
		".$adduser." students created.<br>
		".$schoolempty." missing school record.<br>
		".$teacherempty." missing teacher record.<br>
		".$studentempty." missing student record.<br>
		".$gradeempty." empty student grade record.<br>
		".$schl_duplicate." duplicate school record".trim($duplicatschool,",")."<br>
		".$teacher_duplicate." duplicate teacher record".trim($duplicatemail,",")."<br>
		".$dup_parent_cargiver_phonenumber." parent and caregiver mobile number same, Please enter new mobile number.<br>
		".$student_duplicate."student number already has a map".trim($duplicatestudent,",");
		$res=$errortxt;
		}
		return $res;

	}
	
	
	
	<p> welcome </p>
	<p> 123welcome </p>
	<p> 1234welcome </p>
	<p> 12345welcome </p>
	<p> 123456welcome </p>
	<p> 1234567welcome </p>
	<p> 12345678welcome </p>
	
?>
	
		
		