<script>


console.log('ok')
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('keyup', function(e){
    e.preventDefault()
    let search = $('#admSearch').val()
    $.ajax({
        url: "{{ route('adm.index') }}",
        method: 'get',
        data: {search: search},
        success: function(res){
        //    console.log(res) 
        console.log(res)
        $('#tabela').html(res)
        //    $("#tabela").html($(res).filter('#tabela'));
            // $('#tabela').hide().html(res).fadeIn();
           
        }
    })
})


$('#admStore').submit(function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    

    $.ajax({ 
        url: "{{ route('adm.store') }}",
        method:'post',
        data: formData,
        contentType: false,
        processData: false,
        success: (response) => {
             toastr.success("Administrador cadastrado.", "Sucesso!")

                    toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "1000",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                    }
                    $('#admStore input').val("")
        },
        error: function(err){
            let error = err.responseJSON
            $.each(error.errors, function(index, value){
                // $('.errors').append('<span class="text-danger m-auto">' + value + '</span>')
                toastr.error(value, "Erro")
                
            })
          
        }
    })
})



</script>