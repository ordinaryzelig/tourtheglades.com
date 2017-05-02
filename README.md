tourtheglades.com
=================

This is an extraction of a (I'm guessing) wordpress site.

## Contact-us form

The form submits to a [sinatra app] (https://github.com/tourtheglades/tourtheglades_contact_us) that runs on heroku.

## How to edit the pages from github.com

* In the file list above, click on `_posts`.
* Find the page that you want to edit and click on it.
* Click the `Edit` button at the top right.
* Make your changes. Be careful not to make major changes. Typos and small additions are best.
* Write a quick note about what you did in the `Commit changes` section at the bottom.
* Press the green `Commit changes` button.
* Give github a few minutes to update your changes.

## Development

`rake` starts server

### Image galleries

* Each image needs a thumbnail. When clicked, it will open a modal showing full-size.
* Each gallery needs a data file that lists the full-size images.
* Each gallery needs an includes file which iterates over data.
* Open each image in Photos, crop with square aspect, export with 150x150, name file with `-150x150` suffix.

## TODO

* change Access-Control-Allow-Origin to domain
