@extends('site.layouts.base')

@section('content')
    <section class="p-6 bg-gray-50 rounded-sm ">
        <div class="prose prose-xl prose-gray max-w-full">
            <h1>{!! $item->title !!}</h1>

            @if ($item->hasImage('cover'))
                <img class="float-left rounded-sm w-1/2 my-2 mr-6" src="{{$item->image('cover')}}">
            @endif

            @if (trim($item->description) != '')
                <p class="lead">{!! $item->description !!}</p>
            @endif

            {!! $item->renderBlocks() !!}
        </div>
    </section>
@endsection