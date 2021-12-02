<div class="d-flex justify-content-end">
    <button type="button" name="tambah-kategori" data-toggle="modal" data-target="#modalKategori" class="btn bisylms-btn mb-3">Tambah Kategori</button>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="data-kategori">

    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Form Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="nama-kategori" id="" aria-describedby="helpId" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" name="button-kategori" class="btn bisylms-btn">Save</button>
            </div>
        </div>
    </div>
</div>