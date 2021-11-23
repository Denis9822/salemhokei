@extends("vendor.email.template")
@section("content")
    @foreach($data as $key => $item)
        <p>
            <strong style="font-weight: bold;">{{ $key }}:</strong>
            <span>{!! $item !!}</span>
        </p>
    @endforeach
@endsection
