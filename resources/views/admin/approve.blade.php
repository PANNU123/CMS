@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
        @php
         $index=0
     @endphp
        @foreach ($post as $item)
            
      
      <tr>
        <th scope="row">$index++</th>
        <td> {{ $item->title}}</td>
        <td>{{ $item->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection