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
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512"><path d="M144 160A80 80 0 1 0 144 0a80 80 0 1 0 0 160zm368 0A80 80 0 1 0 512 0a80 80 0 1 0 0 160zM0 298.7C0 310.4 9.6 320 21.3 320l213.3 0c.2 0 .4 0 .7 0c-26.6-23.5-43.3-57.8-43.3-96c0-7.6 .7-15 1.9-22.3c-13.6-6.3-28.7-9.7-44.6-9.7l-42.7 0C47.8 192 0 239.8 0 298.7zM320 320c24 0 45.9-8.8 62.7-23.3c2.5-3.7 5.2-7.3 8-10.7c2.7-3.3 5.7-6.1 9-8.3C410 262.3 416 243.9 416 224c0-53-43-96-96-96s-96 43-96 96s43 96 96 96zm65.4 60.2c-10.3-5.9-18.1-16.2-20.8-28.2l-103.2 0C187.7 352 128 411.7 128 485.3c0 14.7 11.9 26.7 26.7 26.7l300.6 0c-2.1-5.2-3.2-10.9-3.2-16.4l0-3c-1.3-.7-2.7-1.5-4-2.3l-2.6 1.5c-16.8 9.7-40.5 8-54.7-9.7c-4.5-5.6-8.6-11.5-12.4-17.6l-.1-.2-.1-.2-2.4-4.1-.1-.2-.1-.2c-3.4-6.2-6.4-12.6-9-19.3c-8.2-21.2 2.2-42.6 19-52.3l2.7-1.5c0-.8 0-1.5 0-2.3s0-1.5 0-2.3l-2.7-1.5zM533.3 192l-42.7 0c-15.9 0-31 3.5-44.6 9.7c1.3 7.2 1.9 14.7 1.9 22.3c0 17.4-3.5 33.9-9.7 49c2.5 .9 4.9 2 7.1 3.3l2.6 1.5c1.3-.8 2.6-1.6 4-2.3l0-3c0-19.4 13.3-39.1 35.8-42.6c7.9-1.2 16-1.9 24.2-1.9s16.3 .6 24.2 1.9c22.5 3.5 35.8 23.2 35.8 42.6l0 3c1.3 .7 2.7 1.5 4 2.3l2.6-1.5c16.8-9.7 40.5-8 54.7 9.7c2.3 2.8 4.5 5.8 6.6 8.7c-2.1-57.1-49-102.7-106.6-102.7zm91.3 163.9c6.3-3.6 9.5-11.1 6.8-18c-2.1-5.5-4.6-10.8-7.4-15.9l-2.3-4c-3.1-5.1-6.5-9.9-10.2-14.5c-4.6-5.7-12.7-6.7-19-3l-2.9 1.7c-9.2 5.3-20.4 4-29.6-1.3s-16.1-14.5-16.1-25.1l0-3.4c0-7.3-4.9-13.8-12.1-14.9c-6.5-1-13.1-1.5-19.9-1.5s-13.4 .5-19.9 1.5c-7.2 1.1-12.1 7.6-12.1 14.9l0 3.4c0 10.6-6.9 19.8-16.1 25.1s-20.4 6.6-29.6 1.3l-2.9-1.7c-6.3-3.6-14.4-2.6-19 3c-3.7 4.6-7.1 9.5-10.2 14.6l-2.3 3.9c-2.8 5.1-5.3 10.4-7.4 15.9c-2.6 6.8 .5 14.3 6.8 17.9l2.9 1.7c9.2 5.3 13.7 15.8 13.7 26.4s-4.5 21.1-13.7 26.4l-3 1.7c-6.3 3.6-9.5 11.1-6.8 17.9c2.1 5.5 4.6 10.7 7.4 15.8l2.4 4.1c3 5.1 6.4 9.9 10.1 14.5c4.6 5.7 12.7 6.7 19 3l2.9-1.7c9.2-5.3 20.4-4 29.6 1.3s16.1 14.5 16.1 25.1l0 3.4c0 7.3 4.9 13.8 12.1 14.9c6.5 1 13.1 1.5 19.9 1.5s13.4-.5 19.9-1.5c7.2-1.1 12.1-7.6 12.1-14.9l0-3.4c0-10.6 6.9-19.8 16.1-25.1s20.4-6.6 29.6-1.3l2.9 1.7c6.3 3.6 14.4 2.6 19-3c3.7-4.6 7.1-9.4 10.1-14.5l2.4-4.2c2.8-5.1 5.3-10.3 7.4-15.8c2.6-6.8-.5-14.3-6.8-17.9l-3-1.7c-9.2-5.3-13.7-15.8-13.7-26.4s4.5-21.1 13.7-26.4l3-1.7zM472 384a40 40 0 1 1 80 0 40 40 0 1 1 -80 0z"/>
                        </svg>
                        Verifikasi Recruiter
                     </a>
                  </li>
               </ol>
            </nav>
            <div class="grid grid-cols-3 p-4 gap-4 items-center justify-center mb-4 rounded bg-slate-100 shadow-md dark:bg-gray-800">
               {{-- Total Job Post--}}
               <div class="flex items-center p-4 rounded bg-fd7d09 h-20 dark:bg-gray-800">
                  <h1 class="text-lg font-medium leading-none tracking-tight text-white dark:text-white">Total Job Post <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">24</span></h1>
               </div>
               {{-- Total Pendaftar --}}
               <div class="flex items-center p-4 rounded bg-fd1d02 h-20 dark:bg-gray-800">
                  <h1 class="text-lg font-medium leading-none tracking-tight text-white dark:text-white">Total Pendaftar <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">156</span></h1>
               </div>
               {{-- Total Perusahaan --}}
               <div class="flex items-center p-4 rounded bg-fd1d02 h-20 dark:bg-gray-800">
                  <h1 class="text-lg font-medium leading-none tracking-tight text-white dark:text-white">Total Perusahaan <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">42</span></h1>
               </div>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
               <div class="flex justify-between items-center mb-6">
                  <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">Data Management</h2>
               </div>
               
               <!-- Tab Navigation -->
               <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                  <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="multiViewTab" role="tablist">
                     <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 active" 
                           id="companies-tab" 
                           data-tabs-target="#companies" 
                           type="button" 
                           role="tab" 
                           aria-controls="companies" 
                           aria-selected="true">
                           Perusahaan
                        </button>
                     </li>
                     <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" 
                           id="applicants-tab" 
                           data-tabs-target="#applicants" 
                           type="button" 
                           role="tab" 
                           aria-controls="applicants" 
                           aria-selected="false">
                           Pendaftar
                        </button>
                     </li>
                     <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" 
                           id="jobposts-tab" 
                           data-tabs-target="#jobposts" 
                           type="button" 
                           role="tab" 
                           aria-controls="jobposts" 
                           aria-selected="false">
                           Lowongan Pekerjaan
                        </button>
                     </li>
                  </ul>
               </div>
               
               <!-- Tab Content -->
               <div id="multiViewTabContent">
                  <!-- Companies Tab Content -->
                  <div class="block" id="companies" role="tabpanel" aria-labelledby="companies-tab">
                     <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                           <thead class="text-xs font-semibold uppercase bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-t-lg">
                              <tr>
                                 <th scope="col" class="px-6 py-4">Nama Perusahaan</th>
                                 <th scope="col" class="px-6 py-4">Email</th>
                                 <th scope="col" class="px-6 py-4">No Hp</th>
                                 <th scope="col" class="px-6 py-4">Linkedin</th>
                                 <th scope="col" class="px-6 py-4 text-center">Status</th>
                                 <th scope="col" class="px-6 py-4 text-center">Detail</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Company 1 -->
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                       <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center mr-3 dark:bg-gray-700">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                          </svg>
                                       </div>
                                       <div>
                                          <p class="font-semibold">PT. Tech Solutions Indonesia</p>
                                          <p class="text-xs text-gray-500 dark:text-gray-400">ID: 101</p>
                                       </div>
                                    </div>
                                 </th>
                                 <td class="px-6 py-4">
                                    <div class="flex items-center">
                                       <div class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                                       hr@techsolutions.co.id
                                    </div>
                                 </td>
                                 <td class="px-6 py-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                       021-5553210
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 font-medium">
                                    techsolutions-id
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                       verified
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                       <button class="p-1.5 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition-colors dark:bg-blue-900 dark:text-blue-300 dark:hover:bg-blue-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                          </svg>
                                       </button>
                                       <button class="p-1.5 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition-colors dark:bg-red-900 dark:text-red-300 dark:hover:bg-red-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                          </svg>
                                       </button>
                                    </div>
                                 </td>
                              </tr>
                              
                              <!-- Company 2 -->
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                       <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center mr-3 dark:bg-gray-700">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                          </svg>
                                       </div>
                                       <div>
                                          <p class="font-semibold">Digital Innovations</p>
                                          <p class="text-xs text-gray-500 dark:text-gray-400">ID: 102</p>
                                       </div>
                                    </div>
                                 </th>
                                 <td class="px-6 py-4">
                                    <div class="flex items-center">
                                       <div class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                                       info@digitalinnovations.com
                                    </div>
                                 </td>
                                 <td class="px-6 py-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                       021-4445678
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 font-medium">
                                    digitalinnovations
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                                       pending
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                       <button class="p-1.5 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition-colors dark:bg-blue-900 dark:text-blue-300 dark:hover:bg-blue-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                          </svg>
                                       </button>
                                       <button class="p-1.5 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition-colors dark:bg-red-900 dark:text-red-300 dark:hover:bg-red-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                          </svg>
                                       </button>
                                    </div>
                                 </td>
                              </tr>
                              
                              <!-- Company 3 -->
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                       <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center mr-3 dark:bg-gray-700">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                          </svg>
                                       </div>
                                       <div>
                                          <p class="font-semibold">Future Systems</p>
                                          <p class="text-xs text-gray-500 dark:text-gray-400">ID: 103</p>
                                       </div>
                                    </div>
                                 </th>
                                 <td class="px-6 py-4">
                                    <div class="flex items-center">
                                       <div class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                                       hr@futuresystems.com
                                    </div>
                                 </td>
                                 <td class="px-6 py-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                       021-7778899
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 font-medium">
                                    futuresystems
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                       verified
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                       <button class="p-1.5 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition-colors dark:bg-blue-900 dark:text-blue-300 dark:hover:bg-blue-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                          </svg>
                                       </button>
                                       <button class="p-1.5 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition-colors dark:bg-red-900 dark:text-red-300 dark:hover:bg-red-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                          </svg>
                                       </button>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  
                  <!-- Applicants Tab Content -->
                  <div class="hidden" id="applicants" role="tabpanel" aria-labelledby="applicants-tab">
                     <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                           <thead class="text-xs font-semibold uppercase bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-t-lg">
                              <tr>
                                 <th scope="col" class="px-6 py-4">Nama Pendaftar</th>
                                 <th scope="col" class="px-6 py-4">Email</th>
                                 <th scope="col" class="px-6 py-4">No Hp</th>
                                 <th scope="col" class="px-6 py-4">Pendidikan</th>
                                 <th scope="col" class="px-6 py-4 text-center">Status</th>
                                 <th scope="col" class="px-6 py-4 text-center">Detail</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Applicant 1 -->
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                       <div class="w-10 h-10 bg-gray-200 rounded-full overflow-hidden flex items-center justify-center mr-3 dark:bg-gray-700">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                          </svg>
                                       </div>
                                       <div>
                                          <p class="font-semibold">Ahmad Rizki</p>
                                          <p class="text-xs text-gray-500 dark:text-gray-400">ID: 201</p>
                                       </div>
                                    </div>
                                 </th>
                                 <td class="px-6 py-4">
                                    <div class="flex items-center">
                                       <div class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                                       ahmad.rizki@email.com
                                    </div>
                                 </td>
                                 <td class="px-6 py-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                       081234567890
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 font-medium">
                                    S1 Teknik Informatika
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                       verified
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                       <button class="p-1.5 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition-colors dark:bg-green-900 dark:text-green-300 dark:hover:bg-green-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                          </svg>
                                       </button>
                                    </div>
                                 </td>
                              </tr>
                              
                              <!-- Applicant 2 -->
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                       <div class="w-10 h-10 bg-gray-200 rounded-full overflow-hidden flex items-center justify-center mr-3 dark:bg-gray-700">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                          </svg>
                                       </div>
                                       <div>
                                          <p class="font-semibold">Siti Nurhayati</p>
                                          <p class="text-xs text-gray-500 dark:text-gray-400">ID: 202</p>
                                       </div>
                                    </div>
                                 </th>
                                 <td class="px-6 py-4">
                                    <div class="flex items-center">
                                       <div class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                                       siti.nur@email.com
                                    </div>
                                 </td>
                                 <td class="px-6 py-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                       089876543210
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 font-medium">
                                    S1 Manajemen Bisnis
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                                       pending
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                       <button class="p-1.5 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition-colors dark:bg-green-900 dark:text-green-300 dark:hover:bg-green-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                          </svg>
                                       </button>
                                    </div>
                                 </td>
                              </tr>
                              
                              <!-- Applicant 3 -->
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                       <div class="w-10 h-10 bg-gray-200 rounded-full overflow-hidden flex items-center justify-center mr-3 dark:bg-gray-700">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                          </svg>
                                       </div>
                                       <div>
                                          <p class="font-semibold">Budi Santoso</p>
                                          <p class="text-xs text-gray-500 dark:text-gray-400">ID: 203</p>
                                       </div>
                                    </div>
                                 </th>
                                 <td class="px-6 py-4">
                                    <div class="flex items-center">
                                       <div class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                                       budi.s@email.com
                                    </div>
                                 </td>
                                 <td class="px-6 py-4">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                       087654321098
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 font-medium">
                                    D3 Teknik Elektro
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                       verified
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                       <button class="p-1.5 bg-green-100 text-green-600 rounded-lg hover:bg-green-200 transition-colors dark:bg-green-900 dark:text-green-300 dark:hover:bg-green-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                          </svg>
                                       </button>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  
                  <!-- Job Posts Tab Content -->
                  <!-- Job Posts Tab Content -->
                  <div class="hidden" id="jobposts" role="tabpanel" aria-labelledby="jobposts-tab">
                     <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                           <thead class="text-xs font-semibold uppercase bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-t-lg">
                              <tr>
                                 <th scope="col" class="px-6 py-4">Posisi</th>
                                 <th scope="col" class="px-6 py-4">Perusahaan</th>
                                 <th scope="col" class="px-6 py-4">Lokasi</th>
                                 <th scope="col" class="px-6 py-4">Gaji</th>
                                 <th scope="col" class="px-6 py-4 text-center">Status</th>
                                 <th scope="col" class="px-6 py-4 text-center">Detail</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Job Post rows would go here -->
                              <!-- Example Job Post -->
                              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                                 <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                       <div class="w-10 h-10 bg-gray-200 rounded-lg flex items-center justify-center mr-3 dark:bg-gray-700">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 dark:text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                          </svg>
                                       </div>
                                       <div>
                                          <p class="font-semibold">Software Developer</p>
                                          <p class="text-xs text-gray-500 dark:text-gray-400">ID: 301</p>
                                       </div>
                                    </div>
                                 </th>
                                 <td class="px-6 py-4">
                                    PT. Tech Solutions Indonesia
                                 </td>
                                 <td class="px-6 py-4">
                                    Jakarta
                                 </td>
                                 <td class="px-6 py-4 font-medium">
                                    Rp 8.000.000 - 15.000.000
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                       active
                                    </span>
                                 </td>
                                 <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                       <button class="p-1.5 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition-colors dark:bg-blue-900 dark:text-blue-300 dark:hover:bg-blue-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                          </svg>
                                       </button>
                                       <button class="p-1.5 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition-colors dark:bg-red-900 dark:text-red-300 dark:hover:bg-red-800">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                          </svg>
                                       </button>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- JavaScript untuk mengatur tab functionality -->
      <script>
         document.addEventListener('DOMContentLoaded', function() {
         // Set up tab functionality
         const tabs = document.querySelectorAll('[data-tabs-target]');
         const tabContents = document.querySelectorAll('[role="tabpanel"]');
         
         // Set default active tab
         const defaultTab = document.getElementById('companies-tab');
         const defaultTabContent = document.getElementById('companies');
         
         // Show default tab content
         tabContents.forEach(content => {
            if (content !== defaultTabContent) {
               content.classList.add('hidden');
            } else {
               content.classList.remove('hidden');
               content.classList.add('block');
            }
         });
         
         // Set default tab as active
         defaultTab.classList.add('border-blue-600', 'text-blue-600', 'active');
         defaultTab.setAttribute('aria-selected', 'true');
         
         tabs.forEach(tab => {
            tab.addEventListener('click', () => {
               const target = document.querySelector(tab.dataset.tabsTarget);
               
               // Hide all tab contents
               tabContents.forEach(content => {
                  content.classList.add('hidden');
                  content.classList.remove('block');
               });
               
               // Remove active state from all tabs
               tabs.forEach(t => {
                  t.classList.remove('border-blue-600', 'text-blue-600');
                  t.classList.remove('active');
                  t.setAttribute('aria-selected', 'false');
               });
               
               // Show current tab content
               target.classList.remove('hidden');
               target.classList.add('block');
               
               // Set current tab as active
               tab.classList.add('border-blue-600', 'text-blue-600');
               tab.classList.add('active');
               tab.setAttribute('aria-selected', 'true');
            });
         });
      });
      </script>
   </body>
</html>