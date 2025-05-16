<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>
<nav x-data="{ userMenuOpen: false }"
    class="relative flex flex-wrap items-center justify-between px-6 py-2 mx-6 transition-all shadow-none duration-200 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
    navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="leading-normal text-sm">
                    <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                    aria-current="page">Dashboard</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span
                        class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text"
                        class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                        placeholder="Type here..." />
                </div>
            </div>
            <ul class="flex flex-row items-center justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center px-4">
                    <a href="{{ url('chats') }}">
                        <i fixed-plugin-button-nav class="cursor-pointer fa fa-comments"></i>
                        {{-- counter sup message belum di baca --}}
                        {{-- <span
                            class="sup inline-flex items-center justify-center w-3 h-3 p-3 text-sm font-medium text-red bg-red-500 rounded-full">
                            5
                        </span> --}}
                    </a>
                </li>
                @auth
                    <li class="relative flex items-center pr-2">
                        <p class="hidden transform-dropdown-show"></p>
                        <a href="javascript:;" class="block p-0 transition-all text-sm ease-nav-brand text-slate-500"
                            dropdown-trigger aria-expanded="false">
                            <i class="cursor-pointer fa fa-user"></i>
                            <span class="hidden sm:inline"> {{ auth()->user()->name }}</span>
                        </a>

                        <ul dropdown-menu
                            class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                            <!-- add show class on dropdown open js -->
                            <li class="relative mb-2">
                                {{-- form logout --}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <i class="fa fa-sign-out"></i>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 font-normal leading-normal text-sm">Logout</h6>
                                            </div>
                                        </div>
                                    </button>
                                </form>

                            </li>
                        </ul>
                    </li>
                @else
                    <li class="flex items-center">
                        <a href="{{ url('pages/sign-in.html') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium text-slate-500 hover:text-slate-700 transition">
                            <i class="fa fa-user sm:mr-1"></i>
                            <span class="hidden sm:inline">Sign In</span>
                        </a>
                    </li>
                @endauth
                <li class="flex items-center pl-4 xl:hidden">
                    <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500"
                        sidenav-trigger>
                        <div class="w-4.5 overflow-hidden">
                            <i
                                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            <i
                                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
