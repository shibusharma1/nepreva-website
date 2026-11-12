/**
 * Nepreva Global Solutions - Scripts
 * Unified JavaScript for all pages
 */
(function () {
    var reduce =
        window.matchMedia &&
        window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    var $ = function (s, r) {
        return (r || document).querySelector(s);
    };
    var $$ = function (s, r) {
        return [].slice.call((r || document).querySelectorAll(s));
    };
    var tick =
        '<svg viewBox="0 0 24 24"><path d="M5 12.5l4.5 4.5L19 7.5"/></svg>';
    var ico = function (n) {
        return '<svg class="ico"><use href="#' + n + '"/></svg>';
    };

    /* ---------- Navigation Dropdowns & Scrim ---------- */
    var drops = $$("[data-drop]"),
        scrim = document.getElementById("scrim"),
        tmr = null;
    function closeAll() {
        drops.forEach(function (b) {
            var target = document.getElementById(b.dataset.drop);
            if (target) target.classList.remove("open");
            b.setAttribute("aria-expanded", "false");
        });
        if (scrim) scrim.classList.remove("on");
    }
    function openD(b) {
        closeAll();
        var target = document.getElementById(b.dataset.drop);
        if (target) target.classList.add("open");
        b.setAttribute("aria-expanded", "true");
        if (scrim && !b.parentNode.classList.contains("sm"))
            scrim.classList.add("on");
    }
    var canHover =
        window.matchMedia &&
        window.matchMedia("(hover:hover) and (min-width:1021px)").matches;
    drops.forEach(function (b) {
        b.addEventListener("click", function (e) {
            e.stopPropagation();
            if (canHover) {
                openD(b);
            } else if (b.getAttribute("aria-expanded") === "true") {
                closeAll();
            } else {
                openD(b);
            }
        });
        if (canHover) {
            var li = b.parentNode;
            li.addEventListener("mouseenter", function () {
                clearTimeout(tmr);
                openD(b);
            });
            li.addEventListener("mouseleave", function () {
                tmr = setTimeout(closeAll, 200);
            });
        }
    });
    document.addEventListener("click", function (e) {
        if (!e.target.closest(".mega")) closeAll();
    });
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") closeAll();
    });
    if (scrim) scrim.addEventListener("click", closeAll);
    $$(".mega a").forEach(function (a) {
        a.addEventListener("click", closeAll);
    });

    /* ---------- Mobile Navigation Menu ---------- */
    var bg = document.getElementById("burger"),
        mn = document.getElementById("mnav");
    if (bg && mn) {
        bg.addEventListener("click", function () {
            var o = mn.classList.toggle("open");
            bg.setAttribute("aria-expanded", o);
        });
        $$("#mnav a").forEach(function (a) {
            a.addEventListener("click", function () {
                mn.classList.remove("open");
                bg.setAttribute("aria-expanded", "false");
            });
        });
    }

    /* ---------- Forms (design preview handler) ---------- */
    $$("form.pform").forEach(function (f) {
        f.addEventListener("submit", function (e) {
            // e.preventDefault();
            // var m = f.querySelector(".fmsg") || document.getElementById("fmsg");
            // if (m) {
            //     m.classList.add("show");
            //     m.textContent =
            //         "This is a design preview, so nothing was sent. On the live site this form goes to the Nepreva team, who reply within one business day.";
            // }
        });
    });

    /* ---------- Services Dropdown Pre-selector ---------- */
    function setSvc(n) {
        if (!n) return;
        $$("select[name=svc]").forEach(function (s) {
            for (var i = 0; i < s.options.length; i++) {
                if (s.options[i].text === n) s.selectedIndex = i;
            }
        });
    }
    var p = $(".pg.on");
    if (p) setSvc(p.dataset.svc);

    /* ---------- Category Filter Buttons (Insights page) ---------- */
    var fb = $$(".filters button");
    fb.forEach(function (b) {
        b.addEventListener("click", function () {
            fb.forEach(function (x) {
                x.setAttribute("aria-pressed", x === b);
            });
            var c = b.dataset.c;
            $$(".acard").forEach(function (a) {
                a.style.display =
                    c === "all" || a.dataset.cat === c ? "" : "none";
            });
        });
    });

    /* ---------- Engagement Board (Homepage) ---------- */
    var boardEl = document.getElementById("board");
    if (boardEl) {
        var DATA = {
            firm: {
                title: "Interim audit support: trade receivables",
                sub: "Working under your methodology and file structure",
                stages: [
                    {
                        n: "Prepared",
                        w: "Delivery team",
                        items: [
                            "Lead schedule agreed to the ledger",
                            "Confirmation sample selected from your criteria",
                            "Subsequent receipts tested",
                        ],
                    },
                    {
                        n: "Reviewed",
                        w: "Chartered Accountant reviewer",
                        items: [
                            "Testing re-performed on a sample",
                            "Review notes raised and logged",
                            "Review notes cleared and evidenced",
                        ],
                    },
                    {
                        n: "Delivered",
                        w: "To your engagement team",
                        items: [
                            "File indexed to your template",
                            "Handed over for your sign-off",
                            "Feedback captured for the next cycle",
                        ],
                    },
                ],
                foot: "Your methodology. Your sign-off.",
                chip: "Ready for your review",
            },
            biz: {
                title: "Month-end close: bank and accruals",
                sub: "Posted in your ledger, to your close calendar",
                stages: [
                    {
                        n: "Prepared",
                        w: "Delivery team",
                        items: [
                            "Bank reconciliations across all accounts",
                            "Accruals and prepayments schedule",
                            "Intercompany balances matched",
                        ],
                    },
                    {
                        n: "Reviewed",
                        w: "Chartered Accountant reviewer",
                        items: [
                            "Reconciling items cleared or explained",
                            "Variance commentary drafted",
                            "Management accounts tie to the ledger",
                        ],
                    },
                    {
                        n: "Delivered",
                        w: "To your finance lead",
                        items: [
                            "Close pack in your format",
                            "Handed over for your sign-off",
                            "Open points logged for next month",
                        ],
                    },
                ],
                foot: "Reviewed before it reaches you.",
                chip: "Ready for your sign-off",
            },
        };
        var timers = [],
            cur = "firm";
        function clearT() {
            timers.forEach(clearTimeout);
            timers = [];
        }
        function renderBoard(k) {
            cur = k;
            clearT();
            var d = DATA[k],
                total = 0,
                html = "";
            var bTitle = $("#bTitle"),
                bSub = $("#bSub"),
                stages = $("#stages"),
                bTot = $("#bTot"),
                bNum = $("#bNum"),
                bBar = $("#bBar"),
                chip = $("#bChip"),
                bFootTxt = $("#bFootTxt");

            if (bTitle) bTitle.textContent = d.title;
            if (bSub) bSub.textContent = d.sub;
            d.stages.forEach(function (s, i) {
                html +=
                    '<li class="stage" data-s="' +
                    i +
                    '"><div class="st-h"><span class="st-dot">' +
                    tick +
                    "</span><b>" +
                    s.n +
                    '</b><span class="who">' +
                    s.w +
                    "</span></div><ul>" +
                    s.items
                        .map(function (t) {
                            total++;
                            return '<li class="it">' + t + "</li>";
                        })
                        .join("") +
                    "</ul></li>";
            });
            if (stages) stages.innerHTML = html;
            if (bTot) bTot.textContent = total;
            if (bNum) bNum.textContent = 0;
            if (bBar) bBar.style.width = "0";
            if (chip) {
                chip.className = "chip";
                chip.textContent = "In the review chain";
            }
            if (bFootTxt) bFootTxt.textContent = "Work in progress";

            var its = [].slice.call(document.querySelectorAll("#stages .it"));
            function setN(n) {
                if (bNum) bNum.textContent = n;
                if (bBar) bBar.style.width = (n / total) * 100 + "%";
                document
                    .querySelectorAll("#stages .stage")
                    .forEach(function (st) {
                        var all = st.querySelectorAll(".it"),
                            on = st.querySelectorAll(".it.on");
                        st.classList.toggle("done", all.length === on.length);
                    });
                if (n === total) {
                    if (chip) {
                        chip.className = "chip ready";
                        chip.textContent = d.chip;
                    }
                    if (bFootTxt) bFootTxt.textContent = d.foot;
                }
            }
            if (reduce) {
                its.forEach(function (e) {
                    e.classList.add("on");
                });
                setN(total);
                return;
            }
            its.forEach(function (e, i) {
                timers.push(
                    setTimeout(
                        function () {
                            e.classList.add("on");
                            setN(i + 1);
                        },
                        650 + i * 520,
                    ),
                );
            });
        }

        document.querySelectorAll("#board .seg button").forEach(function (b) {
            b.addEventListener("click", function () {
                document
                    .querySelectorAll("#board .seg button")
                    .forEach(function (x) {
                        x.setAttribute("aria-selected", x === b);
                    });
                renderBoard(b.dataset.k);
            });
        });
        renderBoard("firm");
    }

    /* ---------- Engagement Models Tabs (Homepage) ---------- */
    var mt = $("#mtabs"),
        mp = $("#mpanel");
    if (mt && mp) {
        var MODELS = [
            {
                n: "Dedicated team",
                b: "Best when you have steady, ongoing volume and want a named team that learns your business.",
                f: [
                    "A named team working exclusively on your engagements",
                    "Learns your clients, templates and conventions",
                    "Grows by adding people to the same team",
                ],
            },
            {
                n: "Managed service",
                b: "Best when you want an outcome, such as a close, a payroll or a report set, delivered against agreed SLAs.",
                f: [
                    "Outcome-based scope with agreed service levels",
                    "Performance reported against those levels",
                    "Nepreva manages the team and the capacity",
                ],
            },
            {
                n: "Project support",
                b: "Best for defined-scope work such as a clean-up, a model or a one-off review.",
                f: [
                    "Fixed scope and an agreed timeline",
                    "A clear hand-over at the end",
                    "A low-risk first step before a longer engagement",
                ],
            },
            {
                n: "Peak-season capacity",
                b: "Best for filing seasons and deadline spikes that outpace your headcount.",
                f: [
                    "Capacity added for the weeks you need it",
                    "Scaled back once the peak passes",
                    "No recruitment cycle each time",
                ],
            },
            {
                n: "Hybrid delivery",
                b: "Best when a stable core is complemented by periodic surges.",
                f: [
                    "A dedicated core team",
                    "Flexible capacity layered on top as volume changes",
                    "One governance structure across both",
                ],
            },
        ];
        MODELS.forEach(function (m, i) {
            var b = document.createElement("button");
            b.setAttribute("role", "tab");
            b.setAttribute("aria-selected", i === 0);
            b.textContent = m.n;
            b.addEventListener("click", function () {
                mt.querySelectorAll("button").forEach(function (x) {
                    x.setAttribute("aria-selected", x === b);
                });
                showModel(i);
            });
            mt.appendChild(b);
        });
        function showModel(i) {
            var m = MODELS[i];
            mp.innerHTML =
                "<h3>" +
                m.n +
                '</h3><p class="best">' +
                m.b +
                "</p><ul>" +
                m.f
                    .map(function (t) {
                        return "<li>" + ico("i-check") + t + "</li>";
                    })
                    .join("") +
                "</ul>";
        }
        showModel(0);
    }

    /* ---------- Quality Chain Tabs (Homepage) ---------- */
    var pp = $("#pipe"),
        pd = $("#pdetail");
    if (pp && pd) {
        var QC = [
            {
                n: "Brief",
                i: "i-doc",
                t: "Your instructions come first",
                p: "Your methodology, templates and instructions are documented before work starts. The team follows them as given, rather than substituting a generic default.",
                c: [
                    "Documented standard operating procedures",
                    "Client-specific instructions and templates",
                    "Defined preparer, reviewer and partner roles",
                    "Agreed turnaround and escalation path",
                ],
            },
            {
                n: "Prepare",
                i: "i-pen",
                t: "Prepared against procedure",
                p: "The preparer completes the work against the documented procedure and self-checks it before it moves on. Automation is used where it removes repetitive effort.",
                c: [
                    "Preparer self-check",
                    "Work performed in your systems",
                    "Automated outputs flagged for human review",
                    "Supporting documentation filed as work proceeds",
                ],
            },
            {
                n: "Review",
                i: "i-eye",
                t: "An independent second pair of eyes",
                p: "A reviewer separate from the preparer performs maker-checker review. Review notes are logged and tracked until they are closed, never left informal.",
                c: [
                    "Maker-checker on every deliverable",
                    "Review notes tracked to closure",
                    "Chartered Accountant reviewer",
                    "Exceptions escalated, not absorbed",
                ],
            },
            {
                n: "Sign-off",
                i: "i-usercheck",
                t: "Partner accountability",
                p: "Technical and partner-level sign-off happens before anything leaves Nepreva. A named partner is accountable for each engagement.",
                c: [
                    "Technical review before client delivery",
                    "Named partner oversight",
                    "Human review of all automated outputs",
                    "Quality record retained",
                ],
            },
            {
                n: "Deliver",
                i: "i-send",
                t: "Ready for your own sign-off",
                p: "You receive work that is ready for your review and approval. Your feedback goes back into the brief, so the next cycle starts better than the last.",
                c: [
                    "Delivered in your format",
                    "Handed over for your sign-off",
                    "Client feedback captured",
                    "Improvements fed into the next cycle",
                ],
            },
        ];
        QC.forEach(function (q, i) {
            var b = document.createElement("button");
            b.className = "node";
            b.setAttribute("role", "tab");
            b.setAttribute("aria-selected", i === 0);
            b.innerHTML =
                '<span class="dot">' + ico(q.i) + "</span><b>" + q.n + "</b>";
            b.addEventListener("click", function () {
                pp.querySelectorAll(".node").forEach(function (x) {
                    x.setAttribute("aria-selected", x === b);
                });
                showQ(i);
            });
            pp.appendChild(b);
        });
        function showQ(i) {
            var q = QC[i];
            pd.innerHTML =
                "<div><h3>" +
                q.t +
                "</h3><p>" +
                q.p +
                '</p></div><div class="ctl">' +
                q.c
                    .map(function (t) {
                        return (
                            "<div>" +
                            ico("i-check") +
                            "<span>" +
                            t +
                            "</span></div>"
                        );
                    })
                    .join("") +
                "</div>";
        }
        showQ(0);
    }

    /* ---------- Time-zone Overlap (Homepage) ---------- */
    var zt = $("#ztabs"),
        tr = $("#track");
    if (zt && tr) {
        var NP = 5.75,
            S = 9 * 60,
            E = 17.5 * 60; // office hours in minutes
        var Z = [
            { n: "United Kingdom", off: 0 },
            { n: "Gulf", off: 4 },
            { n: "Australia (Sydney)", off: 11 },
            { n: "Canada (Eastern)", off: -5 },
        ];
        Z.forEach(function (z, i) {
            var b = document.createElement("button");
            b.setAttribute("role", "tab");
            b.setAttribute("aria-selected", i === 0);
            b.textContent = z.n;
            b.addEventListener("click", function () {
                zt.querySelectorAll("button").forEach(function (x) {
                    x.setAttribute("aria-selected", x === b);
                });
                drawZ(i);
            });
            zt.appendChild(b);
        });
        function drawZ(i) {
            var z = Z[i],
                shift = (NP - z.off) * 60; // client local -> Nepal time
            var cs = S + shift,
                ce = E + shift; // client band in Nepal time (minutes)
            var parts = [];
            var a = ((cs % 1440) + 1440) % 1440,
                len = ce - cs,
                b = a + len;
            if (b <= 1440) {
                parts.push([a, b]);
            } else {
                parts.push([a, 1440]);
                parts.push([0, b - 1440]);
            }
            var ov = 0,
                ovParts = [];
            parts.forEach(function (p) {
                var lo = Math.max(p[0], S),
                    hi = Math.min(p[1], E);
                if (hi > lo) {
                    ov += hi - lo;
                    ovParts.push([lo, hi]);
                }
            });
            var pc = function (m) {
                    return (m / 1440) * 100 + "%";
                },
                w = function (a, b) {
                    return ((b - a) / 1440) * 100 + "%";
                };
            var h = "";
            for (var t = 0; t <= 24; t += 3)
                h += '<i class="gl" style="left:' + pc(t * 60) + '"></i>';
            h +=
                '<div class="lane l1"><div class="seg-b seg-n" style="left:' +
                pc(S) +
                ";width:" +
                w(S, E) +
                '"></div><span class="lane-l" style="left:' +
                pc(S) +
                ';margin-left:8px">Nepal team</span></div>';
            h +=
                '<div class="lane l2">' +
                parts
                    .map(function (p) {
                        return (
                            '<div class="seg-b seg-c" style="left:' +
                            pc(p[0]) +
                            ";width:" +
                            w(p[0], p[1]) +
                            '"></div>'
                        );
                    })
                    .join("") +
                '<span class="lane-l" style="left:' +
                pc(parts[0][0]) +
                ';margin-left:8px">Your team</span></div>';
            h +=
                '<div class="lane l3">' +
                ovParts
                    .map(function (p) {
                        return (
                            '<div class="seg-b seg-o" style="top:0;bottom:0;left:' +
                            pc(p[0]) +
                            ";width:" +
                            w(p[0], p[1]) +
                            '"></div>'
                        );
                    })
                    .join("") +
                "</div>";
            h += '<div class="ticks">';
            for (var t2 = 0; t2 <= 24; t2 += 3)
                h +=
                    '<span style="left:' +
                    pc(t2 * 60) +
                    '">' +
                    (t2 === 24 ? "24" : String(t2).padStart(2, "0")) +
                    "</span>";
            h += "</div>";
            tr.innerHTML = h;
            var hrs = ov / 60;
            var tzBig = $("#tzBig"),
                tzTxt = $("#tzTxt");
            if (hrs > 0) {
                if (tzBig)
                    tzBig.textContent =
                        (Math.round(hrs * 100) / 100)
                            .toString()
                            .replace(/\.0+$/, "") + " hrs";
                if (tzTxt)
                    tzTxt.textContent =
                        "of shared working time with " +
                        z.n +
                        " each day, so questions get answered live.";
            } else {
                if (tzBig) tzBig.textContent = "Overnight";
                if (tzTxt)
                    tzTxt.textContent =
                        "No shared hours. Work handed over at your close is waiting, reviewed, when your team opens the next morning.";
            }
        }
        drawZ(0);
    }

    /* ---------- Sticky Mobile CTA (Homepage) ---------- */
    var mc = $("#mcta"),
        hero = $(".hero"),
        fin = $("#start");
    if (mc && hero && fin) {
        function onS() {
            var y = window.scrollY || 0,
                hb = hero.offsetTop + hero.offsetHeight - 120,
                fr = fin.getBoundingClientRect();
            mc.classList.toggle(
                "show",
                y > hb && fr.top > window.innerHeight * 0.6,
            );
        }
        window.addEventListener("scroll", onS, { passive: true });
        onS();
    }
})();
