
    @foreach($categories as $category)

        <a style="cursor: pointer;" data-id="{{$category->id}}"><img src="{{asset('storage/'. $category->icone)}}" alt="{{$category->title}}"></a>
        
    @endforeach