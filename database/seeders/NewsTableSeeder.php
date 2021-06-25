<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = News::create([
            'category' => 'Salud',
            'title' => 'El mundo celebra la donación de sangre',
            'content' => 'El CEET se une a esta celebración invitándolo a donar sangre en el centro de
            salud más cercano',
            'image' => 'https://1.bp.blogspot.com/-Y8VtA1SAt28/YMbnp_J6MXI/AAAAAAAAQKk/JoxGdcrufnI-MHnkSU3UUgJYu3dtsUlsQCLcBGAsYHQ/w617-h874/el%2Bmundo%2Bcelebra%2Bla%2Bdonaci%25C3%25B3n%2Bde%2Bsangre%2B%25281%2529.jpg',
            'status' => 1,
        ]);

        $news = News::create([
            'category' => 'Salud',
            'title' => 'Evitemos el Covid-19',
            'content' => 'Recuerda que el virus no se ha ido, ahora más que nunca debemos seguir cumpliendo con todas las medidas
            de bioseguridad para prevenir el COVID-19.',
            'image' => 'https://1.bp.blogspot.com/-lgBfIRvotEg/YL_6xv_H3sI/AAAAAAAAQJY/dHxX8XkT33UTgJi4T092mZyAdGqMxwisQCLcBGAsYHQ/w626-h878/EVITEMOS%2BEL%2BCOVID.jpeg',
            'status' => 1,
        ]);

        $news = News::create([
            'category' => 'Cambio Climático',
            'title' => 'Ayuda a Salvar la tierra',
            'content' => 'Un seminario sobre los efectos adversos del calentamiento global en el marco de la celebración
            del día internacional del medio ambiente.',
            'image' => 'https://1.bp.blogspot.com/-z4X3Eqp5_Xg/YL-zPgymukI/AAAAAAAAQJI/NBDs4lJzh64dRfp4us4dzUP7R5CbY1GVgCLcBGAsYHQ/w629-h891/El%2BCentro%2Bde%2BElectrcidad%2BElectr%25C3%25B3nica%2By%2BTelecomunicaciones%2B%25282%2529.jpg',
            'status' => 1,
        ]);


    }
}
