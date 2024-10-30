<!--

 * DEVELOPER : Abdulsalam Amtech
 * EMAIL: abdulsalamamtech@gmail.com

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        TailDash Laravel Dashboard
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/index.js"></script>
</head>

<body x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">



    <!-- ===== Preloader Start ===== -->
        {{-- @include('dashboard.partials.preloader') --}}
    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">

        <!-- ===== Sidebar Start ===== -->
            @include('dashboard.partials.sidebar')
        <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

            <!-- ===== Header Start ===== -->
                @include('dashboard.partials.header')
            <!-- ===== Header End ===== -->

            <!-- ===== Main Content Start ===== -->
            <main>
                {{-- @yield('content') --}}
            </main>
            <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
</body>

</html>


