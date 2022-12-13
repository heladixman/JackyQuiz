<!-- Update MataKuliah Modal -->
<div class="modal fade" id="ModalUpdateMatKul" tabindex="-1" role="dialog" aria-labelledby="Modal Register Pasien" aria-hidden="true">
    <form action="<?= base_url()?>/matakuliah/updateMatKul" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalUpdate">Edit Mata Kuliah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="d-flex col mb-3">
                  <label for="matKulCode" class="form-label w-25 align-self-center">Kode</label>
                  <input type="hidden" name="matKulID" class="matKulID">
                  <input type="text" id="matKulCode" class="form-control w-85" name="matKulCode" placeholder="Ubah nama jurusan">
                </div>
              </div>
              <div class="row">
                <div class="d-flex col mb-3">
                  <label for="matKulName" class="form-label w-25 align-self-center">Mata Kuliah</label>
                  <input type="text" id="matKulName" class="form-control w-85" name="matKulName" placeholder="Ubah nama jurusan">
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </div>
      </div>
    </form>x
  </div>


  <!-- Update Dosen Modal -->
<div class="modal fade" id="ModalUpdateDosen" tabindex="-1" role="dialog" aria-labelledby="Modal Register Pasien" aria-hidden="true">
    <form action="<?= base_url()?>/mahasiswa/editMahasiswa" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalUpdate">Edit Dosen</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label w-25 align-self-center">Kode Dosen</label>
                    <input type="hidden" name="dosenID" class="dosenID">
                    <input type="text" id="dosenCode" class="form-control w-75" name="dosenCode" placeholder="Ubah kode mahasiswa">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label w-25 align-self-center">Nama Dosen</label>
                    <input type="text" id="dosenName" class="form-control w-75" name="dosenName" placeholder="Ubah nama mahasiswa">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label align-self-center mb-0 w-25">Jenis Kelamin</label>
                    <select name="jenisKelamin" id="jenisKelamin" class="form-select w-75" required>
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label w-25 align-self-center">No. Telepon</label>
                    <input type="text" id="dosenPhone" class="form-control w-75" name="dosenPhone" placeholder="Ubah nama anggota">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="jurusan" class="form-label w-25 align-self-center">Alamat</label>
                    <input type="text" id="dosenAddress" class="form-control w-75" name="dosenAddress" placeholder="Ubah nama anggota">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </div>
      </div>
    </form>x
  </div>