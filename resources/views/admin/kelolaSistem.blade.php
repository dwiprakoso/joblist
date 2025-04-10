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
                        Kelola Sistem
                     </a>
                  </li>
               </ol>
            </nav>
            <div class="p-4 rounded-lg bg-slate-100 shadow-md dark:bg-gray-800">
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
             </div>
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

      <!-- Modal for job post details and status edit -->
      <div id="job-detail-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
         <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
            <div class="border-b border-gray-200 dark:border-gray-700 px-6 py-4 flex justify-between items-center">
               <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Detail Lowongan Pekerjaan</h3>
               <button id="close-modal" class="text-gray-400 hover:text-gray-500 focus:outline-none">
                  <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
               </button>
            </div>
            <div class="px-6 py-4">
               <div class="mb-6">
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                     <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Judul Lowongan</p>
                        <p id="modal-job-title" class="text-base font-semibold text-gray-900 dark:text-white">Apple MacBook Pro 17"</p>
                     </div>
                     <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Nama Perusahaan</p>
                        <p id="modal-company-name" class="text-base font-semibold text-gray-900 dark:text-white">Silver</p>
                     </div>
                     <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Email</p>
                        <p id="modal-email" class="text-base font-semibold text-gray-900 dark:text-white">example@company.com</p>
                     </div>
                     <div>
                        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">No HP</p>
                        <p id="modal-phone" class="text-base font-semibold text-gray-900 dark:text-white">+62812345678</p>
                     </div>
                  </div>
               </div>
               
               <div class="mb-6">
                  <p class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">Status</p>
                  <div class="relative">
                     <select id="job-status-select" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="in-stock">In Stock</option>
                        <option value="out-of-stock">Out of Stock</option>
                        <option value="limited">Limited</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="bg-gray-50 dark:bg-gray-700 px-6 py-4 flex justify-end">
               <button id="cancel-modal" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 mr-2 dark:bg-gray-600 dark:text-gray-200 dark:hover:bg-gray-500">
                  Cancel
               </button>
               <button id="save-job-status" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800">
                  Save Changes
               </button>
            </div>
         </div>
      </div>

      <script>
         document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('job-detail-modal');
            const closeModalBtn = document.getElementById('close-modal');
            const cancelModalBtn = document.getElementById('cancel-modal');
            const saveBtn = document.getElementById('save-job-status');
            const editButtons = document.querySelectorAll('.job-edit-btn');
            let currentJobId = null;

            // Show modal when edit button is clicked
            editButtons.forEach(button => {
               button.addEventListener('click', function() {
                  currentJobId = this.getAttribute('data-job-id');
                  
                  // Here you would typically fetch the job data from the server
                  // For demonstration, we'll just use some placeholder data
                  const jobData = {
                     title: "Apple MacBook Pro 17\"",
                     company: "Silver",
                     email: "info@silvertech.com",
                     phone: "+62812345678",
                     status: "in-stock"
                  };
                  
                  // Populate modal with job data
                  document.getElementById('modal-job-title').textContent = jobData.title;
                  document.getElementById('modal-company-name').textContent = jobData.company;
                  document.getElementById('modal-email').textContent = jobData.email;
                  document.getElementById('modal-phone').textContent = jobData.phone;
                  document.getElementById('job-status-select').value = jobData.status;
                  
                  // Show modal
                  modal.classList.remove('hidden');
               });
            });

            // Close modal when X button is clicked
            closeModalBtn.addEventListener('click', function() {
               modal.classList.add('hidden');
            });

            // Close modal when Cancel button is clicked
            cancelModalBtn.addEventListener('click', function() {
               modal.classList.add('hidden');
            });

            // Save changes and close modal
            saveBtn.addEventListener('click', function() {
               const newStatus = document.getElementById('job-status-select').value;
               
               // Update status in the table
               const statusSpan = document.getElementById(`job-status-${currentJobId}`);
               
               // Update status display in the table based on selected value
               if (newStatus === 'in-stock') {
                  statusSpan.textContent = 'In Stock';
                  statusSpan.className = 'bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300';
               } else if (newStatus === 'out-of-stock') {
                  statusSpan.textContent = 'Out of Stock';
                  statusSpan.className = 'bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300';
               } else if (newStatus === 'limited') {
                  statusSpan.textContent = 'Limited';
                  statusSpan.className = 'bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300';
               }
               
               // Here you would typically send an AJAX request to update the server
               console.log(`Updated job ${currentJobId} status to ${newStatus}`);
               
               // Close modal
               modal.classList.add('hidden');
            });

            // Close modal when clicking outside of it
            window.addEventListener('click', function(event) {
               if (event.target === modal) {
                  modal.classList.add('hidden');
               }
            });
         });
      </script>
   </body>
</html>