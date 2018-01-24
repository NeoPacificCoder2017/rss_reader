<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];
        
                for($i = 0; $i < 10; $i++):
                    $name = str_random(10);
                    $userID = rand(1, 3);
                    
                    $categories[] = [
                        'name'=>$name,
                        'user_id'=>$userID,
                    ];
                endfor;
        
                foreach($categories AS $categorie):
                    Categorie::create($categorie);
                endforeach; 
    }
}
