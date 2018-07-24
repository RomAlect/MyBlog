<div class="abstract-box text-justify">
    <a href="{{ route('article',['id'=> $article->id]) }}"><h4>{{ $article->title }}</h4></a>

    <div class="row">
        <div class="col-8">
            <div class="font-weight-bold" style="color:#7C8598">
                {{ $article->author }} | {{ $article->published_at }}
            </div>
            <div class="mt-3">
                {{ $article->abstract_text }}
            </div>
            
            <div class="d-flex flex-row-reverse">
                <a class="btn btn-read mt-3" href="{{ route('article',['id'=> $article->id]) }}">Читать <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
        <div class="col-4 pt-5">
            <img src="{{ asset('articles/' . $article->id . '/' . $article->abstract_img) }}" alt="abstract" width="250">
        </div>
    </div>
</div>