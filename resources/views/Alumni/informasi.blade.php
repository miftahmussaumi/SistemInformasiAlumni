@extends('Template.alumni')
@section('title','Informasi')
@section('isi blog')
<!-- Section Title Blog -->
<div class="section-title-bg text-center m-bottom-40">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Informasi</strong></h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Temukanlah dan Tambahkan Informasi yang bermanfaat</p>
</div>
<section class="blog-index">

    <!--Container-->
    <div class="container clearfix">
        <div class="row">

            <div class="col-xs-12">
                <!-- Widget Search -->
                <a type="button" href="{{route('informasi-saya')}}" class="send_message btn btn-main btn-theme wow fadeInUp">INFORMASI SAYA</a> <BR></BR>

                <div class="row m-top-40 multi-columns-row">
                    <!-- === Blog item 1 === -->
                    @foreach ($dtInfo as $dt)
                    <div class="col-md-4 col-sm-6 m-bottom-40">
                        <div class="blog wow zoomIn" data-wow-duration="1s" data-wow-delay="0.7s">
                            <div class="blog-media">
                                <a href="blog_single_post.html"><img src="{{asset('img/info/'. $dt->gambar)}}" alt="" alt=""></a>
                            </div>
                            <!--post media-->

                            <div class="blog-post-info clearfix">
                                <span class="time"><i class="fa fa-calendar"></i> {{$dt->tgl_up}}</span>
                            </div>
                            <!--post info-->

                            <div class="blog-post-body">
                                <h4><a class="title" href="blog_single_post.html">{{$dt->judul}}</a></h4>
                                <p class="p-bottom-20">Kategori : {{$dt->nama_kategori}}</p>
                                <a href="{{url('informasi-detail',$dt->id_informasi)}}" class="read-more">Read More >></a>
                            </div>
                            <!--post body-->
                        </div> <!-- /.blog -->
                    </div> <!-- /.inner-col -->
                    @endforeach
                </div> <!-- /.inner-row -->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!--End blog single section-->
@endsection