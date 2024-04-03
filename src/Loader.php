<?php

namespace lukay\UltraLuckyBlocks;

use customiesdevs\customies\block\CustomiesBlockFactory;
use customiesdevs\customies\block\Material;
use customiesdevs\customies\block\Model;
use customiesdevs\customies\item\CreativeInventoryInfo;
use lukay\UltraLuckyBlocks\block\LuckyBlock;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockIdentifier;
use pocketmine\block\BlockTypeIds;
use pocketmine\block\BlockTypeInfo;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {

    protected function onEnable(): void {
        $creativeInfo = new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_NATURE, CreativeInventoryInfo::NONE);
        $material = new Material(Material::TARGET_ALL, "lucky_block", Material::RENDER_METHOD_ALPHA_TEST);
        $model = new Model([$material], "geometry.lucky_block", new Vector3(-8, 0, -8), new Vector3(16, 16, 16));
        $id = BlockTypeIds::newId();

        CustomiesBlockFactory::getInstance()->registerBlock(static fn() => new LuckyBlock(new BlockIdentifier($id), "Lucky Block", new BlockTypeInfo(new BlockBreakInfo(1))), "custom:lucky_block", $model, $creativeInfo);
    }
}