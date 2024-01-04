<link rel="stylesheet" href="{{ URL::asset('css/modalPassageiro.css') }}">

<dialog class="p-0" style="height: 60vh; width: 75vw" id="modalPassageiro">
    <div class="h-100 w-100">
        <div class="d-flex justify-content-end px-2 py-2 ">
                    
            <button id="bt-closePassageiro" type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
    <div class="d-flex justify-content-end mt-xl-5 mb-xl-3">
        <button type="button" id="bt-cancelarPassageiro" class="btn btnCss fw-bold w-25">Cancelar</button>
        <button type="button" class="btn btnCss fw-bold w-25 ms-5">Enviar</button>
    </div>
    </div>
</div>
</div>

</dialog>

<script src="{{ URL::asset('js/modalPassageiro.js') }}"></script>
