/*
 * Author: Le Trung Hieu
 * Date: 24/9/2021
 */


$(document).ready(function() {
    $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,

        responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                }
            }

            , {
                breakpoint: 520,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            }
        ]
    });

    $('.carousel-inner').slick({
        autoplay: false,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
    });
});

function open_menu() {
    document.getElementById("Sidenav").style.width = "100%";

}

function closeNav() {
    document.getElementById("Sidenav").style.width = "0";

}

var coll = document.getElementsByClassName("menu2");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}

$(document).ready(function() {

    $('.tit p:nth-child(3)').each(function(f) {
        if (screen.width == 768 || screen.width == 1024) {
            var newstr = $(this).text().substring(0, 90) + '...';
            $(this).text(newstr);
        }


    });
})
var owl = $('.owl-carousel');
// owl.owlCarousel({
//     items: 1,
//     loop: true,
//     margin: 10,
//     autoplay: true,
//     autoplayTimeout: 2000,
//     autoplayHoverPause: true
// });

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}
var Language = {
    "language": {
        "menu": {
            "link1": {
                "en": "Home",
                "vn": "Trang chủ"
            },
            "link2": {
                "en": "About WTA",
                "vn": "Về WTA"
            },
            "link3": {
                "en": "Service",
                "vn": "Dịch Vụ"
            },
            "link4": {
                "en": "News",
                "vn": "Tin Tức"
            },
            "link5": {
                "en": "Support",
                "vn": "Hỗ Trợ"
            },
            "link6": {
                "en": "Contact",
                "vn": "Liên Hệ"
            },
            "link7": {
                "en": "Login",
                "vn": "Đăng nhập"
            }
        }
    }
};

(function() {
    this.I18n = function(defaultLang) {
        var lang = defaultLang || 'en';
        this.language = lang;

        (function(i18n) {
            i18n.contents = Language;
            i18n.contents.prop = function(key) {
                var result = this;
                var keyArr = key.split('.');
                for (var index = 0; index < keyArr.length; index++) {
                    var prop = keyArr[index];
                    result = result[prop];
                }
                return result;
            };
            i18n.localize();
        })(this);
    };

    this.I18n.prototype.hasCachedContents = function() {
        return this.contents !== undefined;
    };

    this.I18n.prototype.lang = function(lang) {
        if (typeof lang === 'string') {
            this.language = lang;
        }
        this.localize();
        return this.language;
    };

    this.I18n.prototype.localize = function() {
        var contents = this.contents;
        if (!this.hasCachedContents()) {
            return;
        }
        var dfs = function(node, keys, results) {
            var isLeaf = function(node) {
                for (var prop in node) {
                    if (node.hasOwnProperty(prop)) {
                        if (typeof node[prop] === 'string') {
                            return true;
                        }
                    }
                }
            }
            for (var prop in node) {
                if (node.hasOwnProperty(prop) && typeof node[prop] === 'object') {
                    var myKey = keys.slice();
                    myKey.push(prop);
                    if (isLeaf(node[prop])) {
                        //results.push(myKey.reduce((prev, current) => prev + '.' + current));	//not supported in older mobile broweser
                        results.push(myKey.reduce(function(previousValue, currentValue, currentIndex, array) {
                            return previousValue + '.' + currentValue;
                        }));
                    } else {
                        dfs(node[prop], myKey, results);
                    }
                }
            }
            return results;
        };
        var keys = dfs(contents, [], []);
        for (var index = 0; index < keys.length; index++) {
            var key = keys[index];
            if (contents.prop(key).hasOwnProperty(this.language)) {
                $('[data-i18n="' + key + '"]').text(contents.prop(key)[this.language]);
                $('[data-i18n-placeholder="' + key + '"]').attr('placeholder', contents.prop(key)[this.language]);
                $('[data-i18n-value="' + key + '"]').attr('value', contents.prop(key)[this.language]);
            } else {
                $('[data-i18n="' + key + '"]').text(contents.prop(key)['en']);
                $('[data-i18n-placeholder="' + key + '"]').attr('placeholder', contents.prop(key)['en']);
                $('[data-i18n-value="' + key + '"]').attr('value', contents.prop(key)['en']);
            }
        }
    };

}).apply(window);

// $(document).ready(function() {

//     var i18n = new I18n();
//     i18n.localize();
//     $('.lang-picker #english').addClass('selected');

//     $('.lang-picker #portuguese').on('click', function() {
//         i18n.lang('pt');
//         selectLang($(this));
//     })
//     $('.lang-picker #english').on('click', function() {
//         i18n.lang('en');
//         selectLang($(this));
//     })
//     $('.lang-picker #spanish').on('click', function() {
//         i18n.lang('es');
//         selectLang($(this));
//     })

//     function selectLang(picker) {
//         $('.lang-picker li').removeClass('selected');
//         picker.addClass('selected');
//     }
// });