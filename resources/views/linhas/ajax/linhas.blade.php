<script>


console.log('ok')
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('keyup', function(e){
    
    e.preventDefault()
    let search = $('#linhaSearch').val()
    let status = $('#statusLinha').val()
    if(search == ''){
        statusChange(status, search)
    }else{
    console.log(search)
    $.ajax({
        url: "{{ route('linhas.search') }}",
        method: 'get', 
        data: {search: search},
        success: function(res){
        console.log(res)
        $('#table-content').html(res)
            
            if(res.status !== undefined){
                toastr.info("Nenhuma linha encontrada.", "Erro!")
 
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
            console.log(JSON.stringify(e));
                    $('#passageiroStore input').val("")
        }
    })
}
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
    linhas(pagina)
})

function linhas(pagina){
    let search = $('#linhaSearch').val()
    let status = $('#statusLinha').val()
    $.ajax({
        url: "/linhas/results?page="+pagina,
        data: {search:search, statusLinha:status },
        success: function(res){
            $('#table-content').html(res)
            onLoadingDiv.style.display = "none"
            loadedDiv.style.display = "flex"
        }
    })
}


$(document).on('change', '#statusLinha', function(e){
    e.preventDefault()
    let search = $('#linhaSearch').val()
    let status = $('#statusLinha').val()
    console.log('mudou')
    statusChange(status, search)
    
})

const statusChange = async(status, search) =>{
    
    await $.ajax({
        url: "{{ route('linhas.search') }}",
        data: {search:search, statusLinha:status},
        success: response => {
            $('#table-content').html(response)
            onLoadingDiv.style.display = "none"
            loadedDiv.style.display = "flex"
        }
    })
    
}

$(document).on('submit', '#linhaForm', function(e){
    e.preventDefault()
    console.log('foase')
    let nomeLinha = $('#nomeLinha').val()
    let numLinha = $('#NumLinha').val()
    let qtd = $('#qtdCarroLinha').val()
    
    modal.close()
    
    $.ajax({
        url: "{{ route('linhas.store') }}",
        method: 'post',
        data: {
            nomeLinha: nomeLinha,
            numLinha: numLinha,
            qtdCarroLinha: qtd
        },
        success:  response =>{
            
            toastr.success("Nova Linha Adicionada.", "Sucesso!")

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
            
        },
        error: e =>{
            console.log(JSON.stringify(e));
                    $('#passageiroStore input').val("")
        }
    })
})


</script>