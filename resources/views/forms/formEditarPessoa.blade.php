<div class="card">

    <div class="container col-md-12" style="margin-top: 10%">

        <div class="form-group col-md-12">
            @if($errors->all())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <form class="form-horizontal" method="post" action="{{route('pessoas.update', $pessoa->id)}}">
            @csrf
            @method('put')

            <label class="control-label">Editar</label>

            {{-- formulario pessoas --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Id</label>
                    <div class="input-group">
                        <input type="text" class="form-control" disabled required id="id" name="id" placeholder="Id"
                            value="{{ $pessoa->id }}">
                    </div>
                </div>
            </div>

            {{-- formulario pessoas --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Nome</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required id="nome" name="nome" placeholder="Nome"
                            value="{{ $pessoa->nome }}">
                    </div>
                </div>
            </div>

            {{-- formulario periodo --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Periodo</label>
                    <div class="input-group">
                        <select id="periodo" name="periodo" required class="form-control col-md-12">
                            <option selected value="{{ $pessoa->periodo }}">{{ $pessoa->periodo }}</option>
                            <option value="Contínuo">Contínuo</option>
                            <option value="5 Dias">5 Dias</option>
                            <option value="7 Dias">7 Dias</option>
                            <option value="10 Dias">10 Dias</option>
                            <option value="12 Dias">12 Dias</option>
                            <option value="15 Dias">15 Dias</option>
                            <option value="20 Dias">20 Dias</option>
                            <option value="25 Dias">25 Dias</option>
                            <option value="30 Dias">30 Dias</option>
                        </select>
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
