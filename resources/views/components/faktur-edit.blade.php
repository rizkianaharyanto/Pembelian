<div class="row">
    <div class="col-md-12">
        <div id="stepperedit" class="bs-stepper">
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
                                @foreach ($fakturs as $faktur)
                                <option>{{ $faktur->gudang }}</option>
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
                        <button class="btn btn-primary" onclick="stepperedit.next()">Next</button>
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
                    <i id="tambahbarang" style="cursor: pointer; font-size:20px; color:grey" class="fas fa-plus justify-content-end"></i>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" onclick="stepperedit.previous()">Previous</button>
                        <button class="btn btn-primary" onclick="stepperedit.next()">Next</button>
                    </div>
                </div>
                <div id="edit-test-l-3" class="content">
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
                        <button class="btn btn-primary" onclick="stepperedit.previous()">Previous</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var steppereditNode = document.querySelector('#stepperedit')
    var stepperedit = new Stepper(document.querySelector('#stepperedit'))

    steppereditNode.addEventListener('show.bs-stepper', function(event) {
        console.warn('show.bs-stepper', event)
    })
    steppereditNode.addEventListener('shown.bs-stepper', function(event) {
        console.warn('shown.bs-stepper', event)
    })

    // var formbarangedit = $('#formbarangedit').html();
    // // var lbl = $('#lbl').html();
    // console.log(formbarangedit)
    // // console.log(lbl)
    // $('#tambahbarang').click(function() {
    //     console.log('klik');
    //     $('#formbarangedit').append(formbarangedit);
    //     // $('#formbarangedit').append(lbl);
    // });

    $('#tambahbarang').click(function() {
        $("#formbarangedit").append($("#isiformbarangedit").clone());
    });
</script>