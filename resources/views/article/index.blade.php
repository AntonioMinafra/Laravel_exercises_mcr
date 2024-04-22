<x-layout>
    <header class="masthead1 text-dark">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="fw-light display-1">I miei articoli</h1>
              <p class="lead"></p>
            </div>
          </div>
        </div>
      </header>

    <div class="container mt-4">
        <div class="row">
            @foreach($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->name}}</h5>
                      <p class="card-subtitle">{{$article->subtitle}}</p>
                      <p class="card-text">{{$article->body}}</p>
                      <a href="{{route('article.show', compact('article'))}}" class="btn btn_custom">Dettaglio articolo</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>