<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys = [];
        
                for($i = 0; $i < 10; $i++):
                    $name = str_random(10);
                    $userID = rand(1, 3);
                    
                    $categorys[] = [
                        'name'=>$name,
                        'user_id'=>$userID,
                    ];
                endfor;
        
                foreach($categorys AS $categorie):
                    Category::create($categorie);
                endforeach;
    }
}
