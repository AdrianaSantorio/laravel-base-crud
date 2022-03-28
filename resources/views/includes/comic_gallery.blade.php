<section class="series-gallery">
    <div class="container">
        {{-- LABEL --}}
        <div class="label">
            <span>current series</span>
        </div>
        <ul>
            @forelse ($comics as $comic)
            <li>
                <a href="{{ route("comics.show", $comic->id)}}">
                    {{-- CARD --}}
                    <div class="card">
                        <figure>
                            {{-- card figure --}}
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                            {{-- card text --}}
                            <figcaption>{{$comic->series}}</figcaption>
                        </figure>
                    </div>
                </a>
            </li>
            @empty
            <li>
                <h2>Non ci sono nuove uscite disponibili!</h2>
            </li>
            @endforelse
        </ul>
    </div>