@extends('template.template')

@section('judul', 'tambah')

@section('halaman', 'Tambah Retur')

@section('isi')

<div class="d-flex justify-content-center">
    <div id="stepper" class="bs-stepper align-self-end" style=" width:80vw; max-height:60vh; color:black;">
        <div class="bs-stepper-header">
            <div class="step" data-target="#test-l-1">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">1</span>
                    <span class="bs-stepper-label">
                        ID
                    </span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-l-2">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">2</span>
                    <span class="bs-stepper-label">Barang</span>
                </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#test-l-3">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">3</span>
                    <span class="bs-stepper-label">Biaya Lain</span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content">
            <div id="test-l-1" class="content">
                <form style="height: 58vh;">
                    <div class="form-group">
                        <label for="nama_supplier">Supplier</label>
                        <select class="form-control" id="nama_supplier">
                            @foreach ($suppliers as $supplier)
                            <option>{{ $supplier->nama_supplier }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gudang">Gudang</label>
                        <select class="form-control" id="gudang">
                            @foreach ($gudangs as $gudang)
                            <option>{{ $gudang->nama_gudang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="mata-uang">Mata Uang</label>
                        <select class="form-control" id="mata-uang">
                            <option>IDR</option>
                            <option>$</option>
                        </select>
                    </div>
                </form>
                <div class="modal-footer">
                    <a href="/returs">
                        <button type="button" class="btn btn-secondary">Batal</button>
                    </a>
                    <button class="btn" style="background-color:#00BFA6; color:white" onclick="stepper.next()">Selanjutnya</button>
                </div>
            </div>

            <div id="test-l-2" class="content">
                <form style="overflow: auto; height: 52vh;" id="formbarang">
                    <div class="form-row mx-3" id="isiformbarang0">
                        <div class="form-group col-md-3">
                            <label for="nama_barang" id="lbl">Barang</label>
                            <select class="form-control" id="nama_barang">
                                @foreach ($barangs as $barang)
                                <option>{{ $barang->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="jumlah_barang">QTY</label>
                            <input type="number" class="form-control" id="jumlah_barang" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="satuan_unit">Unit</label>
                            <input type="number" class="form-control" id="unit" disabled>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="harga">Harga Satuan</label>
                            <input type="number" class="form-control" id="harga" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="total">Total</label>
                            <input type="number" class="form-control" id="total" disabled>
                        </div>
                        <div class="form-group col-md-1">
                            <p style="color: transparent">#</p>
                            <a onclick="hapus(this)">
                                <i style="color:grey;" class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </form>
                <div class="alert alert-primary mt-3 mb-0 p-1" id="tambahbarang" onmouseover="green(this)" onmouseout="grey(this)" style="cursor: pointer; font-size:15px;">
                    <i class="fas fa-plus d-flex justify-content-center">
                        <span class="mx-2">Tambah Barang</span>
                    </i>
                </div>
                <div class="modal-footer">
                    <div class="d-flex mr-auto">
                        <p class="m-2">Total </p>
                        <input style="width:26vw" type="number" name="total" id="total_harga_barang" disabled>
                    </div>
                    <a href="/returs">
                        <button type="button" class="btn btn-secondary">Batal</button>
                    </a>
                    <button class="btn" style="background-color:#00BFA6; color:white" onclick="stepper.previous()">Sebelumnya</button>
                    <button class="btn" style="background-color:#00BFA6; color:white" onclick="stepper.next()">Selanjutnya</button>
                </div>
            </div>
            <div id="test-l-3" class="content">
                <form style="height: 58vh;">
                    <div class="form-group">
                        <label for="diskon">Diskon</label>
                        <input type="number" class="form-control" id="diskon" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="biaya_lain">Biaya lain</label>
                        <input type="number" class="form-control" id="biaya_lain" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="termin_pembayaran">Termin Pembayaran</label>
                        <select class="form-control" id="termin_pembayaran">
                            <option>0 % 0 Net 0</option>
                        </select>
                    </div>
                </form>
                <div class="modal-footer">
                    <a href="/returs">
                        <button type="button" class="btn btn-secondary">Batal</button>
                    </a>
                    <button class="btn" style="background-color:#00BFA6; color:white" onclick="stepper.previous()">Sebelumnya</button>
                    <button type="submit" class="btn" style="background-color:#00BFA6; color:white">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var stepperNode = document.querySelector('#stepper')
    var stepper = new Stepper(document.querySelector('#stepper'))

    stepperNode.addEventListener('show.bs-stepper', function(event) {
        console.warn('show.bs-stepper', event)
    })
    stepperNode.addEventListener('shown.bs-stepper', function(event) {
        console.warn('shown.bs-stepper', event)
    })

    function green(x) {
        x.className = "alert mt-3 alert-light mb-0 p-1";
    }

    function grey(x) {
        x.className = "alert mt-3 mb-0 p-1 alert-primary";
    }


    var i = 0;
    $('#tambahbarang').click(function() {
        // console.log(i)
        $("#formbarang").append($("#isiformbarang" + i).clone().attr('id', 'isiformbarang' + (i + 1)));
        $(document.querySelectorAll("#isiformbarang1")).children().children().children().css({
            'color': 'black',
            'cursor': 'pointer'
        })
        // $("#isiformbarang" + i).attr('id', 'isiformbarang' + (i + 1))
        // $("#delete" + i).attr({
        //     'id': 'delete' + (i + 1),
        //     'value': (i + 1)
        // })
        // console.log(i)
    });

    function hapus(x) {
        if ($(x).parent().parent().attr('id') != 'isiformbarang0') {
            $(x).parent().parent().remove();
        }
    }
</script>

@endsection