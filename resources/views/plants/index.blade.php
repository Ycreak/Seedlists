<x-app-layout>
    <div class="container my-5 py-5 px-5 mx-5">
        <!-- Search input -->

        <!-- List items -->
        <ul class="list-group mt-3">
            @forelse($plants as $plant)
                <li>
                    <a 
                        class="list-group-item seedlist_hyperlink"
                        href="/show_plant/{{ $plant->nid }}"
                    >
                        {{ $plant->genus }} {{ $plant->species }}, ({{ $plant->published_place }}, {{ $plant->published_year }})
                    </a>
                </li>
            @empty
                <li class="list-group-item list-group-item-danger">Plant Not Found.</li>
            @endforelse
        </ul>
    </div>


</x-app-layout>