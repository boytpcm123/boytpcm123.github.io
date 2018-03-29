@if(is_null($ad))
    <!doctype html>
    <html>

    <head>
        <title>Excharm</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0" />
        <meta charset="utf-8">
        <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('assets/frontend/images/favicon.ico')}}" type="image/x-icon">

        <meta property="og:title" content="Excharm" />
        <meta property="og:description" content="A great social app connect you to the nails industry network 
        Nails supplies shop with variety of product just one tap away" />
        <meta property="og:image" content="/excharm/logo.png" />
        <link rel="apple-touch-icon" href="/excharm/logo.png" />

        <meta property="og:type" content="website" />

        <meta name="apple-iunes-app" content="app-id=1330857258" />

        <meta property="al:ios:url" content="applinks://excharm.github.io" />
        <meta property="al:ios:app_store_id" content="1330857258" />
        <meta property="al:ios:app_name" content="Excharm" />


        <meta property="al:web:url" content="https://itunes.apple.com/app/id1330857258" />
        <meta property="al:web:should_fallback" content="true" />

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="twitter:app:name:iphone" content="Excharm" />
        <meta name="twitter:app:id:iphone" content="1330857258" />


        <meta property="al:web:should_fallback" content="true" />


        <script>
            var url = document.location.href;
            var stuff = url.split('/?id=');
            var id = stuff[stuff.length - 1];
            document.writeln('<meta property="og:url" content="' + document.location.href + '"/>');
            document.writeln('<meta name="apple-itunes-app" content="app-id=1330857258, app-argument=' + document.location.href + '"/>');
            document.writeln('<meta property="al:ios:url" content="applinks://excharm.github.io/excharm/?id=' + id + '"/>');
            document.writeln('<meta name="twitter:app:url:iphone" content="' + document.location.href + '"/>');
        </script>
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
        <link href="{{asset('assets/frontend/css/styles.css')}}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            function launchApp() {
                /* Deep link URL for existing users with app already installed on their device */
                var link = "applinks://{{urlNotHttpOrHttps()}}/share?id={{$ad->id}}";

                /* Download URL (TUNE link) for new users to download the app */
                //setTimeout("window.location = 'https://itunes.apple.com/app/id1330857258';", 1000);

                window.location = link;
            }

            function downloadApp() {
                /* Deep link URL for existing users with app already installed on their device */
                var link = 'https://itunes.apple.com/app/id1330857258';
                //alert(link);
                window.location = link;
            }

        </script>

    </head>

    <body>
        <main class="main">
            <div class="main__content">
                <div class="main__content__inner">
                    <h1>
                        <img src="{{asset('assets/frontend/images/logo.png')}}" alt="Nails Jobs">
                        <span>Excharm</span>
                    </h1>
                    <div class="btns">
                        <button onclick="launchApp()" class="btn-default">Open In App</button>
                        <button onclick="downloadApp()" class="btn-primary">Download App</button>
                    </div>
                </div>
            </div>
        </main>
        <!-- // Main Content -->

    </body>

    </html>
@else
    <!doctype html>
    <html>

    <head>
        <title>Excharm</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0" />
        <meta charset="utf-8">
        <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('assets/frontend/images/favicon.ico')}}" type="image/x-icon">
        <meta property="og:title" content="{{ $ad->title }}" />
        <meta property="og:description" content="{{ strip_tags($ad->description) }}" />
        @if(count($ad->files) == 0)
            <meta property="og:image" content="{{ asset(PATH_STORAGE.'uploads/ads/no-image.jpg') }}" /> 
        @else
            @if(in_array($ad->files[0]->file_mimetype,['video/mp4','video/flv','video/mov','video/quicktime']))
                <meta property="og:video" content="{{ asset(PATH_STORAGE.$ad->files[0]->file_path) }}" />
            @else
                <meta property="og:image" content="{{ asset(PATH_STORAGE.$ad->files[0]->file_path) }}" />   
            @endif
        @endif
        
        <meta property="og:url" content="{{URL::full()}}"/>
        @if(count($ad->files) > 0)
            <link rel="apple-touch-icon" href="{{ $ad->files[0]->path }}" />
        @else
            <link rel="apple-touch-icon" href="{{ asset(PATH_STORAGE.'uploads/ads/no-image.jpg') }}" />
        @endif
        <meta property="og:type" content="website" />

        <meta name="apple-iunes-app" content="app-id=1330857258" />

        <meta property="al:ios:url" content="applinks://{{urlNotHttpOrHttps()}}/share?id={{$ad->id}}" />
        <meta property="al:ios:app_store_id" content="1330857258" />
        <meta property="al:ios:app_name" content="Excharm" />


        <meta property="al:web:url" content="https://itunes.apple.com/app/id1330857258" />
        <meta property="al:web:should_fallback" content="true" />

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="twitter:app:name:iphone" content="Excharm" />
        <meta name="twitter:app:id:iphone" content="1330857258" />
        

        <meta property="al:web:should_fallback" content="true" />


        <meta name="apple-itunes-app" content="app-id=1330857258, app-argument={{URL::full()}}"/>
        <meta property="al:ios:url" content="applinks://{{urlNotHttpOrHttps()}}/share?id={{$ad->id}}"/>
        <meta name="twitter:app:url:iphone" content="{{URL::full()}}"/>
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
        <link href="{{asset('assets/frontend/css/styles.css')}}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script>

            function launchApp() {
                /* Deep link URL for existing users with app already installed on their device */
                var link = "applinks://{{urlNotHttpOrHttps()}}/share?id={{$ad->id}}";

                /* Download URL (TUNE link) for new users to download the app */
                //setTimeout("window.location = 'https://itunes.apple.com/app/id1330857258';", 1000);

                window.location = link;
            }

            function downloadApp() {
                /* Deep link URL for existing users with app already installed on their device */
                var link = 'https://itunes.apple.com/app/id1330857258';
                //alert(link);
                window.location = link;
            }
        </script>

    </head>

    <body>
        <main class="main">
            <div class="main__content">
                <div class="main__content__inner">
                    <h1>
                        <img src="{{asset('assets/frontend/images/logo.png')}}" alt="Nails Jobs">
                        <span>Excharm</span>
                    </h1>
                    <div class="btns">
                        <button onclick="launchApp()" class="btn-default">Open In App</button>
                        <button onclick="downloadApp()" class="btn-primary">Download App</button>
                    </div>
                </div>
            </div>
        </main>
        <!-- // Main Content -->
    </body>

    </html>
@endif