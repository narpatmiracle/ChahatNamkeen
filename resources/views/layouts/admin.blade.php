<!DOCTYPE html>
<html lang="en">
@include('includes.Admin.head')

<body data-sidebar="dark" data-layout-mode="light">
    @include('includes.Admin.header')
    @include('includes.Admin.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    @include('includes.Admin.Script')
</body>

</html>
