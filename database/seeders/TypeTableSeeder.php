<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;



class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run(Faker $faker)
    {
        function getCsvData(string $path)
        {
            // Crea un'array vuota
            $data = [];

            // Apri il file stream in lettura
            $file_stream = fopen($path, 'r');

            // Verifica se il file non é stato aperto e mostra errore
            if ($file_stream === false) {
                exit('Cannot open the file ' . $path);
            }

            // leggi le singole righe del csv fino alla fine
            // fgetcsv restituisce o l'array o false
            while (($row = fgetcsv($file_stream)) !== false) {
                // salva ciascuna riga come elemento dell'array
                $data[] = $row;
            }

            // chiudi il file
            fclose($file_stream);
            // restituisci i dati
            return $data;
        }
        $types = getCsvData('resources\csv\classes.csv');

        foreach ($types as $index => $row) {
            if ($index !== 0) {
                $type = new Type();
                $type->name = $row[0];
                $type->description = $row[1];
                $type->save();
            }
        }
    }
}
