
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
 
});
    let onLoadingDiv = document.querySelector('.onLoadingDiv')
    let loadedDiv = document.querySelector('.loadedDiv')
    onLoadingDiv.style.display = "flex"
    loadedDiv.style.display = "none"

    const loading =() => {
        setTimeout(() => {
            
            onLoadingDiv.style.display = "none"
            loadedDiv.style.display = "flex"
            loadedDiv.style.opacity = 1
            console.log("foi")
        }, 300);
    }
</script>