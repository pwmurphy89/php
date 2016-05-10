
	<h2>FIGHT THE DRAGON</h2>
	<P>If you choose to fight, you must roll a 9 or higher or you will be burnt to a crisp!</P>


				<div id="dragon">
					<img src="dice-img/dragon.png">
				</div>


			</div>
			
			<?php

		$random_die = rand(1,6);
		$image_name = "dice-img/d" . $random_die . ".gif";

		$random_die2 = rand(1,6);
		$image_name2 = "dice-img/d" . $random_die2 . ".gif";

		$total = $random_die + $random_die2;

		?>

			<div><h1>You rolled 
		<?php print $total ?>
			</h1></div>

			<img src="<?php print $image_name; ?>">

			<img src="<?php print $image_name2; ?>">

		<?php 

		 if ($total < 9){
		 	print "You lost! \n 
		 	Play again? \n
		 	<a href='/'><button>FIGHT</button></a>";
		 }else{
		 	print "You beat the dragon!\n
		 	Play again?\n 
		  <a href='/'><button>FIGHT</button></a>";
		 }

		 ?>

		 <a href='/leave.php'><button>I quit!</button></a>

