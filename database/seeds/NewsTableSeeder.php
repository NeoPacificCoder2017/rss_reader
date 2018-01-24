<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news=[];

        for($i = 0; $i<10; $i++):
            $userId=rand(1,10);
            $titleNews=str_random(10);
            $link=str_random(10);
            $rssFeedId=rand(1,10);
            $categoryId=rand(1,10);
            $description=str_random(20);
            $date='2018-'.'01-'.rand(10,31);
            $time='0'.rand(1,9).':'.rand(10,59).':'.rand(10,59);
            $pubdate=$date.' '.$time;
            $viewed=rand(0,1);

            $news[]=[
                'user_id'=>$userId,
                'title'=>$titleNews,
                'link'=>$link,
                'rss_feed_id'=>$rssFeedId,
                'category_id'=>$categoryId,
                'description'=>$description,
                'pubdate'=>$pubdate,
                'viewed'=>$viewed,
            ];
    endfor;
    foreach($news AS $new):
        News::create($new);
    endforeach;
    }
}
