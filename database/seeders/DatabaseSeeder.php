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

        \App\Models\User::factory()->create([
            'email' => 'administrator@poma.superate.org.sv',
            'center_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'email' => 'administrator@adoc.superate.org.sv',
            'center_id' => 2
        ]);

        \App\Models\User::factory()->create([
            'email' => 'administrator@raices.superate.org.sv',
            'center_id' => 3
        ]);

        \App\Models\User::factory()->create([
            'email' => 'administrator@merlet.superate.org.sv',
            'center_id' => 4
        ]);

        \App\Models\User::factory()->create([
            'email' => 'administrator@hilasal.superate.org.sv',
            'center_id' => 5
        ]);

        \App\Models\User::factory()->create([
            'email' => 'administrator@grupoq.superate.org.sv',
            'center_id' => 6
        ]);

        \App\Models\User::factory()->create([
            'email' => 'cristian.alfaro2023@poma.superate.org.sv',
            'center_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'email' => 'fatima.vasquez2023@poma.superate.org.sv',
            'center_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'email' => 'alejandra.olivares2023@poma.superate.org.sv',
            'center_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'email' => 'kenny.cornelio2023@poma.superate.org.sv',
            'center_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'email' => 'salvador.zavala2023@poma.superate.org.sv',
            'center_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'email' => 'francisco.rauda2023@poma.superate.org.sv',
            'center_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'email' => 'daniela.acosta@poma.superate.org.sv',
            'center_id' => 1
        ]);

// ¡Superate!'s centers

       // center_id = 1
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Fundación Poma',
            'description' => 'Inagurado en el año 2011 gracias a la Fundación Poma, al convenio firmado
            entre la Fundación Sagrera Palomo, USAID en el 2010, y gran aporte de Microsoft El Salvador
            y la donacion de licencias de Microsoft Office.
            Teléfono: 2229 7239',
            'address' => '4 Calle Pte. entre 10av y, 8 Avenida Sur 5-4, Santa Tecla'
        ]);

        // center_id = 2
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! ADOC',
            'description' => 'Se inauguró en el año 2008 gracias a la iniciativa de la Fundación ADOC
            y gran aporte de Microsoft El Salvador y la donacion de licencias de Microsoft Office.
            Teléfono: 2277 0488',
            'address' => 'MRWW+782, CA-1, San Salvador'
        ]);

        // center_id = 3
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Fundación Raíces',
            'description' => 'Grupo Scout 12 "Los Conacastecos
            Inicio sus operaciones en el año 2013 gracias al trabajo de Fundación Raíces y
            gran aporte de Microsoft El Salvador y la donacion de licencias de Microsoft Office.
            Teléfono: 2292 8464',
            'address' => ' PV95+3Q9, Soyapango'
        ]);

        // center_id = 4
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Merlet',
            'description' => 'Inagurado en el 2011 gracias a la Fundación Frech y USAID en el 2010
            y la valiosa donacion de licencias de Microsoft Office por Microsoft El Salvador.
            Teléfono: 2212 7500',
            'address' => 'Calle Circunvalación, Poligono D #17, Plan de La Laguna'
        ]);

        // center_id = 5
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Hilasal',
            'description' => 'Fue una iniciativa de la Fundacion Sagrera Polomo. Se inaguró en el año
            2004, gracias a la iniciativo de Responsabilidades Social Empresarial Hilasal y gracias al aporte
            significativo de Microsoft con las licencias de Microsoft Office.
            Teléfono: 2319 1203',
            'address' => ' QJW6+896, Sitio del Niño'
        ]);

        // center_id = 6
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Grupo Q ',
            'description' => 'Se unio a ¡Supérate! en el año 2018 como patrocinador del Centro en San Miguel,
            El Salvador gracias a la valiosa donación  de Microsoft El Salvador.
            Teléfono: 2606 0976',
            'address' => '9A Calle Oriente, San Miguel'
        ]);

        //Resource 1
        \App\Models\Resource::factory()->create([
            'product_name' => "Sacapuntas",
            'center_id' => 1,
            'description' => 'Sacapuntas de metal',
            'resources_quantity' => 4,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 2
        \App\Models\Resource::factory()->create([
            'product_name' => "Colores New Elite ",
            'center_id' => 1,
            'description' => 'Contiene 12 colores punta gruesa ',
            'resources_quantity' => 2,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 3
        \App\Models\Resource::factory()->create([
            'product_name' => "Juego de reglas ",
            'center_id' => 1,
            'description' => 'contiene 4 diferentes reglas',
            'resources_quantity' => 2,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

        //Resource 4
        \App\Models\Resource::factory()->create([
            'product_name' => "Crayolas Facela",
            'center_id' => 1,
            'description' => 'Contiene 12 crayolas de cera',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 5
        \App\Models\Resource::factory()->create([
            'product_name' => "Borrador Parrot",
            'center_id' => 1,
            'description' => 'color blanco y suave',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => false
        ]);

        //Resource 6
        \App\Models\Resource::factory()->create([
            'product_name' => "Borrador Facela",
            'center_id' => 1,
            'description' => 'Borrador suave y blanco',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 7
        //Falta fotografia
        \App\Models\Resource::factory()->create([
            'product_name' => "Colores Surtidos",
            'center_id' => 1,
            'description' => 'Colores doble punta, 44 colores de diferentes tonos, bicolor',
            'resources_quantity' => 44,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 8
        \App\Models\Resource::factory()->create([
            'product_name' => "Colores Facela ",
            'center_id' => 1,
            'description' => 'Trae 12 colores cada caja',
            'resources_quantity' => 2,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => false
        ]);

        //Resource 9
        \App\Models\Resource::factory()->create([
            'product_name' => "Estuche ",
            'center_id' => 1,
            'description' => 'Estuche para lapices de metal',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

        //Resource 10
        \App\Models\Resource::factory()->create([
            'product_name' => "Tijera",
            'center_id' => 1,
            'description' => 'Tijera color azul de metal',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 11
        \App\Models\Resource::factory()->create([
            'product_name' => "Lapiceros",
            'center_id' => 1,
            'description' => 'colores disponibles: rojo, negro y azul surtidos',
            'resources_quantity' => 6,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 12
        \App\Models\Resource::factory()->create([
            'product_name' => "Caja de colores Falcon",
            'center_id' => 1,
            'description' => ' 12 colores x caja y bicolores',
            'resources_quantity' => 3,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

        //Resource 13
        \App\Models\Resource::factory()->create([
            'product_name' => "Crayolas",
            'center_id' => 1,
            'description' => 'Colores surtidos',
            'resources_quantity' => 5,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => false
        ]);

        //Resource 14
        \App\Models\Resource::factory()->create([
            'product_name' => "Regla",
            'center_id' => 1,
            'description' => 'Regla de metal color azul 30 cm',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

        //Resource 15
        \App\Models\Resource::factory()->create([
            'product_name' => "Plumones",
            'center_id' => 1,
            'description' => '17 diferentes plumones',
            'resources_quantity' => 17,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 16
        \App\Models\Resource::factory()->create([
            'product_name' => "Cuadernos",
            'center_id' => 1,
            'description' => 'Rayados y cuadriculados con espiral',
            'resources_quantity' => 57,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 17
        \App\Models\Resource::factory()->create([
            'product_name' => "Libreta papel bond ",
            'center_id' => 1,
            'description' => 'paginas blancas tamaño oficio de 100 paginas',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 18
        \App\Models\Resource::factory()->create([
            'product_name' => "Paginas de papel bond ralladas",
            'center_id' => 1,
            'description' => '150 paginas de papel bond ralladas',
            'resources_quantity' => 150,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 19
        \App\Models\Resource::factory()->create([
            'product_name' => "Libros Oxford",
            'center_id' => 1,
            'description' => 'Libros "reading and writing" Oxford',
            'resources_quantity' => 5,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 20
        //Falta Fotografias
        \App\Models\Resource::factory()->create([
            'product_name' => "Libros servicios educativos(lenguaje,sociales,
            moral urbanidad y civica, y ciencias)",
            'center_id' => 1,
            'description' => 'Libros de primer año bachillerato de lenguaje,sociales,
            moral urbanidad y civica, y ciencias',
            'resources_quantity' => 4,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => false
        ]);
    }
}
