<div class="row">
    <div class="col-md-12">
        <div id="stepperedit-{{$faktur->id}}" class="bs-stepper">
            <div class="bs-stepper-header">
                <div class="step" data-target="#edit-test-l-1">
                    <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">
                            ID
                        </span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#edit-test-l-2">
                    <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Barang</span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#edit-test-l-3">
                    <button type="button" class="btn step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Biaya Lain</span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <div id="edit-test-l-1" class="content ">
                    <form>
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
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" onclick="stepperedit.next()">Selanjutnya</button>
                    </div>
                </div>

                <div id="edit-test-l-2" class="content">
                    <form id="formbarangedit">
                        <div class="form-row" id="isiformbarangedit">
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
                    <div class="alert alert-primary mt-3 mb-0 p-1" id="tambahbarangedit" onmouseover="green(this)" onmouseout="grey(this)" style="cursor: pointer; font-size:15px;">
                        <i class="fas fa-plus d-flex justify-content-center"></i>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" onclick="stepperedit.previous()">Sebelumnya</button>
                        <button class="btn btn-primary" onclick="stepperedit.next()">Selanjutnya</button>
                    </div>
                </div>
                <div id="edit-test-l-3" class="content">
                    <form>
                        <div class="form-group">
                            <label for="diskon">Diskon</label>
                            <input type="number" class="form-control" id="diskon" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="biaya_lain">Biaya lain</label>
                            <input type="number" class="form-control" id="biaya_lain" placeholder="">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" onclick="stepperedit.previous()">Sebelumnya</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var steppereditNode = document.querySelector('#stepperedit-{{$faktur->id}}')
    console.log(steppereditNode)
    var stepperedit = new Stepper(document.querySelector('#stepperedit-{{$faktur->id}}'))
    // console.log(stepperedit)

    steppereditNode.addEventListener('show.bs-stepper', function(event) {
        console.warn('show.bs-stepper', event)
    })
    steppereditNode.addEventListener('shown.bs-stepper', function(event) {
        console.warn('shown.bs-stepper', event)
    })

    function green(x) {
        x.className = "alert mt-3 alert-secondary mb-0 p-1";
    }

    function grey(x) {
        x.className = "alert mt-3 mb-0 p-1 alert-primary";
    }

    $('#tambahbarangedit').click(function() {
        $("#formbarangedit").append($("#isiformbarangedit").clone());
    });
</script>