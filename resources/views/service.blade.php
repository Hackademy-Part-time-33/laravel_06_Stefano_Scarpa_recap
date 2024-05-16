<x-main>
    <div style="height: 80px;"></div>
    <div class="container">
        <h1 class="text-center fw-bold my-5">I nostri servizi</h1>
        <div class="row">
    
          @foreach ($servizi as $element)  
    
          <div class="col-12 col-md-3">
            <a class="text-decoration-none" href="{{route('servizio', ['dettaglio' => $element['uri']])}}">
    
              <div class="card" style="width: 18rem;">
                <img src="{{ $element['img'] }}" class="card-img-top" alt="img-card">
                <div class="card-body">
                  <p class="card-text fw-semibold text-center">{{$element['name']}}</p>
                </div>
              </div>
            </a>
          </div>
    
          @endforeach
    
        </div>
      </div>

</x-main>