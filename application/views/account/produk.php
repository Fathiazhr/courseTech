<div class="d-flex justify-content-end">
    <button type="button" name="tambah-produk" data-toggle="modal" data-target="#modalProduk" class="btn bisylms-btn mb-3">Tambah Produk</button>
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
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" name="idKategori" id="produkkategori">
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Instructur</label>
                    <input type="text" class="form-control" name="instructur" id="produkinstructur">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control" id="produkname">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="text" name="price" class="form-control" id="produkprice">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" name="button-produk" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>