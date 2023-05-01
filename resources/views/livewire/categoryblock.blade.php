<div class="dropdown"><a href="/categories"><i class="fa-solid fa-bars fa-xl"></i></a>
    <div class="dropdown-content">
        @foreach($categories as $category)
        <a href="/category/{{ $category->id }}">{{ $category->name }}</a><br>
        @endforeach
    </div>
</div>