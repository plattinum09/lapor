@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Vdo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($vdo, ['route' => ['vdos.update', $vdo->id], 'method' => 'patch']) !!}

                        @include('vdos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection