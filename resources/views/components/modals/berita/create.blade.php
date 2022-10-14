<form id="createForm">
    <div class="modal" tabindex="-1" role="dialog" id="createModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Berita</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="createName">Nama</label>
                    <input type="text" name="name" id="createName" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="createBeritaCategory">kategori Beria</label>
                <select name="product_category_id" id="createProductCategory" class="form-control">
                    <option value="" selected disabled>Pilih Kategori</option>
                    @foreach($productCategories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </label>
            </div>
            <div class="form-group">
                <label for="createPrice">harga</label>
                    <input type="text" id="createPrice" class="form-control price" name="price">
                </label>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="createSubmit">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</form>
