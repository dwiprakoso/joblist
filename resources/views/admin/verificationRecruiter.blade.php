<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite(['resources/css/app.css','resources/js/app.js'])
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
      <title>Selection Process</title>
   </head>
   <body>
      @include('admin.components.sidebar')     
      <div class="sm:ml-80">
         <div class="p-4 m-4 rounded-lg dark:border-gray-700">
            <nav class="flex mb-4" aria-label="Breadcrumb">
               <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
               <li class="inline-flex items-center">
                   <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                     <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                     </svg>
                     Verifikasi Recruiter
                   </a>
               </li>
               </ol>
           </nav>
            
            
            
               <div id="pie-chart" class="items-center p-4 justify-center rounded bg-white drop-shadow-md dark:bg-gray-800">
                  <p class="text-sm font-bold text-right mb-2 text-black dark:text-gray-500">
                     Respon Perusahaan (dummy)
                  </p>
                  @include('admin.components.table') 
               </div>
              

            
         </div>
      </div>
      

   </body>
</html>