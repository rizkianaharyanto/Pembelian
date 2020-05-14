@extends('template.table')

@section('judul', 'Penerimaan Barang')

@section('halaman', 'Penerimaan Barang')

@section('thead')
<tr>
    <th>Kode Penerimaan</th>
    <th>Supplier</th>
    <th>Tanggal</th>
    <th>Gudang</th>
    <th>Total</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@foreach ($penerimaans as $penerimaan)
<tr>
    <td>{{ $penerimaan->kode_penerimaan }}</td>
    <td>Supplier</td>
    <td>{{ $penerimaan->tanggal }}</td>
    <td>Gudang</td>
    <td>{{ $penerimaan->total_harga }}</td>
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
                '<div id="test-l-1" class="content ">' +
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
                '<button class="btn btn-primary" onclick="stepper1.next()">Next</button>' +
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

                '<button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>' +
                '<button class="btn btn-primary" onclick="stepper1.next()">Next</button>' +
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
                '<button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'
            );
            $('#footermodal').html(
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>' +
                '<button type="button" class="btn btn-primary">Simpan</button>'
            );
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

<script>
    var stepper1Node = document.querySelector('#stepper1')
    var stepper1 = new Stepper(document.querySelector('#stepper1'))

    stepper1Node.addEventListener('show.bs-stepper', function(event) {
        console.warn('show.bs-stepper', event)
    })
    stepper1Node.addEventListener('shown.bs-stepper', function(event) {
        console.warn('shown.bs-stepper', event)
    })
</script>
    endsection

    
    section('judulDetails')
    endsection

    section('bodyDetails')
    endsection


    section('tambah')
    <a data-toggle="modal" data-target="#PesananmodalTambah">
      <i id="tambah" onmouseover="tulisan()" class="fas fa-plus mr-4" style="font-size:30px;color:#00BFA6; cursor: pointer;">
        <span></span>
      </i>
    </a>
    endsection

    section('judulTambah')
    <h5 class="align-self-center">Tambah Penerimaan</h5>
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
                                <label for="exampleFormControlInput1">Supplier</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Gudang</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tanggal</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </form>
                        <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                    </div>
                    <div id="test-l-2" class="content">
                        <form>
                        for ($i = 1; $i < 4; $i++)
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="exampleFormControlInput1">Barang</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleFormControlInput1">QTY</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="exampleFormControlInput1">Unit</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleFormControlInput1">Harga</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleFormControlInput1">Total</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" disabled>
                                </div>
                            </div>
                            endfor
                        </form>

                        <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                        <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
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
                        <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    endsection -->
