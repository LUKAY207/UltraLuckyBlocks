<?php

namespace lukay\UltraLuckyBlocks\block;

use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\item\VanillaItems;

class LuckyBlock extends Block {

    public function getDrops(Item $item): array {
        $itemList =
            [
                0 => "Netherite Equipment",
                1 =>  "Netherite Armor",
                2 => "Diamond Equipment",
                3 => "Diamond Armor",
                4 => "Golden Equipment",
                5 => "Golden Armor",
                6 => "Iron Equipment",
                7 => "Iron Armor",
                8 => "Stone Equipment",
                9 => "Chainmal Armor",
                10 => "Wooden Equipment",
                11 => "Wooden Armor",
            ];

        $itemKey = mt_rand(array_key_first($itemList), array_key_last($itemList));

        if ($itemKey == 0) {
            return [VanillaItems::NETHERITE_SWORD(), VanillaItems::NETHERITE_AXE(), VanillaItems::NETHERITE_PICKAXE(), VanillaItems::NETHERITE_SHOVEL(), VanillaItems::NETHERITE_HOE()];
        }

        if ($itemKey == 1) {
            return [VanillaItems::NETHERITE_HELMET(), VanillaItems::NETHERITE_CHESTPLATE(), VanillaItems::NETHERITE_LEGGINGS(), VanillaItems::NETHERITE_BOOTS()];
        }

        if ($itemKey == 2) {
            return [VanillaItems::DIAMOND_SWORD(), VanillaItems::DIAMOND_AXE(), VanillaItems::DIAMOND_PICKAXE(), VanillaItems::DIAMOND_SHOVEL(), VanillaItems::DIAMOND_HOE()];
        }

        if ($itemKey == 3) {
            return [VanillaItems::DIAMOND_HELMET(), VanillaItems::DIAMOND_CHESTPLATE(), VanillaItems::DIAMOND_LEGGINGS(), VanillaItems::DIAMOND_BOOTS()];
        }

        if ($itemKey == 4) {
            return [VanillaItems::GOLDEN_SWORD(), VanillaItems::GOLDEN_AXE(), VanillaItems::GOLDEN_PICKAXE(), VanillaItems::GOLDEN_SHOVEL(), VanillaItems::GOLDEN_HOE()];
        }

        if ($itemKey == 5) {
            return [VanillaItems::GOLDEN_HELMET(), VanillaItems::GOLDEN_CHESTPLATE(), VanillaItems::GOLDEN_LEGGINGS(), VanillaItems::GOLDEN_BOOTS()];
        }

        if ($itemKey == 6) {
            return [VanillaItems::IRON_SWORD(), VanillaItems::IRON_AXE(), VanillaItems::IRON_PICKAXE(), VanillaItems::IRON_SHOVEL(), VanillaItems::IRON_HOE()];
        }

        if ($itemKey == 7) {
            return [VanillaItems::IRON_HELMET(), VanillaItems::IRON_CHESTPLATE(), VanillaItems::IRON_LEGGINGS(), VanillaItems::IRON_BOOTS()];
        }

        if ($itemKey == 8) {
            return [VanillaItems::STONE_SWORD(), VanillaItems::STONE_AXE(), VanillaItems::STONE_PICKAXE(), VanillaItems::STONE_SHOVEL(), VanillaItems::STONE_HOE()];
        }

        if ($itemKey == 9) {
            return [VanillaItems::CHAINMAIL_HELMET(), VanillaItems::CHAINMAIL_CHESTPLATE(), VanillaItems::CHAINMAIL_LEGGINGS(), VanillaItems::CHAINMAIL_BOOTS()];
        }

        if ($itemKey == 10) {
            return [VanillaItems::WOODEN_SWORD(), VanillaItems::WOODEN_AXE(), VanillaItems::WOODEN_PICKAXE(), VanillaItems::WOODEN_SHOVEL(), VanillaItems::WOODEN_HOE()];
        }

        if ($itemKey == 11) {
            return [VanillaItems::LEATHER_CAP(), VanillaItems::LEATHER_TUNIC(), VanillaItems::LEATHER_PANTS(), VanillaItems::LEATHER_BOOTS()];
        }
    }
}