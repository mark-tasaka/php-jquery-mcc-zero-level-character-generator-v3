<!DOCTYPE html>
<html>
<head>
<title>Mutant Crawl Classics Version 3 Zero Level Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Mutant Crawl Classics Zero Level Character Generator. Goodman Games.">
	<meta name="keywords" content="Mutant Crawl Classics, Jim Wampler, Goodman Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2018">
		

	<link rel="stylesheet" type="text/css" href="css/mcc_zero_characters3.css">
    <!--
    <script type="text/javascript" src="js/dieroll.js"></script>
    <script type="text/javascript" src="js/abilityModifiers.js"></script>-->
    
    <script type="text/javascript" src="js/luckySign.js"></script>
   <script type="text/javascript" src="js/adjustments.js"></script>
    <script type="text/javascript" src="js/name.js"></script>
    
    <script type="text/javascript" src="js/manimalAppearance.js"></script>
    <script type="text/javascript" src="js/mutantAppearance.js"></script>
    <script type="text/javascript" src="js/plantientAppearance.js"></script>
    
</head>
<body>
    
    <!--- php --->

    
    
    
<!--Version 3: JQuery  -->
	

  <img id="character_sheet"/>
   <section>
       
	   <aside id="topleft">
    	<span id="name0"></span>
           
           
		<span id="profession0"></span>
		<span id="strength0"></span> <span id="strengthMod0"></span>
		<span id="agility0"></span>  <span id="agilityMod0"></span>
           
		<span id="stamina0"></span>  <span id="staminaMod0"></span>
		<span id="personality0"></span> <span id="personalityMod0"></span>
		<span id="intelligence0"></span> <span id="intelligenceMod0"></span>
		<span id="luck0"></span> <span id="luckMod0"></span>
           
		<p id="birthAugur0"><span id="luckySign0"></span>: <span id="luckyRoll0"></span> (<span id="LuckySignBonus0"></span>)</p>
           
        <span id="baseAC0"></span>
           
        <span id="modifiedAC0"></span>
           
		<span id="hitPoints0"></span> 
           
        <span id="ref0"></span>
        <span id="fort0"></span>
        <span id="will0"></span>
		   
        <span id="init0"></span>
		<span id="melee0"></span>
        <span id="range0"></span>
		<span id="meleeDamage0"></span>
		 <span id="rangeDamage0"></span>
           
        <span id="fumbleDie0"></span>
           
        <span id="genotype0"></span>
		<span id="critDie0"></span>
		<span id="critTable0"></span>
           
        <span id="actionDice0">1d20</span>
           
           <span id="artifactCheck0"></span>
           <span id="maxTech0"></span>
           
           <span id="languages0"><span id="baseLanguage0"></span><span id="addLanguages0"></span></span>
		 
           <span id="speed0"></span>
           
           <span id="physicalDescription0"></span>
           
           <span id="weapons0"><span id="professionWeapon0"></span><span id="randomWeapon0"></span></span>
		   
           <span id="weaponDamage0"><span id="professionalWeaponDamage0"></span><span id="randomWeaponDamage0"><span id="randomWeaponDamageAdjustment"></span></span></span>
           
           <span id="equipment0"><span id="professionItem0"></span><span id="randomItem0"></span></span>
           
           <span id="armour0"></span>
           <span id="acBonus0"></span>
           <span id="armourFumble0"></span>
		   <span id="dieRollMethod0"></span>
           	   
		</aside>

              
	   <aside id="topright">
    	<span id="name1"></span>
           
		<span id="profession1"></span>
		<span id="strength1"></span> <span id="strengthMod1"></span>
		<span id="agility1"></span>  <span id="agilityMod1"></span>
           
		<span id="stamina1"></span>  <span id="staminaMod1"></span>
		<span id="personality1"></span> <span id="personalityMod1"></span>
		<span id="intelligence1"></span> <span id="intelligenceMod1"></span>
		<span id="luck1"></span> <span id="luckMod1"></span>
           
		<p id="birthAugur1"><span id="luckySign1"></span>: <span id="luckyRoll1"></span> (<span id="LuckySignBonus1"></span>)</p>
           
        <span id="baseAC1"></span>
           
        <span id="modifiedAC1"></span>
           
		<span id="hitPoints1"></span> 
           
        <span id="ref1"></span>
        <span id="fort1"></span>
        <span id="will1"></span>
		   
        <span id="init1"></span>
		<span id="melee1"></span>
        <span id="range1"></span>
		<span id="meleeDamage1"></span>
		 <span id="rangeDamage1"></span>
           
        <span id="fumbleDie1"></span>
           
        <span id="genotype1"></span>
		<span id="critDie1"></span>
		<span id="critTable1"></span>
           
        <span id="actionDice1">1d20</span>
           
           <span id="artifactCheck1"></span>
           <span id="maxTech1"></span>
           
           <span id="languages1"><span id="baseLanguage1"></span><span id="addLanguages1"></span></span>
		 
           <span id="speed1"></span>
           
           <span id="physicalDescription1"></span>
           
           <span id="weapons1"><span id="professionWeapon1"></span><span id="randomWeapon1"></span></span>
		   
           <span id="weaponDamage1"><span id="professionalWeaponDamage1"></span><span id="randomWeaponDamage1"><span id="randomWeaponDamageAdjustment"></span></span></span>
           
           <span id="equipment1"><span id="professionItem1"></span><span id="randomItem1"></span></span>
           
           <span id="armour1"></span>
           <span id="acBonus1"></span>
           <span id="armourFumble1"></span>
		   <span id="dieRollMethod1"></span>
           	   
		</aside>
	    
       
                     
	   <aside id="bottomleft">
    	<span id="name2"></span>
           
		<span id="profession2"></span>
		<span id="strength2"></span> <span id="strengthMod2"></span>
		<span id="agility2"></span>  <span id="agilityMod2"></span>
           
		<span id="stamina2"></span>  <span id="staminaMod2"></span>
		<span id="personality2"></span> <span id="personalityMod2"></span>
		<span id="intelligence2"></span> <span id="intelligenceMod2"></span>
		<span id="luck2"></span> <span id="luckMod2"></span>
           
		<p id="birthAugur2"><span id="luckySign2"></span>: <span id="luckyRoll2"></span> (<span id="LuckySignBonus2"></span>)</p>
           
        <span id="baseAC2"></span>
           
        <span id="modifiedAC2"></span>
           
		<span id="hitPoints2"></span> 
           
        <span id="ref2"></span>
        <span id="fort2"></span>
        <span id="will2"></span>
		   
        <span id="init2"></span>
		<span id="melee2"></span>
        <span id="range2"></span>
		<span id="meleeDamage2"></span>
		 <span id="rangeDamage2"></span>
           
        <span id="fumbleDie2"></span>
           
        <span id="genotype2"></span>
		<span id="critDie2"></span>
		<span id="critTable2"></span>
           
        <span id="actionDice2">1d20</span>
           
           <span id="artifactCheck2"></span>
           <span id="maxTech2"></span>
           
           <span id="languages2"><span id="baseLanguage2"></span><span id="addLanguages2"></span></span>
		 
           <span id="speed2"></span>
           
           <span id="physicalDescription2"></span>
           
           <span id="weapons2"><span id="professionWeapon2"></span><span id="randomWeapon2"></span></span>
		   
           <span id="weaponDamage2"><span id="professionalWeaponDamage2"></span><span id="randomWeaponDamage2"><span id="randomWeaponDamageAdjustment"></span></span></span>
           
           <span id="equipment2"><span id="professionItem2"></span><span id="randomItem2"></span></span>
           
           <span id="armour2"></span>
           <span id="acBonus2"></span>
           <span id="armourFumble2"></span>
		   <span id="dieRollMethod2"></span>
           	   
		</aside>
       
       
                            
	   <aside id="bottomright">
    	<span id="name3"></span>
           
		<span id="profession3"></span>
		<span id="strength3"></span> <span id="strengthMod3"></span>
		<span id="agility3"></span>  <span id="agilityMod3"></span>
           
		<span id="stamina3"></span>  <span id="staminaMod3"></span>
		<span id="personality3"></span> <span id="personalityMod3"></span>
		<span id="intelligence3"></span> <span id="intelligenceMod3"></span>
		<span id="luck3"></span> <span id="luckMod3"></span>
           
		<p id="birthAugur3"><span id="luckySign3"></span>: <span id="luckyRoll3"></span> (<span id="LuckySignBonus3"></span>)</p>
           
        <span id="baseAC3"></span>
           
        <span id="modifiedAC3"></span>
           
		<span id="hitPoints3"></span> 
           
        <span id="ref3"></span>
        <span id="fort3"></span>
        <span id="will3"></span>
		   
        <span id="init3"></span>
		<span id="melee3"></span>
        <span id="range3"></span>
		<span id="meleeDamage3"></span>
		 <span id="rangeDamage3"></span>
           
        <span id="fumbleDie3"></span>
           
        <span id="genotype3"></span>
		<span id="critDie3"></span>
		<span id="critTable3"></span>
           
        <span id="actionDice3">1d20</span>
           
           <span id="artifactCheck3"></span>
           <span id="maxTech3"></span>
           
           <span id="languages3"><span id="baseLanguage3"></span><span id="addLanguages3"></span></span>
		 
           <span id="speed3"></span>
           
           <span id="physicalDescription3"></span>
           
           <span id="weapons3"><span id="professionWeapon3"></span><span id="randomWeapon3"></span></span>
		   
           <span id="weaponDamage3"><span id="professionalWeaponDamage3"></span><span id="randomWeaponDamage3"><span id="randomWeaponDamageAdjustment"></span></span></span>
           
           <span id="equipment3"><span id="professionItem3"></span><span id="randomItem3"></span></span>
           
           <span id="armour3"></span>
           <span id="acBonus3"></span>
           <span id="armourFumble3"></span>
		   <span id="dieRollMethod3"></span>
           	   
		</aside>
       
       
	   	   
	</section>
	

		
  <script>
	  

      
      	  /*
	  rollDice (numberOfSides, numberOfDiceRolled, numberOfDiceRemoved, baseValue)
	  
	  numberOfSides - represents how many sides that they die has (ie. d4, d5, d6)
	  
	  numberOfDiceRolled - represents the number of dice rolled
	  
	  numberOfDiceRemoved - represents the number of dice removed (ie. roll 4 d6 and drop the lowest). The die/dice with the lowest values will always be removed.
	  
	  baseValue - represents the base value that it added to the die rolls.  For instance, a base value of 6 is added to the rolls of 2D6, which is represented as 2D6+6 in game mechanics.
	  */
	  	function rollDice(numberOfSides, numberOfDiceRolled, numberOfDiceRemoved, baseValue) {
		
		if(numberOfSides === undefined || typeof numberOfSides !== 'number'||numberOfSides <=2 || numberOfSides >=30){
			numberOfSides = 6;
		}
		
		if(numberOfDiceRolled < 0){
			numberOfDiceRolled =2;
		}
		
		if(numberOfDiceRemoved === undefined || typeof numberOfDiceRemoved !== 'number'||numberOfDiceRemoved >= numberOfDiceRolled){
			numberOfDiceRemoved =0;
		}
		
		if(baseValue === undefined || typeof baseValue !== 'number'||baseValue < 0){
			baseValue = 0;
		}
		
		let numbers = [];
		

		for(let i = 0; i < numberOfDiceRolled; i++){
			numbers[i] = Math.floor((Math.random() * 6) + 1);
		}
		
        numbers.sort();
        
		let sum = baseValue;
			
		for(let i = numberOfDiceRemoved; i < numberOfDiceRolled; i++){
			sum += numbers[i];
		}
			
		return sum ;
	}
      
      
	  
	/*
	 Character() - Zero Level Character Constructor
	*/
	function Character() {
	
    let strength = rollDice(6, 4, 1, 0);
    let agility = rollDice(6, 4, 1, 0);
    let stamina = rollDice(6, 4, 1, 0);
    let	personality = rollDice(6, 4, 1, 0);
    let	intelligence = rollDice(6, 4, 1, 0);
    let	luck = rollDice(6, 4, 1, 0);
	let	profession = getProfession();
	let birthAugur = getLuckySign();
	let strengthModifier = getStrengthModifier(strength);
	let staminaModifier = getStaminaModifier(stamina);
	let agilityModifier = getAgilityModifier(agility);
	let personalityModifier = getPersonalityModifier(personality);
	let intelligenceModifier = getIntelligenceModifier(intelligence);
    let maxTechLevel = getMaxTechLevel(intelligence);
    let species = getGenotype();
    let language = getBaseLanguages(species, intelligence);
    let bonusLanguages = getBonusLanguages(intelligence);
    let randomItem = addItem();
    let randomWeapon = addRandomWeapon();
    let armour = getArmour(randomItem);
    let armourClassBonus = getArmourACBonusString(randomItem);
    let fumble = getFumble(randomItem);
    let fumbleDie = getFumbleDie(randomItem);
	let baseAC = getBaseArmourClass(agilityModifier)  + adjustAC(birthAugur, getLuckModifier(luck));
    let acBonus = getArmourACBonus(randomItem);
    //let maleName = getMaleName();
    //let femaleName = getFemaleName();
		
		let zeroLevelCharacter = {
			"name": "",
			"strength": strength,
			"agility": agility,
			"stamina": stamina,
			"personality": personality,
			"intelligence": intelligence,
			"luck": luck,
			"strengthModifier": strengthModifier,
			"agilityModifier": agilityModifier,
			"staminaModifier": staminaModifier,
			"personalityModifier": personalityModifier,
			"intelligenceModifier": intelligenceModifier,
			"luckModifier":  getLuckModifier(luck),
			"profession":  profession.role,
			"luckySign": birthAugur.luckySign,
			"luckyRoll": birthAugur.luckyRoll,
			"luckySignBonus": getLuckModifier(luck),
			"hitPoints":  4 + staminaModifier + hitPointAdjustPerLevel(birthAugur,  getLuckModifier(luck)),
			"ref": agilityModifier + adjustRef(birthAugur, getLuckModifier(luck)),
			"fort": staminaModifier + adjustFort(birthAugur, getLuckModifier(luck)),
			"will": personalityModifier + adjustWill(birthAugur, getLuckModifier(luck)),
			"init": agilityModifier + adjustInit(birthAugur, getLuckModifier(luck)),
			"melee": strengthModifier + meleeAdjust(birthAugur, getLuckModifier(luck)),
            "meleeDamage": strengthModifier + meleeDamageAdjust(birthAugur, getLuckModifier(luck)),
			"range": agilityModifier + rangeAdjust(birthAugur, getLuckModifier(luck)),
			"rangeDamage": rangeDamageAdjust(birthAugur, getLuckModifier(luck)),
            "genotype": species,
			"critDie": "1d4" + addSign(adjustCrit(birthAugur, getLuckModifier(luck))),
			"critTable": "I",
            "artifactCheck": "1d20" + addSign(intelligenceModifier),
            "techLevel": maxTechLevel,
            "baseLanguage": language,
            "addLanguages": bonusLanguages,
			"speed": getSpeed(species) + addLuckToSpeed(birthAugur, getLuckModifier(luck)) + "'",
            "appearance": getPhysicalDescription(species),
            "professionWeapon": profession.weapon,
            "professionWeaponDam": profession.damage,
            "professionItem": profession.equipment,
            "startingItem": randomItem.item,
            "randomWeapon": randomWeapon.weapon,
            "randomWeaponDam": randomWeapon.damage,
            "armour": armour,
            "acBonus": armourClassBonus,
            "armourFumble": fumble,
            "fumbleDie": fumbleDie + addSign(adjustFumble (birthAugur, getLuckModifier(luck))),
            "acNoArmoured": baseArmourClass,
            "acWithArmour": baseArmourClass + acBonus,
            //"name": getName(maleName, femaleName),
			"dieRollMethod": "Generation methods: ability scores: 4d6 (drop the lowest); max hp"
			
		
			

		};
	    if(zeroLevelCharacter.hitPoints <= 0 ){
			zeroLevelCharacter.hitPoints = 1;
		}
		return zeroLevelCharacter;
	  
	  }
      

    /*
     getStrengthModifier(strength) - returns the Strength Modifier, which is based on the Strength Score
    */
    function getStrengthModifier(strength){
        if(strength === undefined || typeof strength !== 'number'|| strength <=2 || strength >=19){
            //invalid
            return -3;
        }
		if(strength >=4 && strength <=5){
			return -2;
		}
		else if(strength >=6 && strength <=8){
			return -1;
		}
		else if(strength >=9 && strength <=12){
			return + 0;
		}
		else if(strength >=13 && strength <=15){
			return + 1;
		}	
		else if(strength >=16 && strength <=17){
			return + 2;
		}		
		else if(strength ==18){
			return + 3;
		}	
		return -3;
	}


    /*
    getAgilityModifier(agility) - returns the Agility Modifier, which is based on the Agility Score
    */
    function getAgilityModifier(agility){
        if(agility === undefined || typeof agility !== 'number'|| agility <=2 || agility >=19){
            //invalid
            return -3;
        }
		if(agility >=4 && agility <=5){
			return -2;
		}
		else if(agility >=6 && agility <=8){
			return -1;
		}
		else if(agility >=9 && agility <=12){
			return 0;
		}
		else if(agility >=13 && agility <=15){
			return 1;
		}	
		else if(agility >=16 && agility <=17){
			return 2;
		}		
		else if(agility ==18){
			return 3;
		}	
		return -3;
	}
	  
	/*
    getStaminaModifier(stamina) - returns the Stamina Modifier, which is based on the Stamina Score
    */
	function getStaminaModifier(stamina){
        if(stamina === undefined || typeof stamina !== 'number'|| stamina <=2 || stamina >=19){
            //invalid
            return -3;
        }
		if(stamina >=4 && stamina <=5){
			return -2;
		}
		else if(stamina >=6 && stamina <=8){
			return -1;
		}
		else if(stamina >=9 && stamina <=12){
			return + 0;
		}
		else if(stamina >=13 && stamina <=15){
			return + 1;
		}	
		else if(stamina >=16 && stamina <=17){
			return + 2;
		}		
		else if(stamina ==18){
			return + 3;
		}	
		return -3;
	}

    /*
    getPersonalityModifier(personality) - returns the Personality Modifier, which is based on the Personality Score
    */
	function getPersonalityModifier(personality){
        if(personality === undefined || typeof personality !== 'number'|| personality <=2 || personality >=19){
            //invalid
            return -3;
        }
		if(personality >=4 && personality <=5){
			return -2;
		}
		else if(personality >=6 && personality <=8){
			return -1;
		}
		else if(personality >=9 && personality <=12){
			return + 0;
		}
		else if(personality >=13 && personality <=15){
			return + 1;
		}	
		else if(personality >=16 && personality <=17){
			return + 2;
		}		
		else if(personality ==18){
			return + 3;
		}	
		return -3;
	}

    /*
    getIntelligenceModifier(intelligence) - returns the Intelligence Modifier, which is based on the Intelligence Score 
    */
	function getIntelligenceModifier(intelligence){
        if(intelligence === undefined || typeof intelligence !== 'number'|| intelligence <=2 || intelligence >=19){
            //invalid
            return -3;
        }
		if(intelligence >=4 && intelligence <=5){
			return -2;
		}
		else if(intelligence >=6 && intelligence <=8){
			return -1;
		}
		else if(intelligence >=9 && intelligence <=12){
			return + 0;
		}
		else if(intelligence >=13 && intelligence <=15){
			return + 1;
		}	
		else if(intelligence >=16 && intelligence <=17){
			return + 2;
		}		
		else if(intelligence ==18){
			return + 3;
		}	
		return -3;
	}

    /*
    getLuckModifier(luck) - returns the luck Modifier, which is based on the luck Score
    */
    function getLuckModifier(luck){
        if(luck === undefined || typeof luck !== 'number'|| luck <=2 || luck >=19){
            //invalid
            return -3;
        }
		if(luck >=4 && luck <=5){
			return -2;
		}
		else if(luck >=6 && luck <=8){
			return -1;
		}
		else if(luck >=9 && luck <=12){
			return + 0;
		}
		else if(luck >=13 && luck <=15){
			return + 1;
		}	
		else if(luck >=16 && luck <=17){
			return + 2;
		}		
		else if(luck ==18){
			return + 3;
		}	
		return -3;
	}
      

       
	  
        let imgData = "images/mcc_zero_character_sheet.png";
        $("#character_sheet").attr("src", imgData);
        

	  let data = [Character(),Character(),Character(),Character()];
	  for(let index = 0; index < 4 ; index++){
	  
         
        //  $("#name" + index).html(data[index].name);
          
          $("#profession" + index).html(data[index].profession);
          
          $("#genotype" + index).html(data[index].genotype);
          
          $("#strength" + index).html(data[index].strength);
          $("#strengthMod" + index).html(addModifierSign(data[index].strengthModifier));
          
          $("#agility" + index).html(data[index].agility);
          $("#agilityMod" + index).html(addModifierSign(data[index].agilityModifier));
          
          $("#agility" + index).html(data[index].agility);
          $("#agilityMod" + index).html(addModifierSign(data[index].agilityModifier));
          
          $("#stamina" + index).html(data[index].stamina);
          $("#staminaMod" + index).html(addModifierSign(data[index].staminaModifier));
          
          $("#personality" + index).html(data[index].personality);
          $("#personalityMod" + index).html(addModifierSign(data[index].personalityModifier));
          
          $("#intelligence" + index).html(data[index].intelligence);
          $("#intelligenceMod" + index).html(addModifierSign(data[index].intelligenceModifier));
          
          $("#luck" + index).html(data[index].luck);
          $("#luckMod" + index).html(addModifierSign(data[index].luckModifier));
          
          $("#luckySign" + index).html(data[index].luckySign);
          $("#luckyRoll" + index).html(data[index].luckyRoll);
          $("#LuckySignBonus" + index).html(addModifierSign(data[index].luckModifier));
          
          $("#hitPoints" + index).html(data[index].hitPoints);
          $("#baseAC" + index).html(data[index].acNoArmoured);
          $("#modifiedAC" + index).html(data[index].acWithArmour);
          
          $("#ref" + index).html(addModifierSign(data[index].ref));
          $("#fort" + index).html(addModifierSign(data[index].fort));
          $("#will" + index).html(addModifierSign(data[index].will));
          
          $("#init" + index).html(addModifierSign(data[index].init));
          $("#melee" + index).html(addModifierSign(data[index].melee));
          $("#range" + index).html(addModifierSign(data[index].range));
          $("#meleeDamage" + index).html(addModifierSign(data[index].meleeDamage));
          $("#rangeDamage" + index).html(addModifierSign(data[index].rangeDamage));
          
          $("#fumbleDie" + index).html(data[index].fumbleDie);
          
          $("#critDie" + index).html(data[index].critDie);
          $("#critTable" + index).html(data[index].critTable);
          
          $("#artifactCheck" + index).html(data[index].artifactCheck);
          $("#maxTech" + index).html(data[index].techLevel);
          
          $("#baseLanguage" + index).html(data[index].baseLanguage);
          $("#addLanguages" + index).html(data[index].addLanguages);
          
          $("#speed" + index).html(data[index].speed);
          $("#physicalDescription" + index).html(data[index].appearance);
          
          $("#professionWeapon" + index).html(data[index].professionWeapon);
          $("#randomWeapon" + index).html(data[index].randomWeapon);
          $("#professionItem" + index).html(data[index].professionItem);
          $("#randomItem" + index).html(data[index].startingItem);
          
          $("#professionalWeaponDamage" + index).html(data[index].professionWeaponDam);
          $("#randomWeaponDamage" + index).html(data[index].randomWeaponDam);
          $("#armour" + index).html(data[index].armour);
          $("#acBonus" + index).html(data[index].acBonus);
          $("#armourFumble" + index).html(data[index].armourFumble);
          
          $("#dieRollMethod" + index).html(data[index].dieRollMethod);
	  
	  }

  </script>
		
	
    
</body>
</html>