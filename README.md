## Wordpress Twenty Nineteen Child Theme
**A plugin of JS Project** :rocket:  
https://www.jordisabadell.com

## Challanges
This repository has been created from the following challenges.
- [x] Create a Wordress Child Theme.
- [x] Build it using SASS.

## Documentation
- Wordpress Theme Handbook https://developer.wordpress.org/themes/
- WP Template hierarchy (interactive diagram) https://wphierarchy.com/
- Original documentation of Twenty Nineteen: https://wordpress.org/themes/twentynineteen/

## Add Sass 
Generate a plain package.json using legacy init.
```
npm init
```

Install Gulp (global and local dependencies).
```
npm install --global gulpjs/gulp-cli
npm install --save-dev gulpjs/gulp
```

Check version.
```
gulp -v
```

Install Sass compilation.
```
npm install --save-dev gulp-sass
```

Install PostCSS AutoPrefixer CSSnano Sourcemaps.
```
npm install --save-dev gulp-postcss autoprefixer cssnano gulp-sourcemaps
```

Create *gulp.js* file.
```
See [gulpfile.js]
```

Create *sass* folder with scss files.

Add package.json script.
```
Edit [package.json]
    "scripts": {
        "start": "gulp watch"
    }
```