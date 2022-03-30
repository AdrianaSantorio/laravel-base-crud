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
                    <div class="comic-card">
                        <figure>
                            {{-- card figure --}}
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                            {{-- card text --}}
                            <figcaption>{{$comic->series}}</figcaption>
                            @if (Route::current()->getName() == 'comics.index')
                                <div class="button-container">
                                    {{-- edit --}}
                                    <a href="{{route('comics.edit', $comic->id)}}" class="button bg-warning">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    {{-- delete --}}
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="delete-form" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-danger button">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            @endif
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