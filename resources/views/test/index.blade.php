<h1>This is My Test Page</h1>
@if(count($beatles) > 0)
    @foreach($beatles as $beatle)
        <p>{{$beatle}}</p>
    @endforeach
@else
    <h1> Sorry, nothing to show… </h1>
@endif