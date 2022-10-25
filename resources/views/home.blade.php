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
    @if ($errors->any())
    <div class="max-w-xs p-4 mt-3 ml-auto mr-3 rounded-md bg-red-50">
        <div class="flex">
          <div class="flex-shrink-0">
            <!-- Heroicon name: mini/x-circle -->
            <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">There were {{ $errors->count() }} errors with your submission</h3>
            <div class="mt-2 text-sm text-red-700">
                <ul role="list" class="pl-5 space-y-1 list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              
            </div>
          </div>
        </div>
      </div>
@endif
    
    <!-- panel -->
    <form autocomplete="off" method="POST" action="{{ route('generate') }}" >
    @csrf
    <div class="max-w-xl px-6 mx-auto mt-16 text-center sm:px-6 lg:px-8">
        <!-- Content goes here -->
        <div class="m-5">
            <h1 class="text-4xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">SnapMyWifi</h1>
            <h3 class="pt-3 text-2xl font-semibold">Share WiFi.<br> No Passwords.<br> Limited Time.</h3>
        </div>
        <div class="overflow-hidden text-left bg-gray-800 divide-y divide-gray-900 rounded-lg shadow">
            <div class="px-4 py-5 sm:px-6">
                
                    <h3 class="text-lg font-medium font-bold leading-6 text-gray-200">Create Wifi QR Code</h3>
                 
                  
            </div>
            <!-- end header -->
            <div class="px-4 py-5 sm:p-6">
                

                    <div>
                        <label for="wifi_ssid" class="block text-sm font-medium ">Wifi Name Exact</label>
                        <div class="mt-1">
                            <input type="text" name="wifi_ssid" id="wifi_ssid"
                                class="block w-full bg-gray-900 border-none rounded-md shadow-sm shadow-lg focus:border-gray-900 focus:ring-indigo-900 sm:text-sm"
                                placeholder="MyWifi">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="wifi_password" class="block text-sm font-medium ">Wifi Password</label>
                        <div class="mt-1">
                            <input type="text" name="wifi_password" id="wifi_password"
                                class="block w-full bg-gray-900 border-none rounded-md shadow-sm shadow-lg focus:border-gray-900 focus:ring-indigo-900 sm:text-sm"
                                placeholder="password123">
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="duration" class="block text-sm font-medium ">Wifi time for guests until they get disconnected (Hours)</label>
                        <div class="mt-1">
                            <input type="number" name="duration" id="duration"
                                class="block w-full bg-gray-900 border-none rounded-md shadow-sm shadow-lg focus:border-gray-900 focus:ring-indigo-900 sm:text-sm"
                                placeholder="1">
                        </div>
                    </div>
        
                
            </div>
            <!-- end body -->
            <div class="px-4 py-4 text-center sm:px-6">
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

        <div class="flex items-center justify-center pt-5 mx-auto">
            <h1 class="text-xs"><a class="text-indigo-400" href="https://twitter.com/ItsNash0">@ItsNash0</a> & <a class="text-indigo-400" href="https://twitter.com/claradlatorre"> @claradlatorre</a> with    
            </h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-red-600">
                <path d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z" />
        </svg>
        </div>

        <h1 class="py-2 text-sm text-gray-400">No user data is collected and wifi credentials are encrypted.</h1>
        
        
        

</body>

</html>