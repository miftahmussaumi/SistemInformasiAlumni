@extends('Template.alumni')
@section('title','Tambah Informasi')
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
                    <form action="{{route('save-informasi')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <table style="margin-left: 100px; margin-right: 100px;" cellpadding="10">
                            <tr>
                                <td>
                                    <p style="font-size: 15px;">Judul<sup style="color: red; font-size: 20px;">*</sup></p>
                                </td>
                                <td><input type="text" name="judul" size="90" required></td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;">Kategori<sup style="color: red; font-size: 20px;">*</sup></p>
                                </td>
                                <td>
                                    <select name="id_kategori" style="width: 80;" required>
                                        <option selected disabled>-Pilih Kategori-</option>
                                        @foreach($kat_info as $kat)
                                        <option value="{{$kat->id}}">{{$kat->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200;">
                                    <p style="font-size: 15px;">Upload Gambar</p>
                                </td>
                                <td>
                                    <input type="file" name="gambar" accept="image/*">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="font-size: 15px;">Isi<sup style="color: red; font-size: 20px;">*</sup></p>
                                </td>
                                <td>
                                    <textarea name="isi" id="info" cols="30" rows="10" required></textarea>
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