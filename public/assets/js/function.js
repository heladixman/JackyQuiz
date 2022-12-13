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
      $('.idMahasiswa').val(id);
      $('#ModalDeleteMahasiswa').modal('show');
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
      $('#dosenName').val(dosenName);
      $('#dosenCode').val(dosenCode);
      $('#dosenAddress').val(dosenAddress);
      $('#dosenPhone').val(dosenPhone);
      $('#ModalUpdateDosen').modal('show');
    });
  });