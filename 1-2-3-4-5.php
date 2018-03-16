<?php
	for($i=1; $i<=10; $i++)
	{
		if($i<10)		//conditon run 0 to less then 10 mean (9)
		 {
		 echo "$i-";	//conditon is true here.
		 }
		 else{			//but loop running of 0 to less then equal to 10 so else condition also run for 1 time
		 	echo "$i";	// then output is 1-2-3-4-5-6-7-8-9-10
		 }
	}
?>