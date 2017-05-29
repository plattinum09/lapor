@extends('layouts.fontapp')

@section('style')
<link rel="stylesheet" href="/css/style.css">
@section('content')

<!-- ./slide -->
<div class="container">

<hr>
    <!-- content -->
    <div class="col-lg-12">
        <h1 class="page-header">VDO
            <small>Larpor</small>
        </h1>
    </div>  
        @php
            $i = 1;
        @endphp
        @foreach ($product[1] as $key => $val)
            @if ($i == 1)
                <div class="row">
            @endif
               <div class="col-md-6 portfolio-item">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$val->url}}" frameborder="0" allowfullscreen></iframe>
                </div>

            @if ($i == 2)
                </div>
                @php
                    $i = 0;
                @endphp
            @elseif($val == end($product[1])) 
             </div> 
            @endif
            @php
                $i++;
            @endphp
        @endforeach
<!-- content -->
<hr>
</div>
@endsection
