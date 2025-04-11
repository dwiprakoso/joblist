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
      <style>
         .message-appear {
           animation: fadeIn 0.3s ease-in-out;
         }
         .typing-indicator span {
           animation: bounce 1s infinite;
         }
         .typing-indicator span:nth-child(2) {
           animation-delay: 0.2s;
         }
         .typing-indicator span:nth-child(3) {
           animation-delay: 0.4s;
         }
         @keyframes fadeIn {
           from { opacity: 0; transform: translateY(10px); }
           to { opacity: 1; transform: translateY(0); }
         }
         @keyframes bounce {
           0%, 100% { transform: translateY(0); }
           50% { transform: translateY(-5px); }
         }
       </style>
   </head>
   <body>
      @include('recruiter.components.sidebar')     
      <div class="sm:ml-80">
         <div class="p-6 m-4 rounded-lg shadow-lg bg-white dark:bg-gray-800 dark:border-gray-700">
           <!-- Breadcrumb Navigation -->
           <nav class="flex mb-5" aria-label="Breadcrumb">
             <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
               <li class="inline-flex items-center">
                 <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white transition-colors duration-200">
                   <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                   </svg>
                   Dashboard
                 </a>
               </li>
             </ol>
           </nav>
       
           <!-- Header Section with Welcome and Notifications -->
           <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6">
            <!-- Welcome Message Card -->
            <div class="md:col-span-4 p-6 flex items-center rounded-lg bg-gradient-to-r from-[#e73002] to-[#fd7d09] shadow-md hover:shadow-lg transition-all duration-300 dark:bg-gray-800">
              <div class="flex items-center">
                <div class="p-3 mr-4 rounded-full bg-white bg-opacity-20">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </div>
                <div>
                  <p class="text-sm font-medium text-white">Selamat datang,</p>
                  <h2 class="text-xl font-bold text-white">{{ $company->company_name }}</h2>
                </div>
              </div>
            </div>

            <!-- Notification Icons Card -->
            <div class="flex items-center justify-center gap-4 p-4 rounded-lg bg-white shadow-md hover:shadow-lg transition-all duration-300 dark:bg-gray-800">
              <!-- Message Button -->
              <button id="open-chat" class="relative inline-flex items-center p-2 text-[#e73002] hover:text-[#fd7d09] transition-colors duration-200 focus:outline-none dark:text-gray-400" type="button" aria-label="Messages">
                <div class="flex items-center justify-center h-10 w-10 rounded-full bg-gray-100">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M3 5.983C3 4.888 3.895 4 5 4h14c1.105 0 2 .888 2 1.983v8.923a1.992 1.992 0 0 1-2 1.983h-6.6l-2.867 2.7c-.955.899-2.533.228-2.533-1.08v-1.62H5c-1.105 0-2-.888-2-1.983V5.983Zm5.706 3.809a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Zm2.585.002a1 1 0 1 1 .003 1.414 1 1 0 0 1-.003-1.414Zm5.415-.002a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <div class="absolute w-3 h-3 bg-[#fd1d02] border-2 border-white rounded-full -top-0.5 right-0 dark:border-gray-900"></div>
              </button>
              
              <!-- Notification Button -->
              <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-[#e73002] hover:text-[#fd7d09] transition-colors duration-200 focus:outline-none dark:text-gray-400" type="button" aria-label="Notifications">
                <div class="flex items-center justify-center h-10 w-10 rounded-full bg-gray-100">
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                    <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                  </svg>
                </div>
                <div class="absolute w-3 h-3 bg-[#fd1d02] border-2 border-white rounded-full -top-0.5 right-0 dark:border-gray-900"></div>
              </button>
            </div>
          </div>
       
           <!-- Dropdown Notification Menu -->
           <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow-xl dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
            <!-- Header with brand gradient -->
            <div class="flex items-center justify-between px-4 py-3 font-medium text-white bg-gradient-to-r from-[#e73002] to-[#fd7d09] rounded-t-lg dark:from-[#e73002] dark:to-[#fd7d09]">
              <span>Notifications</span>
              <span class="inline-flex items-center justify-center w-6 h-6 text-xs font-semibold bg-white text-[#e73002] rounded-full">1</span>
            </div>
            
            <div class="divide-y divide-gray-100 dark:divide-gray-700">
              <a href="#" class="flex px-4 py-3 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200">
                <div class="relative flex-shrink-0">
                  <img class="rounded-full w-11 h-11 border-2 border-orange-100" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Profile image">
                  <div class="absolute flex items-center justify-center w-5 h-5 -right-1 -bottom-1 bg-[#fd7d09] border-2 border-white rounded-full dark:border-gray-800">
                    <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                      <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                    </svg>
                  </div>
                </div>
                <div class="w-full ps-3">
                  <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Pendaftar baru <span class="font-semibold text-gray-900 dark:text-white">Aslam Thariq</span></div>
                  <div class="text-xs text-gray-500 dark:text-gray-400">Marketing Manager - Unit MSOS</div>
                  <div class="text-xs text-[#e73002] dark:text-[#fd7d09] mt-1">a few moments ago</div>
                </div>
              </a>
            </div>
            
            <a href="#" class="block py-3 text-sm font-medium text-center text-[#e73002] hover:bg-orange-50 rounded-b-lg transition-all duration-200 dark:text-[#fd7d09] dark:hover:bg-gray-700">
              <div class="inline-flex items-center">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                  <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                </svg>
                View all
              </div>
            </a>
          </div>
       
           <!-- Section Header -->
           <div class="flex items-center justify-between mb-4">
             <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Overview</h3>

           </div>
       
           <!-- Dashboard Metrics Cards -->
           <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Job Post Card -->
            <div class="p-6 bg-gradient-to-r from-orange-500 to-orange-400 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 dark:from-orange-600 dark:to-orange-500 overflow-hidden relative">
                <div class="absolute -bottom-6 -right-6 opacity-10">
                    <svg class="w-32 h-32" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="mb-1 text-sm font-medium text-white/80">Total Job Post</p>
                        <p class="text-3xl font-bold text-white">{{ $roomsCount }}</p>
                    </div>
                    <div class="p-3 rounded-full bg-white/20 flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-white/20">
                    <a href="{{ route('dashboard.recruiter.selectionRoom') }}" class="text-white/90 hover:text-white text-sm font-medium flex items-center">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Pendaftar Card -->
            <div class="p-6 bg-gradient-to-r from-red-600 to-red-500 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 dark:from-red-700 dark:to-red-600 overflow-hidden relative">
                <div class="absolute -bottom-6 -right-6 opacity-10">
                    <svg class="w-32 h-32" fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="mb-1 text-sm font-medium text-white/80">Total Pendaftar</p>
                        <p class="text-3xl font-bold text-white">{{ $totalActiveApplicants }}</p>
                    </div>
                    <div class="p-3 rounded-full bg-white/20 flex items-center justify-center">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-white/20">
                    <a href="{{ route('dashboard.recruiter.candidate') }}" class="text-white/90 hover:text-white text-sm font-medium flex items-center">
                        Lihat Detail
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
       
           <!-- Recent Activity Section -->
           <div class="bg-white mt-6 p-6 rounded-lg shadow-md dark:bg-gray-700">
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Recent Activity</h3>
              <a href="{{ route('dashboard.recruiter.selectionRoom') }}" class="text-blue-600 hover:underline dark:text-blue-400 text-sm">View All</a>
            </div>
            <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                  <tr>
                    <th scope="col" class="px-4 py-3 rounded-tl-lg">Position</th>
                    <th scope="col" class="px-4 py-3">Department</th>
                    <th scope="col" class="px-4 py-3">Work System</th>
                    <th scope="col" class="px-4 py-3">Deadline</th>
                    <th scope="col" class="px-4 py-3 rounded-tr-lg">Applicants</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($rooms as $room)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      <a href="{{ route('dashboard.recruiter.selectionRoom.detail', $room->id) }}" class="hover:text-blue-600 dark:hover:text-blue-400">
                        {{ $room->position_name }}
                      </a>
                    </th>
                    <td class="px-4 py-3">{{ $room->departement }}</td>
                    <td class="px-4 py-3">
                      @php
                        $workSystemColors = [
                          'WFO' => 'bg-blue-500',
                          'Hybrid' => 'bg-purple-500',
                          'WFH' => 'bg-green-500'
                        ];
                        $systemColor = $workSystemColors[$room->work_system] ?? 'bg-gray-500';
                      @endphp
                      <span class="px-2 py-1 text-xs font-medium text-white rounded-full {{ $systemColor }}">
                        {{ $room->work_system }}
                      </span>
                    </td>
                    <td class="px-4 py-3">
                      @php
                        $now = now();
                        $deadline = $room->deadline;
                        $interval = $now->diff($deadline);
                        $isExpired = $now > $deadline;
                      @endphp
                      
                      @if ($isExpired)
                        <span class="text-red-500">Expired</span>
                      @else
                        @if ($interval->days == 0)
                          <span class="text-red-500">Today</span>
                        @else
                          <span class="{{ $interval->days < 3 ? 'text-orange-500' : 'text-green-500' }}">
                            {{ $interval->days }} days left
                          </span>
                        @endif
                      @endif
                    </td>
                    <td class="px-4 py-3">
                      <span class="font-medium">{{ $room->filledPositions }}/{{ $room->total_open_position }}</span>
                      <span class="text-xs text-gray-500">({{ $room->totalApplicants }} applicants)</span>
                    </td>
                  </tr>
                  @empty
                  <tr class="bg-white dark:bg-gray-800">
                    <td colspan="5" class="px-4 py-6 text-center text-gray-500 dark:text-gray-400">
                      Belum ada posisi yang dibuka.
                      <a href="{{ route('dashboard.recruiter.selectionRoom') }}" class="text-blue-600 hover:underline dark:text-blue-400">
                        Buka posisi baru
                      </a>
                    </td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
       </div>
      <!-- Chat container -->
      <div id="chat-container" class="hidden fixed bottom-20 right-4 w-full md:w-96 z-20">
         <div class="bg-white shadow-lg rounded-lg max-w-lg w-full transition-all duration-300 transform">
            <!-- Chat header -->
            <div class="p-4 border-b bg-gradient-to-r from-[#e73002] to-[#fd7d09] text-white rounded-t-lg flex justify-between items-center">
               <div class="flex items-center">
                  <div class="relative mr-3">
                     <img id="chat-avatar" class="w-10 h-10 rounded-full object-cover border-2 border-white" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="User profile">
                     <span class="absolute bottom-0 right-0 bg-green-400 rounded-full h-3 w-3 border-2 border-white"></span>
                  </div>
                  <div>
                     <p id="chat-name" class="text-lg font-semibold">Aslam Thariq</p>
                     <p class="text-xs text-white/80">Marketing Manager - Unit MSOS</p>
                  </div>
               </div>
               <div class="flex items-center gap-2">
                  <button id="chat-info" class="text-white hover:text-gray-200 focus:outline-none transition duration-300">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                  </button>
                  <button id="close-chat" class="text-white hover:text-gray-200 focus:outline-none transition duration-300">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                     </svg>
                  </button>
               </div>
            </div>
            
            <!-- Chat messages area -->
            <div id="chatbox" class="p-4 h-96 overflow-y-auto bg-gray-50">
               <!-- Date divider -->
               <div class="flex justify-center mb-4">
                  <span class="bg-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Today</span>
               </div>

               <!-- Receiver message -->
               <div class="mb-4 message-appear">
                  <div class="flex items-start">
                     <img class="w-8 h-8 rounded-full mr-2 object-cover" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Profile">
                     <div>
                        <div class="bg-white border border-gray-200 rounded-lg py-2 px-4 inline-block max-w-xs lg:max-w-md shadow-sm">
                           <p class="text-gray-700">Halo, terima kasih telah menghubungi saya. Saya tertarik dengan posisi Marketing Manager yang Anda tawarkan.</p>
                        </div>
                        <div class="text-xs text-gray-500 mt-1 ml-1">9:30 AM</div>
                     </div>
                  </div>
               </div>

               <!-- Sender message -->
               <div class="mb-4 message-appear">
                  <div class="flex items-start justify-end">
                     <div>
                        <div class="bg-gradient-to-r from-[#e73002] to-[#fd7d09] text-white rounded-lg py-2 px-4 inline-block max-w-xs lg:max-w-md shadow-sm">
                           <p>Halo Aslam, terima kasih telah melamar di posisi kami. CV Anda sangat mengesankan! Kapan Anda bisa melakukan interview pertama?</p>
                        </div>
                        <div class="text-xs text-gray-500 mt-1 text-right mr-1">9:35 AM</div>
                     </div>
                     <img class="w-8 h-8 rounded-full ml-2 object-cover" src="{{ url('images/job-match-white.svg') }}" alt="Company Logo">
                  </div>
               </div>

               <!-- Receiver message with file -->
               <div class="mb-4 message-appear">
                  <div class="flex items-start">
                     <img class="w-8 h-8 rounded-full mr-2 object-cover" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Profile">
                     <div>
                        <div class="bg-white border border-gray-200 rounded-lg py-2 px-4 inline-block max-w-xs lg:max-w-md shadow-sm">
                           <p class="text-gray-700 mb-2">Saya bisa interview hari Senin atau Rabu minggu depan. Berikut jadwal saya yang kosong:</p>
                           <div class="bg-blue-50 border border-blue-200 rounded-md p-3 flex items-center">
                              <svg class="w-8 h-8 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                              </svg>
                              <div>
                                 <p class="text-sm font-medium text-blue-700">jadwal-interview.pdf</p>
                                 <p class="text-xs text-blue-500">245 KB · PDF</p>
                              </div>
                           </div>
                        </div>
                        <div class="text-xs text-gray-500 mt-1 ml-1">9:42 AM</div>
                     </div>
                  </div>
               </div>
               
               <!-- System message -->
               <div class="flex justify-center my-4">
                  <span class="bg-gray-100 text-gray-500 text-xs px-3 py-1 rounded-full">Interview scheduled for Monday, April 14, 2025</span>
               </div>

               <!-- Typing indicator -->
               <div id="typing-indicator" class="px-4 py-2 hidden">
                  <div class="flex items-start">
                     <img class="w-8 h-8 rounded-full mr-2 object-cover" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Profile">
                     <div class="bg-white border border-gray-200 rounded-lg py-2 px-4 inline-block typing-indicator">
                        <span>.</span><span>.</span><span>.</span>
                     </div>
                  </div>
               </div>
            </div>
            
            <!-- Chat input area with attachments -->
            <div class="p-3 border-t flex flex-col">
               <!-- Attachment preview area (hidden by default) -->
               <div id="attachment-preview" class="hidden mb-2 p-2 bg-gray-100 rounded-md">
                  <div class="flex items-center justify-between">
                     <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-gray-700">document.pdf</span>
                     </div>
                     <button class="text-gray-500 hover:text-red-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                     </button>
                  </div>
               </div>
               
               <!-- Input area -->
               <div class="flex items-center">
                  <button id="attachment-btn" class="text-gray-500 hover:text-[#e73002] p-2 rounded-full focus:outline-none mr-1">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                     </svg>
                  </button>
                  <input id="user-input" type="text" placeholder="Ketik pesan..." class="w-full px-4 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-[#e73002]" autofocus>
                  <button id="send-button" class="bg-gradient-to-r from-[#e73002] to-[#fd7d09] text-white px-4 py-2 rounded-r-md hover:opacity-90 transition duration-300 flex items-center justify-center">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                     </svg>
                  </button>
               </div>
            </div>
         </div>
      </div>

      <!-- List Chat Contacts (hidden by default, can be toggled) -->
      <div id="chat-contacts" class="hidden fixed bottom-20 right-4 w-full md:w-96 z-20">
         <div class="bg-white shadow-lg rounded-lg max-w-lg w-full">
            <!-- Contacts header -->
            <div class="p-4 border-b bg-gradient-to-r from-[#e73002] to-[#fd7d09] text-white rounded-t-lg flex justify-between items-center">
               <h3 class="font-semibold">Pesan</h3>
               <button id="close-contacts" class="text-white hover:text-gray-200 focus:outline-none transition duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
               </button>
            </div>
            
            <!-- Search box -->
            <div class="p-3 border-b">
               <div class="relative">
                  <input type="text" placeholder="Cari kontak..." class="w-full pl-10 pr-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#e73002]">
                  <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                  </svg>
               </div>
            </div>
            
            <!-- Contacts list -->
            <div class="h-96 overflow-y-auto">
               <!-- Contact item - active -->
               <div class="contact-item p-3 border-b flex items-center hover:bg-gray-50 cursor-pointer bg-orange-50">
                  <div class="relative">
                     <img class="w-12 h-12 rounded-full object-cover" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Contact">
                     <span class="absolute bottom-0 right-0 bg-green-400 rounded-full h-3 w-3 border-2 border-white"></span>
                  </div>
                  <div class="ml-3 flex-1">
                     <div class="flex justify-between items-center">
                        <h4 class="font-medium text-gray-900">Aslam Thariq</h4>
                        <span class="text-xs text-gray-500">9:42 AM</span>
                     </div>
                     <div class="flex justify-between items-center">
                        <p class="text-sm text-gray-600 truncate">Saya bisa interview hari Senin atau Rabu...</p>
                        <span class="bg-[#e73002] text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">2</span>
                     </div>
                  </div>
               </div>
               
               <!-- Contact item -->
               <div class="contact-item p-3 border-b flex items-center hover:bg-gray-50 cursor-pointer">
                  <div class="relative">
                     <img class="w-12 h-12 rounded-full object-cover" src="https://randomuser.me/api/portraits/women/42.jpg" alt="Contact">
                     <span class="absolute bottom-0 right-0 bg-gray-400 rounded-full h-3 w-3 border-2 border-white"></span>
                  </div>
                  <div class="ml-3 flex-1">
                     <div class="flex justify-between items-center">
                        <h4 class="font-medium text-gray-900">Sarah Johnson</h4>
                        <span class="text-xs text-gray-500">Yesterday</span>
                     </div>
                     <p class="text-sm text-gray-600 truncate">Thank you for the opportunity...</p>
                  </div>
               </div>
               
               <!-- Contact item -->
               <div class="contact-item p-3 border-b flex items-center hover:bg-gray-50 cursor-pointer">
                  <div class="relative">
                     <img class="w-12 h-12 rounded-full object-cover" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Contact">
                     <span class="absolute bottom-0 right-0 bg-gray-400 rounded-full h-3 w-3 border-2 border-white"></span>
                  </div>
                  <div class="ml-3 flex-1">
                     <div class="flex justify-between items-center">
                        <h4 class="font-medium text-gray-900">Michael Rodriguez</h4>
                        <span class="text-xs text-gray-500">Apr 9</span>
                     </div>
                     <p class="text-sm text-gray-600 truncate">Apakah posisi tersebut masih tersedia?</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- JavaScript for interaction -->
      <script>
         // DOM elements
         const chatbox = document.getElementById("chatbox");
         const chatContainer = document.getElementById("chat-container");
         const chatContacts = document.getElementById("chat-contacts");
         const userInput = document.getElementById("user-input");
         const sendButton = document.getElementById("send-button");
         const openChatButton = document.getElementById("open-chat");
         const closeChatButton = document.getElementById("close-chat");
         const closeContactsButton = document.getElementById("close-contacts");
         const typingIndicator = document.getElementById("typing-indicator");
         const attachmentBtn = document.getElementById("attachment-btn");
         const attachmentPreview = document.getElementById("attachment-preview");
         
         // Toggle state
         let isChatboxOpen = false;
         let isContactsOpen = false;
         
         // Format current time
         function getCurrentTime() {
            const now = new Date();
            return now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
         }
         
         // Toggle chat interface
         function toggleChatbox() {
            chatContainer.classList.toggle("hidden");
            chatContacts.classList.add("hidden"); // Hide contacts if open
            isChatboxOpen = !isChatboxOpen;
            isContactsOpen = false;
            
            if (isChatboxOpen) {
               userInput.focus();
            }
         }
         
         // Toggle contacts interface
         function toggleContacts() {
            chatContacts.classList.toggle("hidden");
            chatContainer.classList.add("hidden"); // Hide chat if open
            isContactsOpen = !isContactsOpen;
            isChatboxOpen = false;
         }
         
         // Event listeners
         openChatButton.addEventListener("click", function() {
            // For now, we'll just toggle the individual chat
            // In a complete implementation, this would open the contacts list first
            toggleChatbox();
         });
         
         closeChatButton.addEventListener("click", toggleChatbox);
         closeContactsButton.addEventListener("click", toggleContacts);
         
         // Send message handler
         sendButton.addEventListener("click", function() {
            sendMessage();
         });
         
         // Enter key handler
         userInput.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
               sendMessage();
            }
         });
         
         // Add user message to chat
         function addUserMessage(message) {
            const time = getCurrentTime();
            const messageElement = document.createElement("div");
            messageElement.classList.add("mb-4", "message-appear");
            messageElement.innerHTML = `
               <div class="flex items-start justify-end">
                  <div>
                     <div class="bg-gradient-to-r from-[#e73002] to-[#fd7d09] text-white rounded-lg py-2 px-4 inline-block max-w-xs lg:max-w-md shadow-sm">
                        <p>${escapeHtml(message)}</p>
                     </div>
                     <div class="text-xs text-gray-500 mt-1 text-right mr-1">${time}</div>
                  </div>
                  <img class="w-8 h-8 rounded-full ml-2 object-cover" src="{{ url('images/job-match-white.svg') }}" alt="Company Logo">
               </div>
            `;
            chatbox.appendChild(messageElement);
            chatbox.scrollTop = chatbox.scrollHeight;
         }
         
         // Send message function
         function sendMessage() {
            const userMessage = userInput.value.trim();
            if (userMessage !== "") {
               addUserMessage(userMessage);
               userInput.value = "";
               
               // For demo purposes, show typing indicator and simulate response
               showTypingIndicator();
               setTimeout(() => {
                  hideTypingIndicator();
                  simulateResponse();
               }, 1500);
            }
         }
         
         // Show typing indicator
         function showTypingIndicator() {
            typingIndicator.classList.remove("hidden");
            chatbox.scrollTop = chatbox.scrollHeight;
         }
         
         // Hide typing indicator
         function hideTypingIndicator() {
            typingIndicator.classList.add("hidden");
         }
         
         // Simulate a response from the other user
         function simulateResponse() {
            const time = getCurrentTime();
            const messageElement = document.createElement("div");
            messageElement.classList.add("mb-4", "message-appear");
            messageElement.innerHTML = `
               <div class="flex items-start">
                  <img class="w-8 h-8 rounded-full mr-2 object-cover" src="https://media.licdn.com/dms/image/D5603AQHC4IFjmiQi1Q/profile-displayphoto-shrink_400_400/0/1680830096821?e=1721260800&v=beta&t=djkevYMcgIYM7wYZJxQ1Xrp7N6e5KE8IqNhd0PCIi6A" alt="Profile">
                  <div>
                     <div class="bg-white border border-gray-200 rounded-lg py-2 px-4 inline-block max-w-xs lg:max-w-md shadow-sm">
                        <p class="text-gray-700">Baik, terima kasih atas informasinya. Saya akan segera mempersiapkan dokumen yang diperlukan.</p>
                     </div>
                     <div class="text-xs text-gray-500 mt-1 ml-1">${time}</div>
                  </div>
               </div>
            `;
            chatbox.appendChild(messageElement);
            chatbox.scrollTop = chatbox.scrollHeight;
         }
         
         // Toggle attachment preview
         attachmentBtn.addEventListener("click", function() {
            attachmentPreview.classList.toggle("hidden");
         });
         
         // Handle contact item clicks
         document.querySelectorAll('.contact-item').forEach(item => {
            item.addEventListener('click', function() {
               toggleContacts();
               toggleChatbox();
            });
         });
         
         // Helper function to escape HTML
         function escapeHtml(unsafe) {
            return unsafe
               .replace(/&/g, "&amp;")
               .replace(/</g, "&lt;")
               .replace(/>/g, "&gt;")
               .replace(/"/g, "&quot;")
               .replace(/'/g, "&#039;");
         }
      </script>
      

   </body>
</html>