<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('communes')->delete();

        DB::table('communes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Arica',
                'province_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Camarones',
                'province_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'General Lagos',
                'province_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Putre',
                'province_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Alto Hospicio',
                'province_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Iquique',
                'province_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Camiña',
                'province_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Colchane',
                'province_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Huara',
                'province_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Pica',
                'province_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Pozo Almonte',
                'province_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Tocopilla',
                'province_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'María Elena',
                'province_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Calama',
                'province_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Ollague',
                'province_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'San Pedro de Atacama',
                'province_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Antofagasta',
                'province_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Mejillones',
                'province_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Sierra Gorda',
                'province_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Taltal',
                'province_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Chañaral',
                'province_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Diego de Almagro',
                'province_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Copiapó',
                'province_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Caldera',
                'province_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Tierra Amarilla',
                'province_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Vallenar',
                'province_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Alto del Carmen',
                'province_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Freirina',
                'province_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Huasco',
                'province_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'La Serena',
                'province_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'Coquimbo',
                'province_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'Andacollo',
                'province_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'La Higuera',
                'province_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'Paihuano',
                'province_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'Vicuña',
                'province_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'Ovalle',
                'province_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'Combarbalá',
                'province_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'Monte Patria',
                'province_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'Punitaqui',
                'province_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'Río Hurtado',
                'province_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'Illapel',
                'province_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'Canela',
                'province_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'Los Vilos',
                'province_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'Salamanca',
                'province_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'La Ligua',
                'province_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'Cabildo',
                'province_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'Zapallar',
                'province_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'Papudo',
                'province_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'Petorca',
                'province_id' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'Los Andes',
                'province_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'San Esteban',
                'province_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'Calle Larga',
                'province_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'Rinconada',
                'province_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'San Felipe',
                'province_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'Llaillay',
                'province_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'Putaendo',
                'province_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            56 =>
            array (
                'id' => 57,
                'name' => 'Santa María',
                'province_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            57 =>
            array (
                'id' => 58,
                'name' => 'Catemu',
                'province_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            58 =>
            array (
                'id' => 59,
                'name' => 'Panquehue',
                'province_id' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            59 =>
            array (
                'id' => 60,
                'name' => 'Quillota',
                'province_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            60 =>
            array (
                'id' => 61,
                'name' => 'La Cruz',
                'province_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            61 =>
            array (
                'id' => 62,
                'name' => 'La Calera',
                'province_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            62 =>
            array (
                'id' => 63,
                'name' => 'Nogales',
                'province_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            63 =>
            array (
                'id' => 64,
                'name' => 'Hijuelas',
                'province_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            64 =>
            array (
                'id' => 65,
                'name' => 'Valparaíso',
                'province_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            65 =>
            array (
                'id' => 66,
                'name' => 'Viña del Mar',
                'province_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            66 =>
            array (
                'id' => 67,
                'name' => 'Concón',
                'province_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            67 =>
            array (
                'id' => 68,
                'name' => 'Quintero',
                'province_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            68 =>
            array (
                'id' => 69,
                'name' => 'Puchuncaví',
                'province_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            69 =>
            array (
                'id' => 70,
                'name' => 'Casablanca',
                'province_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            70 =>
            array (
                'id' => 71,
                'name' => 'Juan Fernández',
                'province_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            71 =>
            array (
                'id' => 72,
                'name' => 'San Antonio',
                'province_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            72 =>
            array (
                'id' => 73,
                'name' => 'Cartagena',
                'province_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            73 =>
            array (
                'id' => 74,
                'name' => 'El Tabo',
                'province_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            74 =>
            array (
                'id' => 75,
                'name' => 'El Quisco',
                'province_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            75 =>
            array (
                'id' => 76,
                'name' => 'Algarrobo',
                'province_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            76 =>
            array (
                'id' => 77,
                'name' => 'Santo Domingo',
                'province_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            77 =>
            array (
                'id' => 78,
                'name' => 'Isla de Pascua',
                'province_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            78 =>
            array (
                'id' => 79,
                'name' => 'Quilpué',
                'province_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            79 =>
            array (
                'id' => 80,
                'name' => 'Limache',
                'province_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            80 =>
            array (
                'id' => 81,
                'name' => 'Olmué',
                'province_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            81 =>
            array (
                'id' => 82,
                'name' => 'Villa Alemana',
                'province_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            82 =>
            array (
                'id' => 83,
                'name' => 'Colina',
                'province_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            83 =>
            array (
                'id' => 84,
                'name' => 'Lampa',
                'province_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            84 =>
            array (
                'id' => 85,
                'name' => 'Tiltil',
                'province_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            85 =>
            array (
                'id' => 86,
                'name' => 'Santiago',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            86 =>
            array (
                'id' => 87,
                'name' => 'Vitacura',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            87 =>
            array (
                'id' => 88,
                'name' => 'San Ramón',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            88 =>
            array (
                'id' => 89,
                'name' => 'San Miguel',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            89 =>
            array (
                'id' => 90,
                'name' => 'San Joaquín',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            90 =>
            array (
                'id' => 91,
                'name' => 'Renca',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            91 =>
            array (
                'id' => 92,
                'name' => 'Recoleta',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            92 =>
            array (
                'id' => 93,
                'name' => 'Quinta Normal',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            93 =>
            array (
                'id' => 94,
                'name' => 'Quilicura',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            94 =>
            array (
                'id' => 95,
                'name' => 'Pudahuel',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            95 =>
            array (
                'id' => 96,
                'name' => 'Providencia',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            96 =>
            array (
                'id' => 97,
                'name' => 'Peñalolén',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            97 =>
            array (
                'id' => 98,
                'name' => 'Pedro Aguirre Cerda',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            98 =>
            array (
                'id' => 99,
                'name' => 'Ñuñoa',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            99 =>
            array (
                'id' => 100,
                'name' => 'Maipú',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            100 =>
            array (
                'id' => 101,
                'name' => 'Macul',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            101 =>
            array (
                'id' => 102,
                'name' => 'Lo Prado',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            102 =>
            array (
                'id' => 103,
                'name' => 'Lo Espejo',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            103 =>
            array (
                'id' => 104,
                'name' => 'Lo Barnechea',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            104 =>
            array (
                'id' => 105,
                'name' => 'Las Condes',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            105 =>
            array (
                'id' => 106,
                'name' => 'La Reina',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            106 =>
            array (
                'id' => 107,
                'name' => 'La Pintana',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            107 =>
            array (
                'id' => 108,
                'name' => 'La Granja',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            108 =>
            array (
                'id' => 109,
                'name' => 'La Florida',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            109 =>
            array (
                'id' => 110,
                'name' => 'La Cisterna',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            110 =>
            array (
                'id' => 111,
                'name' => 'Independencia',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            111 =>
            array (
                'id' => 112,
                'name' => 'Huechuraba',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            112 =>
            array (
                'id' => 113,
                'name' => 'Estación Central',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            113 =>
            array (
                'id' => 114,
                'name' => 'El Bosque',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            114 =>
            array (
                'id' => 115,
                'name' => 'Conchalí',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            115 =>
            array (
                'id' => 116,
                'name' => 'Cerro Navia',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            116 =>
            array (
                'id' => 117,
                'name' => 'Cerrillos',
                'province_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            117 =>
            array (
                'id' => 118,
                'name' => 'Puente Alto',
                'province_id' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            118 =>
            array (
                'id' => 119,
                'name' => 'San José de Maipo',
                'province_id' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            119 =>
            array (
                'id' => 120,
                'name' => 'Pirque',
                'province_id' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            120 =>
            array (
                'id' => 121,
                'name' => 'San Bernardo',
                'province_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            121 =>
            array (
                'id' => 122,
                'name' => 'Buin',
                'province_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            122 =>
            array (
                'id' => 123,
                'name' => 'Paine',
                'province_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            123 =>
            array (
                'id' => 124,
                'name' => 'Calera de Tango',
                'province_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            124 =>
            array (
                'id' => 125,
                'name' => 'Melipilla',
                'province_id' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            125 =>
            array (
                'id' => 126,
                'name' => 'Alhué',
                'province_id' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            126 =>
            array (
                'id' => 127,
                'name' => 'Curacaví',
                'province_id' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            127 =>
            array (
                'id' => 128,
                'name' => 'María Pinto',
                'province_id' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            128 =>
            array (
                'id' => 129,
                'name' => 'San Pedro',
                'province_id' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            129 =>
            array (
                'id' => 130,
                'name' => 'Isla de Maipo',
                'province_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            130 =>
            array (
                'id' => 131,
                'name' => 'El Monte',
                'province_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            131 =>
            array (
                'id' => 132,
                'name' => 'Padre Hurtado',
                'province_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            132 =>
            array (
                'id' => 133,
                'name' => 'Peñaflor',
                'province_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            133 =>
            array (
                'id' => 134,
                'name' => 'Talagante',
                'province_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            134 =>
            array (
                'id' => 135,
                'name' => 'Codegua',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            135 =>
            array (
                'id' => 136,
                'name' => 'Coínco',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            136 =>
            array (
                'id' => 137,
                'name' => 'Coltauco',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            137 =>
            array (
                'id' => 138,
                'name' => 'Doñihue',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            138 =>
            array (
                'id' => 139,
                'name' => 'Graneros',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            139 =>
            array (
                'id' => 140,
                'name' => 'Las Cabras',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            140 =>
            array (
                'id' => 141,
                'name' => 'Machalí',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            141 =>
            array (
                'id' => 142,
                'name' => 'Malloa',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            142 =>
            array (
                'id' => 143,
                'name' => 'Mostazal',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            143 =>
            array (
                'id' => 144,
                'name' => 'Olivar',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            144 =>
            array (
                'id' => 145,
                'name' => 'Peumo',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            145 =>
            array (
                'id' => 146,
                'name' => 'Pichidegua',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            146 =>
            array (
                'id' => 147,
                'name' => 'Quinta de Tilcoco',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            147 =>
            array (
                'id' => 148,
                'name' => 'Rancagua',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            148 =>
            array (
                'id' => 149,
                'name' => 'Rengo',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            149 =>
            array (
                'id' => 150,
                'name' => 'Requínoa',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            150 =>
            array (
                'id' => 151,
                'name' => 'San Vicente de Tagua Tagua',
                'province_id' => 28,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            151 =>
            array (
                'id' => 152,
                'name' => 'Chépica',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            152 =>
            array (
                'id' => 153,
                'name' => 'Chimbarongo',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            153 =>
            array (
                'id' => 154,
                'name' => 'Lolol',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            154 =>
            array (
                'id' => 155,
                'name' => 'Nancagua',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            155 =>
            array (
                'id' => 156,
                'name' => 'Palmilla',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            156 =>
            array (
                'id' => 157,
                'name' => 'Peralillo',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            157 =>
            array (
                'id' => 158,
                'name' => 'Placilla',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            158 =>
            array (
                'id' => 159,
                'name' => 'Pumanque',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            159 =>
            array (
                'id' => 160,
                'name' => 'San Fernando',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            160 =>
            array (
                'id' => 161,
                'name' => 'Santa Cruz',
                'province_id' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            161 =>
            array (
                'id' => 162,
                'name' => 'La Estrella',
                'province_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            162 =>
            array (
                'id' => 163,
                'name' => 'Litueche',
                'province_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            163 =>
            array (
                'id' => 164,
                'name' => 'Marchigüe',
                'province_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            164 =>
            array (
                'id' => 165,
                'name' => 'Navidad',
                'province_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            165 =>
            array (
                'id' => 166,
                'name' => 'Paredones',
                'province_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            166 =>
            array (
                'id' => 167,
                'name' => 'Pichilemu',
                'province_id' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            167 =>
            array (
                'id' => 168,
                'name' => 'Curicó',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            168 =>
            array (
                'id' => 169,
                'name' => 'Hualañé',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            169 =>
            array (
                'id' => 170,
                'name' => 'Licantén',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            170 =>
            array (
                'id' => 171,
                'name' => 'Molina',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            171 =>
            array (
                'id' => 172,
                'name' => 'Rauco',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            172 =>
            array (
                'id' => 173,
                'name' => 'Romeral',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            173 =>
            array (
                'id' => 174,
                'name' => 'Sagrada Familia',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            174 =>
            array (
                'id' => 175,
                'name' => 'Teno',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            175 =>
            array (
                'id' => 176,
                'name' => 'Vichuquén',
                'province_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            176 =>
            array (
                'id' => 177,
                'name' => 'Talca',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            177 =>
            array (
                'id' => 178,
                'name' => 'San Clemente',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            178 =>
            array (
                'id' => 179,
                'name' => 'Pelarco',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            179 =>
            array (
                'id' => 180,
                'name' => 'Pencahue',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            180 =>
            array (
                'id' => 181,
                'name' => 'Maule',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            181 =>
            array (
                'id' => 182,
                'name' => 'San Rafael',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            182 =>
            array (
                'id' => 183,
                'name' => 'Curepto',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            183 =>
            array (
                'id' => 184,
                'name' => 'Constitución',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            184 =>
            array (
                'id' => 185,
                'name' => 'Empedrado',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            185 =>
            array (
                'id' => 186,
                'name' => 'Río Claro',
                'province_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            186 =>
            array (
                'id' => 187,
                'name' => 'Linares',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            187 =>
            array (
                'id' => 188,
                'name' => 'San Javier',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            188 =>
            array (
                'id' => 189,
                'name' => 'Parral',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            189 =>
            array (
                'id' => 190,
                'name' => 'Villa Alegre',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            190 =>
            array (
                'id' => 191,
                'name' => 'Longaví',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            191 =>
            array (
                'id' => 192,
                'name' => 'Colbún',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            192 =>
            array (
                'id' => 193,
                'name' => 'Retiro',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            193 =>
            array (
                'id' => 194,
                'name' => 'Yerbas Buenas',
                'province_id' => 33,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            194 =>
            array (
                'id' => 195,
                'name' => 'Cauquenes',
                'province_id' => 34,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            195 =>
            array (
                'id' => 196,
                'name' => 'Chanco',
                'province_id' => 34,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            196 =>
            array (
                'id' => 197,
                'name' => 'Pelluhue',
                'province_id' => 34,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            197 =>
            array (
                'id' => 198,
                'name' => 'Bulnes',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            198 =>
            array (
                'id' => 199,
                'name' => 'Chillán',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            199 =>
            array (
                'id' => 200,
                'name' => 'Chillán Viejo',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            200 =>
            array (
                'id' => 201,
                'name' => 'El Carmen',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            201 =>
            array (
                'id' => 202,
                'name' => 'Pemuco',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            202 =>
            array (
                'id' => 203,
                'name' => 'Pinto',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            203 =>
            array (
                'id' => 204,
                'name' => 'Quillón',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            204 =>
            array (
                'id' => 205,
                'name' => 'San Ignacio',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            205 =>
            array (
                'id' => 206,
                'name' => 'Yungay',
                'province_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            206 =>
            array (
                'id' => 207,
                'name' => 'Cobquecura',
                'province_id' => 36,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            207 =>
            array (
                'id' => 208,
                'name' => 'Coelemu',
                'province_id' => 36,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            208 =>
            array (
                'id' => 209,
                'name' => 'Ninhue',
                'province_id' => 36,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            209 =>
            array (
                'id' => 210,
                'name' => 'Portezuelo',
                'province_id' => 36,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            210 =>
            array (
                'id' => 211,
                'name' => 'Quirihue',
                'province_id' => 36,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            211 =>
            array (
                'id' => 212,
                'name' => 'Ránquil',
                'province_id' => 36,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            212 =>
            array (
                'id' => 213,
                'name' => 'Treguaco',
                'province_id' => 36,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            213 =>
            array (
                'id' => 214,
                'name' => 'San Carlos',
                'province_id' => 37,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            214 =>
            array (
                'id' => 215,
                'name' => 'Coihueco',
                'province_id' => 37,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            215 =>
            array (
                'id' => 216,
                'name' => 'San Nicolás',
                'province_id' => 37,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            216 =>
            array (
                'id' => 217,
                'name' => 'Ñiquén',
                'province_id' => 37,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            217 =>
            array (
                'id' => 218,
                'name' => 'San Fabián',
                'province_id' => 37,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            218 =>
            array (
                'id' => 219,
                'name' => 'Alto Biobío',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            219 =>
            array (
                'id' => 220,
                'name' => 'Antuco',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            220 =>
            array (
                'id' => 221,
                'name' => 'Cabrero',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            221 =>
            array (
                'id' => 222,
                'name' => 'Laja',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            222 =>
            array (
                'id' => 223,
                'name' => 'Los Ángeles',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            223 =>
            array (
                'id' => 224,
                'name' => 'Mulchén',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            224 =>
            array (
                'id' => 225,
                'name' => 'Nacimiento',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            225 =>
            array (
                'id' => 226,
                'name' => 'Negrete',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            226 =>
            array (
                'id' => 227,
                'name' => 'Quilaco',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            227 =>
            array (
                'id' => 228,
                'name' => 'Quilleco',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            228 =>
            array (
                'id' => 229,
                'name' => 'San Rosendo',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            229 =>
            array (
                'id' => 230,
                'name' => 'Santa Bárbara',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            230 =>
            array (
                'id' => 231,
                'name' => 'Tucapel',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            231 =>
            array (
                'id' => 232,
                'name' => 'Yumbel',
                'province_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            232 =>
            array (
                'id' => 233,
                'name' => 'Concepción',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            233 =>
            array (
                'id' => 234,
                'name' => 'Coronel',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            234 =>
            array (
                'id' => 235,
                'name' => 'Chiguayante',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            235 =>
            array (
                'id' => 236,
                'name' => 'Florida',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            236 =>
            array (
                'id' => 237,
                'name' => 'Hualpén',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            237 =>
            array (
                'id' => 238,
                'name' => 'Hualqui',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            238 =>
            array (
                'id' => 239,
                'name' => 'Lota',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            239 =>
            array (
                'id' => 240,
                'name' => 'Penco',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            240 =>
            array (
                'id' => 241,
                'name' => 'San Pedro de La Paz',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            241 =>
            array (
                'id' => 242,
                'name' => 'Santa Juana',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            242 =>
            array (
                'id' => 243,
                'name' => 'Talcahuano',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            243 =>
            array (
                'id' => 244,
                'name' => 'Tomé',
                'province_id' => 39,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            244 =>
            array (
                'id' => 245,
                'name' => 'Arauco',
                'province_id' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            245 =>
            array (
                'id' => 246,
                'name' => 'Cañete',
                'province_id' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            246 =>
            array (
                'id' => 247,
                'name' => 'Contulmo',
                'province_id' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            247 =>
            array (
                'id' => 248,
                'name' => 'Curanilahue',
                'province_id' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            248 =>
            array (
                'id' => 249,
                'name' => 'Lebu',
                'province_id' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            249 =>
            array (
                'id' => 250,
                'name' => 'Los Álamos',
                'province_id' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            250 =>
            array (
                'id' => 251,
                'name' => 'Tirúa',
                'province_id' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            251 =>
            array (
                'id' => 252,
                'name' => 'Angol',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            252 =>
            array (
                'id' => 253,
                'name' => 'Collipulli',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            253 =>
            array (
                'id' => 254,
                'name' => 'Curacautín',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            254 =>
            array (
                'id' => 255,
                'name' => 'Ercilla',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            255 =>
            array (
                'id' => 256,
                'name' => 'Lonquimay',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            256 =>
            array (
                'id' => 257,
                'name' => 'Los Sauces',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            257 =>
            array (
                'id' => 258,
                'name' => 'Lumaco',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            258 =>
            array (
                'id' => 259,
                'name' => 'Purén',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            259 =>
            array (
                'id' => 260,
                'name' => 'Renaico',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            260 =>
            array (
                'id' => 261,
                'name' => 'Traiguén',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            261 =>
            array (
                'id' => 262,
                'name' => 'Victoria',
                'province_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            262 =>
            array (
                'id' => 263,
                'name' => 'Temuco',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            263 =>
            array (
                'id' => 264,
                'name' => 'Carahue',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            264 =>
            array (
                'id' => 265,
                'name' => 'Cholchol',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            265 =>
            array (
                'id' => 266,
                'name' => 'Cunco',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            266 =>
            array (
                'id' => 267,
                'name' => 'Curarrehue',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            267 =>
            array (
                'id' => 268,
                'name' => 'Freire',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            268 =>
            array (
                'id' => 269,
                'name' => 'Galvarino',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            269 =>
            array (
                'id' => 270,
                'name' => 'Gorbea',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            270 =>
            array (
                'id' => 271,
                'name' => 'Lautaro',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            271 =>
            array (
                'id' => 272,
                'name' => 'Loncoche',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            272 =>
            array (
                'id' => 273,
                'name' => 'Melipeuco',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            273 =>
            array (
                'id' => 274,
                'name' => 'Nueva Imperial',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            274 =>
            array (
                'id' => 275,
                'name' => 'Padre Las Casas',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            275 =>
            array (
                'id' => 276,
                'name' => 'Perquenco',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            276 =>
            array (
                'id' => 277,
                'name' => 'Pitrufquén',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            277 =>
            array (
                'id' => 278,
                'name' => 'Pucón',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            278 =>
            array (
                'id' => 279,
                'name' => 'Saavedra',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            279 =>
            array (
                'id' => 280,
                'name' => 'Teodoro Schmidt',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            280 =>
            array (
                'id' => 281,
                'name' => 'Toltén',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            281 =>
            array (
                'id' => 282,
                'name' => 'Vilcún',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            282 =>
            array (
                'id' => 283,
                'name' => 'Villarrica',
                'province_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            283 =>
            array (
                'id' => 284,
                'name' => 'Valdivia',
                'province_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            284 =>
            array (
                'id' => 285,
                'name' => 'Corral',
                'province_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            285 =>
            array (
                'id' => 286,
                'name' => 'Lanco',
                'province_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            286 =>
            array (
                'id' => 287,
                'name' => 'Los Lagos',
                'province_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            287 =>
            array (
                'id' => 288,
                'name' => 'Máfil',
                'province_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            288 =>
            array (
                'id' => 289,
                'name' => 'Mariquina',
                'province_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            289 =>
            array (
                'id' => 290,
                'name' => 'Paillaco',
                'province_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            290 =>
            array (
                'id' => 291,
                'name' => 'Panguipulli',
                'province_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            291 =>
            array (
                'id' => 292,
                'name' => 'La Unión',
                'province_id' => 44,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            292 =>
            array (
                'id' => 293,
                'name' => 'Futrono',
                'province_id' => 44,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            293 =>
            array (
                'id' => 294,
                'name' => 'Lago Ranco',
                'province_id' => 44,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            294 =>
            array (
                'id' => 295,
                'name' => 'Río Bueno',
                'province_id' => 44,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            295 =>
            array (
                'id' => 297,
                'name' => 'Osorno',
                'province_id' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            296 =>
            array (
                'id' => 298,
                'name' => 'Puerto Octay',
                'province_id' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            297 =>
            array (
                'id' => 299,
                'name' => 'Purranque',
                'province_id' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            298 =>
            array (
                'id' => 300,
                'name' => 'Puyehue',
                'province_id' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            299 =>
            array (
                'id' => 301,
                'name' => 'Río Negro',
                'province_id' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            300 =>
            array (
                'id' => 302,
                'name' => 'San Juan de la Costa',
                'province_id' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            301 =>
            array (
                'id' => 303,
                'name' => 'San Pablo',
                'province_id' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            302 =>
            array (
                'id' => 304,
                'name' => 'Calbuco',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            303 =>
            array (
                'id' => 305,
                'name' => 'Cochamó',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            304 =>
            array (
                'id' => 306,
                'name' => 'Fresia',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            305 =>
            array (
                'id' => 307,
                'name' => 'Frutillar',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            306 =>
            array (
                'id' => 308,
                'name' => 'Llanquihue',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            307 =>
            array (
                'id' => 309,
                'name' => 'Los Muermos',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            308 =>
            array (
                'id' => 310,
                'name' => 'Maullín',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            309 =>
            array (
                'id' => 311,
                'name' => 'Puerto Montt',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            310 =>
            array (
                'id' => 312,
                'name' => 'Puerto Varas',
                'province_id' => 46,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            311 =>
            array (
                'id' => 313,
                'name' => 'Ancud',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            312 =>
            array (
                'id' => 314,
                'name' => 'Castro',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            313 =>
            array (
                'id' => 315,
                'name' => 'Chonchi',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            314 =>
            array (
                'id' => 316,
                'name' => 'Curaco de Vélez',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            315 =>
            array (
                'id' => 317,
                'name' => 'Dalcahue',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            316 =>
            array (
                'id' => 318,
                'name' => 'Puqueldón',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            317 =>
            array (
                'id' => 319,
                'name' => 'Queilén',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            318 =>
            array (
                'id' => 320,
                'name' => 'Quellón',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            319 =>
            array (
                'id' => 321,
                'name' => 'Quemchi',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            320 =>
            array (
                'id' => 322,
                'name' => 'Quinchao',
                'province_id' => 47,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            321 =>
            array (
                'id' => 323,
                'name' => 'Chaitén',
                'province_id' => 48,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            322 =>
            array (
                'id' => 324,
                'name' => 'Futaleufú',
                'province_id' => 48,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            323 =>
            array (
                'id' => 325,
                'name' => 'Hualaihué',
                'province_id' => 48,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            324 =>
            array (
                'id' => 326,
                'name' => 'Palena',
                'province_id' => 48,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            325 =>
            array (
                'id' => 327,
                'name' => 'Lago Verde',
                'province_id' => 49,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            326 =>
            array (
                'id' => 328,
                'name' => 'Coihaique',
                'province_id' => 49,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            327 =>
            array (
                'id' => 329,
                'name' => 'Aysén',
                'province_id' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            328 =>
            array (
                'id' => 330,
                'name' => 'Cisnes',
                'province_id' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            329 =>
            array (
                'id' => 331,
                'name' => 'Guaitecas',
                'province_id' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            330 =>
            array (
                'id' => 332,
                'name' => 'Río Ibáñez',
                'province_id' => 51,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            331 =>
            array (
                'id' => 333,
                'name' => 'Chile Chico',
                'province_id' => 51,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            332 =>
            array (
                'id' => 334,
                'name' => 'Cochrane',
                'province_id' => 52,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            333 =>
            array (
                'id' => 335,
                'name' => 'O\'Higgins',
                'province_id' => 52,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            334 =>
            array (
                'id' => 336,
                'name' => 'Tortel',
                'province_id' => 52,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            335 =>
            array (
                'id' => 337,
                'name' => 'Natales',
                'province_id' => 53,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            336 =>
            array (
                'id' => 338,
                'name' => 'Torres del Paine',
                'province_id' => 53,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            337 =>
            array (
                'id' => 339,
                'name' => 'Laguna Blanca',
                'province_id' => 54,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            338 =>
            array (
                'id' => 340,
                'name' => 'Punta Arenas',
                'province_id' => 54,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            339 =>
            array (
                'id' => 341,
                'name' => 'Río Verde',
                'province_id' => 54,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            340 =>
            array (
                'id' => 342,
                'name' => 'San Gregorio',
                'province_id' => 54,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            341 =>
            array (
                'id' => 343,
                'name' => 'Porvenir',
                'province_id' => 55,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            342 =>
            array (
                'id' => 344,
                'name' => 'Primavera',
                'province_id' => 55,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            343 =>
            array (
                'id' => 345,
                'name' => 'Timaukel',
                'province_id' => 55,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            344 =>
            array (
                'id' => 346,
                'name' => 'Cabo de Hornos',
                'province_id' => 56,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            345 =>
            array (
                'id' => 347,
                'name' => 'Antártica',
                'province_id' => 56,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
