<div class="card">

    <div class="container col-md-12" style="margin-top: 10%">

        <div class="form-group col-md-12">
                @if($errors->all())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-success" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
            </div>

        <form class="form-horizontal" method="post" action="{{route('horario.store')}}">
            @csrf

            <label class="control-label">Cadastro de Horários</label>

            {{-- formulario horario --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Horário</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required id="horario" name="horario" placeholder="Horário"
                            value="">
                    </div>
                </div>
            </div>

            {{-- formulario pessoa_id --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Id da Pessoas</label>
                    <div class="input-group">
                        <input type="number" class="form-control" required id="pessoa_id" name="pessoa_id" placeholder="Periodo"
                            value="">
                    </div>
                </div>
            </div>

            {{-- formulario remedio --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Id da Remédio</label>
                    <div class="input-group">
                        <input type="number" class="form-control" required id="remedio_id" name="remedio_id" placeholder="Remédio"
                            value="">
                    </div>
                </div>
            </div>

            {{-- btn salvar --}}

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-secondary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-outline-primary btn-sm">Cancelar</button>
            </div>
        </form>
    </div><br><br>
