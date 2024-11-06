<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber-like Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="flex items-center justify-center p-6 bg-white shadow-md">
        <div class="flex space-x-6">
            <a href="#" class="text-gray-600 font-bold hover:text-gray-900 border-b-2 border-pink-600">Sessions</a>
            <a href="#" class="text-gray-600 font-bold hover:text-gray-900">Store</a>
        </div>
    </nav>
    <div class="flex justify-between items-center px-8 py-4">
        <h1 class="font-bold">Upcoming Sessions</h1>
        <p class="text-red-400 cursor-pointer">View All</p>
    </div>

    {{-- Instructor Block --}}
    <div class="flex justify-center items-center">
        <div class="flex flex-col justify-center items-center border border-red-400 rounded-lg p-6 bg-white shadow-md w-80">
            <div class="flex justify-between w-full mb-2">
                <p class="font-semibold">Instructor</p>
                <p class="font-semibold">Time</p>
            </div>
            <div class="flex justify-between w-full">
                <p>Jasmine Park</p>
                <p>14:00 - 15:00</p>
            </div>
        </div>
    </div>
    
    <div class="flex justify-between items-center px-8 py-4">
        <h1 class="font-bold">Instructors Nearby</h1>
        <p class="text-red-400 cursor-pointer">View All</p>
    </div>
    <div class="flex justify-center items-center space-x-4 p-4 flex-wrap">
        <div class="flex flex-col space-y-4">
            <!-- Box 1 -->
            <div class="flex flex-col justify-center items-center border border-red-700 rounded-lg p-4 bg-slate-400 w-40 shadow-md">
                <div class="flex justify-between w-full mb-2">
                    <p class="font-semibold">Instructor</p>
                    <p class="font-semibold">Time</p>
                </div>
                <div class="flex justify-between w-full">
                    <p>Jasmine Park</p>
                    <p>14:00 - 15:00</p>
                </div>
            </div>
            
            <!-- Box 2 -->
            <div class="flex flex-col justify-center items-center border border-red-700 rounded-lg p-4 bg-slate-400 w-40 shadow-md">
                <div class="flex justify-between w-full mb-2">
                    <p class="font-semibold">Instructor</p>
                    <p class="font-semibold">Time</p>
                </div>
                <div class="flex justify-between w-full">
                    <p>John Doe</p>
                    <p>15:00 - 16:00</p>
                </div>
            </div>
        </div>
    
        <div class="flex flex-col space-y-4">
            <!-- Box 3 -->
            <div class="flex flex-col justify-center items-center border border-red-700 rounded-lg p-4 bg-slate-400 w-40 shadow-md">
                <div class="flex justify-between w-full mb-2">
                    <p class="font-semibold">Instructor</p>
                    <p class="font-semibold">Time</p>
                </div>
                <div class="flex justify-between w-full">
                    <p>Alex Lee</p>
                    <p>16:00 - 17:00</p>
                </div>
            </div>
            
            <!-- Box 4 -->
            <div class="flex flex-col justify-center items-center border border-red-700 rounded-lg p-4 bg-slate-400 w-40 shadow-md">
                <div class="flex justify-between w-full mb-2">
                    <p class="font-semibold">Instructor</p>
                    <p class="font-semibold">Time</p>
                </div>
                <div class="flex justify-between w-full">
                    <p>Maria Smith</p>
                    <p>17:00 - 18:00</p>
                </div>
            </div>
        </div>
    </div>
    



    <!-- Footer -->
    <footer class="py-8 text-center text-white bg-gray-900">
        <p>© 2023 Your Brand. All rights reserved.</p>
    </footer>
</body>
</html>
