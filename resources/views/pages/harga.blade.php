@extends('layouts.base')


@section('content-base')

<div>
    {{-- carousel --}}
    @include('components.titlebar', ["title" => "Taksir Biaya Tol", 'poster' => "assets/images/title-bar-bg-2.jpg"])

    {{-- content --}}
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center">
            <div class="content-box h-100 w-100 p-4 m-4">
                <div class="box-content-header">
                    <h3>TAKSIR TOL</h3>
                    <hr class="color-yellow">
                </div>                
            </div>                    
        </div>
        <div class="row">
            <div class="col-md-4">                
                {!! Form::label('tarif_kotas', 'Pilih Kota Gerbang Masuk') !!}
                {!! Form::select('id_kota', $kotas, null, array('id' => 'kotas', 'class' => 'form-control')) !!}
                <br><br>
            </div>
        </div>

        <div class="row">
            <br><br>
            <div class="col-md-4">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-condensed tfix">
                    <thead align="center">
                        <tr>
                            <td><b>No</b></td>
                            <td><b>Gerbang Keluar</b></td>
                            <td><b>Golongan 1</b></td>
                            <td><b>Golongan 2</b></td>
                            <td><b>Golongan 3</b></td>
                            <td><b>Golongan 4</b></td>
                            <td><b>Golongan 5</b></td>
                            <td><b>Golongan 6</b></td>
                        </tr>
                    </thead>
                    <tbody id="tols">
                    @foreach ($tols as $tol)
                        <tr>
                            <td>{{ $tol->id_tol }}</td>
                            <td>{{ $tol->gerbangkeluar }}</td>
                            <td>{{ $tol->gol1 }}</td>
                            <td>{{ $tol->gol2 }}</td>
                            <td>{{ $tol->gol3 }}</td>
                            <td>{{ $tol->gol4 }}</td>
                            <td>{{ $tol->gol5 }}</td>
                            <td>{{ $tol->gol6 }}</td>
                        </tr>
                    @endforeach   
                    </tbody>
                </table>
            </div>    
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#kotas').on('change', function(e){
            var id = e.target.value;
            $.get('{{ url('harga')}}/'+id, function(data){
                console.log(id);
                console.log(data);
                $('#tols').empty();
                $.each(data, function(index, element){
                    $('#tols').append("<tr><td>"+element.id_tol+"</td><td>"+element.gerbangkeluar+"</td>"+
                    "<td>"+element.gol1+"</td></tr>"+"<td>"+element.gol2+"</td></tr>"+
                    "<td>"+element.gol3+"</td></tr>"+"<td>"+element.gol4+"</td></tr>")+
                    "<td>"+element.gol5+"</td></tr>"+"<td>"+element.gol6+"</td></tr>";
                });
            });
        });
    });
</script>   


@endsection