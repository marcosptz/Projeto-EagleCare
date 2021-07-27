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

        <form class="form-horizontal" id="form" method="post" action="{{ route('horario.consulta') }}">
            @csrf

            {{-- formulario consulta --}}

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nome" class="control-label">Consulta</label>
                    <div class="input-group">
                        <select class="form-control col-md-3" required name="campo1" id="campo1">
                            <option value="">Escolha o campo de pesquisa</option>
                            <option value="horario">Horário</option>
                            <option value="remedio">Remédio</option>
                            <option value="dosagem">Dosagem</option>
                            <option value="valor">Valor</option>
                        </select>
                        <input type="text" class="form-control col-md-2" required id="consulta" name="consulta" placeholder="Pesquisa"
                            value="">
                        <select class="form-control col-md-4" name="campo2" id="campo2">
                            <option value="">Campo de consulta *(opcional)</option>
                            <option value="horario">Horário</option>
                            <option value="remedio">Remédio</option>
                            <option value="dosagem">Dosagem</option>
                            <option value="valor">Valor</option>
                        </select>
                        <select class="form-control col-md-4" name="campo3" id="campo3">
                            <option value="">Campo de consulta *(opcional)</option>
                            <option value="horario">Horário</option>
                            <option value="remedio">Remédio</option>
                            <option value="dosagem">Dosagem</option>
                            <option value="valor">Valor</option>
                        </select>
                        <select class="form-control col-md-4" name="campo4" id="campo4">
                            <option value="">Campo de consulta *(opcional)</option>
                            <option value="horario">Horário</option>
                            <option value="remedio">Remédio</option>
                            <option value="dosagem">Dosagem</option>
                            <option value="valor">Valor</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- btn salvar --}}

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-secondary btn-sm">Buscar</button>
                <button type="reset" class="btn btn-outline-primary btn-sm">Cancelar</button>
            </div>
        </form>

        <form class="form-horizontal" id="form" method="post" action="{{ route('horario.pesquisa') }}">
            @csrf

            {{-- formulario consulta --}}

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome" class="control-label">Consulta</label>
                    <div class="input-group">
                        <select class="form-control col-md-5" required name="campo" id="campo">
                            <option value="">Escolha o campo de consulta</option>
                            <option value="horario">Horário</option>
                            <option value="remedio">Remédio</option>
                            <option value="dosagem">Dosagem</option>
                            <option value="valor">Valor</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- btn salvar --}}

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-secondary btn-sm">Buscar</button>
                <button type="reset" class="btn btn-outline-primary btn-sm">Cancelar</button>
            </div>
        </form>
    </div><br><br>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(function(){
                $('#consulta').keyup(function(){
                    var consulta = $(this).val();

                    if (consulta != '') {
                        var dados = {
                            palavra : consulta
                        }
                        $.post('{{ route('horario.show')}}', dados, function(retorna){
                            $('.resultado').html(retorna);
                        });
                    }
                });
            });
        </script>




