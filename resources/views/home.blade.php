<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased text-gray-200 bg-gray-900">
    <!-- tailwindcss landing page  -->
    
    <!-- panel -->
    <form autocomplete="off" method="POST" action="/generate" >
        @csrf
    <div class="max-w-3xl mx-auto mt-40 text-center sm:px-6 lg:px-8">
        <!-- Content goes here -->
        <div class="m-5">
            <h1 class="text-4xl font-extrabold">SnapMyWifi</h1>
            <h3 class="text-2xl font-semibold">Share Wifi to your guests without sharing the password.</h3>
        </div>
        <div class="overflow-hidden text-left bg-gray-800 divide-y divide-gray-200 rounded-lg shadow">
            <div class="px-4 py-5 sm:px-6">
                
                    <h3 class="text-lg font-medium font-bold leading-6 text-gray-200">Create Wifi QR Code</h3>
                 
                  
            </div>
            <!-- end header -->
            <div class="px-4 py-5 sm:p-6">
                

                    <div>
                        <label for="wifi_ssid" class="block text-sm font-medium ">Wifi Name Exact</label>
                        <div class="mt-1">
                            <input type="text" name="wifi_ssid" id="wifi_ssid"
                                class="block w-full bg-gray-900 border-gray-300 rounded-md shadow-sm focus:border-gray-900 focus:ring-indigo-900 sm:text-sm"
                                placeholder="MyWifi">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="wifi_password" class="block text-sm font-medium ">Wifi Password</label>
                        <div class="mt-1">
                            <input type="password" name="wifi_password" id="wifi_password"
                                class="block w-full bg-gray-900 border-gray-300 rounded-md shadow-sm focus:border-gray-900 focus:ring-indigo-900 sm:text-sm"
                                placeholder="password123">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="duration" class="block text-sm font-medium ">Wifi time for guests until they get disconnected (Hours)</label>
                        <div class="mt-1">
                            <input type="number" name="duration" id="duration"
                                class="block w-full bg-gray-900 border-gray-300 rounded-md shadow-sm focus:border-gray-900 focus:ring-indigo-900 sm:text-sm"
                                placeholder="1">
                        </div>
                    </div>
        
                
            </div>
            <!-- end body -->
            <div class="px-4 py-4 sm:px-6">
              <!-- Content goes here -->
              <button type="submit" class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <!-- Heroicon name: mini/envelope -->
                
                <svg class="w-5 h-5 mr-3 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z" />
                  </svg>
                  
                Generate QR Code
              </button>
              <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
            </div>
            <!-- end footer -->
          </div>
        </form>
        

</body>

</html>