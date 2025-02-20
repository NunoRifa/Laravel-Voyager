@extends('_init.init')

@section('content_init')
<!-- ===== Preloader Start ===== -->
<div
    x-show="loaded"
    x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
    class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
    <div
        class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"></div>
</div>
<!-- ===== Preloader End ===== -->

<div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar Start ===== -->
    @include('_init.sidebar')
    <!-- ===== Sidebar End ===== -->

    <!-- ===== Content Area Start ===== -->
    <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <!-- ===== Header Start ===== -->
        @include('_init.header')
        <!-- ===== Header End ===== -->

        <!-- ===== Main Content Start ===== -->
        @yield('content_main')
        <!-- ===== Main Content End ===== -->

    </div>
    <!-- ===== Content Area End ===== -->
</div>
@endsection