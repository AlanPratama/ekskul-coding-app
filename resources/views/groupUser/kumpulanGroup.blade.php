@extends('layouts.admin')

@section('title', 'Kumpulan Group')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Tambahkan sebelum tag </body> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@endsection

@section('content')
    <main class="ease-soft-in-out xl:ml-72 relative h-full max-h-screen rounded-xl transition-all duration-200">
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


        <div class="w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-12 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div
                    class="p-6 pb-0 mb-6 flex sm:flex-row flex-col justify-between items-center sm:gap-0 gap-1 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex sm:flex-row flex-col justify-start items-center sm:gap-0 gap-2">
                        <img src="{{ $group->image == null ? asset('assets/data/image-preview.png') : asset('storage/' . $group->image) }}"
                            alt="group" class="sm:w-48 w-30">
                        <div class="flex flex-col items-start justify-center">
                            <h6>Group - {{ $group->name }}</h6>
                            <h6>Group - {{ $group->name }}</h6>
                            <h6>Group - {{ $group->name }}</h6>
                        </div>
                    </div>
                    <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal"
                        class="inline-block px-2 py-1 font-bold text-center text-white uppercase align-middle transition-all rounded cursor-pointer bg-gradient-to-tl from-blue-600 to-cyan-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Edit
                        Group</button>

                    <div id="default-modal" style="z-index: 999 !important;" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Edit - {{ $group->name }}
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('edit.group', ['slug' => $group->slug]) }}" method="post"
                                    enctype="multipart/form-data" class="p-4 md:p-5 space-y-4">
                                    @csrf
                                    @method('put')
                                    <div
                                        class="flex flex-col sm:flex-row justify-center sm:justify-around sm:items-start items-center">

                                        <img src="{{ $group->image == null ? asset('assets/data/image-preview.png') : asset('storage/' . $group->image) }}"
                                            alt="image" class="w-68" id="imagePreviewTambah">
                                        <div class="flex flex-col gap-2 sm:w-auto w-full">
                                            <input type="text" placeholder="Nama Kelompok" name="name"
                                                value="{{ $group->name }}"
                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                                required></input>
                                            <input type="file" name="image" accept="image/*" id="gambarTambah"
                                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></input>
                                            <button type="submit"
                                                class="inline-block px-2 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded cursor-pointer bg-gradient-to-tl from-blue-600 to-cyan-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Submit</button>
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const imageInputTambah = document.getElementById('gambarTambah');
                                                const imagePreviewTambah = document.getElementById('imagePreviewTambah');

                                                imageInputTambah.addEventListener('change', function() {
                                                    if (imageInputTambah.files && imageInputTambah.files[0]) {
                                                        const reader = new FileReader();

                                                        reader.onload = function(e) {
                                                            imagePreviewTambah.src = e.target.result;
                                                            imagePreviewTambah.style.display = 'block';
                                                        };

                                                        reader.readAsDataURL(imageInputTambah.files[0]);
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                    <div class="">
                                        <div class="mb-3">
                                            <label
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pilih
                                                Ketua</label>
                                            <select id="ketuaSelect" disabled
                                                class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                required>
                                                @php
                                                    $usersWithKetua = [];
                                                    foreach ($group->users as $user) {
                                                        if ($user->pivot->obligation === 'Ketua') {
                                                            $usersWithKetua[] = [
                                                                'id' => $user->id,
                                                                'name' => $user->name,
                                                                'obligation' => $user->pivot->obligation,
                                                            ];
                                                        }
                                                    }
                                                @endphp
                                                <option value="{{ $usersWithKetua[0]['id'] }}" disabled selected>
                                                    {{ $usersWithKetua[0]['name'] }} -
                                                    {{ $usersWithKetua[0]['obligation'] }}
                                                </option>
                                                {{-- @php
                                                    $usersWithKetua = [];
                                                    foreach ($group->users as $user) {
                                                        if ($user->pivot->obligation === 'Ketua') {
                                                            $usersWithKetua[] = [
                                                                'id' => $user->id,
                                                                'name' => $user->name,
                                                                'obligation' => $user->pivot->obligation,
                                                            ];
                                                        }
                                                    }
                                                @endphp

                                                @if (!empty($usersWithKetua))
                                                    <option value="{{ $usersWithKetua[0]['id'] }}" disabled selected>
                                                        {{ $usersWithKetua[0]['name'] }} -
                                                        {{ $usersWithKetua[0]['obligation'] }}
                                                    </option>
                                                @else
                                                    <option value="" disabled selected>No user with 'Ketua'
                                                        obligation</option>
                                                @endif
                                                @foreach ($users as $user)
                                                    @if ($pivotGroup->user_id != $user->id)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endif
                                                @endforeach --}}
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Pilih
                                                Anggota</label>
                                            <select id="anggotaSelect"
                                                class="anggota-select focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block min-w-full w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                                name="anggota[]" multiple="multiple" style="width: 100% !important;"
                                                required>
                                                @foreach ($users as $user)
                                                    @php
                                                        $isSelected = false;
                                                        // Check if the user has this skill
                                                        if ($group->users != null) {
                                                            foreach ($group->users as $userGroup) {
                                                                if ($userGroup->pivot->obligation === 'Anggota') {
                                                                    if ($userGroup->id == $user->id) {
                                                                        $isSelected = true;
                                                                        break;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    @endphp

                                                    <option value="{{ $user->id }}"
                                                        {{ $isSelected ? 'selected' : '' }}>
                                                        {{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </form>
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
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        User</th>

                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nisn</th>

                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Email</th>

                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Deskripsi</th>
                                    <th
                                        class="ml-6 mr-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Obligation</th>
                                    {{-- <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($group->users as $user)
                                    <tr>
                                        <td
                                            class="py-3 pr-10 align-middle px-6 bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                {{ $loop->iteration }}
                                            </p>
                                        </td>

                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="{{ $user->image == null ? asset('assets/data/no-img.jpg') : asset('storage/' . $user->image) }}"
                                                        class="inline-flex items-center justify-center mr-3 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 shadow-soft-xs rounded"
                                                        alt="user1" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">{{ $user->name }}</h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400">
                                                        {{ $user->phone == null ? '-' : $user->phone }}</p>
                                                </div>
                                            </div>
                                        </td>

                                        <td
                                            class="p-2 pr-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                {{ $user->nisn == null ? '-' : $user->nisn }}
                                            </p>
                                        </td>

                                        <td
                                            class="p-2 pr-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                {{ $user->email == null ? '-' : $user->email }}
                                            </p>
                                        </td>

                                        <td
                                            class="p-2 pr-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">
                                                {{ $user->description == null ? '-' : $user->description }}
                                            </p>
                                        </td>

                                        <td
                                            class="align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            @php
                                                $obligation = $user->pivot->obligation;
                                            @endphp
                                            <p
                                                class="text-xs {{ $obligation === 'Ketua' ? 'bg-orange-500 text-white w-12 py-1 px-2' : 'bg-blue-500 text-white w-16 py-1 px-2' }} mb-0 font-semibold leading-tight rounded">
                                                {{ $obligation }}
                                            </p>
                                        </td>


                                        {{-- <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent flex justify-center items-center gap-1">
                                            <a href="{{ url('/group/detail/' . $user->slug) }}">
                                                <button
                                                    class="bg-gradient-to-tl from-blue-600 to-blue-300 px-1.4 text-lg rounded py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"><i
                                                        class="fa-solid fa-circle-info"></i></button>
                                            </a>
                                            <button
                                                class="bg-gradient-to-tl from-green-600 to-green-300 px-1.4 text-lg rounded py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"><i
                                                    class="fa-solid fa-pen-to-square"></i></button>
                                            <button type="button"
                                                onclick="event.preventDefault(); deleteGroup('{{ $user->slug }}');"><i
                                                    class="fa-solid fa-trash-can bg-gradient-to-tl from-red-600 to-red-300 px-1.4 text-lg rounded py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"></i></button>
                                            <script>
                                                function deleteGroup(userSlug) {
                                                    Swal.fire({
                                                        title: 'Apakah Anda yakin ?',
                                                        text: 'Anda tidak dapat mengembalikan ini!',
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonText: 'Hapus',
                                                        confirmButtonColor: '#ff3d41',
                                                        cancelButtonText: 'Batal',
                                                        cancelButtonColor: '#8fcc34',
                                                    }).then((result) => {
                                                        if (result.isConfirmed || result.status == 200) {
                                                            axios.delete(`/group/delete/${userSlug}`)
                                                                .then(response => {
                                                                    let timerInterval;
                                                                    Swal.fire({
                                                                        title: "BERHASIL!",
                                                                        html: "USER TELAH DIHAPUS",
                                                                        timer: 2000,
                                                                        icon: 'success',
                                                                        timerProgressBar: true,
                                                                        didOpen: () => {
                                                                            Swal.showLoading();
                                                                            const timer = Swal.getPopup().querySelector("b");
                                                                            timerInterval = setInterval(() => {
                                                                                timer.textContent = `${Swal.getTimerLeft()}`;
                                                                            }, 100);
                                                                        },
                                                                        willClose: () => {
                                                                            clearInterval(timerInterval);
                                                                        }
                                                                    }).then((result) => {
                                                                        /* Read more about handling dismissals below */
                                                                        if (result.dismiss === Swal.DismissReason.timer) {
                                                                            window.location.reload(true);
                                                                        }
                                                                        window.location.reload(true);
                                                                    });
                                                                })
                                                                .catch(error => {
                                                                    console.error(error);
                                                                    window.location.reload(true);

                                                                });
                                                        }
                                                    });
                                                }
                                            </script>
                                        </td> --}}
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <h1 class="text-2xl ml-2">Group Lainnya</h1>
            @if ($otherGroups->count() > 0)
                <div class="flex flex-wrap justify-start items-center sm:gap-3 gap-1 ml-2 mb-12">
                    @foreach ($otherGroups as $groups)
                        <div class="xl:w-72 sm:w-60 w-44 mb-6 md:flex-none xl:mb-0 rounded-2xl shadow-soft-xxs">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                                <div class="relative">
                                    <a class="block">
                                        <img src="{{ $groups->image == null ? asset('assets/data/image-preview.png') : asset('storage/' . $groups->image) }}"
                                            alt="img-blur-shadow"
                                            class="xl:w-72 xl:h-72 sm:w-60 sm:h-60 w-44 h-44 border border-b-gray-200 rounded-2xl" />
                                    </a>
                                </div>
                                <div class="flex-auto px-3 pb-2 pt-6">
                                    <h5 class="sm:text-xl text-lg">{{ $groups->name }}</h5>
                                    <div class="flex items-center justify-between">
                                        <button type="button" data-modal-target="{{ $groups->slug }}-modal-detail"
                                            data-modal-toggle="{{ $groups->slug }}-modal-detail"
                                            class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
                                            <span class="sm:inline-block hidden ">Lihat</span> Detail
                                        </button>
                                        <div id="{{ $groups->slug }}-modal-detail"
                                            style="z-index: 999 !important;" tabindex="-1" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center text-start items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3
                                                            class="text-xl font-semibold text-gray-900 dark:text-white flex justify-start items-center gap-2">
                                                            <img src="{{ asset('storage/' . $groups->image) }}"
                                                                alt="groupss" class="w-10 h-10">
                                                            {{ $groups->name }}
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="{{ $groups->slug }}-modal-detail">
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
                                                            <div class="flex-none w-full max-w-full px-3">
                                                                <div
                                                                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                                                    <div class="flex-auto px-0 pt-0 pb-2">
                                                                        <div class="p-0 overflow-x-auto">
                                                                            <table
                                                                                class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                                                                <thead class="align-bottom">
                                                                                    <tr>
                                                                                        <th
                                                                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                                            Users</th>
                                                                                        <th
                                                                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                                            Email</th>
                                                                                        {{-- <th
                                                                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                                            Kelompok</th> --}}
                                                                                        <th
                                                                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                                                            Role</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($groups->users as $user)
                                                                                    <tr>
                                                                                        <td
                                                                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                                                            <div
                                                                                                class="flex px-2 py-1">
                                                                                                <div>
                                                                                                    <img src="{{ $user->image == null ? asset('assets/data/no-img.jpg') : asset('storage/' . $user->image) }}"
                                                                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                                                                        alt="user1" />
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex flex-col justify-center">
                                                                                                    <h6
                                                                                                        class="mb-0 text-sm leading-normal">
                                                                                                        {{ $user->name }}
                                                                                                    </h6>
                                                                                                    <p
                                                                                                        class="mb-0 text-xs leading-tight text-slate-400">
                                                                                                        {{ $user->phone }}
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>

                                                                                        <td
                                                                                            class="p-2 text-start align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                                                            <span
                                                                                                class="text-xs font-semibold leading-tight text-slate-400">{{ $user->email }}</span>
                                                                                        </td>

                                                                                        {{-- <td
                                                                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                                                                    <p
                                                                                                        class="mb-0 text-xs font-semibold leading-tight">
                                                                                                        {{ $user->groups->name }}

                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mb-0 text-xs leading-tight text-slate-400">
                                                                                                        Anggota
                                                                                                    </p>
                                                                                                </td> --}}

                                                                                        <td
                                                                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                                                            <span
                                                                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                                                                                                @if ($user->role_id === 1)
                                                                                                    P.
                                                                                                    Jawab
                                                                                                @elseif($user->role_id === 2)
                                                                                                    Pengurus
                                                                                                @else
                                                                                                    Member
                                                                                                @endif
                                                                                            </span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            @foreach ($groups->users as $user)
                                                <div title="{{ $user->name }}"
                                                    class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30">
                                                    <img class="w-full rounded-circle" alt="Image placeholder"
                                                        src="{{ $user->image == null ? asset('assets/data/no-img.jpg') : asset('storage/' . $user->image) }}" />
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('assets/data/file-not-found.jpg') }}" alt="not-found" class="w-68 ">
                    <h3 class="text-xl">TIDAK ADA DATA GROUP LAINNYA</h3>
                </div>
            @endif

        </div>
    </main>



    <script>
        $(document).ready(function() {
            $('.anggota-select').select2();
        });
    </script>
@endsection
