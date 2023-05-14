<x-app-layout>
    <div style='padding-left:2em'>
        <b class='title'>Seed lists all descriptions</b>
        <div class='padding-div'></div>
        <table>
            @foreach ($seedlists as $seedlist)

            <tr>
                <th>{{ $seedlist->published_place }}</th>
            
                <td>
                    @foreach ($seedlist->years as $year)
                        <a 
                            class='seedlist_hyperlink'
                            href="/show_seedlist/{{ $year->nid }}"
                        >
                            {{ $year->published_year }}
                        </a>
                    @endforeach                            
                </td>
            @endforeach
        </table>
        <!-- </div> -->
    </div>
</x-app-layout>

