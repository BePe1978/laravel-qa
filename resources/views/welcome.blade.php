<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Css for Backend Devs</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/signup-banner.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/animate.min.css">
</head>
<body>
    <header class="section mb-10">
        <div class="container mx-auto">
            <div class="header-top">
                <h1>XCasts</h1>

                <a href="#join-modal">Join</a>
            </div>

            <nav>
                <a href="#">Catalog</a>
                <a href="#">Series</a>
                <a href="#">Podcast</a>
                <a href="#">Discussions</a>
            </nav>
        </div>
    </header>

    @include('signup-banner')

    <div class="section">
        <div class="container mx-auto">
            <div class="row">
                <div class="col">
                    <div class="box">Some Text</div>
                </div>
                <div class="col">
                    <div class="box">Some Text</div>
                </div>
                <div class="col">
                    <div class="box">Some Text</div>
                </div>
                <div class="col">
                    <div class="box">Some Text</div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div class="card flex rounded shadow">
            <!-- left side -->
            <div class="card-left rounded flex flex-col justify-between flex-1 p-10 items-center text-center text-white bg-blue">
                <a href="#" class="card-skill-button no-underline text-xs rounded-full py-1 px-6 text-inherit">PHP</a>
                <img src="https://laracasts.com/images/series/2018/tooling-default.svg" alt="Icon">
                <span class="card-difficulty text-xs">Intermediate Difficulty</span>
            </div>

            <!-- right side -->
            <div class="card-right flex flex-col text-grey-darker p-6">
                <h3 class="card-title text-black font-light text-3xl mb-3">
                    <a href="#" class="no-underline text-inherit">Testing a New World</a>
                </h3>
                <p class="card-excerpt flex-1">There is a friend around you do not see but you will need.</p>
                <div class="card-meta flex text-sm">
                    <div class="flex items-center mr-4">
                        <img src="..." alt="Icon" class="mr-2">
                        5 Lessons
                    </div>
                    <div class="flex items-center">
                        <img src="..." alt="Icon" class="mr-2">
                    53:10 min
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards subscription -->
    <div class="container mx-auto my-10">
        <div class="flex">
        @include('plan', ['name' => 'Monthly']) {{--, ['plan' => $plan]) to use with variable data --}}
        @include('plan', ['name' => 'Yearly'])
        @include('plan', ['name' => 'Lifetime'])
        @include('plan', ['name' => 'Teams'])
        </div>
    </div>
    @component('layouts.modal', ['name' => 'join-modal'])
    <div class="tw-container container mx-auto">
            <div class="flex items-center h-full justify-end">
                <div class="w-1/2">
                    <h3 class="text-3xl mb-6">The most concise screencasts for the working developer, updated daily.</h3>
                    <p class="mb-16">There's no shortage of content at Laracasts. In fact, you could watch nonstop for days upon days, and still not see everything.</p>
                    <p>
                        <a href="/join" class="border border-white text-white hover:text-white hover:bg-blue hover:border-blue rounded-full py-2 px-4 hover:no-underline">Get Started</a>
                    </p>
                </div>
            </div>
        </div>
    @endcomponent
</body>
</html>
