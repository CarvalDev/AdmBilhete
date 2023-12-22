<link rel="stylesheet" href="{{ URL::asset('css/modal.css') }}">

<dialog class="p-0" style="height: 60vh; width: 30vw" id="modal">
    <div class="h-100 w-100">
        <div class="d-flex justify-content-between px-2 py-2 ">
            <div class="w-25 text-center ">
                <p class="p-0 m-0 ">Nome do usuario</p>
                <p class="p-0 m-0 text-secondary">CPF</p>
                </div>        
            <button id="bt-close" type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <hr style="border: 0.1px solid gray" class="my-3">
        <div class="w-100 h-75 d-flex justify-content-center aling-itens-center">
        <div class="w-75">
        <div class="border border-dark rounded-4 my-xl-5 mt-xl-3" style="height: 20vh;">
            <p class=" p-xl-5"></p>
        </div>
        <div class="mt-xl-3">
            <textarea class="form-control text-area border border-dark rounded-4" id="exampleFormControlTextarea1" rows="3" placeholder="Responda aqui"></textarea>
        </div>
    <div class="d-flex justify-content-between mt-xl-4">
        <button type="button" id="bt-close1" class="btn btnCss fw-bold" style="width: 35%">Cancelar</button>
        <button type="button" class="btn btnCss fw-bold" style="width: 35%">Enviar</button>
    </div>
    </div>
</div>
</div>

</dialog>

<script src="{{ URL::asset('js/modal.js') }}"></script>
