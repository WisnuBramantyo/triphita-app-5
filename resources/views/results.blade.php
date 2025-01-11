<h1>Search Results</h1>
@if($destinations->isEmpty())
    <p>No results found.</p>
@else
    <ul>
        @foreach($destinations as $destination)
            <li>
                {{ $destination->name }} - 
                From {{ $destination->check_in }} to {{ $destination->check_out }} - 
                Price: ${{ $destination->price }}
            </li>
        @endforeach
    </ul>
@endif
<a href="{{ url('/') }}">Back to search</a>
