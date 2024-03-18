<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
           [
            'name'=>'Medley shirt',
            "price"=>"Rs 2000",
            "description"=>"Floral Medley shirt",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015110400988_1217.jpg"
           ],
           [
            'name'=>'Kassim shirt',
            "price"=>"Rs 2200",
            "description"=>"Kassim Stripes shirt",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015110400995_0023.jpg"
           ],
           [
            'name'=>'Jason shirt',
            "price"=>"Rs 1500",
            "description"=>"Navy Jason  shirt",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6302015110400004_0764.jpg"
           ],
           [
            'name'=>'Dillon stripe shirt',
            "price"=>"Rs 900",
            "description"=>"Dillon stripe shirt",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015117500331_1315.jpg"
           ],
           [
            'name'=>'Jason shirt',
            "price"=>"Rs 1000",
            "description"=>" Brick Jason shirt",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015110400971_1432.jpg"
           ],
           [
            'name'=>'Christian shirt',
            "price"=>"Rs 1200",
            "description"=>"Black Christian shirt",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015110400957_0628.jpg"
           ],
           [
            'name'=>'Iman oxford shirt',
            "price"=>"Rs 1500",
            "description"=>"Aqua Iman oxford shirt",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015117500351_1512.jpg"
           ],
           [
            'name'=>'Brook shirt',
            "price"=>"Rs 1800",
            "description"=>"Brook shirt with stripes",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015110400974_1223.jpg"
           ],
           [
            'name'=>'Greig shirt',
            "price"=>"Rs 2000",
            "description"=>"Aqua Greig shirt",
            "category"=>"shirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015110400958_1441.jpg"
           ],
           [
           'name'=>'Nairobi skinny denim',
            "price"=>"Rs 2000",
            "description"=>"Fashionable and tailored to perfection, the  Nairobi Skinny Denim is your go-to pair of jeans for an elegant look.",
            "category"=>"tshirt",
            "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6102015211510226_1652-np.jpg"
           ],
           [
            'name'=>'Mens classic canvas sneaker',
             "price"=>"Rs 2000",
             "description"=>"White classic canvas sneaker",
             "category"=>"shoes",
             "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001017525800005_mensclassiccanvassneaker_white_0067.jpg"
            ],
            [
                'name'=>'Mens  side flash knit sneaker',
                 "price"=>"Rs 2200",
                 "description"=>"White knitted sneaker",
                 "category"=>"shoes",
                 "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001017525700010_mensflashknitsneaker_offwhite_0636.jpg"
                ],
                [
                    'name'=>'Mens classic canvas sneaker',
                     "price"=>"Rs 2200",
                     "description"=>"Black canvas sneaker",
                     "category"=>"shoes",
                     "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001017525800003_mensclassiccanvassneaker_black_0034.jpg"
                    ],

                    [
                        'name'=>'Mens classic canvas sneaker',
                         "price"=>"Rs 2500",
                         "description"=>"Blue canvas sneaker",
                         "category"=>"shoes",
                         "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001017525800002_mensclassiccanvassneaker_navy_0005.jpg"
                        ],
                        [
                            'name'=>'Mens 3d knitted runner',
                             "price"=>"Rs 1500",
                             "description"=>"3d knitted sneaker",
                             "category"=>"shoes",
                             "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001017525700008_mens3dknittedrunner_navy_0527.jpg"
                            ],

                            [
                                'name'=>'Mens classic canvas sneaker',
                                 "price"=>"Rs 1500",
                                 "description"=>" classic canvas sneaker",
                                 "category"=>"shoes",
                                 "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001017525800004_mensclassiccanvassneaker_stone_0006_1_.jpg"
                                ],
                                [
                                    'name'=>'Mens side flash knit sneaker',
                                     "price"=>"Rs 1800",
                                     "description"=>" Flash knitted sneaker",
                                     "category"=>"shoes",
                                     "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001017525700017_mensflashknitsneaker_grey_0487_1_.jpg"
                                    ],
                                    [
                                        'name'=>'Hayden sneaker',
                                         "price"=>"Rs 3000",
                                         "description"=>" Sneaker",
                                         "category"=>"shoes",
                                         "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001011725700014_0029.jpg"
                                        ],
                                        [
                                            'name'=>'Hayden sneaker',
                                             "price"=>"Rs 3200",
                                             "description"=>" Sneaker",
                                             "category"=>"shoes",
                                             "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6001011725700015_0006.jpg"
                                            ],
                                        

                                            [
                                                'name'=>'Ocean trouser',
                                                 "price"=>"Rs 3200",
                                                 "description"=>" Brown Ocean trouser",
                                                 "category"=>"pants",
                                                 "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015211410384_0821_thumbnail.jpg"
                                                ],
                                                [
                                                    'name'=>'Milano straight leg chino',
                                                     "price"=>"Rs 2200",
                                                     "description"=>"The Milano straight - leg chino pants is the ultimate wardrobe essential ",
                                                     "category"=>"pants",
                                                     "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015111300021_0047.jpg"
                                                    ],
                                                    [
                                                        'name'=>'Venice slim fit chino',
                                                         "price"=>"Rs  1800",
                                                         "description"=>" Venice slim fit chino the ultimate wardrobe essential",
                                                         "category"=>"pants",
                                                         "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015211310322_0090.jpg"
                                                        ],
                                                        [
                                                            'name'=>'Pisa straight fit trouser',
                                                             "price"=>"Rs 3200",
                                                             "description"=>" Pisa straight fit trouser the ultimate wardrobe essential" ,
                                                             "category"=>"pants",
                                                             "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015211310325_0135.jpg"
                                                            ],
                                                            [
                                                                'name'=>'Milan straight fit chino',
                                                                 "price"=>"Rs 3200",
                                                                 "description"=>"Milan straight fit chino the ultimate wardrobe essential",
                                                                 "category"=>"pants",
                                                                 "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015211310319_0170.jpg"
                                                                ],
                                                                [
                                                                    'name'=>'Alexander Straight Leg Chino',
                                                                     "price"=>"Rs 3500",
                                                                     "description"=>"Alexander Straight Leg Chino  the ultimate wardrobe essential ",
                                                                     "category"=>"pants",
                                                                     "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015211310303_0005_1.jpg"
                                                                    ],
                                                                    [
                                                                        'name'=>'Madrid straight leg denim',
                                                                         "price"=>"Rs 2200",
                                                                         "description"=>" Madrid straight leg denim the ultimate wardrobe essential",
                                                                         "category"=>"pants",
                                                                         "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6102015211510224_0541.jpg"
                                                                        ],
                                                                        [
                                                                            'name'=>'Simon straight leg jean',
                                                                             "price"=>"Rs 1800",
                                                                             "description"=>" Simon straight leg jean the ultimate wardrobe essential",
                                                                             "category"=>"pants",
                                                                             "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6002015211501015_0176_1_5.jpg"
                                                                            ],
                                                                            [
                                                                                'name'=>'Im leg denim',
                                                                                 "price"=>"Rs 2000",
                                                                                 "description"=>" Im leg denim the ultimate wardrobe essential",
                                                                                 "category"=>"pants",
                                                                                 "gallery"=>"https://www.polo.co.za/media/catalog/product/cache/e4a8efea9a5d44aa8b216309a054e48a/p/6/p6102015211510297_0397_np.jpg"
                                                                                ],
        ]);
    }
}
