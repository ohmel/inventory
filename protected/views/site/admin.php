<style>
    a {
        text-decoration: none !important;
    }

    li {
        margin-bottom: 35px !important;
    }

    i {
        color: #002954 !important;
    }

    .nav-menu-pos-stat {
        position: static;
        width: 260px;
    }

</style>
<div ng-controller="SiteController" class="">
    <div class="col-lg-2">
        <!--div id="admin-panel">
            <a class="btn btn-primary btn-block text-align-left" href="#/userManagement">User Management</a>
            <a class="btn btn-primary btn-block text-align-left" href="#/policies">Policies</a>
            <a class="btn btn-primary btn-block text-align-left"  href="#/adminSettings">Admin Settings</a>
        </div-->
        <nav id="menu" class="menu nav-menu-pos-stat">
            <button class="menu__handle" style="background: white"><span>Menu</span></button>
            <div class="menu__inner">
                <ul>
                    <li><a href="#/userManagement" style="text-decoration: none !important;"><i class="fa fa-fw fa-user"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom"
                                                                                                title="User Management"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-fw fa-file-o" data-toggle="tooltip" data-placement="bottom"
                                       title="Policies"></i></a></li>
                    <li><a href="#"><i class="fa fa-fw fa-folder"></i></a></li>
                    <li><a href="#"><i class="fa fa-fw fa-wrench" data-toggle="tooltip" data-placement="bottom"
                                       title="Settings"></i></a></li>
                    <li><a href="#"><i class="fa fa-fw fa-wrench" data-toggle="tooltip" data-placement="bottom"
                                       title="Settings"></i></a></li>
                    <li><a href="#"><i class="fa fa-fw fa-wrench" data-toggle="tooltip" data-placement="bottom"
                                       title="Settings"></i></a></li>
                </ul>
            </div>
            <div class="morph-shape" data-morph-open="M300-10c0,0,295,164,295,410c0,232-295,410-295,410"
                 data-morph-close="M300-10C300-10,5,154,5,400c0,232,295,410,295,410">
                <svg width="100%" height="100%" viewBox="0 0 600 800" preserveAspectRatio="none">
                    <path fill="none" d="M300-10c0,0,0,164,0,410c0,232,0,410,0,410"/>
                </svg>
            </div>
        </nav>
    </div>
    <div class="col-lg-10">
        <div ng-view id="admin-page">
        </div>
    </div>
</div>


<script src="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/js/classie.js"></script>
<script>
    (function () {

        function SVGMenu(el, options) {
            this.el = el;
            this.init();
        }

        SVGMenu.prototype.init = function () {
            this.trigger = this.el.querySelector('button.menu__handle');
            this.shapeEl = this.el.querySelector('div.morph-shape');

            var s = Snap(this.shapeEl.querySelector('svg'));
            this.pathEl = s.select('path');
            this.paths = {
                reset: this.pathEl.attr('d'),
                open: this.shapeEl.getAttribute('data-morph-open'),
                close: this.shapeEl.getAttribute('data-morph-close')
            };

            this.isOpen = false;

            this.initEvents();
        };

        SVGMenu.prototype.initEvents = function () {
            this.trigger.addEventListener('click', this.toggle.bind(this));
        };

        SVGMenu.prototype.toggle = function () {
            var self = this;

            if (this.isOpen) {
                classie.remove(self.el, 'menu--anim');
                setTimeout(function () {
                    classie.remove(self.el, 'menu--open');
                }, 250);
            }
            else {
                classie.add(self.el, 'menu--anim');
                setTimeout(function () {
                    classie.add(self.el, 'menu--open');
                }, 250);
            }
            this.pathEl.stop().animate({'path': this.isOpen ? this.paths.close : this.paths.open}, 350, mina.easeout, function () {
                self.pathEl.stop().animate({'path': self.paths.reset}, 800, mina.elastic);
            });

            this.isOpen = !this.isOpen;
        };

        new SVGMenu(document.getElementById('menu'));

    })();
</script>

