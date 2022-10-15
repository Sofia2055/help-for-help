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
            'description' => 'Inaugurated in 2011 thanks to the Poma Foundation,
             the agreement signed between the Sagrera Palomo Foundation, USAID in 2010 and the great contribution of Microsoft El Salvador
             and the donation of Microsoft Office licenses.
            Teléfono: 2229 7239',
            'address' => '4 Calle Pte. entre 10av y, 8 Avenida Sur 5-4, Santa Tecla'
        ]);

        // center_id = 2
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! ADOC',
            'description' => 'It was inaugurated in 2008 thanks to the initiative of the ADOC Foundation
            and the great contribution of Microsoft El Salvador and the donation of Microsoft Office licenses.
            Teléfono: 2277 0488',
            'address' => 'MRWW+782, CA-1, San Salvador'
        ]);

        // center_id = 3
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Fundación Raíces',
            'description' => 'Scout Group 12 "Los Conacastecos".
            Started its operations in 2013 thanks to the work of Fundación Raíces
            and the great contribution of Microsoft El Salvador and the donation of Microsoft Office licenses.
            Teléfono: 2292 8464',
            'address' => ' PV95+3Q9, Soyapango'
        ]);

        // center_id = 4
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Merlet',
            'description' => 'Inaugurated in 2011 thanks to the Frech Foundation and USAID in 2010
            and the valuable donation of Microsoft Office licenses by Microsoft El Salvador.
            Teléfono: 2212 7500',
            'address' => 'Calle Circunvalación, Poligono D #17, Plan de La Laguna'
        ]);

        // center_id = 5
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Hilasal',
            'description' => 'It was an initiative of the Sagrera Palomo Foundation, started in 2004,
             thanks to the initiative of Corporate Social Responsibility Hilasal and
             thanks to the significant contribution of Microsoft with Microsoft Office licenses.
            Teléfono: 2319 1203',
            'address' => ' QJW6+896, Sitio del Niño'
        ]);

        // center_id = 6
        \App\Models\Center::factory()->create([
            'name' => '¡Supérate! Grupo Q ',
            'description' => 'Joined ¡Superate! in 2018 as a sponsor of the San Miguel,
             El Salvador Center thanks to a valuable donation from Microsoft El Salvador.
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
