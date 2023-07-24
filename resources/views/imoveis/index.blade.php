@extends('layouts.app')

@section('content')
    <div class="mt-5">
        <h2>Lista de Imóveis</h2>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Endereço</th>
                    <th>Cliente</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($imoveis as $imovel)
                    <tr>
                        <td>{{ $imovel->descricao }}</td>
                        <td>{{ $imovel->endereco }}</td>
                        <td>
                            @if($imovel->cliente)
                                {{ $imovel->cliente->nome }}
                            @else
                                Sem Cliente
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('imoveis.edit', $imovel->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('imoveis.destroy', $imovel->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
