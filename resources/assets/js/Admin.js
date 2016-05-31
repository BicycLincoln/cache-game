"use strict";

var moment = require("moment"),
    $ = require("jquery"),
    _ = require("underscore"),
    Backbone = require("backbone");

Backbone.$ = $;

var Admin = Backbone.Router.extend({
    routes: {
        'admin': 'index',
        'admin/caches': 'caches',
        'admin/users': 'users'
    },

    views: {},

    initialize: function () {
        Backbone.history.start({
            pushState: true,
            hashChange: false
        });
    },

    index: function () {

    },

    caches: function() {

    },

    users: function() {

    }
});

$(function () {
    new Admin();
});