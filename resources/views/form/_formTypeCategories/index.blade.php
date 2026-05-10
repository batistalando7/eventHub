<div class="row">
    {{-- Category --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Categoria</label>
        <select class="form-control" name="category_id" data-select2-selector="category">
            <option value="">-- Selecione uma categoria --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $category->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Subcategoria --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Subcategoria</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $typeCategory->name ?? '') }}"
            placeholder="Ex: Notícia, Eventos...">
    </div>

    {{-- Descrição - descrevendo sobre o que se trata --}}
    <div class="col-12 mb-4">
        <label class="form-label">Descrição</label>
        <textarea name="description" class="form-control" rows="4" placeholder="Escreve uma descrição...">{{ old('description', $category->description ?? '') }}</textarea>
    </div>

    {{-- Botão de atualizar as alterações --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
