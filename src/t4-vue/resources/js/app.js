/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import IgdText from './components/TextsIndex';
import IgdBanner from './components/BannerIndex';
import IgdHighlights from './components/HighlightsIndex';


const app = new Vue({
    el: '.container',

    components: {
        IgdText,
        IgdBanner,
        IgdHighlights,
    }
});
