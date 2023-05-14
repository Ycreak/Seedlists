<x-app-layout>
    <div style='padding-left:2em'>       
        
        <b class='title'>{{ $my_seedlist->title }}</b>

        <div class='padding-div'></div>

        <table>
            <tr>
                <th>Published place:</th>
                <td>{{ $my_seedlist->published_place }}</td>
            </tr>
            <tr>
                <th>Published year:</th>
                <td>{{ $my_seedlist->published_year }}</td>
            </tr>
            <tr>
                <th>Original seen in:</th>
                <td>{{ $my_seedlist->original_in }}</td>
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
                        style='height:12em; max-width:12em'
                    >        
                </a>

                <!-- <p style="color:red">
                    {{ $picture->filename }}
                </p> -->
            @endforeach                            
        </p>    
        
        <div class='padding-div' style='clear:both'></div>
        <div class='padding-div'></div>

        <p><b>Related plants in the seed list:</b></p>
    
        <div>
            @foreach ($related_plants as $related_plant)
            <p>
                <a
                    class='seedlist_hyperlink'
                    href="/show_plant/{{ $related_plant->nid }}"
                >
                    {{ $related_plant->title }}         
                </a>
            </p>


            @endforeach                            
        </div>    



    </div>
</x-app-layout>