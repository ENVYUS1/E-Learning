function modal_pengguna(){
    $("input[name=aksi]").val(1)
    reset('#form-pengguna')
    $("#modal-pengguna").modal({ backdrop : 'static', keyboard : false})
}
//  data table
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// validasi('#form-pengguna')


var table_pengguna = $('#tabel-pengguna').DataTable({

    processing: true,
    serverSide: true,
    ajax: {
        url:'data-pengguna'
    },
    columns: [
    {data: 'DT_RowIndex', name:'DT_RowIndex', orderable: true, searchable: false},
    {data: 'name',       name: 'name'},
    {data: 'email',      name: 'email'},
    {data: 'status',     name: 'status'},
    {data: 'action',     name: 'action'},
    ],
});

//proses insert update
$(document).on("submit", "#form-pengguna", function(e){
    e.preventDefault()

    $('button').prop('disabled', true)
    $('.loader').show()
    loader('#load')
    $.ajax({
        url : '/tambah-pengguna',
        method : 'POST',
        data : new FormData(this),
        processData : false,
        contentType : false,
        timeout : 100000,
        success : function(resp)
        {

            var json = JSON.parse(resp)
            $('button').prop('disabled', false)
            $('.loader').hide()

            if ($('input[name=aksi]').val()==1){
               reset('#form-pengguna')
           } 
           $('#load').waitMe('hide')
           table_pengguna.ajax.reload(null, false);
           Swal.fire(json[0],json[1],json[2]);
       },
       error : function (jqXHR, exception) {
        errorHandling(jqXHR.status, exception)
    }
})
})

$('body').delegate('.edit-pengguna', 'click',function () {

    var id=$(this).attr('did');
    loader('#load')
    $.ajax({

        url : '/tambah-pengguna',
        method : 'POST',
        data : {json_pengguna:id},
        timeout : 10000,
        success:function (resp) {
            var json=JSON.parse(resp)
            $("input[name=aksi]").val(0)
            $("input[name=nama]").val(json[0].name) 
            $("textarea[name=keterangan]").val(json[0].description) 
            $("input[name=id_pengguna]").val(json[0].id)
            $('#load').waitMe('hide')
            $("#modal-pengguna").modal({backdrop:'static', keyboard : false})

        },
        error : function (jqXHR, exception) {
            errorHandling(jqXHR.status, exception)
        }
    })

})

$('body').delegate('.hapus-pengguna', 'click',function () {

    var id=$(this).attr('did')

    Swal.fire({
        title: 'Anda Yakin?',
        text: "Data ini akan hilang!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        timeout : 10000,
        confirmButtonText: 'Ya, Hapus data!'
    }).then((result) => {
        if (result.value) {
          loader('#load')
          $.ajax({

            url : '/tambah-pengguna',
            method : 'POST',
            data : {hapus_pengguna:id},

            success : function(resp) {
                var json=JSON.parse(resp)
                Swal.fire(json[0],json[1],json[2])
                table_pengguna.ajax.reload(null,false)
                $('#load').waitMe('hide')

            },
            error : function (jqXHR, exception) {
                errorHandling(jqXHR.status, exception)
            }
        })
      }
  })

})


