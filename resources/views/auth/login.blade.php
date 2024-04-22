<x-layout>

    <header class="masthead1 text-dark">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
              <h1 class="fw-light display-1">Accedi</h1>
              <p class="lead"></p>
            </div>
          </div>
        </div>
      </header>

      <x-display-errors/>

      <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6">
                <form class="p-3 shadow rounded bg-secondary-subtle" method="post" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">email</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="password_confirmation" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn_custom">Accedi</button>
                  </form>
            </div>
        </div>
      </div>





</x-layout>