(function() {
  //Global app embed for Tydal (formerly Rivo Reviews)
  function loadScript(src, defer, done) {
    var js = document.createElement('script');
    js.src = src;
    js.defer = defer;
    js.onload = function(){done();};
    js.onerror = function(){
      done(new Error('Failed to load script ' + src));
    };
    document.head.appendChild(js);
  }

  function browserSupportsAllFeatures() {
    return window.Promise && window.fetch && window.Symbol;
  }

  if (browserSupportsAllFeatures()) {
    main();
  } else {
    loadScript('https://cdnjs.cloudflare.com/polyfill/v3/polyfill.min.js?features=Promise,fetch', true, main);
  }

  function loadAppScripts(){
    loadScript(window.Tydal.global_config.asset_urls.rev.init_js, true, function(){});
  }

  function main(err) {
    loadScript(window.Tydal.global_config.asset_urls.global.helper_js, false, loadAppScripts);
  }
})();
