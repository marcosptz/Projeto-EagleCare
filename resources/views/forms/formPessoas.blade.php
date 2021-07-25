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

        <form class="form-horizontal" method="post" action="{{route('pessoas.store')}}">
            @csrf

            <label class="control-label">Cadastro de Pessoas</label>

            {{-- formulario pessoas --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Nome</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required id="nome" name="nome" placeholder="Nome"
                            value="">
                    </div>
                </div>
            </div>

            {{-- formulario periodo --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Periodo</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required id="periodo" name="periodo" placeholder="Periodo"
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
    </div><br><br><br><br>
