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
            'product_name' => "pencil sharpener",
            'center_id' => 1,
            'description' => 'They are metal pencil sharpeners',
            'resources_quantity' => 4,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 2
        \App\Models\Resource::factory()->create([
            'product_name' => "New Elite Colors",
            'center_id' => 1,
            'description' => 'Contains 12 thick tip colors',
            'resources_quantity' => 2,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 3
        \App\Models\Resource::factory()->create([
            'product_name' => "Set of rules ",
            'center_id' => 1,
            'description' => 'Contains 4 different types of rules',
            'resources_quantity' => 2,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

        //Resource 4
        \App\Models\Resource::factory()->create([
            'product_name' => "Facela Crayons",
            'center_id' => 1,
            'description' => 'Contains 12 wax crayons',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 5
        \App\Models\Resource::factory()->create([
            'product_name' => "Parrot Eraser",
            'center_id' => 1,
            'description' => 'It is white and soft',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => false
        ]);

        //Resource 6
        \App\Models\Resource::factory()->create([
            'product_name' => "Facela Eraser",
            'center_id' => 1,
            'description' => 'Soft and white eraser',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 7
        //Falta fotografia
        \App\Models\Resource::factory()->create([
            'product_name' => "Assorted Colors",
            'center_id' => 1,
            'description' => 'Double-ended colors, 44 colors of different shades, bicolor',
            'resources_quantity' => 44,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 8
        \App\Models\Resource::factory()->create([
            'product_name' => "Facela Colors",
            'center_id' => 1,
            'description' => '12 colors in each box',
            'resources_quantity' => 2,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => false
        ]);

        //Resource 9
        \App\Models\Resource::factory()->create([
            'product_name' => "Pencil case",
            'center_id' => 1,
            'description' => 'Metal foil case',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

        //Resource 10
        \App\Models\Resource::factory()->create([
            'product_name' => "Scissor",
            'center_id' => 1,
            'description' => 'Blue metal scissor',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 11
        \App\Models\Resource::factory()->create([
            'product_name' => "Pens",
            'center_id' => 1,
            'description' => 'Available colors: assorted red, black and blue',
            'resources_quantity' => 6,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 12
        \App\Models\Resource::factory()->create([
            'product_name' => "Falcon color box",
            'center_id' => 1,
            'description' => '12 colors per box and bicolors',
            'resources_quantity' => 3,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

        //Resource 13
        \App\Models\Resource::factory()->create([
            'product_name' => "Crayons",
            'center_id' => 1,
            'description' => 'Assorted colors',
            'resources_quantity' => 5,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => false
        ]);

        //Resource 14
        \App\Models\Resource::factory()->create([
            'product_name' => "Ruler",
            'center_id' => 1,
            'description' => 'Blue metal ruler 30 cm',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'as new',
            'received' => true
        ]);

        //Resource 15
        \App\Models\Resource::factory()->create([
            'product_name' => "Marker pens",
            'center_id' => 1,
            'description' => '17 different markers',
            'resources_quantity' => 17,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 16
        \App\Models\Resource::factory()->create([
            'product_name' => "Notebooks",
            'center_id' => 1,
            'description' => 'Lined and spiral grids',
            'resources_quantity' => 57,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 17
        \App\Models\Resource::factory()->create([
            'product_name' => "Bond paper notebook ",
            'center_id' => 1,
            'description' => '100-page legal size white pages',
            'resources_quantity' => 1,
            'given_quantity' => 0,
            'state' => 'new',
            'received' => true
        ]);

        //Resource 18
        \App\Models\Resource::factory()->create([
            'product_name' => "Pages of grated bond paper",
            'center_id' => 1,
            'description' => '150 pages of shredded bond paper',
            'resources_quantity' => 150,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 19
        \App\Models\Resource::factory()->create([
            'product_name' => "Oxford Books",
            'center_id' => 1,
            'description' => 'Oxford "read and write" books',
            'resources_quantity' => 5,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => true
        ]);

        //Resource 20
        //Falta Fotografias
        \App\Models\Resource::factory()->create([
            'product_name' => "Books educational services (language, social,
            morals, civics, and science)",
            'center_id' => 1,
            'description' => 'First year baccalaureate books of language, social, moral, civics, and science,
            morals, civics and civics, and science',
            'resources_quantity' => 4,
            'given_quantity' => 0,
            'state' => 'used',
            'received' => false
        ]);
    }
}
