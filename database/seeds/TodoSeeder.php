<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Todo;
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++)
        {DB::table('todos')->insert(
            [
                'title' => 'pray'.rand(0,9),
                'description' => 'my first task'.rand(0,9),
                'completed'=> true
            ]
        );}



    }
}
