@extends('layouts.app-plain')

@section('title', 'Detail Ticket - Tactick')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('partials.breadcrumb')
                </div>
                <div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Informasi Data Diri</h4>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nik" placeholder="3578xxxxxxxx"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nomor_hp" placeholder="62xxx-xxxx-xxxx"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="nama@gmail.com"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="email" placeholder="mm/dd/yyyy"
                                        value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-5 d-flex align-items-md-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="male"
                                            value="male">
                                        <label class="form-check-label" for="male">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="female"
                                            value="female">
                                        <label class="form-check-label" for="female">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Informasi Tiket</h4>
                            <div class="row mb-3">
                                <label for="ticket_type" class="col-sm-2 col-form-label">Tempat Duduk</label>
                                <div class="col-sm-4">
                                    <select class="form-select" id="ticket_type">
                                        <option value="tribun utara">Tribun Utara - Rp25000;</option>
                                        <option value="tribun selatan">Tribun Selatan - Rp25000;</option>
                                        <option value="tribun timur">Tribun Timur - Rp25000;</option>
                                        <option value="tribun barat">Tribun Barat - Rp25000;</option>
                                    </select>
                                </div>
                                <label for="ticket_quantity" class="col-sm-2 col-form-label">Jumlah Tiket</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <button class="btn btn-primary btn-sm" id="minus-btn"><i
                                                class="fa fa-minus"></i></button>
                                        <input type="number" id="ticket_quantity"
                                            class="form-control form-control-sm text-center" min="1" max="2"
                                            value="1" />
                                        <button class="btn btn-primary btn-sm" id="plus-btn"><i
                                                class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const minusBtn = document.getElementById('minus-btn');
                                    const plusBtn = document.getElementById('plus-btn');
                                    const ticketQuantity = document.getElementById('ticket_quantity');
                                    const detailTiket2 = document.getElementById('detail-tiket-2-card')

                                    function toggleDetailTiket2() {
                                        if (ticketQuantity.value == '2') {
                                            detailTiket2.style.display = 'block';
                                        } else {
                                            detailTiket2.style.display = 'none';
                                        }
                                    }

                                    minusBtn.addEventListener('click', function() {
                                        let currentValue = parseInt(ticketQuantity.value);
                                        if (currentValue > 1) {
                                            ticketQuantity.value = currentValue - 1;
                                            toggleDetailTiket2();
                                        }
                                    });

                                    plusBtn.addEventListener('click', function() {
                                        let currentValue = parseInt(ticketQuantity.value);
                                        if (currentValue < 2) {
                                            ticketQuantity.value = currentValue + 1;
                                            toggleDetailTiket2();
                                        }
                                    });

                                    // Inital check
                                    toggleDetailTiket2();
                                });
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail Tiket 1</h4>
                                    <div class="row mb-3">
                                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nik"
                                                placeholder="3578xxxxxxxx" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama"
                                                placeholder="Nama Lengkap" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nomor_hp" class="col-sm-2 col-form-label">No. Hp</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nomor_hp"
                                                placeholder="62xxx-xxxx-xxxx" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="nama@gmail.com" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="tanggallahir"
                                                placeholder="mm/dd/yyyy" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="male" value="male">
                                                <label class="form-check-label" for="male">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="female" value="female">
                                                <label class="form-check-label" for="female">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" id="detail-tiket-2-card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail Tiket 2</h4>
                                    <div class="row mb-3">
                                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nik"
                                                placeholder="3578xxxxxxxx" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nama"
                                                placeholder="Nama Lengkap" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nomor_hp" class="col-sm-2 col-form-label">No. Hp</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nomor_hp"
                                                placeholder="62xxx-xxxx-xxxx" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="nama@gmail.com" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="tanggallahir"
                                                placeholder="mm/dd/yyyy" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="male" value="male">
                                                <label class="form-check-label" for="male">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="female" value="female">
                                                <label class="form-check-label" for="female">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Pembayaran</h4>
                            <div class="col-sm-6 text-start">
                                <h2>Rp 100.000</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <a href="{{ route('payment-method') }}" class="btn btn-primary w-100">Bayar Sekarang</a>
                        </div>
                    </div>
                    {{-- <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informasi Tempat Duduk</h4>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <div class="form-check d-block">
                                    <button type="button" class="btn btn-outline-primary w-75" onclick="document.getElementById('tribunUtara').click();">
                                        <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                        Tribun Utara<br>
                                        Rp 25.000/Tiket
                                    </button>
                                </div>
                                <div class="form-check d-block">
                                    <button type="button" class="btn btn-outline-primary w-75" onclick="document.getElementById('tribunUtara').click();">
                                        <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                        Tribun Timur<br>
                                        Rp 50.000/Tiket
                                    </button>
                                </div>
                                <div class="form-check d-block">
                                    <button type="button" class="btn btn-outline-primary w-75" onclick="document.getElementById('tribunUtara').click();">
                                        <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                        Tribun Selatan<br>
                                        Rp 25.000/Tiket
                                    </button>
                                </div>
                                <div class="form-check d-block">
                                    <button type="button" class="btn btn-outline-primary w-75" onclick="document.getElementById('tribunUtara').click();">
                                        <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                        Tribun Barat<br>
                                        Rp 100.000/Tiket
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                    {{-- <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pilih Tiket</h4>
                        <div class="row mb-0">
                            <div class="col-sm-4">Jumlah Tiket</div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <button class="btn btn-primary btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                                    <input type="number" id="qtyInput" class="form-control form-control-sm text-center" min="1" value="0" />
                                    <button class="btn btn-primary btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
                {{-- <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Metode Pembayaran</h4>
                        <div class="card mb-3">
                            <div class="card-body btn btn-outline-primary text-start p-2 " onclick="document.getElementById('paypal').checked = true;" >
                                <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="paypal" value="paypal" >
                                <img src="./assets/images/method-logo/paypal-logo.png" alt="Paypal" class="img-fluid" style="margin: 0px 5px 0px 10px; width: 50px;">
                                <label class="form-check-label" for="paypal">
                                    Paypal
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body btn btn-outline-primary text-start p-2" onclick="document.getElementById('googlepay').checked = true;" >
                                <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="googlepay" value="googlepay" >
                                <img src="./assets/images/method-logo/google-pay-logo.png" alt="googlepay" class="img-fluid" style="margin: 0px 5px 0px 10px;width: 50px;">
                                <label class="form-check-label" for="googlepay">
                                    Google Pay
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ">
                            <div class="card-body btn btn-outline-primary text-start p-2" onclick="document.getElementById('qris').checked = true;">
                                <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="qris" value="qris" >
                                <img src="./assets/images/method-logo/qris-logo.png" alt="qris" class="img-fluid" style="margin: 0px 5px 0px 10px; width: 50px;">
                                <label class="form-check-label" for="qris">
                                    QRIS
                                </label>
                                </div>
                            </div>
                        </div>
                        <!-- </div>
                            <div class="form-check d-block w-full relative">
                                <button type="button" class="btn btn-outline-primary w-full" ">
                                    <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                    Paypal
                                </button>
                            </div>
                            <div class="form-check d-block">
                                <button type="button" class="btn btn-outline-primary w-full" onclick="document.getElementById('tribunUtara').click();">
                                    <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                    Google Pay
                                </button>
                            </div>
                            <div class="form-check d-block">
                                <button type="button" class="btn btn-outline-primary w-100" onclick="document.getElementById('tribunUtara').click();">
                                    <input class="form-check-input" type="radio" name="tribun" id="tribunUtara" value="utara">
                                    QRIS
                                </button>
                            </div> -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total</h4>
                        <div class="row mb-3 d-flex justify-content-between">
                            <label for="total" class="col-sm-6 col-form-label">Rp</label>
                            <h3>Rp</h3>
                            <div class="col-sm-6 text-right">
                                <h3>100.000</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                        <button type="button" class="btn btn-primary w-100">Bayar Sekarang</button>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
@endsection
