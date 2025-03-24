<div>
<h1>Hii</h1>
    <h1>Categories</h1>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</div>