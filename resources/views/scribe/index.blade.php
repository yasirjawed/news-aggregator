<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://news-aggregator.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-articles">
                                <a href="#endpoints-GETapi-articles">GET api/articles</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-articles--id-">
                                <a href="#endpoints-GETapi-articles--id-">GET api/articles/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: July 4, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://news-aggregator.test</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-articles">GET api/articles</h2>

<p>
</p>



<span id="example-requests-GETapi-articles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://news-aggregator.test/api/articles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://news-aggregator.test/api/articles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-articles">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;title&quot;: &quot;Kershaw becomes 20th member of 3,000-K club - ESPN&quot;,
                &quot;author&quot;: &quot;Alden Gonzalez&quot;,
                &quot;description&quot;: &quot;The Dodgers&#039; Clayton Kershaw became the fifth pitcher in MLB history to reach 3,000 strikeouts with one franchise, pulling the feat Wednesday night against the White Sox.&quot;,
                &quot;content&quot;: &quot;LOS ANGELES -- His start prolonged, the whiffs remained elusive, and the Dodger Stadium crowd became increasingly concerned that Clayton Kershaw might not reach a hallowed milestone in front of them &hellip; [+3868 chars]&quot;,
                &quot;url&quot;: &quot;https://www.espn.com/mlb/story/_/id/45651968/clayton-kershaw-reaches-3000-strikeouts-dodgers&quot;,
                &quot;url_to_image&quot;: &quot;https://a3.espncdn.com/combiner/i?img=%2Fphoto%2F2025%2F0703%2Fr1514300_1296x729_16%2D9.jpg&quot;,
                &quot;source&quot;: &quot;ESPN&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 03:54:00&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;title&quot;: &quot;Racketeering was a &lsquo;stretch&rsquo; in Sean &lsquo;Diddy&rsquo; Combs trial, legal experts say - The Washington Post&quot;,
                &quot;author&quot;: &quot;Shayna Jacobs, Salvador Rizzo&quot;,
                &quot;description&quot;: &quot;A federal court jury in the Sean &ldquo;Diddy&rdquo; Combs case rejected the government&rsquo;s theory that he ran a criminal enterprise that helped him carry out serious crimes.&quot;,
                &quot;content&quot;: &quot;NEW YORK A federal court jury in the Sean Diddy Combs case rejected the governments theory that he ran a criminal enterprise that helped him carry out serious crimes including sex trafficking and dru&hellip; [+5531 chars]&quot;,
                &quot;url&quot;: &quot;https://www.washingtonpost.com/politics/2025/07/02/sean-combs-verdict-legal-experts-racketeering-sex-trafficking/&quot;,
                &quot;url_to_image&quot;: &quot;https://www.washingtonpost.com/wp-apps/imrs.php?src=https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/X66NRXHJGDTXC5PT45DCV37FS4.JPG&amp;w=1440&quot;,
                &quot;source&quot;: &quot;The Washington Post&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 02:34:58&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;title&quot;: &quot;Your Roku has secret menus and screens - here&#039;s how to unlock them - ZDNET&quot;,
                &quot;author&quot;: &quot;Elyse Betters Picaro&quot;,
                &quot;description&quot;: &quot;Pressing a specific button sequence on your Roku remote can open up a hidden world of features you likely never knew existed.&quot;,
                &quot;content&quot;: &quot;Elyse Betters Picaro / ZDNET\r\nDid you know Roku has several secret menus you can access with just a few clicks of the remote? They&#039;re like easter eggs -- hidden screens that can reveal diagnostic inf&hellip; [+1085 chars]&quot;,
                &quot;url&quot;: &quot;https://www.zdnet.com/home-and-office/home-entertainment/your-roku-has-secret-menus-and-screens-heres-how-to-unlock-them/&quot;,
                &quot;url_to_image&quot;: &quot;https://www.zdnet.com/a/img/resize/2448c10560fddf1136e66368f853d52a3bce554f/2025/07/02/bff35dfc-1143-4f5c-8c7e-e9801462ec1c/9.jpg?auto=webp&amp;fit=crop&amp;height=675&amp;width=1200&quot;,
                &quot;source&quot;: &quot;ZDNet&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 02:00:00&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;title&quot;: &quot;Trump, Johnson rush to get House GOP holdouts to back tax bill - The Washington Post&quot;,
                &quot;author&quot;: &quot;Marianna Sotomayor, Jacob Bogage, Mariana Alfaro&quot;,
                &quot;description&quot;: &quot;Fiscal hawks have concerns over the legislation&rsquo;s ballooning price, and some moderate conservatives are uneasy about steeper cuts to Medicaid.&quot;,
                &quot;content&quot;: &quot;House Republicans were on the cusp of handing President Donald Trump his second terms first legislative victory Wednesday evening, with a massive tax and immigration agenda, but remain stuck in negot&hellip; [+6273 chars]&quot;,
                &quot;url&quot;: &quot;https://www.washingtonpost.com/politics/2025/07/02/house-vote-big-beautiful-bill-trump/&quot;,
                &quot;url_to_image&quot;: &quot;https://www.washingtonpost.com/wp-apps/imrs.php?src=https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/VN2V5TF3LYKJQURPT7SR52JKFU.JPG&amp;w=1440&quot;,
                &quot;source&quot;: &quot;The Washington Post&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 01:15:08&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;title&quot;: &quot;Jerome Powell: Trump calls for US central bank head to quit immediately - BBC&quot;,
                &quot;author&quot;: null,
                &quot;description&quot;: &quot;The president has repeatedly criticised Jerome Powell for not cutting rates but has sent mixed signals about removing him from the role.&quot;,
                &quot;content&quot;: &quot;US President Donald Trump has called for the chair of the Federal Reserve to quit right away, in an escalation of his attacks on Jerome Powell.\r\n\&quot;&#039;Too Late&#039; should resign immediately!!!\&quot;, Trump said &hellip; [+2441 chars]&quot;,
                &quot;url&quot;: &quot;https://www.bbc.com/news/articles/crmv4ldv923o&quot;,
                &quot;url_to_image&quot;: &quot;https://ichef.bbci.co.uk/news/1024/branded_news/7e27/live/191d5f50-579e-11f0-928e-73d4c154b474.jpg&quot;,
                &quot;source&quot;: &quot;BBC News&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 01:09:56&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;title&quot;: &quot;It&#039;s Official: NASA Confirms New Interstellar Object Is Zooming Through Solar System - ScienceAlert&quot;,
                &quot;author&quot;: &quot;AFP&quot;,
                &quot;description&quot;: &quot;Astronomers on Wednesday confirmed the discovery of an interstellar object racing through our Solar System &ndash; only the third ever spotted, though scientists suspect many more may slip past unnoticed.&quot;,
                &quot;content&quot;: &quot;Astronomers on Wednesday confirmed the discovery of an interstellar object racing through our Solar System only the third ever spotted, though scientists suspect many more may slip past unnoticed.\r\nT&hellip; [+4159 chars]&quot;,
                &quot;url&quot;: &quot;https://www.sciencealert.com/its-official-nasa-confirms-new-interstellar-object-is-zooming-through-solar-system&quot;,
                &quot;url_to_image&quot;: &quot;https://www.sciencealert.com/images/2025/07/A11pl3Z-_20250702_144800.jpg&quot;,
                &quot;source&quot;: &quot;ScienceAlert&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 01:08:48&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;title&quot;: &quot;Diego Luna strikes shaky USMNT to win over Guatemala, and into Gold Cup final - Yahoo Sports&quot;,
                &quot;author&quot;: &quot;Henry Bushnell&quot;,
                &quot;description&quot;: &quot;The USMNT hung on for dear life to a 2-1 lead, and beat Guatemala, FIFA&#039;s 106th-ranked team, in Wednesday&#039;s semifinal.&quot;,
                &quot;content&quot;: &quot;ST. LOUIS The U.S. mens national team is heading to the Gold Cup final, and from the fourth minute onward here at Energizer Park, that outcome was rarely in doubt.\r\nThe USMNT raced out to an early 2-&hellip; [+3786 chars]&quot;,
                &quot;url&quot;: &quot;https://sports.yahoo.com/soccer/live/diego-luna-strikes-shaky-usmnt-to-win-over-guatemala-and-into-gold-cup-final-220049951.html&quot;,
                &quot;url_to_image&quot;: &quot;https://s.yimg.com/ny/api/res/1.2/qZgBEcMS4mu7nW8C2nl7UA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTEyMDA7aD04MDA7Y2Y9d2VicA--/https://s.yimg.com/os/creatr-uploaded-images/2025-07/d067de50-579f-11f0-bfeb-a2fd89b4e2c1&quot;,
                &quot;source&quot;: &quot;Yahoo Entertainment&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 01:06:00&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;title&quot;: &quot;Hamas is open to a ceasefire. But Netanyahu says there&#039;s no room for Hamas in postwar Gaza - The Washington Post&quot;,
                &quot;author&quot;: &quot;Fatma Khaled, Samy Magdy and Bassem Mroue&thinsp;|&thinsp;AP&quot;,
                &quot;description&quot;: &quot;Hamas and Israel staked out their positions ahead of expected talks on a Washington-backed ceasefire proposal&quot;,
                &quot;content&quot;: &quot;CAIRO Hamas and Israel staked out their positions Wednesday ahead of expected talks on a Washington-backed ceasefire proposal, with the militant group suggesting it was open to an agreement while the&hellip; [+6743 chars]&quot;,
                &quot;url&quot;: &quot;https://www.washingtonpost.com/world/2025/07/02/israel-palestinians-hamas-war-news-07-02-2025/77bbed34-571b-11f0-b45b-dc9aeb848c03_story.html&quot;,
                &quot;url_to_image&quot;: &quot;https://www.washingtonpost.com/wp-apps/imrs.php?src=https://arc-anglerfish-washpost-prod-washpost.s3.amazonaws.com/public/R3Y6FECXGEI7BNC33SNOXBEMAM_size-normalized.jpg&amp;w=1440&quot;,
                &quot;source&quot;: &quot;The Washington Post&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 00:40:25&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;title&quot;: &quot;Trump allies caught off guard by Pentagon&rsquo;s Ukraine weapons freeze - Politico&quot;,
                &quot;author&quot;: &quot;Jack Detsch, Paul McLeary, Felicia Schwartz, Eli Stokols&quot;,
                &quot;description&quot;: &quot;The decision left officials on both sides of the Atlantic scrambling to find out how long the pause might last.&quot;,
                &quot;content&quot;: &quot;Even allies of President Donald Trump were frustrated by the move, and accused officials such as Colby who led a review of U.S. munitions stockpiles that preceded the freeze of pushing the move forwa&hellip; [+7603 chars]&quot;,
                &quot;url&quot;: &quot;https://www.politico.com/news/2025/07/02/ukraine-weapons-freeze-elbridge-colby-00438156&quot;,
                &quot;url_to_image&quot;: &quot;https://static.politico.com/c7/6f/555e46f84827bff9786522651da9/https-delivery-gettyimages.com/downloads/2212966878&quot;,
                &quot;source&quot;: &quot;Politico&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 00:28:00&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;title&quot;: &quot;Federal judge strikes down Trump&#039;s order suspending asylum access at the southern border - NPR&quot;,
                &quot;author&quot;: &quot;&quot;,
                &quot;description&quot;: &quot;The ruling was a win for immigrant advocacy groups that sued over the president&#039;s order, which they say put thousands of lives at risk.&quot;,
                &quot;content&quot;: &quot;A federal judge in Washington, D.C. ruled Wednesday that the Trump administration cannot deny entry to people crossing the southern border to apply for asylum. The court found that neither the consti&hellip; [+1801 chars]&quot;,
                &quot;url&quot;: &quot;https://www.npr.org/2025/07/02/nx-s1-5455076/judge-rules-against-trump-asylum-ban&quot;,
                &quot;url_to_image&quot;: &quot;https://npr.brightspotcdn.com/dims3/default/strip/false/crop/4799x2699+0+261/resize/1400/quality/100/format/jpeg/?url=http%3A%2F%2Fnpr-brightspot.s3.amazonaws.com%2Fdf%2F60%2F1a44662c4e34a83499135023efd3%2Fap25163034909834.jpg&quot;,
                &quot;source&quot;: &quot;NPR&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-03 00:19:48&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 11,
                &quot;title&quot;: &quot;Skydiving plane with 15 people onboard goes off runway at New Jersey airport, injuring multiple people - CNN&quot;,
                &quot;author&quot;: &quot;Alexandra Skores, Dalia Faheid&quot;,
                &quot;description&quot;: &quot;A skydiving plane with 15 people onboard went off the end of the runway at a New Jersey airport, southeast of Philadelphia, Wednesday evening, according to the Federal Aviation Administration.&quot;,
                &quot;content&quot;: &quot;A skydiving plane with 15 people onboard went off the end of a runway at a New Jersey airport Wednesday evening, resulting in multiple injuries, authorities said.\r\nThe pilot reported engine trouble a&hellip; [+2039 chars]&quot;,
                &quot;url&quot;: &quot;https://www.cnn.com/2025/07/02/us/skydiving-plane-crash-new-jersey&quot;,
                &quot;url_to_image&quot;: &quot;https://media.cnn.com/api/v1/images/stellar/prod/wpvi-20250702231812149.jpg?c=16x9&amp;q=w_800,c_fill&quot;,
                &quot;source&quot;: &quot;CNN&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-02 23:44:00&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 12,
                &quot;title&quot;: &quot;Summer and after-school programs at risk under Trump&#039;s K-12 funding hold - Axios&quot;,
                &quot;author&quot;: &quot;Avery Lotz&quot;,
                &quot;description&quot;: &quot;The Education Department said in a last-minute notice that the funds would not be released while the programs were under review.&quot;,
                &quot;content&quot;: &quot;&lt;ul&gt;&lt;li&gt;The Education Department said in a last-minute notice that the funds would not be released while the programs were under review, according to the School Superintendents Association.&lt;/li&gt;&lt;/ul&gt;&hellip; [+3494 chars]&quot;,
                &quot;url&quot;: &quot;https://www.axios.com/2025/07/02/trump-administration-withholds-education-fund&quot;,
                &quot;url_to_image&quot;: &quot;https://images.axios.com/ZLPzwmj8t6aXke9pUYJLkQXavO0=/0x0:1344x756/1366x768/2025/07/02/1751481113385.png&quot;,
                &quot;source&quot;: &quot;Axios&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-02 22:57:07&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 13,
                &quot;title&quot;: &quot;Answering the burning Mike Brown questions that loom over his Knicks hiring - New York Post&quot;,
                &quot;author&quot;: &quot;Stefan Bondy&quot;,
                &quot;description&quot;: &quot;The Knicks completed their head coaching search on Wednesday, hiring Mike Brown. You probably have questions. The Post&rsquo;s Stefan Bondy has answers:&quot;,
                &quot;content&quot;: &quot;The Knicks completed their head coaching search on Wednesday, hiring Mike Brown. You probably have questions. The Posts Stefan Bondy has answers:\r\nQ: Doesnt this feel &hellip; meh?\r\nA: Yeah, thats what happ&hellip; [+614 chars]&quot;,
                &quot;url&quot;: &quot;https://nypost.com/2025/07/02/sports/answering-mike-brown-questions-that-loom-over-knicks-hiring/&quot;,
                &quot;url_to_image&quot;: &quot;https://nypost.com/wp-content/uploads/sites/2/2025/07/sacramento-kings-head-coach-mike-79499295.jpg?quality=75&amp;strip=all&amp;w=1024&quot;,
                &quot;source&quot;: &quot;New York Post&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-02 22:51:00&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 14,
                &quot;title&quot;: &quot;Tibet is silent as Dalai Lama turns 90, BBC finds - BBC&quot;,
                &quot;author&quot;: null,
                &quot;description&quot;: &quot;The BBC speaks to Tibetans in Aba, which has long been at the heart of resistance to Chinese rule.&quot;,
                &quot;content&quot;: &quot;Laura BickerReporting from\r\nAba, Sichuan province\r\nThe BBC visited the Kirti monastery in Aba, which has long been the heart of Tibetan resistance to Beijing\r\nShrouded in crimson robes, prayer beads &hellip; [+11747 chars]&quot;,
                &quot;url&quot;: &quot;https://www.bbc.com/news/articles/c5y772jlpgzo&quot;,
                &quot;url_to_image&quot;: &quot;https://ichef.bbci.co.uk/news/1024/branded_news/fb21/live/024184c0-576f-11f0-b5c5-012c5796682d.jpg&quot;,
                &quot;source&quot;: &quot;BBC News&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-02 21:28:28&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            },
            {
                &quot;id&quot;: 15,
                &quot;title&quot;: &quot;A Ukrainian actress saw herself in a White House video &mdash; and created one in response - NPR&quot;,
                &quot;author&quot;: &quot;Polina Lytvynova&quot;,
                &quot;description&quot;: &quot;Antonina Khyzhniak, who appeared in stock footage included in a White House Instagram video for the Trump administration&#039;s tax bill, responded with a humorous video &mdash; and a serious message.&quot;,
                &quot;content&quot;: &quot;KYIV, Ukraine A social media video promoting President Trump&#039;s tax bill is getting a lot of attention in Ukraine. The reason involves a TV star, a mission and a powerful Ukrainian weapon humor.\r\nLast&hellip; [+2955 chars]&quot;,
                &quot;url&quot;: &quot;https://www.npr.org/2025/07/02/nx-s1-5453770/ukraine-actress-white-house-video-trump-antonina-khyzhniak&quot;,
                &quot;url_to_image&quot;: &quot;https://npr.brightspotcdn.com/dims3/default/strip/false/crop/664x374+0+117/resize/1400/quality/100/format/png/?url=http%3A%2F%2Fnpr-brightspot.s3.amazonaws.com%2Fa5%2F7c%2F79599af24620af83d2ef759e9b36%2Fscreenshot-2025-07-02-at-4-01-54-pm.png&quot;,
                &quot;source&quot;: &quot;NPR&quot;,
                &quot;category&quot;: null,
                &quot;published_at&quot;: &quot;2025-07-02 21:00:49&quot;,
                &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
            }
        ],
        &quot;first_page_url&quot;: &quot;http://news-aggregator.test/api/articles?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 7,
        &quot;last_page_url&quot;: &quot;http://news-aggregator.test/api/articles?page=7&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://news-aggregator.test/api/articles?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://news-aggregator.test/api/articles?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://news-aggregator.test/api/articles?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://news-aggregator.test/api/articles?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://news-aggregator.test/api/articles?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://news-aggregator.test/api/articles?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://news-aggregator.test/api/articles?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://news-aggregator.test/api/articles?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://news-aggregator.test/api/articles?page=2&quot;,
        &quot;path&quot;: &quot;http://news-aggregator.test/api/articles&quot;,
        &quot;per_page&quot;: 15,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 15,
        &quot;total&quot;: 99
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-articles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-articles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-articles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-articles" data-method="GET"
      data-path="api/articles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-articles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-articles"
                    onclick="tryItOut('GETapi-articles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-articles"
                    onclick="cancelTryOut('GETapi-articles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-articles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/articles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-articles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-articles--id-">GET api/articles/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-articles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://news-aggregator.test/api/articles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://news-aggregator.test/api/articles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-articles--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;title&quot;: &quot;Kershaw becomes 20th member of 3,000-K club - ESPN&quot;,
    &quot;author&quot;: &quot;Alden Gonzalez&quot;,
    &quot;description&quot;: &quot;The Dodgers&#039; Clayton Kershaw became the fifth pitcher in MLB history to reach 3,000 strikeouts with one franchise, pulling the feat Wednesday night against the White Sox.&quot;,
    &quot;content&quot;: &quot;LOS ANGELES -- His start prolonged, the whiffs remained elusive, and the Dodger Stadium crowd became increasingly concerned that Clayton Kershaw might not reach a hallowed milestone in front of them &hellip; [+3868 chars]&quot;,
    &quot;url&quot;: &quot;https://www.espn.com/mlb/story/_/id/45651968/clayton-kershaw-reaches-3000-strikeouts-dodgers&quot;,
    &quot;url_to_image&quot;: &quot;https://a3.espncdn.com/combiner/i?img=%2Fphoto%2F2025%2F0703%2Fr1514300_1296x729_16%2D9.jpg&quot;,
    &quot;source&quot;: &quot;ESPN&quot;,
    &quot;category&quot;: null,
    &quot;published_at&quot;: &quot;2025-07-03 03:54:00&quot;,
    &quot;created_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-07-04T06:34:51.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-articles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-articles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-articles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-articles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-articles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-articles--id-" data-method="GET"
      data-path="api/articles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-articles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-articles--id-"
                    onclick="tryItOut('GETapi-articles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-articles--id-"
                    onclick="cancelTryOut('GETapi-articles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-articles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/articles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-articles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-articles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the article. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
