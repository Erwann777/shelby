<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Guest List — Loviena Shelby Sweet 17 🎀</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Nunito:wght@400;600;700;800;900&family=Playfair+Display:ital,wght@0,700;1,900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root { --pink:#ff1a7e; --orange:#ff8a2a; --gold:#ffd34d; --teal:#1fc5a8; --dark:#2d0a1a; --ink:#5a2a3c; }
        html { -webkit-text-size-adjust:100%; text-size-adjust:100%; }
        html, body { min-height:100vh; min-height:100dvh; font-family:'Nunito',sans-serif; color:var(--dark); overflow-x:hidden;
            background:linear-gradient(160deg,#ffc9d6 0%,#ffb09b 45%,#ff9566 100%); background-attachment:fixed; }

        /* ───── Background: soft blobs + slowly turning disco rays ───── */
        .bg { position:fixed; inset:0; z-index:0; pointer-events:none; overflow:hidden; }
        .bg::before { content:''; position:absolute; left:50%; top:20%; width:150vmax; height:150vmax; margin:-75vmax 0 0 -75vmax;
            background:conic-gradient(transparent 0 3%,rgba(255,26,126,.2) 4% 7%,transparent 8% 16%,rgba(255,224,138,.28) 17% 20%,transparent 21% 29%,
              rgba(70,200,255,.2) 30% 33%,transparent 34% 42%,rgba(170,90,255,.2) 43% 46%,transparent 47% 55%,rgba(110,255,160,.18) 56% 59%,
              transparent 60% 68%,rgba(255,138,42,.28) 69% 72%,transparent 73% 81%,rgba(255,80,200,.2) 82% 85%,transparent 86%);
            -webkit-mask:radial-gradient(circle,#000 5%,transparent 55%); mask:radial-gradient(circle,#000 5%,transparent 55%);
            mix-blend-mode:screen; animation:spin 60s linear infinite; }
        .bg i { position:absolute; border-radius:50%; filter:blur(50px); opacity:.55; }
        .bg i:nth-child(1) { width:42vmax; height:42vmax; left:-14vmax; top:-10vmax; background:#ff4f93; }
        .bg i:nth-child(2) { width:36vmax; height:36vmax; right:-12vmax; top:30%; background:#ffd34d; opacity:.45; }
        .bg i:nth-child(3) { width:40vmax; height:40vmax; left:20%; bottom:-20vmax; background:#9a6bff; opacity:.35; }
        @keyframes spin { to { transform:rotate(360deg); } }

        /* ───── Top bar with the Back button ───── */
        .topbar { position:sticky; top:0; z-index:20;
            padding:max(10px,env(safe-area-inset-top)) max(14px,env(safe-area-inset-right)) 10px max(14px,env(safe-area-inset-left));
            background:linear-gradient(180deg,rgba(255,150,180,.55),rgba(255,150,180,.25)); backdrop-filter:blur(14px) saturate(1.5); -webkit-backdrop-filter:blur(14px) saturate(1.5);
            border-bottom:1px solid rgba(255,255,255,.35); }
        .topbar-in { max-width:900px; margin:0 auto; display:flex; align-items:center; justify-content:space-between; gap:10px; }
        .btn-back { display:inline-flex; align-items:center; gap:8px; min-height:44px; padding:10px 18px 10px 14px; border-radius:999px;
            background:linear-gradient(135deg,var(--pink),var(--orange)); color:#fff; text-decoration:none; font-weight:900; font-size:.9rem; letter-spacing:.03em;
            border:2px solid rgba(255,255,255,.6); box-shadow:0 6px 18px rgba(255,26,126,.35),inset 0 1px 0 rgba(255,255,255,.5);
            transition:transform .2s cubic-bezier(.22,1,.36,1),box-shadow .2s; -webkit-tap-highlight-color:transparent; touch-action:manipulation; }
        .btn-back svg { width:18px; height:18px; transition:transform .2s; }
        .btn-back:hover { transform:translateY(-2px); box-shadow:0 10px 24px rgba(255,26,126,.5),inset 0 1px 0 rgba(255,255,255,.5); }
        .btn-back:hover svg { transform:translateX(-3px); }
        .btn-back:active { transform:scale(.96); }
        .btn-back:focus-visible, .btn-export:focus-visible { outline:3px solid #fff; outline-offset:3px; }
        .topbar-title { font-family:'Dancing Script',cursive; font-weight:700; font-size:clamp(18px,4.6vw,24px); color:#fff; text-shadow:0 2px 8px rgba(120,10,50,.4); white-space:nowrap; }

        /* ───── Page ───── */
        .page { position:relative; z-index:1; max-width:900px; margin:0 auto; padding:clamp(18px,4vw,36px) clamp(14px,4vw,32px) calc(48px + env(safe-area-inset-bottom)); }
        .header { text-align:center; margin-bottom:clamp(22px,4vw,34px); }
        .header-emoji { display:inline-block; font-size:clamp(40px,10vw,60px); margin-bottom:6px; animation:bob 3s ease-in-out infinite; }
        @keyframes bob { 0%,100% { transform:translateY(0) rotate(-4deg); } 50% { transform:translateY(-8px) rotate(4deg); } }
        .header h1 { font-family:'Playfair Display',serif; font-size:clamp(1.7rem,6vw,2.8rem); font-style:italic; font-weight:900; color:#fff; line-height:1.15; margin-bottom:8px;
            text-shadow:0 2px 0 rgba(180,30,60,.5),0 10px 28px rgba(120,10,50,.45); }
        .header p { display:inline-block; padding:5px 16px; border-radius:999px; background:rgba(255,255,255,.22); border:1px solid rgba(255,255,255,.45);
            font-size:clamp(.8rem,2.6vw,.95rem); color:#fff; font-weight:800; letter-spacing:.05em; text-shadow:0 1px 6px rgba(120,10,50,.35); }

        /* ───── Stats ───── */
        .stats-row { display:grid; grid-template-columns:repeat(3,1fr); gap:clamp(8px,2vw,16px); margin-bottom:clamp(16px,3vw,24px); }
        .stat-card { position:relative; overflow:hidden; background:rgba(255,253,246,.92); border-radius:18px; padding:clamp(12px,3vw,18px) 10px; text-align:center;
            border:1.5px solid rgba(255,255,255,.7); box-shadow:0 8px 28px rgba(120,10,50,.2); animation:rise .6s cubic-bezier(.22,1,.36,1) both; }
        .stat-card::after { content:''; position:absolute; left:0; right:0; top:0; height:4px; background:linear-gradient(90deg,var(--pink),var(--orange),var(--gold),var(--teal)); }
        .stat-card:nth-child(2) { animation-delay:.08s; } .stat-card:nth-child(3) { animation-delay:.16s; }
        .stat-num { font-family:'Playfair Display',serif; font-size:clamp(1.6rem,6vw,2.5rem); font-weight:900; font-style:italic; line-height:1.1;
            background:linear-gradient(135deg,var(--pink),var(--orange)); -webkit-background-clip:text; background-clip:text; -webkit-text-fill-color:transparent;
            white-space:nowrap; overflow:hidden; text-overflow:ellipsis; padding:0 2px; }
        .stat-num.small { font-size:clamp(1rem,3.6vw,1.4rem); line-height:1.5; }
        .stat-label { font-size:clamp(.62rem,2vw,.72rem); font-weight:900; text-transform:uppercase; letter-spacing:.1em; color:#e65c00; margin-top:4px; }

        /* ───── Toolbar ───── */
        .toolbar { display:flex; gap:10px; align-items:center; margin-bottom:14px; flex-wrap:wrap; }
        .search-wrap { flex:1 1 220px; position:relative; }
        .search-wrap::before { content:'🔍'; position:absolute; left:16px; top:50%; transform:translateY(-50%); font-size:16px; pointer-events:none; }
        #search-input { width:100%; min-height:48px; padding:12px 18px 12px 46px; border:2px solid rgba(255,255,255,.7); border-radius:999px;
            font-family:'Nunito',sans-serif; font-size:16px; font-weight:700; background:rgba(255,253,246,.95); color:var(--dark); outline:none;
            box-shadow:0 6px 20px rgba(120,10,50,.15); transition:border-color .2s,box-shadow .2s; }
        #search-input::placeholder { color:#c9a090; font-weight:600; }
        #search-input:focus { border-color:var(--orange); box-shadow:0 0 0 4px rgba(255,138,42,.25),0 6px 20px rgba(120,10,50,.15); }
        .btn-export { flex:0 0 auto; min-height:48px; padding:12px 22px; border:2px solid rgba(255,255,255,.6); border-radius:999px; cursor:pointer;
            background:linear-gradient(135deg,var(--pink),var(--orange)); color:#fff; font-family:'Nunito',sans-serif; font-size:.9rem; font-weight:900; letter-spacing:.03em;
            display:inline-flex; align-items:center; justify-content:center; gap:8px; white-space:nowrap;
            box-shadow:0 6px 18px rgba(255,26,126,.35),inset 0 1px 0 rgba(255,255,255,.5); transition:transform .2s,box-shadow .2s; touch-action:manipulation; }
        .btn-export:hover { transform:translateY(-2px); box-shadow:0 10px 24px rgba(255,26,126,.5),inset 0 1px 0 rgba(255,255,255,.5); }
        .btn-export:active { transform:scale(.96); }
        .result-count { font-size:.78rem; font-weight:800; color:#fff; text-shadow:0 1px 6px rgba(120,10,50,.4); margin:0 6px 10px; letter-spacing:.04em; }

        /* ───── Guest list ───── */
        .guest-table-wrap { background:rgba(255,253,246,.96); border-radius:22px; overflow:hidden; border:1.5px solid rgba(255,255,255,.7);
            box-shadow:0 16px 50px rgba(120,10,50,.28); }
        table { width:100%; border-collapse:collapse; }
        thead tr { background:linear-gradient(135deg,#ff8a2a 0%,#ff6a3d 55%,#ff1a7e 130%); }
        thead th { padding:15px 20px; font-size:.74rem; font-weight:900; text-transform:uppercase; letter-spacing:.13em; color:#fff; text-align:left; white-space:nowrap; }
        thead th:first-child { text-align:center; width:64px; }
        tbody tr { border-bottom:1px solid rgba(255,138,42,.14); transition:background .15s; animation:rise .5s cubic-bezier(.22,1,.36,1) both; animation-delay:calc(min(var(--i,0),14) * 40ms + .2s); }
        tbody tr:nth-child(even) { background:rgba(255,138,42,.045); }
        tbody tr:last-child { border-bottom:none; }
        tbody tr:hover { background:rgba(255,138,42,.11); }
        tbody td { padding:12px 20px; vertical-align:middle; font-weight:700; }
        .td-num { text-align:center; color:#e65c00; font-size:.82rem; font-weight:900; }
        .guest { display:flex; align-items:center; gap:12px; min-width:0; }
        .avatar { flex:0 0 auto; width:42px; height:42px; border-radius:50%; display:flex; align-items:center; justify-content:center; color:#fff;
            font-family:'Playfair Display',serif; font-style:italic; font-weight:900; font-size:1.15rem; border:2px solid #fff; box-shadow:0 4px 12px rgba(120,10,50,.28); }
        .av0 { background:linear-gradient(135deg,#ff1a7e,#ff6a3d); } .av1 { background:linear-gradient(135deg,#ff8a2a,#ffd34d); }
        .av2 { background:linear-gradient(135deg,#1fc5a8,#42d3ff); } .av3 { background:linear-gradient(135deg,#b46bff,#ff4f93); }
        .av4 { background:linear-gradient(135deg,#ff4f93,#ffb347); }
        .td-name { font-family:'Playfair Display',serif; font-size:1.05rem; font-style:italic; font-weight:700; color:var(--dark); overflow-wrap:anywhere; }
        .badge-new { display:inline-flex; align-items:center; margin-left:8px; padding:2px 9px; border-radius:999px; vertical-align:middle;
            background:linear-gradient(135deg,var(--pink),var(--orange)); color:#fff; font-family:'Nunito',sans-serif; font-style:normal;
            font-size:.62rem; font-weight:900; letter-spacing:.09em; text-transform:uppercase; box-shadow:0 2px 8px rgba(255,26,126,.4); }
        .td-time { color:var(--ink); font-size:.82rem; font-weight:700; white-space:nowrap; }
        .td-time small { display:block; opacity:.65; font-size:.76rem; font-weight:700; }

        .empty-state { text-align:center; padding:clamp(40px,10vw,64px) 24px; }
        .empty-state .es-emoji { display:block; font-size:clamp(46px,12vw,64px); margin-bottom:12px; animation:bob 3s ease-in-out infinite; }
        .empty-state p { color:#c26a00; font-weight:800; font-size:.98rem; line-height:1.6; }
        #no-result { display:none; text-align:center; padding:40px 24px; font-weight:800; color:#c26a00; }

        .footer { text-align:center; margin-top:26px; font-size:.82rem; color:#fff; font-weight:800; text-shadow:0 1px 6px rgba(120,10,50,.4); }

        @keyframes rise { from { opacity:0; transform:translateY(14px); } to { opacity:1; transform:none; } }

        /* ───── Tombol musik melayang ───── */
        .btn-music { position:fixed; z-index:30; right:max(16px,env(safe-area-inset-right)); bottom:max(16px,env(safe-area-inset-bottom));
            width:52px; height:52px; border-radius:50%; border:2px solid rgba(255,255,255,.7); cursor:pointer; font-size:22px; line-height:1;
            background:linear-gradient(135deg,var(--pink),var(--orange)); color:#fff;
            box-shadow:0 8px 22px rgba(255,26,126,.45),inset 0 1px 0 rgba(255,255,255,.5);
            display:flex; align-items:center; justify-content:center; touch-action:manipulation; -webkit-tap-highlight-color:transparent;
            transition:transform .2s; }
        .btn-music:active { transform:scale(.92); }
        .btn-music:focus-visible { outline:3px solid #fff; outline-offset:3px; }
        .btn-music.playing { animation:spin 4s linear infinite; }
        .btn-music.paused { opacity:.8; filter:grayscale(.5); }

        /* ───── Phones: the table becomes a card list ───── */
        @media (max-width:600px) {
            thead tr { display:flex; align-items:center; justify-content:space-between; gap:10px; padding:0 14px; }
            thead th { padding:14px 0; font-size:.7rem; letter-spacing:.1em; }
            thead th:first-child { display:none; }
            thead th:last-child { text-align:right; }
            tbody tr { display:flex; align-items:center; justify-content:space-between; gap:10px; padding:12px 14px; }
            tbody td { padding:0; }
            .td-num { display:none; }
            .td-guest { flex:1 1 auto; min-width:0; }
            .td-time { text-align:right; font-size:.76rem; }
            .td-time small { font-size:.72rem; }
            .td-name { font-size:1rem; }
            .btn-export { flex:1 1 100%; }
            .toolbar { gap:8px; }
        }
        @media (max-width:380px) {
            .stats-row { gap:6px; }
            .stat-card { padding:10px 4px; border-radius:14px; }
            .btn-back { padding:9px 14px 9px 10px; font-size:.82rem; }
            .avatar { width:36px; height:36px; font-size:1rem; }
        }
        @media (min-width:1024px) {
            .page { max-width:960px; }
            .topbar-in { max-width:960px; }
        }
        @media (prefers-reduced-motion:reduce) {
            .bg::before, .header-emoji, .empty-state .es-emoji { animation:none; }
            .stat-card, tbody tr { animation:none; }
            .btn-back, .btn-export { transition:none; }
            .btn-music.playing { animation:none; }
        }
    </style>
</head>
<body>

<div class="bg" aria-hidden="true"><i></i><i></i><i></i></div>

{{-- ═══ MUSIK LATAR (looping terus) ═══ --}}
<audio id="bg-music" src="{{ asset('audio/song.mp3') }}" loop preload="auto" playsinline></audio>

<button type="button" id="btn-music" class="btn-music" aria-label="Putar atau jeda musik" aria-pressed="false">🎵</button>

{{-- ═══ TOP BAR: Back button ═══ --}}
<nav class="topbar" aria-label="Page navigation">
    <div class="topbar-in">
        <a href="/" id="btn-back" class="btn-back" aria-label="Go back to the previous page">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 5l-7 7 7 7"/></svg>
            Back
        </a>
    </div>
</nav>

<div class="page">

    <header class="header">
        
        <h1>Invited Guest List</h1>
        <p>Loviena Shelby — Sweet 17 Birthday Party</p>
    </header>

    @if($guests->isEmpty())
        <div class="guest-table-wrap">
            <div class="empty-state">
                <span class="es-emoji">&#x1F48C;</span>
                <p>No guests have RSVP'd yet.<br>Share the invitation link to start collecting guest data!</p>
            </div>
        </div>
    @else

        <div class="guest-table-wrap">
            <table id="guest-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Guest Name</th>
                        <th>RSVP Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guests as $i => $tamu)
                    <tr data-name="{{ strtolower($tamu->name) }}" data-fullname="{{ $tamu->name }}"
                        data-date="{{ $tamu->created_at->format('d M Y') }}" data-clock="{{ $tamu->created_at->format('H:i') }}" style="--i:{{ $i }}">
                        <td class="td-num">{{ $i + 1 }}</td>
                        <td class="td-guest">
                            <div class="guest">
                                <span class="avatar av{{ $i % 5 }}" aria-hidden="true">{{ mb_strtoupper(mb_substr($tamu->name, 0, 1)) }}</span>
                                <span class="td-name">{{ $tamu->name }}</span>
                            </div>
                        </td>
                        <td class="td-time">
                            {{ $tamu->created_at->format('d M Y') }}
                            <small>{{ $tamu->created_at->format('H:i') }}</small>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="no-result">&#x1F614; No guests found with that name.</div>
        </div>
    @endif

    <p class="footer">{{ $guests->count() }} guests registered in total</p>

</div>

<script>
/* ── Musik latar: looping terus, lanjut dari posisi terakhir ── */
(function () {
    var music = document.getElementById('bg-music');
    var btn   = document.getElementById('btn-music');
    if (!music) return;

    var TIME_KEY = 'bgMusicTime', PAUSE_KEY = 'bgMusicPaused';
    var userPaused = false;
    try { userPaused = sessionStorage.getItem(PAUSE_KEY) === '1'; } catch (e) {}

    music.loop = true;
    music.volume = 0.6;

    // Lanjutkan dari detik terakhir (berguna saat pindah halaman)
    music.addEventListener('loadedmetadata', function () {
        try {
            var t = parseFloat(sessionStorage.getItem(TIME_KEY));
            if (!isNaN(t) && t < music.duration) music.currentTime = t;
        } catch (e) {}
    });
    function saveTime() { try { sessionStorage.setItem(TIME_KEY, music.currentTime); } catch (e) {} }
    music.addEventListener('timeupdate', saveTime);
    window.addEventListener('pagehide', saveTime);

    function ui() {
        if (!btn) return;
        var on = !music.paused;
        btn.classList.toggle('playing', on);
        btn.classList.toggle('paused', !on);
        btn.setAttribute('aria-pressed', on ? 'true' : 'false');
        btn.textContent = on ? '🎵' : '🔇';
    }
    music.addEventListener('play', ui);
    music.addEventListener('pause', ui);

    // Jaga-jaga: kalau berhenti sendiri, putar lagi
    music.addEventListener('ended', function () { music.currentTime = 0; music.play().catch(function () {}); });

    var events = ['pointerdown', 'touchstart', 'keydown', 'click'];
    function unlock() {
        if (userPaused) return removeUnlock();
        music.play().then(removeUnlock).catch(function () {});
    }
    function removeUnlock() { events.forEach(function (ev) { document.removeEventListener(ev, unlock); }); }

    // Coba putar langsung; kalau diblokir, tunggu interaksi pertama
    if (!userPaused) {
        music.play().catch(function () {
            events.forEach(function (ev) { document.addEventListener(ev, unlock, { passive: true }); });
        });
    }
    ui();

    // Tombol play/mute
    if (btn) {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (music.paused) {
                userPaused = false;
                music.play().catch(function () {});
            } else {
                userPaused = true;
                music.pause();
            }
            try { sessionStorage.setItem(PAUSE_KEY, userPaused ? '1' : '0'); } catch (err) {}
        });
    }
})();

/* ── Back button: go to the previous page; fall back to the invitation page ── */
var btnBack = document.getElementById('btn-back');
if (btnBack) {
    btnBack.addEventListener('click', function (e) {
        try {
            if (document.referrer && new URL(document.referrer).origin === location.origin && history.length > 1) {
                e.preventDefault();
                history.back();
            }
        } catch (err) {}
    });
}

/* ── Search ── */
var input   = document.getElementById('search-input');
var rows    = document.querySelectorAll('#guest-table tbody tr');
var noRes   = document.getElementById('no-result');
var counter = document.getElementById('result-count');
if (input) {
    input.addEventListener('input', function () {
        var q = this.value.trim().toLowerCase(), vis = 0;
        rows.forEach(function (r) {
            var m = !q || r.dataset.name.includes(q);
            r.style.display = m ? '' : 'none';
            if (m) vis++;
        });
        if (noRes)   noRes.style.display = (q && vis === 0) ? 'block' : 'none';
        if (counter) counter.textContent = 'Showing ' + vis + ' of ' + rows.length + ' guests';
    });
}

/* ── Export CSV ── */
function csvCell(v) {
    v = String(v == null ? '' : v);
    if (/^[=+\-@\t\r]/.test(v)) v = "'" + v;          // prevent spreadsheet formula injection
    return '"' + v.replace(/"/g, '""') + '"';
}
var btnExp = document.getElementById('btn-export');
if (btnExp) {
    btnExp.addEventListener('click', function () {
        var lines = ['No,Guest Name,RSVP Time'];
        rows.forEach(function (row, i) {
            lines.push([i + 1, csvCell(row.dataset.fullname), csvCell(row.dataset.date + ' ' + row.dataset.clock)].join(','));
        });
        var blob = new Blob(['\uFEFF' + lines.join('\r\n')], { type: 'text/csv;charset=utf-8;' });
        var url = URL.createObjectURL(blob), a = document.createElement('a');
        a.href = url; a.download = 'guest-list-loviena-shelby.csv';
        document.body.appendChild(a); a.click(); document.body.removeChild(a); URL.revokeObjectURL(url);
    });
}
</script>
</body>
</html>