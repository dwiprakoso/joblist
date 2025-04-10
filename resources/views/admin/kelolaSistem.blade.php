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
         <div class="p-6 m-4 rounded-lg shadow-lg bg-white dark:bg-gray-800 dark:border-gray-700">
           <!-- Breadcrumb Navigation -->
           <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
               <li class="inline-flex items-center">
                  <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                     <svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                     </svg>
                     Admin
                  </a>
               </li>
               <li>
                  <div class="flex items-center">
                     <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                     </svg>
                     <span class="ml-1 text-sm font-medium text-gray-700 dark:text-gray-400">Kelola Aplikasi</span>
                  </div>
               </li>
            </ol>
         </nav>
         <div class="flex items-center p-6 rounded-lg bg-gradient-to-r from-orange-500 to-orange-400 shadow-lg dark:from-orange-600 dark:to-orange-500">
            <div>
              <h2 class="text-lg font-medium text-white dark:text-white opacity-90">Total Job Post</h2>
              <p class="text-4xl font-bold text-white dark:text-white mt-2">24</p>
            </div>
            <div class="ml-auto">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
          </div>
         <!-- Main Card -->
         <div class="bg-white dark:bg-gray-800 rounded-xl mt-6 shadow-md overflow-hidden">
            <!-- Table -->
            <div class=" mt-3 p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
               <div class="flex justify-between items-center mb-6">
                  <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">Daftar Lowongan Pekerjaan</h2>
               </div>
               <div class="overflow-x-auto">
                  <table class="w-full text-sm text-left">
                     <thead class="text-xs font-semibold uppercase bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-t-lg">
                        <tr>
                           <th scope="col" class="px-6 py-4">Judul Lowongan</th>
                           <th scope="col" class="px-6 py-4">Nama Perusahaan</th>
                           <th scope="col" class="px-6 py-4">Email</th>
                           <th scope="col" class="px-6 py-4">No Hp</th>
                           <th scope="col" class="px-6 py-4 text-center">Status</th>
                           <th scope="col" class="px-6 py-4 text-center">Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">
                           <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              <div class="flex items-center">
                                 <div>
                                    <p class="font-semibold">Apple MacBook Pro 17"</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SKU: APP-MP17-001</p>
                                 </div>
                              </div>
                           </th>
                           <td class="px-6 py-4">
                              <div class="flex items-center">
                                 <div class="w-3 h-3 rounded-full bg-gray-300 mr-2"></div>
                                 Silver
                              </div>
                           </td>
                           <td class="px-6 py-4">
                              <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                 Laptop
                              </span>
                           </td>
                           <td class="px-6 py-4 font-medium">
                              $2999
                           </td>
                           <td class="px-6 py-4 text-center">
                              <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300" id="job-status-1">
                                 In Stock
                              </span>
                           </td>
                           <td class="px-6 py-4 text-center">
                              <button data-job-id="1" class="job-edit-btn inline-block p-1.5 bg-blue-100 text-blue-600 rounded-lg hover:bg-blue-200 transition-colors dark:bg-blue-900 dark:text-blue-300 dark:hover:bg-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                              </button>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
       </div>
       <!-- Company Details Modal -->
      <div id="company-details-modal" class="hidden fixed inset-0 z-50 overflow-y-auto">
         <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
               <div class="absolute inset-0 bg-gray-500 opacity-75 dark:bg-gray-900 dark:opacity-90"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full dark:bg-gray-800">
               <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
                  <h3 class="text-lg font-medium text-gray-900 dark:text-white">Company Details</h3>
                  <button type="button" id="close-modal" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                     <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                     </svg>
                  </button>
               </div>
               <div class="px-6 py-4">
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                     <div class="space-y-4">
                        <div>
                           <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Company Information</h4>
                           <div class="mt-2 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                              <div class="flex items-center mb-3">
                                 <div class="w-12 h-12 flex-shrink-0 mr-3 bg-gray-200 dark:bg-gray-600 rounded-full flex items-center justify-center">
                                    <span class="font-bold text-blue-600 dark:text-blue-400 text-lg">C</span>
                                 </div>
                                 <div>
                                    <p class="font-bold text-gray-900 dark:text-white">Company Name</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Established: 2020</p>
                                 </div>
                              </div>
                              <div class="space-y-2">
                                 <div class="flex items-start">
                                    <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Industry: Technology</span>
                                 </div>
                                 <div class="flex items-start">
                                    <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">Jakarta, Indonesia</span>
                                 </div>
                                 <div class="flex items-start">
                                    <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                    <span class="text-gray-700 dark:text-gray-300">www.company-website.com</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div>
                           <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Contact Information</h4>
                           <div class="mt-2 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg space-y-2">
                              <div class="flex items-start">
                                 <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                 </svg>
                                 <span class="text-gray-700 dark:text-gray-300">Contact Person: John Doe</span>
                              </div>
                              <div class="flex items-start">
                                 <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                 </svg>
                                 <span class="text-gray-700 dark:text-gray-300">email@company.com</span>
                              </div>
                              <div class="flex items-start">
                                 <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                 </svg>
                                 <span class="text-gray-700 dark:text-gray-300">+62 123 456 7890</span>
                              </div>
                              <div class="flex items-start">
                                 <svg class="w-5 h-5 text-gray-400 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                 </svg>
                                 <a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">LinkedIn Profile</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="space-y-4">
                        <div>
                           <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Verification Documents</h4>
                           <div class="mt-2 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg space-y-3">
                              <div class="flex items-center p-3 bg-white dark:bg-gray-600 rounded-lg shadow-sm">
                                 <svg class="w-8 h-8 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22 13h-4v4h-2v-4h-4v-2h4V7h2v4h4v2zm-8-8H2v16h12v-2H4V7h10v-2z"/>
                                 </svg>
                                 <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Company Registration</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PDF • 2.3 MB</p>
                                 </div>
                                 <button type="button" class="p-1.5 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                 </button>
                              </div>
                              <div class="flex items-center p-3 bg-white dark:bg-gray-600 rounded-lg shadow-sm">
                                 <svg class="w-8 h-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.744 8s1.522-8-3.335-8h-8.409v24h20v-13c0-3.419-5.247-3.745-8.256-3zm4.256 11h-12v-1h12v1zm0-3h-12v-1h12v1zm0-3h-12v-1h12v1zm-3.432-12.925c2.202 1.174 5.938 4.883 7.432 6.881-1.286-.9-4.044-1.657-6.091-1.179.222-1.468-.185-4.534-1.341-5.702z"/>
                                 </svg>
                                 <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">Business License</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PDF • 1.8 MB</p>
                                 </div>
                                 <button type="button" class="p-1.5 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div>
                           <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400">Notes</h4>
                           <div class="mt-2">
                              <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" rows="4" placeholder="Add verification notes here..."></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 flex justify-end space-x-3">
                  <button type="button" id="close-modal-btn" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 dark:bg-gray-600 dark:text-gray-200 dark:border-gray-500 dark:hover:bg-gray-500">
                     Close
                  </button>
                  <button type="button" class="px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md hover:bg-green-700 dark:bg-green-600 dark:hover:bg-green-700">
                     Verify
                  </button>
                  <button type="button" class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-700 dark:bg-red-600 dark:hover:bg-red-700">
                     Reject
                  </button>
               </div>
            </div>
         </div>
      </div>
      
      <!-- JavaScript for Modal and Filtering -->
      <script>
         document.addEventListener('DOMContentLoaded', function() {
            // Modal functionality
            const modal = document.getElementById('company-details-modal');
            const viewDetailsBtns = document.querySelectorAll('.view-details-btn');
            const closeModalBtn = document.getElementById('close-modal');
            const closeModalBtn2 = document.getElementById('close-modal-btn');
            
            viewDetailsBtns.forEach(btn => {
               btn.addEventListener('click', function() {
                  const companyId = this.getAttribute('data-company-id');
                  console.log(`Viewing details for company ID: ${companyId}`);
                  modal.classList.remove('hidden');
               });
            });
            
            function closeModal() {
               modal.classList.add('hidden');
            }
            
            closeModalBtn.addEventListener('click', closeModal);
            closeModalBtn2.addEventListener('click', closeModal);
            
            // Close modal when clicking outside
            modal.addEventListener('click', function(e) {
               if (e.target === modal) {
                  closeModal();
               }
            });
            
            // Status filter functionality
            const statusFilter = document.getElementById('status-filter');
            const tableRows = document.querySelectorAll('tbody tr');
            
            statusFilter.addEventListener('change', function() {
               const selectedValue = this.value;
               
               tableRows.forEach(row => {
                  const statusCell = row.querySelector('td:nth-child(5)');
                  const statusText = statusCell.textContent.trim().toLowerCase();
                  
                  if (selectedValue === 'all' || statusText.includes(selectedValue)) {
                     row.style.display = '';
                  } else {
                     row.style.display = 'none';
                  }
               });
            });
            
            // Search functionality
            const searchInput = document.getElementById('table-search');
            
            searchInput.addEventListener('keyup', function() {
               const searchValue = this.value.toLowerCase();
               
               tableRows.forEach(row => {
                  const companyName = row.querySelector('th').textContent.toLowerCase();
                  const email = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                  
                  if (companyName.includes(searchValue) || email.includes(searchValue)) {
                     row.style.display = '';
                  } else {
                     row.style.display = 'none';
                  }
               });
            });
         });
      </script>
      

   </body>
</html>