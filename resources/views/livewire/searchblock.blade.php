<div class="searchblock">
    <input wire:model.debounce.1ms="search" wire:click.debounce.1ms="$toggle('showDiv')" id="searchbar" type="text" name="search" placeholder="Search products" autocomplete="off"></input>
    @if($showDiv)
    <div id="searchbarblock">
        <ul>   
            @foreach($answers as $answer)
            <li><a href="/product/{{ $answer->id }}" id="answer">{{ $answer->name }}</a></li>
            @endforeach      
        </ul>
    </div>
    @endif
</div>