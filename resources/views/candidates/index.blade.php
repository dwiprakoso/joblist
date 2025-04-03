<!DOCTYPE html>
<html lang="en">
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
    @include('candidates.components.sidebar')

    <div class="sm:ml-80">
        <div class="p-4 m-4 rounded-lg dark:border-gray-700">


           <nav class="flex mb-4" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
              <li class="inline-flex items-center">
                  <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                  <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Dashboard
                  </a>
              </li>
              </ol>
          </nav>

           <div class="grid grid-cols-5 items-center justify-center">
                 <div class="col-span-4 p-8 flex items-center h-12 rounded bg-e73002 dark:bg-gray-800">
                    <h1 class=" text-base font-normal leading-none tracking-tight text-white  dark:text-white">Selamat datang, <br/> <span class="text-xl font-extrabold text-white dark:text-blue-500">{{ $profile->full_name }}</span></h1>
                 </div>
                 <div class="flex items-center justify-center rounded h-12 dark:bg-gray-800 gap-4">
                    <button class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
             
                       <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd" d="M3 5.983C3 4.888 3.895 4 5 4h14c1.105 0 2 .888 2 1.983v8.923a1.992 1.992 0 0 1-2 1.983h-6.6l-2.867 2.7c-.955.899-2.533.228-2.533-1.08v-1.62H5c-1.105 0-2-.888-2-1.983V5.983Zm5.706 3.809a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Zm2.585.002a1 1 0 1 1 .003 1.414 1 1 0 0 1-.003-1.414Zm5.415-.002a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Z" clip-rule="evenodd"/>
                       </svg>
                       
                       <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-4 dark:border-gray-900"></div>
                    </button>
                    <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
                       <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                       <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                       </svg>
                       
                       <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-4 dark:border-gray-900"></div>
                    </button>
                       
                 </div>
           </div>

           
                       <!-- Dropdown menu -->
                       <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow-lg dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
                          <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                                Notifications
                          </div>
                          <div class="divide-y divide-gray-100 dark:divide-gray-700">
                             <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Jese image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                   <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                   </svg>
                                </div>
                                </div>
                                <div class="w-full ps-3">
                                   <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Pendaftar baru <span class="font-semibold text-gray-900 dark:text-white">Aslam Thariq</span> Marketing Manager - Unit MSOS</div>
                                   <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                             </a>
                             <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Jese image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                   <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                   </svg>
                                </div>
                                </div>
                                <div class="w-full ps-3">
                                   <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Pendaftar baru <span class="font-semibold text-gray-900 dark:text-white">Aslam Thariq</span> Marketing Manager - Unit MSOS</div>
                                   <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                             </a>
                             <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Jese image">
                                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                   <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                   </svg>
                                </div>
                                </div>
                                <div class="w-full ps-3">
                                   <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Pendaftar baru <span class="font-semibold text-gray-900 dark:text-white">Aslam Thariq</span> Marketing Manager - Unit MSOS</div>
                                   <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                             </a>
                           
                             
                          </div>
                          <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                             <div class="inline-flex items-center ">
                                <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                </svg>
                                View all
                             </div>
                          </a>
                          </div>
     

           <div class="grid my-2 text-right">
              <p class="text-base text-white dark:text-black">
                 Overview
              </p>
           </div>
           <div class="grid grid-cols-2 p-4 gap-4 items-center justify-center mb-4 rounded bg-slate-100 shadow-md dark:bg-gray-800">
              <div class="flex items-center p-4 rounded bg-fd7d09 h-20 dark:bg-gray-800">
                 <h1 class=" text-lg font-medium leading-none tracking-tight text-white  dark:text-white">Total lamaran<br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">{{ $jumlahRoomsApply }}</span></h1>
              </div>
              <div class="flex items-center p-4 rounded bg-fd1d02 h-20 dark:bg-gray-800">
                 <h1 class=" text-lg font-medium leading-none tracking-tight text-white  dark:text-white">Proses <br/> <span class="text-2xl font-extrabold text-white dark:text-blue-500">{{ $jumlahRoomsPresentStatus }}</span></h1>
              </div>
           </div>

           
           <div class="grid grid-cols-2 p-4 gap-4  rounded bg-slate-100 drop-shadow-md dark:bg-gray-800">
              <div id="pie-chart" class="items-center p-4 justify-center rounded bg-white drop-shadow-md dark:bg-gray-800">
                 <p class="text-sm font-bold text-right mb-2 text-black dark:text-gray-500">
                    Respon Perusahaan (dummy)
                 </p>
                 @include('components.pieChart') 
              </div>
              <div class=" items-center p-4 justify-center rounded bg-white drop-shadow-md dark:bg-gray-800">
                 <p class="text-sm font-bold text-right mb-2 text-black dark:text-gray-500">
                    Lamaran Terakhir
                 </p>
                  @if(count($recentAppliedJobs) > 0)
                  @foreach($recentAppliedJobs as $job)
                     <div class="job-item border-b border-gray-200 dark:border-gray-700 mb-4">
                        <div class="flex items-center px-6 py-4">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle cx="8" cy="8" r="8" fill="#E73002"/>
                           <path d="M7 4C8.5621 5.5621 9.4379 6.4379 11 8L7 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="ps-3">
                           <div class="text-base font-bold">{{ $job->position_name }}</div>
                           <div class="font-semibold text-gray-500">{{ $job->company_name }}</div>
                           <div class="font-normal text-gray-500">{{ $job->company_address }}</div>
                           <div class="font-normal text-gray-500">{{ $job->work_system }}</div>
                           <div class="font-normal text-gray-500">{{ $job->status }}</div>
 
                        </div>
                        </div>
                     </div>
                     @endforeach
                  @else
                        <p class="text-center">Anda belum mengajukan lamaran untuk pekerjaan apapun.</p>
                  @endif
              </div>
           </div>
        </div>
     </div>
     
    
</body>
</html>