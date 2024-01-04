<link rel="stylesheet" href="{{ URL::asset('css/modalCatraca.css') }}">

<dialog class="p-0" style="height: 45vh; width: 30vw" id="modal">
    <div class="h-100 w-100">
        <div class="d-flex justify-content-between px-2 py-2 ">
            <div class="text-center" style="width:30%;">
                <p class="p-0 m-0 fw-bold text-secondary">Cadastro de Catracas</p>
                </div>        
            <button id="bt-close" type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <hr style="border: 0.1px solid gray" class="my-3">
        <div class="w-100 h-75 d-flex justify-content-center aling-itens-center">
        <div class="w-75">
            <div class="mt-xl-5">
                <textarea class="form-control text-area border border-dark rounded-4" id="exampleFormControlTextarea1" rows="1" placeholder="Nº da linha"></textarea>
            </div>
        <div class="mt-xl-5">
            <textarea class="form-control text-area border border-dark rounded-4" id="exampleFormControlTextarea1" rows="1" placeholder="Nome da linha"></textarea>
        </div>
    <div class="d-flex justify-content-between mt-xl-5">
        <button type="button" id="bt-close1" class="btn btnCss fw-bold" style="width: 35%">Cancelar</button>
        <button type="button" class="btn btnCss fw-bold" style="width: 35%">Enviar</button>
    </div>
    </div>
</div>
</div>

</dialog>


