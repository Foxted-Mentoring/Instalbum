var Vue = require('../../../node_modules/vue/dist/vue.js');

new Vue({
    el: '#app',

    data: {
        title: 'Hello world!',
        latests: [
            {
                title: 'Honkin\' on Hobo',
                artist: 'Aerosmith',
                cover: 'http://lorempixel.com/output/nightlife-q-c-400-400-4.jpg'
            },
            {
                title: 'Greatest Hits',
                artist: 'Aerosmith',
                cover: 'http://lorempixel.com/output/nightlife-q-c-400-400-4.jpg'
            },
            {
                title: 'Toys in the Attic',
                artist: 'Aerosmith',
                cover: 'http://lorempixel.com/output/nightlife-q-c-400-400-4.jpg'
            },
            {
                title: 'Get a Grip',
                artist: 'Aerosmith',
                cover: 'http://lorempixel.com/output/nightlife-q-c-400-400-4.jpg'
            }
        ]
    }
});