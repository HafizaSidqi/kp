<div class="container">
<div class="row mt-4 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah Post
                </div>
                <div class="card-body">
                <form action="<?= base_url() ?>post/Tambah" method="POST">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" value="<?=set_value('judul');?>">
                    <?=form_error('judul', '<small class="text-danger">', '</small>')?>
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control" name="isi" id="isi" placeholder="Masukkan isi" rows="10"><?=set_value('isi');?></textarea>
                    <?=form_error('isi', '<small class="text-danger">', '</small>')?>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>

</div>