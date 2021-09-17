@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center" >
    <div class="col-md-8 ">
      <table class="table ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Approve</th>
              
            </tr>
          </thead>
          <tbody>
              @php
                $index=1;
          @endphp
              @foreach ($loaddata as $item)
            <tr>
              <th scope="row">{{$index++}}</th>
              <td style="100px;"> {{ $item->title}}</td>
              <td>{{ $item->description}}</td>
              <td style="width: 215px;">
                <a href="{{url('admin/post/edit/'.$item->id)}}" class="btn btn-info btn-sm">Edit</a>
                <a href="{{url('admin/post/delete/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                  @if($item->status==1)
                  <a href="{{url('post/inactive/'.$item->id)}}" class="btn btn-success btn-sm">Approve</a>
                  @else
                  <a href="{{url('post/active/'.$item->id)}}" class="btn btn-warning btn-sm">Pending</a>
                  @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection