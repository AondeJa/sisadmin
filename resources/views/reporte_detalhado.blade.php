{{-- {{dd('sx') }} --}}
@extends ('adminlte::page')

@section('title', 'Informações')

@section('content_header')
    <h1>Saiba mais sobre a denúncia:</h1>


@stop

@section('content')

<link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
<div class="box box-widget">
  <div class="box-header with-border">
    <!--    <div class="user-block"> -->
    <!--        <img class="img-circle" src="https://blog.maxieduca.com.br/wp-content/uploads/2016/12/002-anonimo.jpg" alt="User Image"> -->
    <span class="username"><a href="#"><font size="4">{{$car->orgao}}r</font></a></span>
    <span class="description"><br><button type="button" class="btn bg-navy margin">{{$car->placa}}</button></span>
                                <!--    </div> -->
                                    <!-- /.user-block -->
                                    <!-- /.box-tools -->
       </div>
                                <!-- /.box-header -->
         <div class="box-body">

          <img class="img-responsive pad" src="{{$car->url}}" alt="Photo">
          
             <div style="text-indent: 10px;">{{$car->descricao}}s</div>
          
                <hr>
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




'@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
'