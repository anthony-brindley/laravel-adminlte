var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir(function(mix) {

    mix
        // combining scripts and styles is relative to the resources/assets directory
        .scripts([
            '../../../node_modules/respond.js/src/respond.js',
            '../../../node_modules/html5shiv/dist/html5shiv.js'
        ],
            'public/js/lt-ie9.js'
        )

        .scripts([
            '../../../node_modules/jquery/dist/jquery.js',
            '../../../node_modules/bootstrap/dist/js/bootstrap.js',
            '../../../node_modules/admin-lte/dist/js/app.js',

            'all.js'
        ],
            'public/js/all.js'
        )

        .styles([
            '../../../node_modules/bootstrap/dist/css/bootstrap.css',
            '../../../node_modules/font-awesome/css/font-awesome.css',
            '../../../node_modules/ionicons/css/ionicons.css',
            '../../../node_modules/admin-lte/dist/css/AdminLTE.css',
            '../../../node_modules/admin-lte/dist/css/skins/skin-blue.css',

            'all.css'
        ],
            'public/css/all.css'
        )

        .version([
            'css/all.css',
            'js/lt-ie9.js',
            'js/all.js'
        ])

        // copy is relative to the project root
        .copy('node_modules/font-awesome/fonts', 'public/build/fonts')

        // used by AdminLTE as a default user image
        .copy('node_modules/admin-lte/dist/img/user2-160x160.jpg', 'public/build/images/user2-160x160.jpg')
    ;

});
