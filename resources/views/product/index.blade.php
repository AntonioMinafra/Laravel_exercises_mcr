<x-layout>
    <header class="masthead1 text-dark">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="fw-light display-1">I nostri prodotti</h1>
              <p class="lead"></p>
            </div>
          </div>
        </div>
      </header>

    <div class="container mt-4">
        <div class="row">
            @foreach($products as $product)
            <div class="col-12 col-md-3">
                <x-card
                :product="$product"
                />
            </div>
            @endforeach
        </div>
    </div>

</x-layout>