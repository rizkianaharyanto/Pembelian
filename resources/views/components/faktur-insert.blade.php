<x-modal id="insert" class="modal-xl">
    <x-slot name="title">
        <h5 class="align-self-center">Tambah Faktur</h5>
    </x-slot>
    <x-slot name="body">
        <div class="row">
            <div class="col-md-12">
                <div id="stepperinsert" class="bs-stepper">
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
                                <button class="btn btn-primary" onclick="stepperinsert.next()">Next</button>
                            </div>
                        </div>

                        <div id="test-l-2" class="content">
                            <form id="formbaranginsert">
                                <div class="form-row" id="isiformbaranginsert">
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
                            <div class="alert alert-primary mt-3 mb-0 p-1" id="tambahbaranginsert" onmouseover="green(this)" onmouseout="grey(this)" style="cursor: pointer; font-size:15px;">
                                <i class="fas fa-plus d-flex justify-content-center"></i>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button class="btn btn-primary" onclick="stepperinsert.previous()">Previous</button>
                                <button class="btn btn-primary" onclick="stepperinsert.next()">Next</button>
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
                                <button class="btn btn-primary" onclick="stepperinsert.previous()">Previous</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var stepperinsertNode = document.querySelector('#stepperinsert')
            var stepperinsert = new Stepper(document.querySelector('#stepperinsert'))

            stepperinsertNode.addEventListener('show.bs-stepper', function(event) {
                console.warn('show.bs-stepper', event)
            })
            stepperinsertNode.addEventListener('shown.bs-stepper', function(event) {
                console.warn('shown.bs-stepper', event)
            })

            // var formbaranginsert = $('#formbaranginsert').html();
            // // var lbl = $('#lbl').html();
            // console.log(formbaranginsert)
            // // console.log(lbl)
            // $('#tambahbaranginsert').click(function() {
            //     console.log('klik');
            //     $('#formbaranginsert').append(formbaranginsert);
            //     // $('#formbaranginsert').append(lbl);
            // });

            function green(x) {
                // x.style.color = "green";
                x.className = "alert mt-3 alert-secondary mb-0 p-1";
            }

            function grey(x) {
                // x.style.color = "grey";
                x.className = "alert mt-3 mb-0 p-1 alert-primary";
            }

            $('#tambahbaranginsert').click(function() {
                $("#formbaranginsert").append($("#isiformbaranginsert").clone());
            });
        </script>
    </x-slot>
</x-modal>