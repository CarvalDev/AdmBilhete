<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
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