@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h2>Cadastrar novo Imóvel</h2>

    <form action="/imoveis" method="post">
        @csrf

        <div class="form-group mt-3">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" class="form-control">
        </div>

        <!-- Campo de seleção de clientes -->
        <div class="form-group mt-3">
            <label for="cliente_id">Cliente</label>
            <select id="cliente_id" name="cliente_id" class="form-control">
                <option value="">Sem Cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->IdClientes }}" {{ old('cliente_id') == $cliente->IdClientes ? 'selected' : '' }}>{{ $cliente->nome }}</option>
                @endforeach
            </select>                     
        </div>


        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
</div>
@endsection
