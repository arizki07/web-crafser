@include('shared.head')

<body>
    <script src="assets/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('shared.sidebar')
        <!-- Navbar -->
        @include('shared.navbar')
        <div class="page-wrapper">
            @yield('adminCrafser')
            @include('shared.footer')
        </div>
    </div>
    @include('shared.script')
</body>

</html>
