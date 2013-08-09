@extends(theme_view('layout'))

@section('title')
  {{ $post->title }}
@stop

@section('content')
  <section>
    <h2 class="title">{{ $post->title }}</h2>

    @include(theme_view('inc.tags'))

    {{ md($post->content) }}

    {{ Disqus::comments() }}
  </section>
@stop

