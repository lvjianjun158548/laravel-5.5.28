<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create('zh_CN');
        // echo $faker->name;
        // echo $faker->address;
        // echo $faker->text;
        
        for($i=0;$i<20000;$i++){
            DB::table('paper')->insert([
            'paper_name'=>'php一年级老师测试',
            'total_score'=>rand(1,100),
            'start_time'=>time()+86400,
            'duration'=>36,
            'status'=>rand(0,1)
            ]);
        }
        // DB::table('paper')->insert([
        // 	'paper_name'=>'php一年级老师测试',
        // 	'total_score'=>rand(1,100),
        // 	'start_time'=>time()+86400,
        // 	'duration'=>36,
        // 	'status'=>rand(0,1)
        // 	]);
    }
}
