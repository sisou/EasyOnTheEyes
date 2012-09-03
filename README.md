#EasyOnTheEyes

This is a minimalist theme for the blogging engine Habari.

## How to activate the theme

1. Copy the folder 'EasyOnTheEyes' into the directory `/user/themes` in your installation of Habari
2. In the Habari Admin section, go to *Themes*. You will see the theme waiting for you at the bottom of that page.
3. Activate it directly or switch to *Preview-Mode*
4. Well done!

## Using the theme

The theme is using a technique *borrowed* from the [FitText jQuery plugin](http://fittextjs.com) for post titles. Therefore you need to set the factor by which each title will be scaled manually for each post! The input for that is under the editing-area behind the button saying **Theme Settings**.

The scale reaches from 1 to 0.
1 is smallest, 0 is biggest.

(I plan on automating this through a trial-and-error function in the near future.)

## Attention

* The theme is not (yet) responsive
* Images should have the width of 600px, when embedded into the content
* Linked images which should appear in the lightbox need to have the class `fancybox` added to the `<a>`-tag

## Roadmap / TODO

Plans for the future (in no specific order)

* Range-Input for the *Page Title Scaling Factor* on the Post-Preview-Page
* Responsiveness
* Image galleries
* Plugins for the admin-area
	* Markdown-Editor
	* Special post-types with special form elements (just like tumblr)
* Automated way to determine the *Page Title Scaling Factor*
