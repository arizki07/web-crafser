<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('layouts/head')

</head>

<body>
    <!-- ====== Navbar Section Start -->
    @include('layouts/topbar')
    <!-- ====== Navbar Section End -->

    <!-- ====== Content Section -->
    @yield('webcrafser')
    <!-- ====== Content Section End -->

    <!-- ====== Footer Section Start -->
    @include('layouts/footer')
    <!-- ====== Footer Section End -->

    <!-- ====== Components Start -->
    @include('layouts/compo')
    <!-- ====== Components End -->

    <!-- ====== All Scripts -->
    @include('layouts/script')

</body>

</html>
