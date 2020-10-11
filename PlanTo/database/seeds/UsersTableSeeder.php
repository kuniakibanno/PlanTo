<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'number'         => '1',
            'belong'         => '名古屋市　〇〇課',
            'name'           => '名古屋　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'nagoya@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '2',
            'belong'         => '豊橋市　〇〇課',
            'name'           => '豊橋　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'toyohashi@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '3',
            'belong'         => '岡崎市　〇〇課',
            'name'           => '岡崎　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'okazaki@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '4',
            'belong'         => '一宮市　〇〇課',
            'name'           => '一宮　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'ichinomiya@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '5',
            'belong'         => '瀬戸市　〇〇課',
            'name'           => '瀬戸　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'seto@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '6',
            'belong'         => '半田市　〇〇課',
            'name'           => '半田　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'handa@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '7',
            'belong'         => '春日井市　〇〇課',
            'name'           => '春日井　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'kasugai@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '8',
            'belong'         => '豊川市　〇〇課',
            'name'           => '豊川　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'toyokawa@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '9',
            'belong'         => '津島市　〇〇課',
            'name'           => '津島　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'tsushima@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '10',
            'belong'         => '碧南市　〇〇課',
            'name'           => '碧南　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'hekinan@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '11',
            'belong'         => '刈谷市　〇〇課',
            'name'           => '刈谷　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'kariya@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '12',
            'belong'         => '豊田市　〇〇課',
            'name'           => '豊田　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'toyota@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '13',
            'belong'         => '安城市　〇〇課',
            'name'           => '安城　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'anjo@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '14',
            'belong'         => '西尾市　〇〇課',
            'name'           => '西尾　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'nishio@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '15',
            'belong'         => '蒲郡市　〇〇課',
            'name'           => '蒲郡　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'gamagoori@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '16',
            'belong'         => '犬山市　〇〇課',
            'name'           => '犬山　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'inuyama@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '17',
            'belong'         => '常滑市　〇〇課',
            'name'           => '常滑　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'tokoname@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '18',
            'belong'         => '江南市　〇〇課',
            'name'           => '江南　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'konan@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '19',
            'belong'         => '小牧市　〇〇課',
            'name'           => '小牧　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'komaki@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '20',
            'belong'         => '稲沢市　〇〇課',
            'name'           => '稲沢　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'inazawa@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '21',
            'belong'         => '新城市　〇〇課',
            'name'           => '新城　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'shinnshiro@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '22',
            'belong'         => '東海市　〇〇課',
            'name'           => '東海　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'tokai@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '23',
            'belong'         => '大府市　〇〇課',
            'name'           => '大府　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'obu@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '24',
            'belong'         => '知多市　〇〇課',
            'name'           => '知多　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'chita@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '25',
            'belong'         => '知立市　〇〇課',
            'name'           => '知立　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'chiryu@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '26',
            'belong'         => '尾張旭市　〇〇課',
            'name'           => '尾張旭　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'owariasahi@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '27',
            'belong'         => '高浜市　〇〇課',
            'name'           => '高浜　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'takahama@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '28',
            'belong'         => '岩倉市　〇〇課',
            'name'           => '岩倉　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'iwakura@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '29',
            'belong'         => '豊明市　〇〇課',
            'name'           => '豊明　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'toyoake@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '30',
            'belong'         => '日進市　〇〇課',
            'name'           => '日進　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'nisshin@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '31',
            'belong'         => '田原市　〇〇課',
            'name'           => '田原　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'tahara@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '32',
            'belong'         => '愛西市　〇〇課',
            'name'           => '愛西　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'aisai@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '33',
            'belong'         => '清須市　〇〇課',
            'name'           => '清須　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'kiyosu@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '34',
            'belong'         => '北名古屋市　〇〇課',
            'name'           => '北名古屋　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'kitanagoya@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '35',
            'belong'         => '弥富市　〇〇課',
            'name'           => '弥富　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'yatomi@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '36',
            'belong'         => 'みよし市　〇〇課',
            'name'           => 'みよし　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'miyoshi@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '37',
            'belong'         => 'あま市　〇〇課',
            'name'           => 'あま　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'ama@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '38',
            'belong'         => '長久手市　〇〇課',
            'name'           => '長久手　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'nagakute@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '39',
            'belong'         => '東郷町　〇〇課',
            'name'           => '東郷　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'togo@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '40',
            'belong'         => '豊山町　〇〇課',
            'name'           => '豊山　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'toyoyama@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '41',
            'belong'         => '大口町　〇〇課',
            'name'           => '大口　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'oguchi@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '42',
            'belong'         => '扶桑町　〇〇課',
            'name'           => '扶桑　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'huso@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '43',
            'belong'         => '大治町　〇〇課',
            'name'           => '大治　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'oharu@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '44',
            'belong'         => '蟹江町　〇〇課',
            'name'           => '蟹江　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'kanie@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '45',
            'belong'         => '飛島村　〇〇課',
            'name'           => '飛島　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'tobishima@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '46',
            'belong'         => '阿久比町　〇〇課',
            'name'           => '阿久比　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'agui@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '47',
            'belong'         => '東浦町　〇〇課',
            'name'           => '東浦　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'higashiura@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '48',
            'belong'         => '南知多町　〇〇課',
            'name'           => '南知多　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'minamichita@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '49',
            'belong'         => '美浜町　〇〇課',
            'name'           => '美浜　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'mihama@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '50',
            'belong'         => '武豊町　〇〇課',
            'name'           => '武豊　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'taketoyo@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '51',
            'belong'         => '幸田町　〇〇課',
            'name'           => '幸田　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'kota@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '52',
            'belong'         => '設楽町　〇〇課',
            'name'           => '設楽　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'shitara@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '53',
            'belong'         => '東栄町　〇〇課',
            'name'           => '東栄　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'toei@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ],
        [
            'number'         => '54',
            'belong'         => '豊根村　〇〇課',
            'name'           => '豊根　太郎',
            'tel'            => '０００ー１１１ー２２２２',
            'email'          => 'toyone@test.com',
            'password'       => Hash::make('12345678'),
            'remember_token' => '',
            'created_at'     => now(),
            'updated_at'     => now()
        ]
        ]);
    }
}
