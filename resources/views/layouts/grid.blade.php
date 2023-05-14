<div class="grid-container">
    <div class="sidebar-area">

        <a href="https://www.naturalis.nl/">
            <img 
                style='display: block; margin-left: auto; margin-right: auto;'
                src="{{ url('storage/naturalis_logo.png') }}" 
            >        
        </a>

        <div style='padding-bottom:1em'></div>
        <p><b>Search plants</b></p>
        <div style='padding:0.2em'></div>

        <form 
            style='padding-bottom:0.2em'    
            method="post" 
            action="{{ route('plants.index')}}"
            accept-charset="UTF-8"
        >         
        @csrf
            <input 
                type="search" 
                class="form-control" 
                placeholder="By genus" 
                name="search_genus" 
            >
            <div style='padding:0.2em'></div>
            <input 
                type="search" 
                class="form-control" 
                placeholder="By species" 
                name="search_species" 
            >
            <div style='padding:0.2em'></div>
            <input 
                type="search" 
                class="form-control" 
                placeholder="By author" 
                name="search_author" 
            >
            <div style='padding:0.2em'></div>
            <input 
                type="search" 
                class="form-control" 
                placeholder="By published place" 
                name="search_place" 
            >
            <div style='padding:0.2em'></div>
            <input 
                type="search" 
                class="form-control" 
                placeholder="By published year" 
                name="search_year" 
            >
            <div style='padding:0.2em'></div>
            <button type="submit" class="btn btn-primary">Apply</button>
        </form>
    </div>
    <div class="content-area" style='text-align:left'>
        {{ $slot }}
    </div>  
</div>