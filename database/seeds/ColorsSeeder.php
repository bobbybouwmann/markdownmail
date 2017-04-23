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
            'category' => 'background',
            'hex' => '#f5f8fa',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'bodyBackground',
            'category' => 'background',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'innerBodyBackground',
            'category' => 'background',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'buttonColor',
            'category' => 'buttons',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'buttonBlueBackground',
            'category' => 'buttons',
            'hex' => '#3097d1',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'buttonGreenBackground',
            'category' => 'buttons',
            'hex' => '#2ab27b',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'buttonRedBackground',
            'category' => 'buttons',
            'hex' => '#bf5329',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'companyNameColor',
            'category' => 'typography',
            'hex' => '#bbbfc3',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'companyNameTextShadow',
            'category' => 'typography',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'headingColor',
            'category' => 'typography',
            'hex' => '#2F3133',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'textColor',
            'category' => 'typography',
            'hex' => '#74787e',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'linkColor',
            'category' => 'typography',
            'hex' => '#3869d4',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'footerColor',
            'category' => 'typography',
            'hex' => '#aeaeae',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'bodyBorderColor',
            'category' => 'borders',
            'hex' => '#edeff2',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'subCopyBorderColor',
            'category' => 'borders',
            'hex' => '#edeff2',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'tableBorderColor',
            'hex' => '#edeff2',
            'category' => 'borders',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'panelBackground',
            'category' => 'components',
            'hex' => '#edeff2',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'promotionBackground',
            'category' => 'components',
            'hex' => '#ffffff',
        ]);

        factory(App\Color::class)->create([
            'identifier' => 'promotionBorderColor',
            'category' => 'components',
            'hex' => '#9ba2ab',
        ]);

    }
}
