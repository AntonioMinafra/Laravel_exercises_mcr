<x-layout>
    <header class="masthead text-dark">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="fw-light display-4">Inserisci il nuovo articolo</h1>
                </div>
            </div>
        </div>
    </header>
    {{-- condizione per il prondotto creato con successo --}}
    <x-display-message/>

    {{-- CODICE PER MOSTRARE L ERRORE DI NON AVER SCRITTO NEL CAMPO DEL FORM --}}
    <x-display-errors/>

    {{-- FORM DEI PRODOTTI --}}
    <div class="container">
        <div class="row justify-content-center my-5 ">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <form class=" p-3 shadow rounded bg-secondary-subtle" enctype="multipart/form-data" method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo articolo</label>
                        <input name="title" value="{{old('title')}}" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                        <input name="subtitle" type="text" value="{{old('subtitle')}}" class="form-control" id="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" type="text" class="form-control" id="body" cols="30" rows="10">{{old('body')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn_custom">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>