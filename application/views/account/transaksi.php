<h4>Daftar Transaksi</h4>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Tanggal Pembelian</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="data-transaksi">

    </tbody>
</table>

<div class="modal fade" id="modalTransaksi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                    <label for="exampleFormControlSelect1">Produk</label>
                    <select class="form-control" name="idProduk" id="transksiProduk">
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pembelian</label>
                    <input type="text" name="tanggalPembelian" class="form-control datePicker" id="transaksitanggalbeli">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" name="button-transaksi" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>