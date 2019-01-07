{{-- {{dd('sx') }} --}}
@extends ('adminlte::page')

@section('title', 'Informações')

@section('content_header')
    <h2>Filtro de Reportes Por Mês</h2>


@stop

@section('content')
{{-- janeiro --}}  
<div class="box box-primary">


            <div class="box-header with-border">
              <h3 class="box-title">Janeiro</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
              @foreach ($carros as $car)
                <li class="item">
                  <div class="product-img">
                    <img src="{{$car->url}}">
                  </div>
                  <div class="product-info">
                    <a href="{{url('reporte_detalhado/' . $car->id)}}" class="product-title">{{$car->orgao}} 
                    	<span class="product-description">
                    {{$car->placa}}
                      </span></a>
                  </div>
                </li>
              @endforeach
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
  <br>
{{-- fevereiro --}}  
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Fevereiro</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>
 {{-- Março --}}  
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Março</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>
{{-- ABRIL --}}  
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Abril</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>
{{-- MAIO --}}   
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Maio</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>

{{-- JUNHO --}}  
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Junho</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>

{{-- JULHO --}}    
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Julho</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>

{{-- AGOSTO --}}
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agosto</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>

{{-- SETEMBRO --}} 
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Setembro</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>

{{-- OUTUBRO --}}     
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Outubro</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>
{{-- NOVEMBRO --}}   
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Novembro</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>
{{-- DEZEMBRO --}} 
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Dezembro</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/874/thumb/mpf.png?1546743278" alt="MPF">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Ministério Público Federal <span class="product-description">
                         Placa: NEQ2069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/673/thumb/receita_federal.jpg?1546738078" alt="Receita Federal">
                  </div>
                  <div class="product-info">
                   <a href="javascript:void(0)" class="product-title">Receita Federal<span class="product-description">
                         Placa: QLN5038
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
                   <li class="item">
                  <div class="product-img">
                    <img src="https://uploaddeimagens.com.br/images/001/815/902/original/PM.jpg?1546744061" alt="Polícia Militar">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Polícia Militar <span class="product-description">
                         Placa: IVQ5069
                        </span></a>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
                      </div>
 <br>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
