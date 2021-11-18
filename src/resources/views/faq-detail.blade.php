@extends('layout')
@section('title',$faq->title)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <p>{{ link_to('/','Home')}} / {{ link_to('category/'.$faq->category->slug,$faq->category->category) }} / {{ $faq->title }}</p>
            <h3> {{ $faq->title }}</h3>
            <p class="text-justify" id="content">{!! $faq->content!!}</p>
        </div>
        <div class="col-md-3">
            <h4>Related FAQ</h4>
            @foreach($relateds as $related)
            <p> {{ link_to('faq/'.$related->slug , $related->title) }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
/* unvisited link */
a:link {
    color: red;
}

/* visited link */
a:visited {
    color: green;
}

/* mouse over link */
a:hover {
    color: hotpink;
}

/* selected link */
a:active {
    color: blue;
}

</style>

@endpush