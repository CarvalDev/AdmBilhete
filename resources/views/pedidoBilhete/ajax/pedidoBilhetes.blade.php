<script>


console.log('ok')
$(document).on('keyup', '#pedidoBilheteSearch', function(e) {
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

$(document).on('click', '.pagination a', function(e){
    e.preventDefault()
     
    onLoadingDiv.style.display = "flex"
    loadedDiv.style.display = "none"
    let pagina = $(this).attr('href').split('page=')[1]
    console.log("Pao")
    console.log(pagina)
    pedidoBilhete(pagina)
})
function pedidoBilhete(pagina){
    console.log("cheguei na função")
    let search = $('#pedidoBilheteSearch').val()
    $.ajax({
        url: "/pedidoBilhete/results?page="+pagina,
        data: {search:search },
        success: function(res){
            console.log(res)
            $('#table-content').html(res.html)
            
            onLoadingDiv.style.display = "none"
            loadedDiv.style.display = "flex"
        }
    })
}


</script>