<script>


console.log('ok')
$(document).on('keyup', '#pedidoBilhetes', function(e) {
    e.preventDefault();
    let search = $(this).val();
    console.log(search);
    
    $.ajax({
        url: "{{ route('pedidoBilhete.search') }}",
        method: 'get',
        data: { search: search },
        success: function(res) {
            console.log(res);
            if (res.status !== undefined) {
                toastr.info("Nenhum pedido encontrado.", "Erro!");
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
            } else {
                $('#table-content').html(res.html);
            }
        },
        error: function(e) {
            console.log(e.responseJSON);
            toastr.error("Erro na solicitação.", "Erro!");
        }
    });
});

</script>