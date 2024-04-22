<x-layout>
    <header class="masthead text-dark">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="fw-light display-4">Inserisci il nuovo prodotto</h1>
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
                <form class=" p-3 shadow rounded bg-secondary-subtle" enctype="multipart/form-data" method="POST" action="{{route('product.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del prodotto</label>
                        <input name="name" value="{{old('name')}}" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del prodotto</label>
                        <textarea name="description"  class="form-control" id="description" cols="30" rows="">{{old('description')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto</label>
                        <input name="price" value="{{old('price')}}" type="text" class="form-control" id="price" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input name="img" type="file" class="form-control" id="img" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn_custom">Crea prodotto</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>