@extends('layout')
@section('title','Pencarian')
@section('content')
<div class="container" id="faq" style="margin-top: 50px;margin-bottom: 50px">
    
    <div class="row">
        <div class="col-md-12">
            <h4>Hasil Pencarian</h4>
            <p>Ada {{ $faqs_count_result }} Data Dengan Keyword {{ $keyword }}</p>
        </div>
        @foreach ($faqs as $faq)
        <div class="col-md-12 shadow" style="margin-bottom: 30px;padding-top:20px;padding-bottom:20px">
            <p><b>Category : {{ link_to('category/'.$faq->category->slug,$faq->category->category) }}</b></p>
            <h4>{{ link_to('faq/'.$faq->slug,$faq->title,['style'=>'color:#1A0DAB'])}}</h4>
            {!! substr($faq->content,0,200) !!} ...
        </div>
        @endforeach
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-12">
            {{ $faqs->links()}}
        </div>
    </div>

   
</div>
@endsection