<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Domki przy Pałacu | Roztocze</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-[#f7f3ec] text-[#263327] antialiased">
<header class="sticky top-0 z-30 border-b border-[#d8ccb8] bg-[#f8f4ec]/85 backdrop-blur">
    <div class="mx-auto flex w-[min(1180px,92vw)] items-center justify-between gap-4 py-2 [padding-top:max(0.55rem,env(safe-area-inset-top))]">
        <a href="#" class="inline-flex items-center gap-2" aria-label="Domki przy Pałacu - strona główna">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo Domki przy Pałacu" class="h-auto w-16 object-contain [filter:brightness(0)_saturate(100%)_invert(24%)_sepia(14%)_saturate(781%)_hue-rotate(75deg)_brightness(95%)_contrast(88%)] md:w-20">
            <span class="flex flex-col leading-none">
                <strong class="text-base">Domki przy Pałacu</strong>
                <span class="mt-0.5 text-[11px] font-bold uppercase tracking-[0.12em] text-[#556455]">Roztocze</span>
            </span>
        </a>

        <nav class="hidden items-center gap-4 text-sm font-semibold text-[#425643] md:flex" aria-label="Nawigacja główna">
            <a href="#domki" class="hover:text-[#3b5a40]">Domki</a>
            <a href="#dzien" class="hover:text-[#3b5a40]">Dzień na miejscu</a>
            <a href="#galeria" class="hover:text-[#3b5a40]">Galeria</a>
            <a href="#opinie" class="hover:text-[#3b5a40]">Opinie</a>
            <a href="#faq" class="hover:text-[#3b5a40]">FAQ</a>
            <a href="{{ route('blog') }}" class="hover:text-[#3b5a40]">Blog</a>
        </nav>

        <a href="#kontakt" class="inline-flex items-center justify-center rounded-full bg-[#3b5a40] px-4 py-2 text-sm font-extrabold text-white shadow-[0_10px_24px_rgba(52,85,58,0.25)] transition hover:-translate-y-px hover:bg-[#2c4732]">Zarezerwuj</a>
    </div>
</header>

<main>
    <section
        class="relative isolate flex min-h-[calc(100vh-84px)] items-center overflow-hidden bg-cover bg-center px-0 py-12"
        style="background-image: linear-gradient(115deg, rgba(24,33,26,0.58) 8%, rgba(24,33,26,0.22) 62%), url('{{ asset('images/houses.jpeg') }}');"
    >
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_80%_15%,rgba(232,211,176,0.2),transparent_36%)]"></div>
        <div
            class="pointer-events-none absolute -right-44 -top-12 hidden h-[38rem] w-[38rem] bg-contain bg-center bg-no-repeat opacity-10 lg:block"
            style="background-image: url('{{ asset('images/logo.svg') }}');"
        ></div>

        <div class="relative z-10 mx-auto grid w-[min(1180px,92vw)] gap-5 lg:grid-cols-[1.1fr_0.9fr] lg:items-end">
            <div class="max-w-3xl text-white">
                <span class="inline-flex items-center rounded-full border border-white/30 bg-white/15 px-3 py-1 text-[11px] font-bold uppercase tracking-[0.11em]">Slow Life na Roztoczu</span>
                <h1 class="mt-3 text-balance [font-family:'Cormorant_Garamond',serif] text-5xl leading-[0.95] sm:text-6xl lg:text-7xl">Odetchnij ciszą, zamieszkaj między dwoma domkami a Pałacem Łosiów</h1>
                <p class="mt-3 max-w-2xl text-base text-white/90 sm:text-[17px]">Dwa identyczne, nowoczesne domki w zielonym otoczeniu. Przestrzeń zaprojektowana dla spokoju, światła i prawdziwego odpoczynku.</p>
                <div class="mt-4 flex flex-wrap gap-2 text-xs font-semibold sm:text-sm">
                    <span class="rounded-full border border-white/30 bg-[#f7efe1]/20 px-3 py-1">2 identyczne domki</span>
                    <span class="rounded-full border border-white/30 bg-[#f7efe1]/20 px-3 py-1">Taras i aneks kuchenny</span>
                    <span class="rounded-full border border-white/30 bg-[#f7efe1]/20 px-3 py-1">Blisko Pałacu Łosiów</span>
                </div>
            </div>

            <form id="booking-form" action="#" method="post" class="rounded-[20px] border border-[#dbc7a9] border-t-[5px] border-t-[#a37a4f] bg-[#fffcf5]/95 p-4 shadow-[0_20px_45px_rgba(42,54,40,0.15)] backdrop-blur">
                <div id="kontakt" class="grid gap-3 md:grid-cols-2 lg:grid-cols-[1.25fr_1fr_1fr_0.85fr] lg:items-end">
                    <div class="grid gap-1">
                        <label for="name" class="pl-1 text-[11px] font-bold uppercase tracking-[0.08em] text-[#516150]">Imię i nazwisko</label>
                        <input id="name" name="name" type="text" placeholder="Jan Kowalski" required class="w-full rounded-xl border border-[#ddd2bf] bg-[#fffefb] px-3.5 py-3 text-[15px] text-[#2d3b2e] outline-none ring-[#3d5a41]/15 transition focus:border-[#9ab19e] focus:ring-4">
                    </div>
                    <div class="grid min-w-0 gap-1">
                        <label for="arrival" class="pl-1 text-[11px] font-bold uppercase tracking-[0.08em] text-[#516150]">Przyjazd</label>
                        <input id="arrival" name="arrival" type="date" required class="w-full max-w-full rounded-xl border border-[#ddd2bf] bg-[#fffefb] px-3.5 py-3 text-base text-[#2d3b2e] outline-none ring-[#3d5a41]/15 transition focus:border-[#9ab19e] focus:ring-4 sm:text-[15px]">
                    </div>
                    <div class="grid min-w-0 gap-1">
                        <label for="departure" class="pl-1 text-[11px] font-bold uppercase tracking-[0.08em] text-[#516150]">Wyjazd</label>
                        <input id="departure" name="departure" type="date" required class="w-full max-w-full rounded-xl border border-[#ddd2bf] bg-[#fffefb] px-3.5 py-3 text-base text-[#2d3b2e] outline-none ring-[#3d5a41]/15 transition focus:border-[#9ab19e] focus:ring-4 sm:text-[15px]">
                    </div>
                    <div class="grid gap-1">
                        <label for="people" class="pl-1 text-[11px] font-bold uppercase tracking-[0.08em] text-[#516150]">Osoby</label>
                        <input id="people" name="people" type="number" min="1" max="12" step="1" inputmode="numeric" placeholder="4" required class="w-full rounded-xl border border-[#ddd2bf] bg-[#fffefb] px-3.5 py-3 text-[15px] text-[#2d3b2e] outline-none ring-[#3d5a41]/15 transition focus:border-[#9ab19e] focus:ring-4">
                    </div>
                    <button type="submit" class="md:col-span-2 lg:col-span-4 inline-flex items-center justify-center rounded-full bg-[#3b5a40] px-4 py-3 text-sm font-extrabold text-white shadow-[0_10px_24px_rgba(52,85,58,0.25)] transition hover:-translate-y-px hover:bg-[#2c4732]">Sprawdź dostępność</button>
                </div>

                <div class="mt-3 grid gap-3 md:grid-cols-2">
                    <div class="grid gap-1">
                        <label for="email" class="pl-1 text-[11px] font-bold uppercase tracking-[0.08em] text-[#516150]">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="twoj@email.pl" required class="w-full rounded-xl border border-[#ddd2bf] bg-[#fffefb] px-3.5 py-3 text-[15px] text-[#2d3b2e] outline-none ring-[#3d5a41]/15 transition focus:border-[#9ab19e] focus:ring-4">
                    </div>
                    <div class="grid gap-1">
                        <label for="phone" class="pl-1 text-[11px] font-bold uppercase tracking-[0.08em] text-[#516150]">Telefon</label>
                        <input id="phone" name="phone" type="tel" placeholder="+48 000 000 000" required class="w-full rounded-xl border border-[#ddd2bf] bg-[#fffefb] px-3.5 py-3 text-[15px] text-[#2d3b2e] outline-none ring-[#3d5a41]/15 transition focus:border-[#9ab19e] focus:ring-4">
                    </div>
                    <div class="grid gap-1 md:col-span-2">
                        <label for="message" class="pl-1 text-[11px] font-bold uppercase tracking-[0.08em] text-[#516150]">Wiadomość</label>
                        <textarea id="message" name="message" placeholder="Np. interesuje mnie termin 18-22 sierpnia." class="min-h-24 w-full resize-y rounded-xl border border-[#ddd2bf] bg-[#fffefb] px-3.5 py-3 text-[15px] text-[#2d3b2e] outline-none ring-[#3d5a41]/15 transition focus:border-[#9ab19e] focus:ring-4"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section id="domki" class="px-0 py-20">
        <div class="mx-auto w-[min(1180px,92vw)]">
            <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">Jeden standard, dwa identyczne domki</h2>
            <p class="mt-3 max-w-3xl text-[#627063]">Nie musisz wybierać między wariantami. Każdy domek oferuje ten sam komfort i ten sam klimat wypoczynku.</p>

            <div class="mt-5 grid gap-4 lg:grid-cols-[1.05fr_0.95fr] lg:items-start">
                <article class="overflow-hidden rounded-[18px] border border-[#ddd2bf] bg-[#fffdf9] shadow-[0_10px_28px_rgba(58,68,54,0.09)]">
                    <img src="{{ asset('images/houses.jpeg') }}" alt="Dwa identyczne domki w kompleksie" class="h-[270px] w-full object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold">Standard domku</h3>
                        <p class="mt-2 text-[#627063]">Nowoczesna forma, dużo światła, naturalne materiały i prywatny taras z widokiem na zieleń.</p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            <span class="rounded-full border border-[#e2d2ba] bg-[#f1e9dc] px-2.5 py-1 text-xs font-bold text-[#5f4428]">4 osoby</span>
                            <span class="rounded-full border border-[#e2d2ba] bg-[#f1e9dc] px-2.5 py-1 text-xs font-bold text-[#5f4428]">Aneks kuchenny</span>
                            <span class="rounded-full border border-[#e2d2ba] bg-[#f1e9dc] px-2.5 py-1 text-xs font-bold text-[#5f4428]">Taras</span>
                            <span class="rounded-full border border-[#e2d2ba] bg-[#f1e9dc] px-2.5 py-1 text-xs font-bold text-[#5f4428]">Strefa relaksu</span>
                        </div>
                    </div>
                </article>

                <aside class="grid gap-3" aria-label="Status dostępności domków">
                    <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4">
                        <div class="mb-2 flex items-center justify-between gap-2 font-bold">
                            <span>Domek 1</span>
                            <span class="rounded-full border border-[#c8dcc9] bg-[#edf5ed] px-2 py-1 text-[11px] font-extrabold text-[#35543a]">Wolny</span>
                        </div>
                        <p class="text-sm text-[#627063]">Ten sam standard co Domek 2. Sprawdź dostępność dla wybranych dat.</p>
                    </article>
                    <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4">
                        <div class="mb-2 flex items-center justify-between gap-2 font-bold">
                            <span>Domek 2</span>
                            <span class="rounded-full border border-[#e7c9c9] bg-[#f7eded] px-2 py-1 text-[11px] font-extrabold text-[#7a4343]">Zajęty 18-22 sierpnia</span>
                        </div>
                        <p class="text-sm text-[#627063]">Poza wskazanym okresem dostępny. Potwierdzimy najlepszy termin po wysłaniu formularza.</p>
                    </article>
                </aside>
            </div>
        </div>
    </section>

    <section id="dzien" class="bg-[#f2eee4] px-0 py-20">
        <div class="mx-auto w-[min(1180px,92vw)]">
            <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">Jak wygląda dzień u nas</h2>
            <p class="mt-3 max-w-3xl text-[#627063]">Małe rytuały, które przywracają spokój. Bez pośpiechu, bez hałasu, blisko natury.</p>
            <div class="mt-5 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
                <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4"><strong class="block text-xs font-bold uppercase tracking-[0.08em] text-[#3b5140]">Poranek</strong><p class="mt-1 text-sm text-[#627063]">Kawa na tarasie, świeże powietrze i widok na zieleń zamiast ekranu.</p></article>
                <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4"><strong class="block text-xs font-bold uppercase tracking-[0.08em] text-[#3b5140]">Południe</strong><p class="mt-1 text-sm text-[#627063]">Spacer po lesie, rowerowe trasy Roztocza i chwila w okolicy Pałacu Łosiów.</p></article>
                <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4"><strong class="block text-xs font-bold uppercase tracking-[0.08em] text-[#3b5140]">Popołudnie</strong><p class="mt-1 text-sm text-[#627063]">Obiad we własnym tempie i odpoczynek w cieniu przy drewnianym tarasie.</p></article>
                <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4"><strong class="block text-xs font-bold uppercase tracking-[0.08em] text-[#3b5140]">Wieczór</strong><p class="mt-1 text-sm text-[#627063]">Zachód słońca, cisza i klimat slow life, który zostaje z Tobą na dłużej.</p></article>
            </div>
        </div>
    </section>

    <section id="o-nas" class="px-0 py-20">
        <div class="mx-auto grid w-[min(1180px,92vw)] gap-4 lg:grid-cols-2">
            <article class="rounded-[18px] border border-[#ddd2bf] bg-[#fffdf9] p-5 shadow-[0_10px_28px_rgba(58,68,54,0.09)]">
                <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">O kompleksie</h2>
                <p class="mt-3 text-[#627063]">Kompleks składa się z dwóch identycznych domków położonych na Roztoczu, tuż przy malowniczej okolicy Pałacu Łosiów. Projekt miejsca oparto na prostocie, świetle i naturze.</p>
            </article>
            <article class="rounded-[18px] border border-[#ddd2bf] bg-[#fffdf9] p-5 shadow-[0_10px_28px_rgba(58,68,54,0.09)]">
                <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">Dlaczego goście wracają</h2>
                <p class="mt-3 text-[#627063]">Za kameralność, wygodę i przewidywalny standard. Każdy pobyt daje tę samą jakość: wygodny układ, taras, ciszę i przestrzeń do odpoczynku od miasta.</p>
            </article>
        </div>
    </section>

    <section id="galeria" class="bg-[#f2eee4] px-0 py-20">
        <div class="mx-auto w-[min(1180px,92vw)]">
            <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">Galeria</h2>
            <p class="mt-3 max-w-3xl text-[#627063]">Domki, las, spokojne krajobrazy i wieczorne światło Roztocza.</p>
            <div class="mt-5 grid grid-cols-2 gap-3 lg:grid-cols-4">
                <img src="{{ asset('images/houses.jpeg') }}" alt="Domki w zielonym otoczeniu" class="h-full w-full rounded-[14px] object-cover shadow-[0_10px_26px_rgba(55,66,54,0.13)] lg:col-span-2 lg:aspect-[2/1]">
                <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?auto=format&fit=crop&w=900&q=80" alt="Leśny krajobraz Roztocza" class="w-full rounded-[14px] object-cover shadow-[0_10px_26px_rgba(55,66,54,0.13)] aspect-square">
                <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=900&q=80" alt="Strefa relaksu przy domku" class="w-full rounded-[14px] object-cover shadow-[0_10px_26px_rgba(55,66,54,0.13)] aspect-square">
                <img src="https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=1200&q=80" alt="Zachód słońca" class="h-full w-full rounded-[14px] object-cover shadow-[0_10px_26px_rgba(55,66,54,0.13)] lg:col-span-2 lg:aspect-[2/1]">
            </div>
        </div>
    </section>

    <section id="atrakcje" class="px-0 py-20">
        <div class="mx-auto w-[min(1180px,92vw)]">
            <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">Atrakcje w okolicy</h2>
            <ul class="mt-4 grid gap-2">
                <li class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-3 font-semibold text-[#405240]">Pałac Łosiów i spacery historycznymi alejami</li>
                <li class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-3 font-semibold text-[#405240]">Roztoczański Park Narodowy i czyste leśne powietrze</li>
                <li class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-3 font-semibold text-[#405240]">Malownicze trasy rowerowe i piesze</li>
                <li class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-3 font-semibold text-[#405240]">Punkty widokowe i miejsca idealne na piknik</li>
                <li class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-3 font-semibold text-[#405240]">Cisza i natura bez tłoku</li>
            </ul>
        </div>
    </section>

    <section id="opinie" class="bg-[#f2eee4] px-0 py-20">
        <div class="mx-auto w-[min(1180px,92vw)]">
            <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">Opinie gości</h2>
            <div class="mt-5 grid gap-3 lg:grid-cols-3">
                <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4"><span class="inline-flex rounded-full border border-[#cfdecb] bg-[#edf4ea] px-2.5 py-1 text-xs font-extrabold text-[#355239]">9.8 / 10</span><p class="mt-2 text-[#627063]">Świetne miejsce na wyciszenie. Domek czysty, taras bardzo klimatyczny, a okolica spokojna i zielona.</p><p class="mt-3 text-sm font-bold text-[#3f4f40]">Anna, Lublin</p></article>
                <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4"><span class="inline-flex rounded-full border border-[#cfdecb] bg-[#edf4ea] px-2.5 py-1 text-xs font-extrabold text-[#355239]">9.7 / 10</span><p class="mt-2 text-[#627063]">Bardzo dobry standard i super lokalizacja blisko Pałacu Łosiów. Wrócilibyśmy bez zastanowienia.</p><p class="mt-3 text-sm font-bold text-[#3f4f40]">Marek, Rzeszów</p></article>
                <article class="rounded-2xl border border-[#ddd2bf] bg-[#fffdf9] p-4"><span class="inline-flex rounded-full border border-[#cfdecb] bg-[#edf4ea] px-2.5 py-1 text-xs font-extrabold text-[#355239]">9.9 / 10</span><p class="mt-2 text-[#627063]">Idealne miejsce na weekend slow life. Wszystko zgodne z opisem, kontakt szybki i konkretny.</p><p class="mt-3 text-sm font-bold text-[#3f4f40]">Kasia i Piotr, Warszawa</p></article>
            </div>
        </div>
    </section>

    <section id="faq" class="px-0 py-20">
        <div class="mx-auto w-[min(1180px,92vw)]">
            <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">FAQ</h2>
            <div class="mt-4 grid gap-2.5">
                <details class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-1"><summary class="cursor-pointer py-3 font-semibold text-[#3a4c3b]">Jakie są godziny zameldowania i wymeldowania?</summary><p class="pb-3 text-[#627063]">Zameldowanie od 15:00, wymeldowanie do 11:00. Przy dostępności możliwy jest elastyczny check-in.</p></details>
                <details class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-1"><summary class="cursor-pointer py-3 font-semibold text-[#3a4c3b]">Czy można przyjechać ze zwierzętami?</summary><p class="pb-3 text-[#627063]">Tak, po wcześniejszym uzgodnieniu. Podaj informację o zwierzaku w wiadomości przy rezerwacji.</p></details>
                <details class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-1"><summary class="cursor-pointer py-3 font-semibold text-[#3a4c3b]">Czy na miejscu jest parking?</summary><p class="pb-3 text-[#627063]">Tak, zapewniamy bezpłatne miejsca parkingowe dla gości bezpośrednio przy kompleksie.</p></details>
                <details class="rounded-xl border border-[#ddd2bf] bg-[#fffdf9] px-4 py-1"><summary class="cursor-pointer py-3 font-semibold text-[#3a4c3b]">Czy wymagacie zaliczki?</summary><p class="pb-3 text-[#627063]">Tak, po potwierdzeniu terminu przesyłamy dane do zaliczki. Pozostała kwota płatna przed przyjazdem lub na miejscu.</p></details>
            </div>
        </div>
    </section>

    <section id="mapa" class="bg-[#f2eee4] px-0 py-20">
        <div class="mx-auto grid w-[min(1180px,92vw)] gap-4 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
            <article class="rounded-[18px] border border-[#ddd2bf] bg-[#fffdf9] p-5 shadow-[0_10px_28px_rgba(58,68,54,0.09)]">
                <h2 class="[font-family:'Cormorant_Garamond',serif] text-4xl leading-[1.05] sm:text-5xl">Mapa i dojazd</h2>
                <p class="mt-3 text-[#627063]">Kompleks znajduje się na Roztoczu, w pobliżu Pałacu Łosiów, z wygodnym dojazdem samochodem i rowerem.</p>
            </article>
            <div class="overflow-hidden rounded-[14px] border border-[#ddd2bf] shadow-[0_10px_26px_rgba(54,63,49,0.12)]">
                <iframe title="Mapa - Domki przy Pałacu" src="https://www.google.com/maps?q=Pa%C5%82ac%20%C5%81osi%C3%B3w%20Narol&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="block min-h-[330px] w-full border-0"></iframe>
            </div>
        </div>
    </section>
</main>

<footer class="relative mt-8 overflow-hidden border-t border-[#d3c4ab]/30 bg-[#263427] py-10 text-[#e7efe3] before:absolute before:left-0 before:right-0 before:top-0 before:h-[2px] before:content-[''] before:bg-[linear-gradient(90deg,transparent,#b79369,transparent)]">
    <div class="relative z-10 mx-auto grid w-[min(1180px,92vw)] gap-5 lg:grid-cols-[1.2fr_1fr_1fr]">
        <div>
            <img src="{{ asset('images/logo.svg') }}" alt="Logo Domki przy Pałacu" class="mb-2 h-auto w-[190px] object-contain [filter:brightness(0)_saturate(100%)_invert(89%)_sepia(9%)_saturate(333%)_hue-rotate(58deg)_brightness(103%)_contrast(92%)]">
            <strong>Domki przy Pałacu</strong>
            <p class="mt-1 text-[#c9d6c6]">Roztocze, Polska</p>
        </div>
        <div>
            <strong>Kontakt</strong>
            <p class="mt-1"><a href="tel:+48000000000">+48 000 000 000</a></p>
            <p><a href="mailto:rezerwacje@domkiprzypalacu.pl">rezerwacje@domkiprzypalacu.pl</a></p>
        </div>
        <div>
            <strong>Social media</strong>
            <p class="mt-1"><a href="#">Instagram</a></p>
            <p><a href="#">Facebook</a></p>
        </div>
    </div>
</footer>

<script>
    const bookingForm = document.getElementById('booking-form');

    if (bookingForm) {
        bookingForm.addEventListener('submit', function (event) {
            event.preventDefault();
            alert('Dziękujemy! Sprawdzimy dostępność i skontaktujemy się z Tobą.');
            bookingForm.reset();
        });
    }
</script>
</body>
</html>
