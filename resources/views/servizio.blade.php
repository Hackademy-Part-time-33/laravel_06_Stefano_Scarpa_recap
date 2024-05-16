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
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input class="form-control rounded-5" type="text" name="fullname" value="{{old('fullname')}}"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input class="form-control rounded-5" type="text" name="phone" value="{{old('phone')}}"/>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control rounded-5" type="email" name="email" value="{{old('email')}}"/>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Messaggio</label>
                            <textarea class="form-control" type="text" name="message" placeholder="Scrivi qui il tuo messaggio..." style="height: 10rem;">{{old('message')}}</textarea>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg rounded-5">Invia</button>
                        </div>
                        
                    </form>

            </div>
            
            <div class="col-12 col-md-3"></div>
        </div>
    </div>

</x-main>