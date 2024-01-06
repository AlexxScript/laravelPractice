@extends('dashboard.main')

@section('dashboardMain')
<div class="all-contents">
   @foreach($contents as $content)
       <div class="quill-content">
           @php
               $decodedContent = json_decode($content->content);
           @endphp

           @if($decodedContent !== null && isset($decodedContent->ops))
               @foreach($decodedContent->ops as $operation)
                   @if(isset($operation->insert))
                       @if(isset($operation->attributes))
                           @if(isset($operation->attributes->list))
                               <li>{!! $operation->insert !!}</li>
                           @elseif(isset($operation->attributes->bold) && $operation->attributes->bold)
                               <strong>{!! $operation->insert !!}</strong>
                           @elseif(isset($operation->attributes->link))
                               <a href="{{ $operation->attributes->link }}" target="_blank">{!! $operation->insert !!}</a>
                           @else
                               {!! $operation->insert !!}
                           @endif
                       @else
                           {!! $operation->insert !!}
                       @endif
                   @endif
               @endforeach
           @else
               <p>Error decoding content.</p>
           @endif
       </div>
   @endforeach
</div>
@endsection
