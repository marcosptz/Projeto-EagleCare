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
                        {{-- <input type="number" class="form-control" required id="pessoa_id" name="pessoa_id" placeholder="Periodo"
                            value=""> --}}
                        <select class="form-control" required name="pessoa_id" id="pessoa_id">
                            <option value="1">Selecione a pessoa</option>
                            @foreach ($pessoas as $pessoa)
                                <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            {{-- formulario remedio --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Remédio</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required id="remedio" name="remedio" placeholder="Remédio"
                            value="">
                    </div>
                </div>
            </div>

            {{-- formulario dosagem --}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome" class="control-label">Dosagem</label>
                    <div class="input-group">
                        <input type="text" class="form-control" required id="dosagem" name="dosagem" placeholder="Dosagem"
                            value="">
                    </div>
                </div>
            </div>

            {{-- formulario valor --}}

            <label for="nome" class="control-label">Preço</label>
            <div class="form-row">
                <div class="input-group mb-3 col-md-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" class="form-control" required id="valor" name="valor" aria-label="Quantia" placeholder="Ex: 10.00">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
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
