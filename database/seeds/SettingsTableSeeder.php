<?php

//namespace Backpack\Settings\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        /*
        DB::table('settings')->insert([
            'key'           => 'contact_cc',
            'name'          => 'Contact form CC field',
            'description'   => 'Email adresses separated by comma, to be included as CC in the email sent by the contact form.',
            'value'         => '',
            'field'         => '{"name":"value","label":"Value","type":"email"}',
            'active'        => 1,

        ]);

        DB::table('settings')->insert([
            'key'           => 'contact_bcc',
            'name'          => 'Contact form BCC field',
            'description'   => 'Email adresses separated by comma, to be included as BCC in the email sent by the contact form.',
            'value'         => '',
            'field'         => '{"name":"value","label":"Value","type":"email"}',
            'active'        => 1,

        ]);

        DB::table('settings')->insert([
            'key'           => 'motto',
            'name'          => 'Motto',
            'description'   => 'Website motto',
            'value'         => 'this is the value',
            'field'         => '{"name":"value","label":"Value", "title":"Motto value" ,"type":"textarea"}',
            'active'        => 1,

        ]);
        */
    }
}
