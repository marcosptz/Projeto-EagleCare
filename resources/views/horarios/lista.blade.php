@extends('layouts.master')
@section('title','EagleCare')
@section('content')

<div class="card" style="margin-top: 50px">
    <div class="card-header">
        <h4 class="col-12 modal-title text-center">Lista de Horarios</h5>
    </div>
    <h6 class="col-12 modal-title text-center"></h6>
    <div class="container col-md-12">

        <div class="form-group col-md-12">
            @if($errors->all())
                @foreach($errors->all() as $error)
                    <div class="alert alert-success" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <div class="container-fluid no-padding table-responsive-sm">
            <table class="table table-striped nowrap" style="width:100%" id="exemplo">
                <thead align="center">
                    <tr>
                        <th>Nº do Horário</th>
                        <th>Horário</th>
                        <th>Pessoa</th>
                        <th>Remédio</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach ($horarios as $horario)
                    <tr>
                        <td>{{$horario->id}}</td>
                        <td>{{$horario->horario}}</td>
                        <td>{{$horario->pessoas_id}}</td>
                        <td>{{$horario->remedio_id}}</td>
                        <td>
                            <a href="" type="button"
                                class="btn btn-outline-secondary btn-sm">Editar</a>
                            <a href="" type="button"
                                class="btn btn-outline-secondary btn-sm">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
    $('#exemplo').DataTable({
        select: false,
        responsive: true,
        "order": [
            [0, "asc"]
        ],
        "info": false,
        "sLengthMenu": false,
        "bLengthChange": false,
        "oLanguage": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de START até END de TOTAL registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de MAX registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "MENU resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
});
</script>
@endsection
