<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    </style>
    <link rel="stylesheet" href="http://127.0.0.1:8000/proxy?host=www.iana.org/_css/2022/iana_website.css"/>
    <link rel="shortcut icon" type="image/ico"
          href="http://127.0.0.1:8000/proxy?host=www.iana.org/_img/bookmark_icon.ico"/>

    <script type="text/javascript" src="http://127.0.0.1:8000/proxy?host=www.iana.org/_js/jquery.js"></script>
    <script type="text/javascript" src="http://127.0.0.1:8000/proxy?host=www.iana.org/_js/iana.js"></script>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <form method="get" action="{{url("/proxy")}}">
        {{--                @csrf--}}
        <label for="search">search</label>
        <input type="text" id="search" name="host" required="required"
               placeholder="must be host as example: google.com">

        <button style="font-size: 20px;">Submit</button>
    </form>
</div>




<div>

    <header>
        <div id="header">
            <div id="logo">
                <a href="/"><img src="http://127.0.0.1:8000/proxy?host=www.iana.org/_img/2022/iana-logo-header.svg"
                                 alt="Homepage"/></a>
            </div>
            <div class="navigation">
                <ul>
                    <li><a href="/domains">Domains</a></li>
                    <li><a href="/protocols">Protocols</a></li>
                    <li><a href="/numbers">Numbers</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div id="body">


        <article class="hemmed sidenav">

            <main>


                <h1>IANA-managed Reserved Domains</h1>

                <p>Certain domains are set aside, and nominally registered to &ldquo;IANA&rdquo;, for specific
                    policy or technical purposes.</p>

                <h2>Example domains</h2>

                <p>As described in <a href="/go/rfc2606">RFC 2606</a> and <a href="/go/rfc6761">RFC 6761</a>,
                    a number of domains such as <span class="domain label">example.com</span> and <span
                        class="domain label">example.org</span>
                    are maintained for documentation purposes. These domains may be used as illustrative
                    examples in documents without prior coordination with us. They are
                    not available for registration or transfer.</p>

                <h2>Test IDN top-level domains</h2>

                <p>These domains were temporarily delegated by IANA for the <a href="http://www.icann.org/topics/idn/">IDN
                        Evaluation</a> being conducted by <a href=" ▶

<div class=" iana-table-frame">
                <table id="arpa-table" class="iana-table">
                    <thead>
                    <tr>
                        <th>Domain</th>
                        <th>Domain (A-label)</th>
                        <th>Language</th>
                        <th>Script</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>&#1573;&#1582;&#1578;&#1576;&#1575;&#1585;</td>
                        <td><span class="domain label"><a
                                    href="/domains/root/db/xn--kgbechtv.html">XN--KGBECHTV</a></span> ▶
                        <td>Arabic</td>
                        <td>Arabic</td>
                    </tr>
                    <tr>
                        <td>&#1570;&#1586;&#1605;&#1575;&#1740;&#1588;&#1740;</td>
                        <td><span class="domain label"><a href="/domains/root/db/xn--hgbk6aj7f53bba.html">XN--HGBK6AJ7F5 ▶
                        <td>Persian</td>
                        <td>Arabic</td>
                    </tr>
                    <tr>
                        <td>&#27979;&#35797;</td>
                        <td><span class="domain label"><a
                                    href="/domains/root/db/xn--0zwm56d.html">XN--0ZWM56D</a></span></td>
                        <td>Chinese</td>
                        <td>Han (Simplified variant)</td>
                    </tr>
                    <tr>
                        <td>&#28204;&#35430;</td>
                        <td><span class="domain label"><a
                                    href="/domains/root/db/xn--g6w251d.html">XN--G6W251D</a></span></td>
                        <td>Chinese</td>
                        <td>Han (Traditional variant)</td>
                    </tr>
                    <tr>
                        <td>&#1080;&#1089;&#1087;&#1099;&#1090;&#1072;&#1085;&#1080;&#1077;</td>
                        <td><span class="domain label"><a href="/domains/root/db/xn--80akhbyknj4f.html">XN ▶
                        <td>Russian</td>
                        <td>Cyrillic</td>
                    </tr>
                    <tr>
                        <td>&#2346;&#2352;&#2368;&#2325;&#2381;&#2359;&#2366;</td>
                        <td><span class="domain label"><a href="/domains/root/db/xn--11b5bs3a9aj6g.html">XN--11B5BS3A9AJ ▶
                        <td>Hindi</td>
                        <td>Devanagari (Nagari)</td>
                    </tr>
                    <tr>
                        <td>&#948;&#959;&#954;&#953;&#956;&#942;</td>
                        <td><span class="domain label"><a
                                    href="/domains/root/db/xn--jxalpdlp.html">XN--JXALPDLP</a></span></td>
                        <td>Greek, Modern (1453-)</td>
                        <td>Greek</td>
                    </tr>
                    <tr>
                        <td>&#53580;&#49828;&#53944;</td>
                        <td><span class="domain label"><a href="/domains/root/db/xn--9t4b11yi5a.html">XN--9T4B11YI5A</a></span>
                        </td>
                        <td>Korean</td>
                        <td>Hangul (Hang&#x16D;l, Hangeul)</td>
                    </tr>
                    <tr>
                        <td>&#1496;&#1506;&#1505;&#1496;</td>
                        <td><span class="domain label"><a
                                    href="/domains/root/db/xn--deba0ad.html">XN--DEBA0AD</a></span></td>
                        <td>Yiddish</td>
                        <td>Hebrew</td>
                    </tr>
                    <tr>
                        <td>&#12486;&#12473;&#12488;</td>
                        <td><span class="domain label"><a href="/domains/root/db/xn--zckzah.html">XN--ZCKZAH</a></span>
                        </td>
                        <td>Japanese</td>
                        <td>Katakana</td>
                    </tr>
                    <tr>
                        <td>&#2986;&#2992;&#3007;&#2975;&#3021;&#2970;&#3016;</td>
                        <td><span class="domain label"><a href="/domains/root/db/xn--hlcj6aya9esc7a.html">XN--HLCJ6AYA9E ▶
                        <td>Tamil</td>
                        <td>Tamil</td>
                    </tr>
                    </tbody>
                </table>
    </div>

    <h2>Policy-reserved domains</h2>

    <p>We act as both the registrant and registrar for a select number of domains
        which have been reserved under policy grounds. These exclusions are
        typically indicated in either technical standards (RFC documents),
        or <a href="http://www.icann.org/en/registries/agreements.htm">contractual limitations</a>.</p>

    <p>Domains which are described as registered to IANA or ICANN on policy
        grounds are not available for registration or transfer, with the exception
        of <span class="domain label"><i>country-name</i>.info</span> domains. These domains are available for release
        by the ICANN Governmental Advisory Committee Secretariat.</p>

    <h2>Other Special-Use Domains</h2>

    <p>There is additionally a <a href="/assignments/special-use-domain-names">Special-Use Domain Names</a> registry
        documenting special-use domains designated ▶


        </main>

    <nav id="sidenav">


        <div class="navigation_box">
            <h2>Domain Names</h2>
            <ul>
                <li id="nav_dom_top"><a href="/domains">Overview</a></li>
                <li id="nav_dom_root"><a href="/domains/root">Root Zone Management</a></li>
                <ul id="nav_dom_root_sub">
                    <li id="nav_dom_root_top"><a href="/domains/root">Overview</a></li>
                    <li id="nav_dom_root_db"><a href="/domains/root/db">Root Database</a></li>
                    <li id="nav_dom_root_files"><a href="/domains/root/files">Hint and Zone Files</a></li>
                    <li id="nav_dom_root_manage"><a href="/domains/root/manage">Change Requests</a></li>
                    <li id="nav_dom_root_procedures"><a href="/domains/root/help">Instructions &amp; Guides</a></li>
                    <li id="nav_dom_root_servers"><a href="/domains/root/servers">Root Servers</a></li>
                </ul>
                <li id="nav_dom_int"><a href="/domains/int">.INT Registry</a></li>
                <ul id="nav_dom_int_sub">
                    <li id="nav_dom_int_top"><a href="/domains/int">Overview</a></li>
                    <li id="nav_dom_int_manage"><a href="/domains/int/manage">Register/modify an .INT domain</a></li>
                    <li id="nav_dom_int_policy"><a href="/domains/int/policy">Eligibility</a></li>
                </ul>
                <li id="nav_dom_arpa"><a href="/domains/arpa">.ARPA Registry</a></li>
                <li id="nav_dom_idn"><a href="/domains/idn-tables">IDN Practices Repository</a></li>
                <ul id="nav_dom_idn_sub">
                    <li id="nav_dom_idn_top"><a href="/domains/idn-tables">Overview</a></li>
                    <!-- <li id="nav_dom_idn_tables"><a href="/domains/idn-tables/db">Tables</a></li> -->
                    <li id="nav_dom_idn_submit"><a href="/procedures/idn-repository.html">Submit a table</a></li>
                </ul>
                <li id="nav_dom_dnssec"><a href="/dnssec">Root Key Signing Key (DNSSEC)</a></li>
                <ul id="nav_dom_dnssec_sub">
                    <li id="nav_dom_dnssec_top"><a href="/dnssec">Overview</a></li>
                    <li id="nav_dom_dnssec_ksk"><a href="/dnssec/files">Trusts Anchors and Keys</a></li>
                    <li id="nav_dom_dnssec_ceremonies"><a href="/dnssec/ceremonies">Key Signing Ceremonies</a></li>
                    <li id="nav_dom_dnssec_dps"><a href="/dnssec/procedures">Policies &amp; Procedures</a></li>
                    <li id="nav_dom_dnssec_tcrs"><a href="/dnssec/tcrs">Community Representatives</a></li>
                    <li id="nav_dom_dnssec_archive"><a href="/dnssec/archive">Project Archive</a></li>

                </ul>
                <li id="nav_dom_special"><a href="/domains/reserved">Reserved Domains</a></li>
            </ul>
        </div>


    </nav>

    </article>


</div>

<footer>
    <div id="footer">
        <table class="navigation">
            <tr>
                <td class="section"><a href="/domains">Domain&nbsp;Names</a></td>
                <td class="subsection">
                    <ul>
                        <li><a href="/domains/root">Root Zone Registry</a></li>
                        <li><a href="/domains/int">.INT Registry</a></li>
                        <li><a href="/domains/arpa">.ARPA Registry</a></li>
                        <li><a href="/domains/idn-tables">IDN Repository</a></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="section"><a href="/numbers">Number&nbsp;Resources</a></td>
                <td class="subsection">
                    <ul>
                        <li><a href="/abuse">Abuse Information</a></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="section"><a href="/protocols">Protocols</a></td>
                <td class="subsection">
                    <ul>
                        <li><a href="/protocols">Protocol Registries</a></li>
                        <li><a href="/time-zones">Time Zone Database</a></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="section"><a href="/about">About&nbsp;Us</a></td>
                <td class="subsection">
                    <ul>
                        <li><a href="/about/presentations">Presentations</a></li>
                        <li><a href="/reports">Reports</a></li>
                        <li><a href="/performance">Performance</a></li>
                        <li><a href="/reviews">Reviews</a></li>
                        <li><a href="/about/excellence">Excellence</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </td>
            </tr>
        </table>

        <div id="custodian">
            <p>The IANA functions coordinate the Internet’s globally unique identifiers, and
                are provided by <a href="http://pti.icann.org">Public Technical Identifiers</a>, an affiliate of
                <a href="http://www.icann.org/">ICANN</a>.</p>
        </div>

        <div id="legalnotice">
            <ul>
                <li><a href="https://www.icann.org/privacy/policy">Privacy Policy</a></li>
                <li><a href="https://www.icann.org/privacy/tos">Terms of Service</a></li>
            </ul>
        </div>

    </div>
</footer>


<script>
    $(document).ready(function () {
        $("#nav_dom_special").addClass("selected")
        $("#nav_dom_int_sub").hide()
        $("#nav_dom_idn_sub").hide()
        $("#nav_dom_dnssec_sub").hide()
        $("#nav_dom_tools_sub").hide()
        $("#nav_dom_root_sub").hide()
    });
</script>

</div>
</body>
</html>
