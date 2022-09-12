@if (Session::has('result'))
<h2>{{ Session::get('result')}}</h2>
@endif

<form action="{{ route('calculate') }}" method="post">
    X: <input type="text" name="x"><br /><br />
    Y: <input type="text" name="y"><br /><br />
    @csrf
    <button type="submit">Go</button>
</form>
