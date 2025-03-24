<h1>{{ $category->name }}</h1>
<ul>
    @foreach ($expenses as $expense)
        <li>{{ $expense->notes }}: ${{ $expense->amount }}</li>
    @endforeach
</ul>

