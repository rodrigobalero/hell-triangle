## Requeriments

+ PHP 7

## Usage

Clone this repository using git:

```bash
	$ git clone https://github.com/rodrigobalero/hell-triangle.git
```

Create a php file and insert the code below:

```bash
	<?php

	require "hell-triangle/src/Triangle.php";

	$hellTriangle = new HellTriangle\Triangle();

	$hellTriangle->setTriangle([[6],[3,5],[9,7,1],[4,6,8,4]]);

	echo $hellTriangle->getPossibleSum();
```


Then, execute the file.