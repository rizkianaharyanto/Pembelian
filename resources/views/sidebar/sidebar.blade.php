<div class="side">
    <!-- @include('sidebar.bar') -->
    <div id="nav" class="nav">
        <!-- <div class="item" onclick="collapseNav()">
                <i class="fas fa-pizza-slice"></i>
            </div> -->

        <div class="item">
            <i onclick="collapseNav()" class="fas fa-th-large"></i>
            <span>
                <a href="/dashboard">Dashboard</a>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-database"></i>
            <span>
                <a class="dropdown-toggle" data-toggle="collapse" href="#drop" role="button" aria-expanded="false">
                    Manajemen Data
                </a>
                <ul class="collapse list-unstyled" id="drop">
                        <li class="pt-2">
                            <a href="/supplier">Data Supplier</a>
                        </li>
                        <li class="pt-2">
                            <a href="/pengirim">Data Pengirim</a>
                        </li>
                        <li class="pt-2">
                            <a href="/barang">Data Barang</a>
                        </li>
                        <li class="pt-2">
                            <a href="/gudang">Data Gudang</a>
                        </li>
                        <li class="pt-2">
                            <a href="/akun">Data Akun</a>
                        </li>
                        <li class="pt-2">
                            <a href="/pajak">Data Pajak</a>
                        </li>
                </ul>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-envelope-open-text"></i>
            <span>
                <a href="/permintaan">Permintaan Penawaran Harga</a>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-boxes"></i>
            <span>
                <a href="/pemesanan">Pemesanan</a>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-shipping-fast"></i>
            <span>
                <a href="/penerimaan">Penerimaan Barang</a>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-clipboard-check"></i>
            <span>
                <a href="/faktur">Faktur</a>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-exchange-alt"></i>
            <span>
                <a href="/retur">Retur Pembelian</a>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-file-invoice-dollar"></i>
            <span>
                <a href="/hutang">Hutang</a>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-hand-holding-usd"></i>
            <span>
                <a href="/pembayaran">Pembayaran Hutang</a>
            </span>
        </div>
        <div class="item">
            <i onclick="collapseNav()" class="fas fa-file-alt"></i>
            <span>
                <a href="/jurnal">Jurnal</a>
            </span>
        </div>
    </div>
</div>

<script>
    // document.getElementById('nav').classList.remove('collapsed');
    const collapseNav = () => {
        document.getElementById('nav').classList.toggle('collapsed');
        // document.getElementById('isi').classList.add('collapsed');
    }
</script>