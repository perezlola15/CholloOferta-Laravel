<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CholloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chollos')->insert([
            'titulo' => 'New Balance 530',
            'descripcion' => 'La zapatilla 530 supone el regreso de una de nuestras zapatillas de running clásicas. Esta zapatilla informal aúna un estilo informal con la última tecnología. La amortiguación ABZORB debajo del pie te ofrece una comodidad superior.',
            'url' => 'https://www.newbalance.es/es/pd/530/MR530-32265.html?dwvar_MR530-32265_style=MR530SG',
            'categoria' => 'Deportivas',
            'puntuacion' => 9,
            'precio' => '130',
            'precio_descuento' => '110',
            'disponible' => true,
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'New Balance 550',
            'descripcion' => 'La zapatilla 550 es una versión retro de una de nuestras zapatillas clásicas para correr. La 550 fusiona el estilo de cada día con una tecnología puntera La amortiguación ABZORB bajo tus pies suma una comodidad superior. Con las zapatillas le darás un toque retro a tus pasos.',
            'url' => 'https://www.newbalance.es/es/pd/530/MR530-45736.html?dwvar_MR530-45736_style=MR530QA',
            'categoria' => 'Deportivas',
            'puntuacion' => 8,
            'precio' => '110',
            'precio_descuento' => '100',
            'disponible' => true,
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'Vans Knu Skool',
            'descripcion' => 'Las zapatillas Knu Skool, caracterizadas por su lengüeta acolchada, banda lateral Sidestripe tridimensional, y cordones gruesos y de gran tamaño, son toda una reinterpretación contemporánea de un modelo clásico de los 90.',
            'url' => 'https://www.vans.es/shop/es/vans-es/zapatillas-knu-skool-vn000cs0dwl#banner=WK46.VN000CS0DWL.Image.HP_IconsReInterpreted1',
            'categoria' => 'Casual',
            'puntuacion' => 8,
            'precio' => '90',
            'precio_descuento' => '75',
            'disponible' => true,
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'New Balance FuelCell SC',
            'descripcion' => 'La FuelCell SC es una zapatilla de competición diseñada para los momentos en los que cada segundo cuenta. La sensación de propulsión del FuelCell se combina con una placa de fibra de carbono más fina, por lo que es capaz de ofrecer un retorno de energía superior sin renunciar a la ligereza.',
            'url' => 'https://www.newbalance.es/es/pd/fuelcell-supercomp-elite-v4/MRCELV4-44901.html?dwvar_MRCELV4-44901_style=MRCELLA4',
            'categoria' => 'Deportivas',
            'puntuacion' => 9,
            'precio' => '150',
            'precio_descuento' => '135',
            'disponible' => true,
        ]);
    }

    }

