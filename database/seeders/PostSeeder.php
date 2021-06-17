<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'My First Post',
                'slug' => 'my-first-post',
                'content' => 'Ipsum cupidatat exercitation irure aute reprehenderit esse deserunt. Cupidatat sit voluptate culpa mollit aliquip laboris enim irure consectetur nisi. Ipsum ullamco irure ipsum pariatur duis quis esse sunt. Excepteur proident non consectetur mollit. Nisi ut et sunt irure amet veniam eiusmod consequat laborum irure non amet consectetur do. Labore Lorem laboris deserunt duis magna est laborum veniam.

                Ullamco mollit sunt qui enim nostrud consequat qui enim consequat in officia in esse. Officia aute reprehenderit non mollit. Ipsum veniam cupidatat cillum reprehenderit quis consequat. Ea aliqua irure elit deserunt sit pariatur ad duis velit est culpa adipisicing. Reprehenderit cupidatat fugiat Lorem excepteur aliquip sit. Voluptate do dolore et ex ullamco ullamco. Cillum in dolore do quis aliqua ad voluptate aute consectetur esse.
                
                Non occaecat adipisicing irure veniam sint excepteur amet mollit. Eu aute qui anim dolore. Ad irure nulla ipsum tempor Lorem deserunt fugiat eu. Do magna ex cillum commodo commodo est elit ex adipisicing sint proident adipisicing. In nostrud esse ullamco voluptate cupidatat commodo velit culpa veniam nisi reprehenderit dolor laborum do. Eu reprehenderit proident sit eiusmod fugiat elit incididunt sunt voluptate Lorem.
                
                Velit culpa laborum magna deserunt adipisicing adipisicing nisi laboris ut nisi enim aliqua. Exercitation esse cupidatat tempor sit excepteur sunt duis esse duis laboris et sit dolore aute. Aliquip sint sit officia do ea anim dolore. Labore officia ex nostrud irure ut non voluptate non quis esse. Laborum adipisicing quis tempor occaecat exercitation elit ex est esse velit qui deserunt aute non. Sunt occaecat ex ut duis veniam adipisicing et in est.',
                'image_path' => 'example01.jpg',
                'created_at' => now(),
                'user_id' => 1
            ],
            [
                'title' => 'My Second Post',
                'slug' => 'my-second-post',
                'content' => 'Sit consequat nulla dolor sint nostrud adipisicing culpa. Enim adipisicing labore veniam quis est occaecat eu. Lorem nostrud mollit sint incididunt adipisicing id commodo do. Dolore eiusmod amet cupidatat cillum elit amet sint proident laborum anim ad. Adipisicing cillum sit minim ut nisi nostrud elit id do mollit officia exercitation consequat amet.

                Aute dolor consectetur cillum consectetur cillum aliqua magna veniam minim in eu exercitation minim laborum. Magna tempor elit esse et reprehenderit nostrud officia eu labore occaecat. Labore exercitation ad anim ea qui. Exercitation tempor minim in ullamco deserunt reprehenderit eu cupidatat. Duis culpa exercitation aliquip magna ut voluptate sunt. Adipisicing pariatur commodo labore cupidatat commodo eiusmod aute eu commodo incididunt ipsum. Adipisicing ipsum eu sit nulla consequat do fugiat enim.
                
                Non et esse ex nostrud. Minim laboris adipisicing laborum voluptate ex qui id qui. Aliqua aliqua consectetur occaecat qui velit ipsum dolor consectetur irure. Commodo ea quis amet consectetur ullamco amet do.',
                'image_path' => 'example02.jpg',
                'created_at' => now(),
                'user_id' => 1
            ],
        ]);
    }
}
