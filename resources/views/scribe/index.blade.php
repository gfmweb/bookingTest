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
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.1.0.js") }}"></script>

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
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-resources">
                                <a href="#endpoints-GETapi-resources">GET api/resources</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-resources-types">
                                <a href="#endpoints-GETapi-resources-types">GET api/resources/types</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-resources">
                                <a href="#endpoints-POSTapi-resources">POST api/resources</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-resources--id--bookings">
                                <a href="#endpoints-GETapi-resources--id--bookings">GET api/resources/{id}/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bookings">
                                <a href="#endpoints-POSTapi-bookings">POST api/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-bookings--id-">
                                <a href="#endpoints-DELETEapi-bookings--id-">DELETE api/bookings/{id}</a>
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
        <li>Last updated: March 21, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-resources">GET api/resources</h2>

<p>
</p>



<span id="example-requests-GETapi-resources">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/resources" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/resources"
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

<span id="example-responses-GETapi-resources">
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

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;resource_type_id&quot;: 1,
        &quot;name&quot;: &quot;quae doloremque&quot;,
        &quot;description&quot;: &quot;Qui delectus iusto at porro iusto dolorem. Sit possimus quia id ipsa.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Велосипед&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 2,
        &quot;resource_type_id&quot;: 5,
        &quot;name&quot;: &quot;velit autem&quot;,
        &quot;description&quot;: &quot;Molestias molestiae labore esse sit dolor. Ut non earum eveniet repudiandae ut rerum assumenda. Dolores voluptate in sequi modi.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;PowerBank&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 3,
        &quot;resource_type_id&quot;: 5,
        &quot;name&quot;: &quot;veniam exercitationem&quot;,
        &quot;description&quot;: &quot;Quia odio enim numquam autem. Illo ad nesciunt eveniet ut. Et aut esse tempore tenetur numquam placeat. Aut ut dolor maxime maiores delectus doloremque.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;PowerBank&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 4,
        &quot;resource_type_id&quot;: 2,
        &quot;name&quot;: &quot;sit veritatis&quot;,
        &quot;description&quot;: &quot;Molestiae laudantium earum facilis nihil ut fuga eius qui. Mollitia soluta a deserunt sequi quis maiores. Voluptatum rerum vel libero.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Самокат&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 5,
        &quot;resource_type_id&quot;: 4,
        &quot;name&quot;: &quot;occaecati expedita&quot;,
        &quot;description&quot;: &quot;Labore consequuntur at sapiente. Quasi qui ea impedit quae rerum non hic. Nam et perspiciatis deserunt consequatur ex pariatur eos et. Aut dignissimos nemo laborum illum maxime.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Машина&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 6,
        &quot;resource_type_id&quot;: 1,
        &quot;name&quot;: &quot;vero dolores&quot;,
        &quot;description&quot;: &quot;Id modi in dolores voluptatem nisi amet provident. Ut quidem repellat et quaerat vitae. Unde repellendus et enim sapiente labore laboriosam nihil eius.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Велосипед&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 7,
        &quot;resource_type_id&quot;: 4,
        &quot;name&quot;: &quot;ad aliquid&quot;,
        &quot;description&quot;: &quot;Quis ducimus quis et placeat accusantium et. Nemo quia quidem quas rerum architecto. Voluptatem ducimus dolores earum soluta doloribus rerum. Dolor autem dolorem in.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Машина&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 8,
        &quot;resource_type_id&quot;: 3,
        &quot;name&quot;: &quot;commodi consequuntur&quot;,
        &quot;description&quot;: &quot;Ut ea cum aspernatur modi quidem dolorem sint. Sunt aspernatur vitae voluptatem sint magni harum ab. Doloribus autem ut est blanditiis quos similique exercitationem dolorum.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Квартира&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 9,
        &quot;resource_type_id&quot;: 3,
        &quot;name&quot;: &quot;nemo assumenda&quot;,
        &quot;description&quot;: &quot;Aspernatur eligendi impedit aliquid beatae perspiciatis itaque. Qui recusandae suscipit facilis sed adipisci ipsum. Ipsam repellendus et voluptatem. Doloribus consequatur harum magni.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Квартира&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    },
    {
        &quot;id&quot;: 10,
        &quot;resource_type_id&quot;: 2,
        &quot;name&quot;: &quot;quia voluptatibus&quot;,
        &quot;description&quot;: &quot;Atque tempore eaque saepe dolore et et ea. Eaque sunt omnis velit sunt et pariatur voluptas. Quia ex provident aliquam illum a quod. Quae quibusdam sequi ipsa velit magnam deserunt.&quot;,
        &quot;created_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-03-20T17:26:42.000000Z&quot;,
        &quot;resource_type&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Самокат&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-resources" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-resources"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-resources"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-resources" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-resources">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-resources" data-method="GET"
      data-path="api/resources"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-resources', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-resources"
                    onclick="tryItOut('GETapi-resources');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-resources"
                    onclick="cancelTryOut('GETapi-resources');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-resources"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/resources</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-resources"
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
                              name="Accept"                data-endpoint="GETapi-resources"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-resources-types">GET api/resources/types</h2>

<p>
</p>



<span id="example-requests-GETapi-resources-types">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/resources/types" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/resources/types"
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

<span id="example-responses-GETapi-resources-types">
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

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Велосипед&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Самокат&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Квартира&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Машина&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;PowerBank&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-resources-types" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-resources-types"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-resources-types"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-resources-types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-resources-types">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-resources-types" data-method="GET"
      data-path="api/resources/types"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-resources-types', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-resources-types"
                    onclick="tryItOut('GETapi-resources-types');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-resources-types"
                    onclick="cancelTryOut('GETapi-resources-types');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-resources-types"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/resources/types</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-resources-types"
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
                              name="Accept"                data-endpoint="GETapi-resources-types"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-resources">POST api/resources</h2>

<p>
</p>



<span id="example-requests-POSTapi-resources">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/resources" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"type\": \"n\",
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/resources"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "type": "n",
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-resources">
</span>
<span id="execution-results-POSTapi-resources" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-resources"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-resources"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-resources" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-resources">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-resources" data-method="POST"
      data-path="api/resources"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-resources', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-resources"
                    onclick="tryItOut('POSTapi-resources');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-resources"
                    onclick="cancelTryOut('POSTapi-resources');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-resources"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/resources</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-resources"
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
                              name="Accept"                data-endpoint="POSTapi-resources"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-resources"
               value="b"
               data-component="body">
    <br>
<p>validation.max. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-resources"
               value="n"
               data-component="body">
    <br>
<p>The <code>name</code> of an existing record in the resource_types table. validation.max. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-resources"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-resources--id--bookings">GET api/resources/{id}/bookings</h2>

<p>
</p>



<span id="example-requests-GETapi-resources--id--bookings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/resources/architecto/bookings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/resources/architecto/bookings"
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

<span id="example-responses-GETapi-resources--id--bookings">
            <blockquote>
            <p>Example response (500):</p>
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
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-resources--id--bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-resources--id--bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-resources--id--bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-resources--id--bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-resources--id--bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-resources--id--bookings" data-method="GET"
      data-path="api/resources/{id}/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-resources--id--bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-resources--id--bookings"
                    onclick="tryItOut('GETapi-resources--id--bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-resources--id--bookings"
                    onclick="cancelTryOut('GETapi-resources--id--bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-resources--id--bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/resources/{id}/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-resources--id--bookings"
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
                              name="Accept"                data-endpoint="GETapi-resources--id--bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-resources--id--bookings"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the resource. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-bookings">POST api/bookings</h2>

<p>
</p>



<span id="example-requests-POSTapi-bookings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/bookings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": 16,
    \"resource_id\": 16,
    \"start_time\": \"2051-04-14\",
    \"end_time\": \"2061-06-02\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bookings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 16,
    "resource_id": 16,
    "start_time": "2051-04-14",
    "end_time": "2061-06-02"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bookings">
</span>
<span id="execution-results-POSTapi-bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bookings" data-method="POST"
      data-path="api/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bookings"
                    onclick="tryItOut('POSTapi-bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bookings"
                    onclick="cancelTryOut('POSTapi-bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bookings"
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
                              name="Accept"                data-endpoint="POSTapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="POSTapi-bookings"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>resource_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="resource_id"                data-endpoint="POSTapi-bookings"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the resources table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="POSTapi-bookings"
               value="2051-04-14"
               data-component="body">
    <br>
<p>validation.date validation.after_or_equal. Example: <code>2051-04-14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="POSTapi-bookings"
               value="2061-06-02"
               data-component="body">
    <br>
<p>validation.date validation.after. Example: <code>2061-06-02</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-bookings--id-">DELETE api/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/bookings/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bookings/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-bookings--id-">
</span>
<span id="execution-results-DELETEapi-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-bookings--id-" data-method="DELETE"
      data-path="api/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-bookings--id-"
                    onclick="tryItOut('DELETEapi-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-bookings--id-"
                    onclick="cancelTryOut('DELETEapi-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-bookings--id-"
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
                              name="Accept"                data-endpoint="DELETEapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-bookings--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>architecto</code></p>
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
