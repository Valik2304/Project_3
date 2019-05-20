<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Basket;
use App\Good;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

          [  'name' => 'Джинси',
            'number' => '3'],

            [  'name' => 'Сорочки',
                'number' => '2'],

            [  'name' => 'Футболки',
                'number' => '3'],

            [  'name' => 'Шорти',
                'number' => '3'],

            [  'name' => 'Кросівки',
                'number' => '2'],

            [  'name' => 'Туфлі',
                'number' => '2'],

        ]);





        DB::table('goods')->insert([


           /* [   'name' => 'Сорочка Tom Tailor',
                'text' => 'Чоловіча сорочка з довгим рукавом. Модель прямого крою, з відкладним коміром. Застібається на гудзики.',
                'price' => '$53',
                'image' =>'/img/klassicheskie-02e.jpg'
            ],*/
            [   'category_id' =>'2',
                'filter' => 'Сорочки',
                'name' => 'Сорочка 2',
                'text' => 'Чоловіча сорочка з довгим рукавом. Модель прямого крою, з відкладним коміром. Застібається на гудзики.',
                'price' => '$47',
                'image' =>'/img/1513784863_w640_h640_zelenaya-muzhskaya-rubashkaуе.jpg'
            ],
            [   'category_id' =>'2',
                'filter' => 'Сорочки',
                'name' => 'Сорочка 3',
                'text' => 'Чоловіча сорочка з довгим рукавом. Модель прямого крою, з відкладним коміром. Застібається на гудзики.',
                'price' => '$49',
                'image' =>'/img/1378511908_w640_h640_chernaya-muzhskaya-rubashka.jpg'
            ],


            [   'category_id' =>'3',
                'filter' => 'Футболки',
                'name' => 'Polo Ralph Lauren - Поло ',
                'text' => 'Поло з колекції Polo Ralph Lauren. Модель виконана з гладкого трикотажу. Візерунок: однотонні. Склад: 100% Бавовна',
                'price' => '$77',
                'image' => '/img/large_img_1649241.jpg'
            ],
            [   'category_id' =>'3',
                'filter' => 'Футболки',
                'name' => 'Polo Ralph Lauren - Поло-2',
                'text' => 'Поло з колекції Polo Ralph Lauren. Модель виконана з гладкого трикотажу. Візерунок: однотонні. Склад: 100% Бавовна',
                'price' => '$75',
                'image' => '/img/1196129031_w640_h640_muzhskaya-futbolka-polo-polo.jpg'
            ],
            [   'category_id' =>'3',
                'filter' => 'Футболки',
                'name' => 'Polo Ralph Lauren - Поло-3 ',
                'text' => 'Поло з колекції Polo Ralph Lauren. Модель виконана з гладкого трикотажу. Візерунок: однотонні. Склад: 100% Бавовна',
                'price' => '$80',
                'image' => '/img/20180125141010_002973757_1.jpg'
            ],



            [   'category_id' =>'1',
                'filter' => 'Джинси',
                'name' => 'Levis 501 Original Fit – Rinse',
                'text' => 'Ікона американської культури, те з чого все почалося - класична 501 модель. Сидять рівно по стегну і нозі, традиційно застібаються на гудзики.',
                'price' => '$86',
                'image' => '/img/ao6b4444-1000x1500.jpg'
            ],
            [   'category_id' =>'1',
                'filter' => 'Джинси',
                'name' => 'Levis 505 Original Fit',
                'text' => 'Джинси levis 505 - прямі вільні джинси, добре підходять на розмір джинсів від 32 і вище. Незамінна модель у великих розмірах, традиційно застібаються на гудзики.',
                'price' => '$80',
                'image' => '/img/2745b93db0f623129493f2cfa3d08ebc.jpg'
            ],
            [   'category_id' =>'1',
                'filter' => 'Джинси',
                'name' => 'Levis 511 Original Fit-2',
                'text' => 'Джинси levis 511- популярна молодіжна модель, вдалий крій для невисокого і середнього зросту. Джинси Levis - один з найяскравіших символів Америки, просто вкажіть розмір і зовсім скоро вони будуть Вас.',
                'price' => '$78',
                'image' => '/img/119005864_w640_h640_muzhskie-dzhinsy-levis.jpg'
            ],



            [   'category_id' =>'4',
                'filter' => 'Шорти',
                'name' => 'Шорти Oodji 520 ',
                'text' => 'Застібка на блискавку і гудзик, з боків і ззаду прорізні кишені.',
                'price' => '$49',
                'image' => '/img/0a3072327caebcc1e914669bb783961e.jpg'
            ],
            [   'category_id' =>'4',
                'filter' => 'Шорти',
                'name' => 'Шорти Jack & Jones ',
                'text' => 'Застібка на блискавку і гудзик, з боків і ззаду прорізні кишені.',
                'price' => '$69',
                'image' => '/img/1136246581_1136246581.jpg'
            ],
            [   'category_id' =>'4',
                'filter' => 'Шорти',
                'name' => 'Шорти  Tommy Hilfiger',
                'text' => 'Застібка на блискавку і гудзик, з боків і ззаду прорізні кишені.',
                'price' => '$75',
                'image' => '/img/1164725726_w640_h640_muzhskie-modnye-shorty.jpg'
            ],



            [   'category_id' =>'5',
                'filter' => 'Кросівки',
                'name' => ' Thunder Spectra Puma Black/ High Risk Red ',
                'text' => 'Thunder - це нова модель від Puma, яка грунтується на дуже успішній моделі Thunder Spectra, стійкому тренді "dad shoe" і силуеті "chunky", відомому завдяки Yeezy 500.',
                'price' => '$175',
                'image' => '/img/HTB1c.o5uUR1BeNjy0Fmq6z0wVXap.jpg'
            ],
           /* [   'name' => ' Under Armour Ua Micro G Pursuit ',
                'text' => 'Американський бренд-новатор Under Armour випускає високотехнологічний функціональний спортивний одяг, взуття та аксесуари з 1996 року. Розпочавши свій шлях зі створення натільної білизни для гравців в американський футбол, завдяки своїм винятковим характеристикам Under Armour сьогодні є одним із найбільш зажаданих серед професійних спортсменів. 
                Впроваджуючи інновації в сфері інтернету речей, розробляючи власні мобільні фітнес-програми та високотехнологічні матеріали для спортивного екіпірування.',
                'price' => '$195',
                'image' => '/img/1020549662_w640_h640_under-armour-curry.jpg'
            ],*/
            [   'category_id' =>'5',
                'filter' => 'Кросівки',
                'name' => ' Reebok Classic Leather White/ Mineral',
                'text' => 'Стильні шкіряні кросівки Reebok Classic підходять для повсякденного використання. Шкіряна верхня і подушечка підошва надають стилю взуття та забезпечують комфорт.',
                'price' => '$185',
                'image' => '/img/1073679608_w640_h640_muzhskie-krossovki-reebok.jpg'
            ],


            [   'category_id' =>'6',
                'filter' => 'Туфлі',
                'name' => ' Чоловічі броги Dr Martens 3989 Smooth ',
                'text' => '3989 Brogue був вперше випущений в середині 1960-х років і виявився популярним серед розумніших субкультур, які були зачаровані брендом. ',
                'price' => '$225',
                'image' => '/img/s-chem-nosit-muzhskie-brogi--20.jpg'
            ],
            [   'category_id' =>'6',
                'filter' => 'Туфлі',
                'name' => 'Чоловічі броги Clarks air ',
                'text' => 'Clarks Air супер легкий комфорт із системою устілки Air. Зручність кросівок в класичних туфлях. Перфорована натуральна шкіра зовні і м\'яка шкіра всередині. ',
                'price' => '$250',
                'image' => '/img/1333566993_w1280_h1280_4h4jpqgfkrk.jpg'
            ],
           /* [   'name' => ' Чоловічі броги Roberto Paulo 736 ',
                'text' => 'Чоловічі туфлі броги Roberto Paulo - класика з індивідуальністю. Туфлі повністю виконані з натуральної телячої шкіри чорного кольору. Підошва гума зі шкірою.',
                'price' => '$275',
                'image' => '/img/1344600689_w640_h640_muzhskie-brogi.jpg'
            ],*/



        ]);

       // DB::table('baskets')->insert([]);

    }
}
