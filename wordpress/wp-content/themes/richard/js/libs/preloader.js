(function ($) {
    var items = [],
        errors = [],
        itemLoaded = 0;

    var defaults = {
        images: [],
        url: [],
        eachCb: function () {
        },
        allCb: function () {
        }
    }

    var settings;

    $.loaderItems = function (options) {
        settings = $.extend({}, defaults, options);
        if (settings.images.length == 0 && settings.url.length == "") getImages(document);
        else {
            if (settings.images.length > 0) items = settings.images;
            if (settings.url.length > 0) parseUrl(settings.url);
        }
        //TODO: implement verify images array
        itemLoaded = 0;
        if (items.length > 0 && settings.url.length == 0) preloading();
    }

    //get all images from css and <img> tag
    var getImages = function (element) {
        $(element).find('*:not(script)').each(function () {
            var url = "";

            if ($(this).css('background-image').indexOf('none') == -1 && $(this).css('background-image').indexOf('-gradient') == -1) {
                url = $(this).css('background-image');
                if (url.indexOf('url') != -1) {
                    var temp = url.match(/url\((.*?)\)/);
                    url = temp[1].replace(/\"/g, '');
                }
            } else if ($(this).get(0).nodeName.toLowerCase() == 'img' && typeof($(this).attr('src')) != 'undefined') {
                url = $(this).attr('src');
            }

            if (url.length > 0) {
                items.push(url);
            }
        });
    }

    //create preloaded iteration
    var preloading = function () {
        for (var i = 0; i < items.length; i++) {
            loadImg(items[i]);
        }
    }

    //parse url
    var parseUrl = function (urls) {
        var urlParsed = 0;
        for (var i = 0; i < urls.length; i++) {
            $.get(urls[i], function (data) {
                getImages($(data));
                urlParsed++;
                if (urlParsed >= urls.length) preloading();
            });
        }
    }
    var loadImg = function (url) {
        var imgLoad = new Image();
        $(imgLoad).on('load error',function () {
            completeLoading();
            $(this).off('load error');
        }).attr('src', url);
    }

    //apply callbacks
    var completeLoading = function () {
        itemLoaded++;

        var per = Math.round((itemLoaded / items.length) * 100);

        settings.eachCb.call(this, per, itemLoaded, items.length);

        //if all images loaded
        if (itemLoaded >= items.length) {
            itemLoaded = items.length;
            settings.allCb.call();
        }
    }
    //TODO: implement use as method selector

})(jQuery);