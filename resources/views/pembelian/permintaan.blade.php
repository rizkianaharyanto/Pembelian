@extends('template.table')

@section('judul', 'Permintaan Penawaran Harga')

@section('halaman', 'Permintaan Penawaran Harga')

@section('thead')
<tr>
    <th>Kode Permintaan</th>
    <th>Supplier</th>
    <th>Tanggal</th>
    <th>Gudang</th>
    <th>Total</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($permintaans as $permintaan)
<tr>
    <td>{{ $permintaan->kode_permintaan }}</td>
    <td>Supplier</td>
    <td>{{ $permintaan->tanggal }}</td>
    <td>Gudang</td>
    <td>{{ $permintaan->total_harga }}</td>
    <td class="d-flex justify-content-between">
        <a id="details" data-toggle="modal" data-target="#modal">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
        <a id="edit" data-toggle="modal" data-target="#modal">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-edit">
                <span></span>
            </i>
        </a>
        <a id="delete" data-toggle="modal" data-target="#modal">
            <i onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-trash">
                <span></span>
            </i>
        </a>
    </td>
</tr>
@endforeach
@endsection

<!-- <script>
    $("a").click(function() {
        var id = $(this).attr("id");
        console.log(id);
        if (id == "details") {
            $('#lebarmodal').addClass('modal-xl');
            $('#judulmodal').html(
                '<i class="fas fa-user-circle mr-4" style="font-size:50px;color:#00BFA6;"></i> ' +
                '<h5 id = "nama_supplier" class = "align-self-center"> Penerimaan </h5>'
            );
            $('#bodymodal').html(
                '<form>' +
                '<fieldset class="detail-modal" disabled>' +
                '<div class="form-group ">' +
                '<label for="disabledTextInput">Email</label>' +
                '<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="disabledTextInput">Telp</label>' +
                '<input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">' +
                '</div>' +
                '</fieldset>' +
                '</form>'
            );
            $('#footermodal').html(
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>'
            );
        } else if (id == "edit") {
            $('#lebarmodal').addClass('modal-xl');
            $('#judulmodal').html(
                '<h5 class="align-self-center">Edit Penerimaan</h5>'
            );
            $('#bodymodal').html(
                '<div class="row">' +
                '<div class="col-md-12">' +
                '<div id="stepper1" class="bs-stepper">' +
                '<div class="bs-stepper-header">' +
                '<div class="step" data-target="#test-l-1">' +
                '<button type="button" class="btn step-trigger">' +
                '<span class="bs-stepper-circle">1</span>' +
                '<span class="bs-stepper-label">' +
                'ID' +
                '</span>' +
                '</button>' +
                '</div>' +
                '<div class="line"></div>' +
                '<div class="step" data-target="#test-l-2">' +
                '<button type="button" class="btn step-trigger">' +
                '<span class="bs-stepper-circle">2</span>' +
                '<span class="bs-stepper-label">Barang</span>' +
                '</button>' +
                '</div>' +
                '<div class="line"></div>' +
                '<div class="step" data-target="#test-l-3">' +
                '<button type="button" class="btn step-trigger">' +
                '<span class="bs-stepper-circle">3</span>' +
                '<span class="bs-stepper-label">Biaya Lain</span>' +
                '</button>' +
                '</div>' +
                '</div>' +
                '<div class="bs-stepper-content">' +
                '<div id="test-l-1" class="content">' +
                '<form>' +
                '<div class="form-group">' +
                '<label for="exampleFormControlInput1">Supplier</label>' +
                '<select class="form-control" id="exampleFormControlSelect1">' +
                '<option>1</option>' +
                '<option>2</option>' +
                '<option>3</option>' +
                '<option>4</option>' +
                '<option>5</option>' +
                '</select>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="exampleFormControlInput1">Gudang</label>' +
                '<select class="form-control" id="exampleFormControlSelect1">' +
                '<option>1</option>' +
                '<option>2</option>' +
                '<option>3</option>' +
                '<option>4</option>' +
                '<option>5</option>' +
                '</select>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="exampleFormControlInput1">Tanggal</label>' +
                '<input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">' +
                '</div>' +
                '</form>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                '<button id="next" class="btn btn-primary" onclick="stepper1.next()">Next</button>' +
                '</div>' +
                // '</form>' +
                '</div>' +

                '<div id="test-l-2" class="content">' +
                '<form>' +
                'for ($i = 1; $i < 4; $i++)' +
                '<div class="form-row">' +
                '<div class="form-group col-md-3">' +
                '<label for="exampleFormControlInput1">Barang</label>' +
                '<select class="form-control" id="exampleFormControlSelect1">' +
                '<option>1</option>' +
                '<option>2</option>' +
                '<option>3</option>' +
                '<option>4</option>' +
                '<option>5</option>' +
                '</select>' +
                '</div>' +
                '<div class="form-group col-md-1">' +
                '<label for="exampleFormControlInput1">QTY</label>' +
                '<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">' +
                '</div>' +
                '<div class="form-group col-md-2">' +
                '<label for="exampleFormControlInput1">Unit</label>' +
                '<select class="form-control" id="exampleFormControlSelect1">' +
                '<option>1</option>' +
                '<option>2</option>' +
                '<option>3</option>' +
                '<option>4</option>' +
                '<option>5</option>' +
                '</select>' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                '<label for="exampleFormControlInput1">Harga</label>' +
                '<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">' +
                '</div>' +
                '<div class="form-group col-md-3">' +
                '<label for="exampleFormControlInput1">Total</label>' +
                '<input type="number" class="form-control" id="exampleFormControlInput1" disabled>' +
                '</div>' +
                '</div>' +
                'endfor' +
                '</form>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                '<button id="previous" class="btn btn-primary " onclick="stepper1.previous()">Previous</button>' +
                '<button id="next" class="btn btn-primary" onclick="stepper1.next()">Next</button>' +
                '</div>' +
                // '</form>' +
                '</div>' +

                '<div id="test-l-3" class="content">' +
                '<form>' +
                '<div class="form-group">' +
                '<label for="exampleFormControlInput1">Diskon</label>' +
                '<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="exampleFormControlInput1">Biaya lain</label>' +
                '<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">' +
                '</div>' +
                '</form>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                '<button id="previous" class="btn btn-primary" onclick="stepper1.previous()">Previous</button>' +
                '<button type="submit" class="btn btn-primary">Simpan</button>' +
                '</div>' +
                // '</form>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'
            );
            $('#footermodal').removeClass('modal-footer');
            $('#footermodal').empty();

            var stepper1Node = document.querySelector('#stepper1')
            var stepper1 = new Stepper(document.querySelector('#stepper1'))
            $("button").click(function() {
                var isi = $(this).attr('id')
                console.log(isi)
                if (isi == 'next') {
                    stepper1.next();
                } else if (isi == 'previous') {
                    stepper1.previous();
                }
            })
            stepper1Node.addEventListener('show.bs-stepper', function(event) {
                console.warn('show.bs-stepper', event)
            })
            stepper1Node.addEventListener('shown.bs-stepper', function(event) {
                console.warn('shown.bs-stepper', event)
            })
            // $('#footermodal').html(
            //     '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
            //     '<button type="button" class="btn btn-primary">Simpan</button>'
            // );
        } else if (id == "delete") {
            $('#lebarmodal').removeClass('modal-xl');
            $('#judulmodal').html(
                '<h5 class="align-self-center">Hapus Penerimaan</h5>'
            );
            $('#bodymodal').html(
                '<p>Apakah kamu yakin ingin menghapus Penerimaan A ?</p>'
            );
            $('#footermodal').html(
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                '<button type="button" class="btn btn-danger">Hapus</button>'
            );
        }
    })
</script>
endsection


section('tambah')
<a id="tambah" data-toggle="modal" data-target="#modaltambah">
    <i onmouseover="tulisan()" class="fas fa-plus mr-4" style="font-size:30px;color:#00BFA6; cursor: pointer;">
        <span></span>
    </i>
</a>
endsection

section('judulTambah')
<h5 class="align-self-center">Tambah Permintaan</h5>
endsection

section('bodyTambah')
<div class="row">
    <div class="col-md-12">
        <div id="stepper1" class="bs-stepper">
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
                <div id="test-l-1" class="content ">
                    <form>
                        <div class="form-group">
                            <label for="nama_supplier">Supplier</label>
                            <select class="form-control" id="nama_supplier">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gudang">Gudang</label>
                            <select class="form-control" id="gudang">

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" placeholder="">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                    </div>
                </div>

                <div id="test-l-2" class="content">
                    <form id="formbarang">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="nama_barang">Barang</label>
                                <select class="form-control" id="nama_barang">

                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="jumlah_barang">QTY</label>
                                <input type="number" class="form-control" id="jumlah_barang" placeholder="">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="satuan_unit">Unit</label>
                                <select class="form-control" id="satuan_unit">

                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control" id="harga" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="total">Total</label>
                                <input type="number" class="form-control" id="total" disabled>
                            </div>
                        </div>
                    </form>
                    <i id="tambahbarang" style="cursor: pointer; font-size:20px; color:grey" class="fas fa-plus justify-content-end"></i>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                        <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                    </div>
                </div>
                <div id="test-l-3" class="content">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Diskon</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Biaya lain</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#tambah").click(function() {
        // console.log('klik');
        $('#lebarmodaltambah').addClass('modal-xl');
        $('#footermodaltambah').removeClass('modal-footer');
        $('#footermodaltambah').empty();
        $.get("/ambilgudang", function(datagudang) {
            console.log(datagudang)
            for ($i = 0; $i < datagudang.length; $i++) {
                $("#gudang").append('<option>' + datagudang[$i].nama_gudang + '</option>');
            }
        });
        $.get("/ambilbarang", function(databarang) {
            console.log(databarang)
            for ($i = 0; $i < databarang.length; $i++) {
                $("#nama_barang").append('<option>' + databarang[$i].nama_barang + '</option>');
            }
            var formbarang = $('#formbarang').html();
            $('#tambahbarang').click(function() {
                $('#formbarang').append(formbarang)
            });
        });

    });
    var stepper1Node = document.querySelector('#stepper1')
    var stepper1 = new Stepper(document.querySelector('#stepper1'))

    stepper1Node.addEventListener('show.bs-stepper', function(event) {
        console.warn('show.bs-stepper', event)
    })
    stepper1Node.addEventListener('shown.bs-stepper', function(event) {
        console.warn('shown.bs-stepper', event)
    })
</script>
endsection -->