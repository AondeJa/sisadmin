<?php

use Illuminate\Database\Seeder;
use App\Carro;

class CarrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $carro = Carro::create([
        	        'placa'=> 'JMX-8906',
                    'orgao'=>'Secretaria Municipal da Saúde da Bahia',
                    'url'=>'https://3.bp.blogspot.com/-63hK86-soP4/UflIKE7cooI/AAAAAAAADvA/YTtaR5UZtmg/s1600/ambulancia_una.jpg',
                    'descricao'=>'Ambulância do Samu está transportando cimento',
                    'dataEhora'=>'2018-12-13 17:35:05',
                    'latitude'=>'000000',
                    'longitude'=>'000000'
        ]);
        
        $carro = Carro::create([
            'placa'=> 'ANR-7372',
            'orgao'=>'Secretaria Municipal da Saúde',
            'url'=>'https://i.ytimg.com/vi/wdJffvS-mrw/maxresdefault.jpg',
            'descricao'=>'Ambulância do Samu está transportando cimento',
            'dataEhora'=>'2018-12-04 17:35:05',
            'latitude'=>'000000',
            'longitude'=>'000000'
        ]);

        $carro = Carro::create([
            'placa'=> 'IUW-5918',
            'orgao'=>'Polícia Militar',
            'url'=>'https://zh.rbsdirect.com.br/imagesrc/23181138.jpg?w=700',
            'descricao'=>'viatura usada para fins pessoais',
            'dataEhora'=>'2018-12-21 17:35:05',
            'status'=>'S',
            'latitude'=>'000000',
            'longitude'=>'000000'
        ]);

        $carro = Carro::create([
            'placa'=> 'IVQ-2497',
            'orgao'=>'Polícia Militar',
            'url'=>'https://zh.rbsdirect.com.br/imagesrc/23181143.jpg?w=700',
            'descricao'=>'viatura estacionada por quase um hora em uma UBS para fins próprios',
            'dataEhora'=>'2018-12-23 17:35:05',
            'status'=>'S',
            'latitude'=>'000000',
            'longitude'=>'000000'
        ]);

        $carro = Carro::create([
            'placa'=> '0023',
            'orgao'=>'Senado Federal',
            'url'=>'https://3.bp.blogspot.com/_TZyOHtM2wbs/TDTsA6NdFfI/AAAAAAAACM8/1Xhp1iFv2_E/s400/placa+quente.jpg',
            'descricao'=>'estacionado  em local proibido',
            'dataEhora'=>'2018-12-19 17:35:05',
            'status'=>'S',
            'latitude'=>'000000',
            'longitude'=>'000000'
        ]); 
    }
}
