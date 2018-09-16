<div class="jumbotron">
    <h2>{{$mainTitle}}</h2>
    <hr>
    <div class="row">
        <div class="col-sm">
            <div class="form-group">
                <label for="data">Data:</label>
                {!! Form::date('data', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                {!! Form::text('cidade', null, ['placeholder'=>'Cidade','class'=>'form-control']) !!}
            </div>
        </div>

        @if($type == 'update')
        <input type="hidden" id="db_estado" value="{{ $evento->estado }}">
        @endif

        <div class="col-sm">
            <div class="form-group">
                <label for="estado">Estados:</label>
                <select class="selectpicker form-control" name="estado" id="estado" data-style="btn-select">
                    <option value="Acre">Acre</option>
                	<option value="Alagoas">Alagoas</option>
                	<option value="Amapá">Amapá</option>
                	<option value="Amazonas">Amazonas</option>
                	<option value="Bahia">Bahia</option>
                	<option value="Ceará">Ceará</option>
                	<option value="Distrito Federal">Distrito Federal</option>
                	<option value="Espírito Santo">Espírito Santo</option>
                	<option value="Goiás">Goiás</option>
                	<option value="Maranhão">Maranhão</option>
                	<option value="Mato Grosso">Mato Grosso</option>
                	<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                	<option value="Minas Gerais">Minas Gerais</option>
                	<option value="Pará">Pará</option>
                	<option value="Paraíba">Paraíba</option>
                	<option value="Paraná">Paraná</option>
                	<option value="Pernambuco">Pernambuco</option>
                	<option value="Piauí">Piauí</option>
                	<option value="Rio de Janeiro">Rio de Janeiro</option>
                	<option value="Rio Grande do Norte">Rio Grande do Norte</option>
                	<option value="Rio Grande do Sul">Rio Grande do Sul</option>
                	<option value="Rondônia">Rondônia</option>
                	<option value="Roraima">Roraima</option>
                	<option value="Santa Catarin">Santa Catarina</option>
                	<option value="São Paulo">São Paulo</option>
                	<option value="Sergipe">Sergipe</option>
                	<option value="Tocantins">Tocantins</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row float-right">
        <div class="col">
            <a class="btn btn-sm btn-secondary" href="{{ route('eventos.index') }}"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a>&nbsp;
            <button type="submit" class="btn btn-sm btn-secondary" name="button"><i class="fas fa-paper-plane"></i>&nbsp;Salvar</button>
        </div>
    </div>
</div>
@if($type == 'update')
<script>
    window.onload = function(){
        document.getElementById('estado').value = document.getElementById('db_estado').value;
    };
</script>
@endif
