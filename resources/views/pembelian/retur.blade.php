@extends('template.table')

@section('judul', 'Retur Pembelian')

@section('halaman', 'Retur Pembelian')

@section('thead')
<tr>
    <th>Retur Id</th>
    <th>Supplier</th>
    <th>Tanggal</th>
    <th>Gudang</th>
    <th>Total</th>
    <th style="column-width: 80px">Aksi</th>
</tr>
@endsection

@section('tbody')
@for ($i = 1; $i < 50; $i++) <tr>
    <td>{{ $i }}</td>
    <td>Supplier {{ $i }}</td>
    <td>Tanggal {{ $i }}</td>
    <td>Gudang {{ $i }}</td>
    <td>Total {{ $i }}</td>
    <td class="d-flex justify-content-between">
        <a data-toggle="modal" data-target="#modalDetails">
            <i id="details" onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-info-circle">
                <span></span>
            </i>
        </a>
        <a data-toggle="modal" data-target="#modalEdit">
            <i id="details" onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-edit">
                <span></span>
            </i>
        </a>
        <a data-toggle="modal" data-target="#modalDelete">
            <i id="details" onmouseover="tulisan()" style="cursor: pointer;" class="fas fa-trash">
                <span></span>
            </i>
        </a>
    </td>
    </tr>
    @endfor
    @endsection

    
    <!-- Details -->
    @section('judulDetails')
    @endsection

    @section('bodyDetails')
    @endsection

    <!-- Edit -->
    @section('judulEdit')
    <h5 class="align-self-center">Edit Retur</h5>
    @endsection

    @section('bodyEdit')
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
                        @for ($i = 1; $i < 4; $i++)
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
                            @endfor
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

    <script>
        var stepper1Node = document.querySelector('#stepper1')
        var stepper1 = new Stepper(document.querySelector('#stepper1'))

        stepper1Node.addEventListener('show.bs-stepper', function(event) {
            console.warn('show.bs-stepper', event)
        })
        stepper1Node.addEventListener('shown.bs-stepper', function(event) {
            console.warn('shown.bs-stepper', event)
        })

        var stepper2 = new Stepper(document.querySelector('#stepper2'), {
            linear: false,
            animation: true
        })
        var stepper3 = new Stepper(document.querySelector('#stepper3'), {
            animation: true
        })
        var stepper4 = new Stepper(document.querySelector('#stepper4'))
    </script>
    @endsection

    <!-- Delete -->
    @section('judulDelete')
    <h5 class="align-self-center">Hapus Retur</h5>
    @endsection

    @section('bodyDelete')
    <p>Apakah kamu yakin ingin menghapus Retur A?</p>
    @endsection