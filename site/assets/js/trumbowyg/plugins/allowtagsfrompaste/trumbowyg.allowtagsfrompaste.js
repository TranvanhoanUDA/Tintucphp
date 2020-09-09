(function ($) {
    'use strict';

    var defaultOptions = {
        allowTagsFromPaste: [
            'a',
            'abbr',
            'address',
            'b',
            'bdi',
            'bdo',
            'blockquote',
            'br',
            'cite',
            'code',
            'del',
            'dfn',
            'details',
            'em',
            'h1',
            'h2',
            'h3',
            'h4',
            'h5',
            'h6',
            'hr',
            'i',
            'ins',
            'kbd',
            'mark',
            'meter',
            'pre',
            'progress',
            'q',
            'rp',
            'rt',
            'ruby',
            's',
            'samp',
            'small',
            'span',
            'strong',
            'sub',
            'summary',
            'sup',
            'time',
            'u',
            'var',
            'wbr',
            'img',
            'map',
            'area',
            'canvas',
            'figcaption',
            'figure',
            'picture',
            'audio',
            'source',
            'track',
            'video',
            'ul',
            'ol',
            'li',
            'dl',
            'dt',
            'dd',
            'table',
            'caption',
            'th',
            'tr',
            'td',
            'thead',
            'tbody',
            'tfoot',
            'col',
            'colgroup',
            'style',
            'div',
            'p',
            'form',
            'input',
            'textarea',
            'button',
            'select',
            'optgroup',
            'option',
            'label',
            'fieldset',
            'legend',
            'datalist',
            'keygen',
            'output',
            'iframe',
            'link',
            'nav',
            'header',
            'hgroup',
            'footer',
            'main',
            'section',
            'article',
            'aside',
            'dialog',
            'script',
            'noscript',
            'embed',
            'object',
            'param'
        ]
    };

    $.extend(true, $.trumbowyg, {
        plugins: {
            allowTagsFromPaste: {
                init: function (trumbowyg) {
                    trumbowyg.o.removeformatPasted = false;
                    trumbowyg.o.plugins.allowTagsFromPaste = trumbowyg.o.allowTagsFromPaste ? $(defaultOptions.allowTagsFromPaste).not(trumbowyg.o.allowTagsFromPaste).get() : [];
                    trumbowyg.pasteHandlers.push(function () {
                        setTimeout(function () {
                            var processNodes = trumbowyg.$ed.html();
                            $.each(trumbowyg.o.plugins.allowTagsFromPaste, function (iterator, tagName) {
                                processNodes = processNodes.replace(new RegExp('<\\/?' + tagName + '(\\s[^>]*)?>', 'gi'), '');
                            });
                            trumbowyg.$ed.html(processNodes);
                        }, 0);
                    });
                }
            }
        }
    });
})(jQuery);