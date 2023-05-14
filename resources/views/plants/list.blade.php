<x-app-layout>
    <div style='padding-left:2em'>       
        <b class='title'>{{ $plant->title }}</b>
        <div class='padding-div'></div>

        <table>
            <tr>
                <th>Genus:</th>
                <td>{{ $plant->genus }}</td>
            </tr>
            <tr>
                <th>Species:</th>
                <td>{{ $plant->species }}</td>
            </tr>    
            <tr>
                <th>Author:</th>
                <td>{{ $plant->author }}</td>
            </tr>
            <tr>
                <th>Published place:</th>
                <td>{{ $plant->published_place }}</td>
            </tr>
            <tr>
                <th>Published year:</th>
                <td>{{ $plant->published_year }}</td>
            </tr>
            <tr>
                <th>Published in:</th>
                <td>{{ $plant->published_in }}</td>
            </tr>
            <tr>
                <th>Original seen in:</th>
                <td>{{ $plant->original_in }}</td>
            </tr>
            <tr>
                <th>Notes:</th>
                <td>{{ $plant->notes }}</td>
            </tr>
        </table>

        <div class='padding-div'></div>

        <p>
            @foreach ($my_pictures as $picture)
                <a
                    href="{{ url('storage/images/'.$picture->filename) }}"
                    style='float:left; padding:0.5em'
                >   
                    <img 
                        src="{{ url('storage/images/'.$picture->filename) }}" 
                        style='height:12em; width:auto;'
                    >        
                </a>
            @endforeach                            
        </p> 

        <div class='padding-div' style='clear:both'></div>
        <div class='padding-div'></div>

        <p><b>All descriptions:</b></p>
    
        <div>
            <p>
                <a
                    class='seedlist_hyperlink'
                    href="/show_seedlist/{{ $parent_seedlist->nid }}"
                >
                    {{ $parent_seedlist->title }}         
                </a>
            </p>
        </div>            


    </div>
</x-app-layout>