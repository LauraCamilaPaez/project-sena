<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $document_type = DocumentType::create([
            'document_type' => 'Cédula de Ciudadanía'
        ]);

        $document_type = DocumentType::create([
            'document_type' => 'Cédula de Extranjería',
        ]);

        $document_type = DocumentType::create([
            'document_type' => 'Pasaporte',
        ]);
    }
}
