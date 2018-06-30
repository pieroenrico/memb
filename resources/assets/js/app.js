
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');

import axios from 'axios';
import TextSelectorComponent from './components/TextSelectorComponent.vue';
import PictureSelectorComponent from './components/PictureUploaderComponent.vue';
import * as VueGoogleMaps from 'vue2-google-maps';



Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyDVM_vacbr7Ct4ntmIgwFrMnllYHb6Ss5w',
        libraries: 'places', // This is required if you use the Autocomplete plugin
        // OR: libraries: 'places,drawing'
        // OR: libraries: 'places,drawing,visualization'
        // (as you require)

        //// If you want to set the version, you can do so:
        // v: '3.26',
    },

    //// If you intend to programmatically custom event listener code
    //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
    //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
    //// you might need to turn this on.
    // autobindAllEvents: false,

    //// If you want to manually install components, e.g.
    //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
    //// Vue.component('GmapMarker', GmapMarker)
    //// then disable the following:
    // installComponents: true,
})


const app = new Vue({
    el: '#app',
    components: {
        'memb-text-selector': TextSelectorComponent,
        'memb-picture-uploader': PictureSelectorComponent,
        'gmap-map': VueGoogleMaps.Map,
        'gmap-marker': VueGoogleMaps.Marker,
    }
});

$(document).ready(function(){

    var $el, $ps, $up, totalHeight, $p;

    $('.file-uploader').on('change', function(){
        if($(this).val() && $(this).val() != '') {
            $('.btn-submit').show();
        } else {
            $('.btn-submit').hide();
        }
    });

    $(".fade-long-text .btn").click(function() {

        totalHeight = 0

        $el = $(this);
        $p  = $el.parent();
        $up = $p.parent();
        $ps = $up.find("p:not('.read-more')");

        // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
        $ps.each(function() {
            totalHeight += $(this).outerHeight() + 50;
        });

        $up
            .css({
                // Set height to prevent instant jumpdown when max height is removed
                "height": $up.height(),
                "max-height": 9999
            })
            .animate({
                "height": totalHeight
            });

        // fade out read-more
        $p.fadeOut();

        // prevent jump-down
        return false;

    });
})
