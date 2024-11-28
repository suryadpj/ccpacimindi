@extends('v2.master')

@section('judul')
    Import DEC - Tunas Toyota Cimindi
@endsection

@section('judul-header')
Import DEC
@endsection

@section('content')
    <div class="panel">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <div class="px-5">
                <div class="mb-5 flex items-center gap-2">
                    <div x-data="modal" class="mb-5">
                        <div class="flex items-center justify-center">
                            <button type="button" class="btn btn-secondary" @click="toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-5 w-5">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Update data</button>
                        </div>
                        <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60" :class="open && '!block'">
                            <div class="flex min-h-screen items-start justify-center px-4">
                                <div x-show="open" x-transition x-transition.duration.300
                                    class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 p-0">
                                    <form method="post" id="sample_form2" class="form-horizontal"
                                        enctype="multipart/form-data">
                                        <span id="form_result"></span>
                                        @csrf
                                        <div
                                            class="flex items-center justify-between bg-[#fbfbfb] px-5 py-3 dark:bg-[#121c2c]">
                                            <div class="text-lg font-bold">Update Data DEC</div>
                                            <button type="button" class="text-white-dark hover:text-dark" @click="toggle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-6 w-6">
                                                    <line x1="18" y1="6" x2="6" y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18" y2="18">
                                                    </line>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="p-5">
                                            <div class="text-base font-medium text-[#1f2937] dark:text-white-dark/70">
                                                <div>
                                                    <label for="ctnFile">Upload File : (contoh file <a
                                                            href="#">download</a>)</label>
                                                    <input id="ctnFile" type="file" name="file"
                                                        class="rtl:file-ml-5 form-input p-0 file:border-0 file:bg-primary/90 file:py-2 file:px-4 file:font-semibold file:text-white file:hover:bg-primary ltr:file:mr-5"
                                                        required />
                                                </div>
                                            </div>
                                            <div class="mt-8 flex items-center justify-end">
                                                <button type="button" class="btn btn-outline-danger"
                                                    @click="toggle">Discard</button>
                                                <button type="submit" id="action_button" class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                                    >Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="invoice-table">
            <table id="myTable" class="whitespace-nowrap"></table>
            <table id="tbl_list" class="table-auto border-collapse border border-slate-300" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Delivery Date</th>
                        <th>Potensial Cust</th>
                        <th>City</th>
                        <th>Birth Date</th>
                        <th>Kendaraan</th>
                        <th>Method Payment</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('js-bottom')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var oTable = $('#tbl_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url()->current() }}',
                columns: [
                    {
                        data: 'delivery_date',
                        name: 'delivery_date'
                    },
                    {
                        data: 'potensial_cust',
                        name: 'potensial_cust'
                    },
                    {
                        data: 'city',
                        name: 'city'
                    },
                    {
                        data: 'birth_date',
                        name: 'birth_date'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'method_payment',
                        name: 'method_payment'
                    },
                ]
            });

            $('#sample_form2').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "{{ route('importdec.store') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    beforeSend: function() {
                        $('#action_button').attr(
                            'disabled', true);
                    },
                    success: function(data) {
                        var html = '';
                        if (data.errors) {
                            html = '';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += data.errors[count] + ', ';
                            }
                            swal.fire({
                                icon: 'warning',
                                title: 'Data gagal disimpan',
                                text: html
                            })

                            $('#action_button').html('Save').attr('disabled', false);
                        }
                        if (data.duplicate) {
                            swal.fire({
                                icon: 'warning',
                                title: 'Data gagal disimpan',
                                text: html
                            })

                            $('#action_button').html('Save').attr('disabled', false);
                        }
                        if (data.success) {
                            swal.fire({
                                icon: 'success',
                                title: 'Data berhasil disimpan',
                                text: data.success
                            })
                            window.location.href = "importdec";
                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ': ' + xhr.statusText
                        swal.fire({
                            icon: 'error',
                            title: 'Data gagal disimpan',
                            text: errorMessage
                        })
                        console.log(xhr)

                        $('#action_button').html('Save changes').attr('disabled', false);
                    }
                })
            });
        });
    </script>
@endpush
