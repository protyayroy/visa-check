<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Namibia Visa | @yield('title', 'Dashboard') </title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/css/vertical-layout-light/style.css">

    <link rel="stylesheet" href="{{ asset('backend') }}/custom.css">
    <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon.png" />

</head>

<body>


    <div class="container-scroller">

        @include('admin.layouts.header')

        <div class="container-fluid page-body-wrapper">

            @include('admin.layouts.sidebar')

            <div class="main-panel">

                @yield('content')

                @include('admin.layouts.footer')

            </div>
        </div>
    </div>

    <script src="{{ asset('backend') }}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('backend') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('backend') }}/js/off-canvas.js"></script>
    <script src="{{ asset('backend') }}/js/template.js"></script>
    <script src="{{ asset('backend') }}/js/dashboard.js"></script>
    <script src="{{ asset('backend') }}/js/Chart.roundedBarCharts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('backend') }}/js/jquery-3.6.3.min.js"></script>
    {{-- <script src="{{ asset('backend') }}/js/bootstrap.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#bootstrap_datatable').DataTable({
                scrollX: true,
            });
        });

        $(".loader").hide();
    </script>


</body>

</html>
