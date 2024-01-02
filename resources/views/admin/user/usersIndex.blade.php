@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
            navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                {{-- <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm leading-normal">
                        <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                        aria-current="page">Tables</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize">Tables</h6>
            </nav> --}}

                <div class="flex  items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4 w-full">
                        <div class="flex justify-start items-center w-full transition-all rounded-lg ease-soft">
                            <img src="{{ asset('assets/1.png') }}" alt="" class="w-12">
                            <h3 class="w-full text-2xl mt-2">CCC</h3>
                        </div>
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <!-- online builder btn  -->
                        <!-- <li class="flex items-center">
                                                                                                                              <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
                                                                                                                            </li> -->

                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500"
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
                        <li class="flex items-center px-4">
                            <a href="javascript:;" class="p-0 text-sm transition-all ease-nav-brand text-slate-500">
                                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                                <!-- fixed-plugin-button-nav  -->
                            </a>
                        </li>

                        <!-- notifications -->

                        <li class="relative flex items-center pr-2">
                            <p class="hidden transform-dropdown-show"></p>
                            <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500"
                                dropdown-trigger aria-expanded="false">
                                <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
                            </a>

                            <ul dropdown-menu
                                class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                                <!-- add show class on dropdown open js -->
                                <li class="relative mb-2">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 text-sm font-normal leading-normal"><span
                                                        class="font-semibold">New message</span> from Laur</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative mb-2">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 text-sm font-normal leading-normal"><span
                                                        class="font-semibold">New album</span> by Travis Scott</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative">
                                    <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div
                                                class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 text-sm font-normal leading-normal">Payment successfully
                                                    completed</h6>
                                                <p class="mb-0 text-xs leading-tight text-slate-400">
                                                    <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="w-full px-6 py-6 mx-auto">
            <!-- table 1 -->

            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div
                            class="p-6 pb-0 mb-6 flex justify-between items-center bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6>Users Table</h6><button type="button" data-modal-target="tambah-user-modal"
                                data-modal-toggle="tambah-user-modal"
                                class="inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded cursor-pointer bg-gradient-to-tl from-blue-600 to-cyan-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Tambah
                                User</button>

                            <div id="tambah-user-modal" style="z-index: 999 !important;" tabindex="-1"
                                aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 ">
                                                Tambah User
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="tambah-user-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div
                                            class="p-4 md:p-5 space-y-4 flex flex-col sm:flex-row justify-center sm:justify-around sm:items-start items-center">
                                            <img src="{{ asset('assets/data/image-preview.png') }}" alt=""
                                                class="w-68" id="imagePreviewSkillAdd">
                                            <form class="flex flex-col gap-2" action="{{ route('addSkill') }}"
                                                method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" placeholder="Nama" name="name"
                                                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                                    required></input>
                                                <input type="file" name="image" accept="image/*"
                                                    id="gambarIzinSkillAddt"
                                                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                                    required></input>
                                                <button type="submit"
                                                    class="inline-block px-2 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded cursor-pointer bg-gradient-to-tl from-blue-600 to-cyan-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Tambah
                                                    Skill</button>
                                            </form>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    const imageInputSkillAdd = document.getElementById('gambarIzinSkillAddt');
                                                    const imagePreviewSkillAdd = document.getElementById('imagePreviewSkillAdd');

                                                    imageInputSkillAdd.addEventListener('change', function() {
                                                        if (imageInputSkillAdd.files && imageInputSkillAdd.files[0]) {
                                                            const reader = new FileReader();

                                                            reader.onload = function(e) {
                                                                imagePreviewSkillAdd.src = e.target.result;
                                                                imagePreviewSkillAdd.style.display = 'block';
                                                            };

                                                            reader.readAsDataURL(imageInputSkillAdd.files[0]);
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                No.</th>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                User</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Phone</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Sosial</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Deskripsi</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($users->count() > 0)
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td
                                                        class="px-6 py-3 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <div class="flex px-2 py-1">
                                                            <div>
                                                                <img src="{{ $user->image == null ? asset('assets/data/no-img.jpg') : asset('storage/' . $user->image) }}"
                                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                                    alt="{{ $user->name }}" />
                                                            </div>
                                                            <div class="flex flex-col justify-center">
                                                                <h6 class="mb-0 text-sm leading-normal">{{ $user->name }}
                                                                </h6>
                                                                <p class="mb-0 text-xs leading-tight text-slate-400">
                                                                    {{ $user->email }}</p>
                                                                <p class="mb-0 text-xs leading-tight text-slate-400">
                                                                    {{ $user->role_id }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 pr-10 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                                            {{ $user->phone }}
                                                        </p>
                                                    </td>

                                                    <td
                                                        class="p-2 pr-10 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                                            @if ($user->instagram != null)
                                                                <a href="{{ url('https://www.instagram.com/' . $user->instagram) }}"
                                                                    target="_blank" title="{{ $user->instagram }}">
                                                                    <i class="fa-brands fa-instagram text-white pt-1 px-1 pb-0.5 text-lg"
                                                                        style="background: radial-gradient(
                                                                    circle farthest-corner at 28% 100%,
                                                                    #fcdf8f 0%,
                                                                    #fbd377 10%,
                                                                    #fa8e37 22%,
                                                                    #f73344 35%,
                                                                    transparent 65%
                                                                  ), linear-gradient(145deg, #3051f1 10%, #c92bb7 70%);"></i>
                                                                </a>
                                                            @else
                                                            @endif

                                                            @if ($user->linkedin != null)
                                                                <a href="{{ url('https://www.linkedin.com/in/' . $user->linkedin) }}"
                                                                    target="_blank" title="{{ $user->linkedin }}">
                                                                    <i class="fa-brands fa-linkedin-in text-white pt-1 px-1 pb-0.5 text-lg"
                                                                        style="background-color: #0a66c2;"></i>
                                                                </a>
                                                            @else
                                                            @endif
                                                        </p>
                                                    </td>

                                                    <td
                                                        class="p-2 pr-10 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                                            {{ $user->description }}
                                                        </p>
                                                    </td>


                                                    <td
                                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                        <button data-modal-target="{{ $user->slug }}-modal-detail"
                                                            data-modal-toggle="{{ $user->slug }}-modal-detail"
                                                            class="bg-gradient-to-tl from-blue-600 to-blue-300 px-1.4 text-lg rounded py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"><i
                                                                class="fa-solid fa-circle-info"></i></button>
                                                        <button data-modal-target="{{ $user->slug }}-modal-edit"
                                                            data-modal-toggle="{{ $user->slug }}-modal-edit"
                                                            class="bg-gradient-to-tl from-green-600 to-green-300 px-1.4 text-lg rounded py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"><i
                                                                class="fa-solid fa-pen-to-square"></i></button>
                                                        <a href="{{ url('hapus-user/' . $user->slug) }}">
                                                            <button>
                                                                <i
                                                                    class="fa-solid fa-trash-can bg-gradient-to-tl from-red-600 to-red-300 px-1.4 text-lg rounded py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"></i>
                                                            </button>
                                                        </a>






                                                        <div id="{{ $user->slug }}-modal-edit"
                                                            style="z-index: 999 !important;" tabindex="-1"
                                                            aria-hidden="true"
                                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                                <!-- Modal content -->
                                                                <div
                                                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                    <!-- Modal header -->
                                                                    <div
                                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                        <h3 class="text-xl font-semibold text-gray-900 ">
                                                                            Edit Skill
                                                                        </h3>
                                                                        <button type="button"
                                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                            data-modal-hide="{{ $user->slug }}-modal-edit">
                                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 14 14">
                                                                                <path stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div
                                                                        class="p-4 md:p-5 space-y-4 flex flex-col sm:flex-row justify-center sm:justify-around sm:items-start items-center">
                                                                        <img src="{{ asset('storage/' . $user->image) }}"
                                                                            id="imagePreviewuserEdit" alt="user"
                                                                            class="w-68">
                                                                        <form class="flex flex-col gap-2"
                                                                            action="{{ route('editSkill', ['id' => $user->id]) }}"
                                                                            method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <input type="text" placeholder="Nama"
                                                                                name="name"
                                                                                value="{{ $user->name }}"
                                                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                                                                required></input>
                                                                            <input type="file" name="image"
                                                                                id="gambarIzinSkillEdit" accept="image/*"
                                                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                                                            <button type="submit"
                                                                                class="inline-block px-2 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded cursor-pointer bg-gradient-to-tl from-blue-600 to-cyan-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Edit
                                                                                Skill</button>
                                                                        </form>
                                                                        <script>
                                                                            document.addEventListener('DOMContentLoaded', function() {
                                                                                const imageInputSkillEdit = document.getElementById('gambarIzinSkillEdit');
                                                                                const imagePreviewSkillEdit = document.getElementById('imagePreviewSkillEdit');

                                                                                imageInputSkillEdit.addEventListener('change', function() {
                                                                                    if (imageInputSkillEdit.files && imageInputSkillEdit.files[0]) {
                                                                                        const reader = new FileReader();

                                                                                        reader.onload = function(e) {
                                                                                            imagePreviewSkillEdit.src = e.target.result;
                                                                                            imagePreviewSkillEdit.style.display = 'block';
                                                                                        };

                                                                                        reader.readAsDataURL(imageInputSkillEdit.files[0]);
                                                                                    }
                                                                                });
                                                                            });
                                                                        </script>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div id="{{ $user->slug }}-modal-detail"
                                                    style="z-index: 999 !important;" tabindex="-1" aria-hidden="true"
                                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center text-start items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div
                                                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                <div class="flex justify-start items-center gap-2">
                                                                    <img src="{{ $user->image != null ? asset('storage/' . $user->image) : asset('assets/data/no-img.jpg') }}"
                                                                        alt="users"
                                                                        class="w-12 h-12 rounded shadow-soft-xxs">
                                                                    <div
                                                                        class="flex flex-col justify-start items-start gap-0">
                                                                        <p
                                                                            class="text-lg font-semibold mb-0 text-gray-900 ">
                                                                            {{ $user->name }}</p>
                                                                        <p
                                                                            class="text-sm font-semibold mb-0 mt-0 text-white rounded {{ $user->role_id == 2 ? 'bg-orange-500  px-1' : 'bg-blue-500  px-1' }} ">
                                                                            {{ $user->role->name }}</p>
                                                                    </div>
                                                                </div>
                                                                <button type="button"
                                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                    data-modal-hide="{{ $user->slug }}-modal-detail">
                                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <div class="p-4 md:p-5 space-y-4">
                                                                <div class="flex flex-wrap -mx-3">
                                                                    <div class="flex-none w-full max-w-full">
                                                                        <div
                                                                            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                                                            <div class="flex-auto">
                                                                                <div class="p-0 overflow-x-auto">
                                                                                    <div class="flex-auto p-2">
                                                                                        <p class="leading-normal text-lg">
                                                                                            {{ $user->description }}</p>
                                                                                        <ul
                                                                                            class="flex flex-col pl-0 mb-0 rounded-lg">
                                                                                            <li
                                                                                                class="relative block px-4 py-1 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                                                                                                <strong
                                                                                                    class="text-slate-700">Username:</strong>
                                                                                                &nbsp; {{ $user->username }}
                                                                                            </li>
                                                                                            <li
                                                                                                class="relative block px-4 py-1 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                                                                                                <strong
                                                                                                    class="text-slate-700">Name:</strong>
                                                                                                &nbsp; {{ $user->name }}</li>
                                                                                            <li
                                                                                                class="relative block px-4 py-1 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                                                                                                <strong
                                                                                                    class="text-slate-700">Telepon:</strong>
                                                                                                &nbsp; {{ $user->phone }}
                                                                                            </li>
                                                                                            <li
                                                                                                class="relative block px-4 py-1 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                                                                                                <strong
                                                                                                    class="text-slate-700">Email:</strong>
                                                                                                &nbsp;
                                                                                                {{ $user->email == null ? '-' : $user->email }}
                                                                                            </li>
                                                                                            <li class="relative block px-4 py-1 pb-0 pl-0 bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                                                                                            <strong class="leading-normal text-sm text-slate-700">Social:</strong> &nbsp;
                                                                                          @if($user->instagram || $user->linkedin)
                                                                                          @if($user->instagram)
                                                                                          <a class="inline-block mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none text-sky-900" href="{{ url('https://instagram.com/'. $user->instagram) }}" target="_blank">
                                                                                            <i class="fa-brands fa-instagram text-white fa-lg py-2.2 rounded pl-[2px] pr-[2.5px]"
                                                                                            style="background: radial-gradient(
                                                                                        circle farthest-corner at 28% 100%,
                                                                                        #fcdf8f 0%,
                                                                                        #fbd377 10%,
                                                                                        #fa8e37 22%,
                                                                                        #f73344 35%,
                                                                                        transparent 65%
                                                                                      ), linear-gradient(145deg, #3051f1 10%, #c92bb7 70%);"></i>
                                                                                        </a>
                                                                                            @endif
                                                                                            @if($user->linkedin)
                                                                                            <a class="inline-block mt-1 mb-0 font-bold text-center text-blue-800 align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none" href="{{ url('https://www.linkedin.com/in/'. $user->linkedin) }}" target="_blank">
                                                                                                <i class="fab fa-linkedin text-[20px]"></i>
                                                                                              </a>
                                                                                            @endif

                                                                                            @else

                                                                                            -
                                                                                          @endif
                                                                                          </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3"
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="flex flex-col items-center justify-center">
                                                        <img src="{{ asset('assets/data/no-data.jpg') }}" alt=""
                                                            class="w-48 h-48">
                                                        <p class="mb-0 text-md font-semibold leading-tight">TIDAK ADA DATA
                                                            SKILL</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
