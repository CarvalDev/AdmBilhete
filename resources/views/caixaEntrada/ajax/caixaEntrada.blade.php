<script>


console.log('ok')
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('keyup', function(e){
    
    e.preventDefault()
    let search = $('#caixaEntradaSearch').val()
    let status = $('#statusSuporte').val()
    if(search == ''){
        statusChange(status, search)
    }
    else{
    console.log(search)
    $.ajax({
        url: "{{ route('caixaEntrada.search') }}",
        method: 'get', 
        data: {search: search},
        success: function(res){
        $('#table-content').html(res)  
            if(res.status == 'nada_encontrado'){
            
                toastr.info("Nenhuma duvida encontrada.", "Erro!")

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
            
                    $('#caixaEntradaStore input').val("")
        }
    })
}
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

$(document).on('change', '#statusSuporte', function(e){
    e.preventDefault()
    let search = $('#caixaEntradaSearch').val()
    let status = $('#statusSuporte').val()
    console.log('mudou')
    statusChange(status, search)
    
})

const statusChange = (status, search) =>{
    $.ajax({
        url: "{{ route('caixaEntrada.search') }}",
        data: {search:search, statusSuporte:status},
        success: response => {
            
            $('#table-content').html(response)
        }
    })
}

$(document).on('click', '.pagination a', function(e){
    e.preventDefault()
    onLoadingDiv.style.display = "flex"
    loadedDiv.style.display = "none"
    let pagina = $(this).attr('href').split('page=')[1]
    console.log(pagina)
    suportes(pagina)
})

function suportes(pagina){
    let search = $('#caixaEntradaSearch').val()
    let status = $('#statusSuporte').val()
    $.ajax({
        url: "/caixaEntrada/results?page="+pagina,
        data: {search:search, statusSuporte:status },
        success: function(res){
            $('#table-content').html(res)
            onLoadingDiv.style.display = "none"
            loadedDiv.style.display = "flex"
        }
    })
}

</script>