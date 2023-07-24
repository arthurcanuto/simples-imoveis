@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h2>Cadastrar novo Cliente</h2>

    <form action="/clientes" method="post">
        @csrf

        <div class="form-group mt-3">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>
</div>
@endsection
