<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => '张大革', 'age' => 19, 'cz' => 10, 'ys' => 9, 'tn' => 10, 'zl' => 11, 'js' => 12, 'type' => 1, 'position'=> 1, 'skill_id'=> 2],
            ['name' => '张1革', 'age' => 19, 'cz' => 10, 'ys' => 9, 'tn' => 10, 'zl' => 11, 'js' => 12, 'type' => 1, 'position'=> 1, 'skill_id'=> 2],
            ['name' => '张2革', 'age' => 19, 'cz' => 10, 'ys' => 9, 'tn' => 10, 'zl' => 11, 'js' => 12, 'type' => 1, 'position'=> 1, 'skill_id'=> 2],
            ['name' => '张3革', 'age' => 19, 'cz' => 10, 'ys' => 9, 'tn' => 10, 'zl' => 11, 'js' => 12, 'type' => 1, 'position'=> 1, 'skill_id'=> 2],
            ['name' => '张4革', 'age' => 19, 'cz' => 10, 'ys' => 9, 'tn' => 10, 'zl' => 11, 'js' => 12, 'type' => 1, 'position'=> 1, 'skill_id'=> 2],
        ]);
    }
}
