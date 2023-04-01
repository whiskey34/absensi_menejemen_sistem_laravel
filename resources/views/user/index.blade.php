@extends('user-layouts.main')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6 text-left" >
     <h4 class="page-title">Dashboard</h4>
     <ol class="breadcrumb">
         <li class="breadcrumb-item active">Welcome to Attendance Management System</li>
     </ol>
</div>
@endsection


@section('user-content')
    <div class="row">
        <h3>Attendance for employees</h3>

        <h5>Welcome back, "nama user/employee"</h5>

        <p><?php 

            $current_time = date('H:i'); // Get the current time in "hour:minute" format

            if ($current_time >= '07:00' && $current_time <= '07:59') {
            echo "It's time to check in!";
            } elseif ($current_time >= '15:00' && $current_time <= '16:59') {
            echo "It's time to check out!";
            } else {
            echo "Sorry, it's not check-in/check-out time yet.";
            }

        ?>

        </p>
    </div>
@endsection


@section('script')
<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection