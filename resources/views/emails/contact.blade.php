<div class="width: 100%; height: 300px; background-color: #fafafa;">
    <h3>
        L'utente {{ $data['nome'] }} con mail {{ $data['indirizzo'] }} e numero {{ $data['telefono'] }} ti ha inviato un messaggio
    </h3>
</div>
<div class="width: 100%; height: 300px; background-color: #3f69ff; color: #fafafa;">
    <p>
        messaggio:

        {{ $data['messaggio'] }}  
    </p>
</div>