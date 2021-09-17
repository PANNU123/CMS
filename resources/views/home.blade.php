@extends('layouts.app')

@section('content')
 <div class="contact-bg">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="contactheading">
              <h3>Post Blog</h3>
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
                  <form method="post" action="{{route('user-post')}}"> 
                    @csrf
                       <fieldset>
                          <div class="col-md-12">
                             <div class="row">
                                <div class="col-md-12">
                                   <input type="text" id="title" name="title" placeholder="Title" required="#" />
                                </div>
                                <div class="col-md-12">
                                   <textarea class="wdt" id="description" name="description" placeholder="Description"></textarea>
                                </div>
                             </div>
                             <div class="row margin_top_30">
                                <div class="col-md-12">
                                   <div class="center">
                                    <button type="submit">Submit</button>
                                   </div>
                                </div>
                                
                             </div>
                          </div>
                       </fieldset>
                    </form>
                    <div class="col-md-12" style="padding-top: 25px;">
                      <div class="center">
                        <a href="{{route('show-post')}}"> <button type="submit">see post</button></a>
                      </div>
                     
                   </div>
                   <div class="col-md-12" style="padding-top: 25px;">
                    <div class="center">
                     <a href="{{url('logout')}}"> <button type="submit">logout</button></a>
                    </div>
                   
                 </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
  

     <!-- end section -->
@endsection
