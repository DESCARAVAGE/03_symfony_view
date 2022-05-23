/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';



// webpack.config.js

Encore
// ...
.setOutputPath('public/build/')

    .copyFiles({
        from: './assets/images',
        // optional target path, relative to the output dir
        to: 'images/[path][name].[ext]',
        // if versioning is enabled, add the file hash too
        //to: 'images/[path][name].[hash:8].[ext]',
        // only copy files matching this pattern
        pattern: /\.(png|jpg|jpeg)$/
    })