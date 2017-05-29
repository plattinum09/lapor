@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Slide
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($slide, ['route' => ['slides.update', $slide->id],'files'=>true, 'method' => 'patch']) !!}

                        @include('slides.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection