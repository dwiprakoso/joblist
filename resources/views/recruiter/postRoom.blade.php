<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
    <title>Selection Process</title>
</head>

<body>
    @include('recruiter.components.sidebar')

    <div class=" sm:ml-80">
        <div class="p-4 m-4 rounded-lg dark:border-gray-700">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">Post
                                Room</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="grid grid-cols-3 gap-4">
                <div
                    class="flex items-center col-span-4 p-8 mb-4 rounded h-28 bg-gradient-to-r from-negative to-negative-hover dark:bg-gray-800">

                    <div>
                        <p class="mb-2 text-sm font-bold text-white">
                            Job portal:
                        </p>
                        <div class="relative flex items-center gap-2">
                            <div
                                class="absolute inset-y-0 flex items-center pointer-events-none rtl:inset-r-0 start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search-users"
                                class="block p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 w-80 bg-gray-50 focus:ring-negative focus:border-negative"
                                placeholder="Search participant">

                            <div class="relative">
                                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg focus:outline-none hover:bg-gray-100 "
                                    type="button">
                                    <span class="sr-only">Role Category</span>
                                    Role Category
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownAction"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownActionButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate
                                                account</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                            User</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



            {{-- Body konten --}}

            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

                <div>
                    <div class="flex items-center justify-center w-full">
                        <button data-modal-target="postJob-modal" data-modal-toggle="postJob-modal"
                            class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer h-44 bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v6.41A7.5 7.5 0 1 0 10.5 22H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M9 16a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm6-3a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1v-1a1 1 0 0 1 1-1Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Click untuk post <span
                                        class="font-semibold">Job</span></p>
                            </div>
                        </button>
                    </div>
                </div>
                @if ($rooms->isEmpty())
                    <div>
                        <div class="flex items-center justify-center w-full">
                            <div
                                class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg h-44 bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">Room anda masih <span
                                            class="font-semibold">Kosong</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($rooms as $room)
                        @include('recruiter.components.cardPortal')
                    @endforeach

                @endif

            </div>
        </div>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Main modal -->
        <div id="postJob-modal" tabindex="-1" aria-hidden="true"
            class="hidden fixed top-0 right-0 left-0 z-50  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full h-full max-w-4xl p-4">
                <!-- Modal content -->
                <div class="relative flex flex-col h-full rounded-lg shadow bg-gray-50">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Buat Job Portal - Data Lowongan
                        </h3>
                        <button type="button"
                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="postJob-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body Post Room -->
                    <div class="flex-grow p-4 overflow-y-auto md:p-5">
                        <div class="grid grid-cols-4 gap-4 ">
                            <div class="col-span-2">
                                <x-label-input-post-room label="Masukan posisi lowongan" name="position_name"
                                    placeholder="Masukan posisi lowongan" :required="true" />
                            </div>
                            <div class="col-span-2 sm:col-span-2">
                                <x-label-input-post-room label="Departemen" name="departement"
                                    placeholder="Masukkan departement" :required="true" />
                            </div>
                            <div class="col-span-2 sm:col-span-2">
                                <label for="years_of_experience_criteria"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kriteria tahun
                                    pengalaman</label>
                                <div class="flex flex-wrap mt-4">
                                    <div class="flex items-center me-4">
                                        <input id="red-radio" type="radio" value="<1 tahun"
                                            name="years_of_experience_criteria"
                                            class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="red-radio"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                            < 1 tahun</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="green-radio" type="radio" value="1 tahun"
                                            name="years_of_experience_criteria"
                                            class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="green-radio"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">1
                                            Tahun</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input checked id="purple-radio" type="radio" value="2 tahun"
                                            name="years_of_experience_criteria"
                                            class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="purple-radio"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">2
                                            Tahun</label>
                                    </div>
                                    <div class="flex items-center me-4">
                                        <input id="teal-radio" type="radio" value="3 - 4 tahun"
                                            name="years_of_experience_criteria"
                                            class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="teal-radio"
                                            class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">3 - 4
                                            Tahun</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-label-input-post-room label="Jumlah posisi dibuka" name="total_open_position"
                                    placeholder="10" :required="true" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <x-label-input-number label="Gaji" name="salary" placeholder="2.500.000"
                                    :required="true" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="deadline"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Akhir
                                    pendaftaran</label>
                                <div class="relative max-w-sm">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-autohide datepicker-format="dd-mm-yyyy"
                                        type="text" name="deadline"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date">
                                </div>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                @php
                                    $workSystemOptions = [
                                        'WFO' => 'WFO',
                                        'WFH' => 'WFH',
                                        'Hybrid' => 'Hybrid',
                                    ];
                                @endphp
                                <x-select-option-post-room label="Work System" name="work_system" id="work_system"
                                    :options="$workSystemOptions" selected="WFO" />

                                </select>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                @php
                                    $options = [
                                        'full time' => 'fulltime',
                                        'magang' => 'magang',
                                        'part time' => 'parttime',
                                    ];
                                @endphp
                                <x-select-option-post-room label="Working Hours" name="working_hours"
                                    id="working_hours" :options="$options" selected="full time" />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                @php
                                    $accessOptions = [
                                        'public' => 'Public',
                                        'private' => 'Private',
                                    ];
                                @endphp
                                <x-select-option-post-room label="Hak akses" name="access_rights" id="access_rights"
                                    :options="$accessOptions" selected="public" />

                            </div>
                            <div class="col-span-4">
                                <x-textarea-post-room label="Deskripsi pekerjaan" name="description" />
                            </div>
                            <div class="col-span-4">
                                <x-textarea-post-room label="Requirements pekerjaan" name="requirements" />
                            </div>
                        </div>


                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <div class="flex">
                            <button data-modal-hide="postJob-modal" data-modal-target="timeline-modal"
                                data-modal-show="timeline-modal"
                                class="flex items-center justify-center h-8 px-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 ">
                                Berikutnya
                                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                                <span class="sr-only">Berikutnya</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal timeline -->
        <div id="timeline-modal" tabindex="-1" aria-hidden="true"
            class="hidden fixed top-0 right-0 left-0 z-50  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full h-full max-w-4xl p-4">
                <!-- Modal content -->
                <div class="relative flex flex-col h-full rounded-lg shadow bg-gray-50">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 ">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Buat Job Portal - Data Step Seleksi
                        </h3>
                        <button type="button"
                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="timeline-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="flex-grow p-4 overflow-y-auto md:p-5">
                        <div class="relative mb-4 md:mb-5">

                            {{-- Tahap Upload Berkas --}}
                            <div tabindex="0"
                                class="p-2 mb-2 bg-white rounded-md shadow-md path-selection focus:outline-none focus-within:border-l-8 focus-within:border-e73002">


                                <x-heading-postroom order="1" title="Tahap Upload Berkas" />
                                <div class="grid grid-cols-5 gap-4 uploud-berkas">
                                    {{-- Judul Tahap 1 --}}
                                    <div class="col-span-5">
                                        <x-label-input-post-room label="Judul" name="berkas.path_name"
                                            placeholder="Judul" :required="true" />
                                    </div>
                                    {{-- Deskripsi Tahap 1 --}}
                                    <div class="col-span-5">
                                        <x-textarea-post-room label="Deskripsi" name="berkas.deskripsi" />
                                    </div>

                                    {{-- Rentang Waktu Tahap 1 --}}
                                    <div class="col-span-2 ">
                                        <x-range-date-picker-post-room startName="berkas.start"
                                            endName="berkas.end" />
                                    </div>
                                    {{-- Lampiran Tahap 1  --}}
                                    <div class="col-span-2 col-end-6 ">
                                        <x-file-input-post-room label="Lampiran" name="berkas.lampiran" />
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="relative mb-4 md:mb-5">
                            <div tabindex="0"
                                class="p-2 mb-2 bg-white rounded-md shadow-md path-selection focus:outline-none focus-within:border-l-8 focus-within:border-e73002">
                                {{-- Tahap 2 --}}
                                <x-heading-postroom order="2" title="Tahap Challenge" />
                                <div class="grid grid-cols-5 gap-4 uploud-berkas">
                                    {{-- Judul Tahap 2 --}}
                                    <div class="col-span-5">
                                        <x-label-input-post-room label="Judul" name="challange.path_name"
                                            placeholder="Judul" :required="true" />
                                    </div>
                                    {{-- Deskripsi Tahap 2 --}}
                                    <div class="col-span-5">
                                        <x-textarea-post-room label="Deskripsi" name="challange.deskripsi" />
                                    </div>
                                    {{-- Lokasi / Link Meeting Tahap 2 --}}
                                    <div class="col-span-5">
                                        <x-label-input-post-room label="Lokasi / Link Challange"
                                            name="challange.link_lampiran_challange"
                                            placeholder="Masukkan lokasi atau link online challange"
                                            :required="true" />
                                    </div>
                                    {{-- Rentang Waktu Tahap 2 --}}
                                    <div class="col-span-2 ">
                                        <x-range-date-picker-post-room startName="challange.start"
                                            endName="challange.end" />
                                    </div>
                                    {{-- Lampiran Tahap 2  --}}
                                    <div class="col-span-2 col-end-6 ">
                                        <x-file-input-post-room label="Lampiran" name="challange.lampiran" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="relative mb-4 md:mb-5">
                            <div tabindex="0"
                                class="p-2 mb-2 bg-white rounded-md shadow-md path-selection focus:outline-none focus-within:border-l-8 focus-within:border-e73002">
                                {{-- Tahap 3 --}}
                                <x-heading-postroom order="3" title="Tahap Meeting" />
                                <div class="grid grid-cols-5 gap-4 uploud-berkas">
                                    {{-- Judul Tahap 3 --}}
                                    <div class="col-span-5">
                                        <x-label-input-post-room label="Judul" name="meet.path_name"
                                            placeholder="Judul" :required="true" />
                                    </div>
                                    {{-- Deskripsi Tahap 3 --}}
                                    <div class="col-span-5">
                                        <x-textarea-post-room label="Deskripsi" name="meet.deskripsi" />
                                    </div>
                                    {{-- Lokasi / Link Meeting Tahap 3 --}}
                                    <div class="col-span-5">
                                        <x-label-input-post-room label="Link / Lokasi Meeting"
                                            name="meet.lokasi_link_meet"
                                            placeholder="Masukkan lokasi atau link online meeting"
                                            :required="true" />
                                    </div>
                                    {{-- Rentang Waktu Tahap 3 --}}
                                    <div class="col-span-2 ">
                                        <x-range-date-picker-post-room startName="meet.start" endName="meet.end" />
                                    </div>
                                    {{-- Lampiran Tahap 3  --}}
                                    <div class="col-span-2 col-end-6 ">
                                        <x-file-input-post-room label="Lampiran" name="meet.lampiran" />
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <div class="flex">
                            <button data-modal-hide="timeline-modal" data-modal-target="postJob-modal"
                                data-modal-show="postJob-modal"
                                class="flex items-center justify-center h-8 px-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg me-3 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                                </svg>
                                Kembali
                            </button>
                            <button
                                class="flex items-center justify-center h-8 px-3 text-sm font-medium text-white border border-gray-300 rounded-lg bg-positive hover:bg-positive-hover"
                                type="submit">
                                {{-- form="formSelectionPath" id="submitButton" --}}
                                <svg class="w-6 h-6 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7.414A2 2 0 0 0 20.414 6L18 3.586A2 2 0 0 0 16.586 3H5Zm3 11a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6H8v-6Zm1-7V5h6v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M14 17h-4v-2h4v2Z" clip-rule="evenodd" />
                                </svg>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
