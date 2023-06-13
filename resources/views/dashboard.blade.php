@extends('master-page')

@section('header')

<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
        <!--begin::Toolbar container-->
        <div class="d-flex flex-column flex-row-fluid">
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-center pt-1">
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white fw-bold lh-1">
                        <a href="../../demo30/dist/index.html" class="text-white">
                            <i class="fonticon-home text-white fs-3"></i>
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                        <span class="svg-icon svg-icon-4 svg-icon-white mx-n1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white fw-bold lh-1">Dashboard</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Toolbar wrapper=-->
            <!--begin::Toolbar wrapper=-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                <!--begin::Page title-->
                <div class="page-title d-flex align-items-center me-3">
                    <img alt="Logo" src="assets/media/logos/logo_tunas.png" class="h-60px me-5" />
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">Customer Card Peronalize Assistance
                    <!--begin::Description-->
                    <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4"> Tunas Toyota Cimindi</span>
                    <!--end::Description--></h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Items-->
                <div class="d-flex gap-4 gap-lg-13">
                    <!--begin::Item-->
                    <div class="d-flex flex-column">
                        <!--begin::Number-->
                        <span class="text-white fw-bold fs-3 mb-1">{{ $hitung_pengguna }}</span>
                        <!--end::Number-->
                        <!--begin::Section-->
                        <div class="text-white opacity-50 fw-bold">Total Customer</div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-column">
                        <!--begin::Number-->
                        <span class="text-white fw-bold fs-3 mb-1">{{ $hitung_kendaraan }}</span>
                        <!--end::Number-->
                        <!--begin::Section-->
                        <div class="text-white opacity-50 fw-bold">Today Kendaraan</div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Toolbar wrapper=-->
        </div>
        <!--end::Toolbar container=-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
@endsection

@section('content')

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content">
        <!--begin::Navbar-->
        <div class="row g-5 g-xl-8">
            <div class="col-xl-4">
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-body pt-9 pb-5">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="assets/media/avatars/blank.png" alt="image" />
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Surya Dewantara</a>
                                    <a href="#">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                                                <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-06-08-055059/core/html/src/media/icons/duotune/ecommerce/ecm007.svg-->
                                    <span class="svg-icon svg-icon-4 me-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="currentColor"/>
                                    <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor"/>
                                    <path opacity="0.3" d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z" fill="currentColor"/>
                                    </svg>
                                    </span>
                                    <!--end::Svg Icon-->14 Juni 1994</a>
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Ring 1(0-5KM)</a>
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Jl. Patimura No. 14</a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                            <i class="bi bi-car-front fs-5 text-dark"></i>
                                            &nbsp; <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4" data-kt-countup-sufflix="$">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Total Kendaraan</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-06-08-055059/core/html/src/media/icons/duotune/communication/com013.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-dark me-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
                                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="00001">0</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Cust ID</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-06-08-055059/core/html/src/media/icons/duotune/abstract/abs027.svg-->
                                        <span class="svg-icon svg-icon-3 svg-icon-dark me-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"/>
                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"/>
                                        </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                            <div class="fs-2 fw-bold">Pengusaha</div>
                                        </div>
                                        <!--end::Number-->
                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-400">Pekerjaan</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
            </div>
        </div>
    </div>
        <div class="col-xl-8">
                <!--begin::List Widget 1-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">Data Kendaraan</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_63d0ebe2d3265">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_63d0ebe2d3265" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>VIN</th>
                                        <th>NOPOL</th>
                                        <th>TYPE</th>
                                        <th>TAHUN</th>
                                        <th>NEXT SERV</th>
                                        <th>POTENSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MHKN9999</td>
                                        <td>B123</td>
                                        <td>R</td>
                                        <td>2023</td>
                                        <td>Apr</td>
                                        <td>70K</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 1-->
            </div>
        </div>
        <!--begin::Row-->
        <div class="row gx-5 gx-xl-10">
            <!--begin::Col-->
            <div class="col-xxl-4 mb-5 mb-xl-10">
                <!--begin::Chart widget 27-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header py-7">
                        <!--begin::Statistics-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">DATA UNIT 4</span>
                            </h3>
                            <!--end::Heading-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-1">
                        <span class="fs-6 fw-bold text-dark">INFORMASI PENJUALAN</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4 table-bordered">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>TANGGAL FAKTUR</th>
                                        <th>TANGGAL DEC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MHKN9999</td>
                                        <td>B123</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4 table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">LEASING</td>
                                        <td>PT. ABC</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">ASURANSI</td>
                                        <td>PT. ABC</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">DO ASAL</td>
                                        <td>SAME OUTLET</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="fs-6 fw-bold text-dark">INFORMASI KENDARAAN</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>NOMOR VIN</th>
                                        <th>NOPOL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MHKN9999</td>
                                        <td>B123</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>TYPE</th>
                                        <th>PROGRAM SERVCICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>RUSH</td>
                                        <td>TCARE</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="fs-6 fw-bold text-dark">INFORMASI SERVICE</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>TANGGAL SERVICE TERAKHIR</th>
                                        <th>SA TERAKHIR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>30/03/23</td>
                                        <td>EMPAR PARIPUDIN</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>JOB SERVICE</th>
                                        <th>LOKASI SERVCICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10K</td>
                                        <td>CIMINDI</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">DESKRIPSI</td>
                                        <td>SBE 10K</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">KILOMETER</td>
                                        <td>8.233</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">KELURAHAN</td>
                                        <td>TARIKAN BERAT</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart widget 27-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-4 mb-5 mb-xl-10">
                <!--begin::Chart widget 28-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header py-7">
                        <!--begin::Statistics-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Title-->
                                <span class="card-label fw-bold text-dark">MRA CARD</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-1">
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>SERVICE BERKALA</th>
                                        <th>JATUH TEMPO</th>
                                        <th>TANGGAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SERVICE 1</td>
                                        <td>OKTOBER</td>
                                        <td>30 OKTOBER 2023</td>
                                    </tr>
                                    <tr>
                                        <td>SERVICE 1</td>
                                        <td>OKTOBER</td>
                                        <td>30 OKTOBER 2023</td>
                                    </tr>
                                    <tr>
                                        <td>SERVICE 1</td>
                                        <td>OKTOBER</td>
                                        <td>30 OKTOBER 2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="fs-6 fw-bold text-dark">ATTACK LIST</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>POTENSI SERVICE</th>
                                        <th>TYPE CUST</th>
                                        <th>SEQUENCES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20K</td>
                                        <td>HOT</td>
                                        <td>PUNCTUAL</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>HASIL FU TERAKHIR</th>
                                        <th>HASIL FU SAAT INI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AKAN MENGHUBUNGI BENGKEL</td>
                                        <td>BOOKING</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="fs-6 fw-bold text-dark">SARAN FOLLOW UP (NOTE)</span>
                        <div class="table-responsive">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart widget 28-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-4 mb-5 mb-xl-10">
                <!--begin::List widget 9-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header py-7">
                        <!--begin::Statistics-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Title-->
                                <span class="card-label fw-bold text-dark">SA CARD</span>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body card-body d-flex justify-content-between flex-column pt-3">
                        <div class="d-flex flex-stack card-p flex-grow-1">
                            <div class="d-flex flex-column text-end">
                                <span class="text-dark fw-bold fs-2">TOTAL : Rp. 1.456.000</span>
                            </div>
                        </div>
                        <span class="fs-6 fw-bold text-dark">REVENUE/UNIT</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">JASA</td>
                                        <td>RP. 450.000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">PART</td>
                                        <td>RP. 421.000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">MAT./BAHAN</td>
                                        <td>RP. 185.000</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">OLI</td>
                                        <td>RP. 400.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="fs-6 fw-bold text-dark">SARAN UPSELLING</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">1.</td>
                                        <td>UP GRADE TMO SW</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">2.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">3.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">4.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="fs-6 fw-bold text-dark">SARAN CROSS-SELLING</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">1.</td>
                                        <td>UP GRADE TMO SW</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">2.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">3.</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-muted bg-light">4.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="fs-6 fw-bold text-dark">CATATAN SERVICE TERAKHIR LAINNYA - CR7</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted bg-light">
                                        <th>NO.PKB</th>
                                        <th>TANGGAL</th>
                                        <th>SARAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>108PKN-1</td>
                                        <td>30/03/2023</td>
                                        <td>STER GETAR - SPOORING</td>
                                    </tr>
                                    <tr>
                                        <td>108PKN-1</td>
                                        <td>30/03/2023</td>
                                        <td>BEMPER BARET - BP</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List widget 9-->
            </div>
            <!--end::Col-->
            <!--new-->
            <!--begin::Col-->
            <div class="col-xxl-12 mb-5 mb-xl-10">
                <!--begin::Chart widget 27-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header py-7">
                        <!--begin::Statistics-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">CRC CARD</span>
                            </h3>
                            <!--end::Heading-->
                        </div>
                        <!--end::Statistics-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-1">
                        <span class="fs-6 fw-bold text-dark">HASIL VOC TERAKHIR</span>
                        <div class="table-responsive">
                            <table class="table align-middle gs-0 gy-4 table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold text-dark">PELAYANAN</td>
                                        <td>: PUAS</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">MAKANAN FAVORIT</td>
                                        <td>: BAKSO</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">MINUMAN FAVORIT</td>
                                        <td>: KOPI SUSU</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">INTEREST</td>
                                        <td>: MAIN BOLA, MUSIK, MEMANCING</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">SENTIMEN</td>
                                        <td>: POSITIF</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-dark">BERENCANA BELI TOYOTA (3 BULAN KEDEPAN)</td>
                                        <td>: TIDAK</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart widget 27-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
@endsection

@section('judul')
    CCPA - Dashboard
@endsection
