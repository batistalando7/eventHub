<div class="row">
    {{-- Nome --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Nome da Tag</label>
        <input type="text" name="name" class="form-control" value="{{ old('nome', $tag->name ?? '') }}"
            placeholder="Ex: COVID-19">
    </div>

    {{-- Descrição - descrevendo sobre o que se trata --}}
    <div class="col-12 mb-4">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control" rows="4" placeholder="Escreve uma descrição...">{{ old('description', $tag->description ?? '') }}</textarea>
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
