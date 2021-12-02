<div class="d-flex justify-content-end">
    <button type="button" name="tambah-kategori" data-toggle="modal" data-target="#modalProduk" class="btn bisylms-btn mb-3">Tambah Produk</button>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Instruktur</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="data-produk">

    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modalProduk" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Body
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>