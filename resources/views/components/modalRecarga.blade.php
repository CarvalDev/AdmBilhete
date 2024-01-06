<link rel="stylesheet" href="{{ URL::asset('css/modalReajuste.css') }}">

<dialog class="p-0" style="height: 35vh; width: 30vw" id="modal">
    <div class="h-100 w-100">
        <div class="d-flex justify-content-between px-2 py-2 ">
            <div class="text-center" style="width:30%;">
                <p class="p-0 m-0 fw-bold text-secondary">Alterar Passagens</p>
                </div>        
            <button id="bt-close" type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <hr style="border: 0.1px solid gray" class="my-2    ">
        <div class="w-100 h-75 d-flex justify-content-center aling-itens-center">
        <div class="w-75">
            <div class="mt-xl-5">
                <div class="d-flex gap-2"><strong class="fs-5">Total de recargas:</strong><p class="fw-bold fs-5">2</p>
                </div>
                <form action="" method="POST">
                <input type="text" name="reajuste" class="form-control text-area border border-dark rounded-4" placeholder="ALterar Recarga"/>
                </form>
            </div>
    <div class="d-flex justify-content-end mt-xl-5 mb-xl-3">
        <button type="button" id="bt-close1" class="btn btnCss fw-bold w-25">Cancelar</button>
        <button type="button" class="btn btnCss fw-bold w-25 ms-5">Enviar</button>
    </div>
    </div>
</div>
</div>

</dialog>

<script src="{{ URL::asset('js/modalReajuste.js') }}"></script>
