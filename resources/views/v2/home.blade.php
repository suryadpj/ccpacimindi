@extends('v2.master')

@section('judul')
    Customer Card - Tunas Toyota Cimindi
@endsection

@section('content')
    @if ($modal != '')
        <div
            class="relative flex items-center rounded border border-danger bg-danger-light p-3.5 text-danger before:absolute before:top-1/2 before:-mt-2 before:inline-block before:border-r-8 before:border-t-8 before:border-b-8 before:border-t-transparent before:border-b-transparent before:border-r-inherit ltr:border-r-[64px] ltr:before:right-0 rtl:border-l-[64px] rtl:before:left-0 rtl:before:rotate-180 dark:bg-danger-dark-light">
            <span class="absolute inset-y-0 m-auto h-6 w-6 text-white ltr:-right-11 rtl:-left-11">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6">
                    <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                    <path d="M12 7V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <circle cx="12" cy="16" r="1" fill="currentColor" />
                </svg>
            </span>
            <span class="ltr:pr-2 rtl:pl-2"><strong class="ltr:mr-1 rtl:ml-1">Data yang anda cari tidak ditemukan,</strong> silahkan periksa kembali</span>
            <button type="button" class="hover:opacity-80 ltr:ml-auto rtl:mr-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <br>
    @endif
    <div x-data="knowledge">
        <div
            class="relative rounded-t-md bg-primary-light bg-[url('../images/knowledge/pattern.png')] bg-contain bg-left-top bg-no-repeat px-5 py-10 dark:bg-black md:px-10">
            <div
                class="absolute bottom-1 end-1 hidden text-[#DBE7FF] rtl:rotate-y-180 dark:text-[#1B2E4B] md:block xl:bottom-14 xl:end-10">
                <img src="assetsv2/images/knowledge/find-solution.svg" alt="find-solution"
                    class="w-full object-cover rtl:rotate-y-180 dark:brightness-[2.59] dark:grayscale-[83%]" />
            </div>
            <div class="relative text-center">
                <br>
                <p class="mb-9 text-center text-2xl font-bold dark:text-white md:text-5xl">Tunas Toyota Cimindi</p>
                <p class="mb-9 text-center text-base font-semibold">Customer Card Tools</p>
                <form action="caridata" class="mb-6" autocomplete="off">
                    <div class="relative mx-auto max-w-[580px]">
                        <input type="text" placeholder="Silahkan ketik nomor plat / nomor VIN secara lengkap"
                            class="form-input py-3 ltr:pr-[100px] rtl:pl-[100px]" name="search"
                            @if ($dicari != null) value='{{ $dicari }}' @endif />
                        <button type="submit"
                            class="btn btn-primary absolute top-1 shadow-none ltr:right-1 rtl:left-1">Search</button>
                    </div>
                </form>
                {{-- <div
                                class="flex flex-wrap items-center justify-center gap-2 font-semibold text-[#2196F3] sm:gap-5">
                                <div class="whitespace-nowrap font-medium text-black dark:text-white">Popular topics :
                                </div>
                                <div class="flex items-center justify-center gap-2 sm:gap-5">
                                    <a href="javascript:;" class="duration-300 hover:underline"> Sales</a>
                                    <a href="javascript:;" class="duration-300 hover:underline"> Charts</a>
                                    <a href="javascript:;" class="duration-300 hover:underline"> Finance</a>
                                    <a href="javascript:;" class="duration-300 hover:underline"> Trending</a>
                                </div>
                            </div> --}}
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
