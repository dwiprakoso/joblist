<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <title>Selection Process</title>
</head>

<body>
    @php
        use Carbon\Carbon;
    @endphp
    @include('recruiter.components.sidebar')

    <div class="sm:ml-80">

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
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="/postroom"
                                class="text-sm font-medium text-gray-700 ms-1 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Post
                                Room</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">{{ $room->position_name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h2 class="mb-2 text-xl font-bold text-gray-900">{{ $room->position_name }}</h2>


            <div class="grid grid-cols-4 gap-4 mb-4">

                <div class="flex items-center justify-center h-16 rounded bg-gray-50 ">
                    <div class="ps-3">
                        <svg class="text-gray-800 w-11 h-11 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ps-3">
                        <div class="text-lg font-extrabold text-gray-700">{{ $room->candidates()->count() }}</div>
                        <div class="text-sm font-normal text-gray-700">Pendaftar</div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-16 rounded bg-gray-50 ">
                    <div class="ps-3">
                        <svg class="text-gray-800 w-11 h-11 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ps-3">
                        <div class="text-lg font-extrabold text-gray-700">{{ $room->candidates()->wherePivot('status', 'present')->count() }}</div>
                        <div class="text-sm font-normal text-gray-700">Sedang proses</div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-16 rounded bg-gray-50 ">
                    <div class="ps-3">
                        <svg class="text-gray-800 w-11 h-11 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M5 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0Zm-2 9a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1Zm13-6a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-4Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <div class="ps-3">
                        <div class="text-lg font-extrabold text-gray-700"> {{ $room->candidates()->wherePivot('status', 'rejected')->count() }}</div>
                        <div class="text-sm font-normal text-gray-700">Tereliminasi</div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-16 rounded bg-gray-50 ">
                    <div class="ps-3">
                        <svg class="text-gray-800 w-11 h-11 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2a1 1 0 0 0-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.707 8.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ps-3">
                        <div class="text-lg font-extrabold text-gray-700">
                            {{ $room->candidates()->wherePivot('status', 'approved')->count() }}</div>
                        <div class="text-sm font-normal text-gray-700">Tahap Offering</div>
                    </div>
                </div>
            </div>
            <div class="p-4 mb-4 border bg-gray-50 rounded-xl">
                <ul class="flex items-center w-full text-sm font-medium text-center text-e73002 sm:text-base"
                    id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-e73002"
                    data-tabs-inactive-classes="text-gray-500" role="tablist">
                    {{-- Phase 1 --}}
                    <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 "
                        role="path point selection">
                        <button
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200"
                            id="participant-tab" data-tabs-target="#participant" type="button" role="tab"
                            aria-controls="participant" aria-selected="false">
                            <div class="ps-3">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 text-white rounded-full bg-e73002">1</span>
                                <div
                                    class="flex items-center after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200">
                                    Participant Info
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">
                                    {{ Carbon::parse($room->created_at)->translatedFormat('d F Y') }}</div>
                            </div>
                        </button>
                    </li>
                    {{-- Phase 2 --}}
                    <li class="flex  md:w-full items-center  sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 "
                        role="path point selection">
                        <button
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 "
                            id="pemberkasan-tab" data-tabs-target="#pemberkasan" type="button" role="tab"
                            aria-controls="pemberkasan" aria-selected="false">
                            <div class="ps-3">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 text-white rounded-full bg-e73002">2</span>
                                <div
                                    class="flex items-center  after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200 ">
                                    <span class="hidden sm:inline-flex sm:ms-2"></span>
                                    Tahap Pemberkasan

                                </div>
                                <div class="block mt-2 text-xs text-gray-500">
                                    {{ $berkasPath->pathPemberkasan->rentang_waktu }}</div>
                            </div>
                        </button>
                    </li>
                    {{-- Phase 3 --}}
                    <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 "
                        role="path point selection">
                        <button
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200"
                            id="challange-tab" data-tabs-target="#challange" type="button" role="tab"
                            aria-controls="challange" aria-selected="false">
                            <div class="ps-3">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 text-white rounded-full bg-e73002">3</span>
                                <div
                                    class="flex items-center after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200">
                                    Tahap Challange
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">
                                    {{ $challangePath->pathChallange->rentang_waktu }}</div>
                            </div>
                        </button>
                    </li>
                    {{-- Phase 4 --}}
                    <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 "
                        role="path point selection">
                        <button
                            class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200"
                            id="meeting-tab" data-tabs-target="#meeting" type="button" role="tab"
                            aria-controls="meeting" aria-selected="false">
                            <div class="ps-3">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 text-white rounded-full bg-e73002">4</span>
                                <div
                                    class="flex items-center after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200">
                                    Tahap Meeting
                                </div>
                                <div class="block mt-2 text-xs text-gray-500">
                                    {{ $meetPath->pathMeetingInvitation->rentang_waktu }}</div>
                            </div>
                        </button>
                    </li>
                    {{-- Phase 5 --}}
                    <li class="flex items-center" role="path point selection">
                        <button class="flex me-2" id="approved-tab" data-tabs-target="#approved" type="button"
                            role="tab" aria-controls="approved" aria-selected="false">
                            <div class="ps-3">
                                <span
                                    class="inline-flex items-center justify-center w-8 h-8 text-white rounded-full bg-e73002">5</span>
                                <div
                                    class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                                    Tahap Offering
                                </div>
                            </div>
                        </button>
                    </li>


                </ul>
            </div>
            <div id="default-tab-content">
                <div class="hidden p-4 border rounded-lg bg-gray-50" id="participant" role="tabpanel"
                    aria-labelledby="participant-tab">
                    @include('recruiter.components.participantTable')
                </div>
                <div class="hidden p-4 border rounded-lg bg-gray-50" id="pemberkasan" role="tabpanel"
                    aria-labelledby="pemberkasan-tab">
                    @include('recruiter.components.pemberkasanTable')
                </div>
                <div class="hidden p-4 border rounded-lg bg-gray-50" id="challange" role="tabpanel"
                    aria-labelledby="challange-tab">
                    @include('recruiter.components.challangeTable')
                    <h1>Challange</h1>
                </div>
                <div class="hidden p-4 border rounded-lg bg-gray-50" id="meeting" role="tabpanel"
                    aria-labelledby="meeting-tab">
                    @include('recruiter.components.meetInvitationTable')
                    <h1>meetInvitation</h1>
                </div>
                <div class="hidden p-4 border rounded-lg bg-gray-50" id="approved" role="tabpanel"
                    aria-labelledby="approved-tab">
                    @include('recruiter.components.approvedTable')
                    <h1>Approved</h1>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
