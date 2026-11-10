<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>About Nepreva | Independent Global Delivery Company</title>
    <meta name="description"
        content="Nepreva Global Solutions is an independent, Chartered Accountant-led global delivery company based in Kathmandu, supported by NBSM.">
    <meta name="theme-color" content="#142640">
    <style>
        :root {
            box-sizing: border-box;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px);
            --paper: #F4F6FA;
            --surface: #FFFFFF;
            --ink: #142640;
            --text: #1E2D4A;
            --muted: #566079;
            --line: #DCE1EE;
            --line-strong: #C3CBE0;
            --cobalt: #1F3A74;
            --cobalt-700: #162C5B;
            --cobalt-50: #E8EDF7;
            --cobalt-100: #D3DCEE;
            --night: #142640;
            --night-2: #1B3156;
            --night-3: #223C69;
            --on-night: #EAEEF9;
            --on-night-muted: #A8B3D3;
            --night-line: rgba(255, 255, 255, .12);
            --lime: #83BD42;
            --lime-ink: #4C7716;
            --lime-50: #EEF6DF;
            --btn: #1F3A74;
            --btn-hover: #162C5B;
            --link: #1F3A74;
            --shadow: 0 1px 2px rgba(20, 38, 64, .06), 0 14px 34px -14px rgba(20, 38, 64, .22);
            --header-bg: rgba(244, 246, 251, .88);
            --serif: Arial, "Helvetica Neue", Helvetica, sans-serif;
            --sans: Arial, "Helvetica Neue", Helvetica, sans-serif;
            color-scheme: light;
        }

        @media (prefers-color-scheme:dark) {
            :root:not([data-theme="light"]) {
                --paper: #0A1229;
                --surface: #111B39;
                --ink: #F2F5FD;
                --text: #D9E0F2;
                --muted: #9AA7C8;
                --line: #22305A;
                --line-strong: #33457D;
                --cobalt-50: #16264A;
                --cobalt-100: #1C2D63;
                --btn: #3A62D2;
                --btn-hover: #4E74E0;
                --link: #9DB6F5;
                --lime-ink: #A5D65F;
                --lime-50: #1B2A14;
                --shadow: 0 1px 2px rgba(0, 0, 0, .4), 0 14px 34px -14px rgba(0, 0, 0, .6);
                --header-bg: rgba(10, 18, 41, .88);
                color-scheme: dark;
            }
        }

        :root[data-theme="dark"] {
            --paper: #0A1229;
            --surface: #111B39;
            --ink: #F2F5FD;
            --text: #D9E0F2;
            --muted: #9AA7C8;
            --line: #22305A;
            --line-strong: #33457D;
            --cobalt-50: #16264A;
            --cobalt-100: #1C2D63;
            --btn: #3A62D2;
            --btn-hover: #4E74E0;
            --link: #9DB6F5;
            --lime-ink: #A5D65F;
            --lime-50: #1B2A14;
            --shadow: 0 1px 2px rgba(0, 0, 0, .4), 0 14px 34px -14px rgba(0, 0, 0, .6);
            --header-bg: rgba(10, 18, 41, .88);
            color-scheme: dark;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: calc(env(safe-area-inset-top, 0px) + 84px);
            -webkit-text-size-adjust: 100%
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit
        }

        body {
            margin: 0;
            background: var(--paper);
            color: var(--text);
            font-family: var(--sans);
            font-size: 17px;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0 0 auto;
            height: env(safe-area-inset-top, 0px);
            z-index: 60;
            background: var(--header-bg);
            -webkit-backdrop-filter: blur(14px);
            backdrop-filter: blur(14px)
        }

        img,
        svg {
            display: block;
            max-width: 100%
        }

        a {
            color: inherit;
            text-decoration: none
        }

        h1,
        h2,
        h3,
        h4,
        p,
        ul,
        ol {
            margin: 0
        }

        ul,
        ol {
            padding: 0;
            list-style: none
        }

        button {
            font: inherit;
            color: inherit;
            cursor: pointer
        }

        :focus-visible {
            outline: 3px solid var(--lime);
            outline-offset: 3px;
            border-radius: 6px
        }

        .skip {
            position: absolute;
            left: -999px;
            top: 8px;
            background: var(--cobalt);
            color: #fff;
            padding: 10px 16px;
            border-radius: 8px;
            z-index: 100
        }

        .skip:focus {
            left: 12px
        }

        .wrap {
            width: min(1240px, 100% - 2*clamp(20px, 4vw, 48px));
            margin-inline: auto
        }

        .sec {
            padding-block: clamp(48px, 5.5vw, 80px)
        }

        .serif {
            font-family: var(--serif)
        }

        h1,
        h2 {
            font-family: var(--serif);
            font-weight: 500;
            color: var(--ink);
            letter-spacing: -.022em
        }

        h1 {
            font-size: clamp(2.7rem, 5.3vw, 4.7rem);
            line-height: 1.03
        }

        h2 {
            font-size: clamp(2rem, 3.7vw, 3.15rem);
            line-height: 1.08
        }

        h3 {
            font-family: var(--sans);
            font-weight: 600;
            font-size: 1.14rem;
            line-height: 1.3;
            color: var(--ink);
            letter-spacing: -.005em
        }

        .lead {
            font-size: clamp(1.05rem, 1.4vw, 1.2rem);
            line-height: 1.62;
            color: var(--muted);
            max-width: 56ch
        }

        .small {
            font-size: .9rem;
            color: var(--muted)
        }

        .ico {
            width: 22px;
            height: 22px;
            fill: none;
            stroke: currentColor;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
            flex: none
        }

        @media (prefers-color-scheme:dark){:root:not([data-theme="light"]) .logo .ll{display:none}:root:not([data-theme="light"]) .logo .ld {
            display:block
        }
        }

        :root[data-theme="dark"] .logo .ll{display:none}:root[data-theme="dark"] .logo .ld {
            display: block
        }

        /* buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 52px;
            padding: 0 26px;
            border-radius: 10px;
            border: 1.5px solid transparent;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: -.005em;
            transition: background .2s, border-color .2s, color .2s, transform .2s;
            white-space: nowrap
        }

        .btn-primary {
            background: var(--btn);
            color: #fff
        }

        .btn-primary:hover {
            background: var(--btn-hover)
        }

        .btn-ghost {
            border-color: var(--line-strong);
            color: var(--ink);
            background: transparent
        }

        .btn-ghost:hover {
            border-color: var(--ink)
        }

        .btn-lime {
            background: var(--lime);
            color: #142640
        }

        .btn-lime:hover {
            background: #97CC55
        }

        .btn-light {
            background: #fff;
            color: #142640
        }

        .btn-light:hover {
            background: #E8EDF7
        }

        .btn-line-light {
            border-color: rgba(255, 255, 255, .35);
            color: #fff
        }

        .btn-line-light:hover {
            border-color: #fff
        }

        .btn-sm {
            min-height: 44px;
            padding: 0 20px;
            font-size: .95rem
        }

        .tlink {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            color: var(--link);
            border-bottom: 1.5px solid transparent;
            padding-bottom: 2px
        }

        :root[data-theme="dark"] .tlink {
            color: #9DB6F5
        }

        .tlink:hover {
            border-color: currentColor
        }

        .tlink .ico {
            width: 18px;
            height: 18px;
            transition: transform .2s
        }

        .tlink:hover .ico {
            transform: translateX(3px)
        }

        /* header */
        .hdr {
            position: sticky;
            top: env(safe-area-inset-top, 0px);
            z-index: 50;
            background: var(--header-bg);
            -webkit-backdrop-filter: blur(14px);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--line)
        }

        .hdr-in {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            height: 76px
        }

        .logo img {
            height: 34px;
            width: auto
        }

        .logo .ld {
            display: none
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 6px
        }

        .nav>li {
            position: relative
        }

        .nav a.nl,
        .nav button.nl {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 14px;
            border: 0;
            background: none;
            border-radius: 8px;
            font-weight: 500;
            font-size: .98rem;
            color: var(--text)
        }

        .nav a.nl:hover,
        .nav button.nl:hover,
        .nav button.nl[aria-expanded="true"] {
            background: var(--cobalt-50);
            color: var(--ink)
        }

        .nav .ico {
            width: 16px;
            height: 16px
        }

        .drop {
            position: absolute;
            left: -40px;
            top: calc(100% + 10px);
            width: min(680px, 92vw);
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 16px;
            box-shadow: var(--shadow);
            padding: 22px;
            display: none;
            grid-template-columns: .8fr 1.2fr;
            gap: 24px
        }

        .drop.open {
            display: grid
        }

        .drop h4 {
            font-size: .8rem;
            font-weight: 600;
            color: var(--muted);
            margin-bottom: 10px;
            letter-spacing: .01em
        }

        .drop a {
            display: block;
            padding: 9px 12px;
            border-radius: 8px;
            font-weight: 500;
            color: var(--ink);
            font-size: .97rem
        }

        .drop a small {
            display: block;
            font-weight: 400;
            color: var(--muted);
            font-size: .85rem;
            line-height: 1.4;
            margin-top: 2px
        }

        .drop a:hover {
            background: var(--cobalt-50)
        }

        .drop .cols2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0 8px
        }

        .hdr-cta {
            display: flex;
            align-items: center;
            gap: 18px
        }

        .hdr-cta .tl {
            font-weight: 600;
            font-size: .96rem;
            color: var(--ink)
        }

        .hdr-cta .tl:hover {
            color: var(--link)
        }

        .burger {
            display: none;
            width: 46px;
            height: 46px;
            border-radius: 10px;
            border: 1.5px solid var(--line-strong);
            background: transparent;
            align-items: center;
            justify-content: center
        }

        .mnav {
            display: none;
            border-top: 1px solid var(--line);
            background: var(--surface);
            padding: 12px 0 22px
        }

        .mnav.open {
            display: block
        }

        .mnav a {
            display: block;
            padding: 13px 4px;
            font-weight: 600;
            color: var(--ink);
            border-bottom: 1px solid var(--line)
        }

        .mnav .btn {
            margin-top: 18px;
            width: 100%
        }

        @media (max-width:1020px) {

            .nav,
            .hdr-cta .tl,
            .hdr-cta .btn {
                display: none
            }

            .burger {
                display: inline-flex
            }
        }

        /* hero */
        .hero {
            position: relative;
            overflow: hidden;
            padding-block: clamp(32px, 4vw, 56px) clamp(40px, 5vw, 64px)
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: linear-gradient(var(--line) 1px, transparent 1px), linear-gradient(90deg, var(--line) 1px, transparent 1px);
            background-size: 64px 64px;
            opacity: .55;
            -webkit-mask-image: radial-gradient(ellipse 70% 80% at 78% 30%, #000 0%, transparent 72%);
            mask-image: radial-gradient(ellipse 70% 80% at 78% 30%, #000 0%, transparent 72%);
            pointer-events: none
        }

        .hero-mark {
            position: absolute;
            right: -40px;
            top: 30px;
            width: min(560px, 52vw);
            opacity: .055;
            pointer-events: none
        }

        .hero-grid {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1.04fr) minmax(0, .96fr);
            gap: clamp(32px, 5vw, 72px);
            align-items: center
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 7px 14px 7px 12px;
            border: 1px solid var(--line-strong);
            border-radius: 999px;
            background: var(--surface);
            font-size: .9rem;
            font-weight: 500;
            color: var(--text);
            margin-bottom: 26px
        }

        .status i {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--lime);
            box-shadow: 0 0 0 4px rgba(131, 189, 66, .22)
        }

        .hero h1 {
            max-width: 15ch
        }

        .hero .tag {
            font-family: var(--serif);
            font-size: clamp(1.3rem, 2vw, 1.7rem);
            line-height: 1.3;
            color: var(--link);
            margin-top: 22px;
            font-weight: 500
        }

        :root[data-theme="dark"] .hero .tag {
            color: #9DB6F5
        }

        .hero .lead {
            margin-top: 18px
        }

        .hero .ctas {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 34px
        }

        .creds {
            display: flex;
            flex-wrap: wrap;
            gap: 12px 28px;
            margin-top: 34px;
            font-size: .95rem;
            font-weight: 500;
            color: var(--text)
        }

        .creds li {
            display: inline-flex;
            align-items: center;
            gap: 9px
        }

        .creds .ico {
            width: 18px;
            height: 18px;
            color: var(--lime-ink);
            stroke-width: 2.2
        }

        /* engagement board */
        .board {
            background: linear-gradient(160deg, var(--night-2), var(--night));
            color: var(--on-night);
            border-radius: 22px;
            padding: 22px 22px 20px;
            box-shadow: 0 2px 4px rgba(20, 38, 64, .2), 0 40px 70px -30px rgba(20, 38, 64, .55);
            border: 1px solid rgba(255, 255, 255, .08);
            position: relative
        }

        .board-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: .82rem;
            color: var(--on-night-muted);
            margin-bottom: 14px
        }

        .board-top b {
            font-weight: 600;
            color: var(--on-night);
            font-size: .9rem
        }

        .board-top .ill {
            padding: 3px 10px;
            border: 1px dashed rgba(255, 255, 255, .28);
            border-radius: 999px
        }

        .seg {
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: rgba(255, 255, 255, .07);
            border-radius: 12px;
            padding: 4px;
            gap: 4px
        }

        .seg button {
            border: 0;
            background: transparent;
            color: var(--on-night-muted);
            padding: 10px 8px;
            border-radius: 9px;
            font-weight: 600;
            font-size: .92rem;
            transition: background .2s, color .2s
        }

        .seg button[aria-selected="true"] {
            background: #fff;
            color: #142640
        }

        .b-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 16px;
            margin: 20px 2px 10px
        }

        .b-title {
            font-family: var(--serif);
            font-size: 1.45rem;
            line-height: 1.15;
            color: #fff;
            font-weight: 500;
            letter-spacing: -.01em
        }

        .b-sub {
            font-size: .86rem;
            color: var(--on-night-muted);
            margin-top: 4px
        }

        .b-count {
            font-family: var(--serif);
            font-size: 2rem;
            line-height: 1;
            color: #fff;
            white-space: nowrap;
            font-variant-numeric: tabular-nums
        }

        .b-count small {
            font-family: var(--sans);
            font-size: .85rem;
            color: var(--on-night-muted);
            margin-left: 4px
        }

        .bar {
            height: 6px;
            background: rgba(255, 255, 255, .1);
            border-radius: 6px;
            overflow: hidden;
            margin: 0 2px 18px
        }

        .bar i {
            display: block;
            height: 100%;
            width: 0;
            background: var(--lime);
            border-radius: 6px;
            transition: width .45s ease
        }

        .stages {
            display: grid;
            gap: 10px
        }

        .stage {
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 14px;
            padding: 14px 16px
        }

        .st-h {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px
        }

        .st-dot {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, .3);
            display: grid;
            place-items: center;
            transition: all .3s;
            flex: none
        }

        .st-dot svg {
            width: 12px;
            height: 12px;
            stroke: #142640;
            stroke-width: 3;
            fill: none;
            opacity: 0;
            stroke-linecap: round;
            stroke-linejoin: round
        }

        .stage.done .st-dot {
            background: var(--lime);
            border-color: var(--lime)
        }

        .stage.done .st-dot svg {
            opacity: 1
        }

        .st-h b {
            font-size: .98rem;
            color: #fff;
            font-weight: 600
        }

        .st-h .who {
            margin-left: auto;
            font-size: .8rem;
            color: var(--on-night-muted)
        }

        .stage ul {
            display: grid;
            gap: 6px;
            padding-left: 30px
        }

        .it {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            font-size: .9rem;
            line-height: 1.4;
            color: rgba(234, 238, 249, .5);
            transition: color .35s
        }

        .it::before {
            content: "";
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .25);
            margin-top: .5em;
            flex: none;
            transition: background .35s
        }

        .it.on {
            color: #EAEEF9
        }

        .it.on::before {
            background: var(--lime)
        }

        .b-foot {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-top: 16px;
            padding: 0 2px;
            font-size: .88rem;
            color: var(--on-night-muted)
        }

        .chip {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 14px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .86rem;
            background: rgba(255, 255, 255, .1);
            color: #fff;
            transition: all .3s
        }

        .chip.ready {
            background: var(--lime);
            color: #142640
        }

        @media (max-width:980px) {
            .hero-grid {
                grid-template-columns: 1fr
            }

            .hero h1 {
                max-width: 16ch
            }
        }

        /* proof */
        .proof {
            border-block: 1px solid var(--line);
            background: var(--surface)
        }

        .proof ul {
            display: grid;
            grid-template-columns: repeat(4, 1fr)
        }

        .proof li {
            padding: 26px 28px;
            border-left: 1px solid var(--line)
        }

        .proof li:first-child {
            border-left: 0;
            padding-left: 0
        }

        .proof strong {
            display: block;
            font-family: var(--serif);
            font-weight: 500;
            font-size: clamp(2.4rem, 4vw, 3.4rem);
            line-height: 1;
            color: var(--ink);
            letter-spacing: -.02em
        }

        .proof span {
            display: block;
            margin-top: 10px;
            font-size: .95rem;
            color: var(--muted);
            max-width: 22ch
        }

        @media (max-width:780px) {
            .proof ul {
                grid-template-columns: 1fr 1fr
            }

            .proof li {
                padding: 26px 18px
            }

            .proof li:nth-child(odd) {
                border-left: 0;
                padding-left: 0
            }

            .proof li:nth-child(n+3) {
                border-top: 1px solid var(--line)
            }
        }

        /* solve */
        .head-split {
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
            gap: clamp(24px, 5vw, 80px);
            align-items: end;
            margin-bottom: clamp(24px, 3vw, 40px)
        }

        @media (max-width:900px) {
            .head-split {
                grid-template-columns: 1fr
            }
        }

        .paths {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px
        }

        .path {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: clamp(28px, 3.4vw, 44px);
            border-radius: 22px;
            border: 1px solid var(--line);
            background: var(--surface);
            transition: border-color .25s, box-shadow .25s
        }

        .path:hover {
            border-color: var(--link);
            box-shadow: var(--shadow)
        }

        .path.alt {
            background: var(--cobalt);
            border-color: var(--link);
            color: #E6ECFB
        }

        .path.alt h3,
        .path.alt .path-t {
            color: #fff
        }

        .path.alt .tlink {
            color: #fff
        }

        .path-t {
            font-family: var(--serif);
            font-size: clamp(1.7rem, 2.6vw, 2.2rem);
            line-height: 1.12;
            font-weight: 500;
            color: var(--ink);
            letter-spacing: -.015em
        }

        .path p.pp {
            font-size: 1.06rem;
            color: inherit;
            opacity: .9
        }

        .path ul {
            display: grid;
            gap: 12px;
            margin-top: 4px
        }

        .path li {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            font-size: .98rem;
            line-height: 1.45
        }

        .path li .ico {
            width: 18px;
            height: 18px;
            color: var(--lime-ink);
            stroke-width: 2.2;
            margin-top: 2px
        }

        .path.alt li .ico {
            color: var(--lime)
        }

        .path .tlink {
            margin-top: auto;
            padding-top: 6px;
            align-self: flex-start
        }

        @media (max-width:860px) {
            .paths {
                grid-template-columns: 1fr
            }
        }

        /* constraints */
        .band {
            background: var(--surface);
            border-block: 1px solid var(--line)
        }

        .cons {
            display: grid;
            grid-template-columns: minmax(0, .95fr) minmax(0, 1.05fr);
            gap: clamp(32px, 6vw, 96px);
            align-items: start
        }

        .cons-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-top: 1px solid var(--line-strong)
        }

        .cons-grid>div {
            padding: 26px 22px 26px 0;
            border-bottom: 1px solid var(--line)
        }

        .cons-grid>div:nth-child(even) {
            padding-left: 26px;
            padding-right: 0;
            border-left: 1px solid var(--line)
        }

        .cons-grid h3 {
            font-size: 1.25rem;
            margin-bottom: 8px
        }

        .cons-grid p {
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.55
        }

        .cons-quote {
            margin-top: clamp(40px, 5vw, 72px);
            font-family: var(--serif);
            font-size: clamp(1.6rem, 2.9vw, 2.4rem);
            line-height: 1.2;
            letter-spacing: -.015em;
            color: var(--ink);
            max-width: 28ch;
            font-weight: 500
        }

        @media (max-width:900px) {
            .cons {
                grid-template-columns: 1fr
            }
        }

        @media (max-width:520px) {
            .cons-grid {
                grid-template-columns: 1fr
            }

            .cons-grid>div:nth-child(even) {
                padding-left: 0;
                border-left: 0
            }
        }

        /* night equation */
        .night {
            background: var(--night);
            color: var(--on-night);
            position: relative;
            overflow: hidden
        }

        .night h2 {
            color: #fff
        }

        .night .lead {
            color: var(--on-night-muted)
        }

        .eq {
            display: grid;
            grid-template-columns: 1fr auto 1fr auto 1fr auto 1.1fr;
            align-items: stretch;
            gap: 0;
            margin-top: clamp(28px, 3.5vw, 44px)
        }

        .eq .op {
            display: grid;
            place-items: center;
            padding: 0 clamp(8px, 1.6vw, 22px);
            font-family: var(--serif);
            font-size: 2.4rem;
            color: var(--lime);
            font-weight: 400
        }

        .eq .cell {
            padding: 28px 26px;
            border: 1px solid var(--night-line);
            border-radius: 18px;
            background: rgba(255, 255, 255, .03)
        }

        .eq .cell .ico {
            width: 30px;
            height: 30px;
            color: var(--lime);
            margin-bottom: 18px;
            stroke-width: 1.5
        }

        .eq .cell h3 {
            color: #fff;
            font-size: 1.3rem;
            margin-bottom: 10px
        }

        .eq .cell p {
            color: var(--on-night-muted);
            font-size: .97rem;
            line-height: 1.55
        }

        .eq .res {
            background: var(--lime);
            border-color: var(--lime);
            color: #142640
        }

        .eq .res h3 {
            color: #142640;
            font-family: var(--serif);
            font-size: clamp(1.6rem, 2.3vw, 2rem);
            font-weight: 500;
            line-height: 1.1;
            letter-spacing: -.015em
        }

        .eq .res p {
            color: #14290A
        }

        @media (max-width:1060px) {
            .eq {
                grid-template-columns: 1fr;
                gap: 10px
            }

            .eq .op {
                padding: 2px 0;
                font-size: 1.9rem
            }
        }

        /* services index */
        .svc {
            display: grid;
            grid-template-columns: minmax(0, .7fr) minmax(0, 1.3fr);
            gap: clamp(32px, 6vw, 96px);
            align-items: start
        }

        .svc-side {
            position: sticky;
            top: calc(env(safe-area-inset-top, 0px) + 108px)
        }

        .svc-side .lead {
            margin-top: 20px
        }

        .svc-side .btn {
            margin-top: 28px
        }

        .rows {
            border-top: 1px solid var(--line-strong)
        }

        .row {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 44px;
            gap: 20px;
            align-items: center;
            padding: 26px 8px 26px 0;
            border-bottom: 1px solid var(--line);
            position: relative;
            transition: padding .25s, background .25s
        }

        .row::before {
            content: "";
            position: absolute;
            left: 0;
            top: -1px;
            bottom: -1px;
            width: 3px;
            background: var(--cobalt);
            transform: scaleY(0);
            transform-origin: top;
            transition: transform .25s
        }

        .row:hover {
            padding-left: 22px;
            background: var(--surface)
        }

        .row:hover::before {
            transform: scaleY(1)
        }

        .row h3 {
            font-size: 1.32rem;
            margin-bottom: 4px
        }

        .row .pr {
            color: var(--link);
            font-weight: 500;
            font-size: 1.02rem
        }

        :root[data-theme="dark"] .row .pr {
            color: #9DB6F5
        }

        .row .inc {
            color: var(--muted);
            font-size: .93rem;
            margin-top: 8px;
            line-height: 1.5
        }

        .row .go {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1.5px solid var(--line-strong);
            display: grid;
            place-items: center;
            color: var(--ink);
            transition: all .25s
        }

        .row:hover .go {
            background: var(--cobalt);
            border-color: var(--link);
            color: #fff
        }

        @media (max-width:900px) {
            .svc {
                grid-template-columns: 1fr
            }

            .svc-side {
                position: static
            }
        }

        /* models */
        .models {
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(0, .95fr);
            gap: clamp(28px, 5vw, 72px);
            align-items: stretch
        }

        .mtabs {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 22px
        }

        .mtabs button {
            padding: 10px 18px;
            border-radius: 999px;
            border: 1.5px solid var(--line-strong);
            background: transparent;
            font-weight: 600;
            font-size: .94rem;
            color: var(--text);
            transition: all .2s
        }

        .mtabs button:hover {
            border-color: var(--ink)
        }

        .mtabs button[aria-selected="true"] {
            background: var(--ink);
            border-color: var(--ink);
            color: var(--paper)
        }

        .mpanel {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: clamp(26px, 3vw, 38px);
            min-height: 300px
        }

        .mpanel h3 {
            font-family: var(--serif);
            font-weight: 500;
            font-size: 1.9rem;
            letter-spacing: -.015em;
            margin-bottom: 10px
        }

        .mpanel .best {
            color: var(--muted);
            font-size: 1.05rem;
            max-width: 46ch
        }

        .mpanel ul {
            display: grid;
            gap: 12px;
            margin-top: 22px;
            padding-top: 22px;
            border-top: 1px solid var(--line)
        }

        .mpanel li {
            display: flex;
            gap: 12px;
            font-size: 1rem;
            align-items: flex-start
        }

        .mpanel li .ico {
            width: 18px;
            height: 18px;
            color: var(--lime-ink);
            stroke-width: 2.2;
            margin-top: 3px
        }

        .grow {
            background: var(--cobalt-50);
            border-radius: 20px;
            padding: clamp(24px, 3vw, 36px);
            display: flex;
            flex-direction: column
        }

        .grow h3 {
            font-size: 1.05rem;
            margin-bottom: 4px
        }

        .grow .small {
            margin-bottom: 22px
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            align-items: end;
            flex: 1;
            min-height: 320px
        }

        .step {
            position: relative;
            background: var(--surface);
            border: 1px solid var(--cobalt-100);
            border-radius: 12px;
            padding: 14px 12px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end
        }

        .step:nth-child(1) {
            height: 42%
        }

        .step:nth-child(2) {
            height: 62%
        }

        .step:nth-child(3) {
            height: 82%
        }

        .step:nth-child(4) {
            height: 100%;
            background: var(--cobalt);
            border-color: var(--link);
            color: #fff
        }

        .step b {
            display: block;
            font-size: .98rem;
            line-height: 1.2;
            color: var(--ink)
        }

        .step:nth-child(4) b {
            color: #fff
        }

        .step span {
            display: block;
            font-size: .8rem;
            line-height: 1.35;
            color: var(--muted);
            margin-top: 6px
        }

        .step:nth-child(4) span {
            color: #D3DCEE
        }

        @media (max-width:900px) {
            .models {
                grid-template-columns: 1fr
            }
        }

        @media (max-width:520px) {
            .steps {
                grid-template-columns: 1fr 1fr;
                min-height: 0
            }

            .step {
                height: auto !important
            }
        }

        /* quality */
        .pipe {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0;
            margin-top: clamp(24px, 3vw, 40px);
            position: relative
        }

        .pipe::before {
            content: "";
            position: absolute;
            left: 10%;
            right: 10%;
            top: 27px;
            height: 2px;
            background: var(--line-strong)
        }

        .node {
            position: relative;
            background: none;
            border: 0;
            padding: 0 8px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px
        }

        .node .dot {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--surface);
            border: 2px solid var(--line-strong);
            display: grid;
            place-items: center;
            color: var(--muted);
            position: relative;
            z-index: 1;
            transition: all .25s
        }

        .node .dot .ico {
            width: 24px;
            height: 24px
        }

        .node b {
            font-size: 1rem;
            color: var(--ink);
            font-weight: 600
        }

        .node:hover .dot {
            border-color: var(--link);
            color: var(--link)
        }

        .node[aria-selected="true"] .dot {
            background: var(--cobalt);
            border-color: var(--link);
            color: #fff;
            box-shadow: 0 0 0 6px var(--cobalt-100)
        }

        .node:last-child .dot {
            border-color: var(--lime)
        }

        .node:last-child[aria-selected="true"] .dot {
            background: var(--lime);
            border-color: var(--lime);
            color: #142640;
            box-shadow: 0 0 0 6px var(--lime-50)
        }

        .pdetail {
            margin-top: 26px;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
            gap: 24px;
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: clamp(24px, 3vw, 36px)
        }

        .pdetail h3 {
            font-family: var(--serif);
            font-weight: 500;
            font-size: 1.7rem;
            letter-spacing: -.012em
        }

        .pdetail p {
            color: var(--muted);
            font-size: 1.04rem;
            margin-top: 10px
        }

        .pdetail .ctl {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px 22px;
            align-content: start
        }

        .pdetail .ctl div {
            display: flex;
            gap: 10px;
            font-size: .95rem;
            line-height: 1.4;
            align-items: flex-start
        }

        .pdetail .ctl .ico {
            width: 17px;
            height: 17px;
            color: var(--lime-ink);
            stroke-width: 2.2;
            margin-top: 2px
        }

        .loop {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 18px;
            font-size: .92rem;
            color: var(--muted);
            justify-content: center
        }

        .loop .ico {
            width: 18px;
            height: 18px;
            color: var(--link)
        }

        @media (max-width:820px) {
            .pipe {
                grid-template-columns: 1fr;
                gap: 6px
            }

            .pipe::before {
                left: 27px;
                right: auto;
                top: 20px;
                bottom: 20px;
                width: 2px;
                height: auto
            }

            .node {
                flex-direction: row;
                text-align: left;
                padding: 6px 0
            }

            .pdetail {
                grid-template-columns: 1fr
            }

            .pdetail .ctl {
                grid-template-columns: 1fr
            }
        }

        /* nepal */
        .nepal {
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
            gap: clamp(32px, 6vw, 88px);
            align-items: start
        }

        .pts {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 26px 28px;
            margin-top: 34px
        }

        .pts h3 {
            font-size: 1.04rem;
            margin-bottom: 5px
        }

        .pts p {
            font-size: .94rem;
            color: var(--muted);
            line-height: 1.5
        }

        .tz {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: clamp(22px, 3vw, 34px);
            box-shadow: var(--shadow)
        }

        .tz h3 {
            font-size: 1.05rem
        }

        .tz .small {
            margin-top: 4px
        }

        .ztabs {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 20px 0 26px
        }

        .ztabs button {
            padding: 9px 16px;
            border-radius: 999px;
            border: 1.5px solid var(--line-strong);
            background: transparent;
            font-weight: 600;
            font-size: .92rem;
            transition: all .2s
        }

        .ztabs button[aria-selected="true"] {
            background: var(--cobalt);
            border-color: var(--link);
            color: #fff
        }

        .track {
            position: relative;
            height: 150px;
            margin-bottom: 34px
        }

        .lane {
            position: absolute;
            left: 0;
            right: 0;
            height: 34px;
            border-radius: 8px;
            background: var(--cobalt-50)
        }

        .lane.l1 {
            top: 0
        }

        .lane.l2 {
            top: 48px
        }

        .lane.l3 {
            top: 96px;
            background: transparent
        }

        .seg-b {
            position: absolute;
            top: 0;
            bottom: 0;
            border-radius: 8px
        }

        .seg-n {
            background: var(--cobalt)
        }

        .seg-c {
            background: repeating-linear-gradient(135deg, var(--cobalt-100) 0 6px, transparent 6px 12px);
            border: 1.5px solid var(--line-strong)
        }

        .seg-o {
            background: var(--lime);
            top: -6px;
            bottom: -6px;
            border-radius: 8px;
            box-shadow: 0 0 0 3px var(--surface)
        }

        .lane-l {
            position: absolute;
            left: 8px;
            top: 50%;
            transform: translateY(-50%);
            font-size: .8rem;
            font-weight: 600;
            color: #fff;
            z-index: 2;
            white-space: nowrap;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .2)
        }

        .lane.l2 .lane-l {
            color: var(--ink);
            text-shadow: none
        }

        .ticks {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -30px;
            height: 20px
        }

        .ticks span {
            position: absolute;
            transform: translateX(-50%);
            font-size: .76rem;
            color: var(--muted);
            font-variant-numeric: tabular-nums
        }

        .gl {
            position: absolute;
            top: -8px;
            bottom: 12px;
            width: 1px;
            background: var(--line)
        }

        .tz-out {
            display: flex;
            align-items: baseline;
            gap: 14px;
            flex-wrap: wrap;
            padding-top: 22px;
            border-top: 1px solid var(--line)
        }

        .tz-big {
            font-family: var(--serif);
            font-size: clamp(2.4rem, 4vw, 3.2rem);
            line-height: 1;
            color: var(--ink);
            letter-spacing: -.02em;
            font-variant-numeric: tabular-nums
        }

        .tz-txt {
            color: var(--muted);
            font-size: 1rem;
            max-width: 34ch
        }

        .tz-note {
            margin-top: 16px;
            font-size: .82rem;
            color: var(--muted)
        }

        @media (max-width:900px) {
            .nepal {
                grid-template-columns: 1fr
            }
        }

        @media (max-width:480px) {
            .pts {
                grid-template-columns: 1fr
            }

            .lane-l {
                font-size: .72rem
            }
        }

        /* foundation */
        .found {
            background: var(--cobalt);
            color: #E1E8F6;
            position: relative;
            overflow: hidden
        }

        .found .mk {
            position: absolute;
            right: -140px;
            bottom: -190px;
            width: min(520px, 55vw);
            opacity: .07;
            pointer-events: none
        }

        .found .in {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(0, .9fr);
            gap: clamp(28px, 6vw, 96px);
            align-items: center
        }

        .found h2 {
            color: #fff
        }

        .found p.lead {
            color: #D2DBF5;
            margin-top: 22px
        }

        .found .btn {
            margin-top: 30px
        }

        .facts {
            display: grid;
            gap: 0;
            border-top: 1px solid rgba(255, 255, 255, .22)
        }

        .facts li {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            padding: 19px 0;
            border-bottom: 1px solid rgba(255, 255, 255, .22);
            font-size: 1.04rem;
            color: #fff
        }

        .facts .ico {
            color: var(--lime);
            stroke-width: 2.2;
            width: 20px;
            height: 20px;
            margin-top: 3px
        }

        @media (max-width:860px) {
            .found .in {
                grid-template-columns: 1fr
            }
        }

        /* trust */
        .tgrid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border-top: 1px solid var(--line-strong);
            margin-top: clamp(24px, 3vw, 36px)
        }

        .tgrid>div {
            padding: 26px 22px 28px 0;
            border-bottom: 1px solid var(--line)
        }

        .tgrid>div:not(:nth-child(4n+1)) {
            padding-left: 22px;
            border-left: 1px solid var(--line)
        }

        .tgrid .ico {
            color: var(--link);
            margin-bottom: 14px;
            width: 26px;
            height: 26px
        }

        :root[data-theme="dark"] .tgrid .ico {
            color: #9DB6F5
        }

        .tgrid h3 {
            font-size: 1.05rem;
            margin-bottom: 6px
        }

        .tgrid p {
            font-size: .93rem;
            color: var(--muted);
            line-height: 1.5
        }

        .cert {
            margin-top: 26px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 18px;
            border-radius: 12px;
            background: var(--cobalt-50);
            font-size: .96rem;
            color: var(--text)
        }

        .cert .ico {
            color: var(--link);
            width: 20px;
            height: 20px
        }

        .ledger {
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin-top: clamp(32px, 4vw, 52px);
            border: 1px solid var(--line-strong);
            border-radius: 22px;
            overflow: hidden;
            background: var(--surface)
        }

        .ledger>div {
            padding: clamp(26px, 3.4vw, 44px)
        }

        .ledger>div+div {
            border-left: 1px solid var(--line-strong);
            background: var(--ink);
            color: #EAEEF9
        }

        :root[data-theme="dark"] .ledger>div+div {
            background: #E8EDF7;
            color: #142640
        }

        .ledger h3 {
            font-family: var(--serif);
            font-weight: 500;
            font-size: clamp(1.6rem, 2.4vw, 2.1rem);
            letter-spacing: -.015em;
            margin-bottom: 6px
        }

        .ledger>div+div h3 {
            color: inherit
        }

        .ledger .sub {
            font-size: .95rem;
            color: var(--muted);
            margin-bottom: 20px
        }

        .ledger>div+div .sub {
            color: inherit;
            opacity: .72
        }

        .ledger li {
            padding: 12px 0;
            border-top: 1px solid var(--line);
            font-size: 1rem
        }

        .ledger>div+div li {
            border-color: rgba(255, 255, 255, .18)
        }

        :root[data-theme="dark"] .ledger>div+div li {
            border-color: rgba(20, 38, 64, .2)
        }

        @media (max-width:980px) {
            .tgrid {
                grid-template-columns: 1fr 1fr
            }

            .tgrid>div {
                padding-left: 0 !important;
                border-left: 0 !important;
                padding-right: 18px
            }

            .tgrid>div:nth-child(even) {
                padding-left: 22px !important;
                border-left: 1px solid var(--line) !important
            }
        }

        @media (max-width:720px) {
            .ledger {
                grid-template-columns: 1fr
            }

            .ledger>div+div {
                border-left: 0;
                border-top: 1px solid var(--line-strong)
            }
        }

        @media (max-width:480px) {
            .tgrid {
                grid-template-columns: 1fr
            }

            .tgrid>div,
            .tgrid>div:nth-child(even) {
                padding-left: 0 !important;
                border-left: 0 !important
            }
        }

        /* insights + faq */
        .ins {
            display: grid;
            grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr);
            gap: clamp(28px, 6vw, 96px);
            align-items: start
        }

        .ins li {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 22px 0;
            border-bottom: 1px solid var(--line);
            font-family: var(--serif);
            font-size: 1.4rem;
            line-height: 1.25;
            color: var(--ink);
            letter-spacing: -.01em
        }

        .ins ul {
            border-top: 1px solid var(--line-strong)
        }

        .ins li span {
            font-family: var(--sans);
            font-size: .85rem;
            color: var(--muted);
            white-space: nowrap;
            padding-top: 6px
        }

        .faq {
            display: grid;
            grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr);
            gap: clamp(28px, 6vw, 96px);
            align-items: start
        }

        .faq-list {
            border-top: 1px solid var(--line-strong)
        }

        details {
            border-bottom: 1px solid var(--line)
        }

        summary {
            list-style: none;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            padding: 22px 0;
            font-weight: 600;
            font-size: 1.08rem;
            color: var(--ink)
        }

        summary::-webkit-details-marker {
            display: none
        }

        summary .ico {
            transition: transform .25s;
            color: var(--muted)
        }

        details[open] summary .ico {
            transform: rotate(180deg)
        }

        details p {
            padding: 0 0 24px;
            color: var(--muted);
            max-width: 60ch
        }

        @media (max-width:860px) {

            .ins,
            .faq {
                grid-template-columns: 1fr
            }
        }

        /* final */
        .final {
            background: linear-gradient(150deg, var(--night) 0%, var(--night-3) 100%);
            color: var(--on-night);
            position: relative;
            overflow: hidden
        }

        .final .mk {
            position: absolute;
            left: -120px;
            top: -90px;
            width: min(560px, 60vw);
            opacity: .07;
            pointer-events: none
        }

        .final .in {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(0, .95fr);
            gap: clamp(32px, 6vw, 96px);
            align-items: center
        }

        .final h2 {
            color: #fff;
            font-size: clamp(2.2rem, 4.4vw, 3.7rem)
        }

        .final .lead {
            color: var(--on-night-muted);
            margin-top: 22px
        }

        .final .assure {
            margin-top: 30px;
            display: grid;
            gap: 12px
        }

        .final .assure li {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            color: #fff;
            font-size: 1rem
        }

        .final .assure .ico {
            color: var(--lime);
            stroke-width: 2.2;
            width: 20px;
            height: 20px;
            margin-top: 2px
        }

        .formcard {
            background: var(--surface);
            color: var(--text);
            border-radius: 22px;
            padding: clamp(24px, 3vw, 38px);
            box-shadow: 0 40px 80px -30px rgba(0, 0, 0, .6)
        }

        .formcard h3 {
            font-family: var(--serif);
            font-weight: 500;
            font-size: 1.7rem;
            letter-spacing: -.015em;
            margin-bottom: 4px
        }

        .formcard .small {
            margin-bottom: 22px
        }

        .fg {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px
        }

        .fg .full {
            grid-column: 1/-1
        }

        label {
            display: block;
            font-size: .86rem;
            font-weight: 600;
            color: var(--ink);
            margin-bottom: 6px
        }

        input,
        select,
        textarea {
            width: 100%;
            font: inherit;
            font-size: 1rem;
            color: var(--ink);
            background: var(--paper);
            border: 1.5px solid var(--line);
            border-radius: 10px;
            padding: 13px 14px;
            min-height: 50px;
            transition: border-color .2s, box-shadow .2s
        }

        textarea {
            min-height: 96px;
            resize: vertical
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: var(--link);
            box-shadow: 0 0 0 4px var(--cobalt-100)
        }

        .formcard .btn {
            width: 100%;
            margin-top: 18px
        }

        .fmsg {
            margin-top: 14px;
            padding: 14px 16px;
            border-radius: 10px;
            background: var(--lime-50);
            color: var(--text);
            font-size: .93rem;
            display: none;
            line-height: 1.5
        }

        .fmsg.show {
            display: block
        }

        @media (max-width:900px) {
            .final .in {
                grid-template-columns: 1fr
            }
        }

        @media (max-width:520px) {
            .fg {
                grid-template-columns: 1fr
            }
        }

        /* footer */
        .foot {
            background: var(--night);
            color: var(--on-night-muted);
            padding-block: 64px 36px;
            border-top: 1px solid var(--night-line)
        }

        .foot-g {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1.2fr 1fr;
            gap: 36px
        }

        .foot h4 {
            color: #fff;
            font-size: .95rem;
            font-weight: 600;
            margin-bottom: 14px
        }

        .foot a {
            display: block;
            padding: 5px 0;
            font-size: .95rem
        }

        .foot a:hover {
            color: #fff
        }

        .foot .logo img {
            height: 30px
        }

        .foot p.about {
            margin-top: 16px;
            max-width: 34ch;
            font-size: .95rem
        }

        .foot .supp {
            margin-top: 16px;
            font-size: .88rem;
            color: #C5CDE6
        }

        .foot-b {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 48px;
            padding-top: 24px;
            border-top: 1px solid var(--night-line);
            font-size: .86rem
        }

        @media (max-width:900px) {
            .foot-g {
                grid-template-columns: 1fr 1fr
            }
        }

        @media (max-width:520px) {
            .foot-g {
                grid-template-columns: 1fr
            }
        }

        /* sticky mobile cta */
        .mcta {
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 55;
            padding: 12px 16px calc(12px + env(safe-area-inset-bottom, 0px));
            background: var(--header-bg);
            -webkit-backdrop-filter: blur(14px);
            backdrop-filter: blur(14px);
            border-top: 1px solid var(--line);
            transform: translateY(110%);
            transition: transform .3s
        }

        .mcta.show {
            transform: none
        }

        .mcta .btn {
            width: 100%
        }

        @media (max-width:760px) {
            .mcta {
                display: block
            }
        }

        @media (prefers-reduced-motion:reduce) {
            * {
                transition: none !important;
                animation: none !important
            }

            html {
                scroll-behavior: auto
            }
        }

        /* Arial typography */
        h1,
        h2,
        .path-t,
        .mpanel h3,
        .pdetail h3,
        .run h3,
        .formcard h3,
        .ledger h3,
        .mv h3,
        .role h3,
        .b-title,
        .ins li {
            font-weight: 700
        }

        h1,
        h2 {
            letter-spacing: -.028em
        }

        h1 {
            font-size: clamp(2.35rem, 4.7vw, 4.15rem);
            line-height: 1.06
        }

        h2 {
            font-size: clamp(1.85rem, 3.3vw, 2.8rem);
            line-height: 1.12
        }

        .hero h1 {
            max-width: 14ch
        }

        .hero .tag {
            font-weight: 700;
            font-size: clamp(1.1rem, 1.6vw, 1.35rem)
        }

        .cons-quote {
            font-weight: 700;
            font-size: clamp(1.35rem, 2.3vw, 1.9rem);
            line-height: 1.28
        }

        .path-t {
            font-size: clamp(1.45rem, 2.1vw, 1.8rem);
            letter-spacing: -.02em
        }

        .b-title {
            font-size: 1.2rem
        }

        .glance dd {
            font-size: 1.12rem
        }

        .proof strong,
        .tz-big,
        .b-count {
            font-weight: 700;
            letter-spacing: -.03em
        }

        .pdetail h3,
        .mpanel h3,
        .mv h3,
        .role h3 {
            font-size: 1.5rem;
            letter-spacing: -.02em
        }

        .formcard h3 {
            font-size: 1.45rem
        }

        .ins li {
            font-size: 1.2rem;
            font-weight: 700
        }

        .eq .res h3 {
            font-size: clamp(1.35rem, 1.9vw, 1.7rem);
            font-weight: 700
        }

        .phero {
            position: relative;
            overflow: hidden;
            padding-block: clamp(32px, 4vw, 56px) clamp(36px, 4.5vw, 60px)
        }

        .phero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: linear-gradient(var(--line) 1px, transparent 1px), linear-gradient(90deg, var(--line) 1px, transparent 1px);
            background-size: 64px 64px;
            opacity: .5;
            -webkit-mask-image: radial-gradient(ellipse 60% 90% at 85% 20%, #000, transparent 70%);
            mask-image: radial-gradient(ellipse 60% 90% at 85% 20%, #000, transparent 70%);
            pointer-events: none
        }

        .phero .g {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(0, .85fr);
            gap: clamp(28px, 5vw, 80px);
            align-items: end
        }

        .phero h1 {
            font-size: clamp(2.1rem, 4vw, 3.4rem);
            max-width: 19ch;
            font-weight: 700
        }

        .phero .lead {
            margin-top: 24px;
            max-width: 58ch
        }

        .phero .ctas {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 32px
        }

        .crumb {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: .92rem;
            font-weight: 500;
            color: var(--muted);
            margin-bottom: 22px
        }

        .crumb:hover {
            color: var(--ink)
        }

        .crumb .ico {
            width: 16px;
            height: 16px;
            transform: rotate(90deg)
        }

        .glance {
            background: linear-gradient(160deg, var(--night-2), var(--night));
            color: var(--on-night);
            border-radius: 22px;
            padding: 26px 28px;
            box-shadow: 0 40px 70px -34px rgba(20, 38, 64, .55);
            border: 1px solid rgba(255, 255, 255, .08)
        }

        .glance h2 {
            font-family: var(--sans);
            font-size: .95rem;
            font-weight: 600;
            color: var(--on-night-muted);
            letter-spacing: 0;
            margin-bottom: 6px
        }

        .glance dl {
            margin: 0
        }

        .glance dt {
            font-size: .84rem;
            color: var(--on-night-muted);
            margin-top: 18px
        }

        .glance dd {
            margin: 4px 0 0;
            font-family: var(--serif);
            font-size: 1.28rem;
            line-height: 1.25;
            color: #fff;
            letter-spacing: -.01em
        }

        .glance dd.lime {
            color: var(--lime)
        }

        @media (max-width:900px) {
            .phero .g {
                grid-template-columns: 1fr
            }
        }

        .dl {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0 clamp(24px, 5vw, 72px);
            border-top: 1px solid var(--line-strong)
        }

        .dl li {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            padding: 19px 0;
            border-bottom: 1px solid var(--line);
            font-size: 1.04rem;
            line-height: 1.45;
            color: var(--ink)
        }

        .dl .ico {
            width: 19px;
            height: 19px;
            color: var(--lime-ink);
            stroke-width: 2.2;
            margin-top: 3px
        }

        @media (max-width:760px) {
            .dl {
                grid-template-columns: 1fr
            }
        }

        .vgrid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            border-top: 1px solid var(--line-strong)
        }

        .vgrid>div {
            padding: 28px 26px 28px 0;
            border-bottom: 1px solid var(--line)
        }

        .vgrid>div:nth-child(even) {
            padding-left: 28px;
            padding-right: 0;
            border-left: 1px solid var(--line)
        }

        .vgrid h3 {
            font-size: 1.15rem;
            margin-bottom: 8px
        }

        .vgrid p {
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.55
        }

        @media (max-width:640px) {
            .vgrid {
                grid-template-columns: 1fr
            }

            .vgrid>div:nth-child(even) {
                padding-left: 0;
                border-left: 0
            }
        }

        .run {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0;
            border: 1px solid var(--line-strong);
            border-radius: 22px;
            overflow: hidden;
            background: var(--surface)
        }

        .run>div {
            padding: clamp(24px, 3vw, 38px)
        }

        .run>div+div {
            border-left: 1px solid var(--line)
        }

        .run .ico {
            width: 28px;
            height: 28px;
            color: var(--link);
            margin-bottom: 16px;
            stroke-width: 1.5
        }

        :root[data-theme="dark"] .run .ico {
            color: #9DB6F5
        }

        .run h3 {
            font-family: var(--serif);
            font-weight: 700;
            font-size: 1.3rem;
            letter-spacing: -.012em;
            margin-bottom: 10px
        }

        .run p {
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.6
        }

        @media (max-width:900px) {
            .run {
                grid-template-columns: 1fr
            }

            .run>div+div {
                border-left: 0;
                border-top: 1px solid var(--line)
            }
        }

        .callout {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            margin-top: 26px;
            padding: 18px 22px;
            border-radius: 14px;
            background: var(--cobalt-50);
            border: 1px solid var(--cobalt-100);
            color: var(--text);
            font-size: 1rem;
            line-height: 1.55
        }

        .callout .ico {
            color: var(--link);
            width: 22px;
            height: 22px;
            margin-top: 2px
        }

        .callout b {
            color: var(--ink)
        }

        .whobox {
            display: grid;
            grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr);
            gap: clamp(24px, 5vw, 80px);
            align-items: start
        }

        @media (max-width:860px) {
            .whobox {
                grid-template-columns: 1fr
            }
        }

        .rel {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 34px
        }

        .rel a {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 26px;
            border: 1px solid var(--line);
            border-radius: 18px;
            background: var(--surface);
            transition: border-color .25s, box-shadow .25s
        }

        .rel a:hover {
            border-color: var(--link);
            box-shadow: var(--shadow)
        }

        .rel h3 {
            font-size: 1.15rem
        }

        .rel p {
            color: var(--muted);
            font-size: .96rem;
            line-height: 1.5
        }

        .rel .tlink {
            margin-top: auto;
            padding-top: 6px;
            align-self: flex-start
        }

        @media (max-width:860px) {
            .rel {
                grid-template-columns: 1fr
            }
        }

        .pg {
            display: none
        }

        .pg.on {
            display: block
        }

        .pgs-hero {
            padding-block: clamp(44px, 6vw, 84px) clamp(36px, 5vw, 64px)
        }

        .pgs-hero h1 {
            max-width: 18ch
        }

        .team {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            margin-top: 6px
        }

        .person {
            padding: 30px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: var(--surface);
            display: flex;
            gap: 20px;
            align-items: center
        }

        .person .av {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            background: var(--cobalt);
            color: #fff;
            display: grid;
            place-items: center;
            font-family: var(--serif);
            font-size: 1.5rem;
            flex: none
        }

        .person h3 {
            font-size: 1.2rem
        }

        .person p {
            color: var(--muted);
            font-size: .97rem
        }

        @media (max-width:700px) {
            .team {
                grid-template-columns: 1fr
            }
        }

        .role {
            padding: 30px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: var(--surface)
        }

        .role h3 {
            font-family: var(--serif);
            font-weight: 500;
            font-size: 1.7rem;
            letter-spacing: -.012em;
            margin: 6px 0 10px
        }

        .role .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 16px
        }

        .role .tags span {
            padding: 5px 12px;
            border-radius: 999px;
            background: var(--cobalt-50);
            color: var(--link);
            font-size: .85rem;
            font-weight: 600
        }

        :root[data-theme="dark"] .role .tags span {
            color: #9DB6F5
        }

        .role p {
            color: var(--muted);
            margin-bottom: 14px
        }

        .mv {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px
        }

        .mv>div {
            padding: clamp(26px, 3vw, 40px);
            border-radius: 22px;
            border: 1px solid var(--line);
            background: var(--surface)
        }

        .mv>div:first-child {
            background: var(--cobalt);
            border-color: var(--link);
            color: #E4EAFA
        }

        .mv h3 {
            font-family: var(--serif);
            font-weight: 500;
            font-size: 1.9rem;
            letter-spacing: -.015em;
            margin-bottom: 12px
        }

        .mv>div:first-child h3 {
            color: #fff
        }

        .mv p {
            font-size: 1.1rem;
            line-height: 1.55
        }

        @media (max-width:760px) {
            .mv {
                grid-template-columns: 1fr
            }
        }

        .seq {
            counter-reset: s;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            border-top: 1px solid var(--line-strong)
        }

        .seq.c4 {
            grid-template-columns: repeat(4, 1fr)
        }

        .seq li {
            counter-increment: s;
            padding: 28px 28px 30px 0;
            border-bottom: 1px solid var(--line)
        }

        .seq li:not(:nth-child(3n+1)) {
            padding-left: 28px;
            border-left: 1px solid var(--line)
        }

        .seq.c4 li:not(:nth-child(3n+1)) {
            padding-left: 0;
            border-left: 0
        }

        .seq.c4 li:not(:nth-child(4n+1)) {
            padding-left: 24px;
            border-left: 1px solid var(--line)
        }

        .seq li::before {
            content: counter(s);
            display: grid;
            place-items: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--cobalt);
            color: #fff;
            font-weight: 700;
            font-size: .95rem;
            margin-bottom: 16px
        }

        .seq.c2 {
            grid-template-columns: 1fr 1fr
        }

        .seq.c2 li {
            padding: 24px 20px 24px 0 !important;
            border-left: 0 !important
        }

        .seq.c2 li:nth-child(even) {
            padding-left: 24px !important;
            border-left: 1px solid var(--line) !important
        }

        .seq h3 {
            margin-bottom: 8px;
            font-size: 1.15rem
        }

        .seq p {
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.55
        }

        @media (max-width:900px) {

            .seq,
            .seq.c4 {
                grid-template-columns: 1fr 1fr
            }

            .seq li,
            .seq.c4 li {
                padding: 24px 18px 26px 0 !important;
                border-left: 0 !important
            }

            .seq li:nth-child(even),
            .seq.c4 li:nth-child(even) {
                padding-left: 22px !important;
                border-left: 1px solid var(--line) !important
            }
        }

        @media (max-width:560px) {

            .seq,
            .seq.c4 {
                grid-template-columns: 1fr
            }

            .seq li:nth-child(even),
            .seq.c4 li:nth-child(even) {
                padding-left: 0 !important;
                border-left: 0 !important
            }
        }

        .tblw {
            overflow-x: auto;
            border: 1px solid var(--line-strong);
            border-radius: 16px;
            background: var(--surface);
            margin: 8px 0 28px
        }

        .tbl {
            width: 100%;
            border-collapse: collapse;
            font-size: .98rem;
            min-width: 560px
        }

        .tbl th {
            background: var(--cobalt-50);
            color: var(--ink);
            text-align: left;
            font-weight: 700;
            padding: 14px 18px;
            border-bottom: 1px solid var(--line-strong)
        }

        .tbl td {
            padding: 14px 18px;
            border-bottom: 1px solid var(--line);
            vertical-align: top;
            color: var(--text)
        }

        .tbl tr:last-child td {
            border-bottom: 0
        }

        .tbl td:first-child {
            font-weight: 600;
            color: var(--ink)
        }

        .tbl .y {
            color: var(--lime-ink);
            font-weight: 700
        }

        .prose {
            max-width: 720px;
            margin-inline: auto
        }

        .prose p {
            font-size: 1.1rem;
            line-height: 1.75;
            margin: 0 0 1.25em;
            color: var(--text)
        }

        .prose h2 {
            font-size: 1.55rem;
            line-height: 1.25;
            margin: 2em 0 .6em;
            letter-spacing: -.02em
        }

        .prose ul {
            list-style: disc;
            padding-left: 1.3em;
            margin: 0 0 1.4em
        }

        .prose li {
            font-size: 1.08rem;
            line-height: 1.65;
            margin: .5em 0;
            color: var(--text)
        }

        .prose .callout {
            margin: 1.8em 0;
            font-size: 1.05rem
        }

        .prose .tblw {
            margin: 1.4em 0 1.8em
        }

        .art-head {
            padding-block: clamp(40px, 5vw, 72px) clamp(24px, 3vw, 40px)
        }

        .art-head .in {
            max-width: 820px
        }

        .art-head h1 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            max-width: none;
            margin-top: 6px
        }

        .art-head .lead {
            margin-top: 20px
        }

        .chips {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 22px
        }

        .chips span {
            padding: 6px 14px;
            border-radius: 999px;
            background: var(--cobalt-50);
            color: var(--link);
            font-weight: 600;
            font-size: .86rem
        }

        .acards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px
        }

        .acard {
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: var(--surface);
            transition: border-color .25s, box-shadow .25s
        }

        .acard:hover {
            border-color: var(--cobalt);
            box-shadow: var(--shadow)
        }

        .acard .cat {
            font-size: .85rem;
            font-weight: 600;
            color: var(--link)
        }

        .acard h3 {
            font-size: 1.25rem;
            line-height: 1.3
        }

        .acard p {
            color: var(--muted);
            font-size: .98rem;
            line-height: 1.55
        }

        .acard .tlink {
            margin-top: auto;
            padding-top: 6px;
            align-self: flex-start
        }

        .acard.feat {
            grid-column: 1/-1;
            background: var(--cobalt);
            border-color: var(--cobalt);
            padding: clamp(28px, 4vw, 48px)
        }

        .acard.feat .cat,
        .acard.feat .tlink {
            color: #fff
        }

        .acard.feat h3 {
            color: #fff;
            font-size: clamp(1.6rem, 2.8vw, 2.3rem);
            max-width: 24ch;
            line-height: 1.2
        }

        .acard.feat p {
            color: #D3DCEE;
            font-size: 1.08rem;
            max-width: 60ch
        }

        @media (max-width:900px) {
            .acards {
                grid-template-columns: 1fr 1fr
            }
        }

        @media (max-width:620px) {
            .acards {
                grid-template-columns: 1fr
            }
        }

        .filters {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 26px
        }

        .filters button {
            padding: 9px 16px;
            border-radius: 999px;
            border: 1.5px solid var(--line-strong);
            background: transparent;
            font-weight: 600;
            font-size: .92rem;
            transition: all .2s
        }

        .filters button[aria-pressed="true"] {
            background: var(--ink);
            border-color: var(--ink);
            color: var(--paper)
        }

        .subnav {
            position: sticky;
            top: calc(env(safe-area-inset-top, 0px) + 76px);
            z-index: 40;
            background: var(--header-bg);
            -webkit-backdrop-filter: blur(14px);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--line)
        }

        .subnav .wrap {
            display: flex;
            gap: 6px;
            overflow-x: auto;
            padding-block: 10px
        }

        .subnav a {
            white-space: nowrap;
            padding: 8px 14px;
            border-radius: 999px;
            font-weight: 600;
            font-size: .92rem;
            color: var(--text)
        }

        .subnav a:hover {
            background: var(--cobalt-50);
            color: var(--ink)
        }

        .two {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px
        }

        .two>div {
            padding: clamp(24px, 3vw, 38px);
            border: 1px solid var(--line);
            border-radius: 22px;
            background: var(--surface)
        }

        .two>div.dk {
            background: var(--night);
            border-color: var(--night);
            color: var(--on-night)
        }

        .two h3 {
            font-size: 1.35rem;
            margin-bottom: 14px
        }

        .two .dk h3 {
            color: #fff
        }

        .two ul {
            display: grid;
            gap: 12px
        }

        .two li {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            line-height: 1.45
        }

        .two li .ico {
            width: 18px;
            height: 18px;
            color: var(--lime-ink);
            stroke-width: 2.2;
            margin-top: 3px
        }

        .two .dk li .ico {
            color: var(--lime)
        }

        @media (max-width:820px) {
            .two {
                grid-template-columns: 1fr
            }
        }

        .rel.r3x2 {
            grid-template-columns: repeat(3, 1fr)
        }

        @media (max-width:860px) {
            .rel.r3x2 {
                grid-template-columns: 1fr
            }
        }

        .pgrid {
            display: grid;
            grid-template-columns: minmax(0, .85fr) minmax(0, 1.15fr);
            gap: clamp(28px, 6vw, 88px);
            align-items: start
        }

        @media (max-width:900px) {
            .pgrid {
                grid-template-columns: 1fr
            }
        }

        .cinfo {
            display: grid;
            gap: 0;
            border-top: 1px solid var(--line-strong);
            margin-top: 30px
        }

        .cinfo div {
            padding: 18px 0;
            border-bottom: 1px solid var(--line)
        }

        .cinfo dt {
            font-size: .85rem;
            color: var(--muted);
            margin-bottom: 4px
        }

        .cinfo dd {
            margin: 0;
            font-size: 1.1rem;
            color: var(--ink);
            font-weight: 600
        }

        .cinfo a {
            color: var(--link)
        }

        .formcard.flat {
            box-shadow: var(--shadow);
            border: 1px solid var(--line)
        }

        .formcard label {
            display: block;
            font-size: .86rem;
            font-weight: 600;
            color: var(--ink)
        }

        .formcard label input,
        .formcard label select,
        .formcard label textarea {
            font-weight: 400;
            margin-top: 6px
        }

        .formcard .opt {
            font-weight: 400;
            color: var(--muted)
        }

        .draftbanner {
            margin-bottom: 34px;
            padding: 16px 20px;
            border-radius: 14px;
            background: #FFF6DB;
            border: 1px solid #EBD38A;
            color: #4A3A00;
            font-size: .96rem;
            line-height: 1.5
        }

        :root[data-theme="dark"] .draftbanner {
            background: #2B2410;
            border-color: #6B5A1F;
            color: #F3E3A8
        }

        @media (prefers-color-scheme:dark){:root:not([data-theme="light"]) .draftbanner {
            background:#2B2410;
            border-color:#6B5A1F;
            color:#F3E3A8
        }
        }

        .big404 {
            font-size: clamp(5rem, 14vw, 10rem);
            font-weight: 700;
            letter-spacing: -.05em;
            color: var(--cobalt);
            line-height: 1
        }

        /* ---- mega menu ---- */
        .nav>li {
            position: static
        }

        .nav>li.sm {
            position: relative
        }

        .mega {
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            background: var(--surface);
            border-bottom: 1px solid var(--line);
            box-shadow: 0 36px 60px -34px rgba(20, 38, 64, .4);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-6px);
            transition: opacity .16s ease, transform .16s ease, visibility .16s;
            z-index: 55
        }

        .mega.open {
            opacity: 1;
            visibility: visible;
            transform: none
        }

        .mm {
            display: grid;
            grid-template-columns: 350px minmax(0, 1fr);
            gap: clamp(24px, 4vw, 56px);
            padding-block: 28px 30px
        }

        .mm-left {
            background: var(--cobalt-50);
            border-radius: 20px;
            padding: 22px;
            display: flex;
            flex-direction: column;
            gap: 10px
        }

        .mm-h {
            margin: 0 0 6px;
            font-size: .8rem;
            font-weight: 700;
            color: var(--muted);
            letter-spacing: .02em
        }

        .mm-card {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            padding: 15px;
            border-radius: 14px;
            background: var(--surface);
            border: 1px solid var(--line);
            transition: border-color .18s, box-shadow .18s, transform .18s
        }

        .mm-card:hover {
            border-color: var(--cobalt);
            box-shadow: var(--shadow);
            transform: translateY(-1px)
        }

        .mm-ic {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--cobalt);
            color: #fff;
            display: grid;
            place-items: center;
            flex: none;
            transition: background .18s, color .18s
        }

        .mm-ic .ico {
            width: 22px;
            height: 22px
        }

        .mm-card b,
        .mm-item b {
            display: block;
            color: var(--ink);
            font-size: 1rem;
            line-height: 1.3;
            font-weight: 700
        }

        .mm-card small,
        .mm-item small {
            display: block;
            color: var(--muted);
            font-size: .86rem;
            line-height: 1.4;
            margin-top: 3px;
            font-weight: 400
        }

        .mm-all {
            margin-top: auto;
            padding: 8px 4px 0;
            font-weight: 700;
            color: var(--link);
            display: inline-flex;
            gap: 8px;
            align-items: center;
            font-size: .95rem
        }

        .mm-all .ico {
            width: 18px;
            height: 18px;
            transition: transform .18s
        }

        .mm-all:hover .ico {
            transform: translateX(3px)
        }

        .mm-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2px 24px
        }

        .mm-item {
            display: flex;
            gap: 14px;
            align-items: center;
            padding: 11px 12px;
            border-radius: 14px;
            transition: background .15s
        }

        .mm-item:hover {
            background: var(--cobalt-50)
        }

        .mm-item .mm-ic {
            width: 40px;
            height: 40px;
            border-radius: 11px;
            background: var(--cobalt-50);
            color: var(--link)
        }

        .mm-item:hover .mm-ic {
            background: var(--cobalt);
            color: #fff
        }

        .mm-foot {
            background: var(--night);
            color: var(--on-night)
        }

        .mm-foot .wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding-block: 14px
        }

        .mm-foot span {
            font-size: .95rem;
            color: var(--on-night-muted)
        }

        .mm-foot b {
            color: #fff
        }

        .mm-foot .btn {
            background: var(--lime);
            color: #142640
        }

        .mm-foot .btn:hover {
            background: #97CC55
        }

        .mega.sm {
            left: -20px;
            right: auto;
            top: calc(100% + 6px);
            width: 410px;
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 10px;
            box-shadow: var(--shadow)
        }

        .mega.sm .mm-list {
            grid-template-columns: 1fr;
            gap: 0
        }

        .scrim {
            position: fixed;
            inset: 0;
            background: rgba(20, 38, 64, .34);
            opacity: 0;
            visibility: hidden;
            transition: opacity .16s, visibility .16s;
            z-index: 45
        }

        .scrim.on {
            opacity: 1;
            visibility: visible
        }

        @media (max-width:1020px) {

            .mega,
            .scrim {
                display: none
            }
        }

        @media (min-width:1021px) and (max-width:1180px) {
            .mm {
                grid-template-columns: 300px minmax(0, 1fr)
            }

            .mm-list {
                gap: 2px 12px
            }
        }
    </style>
</head>

<body><a class="skip" href="#main">Skip to content</a><svg width="0" height="0" style="position:absolute"
        aria-hidden="true" focusable="false">
        <defs>
            <symbol id="mark" viewBox="0 0 321 295">
                <path style="fill:var(--mk-frame,#1F3A74)" d="M42 8H276V244H232L210 222H252V30H64V82L42 60Z" />
                <path style="fill:var(--mk-green,#83BD42)" d="M80 96H192V205Z" />
                <path style="fill:var(--mk-blue,#1F3A74)" d="M22 152H135V258Z" />
            </symbol>
            <symbol id="i-check" viewBox="0 0 24 24">
                <path d="M5 12.5l4.5 4.5L19 7.5" />
            </symbol>
            <symbol id="i-arrow" viewBox="0 0 24 24">
                <path d="M5 12h14M13 6l6 6-6 6" />
            </symbol>
            <symbol id="i-chev" viewBox="0 0 24 24">
                <path d="M6 9l6 6 6-6" />
            </symbol>
            <symbol id="i-people" viewBox="0 0 24 24">
                <circle cx="9" cy="8" r="3.2" />
                <path d="M3 19c0-3.3 2.7-5.5 6-5.5s6 2.2 6 5.5" />
                <circle cx="17" cy="9" r="2.4" />
                <path d="M17.5 13.6c2.2.3 3.8 2 3.8 4.4" />
            </symbol>
            <symbol id="i-doc" viewBox="0 0 24 24">
                <rect x="5" y="3" width="14" height="18" rx="2" />
                <path d="M9 8h6M9 12h6M9 16h3" />
            </symbol>
            <symbol id="i-tech" viewBox="0 0 24 24">
                <rect x="4" y="5" width="16" height="11" rx="2" />
                <path d="M8 20h8M12 16v4" />
            </symbol>
            <symbol id="i-shield" viewBox="0 0 24 24">
                <path d="M12 3l7 3v5c0 4.5-3 8-7 10-4-2-7-5.5-7-10V6z" />
                <path d="M9 12l2 2 4-4" />
            </symbol>
            <symbol id="i-lock" viewBox="0 0 24 24">
                <rect x="5" y="11" width="14" height="9" rx="2" />
                <path d="M8 11V8a4 4 0 018 0v3" />
            </symbol>
            <symbol id="i-eye" viewBox="0 0 24 24">
                <path d="M2 12s3.5-6.5 10-6.5S22 12 22 12s-3.5 6.5-10 6.5S2 12 2 12z" />
                <circle cx="12" cy="12" r="2.8" />
            </symbol>
            <symbol id="i-key" viewBox="0 0 24 24">
                <circle cx="8" cy="14" r="3.5" />
                <path d="M10.5 11.5L20 2M16 6l3 3" />
            </symbol>
            <symbol id="i-loop" viewBox="0 0 24 24">
                <path d="M4 12a8 8 0 0113.7-5.6L20 8.5M20 4v4.5h-4.5M20 12a8 8 0 01-13.7 5.6L4 15.5M4 20v-4.5h4.5" />
            </symbol>
            <symbol id="i-pulse" viewBox="0 0 24 24">
                <path d="M3 12h4l2-6 4 12 2-6h6" />
            </symbol>
            <symbol id="i-layers" viewBox="0 0 24 24">
                <path d="M12 3l9 5-9 5-9-5 9-5z" />
                <path d="M3 13l9 5 9-5" />
            </symbol>
            <symbol id="i-usercheck" viewBox="0 0 24 24">
                <circle cx="9" cy="8" r="3.2" />
                <path d="M3 20c0-3.3 2.7-5.5 6-5.5 1.6 0 3 .5 4 1.3M16 17l2 2 4-4" />
            </symbol>
            <symbol id="i-db" viewBox="0 0 24 24">
                <ellipse cx="12" cy="6" rx="7" ry="3" />
                <path d="M5 6v6c0 1.7 3.1 3 7 3s7-1.3 7-3V6M5 12v6c0 1.7 3.1 3 7 3s7-1.3 7-3v-6" />
            </symbol>
            <symbol id="i-pen" viewBox="0 0 24 24">
                <path d="M4 20l4-1 11-11-3-3L5 16z" />
                <path d="M14 6l3 3" />
            </symbol>
            <symbol id="i-flag" viewBox="0 0 24 24">
                <path d="M5 21V4M5 5h11l-2 4 2 4H5" />
            </symbol>
            <symbol id="i-send" viewBox="0 0 24 24">
                <path d="M4 12l16-8-6 16-3-7z" />
            </symbol>

            <symbol id="i-calc" viewBox="0 0 24 24">
                <rect x="5" y="3" width="14" height="18" rx="2" />
                <path d="M8 7h8M8 12h.01M12 12h.01M16 12h.01M8 16h.01M12 16h.01M16 16h.01" />
            </symbol>
            <symbol id="i-chart" viewBox="0 0 24 24">
                <path d="M4 20V4M4 20h16M8 16v-4M12 16V8M16 16v-6" />
            </symbol>
            <symbol id="i-clipcheck" viewBox="0 0 24 24">
                <rect x="6" y="4" width="12" height="17" rx="2" />
                <path d="M9 4h6v3H9zM9.5 14l2 2 3.5-4" />
            </symbol>
            <symbol id="i-receipt" viewBox="0 0 24 24">
                <path d="M6 3h12v18l-3-2-3 2-3-2-3 2zM9 8h6M9 12h6" />
            </symbol>
            <symbol id="i-wallet" viewBox="0 0 24 24">
                <rect x="3" y="7" width="18" height="12" rx="2" />
                <path d="M5 7l10-3v3" />
                <circle cx="16.5" cy="13" r="1.1" />
            </symbol>
            <symbol id="i-trend" viewBox="0 0 24 24">
                <path d="M4 17l5-5 4 3 7-8M15 7h5v5" />
            </symbol>
            <symbol id="i-brief" viewBox="0 0 24 24">
                <rect x="3" y="8" width="18" height="12" rx="2" />
                <path d="M9 8V6a2 2 0 012-2h2a2 2 0 012 2v2M3 13h18" />
            </symbol>
            <symbol id="i-building" viewBox="0 0 24 24">
                <path d="M4 21V5l8-2v18M12 21V9l8 2v10M8 9h.01M8 13h.01M8 17h.01M16 14h.01M16 18h.01" />
            </symbol>
        </defs>
    </svg>
    <div class="scrim" id="scrim"></div>
    <header class="hdr">
        <div class="wrap hdr-in">
            <a class="logo" href="index.html" aria-label="Nepreva home"><img class="ll"
                    src="data:image/png;base64,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"
                    alt="Nepreva" width="640" height="140"><img class="ld"
                    src="data:image/png;base64,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"
                    alt="" width="640" height="140"></a>
            <ul class="nav" aria-label="Primary">
                <li><button class="nl" data-drop="svcDrop" aria-expanded="false"
                        aria-controls="svcDrop">Services <svg class="ico">
                            <use href="#i-chev" />
                        </svg></button>
                    <div class="mega" id="svcDrop">
                        <div class="wrap mm">
                            <div class="mm-left">
                                <p class="mm-h">Start with your situation</p><a class="mm-card"
                                    href="for-accounting-audit-firms.html"><span class="mm-ic"><svg class="ico">
                                            <use href="#i-building" />
                                        </svg></span><span><b>For accounting &amp; audit firms</b><small>Grow your
                                            practice without growing headcount</small></span></a><a class="mm-card"
                                    href="for-businesses-finance-teams.html"><span class="mm-ic"><svg
                                            class="ico">
                                            <use href="#i-trend" />
                                        </svg></span><span><b>For businesses &amp; finance teams</b><small>A finance
                                            function that scales with you</small></span></a><a class="mm-all"
                                    href="services.html">View all services <svg class="ico">
                                        <use href="#i-arrow" />
                                    </svg></a>
                            </div>
                            <div>
                                <p class="mm-h">Service lines</p>
                                <div class="mm-list"><a class="mm-item" href="accounting-bookkeeping.html"><span
                                            class="mm-ic"><svg class="ico">
                                                <use href="#i-calc" />
                                            </svg></span><span><b>Accounting &amp; Bookkeeping</b><small>Bookkeeping,
                                                reconciliations, month-end close</small></span></a><a class="mm-item"
                                        href="financial-reporting.html"><span class="mm-ic"><svg class="ico">
                                                <use href="#i-chart" />
                                            </svg></span><span><b>Financial Reporting</b><small>Management accounts and
                                                board packs</small></span></a><a class="mm-item"
                                        href="audit-assurance-support.html"><span class="mm-ic"><svg class="ico">
                                                <use href="#i-clipcheck" />
                                            </svg></span><span><b>Audit &amp; Assurance Support</b><small>Workpapers,
                                                testing and documentation support</small></span></a><a class="mm-item"
                                        href="tax-compliance-support.html"><span class="mm-ic"><svg class="ico">
                                                <use href="#i-receipt" />
                                            </svg></span><span><b>Tax &amp; Compliance Support</b><small>Preparation and
                                                compliance support</small></span></a><a class="mm-item"
                                        href="payroll.html"><span class="mm-ic"><svg class="ico">
                                                <use href="#i-wallet" />
                                            </svg></span><span><b>Payroll</b><small>Accurate, on-time
                                                payroll</small></span></a><a class="mm-item"
                                        href="finance-operations.html"><span class="mm-ic"><svg class="ico">
                                                <use href="#i-loop" />
                                            </svg></span><span><b>Finance Operations</b><small>Procure-to-pay and
                                                order-to-cash</small></span></a><a class="mm-item"
                                        href="fpa-financial-modelling.html"><span class="mm-ic"><svg class="ico">
                                                <use href="#i-trend" />
                                            </svg></span><span><b>FP&amp;A &amp; Financial
                                                Modelling</b><small>Budgeting, forecasting and
                                                modelling</small></span></a><a class="mm-item"
                                        href="virtual-cfo.html"><span class="mm-ic"><svg class="ico">
                                                <use href="#i-brief" />
                                            </svg></span><span><b>Virtual CFO</b><small>Senior finance capability,
                                                scaled</small></span></a><a class="mm-item"
                                        href="employer-of-record.html"><span class="mm-ic"><svg class="ico">
                                                <use href="#i-people" />
                                            </svg></span><span><b>Employer of Record (EOR)</b><small>Employ in Nepal
                                                without an entity</small></span></a></div>
                            </div>
                        </div>
                        <div class="mm-foot">
                            <div class="wrap"><span><b>Not sure where to start?</b> Tell us what you need and we’ll
                                    shape the right team.</span><a class="btn btn-sm"
                                    href="build-your-delivery-team.html">Build your delivery team</a></div>
                        </div>
                    </div>
                </li>
                <li class="sm"><button class="nl" data-drop="whyDrop" aria-expanded="false"
                        aria-controls="whyDrop">Why Nepreva <svg class="ico">
                            <use href="#i-chev" />
                        </svg></button>
                    <div class="mega sm" id="whyDrop">
                        <div class="mm-list"><a class="mm-item" href="why-nepreva.html#wn-advantage"><span
                                    class="mm-ic"><svg class="ico">
                                        <use href="#i-layers" />
                                    </svg></span><span><b>Nepreva advantage</b><small>Why firms choose a partner-led
                                        model</small></span></a><a class="mm-item"
                                href="why-nepreva.html#wn-foundation"><span class="mm-ic"><svg class="ico">
                                        <use href="#i-building" />
                                    </svg></span><span><b>Professional foundation</b><small>NBSM heritage and Moore
                                        Global</small></span></a><a class="mm-item"
                                href="why-nepreva.html#wn-nepal"><span class="mm-ic"><svg class="ico">
                                        <use href="#i-flag" />
                                    </svg></span><span><b>Why Nepal</b><small>Strengths, and what to
                                        weigh</small></span></a><a class="mm-item"
                                href="why-nepreva.html#wn-quality"><span class="mm-ic"><svg class="ico">
                                        <use href="#i-clipcheck" />
                                    </svg></span><span><b>Quality &amp; governance</b><small>Review built into every
                                        deliverable</small></span></a><a class="mm-item"
                                href="why-nepreva.html#wn-security"><span class="mm-ic"><svg class="ico">
                                        <use href="#i-lock" />
                                    </svg></span><span><b>Security &amp; trust</b><small>Controls you can ask
                                        about</small></span></a><a class="mm-item"
                                href="why-nepreva.html#wn-technology"><span class="mm-ic"><svg class="ico">
                                        <use href="#i-tech" />
                                    </svg></span><span><b>Technology &amp; AI</b><small>Automation with human
                                        review</small></span></a><a class="mm-item" href="how-we-work.html"><span
                                    class="mm-ic"><svg class="ico">
                                        <use href="#i-loop" />
                                    </svg></span><span><b>How we work</b><small>From first conversation to a working
                                        team</small></span></a><a class="mm-item" href="faq.html"><span
                                    class="mm-ic"><svg class="ico">
                                        <use href="#i-doc" />
                                    </svg></span><span><b>FAQ</b><small>Straight answers to common
                                        questions</small></span></a></div>
                    </div>
                </li>
                <li><a class="nl" href="insights.html">Insights</a></li>
                <li><a class="nl" href="about.html">About</a></li>
            </ul>
            <div class="hdr-cta"><a class="tl" href="contact.html">Request a proposal</a><a
                    class="btn btn-primary btn-sm" href="build-your-delivery-team.html">Build your delivery team</a>
                <button class="burger" id="burger" aria-label="Open menu" aria-expanded="false"
                    aria-controls="mnav"><svg class="ico">
                        <path d="M4 7h16M4 12h16M4 17h16" />
                    </svg></button>
            </div>
        </div>
        <nav class="mnav" id="mnav" aria-label="Mobile">
            <div class="wrap"><a href="services.html">Services</a><a href="why-nepreva.html">Why Nepreva</a><a
                    href="how-we-work.html">How we work</a><a href="insights.html">Insights</a><a
                    href="about.html">About</a><a href="careers.html">Careers</a><a href="contact.html">Contact</a>
                <a class="btn btn-primary" href="build-your-delivery-team.html" style="color:#fff;border:0">Build
                    your delivery team</a>
            </div>
        </nav>
    </header>
    <main id="main">
        <div class="pg on" data-page="about" data-title="About Nepreva | Independent Global Delivery Company">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>A global delivery company built on a professional foundation.</h1>
                        <p class="lead">Nepreva Global Solutions is your global delivery partner in accounting, audit
                            support and finance: an independent company, supported by the professional heritage of NBSM.
                        </p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a>
                        </div>
                    </div>
                    <aside class="glance">
                        <h2>Nepreva at a glance</h2>
                        <dl>
                            <dt>Delivery base</dt>
                            <dd>Kathmandu, Nepal</dd>
                            <dt>Active markets</dt>
                            <dd>United Kingdom, Canada, Mauritius</dd>
                            <dt>Led by</dt>
                            <dd class="lime">Chartered Accountants, under partner governance</dd>
                        </dl>
                    </aside>
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Extending capacity, not replacing accountability.</h2>
                        <p class="lead">Nepreva provides Chartered Accountant-led accounting, audit support and
                            finance delivery for international accounting and audit firms, and for businesses and CFOs
                            who want to scale delivery capacity without scaling permanent overhead.</p>
                    </div>
                    <div class="cons">
                        <div>
                            <h3
                                style="font-family:var(--serif);font-weight:700;font-size:1.5rem;letter-spacing:-.02em;margin-bottom:14px">
                                Why we exist</h3>
                            <p class="lead" style="color:var(--text)">The capacity problem in accounting is
                                structural. Qualified people are harder to find, cost more to keep, and compliance
                                demands keep growing. Large networks answered this years ago with captive offshore
                                centres. Most firms can’t justify building one.</p>
                        </div>
                        <div>
                            <p class="lead" style="color:var(--text);margin-top:46px">Nepreva gives them the same
                                capability, with partner accountability, in weeks rather than years.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sec">
                <div class="wrap">
                    <div class="mv">
                        <div>
                            <h3>Our mission</h3>
                            <p>To provide high-quality, scalable and technology-enabled delivery capacity that helps
                                accounting, audit and finance organisations take on more without expanding their fixed
                                cost base.</p>
                        </div>
                        <div>
                            <h3>Our vision</h3>
                            <p>To make Nepal a trusted global destination for professional accounting, audit support and
                                finance delivery.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>What we stand for.</h2>
                        <p class="lead">Six commitments that shape how every engagement is run.</p>
                    </div>
                    <div class="vgrid">
                        <div>
                            <h3>Integrity</h3>
                            <p>The work is done the same way whether or not anyone is checking.</p>
                        </div>
                        <div>
                            <h3>Excellence</h3>
                            <p>Held to the standard you’d expect from your own best people.</p>
                        </div>
                        <div>
                            <h3>Accountability</h3>
                            <p>Named ownership behind every engagement.</p>
                        </div>
                        <div>
                            <h3>Confidentiality</h3>
                            <p>Client information protected at every stage.</p>
                        </div>
                        <div>
                            <h3>Collaboration</h3>
                            <p>We work inside your methodology, not around it.</p>
                        </div>
                        <div>
                            <h3>Continuous improvement</h3>
                            <p>Every engagement feeds the next.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sec" id="leadership">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Partner-led, from day one.</h2>
                        <p class="lead">Every engagement has named partner oversight.</p>
                    </div>
                    <div class="team">
                        <div class="person"><span class="av">NS</span>
                            <div>
                                <h3>Nil Saru</h3>
                                <p>Managing Partner, NBSM</p>
                            </div>
                        </div>
                        <div class="person"><span class="av">DG</span>
                            <div>
                                <h3>Durga Pd. Gnawali</h3>
                                <p>Senior Partner, NBSM</p>
                            </div>
                        </div>
                    </div>
                    <!-- CONFIRM Nepreva-level roles and biographies before publication -->
                </div>
            </section>

            <section class="found sec"><svg class="mk" aria-hidden="true" viewBox="0 0 286 275"
                    style="--mk-frame:#fff;--mk-green:#fff;--mk-blue:#fff">
                    <use href="#mark" />
                </svg>
                <div class="wrap in">
                    <div>
                        <h2>The professional foundation behind Nepreva.</h2>
                        <p class="lead">NBSM is a Nepal-based Chartered Accountancy firm and independent member of
                            Moore Global, with offices in Kathmandu and Butwal. Nepreva draws on that heritage
                            (governance, review discipline and international exposure) as the basis for its delivery
                            model.</p>
                    </div>
                    <ul class="facts">
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Nepal-based Chartered Accountancy firm</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Independent member firm of Moore Global</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Head office in Kathmandu (Narayanchaur, Naxal), with an office in Butwal, Rupandehi
                        </li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>Trusted advice. Global perspective. Local expertise.</li>
                    </ul>
                </div>
            </section>

            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Delivered from Nepal. Built for the world.</h2>
                        <p class="lead">Delivery base: Kathmandu, Nepal. Active markets: United Kingdom, Canada and
                            Mauritius.</p>
                    </div>
                    <p class="callout"><svg class="ico">
                            <use href="#i-flag" />
                        </svg><span>Our target markets of Australia, the Middle East and offshore financial centres are
                            a business development focus, not a current client footprint.</span></p>
                </div>
            </section>

            <section class="band sec" id="careers-block">
                <div class="wrap">
                    <div class="head-split">
                        <h2>Build your career on international engagements.</h2>
                        <p class="lead">Nepreva is growing its Chartered Accountant-led delivery teams in Kathmandu.
                            You’ll work on live international engagements under partner governance, with structured
                            learning and clear progression.</p>
                    </div>
                    <p class="small" style="margin-bottom:22px;color:var(--text)">Who we hire: Chartered Accountants,
                        ACCA and CPA professionals, audit and finance professionals, accountants, financial analysts,
                        tax professionals, trainees and interns.</p>
                    <article class="role">
                        <div class="tags"><span>Full-time</span><span>IT support &amp; systems</span><span>1+ years’
                                experience</span></div>
                        <h3>IT Systems &amp; Support Administrator</h3>
                        <p>Supporting a British company. Provide first-line support across software, servers, networks,
                            VPN, email and business systems; manage user access and starter and leaver requirements with
                            HR; maintain core platforms, domains, licences and IT assets; prepare operational reports;
                            create procedures, manuals and training materials; and work with external developers on
                            system updates.</p>
                        <p><b>You bring:</b> a Diploma or Bachelor’s in IT, Computer Science or Information Systems; 1+
                            years in IT support or system administration; Microsoft 365, Windows, email, VPN and
                            networking; strong Excel and reporting; good communication and training skills. ERP or
                            business management systems experience is an advantage.</p>
                        <p style="margin-bottom:0"><b>To apply:</b> send your CV to hello@nepreva.com</p>
                    </article>
                    <p style="margin-top:24px"><a class="tlink" href="careers.html">See all roles and how we hire
                            <svg class="ico">
                                <use href="#i-arrow" />
                            </svg></a></p>
                </div>
            </section>
        </div>
        <section class="final sec" id="start"><svg class="mk" aria-hidden="true" viewBox="0 0 321 295"
                style="--mk-frame:#fff;--mk-green:#fff;--mk-blue:#fff">
                <use href="#mark" />
            </svg>
            <div class="wrap in">
                <div>
                    <h2>Ready to extend your team?</h2>
                    <p class="lead">Whether you need additional capacity for a peak season, a dedicated team or a
                        long-term finance delivery partner, let’s design the right model around your business.</p>
                    <ul class="assure">
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>A member of the Nepreva team replies within one business day</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>We scope a realistic team, timeline and model before your first call</li>
                        <li><svg class="ico">
                                <use href="#i-check" />
                            </svg>You can start with a pilot</li>
                    </ul>
                </div>
                <div class="formcard">
                    <h3>Build your delivery team</h3>
                    <p class="small">Tell us a little about your business and current finance function.</p>
                    <form class="pform" novalidate>
                        <div class="fg">
                            <div><label>Full name<input name="name" autocomplete="name"></label></div>
                            <div><label>Work email<input name="email" type="email" autocomplete="email"></label>
                            </div>
                            <div><label>Company<input name="company" autocomplete="organization"></label></div>
                            <div><label>Country<input name="country" autocomplete="country-name"></label></div>
                            <div><label>Service required<select name="svc">
                                        <option>Not sure yet</option>
                                        <option>Accounting &amp; Bookkeeping</option>
                                        <option>Financial Reporting</option>
                                        <option>Audit &amp; Assurance Support</option>
                                        <option>Tax &amp; Compliance Support</option>
                                        <option>Payroll</option>
                                        <option>Finance Operations</option>
                                        <option>FP&amp;A &amp; Financial Modelling</option>
                                        <option>Virtual CFO</option>
                                        <option>Employer of Record (EOR)</option>
                                    </select></label></div>
                            <div><label>Preferred engagement model<select name="model">
                                        <option>Not sure yet</option>
                                        <option>Dedicated Team</option>
                                        <option>Managed Service</option>
                                        <option>Project Support</option>
                                        <option>Peak-Season Capacity</option>
                                        <option>Hybrid Delivery</option>
                                    </select></label></div>
                            <div class=full><label>What are you trying to solve?
                                    <textarea name="msg"></textarea>
                                </label></div>
                        </div><button class="btn btn-lime" type="submit">Request a proposal</button>
                        <p class="fmsg" role="status"></p>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="foot">
        <div class="wrap">
            <div class="foot-g">
                <div><a class="logo" href="index.html"><img
                            src="data:image/png;base64,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"
                            alt="Nepreva" width="640" height="140"></a>
                    <p class="about">Chartered Accountant-led accounting, audit support and finance delivery for
                        international firms and businesses.</p>
                    <p class="supp">Supported by NBSM, an independent member of Moore Global.</p>
                </div>
                <div>
                    <h4>Solutions</h4><a href="for-accounting-audit-firms.html">For accounting &amp; audit firms</a><a
                        href="for-businesses-finance-teams.html">For businesses &amp; finance teams</a><a
                        href="how-we-work.html">How we work</a>
                </div>
                <div>
                    <h4>Services</h4><a href="accounting-bookkeeping.html">Accounting &amp; Bookkeeping</a><a
                        href="financial-reporting.html">Financial Reporting</a><a
                        href="audit-assurance-support.html">Audit &amp; Assurance Support</a><a
                        href="tax-compliance-support.html">Tax &amp; Compliance Support</a><a
                        href="payroll.html">Payroll</a><a href="finance-operations.html">Finance Operations</a><a
                        href="fpa-financial-modelling.html">FP&amp;A &amp; Financial Modelling</a><a
                        href="virtual-cfo.html">Virtual CFO</a><a href="employer-of-record.html">Employer of Record
                        (EOR)</a>
                </div>
                <div>
                    <h4>Company</h4><a href="why-nepreva.html">Why Nepreva</a><a href="about.html">About</a><a
                        href="insights.html">Insights</a><a href="careers.html">Careers</a><a
                        href="faq.html">FAQ</a><a href="contact.html">Contact</a>
                    <p class="small" style="color:#A8B3D3;margin-top:14px">hello@nepreva.com<br>Kathmandu, Nepal</p>
                </div>
            </div>
            <div class="foot-b"><span>© 2026 Nepreva Global Solutions. All rights reserved.</span><span><a
                        href="privacy-policy.html" style="display:inline">Privacy Policy</a> &nbsp;&nbsp; <a
                        href="terms-of-use.html" style="display:inline">Terms of Use</a></span></div>
        </div>
    </footer>
    <script>
        (function() {
            var $ = function(s) {
                    return document.querySelector(s)
                },
                $$ = function(s) {
                    return [].slice.call(document.querySelectorAll(s))
                };

            var $$ = function(s) {
                return [].slice.call(document.querySelectorAll(s))
            };
            var drops = $$("[data-drop]"),
                scrim = document.getElementById("scrim"),
                tmr = null;

            function closeAll() {
                drops.forEach(function(b) {
                    document.getElementById(b.dataset.drop).classList.remove("open");
                    b.setAttribute("aria-expanded", "false")
                });
                if (scrim) scrim.classList.remove("on")
            }

            function openD(b) {
                closeAll();
                document.getElementById(b.dataset.drop).classList.add("open");
                b.setAttribute("aria-expanded", "true");
                if (scrim && !b.parentNode.classList.contains("sm")) scrim.classList.add("on")
            }
            var canHover = window.matchMedia && window.matchMedia("(hover:hover) and (min-width:1021px)").matches;
            drops.forEach(function(b) {
                b.addEventListener("click", function(e) {
                    e.stopPropagation();
                    if (canHover) {
                        openD(b)
                    } else if (b.getAttribute("aria-expanded") === "true") closeAll();
                    else openD(b)
                });
                if (canHover) {
                    var li = b.parentNode;
                    li.addEventListener("mouseenter", function() {
                        clearTimeout(tmr);
                        openD(b)
                    });
                    li.addEventListener("mouseleave", function() {
                        tmr = setTimeout(closeAll, 200)
                    })
                }
            });
            document.addEventListener("click", function(e) {
                if (!e.target.closest(".mega")) closeAll()
            });
            document.addEventListener("keydown", function(e) {
                if (e.key === "Escape") closeAll()
            });
            if (scrim) scrim.addEventListener("click", closeAll);
            $$(".mega a").forEach(function(a) {
                a.addEventListener("click", closeAll)
            });
            var bg = document.getElementById("burger"),
                mn = document.getElementById("mnav");
            if (bg && mn) {
                bg.addEventListener("click", function() {
                    var o = mn.classList.toggle("open");
                    bg.setAttribute("aria-expanded", o)
                });
                $$("#mnav a").forEach(function(a) {
                    a.addEventListener("click", function() {
                        mn.classList.remove("open");
                        bg.setAttribute("aria-expanded", "false")
                    })
                })
            }

            $$("form.pform").forEach(function(f) {
                f.addEventListener("submit", function(e) {
                    e.preventDefault();
                    var m = f.querySelector(".fmsg");
                    m.classList.add("show");
                    m.textContent =
                        "This is a design preview, so nothing was sent. On the live site this form goes to the Nepreva team, who reply within one business day."
                })
            });

            function setSvc(n) {
                if (!n) return;
                $$("select[name=svc]").forEach(function(s) {
                    for (var i = 0; i < s.options.length; i++) {
                        if (s.options[i].text === n) s.selectedIndex = i
                    }
                })
            }
            var fb = $$(".filters button");
            fb.forEach(function(b) {
                b.addEventListener("click", function() {
                    fb.forEach(function(x) {
                        x.setAttribute("aria-pressed", x === b)
                    });
                    var c = b.dataset.c;
                    $$(".acard").forEach(function(a) {
                        a.style.display = (c === "all" || a.dataset.cat === c) ? "" : "none"
                    })
                })
            });

            var p = $(".pg.on");
            if (p) setSvc(p.dataset.svc);
        })();
    </script>
</body>

</html>
