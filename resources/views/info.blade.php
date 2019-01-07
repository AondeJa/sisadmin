{{-- {{dd('sx') }} --}}
@extends ('adminlte::page')

@section('title', 'Informações')

@section('content_header')
    <h1>Informações sobre o projeto</h1>


@stop

@section('content')

<link rel="stylesheet" href="{{ asset('public/css/main.css') }}">


<div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        Conheça nosso Projeto
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                   <div class="timeline-body">
                  <div>
                  <img style="-webkit-user-select: none;" src="https://cdn.fbsbx.com/v/t59.2708-21/50081216_312425049394546_4422091082351771648_n.gif?_nc_cat=101&_nc_ht=cdn.fbsbx.com&oh=583271b26634a04692862f3fb0652935&oe=5C32A6CB"  border="5"  >
                  </div>
                </div>
                <hr>
                    <div class="box-body" align="justify">
                      <p><b><h4>Aonde Já?!</h4></b> 
                      É uma ferramenta de interação da sociedade com seus órgãos competentes. Afinal, quem nunca se deparou com uma situação irregular que não sabia para onde reclamar e denúnciar<br>
                      Aonde Já possui um chatbot (exemplo acima), diretamente no messenger do facebook que a população poderá recorrer para fazer esse tipo de denúcias!<br>
                      Viu um carro sendo utilizado ou estacionado em local irregular? Aonde já? Conta pra gente!  </p>
                      <p><b><h4>Ambiente Administrativo:</h4></b> 
                      Você faz parte de algum órgão regulamentador?Entre em contato com a equipe do Aonde Já para disponibilizarmos login e senha de administrador, assim você acompanha e pode dar respostas as denúncias feitas pela população!</p>
                      <p><b><h4>Estamos em Obras!</h4></b> 
                        Para melhor atendê-los <b><i>Aonde Já</i></b> está em manutenção! Por motivos de trâmites burocráticos de liberação da utilização da plataforma, por enquanto, para a utilização de nosso chatbot faça uma solicitação em nossa pagina do Facebook, que um de nossos moderadores poderá liberar acesso para você! Para falar diretamente com a gente no messenger acesse: <a href="https://www.messenger.com/t/aondeja">  Aonde Já? </a> ou acesse nossa página no Facebook:<a href="https://www.facebook.com/aondeja/"> Facebook Aonde Já? </a> 
                                        </div>
                  </div>
                </div>

'@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
'