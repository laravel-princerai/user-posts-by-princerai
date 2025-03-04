<!DOCTYPE html>
<html lang="en">
    @include('admin.layouts.head')
    <body class="g-sidenav-show  bg-gray-100">
        @include('admin.layouts.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            @include('admin.layouts.sidebar')
            @yield('content')
        </main>
        @include('admin.layouts.scripts')
    </body>
    </html>