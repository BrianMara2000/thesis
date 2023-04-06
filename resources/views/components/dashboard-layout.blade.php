<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Thesis2</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>
    <header class="fixed z-10 top-0 right-0 left-0 bg-white ">
        <div class=" flex flex-row ">
            <div class=" flex flex-1 justify-between p-10">
                <img class=" ml-80" src="/images/icon/menu.png" alt="">
                <img src="/images/icon/person.png" alt="">
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <div class=" fixed z-20 flex flex-col top-0 bottom-0 left-0 w-1/6 pt-6 px-10 bg-custom-blue1">
        <!-- Logo -->
        <div class=" mr-8 mb-20">
            <img src="/images/icon/thesis-logo.png" alt="">
        </div>
        <div class=" flex flex-col space-y-10">
            <div class=" flex flex-row items-center px-3 space-x-5">
                <img class=" " src="/images/icon/home-white.png" alt="">
                <h1 class=" font-montserrat text-xl text-white font-medium">Dashboard</h1>
            </div>
            <div class=" flex flex-row items-center px-3 space-x-5">
                <img class=" " src="/images/icon/alarm.png " alt="">
                <h1 class=" font-montserrat text-xl text-white font-medium">Alarms</h1>
            </div>
            <div class=" flex flex-row items-center px-3 space-x-5">
                <img class=" " src="/images/icon/devices.png" alt="">
                <h1 class=" font-montserrat text-xl text-white font-medium">Devices</h1>
            </div>
            <div class=" flex flex-row items-center px-3 space-x-5">
                <img class=" " src="/images/icon/users.png" alt="">
                <h1 class=" font-montserrat text-xl text-white font-medium">Users</h1>
            </div>
            <div class=" flex flex-row items-center px-3 space-x-5">
                <img class=" " src="/images/icon/reports.png" alt="">
                <h1 class=" font-montserrat text-xl text-white font-medium">Reports</h1>
            </div>
            <div class=" flex flex-row items-center px-3 space-x-5">
                <img class=" " src="/images/icon/settings.png" alt="">
                <h1 class=" font-montserrat text-xl text-white font-medium">Settings</h1>
            </div>
            <div class=" flex flex-row items-center px-3 space-x-5">
                <img class=" " src="/images/icon/signout.png" alt="">
                <h1 class=" font-montserrat text-xl text-white font-medium">Signout</h1>
            </div>
        </div>
    </div>

    <main>
        {{ $slot }}
    </main>
    <x-flash-message />
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    
</body>
</html>