<form method="post" action="/pengirim">
    @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="nama" class="form-control" id="nama" placeholder="nama" name="nama">
  </div>
  <div class="form-group">
    <label for="telp">telp</label>
    <input type="telp" class="form-control" id="telp" placeholder="telp" name="telp">
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" class="form-control" id="email" placeholder="email" name="email">
  </div>
  <button type="submit">tambah</button>
</form>