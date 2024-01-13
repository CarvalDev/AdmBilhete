@component('mail::message')
    
# Olá {{$nome}}, em relação ao pedido de suporte {{$idSuporte}}

- Categoria: {{$tema}}
- {{$msgUsuario}}

{{$mensagem }}
@endcomponent