<div class="row">
    {{-- Campo dos Nomes das categorias --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Nome da Categoria</label>
        <input type="text" name="name" class="form-control" value="{{ old('nome', $category->name ?? '') }}"
            placeholder="Ex: Política, Desporto...">
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
