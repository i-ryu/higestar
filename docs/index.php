


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Documentation &middot; 
      
    </title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="../assets/css/toolkit.css" rel="stylesheet">
    
      <link href="../assets/css/docs.css" rel="stylesheet">
    
    <link href="../assets/css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>

  </head>


<body class="with-top-navbar">
  <div class="growl" id="app-growl"></div>

  <?php include("../assets/partial/navbar.php") ; ?>

  <div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="msgModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <button type="button" class="btn btn-sm btn-primary pull-right app-new-msg js-newMsg">New message</button>
        <h4 class="modal-title">Messages</h4>
      </div>

      <div class="modal-body p-a-0 js-modalBody">
        <div class="modal-body-scroller">
          <div class="media-list media-list-users list-group js-msgGroup">
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </span>
                <div class="media-body">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="media-body-secondary">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </span>
                <div class="media-body">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </span>
                <div class="media-body">
                  <strong>Dave Gamache</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </span>
                <div class="media-body">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="media-body-secondary">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </span>
                <div class="media-body">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </span>
                <div class="media-body">
                  <strong>Dave Gamache</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </span>
                <div class="media-body">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="media-body-secondary">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </span>
                <div class="media-body">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </span>
                <div class="media-body">
                  <strong>Dave Gamache</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="hide m-a js-conversation">
            <ul class="media-list media-list-conversation">
              <li class="media media-current-user m-b-md">
                <div class="media-body">
                  <div class="media-body-text">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Dave Gamache</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <a class="media-right" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </a>
              </li>

              <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                   Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                  </div>
                  <div class="media-body-text">
                   Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                  </div>
                  <div class="media-body-text">
                   Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Fat</a> at 4:28PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                   Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                  </div>
                  <div class="media-body-text">
                   Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Mark Otto</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="media media-current-user m-b-md">
                <div class="media-body">
                  <div class="media-body-text">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Dave Gamache</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <a class="media-right" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </a>
              </li>

              <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                   Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                  </div>
                  <div class="media-body-text">
                   Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                  </div>
                  <div class="media-body-text">
                   Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Fat</a> at 4:28PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="media m-b">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                   Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                  </div>
                  <div class="media-body-text">
                   Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Mark Otto</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  
    <div class="docs-header" id="content">
      <div class="container">
        <h1>Documentation</h1>
        <p>Find out what's included in your Bootstrap theme and how to compile source files. Includes live examples and code snippets for every new component.</p>
      </div>
    </div>
    <div class="container docs-content">
      
<h1 id="contents">Contents</h1>

<ul id="markdown-toc">
  <li><a href="#contents" id="markdown-toc-contents">Contents</a></li>
  <li><a href="#intro" id="markdown-toc-intro">Intro</a></li>
  <li><a href="#whats-included" id="markdown-toc-whats-included">What’s included</a>    <ul>
      <li><a href="#getting-started" id="markdown-toc-getting-started">Getting started</a></li>
      <li><a href="#gulpfilejs" id="markdown-toc-gulpfilejs">Gulpfile.js</a></li>
      <li><a href="#theme-source-code" id="markdown-toc-theme-source-code">Theme source code</a></li>
    </ul>
  </li>
  <li><a href="#custom-builds" id="markdown-toc-custom-builds">Custom builds</a></li>
  <li><a href="#basic-template" id="markdown-toc-basic-template">Basic template</a></li>
  <li><a href="#utilities" id="markdown-toc-utilities">Utilities</a>    <ul>
      <li><a href="#positioning" id="markdown-toc-positioning">Positioning</a></li>
      <li><a href="#width" id="markdown-toc-width">Width</a></li>
      <li><a href="#margin-and-padding" id="markdown-toc-margin-and-padding">Margin and padding</a></li>
      <li><a href="#responsive-text-alignment" id="markdown-toc-responsive-text-alignment">Responsive text alignment</a></li>
    </ul>
  </li>
  <li><a href="#components" id="markdown-toc-components">Components</a>    <ul>
      <li><a href="#entypo" id="markdown-toc-entypo">Entypo</a>        <ul>
          <li><a href="#available-icons" id="markdown-toc-available-icons">Available icons</a></li>
          <li><a href="#examples" id="markdown-toc-examples">Examples</a></li>
        </ul>
      </li>
      <li><a href="#outline-buttons" id="markdown-toc-outline-buttons">Outline buttons</a></li>
      <li><a href="#pill-buttons" id="markdown-toc-pill-buttons">Pill buttons</a></li>
      <li><a href="#avatar-list" id="markdown-toc-avatar-list">Avatar list</a></li>
      <li><a href="#growl" id="markdown-toc-growl">Growl</a></li>
      <li><a href="#profile-header" id="markdown-toc-profile-header">Profile header</a></li>
      <li><a href="#panel-profile" id="markdown-toc-panel-profile">Panel profile</a></li>
      <li><a href="#panel-link-list" id="markdown-toc-panel-link-list">Panel link list</a></li>
      <li><a href="#media-list-steam" id="markdown-toc-media-list-steam">Media list steam</a></li>
      <li><a href="#media-list-conversation" id="markdown-toc-media-list-conversation">Media list conversation</a></li>
      <li><a href="#media-list-users" id="markdown-toc-media-list-users">Media list users</a></li>
      <li><a href="#custom-form-controls" id="markdown-toc-custom-form-controls">Custom form controls</a></li>
      <li><a href="#custom-modals" id="markdown-toc-custom-modals">Custom Modals</a></li>
      <li><a href="#custom-containers" id="markdown-toc-custom-containers">Custom containers</a></li>
    </ul>
  </li>
  <li><a href="#plugins" id="markdown-toc-plugins">Plugins</a>    <ul>
      <li><a href="#image-grids" id="markdown-toc-image-grids">Image grids</a>        <ul>
          <li><a href="#options" id="markdown-toc-options">Options</a></li>
          <li><a href="#javascript-api" id="markdown-toc-javascript-api">JavaScript API</a></li>
          <li><a href="#data-api" id="markdown-toc-data-api">Data Api</a></li>
        </ul>
      </li>
      <li><a href="#zoom" id="markdown-toc-zoom">Zoom</a>        <ul>
          <li><a href="#data-api-1" id="markdown-toc-data-api-1">Data API</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<h1 id="intro">Intro</h1>

<p>Hey there! You’re looking at the docs for an Official Bootstrap Theme—thanks for your purchase! This theme has been lovingly crafted by Bootstrap’s founders and friends to help you build awesome projects on the web. Let’s dive in.</p>

<p>Each theme is designed as it’s own toolkit—a series of well designed, intuitive, and cohesive components—built on top of Bootstrap. If you’ve used Bootstrap itself, you’ll find this all super familiar, but with new aesthetics, new components, beautiful and extensive examples, and easy-to-use build tools and documentation.</p>

<p>Since this theme is based on Bootstrap, and includes nearly everything Bootstrap itself does, you’ll want to give the <a href="http://getbootstrap.com">official project documentation</a> a once over before continuing. There’s also <a href="../bootstrap/">the kitchen sink</a>—a one-page view of all Bootstrap’s components restyled by this theme.</p>

<p>For everything else, including compiling and using this Bootstrap theme, read through the docs below.</p>

<p>Thanks, and enjoy!</p>

<h1 id="whats-included">What’s included</h1>

<p>Within your Bootstrap theme you’ll find the following directories and files, grouping common resources and providing both compiled and minified distribution files, as well as raw source files.</p>

<figure class="highlight"><pre><code class="language-bash" data-lang="bash">theme/
  ├── gulpfile.js
  ├── package.json
  ├── README.md
  ├── docs/
  ├── less/
  │   ├── bootstrap/
  │   ├── custom/
  │   ├── variables.less
  │   └── toolkit.less
  ├── js/
  │   ├── bootstrap/
  │   └── custom/
  ├── fonts/
  │   ├── bootstrap-entypo.eot
  │   ├── bootstrap-entypo.svg
  │   ├── bootstrap-entypo.ttf
  │   ├── bootstrap-entypo.woff
  │   └── bootstrap-entypo.woff2
  └── dist/
      ├── toolkit.css
      ├── toolkit.css.map
      ├── toolkit.min.css
      ├── toolkit.min.css.map
      ├── toolkit.js
      └── toolkit.min.js</code></pre></figure>

<h2 id="getting-started">Getting started</h2>

<p>Viewing your Bootstrap Theme documentation is now dead simple-simply find the docs directory and open <code class="highlighter-rouge">index.html</code> in your favorate browser.</p>

<figure class="highlight"><pre><code class="language-bash" data-lang="bash"><span class="gp">$ </span>open docs/index.html</code></pre></figure>

<h2 id="gulpfilejs">Gulpfile.js</h2>

<p>If you’re after more customization we’ve also included a custom <a href="http://gulpjs.com">Gulp</a> file, which can be used to quickly re-compile a theme’s CSS and JS. You’ll need to install both <a href="https://nodejs.org/en/download/">Node</a> and Gulp before using our included <code class="highlighter-rouge">gulpfile.js</code>.</p>

<p>Once node is installed, run the following npm command to install Gulp.</p>

<figure class="highlight"><pre><code class="language-bash" data-lang="bash"><span class="gp">$ </span>npm install gulp -g</code></pre></figure>

<p>When you’re done, make sure you’ve installed the rest of the theme’s dependencies:</p>

<figure class="highlight"><pre><code class="language-bash" data-lang="bash"><span class="gp">$ </span>npm install</code></pre></figure>

<p>Now, modify your source files and run <code class="highlighter-rouge">gulp</code> to generate new local <code class="highlighter-rouge">dist/</code> files automatically. <strong>Be aware that this replaces existing <code class="highlighter-rouge">dist/</code> files</strong>, so proceed with caution.</p>

<h2 id="theme-source-code">Theme source code</h2>

<p>The <code class="highlighter-rouge">less/</code>, <code class="highlighter-rouge">js/</code>, and <code class="highlighter-rouge">fonts/</code> directories contain the source code for our CSS, JS, and icon fonts (respectively). Within the <code class="highlighter-rouge">less/</code> and <code class="highlighter-rouge">js/</code> directories you’ll find two subdirectories:</p>

<ul>
  <li><code class="highlighter-rouge">bootstrap/</code>, which contains the most recently released version of Bootstrap (v3.3.5).</li>
  <li><code class="highlighter-rouge">custom/</code>, which contains all of the custom components and overrides authored specifically for this theme.</li>
</ul>

<p>The <code class="highlighter-rouge">dist/</code> folder includes everything above, built into single CSS and JS files that can easily be integrated into your project.</p>

<p>The <code class="highlighter-rouge">docs/</code> folder includes the source code for our documentation, as well as a handful of live examples.</p>

<p>The remaining files not specifically mentioned above provide support for packages, license information, and development.</p>

<h1 id="custom-builds">Custom builds</h1>

<p>Leverage the included source files and <code class="highlighter-rouge">gulpfile.js</code> to customize your Bootstrap Theme for your exact needs. Change variables, exclude components, and more.</p>

<ul>
  <li><code class="highlighter-rouge">toolkit.less</code> is the entry point for Less files - to build your own custom build, simply modify your local custom files or edit the includes listed here. Note: some themes also rely on a shared <code class="highlighter-rouge">components.less</code> file, which you can find imported in your <code class="highlighter-rouge">toolkit.less</code>.</li>
  <li><code class="highlighter-rouge">variables.less</code> is home to your theme’s variables. Note that your theme’s <code class="highlighter-rouge">variables</code> file depends on and overrides an existing Bootstrap variable file (found in /less/bootstrap/variables.less).</li>
</ul>

<h1 id="basic-template">Basic template</h1>

<p>The basic template is a guideline for how to structure your pages when building with a Bootstrap Theme. Included below are all the necessary bits for using the theme’s CSS and JS, as well as some friendly reminders.</p>

<p>Copy the example below into a new HTML file to get started with it.</p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;head&gt;</span>
    <span class="c">&lt;!-- These meta tags come first. --&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"X-UA-Compatible"</span> <span class="na">content=</span><span class="s">"IE=edge"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1"</span><span class="nt">&gt;</span>

    <span class="nt">&lt;title&gt;</span>Bootstrap Theme Example<span class="nt">&lt;/title&gt;</span>

    <span class="c">&lt;!-- Include the CSS --&gt;</span>
    <span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"dist/toolkit.min.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span><span class="nt">&gt;</span>

  <span class="nt">&lt;/head&gt;</span>
  <span class="nt">&lt;body&gt;</span>
    <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>

    <span class="c">&lt;!-- Include jQuery (required) and the JS --&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
    <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"dist/toolkit.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span></code></pre></figure>

<h1 id="utilities">Utilities</h1>

<p>Utilities, or utility classes, are a series of single-purpose, immutable classes designed to reduce duplication in your compiled CSS. Each utility takes a common CSS property-value pair and turns it into a reusable class.</p>

<p>These utilities are in addition to those <a href="">provided in Bootstrap</a>.</p>

<h2 id="positioning">Positioning</h2>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.pos-r</span> <span class="p">{</span> <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.pos-a</span> <span class="p">{</span> <span class="nl">position</span><span class="p">:</span> <span class="nb">absolute</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.pos-f</span> <span class="p">{</span> <span class="nl">position</span><span class="p">:</span> <span class="nb">fixed</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span></code></pre></figure>

<h2 id="width">Width</h2>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.w-sm</span>   <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">25%</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.w-md</span>   <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">50%</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.w-lg</span>   <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">75%</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.w-full</span> <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">100%</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span></code></pre></figure>

<h2 id="margin-and-padding">Margin and padding</h2>

<p>Assign <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to an element or a subset of it’s sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. All classes are multiples on the global default value, <code class="highlighter-rouge">20px</code>.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.m-a-0</span> <span class="p">{</span> <span class="nl">margin</span><span class="p">:</span>        <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-t-0</span> <span class="p">{</span> <span class="nl">margin-top</span><span class="p">:</span>    <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-r-0</span> <span class="p">{</span> <span class="nl">margin-right</span><span class="p">:</span>  <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-b-0</span> <span class="p">{</span> <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-l-0</span> <span class="p">{</span> <span class="nl">margin-left</span><span class="p">:</span>   <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>

<span class="nc">.m-a</span> <span class="p">{</span> <span class="nl">margin</span><span class="p">:</span>        <span class="o">@</span><span class="n">spacer</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-t</span> <span class="p">{</span> <span class="nl">margin-top</span><span class="p">:</span>    <span class="o">@</span><span class="n">spacer-y</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-r</span> <span class="p">{</span> <span class="nl">margin-right</span><span class="p">:</span>  <span class="o">@</span><span class="n">spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-b</span> <span class="p">{</span> <span class="nl">margin-bottom</span><span class="p">:</span> <span class="o">@</span><span class="n">spacer-y</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-l</span> <span class="p">{</span> <span class="nl">margin-left</span><span class="p">:</span>   <span class="o">@</span><span class="n">spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-x</span> <span class="p">{</span> <span class="nl">margin-right</span><span class="p">:</span>  <span class="o">@</span><span class="n">spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">margin-left</span><span class="p">:</span> <span class="o">@</span><span class="n">spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-y</span> <span class="p">{</span> <span class="nl">margin-top</span><span class="p">:</span>    <span class="o">@</span><span class="n">spacer-y</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">margin-bottom</span><span class="p">:</span> <span class="o">@</span><span class="n">spacer-y</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-x-auto</span> <span class="p">{</span> <span class="nl">margin-right</span><span class="p">:</span> <span class="nb">auto</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">margin-left</span><span class="p">:</span> <span class="nb">auto</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>

<span class="nc">.m-a-md</span> <span class="p">{</span> <span class="nl">margin</span><span class="p">:</span>        <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-t-md</span> <span class="p">{</span> <span class="nl">margin-top</span><span class="p">:</span>    <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-r-md</span> <span class="p">{</span> <span class="nl">margin-right</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-b-md</span> <span class="p">{</span> <span class="nl">margin-bottom</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-l-md</span> <span class="p">{</span> <span class="nl">margin-left</span><span class="p">:</span>   <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-x-md</span> <span class="p">{</span> <span class="nl">margin-right</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">spacer-x</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">margin-left</span><span class="p">:</span>   <span class="p">(</span><span class="o">@</span><span class="n">spacer-x</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-y-md</span> <span class="p">{</span> <span class="nl">margin-top</span><span class="p">:</span>    <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">margin-bottom</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>

<span class="nc">.m-a-lg</span> <span class="p">{</span> <span class="nl">margin</span><span class="p">:</span>        <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-t-lg</span> <span class="p">{</span> <span class="nl">margin-top</span><span class="p">:</span>    <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-r-lg</span> <span class="p">{</span> <span class="nl">margin-right</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-b-lg</span> <span class="p">{</span> <span class="nl">margin-bottom</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-l-lg</span> <span class="p">{</span> <span class="nl">margin-left</span><span class="p">:</span>   <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-x-lg</span> <span class="p">{</span> <span class="nl">margin-right</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">spacer-x</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">margin-left</span><span class="p">:</span>   <span class="p">(</span><span class="o">@</span><span class="n">spacer-x</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.m-y-lg</span> <span class="p">{</span> <span class="nl">margin-top</span><span class="p">:</span>    <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">margin-bottom</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span></code></pre></figure>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.p-a-0</span> <span class="p">{</span> <span class="nl">padding</span><span class="p">:</span>        <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-t-0</span> <span class="p">{</span> <span class="nl">padding-top</span><span class="p">:</span>    <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-r-0</span> <span class="p">{</span> <span class="nl">padding-right</span><span class="p">:</span>  <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-b-0</span> <span class="p">{</span> <span class="nl">padding-bottom</span><span class="p">:</span> <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-l-0</span> <span class="p">{</span> <span class="nl">padding-left</span><span class="p">:</span>   <span class="m">0</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>

<span class="nc">.p-a</span> <span class="p">{</span> <span class="nl">padding</span><span class="p">:</span>        <span class="o">@</span><span class="n">spacer</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-t</span> <span class="p">{</span> <span class="nl">padding-top</span><span class="p">:</span>    <span class="o">@</span><span class="n">spacer-y</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-r</span> <span class="p">{</span> <span class="nl">padding-right</span><span class="p">:</span>  <span class="o">@</span><span class="n">spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-b</span> <span class="p">{</span> <span class="nl">padding-bottom</span><span class="p">:</span> <span class="o">@</span><span class="n">spacer-y</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-l</span> <span class="p">{</span> <span class="nl">padding-left</span><span class="p">:</span>   <span class="o">@</span><span class="n">spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-x</span> <span class="p">{</span> <span class="nl">padding-right</span><span class="p">:</span>  <span class="o">@</span><span class="n">spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">padding-left</span><span class="p">:</span>   <span class="o">@</span><span class="n">spacer-x</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-y</span> <span class="p">{</span> <span class="nl">padding-top</span><span class="p">:</span>    <span class="o">@</span><span class="n">spacer-y</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">padding-bottom</span><span class="p">:</span> <span class="o">@</span><span class="n">spacer-y</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>

<span class="nc">.p-a-md</span> <span class="p">{</span> <span class="nl">padding</span><span class="p">:</span>        <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-t-md</span> <span class="p">{</span> <span class="nl">padding-top</span><span class="p">:</span>    <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-r-md</span> <span class="p">{</span> <span class="nl">padding-right</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-b-md</span> <span class="p">{</span> <span class="nl">padding-bottom</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-l-md</span> <span class="p">{</span> <span class="nl">padding-left</span><span class="p">:</span>   <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-x-md</span> <span class="p">{</span> <span class="nl">padding-right</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">spacer-x</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">padding-left</span><span class="p">:</span>   <span class="p">(</span><span class="o">@</span><span class="n">spacer-x</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-y-md</span> <span class="p">{</span> <span class="nl">padding-top</span><span class="p">:</span>    <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">padding-bottom</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">1</span><span class="mi">.5</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>

<span class="nc">.p-a-lg</span> <span class="p">{</span> <span class="nl">padding</span><span class="p">:</span>        <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-t-lg</span> <span class="p">{</span> <span class="nl">padding-top</span><span class="p">:</span>    <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-r-lg</span> <span class="p">{</span> <span class="nl">padding-right</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-b-lg</span> <span class="p">{</span> <span class="nl">padding-bottom</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-l-lg</span> <span class="p">{</span> <span class="nl">padding-left</span><span class="p">:</span>   <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-x-lg</span> <span class="p">{</span> <span class="nl">padding-right</span><span class="p">:</span>  <span class="p">(</span><span class="o">@</span><span class="n">spacer-x</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">padding-left</span><span class="p">:</span>   <span class="p">(</span><span class="o">@</span><span class="n">spacer-x</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.p-y-lg</span> <span class="p">{</span> <span class="nl">padding-top</span><span class="p">:</span>    <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="nl">padding-bottom</span><span class="p">:</span> <span class="p">(</span><span class="o">@</span><span class="n">spacer-y</span> <span class="o">*</span> <span class="m">3</span><span class="p">)</span> <span class="o">!</span><span class="n">important</span><span class="p">;</span> <span class="p">}</span></code></pre></figure>

<h2 id="responsive-text-alignment">Responsive text alignment</h2>

<p>Use these classes to easily switch <code class="highlighter-rouge">text-align</code> across viewports when designing responsive pages.</p>

<figure class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="nc">.text-xs-left</span>   <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.text-xs-right</span>  <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">right</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.text-xs-center</span> <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">center</span><span class="p">;</span> <span class="p">}</span>

<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-sm-min</span><span class="p">)</span> <span class="p">{</span>
  <span class="nc">.text-sm-left</span>   <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span> <span class="p">}</span>
  <span class="nc">.text-sm-right</span>  <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">right</span><span class="p">;</span> <span class="p">}</span>
  <span class="nc">.text-sm-center</span> <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">center</span><span class="p">;</span> <span class="p">}</span>
<span class="p">}</span>

<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-md-min</span><span class="p">)</span> <span class="p">{</span>
  <span class="nc">.text-md-left</span>   <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span> <span class="p">}</span>
  <span class="nc">.text-md-right</span>  <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">right</span><span class="p">;</span> <span class="p">}</span>
  <span class="nc">.text-md-center</span> <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">center</span><span class="p">;</span> <span class="p">}</span>
<span class="p">}</span>

<span class="k">@media</span> <span class="p">(</span><span class="n">min-width</span><span class="o">:</span> <span class="o">@</span><span class="n">screen-lg-min</span><span class="p">)</span> <span class="p">{</span>
  <span class="nc">.text-lg-left</span>   <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span> <span class="p">}</span>
  <span class="nc">.text-lg-right</span>  <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">right</span><span class="p">;</span> <span class="p">}</span>
  <span class="nc">.text-lg-center</span> <span class="p">{</span> <span class="nl">text-align</span><span class="p">:</span> <span class="nb">center</span><span class="p">;</span> <span class="p">}</span>
<span class="p">}</span></code></pre></figure>

<h1 id="components">Components</h1>

<h2 id="entypo">Entypo</h2>

<p><a href="http://entypo.com">Entypo</a> is an awesome, high quality set of icon glyphs made by <a href="http://www.danielbruce.se">Daniel Bruce</a>. We’ve replaced Bootstrap’s default icon font, <a href="http://glyphicons.com">Glyhpicons</a>, with the complete Entypo set and Entypo social extension.</p>

<p>Simply use the new <code class="highlighter-rouge">icon</code> class and an <code class="highlighter-rouge">icon-{modifier}</code> on an inline element. See the examples below for more details.</p>

<h3 id="available-icons">Available icons</h3>

<p>Below are all the original and social icons from Entypo that you can choose from:</p>

<div class="docs-icons">
  <span class="icon icon-add-to-list"></span>
  <span class="icon icon-add-user"></span>
  <span class="icon icon-address"></span>
  <span class="icon icon-adjust"></span>
  <span class="icon icon-air"></span>
  <span class="icon icon-aircraft"></span>
  <span class="icon icon-aircraft-landing"></span>
  <span class="icon icon-aircraft-take-off"></span>
  <span class="icon icon-align-bottom"></span>
  <span class="icon icon-align-horizontal-middle"></span>
  <span class="icon icon-align-left"></span>
  <span class="icon icon-align-right"></span>
  <span class="icon icon-align-top"></span>
  <span class="icon icon-align-vertical-middle"></span>
  <span class="icon icon-archive"></span>
  <span class="icon icon-area-graph"></span>
  <span class="icon icon-arrow-bold-down"></span>
  <span class="icon icon-arrow-bold-left"></span>
  <span class="icon icon-arrow-bold-right"></span>
  <span class="icon icon-arrow-bold-up"></span>
  <span class="icon icon-arrow-down"></span>
  <span class="icon icon-arrow-left"></span>
  <span class="icon icon-arrow-right"></span>
  <span class="icon icon-arrow-up"></span>
  <span class="icon icon-arrow-long-down"></span>
  <span class="icon icon-arrow-long-left"></span>
  <span class="icon icon-arrow-long-right"></span>
  <span class="icon icon-arrow-long-up"></span>
  <span class="icon icon-arrow-with-circle-down"></span>
  <span class="icon icon-arrow-with-circle-left"></span>
  <span class="icon icon-arrow-with-circle-right"></span>
  <span class="icon icon-arrow-with-circle-up"></span>
  <span class="icon icon-attachment"></span>
  <span class="icon icon-awareness-ribbon"></span>
  <span class="icon icon-back-in-time"></span>
  <span class="icon icon-back"></span>
  <span class="icon icon-bar-graph"></span>
  <span class="icon icon-battery"></span>
  <span class="icon icon-beamed-note"></span>
  <span class="icon icon-bell"></span>
  <span class="icon icon-blackboard"></span>
  <span class="icon icon-block"></span>
  <span class="icon icon-book"></span>
  <span class="icon icon-bookmark"></span>
  <span class="icon icon-bookmarks"></span>
  <span class="icon icon-bowl"></span>
  <span class="icon icon-box"></span>
  <span class="icon icon-briefcase"></span>
  <span class="icon icon-browser"></span>
  <span class="icon icon-brush"></span>
  <span class="icon icon-bucket"></span>
  <span class="icon icon-bug"></span>
  <span class="icon icon-cake"></span>
  <span class="icon icon-calculator"></span>
  <span class="icon icon-calendar"></span>
  <span class="icon icon-camera"></span>
  <span class="icon icon-ccw"></span>
  <span class="icon icon-cw"></span>
  <span class="icon icon-chat"></span>
  <span class="icon icon-check"></span>
  <span class="icon icon-chevron-down"></span>
  <span class="icon icon-chevron-left"></span>
  <span class="icon icon-chevron-right"></span>
  <span class="icon icon-chevron-up"></span>
  <span class="icon icon-chevron-small-down"></span>
  <span class="icon icon-chevron-small-left"></span>
  <span class="icon icon-chevron-small-right"></span>
  <span class="icon icon-chevron-small-up"></span>
  <span class="icon icon-chevron-thin-down"></span>
  <span class="icon icon-chevron-thin-left"></span>
  <span class="icon icon-chevron-thin-right"></span>
  <span class="icon icon-chevron-thin-up"></span>
  <span class="icon icon-chevron-with-circle-down"></span>
  <span class="icon icon-chevron-with-circle-left"></span>
  <span class="icon icon-chevron-with-circle-right"></span>
  <span class="icon icon-chevron-with-circle-up"></span>
  <span class="icon icon-circle-with-cross"></span>
  <span class="icon icon-circle-with-minus"></span>
  <span class="icon icon-circle-with-plus"></span>
  <span class="icon icon-circle"></span>
  <span class="icon icon-circular-graph"></span>
  <span class="icon icon-clapperboard"></span>
  <span class="icon icon-classic-computer"></span>
  <span class="icon icon-clipboard"></span>
  <span class="icon icon-clock"></span>
  <span class="icon icon-cloud"></span>
  <span class="icon icon-code"></span>
  <span class="icon icon-cog"></span>
  <span class="icon icon-colours"></span>
  <span class="icon icon-compass"></span>
  <span class="icon icon-controller-fast-backward"></span>
  <span class="icon icon-controller-fast-forward"></span>
  <span class="icon icon-controller-jump-to-start"></span>
  <span class="icon icon-controller-next"></span>
  <span class="icon icon-controller-paus"></span>
  <span class="icon icon-controller-play"></span>
  <span class="icon icon-controller-record"></span>
  <span class="icon icon-controller-stop"></span>
  <span class="icon icon-controller-volume"></span>
  <span class="icon icon-copy"></span>
  <span class="icon icon-creative-commons"></span>
  <span class="icon icon-creative-commons-attribution"></span>
  <span class="icon icon-creative-commons-noderivs"></span>
  <span class="icon icon-creative-commons-noncommercial-eu"></span>
  <span class="icon icon-creative-commons-noncommercial-us"></span>
  <span class="icon icon-creative-commons-public-domain"></span>
  <span class="icon icon-creative-commons-remix"></span>
  <span class="icon icon-creative-commons-share"></span>
  <span class="icon icon-creative-commons-sharealike"></span>
  <span class="icon icon-credit-card"></span>
  <span class="icon icon-credit"></span>
  <span class="icon icon-crop"></span>
  <span class="icon icon-cross"></span>
  <span class="icon icon-cup"></span>
  <span class="icon icon-cycle"></span>
  <span class="icon icon-database"></span>
  <span class="icon icon-dial-pad"></span>
  <span class="icon icon-direction"></span>
  <span class="icon icon-document"></span>
  <span class="icon icon-document-landscape"></span>
  <span class="icon icon-documents"></span>
  <span class="icon icon-dot-single"></span>
  <span class="icon icon-dots-two-horizontal"></span>
  <span class="icon icon-dots-three-horizontal"></span>
  <span class="icon icon-dots-two-vertical"></span>
  <span class="icon icon-dots-three-vertical"></span>
  <span class="icon icon-download"></span>
  <span class="icon icon-drink"></span>
  <span class="icon icon-drive"></span>
  <span class="icon icon-drop"></span>
  <span class="icon icon-edit"></span>
  <span class="icon icon-email"></span>
  <span class="icon icon-emoji-flirt"></span>
  <span class="icon icon-emoji-happy"></span>
  <span class="icon icon-emoji-neutral"></span>
  <span class="icon icon-emoji-sad"></span>
  <span class="icon icon-erase"></span>
  <span class="icon icon-eraser"></span>
  <span class="icon icon-export"></span>
  <span class="icon icon-eye"></span>
  <span class="icon icon-eye-with-line"></span>
  <span class="icon icon-feather"></span>
  <span class="icon icon-fingerprint"></span>
  <span class="icon icon-flag"></span>
  <span class="icon icon-flash"></span>
  <span class="icon icon-flashlight"></span>
  <span class="icon icon-flat-brush"></span>
  <span class="icon icon-flow-branch"></span>
  <span class="icon icon-flow-cascade"></span>
  <span class="icon icon-flow-line"></span>
  <span class="icon icon-flow-parallel"></span>
  <span class="icon icon-flow-tree"></span>
  <span class="icon icon-flower"></span>
  <span class="icon icon-folder"></span>
  <span class="icon icon-folder-images"></span>
  <span class="icon icon-folder-music"></span>
  <span class="icon icon-folder-video"></span>
  <span class="icon icon-forward"></span>
  <span class="icon icon-funnel"></span>
  <span class="icon icon-game-controller"></span>
  <span class="icon icon-gauge"></span>
  <span class="icon icon-globe"></span>
  <span class="icon icon-graduation-cap"></span>
  <span class="icon icon-grid"></span>
  <span class="icon icon-hair-cross"></span>
  <span class="icon icon-hand"></span>
  <span class="icon icon-heart"></span>
  <span class="icon icon-heart-outlined"></span>
  <span class="icon icon-help"></span>
  <span class="icon icon-help-with-circle"></span>
  <span class="icon icon-home"></span>
  <span class="icon icon-hour-glass"></span>
  <span class="icon icon-image"></span>
  <span class="icon icon-image-inverted"></span>
  <span class="icon icon-images"></span>
  <span class="icon icon-inbox"></span>
  <span class="icon icon-infinity"></span>
  <span class="icon icon-info"></span>
  <span class="icon icon-info-with-circle"></span>
  <span class="icon icon-install"></span>
  <span class="icon icon-key"></span>
  <span class="icon icon-keyboard"></span>
  <span class="icon icon-lab-flask"></span>
  <span class="icon icon-landline"></span>
  <span class="icon icon-language"></span>
  <span class="icon icon-laptop"></span>
  <span class="icon icon-layers"></span>
  <span class="icon icon-leaf"></span>
  <span class="icon icon-level-down"></span>
  <span class="icon icon-level-up"></span>
  <span class="icon icon-lifebuoy"></span>
  <span class="icon icon-light-bulb"></span>
  <span class="icon icon-light-down"></span>
  <span class="icon icon-light-up"></span>
  <span class="icon icon-line-graph"></span>
  <span class="icon icon-link"></span>
  <span class="icon icon-list"></span>
  <span class="icon icon-location-pin"></span>
  <span class="icon icon-location"></span>
  <span class="icon icon-lock"></span>
  <span class="icon icon-lock-open"></span>
  <span class="icon icon-login"></span>
  <span class="icon icon-log-out"></span>
  <span class="icon icon-loop"></span>
  <span class="icon icon-magnet"></span>
  <span class="icon icon-magnifying-glass"></span>
  <span class="icon icon-mail"></span>
  <span class="icon icon-man"></span>
  <span class="icon icon-map"></span>
  <span class="icon icon-mask"></span>
  <span class="icon icon-medal"></span>
  <span class="icon icon-megaphone"></span>
  <span class="icon icon-menu"></span>
  <span class="icon icon-merge"></span>
  <span class="icon icon-message"></span>
  <span class="icon icon-mic"></span>
  <span class="icon icon-minus"></span>
  <span class="icon icon-mobile"></span>
  <span class="icon icon-modern-mic"></span>
  <span class="icon icon-moon"></span>
  <span class="icon icon-mouse-pointer"></span>
  <span class="icon icon-mouse"></span>
  <span class="icon icon-music"></span>
  <span class="icon icon-network"></span>
  <span class="icon icon-new-message"></span>
  <span class="icon icon-new"></span>
  <span class="icon icon-news"></span>
  <span class="icon icon-newsletter"></span>
  <span class="icon icon-note"></span>
  <span class="icon icon-notification"></span>
  <span class="icon icon-notifications-off"></span>
  <span class="icon icon-old-mobile"></span>
  <span class="icon icon-old-phone"></span>
  <span class="icon icon-open-book"></span>
  <span class="icon icon-palette"></span>
  <span class="icon icon-paper-plane"></span>
  <span class="icon icon-pencil"></span>
  <span class="icon icon-phone"></span>
  <span class="icon icon-pie-chart"></span>
  <span class="icon icon-pin"></span>
  <span class="icon icon-plus"></span>
  <span class="icon icon-popup"></span>
  <span class="icon icon-power-plug"></span>
  <span class="icon icon-price-ribbon"></span>
  <span class="icon icon-price-tag"></span>
  <span class="icon icon-print"></span>
  <span class="icon icon-progress-empty"></span>
  <span class="icon icon-progress-one"></span>
  <span class="icon icon-progress-two"></span>
  <span class="icon icon-progress-full"></span>
  <span class="icon icon-publish"></span>
  <span class="icon icon-quote"></span>
  <span class="icon icon-radio"></span>
  <span class="icon icon-rainbow"></span>
  <span class="icon icon-remove-user"></span>
  <span class="icon icon-reply-all"></span>
  <span class="icon icon-reply"></span>
  <span class="icon icon-resize-100"></span>
  <span class="icon icon-resize-full-screen"></span>
  <span class="icon icon-retweet"></span>
  <span class="icon icon-rocket"></span>
  <span class="icon icon-round-brush"></span>
  <span class="icon icon-rss"></span>
  <span class="icon icon-ruler"></span>
  <span class="icon icon-save"></span>
  <span class="icon icon-scissors"></span>
  <span class="icon icon-select-arrows"></span>
  <span class="icon icon-share-alternative"></span>
  <span class="icon icon-share"></span>
  <span class="icon icon-shareable"></span>
  <span class="icon icon-shield"></span>
  <span class="icon icon-shop"></span>
  <span class="icon icon-shopping-bag"></span>
  <span class="icon icon-shopping-basket"></span>
  <span class="icon icon-shopping-cart"></span>
  <span class="icon icon-shuffle"></span>
  <span class="icon icon-signal"></span>
  <span class="icon icon-sound-mix"></span>
  <span class="icon icon-sound"></span>
  <span class="icon icon-sound-mute"></span>
  <span class="icon icon-sports-club"></span>
  <span class="icon icon-spreadsheet"></span>
  <span class="icon icon-squared-cross"></span>
  <span class="icon icon-squared-minus"></span>
  <span class="icon icon-squared-plus"></span>
  <span class="icon icon-star"></span>
  <span class="icon icon-star-outlined"></span>
  <span class="icon icon-stopwatch"></span>
  <span class="icon icon-suitcase"></span>
  <span class="icon icon-swap"></span>
  <span class="icon icon-sweden"></span>
  <span class="icon icon-switch"></span>
  <span class="icon icon-tablet"></span>
  <span class="icon icon-tablet-mobile-combo"></span>
  <span class="icon icon-tag"></span>
  <span class="icon icon-untag"></span>
  <span class="icon icon-text-document"></span>
  <span class="icon icon-text-document-inverted"></span>
  <span class="icon icon-text"></span>
  <span class="icon icon-thermometer"></span>
  <span class="icon icon-thumbs-up"></span>
  <span class="icon icon-thumbs-down"></span>
  <span class="icon icon-thunder-cloud"></span>
  <span class="icon icon-ticket"></span>
  <span class="icon icon-time-slot"></span>
  <span class="icon icon-tools"></span>
  <span class="icon icon-traffic-cone"></span>
  <span class="icon icon-trash"></span>
  <span class="icon icon-tree"></span>
  <span class="icon icon-triangle-down"></span>
  <span class="icon icon-triangle-left"></span>
  <span class="icon icon-triangle-right"></span>
  <span class="icon icon-triangle-up"></span>
  <span class="icon icon-trophy"></span>
  <span class="icon icon-tv"></span>
  <span class="icon icon-typing"></span>
  <span class="icon icon-uninstall"></span>
  <span class="icon icon-unread"></span>
  <span class="icon icon-upload-to-cloud"></span>
  <span class="icon icon-upload"></span>
  <span class="icon icon-user"></span>
  <span class="icon icon-users"></span>
  <span class="icon icon-v-card"></span>
  <span class="icon icon-video-camera"></span>
  <span class="icon icon-video"></span>
  <span class="icon icon-vinyl"></span>
  <span class="icon icon-voicemail"></span>
  <span class="icon icon-wallet"></span>
  <span class="icon icon-warning"></span>
  <span class="icon icon-water"></span>
</div>

<div class="docs-icons">
  <span class="icon icon-500px"></span>
  <span class="icon icon-500px-with-circle"></span>
  <span class="icon icon-app-store"></span>
  <span class="icon icon-baidu"></span>
  <span class="icon icon-basecamp"></span>
  <span class="icon icon-behance"></span>
  <span class="icon icon-creative-cloud"></span>
  <span class="icon icon-dribbble"></span>
  <span class="icon icon-dribbble-with-circle"></span>
  <span class="icon icon-dropbox"></span>
  <span class="icon icon-evernote"></span>
  <span class="icon icon-facebook"></span>
  <span class="icon icon-facebook-with-circle"></span>
  <span class="icon icon-flattr"></span>
  <span class="icon icon-flickr"></span>
  <span class="icon icon-flickr-with-circle"></span>
  <span class="icon icon-foursquare"></span>
  <span class="icon icon-github"></span>
  <span class="icon icon-github-with-circle"></span>
  <span class="icon icon-google-drive"></span>
  <span class="icon icon-google-hangouts"></span>
  <span class="icon icon-google-play"></span>
  <span class="icon icon-google-plus"></span>
  <span class="icon icon-google-plus-with-circle"></span>
  <span class="icon icon-grooveshark"></span>
  <span class="icon icon-houzz"></span>
  <span class="icon icon-icloud"></span>
  <span class="icon icon-instagram"></span>
  <span class="icon icon-instagram-with-circle"></span>
  <span class="icon icon-lastfm"></span>
  <span class="icon icon-lastfm-with-circle"></span>
  <span class="icon icon-linkedin"></span>
  <span class="icon icon-linkedin-with-circle"></span>
  <span class="icon icon-mail-with-circle"></span>
  <span class="icon icon-medium"></span>
  <span class="icon icon-medium-with-circle"></span>
  <span class="icon icon-mixi"></span>
  <span class="icon icon-onedrive"></span>
  <span class="icon icon-paypal"></span>
  <span class="icon icon-picasa"></span>
  <span class="icon icon-pinterest"></span>
  <span class="icon icon-pinterest-with-circle"></span>
  <span class="icon icon-qq"></span>
  <span class="icon icon-qq-with-circle"></span>
  <span class="icon icon-raft"></span>
  <span class="icon icon-raft-with-circle"></span>
  <span class="icon icon-rdio"></span>
  <span class="icon icon-rdio-with-circle"></span>
  <span class="icon icon-renren"></span>
  <span class="icon icon-scribd"></span>
  <span class="icon icon-sina-weibo"></span>
  <span class="icon icon-skype"></span>
  <span class="icon icon-skype-with-circle"></span>
  <span class="icon icon-slideshare"></span>
  <span class="icon icon-smashing"></span>
  <span class="icon icon-soundcloud"></span>
  <span class="icon icon-spotify"></span>
  <span class="icon icon-spotify-with-circle"></span>
  <span class="icon icon-stumbleupon"></span>
  <span class="icon icon-stumbleupon-with-circle"></span>
  <span class="icon icon-swarm"></span>
  <span class="icon icon-tripadvisor"></span>
  <span class="icon icon-tumblr"></span>
  <span class="icon icon-tumblr-with-circle"></span>
  <span class="icon icon-twitter"></span>
  <span class="icon icon-twitter-with-circle"></span>
  <span class="icon icon-vimeo"></span>
  <span class="icon icon-vimeo-with-circle"></span>
  <span class="icon icon-vine"></span>
  <span class="icon icon-vine-with-circle"></span>
  <span class="icon icon-vk"></span>
  <span class="icon icon-vk-with-circle"></span>
  <span class="icon icon-vk-alternitive"></span>
  <span class="icon icon-windows-store"></span>
  <span class="icon icon-xing"></span>
  <span class="icon icon-xing-with-circle"></span>
  <span class="icon icon-yelp"></span>
  <span class="icon icon-youko"></span>
  <span class="icon icon-youko-with-circle"></span>
  <span class="icon icon-youtube"></span>
  <span class="icon icon-youtube-with-circle"></span>
</div>

<h3 id="examples">Examples</h3>

<p>Entypo icons can be placed in just about any other element, so long as they are a separate HTML element (e.g., a <code class="highlighter-rouge">&lt;span&gt;</code>). See the examples below for how to put them to use.</p>

<div class="docs-example" data-example-id="">
<button class="btn btn-default-outline" type="button">
  <span class="icon icon-thumbs-up"></span>
  Like
</button>
<button class="btn btn-primary" type="button">
  <span class="icon icon-thumbs-up"></span>
  Liked!
</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default-outline"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-thumbs-up"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Like
<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-thumbs-up"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Liked!
<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="docs-example" data-example-id="">
<ul class="nav nav-pills">
  <li class="active">
    <a href="#">
      <span class="icon icon-chat"></span>
      Discussions
    </a>
  </li>
  <li>
    <a href="#">
      <span class="icon icon-bell"></span>
      Notifications
    </a>
  </li>
  <li>
    <a href="#">
      <span class="icon icon-users"></span>
      Members
    </a>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-chat"</span><span class="nt">&gt;&lt;/span&gt;</span>
      Discussions
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-bell"</span><span class="nt">&gt;&lt;/span&gt;</span>
      Notifications
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-users"</span><span class="nt">&gt;&lt;/span&gt;</span>
      Members
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="outline-buttons">Outline buttons</h2>

<p>Replace the provided button variant classes like <code class="highlighter-rouge">.btn-primary</code> with <code class="highlighter-rouge">.btn-primary-outline</code> to switch from the solid gradient backgrounds buttons to outline ones.</p>

<div class="docs-example" data-example-id="">
<button type="button" class="btn btn-lg btn-default-outline">Default</button>
<button type="button" class="btn btn-lg btn-primary-outline">Primary</button>
<button type="button" class="btn btn-lg btn-success-outline">Success</button>
<button type="button" class="btn btn-lg btn-info-outline">Info</button>
<button type="button" class="btn btn-lg btn-warning-outline">Warning</button>
<button type="button" class="btn btn-lg btn-danger-outline">Danger</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-default-outline"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-primary-outline"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-success-outline"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-info-outline"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-warning-outline"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-danger-outline"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="docs-example" data-example-id="">
<button type="button" class="btn btn-default-outline">Default</button>
<button type="button" class="btn btn-primary-outline">Primary</button>
<button type="button" class="btn btn-success-outline">Success</button>
<button type="button" class="btn btn-info-outline">Info</button>
<button type="button" class="btn btn-warning-outline">Warning</button>
<button type="button" class="btn btn-danger-outline">Danger</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default-outline"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary-outline"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success-outline"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info-outline"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning-outline"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger-outline"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="docs-example" data-example-id="">
<button type="button" class="btn btn-sm btn-default-outline">Default</button>
<button type="button" class="btn btn-sm btn-primary-outline">Primary</button>
<button type="button" class="btn btn-sm btn-success-outline">Success</button>
<button type="button" class="btn btn-sm btn-info-outline">Info</button>
<button type="button" class="btn btn-sm btn-warning-outline">Warning</button>
<button type="button" class="btn btn-sm btn-danger-outline">Danger</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-default-outline"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-primary-outline"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-success-outline"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-info-outline"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-warning-outline"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-danger-outline"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="docs-example" data-example-id="">
<button type="button" class="btn btn-xs btn-default-outline">Default</button>
<button type="button" class="btn btn-xs btn-primary-outline">Primary</button>
<button type="button" class="btn btn-xs btn-success-outline">Success</button>
<button type="button" class="btn btn-xs btn-info-outline">Info</button>
<button type="button" class="btn btn-xs btn-warning-outline">Warning</button>
<button type="button" class="btn btn-xs btn-danger-outline">Danger</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-default-outline"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-primary-outline"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-success-outline"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-info-outline"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-warning-outline"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-danger-outline"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="pill-buttons">Pill buttons</h2>

<p>Add <code class="highlighter-rouge">.btn-pill</code> to any button to make them more rounded.</p>

<div class="docs-example" data-example-id="">
<button type="button" class="btn btn-lg btn-pill btn-default">Default</button>
<button type="button" class="btn btn-lg btn-pill btn-primary">Primary</button>
<button type="button" class="btn btn-lg btn-pill btn-success">Success</button>
<button type="button" class="btn btn-lg btn-pill btn-info">Info</button>
<button type="button" class="btn btn-lg btn-pill btn-warning">Warning</button>
<button type="button" class="btn btn-lg btn-pill btn-danger">Danger</button>
<button type="button" class="btn btn-lg btn-pill btn-link">Link</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-pill btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-pill btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-pill btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-pill btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-pill btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-pill btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-lg btn-pill btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="docs-example" data-example-id="">
<button type="button" class="btn btn-pill btn-default">Default</button>
<button type="button" class="btn btn-pill btn-primary">Primary</button>
<button type="button" class="btn btn-pill btn-success">Success</button>
<button type="button" class="btn btn-pill btn-info">Info</button>
<button type="button" class="btn btn-pill btn-warning">Warning</button>
<button type="button" class="btn btn-pill btn-danger">Danger</button>
<button type="button" class="btn btn-pill btn-link">Link</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="docs-example" data-example-id="">
<button type="button" class="btn btn-sm btn-pill btn-default">Default</button>
<button type="button" class="btn btn-sm btn-pill btn-primary">Primary</button>
<button type="button" class="btn btn-sm btn-pill btn-success">Success</button>
<button type="button" class="btn btn-sm btn-pill btn-info">Info</button>
<button type="button" class="btn btn-sm btn-pill btn-warning">Warning</button>
<button type="button" class="btn btn-sm btn-pill btn-danger">Danger</button>
<button type="button" class="btn btn-sm btn-pill btn-link">Link</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-pill btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-pill btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-pill btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-pill btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-pill btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-pill btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-sm btn-pill btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre></div>

<div class="docs-example" data-example-id="">
<button type="button" class="btn btn-xs btn-pill btn-default">Default</button>
<button type="button" class="btn btn-xs btn-pill btn-primary">Primary</button>
<button type="button" class="btn btn-xs btn-pill btn-success">Success</button>
<button type="button" class="btn btn-xs btn-pill btn-info">Info</button>
<button type="button" class="btn btn-xs btn-pill btn-warning">Warning</button>
<button type="button" class="btn btn-xs btn-pill btn-danger">Danger</button>
<button type="button" class="btn btn-xs btn-pill btn-link">Link</button>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-pill btn-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-pill btn-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-pill btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-pill btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-pill btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-pill btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-xs btn-pill btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/button&gt;</span></code></pre></div>

<h2 id="avatar-list">Avatar list</h2>

<p>Join a series of icons into a single horizontal grouping.</p>

<div class="docs-example" data-example-id="">
<ul class="avatar-list">
  <li class="avatar-list-item">
    <img class="img-circle" src="../assets/img/avatar-dhg.png" />
  </li>
  <li class="avatar-list-item">
    <img class="img-circle" src="../assets/img/avatar-mdo.png" />
  </li>
  <li class="avatar-list-item">
    <img class="img-circle" src="../assets/img/avatar-fat.jpg" />
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"avatar-list"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"avatar-list-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-dhg.png"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"avatar-list-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-mdo.png"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"avatar-list-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-fat.jpg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="growl">Growl</h2>

<p>Use the Growl plugin to turn any Bootstrap alert into an OS X style notification. Growls are fixed to the top right of your viewport and can be dismissed, just like normal Bootstrap alerts.</p>

<div class="docs-example" data-example-id="">
<div class="growl growl-static">
  <div class="alert alert-dark alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>Well done!</strong> You successfully read this important alert message.
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"growl growl-static"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-dark alert-dismissable"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span>×<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;strong&gt;</span>Well done!<span class="nt">&lt;/strong&gt;</span> You successfully read this important alert message.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="profile-header">Profile header</h2>

<p>Simple profile headers to show off a user’s profile information</p>

<div class="docs-example" data-example-id="">
<div class="profile-header text-center" style="background-image: url(../assets/img/iceland.jpg); ">
  <div class="container-fluid">
    <div class="container-inner">
      <img class="img-circle media-object" src="../assets/img/avatar-dhg.png" />
      <h3 class="profile-header-user">Dave Gamache</h3>
      <p class="profile-header-bio">I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.</p>
    </div>
  </div>
  <nav class="profile-header-nav">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#">Photos</a></li>
      <li><a href="#">Others</a></li>
      <li><a href="#">Anothers</a></li>
    </ul>
  </nav>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"profile-header text-center"</span> <span class="na">style=</span><span class="s">"background-image: url(../assets/img/iceland.jpg); "</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fluid"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-inner"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"img-circle media-object"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-dhg.png"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"profile-header-user"</span><span class="nt">&gt;</span>Dave Gamache<span class="nt">&lt;/h3&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"profile-header-bio"</span><span class="nt">&gt;</span>I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"profile-header-nav"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Photos<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Others<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
      <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Anothers<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
    <span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/nav&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="panel-profile">Panel profile</h2>

<p>Feature a user’s profile with the <code class="highlighter-rouge">.panel-profile</code> variant.</p>

<div class="docs-example" data-example-id="">
<div class="m-t">
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default panel-profile">
        <div class="panel-heading" style="background-image: url(https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11312291_348657648678007_1202941362_n.jpg);"></div>
        <div class="panel-body text-center">
          <img class="panel-profile-img" src="../assets/img/avatar-fat.jpg" />
          <h5 class="panel-title">Jacob Thornton</h5>
          <p class="m-b-md">Big belly rude boy, million dollar hustler. Unemployed.</p>
          <button class="btn btn-primary-outline btn-sm">
            <span class="icon icon-add-user"></span> Follow
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default panel-profile">
        <div class="panel-heading" style="background-image: url(https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11240760_365538423656311_112029877_n.jpg);"></div>
        <div class="panel-body text-center">
          <img class="panel-profile-img" src="../assets/img/avatar-mdo.png" />
          <h5 class="panel-title">Mark Otto</h5>
          <p class="m-b-md">GitHub and Bootstrap. Formerly at Twitter. Huge nerd.</p>
          <button class="btn btn-primary-outline btn-sm">
            <span class="icon icon-add-user"></span> Follow
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"m-t"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default panel-profile"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span> <span class="na">style=</span><span class="s">"background-image: url(https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11312291_348657648678007_1202941362_n.jpg);"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body text-center"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"panel-profile-img"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-fat.jpg"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"panel-title"</span><span class="nt">&gt;</span>Jacob Thornton<span class="nt">&lt;/h5&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"m-b-md"</span><span class="nt">&gt;</span>Big belly rude boy, million dollar hustler. Unemployed.<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary-outline btn-sm"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-add-user"</span><span class="nt">&gt;&lt;/span&gt;</span> Follow
          <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default panel-profile"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span> <span class="na">style=</span><span class="s">"background-image: url(https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11240760_365538423656311_112029877_n.jpg);"</span><span class="nt">&gt;&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body text-center"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"panel-profile-img"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-mdo.png"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"panel-title"</span><span class="nt">&gt;</span>Mark Otto<span class="nt">&lt;/h5&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"m-b-md"</span><span class="nt">&gt;</span>GitHub and Bootstrap. Formerly at Twitter. Huge nerd.<span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary-outline btn-sm"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-add-user"</span><span class="nt">&gt;&lt;/span&gt;</span> Follow
          <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="panel-link-list">Panel link list</h2>

<p>Simple panel modifier for link lists.</p>

<div class="docs-example" data-example-id="">
<div class="panel panel-default panel-link-list">
  <div class="panel-body">
    © 2015 Bootstrap

    <a href="#">About</a>
    <a href="#">Help</a>
    <a href="#">Terms</a>
    <a href="#">Privacy</a>
    <a href="#">Cookies</a>
    <a href="#">Ads </a>

    <a href="#">info</a>
    <a href="#">Brand</a>
    <a href="#">Blog</a>
    <a href="#">Status</a>
    <a href="#">Apps</a>
    <a href="#">Jobs</a>
    <a href="#">Advertise</a>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default panel-link-list"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
    © 2015 Bootstrap

    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>About<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Help<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Terms<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Privacy<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Cookies<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Ads <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>info<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Brand<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Blog<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Status<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Apps<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Jobs<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Advertise<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="media-list-steam">Media list steam</h2>

<div class="docs-example" data-example-id="">
<ul class="media-list media-list-stream c-w-md">
  <li class="media p-a">
    <a class="media-left" href="#">
      <img class="media-object img-circle" src="../assets/img/avatar-dhg.png" />
    </a>
    <div class="media-body">
      <div class="media-heading">
        <small class="pull-right">4 min</small>
        <h5 class="m-b-0">Dave Gamache</h5>
      </div>
      <p>
        Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      </p>
      <img class="media-body-inline-img" src="../assets/img/instagram_17.jpg" />
      <ul class="media-list m-b">
        <li class="media">
          <a class="media-left" href="#">
            <img class="media-object img-circle" src="../assets/img/avatar-fat.jpg" />
          </a>
          <div class="media-body">
            <strong>Jacon Thornton:</strong>
            Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
          </div>
        </li>
        <li class="media">
          <a class="media-left" href="#">
            <img class="media-object img-circle" src="../assets/img/avatar-mdo.png" />
          </a>
          <div class="media-body">
            <strong>Mark Otto:</strong>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          </div>
        </li>
      </ul>
    </div>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list media-list-stream c-w-md"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media p-a"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-dhg.png"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"pull-right"</span><span class="nt">&gt;</span>4 min<span class="nt">&lt;/small&gt;</span>
        <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"m-b-0"</span><span class="nt">&gt;</span>Dave Gamache<span class="nt">&lt;/h5&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;p&gt;</span>
        Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-body-inline-img"</span> <span class="na">src=</span><span class="s">"../assets/img/instagram_17.jpg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list m-b"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-fat.jpg"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;strong&gt;</span>Jacon Thornton:<span class="nt">&lt;/strong&gt;</span>
            Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-mdo.png"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;strong&gt;</span>Mark Otto:<span class="nt">&lt;/strong&gt;</span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/li&gt;</span>
      <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="media-list-conversation">Media list conversation</h2>

<div class="docs-example" data-example-id="">
<ul class="media-list media-list-conversation c-w-md">
  <li class="media media-current-user m-b-md">
    <div class="media-body">
      <div class="media-body-text">
        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
      </div>
      <div class="media-footer">
        <small class="text-muted">
          <a href="#">Dave Gamache</a> at 4:20PM
        </small>
      </div>
    </div>
    <a class="media-right" href="#">
      <img class="img-circle media-object" src="../assets/img/avatar-dhg.png" />
    </a>
  </li>
  <li class="media m-b-md">
    <a class="media-left" href="#">
      <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg" />
    </a>
    <div class="media-body">
      <div class="media-body-text">
       Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
      </div>
      <div class="media-body-text">
       Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
      </div>
      <div class="media-body-text">
       Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
      </div>
      <div class="media-footer">
        <small class="text-muted">
          <a href="#">Fat</a> at 4:28PM
        </small>
      </div>
    </div>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list media-list-conversation c-w-md"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media media-current-user m-b-md"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body-text"</span><span class="nt">&gt;</span>
        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dave Gamache<span class="nt">&lt;/a&gt;</span> at 4:20PM
        <span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-right"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"img-circle media-object"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-dhg.png"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media m-b-md"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"img-circle media-object"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-fat.jpg"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body-text"</span><span class="nt">&gt;</span>
       Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body-text"</span><span class="nt">&gt;</span>
       Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body-text"</span><span class="nt">&gt;</span>
       Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-footer"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;small</span> <span class="na">class=</span><span class="s">"text-muted"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Fat<span class="nt">&lt;/a&gt;</span> at 4:28PM
        <span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="media-list-users">Media list users</h2>

<div class="docs-example" data-example-id="">
<ul class="media-list media-list-users list-group">
  <li class="list-group-item">
    <div class="media">
      <a class="media-left" href="#">
        <img class="media-object img-circle" src="../assets/img/avatar-fat.jpg" />
      </a>
      <div class="media-body">
        <button class="btn btn-primary-outline btn-sm pull-right">
          <span class="icon icon-add-user"></span> Follow
        </button>
        <strong>Jacob Thornton</strong>
        <small>@fat - San Francisco</small>
      </div>
    </div>
  </li>
  <li class="list-group-item">
    <div class="media">
      <a class="media-left" href="#">
        <img class="media-object img-circle" src="../assets/img/avatar-dhg.png" />
      </a>
      <div class="media-body">
        <button class="btn btn-primary-outline btn-sm pull-right">
          <span class="icon icon-add-user"></span> Follow
        </button>
        <strong>Dave Gamache</strong>
        <small>@dhg - Palo Alto</small>
      </div>
    </div>
  </li>
  <li class="list-group-item">
    <div class="media">
      <a class="media-left" href="#">
        <img class="media-object img-circle" src="../assets/img/avatar-mdo.png" />
      </a>
      <div class="media-body">
        <button class="btn btn-primary-outline btn-sm pull-right">
          <span class="icon icon-add-user"></span> Follow
        </button>
        <strong>Mark Otto</strong>
        <small>@mdo - San Francisco</small>
      </div>
    </div>
  </li>
</ul>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list media-list-users list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-fat.jpg"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary-outline btn-sm pull-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-add-user"</span><span class="nt">&gt;&lt;/span&gt;</span> Follow
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;strong&gt;</span>Jacob Thornton<span class="nt">&lt;/strong&gt;</span>
        <span class="nt">&lt;small&gt;</span>@fat - San Francisco<span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-dhg.png"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary-outline btn-sm pull-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-add-user"</span><span class="nt">&gt;&lt;/span&gt;</span> Follow
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;strong&gt;</span>Dave Gamache<span class="nt">&lt;/strong&gt;</span>
        <span class="nt">&lt;small&gt;</span>@dhg - Palo Alto<span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"media-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object img-circle"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-mdo.png"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-primary-outline btn-sm pull-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon icon-add-user"</span><span class="nt">&gt;&lt;/span&gt;</span> Follow
        <span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;strong&gt;</span>Mark Otto<span class="nt">&lt;/strong&gt;</span>
        <span class="nt">&lt;small&gt;</span>@mdo - San Francisco<span class="nt">&lt;/small&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span></code></pre></div>

<h2 id="custom-form-controls">Custom form controls</h2>

<p>Custom select menus can be easily created for browsers that support the styles.</p>

<div class="docs-example" data-example-id="">
<select class="custom-select">
  <option>Default</option>
  <option>First option</option>
  <option>Another option</option>
  <option>Alternative</option>
  <option>Last one</option>
</select>

<select class="custom-select custom-select-sm">
  <option>Default</option>
  <option>First option</option>
  <option>Another option</option>
  <option>Alternative</option>
  <option>Last one</option>
</select>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"custom-select"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Default<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>First option<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Another option<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Alternative<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Last one<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"custom-select custom-select-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Default<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>First option<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Another option<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Alternative<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Last one<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>

<p>Custom selects support the <code class="highlighter-rouge">disabled</code> attribute as well.</p>

<div class="docs-example" data-example-id="">
<select class="custom-select" disabled="">
  <option>Default</option>
  <option>First option</option>
  <option>Another option</option>
  <option>Alternative</option>
  <option>Last one</option>
</select>

<select class="custom-select custom-select-sm" disabled="">
  <option>Default</option>
  <option>First option</option>
  <option>Another option</option>
  <option>Alternative</option>
  <option>Last one</option>
</select>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"custom-select"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Default<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>First option<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Another option<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Alternative<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Last one<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"custom-select custom-select-sm"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option&gt;</span>Default<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>First option<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Another option<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Alternative<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option&gt;</span>Last one<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>

<p>Custom checkboxes and radios are built on the default Bootstrap checkboxes and radios. Add a couple extra classes and the indicator and you should be all set.</p>

<div class="docs-example" data-example-id="">
<div class="checkbox custom-control custom-checkbox">
  <label>
    <input type="checkbox" />
    <span class="custom-control-indicator"></span>
    Check this custom checkbox
  </label>
</div>
<div class="checkbox custom-control custom-checkbox">
  <label>
    <input type="checkbox" checked="" />
    <span class="custom-control-indicator"></span>
    This custom checkbox is checked
  </label>
</div>
<div class="checkbox custom-control custom-checkbox">
  <label>
    <input type="checkbox" disabled="" />
    <span class="custom-control-indicator"></span>
    This custom checkbox is disabled
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    Check this custom checkbox
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">checked</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    This custom checkbox is checked
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    This custom checkbox is disabled
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>They can be done inline, too.</p>

<div class="docs-example" data-example-id="">
<div class="checkbox-inline custom-control custom-checkbox">
  <label>
    <input type="checkbox" />
    <span class="custom-control-indicator"></span>
    Check this custom checkbox
  </label>
</div>
<div class="checkbox-inline custom-control custom-checkbox">
  <label>
    <input type="checkbox" checked="" />
    <span class="custom-control-indicator"></span>
    This custom checkbox is checked
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox-inline custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    Check this custom checkbox
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"checkbox-inline custom-control custom-checkbox"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">checked</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    This custom checkbox is checked
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Same goes with radio inputs.</p>

<div class="docs-example" data-example-id="">
<div class="radio custom-control custom-radio">
  <label>
    <input type="radio" id="radio1" name="radio" />
    <span class="custom-control-indicator"></span>
    Toggle this custom radio
  </label>
</div>
<div class="radio custom-control custom-radio">
  <label>
    <input type="radio" id="radio2" name="radio" />
    <span class="custom-control-indicator"></span>
    Or toggle this other custom radio
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">id=</span><span class="s">"radio1"</span> <span class="na">name=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    Toggle this custom radio
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">id=</span><span class="s">"radio2"</span> <span class="na">name=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    Or toggle this other custom radio
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>And they can also be inline.</p>

<div class="docs-example" data-example-id="">
<div class="radio-inline custom-control custom-radio">
  <label>
    <input type="radio" id="radio1" name="radio" />
    <span class="custom-control-indicator"></span>
    Toggle this custom radio
  </label>
</div>
<div class="radio-inline custom-control custom-radio">
  <label>
    <input type="radio" id="radio2" name="radio" />
    <span class="custom-control-indicator"></span>
    Or toggle this other custom radio
  </label>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio-inline custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">id=</span><span class="s">"radio1"</span> <span class="na">name=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    Toggle this custom radio
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"radio-inline custom-control custom-radio"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">id=</span><span class="s">"radio2"</span> <span class="na">name=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-control-indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
    Or toggle this other custom radio
  <span class="nt">&lt;/label&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="custom-modals">Custom Modals</h2>

<p>Support for multiple, stackable modal bodies and scrolling bodies using the new <code class="highlighter-rouge">.modal-body-scroller</code> modifier.</p>

<div class="docs-example" data-example-id="">
<div class="modal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Medium Modal</h4>
      </div>
      <div class="modal-body modal-body-scroller">
        <p>Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo.</p>

        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.</p>

        <p>Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo.</p>

        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.</p>

        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum.</p>
      </div>

      <div class="modal-body">
        <input type="text" class="form-control" name="dm" placeholder="Message" />
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-md"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;/button&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Medium Modal<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body modal-body-scroller"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<span class="nt">&lt;/p&gt;</span>

        <span class="nt">&lt;p&gt;</span>Nullam id dolor id nibh ultricies vehicula ut id elit. Sed posuere consectetur est at lobortis. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo.<span class="nt">&lt;/p&gt;</span>

        <span class="nt">&lt;p&gt;</span>Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui.<span class="nt">&lt;/p&gt;</span>

        <span class="nt">&lt;p&gt;</span>Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.<span class="nt">&lt;/p&gt;</span>

        <span class="nt">&lt;p&gt;</span>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<span class="nt">&lt;/p&gt;</span>

        <span class="nt">&lt;p&gt;</span>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo.<span class="nt">&lt;/p&gt;</span>

        <span class="nt">&lt;p&gt;</span>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna mollis ornare vel eu leo.<span class="nt">&lt;/p&gt;</span>

        <span class="nt">&lt;p&gt;</span>Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum.<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Message"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<p>Also, drop the regular footer for a new two-up set of actions using the <code class="highlighter-rouge">.modal-actions</code> component.</p>

<div class="docs-example" data-example-id="">
<div class="modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Small modal</h4>
      </div>
      <div class="modal-body">
        <p>Modal body text...</p>
      </div>
      <div class="modal-actions">
        <button type="button" class="btn-link modal-action" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn-link modal-action" data-dismiss="modal">
          <strong>Continue</strong>
        </button>
      </div>
    </div>
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-dialog modal-sm"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-content"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span> <span class="na">aria-label=</span><span class="s">"Close"</span><span class="nt">&gt;&lt;span</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/span&gt;&lt;/button&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"modal-title"</span><span class="nt">&gt;</span>Small modal<span class="nt">&lt;/h4&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Modal body text...<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"modal-actions"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn-link modal-action"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/button&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn-link modal-action"</span> <span class="na">data-dismiss=</span><span class="s">"modal"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;strong&gt;</span>Continue<span class="nt">&lt;/strong&gt;</span>
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="custom-containers">Custom containers</h2>

<p>We’ve introduced a new component for vertically aligning content with <code class="highlighter-rouge">.container-content-middle</code> and <code class="highlighter-rouge">.container-content-bottom</code>. This is particularly useful for sign in and other simple pages.</p>

<div class="docs-example" data-example-id="">
<div class="container-fill-height">
  <div class="container-content-middle">
    Vertically centered content.
  </div>
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-fill-height"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container-content-middle"</span><span class="nt">&gt;</span>
    Vertically centered content.
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h1 id="plugins">Plugins</h1>

<h2 id="image-grids">Image grids</h2>

<p>Use the image grid plugin to quickly layout multi sized images in a grid. For the image grid to work properly, it needs to get the raw image sizes (either from a data attribute, like <code class="highlighter-rouge">data-width</code> and <code class="highlighter-rouge">data-height</code> or you need to wait for image load before calling <code class="highlighter-rouge">.imageGrid</code>).</p>

<h3 id="options">Options</h3>

<ul>
  <li>padding: 10,</li>
  <li>targetHeight: 300,</li>
  <li>display: ‘inline-block’</li>
</ul>

<h3 id="javascript-api">JavaScript API</h3>

<div class="docs-example" data-example-id="">
$('.myGrid').imageGrid()
</div>
<div class="highlight"><pre><code class="language-js" data-lang="js"><span class="nx">$</span><span class="p">(</span><span class="s1">'.myGrid'</span><span class="p">).</span><span class="nx">imageGrid</span><span class="p">()</span></code></pre></div>

<h3 id="data-api">Data Api</h3>

<div class="docs-example" data-example-id="">
<div data-grid="images">
  <img data-width="350" data-height="300" src="http://placehold.it/350x300/EEE04A/ffffff" />
  <img data-width="420" data-height="320" src="http://placehold.it/420x320/5cb85c/ffffff" />
  <img data-width="320" data-height="380" src="http://placehold.it/320x380/5bc0de/ffffff" />
  <img data-width="472" data-height="500" src="http://placehold.it/472x500/f0ad4e/ffffff" />
  <img data-width="540" data-height="360" src="http://placehold.it/540x360/FF3167/ffffff" />
</div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">data-grid=</span><span class="s">"images"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">data-width=</span><span class="s">"350"</span> <span class="na">data-height=</span><span class="s">"300"</span> <span class="na">src=</span><span class="s">"http://placehold.it/350x300/EEE04A/ffffff"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">data-width=</span><span class="s">"420"</span> <span class="na">data-height=</span><span class="s">"320"</span> <span class="na">src=</span><span class="s">"http://placehold.it/420x320/5cb85c/ffffff"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">data-width=</span><span class="s">"320"</span> <span class="na">data-height=</span><span class="s">"380"</span> <span class="na">src=</span><span class="s">"http://placehold.it/320x380/5bc0de/ffffff"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">data-width=</span><span class="s">"472"</span> <span class="na">data-height=</span><span class="s">"500"</span> <span class="na">src=</span><span class="s">"http://placehold.it/472x500/f0ad4e/ffffff"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">data-width=</span><span class="s">"540"</span> <span class="na">data-height=</span><span class="s">"360"</span> <span class="na">src=</span><span class="s">"http://placehold.it/540x360/FF3167/ffffff"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></div>

<h2 id="zoom">Zoom</h2>

<p>The zoom plugin provides simple image zoom functionality. Add a <code class="highlighter-rouge">data-action="zoom"</code> attribute to any image you want to make zoomable. Zoomed images can be closed by scroll, <code class="highlighter-rouge">esc</code>, or click. Use the meta key to open raw element in new tab.</p>

<h3 id="data-api-1">Data API</h3>

<div class="docs-example" data-example-id="">
<img data-action="zoom" style="width: 150px;" src="../assets/img/avatar-mdo.png" />
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;img</span> <span class="na">data-action=</span><span class="s">"zoom"</span> <span class="na">style=</span><span class="s">"width: 150px;"</span> <span class="na">src=</span><span class="s">"../assets/img/avatar-mdo.png"</span><span class="nt">&gt;</span></code></pre></div>



      <a class="docs-top" style="display: none" href="#">Back to top</a>
    </div>
  

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
  </body>
</html>

