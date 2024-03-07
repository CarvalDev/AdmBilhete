<script>


console.log('ok')
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('keyup', function(e){
    
    e.preventDefault()
    let search = $('#passageiroSearch').val()
    console.log(search)
    $.ajax({
        url: "{{ route('passageiro.search') }}",
        method: 'get', 
        data: {search: search},
        success: function(res){
        
        $('#table-content').html(res)
            
            if(res.status !== undefined){
                toastr.info("Nenhum passageiro encontrado.", "Erro!")

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
            
                    $('#passageiroStore input').val("")
        }
    })
})


$('#passageiroStore').submit(function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    

    $.ajax({ 
        url: "{{ route('passageiro.store') }}",
        method:'post',  
        data: formData,
        contentType: false,
        processData: false,
        success: (response) => {
             toastr.success("Usuario cadastrado.", "Sucesso!")

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
                    $('#passageiroStore input').val("")
                    
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
     
    onLoadingDiv.style.display = "flex"
    loadedDiv.style.display = "none"
    let pagina = $(this).attr('href').split('page=')[1]
    console.log(pagina)
    passageiros(pagina)
})

function passageiros(pagina){
    let search = $('#passageiroSearch').val()
    $.ajax({
        url: "/passageiros/results?page="+pagina,
        data: {search:search },
        success: function(res){
            $('#table-content').html(res)
            onLoadingDiv.style.display = "none"
            loadedDiv.style.display = "flex"
        }
    })
}


</script>