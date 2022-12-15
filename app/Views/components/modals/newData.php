  <!-- New MataKuliah Modal --> 
  <div class="modal fade" id="ModalNewMataKuliah" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah Jurusan" aria-hidden="true">
    <form action="<?= base_url()?>/matakuliah/newMatKul" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Mata Kuliah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="d-flex col mb-3">
                  <label for="codeMatKul" class="form-label w-25 align-self-center">Kode</label>
                  <input type="text" id="codeMatKul" class="form-control w-85" name="codeMatKul" placeholder="Masukan nama jurusan...">
                </div>
              </div>
              <div class="row">
                <div class="d-flex col mb-3">
                  <label for="NameMatKul" class="form-label w-25 align-self-center">Mata Kuliah</label>
                  <input type="text" id="NameMatKul" class="form-control w-85" name="NameMatKul" placeholder="Masukan nama jurusan...">
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- New Dosen Modal --> 
    <div class="modal fade" id="ModalNewDosen" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah Jurusan" aria-hidden="true">
    <form action="<?= base_url()?>/dosen/newDosen" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Dosen Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                <div class="d-flex justify-content-between mb-3">
                    <label for="dosenCode" class="form-label align-self-center mb-0 w-25">Kode</label>
                    <input type="text" id="dosenCode" class="form-control w-75" name="dosenCode" placeholder="Masukan nama mahasiswa...">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label align-self-center mb-0 w-25">Nama Dosen</label>
                    <input type="text" id="dosenName" class="form-control w-75" name="dosenName" placeholder="Masukan nama mahasiswa...">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="dosenSex" class="form-label align-self-center mb-0 w-25">Jenis Kelamin</label>
                    <select name="dosenSex" id="dosenSex" class="form-select w-75" required>
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label align-self-center mb-0 w-25">no. telepon</label>
                    <input type="text" id="dosenPhone" class="form-control w-75" name="dosenPhone" placeholder="Masukan nama mahasiswa...">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label align-self-center mb-0 w-25">Alamat</label>
                    <input type="text" id="dosenAddress" class="form-control w-75" name="dosenAddress" placeholder="Masukan nama mahasiswa...">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- New Jadwal Modal --> 
  <div class="modal fade" id="ModalNewJadwal" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah Jurusan" aria-hidden="true">
    <form action="<?= base_url()?>/jadwal/newJadwal" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">Tambah Jadwal Baru</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col mb-3">
                <div class="d-flex justify-content-between mb-3">
                  <label for="dosenID" class="form-label align-self-center mb-0 w-25">Dosen</label>
                    <select name="dosenID" id="dosenID" class="form-select w-75" required>
                      <?php foreach ($dosen as $data) { ?>
                      <option value="<?= $data->dosenID?>"><?= $data->dosenName ?></option><?php }?>
                    </select>
                  </div>
                <div class="d-flex justify-content-between mb-3">
                  <label for="matKulID" class="form-label align-self-center mb-0 w-25">Mata Kuliah</label>
                    <select name="matKulID" id="matKulID" class="form-select w-75" required>
                      <?php foreach($matkul as $data){ ?>
                      <option value="<?= $data->matKulID?>"><?= $data->matKulName ?></option><?php }?>
                    </select>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <label for="jadwalDay" class="form-label align-self-center mb-0 w-25">Hari</label>
                    <select name="jadwalDay" id="jadwalDay" class="form-select w-75" required>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jum'at">Jum'at</option>
                      <option value="Sabtu">Sabtu</option>
                       <option value="Minggu">Minggu</option>
                   </select>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <label for="jadwalDay" class="form-label align-self-center mb-0 w-25">Tanggal</label>
                    <div class="input-group date w-75">
                        <input type="date" class="form-control" id="jadwalDate" name="jadwalDate">
                        <span class="input-group-append">
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-3">
                  <label for="jadwalDay" class="form-label align-self-center mb-0 w-25">Jam</label>
                    <div class="input-group date w-75">
                        <input type="time" class="form-control" id="jadwalTime" name="jadwalTime">
                        <span class="input-group-append">
                        </span>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </div>
    </form>
  </div>