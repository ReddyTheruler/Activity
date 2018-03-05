
<!DOCTYPE html>
<html lang="en" dir="">
<head>
	
	<title>add student | ADVANCE Activity School Project</title>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Optimum Linkup Universal Concepts" />
	<meta name="author" content="optimumlinkup.com.ng" />
	
	

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/neon-core.css">
<link rel="stylesheet" href="assets/css/neon-theme.css">
<link rel="stylesheet" href="assets/css/neon-forms.css">


    <link rel="stylesheet" href="assets/css/skins/default.css">


<script src="assets/js/jquery-1.11.0.min.js"></script>

        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="assets/images/favicon.png">
<link rel="stylesheet" href="assets/css/font-icons/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/js/vertical-timeline/css/component.css">
<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">


<!--Amcharts-->
<script src="http://localhost/Activity/assets/js/amcharts/amcharts.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/pie.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/serial.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/gauge.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/funnel.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/radar.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/exporting/amexport.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/exporting/canvg.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/exporting/jspdf.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/exporting/filesaver.js" type="text/javascript"></script>
<script src="http://localhost/Activity/assets/js/amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>

<script>
    function checkDelete()
    {
        var chk=confirm("Are You Sure To Delete This !");
        if(chk)
        {
          return true;  
        }
        else{
            return false;
        }
    }
</script>	
</head>
<body class="page-body skin-default" >
	<div class="page-container " >
		<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="dashboard.php">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class=" ">
            <a href="dashboard.php">
                <i class="entypo-gauge"></i>
                <span>dashboard</span>
            </a>
        </li>
		
		 <!-- SESSION -->
       
        <!-- STUDENT -->
        <li class="opened active has-sub ">
            <a href="#">
                <i class="entypo-users"></i>
                <span>Students</span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="active ">
                    <a href="student_add.php">
                        <span><i class="entypo-dot"></i> Admit Student</span>
                    </a>
                </li>

                <!-- STUDENT BULK ADMISSION -->
               
                <!-- STUDENT INFORMATION -->
                <li class=" ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> Student Information</span>
                    </a>
                    <ul>
                                                    <li class="">
                                <a href="">
                                    <span>Nursery</span>
                                </a>
                            </li>
                                                    <li class="">
                                <a href="">
                                    <span>LKG</span>
                                </a>
                            </li>
                                                    <li class="">
                                <a href="">
                                    <span>UKG</span>
                                </a>
                            </li>
                                            </ul>
                </li>
				
				

            </ul>
        </li>
		
        <li class="opened active has-sub ">
            <a href="#">
                <i class="entypo-book"></i>
                <span>Activites</span>
            </a>
            <ul>
                <!-- STUDENT ADMISSION -->
                <li class="active ">
                    <a href="ActivityAdd.php">
                        <span><i class="entypo-dot"></i> Add Activity</span>
                    </a>
                </li>

                 <li class="active ">
                    <a href="ActivityAssign.php">
                        <span><i class="entypo-dot"></i> Assign Activity</span>
                    </a>
                </li>

                 <li class="active ">
                    <a href="ActivitesofStudents.php">
                        <span><i class="entypo-dot"></i> Activites of Students</span>
                    </a>
                </li>
                <li class="active ">
                    <a href="ListofActivites.php">
                        <span><i class="entypo-dot"></i> List of Activites</span>
                    </a>
                </li>

                <!-- STUDENT BULK ADMISSION -->
               
                <!-- STUDENT INFORMATION -->
               
                
                

            </ul>
        </li>
        
 





</div>	
		<div class="main-content">
		
			<div class="row">
	
	<div class="col-md-12 col-sm-12 clearfix" style="text-align:center;">
		<h2 style="font-weight:200; margin:0px; color: #FF9900">ADVANCE Activity School Project</h2>
    </div>
	
	<!-- Raw Links -->
	<div class="col-md-12 col-sm-12 clearfix ">
		
        <ul class="list-inline links-list pull-left">
        <!-- Language Selector -->	
				
           <li class="dropdown language-selector">
		   <strong style="color:#FF0000">Running Session:&nbsp;</strong>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                        	<i class="entypo-user"></i>admin                    </a>
		
								<ul class="dropdown-menu pull-left">
					<li>
						<a href="http://localhost/Activity/index.php?admin/manage_profile">
                        	<i class="entypo-info"></i>
							<span>Edit Profile</span>
						</a>
					</li>
					<li>
						<a href="http://localhost/Activity/index.php?admin/manage_profile">
                        	<i class="entypo-key"></i>
							<span>change password</span>
						</a>
					</li>
				</ul>
											</li>
        </ul>
        
        
		<ul class="list-inline links-list pull-right">
			           <li class="dropdown language-selector">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                         <span class="label label-success"><i class="entypo-globe"></i>&nbsp;Change Language&nbsp;<i class="entypo-down"></i></span>
                    </a>
				
				<ul class="dropdown-menu pull-left">
					                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/english">
                                            <img src="assets/images/flag/english.png" style="width:16px; height:16px;" />	
												 <span>english</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/bengali">
                                            <img src="assets/images/flag/bengali.png" style="width:16px; height:16px;" />	
												 <span>bengali</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/spanish">
                                            <img src="assets/images/flag/spanish.png" style="width:16px; height:16px;" />	
												 <span>spanish</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/arabic">
                                            <img src="assets/images/flag/arabic.png" style="width:16px; height:16px;" />	
												 <span>arabic</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/dutch">
                                            <img src="assets/images/flag/dutch.png" style="width:16px; height:16px;" />	
												 <span>dutch</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/russian">
                                            <img src="assets/images/flag/russian.png" style="width:16px; height:16px;" />	
												 <span>russian</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/chinese">
                                            <img src="assets/images/flag/chinese.png" style="width:16px; height:16px;" />	
												 <span>chinese</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/turkish">
                                            <img src="assets/images/flag/turkish.png" style="width:16px; height:16px;" />	
												 <span>turkish</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/portuguese">
                                            <img src="assets/images/flag/portuguese.png" style="width:16px; height:16px;" />	
												 <span>portuguese</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/hungarian">
                                            <img src="assets/images/flag/hungarian.png" style="width:16px; height:16px;" />	
												 <span>hungarian</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/french">
                                            <img src="assets/images/flag/french.png" style="width:16px; height:16px;" />	
												 <span>french</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/greek">
                                            <img src="assets/images/flag/greek.png" style="width:16px; height:16px;" />	
												 <span>greek</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/german">
                                            <img src="assets/images/flag/german.png" style="width:16px; height:16px;" />	
												 <span>german</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/italian">
                                            <img src="assets/images/flag/italian.png" style="width:16px; height:16px;" />	
												 <span>italian</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/thai">
                                            <img src="assets/images/flag/thai.png" style="width:16px; height:16px;" />	
												 <span>thai</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/urdu">
                                            <img src="assets/images/flag/urdu.png" style="width:16px; height:16px;" />	
												 <span>urdu</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/hindi">
                                            <img src="assets/images/flag/hindi.png" style="width:16px; height:16px;" />	
												 <span>hindi</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/latin">
                                            <img src="assets/images/flag/latin.png" style="width:16px; height:16px;" />	
												 <span>latin</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/indonesian">
                                            <img src="assets/images/flag/indonesian.png" style="width:16px; height:16px;" />	
												 <span>indonesian</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/japanese">
                                            <img src="assets/images/flag/japanese.png" style="width:16px; height:16px;" />	
												 <span>japanese</span>
                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="http://localhost/Activity/index.php?multilanguage/select_language/korean">
                                            <img src="assets/images/flag/korean.png" style="width:16px; height:16px;" />	
												 <span>korean</span>
                                        </a>
                                    </li>
                                                    
				</ul>
				
			</li>
			
			<li class="sep"></li>
			
			<li>
				<a href="logout.php">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>				
	</div>
	<br>
		
</div>



<hr style="margin-top:0px;" />


           <h3 style="">
           	<i class="entypo-right-circled"></i> 
				Add Activites          </h3>

			<hr>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-gradient" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
				Add Activites           	</div>
            </div>
			<div class="panel-body">
				
                <form action="http://localhost/Activity/index.php?admin/student/create/" class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	
					
					
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Date</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Activity Type</label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control selectboxit">
                              <option value="">Select</option>
                              <option value="male">male</option>
                              <option value="female">female</option>
                          </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Activity Name</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="address" value="" >
						</div> 
					</div>
					
                
					
                    
					
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-success btn-sm btn-icon icon-left"> <i class="entypo-plus"></i>Add Activity</button>
						</div>
					</div>
                </form>            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: 'http://localhost/Activity/index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>
			<!-- Footer -->
<footer class="main" align="center" style="color:#FF0000">© 2018 ADVANCE Activity School Project.</footer>
	

		</div>
		        	
	</div>
        <script type="text/javascript">
	function showAjaxModal(url)
	{
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="assets/images/preloader.gif" /></div>');
		
		// LOADING THE AJAX MODAL
		jQuery('#modal_ajax').modal('show', {backdrop: 'true'});
		
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
			}
		});
	}
	</script>
    
    <!-- (Ajax Modal)-->
    <div class="modal fade" id="modal_ajax">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" align="center">ADVANCE Activity School Project</h4>
                </div>
                
                <div class="modal-body" style="height:500px; overflow:auto;">
                
                    
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <script type="text/javascript">
	function confirm_modal(delete_url)
	{
		jQuery('#modal-4').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link').setAttribute('href' , delete_url);
	}
	</script>
    
    <!-- (Normal Modal)-->
    <div class="modal fade" id="modal-4">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
                </div>
                
                
                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger" id="delete_link">delete</a>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>    	
    
    
    

	<link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">
	<link rel="stylesheet" href="assets/js/selectboxit/jquery.selectBoxIt.css">

   	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/toastr.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/fileinput.js"></script>
    
    <script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/datatables/TableTools.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.js"></script>
	<script src="assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="assets/js/datatables/lodash.min.js"></script>
	<script src="assets/js/datatables/responsive/js/datatables.responsive.js"></script>
    <script src="assets/js/select2/select2.min.js"></script>
    <script src="assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>

    
	<script src="assets/js/neon-calendar.js"></script>
	<script src="assets/js/neon-chat.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>


<!-- SHOW TOASTR NOTIFIVATION -->


<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable();
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>    
</body>
</html>