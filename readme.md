Todo in Laravel
===
I am building this as a learning exercise for Laravel 5. I have chosen thus far to
not use a database for simplicity, although I might move to using a SQLite database
in the future to learn Laravel's database features

Getting Started
===
* Run `npm install` to install our dependencies that are defined in `package.json`
* Run `composer install` to install our vendor requirements

Assets
===
Run `gulp watch` when updating SCSS/Javascript and it will:
* convert from SCSS to CSS
* move the resulting CSS file to the `public/css` directory
* create a source map from the SCSS file(s) and move them to the `public/css`
* combine all Javascript assets that are referenced in the `gulpfile.js`
* move combined Javascript file (named `all.js`) to the `public/js` directory
* create a source map from the Javascript file(s) and move them to the `public/js`
