{{-- {{dd('sx') }} --}}
@extends ('adminlte::page')

@section('title', 'Analise')


@section('content')
<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Items para Avaliar
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                
                
                
                <ul class="timeline">

                    <!-- timeline time label -->
                    <!-- /.timeline-label -->
                    <!--$temporario = 0-->
                    @foreach ($carros as $car)
                        @if ($car->status == 'N')
                           <li class="time-label">
                        <span class="bg-red">{{ date( 'd/m/Y' , strtotime($car->dataEhora))}}</span>
                    </li>
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-exclamation bg-yellow"></i>
                        <div class="timeline-item">
                         <!--   <span class="time"><i class="fa fa-clock-o"></i> 01/10/2018</span> -->
                         <!--   <h3 class="timeline-header"><a href="#">Anonimo -->
                         <!--       </a> -->
                            </h3>
                            <div class="box box-widget">
                                <div class="box-header with-border">
                                <!--    <div class="user-block"> -->
                                <!--        <img class="img-circle" src="https://blog.maxieduca.com.br/wp-content/uploads/2016/12/002-anonimo.jpg" alt="User Image"> -->
                                        <span class="username"><a href="#"><font size = "4">{{$car->orgao}}</font></a></span>
                                        <span class="description"><br>{{$car->placa}}</span>
                                <!--    </div> -->
                                    <!-- /.user-block -->
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <img class="img-responsive pad" src={{$car->url}} alt="Photo">
                                    <hr/>
                                    <p>{{$car->descricao}}</p>
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box-footer -->
                                <div class="box-footer">
                                                {{ Form::open(['action'=>['CarroController@update', $car->id], 'method'=>'PUT', 'style'=>'display:inline']) }}
                                                <button class="btn btn-success"><i class="fa fa-check"></i> Publicar </button>
                                                {{ Form::close() }}

                                                {{ Form::open(['action'=>['CarroController@destroy', $car->id], 'method'=>'DELETE', 'style'=>'display:inline']) }}
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Excluir </button>
                                                {{ Form::close() }}
                                     
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item --> 
                        @endif
                    @endforeach
                    
                    <!-- timeline time label -->
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <!-- validar como exibir se nao tiver itens 
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>  
                    -->
                    
                </ul>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
