@extends("app.layout.index")

@section('title', $item->name)

@section('content')
  <section class="page_section">
    <div class="container">
      <h1 class="title-primary">{{ $item->name }}</h1>
      <div>
        {!! $item->description !!}
      </div>
      {{-- @include("app.pages.page.components.employees",["page" => $item]) --}}
      @include("app.pages.page.components.accordion",["page" => $item])
    </div>
  </section>
@endsection

@section('scripts')

@endsection
