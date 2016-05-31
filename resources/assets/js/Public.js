"use strict";

var moment = require("moment"),
    $ = require("jquery"),
    _ = require("underscore"),
    Backbone = require("backbone");

Backbone.$ = $;

var Public = Backbone.Router.extend({
    routes: {
        '': 'index'
    },

    views: {},

    initialize: function () {
        Backbone.history.start({
            pushState: true,
            hashChange: false
        });
    },

    index: function () {
        
    }
});

$(function () {
    new Public();
});