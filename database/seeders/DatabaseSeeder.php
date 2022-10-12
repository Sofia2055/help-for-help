<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(5)->create([
            'center_id' => 2
        ]);
// ¡Superate!'s centers
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Fundación Poma',
            'description' => 'Inagurado en el año 2011 gracias a la Fundación Poma, al convenio firmado
            entre la Fundación Sagrera Palomo, USAID en el 2010, y gran aporte de Microsoft El Salvador
            y la donacion de licencias de Microsoft Office.
            Teléfono: 2229 7239',
            'address' => '4 Calle Pte. entre 10av y, 8 Avenida Sur 5-4, Santa Tecla'
        ]);

        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! ADOC',
            'description' => 'Se inauguró en el año 2008 gracias a la iniciativa de la Fundación ADOC
            y gran aporte de Microsoft El Salvador y la donacion de licencias de Microsoft Office.
            Teléfono: 2277 0488',
            'address' => 'MRWW+782, CA-1, San Salvador'
        ]);

        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Fundación Raíces',
            'description' => 'Grupo Scout 12 "Los Conacastecos
            Inicio sus operaciones en el año 2013 gracias al trabajo de Fundación Raíces y
            gran aporte de Microsoft El Salvador y la donacion de licencias de Microsoft Office.
            Teléfono: 2292 8464',
            'address' => ' PV95+3Q9, Soyapango'
        ]);

        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Merlet',
            'description' => 'Inagurado en el 2011 gracias a la Fundación Frech y USAID en el 2010
            y la valiosa donacion de licencias de Microsoft Office por Microsoft El Salvador.
            Teléfono: 2212 7500',
            'address' => 'Calle Circunvalación, Poligono D #17, Plan de La Laguna'
        ]);

        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Hilasal',
            'description' => 'Fue una iniciativa de la Fundacion Sagrera Polomo. Se inaguró en el año
            2004, gracias a la iniciativo de Responsabilidades Social Empresarial Hilasal y gracias al aporte
            significativo de Microsoft con las licencias de Microsoft Office.
            Teléfono: 2319 1203',
            'address' => ' QJW6+896, Sitio del Niño'
        ]);

        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Grupo Q ',
            'description' => 'Se unio a ¡Supérate! en el año 2018 como patrocinador del Centro en San Miguel,
            El Salvador gracias a la valiosa donación  de Microsoft El Salvador.
            Teléfono: 2606 0976',
            'address' => '9A Calle Oriente, San Miguel'
        ]);


        \App\Models\Resource::factory(10)->create();

        //Resources 1
        \App\Models\Resource::factory()->create([
            'product_name' => "Sacapuntas",
            'center_id' => 1,
            'description' => 'Sacapuntas que me sobraron',
            'resources_quantity' => 7,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);
    }
}
