<?php

namespace lukay\UltraLuckyBlocks\block;

use pocketmine\block\Block;
use pocketmine\block\VanillaBlocks;
use pocketmine\item\Item;
use pocketmine\item\VanillaItems;

class LuckyBlock extends Block {

    public function getDrops(Item $item): array {
        $itemList =
            [
                0 => VanillaBlocks::OAK_LOG()->asItem(),
                1 => VanillaItems::DIAMOND_SWORD(),
                2 => VanillaItems::IRON_SWORD(),
                3 => VanillaItems::STONE_SWORD()
            ];

        $itemKey = mt_rand(array_key_first($itemList), array_key_last($itemList));
        $itemMaxCount = $itemList[$itemKey]->getMaxStackSize();
        $itemCount = mt_rand(1, $itemMaxCount);

        return [$itemList[$itemKey]->setCount($itemCount)];
    }
}