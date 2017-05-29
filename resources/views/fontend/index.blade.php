@extends('layouts.fontapp')

@section('style')
<link rel="stylesheet" href="/css/style.css">
@section('content')

<!-- ./slide -->
<div class="container">
      <div class="carousel slide article-slide" id="article-photo-carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner cont-slider">
          @foreach ($slide as $key => $element)
            <div class="item {{$key == 0 ? 'active':''}}">
              <img alt="" title="" src="/images/product/{{$element->image}}" class="img-responsive-fix">
            </div>
          @endforeach

      </div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
          @foreach ($slide as $key => $element)
            <li class="{{$key == 0 ? 'active':''}}" data-slide-to="{{$key}}" data-target="#article-photo-carousel">
              <img alt="" src="/images/product/{{$element->image}}" class="img-responsive">
            </li>
          @endforeach

      </ol>
    </div>
<div class="row">
     <div class="col-md-12">
        <h1 class="page-header">Profile
        </h1>
        <p>บริษัท ลาร์เปอร์ จำกัด เป็นทีมงานที่มีความรู้ความเชี่ยวชาญที่คอยให้คำปรึกษาปัญหาวางระบบและรวมถึงงานติดตั้ง งานเคมี ก่อสร้างทุกประเภท อาทิเช่น งานเคลือบพื้นโรงงาน อุตสาหกรรม งานหลังคา งานห้องเย็น งานโครงสร้างต่างๆ โดยทางเรา มีผลิตภัณฑ์หลากหลาย เพื่อที่จะตอบสนองความต้องการของลูกค้าควบคู่ไปกับการทำงานของทีมช่าง ที่มีประสบการณ์โดยการนำเอาเครื่องมือที่ทันสมัยและมีประสิทธิภาพมาใช้ทำงานให้กับท่านและทั้งนี้เรามีการพัฒนาขึ้นไปอย่างต่อเนื่องของ ผลิตภัณฑ์ เครื่องมือ รวมทั้งความรู้ความเชี่ยวชาญของทีมงานให้มากขึ้น เพื่อรองรับความต้องการของท่าน ที่สำคัญเรายังไม่ลืมที่จะมีบริการหลังการขายที่ดีเยี่ยม ให้ตรงกับความพึงพอใจของลูกค้ามากที่สุด ท่านจึงควรไว้วางใจที่จะให้ บริษัท ลาร์เปอร์ จำกัด ดูแลท่าน
		งานเคลือบพื้นสำหรบโรงงานอุตสาหกรรมนั้นมีหลากหลายชนิด หลายประเภท ตามลักษณะของประเภท อุตสาหกรรม, เคลือบพื้นสำหรับ อุตสาหกรรมอาหารและยา, เคลือบพื้น โรงงานเคมีภัณฑ์, เคลือบพื้น อุตสาหกรรมยานยนต์, เคลือบพื้นป้องกันสารเคมีกัดกร่อน, เคลือบพื้น ป้องกันไฟฟ้าสถิตย์ สำหรับอุตสาหกรรม อีเล็กทรอนิกส์, เคลือบพื้นป้อง กันการลื่น ดังนั้นการเคลือบพื้นนั้นขึ้นกับความเหมาะสม กับงานนั้น เป็นหลัก  </p>
			<a class="btn btn-primary btn-xs pull-right" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<hr>
    <!-- content -->
    <div class="col-lg-12">
        <h1 class="page-header">ผลงานของเรา
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
               <div class="col-md-4 portfolio-item">
                    <div class="thumbnail">
                         <img class="img-larpor-1" src="/images/product/{{$val->image}}" alt="">
                         <div class="caption">
                            <h3>
                                <a href="#">{{$val->name}}</a>
                            </h3>
                            <hr>
                            <p>
                                {{$val->detail}}
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary btn-xs">More.. <span class="glyphicon glyphicon-chevron-right"></a>
                            </p>
                        </div>
                    </div>
                </div>

            @if ($i == 3)
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
    <div class="col-md-12">
        <h1 class="page-header">คุณสมบัติอีพ็อกซี่
            <small>Larpor</small>
        </h1>
    </div>
        @php
            $i = 1;
        @endphp
        @foreach ($product[2] as $key => $val)
            @if ($i == 1)
                <div class="row">
            @endif
               <div class="col-md-4 portfolio-item">
                    <div class="thumbnail">
                         <img class="img-larpor-2" src="/images/product/{{$val->image}}" alt="">
                         <div class="caption">
                            <h3>
                                <a href="#">{{$val->name}}</a>
                            </h3>
                            <hr>
                            <p>
                                {{$val->detail}}
                            </p>
                            <p>
                                <a href="#" class="btn btn-primary btn-xs">More.. <span class="glyphicon glyphicon-chevron-right"></a>
                            </p>
                        </div>
                    </div>
                </div>

            @if ($i == 3)
                </div>
                @php
                    $i = 0;
                @endphp
            @elseif($val == end($product[2])) 
             </div> 
            @endif
            @php
                $i++;
            @endphp
        @endforeach 

    <!-- ./content -->
    <hr>
    <!-- content -->
    <div class="col-md-12">
        <h1 class="page-header">บริการอื่นๆ
            <small>Larpor</small>
        </h1>
    </div>
    @foreach ($product[3] as $key => $val)
        <div class="row">
            <div class="col-md-12">
             <div class="col-md-7">
                    <a href="#">
                        <img class="img-lapor-3" src="/images/product/{{$val->image}}" alt="">
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>{{$val->name}}</h3>
                    <h4>Subheading</h4>
                    <p>{{$val->detail}}</p>
                    <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
        <br>
        <hr>
        @endforeach 

</div>
@endsection
@section('scripts')
<script>

  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>
@endsection