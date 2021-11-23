@foreach($data as $key => $item)
    <p>
        <strong>{{ $key }}:</strong>
        <span>{!! $item !!}</span>
    </p>
@endforeach