<div class="card mx-auto my-3 card-custom">
    <div class="card-body d-flex flex-column align-items-center flex-wrap">
        <img src="{{Storage::url($article->img)}}" alt="Immagine dell'articolo" class="card-img-top img-fluid custom-d">
        <h4 class="card-title text-center mt-auto">{{$article->title}}</h4>
        <h6 class="card-subtitle mb-2 text-body-secondary text-center">{{$article->description}}</h6>
        <p class="card-text text-center mb-auto">{{$article->price}}€</p>
        <button type="button" class="btn btn-success">Aggiungi al carrello</button>
    </div>
</div>