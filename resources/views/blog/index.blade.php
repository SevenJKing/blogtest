@extends('common.layout') 
@section('container')
<h1>{{config('globe.web_title')}}</h1>
<h5>Page {{$posts->currentPage()}} of {{$posts->lastPage()}}</h5>
<hr/> 
<ul>
    @foreach($posts as $post)
    <li>
        <a href="{{url('/blog/'.$post->slug)}}">{{$post->title}}</a>
        <em>{{$post->published_at}}</em>
        <p>
            {{str_limit($post->subject)}}
        </p>
    </li>
    @endforeach
</ul>
<hr/>
{!! $posts->render() !!}
@endsection

