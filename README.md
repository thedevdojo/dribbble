dribbble
========

Dribbble API Package for Laravel

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `devdojo/dribbble`.

	"require": {
		"devdojo/dribbble": "dev-master"
	}

Next, update Composer from the Terminal:

    composer update

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Devdojo\Dribbble\DribbbleServiceProvider',

That's it! You're all set to go.

## Usage

Here's an example of how to get the most popular shots and display them on the screen.

```php
<?php $List = Dribbble::getShotsList('popular'); ?>

@foreach($List->shots as $shot)

	<img  src="{{ $shot->image_url }}" /><br />
	
@endforeach
```

For further info on using the dribble API, be sure to checkout: http://dribbble.com/api

Hope you enjoy :)
