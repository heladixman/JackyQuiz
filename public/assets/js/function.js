$(document).ready(function(){
    // delete button function
    $('.hapusJrs').on('click', function(){
      const id = $(this).data('id');
      console.log(id)
      $('.matKulID').val(id);
      $('#ModalDeleteMatKul').modal('show');
    });

    $('.hapusMhs').on('click', function(){
      const id = $(this).data('id');
      console.log(id)
      $('.dosenID').val(id);
      $('#ModalDeleteDosen').modal('show');
    });

    $('.hapusJadwal').on('click', function(){
      const Jid = $(this).data('id');
      console.log(Jid)
      $('.jadwalID').val(Jid);
      $('#ModalDeleteJadwal').modal('show');
    });

    // edit without set editModel
    $('.editJrs').on('click', function(){
      var matKulID = $(this).data('id')
      var matKulCode = $(this).data('code');
      var matKulName = $(this).data('name');
      $('.matKulID').val(matKulID);
      $('#matKulCode').val(matKulCode);
      $('#matKulName').val(matKulName);
      $('#ModalUpdateMatKul').modal('show');
    });

    // edit without set editModel
    $('.editMhs').on('click', function(){
      var dosenID = $(this).data('id')
      var dosenCode = $(this).data('code')
      var dosenName = $(this).data('name');
      var dosenAddress = $(this).data('address')
      var dosenPhone = $(this).data('phone')
      console.log(dosenID, dosenCode, dosenName, dosenAddress, dosenPhone);
      $('.dosenID').val(dosenID);
      $('.dosenName').val(dosenName);
      $('.dosenCode').val(dosenCode);
      $('.dosenAddress').val(dosenAddress);
      $('.dosenPhone').val(dosenPhone);
      $('#ModalUpdateDosen').modal('show');
    });

    $('.editJadwal').on('click', function(){
      var jadwalID = $(this).data('id')
      var dosenID = $(this).data('dosen')
      var matKulID= $(this).data('matkul');
      var jadwalDay = $(this).data('day')
      var jadwalDate = $(this).data('date')
      var jadwalTime = $(this).data('time')
      console.log(jadwalID, dosenID, matKulID, jadwalDay, jadwalDate, jadwalTime);
      $('.jadwalID').val(jadwalID);
      $('.dosenID').val(dosenID);
      $('.matKulID').val(matKulID);
      $('.jadwalDay').val(jadwalDay);
      $('.jadwalDate').val(jadwalDate);
      $('.jadwalTime').val(jadwalTime);
      $('#ModalUpdateJadwal').modal('show');
    });

    $('.close-notification').on('click', function(){
      $("div.notification").addClass("d-none")
       
    });

    $(function() {
      $('.jadwalDate').datepicker();
  });

  });