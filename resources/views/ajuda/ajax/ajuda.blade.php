<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    function fetchAjudas() {
        let status = $('#statusAjuda').val();
        let search = $('#ajudaSearch').val();
        console.log('Search:', search, 'Status:', status); // Depuração

        $.ajax({
            url: "{{ route('ajuda.status.get') }}",
            method: 'POST',
            data: {
                statusAjuda: status,
                ajudaSearch: search,
                _token: '{{ csrf_token() }}' // Inclui o token CSRF
            },
            success: function(response) {
                $('#table-content').html(response.html); // Atualize o conteúdo da tabela com o HTML retornado

                if (response.status == 'nada_encontrado') {
                    toastr.info("Nenhuma dúvida encontrada.", "Erro!");

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
                    };
                }
            },
            error: function(err) {
                console.error(err); // Exibe erros no console para depuração
            }
        });
    }

    // Evento keyup para o campo de pesquisa
    $(document).on('keyup', '#ajudaSearch', function(e) {
        e.preventDefault();
        fetchAjudas(); // Chama a função de requisição AJAX
    });

    // Evento change para o seletor de status
    $(document).on('change', '#statusAjuda', function(e) {
        e.preventDefault();
        fetchAjudas(); // Chama a função de requisição AJAX
    });
});



    $('#ajudaStore').submit(function(e){
        e.preventDefault();
        let formData = new FormData(this);

        
        $.ajax({
            url:"{{route('ajuda.store')}}",
            method: 'POST',
            data: formData,
            contentType:false,
            processData: false,

            success:(response) =>{
                toastr.success("Ajuda cadastrada.", "Sucesso!")
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
                    console.log(response)
                    $('#ajudaStore input, textarea').val("")
            }, error: function(err){
                let error = err.responseJSON
            $.each(error.errors, function(index, value){
                // $('.errors').append('<span class="text-danger m-auto">' + value + '</span>')
                toastr.error(value, index, "Erro")
            })
    }})
    
    })
</script>