<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Meta -->
	<meta name="description" content="SIMTA">
	<meta name="author" content="SI Fasilkom Unsri">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.png') }}">

	<title>SIMTA</title>

	<!-- vendor css -->
	<link href="{{ asset('theme/lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('theme/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('theme/lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

	<link href="{{ asset('theme/lib/prismjs/themes/prism-tomorrow.css') }}" rel="stylesheet">
	<link href="{{ asset('theme/lib/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('theme/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('theme/lib/select2/css/select2.min.css') }}" rel="stylesheet">

	<!-- template css -->
	<link rel="stylesheet" href="{{ asset('theme/assets/css/cassie.css') }}">
</head>

<body>
	@yield('content')

	<script src="{{ asset('theme/lib/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('theme/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('theme/lib/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('theme/lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('theme/lib/js-cookie/js.cookie.js') }}"></script>
	<script src="{{ asset('theme/lib/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('theme/lib/jquery.flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('theme/lib/jquery.flot/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('theme/lib/jquery.flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('theme/lib/jquery.flot/jquery.flot.threshold.js') }}"></script>
	<script src="{{ asset('theme/lib/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('theme/lib/jqvmap/maps/jquery.vmap.world.js') }}"></script>

	<script src="{{ asset('theme/assets/js/cassie.js') }}"></script>
	<script src="{{ asset('theme/assets/js/flot.sampledata.js') }}"></script>
	<script src="{{ asset('theme/assets/js/vmap.sampledata.js') }}"></script>
	<script src="{{ asset('theme/assets/js/dashboard-one.js') }}"></script>

	<script src="{{ asset('theme/lib/prismjs/prism.js') }}"></script>
	<script src="{{ asset('theme/lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('theme/lib/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
	<script src="{{ asset('theme/lib/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('theme/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>
	<script src="{{ asset('theme/lib/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('js/myscript.js') }}"></script>
</body>

</html>