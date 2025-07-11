@extends('layouts.template')
@section('title', 'Monitoring Dashboard')
@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- card1 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Today's Money</p>
                                    <h5 class="mb-0 font-bold">
                                        $53,000
                                        <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-600 to-cyan-400">
                                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card2 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Today's Users</p>
                                    <h5 class="mb-0 font-bold">
                                        2,300
                                        <span class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-600 to-cyan-400">
                                    <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">New Clients</p>
                                    <h5 class="mb-0 font-bold">
                                        +3,462
                                        <span class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-600 to-cyan-400">
                                    <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card4 -->
            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">Sales</p>
                                    <h5 class="mb-0 font-bold">
                                        $103,430
                                        <span class="leading-normal text-sm font-weight-bolder text-lime-500">+5%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div
                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-600 to-cyan-400">
                                    <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- cards row 4 -->

        <div class="flex flex-wrap my-6 -mx-3">
            <!-- card 1 -->

            <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <div class="flex flex-wrap mt-0 -mx-3">
                            <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                                <h6>Projects</h6>
                                <p class="mb-0 leading-normal text-sm">
                                    <i class="fa fa-check text-cyan-500"></i>
                                    <span class="ml-1 font-semibold">30 done</span>
                                    this month
                                </p>
                            </div>
                            <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                                <div class="relative pr-6 lg:float-right">
                                    <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-slate-400"></i>
                                    </a>
                                    <p class="hidden transform-dropdown-show"></p>

                                    <ul dropdown-menu
                                        class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                href="javascript:;">Action</a>
                                        </li>
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                href="javascript:;">Another action</a>
                                        </li>
                                        <li class="relative">
                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                href="javascript:;">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-6 px-0 pb-2">
                        <div class="overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Companies</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Members</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Budget</th>
                                        <th
                                            class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                            Completion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('/assets/img/small-logos/logo-xd.svg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                        alt="xd" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">Soft UI XD Version</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group">
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-1.jpg')}}" class="w-full rounded-full"
                                                        alt="team1" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Ryan Tompson
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-2.jpg')}}" class="w-full rounded-full"
                                                        alt="team2" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Romina Hadid
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-3.jpg')}}" class="w-full rounded-full"
                                                        alt="team3" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Alexander Smith
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-4.jpg')}}" class="w-full rounded-full"
                                                        alt="team4" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Jessica Doe
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> $14,000 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="w-3/4 mx-auto">
                                                <div>
                                                    <div>
                                                        <span class="font-semibold leading-tight text-xs">60%</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('/assets/img/small-logos/logo-atlassian.svg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                        alt="atlassian" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">Add Progress Track</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group">
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-2.jpg')}}" class="w-full rounded-full"
                                                        alt="team5" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Romina Hadid
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-4.jpg')}}" class="w-full rounded-full"
                                                        alt="team6" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Jessica Doe
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> $3,000 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="w-3/4 mx-auto">
                                                <div>
                                                    <div>
                                                        <span class="font-semibold leading-tight text-xs">10%</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('/assets/img/small-logos/logo-slack.svg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                        alt="team7" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">Fix Platform Errors</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group">
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-3.jpg')}}" class="w-full rounded-full"
                                                        alt="team8" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Romina Hadid
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-1.jpg')}}" class="w-full rounded-full"
                                                        alt="team9" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Jessica Doe
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> Not set </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="w-3/4 mx-auto">
                                                <div>
                                                    <div>
                                                        <span class="font-semibold leading-tight text-xs">100%</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('/assets/img/small-logos/logo-spotify.svg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                        alt="spotify" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">Launch our Mobile App</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group">
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-4.jpg')}}" class="w-full rounded-full"
                                                        alt="user1" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Ryan Tompson
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-3.jpg')}}" class="w-full rounded-full"
                                                        alt="user2" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Romina Hadid
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-4.jpg')}}" class="w-full rounded-full"
                                                        alt="user3" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Alexander Smith
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-1.jpg')}}" class="w-full rounded-full"
                                                        alt="user4" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Jessica Doe
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> $20,500 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="w-3/4 mx-auto">
                                                <div>
                                                    <div>
                                                        <span class="font-semibold leading-tight text-xs">100%</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('/assets/img/small-logos/logo-jira.svg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                        alt="jira" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">Add the New Pricing Page</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="mt-2 avatar-group">
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-4.jpg')}}" class="w-full rounded-full"
                                                        alt="user5" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Ryan Tompson
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> $500 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                            <div class="w-3/4 mx-auto">
                                                <div>
                                                    <div>
                                                        <span class="font-semibold leading-tight text-xs">25%</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-1/4 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="25"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{asset('/assets/img/small-logos/logo-invision.svg')}}"
                                                        class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                        alt="invision" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">Redesign New Online Shop</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                            <div class="mt-2 avatar-group">
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-1.jpg')}}" class="w-full rounded-full"
                                                        alt="user6" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Ryan Tompson
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out text-xs hover:z-30"
                                                    data-target="tooltip_trigger" data-placement="bottom">
                                                    <img src="{{asset('/assets/img/team-4.jpg')}}" class="w-full rounded-full"
                                                        alt="user7" />
                                                </a>
                                                <div data-target="tooltip"
                                                    class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                                    role="tooltip">
                                                    Jessica Doe
                                                    <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                        data-popper-arrow></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-0 text-sm whitespace-nowrap">
                                            <span class="font-semibold leading-tight text-xs"> $2,000 </span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                            <div class="w-3/4 mx-auto">
                                                <div>
                                                    <div>
                                                        <span class="font-semibold leading-tight text-xs">40%</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                    <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="40"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card 2 -->

            <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <h6>Orders overview</h6>
                        <p class="leading-normal text-sm">
                            <i class="fa fa-arrow-up text-lime-500"></i>
                            <span class="font-semibold">24%</span> this month
                        </p>
                    </div>
                    <div class="flex-auto p-4">
                        <div
                            class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                            <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">$2400, Design
                                        changes</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">22 DEC 7:20 PM
                                    </p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New order #1832412
                                    </h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">21 DEC 11 PM
                                    </p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Server payments
                                        for April</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">21 DEC 9:34 PM
                                    </p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New card added for
                                        order #4395133</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">20 DEC 2:20 AM
                                    </p>
                                </div>
                            </div>
                            <div class="relative mb-4 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-key-25 leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">Unlock packages
                                        for development</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">18 DEC 4:54 AM
                                    </p>
                                </div>
                            </div>
                            <div class="relative mb-0 after:clear-both after:table after:content-['']">
                                <span
                                    class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                    <i
                                        class="relative z-10 text-transparent ni leading-none ni-money-coins leading-pro bg-gradient-to-tl from-gray-900 to-slate-800 bg-clip-text fill-transparent"></i>
                                </span>
                                <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                    <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">New order #9583120
                                    </h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">17 DEC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>
@endsection
@section('scripts')
    <script>
        // Add any custom JavaScript here if needed
    </script>
@endsection
@section('styles')
    <style>
        /* Add any custom CSS here if needed */
    </style>
@endsection
@section('livewire')
    @livewireStyles
    @livewireScripts
@endsection
