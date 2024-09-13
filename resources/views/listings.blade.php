<h1>{{ $heading }}</h1>
@foreach ($listings as $item)
    <h2>
        {{ $item['title'] }}
    </h2>
    <p>
        {{ $item['desc'] }}
    </p>
@endforeach
