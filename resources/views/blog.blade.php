<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | Domki przy Pałacu</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-[#f7f3ec] text-[#263327] antialiased">
<header class="border-b border-[#d8ccb8] bg-[#f8f4ec]">
    <div class="mx-auto flex w-[min(1180px,92vw)] items-center justify-between py-4">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2" aria-label="Powrót do strony głównej">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo Domki przy Pałacu" class="h-auto w-16 object-contain [filter:brightness(0)_saturate(100%)_invert(24%)_sepia(14%)_saturate(781%)_hue-rotate(75deg)_brightness(95%)_contrast(88%)] md:w-20">
            <span class="flex flex-col leading-none">
                <strong class="text-base">Domki przy Pałacu</strong>
                <span class="mt-0.5 text-[11px] font-bold uppercase tracking-[0.12em] text-[#556455]">Blog</span>
            </span>
        </a>
        <a href="{{ route('home') }}" class="inline-flex items-center justify-center rounded-full bg-[#3b5a40] px-4 py-2 text-sm font-extrabold text-white shadow-[0_10px_24px_rgba(52,85,58,0.25)] transition hover:-translate-y-px hover:bg-[#2c4732]">Wróć na stronę główną</a>
    </div>
</header>

<main class="py-16">
    <div class="mx-auto w-[min(980px,92vw)]">
        <h1 class="[font-family:'Cormorant_Garamond',serif] text-5xl leading-[0.95] sm:text-6xl">Blog</h1>
        <p class="mt-3 max-w-2xl text-[#627063]">Historie Roztocza, lokalne ciekawostki i opowieści o dawnych wydarzeniach regionu.</p>

        <div class="mt-8 grid gap-5">
            <article class="rounded-[18px] border border-[#ddd2bf] bg-[#fffdf9] p-6 shadow-[0_10px_28px_rgba(58,68,54,0.09)]">
                <p class="text-xs font-bold uppercase tracking-[0.1em] text-[#6a7b6c]">17 marca 2026</p>
                <h2 class="mt-2 [font-family:'Cormorant_Garamond',serif] text-3xl">Jak narodziła się potęga Ordynacji Zamojskiej</h2>
                <p class="mt-3 text-[#627063]">Pod koniec XVI wieku okolice dzisiejszego Roztocza zaczęły dynamicznie się rozwijać dzięki działalności rodu Zamoyskich. Tworzenie nowych miast, folwarków i dróg handlowych zmieniło lokalny krajobraz na setki lat.</p>
                <p class="mt-2 text-[#627063]">Do dziś w układzie wielu miejscowości można odnaleźć ślady tamtego porządku przestrzennego: place rynkowe, osie widokowe i dawne trakty prowadzące między majątkami ziemskimi.</p>
            </article>

            <article class="rounded-[18px] border border-[#ddd2bf] bg-[#fffdf9] p-6 shadow-[0_10px_28px_rgba(58,68,54,0.09)]">
                <p class="text-xs font-bold uppercase tracking-[0.1em] text-[#6a7b6c]">10 marca 2026</p>
                <h2 class="mt-2 [font-family:'Cormorant_Garamond',serif] text-3xl">Dawne szlaki kupieckie Roztocza</h2>
                <p class="mt-3 text-[#627063]">Przez region przebiegały ważne trasy łączące Ruś Czerwoną z Małopolską. Wędrowali nimi kupcy, rzemieślnicy i podróżni, a przy drogach wyrastały karczmy, małe targowiska i osady.</p>
                <p class="mt-2 text-[#627063]">Choć dziś to spokojne, zielone okolice, układ dróg i położenie niektórych wsi nadal przypominają o czasach, gdy ruch handlowy był sercem lokalnej gospodarki.</p>
            </article>

            <article class="rounded-[18px] border border-[#ddd2bf] bg-[#fffdf9] p-6 shadow-[0_10px_28px_rgba(58,68,54,0.09)]">
                <p class="text-xs font-bold uppercase tracking-[0.1em] text-[#6a7b6c]">1 marca 2026</p>
                <h2 class="mt-2 [font-family:'Cormorant_Garamond',serif] text-3xl">Roztocze w XX wieku: pamięć i odbudowa</h2>
                <p class="mt-3 text-[#627063]">XX wiek przyniósł regionowi trudne doświadczenia wojenne oraz powojenną odbudowę. W wielu miejscowościach zachowały się cmentarze, pomniki i opowieści rodzinne przekazywane z pokolenia na pokolenie.</p>
                <p class="mt-2 text-[#627063]">Dzisiejsze Roztocze łączy pamięć o historii z codziennym spokojem. To właśnie ten kontrast sprawia, że pobyt tutaj jest nie tylko wypoczynkiem, ale też spotkaniem z lokalnym dziedzictwem.</p>
            </article>
        </div>
    </div>
</main>
</body>
</html>
