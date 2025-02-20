<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Dashboard | TailAdmin - Tailwind CSS Admin Dashboard Template
    </title>
    <link rel="icon" href="favicon.ico" />
    <link href="{{ asset('assets/css/output.css') }}" rel="stylesheet" />

    <script nonce="bf0997af-b41f-4b21-9bd5-1b13b25959ce">
        try {
            (function(w, d) {
                !(function(j, k, l, m) {
                    if (j.zaraz) console.error("zaraz is loaded twice");
                    else {
                        j[l] = j[l] || {};
                        j[l].executed = [];
                        j.zaraz = {
                            deferred: [],
                            listeners: []
                        };
                        j.zaraz._v = "5796";
                        j.zaraz.q = [];
                        j.zaraz._f = function(n) {
                            return async function() {
                                var o = Array.prototype.slice.call(arguments);
                                j.zaraz.q.push({
                                    m: n,
                                    a: o
                                });
                            };
                        };
                        for (const p of ["track", "set", "debug"])
                            j.zaraz[p] = j.zaraz._f(p);
                        j.zaraz.init = () => {
                            var q = k.getElementsByTagName(m)[0],
                                r = k.createElement(m),
                                s = k.getElementsByTagName("title")[0];
                            s && (j[l].t = k.getElementsByTagName("title")[0].text);
                            j[l].x = Math.random();
                            j[l].w = j.screen.width;
                            j[l].h = j.screen.height;
                            j[l].j = j.innerHeight;
                            j[l].e = j.innerWidth;
                            j[l].l = j.location.href;
                            j[l].r = k.referrer;
                            j[l].k = j.screen.colorDepth;
                            j[l].n = k.characterSet;
                            j[l].o = new Date().getTimezoneOffset();
                            if (j.dataLayer)
                                for (const w of Object.entries(
                                        Object.entries(dataLayer).reduce(
                                            (x, y) => ({
                                                ...x[1],
                                                ...y[1]
                                            }), {}
                                        )
                                    ))
                                    zaraz.set(w[0], w[1], {
                                        scope: "page"
                                    });
                            j[l].q = [];
                            for (; j.zaraz.q.length;) {
                                const z = j.zaraz.q.shift();
                                j[l].q.push(z);
                            }
                            r.defer = !0;
                            for (const A of [localStorage, sessionStorage])
                                Object.keys(A || {})
                                .filter((C) => C.startsWith("_zaraz_"))
                                .forEach((B) => {
                                    try {
                                        j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B));
                                    } catch {
                                        j[l]["z_" + B.slice(7)] = A.getItem(B);
                                    }
                                });
                            r.referrerPolicy = "origin";
                            r.src =
                                "cdn-cgi/zaraz/sd0d9.js?z=" +
                                btoa(encodeURIComponent(JSON.stringify(j[l])));
                            q.parentNode.insertBefore(r, q);
                        };
                        ["complete", "interactive"].includes(k.readyState) ?
                            zaraz.init() :
                            j.addEventListener("DOMContentLoaded", zaraz.init);
                    }
                })(w, d, "zarazData", "script");
                window.zaraz._p = async (bv) =>
                    new Promise((bw) => {
                        if (bv) {
                            bv.e &&
                                bv.e.forEach((bx) => {
                                    try {
                                        const by = d.querySelector("script[nonce]"),
                                            bz = by?.nonce || by?.getAttribute("nonce"),
                                            bA = d.createElement("script");
                                        bz && (bA.nonce = bz);
                                        bA.innerHTML = bx;
                                        bA.onload = () => {
                                            d.head.removeChild(bA);
                                        };
                                        d.head.appendChild(bA);
                                    } catch (bB) {
                                        console.error(`Error executing script: ${bx}\n`, bB);
                                    }
                                });
                            Promise.allSettled(
                                (bv.f || []).map((bC) => fetch(bC[0], bC[1]))
                            );
                        }
                        bw();
                    });
                zaraz._p({
                    e: ["(function(w,d){})(window,document)"]
                });
            })(window, document);
        } catch (e) {
            throw (fetch("/cdn-cgi/zaraz/t"), e);
        }
    </script>
</head>

<body
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">

    @yield('content_init')

    <script defer src="{{ asset('assets/js/bundle.js') }}"></script>
    <script
        defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8bceb63988b3a8da","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"67f7a278e3374824ae6dd92295d38f77","b":1}'
        crossorigin="anonymous"></script>
</body>

</html>