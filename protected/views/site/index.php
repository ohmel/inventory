<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/css/pullupmenu.css" />
<ul class="grid cs-style-4" style="padding: 0px">
    <li>
        <figure>
            <div><img style="width: 400px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/7.jpg" alt="Admissions"></div>
            <figcaption>
                <h3>Admissions</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Enrollment, Conduct Tests, and Course Placement
                </div>
                <?php echo CHtml::link("Enter Admissions", array('admission/index')) ?>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img style="width: 400px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/8.jpg" alt="Grading"></div>
            <figcaption>
                <h3>Grading</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                Student Grades, Grading Computation, and, Report Cards
                </div>
                <a href="http://dribbble.com/shots/1118904-Game-Center">Manage Grades</a>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/9.jpg" alt="StudentManagement"></div>
            <figcaption>
                <h3>Student Management</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Monitor and Manage Students
                </div>
                <?php echo CHtml::link("Manage Students", array('studentMonitoring/index#/studentMonitoring')) ?>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/10.jpg" alt="Registrar"></div>
            <figcaption>
                <h3>Registrar</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Just Registrar
                </div>
                <a href="http://dribbble.com/shots/1116685-Settings">Manage Registry</a>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/11.jpg" alt="HumanResource"></div>
            <figcaption>
                <h3>Human Resource</h3>
                <span style="font-size: 11px">School Management System</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Master Files, Time Keeping, Performance Evaluation, and Payroll
                </div>
                <a href="http://dribbble.com/shots/1115632-Camera">Manage Workforce</a>
            </figcaption>
        </figure>
    </li>
    <li>
        <figure>
            <div><img src="<?php echo Yii::app()->request->baseUrl; ?>/includes/caption/images/12.jpg" alt="Library"></div>
            <figcaption>
                <h3>Library</h3>
                <span style="font-size: 11px">School Management</span>
                <br/>
                <div style="color: white; font-size: 11px; margin-top: 5px">
                    Book Listings, Borrowing, Inventory, and Tracking
                </div>
                <a href="http://dribbble.com/shots/1117308-Phone">Enter Library</a>
            </figcaption>
        </figure>
    </li>
</ul>
<!--div>
    <nav id="menu" class="menu" style="text-align: center">
        <button class="menu__handle"><span>Menu</span></button>
        <div class="menu__inner">
            <ul  style="font-size: 16px; font-family: 'Raleway', sans-serif;">
                <li><a href="#">Save settings</a></li>
                <li><a href="#">Revert all changes</a></li>
                <li><a href="#">Save as template</a></li>
                <li><a href="#">Exit without saving</a></li>
            </ul>
        </div>
        <div class="morph-shape" data-morph-open="M-10,100c0,0,44-95,290-95c232,0,290,95,290,95" data-morph-close="M-10,100c0,0,44,95,290,95c232,0,290-95,290-95">
            <svg width="100%" height="100%" viewBox="0 0 560 200" preserveAspectRatio="none">
                <path fill="none" d="M-10,100c0,0,44,0,290,0c232,0,290,0,290,0"/>
            </svg>
        </div>
    </nav>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/includes/elastic/js/classie.js"></script>
    <script>
        (function() {

            function SVGMenu( el, options ) {
                this.el = el;
                this.init();
            }

            SVGMenu.prototype.init = function() {
                this.trigger = this.el.querySelector( 'button.menu__handle' );
                this.shapeEl = this.el.querySelector( 'div.morph-shape' );

                var s = Snap( this.shapeEl.querySelector( 'svg' ) );
                this.pathEl = s.select( 'path' );
                this.paths = {
                    reset : this.pathEl.attr( 'd' ),
                    open : this.shapeEl.getAttribute( 'data-morph-open' ),
                    close : this.shapeEl.getAttribute( 'data-morph-close' )
                };

                this.isOpen = false;

                this.initEvents();
            };

            SVGMenu.prototype.initEvents = function() {
                this.trigger.addEventListener( 'click', this.toggle.bind(this) );
            };

            SVGMenu.prototype.toggle = function() {
                var self = this;

                if( this.isOpen ) {
                    classie.remove( self.el, 'menu--anim' );
                    setTimeout( function() { classie.remove( self.el, 'menu--open' );	}, 250 );

                    this.pathEl.stop().animate( { 'path' : this.paths.close }, 350, mina.easeout, function() {
                        self.pathEl.stop().animate( { 'path' : self.paths.reset }, 700, mina.elastic );
                    } );
                }
                else {
                    classie.add( self.el, 'menu--anim' );
                    setTimeout( function() { classie.add( self.el, 'menu--open' );	}, 250 );

                    this.pathEl.stop().animate( { 'path' : this.paths.open }, 350, mina.backin, function() {
                        self.pathEl.stop().animate( { 'path' : self.paths.reset }, 700, mina.elastic );
                    } );
                }
                this.isOpen = !this.isOpen;
            };

            new SVGMenu( document.getElementById( 'menu' ) );

        })();
    </script>
</div-->
