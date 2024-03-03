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
        url: "{{ route('adm.search') }}",
        method: 'get', 
        data: {search: search},
        success: function(res){
        $('#table-content').html(res)
        if(res.status == 'nada_encontrado')
        {
            toastr.info("Nenhum administrador encontrado.", "Erro!")

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
        }
        },
        error: function(e){
            
                    $('#admStore input').val("")
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

$(document).on('click', '.pagination a', function(e){
    e.preventDefault()
    let search = $('#admSearch').val()
    let pagina = $(this).attr('href').split('page=')[1]
    onLoadingDiv.style.display = "flex"
    loadedDiv.style.display = "none"
    $.ajax({
        url: "adm/results?page="+pagina,
        method: 'get',
        data: {search: search},
        success: response =>{
            $('#table-content').html(response)
            onLoadingDiv.style.display = "none"
            loadedDiv.style.display = "flex"
        }
    })
})


</script>