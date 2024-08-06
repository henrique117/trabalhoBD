@extends('templates.template')

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons button {
            margin-right: 5px;
        }
    </style>
    <h2>Tabela de Atletas</h2>
    <button class="action-buttons" style="margin-bottom: 15px">Criar novo registro</button>

    <table>
        <thead>
            <tr>
                <th>ID Atleta</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Peso</th>
                <th>Nacionalidade</th>
                <th>Altura</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($atleta as $atletas)
                <tr>
                    <td>{{$atletas->idAtleta}}</td>
                    <td>{{$atletas->nomeAtleta}}</td>
                    <td>{{$atletas->sexo}}</td>
                    <td>{{$atletas->peso}}</td>
                    <td>{{$atletas->nacionalidade}}</td>
                    <td>{{$atletas->altura}}</td>
                    <td>{{$atletas->dataNasc}}</td>
                    <td class="action-buttons">
                        <button>Editar</button>
                        <button>Apagar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection