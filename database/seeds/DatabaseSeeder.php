<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//$this->call(SettingsTableSeeder::class);

    	 // Tên website
        DB::table('settings')->insert([
            'key'           => 'sitename',
            'name'          => 'Tên website',
            'description'   => '',
            'value'         => 'Website Đội công tác xã hội HUTECH',
            'field'         => '{"name":"value","label":"Giá trị","type":"text"}',
            'active'        => 1,
        ]);

        // Keywords
        DB::table('settings')->insert([
            'key'           => 'keywords',
            'name'          => 'Từ khóa',
            'description'   => 'Từ khóa cho SEO Website',
            'value'         => 'công tác xã hội, hutech, ctxh',
            'field'         => '{"name":"value","label":"Giá trị","type":"text"}',
            'active'        => 1,
        ]);

        // Mô tả
        DB::table('settings')->insert([
            'key'           => 'description',
            'name'          => 'Mô tả',
            'description'   => 'Mô tả website cho SEO Website',
            'value'         => 'Đây là website chính thức của đội công tác xã hội HUTECH.',
            'field'         => '{"name":"value","label":"Giá trị","type":"text"}',
            'active'        => 1,
        ]);
    }
}
