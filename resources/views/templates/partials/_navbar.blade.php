<div id="wrapper-navbar">
    <div class="navbar object">

        <div class="categories-filter">
            
        @include('category._index', ["categories" => App\Models\Category::orderby("name","asc")->get()])    

        </div>
    </div>
</div>

