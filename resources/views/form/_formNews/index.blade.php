<div class="row">

    {{-- author da Evento --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Autor</label>
        <input type="text" name="author" class="form-control" value="{{ old('author', $news->author ?? '') }}"
            placeholder="Ex: Assessorarte">
    </div>

    {{-- Titlo --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Titlo</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $news->title ?? '') }}"
            placeholder="Ex: INFOSI recebe novos estagiarios">
    </div>

    {{-- Subtitlo --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Subtitlo</label>
        <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $news->subtitle ?? '') }}"
            placeholder="Ex: Estão a desenvolver um projeto">
    </div>
   
    {{-- Endereço --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Endereço</label>
        <input type="text" name="address" class="form-control" value="{{ old('address', $news->address ?? '') }}"
            >
    </div>

    {{-- Name of Tag --}}
    {{-- <div class="col-lg-4 mb-4">
        <label class="form-label">Tags</label>
        <select class="form-control" name="tags[]">
            <option value="">-- Selecione uma categoria --</option>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}"
                    {{ isset($news) && $news->tags->contains($tag->id) ? 'selected' : '' }}>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
    </div> --}}

    {{-- Categoria --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Categoria da Evento</label>
        <select class="form-control" name="category_id" data-select2-selector="category">
            <option value="">-- Selecione uma categoria --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id', $news->category_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Autor --}}
    @can('is-editor')
        {{-- Destaque --}}
        <div class="col-lg-4 mb-4">
            <label class="form-label">Destaque</label>
            <select class="form-control" name="detach">
                <option value="{{ old('', $news->detach ?? '') }}" selected>
                    {{ $news->detach ?? 'Selecione' }}
                </option>
                <option value="normal">Normal</option>
                <option value="destaque">Destaque</option>
            </select>
        </div>

        {{-- Status --}}
        <div class="col-lg-4 mb-4">
            <label class="form-label">Status</label>
            <select class="form-control" name="status" data-select2-selector="status">
                <option value="{{ old('', $news->status ?? '') }}" selected>
                    {{ $news->status ?? 'Selecione' }}
                </option>
                <option value="rascunho" data-bg="bg-danger"> Rascunho</option>
                <option value="publicado" data-bg="bg-success"> Publicado</option>
                <option value="arquivado" data-bg="bg-warning"> Arquivado</option>
            </select>
        </div>
    @endcan

    {{-- Date --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Data</label>
        <input type="date" name="date" class="form-control"
            value="{{ old('date', $news->date ?? date('Y-m-d')) }}">
    </div>

    {{-- Image --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Imagem da Evento</label>
        <input type="file" name="image" class="form-control" accept="image/*">
        <small class="text-muted">Formatos suportados: jpg, jpeg, png, gif</small>
    </div>

    {{-- Descrição --}}
    <div class="col-12 mb-4">
        <label class="form-label">Texto</label>
        <textarea name="description" id="editor" rows="4">{{ old('description', $news->description ?? '') }}</textarea>
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
