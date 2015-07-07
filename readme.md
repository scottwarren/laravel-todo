Todo in Laravel
===

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
