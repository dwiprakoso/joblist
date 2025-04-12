<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite(['resources/css/app.css','resources/js/app.js'])
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
      <title>Pesan | Job Match</title>
   </head>
   <body class="bg-gray-50">
      <!-- Sidebar tetap di kiri -->
      @include('candidates.components.sidebar')
       
      <!-- Container utama dengan flex untuk membagi area -->
      <div class="flex sm:ml-80">
         <!-- Daftar pesan (panel tengah) dengan warna yang disesuaikan -->
         <div class="w-80 border-r border-gray-200 dark:border-gray-700 h-screen overflow-y-auto bg-white dark:bg-gray-800">
            <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center bg-gradient-to-r from-[#e73002] to-[#fd7d09] text-white">
               <h1 class="text-xl font-bold text-white">Pesan</h1>
               <!-- Tombol pesan baru dengan tooltip -->
               <button class="p-2 rounded-full bg-white/20 text-white hover:bg-white/30 transition-colors relative group">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                  </svg>
                  <span class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap">Pesan Baru</span>
               </button>
            </div>
            
            <!-- Search bar untuk mencari pesan -->
            <div class="p-2 border-b border-gray-200 dark:border-gray-700">
               <div class="relative">
                  <input type="text" placeholder="Cari pesan..." class="w-full pl-8 pr-4 py-2 rounded-lg border border-gray-200 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-[#fd7d09] dark:bg-gray-700 dark:text-white text-sm">
                  <svg class="w-4 h-4 absolute left-2.5 top-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                  </svg>
               </div>
            </div>
            
            <!-- Daftar pesan yang ditingkatkan dengan warna yang disesuaikan -->
            <div>
               <!-- Pesan aktif -->
               <div class="p-3 border-l-4 border-[#fd7d09] bg-orange-50 dark:bg-gray-800 cursor-pointer transition-all duration-200">
                  <div class="flex items-start">
                     <div class="relative">
                        <img src="{{ url('images/job-match-white.svg') }}" alt="Logo Kitabisa" class="w-10 h-10 rounded-full mr-3 object-cover border border-gray-200 dark:border-gray-600">
                     </div>
                     <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start">
                           <h3 class="text-sm font-semibold text-gray-900 dark:text-white truncate">Kitabisa</h3>
                           <span class="text-xs text-gray-500 dark:text-gray-400 whitespace-nowrap ml-1">9 hari lalu</span>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 truncate mt-0.5">Dwi: Selamat Siang, Perkenalkan saya Dwi dari Tim Rekrutmen...</p>
                     </div>
                  </div>
               </div>
               
               <!-- Pesan lainnya -->
               <div class="p-3 hover:bg-orange-50 dark:hover:bg-gray-700 cursor-pointer border-b border-gray-200 dark:border-gray-700 transition-all duration-200">
                  <div class="flex items-start">
                     <div class="relative">
                        <img src="{{ url('images/ocbc.svg') }}" alt="Logo OCBC" class="w-10 h-10 rounded-full mr-3 object-cover border border-gray-200 dark:border-gray-600">
                     </div>
                     <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start">
                           <h3 class="text-sm font-semibold text-gray-900 dark:text-white truncate">PT Bank OCBC NISP, Tbk</h3>
                           <span class="text-xs text-gray-500 dark:text-gray-400 whitespace-nowrap ml-1">16 hari lalu</span>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 truncate mt-0.5">Dwi: Selamat Siang, Perkenalkan saya Dwi dari...</p>
                     </div>
                  </div>
               </div>
               
               <div class="p-3 hover:bg-orange-50 dark:hover:bg-gray-700 cursor-pointer border-b border-gray-200 dark:border-gray-700 transition-all duration-200">
                  <div class="flex items-start">
                     <div class="relative">
                        <img src="{{ url('images/kompas.svg') }}" alt="Logo Kompas" class="w-10 h-10 rounded-full mr-3 object-cover border border-gray-200 dark:border-gray-600">
                     </div>
                     <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start">
                           <h3 class="text-sm font-semibold text-gray-900 dark:text-white truncate">Kompas Gramedia</h3>
                           <span class="text-xs text-gray-500 dark:text-gray-400 whitespace-nowrap ml-1">16 hari lalu</span>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 truncate mt-0.5">Dwi: Selamat Siang, Perkenalkan saya Dwi dari...</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Area percakapan (panel kanan) -->
         <div class="flex-1 flex flex-col h-screen">
            <!-- Header percakapan -->
            <div class="p-4 bg-gradient-to-r from-[#e73002] to-[#fd7d09] border-b border-gray-200 dark:border-gray-700 flex justify-between items-center sticky top-0 z-10">
               <div class="flex items-center">
                  <img src="{{ url('images/job-match-white.svg') }}" alt="Logo Kitabisa" class="w-10 h-10 rounded-full mr-3 border border-white/30">
                  <div>
                     <div class="flex items-center">
                        <h3 class="font-semibold text-white">Kitabisa</h3>
                     </div>
                  </div>
                </div>
            </div>
            
            <!-- Area pesan dengan indikator tanggal -->
            <div class="flex-1 overflow-y-auto p-4 bg-orange-50 dark:bg-gray-750">
               <div class="max-w-3xl mx-auto">
                  <!-- Indikator tanggal -->
                  <div class="flex justify-center mb-6">
                     <span class="px-3 py-1 text-xs text-gray-500 bg-white rounded-full shadow-sm dark:bg-gray-700 dark:text-gray-300">
                        9 April 2025
                     </span>
                  </div>
                  
                  <!-- Pesan dari pengguna dengan desain bubble yang ditingkatkan -->
                  <div class="mb-6 flex justify-end">
                     <div class="max-w-[80%] bg-gradient-to-r from-[#e73002] to-[#fd7d09] text-white rounded-lg p-3 shadow-sm">
                        <div>
                           <p class="mb-2">
                              Selamat siang Tim Rekrutmen Kitabisa,
                           </p>
                           <p class="mb-2">
                              Terima kasih atas kesempatan wawancara yang diberikan minggu lalu. Saya sangat tertarik dengan posisi UX Designer yang ditawarkan dan ingin menanyakan kapan kira-kira hasil dari tahap wawancara akan diumumkan?
                           </p>
                           <p class="mb-1">
                              Salam,
                           </p>
                           <p>
                              Dwi Prakoso
                           </p>
                        </div>
                        <div class="text-right text-xs text-white/80 mt-1 flex items-center justify-end">
                           <span>9 hari yang lalu</span>
                           <span class="ml-1">
                              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                              </svg>
                           </span>
                        </div>
                     </div>
                  </div>
                  
                  <!-- Contoh pesan dari perusahaan -->
                  <div class="mb-6 flex">
                     <img src="{{ url('images/job-match-white.svg') }}" alt="Logo Kitabisa" class="w-8 h-8 rounded-full mr-2 self-end">
                     <div class="max-w-[80%] bg-white dark:bg-gray-700 rounded-lg p-3 shadow-sm">
                        <div class="text-gray-800 dark:text-gray-200">
                           <p class="mb-2">
                              Halo Dwi,
                           </p>
                           <p>
                              Terima kasih atas ketertarikan Anda pada posisi UX Designer di Kitabisa. Kami sedang dalam proses mengevaluasi seluruh kandidat dan akan mengumumkan hasilnya paling lambat akhir minggu ini. Kami akan segera menghubungi Anda begitu keputusan telah dibuat.
                           </p>
                        </div>
                        <div class="text-left text-xs text-gray-500 dark:text-gray-400 mt-1">
                           9 hari yang lalu
                        </div>
                     </div>
                  </div>
                  
                  <!-- Indikator sedang mengetik -->
                  <div class="flex mb-6">
                     <img src="{{ url('images/job-match-white.svg') }}" alt="Logo Kitabisa" class="w-8 h-8 rounded-full mr-2 self-end">
                     <div class="bg-white dark:bg-gray-700 rounded-lg p-3 shadow-sm">
                        <div class="flex space-x-1">
                           <div class="w-2 h-2 bg-[#e73002] rounded-full animate-bounce"></div>
                           <div class="w-2 h-2 bg-[#e73002] rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                           <div class="w-2 h-2 bg-[#e73002] rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <!-- Area input pesan yang ditingkatkan -->
            <div class="border-t border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800">
               <!-- Area input teks dengan desain yang ditingkatkan -->
               <div class="flex">
                  <div class="flex-1">
                     <div class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-700 rounded-lg mb-2 relative">
                        <textarea 
                           rows="3" 
                           placeholder="Ketik pesan Anda di sini..." 
                           class="w-full p-3 bg-transparent focus:outline-none focus:ring-2 focus:ring-[#fd7d09] dark:text-white resize-none"
                        ></textarea>
                     </div>
                  </div>
               </div>
               
               <!-- Bar aksi yang ditingkatkan dengan opsi tambahan -->
               <div class="flex justify-end items-center">
                  
                  <!-- Aksi sisi kanan -->
                  <div class="flex items-center space-x-2">  
                     <!-- Tombol kirim dengan gaya yang ditingkatkan -->
                     <button class="px-6 py-2.5 bg-gradient-to-r from-[#e73002] to-[#fd7d09] hover:from-[#d62d00] hover:to-[#ed7407] text-white font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-[#fd7d09] focus:ring-opacity-50 transition-all duration-200 flex items-center">
                        <span>Kirim</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
   </body>
</html>