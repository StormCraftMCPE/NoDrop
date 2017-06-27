<?php
namespace herojhjh;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
	
	
	public function onLoad(){
		$this->getLogger()->info("Plugin Loading");
	}
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("Enabled Plugin");
	}
	public function onDisable(){
		$this->getLogger()->info("Plugin Disabled");
	}
	
	public function OnDropItem(PlayerDropItemEvent $event){
		if($event->getPlayer()->getGamemode() === 1) $event->setCancelled();
	}
}
