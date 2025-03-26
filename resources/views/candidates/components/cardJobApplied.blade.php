<a href="{{ route('dashboard.kandidat.status.detail', $room->id) }}"
    class="inline-flex p-2 text-white rounded-lg bg-slate-100 active" aria-current="page">
    <div class="w-full">
        <div class="flex justify-between">
            <div class="flex">
                <img class="w-16 h-16 border rounded-lg" src="{{ $room->company->logo ? asset('storage/' . $room->company->logo) : asset('images/profile-empty.png') }}" alt="profile image - {{ $room->company->company_name }}">
                {{-- Keterangan --}}
                <div class="ps-3">
                    <div class="flex items-center gap-4 text-base font-bold text-gray-800">
                        <span class="text-xs text-gray-500"> {{ $room->position_name }}</span>

                    </div>
                    <div class="flex gap-2 my-1">
                        <div class="flex items-center">
                            <span class="text-xs text-gray-400">{{ $room->company->company_name }}</span>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-xs text-gray-400">{{ $room->company->company_address }}</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>
                            <span class="text-xs text-gray-400">{{ $room->salary }}</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>

                            <span class="text-xs text-gray-400">{{ $room->work_system }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="flex items-center gap-4 text-base font-bold text-gray-800">
                    <span
                        class="inline-flex items-center bg-negative text-white text-xs font-medium px-2.5 py-0.5 rounded-full">
                        Pilihan 1
                    </span>
                </div>
            </div>
        </div>

        <div class="p-2 mt-4 bg-gray-50 rounded-xl">
            <ul class="flex items-center w-full text-sm font-medium text-center text-e73002 sm:text-base"
                id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-e73002"
                data-tabs-inactive-classes="text-gray-500" role="tablist">
                <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 "
                    role="path point selection">
                    <button class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200"
                        id="participant-tab" data-tabs-target="#participant" type="button" role="tab"
                        aria-controls="participant" aria-selected="true">
                        <div class="ps-3">
                            <span class="inline-flex items-center justify-center w-6 h-6 bg-gray-200 rounded-full ">
                                <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                </svg>


                            </span>
                            <div
                                class="flex text-xs items-center after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200">
                                <span class="hidden text-xs sm:inline-flex sm:ms-1">Pemberkasan</span>
                            </div>

                        </div>
                    </button>
                </li>
                <li class="flex  md:w-full items-center  sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 "
                    role="path point selection">
                    <button
                        class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 "
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">
                        <div class="ps-3">
                            <span class="inline-flex items-center justify-center w-6 h-6 bg-gray-200 rounded-full">
                                <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M4.848 2.771A49.144 49.144 0 0 1 12 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 0 1-3.476.383.39.39 0 0 0-.297.17l-2.755 4.133a.75.75 0 0 1-1.248 0l-2.755-4.133a.39.39 0 0 0-.297-.17 48.9 48.9 0 0 1-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97ZM6.75 8.25a.75.75 0 0 1 .75-.75h9a.75.75 0 0 1 0 1.5h-9a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H7.5Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </span>
                            <span
                                class="flex items-center text-xs after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200 ">
                                Meet<span class="hidden text-xs sm:inline-flex sm:ms-1">Invitation</span>
                            </span>

                        </div>
                    </button>
                </li>
                <li class="flex  md:w-full items-center  sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-e73002 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 "
                    role="path point selection">
                    <button
                        class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 "
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">
                        <div class="ps-3">
                            <span class="inline-flex items-center justify-center w-6 h-6 bg-gray-200 rounded-full ">

                                <svg class="w-3 h-3 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path
                                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                </svg>

                            </span>
                            <span
                                class="flex items-center text-xs after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200 ">
                                Challange<span class="hidden text-xs sm:inline-flex sm:ms-1"></span>
                            </span>

                        </div>
                    </button>
                </li>
                <li class="flex items-center" role="path point selection">
                    <button class="flex me-2" id="settings-tab" data-tabs-target="#settings" type="button"
                        role="tab" aria-controls="settings" aria-selected="false">
                        <div class="ps-3">
                            <span class="inline-flex items-center justify-center w-6 h-6 bg-gray-200 rounded-full ">
                                <svg class="w-3 h-3 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                                </svg>
                            </span>
                            <div
                                class="flex items-center text-xs after:content-['/']  sm:after:hidden after:mx-2 after:text-gray-200">
                                Pengumuman <span class="hidden text-xs sm:inline-flex sm:ms-1"></span>
                            </div>
                        </div>
                    </button>
                </li>

            </ul>
        </div>
    </div>
</a>
