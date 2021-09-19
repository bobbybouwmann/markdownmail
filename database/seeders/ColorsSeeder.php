<?php

namespace Database\Seeders;

use App\Models\Color;
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
        Color::factory()->create([
            'identifier' => 'basicBackground',
            'category' => 'background',
            'hex' => '#f5f8fa',
        ]);

        Color::factory()->create([
            'identifier' => 'bodyBackground',
            'category' => 'background',
            'hex' => '#ffffff',
        ]);

        Color::factory()->create([
            'identifier' => 'innerBodyBackground',
            'category' => 'background',
            'hex' => '#ffffff',
        ]);

        Color::factory()->create([
            'identifier' => 'buttonColor',
            'category' => 'buttons',
            'hex' => '#ffffff',
        ]);

        Color::factory()->create([
            'identifier' => 'buttonBlueBackground',
            'category' => 'buttons',
            'hex' => '#3097d1',
        ]);

        Color::factory()->create([
            'identifier' => 'buttonGreenBackground',
            'category' => 'buttons',
            'hex' => '#2ab27b',
        ]);

        Color::factory()->create([
            'identifier' => 'buttonRedBackground',
            'category' => 'buttons',
            'hex' => '#bf5329',
        ]);

        Color::factory()->create([
            'identifier' => 'companyNameColor',
            'category' => 'typography',
            'hex' => '#bbbfc3',
        ]);

        Color::factory()->create([
            'identifier' => 'companyNameTextShadow',
            'category' => 'typography',
            'hex' => '#ffffff',
        ]);

        Color::factory()->create([
            'identifier' => 'headingColor',
            'category' => 'typography',
            'hex' => '#2F3133',
        ]);

        Color::factory()->create([
            'identifier' => 'textColor',
            'category' => 'typography',
            'hex' => '#74787e',
        ]);

        Color::factory()->create([
            'identifier' => 'linkColor',
            'category' => 'typography',
            'hex' => '#3869d4',
        ]);

        Color::factory()->create([
            'identifier' => 'footerColor',
            'category' => 'typography',
            'hex' => '#aeaeae',
        ]);

        Color::factory()->create([
            'identifier' => 'bodyBorderColor',
            'category' => 'borders',
            'hex' => '#edeff2',
        ]);

        Color::factory()->create([
            'identifier' => 'subCopyBorderColor',
            'category' => 'borders',
            'hex' => '#edeff2',
        ]);

        Color::factory()->create([
            'identifier' => 'tableBorderColor',
            'hex' => '#edeff2',
            'category' => 'borders',
        ]);

        Color::factory()->create([
            'identifier' => 'panelBackground',
            'category' => 'components',
            'hex' => '#edeff2',
        ]);

        Color::factory()->create([
            'identifier' => 'promotionBackground',
            'category' => 'components',
            'hex' => '#ffffff',
        ]);

        Color::factory()->create([
            'identifier' => 'promotionBorderColor',
            'category' => 'components',
            'hex' => '#9ba2ab',
        ]);

    }
}
