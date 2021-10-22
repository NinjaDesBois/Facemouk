@extends('layouts.app')

@section('content')
    @include('story')
  <div class="content" style="background-color: #F7F7F7">
        <div>
            <a href="{{ route('posts.create') }}" type="button" class="btn btn-primary">ADD POST</a>
        </div>


        @foreach ($posts as $post)


            <section class="instagram-card my-3" id="">
                @include('posts.show')
            </section>
        @endforeach
        {{-- Afficher la pagination du Homecontroller paginate()-> --}}
        <div class="d-flex justify-content-center">{{ $posts->links() }}</div>
    </div>

@section('script')
    {{-- fonction pour recuperer le nombre de likes et les afficher --}}
    <script>
        function like(el) {
            let like_id = el.getAttribute('value');
            $.post('{{ route('like.store') }}', {
                _token: '{{ csrf_token() }}',
                post_id: like_id
            }, function(data) {
                $('.instagram-card')[0].innerHTML = data;

            });



        }
    </script>
@endsection
@endsection
