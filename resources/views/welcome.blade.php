<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="You're invited to Loviena Shelby Birthday Party! 🎀 RSVP now to join the celebration.">
    <title>Loviena Shelby Birthday Party 🎀 — You're Invited!</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<style>
.invitation-reveal-section{position:relative;overflow:hidden}
.invitation-reveal-section>*:not(.sunset-decor){position:relative;z-index:1}
.sunset-decor{position:absolute;inset:0;z-index:0;pointer-events:none;overflow:hidden;
  background:radial-gradient(120% 55% at 50% 40%,rgba(247,127,102,.6),transparent 70%),
             linear-gradient(180deg,#ffc9d6 0%,#ffb09b 45%,#ff9566 100%)}
.sunset-decor svg{position:absolute;display:block;overflow:visible}

/* ---- Lampu warna-warni ---- */
.sd-wash{position:absolute;inset:0;mix-blend-mode:soft-light;opacity:.55;
  background:radial-gradient(circle at 20% 20%,#ff1a7e,transparent 45%),radial-gradient(circle at 80% 30%,#ffd34d,transparent 45%),
             radial-gradient(circle at 50% 80%,#7a5cff,transparent 50%);animation:sd-hue 10s linear infinite}
.sd-dot{position:absolute;border-radius:50%;mix-blend-mode:screen;filter:blur(1.5px);opacity:0;
  animation:sd-drift var(--t) ease-in-out var(--d) infinite}
.sd-rays{position:absolute;left:50%;top:50%;width:calc(var(--w)*3.6);height:calc(var(--w)*3.6);
  margin:calc(var(--w)*-1.8) 0 0 calc(var(--w)*-1.8);border-radius:50%;mix-blend-mode:screen;filter:blur(5px);
  background:conic-gradient(transparent 0 4%,rgba(255,26,126,.65) 5% 8%,transparent 9% 18%,rgba(255,224,138,.7) 19% 22%,
   transparent 23% 32%,rgba(70,200,255,.6) 33% 36%,transparent 37% 46%,rgba(170,90,255,.6) 47% 50%,transparent 51% 60%,
   rgba(110,255,160,.55) 61% 64%,transparent 65% 74%,rgba(255,138,42,.7) 75% 78%,transparent 79% 88%,rgba(255,80,200,.6) 89% 92%,transparent 93%);
  -webkit-mask:radial-gradient(circle,#000 8%,transparent 68%);mask:radial-gradient(circle,#000 8%,transparent 68%);
  animation:sd-spin var(--s) linear infinite}
.sd-ball{position:absolute;width:var(--w)}
.sd-ball canvas{display:block;width:100%;aspect-ratio:1;position:relative;filter:drop-shadow(0 8px 14px rgba(120,20,70,.35))}
.sd-chain{position:absolute;left:50%;bottom:88%;width:3px;height:260px;margin-left:-1.5px;
  background:repeating-linear-gradient(#f3c45a 0 5px,#b07d1c 5px 8px)}
.sd-ball-l{--w:clamp(105px,28vw,165px);--s:16s;left:-3%;top:2%}
.sd-ball-r{--w:clamp(120px,33vw,205px);--s:12s;right:3%;top:3%}
.sd-ball-r .sd-rays{animation-direction:reverse}

/* ---- Posisi bunga & gelas ---- */
.sd-hib-c{top:34%;right:-50px;width:clamp(115px,31vw,180px);transform:rotate(-16deg)}
.sd-hib-b{top:40%;left:-48px;width:clamp(120px,32vw,185px);transform:rotate(20deg)}
.sd-martini{bottom:-6px;left:1%;width:clamp(105px,27vw,165px);transform:rotate(-3deg)}
.sd-tumbler{bottom:-4px;left:clamp(90px,24vw,150px);width:clamp(78px,20vw,120px)}
.sd-bub{animation:sd-rise 3.2s ease-in infinite}
.sd-rip{transform-box:fill-box;transform-origin:center;animation:sd-ripple 3.6s ease-out infinite}

/* ---- Lampu tali LED (layer paling atas) ---- */
.sd-led{position:absolute;left:0;top:0;width:100%;height:110px;z-index:5}
.sd-led svg{width:100%;height:110px}
.sd-bulb{animation:sd-tw 2s ease-in-out infinite;filter:drop-shadow(0 0 5px var(--c)) drop-shadow(0 0 10px var(--c))}
@keyframes sd-tw{0%,100%{opacity:.3}45%{opacity:1}60%{opacity:.85}}

@keyframes sd-spin{to{transform:rotate(360deg)}}
@keyframes sd-hue{to{filter:hue-rotate(360deg)}}
@keyframes sd-drift{0%{opacity:0;transform:translate(0,0) scale(.6)}25%{opacity:.85}
  60%{opacity:.6}100%{opacity:0;transform:translate(var(--x),var(--y)) scale(1.3)}}
@keyframes sd-rise{0%{transform:translateY(0);opacity:0}15%{opacity:.9}100%{transform:translateY(-46px);opacity:0}}
@keyframes sd-ripple{0%{transform:scale(.4);opacity:.7}100%{transform:scale(1.15);opacity:0}}
@media (prefers-reduced-motion:reduce){.sd-wash,.sd-dot,.sd-rays,.sd-bub,.sd-rip,.sd-bulb{animation:none}}

/* ---- Retro Disco x Tropical: bingkai sisi ---- */
.sd-wave{top:0;height:100%;width:clamp(26px,7vw,40px);opacity:.95}
.sd-wave-l{left:0}.sd-wave-r{right:0;transform:scaleX(-1)}
.sd-arc{bottom:-4px;width:clamp(150px,40vw,250px);opacity:.9}
.sd-arc-l{left:-6px}.sd-arc-r{right:-6px;transform:scaleX(-1)}

.sd-palm{--pw:clamp(200px,52vw,320px);width:var(--pw);transform-origin:50% 91.8%}
.sd-palm-tl{left:calc(var(--pw)*-.5 + 10px);top:calc(var(--pw)*-.978 + 14px);transform:rotate(128deg)}
.sd-palm-tr{right:calc(var(--pw)*-.5 + 10px);top:calc(var(--pw)*-.978 + 14px);transform:rotate(-128deg)}
.sd-palm-bl{--pw:clamp(170px,44vw,270px)}.sd-palm-br{--pw:clamp(120px,32vw,190px)}
.sd-palm-bl{left:calc(var(--pw)*-.5 + 12px);bottom:calc(var(--pw)*-.087 + 10px);transform:rotate(34deg)}
.sd-palm-br{right:calc(var(--pw)*-.5 + 12px);bottom:calc(var(--pw)*-.087 + 10px);transform:rotate(-34deg)}

.sd-mons{width:clamp(190px,50vw,280px)}
.sd-mons-l{top:22%;left:-120px;transform:rotate(82deg)}
.sd-mons-r{top:16%;right:-120px;transform:rotate(-82deg)}

.sd-pine{top:50%;right:-4px;width:clamp(58px,13vw,76px);transform:rotate(10deg)}
.sd-star{position:absolute;width:var(--z);aspect-ratio:1;background:#fff7d6;filter:drop-shadow(0 0 4px #ffd34d);
  clip-path:polygon(50% 0,60% 40%,100% 50%,60% 60%,50% 100%,40% 60%,0 50%,40% 40%);animation:sd-tw 2.4s ease-in-out infinite}
@media (prefers-reduced-motion:reduce){.sd-star,.sd-note,.sd-spin-rec{animation:none}.sd-note{display:none}}


.sd-orange-a{bottom:17%;right:-36px;width:clamp(105px,26vw,140px);transform:rotate(12deg)}
.sd-orange-b{top:61%;left:-34px;width:clamp(70px,20vw,92px);transform:rotate(-28deg)}
/* ---- Gramofon (pojok kanan bawah) ---- */
.sd-gramo{right:2%;bottom:0;position:absolute;width:clamp(112px,29vw,160px)}
.sd-gramo svg{position:relative;display:block;width:100%;overflow:visible}
.sd-spin-rec{transform-box:fill-box;transform-origin:center;animation:sd-spin 2.4s linear infinite;animation-play-state:paused}
.sd-gramo.playing .sd-spin-rec{animation-play-state:running}
.sd-note{position:absolute;left:14%;top:14%;font:700 clamp(17px,4.6vw,24px)/1 Georgia,serif;font-style:normal;opacity:0;
  text-shadow:0 0 8px rgba(255,255,255,.75),0 2px 4px rgba(90,16,48,.35)}
.sd-gramo.playing .sd-note{animation:sd-note 4.2s ease-out infinite}
@keyframes sd-note{0%{opacity:0;transform:translate(0,0) scale(.5) rotate(0)}15%{opacity:1}70%{opacity:.9}
  100%{opacity:0;transform:translate(var(--nx),var(--ny)) scale(1.25) rotate(var(--nr))}}

/* ════ MOBILE RESPONSIVE DEKORASI ════ */
@media (max-width: 600px) {
  /* Bola disco lebih besar di mobile */
  .sd-ball-l{--w:clamp(130px,38vw,200px)}
  .sd-ball-r{--w:clamp(145px,42vw,230px)}
  /* Rantai bola yang lebih pendek di mobile */
  .sd-chain{height:clamp(100px,26vw,200px)}

  /* Bunga - lebih besar & jangan terlalu masuk ke luar layar */
  .sd-hib-c{width:clamp(130px,38vw,200px);right:-30px;top:28%}
  .sd-hib-b{width:clamp(135px,40vw,210px);left:-30px;top:34%}

  /* Gelas - lebih besar */
  .sd-martini{width:clamp(120px,34vw,190px)}
  .sd-tumbler{left:clamp(100px,28vw,170px);width:clamp(90px,24vw,140px)}

  /* Orange slices */
  .sd-orange-a{width:clamp(110px,30vw,160px);right:-20px}
  .sd-orange-b{width:clamp(80px,22vw,110px);left:-18px}

  /* Gramofon lebih besar */
  .sd-gramo{width:clamp(130px,36vw,200px)}

  /* Palm - ukuran disesuaikan mobile */
  .sd-palm{--pw:clamp(220px,58vw,340px)}
  .sd-palm-bl{--pw:clamp(190px,50vw,290px)}
  .sd-palm-br{--pw:clamp(140px,38vw,210px)}

  /* Monstera - lebih besar & lebih ke dalam */
  .sd-mons{width:clamp(200px,56vw,300px)}
  .sd-mons-l{left:-90px}
  .sd-mons-r{right:-90px}

  /* Wave bar samping lebih lebar */
  .sd-wave{width:clamp(22px,6vw,36px)}
  
  /* Arc pojok lebih besar */
  .sd-arc{width:clamp(120px,36vw,200px)}

  /* Pineapple */
  .sd-pine{width:clamp(64px,16vw,90px)}

  /* LED string lebih tinggi */
  .sd-led{height:90px}
  .sd-led svg{height:90px}

  /* Star bintang */
  .sd-star{filter:drop-shadow(0 0 6px #ffd34d)}

  /* Notes lebih besar */
  .sd-note{font-size:clamp(20px,5.5vw,28px)}
}

@media (max-width: 400px) {
  .sd-ball-l{--w:clamp(140px,42vw,210px)}
  .sd-ball-r{--w:clamp(155px,46vw,230px)}
  .sd-hib-c{width:clamp(140px,42vw,200px);right:-20px}
  .sd-hib-b{width:clamp(145px,44vw,210px);left:-20px}
  .sd-martini{width:clamp(130px,38vw,200px)}
  .sd-gramo{width:clamp(140px,40vw,200px)}
}
</style>

<div class="sunset-decor" aria-hidden="true">
  <div class="sd-wash"></div>
  <div id="sd-dots"></div>
  <div class="sd-led" id="sd-led"></div>

  {{-- ====== TROPIS & RETRO: definisi ====== --}}
  <svg width="0" height="0" style="position:absolute"><defs>
    <linearGradient id="sd-leafg" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#0a6b52"/><stop offset=".55" stop-color="#17a67a"/><stop offset="1" stop-color="#6be3b4"/></linearGradient>
    <linearGradient id="sd-monsg" x1="0" y1="1" x2="0" y2="0"><stop offset="0" stop-color="#0a6b52"/><stop offset=".6" stop-color="#18b084"/><stop offset="1" stop-color="#5fdcaa"/></linearGradient>
    <linearGradient id="sd-pine" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#ffe27a"/><stop offset=".6" stop-color="#ffb02e"/><stop offset="1" stop-color="#e8770c"/></linearGradient>
    <radialGradient id="sd-label" cx=".5" cy=".5" r=".5"><stop offset="0" stop-color="#ffe08a"/><stop offset=".45" stop-color="#ff8a2a"/><stop offset="1" stop-color="#ff1a7e"/></radialGradient>
    <mask id="sd-monsmask" maskUnits="userSpaceOnUse" x="-120" y="-120" width="240" height="240">
      <path d="M0 92C-98 62-104-52-32-90C-12-100 0-84 0-72C0-84 12-100 32-90C104-52 98 62 0 92Z" fill="#fff"/>
      <g stroke="#000" stroke-width="11" stroke-linecap="round" fill="none">
        <path d="M-108 8L-36 12"/><path d="M-100 40L-34 34"/><path d="M-80-44L-34-24"/>
        <path d="M108 8L36 12"/><path d="M100 40L34 34"/><path d="M80-44L34-24"/></g>
      <ellipse cx="-20" cy="-26" rx="5" ry="9" fill="#000"/><ellipse cx="20" cy="-26" rx="5" ry="9" fill="#000"/>
    </mask>
    <g id="sd-frond"><path d="M0 0Q0-100 22-200" stroke="#0a5b45" stroke-width="3.5" fill="none" stroke-linecap="round"/><path d="M0 0C11.2-9 26.2-7 37.4 3C26.2 9 11.2 7 0 0Z" fill="url(#sd-leafg)" transform="translate(0.1 -12.0) rotate(19.7)"/><path d="M0 0C11.2-9 26.2-7 37.4 3C26.2 9 11.2 7 0 0Z" fill="url(#sd-leafg)" transform="translate(0.1 -12.0) rotate(160.3)"/><path d="M0 0C14.4-9 33.5-7 47.9 3C33.5 9 14.4 7 0 0Z" fill="url(#sd-leafg)" transform="translate(0.3 -23.5) rotate(21.3)"/><path d="M0 0C14.4-9 33.5-7 47.9 3C33.5 9 14.4 7 0 0Z" fill="url(#sd-leafg)" transform="translate(0.3 -23.5) rotate(158.7)"/><path d="M0 0C17.3-9 40.4-7 57.7 3C40.4 9 17.3 7 0 0Z" fill="url(#sd-leafg)" transform="translate(0.7 -35.0) rotate(22.9)"/><path d="M0 0C17.3-9 40.4-7 57.7 3C40.4 9 17.3 7 0 0Z" fill="url(#sd-leafg)" transform="translate(0.7 -35.0) rotate(157.1)"/><path d="M0 0C19.9-9 46.4-7 66.2 3C46.4 9 19.9 7 0 0Z" fill="url(#sd-leafg)" transform="translate(1.2 -46.5) rotate(24.5)"/><path d="M0 0C19.9-9 46.4-7 66.2 3C46.4 9 19.9 7 0 0Z" fill="url(#sd-leafg)" transform="translate(1.2 -46.5) rotate(155.5)"/><path d="M0 0C22.0-9 51.4-7 73.4 3C51.4 9 22.0 7 0 0Z" fill="url(#sd-leafg)" transform="translate(1.9 -58.0) rotate(26.1)"/><path d="M0 0C22.0-9 51.4-7 73.4 3C51.4 9 22.0 7 0 0Z" fill="url(#sd-leafg)" transform="translate(1.9 -58.0) rotate(153.9)"/><path d="M0 0C23.7-9 55.2-7 78.9 3C55.2 9 23.7 7 0 0Z" fill="url(#sd-leafg)" transform="translate(2.7 -69.5) rotate(27.7)"/><path d="M0 0C23.7-9 55.2-7 78.9 3C55.2 9 23.7 7 0 0Z" fill="url(#sd-leafg)" transform="translate(2.7 -69.5) rotate(152.3)"/><path d="M0 0C24.7-9 57.7-7 82.4 3C57.7 9 24.7 7 0 0Z" fill="url(#sd-leafg)" transform="translate(3.6 -81.0) rotate(29.3)"/><path d="M0 0C24.7-9 57.7-7 82.4 3C57.7 9 24.7 7 0 0Z" fill="url(#sd-leafg)" transform="translate(3.6 -81.0) rotate(150.7)"/><path d="M0 0C25.2-9 58.8-7 83.9 3C58.8 9 25.2 7 0 0Z" fill="url(#sd-leafg)" transform="translate(4.7 -92.5) rotate(31.0)"/><path d="M0 0C25.2-9 58.8-7 83.9 3C58.8 9 25.2 7 0 0Z" fill="url(#sd-leafg)" transform="translate(4.7 -92.5) rotate(149.1)"/><path d="M0 0C25.0-9 58.4-7 83.4 3C58.4 9 25.0 7 0 0Z" fill="url(#sd-leafg)" transform="translate(5.9 -104.0) rotate(32.6)"/><path d="M0 0C25.0-9 58.4-7 83.4 3C58.4 9 25.0 7 0 0Z" fill="url(#sd-leafg)" transform="translate(5.9 -104.0) rotate(147.4)"/><path d="M0 0C24.2-9 56.6-7 80.8 3C56.6 9 24.2 7 0 0Z" fill="url(#sd-leafg)" transform="translate(7.3 -115.5) rotate(34.2)"/><path d="M0 0C24.2-9 56.6-7 80.8 3C56.6 9 24.2 7 0 0Z" fill="url(#sd-leafg)" transform="translate(7.3 -115.5) rotate(145.8)"/><path d="M0 0C22.9-9 53.4-7 76.2 3C53.4 9 22.9 7 0 0Z" fill="url(#sd-leafg)" transform="translate(8.9 -127.0) rotate(35.8)"/><path d="M0 0C22.9-9 53.4-7 76.2 3C53.4 9 22.9 7 0 0Z" fill="url(#sd-leafg)" transform="translate(8.9 -127.0) rotate(144.2)"/><path d="M0 0C21.0-9 48.9-7 69.9 3C48.9 9 21.0 7 0 0Z" fill="url(#sd-leafg)" transform="translate(10.6 -138.5) rotate(37.4)"/><path d="M0 0C21.0-9 48.9-7 69.9 3C48.9 9 21.0 7 0 0Z" fill="url(#sd-leafg)" transform="translate(10.6 -138.5) rotate(142.6)"/><path d="M0 0C18.6-9 43.3-7 61.9 3C43.3 9 18.6 7 0 0Z" fill="url(#sd-leafg)" transform="translate(12.4 -150.0) rotate(39.0)"/><path d="M0 0C18.6-9 43.3-7 61.9 3C43.3 9 18.6 7 0 0Z" fill="url(#sd-leafg)" transform="translate(12.4 -150.0) rotate(141.0)"/><path d="M0 0C15.8-9 36.9-7 52.7 3C36.9 9 15.8 7 0 0Z" fill="url(#sd-leafg)" transform="translate(14.3 -161.5) rotate(40.6)"/><path d="M0 0C15.8-9 36.9-7 52.7 3C36.9 9 15.8 7 0 0Z" fill="url(#sd-leafg)" transform="translate(14.3 -161.5) rotate(139.4)"/><path d="M0 0C12.7-9 29.7-7 42.5 3C29.7 9 12.7 7 0 0Z" fill="url(#sd-leafg)" transform="translate(16.5 -173.0) rotate(42.2)"/><path d="M0 0C12.7-9 29.7-7 42.5 3C29.7 9 12.7 7 0 0Z" fill="url(#sd-leafg)" transform="translate(16.5 -173.0) rotate(137.8)"/><path d="M0 0C9.5-9 22.2-7 31.7 3C22.2 9 9.5 7 0 0Z" fill="url(#sd-leafg)" transform="translate(18.7 -184.5) rotate(43.8)"/><path d="M0 0C9.5-9 22.2-7 31.7 3C22.2 9 9.5 7 0 0Z" fill="url(#sd-leafg)" transform="translate(18.7 -184.5) rotate(136.2)"/><path d="M0 0C7.8-9 18.2-7 26.0 3C18.2 9 7.8 7 0 0Z" fill="url(#sd-leafg)" transform="translate(21.1 -196.0) rotate(45.4)"/><path d="M0 0C7.8-9 18.2-7 26.0 3C18.2 9 7.8 7 0 0Z" fill="url(#sd-leafg)" transform="translate(21.1 -196.0) rotate(134.6)"/><path d="M0 0C-6-9 -6-30 0-44C6-30 6-9 0 0Z" fill="url(#sd-leafg)" transform="translate(22 -200) rotate(-8)"/></g>
    <g id="sd-monstera">
      <path d="M0 80C0 100 2 120 4 135" stroke="#0a5b45" stroke-width="6" fill="none" stroke-linecap="round"/>
      <g mask="url(#sd-monsmask)">
        <path d="M0 92C-98 62-104-52-32-90C-12-100 0-84 0-72C0-84 12-100 32-90C104-52 98 62 0 92Z" fill="url(#sd-monsg)"/>
        <g stroke="#fff" stroke-opacity=".28" stroke-width="1.6" fill="none" stroke-linecap="round">
          <path d="M0 92V-70"/><path d="M0 60C-30 50-60 40-90 10"/><path d="M0 60C30 50 60 40 90 10"/><path d="M0 20C-24 10-50 0-80-30"/><path d="M0 20C24 10 50 0 80-30"/></g>
      </g>
    </g>
  </defs></svg>

  {{-- ====== RETRO: strip gelombang di tepi, pelangi di pojok ====== --}}
  <svg class="sd-wave sd-wave-l" viewBox="0 0 40 480" preserveAspectRatio="none">
    <g fill="none" stroke-linecap="round" style="vector-effect:non-scaling-stroke">
      <path d="M8 0C30 40-12 80 8 120S30 200 8 240S-12 320 8 360S30 440 8 480" stroke="#ff1a7e" stroke-width="5" vector-effect="non-scaling-stroke"/>
      <path d="M16 0C38 40-4 80 16 120S38 200 16 240S-4 320 16 360S38 440 16 480" stroke="#ff8a2a" stroke-width="5" vector-effect="non-scaling-stroke"/>
      <path d="M24 0C46 40 4 80 24 120S46 200 24 240S4 320 24 360S46 440 24 480" stroke="#ffd34d" stroke-width="5" vector-effect="non-scaling-stroke"/>
      <path d="M32 0C54 40 12 80 32 120S54 200 32 240S12 320 32 360S54 440 32 480" stroke="#1fc5a8" stroke-width="5" vector-effect="non-scaling-stroke"/></g></svg>
  <svg class="sd-wave sd-wave-r" viewBox="0 0 40 480" preserveAspectRatio="none">
    <g fill="none" stroke-linecap="round">
      <path d="M8 0C30 40-12 80 8 120S30 200 8 240S-12 320 8 360S30 440 8 480" stroke="#ff1a7e" stroke-width="5" vector-effect="non-scaling-stroke"/>
      <path d="M16 0C38 40-4 80 16 120S38 200 16 240S-4 320 16 360S38 440 16 480" stroke="#ff8a2a" stroke-width="5" vector-effect="non-scaling-stroke"/>
      <path d="M24 0C46 40 4 80 24 120S46 200 24 240S4 320 24 360S46 440 24 480" stroke="#ffd34d" stroke-width="5" vector-effect="non-scaling-stroke"/>
      <path d="M32 0C54 40 12 80 32 120S54 200 32 240S12 320 32 360S54 440 32 480" stroke="#1fc5a8" stroke-width="5" vector-effect="non-scaling-stroke"/></g></svg>

  <svg class="sd-arc sd-arc-l" viewBox="0 0 200 200">
    <path d="M0 200V8A192 192 0 0 1 192 200Z" fill="#ff1a7e"/><path d="M0 200V42A158 158 0 0 1 158 200Z" fill="#ff8a2a"/>
    <path d="M0 200V76A124 124 0 0 1 124 200Z" fill="#ffd34d"/><path d="M0 200V110A90 90 0 0 1 90 200Z" fill="#1fc5a8"/></svg>
  <svg class="sd-arc sd-arc-r" viewBox="0 0 200 200">
    <path d="M0 200V8A192 192 0 0 1 192 200Z" fill="#ff1a7e"/><path d="M0 200V42A158 158 0 0 1 158 200Z" fill="#ff8a2a"/>
    <path d="M0 200V76A124 124 0 0 1 124 200Z" fill="#ffd34d"/><path d="M0 200V110A90 90 0 0 1 90 200Z" fill="#1fc5a8"/></svg>

  {{-- ====== TROPIS: daun palem & monstera ====== --}}
  <svg class="sd-palm sd-palm-tl" viewBox="-115 -225 230 245"><g filter="url(#sd-shadow)"><use href="#sd-frond"/></g></svg>
  <svg class="sd-palm sd-palm-tr" viewBox="-115 -225 230 245"><g filter="url(#sd-shadow)"><use href="#sd-frond"/></g></svg>
  <svg class="sd-palm sd-palm-bl" viewBox="-115 -225 230 245"><g filter="url(#sd-shadow)"><use href="#sd-frond"/></g></svg>
  <svg class="sd-palm sd-palm-br" viewBox="-115 -225 230 245"><g filter="url(#sd-shadow)"><use href="#sd-frond"/></g></svg>
  <svg class="sd-mons sd-mons-l" viewBox="-120 -120 240 260"><g filter="url(#sd-shadow)"><use href="#sd-monstera"/></g></svg>
  <svg class="sd-mons sd-mons-r" viewBox="-120 -120 240 260"><g filter="url(#sd-shadow)"><use href="#sd-monstera"/></g></svg>

  {{-- ====== DEFINISI ====== --}}
  <svg width="0" height="0" style="position:absolute"><defs>
    <filter id="sd-ruffle" x="-10%" y="-10%" width="120%" height="120%">
      <feTurbulence type="fractalNoise" baseFrequency=".035" numOctaves="2" seed="4" result="n"/>
      <feDisplacementMap in="SourceGraphic" in2="n" scale="7"/>
    </filter>
    <filter id="sd-soft"><feGaussianBlur stdDeviation="3"/></filter>
    <filter id="sd-shadow" x="-20%" y="-20%" width="140%" height="150%"><feDropShadow dx="2" dy="5" stdDeviation="5" flood-color="#7a1040" flood-opacity=".35"/></filter>
    <radialGradient id="sd-gp" cx=".5" cy="1" r="1"><stop offset="0" stop-color="#5e0630"/><stop offset=".2" stop-color="#c70f5a"/>
      <stop offset=".55" stop-color="#ff4a94"/><stop offset="1" stop-color="#ffb0cf"/></radialGradient>
    <radialGradient id="sd-gq" cx=".5" cy="1" r="1"><stop offset="0" stop-color="#b3260c"/><stop offset=".22" stop-color="#ff6a3d"/>
      <stop offset=".6" stop-color="#ffa27a"/><stop offset="1" stop-color="#ffdcc4"/></radialGradient>
    <radialGradient id="sd-gpl" cx=".5" cy="1" r="1"><stop offset="0" stop-color="#ffd34d"/><stop offset=".35" stop-color="#fff2d6"/>
      <stop offset=".75" stop-color="#ffc4dc"/><stop offset="1" stop-color="#e9a3d8"/></radialGradient>
    {{-- kelopak hibiscus: lekuk tepi + urat daun --}}
    <g id="sd-petal">
      <path d="M0 0C-30-14-64-48-59-88C-57-110-36-120-20-113C-11-124 9-124 17-113C35-119 58-105 59-85C63-48 30-14 0 0Z" stroke="rgba(255,255,255,.35)" stroke-width="1.2"/>
      <g fill="none" stroke="rgba(110,0,45,.32)" stroke-width="1.1" stroke-linecap="round">
        <path d="M0 0C-8-30-18-70-30-104"/><path d="M0 0C-3-35-6-75-8-112"/><path d="M0 0C3-35 8-75 14-112"/><path d="M0 0C10-30 28-65 46-96"/><path d="M0 0C-12-22-34-52-50-80"/>
      </g>
      <ellipse cx="-14" cy="-78" rx="16" ry="32" fill="#fff" opacity=".22" transform="rotate(14 -14 -78)"/>
    </g>
    {{-- stamen --}}
    <g id="sd-stamen">
      <path d="M0 0C6-32 20-62 40-86" stroke="#d9768f" stroke-width="8" fill="none" stroke-linecap="round"/>
      <path d="M0 0C6-32 20-62 40-86" stroke="#ffd9e3" stroke-width="3" fill="none" stroke-linecap="round" transform="translate(-1.5 0)"/>
      <g fill="#ffd34d" stroke="#e0a317" stroke-width=".6">
        <circle cx="30" cy="-78" r="2.6"/><circle cx="36" cy="-70" r="2.4"/><circle cx="26" cy="-68" r="2.4"/><circle cx="43" cy="-74" r="2.6"/>
        <circle cx="34" cy="-84" r="2.6"/><circle cx="46" cy="-82" r="2.3"/><circle cx="24" cy="-76" r="2.2"/><circle cx="40" cy="-64" r="2.2"/>
      </g>
      <g fill="#c4123f"><circle cx="40" cy="-94" r="3.4"/><circle cx="48" cy="-90" r="3.2"/><circle cx="33" cy="-92" r="3.2"/><circle cx="44" cy="-100" r="3"/><circle cx="52" cy="-96" r="3"/></g>
    </g>
    {{-- cherry / es / gelembung --}}
    <radialGradient id="sd-cherry" cx=".35" cy=".3" r=".8"><stop offset="0" stop-color="#ff6a82"/><stop offset=".45" stop-color="#c2123a"/><stop offset="1" stop-color="#5a0618"/></radialGradient>
    <linearGradient id="sd-ice" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#fff" stop-opacity=".8"/><stop offset=".5" stop-color="#e6f6ff" stop-opacity=".28"/><stop offset="1" stop-color="#fff" stop-opacity=".55"/></linearGradient>
    <linearGradient id="sd-glass" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#fff" stop-opacity=".55"/><stop offset=".25" stop-color="#fff" stop-opacity=".08"/><stop offset=".75" stop-color="#fff" stop-opacity=".08"/><stop offset="1" stop-color="#fff" stop-opacity=".5"/></linearGradient>
    <linearGradient id="sd-liq" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#ff7d7d"/><stop offset=".5" stop-color="#e8325a"/><stop offset="1" stop-color="#9c0f3a"/></linearGradient>
    <linearGradient id="sd-liq2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#ffc067"/><stop offset=".55" stop-color="#ff8a3c"/><stop offset="1" stop-color="#e0561c"/></linearGradient>
    <linearGradient id="sd-metal" x1="0" y1="0" x2="1" y2="0"><stop offset="0" stop-color="#b9c4cf"/><stop offset=".4" stop-color="#fff"/><stop offset="1" stop-color="#9eaab6"/></linearGradient>
    <clipPath id="sd-bowl"><path d="M14 46L186 46L108 176Q100 188 92 176Z"/></clipPath>
    <clipPath id="sd-tub"><path d="M12 24L108 24L98 140Q97 148 88 148L32 148Q23 148 22 140Z"/></clipPath>
  </defs></svg>

  {{-- ====== BOLA DISCO BERPUTAR + SINAR ====== --}}
  <div class="sd-ball sd-ball-l"><span class="sd-rays"></span><i class="sd-chain"></i><canvas width="320" height="320" data-pal="silver" data-speed=".5"></canvas></div>
  <div class="sd-ball sd-ball-r"><span class="sd-rays"></span><i class="sd-chain"></i><canvas width="320" height="320" data-pal="warm" data-speed="-.65"></canvas></div>

  {{-- ====== HIBISCUS PINK ====== --}}
  <svg class="sd-hib-c" viewBox="-135 -135 270 270"><g filter="url(#sd-shadow)"><g filter="url(#sd-ruffle)" fill="url(#sd-gp)">
    <use href="#sd-petal" transform="rotate(0)"/><use href="#sd-petal" transform="rotate(72) scale(.96)"/><use href="#sd-petal" transform="rotate(144)"/>
    <use href="#sd-petal" transform="rotate(216) scale(.97)"/><use href="#sd-petal" transform="rotate(288)"/></g>
    <circle r="20" fill="#4a0426" opacity=".85" filter="url(#sd-soft)"/><use href="#sd-stamen" transform="rotate(-20)"/></g></svg>

  {{-- ====== HIBISCUS PEACH ====== --}}
  <svg class="sd-hib-b" viewBox="-135 -135 270 270"><g filter="url(#sd-shadow)"><g filter="url(#sd-ruffle)" fill="url(#sd-gq)">
    <use href="#sd-petal" transform="rotate(25)"/><use href="#sd-petal" transform="rotate(97) scale(.95)"/><use href="#sd-petal" transform="rotate(169)"/>
    <use href="#sd-petal" transform="rotate(241) scale(.97)"/><use href="#sd-petal" transform="rotate(313)"/></g>
    <circle r="18" fill="#8a1d05" opacity=".8" filter="url(#sd-soft)"/><use href="#sd-stamen" transform="rotate(10) scale(.95)"/></g></svg>

  {{-- ====== 2 IRISAN JERUK ====== --}}
  <svg class="sd-orange-a" viewBox="-100 -100 200 200">
    <defs>
      <radialGradient id="sd-peel" cx=".35" cy=".3" r=".9"><stop offset="0" stop-color="#ffb347"/><stop offset="1" stop-color="#e8680a"/></radialGradient>
      <radialGradient id="sd-flesh" cx=".5" cy="1" r="1"><stop offset="0" stop-color="#ffbf47"/><stop offset=".6" stop-color="#ff9412"/><stop offset="1" stop-color="#ff7a00"/></radialGradient>
      <g id="sd-wedge">
        <path d="M-3-10L-23-74Q0-85 23-74L3-10Q0-7-3-10Z" fill="url(#sd-flesh)" stroke="#ffe9b0" stroke-width="1.2"/>
        <g stroke="#ffd47a" stroke-width="1.3" stroke-linecap="round" opacity=".6" fill="none">
          <path d="M0-14V-72"/><path d="M-6-18L-12-68"/><path d="M6-18L12-68"/><path d="M-10-26L-19-66"/><path d="M10-26L19-66"/>
        </g>
        <ellipse cx="-8" cy="-58" rx="3" ry="7" fill="#fff" opacity=".4" transform="rotate(12 -8 -58)"/>
        <ellipse cx="9" cy="-42" rx="2.4" ry="5" fill="#fff" opacity=".35" transform="rotate(-10 9 -42)"/>
      </g>
      <g id="sd-orange">
        <circle r="95" fill="url(#sd-peel)"/>
        <circle r="95" fill="none" stroke="#ffd27a" stroke-opacity=".6" stroke-width="2"/>
        <circle r="86" fill="#fff3d3"/>
        <circle r="81" fill="#ffd98a"/>
        <use href="#sd-wedge" transform="rotate(0)"/><use href="#sd-wedge" transform="rotate(40)"/><use href="#sd-wedge" transform="rotate(80)"/>
        <use href="#sd-wedge" transform="rotate(120)"/><use href="#sd-wedge" transform="rotate(160)"/><use href="#sd-wedge" transform="rotate(200)"/>
        <use href="#sd-wedge" transform="rotate(240)"/><use href="#sd-wedge" transform="rotate(280)"/><use href="#sd-wedge" transform="rotate(320)"/>
        <circle r="8" fill="#fff3d3"/>
        <path d="M-62-52A82 82 0 0 1-20-84" stroke="#fff" stroke-opacity=".55" stroke-width="5" stroke-linecap="round" fill="none"/>
      </g>
    </defs>
    <g filter="url(#sd-shadow)"><use href="#sd-orange"/></g>
  </svg>
  <svg class="sd-orange-b" viewBox="-100 -100 200 200"><g filter="url(#sd-shadow)"><use href="#sd-orange" transform="rotate(20)"/></g></svg>


  {{-- ====== RETRO: nanas, bintang kilau ====== --}}
  

  <svg class="sd-pine" viewBox="-62 -120 124 210"><g filter="url(#sd-shadow)">
    <g transform="translate(0 -22)"><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="#0b7a5c" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(-62) scale(1.0)"/><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="#0b7a5c" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(-31) scale(1.0)"/><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="#0b7a5c" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(0) scale(1.0)"/><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="#0b7a5c" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(31) scale(1.0)"/><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="#0b7a5c" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(62) scale(1.0)"/><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="url(#sd-leafg)" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(-46) scale(0.86)"/><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="url(#sd-leafg)" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(-15) scale(0.86)"/><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="url(#sd-leafg)" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(15) scale(0.86)"/><path d="M0 0C-11-22-10-54 0-84C10-54 11-22 0 0Z" fill="url(#sd-leafg)" stroke="#064d3a" stroke-opacity=".35" stroke-width="1" transform="rotate(46) scale(0.86)"/><path d="M0 0C-6-14-5-34 0-52C5-34 6-14 0 0Z" fill="#7bf0c0" opacity=".85"/></g>
    <g transform="translate(0 28)">
      <clipPath id="sd-pcl"><ellipse rx="38" ry="52"/></clipPath>
      <ellipse rx="38" ry="52" fill="url(#sd-pine)"/>
      <g clip-path="url(#sd-pcl)"><g stroke="#8f3f06" stroke-opacity=".6" stroke-width="2" fill="none"><path d="M-172 -70L-32 70"/><path d="M-32 -70L-172 70"/><path d="M-155 -70L-15 70"/><path d="M-15 -70L-155 70"/><path d="M-138 -70L2 70"/><path d="M2 -70L-138 70"/><path d="M-121 -70L19 70"/><path d="M19 -70L-121 70"/><path d="M-104 -70L36 70"/><path d="M36 -70L-104 70"/><path d="M-87 -70L53 70"/><path d="M53 -70L-87 70"/><path d="M-70 -70L70 70"/><path d="M70 -70L-70 70"/><path d="M-53 -70L87 70"/><path d="M87 -70L-53 70"/><path d="M-36 -70L104 70"/><path d="M104 -70L-36 70"/><path d="M-19 -70L121 70"/><path d="M121 -70L-19 70"/><path d="M-2 -70L138 70"/><path d="M138 -70L-2 70"/><path d="M15 -70L155 70"/><path d="M155 -70L15 70"/><path d="M32 -70L172 70"/><path d="M172 -70L32 70"/></g>
        <g fill="#6b2d04" opacity=".55"><circle cx="0" cy="-30" r="2"/><circle cx="0" cy="-2" r="2"/><circle cx="0" cy="26" r="2"/><circle cx="-17" cy="-16" r="2"/><circle cx="17" cy="-16" r="2"/><circle cx="-17" cy="12" r="2"/><circle cx="17" cy="12" r="2"/><circle cx="-17" cy="40" r="2"/><circle cx="17" cy="40" r="2"/><circle cx="-30" cy="-2" r="2"/><circle cx="30" cy="-2" r="2"/><circle cx="-30" cy="26" r="2"/><circle cx="30" cy="26" r="2"/></g>
        <ellipse cx="-14" cy="-12" rx="9" ry="26" fill="#fff" opacity=".28" transform="rotate(12 -14 -12)"/>
        <ellipse cx="0" cy="0" rx="38" ry="52" fill="none" stroke="#b34a00" stroke-opacity=".35" stroke-width="7"/></g>
    </g></g></svg>

  <i class="sd-star" style="top:14%;left:14%;--z:16px"></i><i class="sd-star" style="top:30%;left:7%;--z:11px;animation-delay:.6s"></i>
  <i class="sd-star" style="top:52%;left:12%;--z:14px;animation-delay:1.2s"></i><i class="sd-star" style="top:66%;left:5%;--z:10px;animation-delay:1.8s"></i>
  <i class="sd-star" style="top:12%;right:13%;--z:13px;animation-delay:.3s"></i><i class="sd-star" style="top:48%;right:6%;--z:16px;animation-delay:.9s"></i>
  <i class="sd-star" style="top:64%;right:14%;--z:11px;animation-delay:1.5s"></i><i class="sd-star" style="top:80%;right:5%;--z:12px;animation-delay:2.1s"></i>


  


  {{-- ====== GRAMOFON (terompet mengeluarkan nada) ====== --}}
  <div class="sd-gramo playing" id="sd-gramo" aria-hidden="true">
    <svg viewBox="0 0 190 222">
      <defs>
        <linearGradient id="sd-horn" gradientUnits="userSpaceOnUse" x1="158.2" y1="67.5" x2="117.8" y2="136.5"><stop offset="0" stop-color="#fff6c0"/><stop offset=".2" stop-color="#f0c24a"/><stop offset=".55" stop-color="#c98f22"/><stop offset=".85" stop-color="#8f5f10"/><stop offset="1" stop-color="#e2b13e"/></linearGradient>
        <radialGradient id="sd-bell" cx=".5" cy=".5" r=".6"><stop offset="0" stop-color="#2e1a04"/><stop offset=".6" stop-color="#6e4710"/><stop offset="1" stop-color="#d9a73a"/></radialGradient>
        <linearGradient id="sd-brass" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#fff0a8"/><stop offset=".5" stop-color="#d9a93a"/><stop offset="1" stop-color="#8f6416"/></linearGradient>
        <linearGradient id="sd-wood-t" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#dba060"/><stop offset="1" stop-color="#b87636"/></linearGradient>
      </defs>
      <ellipse cx="112" cy="214" rx="74" ry="7" fill="#7a1040" opacity=".28" filter="url(#sd-soft)"/>
      <g filter="url(#sd-shadow)">
        {{-- kotak kayu --}}
        <path d="M52 186L112 206L112 214L52 194Z" fill="#6b3a16"/><path d="M112 206L172 186L172 194L112 214Z" fill="#85491d"/>
        <path d="M60 142L112 158L112 200L60 184Z" fill="#8a5224"/><path d="M112 158L164 142L164 184L112 200Z" fill="#a86a32"/>
        <path d="M60 142L112 126L164 142L112 158Z" fill="url(#sd-wood-t)"/>
        <path d="M66 152L106 165L106 192L66 180Z" fill="none" stroke="#5e3112" stroke-width="1.6" stroke-opacity=".7"/>
        <path d="M118 165L158 152L158 180L118 192Z" fill="none" stroke="#5e3112" stroke-width="1.6" stroke-opacity=".7"/>
        <path d="M60 142L112 158L164 142" fill="none" stroke="#f3c88a" stroke-opacity=".6" stroke-width="1.5"/>
        <rect x="80" y="166" width="14" height="9" rx="1.5" fill="url(#sd-brass)" transform="skewY(18) translate(0 -29)"/>
        {{-- piringan di atas kotak --}}
        <ellipse cx="108" cy="144" rx="38" ry="13.5" fill="#2a2430"/><g transform="translate(108 143) scale(1 .355)"><g class="sd-spin-rec">
          <circle r="34" fill="#14101a"/>
          <g fill="none" stroke="#fff" stroke-opacity=".12"><circle r="29"/><circle r="24"/><circle r="19"/></g>
          <path d="M0 0L16-30A34 34 0 0 1 28-19Z" fill="#fff" opacity=".18"/><path d="M0 0L-16 30A34 34 0 0 1-28 19Z" fill="#fff" opacity=".18"/>
          <circle r="11.5" fill="url(#sd-label)"/><circle r="11.5" fill="none" stroke="#ffe08a" stroke-width="1.2" stroke-dasharray="1.6 2.6"/>
          <circle cx="6" cy="-5" r="1.8" fill="#fff" opacity=".85"/><circle r="1.6" fill="#14101a"/>
        </g></g>
        <path d="M150 136L127 146" stroke="#dfe6ec" stroke-width="3" stroke-linecap="round"/><circle cx="126" cy="146.5" r="2.2" fill="#ffe08a"/>
        {{-- leher kuningan --}}
        <path d="M137 102L146 109C155 116 157 127 150 137" fill="none" stroke="#7c5410" stroke-width="10" stroke-linecap="round"/>
        <path d="M137 102L146 109C155 116 157 127 150 137" fill="none" stroke="url(#sd-brass)" stroke-width="7.5" stroke-linecap="round"/>
        <path d="M137 101L145 107C152 112 154 120 151 127" fill="none" stroke="#fff" stroke-opacity=".5" stroke-width="1.6" stroke-linecap="round"/>
        <rect x="143" y="132" width="14" height="8" rx="2" fill="#2a2430"/>
        {{-- terompet --}}
        <path d="M140.5 97.7 L137.9 96.4 L135.2 95.1 L132.5 93.7 L129.9 92.4 L127.3 91.0 L124.7 89.5 L122.1 88.0 L119.6 86.5 L117.1 84.9 L114.6 83.3 L112.2 81.6 L109.8 79.9 L107.4 78.1 L105.1 76.2 L102.8 74.2 L100.5 72.2 L98.3 70.1 L96.1 68.0 L94.0 65.8 L91.9 63.4 L89.9 61.0 L87.9 58.6 L86.0 56.0 L84.1 53.3 L82.3 50.6 L80.5 47.7 L78.8 44.8 L77.2 41.7 L75.6 38.6 L74.1 35.3 L72.6 32.0 L71.2 28.5 L69.9 24.9 L68.6 21.2 L67.4 17.4 L66.2 13.5 L25.8 82.5 L29.5 82.0 L33.2 81.6 L36.8 81.3 L40.4 81.0 L43.9 80.9 L47.3 80.8 L50.8 80.9 L54.1 81.0 L57.5 81.1 L60.8 81.4 L64.0 81.7 L67.2 82.1 L70.4 82.6 L73.5 83.1 L76.6 83.7 L79.6 84.4 L82.6 85.1 L85.6 85.9 L88.6 86.7 L91.5 87.6 L94.4 88.5 L97.2 89.5 L100.1 90.5 L102.9 91.6 L105.7 92.7 L108.4 93.8 L111.2 95.0 L113.9 96.2 L116.7 97.4 L119.4 98.6 L122.1 99.9 L124.8 101.2 L127.4 102.4 L130.1 103.7 L132.8 105.0 L135.5 106.3Z" fill="url(#sd-horn)"/>
        <path d="M107.4 91.0 L103.9 89.5 L100.5 88.0 L97.0 86.5 L93.5 85.1 L90.0 83.7 L86.4 82.4 L82.9 81.1 L79.2 79.9 L75.6 78.7 L71.9 77.6 L68.2 76.5 L64.5 75.6 L60.7 74.6 L56.8 73.8 L53.0 73.0 L49.0 72.3 L45.1 71.7 L41.0 71.2 L37.0 70.8 L32.8 70.4" fill="none" stroke="#fff" stroke-opacity="0.13" stroke-width="1.2" stroke-linecap="round"/><path d="M108.5 89.1 L105.1 87.4 L101.8 85.7 L98.4 84.1 L95.1 82.4 L91.7 80.8 L88.3 79.2 L84.9 77.5 L81.6 75.9 L78.2 74.4 L74.7 72.8 L71.3 71.2 L67.9 69.7 L64.5 68.2 L61.0 66.7 L57.5 65.2 L54.0 63.8 L50.5 62.4 L47.0 61.0 L43.5 59.7 L39.9 58.3" fill="none" stroke="#fff" stroke-opacity="0.13" stroke-width="1.2" stroke-linecap="round"/><path d="M109.9 86.6 L106.7 84.8 L103.5 82.9 L100.3 81.0 L97.1 79.0 L93.9 77.0 L90.8 75.0 L87.6 73.0 L84.5 70.9 L81.4 68.8 L78.4 66.6 L75.3 64.4 L72.3 62.2 L69.3 59.9 L66.3 57.6 L63.4 55.2 L60.5 52.8 L57.6 50.4 L54.7 47.9 L51.9 45.4 L49.0 42.8" fill="none" stroke="#fff" stroke-opacity="0.13" stroke-width="1.2" stroke-linecap="round"/><path d="M111.2 84.4 L108.1 82.4 L105.0 80.3 L101.9 78.2 L98.9 76.0 L95.9 73.7 L92.9 71.3 L90.0 68.9 L87.2 66.4 L84.4 63.8 L81.6 61.1 L78.9 58.3 L76.2 55.5 L73.6 52.5 L71.1 49.5 L68.6 46.3 L66.2 43.1 L63.8 39.7 L61.5 36.3 L59.3 32.7 L57.1 29.0" fill="none" stroke="#fff" stroke-opacity="0.13" stroke-width="1.2" stroke-linecap="round"/><path d="M112.2 82.8 L109.1 80.6 L106.1 78.4 L103.1 76.1 L100.2 73.7 L97.3 71.2 L94.5 68.6 L91.8 65.8 L89.1 63.0 L86.5 60.1 L84.0 57.0 L81.6 53.8 L79.2 50.5 L76.9 47.0 L74.7 43.4 L72.5 39.7 L70.5 35.8 L68.5 31.7 L66.7 27.5 L64.9 23.2 L63.2 18.7" fill="none" stroke="#fff" stroke-opacity="0.3" stroke-width="2" stroke-linecap="round"/>
        <ellipse cx="46" cy="48" rx="16.8" ry="40" transform="rotate(30.4 46 48)" fill="url(#sd-bell)" stroke="#fff0a8" stroke-width="2.4"/>
        <ellipse cx="45" cy="48" rx="11.2" ry="28.8" transform="rotate(30.4 46 48)" fill="none" stroke="#ffe9a0" stroke-opacity=".35" stroke-width="2.5"/>
        <ellipse cx="137" cy="101" rx="3.5" ry="7.5" transform="rotate(30.4 138 102)" fill="url(#sd-brass)" stroke="#7c5410" stroke-width="1"/>
      </g>
    </svg>
    <i class="sd-note" style="--nx:-46px;--ny:-62px;--nr:-18deg;color:#ff1a7e">♪</i>
    <i class="sd-note" style="--nx:-78px;--ny:-40px;--nr:14deg;color:#ffd34d;animation-delay:.8s">♫</i>
    <i class="sd-note" style="--nx:-24px;--ny:-96px;--nr:-8deg;color:#1fc5a8;animation-delay:1.6s">♬</i>
    <i class="sd-note" style="--nx:-96px;--ny:-84px;--nr:20deg;color:#fff;animation-delay:2.4s">♪</i>
    <i class="sd-note" style="--nx:-58px;--ny:-118px;--nr:-14deg;color:#ff8a2a;animation-delay:3.1s">♫</i>
  </div>

  {{-- ====== MARTINI ====== --}}
  <svg class="sd-martini" viewBox="0 0 200 330">
    <ellipse cx="100" cy="316" rx="62" ry="9" fill="#7a1040" opacity=".28" filter="url(#sd-soft)"/>
    <path d="M14 46L186 46L108 176Q100 188 92 176Z" fill="url(#sd-glass)"/>
    <g clip-path="url(#sd-bowl)">
      <rect x="0" y="74" width="200" height="130" fill="url(#sd-liq)"/>
      <path d="M30 70Q100 90 170 70L170 80Q100 100 30 80Z" fill="#ffd0a0" opacity=".5"/>
      <rect x="62" y="90" width="26" height="24" rx="5" fill="url(#sd-ice)" stroke="#fff" stroke-opacity=".7" transform="rotate(-14 75 102)"/>
      <rect x="104" y="100" width="24" height="22" rx="5" fill="url(#sd-ice)" stroke="#fff" stroke-opacity=".7" transform="rotate(18 116 111)"/>
      <circle class="sd-bub" cx="84" cy="140" r="2.2" fill="#fff" opacity=".8"/><circle class="sd-bub" style="animation-delay:1s" cx="104" cy="150" r="1.8" fill="#fff"/>
      <circle class="sd-bub" style="animation-delay:2s" cx="96" cy="132" r="2.6" fill="#fff"/>
      <ellipse cx="100" cy="74" rx="82" ry="9" fill="#ffb59a" opacity=".85"/>
      <ellipse class="sd-rip" cx="100" cy="74" rx="60" ry="6" fill="none" stroke="#fff" stroke-width="1.5"/>
    </g>
    <path d="M14 46L186 46L108 176Q100 188 92 176Z" fill="none" stroke="#e3edf3" stroke-width="3" stroke-linejoin="round"/>
    <ellipse cx="100" cy="46" rx="86" ry="9" fill="none" stroke="#fff" stroke-width="3" opacity=".9"/>
    <path d="M26 54L46 54L90 130" stroke="#fff" stroke-width="5" stroke-linecap="round" fill="none" opacity=".75"/>
    <path d="M170 56L160 70" stroke="#fff" stroke-width="3" stroke-linecap="round" opacity=".6"/>
    <path d="M150 20C166 36 172 60 150 72C140 62 150 38 150 20Z" fill="none" stroke="#ff9a1f" stroke-width="7" stroke-linecap="round" opacity=".95"/>
    <path d="M94 76Q104 46 138 30" stroke="#5a3a1c" stroke-width="3" fill="none" stroke-linecap="round"/>
    <circle cx="92" cy="82" r="14" fill="url(#sd-cherry)"/><ellipse cx="87" cy="76" rx="4" ry="2.6" fill="#fff" opacity=".85" transform="rotate(-30 87 76)"/>
    <rect x="95" y="180" width="10" height="112" rx="4" fill="url(#sd-metal)"/>
    <ellipse cx="100" cy="296" rx="54" ry="11" fill="#c7d3dc"/><ellipse cx="100" cy="293" rx="48" ry="7.5" fill="url(#sd-metal)" opacity=".9"/>
    <ellipse cx="97" cy="214" rx="2" ry="3.4" fill="#fff" opacity=".9"/><ellipse cx="104" cy="248" rx="1.8" ry="3" fill="#fff" opacity=".9"/>
    <ellipse cx="62" cy="62" rx="2" ry="3" fill="#fff" opacity=".8"/><ellipse cx="128" cy="100" rx="2" ry="3.2" fill="#fff" opacity=".7"/>
  </svg>

  {{-- ====== GELAS ES (TUMBLER) ====== --}}
  <svg class="sd-tumbler" viewBox="0 0 120 190">
    <ellipse cx="60" cy="178" rx="48" ry="8" fill="#7a1040" opacity=".25" filter="url(#sd-soft)"/>
    <path d="M12 24L108 24L98 140Q97 148 88 148L32 148Q23 148 22 140Z" fill="url(#sd-glass)" transform="translate(0 20)"/>
    <g transform="translate(0 20)"><g clip-path="url(#sd-tub)">
      <rect x="0" y="40" width="120" height="120" fill="url(#sd-liq2)" opacity=".92"/>
      <ellipse cx="60" cy="42" rx="48" ry="7" fill="#ffd9a0" opacity=".85"/>
      <rect x="22" y="56" width="30" height="28" rx="5" fill="url(#sd-ice)" stroke="#fff" stroke-opacity=".7" transform="rotate(-10 37 70)"/>
      <rect x="58" y="76" width="30" height="28" rx="5" fill="url(#sd-ice)" stroke="#fff" stroke-opacity=".7" transform="rotate(12 73 90)"/>
      <rect x="30" y="102" width="28" height="26" rx="5" fill="url(#sd-ice)" stroke="#fff" stroke-opacity=".6" transform="rotate(6 44 115)"/>
      <circle class="sd-bub" cx="50" cy="120" r="2.2" fill="#fff"/><circle class="sd-bub" style="animation-delay:1.4s" cx="78" cy="130" r="2" fill="#fff"/>
      <rect x="0" y="136" width="120" height="14" fill="#fff" opacity=".25"/></g>
      <path d="M12 24L108 24L98 140Q97 148 88 148L32 148Q23 148 22 140Z" fill="none" stroke="#e3edf3" stroke-width="3"/>
      <path d="M20 34L28 130" stroke="#fff" stroke-width="5" stroke-linecap="round" opacity=".7"/>
      <ellipse cx="60" cy="24" rx="48" ry="5" fill="none" stroke="#fff" stroke-width="2.5"/>
      <g transform="translate(86 14)"><circle r="22" fill="#ffa21f" stroke="#ff8a00" stroke-width="3"/><circle r="17" fill="#ffc34d"/>
        <g stroke="#ffe7ad" stroke-width="1.6"><path d="M0 0V-17M0 0L15-8M0 0L15 8M0 0V17M0 0L-15 8M0 0L-15-8"/></g></g></g>
    <path d="M54 46L74 4" stroke="#ff4d8d" stroke-width="6" stroke-linecap="round"/><path d="M60 38L69 22" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
  </svg>

  {{-- ====== DEKORASI TAMBAHAN SISI KIRI & KANAN ====== --}}
  <svg width="0" height="0" style="position:absolute"><defs>
    <radialGradient id="sd-bal-pink" cx=".35" cy=".3" r=".85"><stop offset="0" stop-color="#ffb3d1"/><stop offset=".5" stop-color="#ff4f93"/><stop offset="1" stop-color="#b0124a"/></radialGradient>
    <radialGradient id="sd-bal-yel" cx=".35" cy=".3" r=".85"><stop offset="0" stop-color="#fff4b0"/><stop offset=".5" stop-color="#ffd34d"/><stop offset="1" stop-color="#d9981a"/></radialGradient>
    <radialGradient id="sd-bal-org" cx=".35" cy=".3" r=".85"><stop offset="0" stop-color="#ffd0a0"/><stop offset=".5" stop-color="#ff8a2a"/><stop offset="1" stop-color="#c2410c"/></radialGradient>
  </defs></svg>
  <svg class="sd-new sd-nf sd-nf-l1" viewBox="-115 -225 230 245"><g filter="url(#sd-shadow)"><use href="#sd-frond"/></g></svg>
  <svg class="sd-new sd-nf sd-nf-r1" viewBox="-115 -225 230 245"><g filter="url(#sd-shadow)"><use href="#sd-frond"/></g></svg>
  <svg class="sd-new sd-nf sd-nf-l2" viewBox="-115 -225 230 245"><g filter="url(#sd-shadow)"><use href="#sd-frond"/></g></svg>
  <svg class="sd-new sd-nf sd-nf-r2" viewBox="-115 -225 230 245"><g filter="url(#sd-shadow)"><use href="#sd-frond"/></g></svg>
  <svg class="sd-new sd-nm sd-nm-1" viewBox="-120 -120 240 260"><g filter="url(#sd-shadow)"><use href="#sd-monstera"/></g></svg>
  <svg class="sd-new sd-nm sd-nm-2" viewBox="-120 -120 240 260"><g filter="url(#sd-shadow)"><use href="#sd-monstera"/></g></svg>
  <svg class="sd-new sd-nh sd-nh-1" viewBox="-135 -135 270 270"><g filter="url(#sd-shadow)"><g filter="url(#sd-ruffle)" fill="url(#sd-gpl)"><use href="#sd-petal" transform="rotate(10) scale(1)"/><use href="#sd-petal" transform="rotate(82) scale(0.96)"/><use href="#sd-petal" transform="rotate(154) scale(1)"/><use href="#sd-petal" transform="rotate(226) scale(0.97)"/><use href="#sd-petal" transform="rotate(298) scale(1)"/></g><circle r="18" fill="#c47a1a" opacity=".8" filter="url(#sd-soft)"/><use href="#sd-stamen" transform="rotate(30)"/></g></svg>
  <svg class="sd-new sd-nh sd-nh-2" viewBox="-135 -135 270 270"><g filter="url(#sd-shadow)"><g filter="url(#sd-ruffle)" fill="url(#sd-gp)"><use href="#sd-petal" transform="rotate(35) scale(1)"/><use href="#sd-petal" transform="rotate(107) scale(0.96)"/><use href="#sd-petal" transform="rotate(179) scale(1)"/><use href="#sd-petal" transform="rotate(251) scale(0.97)"/><use href="#sd-petal" transform="rotate(323) scale(1)"/></g><circle r="18" fill="#4a0426" opacity=".8" filter="url(#sd-soft)"/><use href="#sd-stamen" transform="rotate(-20)"/></g></svg>
  <svg class="sd-new sd-nh sd-nh-3" viewBox="-135 -135 270 270"><g filter="url(#sd-shadow)"><g filter="url(#sd-ruffle)" fill="url(#sd-gq)"><use href="#sd-petal" transform="rotate(60) scale(1)"/><use href="#sd-petal" transform="rotate(132) scale(0.96)"/><use href="#sd-petal" transform="rotate(204) scale(1)"/><use href="#sd-petal" transform="rotate(276) scale(0.97)"/><use href="#sd-petal" transform="rotate(348) scale(1)"/></g><circle r="18" fill="#8a1d05" opacity=".8" filter="url(#sd-soft)"/><use href="#sd-stamen" transform="rotate(10)"/></g></svg>
  <svg class="sd-new sd-no sd-no-1" viewBox="-100 -100 200 200"><g filter="url(#sd-shadow)"><use href="#sd-orange" transform="rotate(10)"/></g></svg>
  <svg class="sd-new sd-no sd-no-2" viewBox="-100 -100 200 200"><g filter="url(#sd-shadow)"><use href="#sd-orange" transform="rotate(-24)"/></g></svg>
  <svg class="sd-new sd-nb sd-nb-l" viewBox="0 0 130 240">
    <g fill="none" stroke="#fff" stroke-opacity=".75" stroke-width="1.3" stroke-linecap="round">
      <path d="M40 100C42 135 60 150 65 172"/><path d="M84 86C82 130 70 150 65 172"/><path d="M62 129C62 150 64 160 65 172"/><path d="M65 172C60 195 70 215 62 236"/></g>
    <g filter="url(#sd-shadow)">
      <g><ellipse cx="40" cy="62" rx="30" ry="38" fill="url(#sd-bal-pink)"/><path d="M40 100l-5 8h10z" fill="#c2185b"/><ellipse cx="29" cy="46" rx="6" ry="11" fill="#fff" opacity=".5" transform="rotate(20 29 46)"/></g>
      <g><ellipse cx="86" cy="50" rx="28" ry="36" fill="url(#sd-bal-yel)"/><path d="M86 86l-5 8h10z" fill="#e0a317"/><ellipse cx="76" cy="35" rx="5.5" ry="10" fill="#fff" opacity=".55" transform="rotate(20 76 35)"/></g>
      <g><ellipse cx="63" cy="92" rx="29" ry="37" fill="url(#sd-bal-org)"/><path d="M63 129l-5 8h10z" fill="#d9560c"/><ellipse cx="53" cy="77" rx="5.5" ry="10.5" fill="#fff" opacity=".5" transform="rotate(20 53 77)"/></g>
    </g></svg>
  <svg class="sd-new sd-nb sd-nb-r" viewBox="0 0 130 240">
    <g fill="none" stroke="#fff" stroke-opacity=".75" stroke-width="1.3" stroke-linecap="round">
      <path d="M40 100C42 135 60 150 65 172"/><path d="M84 86C82 130 70 150 65 172"/><path d="M62 129C62 150 64 160 65 172"/><path d="M65 172C60 195 70 215 62 236"/></g>
    <g filter="url(#sd-shadow)">
      <g><ellipse cx="40" cy="62" rx="30" ry="38" fill="url(#sd-bal-pink)"/><path d="M40 100l-5 8h10z" fill="#c2185b"/><ellipse cx="29" cy="46" rx="6" ry="11" fill="#fff" opacity=".5" transform="rotate(20 29 46)"/></g>
      <g><ellipse cx="86" cy="50" rx="28" ry="36" fill="url(#sd-bal-yel)"/><path d="M86 86l-5 8h10z" fill="#e0a317"/><ellipse cx="76" cy="35" rx="5.5" ry="10" fill="#fff" opacity=".55" transform="rotate(20 76 35)"/></g>
      <g><ellipse cx="63" cy="92" rx="29" ry="37" fill="url(#sd-bal-org)"/><path d="M63 129l-5 8h10z" fill="#d9560c"/><ellipse cx="53" cy="77" rx="5.5" ry="10.5" fill="#fff" opacity=".5" transform="rotate(20 53 77)"/></g>
    </g></svg>
  <div class="sd-new sd-ball sd-ball-s"><span class="sd-rays"></span><i class="sd-chain"></i><canvas width="220" height="220" data-pal="warm" data-speed=".8"></canvas></div>
  <i class="sd-star sd-new" style="top:6%;left:30%;--z:12px;animation-delay:0s"></i>
  <i class="sd-star sd-new" style="top:22%;left:3%;--z:10px;animation-delay:.4s"></i>
  <i class="sd-star sd-new" style="top:38%;right:3%;--z:12px;animation-delay:1s"></i>
  <i class="sd-star sd-new" style="top:46%;left:6%;--z:9px;animation-delay:1.4s"></i>
  <i class="sd-star sd-new" style="top:58%;right:7%;--z:13px;animation-delay:.2s"></i>
  <i class="sd-star sd-new" style="top:72%;left:4%;--z:11px;animation-delay:.9s"></i>
  <i class="sd-star sd-new" style="top:86%;right:4%;--z:10px;animation-delay:1.7s"></i>
  <i class="sd-star sd-new" style="top:28%;right:9%;--z:9px;animation-delay:2s"></i>
  <i class="sd-star sd-new" style="top:90%;left:9%;--z:12px;animation-delay:.6s"></i>
  <i class="sd-star sd-new" style="top:8%;right:30%;--z:11px;animation-delay:1.2s"></i>
  <i class="sd-new sd-fnote" style="left:3%;color:#fff;animation-delay:0s;animation-duration:11s">♫</i>
  <i class="sd-new sd-fnote" style="right:4%;color:#ffd34d;animation-delay:-3s;animation-duration:13s">♬</i>
  <i class="sd-new sd-fnote" style="left:7%;color:#1fc5a8;animation-delay:-6s;animation-duration:12s">♫</i>
  <i class="sd-new sd-fnote" style="right:8%;color:#ff1a7e;animation-delay:-8s;animation-duration:10s">♬</i>
  <i class="sd-new sd-fnote" style="left:1%;color:#ff8a2a;animation-delay:-9s;animation-duration:14s">♫</i>
  <i class="sd-new sd-fnote" style="right:2%;color:#fff;animation-delay:-1s;animation-duration:12s">♬</i>
</div>

<style>
/* ════ DEKORASI SISI TAMBAHAN ════ */
.sd-new{position:absolute}
/* gelas & gramofon tetap di depan dekorasi tambahan */
.sd-martini,.sd-tumbler,.sd-gramo{z-index:2}
/* daun palem menyamping */
.sd-nf{--nw:clamp(120px,32vw,210px);width:var(--nw);transform-origin:50% 91.8%}
.sd-nf-l1{left:calc(var(--nw)*-.5 + 4px);top:calc(44% - var(--nw)*.978);transform:rotate(100deg)}
.sd-nf-r1{right:calc(var(--nw)*-.5 + 4px);top:calc(57% - var(--nw)*.978);transform:rotate(-100deg)}
.sd-nf-l2{--nw:clamp(100px,26vw,170px);left:calc(var(--nw)*-.5 + 4px);top:calc(79% - var(--nw)*.978);transform:rotate(76deg)}
.sd-nf-r2{--nw:clamp(100px,26vw,170px);right:calc(var(--nw)*-.5 + 4px);top:calc(27% - var(--nw)*.978);transform:rotate(-80deg)}
/* monstera kecil */
.sd-nm{width:clamp(120px,34vw,190px)}
.sd-nm-1{left:calc(clamp(120px,34vw,190px)*-.5);top:63%;transform:rotate(104deg)}
.sd-nm-2{right:calc(clamp(120px,34vw,190px)*-.5);top:74%;transform:rotate(-100deg)}
/* hibiscus kecil */
.sd-nh{width:clamp(84px,23vw,135px)}
.sd-nh-1{left:-28px;top:27%;transform:rotate(14deg)}
.sd-nh-2{right:-26px;top:68%;transform:rotate(-24deg)}
.sd-nh-3{left:-22px;top:51%;width:clamp(78px,21vw,120px);transform:rotate(36deg)}
/* irisan jeruk kecil */
.sd-no{width:clamp(54px,14vw,86px)}
.sd-no-1{left:-14px;top:46%;transform:rotate(-14deg)}
.sd-no-2{right:-16px;top:62%;width:clamp(60px,16vw,96px);transform:rotate(18deg)}
/* balon melayang */
.sd-nb{--r:-4deg;width:clamp(58px,15vw,100px);animation:sd-bfloat 6s ease-in-out infinite;transform-origin:50% 85%}
.sd-nb-l{left:1%;top:30%}
.sd-nb-r{--r:4deg;right:1%;top:41%;animation-delay:-2.5s;animation-duration:7s}
@keyframes sd-bfloat{0%,100%{transform:translateY(0) rotate(var(--r))}50%{transform:translateY(-12px) rotate(calc(var(--r) * -1))}}
/* bola disko mini di tengah atas */
.sd-ball-s{--w:clamp(60px,14vw,100px);--s:20s;left:41%;top:-1%}
.sd-ball-s .sd-chain{height:120px}
/* nada musik melayang di tepi layar */
.sd-fnote{bottom:-30px;font:700 clamp(17px,4.4vw,26px)/1 Georgia,serif;font-style:normal;opacity:0;
  text-shadow:0 0 8px rgba(255,255,255,.7),0 2px 4px rgba(90,16,48,.35);animation:sd-fn 12s ease-in-out infinite}
@keyframes sd-fn{0%{opacity:0;transform:translate(0,0) rotate(-10deg)}10%{opacity:.9}
  50%{transform:translate(14px,-45vh) rotate(10deg)}90%{opacity:.8}100%{opacity:0;transform:translate(-8px,-95vh) rotate(-8deg)}}

/* HP kecil: kurangi supaya tidak penuh */
@media (max-width:400px){
  .sd-nf-l2,.sd-nf-r2,.sd-nh-3,.sd-no-1,.sd-ball-s{display:none}
}
/* Desktop: lebih besar & lebih banyak ruang */
@media (min-width:1024px){
  .sd-nf{--nw:clamp(200px,15vw,320px)}
  .sd-nf-l2,.sd-nf-r2{--nw:clamp(170px,12vw,260px)}
  .sd-nm{width:clamp(190px,14vw,290px)}
  .sd-nm-1{left:calc(clamp(190px,14vw,290px)*-.5)}
  .sd-nm-2{right:calc(clamp(190px,14vw,290px)*-.5)}
  .sd-nh{width:clamp(130px,9vw,200px)}
  .sd-nh-3{width:clamp(120px,8vw,180px)}
  .sd-no{width:clamp(80px,6vw,120px)}
  .sd-no-2{width:clamp(90px,6.5vw,135px)}
  .sd-nb{width:clamp(96px,7vw,150px)}
  .sd-nb-l{left:3%}.sd-nb-r{right:3%}
  .sd-ball-s{--w:clamp(90px,7vw,140px)}
  .sd-fnote{font-size:clamp(24px,2vw,34px)}
}
/* Layar pendek (landscape): sembunyikan tambahan */
@media (max-height:520px) and (orientation:landscape){
  .sd-nm,.sd-nh,.sd-no,.sd-nb,.sd-nf-l2,.sd-nf-r2,.sd-ball-s{display:none}
  .sd-nf{--nw:clamp(90px,28vh,150px)}
}
@media (prefers-reduced-motion:reduce){.sd-nb,.sd-fnote{animation:none}.sd-fnote{display:none}}
</style>

<script>
(function () {
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var P = {
    warm:   ['#ff4f93','#ff8fb8','#ffb347','#ffe08a','#a24bb0','#ff6a3d','#ffc2d9','#e8478b'],
    silver: ['#c9d1ea','#e6e9f5','#aab4d4','#f0d3e0','#b6dcea','#9aa3c4','#ffffff','#d8c9ea']
  };
  function h(a, b) { var x = Math.sin(a * 127.1 + b * 311.7) * 43758.5453; return x - Math.floor(x); }
  function hex(c) { return [parseInt(c.substr(1,2),16), parseInt(c.substr(3,2),16), parseInt(c.substr(5,2),16)]; }

  function ball(cv) {
    var ctx = cv.getContext('2d'), S = cv.width, R = S * .46, cx = S / 2, cy = S / 2;
    var pal = P[cv.dataset.pal].map(hex), speed = parseFloat(cv.dataset.speed), rot = Math.random() * 6, rows = 15, tilt = .25;
    var L = [-.45, .55, .7], ct = Math.cos(tilt), st = Math.sin(tilt);
    function pt(lat, lon) { // proyeksi bola 3D dengan sedikit kemiringan
      var x = Math.cos(lat) * Math.sin(lon), y = Math.sin(lat), z = Math.cos(lat) * Math.cos(lon);
      var y2 = y * ct - z * st, z2 = y * st + z * ct;
      return [cx + R * x, cy - R * y2, z2, x, y2];
    }
    function draw(t) {
      ctx.clearRect(0, 0, S, S);
      ctx.fillStyle = cv.dataset.pal === 'warm' ? '#6d2352' : '#4d5578';
      ctx.beginPath(); ctx.arc(cx, cy, R, 0, 7); ctx.fill();
      var glints = [];
      for (var i = 0; i < rows; i++) {
        var a0 = -Math.PI / 2 + Math.PI * i / rows, a1 = -Math.PI / 2 + Math.PI * (i + 1) / rows, da = a1 - a0;
        var n = Math.max(6, Math.round(30 * Math.cos((a0 + a1) / 2)));
        for (var j = 0; j < n; j++) {
          var dl = 2 * Math.PI / n, l0 = rot + dl * j, g = .07;
          var q = [pt(a0 + da * g, l0 + dl * g), pt(a0 + da * g, l0 + dl * (1 - g)), pt(a1 - da * g, l0 + dl * (1 - g)), pt(a1 - da * g, l0 + dl * g)];
          var m = pt((a0 + a1) / 2, l0 + dl / 2); if (m[2] < .04) continue;
          var c = pal[Math.floor(h(i, j) * pal.length)];
          var d = Math.max(0, m[3] * L[0] + m[4] * L[1] + m[2] * L[2]);
          ctx.beginPath(); ctx.moveTo(q[0][0], q[0][1]); for (var k = 1; k < 4; k++) ctx.lineTo(q[k][0], q[k][1]); ctx.closePath();
          ctx.fillStyle = 'rgb(' + c[0] + ',' + c[1] + ',' + c[2] + ')'; ctx.fill();
          ctx.fillStyle = 'rgba(255,255,255,' + (Math.pow(d, 2) * .55).toFixed(3) + ')'; ctx.fill();
          ctx.fillStyle = 'rgba(40,0,40,' + ((1 - m[2]) * .5).toFixed(3) + ')'; ctx.fill();
          if (Math.sin(t * .004 + h(j, i) * 60) > .985) glints.push([m[0], m[1], m[2]]);
        }
      }
      glints.forEach(function (p) { // kilau bintang saat ubin memantulkan cahaya
        var r = 9 * p[2] + 3; ctx.fillStyle = 'rgba(255,255,255,.95)';
        ctx.beginPath(); ctx.moveTo(p[0], p[1] - r); ctx.lineTo(p[0] + r * .18, p[1] - r * .18); ctx.lineTo(p[0] + r, p[1]);
        ctx.lineTo(p[0] + r * .18, p[1] + r * .18); ctx.lineTo(p[0], p[1] + r); ctx.lineTo(p[0] - r * .18, p[1] + r * .18);
        ctx.lineTo(p[0] - r, p[1]); ctx.lineTo(p[0] - r * .18, p[1] - r * .18); ctx.closePath(); ctx.fill();
      });
      var gl = ctx.createRadialGradient(cx - R * .35, cy - R * .4, R * .05, cx, cy, R);
      gl.addColorStop(0, 'rgba(255,255,255,.35)'); gl.addColorStop(.4, 'rgba(255,255,255,0)'); gl.addColorStop(1, 'rgba(60,0,60,.4)');
      ctx.fillStyle = gl; ctx.beginPath(); ctx.arc(cx, cy, R, 0, 7); ctx.fill();
    }
    var last = 0;
    function loop(t) { rot += speed * (t - last) / 1000; last = t; draw(t); requestAnimationFrame(loop); }
    if (reduce) draw(0); else requestAnimationFrame(loop);
  }
  document.querySelectorAll('.sunset-decor canvas').forEach(ball);

  // lampu tali LED kelap-kelip
  var led = document.getElementById('sd-led'), lc = ['#ff2e88','#ffd34d','#ff8a2a','#42d3ff','#b46bff','#fff4d6','#6bff9e'];
  function buildLed() {
    var W = led.clientWidth; if (!W) return;
    var n = Math.max(3, Math.round(W / 150)), sw = W / n, y0 = 4, cyc = y0 + 68, k = 0, wire = '', bulbs = '';
    for (var s = 0; s < n; s++) {
      var x0 = s * sw, x1 = x0 + sw, cx = x0 + sw / 2, m = Math.max(4, Math.round(sw / 24));
      wire += '<path d="M' + x0 + ' ' + y0 + ' Q' + cx + ' ' + cyc + ' ' + x1 + ' ' + y0 + '" fill="none" stroke="#4a3b32" stroke-width="2"/>';
      for (var i = 1; i < m; i++) {
        var t = i / m, u = 1 - t, x = u * u * x0 + 2 * u * t * cx + t * t * x1, y = u * u * y0 + 2 * u * t * cyc + t * t * y0, col = lc[k % lc.length];
        bulbs += '<g class="sd-bulb" style="--c:' + col + ';animation-delay:-' + ((k * .37) % 2.4).toFixed(2) + 's;animation-duration:' + (1.6 + (k % 3) * .6) + 's">' +
          '<rect x="' + (x - 2) + '" y="' + y + '" width="4" height="5" fill="#2e2622"/>' +
          '<ellipse cx="' + x + '" cy="' + (y + 11) + '" rx="4.5" ry="6.5" fill="' + col + '"/>' +
          '<ellipse cx="' + (x - 1.4) + '" cy="' + (y + 8.5) + '" rx="1.3" ry="2.2" fill="#fff" opacity=".8"/></g>';
        k++;
      }
    }
    led.innerHTML = '<svg viewBox="0 0 ' + W + ' 110" width="' + W + '" height="110">' + wire + bulbs + '</svg>';
  }
  buildLed();
  if (window.ResizeObserver) new ResizeObserver(buildLed).observe(led); else window.addEventListener('resize', buildLed);

  // bintik cahaya warna-warni yang melayang
  var box = document.getElementById('sd-dots'), cols = ['#ff1a7e','#ffd34d','#4ac8ff','#a35cff','#6bff9e','#ff8a2a','#ff5ad0'];
  for (var i = 0; i < 34; i++) {
    var e = document.createElement('i'), s = 6 + Math.random() * 16, col = cols[i % cols.length];
    e.className = 'sd-dot';
    e.style.cssText = 'left:' + Math.random() * 100 + '%;top:' + Math.random() * 100 + '%;width:' + s + 'px;height:' + s + 'px;background:radial-gradient(circle,' + col + ',transparent 70%);' +
      '--t:' + (5 + Math.random() * 6) + 's;--d:-' + Math.random() * 8 + 's;--x:' + (Math.random() * 120 - 60) + 'px;--y:' + (Math.random() * 120 - 60) + 'px';
    box.appendChild(e);
  }
})();
</script>

{{-- ============================================================
     GATE SCREEN — pertanyaan undangan -> toast gelas -> isi nama -> homepage
     ============================================================ --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Nunito:wght@700;900&family=Playfair+Display:ital,wght@1,900&display=swap" rel="stylesheet">

<style>
/* ════════ GATE OVERLAY ════════ */
#gate-overlay{
  position:fixed;inset:0;z-index:9000;display:flex;align-items:center;justify-content:center;overflow:hidden;
  background:radial-gradient(120% 70% at 50% 35%,rgba(255,120,160,.55),transparent 70%),
             linear-gradient(160deg,#ffc9d6 0%,#ffb09b 45%,#ff9566 100%);
  transition:opacity .65s ease,transform .65s ease;
}
#gate-overlay.gate-out{opacity:0;transform:scale(1.06) translateY(-18px);pointer-events:none}

/* sinar lampu disko berputar di belakang kartu */
.gate-rays{position:absolute;left:50%;top:50%;width:150vmax;height:150vmax;margin:-75vmax 0 0 -75vmax;pointer-events:none;
  background:conic-gradient(transparent 0 3%,rgba(255,26,126,.35) 4% 7%,transparent 8% 16%,rgba(255,224,138,.4) 17% 20%,
   transparent 21% 29%,rgba(70,200,255,.32) 30% 33%,transparent 34% 42%,rgba(170,90,255,.34) 43% 46%,transparent 47% 55%,
   rgba(110,255,160,.3) 56% 59%,transparent 60% 68%,rgba(255,138,42,.4) 69% 72%,transparent 73% 81%,rgba(255,80,200,.34) 82% 85%,transparent 86%);
  -webkit-mask:radial-gradient(circle,#000 5%,transparent 55%);mask:radial-gradient(circle,#000 5%,transparent 55%);
  mix-blend-mode:screen;animation:gate-spin 40s linear infinite}

/* bintik cahaya melayang */
.gate-bokeh{position:absolute;border-radius:50%;pointer-events:none;mix-blend-mode:screen;filter:blur(2px);opacity:0;
  background:radial-gradient(circle,var(--c),transparent 70%);animation:gate-bokeh var(--t) ease-in-out var(--d) infinite}
@keyframes gate-bokeh{0%{opacity:0;transform:translateY(20px) scale(.6)}30%{opacity:.85}100%{opacity:0;transform:translateY(-90px) scale(1.3)}}

/* ════════ CARD (border gradient berputar) ════════ */
.gate-card{
  position:relative;z-index:2;width:100%;max-width:min(400px,88vw);border-radius:28px;padding:2.5px;overflow:hidden;
  box-shadow:0 30px 80px rgba(120,10,50,.42),0 0 50px rgba(255,120,170,.3);
  animation:gate-pop .8s cubic-bezier(.22,1,.36,1) both, gate-float 6s ease-in-out 1s infinite;
}
.gate-card::before{content:'';position:absolute;left:50%;top:50%;width:220%;aspect-ratio:1;translate:-50% -50%;
  background:conic-gradient(from 0deg,#ff1a7e,#ffd34d,#42d3ff,#b46bff,#6bff9e,#ff8a2a,#ff1a7e);animation:gate-spin 5s linear infinite}
.gate-card-in{
  position:relative;border-radius:26px;text-align:center;overflow:hidden;
  padding:clamp(22px,5vw,48px) clamp(18px,6vw,50px) clamp(20px,5vw,40px);
  background:linear-gradient(160deg,rgba(255,150,180,.78),rgba(255,120,110,.7) 55%,rgba(255,150,80,.72));
  backdrop-filter:blur(24px) saturate(1.7);-webkit-backdrop-filter:blur(24px) saturate(1.7);
  box-shadow:inset 0 0 0 1px rgba(255,255,255,.25),inset 0 -40px 60px rgba(160,20,80,.18);
}
/* kilau kaca bergerak */
.gate-card-in::after{content:'';position:absolute;top:0;left:-60%;width:40%;height:100%;pointer-events:none;
  background:linear-gradient(100deg,transparent,rgba(255,255,255,.28),transparent);transform:skewX(-18deg);animation:gate-sheen 5.5s ease-in-out 1.4s infinite}
@keyframes gate-sheen{0%{left:-60%}35%,100%{left:140%}}
@keyframes gate-float{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
@keyframes gate-pop{from{opacity:0;transform:scale(.86) translateY(34px)}to{opacity:1;transform:scale(1) translateY(0)}}
@keyframes gate-spin{to{transform:rotate(360deg)}}

/* bintang kilau di kartu */
.gate-twinkle{position:absolute;width:var(--z);aspect-ratio:1;background:#fff8d8;pointer-events:none;
  clip-path:polygon(50% 0,60% 40%,100% 50%,60% 60%,50% 100%,40% 60%,0 50%,40% 40%);
  filter:drop-shadow(0 0 5px #ffd34d);animation:gate-tw 2.4s ease-in-out infinite}
@keyframes gate-tw{0%,100%{opacity:.25;transform:scale(.7) rotate(0)}50%{opacity:1;transform:scale(1.15) rotate(25deg)}}

/* ── Bola disko (ubin mozaik + tali + ayunan) ── */
.gate-disco-wrap{position:relative;width:clamp(60px,15vw,88px);margin:-10px auto 14px;transform-origin:50% -60px;animation:gate-swing 4s ease-in-out infinite}
@keyframes gate-swing{0%,100%{transform:rotate(-5deg)}50%{transform:rotate(5deg)}}
.gate-disco-wrap::before{content:'';position:absolute;left:50%;bottom:98%;width:2px;height:60px;margin-left:-1px;
  background:repeating-linear-gradient(#f3c45a 0 4px,#b07d1c 4px 6px)}
.gate-disco{position:relative;width:100%;aspect-ratio:1;border-radius:50%;overflow:hidden;
  background:radial-gradient(circle at 35% 28%,#fff 0%,#e0e8ff 16%,#b0b8d8 42%,#6070a8 74%,#2a2e58 100%);
  box-shadow:0 10px 26px rgba(80,40,140,.5),0 0 0 3px rgba(255,255,255,.4),inset -8px -8px 20px rgba(0,0,0,.28);
  animation:gate-shine 2.8s ease-in-out infinite alternate}
.gate-disco::before{content:'';position:absolute;inset:0;border-radius:50%;
  background:repeating-linear-gradient(0deg,rgba(40,30,90,.45) 0 1.5px,transparent 1.5px 9px),
             repeating-linear-gradient(90deg,rgba(40,30,90,.45) 0 1.5px,transparent 1.5px 9px),
             conic-gradient(from 0deg,rgba(255,26,126,.35),rgba(255,211,77,.35),rgba(66,211,255,.35),rgba(180,107,255,.35),rgba(255,26,126,.35));
  mix-blend-mode:hard-light;animation:gate-tiles 3s linear infinite}
.gate-disco::after{content:'';position:absolute;top:9%;left:13%;width:36%;height:24%;border-radius:50%;
  background:rgba(255,255,255,.8);filter:blur(3px);transform:rotate(-20deg)}
@keyframes gate-tiles{to{transform:rotate(360deg)}}
@keyframes gate-shine{from{filter:drop-shadow(0 0 10px rgba(100,130,255,.6))}to{filter:drop-shadow(0 0 20px rgba(255,190,90,.85))}}

/* ── Teks ── */
.gate-eyebrow{font-family:'Dancing Script',cursive;font-weight:700;font-size:clamp(14px,3.8vw,20px);
  color:#fff;margin:0 0 8px;letter-spacing:.06em;text-shadow:0 2px 10px rgba(120,10,50,.4)}
.gate-question{font-family:'Playfair Display',Georgia,serif;font-style:italic;font-weight:900;
  font-size:clamp(22px,6vw,36px);line-height:1.15;color:#fff;margin:0 0 22px;
  text-shadow:0 2px 0 rgba(180,30,60,.55),0 10px 28px rgba(120,10,50,.45)}
.gate-question span{display:inline-block;text-shadow:none;
  background:linear-gradient(100deg,#fff2a8 0%,#ffd166 30%,#fff 50%,#ffd166 70%,#ff9a3c 100%);background-size:220% 100%;
  -webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;
  filter:drop-shadow(0 3px 0 rgba(150,70,0,.45)) drop-shadow(0 6px 16px rgba(255,180,0,.35));animation:gate-text 3.5s linear infinite}
@keyframes gate-text{to{background-position:-220% 0}}
.gate-party{display:inline-block;animation:gate-party 1.6s ease-in-out infinite;transform-origin:70% 80%}
@keyframes gate-party{0%,100%{transform:rotate(0) scale(1)}25%{transform:rotate(-16deg) scale(1.15)}50%{transform:rotate(10deg) scale(1)}75%{transform:rotate(-8deg) scale(1.1)}}

/* ── Tombol ── */
.gate-btns{display:flex;gap:10px;justify-content:center;flex-wrap:wrap;flex-direction:column;align-items:stretch}
.gate-btn{font-family:'Nunito',sans-serif;font-weight:900;font-size:clamp(14px,3.8vw,17px);letter-spacing:.04em;border:none;border-radius:999px;
  padding:clamp(11px,2.8vw,15px) clamp(20px,6vw,38px);cursor:pointer;position:relative;overflow:hidden;
  transition:transform .2s cubic-bezier(.22,1,.36,1),box-shadow .2s,background .2s}
.gate-btn::after{content:'';position:absolute;top:0;left:-80%;width:50%;height:100%;
  background:linear-gradient(100deg,transparent,rgba(255,255,255,.6),transparent);transform:skewX(-20deg)}
.gate-btn:hover::after{animation:gate-btn-sheen .7s ease}
@keyframes gate-btn-sheen{to{left:140%}}
.gate-btn:hover{transform:translateY(-3px) scale(1.03)}
.gate-btn:active{transform:scale(.96)}
.gate-btn:focus-visible{outline:3px solid #fff;outline-offset:3px}
.gate-btn-yes{background:linear-gradient(135deg,#ff1a7e,#ff6a3d 60%,#ff8a2a);color:#fff;
  box-shadow:0 8px 24px rgba(255,26,126,.5),inset 0 1px 0 rgba(255,255,255,.5);animation:gate-pulse 2s ease-in-out infinite}
.gate-btn-yes:hover{box-shadow:0 12px 32px rgba(255,26,126,.7),inset 0 1px 0 rgba(255,255,255,.5)}
@keyframes gate-pulse{0%,100%{box-shadow:0 8px 24px rgba(255,26,126,.5),0 0 0 0 rgba(255,26,126,.5),inset 0 1px 0 rgba(255,255,255,.5)}
  50%{box-shadow:0 8px 24px rgba(255,26,126,.5),0 0 0 10px rgba(255,26,126,0),inset 0 1px 0 rgba(255,255,255,.5)}}
.gate-btn-no{background:rgba(255,255,255,.2);color:#fff;border:2px solid rgba(255,255,255,.5);
  backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px);box-shadow:0 4px 14px rgba(0,0,0,.12)}
.gate-btn-no:hover{background:rgba(255,255,255,.34);animation:gate-wiggle .45s ease}
@keyframes gate-wiggle{0%,100%{rotate:0}25%{rotate:-4deg}75%{rotate:4deg}}

/* ════════ TOAST SCENE ════════ */
#toast-scene{position:fixed;inset:0;z-index:9100;display:flex;flex-direction:column;align-items:center;justify-content:center;overflow:hidden;
  background:radial-gradient(90% 60% at 50% 40%,rgba(255,130,170,.5),transparent 70%),linear-gradient(160deg,#ffc9d6 0%,#ffb09b 45%,#ff9566 100%);
  pointer-events:none;opacity:0;transition:opacity .5s ease}
#toast-scene.visible{opacity:1;pointer-events:auto}
#toast-scene .gate-rays{opacity:.75}

.toast-glasses{display:flex;align-items:flex-end;justify-content:center;gap:0;position:relative;z-index:2;
  height:clamp(200px,44vw,290px);filter:drop-shadow(0 18px 24px rgba(120,10,50,.3))}
.toast-glass{width:clamp(88px,20vw,124px);overflow:visible;transform-origin:50% 92%;
  transition:transform .55s cubic-bezier(.3,1.5,.5,1)}
.toast-glass-left{transform:translateX(-70px) rotate(-6deg)}
.toast-glass-right{transform:translateX(70px) rotate(6deg)}
.toast-glass-left.clink{transform:translateX(2px) rotate(9deg)}
.toast-glass-right.clink{transform:translateX(-2px) rotate(-9deg)}

/* isi gelas: gelembung naik & permukaan bergelombang */
.tg-bub{animation:tg-rise var(--t,2.4s) ease-in var(--d,0s) infinite;opacity:0}
@keyframes tg-rise{0%{transform:translateY(0);opacity:0}15%{opacity:.95}100%{transform:translateY(-70px);opacity:0}}
.tg-wave{animation:tg-slosh 2.2s ease-in-out infinite alternate;transform-box:fill-box;transform-origin:center}
@keyframes tg-slosh{from{transform:translateX(-3px) scaleY(.9)}to{transform:translateX(3px) scaleY(1.15)}}
.toast-glass.clink .tg-wave{animation-duration:.25s}

/* kilatan & cincin saat tos */
.toast-flash{position:absolute;left:50%;top:14%;width:0;height:0;z-index:3;pointer-events:none}
.toast-flash i{position:absolute;left:0;top:0;translate:-50% -50%;border-radius:50%;opacity:0}
.toast-flash .tf-core{width:120px;height:120px;background:radial-gradient(circle,#fff,rgba(255,240,170,.8) 35%,transparent 70%)}
.toast-flash .tf-ring{width:60px;height:60px;border:3px solid #fff;box-shadow:0 0 16px #ffd34d}
.toast-flash .tf-star{width:130px;height:130px;background:#fff;
  clip-path:polygon(50% 0,56% 44%,100% 50%,56% 56%,50% 100%,44% 56%,0 50%,44% 44%)}
.toast-flash.go .tf-core{animation:tf-core .7s ease-out forwards}
.toast-flash.go .tf-ring{animation:tf-ring .8s ease-out forwards}
.toast-flash.go .tf-ring.r2{animation-delay:.12s}
.toast-flash.go .tf-star{animation:tf-star .7s ease-out forwards}
@keyframes tf-core{0%{opacity:1;scale:.3}100%{opacity:0;scale:2.2}}
@keyframes tf-ring{0%{opacity:1;scale:.4}100%{opacity:0;scale:4.5}}
@keyframes tf-star{0%{opacity:1;scale:.2;rotate:0}100%{opacity:0;scale:1.8;rotate:60deg}}

/* percikan & tetesan */
.toast-sparks{position:absolute;top:14%;left:50%;width:0;height:0;pointer-events:none;z-index:3}
.toast-spark{position:absolute;opacity:0;background:var(--sc);animation:spark-fly var(--dur,.95s) cubic-bezier(.15,.7,.3,1) forwards}
.toast-spark.dot{border-radius:50%;filter:drop-shadow(0 0 4px var(--sc))}
.toast-spark.star{clip-path:polygon(50% 0,60% 40%,100% 50%,60% 60%,50% 100%,40% 60%,0 50%,40% 40%);filter:drop-shadow(0 0 4px var(--sc))}
.toast-spark.drop{border-radius:50% 50% 50% 50%/60% 60% 40% 40%;animation-name:drop-fly}
@keyframes spark-fly{0%{opacity:1;transform:translate(0,0) scale(1.2) rotate(0)}100%{opacity:0;transform:translate(var(--sx),var(--sy)) scale(.2) rotate(var(--sr,180deg))}}
@keyframes drop-fly{0%{opacity:1;transform:translate(0,0) scale(1)}60%{opacity:.9}100%{opacity:0;transform:translate(var(--sx),calc(var(--sy) + 90px)) scale(.5)}}

/* konfeti jatuh */
.toast-confetti{position:absolute;top:-20px;width:var(--w);height:calc(var(--w)*1.6);background:var(--c);opacity:0;pointer-events:none;z-index:1;
  animation:tc-fall var(--t) linear var(--d) infinite}
#toast-scene:not(.visible) .toast-confetti{animation-play-state:paused}
@keyframes tc-fall{0%{opacity:0;transform:translate3d(0,0,0) rotate(0)}8%{opacity:1}100%{opacity:.9;transform:translate3d(var(--dx),110vh,0) rotate(720deg)}}

.toast-text{position:relative;z-index:2;font-family:'Playfair Display',Georgia,serif;font-style:italic;font-weight:900;
  font-size:clamp(22px,6vw,38px);line-height:1.25;color:#fff;text-align:center;margin:26px 16px 0;
  text-shadow:0 3px 0 rgba(180,30,60,.45),0 10px 28px rgba(120,10,50,.4);
  opacity:0;transform:translateY(18px) scale(.95);transition:opacity .5s .5s ease,transform .6s .5s cubic-bezier(.22,1,.36,1)}
#toast-scene.visible .toast-text{opacity:1;transform:translateY(0) scale(1)}
.toast-text em{font-style:italic;display:inline-block;
  background:linear-gradient(100deg,#fff2a8,#ffd166,#fff,#ffd166);background-size:220% 100%;-webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;animation:gate-text 3s linear infinite}

/* ════════ RSVP CARD ════════ */
#rsvp-gate-wrap{position:fixed;inset:0;z-index:9200;display:flex;align-items:center;justify-content:center;overflow:hidden;
  background:radial-gradient(120% 70% at 50% 35%,rgba(255,120,160,.55),transparent 70%),linear-gradient(160deg,#ffc9d6 0%,#ffb09b 45%,#ff9566 100%);
  opacity:0;pointer-events:none;transition:opacity .6s ease}
#rsvp-gate-wrap.visible{opacity:1;pointer-events:auto}
.rsvp-gate-card{position:relative;z-index:2;background:rgba(255,255,255,.93);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);
  border:2px solid rgba(255,255,255,.7);border-radius:30px;padding:clamp(28px,6vw,48px) clamp(24px,7vw,54px);
  max-width:min(460px,92vw);width:100%;text-align:center;box-shadow:0 30px 80px rgba(120,10,50,.32),0 0 50px rgba(255,150,190,.4);
  animation:gate-pop .65s cubic-bezier(.22,1,.36,1) both}
.rsvp-gate-title{font-family:'Playfair Display',Georgia,serif;font-style:italic;font-weight:900;font-size:clamp(22px,5.5vw,30px);
  background:linear-gradient(100deg,#c2185b,#ff6a3d,#c2185b);background-size:200% 100%;-webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;animation:gate-text 4s linear infinite;margin:0 0 8px}
.rsvp-gate-sub{font-family:'Nunito',sans-serif;font-size:14px;font-weight:700;color:#7a4060;margin:0 0 22px}
.rsvp-gate-label{display:block;text-align:left;font-family:'Nunito',sans-serif;font-size:12px;font-weight:800;text-transform:uppercase;
  letter-spacing:.07em;color:#c2185b;margin-bottom:8px}
.rsvp-gate-input{width:100%;padding:14px 20px;border:2.5px solid #ffb3a0;border-radius:999px;font-family:'Playfair Display',Georgia,serif;
  font-size:clamp(15px,4vw,18px);font-weight:700;color:#5c2a0e;background:#fff;outline:none;text-align:center;
  transition:border-color .2s,box-shadow .2s;box-sizing:border-box}
.rsvp-gate-input::placeholder{color:#d4a898;font-style:italic}
.rsvp-gate-input:focus{border-color:#ff6b4a;box-shadow:0 0 0 4px rgba(255,107,74,.18)}
.rsvp-gate-btn{margin-top:18px;width:100%;background:linear-gradient(135deg,#ff1a7e,#ff8a2a);color:#fff;border:none;border-radius:999px;
  padding:14px 24px;font-family:'Nunito',sans-serif;font-size:clamp(15px,4vw,17px);font-weight:900;cursor:pointer;letter-spacing:.04em;
  box-shadow:0 8px 24px rgba(255,26,126,.4);transition:transform .18s,box-shadow .18s}
.rsvp-gate-btn:hover{transform:translateY(-3px);box-shadow:0 12px 32px rgba(255,26,126,.6)}
.rsvp-gate-btn:active{transform:scale(.97)}

/* ════════ NO SCREEN ════════ */
#no-screen{position:fixed;inset:0;z-index:9100;display:flex;align-items:center;justify-content:center;overflow:hidden;
  background:linear-gradient(160deg,#ffc9d6 0%,#ffb09b 45%,#ff9566 100%);opacity:0;pointer-events:none;transition:opacity .5s ease}
#no-screen.visible{opacity:1;pointer-events:auto}
.no-card{position:relative;z-index:2;background:rgba(255,255,255,.18);backdrop-filter:blur(22px);-webkit-backdrop-filter:blur(22px);
  border:1.5px solid rgba(255,255,255,.45);border-radius:28px;padding:clamp(36px,8vw,60px) clamp(28px,8vw,54px);
  max-width:min(440px,92vw);text-align:center;box-shadow:0 30px 80px rgba(120,10,50,.3);animation:gate-pop .7s cubic-bezier(.22,1,.36,1) both}
.no-emoji{font-size:clamp(52px,14vw,80px);line-height:1;margin-bottom:16px;display:block;animation:no-float 3s ease-in-out infinite}
@keyframes no-float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
.no-title{font-family:'Playfair Display',Georgia,serif;font-style:italic;font-weight:900;font-size:clamp(22px,6vw,30px);color:#fff;
  text-shadow:0 2px 0 rgba(180,30,60,.4),0 8px 24px rgba(120,10,50,.35);margin:0 0 14px}
.no-msg{font-family:'Nunito',sans-serif;font-size:clamp(14px,3.5vw,17px);font-weight:600;color:rgba(255,255,255,.92);line-height:1.65;margin:0 0 24px}
.no-msg strong{color:#ffd166}
.no-footer{font-family:'Dancing Script',cursive;font-size:clamp(16px,4vw,20px);color:rgba(255,255,255,.85);margin:0}

@media (prefers-reduced-motion:reduce){
  .gate-rays,.gate-card,.gate-card::before,.gate-card-in::after,.gate-disco-wrap,.gate-disco,.gate-disco::before,.gate-twinkle,
  .gate-question span,.gate-party,.gate-btn-yes,.gate-bokeh,.tg-bub,.tg-wave,.toast-confetti{animation:none}
  .gate-bokeh,.toast-confetti{display:none}
}
</style>

{{-- Definisi bersama untuk gelas toast --}}
<svg width="0" height="0" style="position:absolute" aria-hidden="true"><defs>
  <clipPath id="tg-flute"><path d="M32 18H88C91 72 82 118 66 144V150H54V144C38 118 29 72 32 18Z"/></clipPath>
  <linearGradient id="tg-glass" x1="0" y1="0" x2="1" y2="0">
    <stop offset="0" stop-color="#fff" stop-opacity=".7"/><stop offset=".28" stop-color="#fff" stop-opacity=".1"/>
    <stop offset=".72" stop-color="#fff" stop-opacity=".1"/><stop offset="1" stop-color="#fff" stop-opacity=".6"/></linearGradient>
  <linearGradient id="tg-liq-l" x1="0" y1="0" x2="0" y2="1">
    <stop offset="0" stop-color="#ffd3df"/><stop offset=".35" stop-color="#ff5c8a"/><stop offset="1" stop-color="#b0124a"/></linearGradient>
  <linearGradient id="tg-liq-r" x1="0" y1="0" x2="0" y2="1">
    <stop offset="0" stop-color="#fff0b8"/><stop offset=".35" stop-color="#ffb347"/><stop offset="1" stop-color="#e0561c"/></linearGradient>
  <linearGradient id="tg-metal" x1="0" y1="0" x2="1" y2="0">
    <stop offset="0" stop-color="#aebbc8"/><stop offset=".45" stop-color="#fff"/><stop offset="1" stop-color="#93a1af"/></linearGradient>
</defs></svg>

{{-- ── Gate card ── --}}
{{-- Isi data-home-url kalau homepage ada di route lain, mis. $homeUrl = route('home').
     Kosongkan kalau gate & homepage ada di halaman yang sama (gate akan memudar dan homepage terlihat). --}}
<div id="gate-overlay" role="dialog" aria-modal="true" aria-label="Party invitation" data-home-url="{{ $homeUrl ?? '' }}">
    <span class="gate-rays" aria-hidden="true"></span>
    <div id="gate-bokeh" aria-hidden="true"></div>

    <div class="gate-card">
        <div class="gate-card-in">
            <i class="gate-twinkle" style="top:12%;left:9%;--z:16px"></i>
            <i class="gate-twinkle" style="top:20%;right:10%;--z:12px;animation-delay:.7s"></i>
            <i class="gate-twinkle" style="bottom:22%;left:7%;--z:11px;animation-delay:1.3s"></i>
            <i class="gate-twinkle" style="bottom:12%;right:9%;--z:15px;animation-delay:1.9s"></i>

            <div class="gate-disco-wrap" aria-hidden="true"><div class="gate-disco"></div></div>
            <p class="gate-eyebrow">✨ You're specially invited ✨</p>
            <p class="gate-question">
                Can you come to<br>
                <span>my birthday party?</span> <span class="gate-party" style="-webkit-text-fill-color:initial;background:none;filter:none"></span>
            </p>
            <div class="gate-btns">
                <button id="gate-yes" class="gate-btn gate-btn-yes" type="button">🥂 YASHHH!</button>
                <button id="gate-no" class="gate-btn gate-btn-no" type="button"> No, sorry…</button>
            </div>
        </div>
    </div>
</div>

{{-- ── Toast scene ── --}}
<div id="toast-scene" aria-hidden="true">
    <span class="gate-rays" aria-hidden="true"></span>
    <div id="toast-confetti" aria-hidden="true"></div>

    <div class="toast-glasses">
        {{-- Kiri: sparkling rosé --}}
        <svg class="toast-glass toast-glass-left" id="tgl-left" viewBox="0 0 120 240" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="60" cy="226" rx="44" ry="7" fill="#7a1040" opacity=".28"/>
            <path d="M32 18H88C91 72 82 118 66 144V150H54V144C38 118 29 72 32 18Z" fill="url(#tg-glass)"/>
            <g clip-path="url(#tg-flute)">
                <rect x="0" y="46" width="120" height="120" fill="url(#tg-liq-l)"/>
                <ellipse class="tg-wave" cx="60" cy="47" rx="30" ry="4.5" fill="#fff" opacity=".6"/>
                <circle class="tg-bub" cx="52" cy="132" r="2" fill="#fff" style="--t:2.2s;--d:0s"/>
                <circle class="tg-bub" cx="66" cy="138" r="1.6" fill="#fff" style="--t:2.8s;--d:.6s"/>
                <circle class="tg-bub" cx="60" cy="120" r="2.4" fill="#fff" style="--t:2.5s;--d:1.1s"/>
                <circle class="tg-bub" cx="46" cy="110" r="1.4" fill="#fff" style="--t:2.1s;--d:1.7s"/>
                <circle class="tg-bub" cx="72" cy="104" r="1.8" fill="#fff" style="--t:2.9s;--d:.3s"/>
                <circle class="tg-bub" cx="58" cy="144" r="1.5" fill="#fff" style="--t:2.4s;--d:1.4s"/>
            </g>
            <path d="M32 18H88C91 72 82 118 66 144V150H54V144C38 118 29 72 32 18Z" fill="none" stroke="rgba(235,245,252,.95)" stroke-width="2.6" stroke-linejoin="round"/>
            <ellipse cx="60" cy="18" rx="28" ry="4.5" fill="none" stroke="#fff" stroke-width="2.4" opacity=".95"/>
            <path d="M39 28C38 60 42 92 52 118" stroke="#fff" stroke-width="4.5" stroke-linecap="round" fill="none" opacity=".7"/>
            <path d="M80 30C81 50 80 64 77 78" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none" opacity=".5"/>
            <rect x="57" y="150" width="6" height="60" rx="3" fill="url(#tg-metal)"/>
            <ellipse cx="60" cy="214" rx="36" ry="7" fill="#c7d3dc"/>
            <ellipse cx="60" cy="211" rx="30" ry="5" fill="url(#tg-metal)" opacity=".9"/>
            <path d="M92 6l2.2 5.8 5.8 2.2-5.8 2.2L92 22l-2.2-5.8L84 14l5.8-2.2z" fill="#fff8d6" opacity=".9"/>
        </svg>

        {{-- Kanan: golden spritz --}}
        <svg class="toast-glass toast-glass-right" id="tgl-right" viewBox="0 0 120 240" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="60" cy="226" rx="44" ry="7" fill="#7a1040" opacity=".28"/>
            <path d="M32 18H88C91 72 82 118 66 144V150H54V144C38 118 29 72 32 18Z" fill="url(#tg-glass)"/>
            <g clip-path="url(#tg-flute)">
                <rect x="0" y="46" width="120" height="120" fill="url(#tg-liq-r)"/>
                <ellipse class="tg-wave" cx="60" cy="47" rx="30" ry="4.5" fill="#fff" opacity=".6"/>
                <circle class="tg-bub" cx="54" cy="136" r="1.8" fill="#fff" style="--t:2.3s;--d:.2s"/>
                <circle class="tg-bub" cx="64" cy="128" r="2.3" fill="#fff" style="--t:2.7s;--d:.9s"/>
                <circle class="tg-bub" cx="58" cy="142" r="1.5" fill="#fff" style="--t:2.2s;--d:1.5s"/>
                <circle class="tg-bub" cx="70" cy="112" r="1.7" fill="#fff" style="--t:2.9s;--d:.5s"/>
                <circle class="tg-bub" cx="48" cy="104" r="2" fill="#fff" style="--t:2.5s;--d:1.9s"/>
                <circle class="tg-bub" cx="62" cy="96" r="1.4" fill="#fff" style="--t:2.1s;--d:1.2s"/>
            </g>
            <path d="M32 18H88C91 72 82 118 66 144V150H54V144C38 118 29 72 32 18Z" fill="none" stroke="rgba(235,245,252,.95)" stroke-width="2.6" stroke-linejoin="round"/>
            <ellipse cx="60" cy="18" rx="28" ry="4.5" fill="none" stroke="#fff" stroke-width="2.4" opacity=".95"/>
            <path d="M39 28C38 60 42 92 52 118" stroke="#fff" stroke-width="4.5" stroke-linecap="round" fill="none" opacity=".7"/>
            <path d="M80 30C81 50 80 64 77 78" stroke="#fff" stroke-width="2" stroke-linecap="round" fill="none" opacity=".5"/>
            <rect x="57" y="150" width="6" height="60" rx="3" fill="url(#tg-metal)"/>
            <ellipse cx="60" cy="214" rx="36" ry="7" fill="#c7d3dc"/>
            <ellipse cx="60" cy="211" rx="30" ry="5" fill="url(#tg-metal)" opacity=".9"/>
            {{-- irisan jeruk di bibir gelas --}}
            <g transform="translate(86 24) rotate(-24)">
                <path d="M-16 0A16 16 0 0 1 16 0Z" fill="#ffa21f" stroke="#ff8a00" stroke-width="2"/>
                <path d="M-12 -1A12 12 0 0 1 12 -1Z" fill="#ffc34d"/>
                <path d="M0 -1V-11M0 -1L-8 -8M0 -1L8 -8" stroke="#ffe7ad" stroke-width="1.2"/>
            </g>
        </svg>

        <div class="toast-flash" id="toast-flash" aria-hidden="true">
            <i class="tf-core"></i><i class="tf-star"></i><i class="tf-ring"></i><i class="tf-ring r2"></i>
        </div>
        <div class="toast-sparks" id="toast-sparks"></div>
    </div>

    <p class="toast-text" id="toast-text">
        🎊 <em>Woohoo!</em> Can't wait to see you there! 🎊
    </p>
</div>

{{-- ── RSVP Card ── --}}
<div id="rsvp-gate-wrap" aria-hidden="true">
    <span class="gate-rays" aria-hidden="true"></span>
    <div class="rsvp-gate-card">
        <p style="font-size:clamp(36px,10vw,52px);margin:0 0 10px;line-height:1;">🎀</p>
        <h2 class="rsvp-gate-title">You're on the guest list! 🌟</h2>
        <p class="rsvp-gate-sub">Let us know your name so we can save your spot!</p>
        <label class="rsvp-gate-label justify-center text-center" for="gate-name-field">✍️ Your Name</label>
        <input type="text" id="gate-name-field" class="rsvp-gate-input" placeholder="Type your name here… " maxlength="255" autocomplete="off"/>
        <button class="rsvp-gate-btn" id="gate-name-submit" type="button"> Save my spot!</button>
    </div>
</div>

{{-- ── No screen ── --}}
<div id="no-screen" aria-hidden="true">
    <div class="no-card">
        <span class="no-emoji">🌸</span>
        <h2 class="no-title">Aww, that's a shame…</h2>
        <p class="no-msg">
            It won't be the same without you, but we completely understand. 💕<br><br>
            Elvina sends you the <strong>warmest hugs</strong> and the <strong>biggest love</strong> from afar —
            you're always in her heart, no matter where you are. 🎀<br><br>
            Wishing you all the good vibes on that day! ✨
        </p>
        <p class="no-footer">With love, Elvina 🌷</p>
    </div>
</div>

{{-- ══════════════════════════════════════════════════════
     LOVIENA SHELBY — SWEET 17 INVITATION CARD
     Muncul setelah tamu menyimpan nama (showBdayCard)
     Overlay transparan → dekorasi sisi tetap kelihatan
══════════════════════════════════════════════════════ --}}
<style>
/* ── Card undangan: fixed tapi hanya card di tengah (bukan full-screen) ── */
#bday-card-overlay{
  position:fixed;
  inset:0;
  z-index:9300;
  display:none;
  align-items:center;
  justify-content:center;
  padding:1rem;
  /* Background transparan menunjukkan dekorasi di belakang */
  background:rgba(92,30,14,0.45);
  backdrop-filter:blur(2px);
  -webkit-backdrop-filter:blur(2px);
  opacity:0;
  transition:opacity .7s ease;
  overflow-y:auto;
}
#bday-card-overlay.visible{
  display:flex;
  animation:bday-fade-in .7s ease forwards;
}
@keyframes bday-fade-in{
  from{opacity:0}
  to{opacity:1}
}

/* ── Kartu utama ── */
.lv-card{
  position:relative;
  width:clamp(280px,88vw,420px);
  border-radius:20px;overflow:hidden;
  background:#fffdf6;
  box-shadow:0 12px 60px rgba(120,10,50,.5),0 2px 12px rgba(0,0,0,.18),0 0 0 3px rgba(255,138,42,.25);
  border:2px solid #ff8a2a;
  animation:lv-pop .65s cubic-bezier(.22,1,.36,1) both;
  margin:auto;
}
@keyframes lv-pop{
  from{opacity:0;transform:scale(.88) translateY(20px)}
  to  {opacity:1;transform:scale(1)   translateY(0)}
}

/* ── Header (oranye) ── */
.lv-header{
  background:linear-gradient(135deg,#ff8a2a 0%,#ff6a3d 60%,#e8560c 100%);
  padding:14px 12px 12px;
  text-align:center;position:relative;overflow:hidden;
}
.lv-header::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse at 70% 20%,rgba(255,255,255,.22),transparent 60%);
  pointer-events:none;
}
.lv-leaf-l,.lv-leaf-r{
  position:absolute;top:-4px;opacity:.5;
  font-size:24px;line-height:1;
}
.lv-leaf-l{left:-2px;transform:rotate(20deg)}
.lv-leaf-r{right:-2px;transform:rotate(-20deg)}

.lv-sweet-tag{
  font-family:'Nunito',sans-serif;font-size:11px;
  font-weight:800;letter-spacing:.12em;text-transform:uppercase;
  color:rgba(255,255,255,.9);display:block;margin-bottom:4px;
}
.lv-title{
  font-family:'Playfair Display',Georgia,serif;
  font-size:17px;font-weight:900;font-style:italic;
  color:#fff;margin:0;line-height:1.3;
  text-shadow:0 1px 4px rgba(150,50,0,.4);
}
.lv-title strong{
  display:block;font-size:19px;
}
.lv-title em{
  display:block;font-size:12.5px;font-style:normal;
  font-family:'Nunito',sans-serif;font-weight:700;
  color:rgba(255,255,255,.92);margin-top:3px;letter-spacing:.02em;
}

/* ── Divider daun ── */
.lv-divider{
  text-align:center;padding:5px 0;font-size:17px;
  letter-spacing:3px;color:#ff8a2a;
  background:#fffdf6;
}

/* ── Strip nama tamu ── */
.lv-guest-strip{
  background:linear-gradient(90deg,#fff3e0,#ffe0b2,#fff3e0);
  padding:10px 12px;
  text-align:center;
  border-top:1px dashed rgba(255,138,42,.35);
  border-bottom:1px dashed rgba(255,138,42,.35);
}
.lv-guest-label{
  font-family:'Nunito',sans-serif;font-size:11px;
  font-weight:800;text-transform:uppercase;letter-spacing:.1em;
  color:#e65c00;display:block;margin-bottom:3px;
}
.lv-guest-name{
  font-family:'Playfair Display',Georgia,serif;
  font-size:23px;font-style:italic;font-weight:900;
  color:#bf4300;line-height:1.2;margin:0;
  word-break:break-word;
}

/* ── Detail grid ── */
.lv-details{
  padding:10px 12px 14px;
  display:flex;flex-direction:column;gap:6px;
}
.lv-row{
  display:flex;align-items:flex-start;gap:8px;
  background:rgba(255,138,42,.06);
  border-radius:9px;padding:8px 10px;
  border:1px solid rgba(255,138,42,.15);
}
.lv-icon{
  font-size:18px;flex-shrink:0;line-height:1.4;
}
.lv-row-text{min-width:0}
.lv-row-label{
  font-family:'Nunito',sans-serif;font-size:10px;
  font-weight:800;text-transform:uppercase;letter-spacing:.1em;
  color:#e65c00;display:block;margin-bottom:1px;
}
.lv-row-val{
  font-family:'Nunito',sans-serif;font-size:14px;
  font-weight:700;color:#2d1a00;line-height:1.4;
  display:block;word-break:break-word;
}

@media (prefers-reduced-motion:reduce){
  .lv-card{animation:none}
}

/* ── Responsive mobile untuk card undangan ── */
@media (max-width: 600px) {
  .lv-header{
    padding:18px 16px 16px;
  }
  .lv-title{font-size:clamp(17px,4.5vw,22px)}
  .lv-title strong{font-size:clamp(19px,5vw,24px)}
  .lv-title em{font-size:clamp(13px,3.5vw,16px)}
  .lv-sweet-tag{font-size:clamp(10px,2.8vw,13px)}
  .lv-guest-name{font-size:clamp(22px,6vw,30px)}
  .lv-guest-strip{padding:12px 16px}
  .lv-guest-label{font-size:clamp(10px,2.8vw,12px)}
  .lv-details{padding:12px 14px 16px;gap:8px}
  .lv-row{padding:10px 12px;gap:10px}
  .lv-icon{font-size:20px}
  .lv-row-label{font-size:clamp(10px,2.8vw,12px)}
  .lv-row-val{font-size:clamp(13px,3.8vw,16px)}
  .lv-divider{font-size:18px;letter-spacing:4px}
  .lv-leaf-l,.lv-leaf-r{font-size:26px}
}
</style>

<div id="bday-card-overlay" aria-hidden="true">
    <div class="lv-card" role="dialog" aria-label="Invitation Card">

        {{-- HEADER + floating close X --}}
        <div class="lv-header">
            <h2 class="lv-title">
                Welcome to<br>
                <strong style="font-size:1.15em;font-style:italic">Loviena Shelby's</strong>
                <em>Sweet 17 Birthday Party</em>
            </h2>
        </div>

      
        {{-- GUEST NAME --}}
        <div class="lv-guest-strip">
            <span class="lv-guest-label">Dear Guest</span>
            <p class="lv-guest-name" id="bday-name-display">—</p>
        </div>

        {{-- PARTY DETAILS --}}
        <div class="lv-details">
            <div class="lv-row">
                <span class="lv-icon">📅</span>
                <div class="lv-row-text">
                    <span class="lv-row-label">Date</span>
                    {{-- GANTI TANGGAL DI SINI --}}
                    <span class="lv-row-val">Sabtu, 07 November 2026</span>
                </div>
            </div>
            <div class="lv-row">
                <span class="lv-icon">🕖</span>
                <div class="lv-row-text">
                    <span class="lv-row-label">Time</span>
                    {{-- GANTI JAM DI SINI --}}
                    <span class="lv-row-val">18.30 PM</span>
                </div>
            </div>
            <div class="lv-row">
                <span class="lv-icon">📍</span>
                <div class="lv-row-text">
                    <span class="lv-row-label">Venue</span>
                    {{-- GANTI VENUE DI SINI --}}
                    <span class="lv-row-val">D'Mario Resto</span>
                </div>
            </div>
            <div class="lv-row">
                <span class="lv-icon">👗</span>
                <div class="lv-row-text">
                    <span class="lv-row-label">Dress Code</span>
                    {{-- GANTI DRESSCODE DI SINI --}}
                    <span class="lv-row-val">Hawaiian Tropical Summer </span>
                </div>
            </div>
            <div class="lv-row">
                <span class="lv-icon">📝</span>
                <div class="lv-row-text">
                    <span class="lv-row-label">Note</span>
                    {{-- GANTI DRESSCODE DI SINI --}}
                    <span class="lv-row-val">Bawa Baju Ganti</span>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
(function () {
    var overlay    = document.getElementById('gate-overlay');
    var btnYes     = document.getElementById('gate-yes');
    var btnNo      = document.getElementById('gate-no');
    var toastScene = document.getElementById('toast-scene');
    var sparksWrap = document.getElementById('toast-sparks');
    var flash      = document.getElementById('toast-flash');
    var tglLeft    = document.getElementById('tgl-left');
    var tglRight   = document.getElementById('tgl-right');
    var rsvpWrap   = document.getElementById('rsvp-gate-wrap');
    var noScreen   = document.getElementById('no-screen');
    var gateInput  = document.getElementById('gate-name-field');
    var gateSubmit = document.getElementById('gate-name-submit');
    var reduce     = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var cols = ['#ff1a7e','#ffd34d','#ff8a2a','#42d3ff','#b46bff','#fff4d6','#6bff9e','#ffb3d1','#fff'];

    /* bokeh di layar gate */
    var bk = document.getElementById('gate-bokeh');
    for (var b = 0; b < 22; b++) {
        var e = document.createElement('i'), s = 8 + Math.random() * 22;
        e.className = 'gate-bokeh';
        e.style.cssText = 'left:' + (Math.random() * 100) + '%;top:' + (30 + Math.random() * 70) + '%;width:' + s + 'px;height:' + s + 'px;' +
            '--c:' + cols[b % cols.length] + ';--t:' + (4 + Math.random() * 5) + 's;--d:-' + (Math.random() * 8).toFixed(2) + 's';
        bk.appendChild(e);
    }

    /* konfeti jatuh di toast scene */
    var cf = document.getElementById('toast-confetti');
    for (var c = 0; c < 36; c++) {
        var p = document.createElement('i');
        p.className = 'toast-confetti';
        p.style.cssText = 'left:' + (Math.random() * 100) + '%;--w:' + (6 + Math.random() * 6).toFixed(1) + 'px;--c:' + cols[c % cols.length] +
            ';--t:' + (3.5 + Math.random() * 3).toFixed(2) + 's;--d:-' + (Math.random() * 6).toFixed(2) + 's;--dx:' + (Math.random() * 120 - 60).toFixed(0) + 'px;' +
            (c % 3 === 0 ? 'border-radius:50%;height:var(--w)' : '');
        cf.appendChild(p);
    }

    /* percikan: bintang, titik, dan tetesan minuman */
    function spawnSparks() {
        sparksWrap.innerHTML = '';
        for (var i = 0; i < 34; i++) {
            var sp = document.createElement('div'), kind = i % 3 === 0 ? 'star' : (i % 3 === 1 ? 'dot' : 'drop');
            var angle = Math.random() * Math.PI * 2, dist = 70 + Math.random() * 130, sz = 5 + Math.random() * 9;
            sp.className = 'toast-spark ' + kind;
            sp.style.cssText =
                '--sc:' + (kind === 'drop' ? (i % 2 ? '#ff7aa2' : '#ffc067') : cols[i % cols.length]) + ';' +
                '--sx:' + (Math.cos(angle) * dist).toFixed(1) + 'px;' +
                '--sy:' + (Math.sin(angle) * dist - 50).toFixed(1) + 'px;' +
                '--sr:' + (Math.random() * 360 - 180).toFixed(0) + 'deg;' +
                '--dur:' + (0.8 + Math.random() * 0.6).toFixed(2) + 's;' +
                'animation-delay:' + (Math.random() * .15).toFixed(2) + 's;' +
                'width:' + sz + 'px;height:' + (kind === 'drop' ? sz * 1.4 : sz) + 'px;';
            sparksWrap.appendChild(sp);
        }
        flash.classList.remove('go'); void flash.offsetWidth; flash.classList.add('go');
        if (navigator.vibrate) { try { navigator.vibrate(30); } catch (e) {} }
    }

    /* ── YES ── */
    btnYes.addEventListener('click', function () {
        overlay.classList.add('gate-out');
        setTimeout(function () {
            overlay.style.display = 'none';
            toastScene.setAttribute('aria-hidden', 'false');
            toastScene.classList.add('visible');

            setTimeout(function () {            // tos! gelas beradu
                tglLeft.classList.add('clink');
                tglRight.classList.add('clink');
                setTimeout(spawnSparks, 260);   // percikan tepat saat bibir gelas bertemu
            }, 500);

            setTimeout(function () {            // gelas mundur sedikit
                tglLeft.classList.remove('clink');
                tglRight.classList.remove('clink');
            }, 1500);

            setTimeout(function () {            // tos kedua, lebih meriah
                tglLeft.classList.add('clink');
                tglRight.classList.add('clink');
                setTimeout(spawnSparks, 260);
            }, 1900);

            setTimeout(function () {
                tglLeft.classList.remove('clink');
                tglRight.classList.remove('clink');
            }, 2500);

            setTimeout(function () {            // lanjut ke RSVP
                toastScene.classList.remove('visible');
                setTimeout(function () {
                    toastScene.style.display = 'none';
                    rsvpWrap.setAttribute('aria-hidden', 'false');
                    rsvpWrap.classList.add('visible');
                    setTimeout(function () { if (gateInput) gateInput.focus(); }, 400);
                }, 500);
            }, 3600);
        }, 650);
    });

    /* ── NO ── */
    btnNo.addEventListener('click', function () {
        overlay.classList.add('gate-out');
        setTimeout(function () {
            overlay.style.display = 'none';
            noScreen.setAttribute('aria-hidden', 'false');
            noScreen.classList.add('visible');
        }, 650);
    });

    /* ── Submit nama → simpan ke DB via AJAX lalu tampilkan birthday card ── */
    var bdayOverlay    = document.getElementById('bday-card-overlay');
    var bdayNameEl     = document.getElementById('bday-name-display');
    var bdayCloseBtn   = document.getElementById('bday-close-btn');
    var bdayConfWrap   = document.getElementById('bday-confetti-wrap');
    var csrfToken      = document.querySelector('meta[name="csrf-token"]');

    /* Spawns birthday confetti */
    function spawnBdayConfetti() {
        if (!bdayConfWrap) return;
        bdayConfWrap.innerHTML = '';
        var confCols = ['#ff1a7e','#ffd34d','#ff8a2a','#42d3ff','#b46bff','#fff4d6','#6bff9e','#ffb3d1'];
        for (var i = 0; i < 48; i++) {
            var p = document.createElement('i');
            p.className = 'bday-confetti';
            p.style.cssText = 'left:' + (Math.random() * 100) + '%;' +
                '--w:' + (6 + Math.random() * 8).toFixed(1) + 'px;' +
                '--c:' + confCols[i % confCols.length] + ';' +
                '--t:' + (3.5 + Math.random() * 3.5).toFixed(2) + 's;' +
                '--d:-' + (Math.random() * 7).toFixed(2) + 's;' +
                '--dx:' + (Math.random() * 130 - 65).toFixed(0) + 'px;' +
                (i % 3 === 0 ? 'border-radius:50%;height:var(--w)' : '');
            bdayConfWrap.appendChild(p);
        }
    }

    /* Show the personalized birthday card */
    function showBdayCard(name) {
        if (bdayNameEl) bdayNameEl.textContent = name;
        spawnBdayConfetti();
        if (bdayOverlay) {
            bdayOverlay.setAttribute('aria-hidden', 'false');
            bdayOverlay.classList.add('visible');
        }
        if (window.lvCardShown) window.lvCardShown();   /* mulai hitung 5 detik → kartu masuk amplop */
    }

    /* Close birthday card → reveal background homepage */
    if (bdayCloseBtn) {
        bdayCloseBtn.addEventListener('click', function () {
            if (bdayOverlay) {
                bdayOverlay.style.transition = 'opacity .7s ease';
                bdayOverlay.style.opacity = '0';
                setTimeout(function () {
                    bdayOverlay.style.display = 'none';
                    document.documentElement.classList.add('guest-entered');
                }, 700);
            }
        });
    }

    gateSubmit.addEventListener('click', function () {
        var name = gateInput ? gateInput.value.trim() : '';
        if (!name) {
            gateInput.style.borderColor = '#ff6b4a';
            gateInput.style.boxShadow   = '0 0 0 4px rgba(255,107,74,.25)';
            gateInput.placeholder       = '⚠️ Please enter your name first!';
            gateInput.focus();
            return;
        }

        /* Disable button & show loading state */
        gateSubmit.disabled    = true;
        gateSubmit.textContent = '✨ Saving your spot…';
        gateInput.disabled     = true;

        /* Fade out RSVP card */
        rsvpWrap.style.transition = 'opacity .6s ease, transform .6s ease';
        rsvpWrap.style.opacity    = '0';
        rsvpWrap.style.transform  = 'scale(1.05)';

        /* POST to /rsvp/gate-entry → save to DB */
        fetch('{{ route("rsvp.gate_entry") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept':       'application/json',
                'X-CSRF-TOKEN': csrfToken ? csrfToken.getAttribute('content') : ''
            },
            body: JSON.stringify({ name: name })
        })
        .then(function (res) { return res.json(); })
        .then(function (data) {
            var guestName = (data && data.name) ? data.name : name;
            try { sessionStorage.setItem('gate_guest_name', guestName); } catch (e) {}

            setTimeout(function () {
                rsvpWrap.style.display = 'none';
                showBdayCard(guestName);
            }, 600);
        })
        .catch(function () {
            /* Fallback: tetap tampilkan card walau fetch gagal */
            try { sessionStorage.setItem('gate_guest_name', name); } catch (e) {}
            setTimeout(function () {
                rsvpWrap.style.display = 'none';
                showBdayCard(name);
            }, 600);
        });
    });

    if (gateInput) {
        gateInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') gateSubmit.click();
        });
    }
})();
</script>



{{-- ══════════════════════════════════════════════════════════════
     LAYAR UTAMA: foto yang ulang tahun + amplop berisi kartu undangan
     Alur: kartu tampil 5 detik → mengecil masuk amplop → foto muncul.
     Ketuk amplop untuk membuka kartu lagi.
══════════════════════════════════════════════════════════════ --}}
<style>
#home-stage{position:fixed;inset:0;z-index:9250;display:flex;overflow-x:hidden;overflow-y:auto;
  padding:max(16px,env(safe-area-inset-top),env(safe-area-inset-bottom)) max(16px,env(safe-area-inset-left),env(safe-area-inset-right));
  visibility:hidden;opacity:0;pointer-events:none;transition:opacity .5s ease,visibility 0s .5s;
  overscroll-behavior:contain;-webkit-overflow-scrolling:touch}
#home-stage.on{visibility:visible;opacity:1;pointer-events:auto;transition:opacity .5s ease}
.hs-inner{margin:auto;display:flex;flex-direction:column;align-items:center;text-align:center;
  gap:clamp(12px,2.6vh,22px);
  --hpw:clamp(150px,min(60vw,31vh),320px);
  --ew:clamp(170px,min(58vw,42vh),300px)}
.hs-env-wrap{display:flex;flex-direction:column;align-items:center;gap:clamp(8px,1.6vh,14px)}

/* ── Foto ── */
.home-photo{margin:0;display:flex;flex-direction:column;align-items:center;gap:10px;
  opacity:0;transform:translateY(24px) scale(.92);
  transition:opacity .7s ease,transform .8s cubic-bezier(.22,1,.36,1)}
#home-stage.photo .home-photo{opacity:1;transform:none}
.hp-frame{position:relative;width:var(--hpw);aspect-ratio:4/5;border-radius:26px;padding:4px;overflow:hidden;
  box-shadow:0 20px 50px rgba(120,10,50,.42),0 0 36px rgba(255,150,190,.45)}
.hp-frame::before{content:'';position:absolute;left:50%;top:50%;width:220%;aspect-ratio:1;translate:-50% -50%;
  background:conic-gradient(from 0deg,#ff1a7e,#ffd34d,#42d3ff,#b46bff,#6bff9e,#ff8a2a,#ff1a7e);animation:gate-spin 6s linear infinite}
.hp-img-wrap{position:relative;width:100%;height:100%;border-radius:22px;overflow:hidden;
  background:linear-gradient(160deg,#ffd0dc,#ffb09b 55%,#ff9566)}
.hp-img-wrap img{display:block;width:100%;height:100%;object-fit:cover}
.hp-ph{display:none;position:absolute;inset:0;align-items:center;justify-content:center;font-size:calc(var(--hpw)*.4)}
.home-photo.no-photo img{display:none}
.home-photo.no-photo .hp-ph{display:flex}
.hp-name{font-family:'Playfair Display',Georgia,serif;font-style:italic;font-weight:900;
  font-size:clamp(22px,6.4vw,34px);line-height:1.15;color:#fff;
  text-shadow:0 2px 0 rgba(180,30,60,.5),0 8px 22px rgba(120,10,50,.45)}
.hp-sub{font-family:'Dancing Script',cursive;font-weight:700;font-size:clamp(17px,4.6vw,24px);color:#fff;
  letter-spacing:.04em;text-shadow:0 2px 8px rgba(120,10,50,.45)}

/* ── Amplop ── */
.home-env{position:relative;display:block;width:var(--ew);aspect-ratio:3/2;padding:0;border:0;background:none;
  cursor:pointer;perspective:900px;-webkit-tap-highlight-color:transparent;
  filter:drop-shadow(0 12px 18px rgba(120,10,50,.38));
  opacity:0;transform:translateY(12px) scale(.9);pointer-events:none;
  transition:opacity .5s ease,transform .6s cubic-bezier(.22,1,.36,1)}
#home-stage.on .home-env{opacity:1;transform:none}
#home-stage.photo .home-env{pointer-events:auto;animation:env-bob 2.8s ease-in-out infinite}
#home-stage.photo .home-env:hover{transform:scale(1.04)}
.home-env:focus-visible{outline:3px solid #fff;outline-offset:6px;border-radius:8px}
@keyframes env-bob{0%,100%{translate:0 0}50%{translate:0 -6px}}
.env-back{position:absolute;inset:0;border-radius:8px;background:linear-gradient(160deg,#e8560c,#c2410c)}
.env-front{position:absolute;inset:0;z-index:2;border-radius:8px;
  clip-path:polygon(0 0,50% 54%,100% 0,100% 100%,0 100%);
  background:linear-gradient(165deg,#ffa23c,#ff7a2e 55%,#ff5c3a)}
.env-flap{position:absolute;left:0;top:0;width:100%;height:56%;z-index:3;transform-origin:50% 0;
  clip-path:polygon(0 0,100% 0,50% 100%);border-radius:8px 8px 0 0;
  background:linear-gradient(180deg,#ffb457,#ff8a2a);
  transition:transform .65s cubic-bezier(.4,.1,.2,1)}
#home-stage.open .env-flap{transform:rotateX(180deg);z-index:0}
.env-seal{position:absolute;left:50%;top:54%;z-index:4;font-size:calc(var(--ew)*.16);line-height:1;
  transform:translate(-50%,-50%) scale(0);transition:transform .5s cubic-bezier(.3,1.7,.5,1);
  filter:drop-shadow(0 2px 4px rgba(120,10,50,.4))}
#home-stage.seal .env-seal{transform:translate(-50%,-50%) scale(1)}
.home-hint{margin:0;font-family:'Nunito',sans-serif;font-weight:800;font-size:clamp(12px,3.4vw,15px);letter-spacing:.04em;
  color:#fff;text-shadow:0 2px 8px rgba(120,10,50,.5);opacity:0;transition:opacity .6s ease .3s}
#home-stage.photo .home-hint{opacity:1}

/* ── Tombol Daftar Tamu ── */
.home-guest-btn{
  display:inline-flex;align-items:center;gap:6px;
  margin-top:2px;
  padding:9px 20px;
  background:rgba(255,255,255,.22);
  border:2px solid rgba(255,255,255,.55);
  border-radius:999px;
  font-family:'Nunito',sans-serif;font-weight:800;
  font-size:clamp(11px,3vw,13px);letter-spacing:.04em;
  color:#fff;text-decoration:none;
  backdrop-filter:blur(6px);-webkit-backdrop-filter:blur(6px);
  box-shadow:0 4px 14px rgba(0,0,0,.1);
  opacity:0;pointer-events:none;
  transition:opacity .6s ease .5s,transform .2s,background .2s;
  -webkit-tap-highlight-color:transparent;
}
#home-stage.photo .home-guest-btn{opacity:1;pointer-events:auto}
.home-guest-btn:hover{background:rgba(255,255,255,.34);transform:translateY(-2px)}
.home-guest-btn:active{transform:scale(.96)}

/* Layar landscape pendek: foto & amplop berdampingan */
@media (max-height:520px) and (orientation:landscape){
  .hs-inner{flex-direction:row;gap:clamp(20px,6vw,56px);
    --hpw:clamp(110px,42vh,230px);--ew:clamp(150px,min(36vw,52vh),260px)}
}
@media (prefers-reduced-motion:reduce){
  .hp-frame::before,#home-stage.photo .home-env{animation:none}
}
</style>

<div id="home-stage" aria-hidden="true">
    <div class="hs-inner">
        <figure class="home-photo" id="home-photo">
            <div class="hp-frame">
                <div class="hp-img-wrap">
                    {{-- GANTI FOTO DI SINI: taruh file di public/images/loviena.jpg (atau ubah nama filenya) --}}
                    <img src="{{ asset('images/loviena.jpg') }}" alt="Loviena Shelby"
                         onerror="this.closest('.home-photo').classList.add('no-photo')">
                    <span class="hp-ph" aria-hidden="true">🎀</span>
                </div>
            </div>
            <figcaption>
                <div class="hp-name">Loviena Shelby</div>
                <div class="hp-sub">Sweet 17 🎀</div>
            </figcaption>
        </figure>

        <div class="hs-env-wrap">
            <button type="button" class="home-env" id="home-env" aria-label="Open the invitation card">
                <span class="env-back"></span>
                <span class="env-flap"></span>
                <span class="env-front"></span>
                <span class="env-seal">💗</span>
            </button>
            <p class="home-hint">💌 Tap the envelope to open your invitation</p>
            <a href="/guests" class="home-guest-btn" id="home-guest-btn">📋 Guest List</a>
        </div>
    </div>
</div>

<script>
(function () {
    var overlay = document.getElementById('bday-card-overlay');
    var stage   = document.getElementById('home-stage');
    var env     = document.getElementById('home-env');
    var card    = overlay ? overlay.querySelector('.lv-card') : null;
    if (!overlay || !stage || !env || !card) return;

    var reduce  = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var FLY     = reduce ? 1 : 1100;      // durasi kartu masuk amplop
    var AUTO_FIRST  = 5000;               // 5 detik setelah kartu muncul
    var AUTO_REOPEN = 10000;              // kalau amplop dibuka lagi
    var timer = null, busy = false, cardShown = false;

    function geo() {                      // jarak & skala kartu → amplop
        var cr = card.getBoundingClientRect(), er = env.getBoundingClientRect();
        return {
            dx: (er.left + er.width / 2) - (cr.left + cr.width / 2),
            dy: (er.top + er.height * .45) - (cr.top + cr.height / 2),
            sc: Math.min(1, (er.width * .78) / cr.width)
        };
    }

    function collapse() {
        if (busy || !cardShown) return;
        busy = true; cardShown = false; clearTimeout(timer);
        stage.setAttribute('aria-hidden', 'false');
        stage.classList.remove('photo', 'seal');
        stage.classList.add('on', 'open');                 // amplop muncul, tutup terbuka

        var g = geo();
        var anim = card.animate([
            { transform: 'translate(0,0) scale(1)', opacity: 1 },
            { transform: 'translate(' + (g.dx * .45) + 'px,' + (g.dy * .45 - 34) + 'px) scale(' + ((1 + g.sc) / 2) + ')', opacity: 1, offset: .55 },
            { transform: 'translate(' + g.dx + 'px,' + g.dy + 'px) scale(' + g.sc + ')', opacity: 0 }
        ], { duration: FLY, easing: 'cubic-bezier(.55,0,.25,1)', fill: 'forwards' });

        anim.onfinish = function () {
            overlay.classList.remove('visible');
            overlay.setAttribute('aria-hidden', 'true');
            anim.cancel();
            setTimeout(function () { stage.classList.remove('open'); }, 80);    // tutup amplop
            setTimeout(function () { stage.classList.add('seal'); }, reduce ? 0 : 700);   // segel hati
            setTimeout(function () { stage.classList.add('photo'); busy = false; }, reduce ? 0 : 900); // foto muncul
        };
    }

    function reopen() {
        if (busy || cardShown || !stage.classList.contains('photo')) return;
        busy = true;
        stage.classList.remove('photo', 'seal');
        stage.classList.add('open');
        stage.classList.remove('on-card'); 

        card.style.animation = 'none';
        overlay.classList.add('visible');
        overlay.setAttribute('aria-hidden', 'false');
        var g = geo();
        var anim = card.animate([
            { transform: 'translate(' + g.dx + 'px,' + g.dy + 'px) scale(' + g.sc + ')', opacity: 0 },
            { transform: 'translate(' + (g.dx * .4) + 'px,' + (g.dy * .4 - 30) + 'px) scale(' + ((1 + g.sc) / 2) + ')', opacity: 1, offset: .45 },
            { transform: 'translate(0,0) scale(1)', opacity: 1 }
        ], { duration: FLY, easing: 'cubic-bezier(.22,1,.36,1)', fill: 'forwards' });
        anim.onfinish = function () {
            anim.cancel(); card.style.animation = '';
            card.style.animation = 'none';       // jangan ulang animasi pop
            cardShown = true; busy = false;
            timer = setTimeout(collapse, AUTO_REOPEN);
        };
    }

    window.lvCardShown = function () {           // dipanggil saat kartu pertama kali muncul
        cardShown = true; busy = false;
        card.style.animation = '';
        clearTimeout(timer);
        timer = setTimeout(collapse, AUTO_FIRST);
    };

    overlay.addEventListener('click', function () { collapse(); });   // ketuk kartu = langsung masuk amplop
    env.addEventListener('click', reopen);
})();
</script>


{{-- ══════════════════════════════════════════════════════════════
     MUSIK LATAR
     GANTI LAGU DI SINI: taruh file lagu di  public/audio/song.mp3
     (atau ubah nama/lokasi file di atribut src di bawah).
     Lagu otomatis diputar saat tamu menekan "YASHHH!" atau "No, sorry…".
══════════════════════════════════════════════════════════════ --}}
<audio id="bg-music" src="{{ asset('audio/song.mp3') }}" loop preload="auto" playsinline></audio>

<button type="button" id="music-btn" class="music-btn" aria-label="Pause music" aria-pressed="true" hidden>
    <span class="music-ico" aria-hidden="true">🎵</span>
    <span class="music-bars" aria-hidden="true"><i></i><i></i><i></i></span>
</button>

<style>
.music-btn{position:fixed;z-index:9400;
  top:max(12px,env(safe-area-inset-top));right:max(12px,env(safe-area-inset-right));
  width:46px;height:46px;border-radius:50%;padding:0;cursor:pointer;
  display:flex;align-items:center;justify-content:center;
  border:2px solid rgba(255,255,255,.7);color:#fff;font-size:20px;line-height:1;
  background:linear-gradient(135deg,rgba(255,26,126,.85),rgba(255,138,42,.85));
  backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);
  box-shadow:0 6px 20px rgba(120,10,50,.4),inset 0 1px 0 rgba(255,255,255,.5);
  -webkit-tap-highlight-color:transparent;touch-action:manipulation;
  transition:transform .2s cubic-bezier(.22,1,.36,1),box-shadow .2s}
.music-btn[hidden]{display:none}
.music-btn:hover{transform:scale(1.08)}
.music-btn:active{transform:scale(.94)}
.music-btn:focus-visible{outline:3px solid #fff;outline-offset:3px}
.music-bars{display:none;align-items:flex-end;gap:3px;height:18px}
.music-bars i{width:3.5px;border-radius:2px;background:#fff;height:100%;transform-origin:bottom;animation:mb-eq .9s ease-in-out infinite}
.music-bars i:nth-child(2){animation-delay:.2s}.music-bars i:nth-child(3){animation-delay:.4s}
@keyframes mb-eq{0%,100%{transform:scaleY(.3)}50%{transform:scaleY(1)}}
.music-btn.is-playing .music-ico{display:none}
.music-btn.is-playing .music-bars{display:flex}
.music-btn.is-playing{animation:mb-pulse 2.4s ease-in-out infinite}
@keyframes mb-pulse{0%,100%{box-shadow:0 6px 20px rgba(120,10,50,.4),0 0 0 0 rgba(255,26,126,.5),inset 0 1px 0 rgba(255,255,255,.5)}
  50%{box-shadow:0 6px 20px rgba(120,10,50,.4),0 0 0 10px rgba(255,26,126,0),inset 0 1px 0 rgba(255,255,255,.5)}}
@media (max-width:400px){.music-btn{width:42px;height:42px}}
@media (prefers-reduced-motion:reduce){.music-bars i,.music-btn.is-playing{animation:none}}
</style>

<script>
(function () {
    var audio = document.getElementById('bg-music');
    var btn   = document.getElementById('music-btn');
    var yes   = document.getElementById('gate-yes');
    var no    = document.getElementById('gate-no');
    var gramo = document.getElementById('sd-gramo');
    if (!audio || !btn) return;

    var started = false, userPaused = false, broken = false, TARGET_VOL = .8, fade = null;

    function ui(playing) {
        btn.classList.toggle('is-playing', playing);
        btn.setAttribute('aria-pressed', playing ? 'true' : 'false');
        btn.setAttribute('aria-label', playing ? 'Pause music' : 'Play music');
        if (gramo) gramo.classList.toggle('playing', playing);   // piringan gramofon ikut berputar
    }
    function fadeIn() {
        clearInterval(fade); audio.volume = 0;
        fade = setInterval(function () {
            var v = audio.volume + .05;
            if (v >= TARGET_VOL) { audio.volume = TARGET_VOL; clearInterval(fade); } else audio.volume = v;
        }, 100);
    }
    function play() {
        if (broken) return;
        var pr;
        try { pr = audio.play(); } catch (e) { return; }
        if (pr && pr.then) {
            pr.then(function () { userPaused = false; btn.hidden = false; ui(true); fadeIn(); })
              .catch(function () { if (!broken) { btn.hidden = false; ui(false); } });   // diblokir browser → tombol play muncul
        }
    }
    function start() { if (started) return; started = true; play(); }

    /* Lagu mulai saat tamu menekan YASHHH! atau No */
    if (yes) yes.addEventListener('click', start);
    if (no)  no.addEventListener('click', start);

    btn.addEventListener('click', function () {
        if (audio.paused) { userPaused = false; play(); } else { userPaused = true; audio.pause(); ui(false); }
    });

    /* File lagu belum dipasang / tidak ditemukan → tombol disembunyikan, tidak ada error */
    audio.addEventListener('error', function () { broken = true; btn.hidden = true; if (gramo) gramo.classList.add('playing'); });

    /* Jeda otomatis saat tab disembunyikan, lanjut lagi kalau tidak dijeda manual */
    document.addEventListener('visibilitychange', function () {
        if (!started || broken) return;
        if (document.hidden) audio.pause();
        else if (!userPaused) audio.play().catch(function () {});
    });
    audio.addEventListener('pause', function () { if (!document.hidden) ui(false); });
    audio.addEventListener('play',  function () { ui(true); });
})();
</script>

{{-- ════════════════════════════════════════════════════════════
     RESPONSIVE LAYER — HP kecil, HP besar, landscape, tablet, laptop, desktop, TV
     Ditaruh paling akhir supaya meng-override style di atas.
════════════════════════════════════════════════════════════ --}}
<style>
/* ── Dasar ── */
*,*::before,*::after{box-sizing:border-box}
html{-webkit-text-size-adjust:100%;text-size-adjust:100%;overflow-x:hidden}
body{margin:0;min-height:100vh;min-height:100dvh;overflow-x:hidden;background:#ffb09b;-webkit-tap-highlight-color:transparent}

/* Dekorasi selalu menutupi seluruh layar (bukan hanya tinggi konten) */
.sunset-decor{position:fixed;inset:0}

/* Semua layar penuh: pakai dvh (anti bar browser mobile) + safe-area (notch) */
#gate-overlay,#toast-scene,#rsvp-gate-wrap,#no-screen{
  padding:max(14px,env(safe-area-inset-top)) max(14px,env(safe-area-inset-right)) max(14px,env(safe-area-inset-bottom)) max(14px,env(safe-area-inset-left))}
/* Overlay kartu undangan: TANPA gelap/blur di belakang, kartu tepat di tengah layar */
#bday-card-overlay{
  --py:max(14px,env(safe-area-inset-top),env(safe-area-inset-bottom));
  --px:max(14px,env(safe-area-inset-left),env(safe-area-inset-right));
  padding:var(--py) var(--px);       /* simetris atas = bawah, kiri = kanan */
  background:transparent;
  backdrop-filter:none;-webkit-backdrop-filter:none;
  align-items:center;justify-content:center;
  -webkit-overflow-scrolling:touch;overscroll-behavior:contain}
#bday-card-overlay .lv-card{margin:auto}

/* Kartu: kalau layar terlalu pendek, isi kartu bisa di-scroll (tidak terpotong) */
.gate-card-in,.rsvp-gate-card,.no-card{
  max-height:calc(100vh - 28px);max-height:calc(100dvh - 28px);
  overflow-x:hidden;overflow-y:auto;scrollbar-width:none;-webkit-overflow-scrolling:touch}
.gate-card-in::-webkit-scrollbar,.rsvp-gate-card::-webkit-scrollbar,.no-card::-webkit-scrollbar{display:none}
.rsvp-gate-card,.no-card{width:100%}
.gate-card,.rsvp-gate-card,.no-card{margin:auto}


/* ════ SCROLL: setiap layar/card bisa di-scroll ke bawah kalau isinya lebih tinggi dari layar ════ */
#gate-overlay,#toast-scene,#rsvp-gate-wrap,#no-screen,#bday-card-overlay{
  overflow-x:hidden;overflow-y:auto;overscroll-behavior:contain;
  -webkit-overflow-scrolling:touch;scrollbar-width:thin;scrollbar-color:rgba(255,255,255,.7) transparent}
/* efek latar yang besar dibuat fixed supaya tidak memanjangkan area scroll */
#gate-overlay .gate-rays,#toast-scene .gate-rays,#rsvp-gate-wrap .gate-rays{
  position:fixed;inset:0;width:auto;height:auto;margin:0;overflow:hidden;background:none;
  -webkit-mask:none;mask:none;animation:none;mix-blend-mode:normal}
#gate-overlay .gate-rays::before,#toast-scene .gate-rays::before,#rsvp-gate-wrap .gate-rays::before{
  content:'';position:absolute;left:50%;top:50%;width:150vmax;height:150vmax;margin:-75vmax 0 0 -75vmax;
  background:conic-gradient(transparent 0 3%,rgba(255,26,126,.35) 4% 7%,transparent 8% 16%,rgba(255,224,138,.4) 17% 20%,
   transparent 21% 29%,rgba(70,200,255,.32) 30% 33%,transparent 34% 42%,rgba(170,90,255,.34) 43% 46%,transparent 47% 55%,
   rgba(110,255,160,.3) 56% 59%,transparent 60% 68%,rgba(255,138,42,.4) 69% 72%,transparent 73% 81%,rgba(255,80,200,.34) 82% 85%,transparent 86%);
  -webkit-mask:radial-gradient(circle,#000 5%,transparent 55%);mask:radial-gradient(circle,#000 5%,transparent 55%);
  mix-blend-mode:screen;animation:gate-spin 40s linear infinite}
html,body{width:100%;max-width:100%}
#gate-bokeh,#toast-confetti{position:fixed;inset:0;overflow:hidden;pointer-events:none}
#toast-scene{justify-content:safe center}
/* scroll dilakukan oleh layar, bukan di dalam card */
.gate-card-in{max-height:none;overflow:hidden}
.rsvp-gate-card,.no-card{max-height:none;overflow:visible}
#gate-overlay::after,#rsvp-gate-wrap::after,#no-screen::after,#bday-card-overlay::after{content:'';flex:0 0 1px}

/* Sentuhan nyaman di HP */
.gate-btn,.rsvp-gate-btn{min-height:46px;touch-action:manipulation}
.rsvp-gate-input{font-size:clamp(16px,4vw,18px)}   /* ≥16px → iOS tidak auto-zoom */
@media (hover:none){
  .gate-btn:hover,.rsvp-gate-btn:hover{transform:none}
}

/* Kartu undangan: lebar aman untuk layar 320px */
.lv-card{width:clamp(272px,92vw,420px)}

/* Gelas toast: ukuran & jarak ikut layar (lebar DAN tinggi) */
.toast-glasses{--tgx:clamp(34px,10vw,70px);height:clamp(150px,min(44vw,52vh),290px)}
.toast-glass{width:clamp(64px,min(20vw,26vh),124px)}
.toast-glass-left{transform:translateX(calc(var(--tgx) * -1)) rotate(-6deg)}
.toast-glass-right{transform:translateX(var(--tgx)) rotate(6deg)}
.toast-glass-left.clink{transform:translateX(2px) rotate(9deg)}
.toast-glass-right.clink{transform:translateX(-2px) rotate(-9deg)}
.toast-text{font-size:clamp(20px,5.5vw,38px);margin:clamp(14px,3vh,26px) 12px 0}

/* ── HP kecil (≤ 400px) ── */
@media (max-width:400px){
  .gate-card-in{padding:20px 16px 18px}
  .gate-question{font-size:clamp(20px,6.4vw,26px);margin-bottom:16px}
  .rsvp-gate-card{padding:24px 18px}
  .no-card{padding:30px 20px}
  .lv-guest-name{font-size:clamp(19px,6vw,24px)}
  .lv-row-val{font-size:13px}
  .sd-pine,.sd-orange-b{display:none}
}


/* ── Ukuran HP: elemen lebih kecil (tidak terasa "zoom in") ── */
@media (max-width:600px){
  .gate-card{max-width:min(340px,86vw)}
  .gate-card-in{padding:20px 18px 18px}
  .gate-question{font-size:clamp(20px,5.6vw,27px);margin-bottom:16px}
  .gate-eyebrow{font-size:clamp(13px,3.6vw,17px)}
  .gate-btn{font-size:clamp(13px,3.7vw,15px);padding:11px 22px}
  .rsvp-gate-card{max-width:min(360px,88vw);padding:24px 20px}
  .rsvp-gate-title{font-size:clamp(19px,5.2vw,25px)}
  .no-card{max-width:min(360px,88vw);padding:30px 22px}
  .lv-card{width:clamp(262px,86vw,380px)}
  .toast-text{font-size:clamp(18px,5vw,28px)}
  /* dekorasi ±15% lebih kecil */
  .sd-ball-l{--w:clamp(110px,32vw,170px)}
  .sd-ball-r{--w:clamp(125px,36vw,195px)}
  .sd-chain{height:clamp(80px,22vw,170px)}
  .sd-hib-c{width:clamp(110px,32vw,170px);right:-26px}
  .sd-hib-b{width:clamp(115px,34vw,178px);left:-26px}
  .sd-martini{width:clamp(100px,29vw,160px)}
  .sd-tumbler{left:clamp(85px,24vw,145px);width:clamp(76px,20vw,120px)}
  .sd-orange-a{width:clamp(94px,26vw,136px);right:-18px}
  .sd-orange-b{width:clamp(68px,19vw,94px);left:-16px}
  .sd-gramo{width:clamp(110px,31vw,170px)}
  .sd-palm{--pw:clamp(187px,49vw,290px)}
  .sd-palm-bl{--pw:clamp(162px,43vw,247px)}
  .sd-palm-br{--pw:clamp(119px,32vw,178px)}
  .sd-mons{width:clamp(170px,48vw,255px)}
  .sd-mons-l{left:-77px}
  .sd-mons-r{right:-77px}
  .sd-arc{width:clamp(102px,31vw,170px)}
  .sd-pine{width:clamp(54px,14vw,76px)}
  .sd-wave{width:clamp(20px,5vw,30px)}
}
@media (max-width:400px){
  .sd-ball-l{--w:clamp(105px,31vw,150px)}
  .sd-ball-r{--w:clamp(118px,34vw,165px)}
  .sd-hib-c{width:clamp(105px,31vw,150px);right:-22px}
  .sd-hib-b{width:clamp(110px,33vw,155px);left:-22px}
  .sd-martini{width:clamp(95px,28vw,140px)}
  .sd-gramo{width:clamp(105px,30vw,150px)}
}

/* ── Hemat performa di HP ── */
@media (max-width:600px){
  .sd-dot:nth-child(n+17){display:none}
  .gate-bokeh:nth-child(n+11){display:none}
  .toast-confetti:nth-child(n+21){display:none}
  .gate-card-in{backdrop-filter:blur(14px) saturate(1.5);-webkit-backdrop-filter:blur(14px) saturate(1.5)}
}

/* ── Tablet (601–1023px) ── */
@media (min-width:601px) and (max-width:1023px){
  .sd-ball-l{--w:clamp(150px,22vw,210px)}
  .sd-ball-r{--w:clamp(165px,25vw,235px)}
  .sd-hib-c{width:clamp(170px,24vw,230px)}
  .sd-hib-b{width:clamp(175px,25vw,240px)}
  .sd-martini{width:clamp(150px,20vw,210px)}
  .sd-tumbler{left:clamp(130px,18vw,190px);width:clamp(100px,14vw,150px)}
  .sd-gramo{width:clamp(150px,20vw,210px)}
  .sd-orange-a{width:clamp(130px,18vw,170px)}
  .sd-orange-b{width:clamp(90px,13vw,120px)}
  .sd-pine{width:clamp(70px,10vw,96px)}
  .gate-card{max-width:440px}
  .rsvp-gate-card{max-width:480px}
}

/* ── Kartu undangan di tablet ke atas ── */
@media (min-width:768px){
  .lv-card{width:min(460px,92vw)}
  .lv-title{font-size:20px}
  .lv-title strong{font-size:23px}
  .lv-title em{font-size:15px}
  .lv-sweet-tag,.lv-guest-label{font-size:12px}
  .lv-guest-name{font-size:28px}
  .lv-guest-strip{padding:14px 16px}
  .lv-details{padding:14px 16px 18px;gap:8px}
  .lv-row{padding:10px 12px}
  .lv-row-label{font-size:11px}
  .lv-row-val{font-size:16px}
}

/* ── Laptop / Desktop (≥1024px) ── */
@media (min-width:1024px){
  .sd-ball-l{--w:clamp(170px,15vw,280px)}
  .sd-ball-r{--w:clamp(190px,17vw,320px)}
  .sd-palm{--pw:clamp(300px,24vw,460px)}
  .sd-palm-bl{--pw:clamp(260px,20vw,400px)}
  .sd-palm-br{--pw:clamp(190px,15vw,300px)}
  .sd-mons{--mw:clamp(280px,22vw,420px);width:var(--mw)}
  .sd-mons-l{left:calc(var(--mw) * -.43)}
  .sd-mons-r{right:calc(var(--mw) * -.43)}
  .sd-hib-c{--hw:clamp(200px,15vw,300px);width:var(--hw);right:calc(var(--hw) * -.28)}
  .sd-hib-b{--hw:clamp(205px,16vw,310px);width:var(--hw);left:calc(var(--hw) * -.26)}
  .sd-martini{width:clamp(180px,13vw,260px)}
  .sd-tumbler{left:clamp(160px,12vw,240px);width:clamp(110px,8.5vw,170px)}
  .sd-gramo{width:clamp(170px,12vw,250px)}
  .sd-orange-a{width:clamp(140px,10vw,200px);right:-45px}
  .sd-orange-b{width:clamp(95px,7vw,140px)}
  .sd-pine{width:clamp(76px,5.5vw,110px)}
  .sd-wave{width:clamp(34px,2.6vw,52px)}
  .sd-arc{width:clamp(220px,17vw,340px)}
  .gate-card{max-width:460px}
  .gate-question{font-size:clamp(30px,2.6vw,42px)}
  .gate-eyebrow{font-size:clamp(18px,1.5vw,24px)}
  .rsvp-gate-card{max-width:500px}
  .no-card{max-width:500px}
}
@media (min-width:1280px){
  .lv-card{width:min(520px,92vw)}
  .lv-title{font-size:22px}
  .lv-title strong{font-size:26px}
  .lv-guest-name{font-size:32px}
  .lv-row-val{font-size:17px}
}

/* ── Layar sangat besar / TV (≥1920px) ── */
@media (min-width:1920px){
  .gate-card{max-width:520px}
  .lv-card{width:580px}
  .toast-text{font-size:clamp(38px,2.4vw,52px)}
}

/* ── HP / tablet LANDSCAPE (tinggi pendek) ── */
@media (max-height:520px) and (orientation:landscape){
  /* kartu lebih ringkas & tombol berdampingan */
  .gate-card{max-width:min(560px,92vw)}
  .gate-card-in{padding:14px 24px}
  .gate-disco-wrap{width:44px;margin:-2px auto 8px}
  .gate-disco-wrap::before{height:26px}
  .gate-eyebrow{margin-bottom:4px;font-size:14px}
  .gate-question{font-size:clamp(18px,4vw,26px);margin-bottom:12px}
  .gate-btns{flex-direction:row;justify-content:center}
  .gate-btn{padding:10px 22px}
  .gate-twinkle{display:none}
  .rsvp-gate-card,.no-card{padding:16px 26px}
  .rsvp-gate-card p:first-child{font-size:28px!important;margin-bottom:4px!important}
  .rsvp-gate-sub{margin-bottom:12px}
  .rsvp-gate-btn{margin-top:12px}
  .no-emoji{font-size:40px;margin-bottom:6px}
  .no-msg{margin-bottom:12px}
  /* kartu undangan landscape: 2 kolom supaya muat & tetap di tengah */
  .lv-card{width:min(560px,92vw)}
  .lv-header{padding:8px 12px}
  .lv-title{font-size:13px}
  .lv-title strong{font-size:16px!important}
  .lv-title em{font-size:11px}
  .lv-guest-strip{padding:5px 10px}
  .lv-guest-label{font-size:9px;margin-bottom:0}
  .lv-guest-name{font-size:17px}
  .lv-details{display:grid;grid-template-columns:1fr 1fr;padding:6px 10px 10px;gap:5px}
  .lv-row{padding:5px 8px;gap:6px}
  .lv-icon{font-size:15px}
  .lv-row-label{font-size:9px}
  .lv-row-val{font-size:12px}
  /* dekorasi mengecil mengikuti TINGGI layar */
  .sd-palm{--pw:clamp(110px,36vh,180px)}
  .sd-palm-bl{--pw:clamp(100px,32vh,170px)}
  .sd-palm-br{--pw:clamp(80px,26vh,130px)}
  .sd-ball-l{--w:clamp(70px,24vh,110px)}
  .sd-ball-r{--w:clamp(80px,28vh,130px)}
  .sd-chain{height:clamp(40px,12vh,90px)}
  .sd-martini{width:clamp(70px,22vh,110px)}
  .sd-gramo{width:clamp(80px,26vh,120px)}
  .sd-arc{width:clamp(80px,24vh,130px)}
  .sd-led,.sd-led svg{height:70px}
  .sd-mons,.sd-hib-c,.sd-hib-b,.sd-orange-a,.sd-orange-b,.sd-pine,.sd-tumbler{display:none}
}

/* ── Layar sangat pendek (jendela kecil / split-screen) ── */
@media (max-height:380px){
  .gate-disco-wrap{display:none}
  .gate-card-in{padding:12px 20px}
}

/* ── Hormati preferensi gerak minimal ── */
@media (prefers-reduced-motion:reduce){
  .gate-card{animation:none}
  .toast-glass{transition:none}
}
</style>

</body>
</html>