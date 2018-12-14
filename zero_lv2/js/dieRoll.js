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
      
      