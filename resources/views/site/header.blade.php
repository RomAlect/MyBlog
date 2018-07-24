<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-main">
    <a class="navbar-brand" href="{{route('home')}}"><i class="fa fa-home" style="font-size:30px"></i></a>
    @if(isset($article))
    <a class="navbar-brand" style="font-size:18px" href="{{ route('home',['tab' => $article->category]) }}"><i class="fa fa-chevron-left"></i> Назад</a>
    @endif
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsButton" 
            aria-controls="navbarsButton" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsButton" style="">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about',['what' => 'Blog']) }}">О блоге</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about',['what' => 'Author']) }}">Об авторе</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
            </li>
        </ul>
    </div>
</nav>