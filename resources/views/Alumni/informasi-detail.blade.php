@extends('Template.alumni')
@section('title','Detail Informasi')
@section('isi blog')
<section id="blog-single" class="p-top-80 p-bottom-80">
    <!--Container-->
    <div class="container clearfix">
        <div class="row">
            <a href="{{ url()->previous() }}"><strong>
                    << BACK</strong></a><br><br>
            <div class="col-xs-12">

                <!--Post Single-->
                <div class="postSingle">
                    @foreach ($dtInfo as $dt)
                    <div class="postMedia">
                        <img alt="" src="{{asset('img/info/'. $dt->gambar)}}" alt="">
                    </div>
                    <!--Post image-->
                    <div class="postMeta clearfix">
                        <div class="postMeta-info">
                            <span class="metaAuthor"><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                        </div>
                        <div class="postMeta-date">
                            <span class="metaDate"><i class="fa fa-calendar"></i> <a href="#">{{$dt->tgl_up}}</a></span>
                        </div>
                    </div>
                    <!--Post meta-->
                    <div class="postTitle">
                        <h1>{{$dt->judul}}</h1>
                        <div class="divider-small"></div>
                    </div>
                    <!--Post title-->

                    {!!$dt->isi!!}

                    <div class="postTags clearfix">
                        <h4><i class="fa fa-tags"></i>Tags :</h4>
                        <ul class="list-inline">
                            <li><a href="#">{{$dt->nama_kategori}}</a></li>
                        </ul>
                    </div>
                    @endforeach
                </div>
                <!--End post single-->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!--End blog single section-->

@endsection