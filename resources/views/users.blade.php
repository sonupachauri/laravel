<!-- <x-header componentName="Users"/> -->
<!-- <p> <h2> This is  {{--count($posts)--}} User's View File !</h2></p>  -->

<!-- @if ($posts == 'sonu')
<p> <h2> This is  Sonu's View File !</h2></p>
@endif -->

{{--
@include('about')
@foreach ($posts as $post)
    @if ($loop->first)
        This is the first iteration.
    @endif

    @if ($loop->last)
        This is the last iteration.
    @endif

    <p>loop index {{$loop->index}} </p>
 <p>Title : {{$post['title']}} </p>
@endforeach 
--}}
@csrf
<ul>
{{--@foreach ($posts as $post )
    @foreach ($post as $post )
        <li> {{$post}} </li>
    @endforeach
@endforeach --}}
</ul>

<script>
  const posts = @json($posts);
  console.log(posts);
</script>