<!DOCTYPE html>
<html lang="en">

<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Laravel Basic CRUD</title>
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
		<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
			
				<a class="brand" href=""><span>Menu</span></a>
	  </div>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="{{URL::to('/addcontact')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> Add Contact</span></a></li>
						<li><a href="{{URL::to('/allcontact')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> All Contact</span></a></li>
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">	
			
			
			<div class="row-fluid">	

				@yield('content')
								
			</div><!--/row-->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	
	
	<!-- start: JavaScript-->

		<script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('admin/js/modernizr.js')}}"></script>
	
		<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.cookie.js')}}"></script>
	
		<script src='{{asset('admin/js/fullcalendar.min.js')}}'></script>
	
		<script src='{{asset('admin/js/jquery.dataTables.min.js')}}'></script>

		<script src="{{asset('admin/js/excanvas.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('admin/js/counter.js')}}"></script>
	
		<script src="{{asset('admin/js/retina.js')}}"></script>

		<script src="{{asset('admin/js/custom.js')}}"></script>
		
		<script src="{{asset('admin/js/bootbox.min.js')}}"></script>
	<!-- end: JavaScript-->
	<script>
		$(document).on("click", "#delete", function(e){
			e.preventDefault();
			var link = $(this).attr("href");
			bootbox.confirm("Are you want to delete!!",function(confirmed){

				if(confirmed){
					window.location.href = link;
				};
			});
		});
	</script>
	
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
