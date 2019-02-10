const { mix } = require('laravel-mix');

const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');

// mix.webpackConfig({
//     plugins: [
//         new CopyWebpackPlugin([{
//             from: 'resources/assets/images',
//             to: 'images', // Laravel mix will place this in 'public/img'
//         }]),
//         new ImageminPlugin({
//             test: /\.(jpe?g|png|gif|svg)$/i,
//             plugins: [
//                 imageminMozjpeg({
//                     quality: 50,
//                 })
//             ]
//         })
//     ]
// });

mix.js( [
 	'resources/assets/js/jquery.min.js', 
 	'resources/assets/js/app.js', 
 	'resources/assets/js/jquery.mapit.js', 
 	'resources/assets/js/map.js', 
 	'resources/assets/js/owl.carousel.js',
 	], 'public/js/app.js').js( [
 	'resources/assets/js/script.js' 
 	], 'public/js/script.js')
 .sass('resources/assets/sass/app.scss', 'public/css')
 // .copyDirectory('resources/assets/images/', 'public/images/')
 .copyDirectory('resources/assets/fonts/', 'public/fonts/');
