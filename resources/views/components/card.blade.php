<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class="card-text">{{$product->price}}</p>
      <a href="{{route('product.show', compact('product'))}}" class="btn btn_custom">Vai al dettaglio</a>
    </div>
  </div>