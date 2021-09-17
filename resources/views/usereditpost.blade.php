@extends('layouts.app')

@section('content')
 <div class="contact-bg">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="contactheading">
              <h3>Update post</h3>
           </div>
        </div>
     </div>
  </div>
</div>

     <section class="layout_padding">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="full comment_form">
                  <form method="post" action="{{route('update-post')}}"> 
                    @csrf
                       <fieldset>
                          <div class="col-md-12">
                             <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" id="id" name="id" value="{{$post->id}}" placeholder="Title" required="#" />
                                 </div>
                                <div class="col-md-12">
                                   <input type="text" id="title" name="title" value="{{$post->title}}" placeholder="Title" required="#" />
                                </div>
                                <div class="col-md-12">
                                   <textarea class="wdt" id="description" name="description" value="{{$post->description}}" placeholder="Description">{{$post->description}}</textarea>
                                </div>
                             </div>
                             <div class="row margin_top_30">
                                <div class="col-md-12">
                                   <div class="center">
                                    <button type="submit">Update</button>
                                   </div>
                                </div>
                                
                             </div>
                          </div>
                       </fieldset>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </section>
  

     <!-- end section -->
@endsection
