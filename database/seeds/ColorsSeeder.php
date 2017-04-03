<?php

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Color::class)->create([
            'identifier' => 'basicBackground',
            'hex' => '#f5f8fa',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'bodyBackground',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'buttonBlueBackground',
            'hex' => '#3097d1',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'buttonColor',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'companyNameColor',
            'hex' => '#bbbfc3',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'companyNameTextShadow',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'headingColor',
            'hex' => '#2F3133',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'linkColor',
            'hex' => '#3869d4',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'textColor',
            'hex' => '#74787e',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'bodyBorderColor',
            'hex' => '#edeff2',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'innerBodyBackground',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'subCopyBorderColor',
            'hex' => '#edeff2',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'footerColor',
            'hex' => '#aeaeae',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'tableBorderColor',
            'hex' => '#edeff2',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'buttonGreenBackground',
            'hex' => '#2ab27b',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'buttonRedBackground',
            'hex' => '#bf5329',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'panelBackground',
            'hex' => '#edeff2',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'promotionBackground',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'promotionBorderColor',
            'hex' => '#9ba2ab',
        ]);

    }
}
