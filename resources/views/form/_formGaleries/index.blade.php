<div class="row">

    {{-- galery --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Título</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $galery->title ?? '') }}"
            placeholder="Ex: INFOSI ou João Silva">
    </div>

    {{-- Image --}}
    {{-- Imagens --}}
<div class="col-lg-4 mb-4">
    <label class="form-label">Imagens</label>
    <input type="file" name="image[]" class="form-control" multiple>
    <small class="text-muted">Pode selecionar mais de uma imagem (jpg, jpeg, png, gif)</small>
</div>

    {{-- description --}}
    <div class="col-12 mb-4">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control" rows="4" placeholder="Escreve a sua descrição...">{{ old('description', $galery->description ?? '') }}</textarea>
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
