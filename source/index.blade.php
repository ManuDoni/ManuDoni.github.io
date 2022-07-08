@extends('_layouts.main')

@section('body')
<div class="min-h-[100vh] flex flex-col justify-between w-full h-full">

    <header
        class="flex-initial min-h-[200px] text-center text-white md:min-h-[400px] bg-mountains flex flex-row justify-center items-center">
        <div class="w-auto">
            <h1>Manuel Donini</h1>
            <p class="mb-8 text-xl">Backend Web Developer</p>

        </div>
    </header>

    <main
        class="flex flex-col items-center justify-around flex-auto gap-8 px-4 text-lg text-white bg-teal-900 bg-gradient-to-b from-teal-600 to-cyan-900">
        <div>
            <h2 class="text-center">Bio</h2>
            <p class="text-lg text-center backdrop-blur-sm">
                Hi, I'm a web <strong>artisan</strong>.<br>
                I focus on quality to build tailor-made web applications.<br>
                As you can see I'm a lake lover.<br>
                I live in the best place I could (imho),<br>
                on the shores of Lago Maggiore, Italy.<br>
                One of my wishes is to buy a little sailboat and go through my lake listening the sound of water (and Pink Floyd), <i>ah che pace!</i>
            </p>
        </div>
        <div>
            <h2 class="mb-8 text-center">Some sites I've worked on (noteworthy ones)</h2>
            <div class="flex flex-row flex-wrap justify-around">
                <x-project class="basis-1/2" title="Yak Games" url="https://yak.games" external>
                    This is a website that lets you play videogames and win amazon gift cards, what's better that this?
                </x-project>
            </div>
        </div>
        <div>
            <h2 class="mb-8 text-center">My little projects</h2>
            <div class="flex flex-row flex-wrap justify-around gap-8 items-">
                <x-project class="flex-1" title="Time Calculator" url="/time-calculator">
                    I made this app for my girlfriend and all her colleagues.<br>
                    It is a calculator for time segments, useful to fill in monthly time-sheets.
                </x-project>
                <x-project class="flex-1" title="IL" url="https://dkr.srl/il/il/" external>
                    This is an app to create tournaments for couple of players.<br>
                    I use it with my colleagues to create random teams when we play table-football.
                </x-project>
            </div>
        </div>
    </main>

    <footer class="flex-initial pt-12 pb-8 text-lg text-center text-white bg-cyan-900">
        I made this site with
        <a href="https://jigsaw.tighten.com/" class="italic hover:underline" rel="noopener noreferrer">Jigsaw</a>
        and
        <a href="https://tailwindcss.com/" class="italic hover:underline" rel="noopener noreferrer">Tailwind CSS</a>
    </footer>
</div>
@endsection
