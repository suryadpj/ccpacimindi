@extends('v2.master')

@section('judul')
    Customer Card - Tunas Toyota Cimindi
@endsection

@section('content')
    <div class="panel">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div class="panel h-full w-full">
                <div class="relative max-w-[580px]">
                    <form action="caridata" class="mb-6" autocomplete="off">
                        <input type="text" placeholder="Input nomor plat / nomor VIN"
                            class="form-input py-6 ltr:pr-[100px] rtl:pl-[100px]" name="search"
                            @if ($dicari != null) value='{{ $dicari }}' @endif />
                        <button type="submit"
                            class="btn btn-primary py-5 absolute top-1 shadow-none ltr:right-1 rtl:left-1">Search</button>
                    </form>
                </div>
            </div>
            <div class="panel h-full w-full">
                <div class="table-responsive">
                    <table class="table-hover">
                        <thead>
                            <tr>
                                <th>Vin/no rangka</th>
                                <th>Nopol</th>
                                <th>Initial Status</th>
                                <th class="text-center">Current Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $find->equipment_no ?? 'Not Register' }}</td>
                                <td>{{ $find->police_reg_no }}</td>
                                <td> PUNCTUAL</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5" x-data="{ tab: 'home' }">
        <div>
            <ul class="mt-3 flex flex-wrap border-b border-white-light dark:border-[#191e3a]">
                <li>
                    <a href="javascript:;"
                        class="-mb-[1px] flex items-center border border-transparent p-3.5 py-2 hover:text-danger dark:border-[#191e3a]"
                        :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': tab==='home' }"
                        @click="tab = 'home'" @click="tab = 'home'">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                            <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                            <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4"
                                stroke="currentColor" stroke-width="1.5" />
                        </svg>
                        Profil
                    </a>
                </li>
                <li>
                    <a href="javascript:;"
                        class="-mb-[1px] flex items-center border border-transparent p-3.5 py-2 hover:text-danger"
                        :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': tab==='profile' }"
                        @click="tab = 'profile'">
                        <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5"
                                d="M12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22Z"
                                fill="currentColor" />
                            <path
                                d="M18.75 8C18.75 8.41421 18.4142 8.75 18 8.75H6C5.58579 8.75 5.25 8.41421 5.25 8C5.25 7.58579 5.58579 7.25 6 7.25H18C18.4142 7.25 18.75 7.58579 18.75 8Z"
                                fill="currentColor" />
                            <path
                                d="M18.75 12C18.75 12.4142 18.4142 12.75 18 12.75H6C5.58579 12.75 5.25 12.4142 5.25 12C5.25 11.5858 5.58579 11.25 6 11.25H18C18.4142 11.25 18.75 11.5858 18.75 12Z"
                                fill="currentColor" />
                            <path
                                d="M18.75 16C18.75 16.4142 18.4142 16.75 18 16.75H6C5.58579 16.75 5.25 16.4142 5.25 16C5.25 15.5858 5.58579 15.25 6 15.25H18C18.4142 15.25 18.75 15.5858 18.75 16Z"
                                fill="currentColor" />
                        </svg>
                        History Service
                    </a>
                </li>
                <li>
                    <a href="javascript:;"
                        class="-mb-[1px] flex items-center border border-transparent p-3.5 py-2 hover:text-danger"
                        :class="{ '!border-white-light !border-b-white text-danger dark:!border-[#191e3a] dark:!border-b-black': tab==='contact' }"
                        @click="tab = 'contact'">
                        <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V10C2 6.22876 2 4.34315 3.17157 3.17157C4.34315 2 6.23869 2 10.0298 2C10.6358 2 11.1214 2 11.53 2.01666C11.5166 2.09659 11.5095 2.17813 11.5092 2.26057L11.5 5.09497C11.4999 6.19207 11.4998 7.16164 11.6049 7.94316C11.7188 8.79028 11.9803 9.63726 12.6716 10.3285C13.3628 11.0198 14.2098 11.2813 15.0569 11.3952C15.8385 11.5003 16.808 11.5002 17.9051 11.5001L18 11.5001H21.9574C22 12.0344 22 12.6901 22 13.5629V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22Z"
                                fill="currentColor" />
                            <path
                                d="M6 13.75C5.58579 13.75 5.25 14.0858 5.25 14.5C5.25 14.9142 5.58579 15.25 6 15.25H14C14.4142 15.25 14.75 14.9142 14.75 14.5C14.75 14.0858 14.4142 13.75 14 13.75H6Z"
                                fill="currentColor" />
                            <path
                                d="M6 17.25C5.58579 17.25 5.25 17.5858 5.25 18C5.25 18.4142 5.58579 18.75 6 18.75H11.5C11.9142 18.75 12.25 18.4142 12.25 18C12.25 17.5858 11.9142 17.25 11.5 17.25H6Z"
                                fill="currentColor" />
                            <path
                                d="M11.5092 2.2601L11.5 5.0945C11.4999 6.1916 11.4998 7.16117 11.6049 7.94269C11.7188 8.78981 11.9803 9.6368 12.6716 10.3281C13.3629 11.0193 14.2098 11.2808 15.057 11.3947C15.8385 11.4998 16.808 11.4997 17.9051 11.4996L21.9574 11.4996C21.9698 11.6552 21.9786 11.821 21.9848 11.9995H22C22 11.732 22 11.5983 21.9901 11.4408C21.9335 10.5463 21.5617 9.52125 21.0315 8.79853C20.9382 8.6713 20.8743 8.59493 20.7467 8.44218C19.9542 7.49359 18.911 6.31193 18 5.49953C17.1892 4.77645 16.0787 3.98536 15.1101 3.3385C14.2781 2.78275 13.862 2.50487 13.2915 2.29834C13.1403 2.24359 12.9408 2.18311 12.7846 2.14466C12.4006 2.05013 12.0268 2.01725 11.5 2.00586L11.5092 2.2601Z"
                                fill="currentColor" />
                        </svg>
                        Data Kendaraan Lainnya Customer
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex-1 border border-t-0 border-white-light p-4 text-sm dark:border-[#191e3a]">
            <template x-if="tab === 'home'">
                <div class="active">
                    <div class="table-responsive">
                        <table class="table-hover">
                            <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>Nama Customer</th>
                                    <th>Total Car</th>
                                    <th>Model</th>
                                    <th>Cust Type</th>
                                    <th>Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $find->cust_id ?? 'Not Register' }}</td>
                                    <td>
                                        @if ($find->customer_name)
                                            {{ $find->customer_name }}
                                        @elseif($pkbfunneling->customer_name)
                                            {{ $pkbfunneling->customer_name }}
                                        @elseif($dec->potensial_cust)
                                            {{ $dec->potensial_cust }}
                                        @else
                                            Not Register
                                        @endif
                                    </td>
                                    <td>{{ $jumlah }}</td>
                                    <td>{{ $pkbfunneling->tipe_kendaraan ?? '-' }}</td>
                                    <td>{{ $pkbfunneling->fleet_retail ?? '-' }}</td>
                                    <td>{{ $find->class }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table class="table-hover">
                            <thead>
                                <tr>
                                    <th>Area</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Kecamatan</th>
                                    <th>Pembelian</th>
                                    <th>Program</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RING 1</td>
                                    <td>
                                        @if ($find->customer_address)
                                            {{ $find->customer_address }}
                                        @elseif($pkbfunneling->customer_address)
                                            {{ $pkbfunneling->customer_address }}
                                        @elseif($dec->address)
                                            {{ $dec->address }}
                                        @else
                                            Not Register
                                        @endif
                                    </td>
                                    <td>
                                        @isset($str->a)
                                            @if (Str::of($dec->police_reg_no)->limit(1) == 'B')
                                                BANDUNG
                                            @else
                                                LUAR KOTA
                                            @endif
                                        @endisset
                                    </td>
                                    <td>{{ $dec->owner_district ?? 'Not Register' }}</td>
                                    <td>{{ $pkbfunneling->pembelian_asal ?? 'Not Register' }}</td>
                                    <td>{{ $gbsb->unit ?? 'Internal Program' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="mb-6 grid gap-6 sm:grid-cols-2 xl:grid-cols-2">
                        <div class="panel h-full sm:col-span-2 xl:col-span-1">
                            <div class="table-responsive">
                                <table class="table-hover">
                                    <tbody>
                                        @if ($find->contact_person)
                                            <tr>
                                                <td>+{{ $find->contact_person }}</td>
                                                <td class="justify-around flex">
                                                    <a class="btn btn-primary" href="tel:+{{ $find->contact_person }}"
                                                        target="_blank">
                                                        <i class="bi bi-telephone"></i>&nbsp; Telepon
                                                    </a>
                                                    &nbsp;
                                                    <a href="https://wa.me/62{{ $find->contact_person }}" target="_blank">
                                                        <button class="btn btn-success">
                                                            <i class="bi bi-whatsapp"></i>&nbsp; Whatsapp
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                        @if ($find->decision_maker_phone)
                                            <tr>
                                                <td>{{ $find->decision_maker_phone }}</td>
                                                <td class="justify-around flex">
                                                    <a href="tel:+{{ $find->decision_maker_phone }}" target="_blank">
                                                        <button class="btn btn-primary w-full">
                                                            <i class="bi bi-telephone"></i>&nbsp; Telepon
                                                        </button>
                                                    </a>
                                                    &nbsp;
                                                    <a href="https://wa.me/62{{ $find->decision_maker_phone }}"
                                                        target="_blank">
                                                        <button class="btn btn-success">
                                                            <i class="bi bi-whatsapp"></i>&nbsp; Whatsapp
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                        @if ($find->contact_person_phone)
                                            <tr>
                                                <td>{{ $find->contact_person_phone }}</td>
                                                <td class="justify-around flex">
                                                    <a href="tel:+{{ $find->contact_person_phone }}" target="_blank">
                                                        <button class="btn btn-primary w-full">
                                                            <i class="bi bi-telephone"></i>&nbsp; Telepon
                                                        </button>
                                                    </a>
                                                    &nbsp;
                                                    <a href="https://wa.me/62{{ $find->contact_person_phone }}"
                                                        target="_blank">
                                                        <button class="btn btn-success">
                                                            <i class="bi bi-whatsapp"></i>&nbsp; Whatsapp
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <b class="font-bold">TRANSACTION & INSURANCE</b>
                            <br>
                            <div class="table-responsive">
                                <table class="table-hover">
                                    <tbody>
                                        <tr>
                                            <td class="font-semibold">Method payment</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Nama Leasing</td>
                                            <td>{{ $dec->financing_company ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Nama Asuransi</td>
                                            <td>{{ $dec->insurance ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Jenis Asuransi</td>
                                            <td>{{ $dec->insurance_type ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">All Risk Ex. Date</td>
                                            <td>
                                                @if (isset($dec->delivery_date))
                                                    {{ $dec->delivery_date->addMonths(1) }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Insurance Ex. Date</td>
                                            <td>
                                                @if (isset($dec->delivery_date))
                                                    {{ $dec->delivery_date->addDays($dec->tlo_period) }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Insurance Status</td>
                                            <td>
                                                @if (isset($dec->insurance_type) && $dec->insurance_type == 'combination')
                                                    @if (sset($dec->delivery_date) && $dec->delivery_date->addMonths(1) < date('Y-m-d'))
                                                        {{ $insurance_status = 'expired' }}
                                                    @else
                                                        {{ $insurance_status = 'aktif' }}
                                                    @endif
                                                @elseif (isset($dec->insurance_type))
                                                    @if (isset($dec->delivery_date) && $dec->delivery_date->addDays($dec->tlo_period) < date('Y-m-d'))
                                                        {{ $insurance_status = 'expired' }}
                                                    @else
                                                        {{ $insurance_status = 'akti' }}
                                                    @endif
                                                @else
                                                    {{ $insurance_status = '-' }}
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel h-full sm:col-span-2 xl:col-span-1">
                            <form action="update_interest" method="post">
                                <div class="table-responsive">
                                    <table class="table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="font-semibold">Tipe Customer</td>
                                                <td>: {{ $pkbfunneling->fleet_retail ?? '' }}</td>
                                                <td class="font-semibold">Car Model Name</td>
                                                <td>: {{ $pkbfunneling->tipe_kendaraan ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Decision Maker</td>
                                                <td>: {{ $pkbfunneling->decision_maker ?? $find->decision_maker }}</td>
                                                <td class="font-semibold">Code/Color</td>
                                                <td>{{ $dec->description_color ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Decision Phone</td>
                                                <td>{{ $find->decision_maker_phone }}</td>
                                                <td class="font-semibold">Delivery Date</td>
                                                <td>{{ $dec->delivery_date ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Contact Person</td>
                                                <td>
                                                    @if ($find->customer_name)
                                                        {{ $find->customer_name }}
                                                    @elseif($pkbfunneling->customer_name)
                                                        {{ $pkbfunneling->customer_name }}
                                                    @elseif($dec->potensial_cust)
                                                        {{ $dec->potensial_cust }}
                                                    @endif
                                                </td>
                                                <td class="font-semibold">Production Year</td>
                                                <td>{{ $find->tahun_produksi ?? 'Not Register' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Contact Phone</td>
                                                <td>{{ $find->contact_person_phone }}</td>
                                                <td class="font-semibold">Vehicle Age</td>
                                                <td>{{ $usia = date('Y') - $find->tahun_produksi }} tahun</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">NO. KTP/SIM</td>
                                                <td>{{ $dec->identification_number ?? '-' }}</td>
                                                <td class="font-semibold">Salesman Name</td>
                                                <td>{{ $dec->sales ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Birthday Date</td>
                                                <td>{{ $dec->birth_date ?? '-' }}</td>
                                                <td class="font-semibold">SPV Sales Name</td>
                                                <td>{{ $dec->parent_employee ?? '-' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Gender / JK</td>
                                                <td>{{ $dec->gender ?? '-' }}</td>
                                                <td class="font-semibold">T-Intouch Status</td>
                                                <td>
                                                    @isset($tintouch->activation_date)
                                                        {{ $tintouch->activation_date ? 'Registered' : 'Without T-Intouch' }}
                                                    @endisset
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Customer JOB</td>
                                                <td>{{ $dec->job_title ?? '' }}</td>
                                                <td class="font-semibold">T-Intouch Reg. Date</td>
                                                <td>{{ $tintouch->activation_date ?? '-' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Favorite Drink</td>
                                                <td><input type="text" placeholder="Some Text..." class="form-input"
                                                        value="{{ $voc->minuman ?? '-' }}" required /></td>
                                                <td class="font-semibold">Program Service</td>
                                                <td>{{ $gbsb->unit ?? '-' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Favorite Food</td>
                                                <td><input type="text" placeholder="Some Text..." class="form-input"
                                                        value="{{ $voc->makanan ?? '-' }}" required /></td>
                                                <td class="font-semibold">Extended Service</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="font-semibold">Hobby</td>
                                                <td><input type="text" placeholder="Some Text..." class="form-input"
                                                        value="{{ $voc->interest ?? '-' }}" required /></td>
                                                <td class="font-semibold">Extended Warranty</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <button type="submit" class="btn btn-primary mt-6">Update data
                                                        interest</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mb-6 grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                        <div class="panel h-full sm:col-span-2 xl:col-span-1">
                            <div class="table-responsive">
                                <table class="table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="!text-center"><b>POTENCY SELLING</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-semibold">Potency Insurance</td>
                                            <td>
                                                @if ($insurance_status == 'expired')
                                                    Perpanjang Asuransi
                                                @else
                                                    Tawarkan Asuransi
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Test Drive & Trade IN</td>
                                            <td>
                                                @if ($usia > 2.5 && $usia < 4.9)
                                                    Tawarkan Tes Drive
                                                @else
                                                    Tawarkan Tes Drive dan Trade IN
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Extended STNK</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel h-full sm:col-span-2 xl:col-span-1">
                            <div class="table-responsive">
                                <table class="table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="!text-center"><b>POTENCY UPSELLING</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-semibold">Next Service</td>
                                            <td>100K</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Engine Oil</td>
                                            <td>TMO 10w-40</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Potency to upselling</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel h-full sm:col-span-2 xl:col-span-1">
                            <div class="table-responsive">
                                <table class="table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="!text-center"><b>PROMO SERVICE</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th colspan="2" class="font-semibold">Program Promo Service</th>
                                        </tr>
                                        <tr>
                                            <td colspan="2" rowspan="2" class="!text-center">(Internal) Free Oli 1
                                                Liter + Disk Jasa 30%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6 grid gap-6 xl:grid-cols-3">
                        <div class="panel h-full sm:col-span-1 xl:col-span-1">
                            <div class="table-responsive">
                                <table class="table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="!text-center"><b>FREE SERVICE</b></th>
                                        </tr>
                                        <tr class="!text-center">
                                            <td class="font-semibold"><b>KM Service</b></td>
                                            <td><b>Expired Date</b></td>
                                            <td><b>Service Date</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="!text-center">1K</td>
                                            <td class="!text-center"></td>
                                            <td class="!text-center">19 Apr 2021</td>
                                        </tr>
                                        <tr>
                                            <td class="!text-center">10K</td>
                                            <td class="!text-center"></td>
                                            <td class="!text-center">19 Apr 2021</td>
                                        </tr>
                                        <tr>
                                            <td class="!text-center">20K</td>
                                            <td class="!text-center"></td>
                                            <td class="!text-center">19 Apr 2021</td>
                                        </tr>
                                        <tr>
                                            <td class="!text-center">30K</td>
                                            <td class="!text-center"></td>
                                            <td class="!text-center">19 Apr 2021</td>
                                        </tr>
                                        <tr>
                                            <td class="!text-center">40K</td>
                                            <td class="!text-center"></td>
                                            <td class="!text-center">19 Apr 2021</td>
                                        </tr>
                                        <tr>
                                            <td class="!text-center">50K</td>
                                            <td class="!text-center"></td>
                                            <td class="!text-center">19 Apr 2021</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel h-full xl:col-span-2">
                            <div class="table-responsive">
                                <table class="table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="!text-center"><b>SEQUENCE SERVICE</b></th>
                                            <th colspan="2" class="!text-center"><b>LAST REVENUE SERVICE</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="font-semibold">Last Service Date</td>
                                            <td>31 Jul 2023</td>
                                            <td class="font-semibold">PKB Number</td>
                                            <td>107PKB2307-1139</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Last 1st SBE Date</td>
                                            <td>4 Okt 2021</td>
                                            <td class="font-semibold">Revenue Jasa</td>
                                            <td>Rp 483.000</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Last 2nd SBE Date</td>
                                            <td>6 Des 2021</td>
                                            <td class="font-semibold">Revenue Part</td>
                                            <td>Rp 327.929</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">SBE Sequence Svc</td>
                                            <td>-2,10</td>
                                            <td class="font-semibold">Revenue Oil</td>
                                            <td>Rp 558.109</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Sequnce Service</td>
                                            <td>7,1</td>
                                            <td class="font-semibold">Revenue Mat</td>
                                            <td>Rp 75.182</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Range Last Service</td>
                                            <td>10,20</td>
                                            <td class="font-semibold">Total Revenue</td>
                                            <td>Rp 1.788.722</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">Last Service - today</td>
                                            <td>10,20</td>
                                            <td class="font-semibold"></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
            <template x-if="tab === 'profile'">
                <div class="table-responsive">
                    <table class="table-hover">
                        <thead>
                            <tr>
                                <th class="!text-center"><b>Job Category</b></th>
                                <th class="!text-center"><b>Job Type</b></th>
                                <th class="!text-center"><b>Service Date</b></th>
                                <th class="!text-center"><b>Service Description</b></th>
                                <th class="!text-center"><b>KM</b></th>
                                <th class="!text-center"><b>Service Advisor</b></th>
                                <th class="!text-center"><b>Mechanic</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($pkbfunnelingrec))
                                @foreach ($pkbfunnelingrec as $a)
                                    <tr>
                                        <td class="!text-center">{{ $a->service_category }}</td>
                                        <td class="!text-center">{{ $a->lookup_job }}</td>
                                        <td class="!text-center">{{ $a->pkb_Date }}</td>
                                        <td class="!text-center">{{ $a->operation_desc }}</td>
                                        <td class="!text-center">{{ $a->km }} KM</td>
                                        <td class="!text-center">{{ $a->sa }}</td>
                                        <td class="!text-center">{{ $a->mekanik }}</td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td class="!text-center">-</td>
                                <td class="!text-center">-</td>
                                <td class="!text-center">-</td>
                                <td class="!text-center">-</td>
                                <td class="!text-center">-</td>
                                <td class="!text-center">-</td>
                                <td class="!text-center">-</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </template>
            <template x-if="tab === 'contact'">
                <div>
                    <p>
                        <table class="table-hover">
                            <thead>
                                <tr>
                                    <th class="!text-center"><b>No</b></th>
                                    <th class="!text-center"><b>No Rangka</b></th>
                                    <th class="!text-center"><b>Nopol</b></th>
                                    <th class="!text-center"><b>Tahun Produksi</b></th>
                                    <th class="!text-center"><b>Type Kendaraan</b></th>
                                    <th class="!text-center"><b>Program Service</b></th>
                                    <th class="!text-center"><b>Last Service Date</b></th>
                                    <th class="!text-center"><b>Last Service Job</b></th>
                                    <th class="!text-center"><b>Next Service Job</b></th>
                                    <th class="!text-center"><b>Other information</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($pkbfunnelingrec))
                                    @foreach ($pkbfunnelingrec as $a)
                                        <tr>
                                            <td class="!text-center">{{ $a->service_category }}</td>
                                            <td class="!text-center">{{ $a->lookup_job }}</td>
                                            <td class="!text-center">{{ $a->pkb_Date }}</td>
                                            <td class="!text-center">{{ $a->operation_desc }}</td>
                                            <td class="!text-center">{{ $a->km }} KM</td>
                                            <td class="!text-center">{{ $a->sa }}</td>
                                            <td class="!text-center">{{ $a->mekanik }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                    <td class="!text-center">-</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </p>
                </div>
            </template>
        </div>
    </div>
@endsection
