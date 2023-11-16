@extends('layouts.layout')

  @section('title')@parent:: {{$title}} @endsection

@section('header')
   @parent
   &copy; {{date('Y')}}
   {!! $h1 !!}
@endsection
@section('content')

  {{-- @if(count($data1) > 20)
    Count > 20
    @elseif(count($data1)<20)
    Count < 20
    @else
    Count = 20
    @endif --}}
    {{-- @isset($data3)
      isset data 2
    @endisset --}}
    {{-- @production
     <h1>Production</h1>  
    @endproduction --}}
    {{-- @env('local')
      <h1>Local</h1>
    @endenv --}}
      {{-- @for($i=0 ; $i < count($data1);$i++)
        @if($data1[$i]%2 !=0)
          @continue
          @elseif ($data1[$i]==6 || $data1[$i]==8)
          @continue 
          @elseif($data1[$i]==16)
          @break  
          @endif
        {{$data1[$i]}}
      @endfor --}}
    
      {{-- @foreach ($data2 as $k =>$v)
          {{ $k }}=>{{ $v }} --}}
      {{-- @endforeach --}}
@endsection