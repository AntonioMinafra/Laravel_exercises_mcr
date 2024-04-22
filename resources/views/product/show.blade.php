<x-layout>
    <header class="masthead1 text-dark">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="fw-light display-1">{{$product->name}}</h1>
              <p class="lead"></p>
            </div>
          </div>
        </div>
      </header>

      <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <div class="row py-5 align-items-center justify-content-center">
                <div class="col-12 col-md-6">
                    <p class="col-md-8 mx-5 fs-4">{{$product->description}}</p>
                    <p class="col-md-8 mx-5 fs-4">{{$product->price}}</p>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{Storage::url($product->img)}}" class=" w-50 h-50 " alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center ">
                    <a href="{{route('product.index')}}">
                        <button class="btn btn_custom btn-lg" type="button">Ritorna agli articoli</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layout>