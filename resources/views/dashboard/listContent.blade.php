@extends('dashboard.main')

@section('dashboardMain')
<div class="user-contents">
   @foreach($contents as $content)
       <div class="quill-content">
           {!! $content->content !!}
       </div>
   @endforeach
</div>
@endsection
