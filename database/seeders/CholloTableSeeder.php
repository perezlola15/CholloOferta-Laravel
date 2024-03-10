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
            'descripcion' => 'Esta zapatilla informal aúna un estilo informal con la última tecnología.',
            'url' => 'https://www.newbalance.es/es/pd/530/MR530-32265.html?dwvar_MR530-32265_style=MR530SG',
            'categoria' => 'Deportivas',
            'puntuacion' => 9,
            'precio' => '130',
            'precio_descuento' => '110',
            'disponible' => true,
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'New Balance 550',
            'descripcion' => 'La amortiguación ABZORB bajo tus pies suma una comodidad superior.',
            'url' => 'https://www.newbalance.es/es/pd/530/MR530-45736.html?dwvar_MR530-45736_style=MR530QA',
            'categoria' => 'Deportivas',
            'puntuacion' => 8,
            'precio' => '110',
            'precio_descuento' => '100',
            'disponible' => true,
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'Vans Knu Skool',
            'descripcion' => 'Caracterizadas por su lengüeta acolchada y cordones gruesos y de gran tamaño.',
            'url' => 'https://www.vans.es/shop/es/vans-es/zapatillas-knu-skool-vn000cs0dwl#banner=WK46.VN000CS0DWL.Image.HP_IconsReInterpreted1',
            'categoria' => 'Casual',
            'puntuacion' => 8,
            'precio' => '90',
            'precio_descuento' => '75',
            'disponible' => true,
        ]);
        DB::table('chollos')->insert([
            'titulo' => 'New Balance FuelCell SC',
            'descripcion' => 'La sensación de propulsión se combina con una placa de fibra de carbono más fina.',
            'url' => 'https://www.newbalance.es/es/pd/fuelcell-supercomp-elite-v4/MRCELV4-44901.html?dwvar_MRCELV4-44901_style=MRCELLA4',
            'categoria' => 'Deportivas',
            'puntuacion' => 9,
            'precio' => '150',
            'precio_descuento' => '135',
            'disponible' => true,
        ]);
    }

    }

