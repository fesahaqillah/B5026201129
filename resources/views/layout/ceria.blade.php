<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

    {{-- sidebar --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>

</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">

        <div class="img bg-wrap text-center py-4" >
            <img src="{{URL::asset('/images/about_fesa.png')}}" class="img-fluid rounded-circle mt-1" alt="profile Pic" width="50%">
            <h5 class="text-light mt-3">Fesa Haqillah Haya</h5>
            <h6 class="text-light">5026201129</h6>
        </div>
    <ul class="list-unstyled components" style="margin-bottom: 245px" >
      <li>
        <a href="/pegawai"> Pegawai</a>
      </li>
      <li>
        <a href="/absen"> Absen</a>
      </li>
      <li>
        <a href="#"> Tugas Minggu Depan</a>
      </li>
      <li>
        <a href="#"> Praktikum</a>
      </li>
    </ul>

    </nav>

    <div class="container-fluid" style="margin-top:70px">
        <h1>@yield('judulhalaman')</h1>
        @section('isikonten')
        @show
        <br>
        <br>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
    <center> <div class="copyright">
      &copy; Copyright <strong><span>Fesa Haqillah Haya 5026201129</span></strong>
    </div></center>

    {{-- </footer>

    </div>

    </div>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>

    <script>
        $(function () {
                $.extend(true, $.fn.datetimepicker.defaults, {
                    icons: {
                        time: 'far fa-clock',
                        date: 'far fa-calendar',
                        up: 'fas fa-arrow-up',
                        down: 'fas fa-arrow-down',
                        previous: 'fas fa-chevron-left',
                        next: 'fas fa-chevron-right',
                        today: 'far fa-calendar-check-o',
                        clear: 'far fa-trash',
                        close: 'far fa-times'
                    }
                });
            });
    </script>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
        });
    </script>

    {{-- <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Hardhika Propitadewa 5026201015</span></strong>
    </div> --}}

    {{-- </footer> --}}

</body>
</html>
