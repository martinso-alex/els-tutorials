$(document).ready(function(){
	//define vars
	var canvas = $('#canvas')[0];
	var context = canvas.getContext('2d');
	var width = canvas.width;
	var height = canvas.height;
	var highest = localStorage.getItem('highestscore');
	var cell_width = 15;
	var speed = 130;
	var direction = 'right';
	var color = 'green';
	var food;
	var score;

	//snake array
	var snake_array;

	//initializer
	function init(){
		create_snake();
		create_food();
		score = 0;
		$('#score').html('Score: '+score);
		if(highest !== null){
			$('#hi-sc').html('Highest: '+highest);
		}
		direction = 'right';

		if(typeof game_loop != 'undefined'){
			clearInterval(game_loop);
		}

		game_loop = setInterval(paint,speed);
	}

	//create snake
	function create_snake(){
		var length = 5;
		snake_array = [];

		for(var i=length-1;i>=0;i--){
			snake_array.push({x: i,y: 0});
		}
	}

	//create food
	function create_food(){
		food = {
			x:Math.round(Math.random()*(width-cell_width)/cell_width),
			y:Math.round(Math.random()*(height-cell_width)/cell_width)
		}
	}

	//paint snake
	function paint(){
		//paint the canvas
		context.fillStyle = 'black';
		context.fillRect(0,0,width,height);
		context.strokeStyle = 'white';
		context.strokeRect(0,0,width,height);

		//instant position
		var nx = snake_array[0].x;
		var ny = snake_array[0].y;

		//snake direction-based movement
		switch(direction){
			case 'right': nx++; break;
			case 'left': nx--; break;
			case 'down': ny++; break;
			case 'up': ny--; break;
		}

		//snake collision check (game over)
		if( 
			nx == -1 || ny == -1 ||
			nx == width/cell_width ||
			ny == height/cell_width ||
			check_collision(nx,ny,snake_array)
		){
			//insert final score
			$('#final-score').html(score);
			//display overlay
			$('#overlay').fadeIn(300);
			//end game loop
			clearInterval(game_loop);
			//highest score logic
			if(highest === null){
				localStorage.setItem('highestscore',score.toString());
				$('#hi-sc').html('Highest: '+score);
			}else if(parseInt(highest) < score){
				localStorage.setItem('highestscore',score.toString());
				$('#hi-sc').html('Highest: '+score);
			}
			return;
		}

		//food eating logic (food becomes the head)
		if(nx == food.x && ny == food.y){
			var tail = {x: nx,y: ny};
			score++;
			$('#score').html('Score: '+score);

			//create new food
			create_food();
		}else{
			var tail = snake_array.pop();
			tail.x = nx;
			tail.y = ny;
		}

		snake_array.unshift(tail);

		for(var i=0;i<snake_array.length;i++){
			var cell = snake_array[i];
			paint_cell(cell.x,cell.y);
		}

		paint_cell(food.x,food.y);

		check_score(score);
	}

	//paint the cells to the canvas (snake or food)
	function paint_cell(x,y){
		context.fillStyle = color;
		context.fillRect(x*cell_width,y*cell_width,cell_width,cell_width);
		context.strokeStyle = 'white';
		context.strokeRect(x*cell_width,y*cell_width,cell_width,cell_width);
	}

	//check collision
	function check_collision(x,y,array){
		for(var i=0;i<array.length;i++){
			if(array[i].x == x && array[i].y == y){
				return true;
			}
		}

		return false;
	}

	//keyboard controller
	$(document).keydown(function(e){
		var key = e.which;

		if(key == '37' && direction != 'right') direction = 'left';
		else if(key == '38' && direction != 'down') direction = 'up';
		else if(key == '39' && direction != 'left') direction = 'right';
		else if(key == '40' && direction != 'up') direction = 'down';
	});

	$('#reset-score').click(function(){
		localStorage.setItem('highestscore','0');
		$('#hi-sc').html('Highest: 0');
	});

	//run initializer
	init();
});