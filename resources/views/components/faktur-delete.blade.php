<x-modal id="delete">
    <x-slot name="title">
        <h5 class="align-self-center">Hapus Faktur</h5>
    </x-slot>
    <x-slot name="body">
        <p>Apakah kamu yakin ingin menghapus Faktur A ?</p>
        <div id="footermodal" class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> 
    <form method="POST" action="/suppliers/"> 
        @method("delete") 
        @csrf 
        <button type="submit" class="btn btn-danger">Hapus</button> 
    </form>
</div>
</x-slot>
</x-modal>