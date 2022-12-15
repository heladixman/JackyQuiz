<!-- Delete MataKuliah Modal-->
  <div class="modal fade" id="ModalDeleteMatKul" tabindex="-1" role="dialog" aria-labelledby="Modal Delete Jurusan" aria-hidden="false">
      <form action="<?= base_url()?>/matakuliah/deleteMatKul" method="post">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title" id="exampleModalLabel1">Yakin ingin mengahapus?</p>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <input type="hidden" name="matKulID" class="matKulID">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
          </div>
        </div>
      </form>
    </div>

  <!-- Delete Dosen Modal -->
  <div class="modal fade" id="ModalDeleteDosen" tabindex="-1" role="dialog" aria-labelledby="Modal Delete Jurusan" aria-hidden="false">
      <form action="<?= base_url()?>/dosen/deleteDosen" method="post">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title" id="exampleModalLabel1">Yakin ingin mengahapus?</p>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <input type="hidden" name="dosenID" class="dosenID">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!-- Delete Jadwal Modal -->
  <div class="modal fade" id="ModalDeleteJadwal" tabindex="-1" role="dialog" aria-labelledby="Modal Delete Jurusan" aria-hidden="false">
      <form action="<?= base_url()?>/jadwal/deleteJadwal" method="post">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title" id="exampleModalLabel1">Yakin ingin mengahapus?</p>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <input type="hidden" name="jadwalID" class="jadwalID">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
          </div>
        </div>
      </form>
    </div>