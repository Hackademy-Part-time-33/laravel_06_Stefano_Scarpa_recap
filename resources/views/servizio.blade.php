<x-main>
    <div class="container-fluid my-5 py-5 bg-custom">
        <div class="row mt-5">
            <div class="col-12"> 
                <h1 class="text-center fw-light">Servizio - {{ $detail }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3"></div>

            <div class="col-12 col-md-6">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('send') }}" method="POST">
                        @csrf
                        <div class="mb-4 shadow rounded-5">
                            <input class="form-control border-0" type="text" name="fullname" placeholder="Nome" value="{{old('fullname')}}"/>
                        </div>
                        <div class="mb-4 shadow rounded-5">
                            <input class="form-control border-0" type="text" name="phone" placeholder="Telefono" value="{{old('phone')}}"/>
                        </div>
                        <div class="mb-4 shadow rounded-5">
                            <input class="form-control border-0" type="email" name="email" placeholder="E-mail" value="{{old('email')}}"/>
                        </div>
                        
                        <div class="mb-4 shadow rounded-3">
                            <textarea class="form-control border-0" type="text" name="message" placeholder="Scrivi qui il tuo messaggio..." style="height: 5rem;">{{old('message')}}</textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg rounded-5 shadow">Invia</button>
                        </div>
                        
                    </form>

            </div>
            
            <div class="col-12 col-md-3"></div>
        </div>
    </div>

</x-main>