<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'xml')]
class XmlCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        ray()->newScreen('XML demo');

        $string = '<?xml version="1.0"?> <!DOCTYPE catalog SYSTEM "catalog.dtd"> <catalog> <product description="Cardigan Sweater" product_image="cardigan.jpg"> <catalog_item gender="Mens"> <item_number>QWZ5671</item_number> <price>39.95</price> <size description="Medium"> <color_swatch image="red_cardigan.jpg">Red</color_swatch> <color_swatch image="burgundy_cardigan.jpg">Burgundy</color_swatch> </size> <size description="Large"> <color_swatch image="red_cardigan.jpg">Red</color_swatch> <color_swatch image="burgundy_cardigan.jpg">Burgundy</color_swatch> </size> </catalog_item> </product> </catalog>';
        ray()->xml($string);

        return Command::SUCCESS;
    }
}
