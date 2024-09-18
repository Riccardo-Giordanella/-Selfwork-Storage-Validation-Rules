<x-layout>
    <header class="container-fluid header-custom">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12 m-0 d-flex justify-content-center">
                <div class="rounded h1-back d-flex flex-column justify-content-center align-items-center">
                    <h1 class="display-1 text-center my-auto">Gli articoli della community</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="col-12 vh-100 my-1 d-flex justify-content-center" id="wrapper">
        @foreach($articles as $article)
        <div class="card mx-auto card-custom">
            <div class="card-body d-flex flex-column align-items-center flex-wrap">
                <img src="https://picsum.photos/200" alt="Immagine dell'articolo" class="img-fluid mb-2">
                <h4 class="card-title text-center">{{$article->title}}</h4>
                <h6 class="card-subtitle mb-2 text-body-secondary text-center">{{$article->description}}</h6>
                <p class="card-text text-center">{{$article->price}}€</p>
                <button type="button" class="btn btn-success">Aggiungi al carrello</button>
            </div>
        </div>
        @endforeach
    </section>
</x-layout>