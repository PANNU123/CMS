@extends('layouts.app')
@section('content')
<div class="contact-bg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="contactheading">
                <h3>Approve Post</h3>
             </div>
          </div>
       </div>
    </div>
 </div>
       <!-- section -->
       <section class="layout_padding">
          <div class="container">
            
             
             
             <div class="row">
                <div class="col-md-12">
                   <div class="full comment_form">
                      <div class="row margin_top_30">
                        <div class="col-md-12">
                           <div class="center">
                            <a href="{{route('load-data')}}"><button class="btn btn-success btn-md">Load Data</button></a>
                           </div>
                        </div>
                     </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- end section -->
@endsection