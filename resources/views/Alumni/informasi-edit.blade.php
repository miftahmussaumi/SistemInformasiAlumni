@extends('Template.alumni')
@section('title','Edit Informasi')
<script src="{{asset('editor-info/ckeditor.js')}}"></script>
<script src="{{asset('editor-info/samples/js/sample.js')}}"></script>
<link rel="stylesheet" href="{{asset('editor-info/samples/css/samples.css')}}">
<link rel="stylesheet" href="{{asset('editor-info/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
@section('isi blog')
<!-- Section Title Blog -->
<div class="section-title-bg text-center m-bottom-40">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Tambah Informasi</strong></h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
</div>
<section class="blog-index">
    <!--Container-->
    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12">
                <a href="/informasi-saya"><strong>
                        << BACK</strong></a><br>
                <div class="widget">
                    @foreach ($info as $dt)
                    <form action="{{route('informasi-edit-save',$dt->id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <table style="margin-left: 100px; margin-right: 100px;" cellpadding="50">
                            <tr>
                                <td>
                                    <p style="font-size: 15px;">Judul<sup style="color: red; font-size: 20px;">*</sup></p>
                                </td>
                                <td><input type="text" name="judul" size="90" value="{{$dt->judul}}"></td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;">Kategori<sup style="color: red; font-size: 20px;">*</sup></p>
                                </td>
                                <td>
                                    <select name="id_kategori" style="width: 90;">
                                        <option selected disabled>-Pilih Kategori-</option>
                                        @foreach($kat_info as $kat)
                                        <option value="{{$kat->id}}" {{$kat->id==$dt->id_kategori ? 'selected' : ''}}>{{$kat->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200;">
                                    <p style="font-size: 15px;">Upload Gambar</p>
                                </td>
                                <td>
                                    <img src="{{asset('img/info/'. $dt->gambar)}}" width="100" height="400"/>
                                    <input type="file" name="gambar" accept="image/*">
                                    <input type="hidden" id="hidden_image" name="hidden_image_gambar" value="{{$dt->gambar}}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;">Isi<sup style="color: red; font-size: 20px;">*</sup></p>
                                </td>
                                <td>
                                    <textarea name="isi" id="info" cols="30" rows="10">{{$dt->isi}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;"><sup style="color: red; font-size: 20px;">*</sup>Wajib Diisi</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <br><button type="submit" class="send_message btn btn-main btn-theme wow fadeInUp">Submit</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    @endforeach
                </div>
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<!--End blog single section-->
<script>
    CKEDITOR.replace('info');
</script>
@endsection