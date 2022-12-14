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
    
    <div class="max-w-xl px-6 mx-auto mt-16 text-center sm:px-6 lg:px-8">
        <!-- Content goes here -->
        <div class="m-5">
            
            <h1 class="text-4xl font-extrabold text-transparent md:text-5xl bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">SnapMyWifi</h1>
            
            <h3 class="pt-2 text-2xl font-semibold">{{ $profile['wifi_ssid'] }}</h3>
            <h3 class="pt-2 font-semibold text-xlxl">Enjoy WiFi for {{ $profile['duration'] }} Hours</h3>
          </div>
        <div class="overflow-hidden text-left bg-gray-800 divide-y divide-gray-900 rounded-lg shadow">
            <div class="px-4 py-5 sm:px-6">
                
                    <h3 class="text-lg font-medium font-bold leading-6 text-gray-200">Scan Wifi QR Code</h3>
                 
                  
            </div>
            <!-- end header -->
            <div class="px-4 py-5 t sm:p-6">
                
                
                <img class="mx-auto rounded-3xl" src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl={{request()->url()}}">
                
               
        
            </div>
            <!-- end body -->
            <div class="grid grid-cols-2 gap-4 px-4 py-4 sm:px-6">
              <!-- Content goes here -->
              <a href="/{{ $profile['share_url'] }}/download" class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <!-- Heroicon name: mini/envelope -->
                  <svg class="w-5 h-5 mr-3 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                  </svg>
                  
                  
                Install WiFi
              </a>
              <button type="submit" class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <!-- Heroicon name: mini/envelope -->
                  
                  <svg class="w-5 h-5 mr-3 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                  </svg>
                  
                  
                  
                Print WiFi QR Code
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