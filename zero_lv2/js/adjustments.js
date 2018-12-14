

      
/* getGenotype() returns the character's genotype
*/
function getGenotype(){
    
   // let genotype = 90;
    let genotype = Math.floor(Math.random() * 100);
    
    let character;
    
    if(genotype >= 0 && genotype <=31)
        {
            character = "P. Strain Human";
        }
    else if(genotype >= 32 && genotype <= 65)
        {
            character = "Mutant";
        }
    else if(genotype >= 66 && genotype <= 87)
        {
            character = "Manimal";
        }
    else
        {
            character = "Plantient";
        }
    
    return character;   
}
	  
/* getBaseLanguages() returns the languages of the character based on genotype
*/
      
      function getBaseLanguages(species, intelligence) {
          
          let baseLanguage = "Nu-Speak";
          
          if(species === "Manimal" && intelligence >=8){
              baseLanguage = "Nu-Speak, Mamimal dialect";
          }
          else if(species === "Plantient" && intelligence >=8){
              baseLanguage = "Nu-Speak, Plantient dialect";
          }
          
          return baseLanguage;
      }



      /*getBonusLanguages() returns the bonus languages based on intelligence
      */
      
      function getBonusLanguages(intelligence){
          
          let bonusLanguages = "";
          
          if(intelligence >=13 && intelligence <=15) {
              bonusLanguages = " & 1 additional language";
          }
          else if(intelligence >=16 && intelligence <=17) {
              bonusLanguages = " & 2 additional languages";
          }
          else if(intelligence === 18) {
              bonusLanguages = " & 3 additional languages";
          }
          
          return bonusLanguages;
      }

/*	  
  getprofession() - returns the Randomly Generated profession
*/
function getProfession(){
	let profession = [
        
        {"role": "Hunter", "weapon": "Wood spear<br />", "damage": "1d5<br />", "equipment": ""},
        {"role": "Gatherer", "weapon": "", "damage": "", "equipment": "Large leather sack<br />"}
        
		];
	
		return profession[Math.floor(Math.random() * 2)]; 
		
}
      /*getPhysicalDescription() returns the mutant appearance and subtypes
      */
      function getPhysicalDescription(character){
          
          //let appearanceRoll = 29;
          let appearanceRoll = Math.floor(Math.random() * 30);
          let appearance = "";
          
          if(character === "Mutant" && appearanceRoll <= 27){
              appearance = getMutantAppearance().mutation;
          }
          else if(character === "Mutant" && appearanceRoll >= 28){
              appearance = getMutantAppearance().mutation + "<br />" + getMutantAppearance().mutation;
          }
          else if(character === "Manimal" && appearanceRoll <= 27){
              appearance = getManimalType().features;
          }
          else if(character === "Manimal" && appearanceRoll >= 28){
              appearance = getManimalType().features + "<br />" + getMutantAppearance().mutation;
          }
          else if(character === "Plantient" && appearanceRoll <= 28){
              appearance = getPlantient().features;
          }
          else if(character === "Plantient" && appearanceRoll >= 29){
              appearance = getManimalType().features + "<br />" + getMutantAppearance().mutation;
          }
          
          return appearance;
      }
  

/*addRandomWeapon()
*/
     function addRandomWeapon(){
          let weapon = [
              {"id": 1, "weapon": "Bone club", "damage": "1d6"},
              {"id": 2, "weapon": "Flint dagger", "damage": "1d4"},
              {"id": 3, "weapon": "Stone axe", "damage": "1d7"},
              {"id": 4, "weapon": "Stone-tipped spear", "damage": "1d6"},
              {"id": 5, "weapon": "Wooden club", "damage": "1d5"},
              {"id": 6, "weapon": "Blowgun & 12 darts", "damage": "1d3"},
              {"id": 7, "weapon": "Bow & 12 arrows", "damage": "1d6"},
              {"id": 8, "weapon": "Leather sling", "damage": "1d4"}
          ];
		return weapon[Math.floor(Math.random() * 8)]; 
      }
      
      

      function randomWeaponDamage(weapon){
          let damage = addSign(strengthModifier + adjustMeleeDamage(birthAugur, getLuckModifier(luck)));
          
          if(weapon.weapon === "Blowgun & 12 darts" || weapon.weapon === "Bow & 12 arrows" || weapon.weapon === "Leather sling"){
              damage = addSign(adjustRangeDamage(birthAugur, getLuckModifier(luck)));
          }
          
          return damage;
      }


/*addItem() returns a randomly selected item
*/
function addItem(){
    let item = [
        {"id": 1, "item": ""},
        {"id": 2, "item": ""},
        {"id": 3, "item": ""},
        {"id": 4, "item": ""},
        {"id": 5, "item": "Flint fire starter"},
        {"id": 6, "item": "Hemp rope, 50 ft."},
        {"id": 7, "item": "Jerked roxen meat"},
        {"id": 8, "item": "Leather rucksack"},
        {"id": 9, "item": "Torch (x3)"},
        {"id": 10, "item": "Bone necklace"},
        {"id": 11, "item": "Conch shell trumpet"},
        {"id": 12, "item": "Magic sticky rock (loadstone)"},
        {"id": 13, "item": "Paints & dyes"},
        {"id": 14, "item": "Bag of sea shells"},
        {"id": 15, "item": "Small shiny thing (trinket non-fuctional artifact)"},
        {"id": 16, "item": "Large shiny thing (trinket non-fuctional artifact)"},
        {"id": 17, "item": "A telepathic rat (pet)/1d3 attacks"}
    ];
        return item[Math.floor(Math.random() * 17)]; 
}
      
      /*getArmour() returns the name of armour type
      */
      function getArmour(item){
          let armour = "";
          
          if(item.id === 1){
              armour = "Fur cloak";
          }
          else if(item.id === 2){
              armour = "Hide armour";
          }
          else if(item.id === 3){
              armour = "Leather shield";
          }
          else if(item.id === 4){
              armour = "Antler hood";
          }
          return armour;
      }
   
      /*getArmourACBonus()
      */
      function getArmourACBonus(item){
          let acBonus = 0;
          
          if(item.id === 1){
              acBonus = 2;
          }
          else if(item.id === 2){
              acBonus = 3;
          }
          else if(item.id === 3 || item.id === 4){
              acBonus = 1;
          }
          return acBonus;
      }
         
      
      /*getArmourACBonusString()
      */
      function getArmourACBonusString(item){
          let acBonus = "";
          
          if(item.id === 1){
              acBonus = "+2";
          }
          else if(item.id === 2){
              acBonus = "+3";
          }
          else if(item.id === 3 || item.id === 4){
              acBonus = "+1";
          }
          return acBonus;
      }
 
            
      /*getFumble()
      */
      function getFumble(item){
          let fumble = "";
          
          if(item.id === 1){
              fumble = "d8";
          }
          else if(item.id === 2){
              fumble = "d12";
          }
          else if(item.id === 3 || item.id === 4){
              fumble = "d8";
          }
          return fumble;
      }
      
                  
      /*getFumbleDie()
      */
      function getFumbleDie(item){
          let fumbleDie = "d4";
          
          if(item.id === 1){
              fumbleDie = "d8";
          }
          else if(item.id === 2){
              fumbleDie = "d12";
          }
          else if(item.id === 3 || item.id === 4){
              fumbleDie = "d8";
          }
          return fumbleDie;
      }
      



/* getMaxTechLevel() gets the maximum tech level based on Intelligence
*/
    
      function getMaxTechLevel(intelligence) {
          let techLevel = 0;
          
          if(intelligence >= 3 && intelligence <=7)
              {
                  techLevel = 1;
              }
          else if(intelligence >= 8 && intelligence <=9)
              {
                  techLevel = 2;
              }
          else if(intelligence >= 10 && intelligence <=11)
              {
                  techLevel = 3;
              }
          else if(intelligence >= 12 && intelligence <=14)
              {
                  techLevel = 4;
              }
          else if(intelligence >= 15 && intelligence <=17)
              {
                  techLevel = 5;
              }
          else if(intelligence >= 18 && intelligence <=23)
              {
                  techLevel = 6;
              }
          else{
                techLevel = 7;
          }
          
          return techLevel;
      }
      
      
	 	
/*
hitPointAdjustPerLevel (luckySign, luckModifier) - returns the additional/minus hit points
the character received per level from their Stamina modifier and whether they have the Lucky Sign "The Ecobot".
*/
	  
function hitPointAdjustPerLevel (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign != undefined && luckySign.luckySign === "The Ecobot"){
        adjust = luckModifier;
     }
	return adjust;
}

/*
 getBaseArmourClass(agilityModifier)- returns the base armour class of the character
*/
function getBaseArmourClass(agilityModifier){
	let armourClass = 10;
	baseArmourClass = armourClass + agilityModifier;
	return baseArmourClass;
}	  



/*
addModifierSign (modifier) adds a + sign to positive integers; use for ability modifiers, saving throws, etc.
*/
function addModifierSign (modifier) {
	if(modifier >= 0 ) {
		return "+" + modifier;
	}
	else {
		return modifier;
	}
}
	  


/*
meleeAdjust (luckySign, luckModifier) - adds bonus/penality to Melee attack based on whether the character possesses specific Lucky Signs
*/
function meleeAdjust (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && luckySign.luckySign === "Nuclear Winter"){
        adjust = luckModifier;
     }
	else if (luckySign.luckySign != undefined && luckySign.luckySign === "The Roxen") {
		adjust = luckModifier;
	}
	return adjust;
}

/*
rangeAdjust (luckySign, luckModifier) - adds bonus/penality to Range attack based on whether the character possesses specific Lucky Signs
*/	  
function rangeAdjust (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && (luckySign.luckySign === "Nuclear Winter" || luckySign.luckySign === "The Triffid")){
        adjust = luckModifier;
     }
	return adjust;
}
	 
/*
getSpeed (species) returns the base speed of the character based on their genotype
*/
function getSpeed (species) {
	let speed = 30;
	if(species == "Plantient") {
		speed = 20;
	}
	return speed;
}

/*
 addLuckToSpeed (luckySign, luckModifier) adds bonuses to the character's speed if they have a positive Luck Modifier and the Lucky Sign of The Accelerant
*/
function addLuckToSpeed (luckySign, luckModifier) {
	let addSpeed = 0;
	if (luckySign.luckySign != undefined && luckySign.luckySign === "The Accelerant" && luckModifier == 1){
		addSpeed = 5;
	}
	else if (luckySign.luckySign != undefined && luckySign.luckySign === "The Accelerant" && luckModifier == 2){
		addSpeed = 10;
	}
	else if (luckySign.luckySign != undefined && luckySign.luckySign === "The Accelerant" && luckModifier == 3){
		addSpeed = 15;
	}
	return addSpeed;
}



/*
adjustRef (luckySign, luckModifier) - add bonus/penality to Saving Throw based on Lucky Sign
*/
function adjustRef (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && (luckySign.luckySign === "The Survivor" || luckySign.luckySign === "The Scientist")){
        adjust = luckModifier;
     }
	return adjust;
}
	 
/*
adjustFort (luckySign, luckModifier) - add bonus/penality to Saving Throw based on Lucky Sign
*/
function adjustFort (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && (luckySign.luckySign === "The Survivor" || luckySign.luckySign === "The Glow")){
        adjust = luckModifier;
     }
	return adjust;
}
	  
/*
adjustWill (luckySign, luckModifier) - add bonus/penality to Saving Throw based on Lucky Sign
*/
function adjustWill (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && (luckySign.luckySign === "The Survivor" || luckySign.luckySign === "The Esper")){
        adjust = luckModifier;
     }
	return adjust;
}	 

/*adjustMeleeDamage (luckySign, luckModifier) adds luck mod to melee damage rolls if character has specific Luck sign
*/
function adjustMeleeDamage (luckySign, luckModifier){          
    let adjust = 0;        
    if (luckySign.luckySign != undefined && (luckySign.luckySign === "The Apocalypse" || luckySign.luckySign === "Ragnarok")){
        adjust = luckModifier;
     }
	return adjust;
}

      
/*adjustRangeDamage (luckySign, luckModifier) adds luck mod to range damage rolls if character has specific Luck sign
*/
function adjustRangeDamage (luckySign, luckModifier){          
    let adjust = 0;        
    if (luckySign.luckySign != undefined && (luckySign.luckySign === "The Apocalypse" || luckySign.luckySign === "Revelations")){
        adjust = luckModifier;
     }
	return adjust;
}


/*
adjustInit (luckySign, luckModifier) - add bonus/penality to Initiative based on Lucky Sign
*/
function adjustInit (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && luckySign.luckySign === "The CPU"){
        adjust = luckModifier;
     }
	return adjust;
}	


	  
/*
adjustAC (luckySign, luckModifier) - add bonus/penality to AC based on Lucky Sign
*/
function adjustAC (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && luckySign.luckySign === "The Bunker"){
        adjust = luckModifier;
     }
	return adjust;
}	
	  
/*
adjustCrit (luckySign, luckModifier) - add bonus/penality to Crit based on Lucky Sign
*/
function adjustCrit (luckySign, luckModifier) {
   let adjust = luckModifier * 1;
    if (luckySign.luckySign != undefined && luckySign.luckySign === "The War-Bot"){
        adjust = luckModifier * 2;
     }
	return adjust;
}	
	  
/*
adjustFumble (luckySign, luckModifier) - add bonus/penality to Fumble based on Lucky Sign
*/
function adjustFumble  (luckySign, luckModifier) {
   let adjust = luckModifier * -1;
    if (luckySign.luckySign != undefined && luckySign.luckySign === "The Backup Disk"){
        adjust = luckModifier * -2;
     }
	return adjust;
}	


	  
/*addSign (modifier) Adds a + sign to value if value is 1 or greater.  If value is 0, then a empty String "" is returned.
*/
function addSign (modifier) {
	if(modifier > 0 ) {
		return "+" + modifier;
	}
	else if(modifier === 0) {
		return "";
	}
	else {
		return modifier;
	}
}
      
       
/*
meleeDamageAdjust (luckySign, luckModifier) - adds bonus/penality to Melee attack based on whether the character possesses specific Lucky Signs
*/
function meleeDamageAdjust (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && luckySign.luckySign === "The Apocalypse"){
        adjust = luckModifier;
     }
	else if (luckySign.luckySign != undefined && luckySign.luckySign === "Ragnarok") {
		adjust = luckModifier;
	}
	return adjust;
}

       
/*
rangeDamageAdjust (luckySign, luckModifier) - adds bonus/penality to Melee attack based on whether the character possesses specific Lucky Signs
*/
function rangeDamageAdjust (luckySign, luckModifier) {
   let adjust = 0;
    if (luckySign.luckySign != undefined && luckySign.luckySign === "The Apocalypse"){
        adjust = luckModifier;
     }
	else if (luckySign.luckySign != undefined && luckySign.luckySign === "Revelations") {
		adjust = luckModifier;
	}
	return adjust;
}

       