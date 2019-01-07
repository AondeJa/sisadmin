{{-- {{dd('sx') }} --}}
@extends ('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div>
    <!-- Content Header (Page header) 
    <section class="content-header">
        <h1>
            Timeline
        </h1>
    </section> -->
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
                        @if ($car->status == 'S')
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
                                        <span class="description"><br><button type="button" class="btn bg-navy margin">{{$car->placa}}</button></span>

                                <!--    </div> -->
                                    <!-- /.user-block -->
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                   
                                    <img class="img-responsive pad" src="{{$car->url}}"  alt="Photo">

                                    <div style="text-indent: 10px;" align="justify">{{$car->descricao}}</div>

                                </div>
                                     <hr/>

                                        <div class="box-footer box-comments">
                                        @forelse ($car->comments as $comment)
                                        <div class="box-comment">
                                            <div class="comment-text">
                                                <span class="username">
                                                    {{ $comment->user->name }}
                                                    <span class="text-muted pull-right">{{$comment->created_at}}</span>
                                                </span><!-- /.username -->
                                            {{ $comment->body }}
                                            </div>
                                            <!-- /.comment-text -->    
                                        </div>
                                        @empty
                                         <div style="text-indent: 10px;">Comentários</div>
                                        @endforelse
                                        </div>
                                        
                                        <div class="box-footer">
                                            @if (Auth::check())
                                                @if(Auth::user()->priv == 'O')
                                                    {{ Form::open(['route' => ['comments.store'], 'method' => 'POST']) }}
                                                    <p>{{ Form::textarea('body', old('body'),['class'=>'form-control input-sm','rows' => 2]) }}</p>
                                                    {{ Form::hidden('post_id', $car->id) }}
                                                    <p>{{ Form::submit('Responder essa Reclamação!',['class'=>'btn btn-success']) }}</p>
                                                    {{ Form::close() }}
                                                @else
                                                    {{ Form::open(['route' => ['comments.store'], 'method' => 'POST']) }}
                                                    <p>{{ Form::textarea('body', old('body'),['class'=>'form-control input-sm','rows' => 2]) }}</p>
                                                    {{ Form::hidden('post_id', $car->id) }}
                                                    <p>{{ Form::submit('Enviar') }}</p>
                                                    {{ Form::close() }}
                                                @endif
                                            @endif
                                            </div>
            <div>
              <!-- /.box-comment -->
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box-footer -->
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                         @endif
                    @endforeach
                       
                    <!-- timeline time label -->
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
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
