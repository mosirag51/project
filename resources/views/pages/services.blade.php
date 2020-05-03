@extends('layouts.master')
@section('title')
<p> {{{$title}}} </p>
<ul>
    @if(count($services) > 0)
    @foreach($services as $service)
    <li>{{$service}}</li>
    @endforeach
    @endif
</ul>
    

@endsection
@section('content')
<p> hi there my name is mohamed sirag eldin ibrahim and i live in omdurman i study in alneelin The faculty of computer science </p>
@endsection
