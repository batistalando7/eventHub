<div class="row">

    {{-- Comentários Relacionados a uma Notícia --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Notícias Publicadas</label>
        <select class="form-control" name="news_id" data-select2-selector="news">
            <option value="">-- Selecione uma notícia --</option>
            @foreach ($news as $news)
                <option value="{{ $news->id }}"
                    {{ old('category_id', $comment->news_id ?? '') == $news->id ? 'selected' : '' }}>
                    {{ $news->title }}
                </option>
            @endforeach
        </select>
    </div>
    {{-- Fim de comentarios relacionados a uma noticia --}}

    {{-- Autores relacionados a um Comentários --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Autor do Comentário</label>
        <select class="form-control" name="user_id" {{-- data-select2-selector="user" --}}>
            <option value="">-- Selecione o autor --</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}"
                    {{ old('category_id', $comment->user_id ?? '') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
    </div>
    {{-- Fim Autores relacionados a um Comentários --}}

    {{-- Texto do Comentário --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Texto do Comentário</label>
        <input type="text" name="text_comment" class="form-control"
            value="{{ old('text_comment', $comment->text_comment ?? '') }}" placeholder="Ex: Será que é verdade...">
    </div>

    {{-- <div class="col-lg-4 mb-4">
        <label class="form-label">Data de Publicação</label>
        <input type="date" name="date" class="form-control"
            value="{{ old('date', $comment->date ?? date('Y-m-d')) }}">
    </div> --}}

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-danger"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
