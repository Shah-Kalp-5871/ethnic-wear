
<!doctype html>
<html
  class="no-js"
  lang="en"
>
  <head>

<script>
  function onCheckoutNow(e) {
    const closeButton = document.querySelector('.cart-drawer__close-button');

    if (closeButton) {
      console.log('Clicking close button to close cart');
      closeButton.click(); // Trigger cart close via official method
    }

    // Wait for cart to close before opening checkout
    setTimeout(() => {
      onCheckoutClick(e);
    }, 500);
  }
</script>
  
      <!-- Gokwik theme code start -->
  <link rel="dns-prefetch" href="https://pdp.gokwik.co/">
  <link rel="dns-prefetch" href="https://api.gokwik.co">
    

<script>

window.merchantInfo  = {
        mid: "19g6jlukv6e9l",
        environment: "production",
        type: "merchantInfo",
  		storeId: "80712991022",
  		fbpixel: "257868587024923",
      }
var productFormSelector = '';
var cart = {"note":null,"attributes":{},"original_total_price":0,"total_price":0,"total_discount":0,"total_weight":0.0,"item_count":0,"items":[],"requires_shipping":false,"currency":"INR","items_subtotal_price":0,"cart_level_discount_applications":[],"checkout_charge_amount":0}
var templateName = 'index'
</script>

<script src="https://pdp.gokwik.co/merchant-integration/build/merchant.integration.js?v4"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
  window.addEventListener('gokwikLoaded', e => {

   $('.gokwik-checkout button').prop('disabled', false);
              $('.gokwik-checkout button').removeClass('disabled');
         $('#gokwik-buy-now').prop('disabled', false);
              $('#gokwik-buy-now').removeClass('disabled');

  const targetElement = document.querySelector("body");
  function debounce(func, delay) {
    let timeoutId;
    return function () {
      const context = this;
      const args = arguments;
      clearTimeout(timeoutId);
      timeoutId = setTimeout(function () {
        func.apply(context, args);
      }, delay);
    };
  }
  const observer = new MutationObserver(() => {
 
    debouncedMyTimer();
  });
  const debouncedMyTimer = debounce(() => {
    observer.disconnect();
    enableGokwikCart();
    observer.observe(targetElement, { childList: true, subtree: true });
  }, 700);
  function enableGokwikCart() {
      $('.gokwik-checkout button').prop('disabled', false);
              $('.gokwik-checkout button').removeClass('disabled');

  }
  const config = { childList: true, subtree: true };
  observer.observe(targetElement, config);
});
</script>

<style>

.gokwik-checkout {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: end;
  
}
.gokwik-checkout button {
  max-width:100%;
  width: 100%;
  border: none;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #1f282f;
  position: relative;
  margin: 0;
cursor: pointer;
  border-radius: 5px;
  padding: 5px 10px;
  height:45px;
}
#gokwik-buy-now.disabled, .gokwik-disabled{
  opacity:0.5;
  cursor: not-allowed;
  }
  .gokwik-checkout button:focus {
  outline: none;
}
.gokwik-checkout button > span {
  display: flex;
}
.gokwik-checkout button > span.btn-text {
  display: flex;
  flex-direction: column;
  color: #ffffff;
  align-items: flex-start;
}
.gokwik-checkout button > span.btn-text > span:last-child {
	padding-top: 2px;
    font-size: 10px;
    line-height: 10px;
    text-transform: initial;
}
.gokwik-checkout button > span.btn-text > span:first-child {
   font-size: 15px;
}
.gokwik-checkout button > span.pay-opt-icon img:first-child {
  margin-right: 10px;
  margin-left: 10px;
}
/*   Additional */
.gokwik-checkout button.disabled{
  opacity:0.5;
  cursor: not-allowed;
  }
.gokwik-checkout button.disabled .addloadr#btn-loader{
   display: flex!important;
}
  #gokwik-buy-now.disabled .addloadr#btn-loader{
   display: flex!important;
}
    #gokwik-buy-now:disabled{
   cursor: not-allowed;
}





 

  

 #gokwik-buy-now {
   background: #1f282f;
   width: 100%;
   color: #ffffff;
   cursor: pointer;
   line-height: 1;
   border: none;
   padding: 15px 10px;
   font-size: 14px;
    margin-bottom: 10px;
   position:relative;
   height:53px;
 }

  

/* Loader CSS */
  #btn-loader{
    display: none;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    justify-content: center;
    align-items: center;
    background:#1f282f;
    border-radius:5px;
    
  } 

.cir-loader,
.cir-loader:after {
  border-radius: 50%;
  width: 35px;
  height: 35px;
}
.cir-loader {
  margin: 6px auto;
  font-size: 10px;
  position: relative;
  text-indent: -9999em;
  border-top: 0.5em solid rgba(255, 255, 255, 0.2);
  border-right: 0.5em solid rgba(255, 255, 255, 0.2);
  border-bottom: 0.5em solid rgba(255, 255, 255, 0.2);
  border-left: 0.5em solid #ffffff;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load8 1.1s infinite linear;
  animation: load8 1.1s infinite linear;
}
@-webkit-keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style> 





    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CP1JR43K2V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config','G-CP1JR43K2V',{ 'groups': 'GA4'});
</script>
 <!-- Gokwik theme code End --><link
        rel="icon"
        type="image/png"
        href="//mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2_fefa99b4-b0cd-4628-a623-94f13a49123a.png?crop=center&height=32&v=1710246886&width=32"
      >
    <link
      rel="expect"
      href="#MainContent"
      blocking="render"
      id="view-transition-render-blocker"
    ><meta charset="utf-8">
<meta
  http-equiv="X-UA-Compatible"
  content="IE=edge"
>
<meta
  name="viewport"
  content="width=device-width,initial-scale=1"
>
<meta
  name="view-transition"
  content="same-origin"
>
<meta
  name="theme-color"
  content=""
>

<meta
  property="og:site_name"
  content="MudAura"
>
<meta
  property="og:url"
  content="https://mudaura.com/"
>
<meta
  property="og:title"
  content="MudAura"
>
<meta
  property="og:type"
  content="website"
>
<meta
  property="og:description"
  content="MudAura"
><meta
  name="twitter:card"
  content="summary_large_image"
>
<meta
  name="twitter:title"
  content="MudAura"
>
<meta
  name="twitter:description"
  content="MudAura"
>

<title>
  MudAura
</title>

<link
  rel="canonical"
  href="https://mudaura.com/"
>


<link href="//mudaura.com/cdn/shop/t/33/assets/overflow-list.css?v=168694168152117541881759323088" as="style" rel="preload">
<link href="//mudaura.com/cdn/shop/t/33/assets/base.css?v=120352272787097795821759323089" rel="stylesheet" type="text/css" media="all" />

<link
    rel="preload"
    as="font"
    href="//mudaura.com/cdn/fonts/inter/inter_n4.b2a3f24c19b4de56e8871f609e73ca7f6d2e2bb9.woff2"
    type="font/woff2"
    crossorigin
    fetchpriority="low"
  ><link
    rel="preload"
    as="font"
    href="//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_n6.30a391fe19ded5366170913f031e653a88992edc.woff2"
    type="font/woff2"
    crossorigin
    fetchpriority="low"
  ><link
    rel="preload"
    as="font"
    href="//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_n6.30a391fe19ded5366170913f031e653a88992edc.woff2"
    type="font/woff2"
    crossorigin
    fetchpriority="low"
  ><link
    rel="preload"
    as="font"
    href="//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_n6.30a391fe19ded5366170913f031e653a88992edc.woff2"
    type="font/woff2"
    crossorigin
    fetchpriority="low"
  >
<script type="importmap">
  {
    "imports": {
      "@theme/critical": "//mudaura.com/cdn/shop/t/33/assets/critical.js?v=169402557219780209121759323088",
      "@theme/product-title": "//mudaura.com/cdn/shop/t/33/assets/product-title-truncation.js?v=81744426891537421781759323088",
      "@theme/component": "//mudaura.com/cdn/shop/t/33/assets/component.js?v=74239122572524296041759323089",
      "@theme/dialog": "//mudaura.com/cdn/shop/t/33/assets/dialog.js?v=94382931671780430451759323088",
      "@theme/events": "//mudaura.com/cdn/shop/t/33/assets/events.js?v=59172389608566392641759323088",
      "@theme/focus": "//mudaura.com/cdn/shop/t/33/assets/focus.js?v=60436577539430446401759323088",
      "@theme/morph": "//mudaura.com/cdn/shop/t/33/assets/morph.js?v=175376767362814376631759323088",
      "@theme/paginated-list": "//mudaura.com/cdn/shop/t/33/assets/paginated-list.js?v=95298315036233333871759323089",
      "@theme/performance": "//mudaura.com/cdn/shop/t/33/assets/performance.js?v=171015751390534793081759323088",
      "@theme/product-form": "//mudaura.com/cdn/shop/t/33/assets/product-form.js?v=127515301325557712001759323088",
      "@theme/recently-viewed-products": "//mudaura.com/cdn/shop/t/33/assets/recently-viewed-products.js?v=94729125001750262651759323088",
      "@theme/scrolling": "//mudaura.com/cdn/shop/t/33/assets/scrolling.js?v=10957690925586738441759323089",
      "@theme/section-renderer": "//mudaura.com/cdn/shop/t/33/assets/section-renderer.js?v=117273408521114569061759323089",
      "@theme/section-hydration": "//mudaura.com/cdn/shop/t/33/assets/section-hydration.js?v=177651605160027701221759323088",
      "@theme/utilities": "//mudaura.com/cdn/shop/t/33/assets/utilities.js?v=2628875420026591481759323088",
      "@theme/variant-picker": "//mudaura.com/cdn/shop/t/33/assets/variant-picker.js?v=113536721324242252251759323089",
      "@theme/media-gallery": "//mudaura.com/cdn/shop/t/33/assets/media-gallery.js?v=111441960308641931071759323088",
      "@theme/quick-add": "//mudaura.com/cdn/shop/t/33/assets/quick-add.js?v=74531385036627369001759323088",
      "@theme/paginated-list-aspect-ratio": "//mudaura.com/cdn/shop/t/33/assets/paginated-list-aspect-ratio.js?v=25254270272143792451759323088",
      "@theme/popover-polyfill": "//mudaura.com/cdn/shop/t/33/assets/popover-polyfill.js?v=119029313658895111201759323089"
    }
  }
</script>


  
  <script
    src="//mudaura.com/cdn/shop/t/33/assets/view-transitions.js?v=84877080446900032951759323088"
    async
    blocking="render"
  ></script>
  


<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/critical.js?v=169402557219780209121759323088"
>

<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/utilities.js?v=2628875420026591481759323088"
  fetchpriority="low"
>
<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/component.js?v=74239122572524296041759323089"
  fetchpriority="low"
>
<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/section-renderer.js?v=117273408521114569061759323089"
  fetchpriority="low"
>
<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/section-hydration.js?v=177651605160027701221759323088"
  fetchpriority="low"
>
<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/morph.js?v=175376767362814376631759323088"
  fetchpriority="low"
>



<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/focus.js?v=60436577539430446401759323088"
  fetchpriority="low"
>
<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/recently-viewed-products.js?v=94729125001750262651759323088"
  fetchpriority="low"
>
<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/scrolling.js?v=10957690925586738441759323089"
  fetchpriority="low"
>
<link
  rel="modulepreload"
  href="//mudaura.com/cdn/shop/t/33/assets/events.js?v=59172389608566392641759323088"
  fetchpriority="low"
>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/popover-polyfill.js?v=119029313658895111201759323089"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/quick-add.js?v=74531385036627369001759323088"
  type="module"
  fetchpriority="low"
></script>

  <script
    src="//mudaura.com/cdn/shop/t/33/assets/cart-discount.js?v=107077853990124422021759323088"
    type="module"
    fetchpriority="low"
  ></script>

<script
  src="//mudaura.com/cdn/shop/t/33/assets/dialog.js?v=94382931671780430451759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/variant-picker.js?v=113536721324242252251759323089"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/product-card.js?v=174129639976667491711759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/product-form.js?v=127515301325557712001759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/accordion-custom.js?v=99000499017714805851759323089"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/disclosure-custom.js?v=168050880623268140331759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/media.js?v=37825095869491791421759323089"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/product-price.js?v=30079423257668675401759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/product-title-truncation.js?v=81744426891537421781759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/product-inventory.js?v=16343734458933704981759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/show-more.js?v=94563802205717136101759323089"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/slideshow.js?v=106062376210414582281759323089"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/anchored-popover.js?v=95953304814728754461759323089"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/floating-panel.js?v=128677600744947036551759323089"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/video-background.js?v=25237992823806706551759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/component-quantity-selector.js?v=56330027151833116691759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/media-gallery.js?v=111441960308641931071759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/rte-formatter.js?v=101420294193111439321759323088"
  type="module"
  fetchpriority="low"
></script>
<script
  src="//mudaura.com/cdn/shop/t/33/assets/gift-card-recipient-form.js?v=129634859299628245901759323089"
  type="module"
  fetchpriority="low"
></script>






  <script
    src="//mudaura.com/cdn/shop/t/33/assets/product-card-link.js?v=97122579314620396511759323088"
    type="module"
    fetchpriority="low"
  ></script>


<script
  src="//mudaura.com/cdn/shop/t/33/assets/auto-close-details.js?v=58350291535404441581759323089"
  defer="defer"
></script>

<script>
  const basePath = 'https://cdn.shopify.com/static/themes/horizon/placeholders';
  const Theme = {
    placeholders: {
      general: [
        `${basePath}/general-1.png`,
        `${basePath}/general-2.png`,
        `${basePath}/general-3.png`,
        `${basePath}/general-4.png`,
        `${basePath}/general-5.png`,
        `${basePath}/general-6.png`,
        `${basePath}/general-7.png`,
      ],
      product: [`${basePath}/product-ball.png`, `${basePath}/product-cone.png`, `${basePath}/product-cube.png`],
    },
    translations: {
      placeholder_image: `Placeholder image`,
      added: `Added`,
      recipient_form_fields_visible: `Recipient form fields are now visible`,
      recipient_form_fields_hidden: `Recipient form fields are now hidden`,
      recipient_form_error: `There was an error with the form submission`,
    },
    routes: {
      cart_add_url: '/cart/add.js',
      cart_change_url: '/cart/change',
      cart_update_url: '/cart/update',
      cart_url: '/cart',
      predictive_search_url: '/search/suggest',
      search_url: '/search',
    },
    template: {
      name: 'index',
    },
  };
</script>
<style data-shopify>


  @font-face {
  font-family: Inter;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//mudaura.com/cdn/fonts/inter/inter_n4.b2a3f24c19b4de56e8871f609e73ca7f6d2e2bb9.woff2") format("woff2"),
       url("//mudaura.com/cdn/fonts/inter/inter_n4.af8052d517e0c9ffac7b814872cecc27ae1fa132.woff") format("woff");
}

  @font-face {
  font-family: Inter;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//mudaura.com/cdn/fonts/inter/inter_n7.02711e6b374660cfc7915d1afc1c204e633421e4.woff2") format("woff2"),
       url("//mudaura.com/cdn/fonts/inter/inter_n7.6dab87426f6b8813070abd79972ceaf2f8d3b012.woff") format("woff");
}

  @font-face {
  font-family: Inter;
  font-weight: 400;
  font-style: italic;
  font-display: swap;
  src: url("//mudaura.com/cdn/fonts/inter/inter_i4.feae1981dda792ab80d117249d9c7e0f1017e5b3.woff2") format("woff2"),
       url("//mudaura.com/cdn/fonts/inter/inter_i4.62773b7113d5e5f02c71486623cf828884c85c6e.woff") format("woff");
}

  @font-face {
  font-family: Inter;
  font-weight: 700;
  font-style: italic;
  font-display: swap;
  src: url("//mudaura.com/cdn/fonts/inter/inter_i7.b377bcd4cc0f160622a22d638ae7e2cd9b86ea4c.woff2") format("woff2"),
       url("//mudaura.com/cdn/fonts/inter/inter_i7.7c69a6a34e3bb44fcf6f975857e13b9a9b25beb4.woff") format("woff");
}


  


    @font-face {
  font-family: "Barlow Condensed";
  font-weight: 600;
  font-style: normal;
  font-display: swap;
  src: url("//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_n6.30a391fe19ded5366170913f031e653a88992edc.woff2") format("woff2"),
       url("//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_n6.99ed11359eef67b853f0c49f37f89f7abe42cd2f.woff") format("woff");
}

    @font-face {
  font-family: "Barlow Condensed";
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_n7.b8dc813bf1d64de77250a6675c25535283e1677a.woff2") format("woff2"),
       url("//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_n7.a36d150be98fef32f23a43ed8605139ce8fcc8f5.woff") format("woff");
}

    @font-face {
  font-family: "Barlow Condensed";
  font-weight: 600;
  font-style: italic;
  font-display: swap;
  src: url("//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_i6.459cd4682534076a2e436e62768c494d0e6f8ad3.woff2") format("woff2"),
       url("//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_i6.e44b39421fb7c081f9d3d547afa0f9899f3a1588.woff") format("woff");
}

    @font-face {
  font-family: "Barlow Condensed";
  font-weight: 700;
  font-style: italic;
  font-display: swap;
  src: url("//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_i7.ef69176c3a69e990febda79e82ea756536ec243e.woff2") format("woff2"),
       url("//mudaura.com/cdn/fonts/barlow_condensed/barlowcondensed_i7.66d45385839c58c717c22033dcc4b561a22e4b7a.woff") format("woff");
}

  

  

  

  :root {
    /* Page Layout */
    --sidebar-width: 25rem;
    --narrow-content-width: 36rem;
    --normal-content-width: 42rem;
    --wide-content-width: 46rem;
    --narrow-page-width: 90rem;
    --normal-page-width: 120rem;
    --wide-page-width: 150rem;

    /* Section Heights */
    --section-height-small: 15rem;
    --section-height-medium: 25rem;
    --section-height-large: 35rem;

    @media screen and (min-width: 40em) {
      --section-height-small: 40svh;
      --section-height-medium: 55svh;
      --section-height-large: 70svh;
    }

    @media screen and (min-width: 60em) {
      --section-height-small: 50svh;
      --section-height-medium: 65svh;
      --section-height-large: 80svh;
    }

    /* Letter spacing */
    --letter-spacing-sm: 0.06em;
    --letter-spacing-md: 0.13em;

    /* Font families */
    --font-body--family: Inter, sans-serif;
    --font-body--style: normal;
    --font-body--weight: 400;
    --font-subheading--family: "Barlow Condensed", sans-serif;
    --font-subheading--style: normal;
    --font-subheading--weight: 600;
    --font-heading--family: "Barlow Condensed", sans-serif;
    --font-heading--style: normal;
    --font-heading--weight: 600;
    --font-accent--family: "Barlow Condensed", sans-serif;
    --font-accent--style: normal;
    --font-accent--weight: 600;

    /* Margin sizes */
    --font-h1--spacing: 0.25em;
    --font-h2--spacing: 0.25em;
    --font-h3--spacing: 0.25em;
    --font-h4--spacing: 0.25em;
    --font-h5--spacing: 0.25em;
    --font-h6--spacing: 0.25em;
    --font-paragraph--spacing: 0.5em;

    /* Heading colors */
    --font-h1--color: var(--color-foreground-heading);
    --font-h2--color: var(--color-foreground-heading);
    --font-h3--color: var(--color-foreground-heading);
    --font-h4--color: var(--color-foreground-heading);
    --font-h5--color: var(--color-foreground-heading);
    --font-h6--color: var(--color-foreground-heading);

    /** Z-Index / Layering */
    --layer-section-background: -2;
    --layer-lowest: -1;
    --layer-base: 0;
    --layer-flat: 1;
    --layer-raised: 2;
    --layer-heightened: 4;
    --layer-sticky: 8;
    --layer-window-overlay: 10;
    --layer-header-menu: 12;
    --layer-overlay: 16;
    --layer-menu-drawer: 18;
    --layer-temporary: 20;

    /* Max-width / Measure */
    --max-width--body-normal: 50ch;
    --max-width--body-narrow: 35ch;

    --max-width--heading-normal: 50ch;
    --max-width--heading-narrow: 30ch;

    --max-width--display-normal: 20ch;
    --max-width--display-narrow: 15ch;
    --max-width--display-tight: 5ch;

    /* Letter-spacing / Tracking */
    --letter-spacing--display-tight: -0.03em;
    --letter-spacing--display-normal: 0em;
    --letter-spacing--display-loose: 0.03em;

    --letter-spacing--heading-tight: -0.03em;
    --letter-spacing--heading-normal: 0em;
    --letter-spacing--heading-loose: 0.03em;

    --letter-spacing--body-tight: -0.03em;
    --letter-spacing--body-normal: 0em;
    --letter-spacing--body-loose: 0.03em;

    /* Line height / Leading */
    --line-height: 1;

    --line-height--display-tight: 1;
    --line-height--display-normal: 1.1;
    --line-height--display-loose: 1.2;

    --line-height--heading-tight: 1.15;
    --line-height--heading-normal: 1.25;
    --line-height--heading-loose: 1.35;

    --line-height--body-tight: 1.2;
    --line-height--body-normal: 1.4;
    --line-height--body-loose: 1.6;

    /* Typography presets */
    --font-size--paragraph: 0.875rem;--font-size--h1: clamp(3.0rem, 7.2vw, 4.5rem);--font-size--h2: clamp(2.25rem, 4.8vw, 3.0rem);--font-size--h3: 2.0rem;--font-size--h4: 1.5rem;--font-size--h5: 1.125rem;--font-size--h6: 1.0rem;--font-paragraph--weight: 400;--font-paragraph--letter-spacing: var(--letter-spacing--body-normal);--font-paragraph--size: var(--font-size--paragraph);--font-paragraph--family: var(--font-body--family);--font-paragraph--style: var(--font-body--style);--font-paragraph--case: ;--font-paragraph--line-height: var(--line-height--body-normal);--font-h1--weight: var(--font-heading--weight);--font-h1--letter-spacing: var(--letter-spacing--heading-normal);--font-h1--size: var(--font-size--h1);--font-h1--family: var(--font-heading--family);--font-h1--style: var(--font-heading--style);--font-h1--case: uppercase;--font-h1--line-height: var(--line-height--display-normal);--font-h2--weight: var(--font-heading--weight);--font-h2--letter-spacing: var(--letter-spacing--heading-normal);--font-h2--size: var(--font-size--h2);--font-h2--family: var(--font-heading--family);--font-h2--style: var(--font-heading--style);--font-h2--case: uppercase;--font-h2--line-height: var(--line-height--display-tight);--font-h3--weight: var(--font-heading--weight);--font-h3--letter-spacing: var(--letter-spacing--heading-normal);--font-h3--size: var(--font-size--h3);--font-h3--family: var(--font-heading--family);--font-h3--style: var(--font-heading--style);--font-h3--case: uppercase;--font-h3--line-height: var(--line-height--display-normal);--font-h4--weight: var(--font-subheading--weight);--font-h4--letter-spacing: var(--letter-spacing--heading-normal);--font-h4--size: var(--font-size--h4);--font-h4--family: var(--font-subheading--family);--font-h4--style: var(--font-subheading--style);--font-h4--case: uppercase;--font-h4--line-height: var(--line-height--display-normal);--font-h5--weight: var(--font-subheading--weight);--font-h5--letter-spacing: var(--letter-spacing--heading-normal);--font-h5--size: var(--font-size--h5);--font-h5--family: var(--font-subheading--family);--font-h5--style: var(--font-subheading--style);--font-h5--case: uppercase;--font-h5--line-height: var(--line-height--display-normal);--font-h6--weight: var(--font-subheading--weight);--font-h6--letter-spacing: var(--letter-spacing--heading-normal);--font-h6--size: var(--font-size--h6);--font-h6--family: var(--font-subheading--family);--font-h6--style: var(--font-subheading--style);--font-h6--case: uppercase;--font-h6--line-height: var(--line-height--display-normal);

    /* Hardcoded font sizes */
    --font-size--2xs: 0.625rem;
    --font-size--xs: 0.8125rem;
    --font-size--sm: 0.875rem;
    --font-size--md: 1rem;
    --font-size--lg: 1.125rem;
    --font-size--xl: 1.25rem;
    --font-size--2xl: 1.5rem;
    --font-size--3xl: 2rem;
    --font-size--4xl: 2.5rem;
    --font-size--5xl: 3rem;
    --font-size--6xl: 3.5rem;

    /* Menu font sizes */
    --menu-font-sm--size: 0.875rem;
    --menu-font-sm--line-height: calc(1.1 + 0.5 * min(16 / 14));
    --menu-font-md--size: 1rem;
    --menu-font-md--line-height: calc(1.1 + 0.5 * min(16 / 16));
    --menu-font-lg--size: 1.125rem;
    --menu-font-lg--line-height: calc(1.1 + 0.5 * min(16 / 18));
    --menu-font-xl--size: 1.25rem;
    --menu-font-xl--line-height: calc(1.1 + 0.5 * min(16 / 20));
    --menu-font-2xl--size: 1.75rem;
    --menu-font-2xl--line-height: calc(1.1 + 0.5 * min(16 / 28));

    /* Colors */
    --color-error: #8B0000;
    --color-success: #006400;
    --color-white: #FFFFFF;
    --color-white-rgb: 255 255 255;
    --color-black: #000000;
    --color-instock: #3ED660;
    --color-lowstock: #EE9441;
    --color-outofstock: #C8C8C8;

    /* Opacity */
    --opacity-5: 0.05;
    --opacity-8: 0.08;
    --opacity-10: 0.1;
    --opacity-15: 0.15;
    --opacity-20: 0.2;
    --opacity-25: 0.25;
    --opacity-30: 0.3;
    --opacity-40: 0.4;
    --opacity-50: 0.5;
    --opacity-60: 0.6;
    --opacity-70: 0.7;
    --opacity-80: 0.8;
    --opacity-85: 0.85;
    --opacity-90: 0.9;
    --opacity-subdued-text: var(--opacity-70);

    --shadow-button: 0 2px 3px rgb(0 0 0 / 20%);
    --gradient-image-overlay: linear-gradient(to top, rgb(0 0 0 / 0.5), transparent);

    /* Spacing */
    --margin-3xs: 0.125rem;
    --margin-2xs: 0.3rem;
    --margin-xs: 0.5rem;
    --margin-sm: 0.7rem;
    --margin-md: 0.8rem;
    --margin-lg: 1rem;
    --margin-xl: 1.25rem;
    --margin-2xl: 1.5rem;
    --margin-3xl: 1.75rem;
    --margin-4xl: 2rem;
    --margin-5xl: 3rem;
    --margin-6xl: 5rem;

    --scroll-margin: 50px;

    --padding-3xs: 0.125rem;
    --padding-2xs: 0.25rem;
    --padding-xs: 0.5rem;
    --padding-sm: 0.7rem;
    --padding-md: 0.8rem;
    --padding-lg: 1rem;
    --padding-xl: 1.25rem;
    --padding-2xl: 1.5rem;
    --padding-3xl: 1.75rem;
    --padding-4xl: 2rem;
    --padding-5xl: 3rem;
    --padding-6xl: 4rem;

    --gap-3xs: 0.125rem;
    --gap-2xs: 0.3rem;
    --gap-xs: 0.5rem;
    --gap-sm: 0.7rem;
    --gap-md: 0.9rem;
    --gap-lg: 1rem;
    --gap-xl: 1.25rem;
    --gap-2xl: 2rem;
    --gap-3xl: 3rem;

    --spacing-scale-sm: 0.6;
    --spacing-scale-md: 0.7;
    --spacing-scale-default: 1.0;

    /* Checkout buttons gap */
    --checkout-button-gap: 10px;

    /* Borders */
    --style-border-width: 1px;
    --style-border-radius-xs: 0.2rem;
    --style-border-radius-sm: 0.6rem;
    --style-border-radius-md: 0.8rem;
    --style-border-radius-50: 50%;
    --style-border-radius-lg: 1rem;
    --style-border-radius-pills: 40px;
    --style-border-radius-inputs: 0px;
    --style-border-radius-buttons-primary: 0px;
    --style-border-radius-buttons-secondary: 0px;
    --style-border-width-primary: 0px;
    --style-border-width-secondary: 0px;
    --style-border-width-inputs: 1px;
    --style-border-radius-popover: 0px;
    --style-border-popover: 1px none rgb(var(--color-border-rgb) / 50%);
    --style-border-drawer: 1px none rgb(var(--color-border-rgb) / 50%);
    --style-border-swatch-opacity: 10%;
    --style-border-swatch-width: 1px;
    --style-border-swatch-style: solid;

    /* Animation */
    --ease-out-cubic: cubic-bezier(0.33, 1, 0.68, 1);
    --ease-out-quad: cubic-bezier(0.32, 0.72, 0, 1);
    --animation-speed-fast: 0.0625s;
    --animation-speed: 0.125s;
    --animation-speed-slow: 0.2s;
    --animation-speed-medium: 0.15s;
    --animation-easing: ease-in-out;
    --animation-slideshow-easing: cubic-bezier(0.4, 0, 0.2, 1);
    --drawer-animation-speed: 0.2s;
    --animation-values-slow: var(--animation-speed-slow) var(--animation-easing);
    --animation-values: var(--animation-speed) var(--animation-easing);
    --animation-values-fast: var(--animation-speed-fast) var(--animation-easing);
    --animation-values-allow-discrete: var(--animation-speed) var(--animation-easing) allow-discrete;
    --animation-timing-hover: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    --animation-timing-active: cubic-bezier(0.5, 0, 0.75, 0);
    --animation-timing-bounce: cubic-bezier(0.34, 1.56, 0.64, 1);
    --animation-timing-default: cubic-bezier(0, 0, 0.2, 1);
    --animation-timing-fade-in: cubic-bezier(0.16, 1, 0.3, 1);
    --animation-timing-fade-out: cubic-bezier(0.4, 0, 0.2, 1);

    /* View transitions */
    /* View transition old */
    --view-transition-old-main-content: var(--animation-speed) var(--animation-easing) both fadeOut;

    /* View transition new */
    --view-transition-new-main-content: var(--animation-speed) var(--animation-easing) both fadeIn, var(--animation-speed) var(--animation-easing) both slideInTopViewTransition;

    /* Focus */
    --focus-outline-width: 0.09375rem;
    --focus-outline-offset: 0.2em;

    /* Badges */
    --badge-blob-padding-block: 1px;
    --badge-blob-padding-inline: 12px 8px;
    --badge-rectangle-padding-block: 1px;
    --badge-rectangle-padding-inline: 6px;
    @media screen and (min-width: 750px) {
      --badge-blob-padding-block: 4px;
      --badge-blob-padding-inline: 16px 12px;
      --badge-rectangle-padding-block: 4px;
      --badge-rectangle-padding-inline: 10px;
    }

    /* Icons */
    --icon-size-2xs: 0.6rem;
    --icon-size-xs: 0.85rem;
    --icon-size-sm: 1.25rem;
    --icon-size-md: 1.375rem;
    --icon-size-lg: 1.5rem;
    --icon-stroke-width: 1.5px;

    /* Input */
    --input-email-min-width: 200px;
    --input-search-max-width: 650px;
    --input-padding-y: 0.8rem;
    --input-padding-x: 0.8rem;
    --input-padding: var(--input-padding-y) var(--input-padding-x);
    --input-box-shadow-width: var(--style-border-width-inputs);
    --input-box-shadow: 0 0 0 var(--input-box-shadow-width) var(--color-input-border);
    --input-box-shadow-focus: 0 0 0 calc(var(--input-box-shadow-width) + 0.5px) var(--color-input-border);
    --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
    --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5));
    --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
    --input-textarea-min-height: 55px;

    /* Button size */
    --button-size-sm: 30px;
    --button-size-md: 36px;
    --button-size: var(--minimum-touch-target);
    --button-padding-inline: 24px;
    --button-padding-block: 16px;

    /* Button font-family */
    --button-font-family-primary: var(--font-accent--family);
    --button-font-family-secondary: var(--font-body--family);

    /* Button text case */
    --button-text-case: ;
    --button-text-case-primary: uppercase;
    --button-text-case-secondary: default;

    /* Borders */
    --border-color: rgb(var(--color-border-rgb) / var(--opacity-50));
    --border-width-sm: 1px;
    --border-width-md: 2px;
    --border-width-lg: 5px;

    /* Drawers */
    --drawer-inline-padding: 25px;
    --drawer-menu-inline-padding: 2.5rem;
    --drawer-header-block-padding: 20px;
    --drawer-content-block-padding: 10px;
    --drawer-header-desktop-top: 0rem;
    --drawer-padding: calc(var(--padding-sm) + 7px);
    --drawer-height: 100dvh;
    --drawer-width: 95vw;
    --drawer-max-width: 500px;

    /* Variant Picker Swatches */
    --variant-picker-swatch-width-unitless: 30;
    --variant-picker-swatch-height-unitless: 30;
    --variant-picker-swatch-width: 30px;
    --variant-picker-swatch-height: 30px;
    --variant-picker-swatch-radius: 0px;
    --variant-picker-border-width: 1px;
    --variant-picker-border-style: solid;
    --variant-picker-border-opacity: 10%;

    /* Variant Picker Buttons */
    --variant-picker-button-radius: 0px;
    --variant-picker-button-border-width: 1px;

    /* Slideshow */
    --slideshow-controls-size: 3.5rem;
    --slideshow-controls-icon: 2rem;
    --peek-next-slide-size: 3rem;

    /* Utilities */
    --backdrop-opacity: 0.15;
    --backdrop-color-rgb: var(--color-shadow-rgb);
    --minimum-touch-target: 44px;
    --disabled-opacity: 0.5;
    --skeleton-opacity: 0.025;

    /* Shapes */
    --shape--circle: circle(50% at center);
    --shape--sunburst: polygon(100% 50%,94.62% 55.87%,98.3% 62.94%,91.57% 67.22%,93.3% 75%,85.7% 77.39%,85.36% 85.36%,77.39% 85.7%,75% 93.3%,67.22% 91.57%,62.94% 98.3%,55.87% 94.62%,50% 100%,44.13% 94.62%,37.06% 98.3%,32.78% 91.57%,25% 93.3%,22.61% 85.7%,14.64% 85.36%,14.3% 77.39%,6.7% 75%,8.43% 67.22%,1.7% 62.94%,5.38% 55.87%,0% 50%,5.38% 44.13%,1.7% 37.06%,8.43% 32.78%,6.7% 25%,14.3% 22.61%,14.64% 14.64%,22.61% 14.3%,25% 6.7%,32.78% 8.43%,37.06% 1.7%,44.13% 5.38%,50% 0%,55.87% 5.38%,62.94% 1.7%,67.22% 8.43%,75% 6.7%,77.39% 14.3%,85.36% 14.64%,85.7% 22.61%,93.3% 25%,91.57% 32.78%,98.3% 37.06%,94.62% 44.13%);
    --shape--diamond: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    --shape--blob: polygon(85.349% 11.712%, 87.382% 13.587%, 89.228% 15.647%, 90.886% 17.862%, 92.359% 20.204%, 93.657% 22.647%, 94.795% 25.169%, 95.786% 27.752%, 96.645% 30.382%, 97.387% 33.048%, 98.025% 35.740%, 98.564% 38.454%, 99.007% 41.186%, 99.358% 43.931%, 99.622% 46.685%, 99.808% 49.446%, 99.926% 52.210%, 99.986% 54.977%, 99.999% 57.744%, 99.975% 60.511%, 99.923% 63.278%, 99.821% 66.043%, 99.671% 68.806%, 99.453% 71.565%, 99.145% 74.314%, 98.724% 77.049%, 98.164% 79.759%, 97.433% 82.427%, 96.495% 85.030%, 95.311% 87.529%, 93.841% 89.872%, 92.062% 91.988%, 89.972% 93.796%, 87.635% 95.273%, 85.135% 96.456%, 82.532% 97.393%, 79.864% 98.127%, 77.156% 98.695%, 74.424% 99.129%, 71.676% 99.452%, 68.918% 99.685%, 66.156% 99.844%, 63.390% 99.942%, 60.624% 99.990%, 57.856% 99.999%, 55.089% 99.978%, 52.323% 99.929%, 49.557% 99.847%, 46.792% 99.723%, 44.031% 99.549%, 41.273% 99.317%, 38.522% 99.017%, 35.781% 98.639%, 33.054% 98.170%, 30.347% 97.599%, 27.667% 96.911%, 25.024% 96.091%, 22.432% 95.123%, 19.907% 93.994%, 17.466% 92.690%, 15.126% 91.216%, 12.902% 89.569%, 10.808% 87.761%, 8.854% 85.803%, 7.053% 83.703%, 5.418% 81.471%, 3.962% 79.119%, 2.702% 76.656%, 1.656% 74.095%, 0.846% 71.450%, 0.294% 68.740%, 0.024% 65.987%, 0.050% 63.221%, 0.343% 60.471%, 0.858% 57.752%, 1.548% 55.073%, 2.370% 52.431%, 3.283% 49.819%, 4.253% 47.227%, 5.249% 44.646%, 6.244% 42.063%, 7.211% 39.471%, 8.124% 36.858%, 8.958% 34.220%, 9.711% 31.558%, 10.409% 28.880%, 11.083% 26.196%, 11.760% 23.513%, 12.474% 20.839%, 13.259% 18.186%, 14.156% 15.569%, 15.214% 13.012%, 16.485% 10.556%, 18.028% 8.261%, 19.883% 6.211%, 22.041% 4.484%, 24.440% 3.110%, 26.998% 2.057%, 29.651% 1.275%, 32.360% 0.714%, 35.101% 0.337%, 37.859% 0.110%, 40.624% 0.009%, 43.391% 0.016%, 46.156% 0.113%, 48.918% 0.289%, 51.674% 0.533%, 54.425% 0.837%, 57.166% 1.215%, 59.898% 1.654%, 62.618% 2.163%, 65.322% 2.750%, 68.006% 3.424%, 70.662% 4.197%, 73.284% 5.081%, 75.860% 6.091%, 78.376% 7.242%, 80.813% 8.551%, 83.148% 10.036%, 85.349% 11.712%);

    /* Buy buttons */
    --height-buy-buttons: calc(var(--padding-lg) * 2 + var(--icon-size-sm));

    /* Card image width and height variables */
    --card-width-small: 10rem;

    --height-small: 10rem;
    --height-medium: 11.5rem;
    --height-large: 13rem;
    --height-full: 100vh;

    @media screen and (min-width: 750px) {
      --height-small: 17.5rem;
      --height-medium: 21.25rem;
      --height-large: 25rem;
    }

    /* Modal */
    --modal-max-height: 65dvh;

    /* Card styles for search */
    --card-bg-hover: rgb(var(--color-foreground-rgb) / var(--opacity-5));
    --card-border-hover: rgb(var(--color-foreground-rgb) / var(--opacity-30));
    --card-border-focus: rgb(var(--color-foreground-rgb) / var(--opacity-10));

    /* Cart */
    --cart-primary-font-family: var(--font-body--family);
    --cart-primary-font-style: var(--font-body--style);
    --cart-primary-font-weight: var(--font-body--weight);
    --cart-secondary-font-family: var(--font-subheading--family);
    --cart-secondary-font-style: var(--font-subheading--style);
    --cart-secondary-font-weight: var(--font-subheading--weight);
  }
</style>
<style data-shopify>
  
    
      :root,
    
    
    
    .color-scheme-1 {
        --color-background: rgb(255 255 255 / 1.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 255 255 255;
        --opacity-5-15: 0.05;
        --opacity-10-25: 0.1;
        --opacity-35-55: 0.35;
        --opacity-40-60: 0.4;
        --opacity-30-60: 0.3;
        --color-foreground: rgb(0 0 0 / 1.0);
        --color-foreground-rgb: 0 0 0;
        --color-foreground-heading: rgb(31 40 47 / 1.0);
        --color-foreground-heading-rgb: 31 40 47;
        --color-primary: rgb(31 40 47 / 1.0);
        --color-primary-rgb: 31 40 47;
        --color-primary-hover: rgb(0 0 0 / 1.0);
        --color-primary-hover-rgb: 0 0 0;
        --color-border: rgb(230 230 230 / 1.0);
        --color-border-rgb: 230 230 230;
        --color-shadow: rgb(0 0 0 / 1.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(255 255 255 / 1.0);
        --color-primary-button-background: rgb(31 40 47 / 1.0);
        --color-primary-button-border: rgb(31 40 47 / 1.0);
        --color-primary-button-hover-text: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-background: rgb(31 40 47 / 1.0);
        --color-primary-button-hover-border: rgb(0 0 0 / 1.0);
        --color-secondary-button-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-background: rgb(0 0 0 / 0.06);
        --color-secondary-button-border: rgb(31 40 47 / 1.0);
        --color-secondary-button-hover-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-hover-background: rgb(222 222 222 / 1.0);
        --color-secondary-button-hover-border: rgb(0 0 0 / 1.0);
        --color-input-background: rgb(255 255 255 / 1.0);
        --color-input-text: rgb(0 0 0 / 1.0);
        --color-input-text-rgb: 0 0 0;
        --color-input-border: rgb(230 230 230 / 1.0);
        --color-input-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-background: rgb(255 255 255 / 1.0);
        --color-variant-border: rgb(230 230 230 / 1.0);
        --color-variant-text: rgb(0 0 0 / 1.0);
        --color-variant-text-rgb: 0 0 0;
        --color-variant-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(230 230 230 / 1.0);
        --color-selected-variant-background: rgb(0 0 0 / 1.0);
        --color-selected-variant-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-background: rgb(26 26 26 / 1.0);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(26 26 26 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  
    
    
    
    .color-scheme-2 {
        --color-background: rgb(241 241 241 / 1.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 241 241 241;
        --opacity-5-15: 0.05;
        --opacity-10-25: 0.1;
        --opacity-35-55: 0.35;
        --opacity-40-60: 0.4;
        --opacity-30-60: 0.3;
        --color-foreground: rgb(0 0 0 / 1.0);
        --color-foreground-rgb: 0 0 0;
        --color-foreground-heading: rgb(0 0 0 / 1.0);
        --color-foreground-heading-rgb: 0 0 0;
        --color-primary: rgb(0 0 0 / 1.0);
        --color-primary-rgb: 0 0 0;
        --color-primary-hover: rgb(0 0 0 / 1.0);
        --color-primary-hover-rgb: 0 0 0;
        --color-border: rgb(230 230 230 / 1.0);
        --color-border-rgb: 230 230 230;
        --color-shadow: rgb(0 0 0 / 1.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(242 242 242 / 1.0);
        --color-primary-button-background: rgb(164 35 37 / 1.0);
        --color-primary-button-border: rgb(164 35 37 / 1.0);
        --color-primary-button-hover-text: rgb(242 242 242 / 1.0);
        --color-primary-button-hover-background: rgb(164 35 37 / 1.0);
        --color-primary-button-hover-border: rgb(164 35 37 / 1.0);
        --color-secondary-button-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-background: rgb(255 255 255 / 1.0);
        --color-secondary-button-border: rgb(0 0 0 / 1.0);
        --color-secondary-button-hover-text: rgb(164 35 37 / 1.0);
        --color-secondary-button-hover-background: rgb(255 255 255 / 1.0);
        --color-secondary-button-hover-border: rgb(164 35 37 / 1.0);
        --color-input-background: rgb(242 242 242 / 1.0);
        --color-input-text: rgb(0 0 0 / 1.0);
        --color-input-text-rgb: 0 0 0;
        --color-input-border: rgb(0 0 0 / 1.0);
        --color-input-hover-background: rgb(228 228 228 / 1.0);
        --color-variant-background: rgb(255 255 255 / 1.0);
        --color-variant-border: rgb(230 230 230 / 1.0);
        --color-variant-text: rgb(0 0 0 / 1.0);
        --color-variant-text-rgb: 0 0 0;
        --color-variant-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(230 230 230 / 1.0);
        --color-selected-variant-background: rgb(0 0 0 / 1.0);
        --color-selected-variant-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-background: rgb(26 26 26 / 1.0);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(26 26 26 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  
    
    
    
    .color-scheme-3 {
        --color-background: rgb(232 213 199 / 1.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 232 213 199;
        --opacity-5-15: 0.05;
        --opacity-10-25: 0.1;
        --opacity-35-55: 0.35;
        --opacity-40-60: 0.4;
        --opacity-30-60: 0.3;
        --color-foreground: rgb(0 0 0 / 1.0);
        --color-foreground-rgb: 0 0 0;
        --color-foreground-heading: rgb(0 0 0 / 1.0);
        --color-foreground-heading-rgb: 0 0 0;
        --color-primary: rgb(120 4 6 / 0.91);
        --color-primary-rgb: 120 4 6;
        --color-primary-hover: rgb(0 0 0 / 1.0);
        --color-primary-hover-rgb: 0 0 0;
        --color-border: rgb(208 208 208 / 1.0);
        --color-border-rgb: 208 208 208;
        --color-shadow: rgb(0 0 0 / 1.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(255 255 255 / 1.0);
        --color-primary-button-background: rgb(120 4 6 / 0.91);
        --color-primary-button-border: rgb(120 4 6 / 0.91);
        --color-primary-button-hover-text: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-background: rgb(0 0 0 / 1.0);
        --color-primary-button-hover-border: rgb(0 0 0 / 1.0);
        --color-secondary-button-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-background: rgb(232 213 199 / 1.0);
        --color-secondary-button-border: rgb(51 50 50 / 1.0);
        --color-secondary-button-hover-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-hover-background: rgb(241 227 217 / 0.77);
        --color-secondary-button-hover-border: rgb(0 0 0 / 1.0);
        --color-input-background: rgb(232 213 199 / 1.0);
        --color-input-text: rgb(0 0 0 / 1.0);
        --color-input-text-rgb: 0 0 0;
        --color-input-border: rgb(0 0 0 / 1.0);
        --color-input-hover-background: rgb(241 227 217 / 0.77);
        --color-variant-background: rgb(232 213 199 / 1.0);
        --color-variant-border: rgb(88 88 88 / 1.0);
        --color-variant-text: rgb(0 0 0 / 1.0);
        --color-variant-text-rgb: 0 0 0;
        --color-variant-hover-background: rgb(241 227 217 / 0.77);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-background: rgb(0 0 0 / 1.0);
        --color-selected-variant-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-background: rgb(26 26 26 / 1.0);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(26 26 26 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  
    
    
    
    .color-scheme-4 {
        --color-background: rgb(31 40 47 / 1.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 31 40 47;
        --opacity-5-15: 0.15;
        --opacity-10-25: 0.25;
        --opacity-35-55: 0.55;
        --opacity-40-60: 0.6;
        --opacity-30-60: 0.6;
        --color-foreground: rgb(255 255 255 / 1.0);
        --color-foreground-rgb: 255 255 255;
        --color-foreground-heading: rgb(255 255 255 / 1.0);
        --color-foreground-heading-rgb: 255 255 255;
        --color-primary: rgb(226 225 220 / 1.0);
        --color-primary-rgb: 226 225 220;
        --color-primary-hover: rgb(104 119 116 / 1.0);
        --color-primary-hover-rgb: 104 119 116;
        --color-border: rgb(0 0 0 / 1.0);
        --color-border-rgb: 0 0 0;
        --color-shadow: rgb(0 0 0 / 1.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(104 119 116 / 1.0);
        --color-primary-button-background: rgb(255 255 255 / 1.0);
        --color-primary-button-border: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-text: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-background: rgb(215 102 104 / 1.0);
        --color-primary-button-hover-border: rgb(215 102 104 / 1.0);
        --color-secondary-button-text: rgb(255 255 255 / 1.0);
        --color-secondary-button-background: rgb(104 119 116 / 1.0);
        --color-secondary-button-border: rgb(255 255 255 / 1.0);
        --color-secondary-button-hover-text: rgb(255 255 255 / 1.0);
        --color-secondary-button-hover-background: rgb(215 102 104 / 1.0);
        --color-secondary-button-hover-border: rgb(215 102 104 / 1.0);
        --color-input-background: rgb(164 35 37 / 1.0);
        --color-input-text: rgb(255 255 255 / 1.0);
        --color-input-text-rgb: 255 255 255;
        --color-input-border: rgb(255 255 255 / 0.89);
        --color-input-hover-background: rgb(120 4 6 / 0.91);
        --color-variant-background: rgb(164 35 37 / 1.0);
        --color-variant-border: rgb(230 230 230 / 1.0);
        --color-variant-text: rgb(255 255 255 / 1.0);
        --color-variant-text-rgb: 255 255 255;
        --color-variant-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(230 230 230 / 1.0);
        --color-selected-variant-background: rgb(0 0 0 / 1.0);
        --color-selected-variant-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-background: rgb(26 26 26 / 1.0);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(26 26 26 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  
    
    
    
    .color-scheme-5 {
        --color-background: rgb(0 0 0 / 1.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 0 0 0;
        --opacity-5-15: 0.15;
        --opacity-10-25: 0.25;
        --opacity-35-55: 0.55;
        --opacity-40-60: 0.6;
        --opacity-30-60: 0.6;
        --color-foreground: rgb(255 255 255 / 1.0);
        --color-foreground-rgb: 255 255 255;
        --color-foreground-heading: rgb(255 255 255 / 1.0);
        --color-foreground-heading-rgb: 255 255 255;
        --color-primary: rgb(0 0 0 / 1.0);
        --color-primary-rgb: 0 0 0;
        --color-primary-hover: rgb(0 0 0 / 1.0);
        --color-primary-hover-rgb: 0 0 0;
        --color-border: rgb(102 102 102 / 1.0);
        --color-border-rgb: 102 102 102;
        --color-shadow: rgb(0 0 0 / 1.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(0 0 0 / 1.0);
        --color-primary-button-background: rgb(255 255 255 / 1.0);
        --color-primary-button-border: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-text: rgb(0 0 0 / 1.0);
        --color-primary-button-hover-background: rgb(222 222 222 / 1.0);
        --color-primary-button-hover-border: rgb(222 222 222 / 1.0);
        --color-secondary-button-text: rgb(255 255 255 / 1.0);
        --color-secondary-button-background: rgb(0 0 0 / 1.0);
        --color-secondary-button-border: rgb(255 255 255 / 1.0);
        --color-secondary-button-hover-text: rgb(172 172 172 / 1.0);
        --color-secondary-button-hover-background: rgb(0 0 0 / 1.0);
        --color-secondary-button-hover-border: rgb(172 172 172 / 1.0);
        --color-input-background: rgb(0 0 0 / 1.0);
        --color-input-text: rgb(255 255 255 / 1.0);
        --color-input-text-rgb: 255 255 255;
        --color-input-border: rgb(255 255 255 / 1.0);
        --color-input-hover-background: rgb(51 50 50 / 1.0);
        --color-variant-background: rgb(0 0 0 / 1.0);
        --color-variant-border: rgb(255 255 255 / 1.0);
        --color-variant-text: rgb(255 255 255 / 1.0);
        --color-variant-text-rgb: 255 255 255;
        --color-variant-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(230 230 230 / 1.0);
        --color-selected-variant-background: rgb(255 255 255 / 1.0);
        --color-selected-variant-border: rgb(255 255 255 / 1.0);
        --color-selected-variant-text: rgb(0 0 0 / 1.0);
        --color-selected-variant-hover-background: rgb(255 255 255 / 0.19);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(0 0 0 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  
    
    
    
    .color-scheme-6 {
        --color-background: rgb(0 0 0 / 0.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 0 0 0;
        --opacity-5-15: 0.15;
        --opacity-10-25: 0.25;
        --opacity-35-55: 0.55;
        --opacity-40-60: 0.6;
        --opacity-30-60: 0.6;
        --color-foreground: rgb(255 255 255 / 1.0);
        --color-foreground-rgb: 255 255 255;
        --color-foreground-heading: rgb(0 0 0 / 1.0);
        --color-foreground-heading-rgb: 0 0 0;
        --color-primary: rgb(255 255 255 / 1.0);
        --color-primary-rgb: 255 255 255;
        --color-primary-hover: rgb(255 255 255 / 1.0);
        --color-primary-hover-rgb: 255 255 255;
        --color-border: rgb(0 0 0 / 0.0);
        --color-border-rgb: 0 0 0;
        --color-shadow: rgb(0 0 0 / 0.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(0 0 0 / 1.0);
        --color-primary-button-background: rgb(255 255 255 / 1.0);
        --color-primary-button-border: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-text: rgb(0 0 0 / 1.0);
        --color-primary-button-hover-background: rgb(222 222 222 / 1.0);
        --color-primary-button-hover-border: rgb(222 222 222 / 1.0);
        --color-secondary-button-text: rgb(255 255 255 / 1.0);
        --color-secondary-button-background: rgb(0 0 0 / 0.0);
        --color-secondary-button-border: rgb(255 255 255 / 1.0);
        --color-secondary-button-hover-text: rgb(172 172 172 / 1.0);
        --color-secondary-button-hover-background: rgb(0 0 0 / 0.0);
        --color-secondary-button-hover-border: rgb(172 172 172 / 1.0);
        --color-input-background: rgb(255 255 255 / 1.0);
        --color-input-text: rgb(0 0 0 / 1.0);
        --color-input-text-rgb: 0 0 0;
        --color-input-border: rgb(0 0 0 / 1.0);
        --color-input-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-background: rgb(255 255 255 / 1.0);
        --color-variant-border: rgb(230 230 230 / 1.0);
        --color-variant-text: rgb(0 0 0 / 1.0);
        --color-variant-text-rgb: 0 0 0;
        --color-variant-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(230 230 230 / 1.0);
        --color-selected-variant-background: rgb(0 0 0 / 1.0);
        --color-selected-variant-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-background: rgb(26 26 26 / 1.0);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(26 26 26 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  
    
    
    
    .color-scheme-7 {
        --color-background: rgb(0 0 0 / 0.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 0 0 0;
        --opacity-5-15: 0.15;
        --opacity-10-25: 0.25;
        --opacity-35-55: 0.55;
        --opacity-40-60: 0.6;
        --opacity-30-60: 0.6;
        --color-foreground: rgb(0 0 0 / 1.0);
        --color-foreground-rgb: 0 0 0;
        --color-foreground-heading: rgb(164 35 37 / 1.0);
        --color-foreground-heading-rgb: 164 35 37;
        --color-primary: rgb(0 0 0 / 1.0);
        --color-primary-rgb: 0 0 0;
        --color-primary-hover: rgb(0 0 0 / 0.53);
        --color-primary-hover-rgb: 0 0 0;
        --color-border: rgb(230 230 230 / 1.0);
        --color-border-rgb: 230 230 230;
        --color-shadow: rgb(0 0 0 / 1.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(255 255 255 / 1.0);
        --color-primary-button-background: rgb(0 0 0 / 1.0);
        --color-primary-button-border: rgb(0 0 0 / 1.0);
        --color-primary-button-hover-text: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-background: rgb(51 51 51 / 1.0);
        --color-primary-button-hover-border: rgb(51 51 51 / 1.0);
        --color-secondary-button-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-background: rgb(0 0 0 / 0.06);
        --color-secondary-button-border: rgb(0 0 0 / 1.0);
        --color-secondary-button-hover-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-hover-background: rgb(255 255 255 / 1.0);
        --color-secondary-button-hover-border: rgb(255 255 255 / 1.0);
        --color-input-background: rgb(255 255 255 / 1.0);
        --color-input-text: rgb(0 0 0 / 0.53);
        --color-input-text-rgb: 0 0 0;
        --color-input-border: rgb(0 0 0 / 0.13);
        --color-input-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-background: rgb(255 255 255 / 1.0);
        --color-variant-border: rgb(230 230 230 / 1.0);
        --color-variant-text: rgb(0 0 0 / 1.0);
        --color-variant-text-rgb: 0 0 0;
        --color-variant-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(230 230 230 / 1.0);
        --color-selected-variant-background: rgb(0 0 0 / 1.0);
        --color-selected-variant-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-background: rgb(26 26 26 / 1.0);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(26 26 26 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  
    
    
    
    .color-scheme-fe653a3d-86aa-46c7-9436-b8cf6c5a68d6 {
        --color-background: rgb(255 255 255 / 1.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 255 255 255;
        --opacity-5-15: 0.05;
        --opacity-10-25: 0.1;
        --opacity-35-55: 0.35;
        --opacity-40-60: 0.4;
        --opacity-30-60: 0.3;
        --color-foreground: rgb(0 0 0 / 1.0);
        --color-foreground-rgb: 0 0 0;
        --color-foreground-heading: rgb(104 119 116 / 1.0);
        --color-foreground-heading-rgb: 104 119 116;
        --color-primary: rgb(31 40 47 / 1.0);
        --color-primary-rgb: 31 40 47;
        --color-primary-hover: rgb(0 0 0 / 1.0);
        --color-primary-hover-rgb: 0 0 0;
        --color-border: rgb(230 230 230 / 1.0);
        --color-border-rgb: 230 230 230;
        --color-shadow: rgb(0 0 0 / 1.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(255 255 255 / 1.0);
        --color-primary-button-background: rgb(164 35 37 / 1.0);
        --color-primary-button-border: rgb(164 35 37 / 1.0);
        --color-primary-button-hover-text: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-background: rgb(120 4 6 / 0.91);
        --color-primary-button-hover-border: rgb(0 0 0 / 1.0);
        --color-secondary-button-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-background: rgb(0 0 0 / 0.06);
        --color-secondary-button-border: rgb(164 35 37 / 1.0);
        --color-secondary-button-hover-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-hover-background: rgb(222 222 222 / 1.0);
        --color-secondary-button-hover-border: rgb(0 0 0 / 1.0);
        --color-input-background: rgb(255 255 255 / 1.0);
        --color-input-text: rgb(0 0 0 / 1.0);
        --color-input-text-rgb: 0 0 0;
        --color-input-border: rgb(230 230 230 / 1.0);
        --color-input-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-background: rgb(255 255 255 / 1.0);
        --color-variant-border: rgb(230 230 230 / 1.0);
        --color-variant-text: rgb(0 0 0 / 1.0);
        --color-variant-text-rgb: 0 0 0;
        --color-variant-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(230 230 230 / 1.0);
        --color-selected-variant-background: rgb(0 0 0 / 1.0);
        --color-selected-variant-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-background: rgb(26 26 26 / 1.0);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(26 26 26 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  
    
    
    
    .color-scheme-8ab16f8d-1e37-4f1a-9348-9f6d8780b313 {
        --color-background: rgb(255 255 255 / 1.0);
        /* RGB values only to apply different opacities - Relative color values are not supported in iOS < 16.4 */
        --color-background-rgb: 255 255 255;
        --opacity-5-15: 0.05;
        --opacity-10-25: 0.1;
        --opacity-35-55: 0.35;
        --opacity-40-60: 0.4;
        --opacity-30-60: 0.3;
        --color-foreground: rgb(0 0 0 / 1.0);
        --color-foreground-rgb: 0 0 0;
        --color-foreground-heading: rgb(164 35 37 / 1.0);
        --color-foreground-heading-rgb: 164 35 37;
        --color-primary: rgb(164 35 37 / 1.0);
        --color-primary-rgb: 164 35 37;
        --color-primary-hover: rgb(0 0 0 / 1.0);
        --color-primary-hover-rgb: 0 0 0;
        --color-border: rgb(230 230 230 / 1.0);
        --color-border-rgb: 230 230 230;
        --color-shadow: rgb(0 0 0 / 1.0);
        --color-shadow-rgb: 0 0 0;
        --color-primary-button-text: rgb(255 255 255 / 1.0);
        --color-primary-button-background: rgb(164 35 37 / 1.0);
        --color-primary-button-border: rgb(164 35 37 / 1.0);
        --color-primary-button-hover-text: rgb(255 255 255 / 1.0);
        --color-primary-button-hover-background: rgb(120 4 6 / 0.91);
        --color-primary-button-hover-border: rgb(0 0 0 / 1.0);
        --color-secondary-button-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-background: rgb(0 0 0 / 0.06);
        --color-secondary-button-border: rgb(164 35 37 / 1.0);
        --color-secondary-button-hover-text: rgb(0 0 0 / 1.0);
        --color-secondary-button-hover-background: rgb(222 222 222 / 1.0);
        --color-secondary-button-hover-border: rgb(0 0 0 / 1.0);
        --color-input-background: rgb(255 255 255 / 1.0);
        --color-input-text: rgb(0 0 0 / 1.0);
        --color-input-text-rgb: 0 0 0;
        --color-input-border: rgb(230 230 230 / 1.0);
        --color-input-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-background: rgb(255 255 255 / 1.0);
        --color-variant-border: rgb(230 230 230 / 1.0);
        --color-variant-text: rgb(0 0 0 / 1.0);
        --color-variant-text-rgb: 0 0 0;
        --color-variant-hover-background: rgb(245 245 245 / 1.0);
        --color-variant-hover-text: rgb(0 0 0 / 1.0);
        --color-variant-hover-border: rgb(230 230 230 / 1.0);
        --color-selected-variant-background: rgb(0 0 0 / 1.0);
        --color-selected-variant-border: rgb(0 0 0 / 1.0);
        --color-selected-variant-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-background: rgb(26 26 26 / 1.0);
        --color-selected-variant-hover-text: rgb(255 255 255 / 1.0);
        --color-selected-variant-hover-border: rgb(26 26 26 / 1.0);

        --input-disabled-background-color: rgb(var(--color-foreground-rgb) / var(--opacity-10));
        --input-disabled-border-color: rgb(var(--color-foreground-rgb) / var(--opacity-5-15));
        --input-disabled-text-color: rgb(var(--color-foreground-rgb) / var(--opacity-50));
        --color-foreground-muted: rgb(var(--color-foreground-rgb) / var(--opacity-60));
        --font-h1--color: var(--color-foreground-heading);
        --font-h2--color: var(--color-foreground-heading);
        --font-h3--color: var(--color-foreground-heading);
        --font-h4--color: var(--color-foreground-heading);
        --font-h5--color: var(--color-foreground-heading);
        --font-h6--color: var(--color-foreground-heading);

        /* Shadows */
        
        
          --shadow-blur: 20px;
          --shadow-popover: 0px 4px 20px rgb(var(--color-shadow-rgb) / var(--opacity-15));
        
      }
  

  body, .color-scheme-1, .color-scheme-2, .color-scheme-3, .color-scheme-4, .color-scheme-5, .color-scheme-6, .color-scheme-7, .color-scheme-fe653a3d-86aa-46c7-9436-b8cf6c5a68d6, .color-scheme-8ab16f8d-1e37-4f1a-9348-9f6d8780b313 {
    color: var(--color-foreground);
    background-color: var(--color-background);
  }
</style>


    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta name="google-site-verification" content="7vxF4GMZG_hdcyNRMh8YPmg72Mf0y30vqSpyXUzRCO4">
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/80712991022/digital_wallets/dialog">
<script async="async" src="/checkouts/internal/preloads.js?locale=en-IN"></script>
<script id="shopify-features" type="application/json">{"accessToken":"b621817ebb7c8647c28db9357c4a51b5","betas":["rich-media-storefront-analytics"],"domain":"mudaura.com","predictiveSearch":true,"shopId":80712991022,"locale":"en"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "357207.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"INR","rate":"1.0"};
Shopify.country = "IN";
Shopify.theme = {"name":"Savor","id":181284012334,"schema_name":"Savor","schema_version":"3.0.0","theme_store_id":3626,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "mudaura.com/cdn";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";
Shopify.shopJsCdnBaseUrl = "https://cdn.shopify.com/shopifycloud/shop-js";
Shopify.SignInWithShop = Shopify.SignInWithShop || {};
Shopify.SignInWithShop.User = Shopify.SignInWithShop.User || {};
Shopify.SignInWithShop.User.recognized = false;</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>
  window.Shopify = window.Shopify || {};
  window.Shopify.SignInWithShop = window.Shopify.SignInWithShop || {};
  window.Shopify.SignInWithShop.assetMetrics = { sampleRate: 0.01 };
  window.Shopify.SignInWithShop.eligible = true;
</script>
<script id="shop-js-analytics" type="application/json">{"pageType":"index"}</script>
<script defer="defer" async type="module" src="//mudaura.com/cdn/shopifycloud/shop-js/modules/v2/loader.init-shop-cart-sync.en.esm.js"></script>
<script type="module">
  await import("//mudaura.com/cdn/shopifycloud/shop-js/modules/v2/loader.init-shop-cart-sync.en.esm.js");

  window.Shopify.SignInWithShop?.initShopCartSync?.({"fedCMEnabled":true,"windoidEnabled":true});

</script>
<script>
  window.Shopify = window.Shopify || {};
  if (!window.Shopify.featureAssets) window.Shopify.featureAssets = {};
  window.Shopify.featureAssets['shop-js'] = {"checkout-modal":["modules/v2/loader.checkout-modal.en.esm.js"],"shop-login-button":["modules/v2/loader.shop-login-button.en.esm.js"],"shop-cash-offers":["modules/v2/loader.shop-cash-offers.en.esm.js"],"shop-toast-manager":["modules/v2/loader.shop-toast-manager.en.esm.js"],"shop-login":["modules/v2/loader.shop-login.en.esm.js"],"shop-button":["modules/v2/loader.shop-button.en.esm.js"],"listener":["modules/v2/loader.listener.en.esm.js"],"avatar":["modules/v2/loader.avatar.en.esm.js"],"init-windoid":["modules/v2/loader.init-windoid.en.esm.js"],"init-shop-user-recognition":["modules/v2/loader.init-shop-user-recognition.en.esm.js"],"init-shop-for-new-customer-accounts":["modules/v2/loader.init-shop-for-new-customer-accounts.en.esm.js"],"init-shop-email-lookup-coordinator":["modules/v2/loader.init-shop-email-lookup-coordinator.en.esm.js"],"init-shop-cart-sync":["modules/v2/loader.init-shop-cart-sync.en.esm.js"],"init-fed-cm":["modules/v2/loader.init-fed-cm.en.esm.js"],"init-customer-accounts-sign-up":["modules/v2/loader.init-customer-accounts-sign-up.en.esm.js"],"init-customer-accounts":["modules/v2/loader.init-customer-accounts.en.esm.js"],"shop-user-recognition":["modules/v2/loader.shop-user-recognition.en.esm.js"],"shop-cart-sync":["modules/v2/loader.shop-cart-sync.en.esm.js"],"pay-button":["modules/v2/loader.pay-button.en.esm.js"],"shop-follow-button":["modules/v2/loader.shop-follow-button.en.esm.js"],"lead-capture":["modules/v2/loader.lead-capture.en.esm.js"],"payment-terms":["modules/v2/loader.payment-terms.en.esm.js"]};
</script>
<script>(function() {
  var isLoaded = false;
  function asyncLoad() {
    if (isLoaded) return;
    isLoaded = true;
    var urls = ["https:\/\/cdn.shopify.com\/s\/files\/1\/0807\/1299\/1022\/t\/8\/assets\/rev_80712991022.js?v=1727372471\u0026shop=357207.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":80712991022,"offset":19800,"reqid":"d24b6574-61e9-420c-b320-cb915872190e-1780636440","pageurl":"mudaura.com\/","u":"7e3d0652fc26","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script id="captcha-bootstrap">!function(){'use strict';const t='contact',e='account',n='new_comment',o=[[t,t],['blogs',n],['comments',n],[t,'customer']],c=[[e,'customer_login'],[e,'guest_login'],[e,'recover_customer_password'],[e,'create_customer']],r=t=>t.map((([t,e])=>`form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`)).join(','),a=t=>()=>t?[...document.querySelectorAll(t)].map((t=>t.form)):[];function s(){const t=[...o],e=r(t);return a(e)}const i='password',u='form_key',d=['recaptcha-v3-token','g-recaptcha-response','h-captcha-response',i],f=()=>{try{return window.sessionStorage}catch{return}},m='__shopify_v',_=t=>t.elements[u];function p(t,e,n=!1){try{const o=window.sessionStorage,c=JSON.parse(o.getItem(e)),{data:r}=function(t){const{data:e,action:n}=t;return t[m]||n?{data:e,action:n}:{data:t,action:n}}(c);for(const[e,n]of Object.entries(r))t.elements[e]&&(t.elements[e].value=n);n&&o.removeItem(e)}catch(o){console.error('form repopulation failed',{error:o})}}const l='form_type',E='cptcha';function T(t){t.dataset[E]=!0}const w=window,h=w.document,L='Shopify',v='ce_forms',y='captcha';let A=!1;((t,e)=>{const n=(g='f06e6c50-85a8-45c8-87d0-21a2b65856fe',I='https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_hcaptcha.v1.5.2.iife.js',D={infoText:'Protected by hCaptcha',privacyText:'Privacy',termsText:'Terms'},(t,e,n)=>{const o=w[L][v],c=o.bindForm;if(c)return c(t,g,e,D).then(n);var r;o.q.push([[t,g,e,D],n]),r=I,A||(h.body.append(Object.assign(h.createElement('script'),{id:'captcha-provider',async:!0,src:r})),A=!0)});var g,I,D;w[L]=w[L]||{},w[L][v]=w[L][v]||{},w[L][v].q=[],w[L][y]=w[L][y]||{},w[L][y].protect=function(t,e){n(t,void 0,e),T(t)},Object.freeze(w[L][y]),function(t,e,n,w,h,L){const[v,y,A,g]=function(t,e,n){const i=e?o:[],u=t?c:[],d=[...i,...u],f=r(d),m=r(i),_=r(d.filter((([t,e])=>n.includes(e))));return[a(f),a(m),a(_),s()]}(w,h,L),I=t=>{const e=t.target;return e instanceof HTMLFormElement?e:e&&e.form},D=t=>v().includes(t);t.addEventListener('submit',(t=>{const e=I(t);if(!e)return;const n=D(e)&&!e.dataset.hcaptchaBound&&!e.dataset.recaptchaBound,o=_(e),c=g().includes(e)&&(!o||!o.value);(n||c)&&t.preventDefault(),c&&!n&&(function(t){try{if(!f())return;!function(t){const e=f();if(!e)return;const n=_(t);if(!n)return;const o=n.value;o&&e.removeItem(o)}(t);const e=Array.from(Array(32),(()=>Math.random().toString(36)[2])).join('');!function(t,e){_(t)||t.append(Object.assign(document.createElement('input'),{type:'hidden',name:u})),t.elements[u].value=e}(t,e),function(t,e){const n=f();if(!n)return;const o=[...t.querySelectorAll(`input[type='${i}']`)].map((({name:t})=>t)),c=[...d,...o],r={};for(const[a,s]of new FormData(t).entries())c.includes(a)||(r[a]=s);n.setItem(e,JSON.stringify({[m]:1,action:t.action,data:r}))}(t,e)}catch(e){console.error('failed to persist form',e)}}(e),e.submit())}));const S=(t,e)=>{t&&!t.dataset[E]&&(n(t,e.some((e=>e===t))),T(t))};for(const o of['focusin','change'])t.addEventListener(o,(t=>{const e=I(t);D(e)&&S(e,y())}));const B=e.get('form_key'),M=e.get(l),P=B&&M;t.addEventListener('DOMContentLoaded',(()=>{const t=y();if(P)for(const e of t)e.elements[l].value===M&&p(e,B);[...new Set([...A(),...v().filter((t=>'true'===t.dataset.shopifyCaptcha))])].forEach((e=>S(e,t)))}))}(h,new URLSearchParams(w.location.search),n,t,e,['guest_login'])})(!0,!0)}();</script>
<script integrity="sha256-JjoPp5ZfB1sSAs5SQaol1x1GgvveM+BgmRzyDexInEQ=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//mudaura.com/cdn/shopifycloud/storefront/assets/storefront/load_feature-1bd60354.js" crossorigin="anonymous"></script>
<script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify=Shopify||{};Shopify.PaymentButton=Shopify.PaymentButton||{isStorefrontPortableWallets:!0,init:function(){window.Shopify.PaymentButton.init=function(){};var t=document.createElement("script");t.src="https://mudaura.com/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js",t.type="module",document.head.appendChild(t)}};
</script>
<script data-source-attribution="shopify.dynamic_checkout.buyer_consent">
  function portableWalletsHideBuyerConsent(e){var t=document.getElementById("shopify-buyer-consent"),n=document.getElementById("shopify-subscription-policy-button");t&&n&&(t.classList.add("hidden"),t.setAttribute("aria-hidden","true"),n.removeEventListener("click",e))}function portableWalletsShowBuyerConsent(e){var t=document.getElementById("shopify-buyer-consent"),n=document.getElementById("shopify-subscription-policy-button");t&&n&&(t.classList.remove("hidden"),t.removeAttribute("aria-hidden"),n.addEventListener("click",e))}window.Shopify?.PaymentButton&&(window.Shopify.PaymentButton.hideBuyerConsent=portableWalletsHideBuyerConsent,window.Shopify.PaymentButton.showBuyerConsent=portableWalletsShowBuyerConsent);
</script>
<script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">document.addEventListener("DOMContentLoaded",(function(){function t(){return document.querySelector("shopify-accelerated-checkout-cart, shopify-accelerated-checkout")}if(t())Shopify.PaymentButton.init();else{new MutationObserver((function(e,n){t()&&(Shopify.PaymentButton.init(),n.disconnect())})).observe(document.body,{childList:!0,subtree:!0})}}));
</script>
<script async="async" integrity="sha256-hlq21VGceRKy8z+Fjhropk1BwDPACP0RdQ5rBrATyUo=" src="//cdn.shopify.com/shopifycloud/storefront/assets/storefront/origin_trials-67b41cb9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" media="screen" href="//mudaura.com/cdn/shop/t/33/compiled_assets/styles.css?v=67620557166552823501759323109">
<script id="shopify-cfh-end">window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
  <script src="https://cdn.shopify.com/extensions/55fefd76-35ff-4656-98b5-29ebc814b57d/tydal-reviews-21/assets/rev-app-embed.js" type="text/javascript" defer="defer"></script>
<script src="https://cdn.shopify.com/extensions/019e4361-5518-7aba-8cc1-191e912dec5f/reelfy-shoppable-video-582/assets/reelfy.js" type="text/javascript" defer="defer"></script>
<link href="https://cdn.shopify.com/extensions/019e4361-5518-7aba-8cc1-191e912dec5f/reelfy-shoppable-video-582/assets/reelfy.css" rel="stylesheet" type="text/css" media="all">
<link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {try {var session_token_from_headers = performance.getEntriesByType('navigation')[0].serverTiming.find(x => x.name == '_s').description;} catch {var session_token_from_headers = undefined;}var session_cookie_matches = document.cookie.match(/_shopify_s=([^;]*)/);var session_token_from_cookie = session_cookie_matches && session_cookie_matches.length === 2 ? session_cookie_matches[1] : "";var session_token = session_token_from_headers || session_token_from_cookie || "";function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 80712991022,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token,page_type: "index"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script>
  window.__TREKKIE_SHIM_QUEUE = window.__TREKKIE_SHIM_QUEUE || [];
</script>
<script id="web-pixels-manager-setup">(function(){var wpmLoader=function(){"use strict";return function(e,d,r,n){var o=arguments.length>4&&void 0!==arguments[4]?arguments[4]:{};if(!Boolean(null==(i=null==(a=window.Shopify)?void 0:a.analytics)?void 0:i.replayQueue)){var a,i;window.Shopify=window.Shopify||{};var t=window.Shopify;t.analytics=t.analytics||{};var s=t.analytics;s.replayQueue=[],s.publish=function(e,d,r){return s.replayQueue.push([e,d,r]),!0};try{self.performance.mark("wpm:start")}catch(e){}var l,u,c,m,p,f,h,g,y,w,v,b,S,P=(u=(l={modern:/Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(13[5-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,legacy:/Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(13[5-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[3-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/}).modern,c=l.legacy,(m=navigator.userAgent).match(u)?"modern":m.match(c)?"legacy":"unknown"),C="modern"===P?"modern":"legacy",_=(null!=n?n:{modern:"",legacy:""})[C],O=[(p={baseUrl:d,hashVersion:r,buildTarget:C}).baseUrl,"/wpm","/b",p.hashVersion,"modern"===p.buildTarget?"m":"l",".js"].join(""),U=(f={version:r,bundleTarget:P,surface:e.surface,pageUrl:self.location.href,monorailEndpoint:e.monorailEndpoint},h=f.version,g=f.bundleTarget,y=f.surface,w=f.pageUrl,v=f.monorailEndpoint,{emit:function(e){var d=e.status,r=e.errorMsg,n=(new Date).getTime(),o=JSON.stringify({metadata:{event_sent_at_ms:n},events:[{schema_id:"web_pixels_manager_load/3.1",payload:{version:h,bundle_target:g,page_url:w,status:d,surface:y,error_msg:r},metadata:{event_created_at_ms:n}}]});if(!v)return console&&console.warn&&console.warn("[Web Pixels Manager] No Monorail endpoint provided, skipping logging."),!1;try{return self.navigator.sendBeacon.bind(self.navigator)(v,o)}catch(e){}var a=new XMLHttpRequest;try{return a.open("POST",v,!0),a.setRequestHeader("Content-Type","text/plain"),a.send(o),!0}catch(e){return console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging to Monorail."),!1}}});try{o.browserTarget=P,function(e){var d=e.src,r=e.async,n=void 0===r||r,o=e.onload,a=e.onerror,i=e.sri,t=e.scriptDataAttributes,s=void 0===t?{}:t,l=document.createElement("script"),u=document.querySelector("head"),c=document.querySelector("body");if(l.async=n,l.src=d,i&&(l.integrity=i,l.crossOrigin="anonymous"),s)for(var m in s)if(Object.prototype.hasOwnProperty.call(s,m))try{l.dataset[m]=s[m]}catch(e){}if(o&&l.addEventListener("load",o),a&&l.addEventListener("error",a),u)u.appendChild(l);else{if(!c)throw new Error("Did not find a head or body element to append the script");c.appendChild(l)}}({src:O,async:!0,onload:function(){if(!function(){var e,d;return Boolean(null==(d=null==(e=window.Shopify)?void 0:e.analytics)?void 0:d.initialized)}()){var d=window.webPixelsManager.init(e)||void 0;if(d){var r=window.Shopify.analytics;r.replayQueue.forEach(function(e){var r=e[0],n=e[1],o=e[2];d.publishCustomEvent(r,n,o)}),r.replayQueue=[],r.publish=d.publishCustomEvent,r.visitor=d.visitor,r.initialized=!0}}},onerror:function(){return U.emit({status:"failed",errorMsg:"".concat(O," has failed to load")})},sri:(b=_,S=/^sha384-[A-Za-z0-9+/=]+$/,"string"==typeof b&&S.test(b)?_:""),scriptDataAttributes:o}),U.emit({status:"loading"})}catch(e){U.emit({status:"failed",errorMsg:(null==e?void 0:e.message)||"Unknown error"})}}}}();wpmLoader({shopId: 80712991022,storefrontBaseUrl: "https://mudaura.com",extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",monorailEndpoint: "https://monorail-edge.shopifysvc.com/unstable/produce_batch",surface: "storefront-renderer",enabledBetaFlags: ["2dca8a86","d5bdd5d0","3209b71c","5acaffe6","86d76263","3b3c7daf","6faea013"],webPixelsConfigList: [{"id":"791839022","configuration":"{\"config\":\"{\\\"google_tag_ids\\\":[\\\"G-CP1JR43K2V\\\",\\\"GT-5DF6JXDC\\\"],\\\"target_country\\\":\\\"ZZ\\\",\\\"gtag_events\\\":[{\\\"type\\\":\\\"search\\\",\\\"action_label\\\":\\\"G-CP1JR43K2V\\\"},{\\\"type\\\":\\\"begin_checkout\\\",\\\"action_label\\\":\\\"G-CP1JR43K2V\\\"},{\\\"type\\\":\\\"view_item\\\",\\\"action_label\\\":[\\\"G-CP1JR43K2V\\\",\\\"MC-2EKGW2PYB1\\\"]},{\\\"type\\\":\\\"purchase\\\",\\\"action_label\\\":[\\\"G-CP1JR43K2V\\\",\\\"MC-2EKGW2PYB1\\\"]},{\\\"type\\\":\\\"page_view\\\",\\\"action_label\\\":[\\\"G-CP1JR43K2V\\\",\\\"MC-2EKGW2PYB1\\\"]},{\\\"type\\\":\\\"add_payment_info\\\",\\\"action_label\\\":\\\"G-CP1JR43K2V\\\"},{\\\"type\\\":\\\"add_to_cart\\\",\\\"action_label\\\":\\\"G-CP1JR43K2V\\\"}],\\\"enable_monitoring_mode\\\":false}\"}","eventPayloadVersion":"v1","runtimeContext":"OPEN","scriptVersion":"f15305aac1e98c5c26a7c80e7bc37bde","type":"APP","apiClientId":1780363,"privacyPurposes":[],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_address","read_customer_email","read_customer_name","read_customer_personal_data","read_customer_phone"],"dataSharingControls":["share_all_events"]},"dataSharingState":"optimized","enabledFlags":["9a3ed68a"]},{"id":"369328430","configuration":"{\"pixel_id\":\"257868587024923\",\"pixel_type\":\"facebook_pixel\",\"metaapp_system_user_token\":\"-\"}","eventPayloadVersion":"v1","runtimeContext":"OPEN","scriptVersion":"abff2a8add143ccb04deb20f0ebd74a9","type":"APP","apiClientId":2329312,"privacyPurposes":["ANALYTICS","MARKETING","SALE_OF_DATA"],"dataSharingAdjustments":{"protectedCustomerApprovalScopes":["read_customer_address","read_customer_email","read_customer_name","read_customer_personal_data","read_customer_phone"],"dataSharingControls":["share_all_events"]},"dataSharingState":"optimized","enabledFlags":["9a3ed68a"]},{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0460","apiClientId":"shopify-pixel","type":"APP","privacyPurposes":["ANALYTICS","MARKETING"]},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0460","apiClientId":"shopify-pixel","type":"CUSTOM","privacyPurposes":["ANALYTICS","MARKETING"]}],isMerchantRequest: false,initData: {"shop":{"name":"MudAura","paymentSettings":{"currencyCode":"INR"},"myshopifyDomain":"357207.myshopify.com","countryCode":"IN","storefrontUrl":"https:\/\/mudaura.com"},"customer":null,"cart":null,"checkout":null,"productVariants":[],"products":null,"purchasingCompany":null,"page":null},},"https://mudaura.com/cdn","14317f4cwb3641f09pe2e0735bm25c2fb3e",{"modern":"","legacy":""},{"trekkieShim":true,"apiClientId":"580111","pageType":"home","shopId":"80712991022","storefrontBaseUrl":"https:\/\/mudaura.com","extensionBaseUrl":"https:\/\/extensions.shopifycdn.com\/cdn\/shopifycloud\/web-pixels-manager","surface":"storefront-renderer","enabledBetaFlags":"[\"2dca8a86\", \"d5bdd5d0\", \"3209b71c\", \"5acaffe6\", \"86d76263\", \"3b3c7daf\", \"6faea013\"]","isMerchantRequest":"false","hashVersion":"14317f4cwb3641f09pe2e0735bm25c2fb3e","publish":"custom","events":"[[\"page_viewed\",{}]]"});})();</script><script>
  window.ShopifyAnalytics = window.ShopifyAnalytics || {};
  window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
  window.ShopifyAnalytics.meta.currency = 'INR';
  var meta = {"page":{"pageType":"home","requestId":"d24b6574-61e9-420c-b320-cb915872190e-1780636440"}};
  for (var attr in meta) {
    window.ShopifyAnalytics.meta[attr] = meta[attr];
  }
</script>
<script class="analytics">
  (function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    window.ShopifyAnalytics.lib.trekkie = window.trekkie;
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        if (window.__TREKKIE_SHIM_QUEUE && (method == 'track' || method == 'page')) {
          try {
            window.__TREKKIE_SHIM_QUEUE.push({
              from: 'trekkie-stub',
              method: method,
              args: args.slice(1)
            });
          } catch (e) {
            // no-op
          }
        }
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
var script = document.createElement('script');
script.type = 'text/javascript';
script.onerror = function(e) {
  var scriptFallback = document.createElement('script');
  scriptFallback.type = 'text/javascript';
  scriptFallback.onerror = function(error) {
          var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 80712991022,
      theme_id: 181284012334,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "//mudaura.com/cdn/s/trekkie.storefront.f7140b8b25ae1195cf346a36a85e3e4bcf46adb3.min.js"});

  };
  scriptFallback.async = true;
  scriptFallback.src = '//mudaura.com/cdn/s/trekkie.storefront.f7140b8b25ae1195cf346a36a85e3e4bcf46adb3.min.js';
  first.parentNode.insertBefore(scriptFallback, first);
};
script.async = true;
script.src = '//mudaura.com/cdn/s/trekkie.storefront.f7140b8b25ae1195cf346a36a85e3e4bcf46adb3.min.js';
first.parentNode.insertBefore(script, first);

    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":80712991022,"isMerchantRequest":null,"themeId":181284012334,"themeCityHash":"12895445202503243388","contentLanguage":"en","currency":"INR","eventMetadataId":"12e3e266-ea3e-4c7f-a80e-dff7626b7a1f"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain","enabledBetaFlags":["b5387b81","d5bdd5d0"]},"Session Attribution":{},"S2S":{"facebookCapiEnabled":true,"source":"trekkie-storefront-renderer","apiClientId":580111}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"home","requestId":"d24b6574-61e9-420c-b320-cb915872190e-1780636440","shopifyEmitted":true});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        
      }
    });

    var eventsListenerScript = document.createElement('script');
    eventsListenerScript.async = true;
    eventsListenerScript.src = "//mudaura.com/cdn/shopifycloud/storefront/assets/shop_events_listener-4e26a9ce.js";
    document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
})();</script>
<script
  defer
  src="https://mudaura.com/cdn/shopifycloud/perf-kit/shopify-perf-kit-3.5.0.min.js"
  data-application="storefront-renderer"
  data-shop-id="80712991022"
  data-render-region="gcp-asia-southeast1"
  data-page-type="index"
  data-theme-instance-id="181284012334"
  data-theme-name="Savor"
  data-theme-version="3.0.0"
  data-monorail-region="shop_domain"
  data-resource-timing-sampling-rate="10"
  data-shs="true"
  data-shs-beacon="true"
  data-shs-export-with-fetch="true"
  data-shs-logs-sample-rate="1"
  data-shs-beacon-endpoint="https://mudaura.com/api/collect"
></script>
</head>

  <body class="page-width-narrow card-hover-effect-subtle-zoom">
    <a
  class="skip-to-content-link button-secondary"
  href="#MainContent"
>
  Skip to content
</a>

    <div id="header-group">
      <!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--25246412407086__17599437558ad0954f" class="shopify-section shopify-section-group-header-group section-wrapper">



<div class="section-background color-scheme-1"></div>
<div
  class="section section--full-width color-scheme-1"
  data-testid="ui-test-section"

  

  style="
    

    
  "
>
  <div class="custom-section-background">
    

  </div>

  <div
    class="border-style custom-section-content"
    style="--border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 
"
  >
    

    <div
      class="
        spacing-style
        layout-panel-flex
        layout-panel-flex--column
        section-content-wrapper
         mobile-column
      "
      style="
        --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: center;
--vertical-alignment-mobile: center;

        --padding-block-start: 0px;--padding-block-end: 0px;
      "
      data-testid="section-content"
    >
      
  <div id="shopify-block-ATTRFWllUK2w3K0M4Z__ai_gen_block_6bfabb2_FJbbcM" class="shopify-block">


<style data-shopify>
  .ai-marquee-container-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
    width: 100%;
    max-width: 100vw;
    overflow: hidden;
    background-color: #1f282f;
    padding: 8px 0;
    position: relative;
    box-sizing: border-box;
    min-height: 50px;
    display: flex;
    align-items: center;
  }

  .ai-marquee-wrapper-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
    width: 100%;
    overflow: hidden;
    position: relative;
    box-sizing: border-box;
    height: auto;
  }

  .ai-marquee-track-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
    display: flex;
    animation: ai-marquee-scroll-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm 80s linear infinite;
    will-change: transform;
    width: max-content;
    height: auto;
  }

  .ai-marquee-content-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    white-space: nowrap;
    height: auto;
  }

  .ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
    color: #ffffff;
    font-family: "Barlow Condensed", sans-serif;
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    line-height: 1.4;
    flex-shrink: 0;
    display: inline-block;
    padding: 8px 0;
  }

  .ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm a {
    color: inherit;
    text-decoration: none;
  }

  .ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm a:hover {
    color: #e6e6e6;
    text-decoration: underline;
  }

  .ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
    color: #a42325;
    font-size: 16px;
    margin: 0 40px;
    flex-shrink: 0;
    display: inline-block;
    line-height: 1;
    vertical-align: middle;
  }

  @keyframes ai-marquee-scroll-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ai-marquee-track-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      animation-play-state: paused;
    }
  }

  @media screen and (max-width: 990px) {
    .ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      font-size: 18.0px;
    }

    .ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      font-size: 14.4px;
      margin: 0 32.0px;
    }
  }

  @media screen and (max-width: 749px) {
    .ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      font-size: 16.0px;
    }
    
    .ai-marquee-container-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      padding: 6.4px 0;
      min-height: 40px;
    }

    .ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      font-size: 12.8px;
      margin: 0 28.0px;
    }
  }

  @media screen and (max-width: 480px) {
    .ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      font-size: 14.0px;
    }
    
    .ai-marquee-container-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      min-height: 35px;
    }

    .ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm {
      font-size: 11.2px;
      margin: 0 24.0px;
    }
  }
</style>

<marquee-announcement-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm
  class="ai-marquee-container-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm"
  
>
  <div class="ai-marquee-wrapper-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
    <div class="ai-marquee-track-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
      <div class="ai-marquee-content-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
        
        
        
        
        
        
          
          
          
            <div class="ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
              
                use code 'mud5' for 5% off
              
            </div>
            
            
              
                <span class="ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">•</span>
              
            
          
        
          
          
          
            <div class="ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
              
                buy any 3 products at ₹999
              
            </div>
            
            
              
                <span class="ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">•</span>
              
            
          
        
          
          
          
            <div class="ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
              
                flat 5% on prepaid orders
              
            </div>
            
            
              
                <span class="ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">•</span>
              
            
          
        
      </div>
      
      <div class="ai-marquee-content-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
        
          
          
          
            <div class="ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
              
                use code 'mud5' for 5% off
              
            </div>
            
            
              
                <span class="ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">•</span>
              
            
          
        
          
          
          
            <div class="ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
              
                buy any 3 products at ₹999
              
            </div>
            
            
              
                <span class="ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">•</span>
              
            
          
        
          
          
          
            <div class="ai-marquee-item-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">
              
                flat 5% on prepaid orders
              
            </div>
            
            
              
                <span class="ai-marquee-separator-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm">•</span>
              
            
          
        
      </div>
    </div>
  </div>
</marquee-announcement-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm>

<script>
  (function() {
    class MarqueeAnnouncementattrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm extends HTMLElement {
      constructor() {
        super();
      }

      connectedCallback() {
        this.setupMarquee();
        window.addEventListener('resize', () => this.setupMarquee());
      }

      setupMarquee() {
        const container = this.querySelector('.ai-marquee-wrapper-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm');
        const track = this.querySelector('.ai-marquee-track-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm');
        
        if (!container || !track) return;

        const containerWidth = container.offsetWidth;
        const trackWidth = track.scrollWidth / 2;

        if (trackWidth < containerWidth) {
          const multiplier = Math.ceil(containerWidth / trackWidth) + 1;
          const content = track.innerHTML;
          track.innerHTML = content.repeat(multiplier);
        }
      }
    }

    customElements.define('marquee-announcement-attrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm', MarqueeAnnouncementattrfwlluk2w3k0m4zaigenblock6bfabb2fjbbcm);
  })();
</script>

</div>


    </div>
  </div>
</div>





</div><header id="shopify-section-sections--25246412407086__header_section" class="shopify-section shopify-section-group-header-group header-section">



<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "MudAura",
    
      "logo": "https:\/\/mudaura.com\/cdn\/shop\/files\/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586\u0026width=500",
    
    "url": "https:\/\/mudaura.com"
  }
</script>

<header-component
  id="header-component"
  class="header color-scheme-6"
  
    transparent="always"
  
  
  data-skip-node-update
  data-scroll-direction="none"
>
  
    

    

    
    
      <div
        class="header__row header__row--top color-scheme-1 section section--full-width-margin section--full-width"
        ref="headerRowTop"style="--border-bottom-width: 0px; --border-bottom-width-mobile: 0px;">
        <div class="header__columns spacing-style">
          <div
      class="header__column header__column--left"
      data-testid="header-top-left"
    >
      
        
          
              



    <div
      class="header__drawer desktop:hidden"
      ref="headerDrawerContainer"
      
    >
      

<script
  src="//mudaura.com/cdn/shop/t/33/assets/header-drawer.js?v=38290796699993510201759323088"
  type="module"
  fetchpriority="low"
></script>

<header-drawer
  class="header-drawer header__drawer--mobile"
  style="--menu-image-border-radius: 0px; --resource-card-corner-radius: 0px;"
>
  <details
    id="Details-menu-drawer-container"
    data-skip-node-update="true"
    class="menu-drawer-container"
    ref="details"
    scroll-lock
  >
    <summary
      class="header__icon header__icon--menu header__icon--summary"
      aria-label="Menu"
      on:click="/toggle"
    >
      <span class="svg-wrapper header-drawer-icon header-drawer-icon--open"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M1 3.5H13" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
  <path d="M1 10.5H13" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
</svg>
</span>
      <span class="svg-wrapper header-drawer-icon header-drawer-icon--close"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 2L2 12" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 12L2 2" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
    </summary>
    <div
      data-header-drawer
      class="
        menu-drawer
        motion-reduce
        color-scheme-1
      "
    >
      <button
        class="button button-unstyled close-button menu-drawer__close-button"
        type="button"
        aria-label="Close"
        on:click="/close"
      >
        <span class="svg-wrapper header-drawer-icon header-drawer-icon--close"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 2L2 12" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 12L2 2" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      </button>
      <nav
        class="menu-drawer__navigation"
        style="--menu-top-level-font-family: var(--font-subheading--family);
--menu-top-level-font-size-desktop: 1.25rem; --menu-top-level-font-style: var(--font-subheading--style); --menu-top-level-font-weight: var(--font-subheading--weight); --menu-top-level-font-case:uppercase;

  --menu-top-level-font-size: var(--menu-font-2xl--size); --menu-top-level-font-line-height:
  var(--menu-font-2xl--line-height);

--menu-top-level-font-color: var(--color-foreground); --menu-top-level-font-color-rgb: var(--color-foreground-rgb);

--menu-parent-font-family: var(--font-subheading--family); --menu-parent-font-style:
var(--font-subheading--style); --menu-parent-font-weight: var(--font-subheading--weight); --menu-parent-font-case:
uppercase;

    --menu-parent-font-size: var(--menu-font-sm--size); --menu-parent-font-line-height:
    var(--menu-font-sm--line-height); --menu-parent-font-color: rgb(var(--color-foreground-rgb) /
    var(--opacity-subdued-text)); --menu-parent-active-font-color: var(--color-foreground);

--menu-child-font-family: var(--font-subheading--family); --menu-child-font-style:
var(--font-subheading--style); --menu-child-font-weight: var(--font-subheading--weight); --menu-child-font-case:
uppercase;

    --menu-child-font-size: var(--menu-font-xl--size); --menu-child-font-line-height: var(--menu-font-xl--line-height);
    --menu-child-font-color: var(--color-foreground); --menu-child-active-font-color: rgb(var(--color-foreground-rgb) /
    var(--opacity-subdued-text));


        "
      >
        <ul
          class="menu-drawer__menu has-submenu"
          role="list"
        >
            
            

              <li
                style="--menu-drawer-animation-index: 1;"
                class="menu-drawer__list-item--flat"
              >
                
<a
                    id="HeaderDrawer-home"
                    href="/"
                    class="menu-drawer__menu-item menu-drawer__menu-item--mainlist menu-drawer__animated-element focus-inset menu-drawer__menu-item--active"
                    
                      aria-current="page"
                    
                  >
                    <span class="menu-drawer__menu-item-text wrap-text">Home</span>
                  </a>
                
              </li>
              <li
                style="--menu-drawer-animation-index: 2;"
                class="menu-drawer__list-item--flat"
              >
                
<a
                    id="HeaderDrawer-shop"
                    href="/collections/all"
                    class="menu-drawer__menu-item menu-drawer__menu-item--mainlist menu-drawer__animated-element focus-inset"
                    
                  >
                    <span class="menu-drawer__menu-item-text wrap-text">Shop</span>
                  </a>
                  
                  <ul
                    class="menu-drawer__menu menu-drawer__menu--childlist"
                    role="list"
                    tabindex="-1"
                  ><li
                        class="menu-drawer__list-item"
                        style="--menu-drawer-animation-index: 2;"
                      >
                        <a
                          href="/collections/hair-products"
                          class="menu-drawer__menu-item menu-drawer__menu-item--child menu-drawer__animated-element focus-inset"
                        >
                          
                          <span class="menu-drawer__menu-item-text wrap-text">Hair</span>
                        </a>
                      </li><li
                        class="menu-drawer__list-item"
                        style="--menu-drawer-animation-index: 2;"
                      >
                        <a
                          href="/collections/face"
                          class="menu-drawer__menu-item menu-drawer__menu-item--child menu-drawer__animated-element focus-inset"
                        >
                          
                          <span class="menu-drawer__menu-item-text wrap-text">Face</span>
                        </a>
                      </li><li
                        class="menu-drawer__list-item"
                        style="--menu-drawer-animation-index: 2;"
                      >
                        <a
                          href="/collections/smile"
                          class="menu-drawer__menu-item menu-drawer__menu-item--child menu-drawer__animated-element focus-inset"
                        >
                          
                          <span class="menu-drawer__menu-item-text wrap-text">Smile</span>
                        </a>
                      </li></ul>
                
              </li>
              <li
                style="--menu-drawer-animation-index: 3;"
                class="menu-drawer__list-item--flat"
              >
                
<a
                    id="HeaderDrawer-contact"
                    href="/pages/contact"
                    class="menu-drawer__menu-item menu-drawer__menu-item--mainlist menu-drawer__animated-element focus-inset"
                    
                  >
                    <span class="menu-drawer__menu-item-text wrap-text">Contact</span>
                  </a>
                
              </li>
              <li
                style="--menu-drawer-animation-index: 4;"
                class="menu-drawer__list-item--flat"
              >
                
<a
                    id="HeaderDrawer-blogs"
                    href="/blogs/news"
                    class="menu-drawer__menu-item menu-drawer__menu-item--mainlist menu-drawer__animated-element focus-inset"
                    
                  >
                    <span class="menu-drawer__menu-item-text wrap-text">Blogs</span>
                  </a>
                
              </li>
        </ul>
      </nav>
      <div
        class="menu-drawer__utility-links menu-drawer__animated-element"
        style="--menu-drawer-animation-index: 4;"
      >
        
        </div>

      
    </div>
    <div
      class="menu-drawer__backdrop"
      on:click="header-drawer/close"
    ></div>
  </details>
</header-drawer>



    </div>

  





            
        
      
        
          
              
  <search-button class="search-action desktop:hidden">
    <button
      on:click="#search-modal/showDialog"
      class="button button-unstyled search-modal__button header-actions__action"
      aria-label="Open search"
    >
      <span
        aria-hidden="true"
        class="svg-wrapper"
      >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><circle cx="9" cy="9" r="4.75" stroke="currentColor" stroke-width="var(--icon-stroke-width)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m12.5 12.5 3.25 3.25"/></svg>

      </span>
    </button>
  </search-button>




            
        
      
        
          
              



    <header-menu
      ref="headerMenu"
      class="header-menu mobile:hidden"
      data-animation-delay="200"
      
      style="--submenu-animation-speed: 200ms;"
    >
      <div class="header-menu__inner">



<nav header-menu>
  <div
    class="menu-list"
    style="--menu-top-level-font-family: var(--font-subheading--family);
--menu-top-level-font-size-desktop: 1.25rem; --menu-top-level-font-style: var(--font-subheading--style); --menu-top-level-font-weight: var(--font-subheading--weight); --menu-top-level-font-case:uppercase;

  --menu-top-level-font-size: var(--menu-font-sm--size); --menu-top-level-font-line-height:
  var(--menu-font-sm--line-height);

--menu-top-level-font-color: var(--color-foreground); --menu-top-level-font-color-rgb: var(--color-foreground-rgb);
"
  >
    
    <overflow-list
  
    ref="overflowMenu"
  
  
    class="overflow-menu color-scheme-matches-parent"
  
  
    minimum-items="2"
  
  
    defer
  
>
  <template shadowrootmode="open">
    <link href="//mudaura.com/cdn/shop/t/33/assets/overflow-list.css?v=168694168152117541881759323088" rel="stylesheet" type="text/css" media="all" />

    <ul part="list">
      <slot></slot>
      <slot
        name="more"
        part="more"
        hidden
        
      >
        <li
          part="more"
        >
          <button
            class="button"
            type="button"
            tabindex="0"
          >
            More
          </button>
        </li>
      </slot>
      <li
        part="placeholder"
        hidden
      ></li>
    </ul>

    <div part="overflow">
      <ul part="overflow-list">
        <slot name="overflow"></slot>
      </ul>
    </div>
  </template>

  
  
    <li
      role="presentation"
      class="menu-list__list-item"
      on:focus="/activate"
      on:blur="/deactivate"
      on:pointerenter="/activate"
      on:pointerleave="/deactivate"
    >
      <a
        href="/"
        data-skip-node-update="true"
        class="menu-list__link menu-list__link--active"ref="menuitem"
      >
        <span class="menu-list__link-title">Home</span>
      </a></li>
  
    <li
      role="presentation"
      class="menu-list__list-item"
      on:focus="/activate"
      on:blur="/deactivate"
      on:pointerenter="/activate"
      on:pointerleave="/deactivate"
    >
      <a
        href="/collections/all"
        data-skip-node-update="true"
        class="menu-list__link"aria-controls="submenu-2"
          aria-haspopup="true"
          aria-expanded="false"ref="menuitem"
      >
        <span class="menu-list__link-title">Shop</span>
      </a><div class="menu-list__submenu color-scheme-matches-parent" ref="submenu[]">
          <div
            id="submenu-2"
            class="menu-list__submenu-inner"
            style="--menu-parent-font-family: var(--font-subheading--family); --menu-parent-font-style:
var(--font-subheading--style); --menu-parent-font-weight: var(--font-subheading--weight); --menu-parent-font-case:
uppercase;

    --menu-parent-font-size: var(--menu-font-sm--size); --menu-parent-font-line-height:
    var(--menu-font-sm--line-height); --menu-parent-font-color: rgb(var(--color-foreground-rgb) /
    var(--opacity-subdued-text)); --menu-parent-active-font-color: var(--color-foreground);

--menu-child-font-family: var(--font-subheading--family); --menu-child-font-style:
var(--font-subheading--style); --menu-child-font-weight: var(--font-subheading--weight); --menu-child-font-case:
uppercase;

    --menu-child-font-size: var(--menu-font-xl--size); --menu-child-font-line-height: var(--menu-font-xl--line-height);
    --menu-child-font-color: var(--color-foreground); --menu-child-active-font-color: rgb(var(--color-foreground-rgb) /
    var(--opacity-subdued-text));

"
          >
            
            <div class="mega-menu section section--full-width-margin section--full-width">
  <div
    class="mega-menu__grid"
    data-menu-grid-id="MegaMenuList-2"
  >
    
<ul
  data-menu-list-id="MegaMenuList-2"
  class="mega-menu__list list-unstyled"
  style="--menu-image-border-radius: 0px;"
>
  
    <li class="mega-menu__column mega-menu__column--span-1">
    <div>
      <a
        href="/collections/hair-products"
        class="mega-menu__link "
      >
        
        <span
          class="mega-menu__link-title wrap-text"
        >Hair</span>
      </a>
      
    </div>

    
  
    
    <div>
      <a
        href="/collections/face"
        class="mega-menu__link "
      >
        
        <span
          class="mega-menu__link-title wrap-text"
        >Face</span>
      </a>
      
    </div>

    
  
    
    <div>
      <a
        href="/collections/smile"
        class="mega-menu__link "
      >
        
        <span
          class="mega-menu__link-title wrap-text"
        >Smile</span>
      </a>
      
    </div>

    </li>
  
</ul>



<style data-shopify>
  [data-menu-grid-id="MegaMenuList-2"] {
    
      --menu-columns-desktop: 6;
      --menu-columns-tablet: 4;
    
  }

  [data-menu-list-id="MegaMenuList-2"] {
    
      --menu-columns-desktop: 1;
      --menu-columns-tablet: 2;
    
  }
</style>


    


    <span
      class="mega-menu__content"
      style="--menu-content-columns-desktop: 5; --menu-content-columns-tablet: 2; --resource-card-corner-radius: 0px;"
    >
      <ul
        class="mega-menu__content-list mega-menu__content-list--collections list-unstyled"
        style="--menu-content-columns-desktop: 2; --menu-content-columns-tablet: 1;"
      >
        
          
          <li class="mega-menu__content-list-item">
            
<div
  class="resource-card resource-card--overlay"
  href="/collections/all"
  data-resource-type="collection"
>
  <a
    class="resource-card__link"
    href="/collections/all"
  >
    <span class="visually-hidden">
      Products
    </span>
  </a>
  <div
    class="resource-card__media"
    style="--resource-card-aspect-ratio: 16 / 9;"
    
  >
      
<div
          aria-hidden="true"
          class="resource-card__image-placeholder"
        >Products</div></div>

  <div class="resource-card__content">
    <p class="resource-card__title h5">Products</p>

    
      <p class="resource-card__subtext paragraph"></p>
    
  </div>
</div>

          </li>
        
          
          <li class="mega-menu__content-list-item mega-menu__content-list-item--hidden-tablet">
            
<div
  class="resource-card resource-card--overlay"
  href="/collections/hair-products"
  data-resource-type="collection"
>
  <a
    class="resource-card__link"
    href="/collections/hair-products"
  >
    <span class="visually-hidden">
      Hair Products
    </span>
  </a>
  <div
    class="resource-card__media"
    style="--resource-card-aspect-ratio: 16 / 9;"
    
  >
      
<img src="//mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=1200" alt="" srcset="//mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=240 240w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=352 352w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=832 832w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=1200 1200w" width="1200" height="1200" loading="lazy" class="resource-card__image" sizes="300px" transitionToProduct="true" style="">
</div>

  <div class="resource-card__content">
    <p class="resource-card__title h5">Hair Products</p>

    
      <p class="resource-card__subtext paragraph"></p>
    
  </div>
</div>

          </li>
        
      </ul>
    </span>


  </div>
</div>

          </div>
        </div></li>
  
    <li
      role="presentation"
      class="menu-list__list-item"
      on:focus="/activate"
      on:blur="/deactivate"
      on:pointerenter="/activate"
      on:pointerleave="/deactivate"
    >
      <a
        href="/pages/contact"
        data-skip-node-update="true"
        class="menu-list__link"ref="menuitem"
      >
        <span class="menu-list__link-title">Contact</span>
      </a></li>
  
    <li
      role="presentation"
      class="menu-list__list-item"
      on:focus="/activate"
      on:blur="/deactivate"
      on:pointerenter="/activate"
      on:pointerleave="/deactivate"
    >
      <a
        href="/blogs/news"
        data-skip-node-update="true"
        class="menu-list__link"ref="menuitem"
      >
        <span class="menu-list__link-title">Blogs</span>
      </a></li>
  
  <li
    class="menu-list__list-item"
    role="presentation"
    slot="more"
    on:focus="/activate"
    on:blur="/deactivate"
    on:pointerenter="/activate"
    on:pointerleave="/deactivate"
  >
    <button role="menuitem" class="button menu-list__link button-unstyled">
      <span class="menu-list__link-title">More</span>
    </button>
  </li>

</overflow-list>

  </div>
</nav>

      </div>

      <script
        src="//mudaura.com/cdn/shop/t/33/assets/header-menu.js?v=98986771878453457241759323088"
        type="module"
        fetchpriority="low"
      ></script>
    </header-menu>






            
        
      
    </div><div
      class="header__column header__column--center"
      data-testid="header-top-center"
    >
      
        
          
              




<a
  
  href="/"
  class="size-style spacing-style header-logo"
  style="
    --size-style-width: ;--size-style-height: ;
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --font-family: var(--font-body--family);
    --font-style: var(--font-body--style);
    --font-weight: 600;
  "
  
>
  

  <span
    class="header-logo__image-container header-logo__image-container--original"
    data-testid="header-logo"
  >
    
  
  
  

  

  

  

  <img src="//mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?height=42&amp;v=1759323586" alt="" width="42" height="42" class="header-logo__image" srcset="//mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?height=42&amp;v=1759323586 1x, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?height=84&amp;v=1759323586 2x, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?height=126&amp;v=1759323586 3x" style="object-position:49.846% 49.6407%;--header-logo-image-width: 42px;--header-logo-image-width-mobile: 34px; --header-logo-image-height: 42px; --header-logo-image-height-mobile: 34px;">


  </span>

  
    <span
      class="header-logo__image-container header-logo__image-container--inverse"
      data-testid="header-logo-inverse"
    >
      
  
  
  

  

  

  

  <img src="//mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?height=42&amp;v=1759323586" alt="" width="42" height="42" class="header-logo__image" srcset="//mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?height=42&amp;v=1759323586 1x, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?height=84&amp;v=1759323586 2x, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?height=126&amp;v=1759323586 3x" style="object-position:49.846% 49.6407%;--header-logo-image-width: 42px;--header-logo-image-width-mobile: 34px; --header-logo-image-height: 42px; --header-logo-image-height-mobile: 34px;">


    </span>
  
</a>





            
        
      
    </div><div
      class="header__column header__column--right"
      data-testid="header-top-right"
    >
      
        
          
              
            
        
      
        
          
              
  <search-button class="search-action mobile:hidden">
    <button
      on:click="#search-modal/showDialog"
      class="button button-unstyled search-modal__button header-actions__action"
      aria-label="Open search"
    >
      <span
        aria-hidden="true"
        class="svg-wrapper"
      >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><circle cx="9" cy="9" r="4.75" stroke="currentColor" stroke-width="var(--icon-stroke-width)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m12.5 12.5 3.25 3.25"/></svg>

      </span>
    </button>
  </search-button>




            
        
      
        
          
              <script
  type="module"
  src="//mudaura.com/cdn/shop/t/33/assets/cart-icon.js?v=14733679814066288171759323089"
  fetchpriority="low"
></script>

<header-actions>
  
    <anchored-popover-component
  data-close-on-resize="true"
  class="account-popover mobile:hidden"
>
  <button
  class="account-button header-actions__action"
  aria-label="Open account menu"popovertarget="account-popover"
    popovertargetaction="toggle"ref="trigger"
  
><span
      class="account-button__icon"
      aria-hidden="true"
    ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.5" r="2.75" stroke="currentColor" stroke-width="var(--icon-stroke-width)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m5.172 14.591-.437.786a.588.588 0 0 0 .514.873h9.502a.588.588 0 0 0 .514-.873l-.437-.786a5.523 5.523 0 0 0-9.656 0"/></svg>
</span></button>



  <div
    class="account-popover__panel details-content color-scheme-1"
    id="account-popover"
    popover="auto"
    ref="popover"
  >
    <div class="account-actions">
  <div class="account-actions__main-menu">
    <header class="account-actions__header">
      <span class="account-actions__title h5">
        
          Account
        
      </span>
      
    </header>

    
      <div
        class="account-actions__sign-ins"
        data-skip-subtree-update="true"
      >
        <script
          src="//mudaura.com/cdn/shop/t/33/assets/account-login-actions.js?v=132624473766457443991759323088"
          type="module"
          fetchpriority="low"
        ></script>
        <account-login-actions class="account-actions__shop-login">
          <script defer="defer" async type="module" src="//mudaura.com/cdn/shopifycloud/shop-js/modules/v2/loader.shop-login-button.en.esm.js"></script>
<script type="module">
  await import("//mudaura.com/cdn/shopifycloud/shop-js/modules/v2/loader.shop-login-button.en.esm.js");

  
</script>

<shop-login-button ux-mode="windoid" return-uri="https://mudaura.com/account/redirect" proxy="true" proxy-core-idp="true" redirect-type="iframe" response-type="code"></shop-login-button>

        </account-login-actions>

        <a
          href="/customer_authentication/login?return_to=%2F&locale=en&ui_hint=full"
          class="account-actions__link button"
          
        >
          <span class="account-actions__sign-in-text">
            Other sign in options
          </span>
          <span class="account-actions__fallback-text">
            Sign in
          </span>
        </a>
      </div>
    

    <nav class="account-actions__nav">
      <ul class="account-actions__list">
        <li class="account-actions__list-item">
          <a
            href="/account"
            class="account-actions__link button-secondary"
            
          >
            <span
              class="account-actions__icon"
              aria-hidden="true"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
  <path stroke-linecap="round" stroke="currentColor" stroke-width="var(--icon-stroke-width)" d="M2.929 7.705c0-.482.154-.95.44-1.338L5.06 4.08c.303-.41.783-.652 1.293-.652h7.42c.525 0 1.018.257 1.319.69l1.577 2.266c.262.377.403.826.403 1.285v8.294c0 .888-.72 1.608-1.608 1.608H4.536c-.888 0-1.607-.72-1.607-1.608V7.705Z"/>
  <path stroke="currentColor" stroke-width="var(--icon-stroke-width)" d="M2.929 6.965h14.143M10 3.428v3.535M6.143 14.035v-2.571c0-.178.143-.321.321-.321h3.857c.178 0 .322.143.322.321v2.571a.321.321 0 0 1-.322.322H6.464a.321.321 0 0 1-.321-.322Z"/>
</svg>
</span>
            Orders
          </a>
        </li>
        <li class="account-actions__list-item">
          <a
            href="/account/addresses"
            class="account-actions__link button-secondary"
          >
            <span
              class="account-actions__icon"
              aria-hidden="true"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.5" r="2.75" stroke="currentColor" stroke-width="var(--icon-stroke-width)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m5.172 14.591-.437.786a.588.588 0 0 0 .514.873h9.502a.588.588 0 0 0 .514-.873l-.437-.786a5.523 5.523 0 0 0-9.656 0"/></svg>
</span>
            Profile
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>



  </div>
</anchored-popover-component>



    <script
  src="//mudaura.com/cdn/shop/t/33/assets/dialog.js?v=94382931671780430451759323088"
  type="module"
></script>

<dialog-component
  class="account-drawer"
  
>
  <button
  class="account-button header-actions__action"
  aria-label="Open account menu"ref="trigger"
  on:click="/showDialog"
><span
      class="account-button__icon"
      aria-hidden="true"
    ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.5" r="2.75" stroke="currentColor" stroke-width="var(--icon-stroke-width)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m5.172 14.591-.437.786a.588.588 0 0 0 .514.873h9.502a.588.588 0 0 0 .514-.873l-.437-.786a5.523 5.523 0 0 0-9.656 0"/></svg>
</span></button>



  <dialog
    ref="dialog"
    class="color-scheme-1 dialog-modal dialog-drawer dialog-bottom-sheet account-drawer__dialog"
    scroll-lock
  >
    <button
      ref="closeButton"
      on:click="/closeDialog"
      class="button button-unstyled close-button account-drawer__close-button"
      aria-label="Close dialog"
    >
      <span
        class="svg-wrapper"
        aria-hidden="true"
      ><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 2L2 12" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 12L2 2" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
    </button>
    <div class="account-actions">
  <div class="account-actions__main-menu">
    <header class="account-actions__header">
      <span class="account-actions__title h5">
        
          Account
        
      </span>
      
    </header>

    
      <div
        class="account-actions__sign-ins"
        data-skip-subtree-update="true"
      >
        <script
          src="//mudaura.com/cdn/shop/t/33/assets/account-login-actions.js?v=132624473766457443991759323088"
          type="module"
          fetchpriority="low"
        ></script>
        <account-login-actions class="account-actions__shop-login">
          <script defer="defer" async type="module" src="//mudaura.com/cdn/shopifycloud/shop-js/modules/v2/loader.shop-login-button.en.esm.js"></script>
<script type="module">
  await import("//mudaura.com/cdn/shopifycloud/shop-js/modules/v2/loader.shop-login-button.en.esm.js");

  
</script>

<shop-login-button ux-mode="windoid" return-uri="https://mudaura.com/account/redirect" proxy="true" proxy-core-idp="true" redirect-type="iframe" response-type="code"></shop-login-button>

        </account-login-actions>

        <a
          href="/customer_authentication/login?return_to=%2F&locale=en&ui_hint=full"
          class="account-actions__link button"
          
            autofocus
          
        >
          <span class="account-actions__sign-in-text">
            Other sign in options
          </span>
          <span class="account-actions__fallback-text">
            Sign in
          </span>
        </a>
      </div>
    

    <nav class="account-actions__nav">
      <ul class="account-actions__list">
        <li class="account-actions__list-item">
          <a
            href="/account"
            class="account-actions__link button-secondary"
            
          >
            <span
              class="account-actions__icon"
              aria-hidden="true"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
  <path stroke-linecap="round" stroke="currentColor" stroke-width="var(--icon-stroke-width)" d="M2.929 7.705c0-.482.154-.95.44-1.338L5.06 4.08c.303-.41.783-.652 1.293-.652h7.42c.525 0 1.018.257 1.319.69l1.577 2.266c.262.377.403.826.403 1.285v8.294c0 .888-.72 1.608-1.608 1.608H4.536c-.888 0-1.607-.72-1.607-1.608V7.705Z"/>
  <path stroke="currentColor" stroke-width="var(--icon-stroke-width)" d="M2.929 6.965h14.143M10 3.428v3.535M6.143 14.035v-2.571c0-.178.143-.321.321-.321h3.857c.178 0 .322.143.322.321v2.571a.321.321 0 0 1-.322.322H6.464a.321.321 0 0 1-.321-.322Z"/>
</svg>
</span>
            Orders
          </a>
        </li>
        <li class="account-actions__list-item">
          <a
            href="/account/addresses"
            class="account-actions__link button-secondary"
          >
            <span
              class="account-actions__icon"
              aria-hidden="true"
            ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="6.5" r="2.75" stroke="currentColor" stroke-width="var(--icon-stroke-width)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m5.172 14.591-.437.786a.588.588 0 0 0 .514.873h9.502a.588.588 0 0 0 .514-.873l-.437-.786a5.523 5.523 0 0 0-9.656 0"/></svg>
</span>
            Profile
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>



  </dialog>
</dialog-component>



  

  
    <script
  src="//mudaura.com/cdn/shop/t/33/assets/cart-drawer.js?v=92290163633888904321759323089"
  type="module"
  fetchpriority="low"
></script>

<cart-drawer-component
  class="cart-drawer"
  
  
>
  <button
    class="button header-actions__action button-unstyled"
    on:click="/open"
    aria-label="Open cart Total items in cart: 0"
  >
    <cart-icon
  class="
    header-actions__cart-icon
    
  "
  data-testid="cart-icon"
>
  <span
    class="svg-wrapper"
    aria-hidden="true"
  >
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M3.392 6.875h13.216v8.016c0 .567-.224 1.112-.624 1.513-.4.402-.941.627-1.506.627H5.522a2.13 2.13 0 0 1-1.506-.627 2.15 2.15 0 0 1-.624-1.513zM8.818 2.969h2.333c.618 0 1.211.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.313c0-.622.246-1.218.683-1.658a2.33 2.33 0 0 1 1.65-.686"/></svg>

  </span>

  <div
  ref="cartBubble"
  class="cart-bubble visually-hidden"
  
  
    data-maintain-ratio
  
>
  <span class="cart-bubble__background"></span>
  <span
    ref="cartBubbleText"
    class="cart-bubble__text"
    
      role="status"
    
  >
    <span class="visually-hidden">Total items in cart: 0
    </span>
    <span
      class="cart-bubble__text-count hidden"
      ref="cartBubbleCount"
      aria-hidden="true"
      data-testid="cart-bubble"
    >
0</span>
  </span>
</div>

</cart-icon>



  </button>

  <dialog
    ref="dialog"
    class="cart-drawer__dialog dialog-modal dialog-drawer color-scheme-1 cart-drawer--empty"
    scroll-lock
  >
    <div class="cart-drawer__inner">
      <cart-items-component
        class="cart-items-component"
        data-section-id="sections--25246412407086__header_section"
      ><div class="cart-drawer__header">
            <button
              ref="closeButton"
              on:click="cart-drawer-component/close"
              class="button close-button cart-drawer__close-button button-unstyled"
              aria-label="Close dialog"
            >
              <span class="svg-wrapper"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 2L2 12" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 12L2 2" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
            </button>
          </div>

          <div
            class="cart-drawer__content motion-reduce"
            aria-label="Cart"
          >
            <span class="cart-drawer__heading h3 cart-drawer__heading--empty">
              Your cart is empty
            </span>

            <div class="cart-drawer__items">
              

<script
  src="//mudaura.com/cdn/shop/t/33/assets/component-cart-items.js?v=95720873921622680421759323088"
  type="module"
  fetchpriority="low"
></script>

<div
  
  class="cart-items__wrapper"
  
>
  
<p>
        Have an account? <a href="https://mudaura.com/customer_authentication/redirect?locale=en&region_country=IN">Log in</a> to check out faster.
      </p><a
      class="button cart-items__empty-button"
      href="/collections/all"
    >
      Continue shopping
    </a></div>



            </div>
          </div></cart-items-component>
    </div>
  </dialog>
</cart-drawer-component>



  
</header-actions>



          
        
      
    </div>
        </div>
      </div>
    
  
    

    

    
    
  

  
</header-component>

<script
  src="//mudaura.com/cdn/shop/t/33/assets/header.js?v=78043468934677320351759323088"
  type="module"
></script>




  <script type="module">
    import { hydrate } from '@theme/section-hydration';
    const url = new URL(window.location.href);
    url.searchParams.delete('page');
    hydrate('sections--25246412407086__header_section', url);
  </script>



</header>
<!-- END sections: header-group -->
    </div>

    <script
      src="//mudaura.com/cdn/shop/t/33/assets/critical.js?v=169402557219780209121759323088"
      type="module"
      async
      blocking="render"
    ></script>

    <main
      id="MainContent"
      class="content-for-layout"
      role="main"
      data-page-transition-enabled="true"
      data-product-transition="true"
      data-template="index"
    >
      <section id="shopify-section-template--25246412243246__hero_RkimKJ" class="shopify-section hero-wrapper section-wrapper">







<div
  id="Hero-template--25246412243246__hero_RkimKJ"
  class="hero color-scheme-4"
  style="
    --hero-border-style: ;
    --hero-border-width: px;
    --hero-border-opacity: %;
    --blur-opacity: 0.75;
    
      --hero-min-height: var(--section-height-large);
    
  "
  
  
>
  

  

  <div
    class="hero__container spacing-style section section--full-width"
    style="      --padding-block-start: 0px;--padding-block-end: 0px;"
  ><div
      class="hero__media-wrapper"
      style="--hero-media-count: 1;--hero-media-aspect-ratio: 2.090909090909091;"
    >
      
      

    <img src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&amp;width=3840" srcset="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&amp;width=832 832w, //mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&amp;width=3840 3840w" width="1472" height="704" class="hero__image" sizes="(min-width: 750px) 100vw, 100vw" fetchpriority="high">

    </div>
    <div
      class="
        hero__content-wrapper
        layout-panel-flex
        layout-panel-flex--column
        mobile-column
        section-content-wrapper
        page-width
        
      "
      style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 16px;

--horizontal-alignment: flex-start; --vertical-alignment: center;
--vertical-alignment-mobile: center;
"
    >
      



<div
  class="
    group-block
    group-block--height-fit
    group-block--width-custom
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width:34%;--size-style-height: fit;
  --size-style-width-mobile:53%; --size-style-width-mobile-min:53%;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: center;
--vertical-alignment-mobile: center;
"
  >
  







  <div 
  class=" spacing-style text-block text-block--AUDFnOHV1My9XcjBte__text_KxeJ6r h2
    text-block--align-left
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: 100%;
    --max-width: var(--max-width--body-normal);
    
      --text-align: left;
    
    
  "

  
>
    <p>CRAFTING RADIANCE NATURALLY.</p>
  </div>









<a
  
    href="/collections/all"
  
  class="
    size-style
    link
    link--ANXJwNFdOT04ybi9FQ__button_nazDaa
  "
  style="--size-style-width: fit-content;--size-style-height: ;--size-style-width-mobile: fit-content; --size-style-width-mobile-min: fit-content;"
>
  Shop all →
</a>






</div>
</div>






    </div>
  </div>
</div>




</section><div id="shopify-section-template--25246412243246__product_list_mCEEg6" class="shopify-section ui-test-product-list">



<div class="section-background color-scheme-1"></div>
<div
  class="
    section
    section--page-width
    color-scheme-1
    section-resource-list
    spacing-style
    gap-style
  "
  style="
    --padding-block-start: max(20px, calc(var(--spacing-scale) * 48px));--padding-block-end: max(20px, calc(var(--spacing-scale) * 48px));
    --gap: max(24px, calc(var(--gap-scale, 1.0) * 28px));
  "
>
  <div class="section-resource-list__header">
<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: 100%;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
      
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: center; --vertical-alignment: center;
--vertical-alignment-mobile: center;
"
  >







  <rte-formatter 
  class=" spacing-style text-block text-block--AaytacEdUaHB3M3EyU__text_dqdg37 rte
    text-block--align-left text-block--full-width  rte 
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: 100%;
    --max-width: var(--max-width--body-none);
    
      --text-align: left;
    
    
  "

  
>
    <p>Made to transform</p><h4>SKIN, HAIR AND BODY</h4>
  </rte-formatter>














</div>
</div>



</div>

  

  

  

<div
  class="
    resource-list
    
      force-full-width
    
    
    resource-list__carousel
  "
  style="--resource-list-column-gap-desktop: 8px;--column-count: 4;--column-count-mobile: 1;--mobile-card-size: 60cqw;"
  
    data-testid="resource-list-grid"
  
>
  
      





<div
  class="resource-list__carousel"
  style="
    
      --gutter-slide-width: var(--util-page-margin-offset);
    
    --slide-width-max: 450px;
  "
>
  


<slideshow-component
  
    ref="resourceListCarousel"
  
  
    class="resource-list__carousel"
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4, --slide-5, --slide-6;"
  
  initial-slide="0"
  
  

  
>
  
  <slideshow-container ref="slideshowContainer">
    
    
      
    <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
     slideshow-control--shape-circle
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
     slideshow-control--shape-circle
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

  
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
        gutters="start end"
      
    >
      
  
    <slideshow-slide
  ref="slides[]"
  aria-hidden="false"
  style="view-timeline-name: --slide-0; --product-media-fit: cover;"
  
    class="resource-list__slide"
  
  
  
  
  
  
>
  <div
            class="resource-list__item"
          >
            
              





<style data-shopify>
  
</style>


<product-card-link
    data-product-id="8532502184238"
    data-featured-media-url="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&width=500"
    data-product-transition="true"
    
  ><product-card
  class="product-card"
  data-product-id="8532502184238"
  data-product-variants-size="1"
  id="product-card-ANktqS0dzRGI1Q2VsL__static-product-card"
  data-product-transition="true"
  
  
  
>
  <a
    id="11b5b5f2701bb1b56a80065ff58046d1"
    
      href="/products/multani-mitti-face-soap-pack-of-3?variant=46135519510830"
    
    class="product-card__link"
    ref="productCardLink"
  >
    <span class="visually-hidden">
      Multani Mitti Soaps (pack of 3)
    </span>
  </a>
  <div
    class="
      product-card__content
      layout-panel-flex
      layout-panel-flex--column
      product-grid__card
      spacing-style
      border-style
      gap-style
      
    "
    style="
      --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

      --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;



--horizontal-alignment: ; --vertical-alignment: ;
--vertical-alignment-mobile: ;

      --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      --product-card-gap: 4px;
      --quick-add-display: flex;
      --quick-add-mobile-display: none;
      
      
      
      
    "
  >
    
  







<div
  ref="cardGallery"
  class="card-gallery card-gallery-AOHNlZVBiaUQ1ZkJpV__product_card_gallery_3Mbwm7 spacing-style border-style"
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --gallery-aspect-ratio: 1.0;
  "
  data-product-id="8532502184238"
  
    on:pointerenter="/previewImage"
    on:pointerleave="/resetImage"
  
  
    data-view-transition-to-main-product
  
  data-image-ratio="adapt"
  
>
    <a
      class="contents"
      ref="cardGalleryLink"
      href="
/products/multani-mitti-face-soap-pack-of-3?variant=46135519510830"
      aria-label="Multani Mitti Soaps (pack of 3)"
    >
      


<slideshow-component
  
    ref="slideshow"
  
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4;"
  
  initial-slide="0"
  
  
    infinite
  

  data-generic-media-size="4"
>
  
  <slideshow-container ref="slideshowContainer">
    
      <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

    
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
    >
      <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41094480888110"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41094480888110"
>
  
  <img src="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=3840" alt="Multani Mitti Soaps (pack of 3)" srcset="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=240 240w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=352 352w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=832 832w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=3840 3840w" width="3840" height="3840" loading="eager" sizes="(min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="42565741805870"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0002000400080016"
  data-media-id="42565741805870"
>
  
  <img src="//mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=3840" alt="Multani Mitti Soaps (pack of 3)" srcset="//mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=240 240w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=352 352w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=832 832w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=3840 3840w" width="3840" height="3839" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="42565692719406"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="42565692719406"
>
  
  <img src="//mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=3840" alt="Multani Mitti Soaps (pack of 3)" srcset="//mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=240 240w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=352 352w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=832 832w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-4; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41094430097710"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41094430097710"
>
  
  <img src="//mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=3840" alt="Multani Mitti Soaps (pack of 3)" srcset="//mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=240 240w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=352 352w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=832 832w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

    </a>
  
  
    <div
  class="product-badges product-badges--top-left"
  style="
    --badge-border-radius: 40px;
    --badge-font-family: var(--font-body--family); --badge-font-weight: var(--font-body--weight); --badge-text-transform: none;
  "
><div
      class="
        product-badges__badge product-badges__badge--rectangle
         color-scheme-4
      "
    >Sale
</div></div>



    
      

<quick-add-component
  class="quick-add color-scheme-1 "
  ref="quickAdd"
  data-product-title="Multani Mitti Soaps (pack of 3)"
>
  <product-form-component
    data-section-id="template--25246412243246__product_list_mCEEg6"
    data-product-id="8532502184238"
    on:submit="/handleSubmit"
    class="
      quick-add__product-form-component
       quick-add__product-form-component--single-option 
       quick-add__product-form-component--single-variant 
    "
  >
    <div
      class="visually-hidden"
      aria-live="assertive"
      role="status"
      aria-atomic="true"
      ref="liveRegion"
    ></div><form method="post" action="/cart/add" id="QuickAdd-ProductForm-8532502184238-AOHNlZVBiaUQ1ZkJpV__product_card_gallery_3Mbwm7" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
        type="hidden"
        name="id"
        ref="variantId"
        value="46135519510830"
        
      >
      <input
        type="hidden"
        name="quantity"
        value="1"
      >
      
<add-to-cart-component
  ref="addToCartButtonContainer"
  data-product-variant-media="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&width=100"
  data-add-to-cart-animation="true"
>
  <button
    id=""
    type="submit"
    name="add"
    ref="addToCartButton"
    on:click="/handleClick"
    class="button button quick-add__button quick-add__button--add"
    
  >
    <span
      class="add-to-cart-text"
    >
      
        <span class="svg-wrapper add-to-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M16.608 9.421V6.906H3.392v8.016c0 .567.224 1.112.624 1.513.4.402.941.627 1.506.627H8.63M8.818 3h2.333c.618 0 1.212.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.344c0-.622.246-1.218.683-1.658A2.33 2.33 0 0 1 8.82 3"/><path stroke="currentColor" stroke-linecap="round" stroke-width="var(--icon-stroke-width)" d="M14.608 12.563v5m2.5-2.5h-5"/></svg>
</span>
      
      <span class="add-to-cart-text__content is-visually-hidden-mobile">Add</span>
    </span>
    <span
      aria-hidden="true"
      class="add-to-cart-text--added"
    >
      <span class="svg-wrapper add-to-cart-icon--added"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-checkmark">
<path d="M4.75439 10.7485L7.68601 14.5888C7.79288 14.7288 7.84632 14.7988 7.91174 14.8242C7.96907 14.8466 8.03262 14.8469 8.09022 14.8253C8.15596 14.8007 8.21026 14.7314 8.31886 14.5927L15.2475 5.74658" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      <span class="is-visually-hidden-mobile">Added</span>
    </span>
  </button>
</add-to-cart-component>



<input type="hidden" name="product-id" value="8532502184238" /><input type="hidden" name="section-id" value="template--25246412243246__product_list_mCEEg6" /></form></product-form-component>
</quick-add-component>



    
  

</div>





<div class="product-grid-view-zoom-out--details">
  
    <h3 class="h4">Multani Mitti Soaps (pack of 3)</h3>
    <div class="h6">
      <product-price data-product-id="8532502184238">
        <div ref="priceContainer">
  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 599.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 479.00</span>
    </span>
  

  
</div>

      </product-price>
    </div>
  
</div>





  
  <a
    class="contents user-select-text"
    ref="productTitleLink"
    href="
/products/multani-mitti-face-soap-pack-of-3?variant=46135519510830"
  >
    





  <div 
  class=" spacing-style text-block text-block--AT0JmN0ptRVBhSEszV__product_title_KDciwH rte
    text-block--align-center rte 
  "

  style="
    --padding-block-start: 4px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: 100%;
    --max-width: var(--max-width--body-normal);
    
      --text-align: center;
    
    
  "

  
>
    <p>Multani Mitti Soaps (pack of 3)</p>
  </div>




  </a>











<product-price
  class="text-block text-block--align-center text-center h6 spacing-style"
  data-block-id="AYmppRjh2akNpQktpc__price_gGyRcD"
  data-product-id="8532502184238"
  style="
    
--color: var(--color-foreground);
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --width: 100%;
  "
  
>
  <div ref="priceContainer">
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 479.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 599.00</span>
    </span>
  
</div>


  
</product-price>








  </div>
</product-card></product-card-link>




            
          </div>

          
            
</slideshow-slide>

  
    <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="resource-list__slide"
  
  
  
  
  
  
>
  
          
        
          <div
            class="resource-list__item"
          >
            
              





<style data-shopify>
  
</style>


<product-card-link
    data-product-id="8662951133486"
    data-featured-media-url="//mudaura.com/cdn/shop/files/6.png?v=1736666187&width=500"
    data-product-transition="true"
    
  ><product-card
  class="product-card"
  data-product-id="8662951133486"
  data-product-variants-size="1"
  id="product-card-ANktqS0dzRGI1Q2VsL__static-product-card-1"
  data-product-transition="true"
  
  
  
>
  <a
    id="49ac15949ffdfb19ec8cc5a8031cd427"
    
      href="/products/hair-oil?variant=46864405659950"
    
    class="product-card__link"
    ref="productCardLink"
  >
    <span class="visually-hidden">
      Radiant Roots Hair Oil
    </span>
  </a>
  <div
    class="
      product-card__content
      layout-panel-flex
      layout-panel-flex--column
      product-grid__card
      spacing-style
      border-style
      gap-style
      
    "
    style="
      --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

      --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;



--horizontal-alignment: ; --vertical-alignment: ;
--vertical-alignment-mobile: ;

      --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      --product-card-gap: 4px;
      --quick-add-display: flex;
      --quick-add-mobile-display: none;
      
      
      
      
    "
  >
    
  







<div
  ref="cardGallery"
  class="card-gallery card-gallery-AOHNlZVBiaUQ1ZkJpV__product_card_gallery_3Mbwm7-1 spacing-style border-style"
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --gallery-aspect-ratio: 1.0;
  "
  data-product-id="8662951133486"
  
    on:pointerenter="/previewImage"
    on:pointerleave="/resetImage"
  
  
    data-view-transition-to-main-product
  
  data-image-ratio="adapt"
  
>
    <a
      class="contents"
      ref="cardGalleryLink"
      href="
/products/hair-oil?variant=46864405659950"
      aria-label="Radiant Roots Hair Oil"
    >
      


<slideshow-component
  
    ref="slideshow"
  
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4;"
  
  initial-slide="0"
  
  
    infinite
  

  data-generic-media-size="4"
>
  
  <slideshow-container ref="slideshowContainer">
    
      <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

    
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
    >
      <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41014150758702"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41014150758702"
>
  
  <img src="//mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=3840" alt="Radiant Roots Hair Oil" srcset="//mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=240 240w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=352 352w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=832 832w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=3840 3840w" width="3840" height="3840" loading="eager" sizes="(min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41015360225582"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41015360225582"
>
  
  <img src="//mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=3840" alt="Radiant Roots Hair Oil" srcset="//mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=240 240w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=352 352w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=832 832w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41015790895406"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41015790895406"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=3840" alt="Radiant Roots Hair Oil" srcset="//mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-4; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41015790600494"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41015790600494"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=3840" alt="Radiant Roots Hair Oil" srcset="//mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

    </a>
  
  
    <div
  class="product-badges product-badges--top-left"
  style="
    --badge-border-radius: 40px;
    --badge-font-family: var(--font-body--family); --badge-font-weight: var(--font-body--weight); --badge-text-transform: none;
  "
><div
      class="
        product-badges__badge product-badges__badge--rectangle
         color-scheme-4
      "
    >Sale
</div></div>



    
      

<quick-add-component
  class="quick-add color-scheme-1 "
  ref="quickAdd"
  data-product-title="Radiant Roots Hair Oil"
>
  <product-form-component
    data-section-id="template--25246412243246__product_list_mCEEg6"
    data-product-id="8662951133486"
    on:submit="/handleSubmit"
    class="
      quick-add__product-form-component
       quick-add__product-form-component--single-option 
       quick-add__product-form-component--single-variant 
    "
  >
    <div
      class="visually-hidden"
      aria-live="assertive"
      role="status"
      aria-atomic="true"
      ref="liveRegion"
    ></div><form method="post" action="/cart/add" id="QuickAdd-ProductForm-8662951133486-AOHNlZVBiaUQ1ZkJpV__product_card_gallery_3Mbwm7-1" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
        type="hidden"
        name="id"
        ref="variantId"
        value="46864405659950"
        
      >
      <input
        type="hidden"
        name="quantity"
        value="1"
      >
      
<add-to-cart-component
  ref="addToCartButtonContainer"
  data-product-variant-media="//mudaura.com/cdn/shop/files/6.png?v=1736666187&width=100"
  data-add-to-cart-animation="true"
>
  <button
    id=""
    type="submit"
    name="add"
    ref="addToCartButton"
    on:click="/handleClick"
    class="button button quick-add__button quick-add__button--add"
    
  >
    <span
      class="add-to-cart-text"
    >
      
        <span class="svg-wrapper add-to-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M16.608 9.421V6.906H3.392v8.016c0 .567.224 1.112.624 1.513.4.402.941.627 1.506.627H8.63M8.818 3h2.333c.618 0 1.212.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.344c0-.622.246-1.218.683-1.658A2.33 2.33 0 0 1 8.82 3"/><path stroke="currentColor" stroke-linecap="round" stroke-width="var(--icon-stroke-width)" d="M14.608 12.563v5m2.5-2.5h-5"/></svg>
</span>
      
      <span class="add-to-cart-text__content is-visually-hidden-mobile">Add</span>
    </span>
    <span
      aria-hidden="true"
      class="add-to-cart-text--added"
    >
      <span class="svg-wrapper add-to-cart-icon--added"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-checkmark">
<path d="M4.75439 10.7485L7.68601 14.5888C7.79288 14.7288 7.84632 14.7988 7.91174 14.8242C7.96907 14.8466 8.03262 14.8469 8.09022 14.8253C8.15596 14.8007 8.21026 14.7314 8.31886 14.5927L15.2475 5.74658" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      <span class="is-visually-hidden-mobile">Added</span>
    </span>
  </button>
</add-to-cart-component>



<input type="hidden" name="product-id" value="8662951133486" /><input type="hidden" name="section-id" value="template--25246412243246__product_list_mCEEg6" /></form></product-form-component>
</quick-add-component>



    
  

</div>





<div class="product-grid-view-zoom-out--details">
  
    <h3 class="h4">Radiant Roots Hair Oil</h3>
    <div class="h6">
      <product-price data-product-id="8662951133486">
        <div ref="priceContainer">
  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 460.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 399.00</span>
    </span>
  

  
</div>

      </product-price>
    </div>
  
</div>





  
  <a
    class="contents user-select-text"
    ref="productTitleLink"
    href="
/products/hair-oil?variant=46864405659950"
  >
    





  <div 
  class=" spacing-style text-block text-block--AT0JmN0ptRVBhSEszV__product_title_KDciwH-1 rte
    text-block--align-center rte 
  "

  style="
    --padding-block-start: 4px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: 100%;
    --max-width: var(--max-width--body-normal);
    
      --text-align: center;
    
    
  "

  
>
    <p>Radiant Roots Hair Oil</p>
  </div>




  </a>











<product-price
  class="text-block text-block--align-center text-center h6 spacing-style"
  data-block-id="AYmppRjh2akNpQktpc__price_gGyRcD-1"
  data-product-id="8662951133486"
  style="
    
--color: var(--color-foreground);
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --width: 100%;
  "
  
>
  <div ref="priceContainer">
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 399.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 460.00</span>
    </span>
  
</div>


  
</product-price>








  </div>
</product-card></product-card-link>




            
          </div>

          
            
</slideshow-slide>

  
    <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="resource-list__slide"
  
  
  
  
  
  
>
  
          
        
          <div
            class="resource-list__item"
          >
            
              





<style data-shopify>
  
</style>


<product-card-link
    data-product-id="9037025247534"
    data-featured-media-url="//mudaura.com/cdn/shop/files/5.png?v=1736666226&width=500"
    data-product-transition="true"
    
  ><product-card
  class="product-card"
  data-product-id="9037025247534"
  data-product-variants-size="1"
  id="product-card-ANktqS0dzRGI1Q2VsL__static-product-card-2"
  data-product-transition="true"
  
  
  
>
  <a
    id="0f6263e6ca17753e47ac08d9cb5a0c31"
    
      href="/products/charcoal-and-herbal-toothpowder?variant=47917202702638"
    
    class="product-card__link"
    ref="productCardLink"
  >
    <span class="visually-hidden">
      Charcoal and Herbal Toothpowder
    </span>
  </a>
  <div
    class="
      product-card__content
      layout-panel-flex
      layout-panel-flex--column
      product-grid__card
      spacing-style
      border-style
      gap-style
      
    "
    style="
      --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

      --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;



--horizontal-alignment: ; --vertical-alignment: ;
--vertical-alignment-mobile: ;

      --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      --product-card-gap: 4px;
      --quick-add-display: flex;
      --quick-add-mobile-display: none;
      
      
      
      
    "
  >
    
  







<div
  ref="cardGallery"
  class="card-gallery card-gallery-AOHNlZVBiaUQ1ZkJpV__product_card_gallery_3Mbwm7-2 spacing-style border-style"
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --gallery-aspect-ratio: 1.0;
  "
  data-product-id="9037025247534"
  
    on:pointerenter="/previewImage"
    on:pointerleave="/resetImage"
  
  
    data-view-transition-to-main-product
  
  data-image-ratio="adapt"
  
>
    <a
      class="contents"
      ref="cardGalleryLink"
      href="
/products/charcoal-and-herbal-toothpowder?variant=47917202702638"
      aria-label="Charcoal and Herbal Toothpowder"
    >
      


<slideshow-component
  
    ref="slideshow"
  
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4;"
  
  initial-slide="0"
  
  
    infinite
  

  data-generic-media-size="4"
>
  
  <slideshow-container ref="slideshowContainer">
    
      <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

    
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
    >
      <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41014154363182"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41014154363182"
>
  
  <img src="//mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=3840" alt="Charcoal and Herbal Toothpowder" srcset="//mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=240 240w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=352 352w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=832 832w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=3840 3840w" width="3840" height="3840" loading="eager" sizes="(min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41016492720430"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41016492720430"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=3840" alt="Charcoal and Herbal Toothpowder" srcset="//mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41021046522158"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.4981711777615216"
  data-media-id="41021046522158"
>
  
  <img src="//mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=3840" alt="Charcoal and Herbal Toothpowder" srcset="//mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=240 240w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=352 352w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=832 832w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=3840 3840w" width="3840" height="2563" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-4; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41016523227438"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41016523227438"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=3840" alt="Charcoal and Herbal Toothpowder" srcset="//mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

    </a>
  
  
    <div
  class="product-badges product-badges--top-left"
  style="
    --badge-border-radius: 40px;
    --badge-font-family: var(--font-body--family); --badge-font-weight: var(--font-body--weight); --badge-text-transform: none;
  "
><div
      class="
        product-badges__badge product-badges__badge--rectangle
         color-scheme-4
      "
    >Sale
</div></div>



    
      

<quick-add-component
  class="quick-add color-scheme-1 "
  ref="quickAdd"
  data-product-title="Charcoal and Herbal Toothpowder"
>
  <product-form-component
    data-section-id="template--25246412243246__product_list_mCEEg6"
    data-product-id="9037025247534"
    on:submit="/handleSubmit"
    class="
      quick-add__product-form-component
       quick-add__product-form-component--single-option 
       quick-add__product-form-component--single-variant 
    "
  >
    <div
      class="visually-hidden"
      aria-live="assertive"
      role="status"
      aria-atomic="true"
      ref="liveRegion"
    ></div><form method="post" action="/cart/add" id="QuickAdd-ProductForm-9037025247534-AOHNlZVBiaUQ1ZkJpV__product_card_gallery_3Mbwm7-2" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
        type="hidden"
        name="id"
        ref="variantId"
        value="47917202702638"
        
      >
      <input
        type="hidden"
        name="quantity"
        value="1"
      >
      
<add-to-cart-component
  ref="addToCartButtonContainer"
  data-product-variant-media="//mudaura.com/cdn/shop/files/5.png?v=1736666226&width=100"
  data-add-to-cart-animation="true"
>
  <button
    id=""
    type="submit"
    name="add"
    ref="addToCartButton"
    on:click="/handleClick"
    class="button button quick-add__button quick-add__button--add"
    
  >
    <span
      class="add-to-cart-text"
    >
      
        <span class="svg-wrapper add-to-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M16.608 9.421V6.906H3.392v8.016c0 .567.224 1.112.624 1.513.4.402.941.627 1.506.627H8.63M8.818 3h2.333c.618 0 1.212.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.344c0-.622.246-1.218.683-1.658A2.33 2.33 0 0 1 8.82 3"/><path stroke="currentColor" stroke-linecap="round" stroke-width="var(--icon-stroke-width)" d="M14.608 12.563v5m2.5-2.5h-5"/></svg>
</span>
      
      <span class="add-to-cart-text__content is-visually-hidden-mobile">Add</span>
    </span>
    <span
      aria-hidden="true"
      class="add-to-cart-text--added"
    >
      <span class="svg-wrapper add-to-cart-icon--added"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-checkmark">
<path d="M4.75439 10.7485L7.68601 14.5888C7.79288 14.7288 7.84632 14.7988 7.91174 14.8242C7.96907 14.8466 8.03262 14.8469 8.09022 14.8253C8.15596 14.8007 8.21026 14.7314 8.31886 14.5927L15.2475 5.74658" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      <span class="is-visually-hidden-mobile">Added</span>
    </span>
  </button>
</add-to-cart-component>



<input type="hidden" name="product-id" value="9037025247534" /><input type="hidden" name="section-id" value="template--25246412243246__product_list_mCEEg6" /></form></product-form-component>
</quick-add-component>



    
  

</div>





<div class="product-grid-view-zoom-out--details">
  
    <h3 class="h4">Charcoal and Herbal Toothpowder</h3>
    <div class="h6">
      <product-price data-product-id="9037025247534">
        <div ref="priceContainer">
  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 479.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 399.00</span>
    </span>
  

  
</div>

      </product-price>
    </div>
  
</div>





  
  <a
    class="contents user-select-text"
    ref="productTitleLink"
    href="
/products/charcoal-and-herbal-toothpowder?variant=47917202702638"
  >
    





  <div 
  class=" spacing-style text-block text-block--AT0JmN0ptRVBhSEszV__product_title_KDciwH-2 rte
    text-block--align-center rte 
  "

  style="
    --padding-block-start: 4px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: 100%;
    --max-width: var(--max-width--body-normal);
    
      --text-align: center;
    
    
  "

  
>
    <p>Charcoal and Herbal Toothpowder</p>
  </div>




  </a>











<product-price
  class="text-block text-block--align-center text-center h6 spacing-style"
  data-block-id="AYmppRjh2akNpQktpc__price_gGyRcD-2"
  data-product-id="9037025247534"
  style="
    
--color: var(--color-foreground);
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --width: 100%;
  "
  
>
  <div ref="priceContainer">
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 399.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 479.00</span>
    </span>
  
</div>


  
</product-price>








  </div>
</product-card></product-card-link>




            
          </div>

          
            
</slideshow-slide>

  
    <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="resource-list__slide"
  
  
  
  
  
  
>
  
          
        
          <div
            class="resource-list__item"
          >
            
              





<style data-shopify>
  
</style>


<product-card-link
    data-product-id="9037021577518"
    data-featured-media-url="//mudaura.com/cdn/shop/files/2.png?v=1736666271&width=500"
    data-product-transition="true"
    
  ><product-card
  class="product-card"
  data-product-id="9037021577518"
  data-product-variants-size="1"
  id="product-card-ANktqS0dzRGI1Q2VsL__static-product-card-3"
  data-product-transition="true"
  
  
  
>
  <a
    id="0c16ef7cf5c826c3e4680d4022606780"
    
      href="/products/amla-and-bhringraj-shampoo?variant=47917189267758"
    
    class="product-card__link"
    ref="productCardLink"
  >
    <span class="visually-hidden">
      Amla and Bhringraj Shampoo
    </span>
  </a>
  <div
    class="
      product-card__content
      layout-panel-flex
      layout-panel-flex--column
      product-grid__card
      spacing-style
      border-style
      gap-style
      
    "
    style="
      --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

      --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;



--horizontal-alignment: ; --vertical-alignment: ;
--vertical-alignment-mobile: ;

      --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      --product-card-gap: 4px;
      --quick-add-display: flex;
      --quick-add-mobile-display: none;
      
      
      
      
    "
  >
    
  







<div
  ref="cardGallery"
  class="card-gallery card-gallery-AOHNlZVBiaUQ1ZkJpV__product_card_gallery_3Mbwm7-3 spacing-style border-style"
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --gallery-aspect-ratio: 1.0;
  "
  data-product-id="9037021577518"
  
    on:pointerenter="/previewImage"
    on:pointerleave="/resetImage"
  
  
    data-view-transition-to-main-product
  
  data-image-ratio="adapt"
  
>
    <a
      class="contents"
      ref="cardGalleryLink"
      href="
/products/amla-and-bhringraj-shampoo?variant=47917189267758"
      aria-label="Amla and Bhringraj Shampoo"
    >
      


<slideshow-component
  
    ref="slideshow"
  
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4;"
  
  initial-slide="0"
  
  
    infinite
  

  data-generic-media-size="4"
>
  
  <slideshow-container ref="slideshowContainer">
    
      <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

    
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
    >
      <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41014155903278"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41014155903278"
>
  
  <img src="//mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=3840" alt="Amla and Bhringraj Shampoo" srcset="//mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=240 240w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=352 352w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=832 832w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=3840 3840w" width="3840" height="3840" loading="eager" sizes="(min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41015953981742"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41015953981742"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=3840" alt="Amla and Bhringraj Shampoo" srcset="//mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41016249680174"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.5165876777251184"
  data-media-id="41016249680174"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=3840" alt="Amla and Bhringraj Shampoo" srcset="//mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=3840 3840w" width="3840" height="2532" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-4; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41016230576430"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41016230576430"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=3840" alt="Amla and Bhringraj Shampoo" srcset="//mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

    </a>
  
  
    <div
  class="product-badges product-badges--top-left"
  style="
    --badge-border-radius: 40px;
    --badge-font-family: var(--font-body--family); --badge-font-weight: var(--font-body--weight); --badge-text-transform: none;
  "
><div
      class="
        product-badges__badge product-badges__badge--rectangle
         color-scheme-4
      "
    >Sale
</div></div>



    
      

<quick-add-component
  class="quick-add color-scheme-1 "
  ref="quickAdd"
  data-product-title="Amla and Bhringraj Shampoo"
>
  <product-form-component
    data-section-id="template--25246412243246__product_list_mCEEg6"
    data-product-id="9037021577518"
    on:submit="/handleSubmit"
    class="
      quick-add__product-form-component
       quick-add__product-form-component--single-option 
       quick-add__product-form-component--single-variant 
    "
  >
    <div
      class="visually-hidden"
      aria-live="assertive"
      role="status"
      aria-atomic="true"
      ref="liveRegion"
    ></div><form method="post" action="/cart/add" id="QuickAdd-ProductForm-9037021577518-AOHNlZVBiaUQ1ZkJpV__product_card_gallery_3Mbwm7-3" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
        type="hidden"
        name="id"
        ref="variantId"
        value="47917189267758"
        
      >
      <input
        type="hidden"
        name="quantity"
        value="1"
      >
      
<add-to-cart-component
  ref="addToCartButtonContainer"
  data-product-variant-media="//mudaura.com/cdn/shop/files/2.png?v=1736666271&width=100"
  data-add-to-cart-animation="true"
>
  <button
    id=""
    type="submit"
    name="add"
    ref="addToCartButton"
    on:click="/handleClick"
    class="button button quick-add__button quick-add__button--add"
    
  >
    <span
      class="add-to-cart-text"
    >
      
        <span class="svg-wrapper add-to-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M16.608 9.421V6.906H3.392v8.016c0 .567.224 1.112.624 1.513.4.402.941.627 1.506.627H8.63M8.818 3h2.333c.618 0 1.212.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.344c0-.622.246-1.218.683-1.658A2.33 2.33 0 0 1 8.82 3"/><path stroke="currentColor" stroke-linecap="round" stroke-width="var(--icon-stroke-width)" d="M14.608 12.563v5m2.5-2.5h-5"/></svg>
</span>
      
      <span class="add-to-cart-text__content is-visually-hidden-mobile">Add</span>
    </span>
    <span
      aria-hidden="true"
      class="add-to-cart-text--added"
    >
      <span class="svg-wrapper add-to-cart-icon--added"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-checkmark">
<path d="M4.75439 10.7485L7.68601 14.5888C7.79288 14.7288 7.84632 14.7988 7.91174 14.8242C7.96907 14.8466 8.03262 14.8469 8.09022 14.8253C8.15596 14.8007 8.21026 14.7314 8.31886 14.5927L15.2475 5.74658" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      <span class="is-visually-hidden-mobile">Added</span>
    </span>
  </button>
</add-to-cart-component>



<input type="hidden" name="product-id" value="9037021577518" /><input type="hidden" name="section-id" value="template--25246412243246__product_list_mCEEg6" /></form></product-form-component>
</quick-add-component>



    
  

</div>





<div class="product-grid-view-zoom-out--details">
  
    <h3 class="h4">Amla and Bhringraj Shampoo</h3>
    <div class="h6">
      <product-price data-product-id="9037021577518">
        <div ref="priceContainer">
  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 499.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 395.00</span>
    </span>
  

  
</div>

      </product-price>
    </div>
  
</div>





  
  <a
    class="contents user-select-text"
    ref="productTitleLink"
    href="
/products/amla-and-bhringraj-shampoo?variant=47917189267758"
  >
    





  <div 
  class=" spacing-style text-block text-block--AT0JmN0ptRVBhSEszV__product_title_KDciwH-3 rte
    text-block--align-center rte 
  "

  style="
    --padding-block-start: 4px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: 100%;
    --max-width: var(--max-width--body-normal);
    
      --text-align: center;
    
    
  "

  
>
    <p>Amla and Bhringraj Shampoo</p>
  </div>




  </a>











<product-price
  class="text-block text-block--align-center text-center h6 spacing-style"
  data-block-id="AYmppRjh2akNpQktpc__price_gGyRcD-3"
  data-product-id="9037021577518"
  style="
    
--color: var(--color-foreground);
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --width: 100%;
  "
  
>
  <div ref="priceContainer">
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 395.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 499.00</span>
    </span>
  
</div>


  
</product-price>








  </div>
</product-card></product-card-link>




            
          </div>
</slideshow-slide>

  

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

</div>


    
</div>





  <div
    class="section-resource-list__content"
    style="--horizontal-alignment: flex-start;"
  ></div>
</div>


</div><div id="shopify-section-template--25246412243246__1760461786ba27ec66" class="shopify-section section-wrapper">



<div class="section-background color-scheme-1"></div>
<div
  class="section section--page-width color-scheme-1"
  data-testid="ui-test-section"

  

  style="
    

    
  "
>
  <div class="custom-section-background">
    

  </div>

  <div
    class="border-style custom-section-content"
    style="--border-width: 0px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 
"
  >
    

    <div
      class="
        spacing-style
        layout-panel-flex
        layout-panel-flex--column
        section-content-wrapper
         mobile-column
      "
      style="
        --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: center; --vertical-alignment: center;
--vertical-alignment-mobile: center;

        --padding-block-start: 20px;--padding-block-end: 0px;
      "
      data-testid="section-content"
    >
      
  







  <rte-formatter 
  class=" spacing-style text-block text-block--AK0FydWpZRVhNdkpYM__text_zeabze rte
     rte 
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: fit-content;
    --max-width: var(--max-width--body-normal);
    
    
  "

  
>
    <h2>EVERYDAY RITUALS</h2>
  </rte-formatter>














  <rte-formatter 
  class=" spacing-style text-block text-block--ASFVKTVMrM3l6U3R2Y__text_a8N78x rte
     rte 
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: fit-content;
    --max-width: var(--max-width--body-normal);
    
    
  "

  
>
    <p>Discover Our Latest Video Content</p>
  </rte-formatter>






<div id="shopify-block-AK0NWSjlYN29NVTJqW__reelfy_videos_reelfy_section_HdUyBd" class="shopify-block shopify-app-block reelfy-section reelfy-wrapper">

  <!-- BEGIN app snippet: javascript -->
<script type="text/javascript">
window.rfPageType??="index";
window.rfPageId??="";
window.rfHandle??="home";
window.rfShopID??="80712991022";
window.rfShopUrl??="mudaura.com";
window.rfIsoCode??="en";
window.rfCountry??="en";
window.rfLanguages??=[{"shop_locale":{"locale":"en","enabled":true,"primary":true,"published":true}}];
window.rfCurrencyFormat??="Rs. {{amount}}";
window.rfMoneyFormat??="Rs. {{amount}}";
window.rfCartAdd??="/cart/add";
window.rfCartUrl??="/cart";
window.rfShopLang??={"general":{"title":"app.general","datas":{"added_to_cart":"Added to cart successfully!","back":"Back","sold_out":"Sold Out","add_to_cart":"Add to cart","shop_now":"Shop Now"}},"popup":{"title":"customise_popup.title","datas":{"products_seen":"Products Seen in the video","description":"Description"}}};
window.rfShopTrans??=null;
window.rfCustomJs??=null;
window.rfCustomCss??=null;
window.rfSettingCss??="";
window.rfMeta??=true;
window.rfPublish??="1";
</script><style data-shopify>.reelfy-gallery, .pswp_rf, .rf-mext-main{--rf-color-primary:#00D1FF;--rf-color-secondary:#FF465D;--rf-color-accent:#079BDB;--rf-color-text:#9e9e9e;--rf-color-light:#FFFFFF;--rf-color-dark:#000000;--rf-popup-regular-color:var(--rf-color-text);--rf-popup-sale-color:var(--rf-color-dark);--rf-popup-image_size:100%;--rf-popup-btn-bg:var(--rf-color-dark);--rf-popup-btn-color:var(--rf-color-light);--rf-popup-btn-font-size:13px;--rf-popup-btn-font-weight:500;--rf-popup-info-bg:var(--rf-color-light);--rf-popup-info-color:var(--rf-color-dark);--rf-popup-info-border:var(--rf-color-dark);--rf-popup-card-color:var(--rf-color-text);--rf-popup-card-font-size:13px;--rf-popup-card-font-weight:500;--rf-cta-h-color:#FFFFFF;--rf-cta-h-font-size:18px;--rf-cta-h-font-weight:700;--rf-cta-s-color:#FFFFFF;--rf-cta-s-font-size:14px;--rf-cta-s-font-weight:400;--rf-cta-b-bg:#000;--rf-cta-b-color:#FFF;--rf-cta-b-font-size:14px;--rf-cta-b-font-weight:600;--rf-quiz-h-color:#000;--rf-quiz-h-font-size:18px;--rf-quiz-h-font-weight:700;--rf-quiz-s-color:#000;--rf-quiz-s-font-size:14px;--rf-quiz-s-font-weight:400;--rf-quiz-a-color:#000;--rf-title-color:var(--rf-color-light);--rf-title-size:14px;--rf-title-weight:600;--rf-desktop-spacing:16px;--rf-mobile-spacing:8px;--rf-card-border-radius:20px;--rf-story-border-color:#FCD12F;--rf-story-width:90px;--rf-story-width-tb:90px;--rf-story-width-mb:80px;--rf-story-gap:16px;--rf-story-gap-m:8px;--rf-story-title-color:var(--rf-color-text);--rf-story-title-font-size:13px;--rf-story-title-font-weight:500;--rf-pw-width:170px;--rf-pw-width-tb:150px;--rf-pw-width-mb:130px;--rf-pw-gap:16px;--rf-pw-gap-m:8px;--rf-pw-border-radius:0px;}</style><!-- END app snippet --><!-- BEGIN app snippet: scripts -->
<style data-shopify>#shopify-block-AK0NWSjlYN29NVTJqW__reelfy_videos_reelfy_section_HdUyBd .rf__header{text-align: left;--font-heading-scale: 1;}#shopify-block-AK0NWSjlYN29NVTJqW__reelfy_videos_reelfy_section_HdUyBd{
    padding-top: 27px;padding-bottom: 27px;}
  
  @media screen and (min-width: 750px){#shopify-block-AK0NWSjlYN29NVTJqW__reelfy_videos_reelfy_section_HdUyBd{padding-top:36px;padding-bottom:36px;}}
  #shopify-block-AK0NWSjlYN29NVTJqW__reelfy_videos_reelfy_section_HdUyBd,.shopify-section-HdUyBd{ --col-lg:4;--col-md:3;--col-sm:2; }
  
</style><!-- END app snippet -->
  <div
    class="reelfy-gallery reelfy-status-active reelfy-gallery-id rf-gallery-site reelfy-carousel reelfy-template-simple"
    data-id="13676"
    data-type="carousel"
    data-setup='{"redirect":"drawer","variant":"swatch","price":"final"}'
    data-thirdparty='{"review":true,"reviewApp":"ryviu"}'
    data-sectionc='{"border_radius":20,"carousel_desktop_column":4,"carousel_mobile_column":2,"carousel_tablet_column":3,"carousel_template":"carousel_3","column_spacing":"normal","high_definition":"sd","play_video":"autoplay","row_desktop_column":4,"row_mobile_column":2,"row_tablet_column":3,"stacked_desktop_column":4,"stacked_mobile_column":2,"stacked_tablet_column":3,"stacked_template":"carousel_3","template":"simple","thumbnail_width":300}'
    data-section='HdUyBd'
    data-permissions='{"analytic":false}'
    data-story='{"align":"left"}'
    data-popup='{"autoplay":0,"pbatc":"atc","variant":"square","ibutton":"show","cardAction":"popup","accordions":{"desc":"show"}}'
  >
    <!-- BEGIN app snippet: header --><!-- END app snippet -->
    <div class='rf-gallery-main rf-row kt-space-normal rf-4-col-lg rf-3-col-md rf-2-col-sm rf-carousel  dot-dark dot-outside dot-rectangle pn-icon pn-light' data-carousel='{"pauseAutoPlayOnHover":true,"speed":2000,"autoplay":false,"freeScroll":true,"contain":true,"prevNextButtons":true,"pageDots":true,"groupCells":"80%","loop":true,"cellAlign":"left"}'><!-- BEGIN app snippet: itemGrid -->
<div class="rf-video-item video-68401 rf-video-products carousel-cell is-selected">
  <div class="reelfy_card card_type-simple reelfy_card_autoplay">
    <a href="#rfvideo94244" class="reelfy_link_main rf-video-lightbox" data-pswp-type="reelfy" data-video="https://cdn.shopify.com/videos/c/vp/6c601560fe7c4755b92aff3b172f6b8a/6c601560fe7c4755b92aff3b172f6b8a.HD-720p-4.5Mbps-59041660.mp4" data-poster="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/6c601560fe7c4755b92aff3b172f6b8a.thumbnail.0000000000.jpg?v=1759855415" data-id="68401" aria-label="Open lightbox video"><span class="rf-sr-only">00:21</span></a>
    <div class="reelfy_card_video_wrapper">
      <div class="reelfy_card_video">
        
        
        
          
          <video disableremoteplayback="" loop="" playsinline="" preload="metadata" muted autoplay width="100%" poster="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/6c601560fe7c4755b92aff3b172f6b8a.thumbnail.0000000000.jpg?v=1759855415&width=300" controls="false" loading="lazy"><source data-src="https://cdn.shopify.com/videos/c/vp/6c601560fe7c4755b92aff3b172f6b8a/6c601560fe7c4755b92aff3b172f6b8a.SD-480p-1.5Mbps-59041660.mp4" type="video/mp4"></video>
        
        
        <div class="reelfy_reels_duration">00:21</div>
        
      </div>
      
    </div>
  </div>
  <!-- BEGIN app snippet: schema --><script type="application/ld+json">{
  "@context":"https://schema.org",
  "@type":"VideoObject",
  "name":"reel 2 dc.mp4",
  "description":"reel 2 dc.mp4",
  "thumbnailUrl":["https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/6c601560fe7c4755b92aff3b172f6b8a.thumbnail.0000000000.jpg?v=1759855415"],
  "duration":"PT21S",
  "uploadDate":"2025-10-13T13:51:37.496Z",
  "contentUrl":"https://cdn.shopify.com/videos/c/vp/6c601560fe7c4755b92aff3b172f6b8a/6c601560fe7c4755b92aff3b172f6b8a.HD-720p-4.5Mbps-59041660.mp4"
}</script><!-- END app snippet -->
</div><!-- END app snippet --><!-- BEGIN app snippet: itemGrid -->
<div class="rf-video-item video-68402 rf-video-products carousel-cell ">
  <div class="reelfy_card card_type-simple reelfy_card_autoplay">
    <a href="#rfvideo22014" class="reelfy_link_main rf-video-lightbox" data-pswp-type="reelfy" data-video="https://cdn.shopify.com/videos/c/vp/de57f6323b5d43f9a69e9e6f14086a41/de57f6323b5d43f9a69e9e6f14086a41.HD-720p-4.5Mbps-59644730.mp4" data-poster="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/de57f6323b5d43f9a69e9e6f14086a41.thumbnail.0000000000.jpg?v=1760363593" data-id="68402" aria-label="Open lightbox video"><span class="rf-sr-only">00:42</span></a>
    <div class="reelfy_card_video_wrapper">
      <div class="reelfy_card_video">
        
        
        
          
          <video disableremoteplayback="" loop="" playsinline="" preload="metadata" muted autoplay width="100%" poster="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/de57f6323b5d43f9a69e9e6f14086a41.thumbnail.0000000000.jpg?v=1760363593&width=300" controls="false" loading="lazy"><source data-src="https://cdn.shopify.com/videos/c/vp/de57f6323b5d43f9a69e9e6f14086a41/de57f6323b5d43f9a69e9e6f14086a41.SD-480p-1.5Mbps-59644730.mp4" type="video/mp4"></video>
        
        
        <div class="reelfy_reels_duration">00:42</div>
        
      </div>
      
    </div>
  </div>
  <!-- BEGIN app snippet: schema --><script type="application/ld+json">{
  "@context":"https://schema.org",
  "@type":"VideoObject",
  "name":"reel 3 final.mp4",
  "description":"reel 3 final.mp4",
  "thumbnailUrl":["https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/de57f6323b5d43f9a69e9e6f14086a41.thumbnail.0000000000.jpg?v=1760363593"],
  "duration":"PT42S",
  "uploadDate":"2025-10-13T13:53:23.776Z",
  "contentUrl":"https://cdn.shopify.com/videos/c/vp/de57f6323b5d43f9a69e9e6f14086a41/de57f6323b5d43f9a69e9e6f14086a41.HD-720p-4.5Mbps-59644730.mp4"
}</script><!-- END app snippet -->
</div><!-- END app snippet --><!-- BEGIN app snippet: itemGrid -->
<div class="rf-video-item video-68403 rf-video-products carousel-cell ">
  <div class="reelfy_card card_type-simple reelfy_card_autoplay">
    <a href="#rfvideo76393" class="reelfy_link_main rf-video-lightbox" data-pswp-type="reelfy" data-video="https://cdn.shopify.com/videos/c/vp/9a98a6e084a04ad8ba4505b2f6395438/9a98a6e084a04ad8ba4505b2f6395438.HD-720p-4.5Mbps-59644885.mp4" data-poster="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/9a98a6e084a04ad8ba4505b2f6395438.thumbnail.0000000000.jpg?v=1760363706" data-id="68403" aria-label="Open lightbox video"><span class="rf-sr-only">00:47</span></a>
    <div class="reelfy_card_video_wrapper">
      <div class="reelfy_card_video">
        
        
        
          
          <video disableremoteplayback="" loop="" playsinline="" preload="metadata" muted autoplay width="100%" poster="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/9a98a6e084a04ad8ba4505b2f6395438.thumbnail.0000000000.jpg?v=1760363706&width=300" controls="false" loading="lazy"><source data-src="https://cdn.shopify.com/videos/c/vp/9a98a6e084a04ad8ba4505b2f6395438/9a98a6e084a04ad8ba4505b2f6395438.SD-480p-1.5Mbps-59644885.mp4" type="video/mp4"></video>
        
        
        <div class="reelfy_reels_duration">00:47</div>
        
      </div>
      
    </div>
  </div>
  <!-- BEGIN app snippet: schema --><script type="application/ld+json">{
  "@context":"https://schema.org",
  "@type":"VideoObject",
  "name":"bb 1 final.mp4",
  "description":"bb 1 final.mp4",
  "thumbnailUrl":["https://cdn.shopify.com/s/files/1/0807/1299/1022/files/preview_images/9a98a6e084a04ad8ba4505b2f6395438.thumbnail.0000000000.jpg?v=1760363706"],
  "duration":"PT47S",
  "uploadDate":"2025-10-13T13:55:16.243Z",
  "contentUrl":"https://cdn.shopify.com/videos/c/vp/9a98a6e084a04ad8ba4505b2f6395438/9a98a6e084a04ad8ba4505b2f6395438.HD-720p-4.5Mbps-59644885.mp4"
}</script><!-- END app snippet -->
</div><!-- END app snippet --></div><div id="rfvideo94244" class="rf-lightbox-content"><div class="rf-lightbox-wrapper  rf-one-product" data-interaction="products" data-id="68401"><div class="rf-lightbox-video" data-id="68401"><!-- BEGIN app snippet: videoPlayer --><div class="rf-video-wrapper">
  <div class="rf-video-video rf-video-loading">
    <video class="imagebox__video" width="100%" preload="none" playsinline webkit-playsinline="true" x-webkit-airplay="allow" x-webkit-airplay="allow" disablepictureinpicture="true" muted></video>
  </div>
  <div class="rf-video-overlay"></div>
  <div class="rf-video-progress_bar progress_bar">
    <span class="progress"></span>
  </div>
  <div class="rf-video-tool">
    <div class="rf-video-controls">
      <div class="play-icon active">
        <svg viewBox="0 0 512 512" width="20px" height="20px"><path d="M176 480C148.6 480 128 457.6 128 432v-352c0-25.38 20.4-47.98 48.01-47.98c8.686 0 17.35 2.352 25.02 7.031l288 176C503.3 223.8 512 239.3 512 256s-8.703 32.23-22.97 40.95l-288 176C193.4 477.6 184.7 480 176 480z"/></svg>
      </div>
      <div class="pause-icon">
        <svg viewBox="0 0 320 512" width="20px" height="20px"><path d="M272 63.1l-32 0c-26.51 0-48 21.49-48 47.1v288c0 26.51 21.49 48 48 48L272 448c26.51 0 48-21.49 48-48v-288C320 85.49 298.5 63.1 272 63.1zM80 63.1l-32 0c-26.51 0-48 21.49-48 48v288C0 426.5 21.49 448 48 448l32 0c26.51 0 48-21.49 48-48v-288C128 85.49 106.5 63.1 80 63.1z"/></svg>
      </div>
    </div>
    <div class="rf-video-audio">
      <div class="mute-icon active">
        <svg viewBox="0 0 640 512" width="20px" height="20px"><path d="M533.6 32.5C598.5 85.2 640 165.8 640 256s-41.5 170.7-106.4 223.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C557.5 398.2 592 331.2 592 256s-34.5-142.2-88.7-186.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM473.1 107c43.2 35.2 70.9 88.9 70.9 149s-27.7 113.8-70.9 149c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C475.3 341.3 496 301.1 496 256s-20.7-85.3-53.2-111.8c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zm-60.5 74.5C434.1 199.1 448 225.9 448 256s-13.9 56.9-35.4 74.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C393.1 284.4 400 271 400 256s-6.9-28.4-17.7-37.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3z"/></svg>  
      </div>
      <div class="unmute-icon">
        <svg viewBox="0 0 576 512" width="20px" height="20px"><path d="M301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3zM425 167l55 55 55-55c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-55 55 55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-55-55-55 55c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l55-55-55-55c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z"/></svg>
      </div>
    </div>
    <!--
    <div class="rf-video-share">
      <svg viewBox="0 0 32 32"><g data-name="Layer 51" id="Layer_51"><path d="M2,29A1.12,1.12,0,0,1,1.69,29,1,1,0,0,1,1,28V27A19,19,0,0,1,17,8.24V4a1,1,0,0,1,1.6-.8l12,9a1,1,0,0,1,0,1.6l-12,9A1,1,0,0,1,17,22V18.25A18.66,18.66,0,0,0,4.93,25.67L2.81,28.59A1,1,0,0,1,2,29ZM19,6V9.12a1,1,0,0,1-.89,1,17,17,0,0,0-15,14.6l.16-.21A20.68,20.68,0,0,1,17.9,16.11a1,1,0,0,1,.77.26,1,1,0,0,1,.33.74V20l9.33-7Z"/></g></svg>  
    </div>
    -->
  </div>
</div></div><!-- BEGIN app snippet: rfProductsMobile -->
  
  <div class="rf-mobile-info"><div class="rf-carousel-wrap rf-product-list rf-single-product">
  
    

    <div class="carousel__item rf-ratio">
      <div class="rf-product-item" data-handle="multani-mitti-face-soap-pack-of-3" data-id="8532502184238" data-device="mobile">
        <div class="rf-product-top">
          <div class="rf-product-img" data-width="100" data-img="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/1_lower.png?v=1737634298">
            <img src="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/1_lower.png?v=1737634298&width=100" alt="Multani Mitti Soaps (pack of 3)" width="100" height="100" loading="lazy">
          </div>
          <div class="rf-product-content">
            <h4 class="rf-product-title">Multani Mitti Soaps (pack of 3)</h4>
            <div class="rf-product-review"></div>
            <div class="rf-product-prices">--</div>
          </div>
        </div>
        <div class="rf-product-bottom">
          <a href="/products/multani-mitti-face-soap-pack-of-3"class="rf-button rf-button-sm reelfy_link rf-product-mopen">Shop Now</a>
        </div>
      </div>
    </div>
  
  </div></div>
<!-- END app snippet --><!-- BEGIN app snippet: rfProductsLarge -->
<div class="rf-lightbox-info rf-lightbox-info-lg">
  
  
    
    <div class="rf-lightbox-info-inner scrollable"><div class="rf-lightbox-single-product active" data-handle="multani-mitti-face-soap-pack-of-3" data-id="8532502184238">
    
      

      

      
      
    
    </div><!-- .rf-lightbox-single-product - 1 --></div>
  
  
</div>
<!-- END app snippet --></div></div><div id="rfvideo22014" class="rf-lightbox-content"><div class="rf-lightbox-wrapper  rf-one-product" data-interaction="products" data-id="68402"><div class="rf-lightbox-video" data-id="68402"><!-- BEGIN app snippet: videoPlayer --><div class="rf-video-wrapper">
  <div class="rf-video-video rf-video-loading">
    <video class="imagebox__video" width="100%" preload="none" playsinline webkit-playsinline="true" x-webkit-airplay="allow" x-webkit-airplay="allow" disablepictureinpicture="true" muted></video>
  </div>
  <div class="rf-video-overlay"></div>
  <div class="rf-video-progress_bar progress_bar">
    <span class="progress"></span>
  </div>
  <div class="rf-video-tool">
    <div class="rf-video-controls">
      <div class="play-icon active">
        <svg viewBox="0 0 512 512" width="20px" height="20px"><path d="M176 480C148.6 480 128 457.6 128 432v-352c0-25.38 20.4-47.98 48.01-47.98c8.686 0 17.35 2.352 25.02 7.031l288 176C503.3 223.8 512 239.3 512 256s-8.703 32.23-22.97 40.95l-288 176C193.4 477.6 184.7 480 176 480z"/></svg>
      </div>
      <div class="pause-icon">
        <svg viewBox="0 0 320 512" width="20px" height="20px"><path d="M272 63.1l-32 0c-26.51 0-48 21.49-48 47.1v288c0 26.51 21.49 48 48 48L272 448c26.51 0 48-21.49 48-48v-288C320 85.49 298.5 63.1 272 63.1zM80 63.1l-32 0c-26.51 0-48 21.49-48 48v288C0 426.5 21.49 448 48 448l32 0c26.51 0 48-21.49 48-48v-288C128 85.49 106.5 63.1 80 63.1z"/></svg>
      </div>
    </div>
    <div class="rf-video-audio">
      <div class="mute-icon active">
        <svg viewBox="0 0 640 512" width="20px" height="20px"><path d="M533.6 32.5C598.5 85.2 640 165.8 640 256s-41.5 170.7-106.4 223.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C557.5 398.2 592 331.2 592 256s-34.5-142.2-88.7-186.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM473.1 107c43.2 35.2 70.9 88.9 70.9 149s-27.7 113.8-70.9 149c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C475.3 341.3 496 301.1 496 256s-20.7-85.3-53.2-111.8c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zm-60.5 74.5C434.1 199.1 448 225.9 448 256s-13.9 56.9-35.4 74.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C393.1 284.4 400 271 400 256s-6.9-28.4-17.7-37.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3z"/></svg>  
      </div>
      <div class="unmute-icon">
        <svg viewBox="0 0 576 512" width="20px" height="20px"><path d="M301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3zM425 167l55 55 55-55c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-55 55 55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-55-55-55 55c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l55-55-55-55c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z"/></svg>
      </div>
    </div>
    <!--
    <div class="rf-video-share">
      <svg viewBox="0 0 32 32"><g data-name="Layer 51" id="Layer_51"><path d="M2,29A1.12,1.12,0,0,1,1.69,29,1,1,0,0,1,1,28V27A19,19,0,0,1,17,8.24V4a1,1,0,0,1,1.6-.8l12,9a1,1,0,0,1,0,1.6l-12,9A1,1,0,0,1,17,22V18.25A18.66,18.66,0,0,0,4.93,25.67L2.81,28.59A1,1,0,0,1,2,29ZM19,6V9.12a1,1,0,0,1-.89,1,17,17,0,0,0-15,14.6l.16-.21A20.68,20.68,0,0,1,17.9,16.11a1,1,0,0,1,.77.26,1,1,0,0,1,.33.74V20l9.33-7Z"/></g></svg>  
    </div>
    -->
  </div>
</div></div><!-- BEGIN app snippet: rfProductsMobile -->
  
  <div class="rf-mobile-info"><div class="rf-carousel-wrap rf-product-list rf-single-product">
  
    

    <div class="carousel__item rf-ratio">
      <div class="rf-product-item" data-handle="charcoal-and-herbal-toothpowder" data-id="9037025247534" data-device="mobile">
        <div class="rf-product-top">
          <div class="rf-product-img" data-width="100" data-img="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/5.png?v=1736666226">
            <img src="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/5.png?v=1736666226&width=100" alt="Charcoal and Herbal Toothpowder" width="100" height="100" loading="lazy">
          </div>
          <div class="rf-product-content">
            <h4 class="rf-product-title">Charcoal and Herbal Toothpowder</h4>
            <div class="rf-product-review"></div>
            <div class="rf-product-prices">--</div>
          </div>
        </div>
        <div class="rf-product-bottom">
          <a href="/products/charcoal-and-herbal-toothpowder"class="rf-button rf-button-sm reelfy_link rf-product-mopen">Shop Now</a>
        </div>
      </div>
    </div>
  
  </div></div>
<!-- END app snippet --><!-- BEGIN app snippet: rfProductsLarge -->
<div class="rf-lightbox-info rf-lightbox-info-lg">
  
  
    
    <div class="rf-lightbox-info-inner scrollable"><div class="rf-lightbox-single-product active" data-handle="charcoal-and-herbal-toothpowder" data-id="9037025247534">
    
      

      

      
      
    
    </div><!-- .rf-lightbox-single-product - 1 --></div>
  
  
</div>
<!-- END app snippet --></div></div><div id="rfvideo76393" class="rf-lightbox-content"><div class="rf-lightbox-wrapper  rf-one-product" data-interaction="products" data-id="68403"><div class="rf-lightbox-video" data-id="68403"><!-- BEGIN app snippet: videoPlayer --><div class="rf-video-wrapper">
  <div class="rf-video-video rf-video-loading">
    <video class="imagebox__video" width="100%" preload="none" playsinline webkit-playsinline="true" x-webkit-airplay="allow" x-webkit-airplay="allow" disablepictureinpicture="true" muted></video>
  </div>
  <div class="rf-video-overlay"></div>
  <div class="rf-video-progress_bar progress_bar">
    <span class="progress"></span>
  </div>
  <div class="rf-video-tool">
    <div class="rf-video-controls">
      <div class="play-icon active">
        <svg viewBox="0 0 512 512" width="20px" height="20px"><path d="M176 480C148.6 480 128 457.6 128 432v-352c0-25.38 20.4-47.98 48.01-47.98c8.686 0 17.35 2.352 25.02 7.031l288 176C503.3 223.8 512 239.3 512 256s-8.703 32.23-22.97 40.95l-288 176C193.4 477.6 184.7 480 176 480z"/></svg>
      </div>
      <div class="pause-icon">
        <svg viewBox="0 0 320 512" width="20px" height="20px"><path d="M272 63.1l-32 0c-26.51 0-48 21.49-48 47.1v288c0 26.51 21.49 48 48 48L272 448c26.51 0 48-21.49 48-48v-288C320 85.49 298.5 63.1 272 63.1zM80 63.1l-32 0c-26.51 0-48 21.49-48 48v288C0 426.5 21.49 448 48 448l32 0c26.51 0 48-21.49 48-48v-288C128 85.49 106.5 63.1 80 63.1z"/></svg>
      </div>
    </div>
    <div class="rf-video-audio">
      <div class="mute-icon active">
        <svg viewBox="0 0 640 512" width="20px" height="20px"><path d="M533.6 32.5C598.5 85.2 640 165.8 640 256s-41.5 170.7-106.4 223.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C557.5 398.2 592 331.2 592 256s-34.5-142.2-88.7-186.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM473.1 107c43.2 35.2 70.9 88.9 70.9 149s-27.7 113.8-70.9 149c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C475.3 341.3 496 301.1 496 256s-20.7-85.3-53.2-111.8c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zm-60.5 74.5C434.1 199.1 448 225.9 448 256s-13.9 56.9-35.4 74.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C393.1 284.4 400 271 400 256s-6.9-28.4-17.7-37.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3z"/></svg>  
      </div>
      <div class="unmute-icon">
        <svg viewBox="0 0 576 512" width="20px" height="20px"><path d="M301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3zM425 167l55 55 55-55c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-55 55 55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-55-55-55 55c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l55-55-55-55c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z"/></svg>
      </div>
    </div>
    <!--
    <div class="rf-video-share">
      <svg viewBox="0 0 32 32"><g data-name="Layer 51" id="Layer_51"><path d="M2,29A1.12,1.12,0,0,1,1.69,29,1,1,0,0,1,1,28V27A19,19,0,0,1,17,8.24V4a1,1,0,0,1,1.6-.8l12,9a1,1,0,0,1,0,1.6l-12,9A1,1,0,0,1,17,22V18.25A18.66,18.66,0,0,0,4.93,25.67L2.81,28.59A1,1,0,0,1,2,29ZM19,6V9.12a1,1,0,0,1-.89,1,17,17,0,0,0-15,14.6l.16-.21A20.68,20.68,0,0,1,17.9,16.11a1,1,0,0,1,.77.26,1,1,0,0,1,.33.74V20l9.33-7Z"/></g></svg>  
    </div>
    -->
  </div>
</div></div><!-- BEGIN app snippet: rfProductsMobile -->
  
  <div class="rf-mobile-info"><div class="rf-carousel-wrap rf-product-list rf-single-product">
  
    

    <div class="carousel__item rf-ratio">
      <div class="rf-product-item" data-handle="hairoil-and-shampoo-combo" data-id="9037027049774" data-device="mobile">
        <div class="rf-product-top">
          <div class="rf-product-img" data-width="100" data-img="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/4.png?v=1736666303">
            <img src="https://cdn.shopify.com/s/files/1/0807/1299/1022/files/4.png?v=1736666303&width=100" alt="Hair Oil & Shampoo Combo" width="100" height="100" loading="lazy">
          </div>
          <div class="rf-product-content">
            <h4 class="rf-product-title">Hair Oil & Shampoo Combo</h4>
            <div class="rf-product-review"></div>
            <div class="rf-product-prices">--</div>
          </div>
        </div>
        <div class="rf-product-bottom">
          <a href="/products/hairoil-and-shampoo-combo"class="rf-button rf-button-sm reelfy_link rf-product-mopen">Shop Now</a>
        </div>
      </div>
    </div>
  
  </div></div>
<!-- END app snippet --><!-- BEGIN app snippet: rfProductsLarge -->
<div class="rf-lightbox-info rf-lightbox-info-lg">
  
  
    
    <div class="rf-lightbox-info-inner scrollable"><div class="rf-lightbox-single-product active" data-handle="hairoil-and-shampoo-combo" data-id="9037027049774">
    
      

      

      
      
    
    </div><!-- .rf-lightbox-single-product - 1 --></div>
  
  
</div>
<!-- END app snippet --></div></div>
  </div>
  



</div>

    </div>
  </div>
</div>





</div><div id="shopify-section-template--25246412243246__section_fnHgkX" class="shopify-section section-wrapper">



<div class="section-background color-scheme-1"></div>
<div
  class="section section--page-width color-scheme-1"
  data-testid="ui-test-section"

  

  style="
    
      --section-min-height: var(--section-height-small);
    

    
     --section-preview-height: 600px;
     
  "
>
  <div class="custom-section-background">
    

  </div>

  <div
    class="border-style custom-section-content"
    style="--border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 
"
  >
    

    <div
      class="
        spacing-style
        layout-panel-flex
        layout-panel-flex--column
        section-content-wrapper
         mobile-column
      "
      style="
        --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: center; --vertical-alignment: center;
--vertical-alignment-mobile: center;

        --padding-block-start: 0px;--padding-block-end: 12px;
      "
      data-testid="section-content"
    >
      
  <div id="shopify-block-AeEluNDVoR2tybERLb__ai_gen_block_46f534a_wYjNJJ" class="shopify-block">


<style data-shopify>
  .ai-content-box-aeelundvor2tyberlbaigenblock46f534awyjnjj {
    padding: 40px;
    background-color: #f5f5f5;
    border-radius: 18px;
    text-align: center;
    max-width: 100%;
  }

  .ai-content-box-heading-aeelundvor2tyberlbaigenblock46f534awyjnjj {
    color: #1f282f;
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 42px;
    margin: 0 0 16px 0;
    text-transform: uppercase;
  }

  .ai-content-box-text-aeelundvor2tyberlbaigenblock46f534awyjnjj {
    color: #000000;
    font-family: Inter, sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.5;
    margin: 0 0 24px 0;
  }

  .ai-content-box-button-aeelundvor2tyberlbaigenblock46f534awyjnjj {
    display: inline-block;
    padding: 20px 38px;
    background-color: #1f282f;
    color: #ffffff;
    border: 0px solid #1f282f;
    border-radius: 0px;
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 17px;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .ai-content-box-button-aeelundvor2tyberlbaigenblock46f534awyjnjj:hover {
    background-color: #000000;
    color: #ffffff;
    border-color: #000000;
  }

  @media screen and (max-width: 749px) {
    .ai-content-box-aeelundvor2tyberlbaigenblock46f534awyjnjj {
      padding: 28.0px;
    }

    .ai-content-box-heading-aeelundvor2tyberlbaigenblock46f534awyjnjj {
      font-size: 33.6px;
    }

    .ai-content-box-text-aeelundvor2tyberlbaigenblock46f534awyjnjj {
      font-size: 14.4px;
    }

    .ai-content-box-button-aeelundvor2tyberlbaigenblock46f534awyjnjj {
      font-size: 15.3px;
      padding: 16.0px 30.4px;
    }
  }
</style>

<div class="ai-content-box-aeelundvor2tyberlbaigenblock46f534awyjnjj" >
  
    <h2 class="ai-content-box-heading-aeelundvor2tyberlbaigenblock46f534awyjnjj">build your own combo</h2>
  

  
    <div class="ai-content-box-text-aeelundvor2tyberlbaigenblock46f534awyjnjj"><p>Buy any 3 Products at just ₹999</p></div>
  

  
    
      <a href="https://mudaura.com/apps/box-builder/new-box" class="ai-content-box-button-aeelundvor2tyberlbaigenblock46f534awyjnjj">
        build now
      </a>
    
  
</div>

</div>


    </div>
  </div>
</div>





</div><div id="shopify-section-template--25246412243246__ss_before_after_image_MD7DJG" class="shopify-section"><style>
  .section-template--25246412243246__ss_before_after_image_MD7DJG-wrapper {
    padding-top: var(--pt);
    padding-bottom: var(--pb);
    direction: ltr;
  }

  @media screen and (min-width: 750px) {
    .section-template--25246412243246__ss_before_after_image_MD7DJG-wrapper {
      padding-top: var(--pt-desktop);
      padding-bottom: var(--pb-desktop);
    }
  }
  .section-template--25246412243246__ss_before_after_image_MD7DJG {
    max-width: var(--max-width, 120rem);
    margin: 0 auto;
    padding: 0 1.5rem;
  }
  @media screen and (min-width: 750px) {
    .section-template--25246412243246__ss_before_after_image_MD7DJG {
        padding: 0 5rem;
    }
  }
</style>
<div
  class="section-template--25246412243246__ss_before_after_image_MD7DJG-wrapper"
  style="
    --pt: 0px;
    --pt-desktop: 0px;
    --pb: 36px;
    --pb-desktop: 48px;
    --max-width: 120rem;
    background-color: rgba(0,0,0,0);
    background: ;
  "
>
  <div
    class="section-template--25246412243246__ss_before_after_image_MD7DJG"
  >
    <div
      style="border-radius: px;"
    >
      
        
            <style>
              .text-text_HJrkDQ * {
                color: var(--color);
                text-align: var(--text-align);
              }
            </style>
            <div
              class="text-text_HJrkDQ"
              style="
                --text-align: center;
                --color: #000000;
              "
            >
              
              
                <h2
                  style="font-weight: 700;"
                >
                  THE BEST SELLER
                </h2>
              
              
                <div style="margin-bottom:10px;">
                  <p>Handcrafted with purity your skin truly deserves.</p>
                </div>
              
            </div>
          
      
        
            <style>
              .section-template--25246412243246__ss_before_after_image_MD7DJG  .before-after-image-wrapper {
                position: relative;
                --text-primary: 26 26 26;
                --shadow: 0 5px 15px rgb(var(--text-primary) / 0.1);
                filter: drop-shadow(var(--shadow));
                user-select: none;
                overflow: hidden;
              }
              .section-template--25246412243246__ss_before_after_image_MD7DJG .filter-invert {
                filter: invert(1);
              }
              .section-template--25246412243246__ss_before_after_image_MD7DJG .placeholder {
                --text-primary: 26 26 26;
                background: rgb(var(--text-primary) / .3);
                fill: rgb(var(--text-primary) / .7);
                color: rgb(var(--text-primary) / .7);
                display: block;
              }
              .section-template--25246412243246__ss_before_after_image_MD7DJG .before-after-image-text {
                position: absolute;
                font-weight: 700;
              }
              .section-template--25246412243246__ss_before_after_image_MD7DJG .bg-text {
                background: white;
              }
              .section-template--25246412243246__ss_before_after_image_MD7DJG .before-after-image {
                width: 100%;
                display: block;
              }
              .section-template--25246412243246__ss_before_after_image_MD7DJG .before-after-image--cover {
                height: 100%;
                object-fit: cover;
                object-position: center;
              }
              .section-template--25246412243246__ss_before_after_image_MD7DJG .before-after-image-relative {
                height: var(--mobile-height);
              }
              @media screen and (min-width: 750px) {
                .section-template--25246412243246__ss_before_after_image_MD7DJG .before-after-image-relative {
                  height: var(--desktop-height);
                }
              }
            </style>
            <div
              class="before-after-image-wrapper"
              style="
                --before-after-initial-drag-position: 50%;
                --clip-path-offset: 0px;
                border-radius: 12px;
              "
            >
              
              
              <div
                class="before-after-image-relative"
                style="
                  position: relative;
                  color: #ffffff;
                  --mobile-height: 240px;
                  --desktop-height: 420px;
                "
              >
                
                  <img
                    src="//mudaura.com/cdn/shop/files/slider_2.png?v=1737633080"
                    alt=""
                    srcset=",,,,,,,"
                      //mudaura.com/cdn/shop/files/slider_2_300x.png?v=1737633080 300w
                      //mudaura.com/cdn/shop/files/slider_2_400x.png?v=1737633080 400w
                      //mudaura.com/cdn/shop/files/slider_2_500x.png?v=1737633080 500w
                      //mudaura.com/cdn/shop/files/slider_2_600x.png?v=1737633080 600w
                      //mudaura.com/cdn/shop/files/slider_2_800x.png?v=1737633080 800w
                      //mudaura.com/cdn/shop/files/slider_2_1000x.png?v=1737633080 1000w
                      //mudaura.com/cdn/shop/files/slider_2_1200x.png?v=1737633080 1200w
                      //mudaura.com/cdn/shop/files/slider_2_1400x.png?v=1737633080 1400w
                    
                    
                    
                    
                    loading="lazy"
                    draggable="false"
                    class="
                      before-after-image
                       before-after-image--cover 
                    "
                  >
                
                
                  <div
                    class="before-after-image-text before-after-image-text--before"
                    style="
                      color: #ffffff;
                      left: 2rem;
                      
                        bottom: 1rem;
                      
                    "
                  >
                    Before
                  </div>
                
              </div>
              <div
                style="
                  clip-path: inset(0 0 0 calc(var(--before-after-initial-drag-position, 50%) + var(--clip-path-offset, 0px)));
                  position: absolute;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  color: #ffffff;
                "
              >
                
                  <img
                    src="//mudaura.com/cdn/shop/files/slider_1.png?v=1737633051"
                    alt=""
                    srcset=",,,,,,,"
                      //mudaura.com/cdn/shop/files/slider_1_300x.png?v=1737633051 300w
                      //mudaura.com/cdn/shop/files/slider_1_400x.png?v=1737633051 400w
                      //mudaura.com/cdn/shop/files/slider_1_500x.png?v=1737633051 500w
                      //mudaura.com/cdn/shop/files/slider_1_600x.png?v=1737633051 600w
                      //mudaura.com/cdn/shop/files/slider_1_800x.png?v=1737633051 800w
                      //mudaura.com/cdn/shop/files/slider_1_1000x.png?v=1737633051 1000w
                      //mudaura.com/cdn/shop/files/slider_1_1200x.png?v=1737633051 1200w
                      //mudaura.com/cdn/shop/files/slider_1_1400x.png?v=1737633051 1400w
                    
                    
                    
                    
                    loading="lazy"
                    draggable="false"
                    class="
                      before-after-image
                       before-after-image--cover 
                    "
                  >
                
                
                  <div
                    class="before-after-image-text before-after-image-text--after"
                    style="
                      color: #ffffff;
                      right: 2rem;
                      
                        bottom: 1rem;
                      
                    "
                  >
                    After
                  </div>
                
              </div>
              
              <style>
                .section-template--25246412243246__ss_before_after_image_MD7DJG .before-after__cursor {
                  height: 100%;
                  width: max-content;
                  touch-action: none;
                  --transform-logical-flip: 1;
                  transform: translate(calc(var(--transform-logical-flip) * -50% + var(--clip-path-offset, 0px)),-50%);
                  cursor: grab;
                  filter: drop-shadow(0 1px 2px #0000001a) drop-shadow(0 1px 1px #0000000f);
                  will-change: transform;
                  place-items: center;
                  display: grid;
                  position: relative;
                  top: 50%;
                  left: var(--before-after-initial-drag-position, 0px);
                }
                .section-template--25246412243246__ss_before_after_image_MD7DJG .before-after__cursor:before {
                  content: '';
                  height: 100%;
                  width: 2px;
                  background: var(--background);
                  z-index: -1;
                  position: absolute;
                }
              </style>
              <div
                style="
                  position: absolute;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                "
              >
                <split-cursor
                  class="before-after__cursor"
                  style="--background: #ffffff; "
                >
                  <svg
                    role="presentation"
                    focusable="false"
                    width="28"
                    height="35"
                    viewBox="0 0 32 40"
                    style="width: 40px; height: 40px;"
                  >
                    <path d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16V24C32 32.8366 24.8366 40 16 40C7.16344 40 0 32.8366 0 24V16Z"
                      fill="#ffffff"></path>
                    <path fill="#000000" d="M11 14H13V26H11zM15 14H17V26H15zM19 14H21V26H19z"></path>
                  </svg>
                </split-cursor>
              </div>
              <script>
                (function () {
                  function setup() {
                    const cursor = document.querySelector(
                      '.section-template--25246412243246__ss_before_after_image_MD7DJG .before-after__cursor'
                    );
                    const imageWrapper = document.querySelector(
                      '.section-template--25246412243246__ss_before_after_image_MD7DJG .before-after-image-wrapper'
                    );

                    // drag the cursor to update the imageWrapper's --clip-path-offset value (px)
                    let xStart, xEnd, xDiff, originalOffset;
                    function dragStart(event) {
                      xStart = event.clientX;
                      originalOffset = imageWrapper.style
                        .getPropertyValue('--clip-path-offset')
                        .slice(0, -2);
                      //xStart = imageWrapper.style
                      //  .getPropertyValue('--clip-path-offset')
                      //  .slice(0, -2);
                      document.addEventListener('pointermove', dragMove);
                      document.addEventListener('pointerup', dragEnd);
                    }

                    function dragMove(event) {
                      xEnd = event.clientX;
                      xDiff = xEnd - xStart;

                      // clamp the value to the imageWrapper's 1/2 width
                      let result = xDiff + parseInt(originalOffset);
                      let cursorOffsetPercent = parseFloat(getComputedStyle(imageWrapper).getPropertyValue('--before-after-initial-drag-position'));
                      let containerWidth = imageWrapper.offsetWidth;
                      let pixelsOffset = (cursorOffsetPercent / 100) * containerWidth;
                      
                      const negativeMax = -1 * (pixelsOffset);
                      const positiveMax = imageWrapper.offsetWidth - pixelsOffset;
                      if (result < negativeMax) {
                        result = negativeMax;
                      } else if (result > positiveMax) {
                        result = positiveMax;
                      }
                      imageWrapper.style.setProperty(
                        '--clip-path-offset',
                        result + 'px'
                      );
                    }

                    function dragEnd(event) {
                      document.removeEventListener('pointermove', dragMove);
                      document.removeEventListener('pointerup', dragEnd);
                    }

                    cursor.addEventListener('pointerdown', dragStart);
                  }
                  setup();
                  if (Shopify.designMode) {
                    document.addEventListener('shopify:section:load', setup);
                  }
                })();
              </script>
            </div>
          
      
        
            
              <style>
                .before-after-atc-button-template--25246412243246__ss_before_after_image_MD7DJG {
                  display: block;
                  text-decoration: none;
                  text-align: center;
                  color: var(--color);
                  background-color: var(--background-color);
                  border-style: solid;
                  transition: all 0.3s ease-in-out;
                  margin-top: 30px;
                }
                @media screen and (min-width: 750px) {
                  .before-after-atc-button-template--25246412243246__ss_before_after_image_MD7DJG {
                    margin-top: 40px;
                  }
                }
                .before-after-atc-button-template--25246412243246__ss_before_after_image_MD7DJG:hover {
                  color: var(--hover-color);
                  background-color: var(--hover-background-color);
                }
              </style>
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="before-after-atc-button-template--25246412243246__ss_before_after_image_MD7DJG"
                style="
                  width: 200px;
                  --color: #ffffff;
                  --background-color: #000000;
                  --hover-color: #ffffff;
                  --hover-background-color: #000000;
                  font-size: 16px;
                  border-radius: 10px;
                  border-color: #000000;
                  border-width: 0px;
                  padding: 6px 0;
                  
                      margin-left: auto;
                      margin-right: auto;
                  
                "
              >
                Shop now
              </a>
            
          
      
    </div>
  </div>
</div>

</div><div id="shopify-section-template--25246412243246__17598613775c6728a3" class="shopify-section section-wrapper">



<div class="section-background color-scheme-1"></div>
<div
  class="section section--page-width color-scheme-1"
  data-testid="ui-test-section"

  

  style="
    

    
  "
>
  <div class="custom-section-background">
    

  </div>

  <div
    class="border-style custom-section-content"
    style="--border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 
"
  >
    

    <div
      class="
        spacing-style
        layout-panel-flex
        layout-panel-flex--column
        section-content-wrapper
         mobile-column
      "
      style="
        --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: center;
--vertical-alignment-mobile: center;

        --padding-block-start: 0px;--padding-block-end: 0px;
      "
      data-testid="section-content"
    >
      
  


<style data-shopify>
  .ai-marquee-container-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    overflow: hidden;
    background-color: #ffffff;
    padding: 20px 0;
  }

  .ai-marquee-track-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    display: flex;
    align-items: center;
    gap: 60px;
    animation: ai-marquee-scroll-adfvqakngb0uzbudtraigenblock8efd648fn3vnp 30s linear infinite;
    white-space: nowrap;
  }

  .ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    display: flex;
    align-items: center;
    gap: 60px;
    flex-shrink: 0;
  }

  .ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 60px;
    color: #000000;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 0;
  }

  .ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    height: 80px;
    width: auto;
    object-fit: contain;
    flex-shrink: 0;
  }

  .ai-marquee-image-placeholder-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    height: 80px;
    width: 80px;
    background-color: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .ai-marquee-image-placeholder-adfvqakngb0uzbudtraigenblock8efd648fn3vnp svg {
    width: 60%;
    height: 60%;
    opacity: 0.5;
  }

  .ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
  }

  .ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 24px;
    color: #000000;
    text-transform: uppercase;
    margin: 0;
    line-height: 1.2;
  }

  .ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 24px;
    background-color: #ffffff;
    color: #000000;
    border: 2px solid #000000;
    text-decoration: none;
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    white-space: nowrap;
  }

  .ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp:hover {
    background-color: #000000;
    color: #ffffff;
    border-color: #000000;
  }

  @keyframes ai-marquee-scroll-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .ai-marquee-track-adfvqakngb0uzbudtraigenblock8efd648fn3vnp:hover {
    animation-play-state: paused;
  }

  @media screen and (max-width: 749px) {
    .ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
      font-size: 42.0px;
    }

    .ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
      font-size: 19.2px;
    }

    .ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp,
    .ai-marquee-image-placeholder-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
      height: 64.0px;
      width: 64.0px;
    }

    .ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp {
      gap: 42.0px;
    }
  }
</style>

<div class="ai-marquee-container-adfvqakngb0uzbudtraigenblock8efd648fn3vnp" >
  <div class="ai-marquee-track-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    

    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">The Collection</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/pexels-kseniya-buraya-124360874-9991820.jpg?height=80&v=1733328348"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Shop Now</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                View Collection
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Best Sellers</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slider_1.png?height=80&v=1737633051"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Trending</h3>
            

            
              <a
                href="/products/multani-mitti-face-soap-pack-of-3"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Best Sellers
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Sale Items</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/slide_2_9db147d6-d6e8-4a2a-b402-2603ef6eb558.png?height=80&v=1737634298"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Save Big</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Shop Sale
              </a>
            
          </div>
        </div>
      
        <div class="ai-marquee-item-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
          

          
            <h2 class="ai-marquee-text-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Limited Edition</h2>
          

          
            <img
              src="//mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png?height=80&v=1736666660"
              alt=""
              class="ai-marquee-image-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              loading="lazy"
              height="80"
            >
          

          <div class="ai-marquee-content-group-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">
            
              <h3 class="ai-marquee-heading-adfvqakngb0uzbudtraigenblock8efd648fn3vnp">Exclusive</h3>
            

            
              <a
                href="https://mudaura.com/apps/box-builder/new-box"
                class="ai-marquee-button-adfvqakngb0uzbudtraigenblock8efd648fn3vnp"
              >
                Get Yours
              </a>
            
          </div>
        </div>
      
    
  </div>
</div>



    </div>
  </div>
</div>





</div><div id="shopify-section-template--25246412243246__17598594349c3faa19" class="shopify-section section-wrapper">



<div class="section-background color-scheme-1"></div>
<div
  class="section section--page-width color-scheme-1"
  data-testid="ui-test-section"

  

  style="
    

    
  "
>
  <div class="custom-section-background">
    

  </div>

  <div
    class="border-style custom-section-content"
    style="--border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 
"
  >
    

    <div
      class="
        spacing-style
        layout-panel-flex
        layout-panel-flex--column
        section-content-wrapper
         mobile-column
      "
      style="
        --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: center;
--vertical-alignment-mobile: center;

        --padding-block-start: 20px;--padding-block-end: 0px;
      "
      data-testid="section-content"
    >
      
  


<style data-shopify>
  .ai-testimonials-container-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    padding: 60px 20px 60px;
    background-color: #ffffff;
    width: 100%;
    max-width: 100%;
    overflow: hidden;
    box-sizing: border-box;
  }

  .ai-testimonials-wrapper-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    width: 100%;
    box-sizing: border-box;
  }

  .ai-testimonials-header-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    margin-bottom: 40px;
  }

  .ai-testimonials-title-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 32px;
    color: #1f282f;
    margin: 0 0 16px;
    text-transform: uppercase;
  }

  .ai-testimonials-subtitle-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    font-family: Inter, sans-serif;
    font-weight: 400;
    font-size: 16px;
    color: #000000;
    margin: 0;
  }

  .ai-testimonials-slider-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    position: relative;
    width: 100%;
    max-width: 100%;
    height: 300px;
    margin-bottom: 20px;
    overflow: hidden;
    box-sizing: border-box;
  }

  .ai-testimonials-track-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    display: flex;
    width: 100%;
    height: 100%;
    transition: transform 0.6s ease-in-out;
    box-sizing: border-box;
  }

  .ai-testimonial-card-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    flex: 0 0 100%;
    width: 100%;
    max-width: 100%;
    height: 100%;
    padding: 40px;
    background-color: #f8f8f8;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    text-align: left;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    box-sizing: border-box;
    overflow: hidden;
  }

  .ai-testimonial-author-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 16px;
    color: #1f282f;
    margin: 0 0 12px;
    text-transform: uppercase;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .ai-testimonial-stars-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    display: flex;
    gap: 4px;
    margin-bottom: 16px;
    flex-wrap: wrap;
  }

  .ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    width: 14px;
    height: 14px;
    flex-shrink: 0;
  }

  .ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    color: #000000;
  }

  .ai-testimonial-star-empty-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    color: #e0e0e0;
  }

  .ai-testimonial-quote-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    font-family: Inter, sans-serif;
    font-weight: 400;
    font-size: 18px;
    line-height: 1.6;
    color: #000000;
    margin: 0;
    flex-grow: 1;
    word-wrap: break-word;
    overflow-wrap: break-word;
    hyphens: auto;
  }

  .ai-testimonial-position-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    font-family: Inter, sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #666666;
    margin: 16px 0 0;
    opacity: 0.8;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .ai-testimonials-loader-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    width: 100%;
    max-width: 200px;
    height: 3px;
    background-color: #e6e6e6;
    border-radius: 2px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
  }

  .ai-testimonials-progress-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
    height: 100%;
    background-color: #1f282f;
    border-radius: 2px;
    width: 0%;
    transition: width 0.1s linear;
  }

  @media screen and (max-width: 990px) {
    .ai-testimonials-container-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      padding: 48.0px 16px 48.0px;
    }

    .ai-testimonials-title-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 27.2px;
    }

    .ai-testimonials-subtitle-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 14.4px;
    }

    .ai-testimonial-card-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      padding: 32px;
    }

    .ai-testimonials-slider-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      height: 270.0px;
    }
  }

  @media screen and (max-width: 749px) {
    .ai-testimonials-container-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      padding: 42.0px 16px 42.0px;
    }

    .ai-testimonials-header-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      margin-bottom: 24px;
    }

    .ai-testimonials-title-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 22.4px;
      margin-bottom: 12px;
    }

    .ai-testimonials-subtitle-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 13.6px;
    }

    .ai-testimonial-card-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      padding: 24px 20px;
    }

    .ai-testimonials-slider-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      height: auto;
      min-height: 240.0px;
    }

    .ai-testimonial-quote-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 16.2px;
    }

    .ai-testimonial-author-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 14.4px;
    }

    .ai-testimonial-position-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 12.6px;
    }

    .ai-testimonials-loader-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      max-width: 150px;
    }
  }

  @media screen and (max-width: 480px) {
    .ai-testimonials-container-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      padding: 36.0px 12px 36.0px;
    }

    .ai-testimonial-card-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      padding: 20px 16px;
    }

    .ai-testimonials-title-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 19.2px;
    }

    .ai-testimonial-quote-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      font-size: 14.4px;
    }

    .ai-testimonials-loader-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac {
      max-width: 120px;
    }
  }
</style>

<testimonials-slider-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac
  class="ai-testimonials-container-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac"
  data-autoplay-interval="5"
  
>
  <div class="ai-testimonials-wrapper-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
    
      <div class="ai-testimonials-header-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
        
          <h2 class="ai-testimonials-title-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">What our customers say</h2>
        
        
          <p class="ai-testimonials-subtitle-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">Real reviews from real customers</p>
        
      </div>
    

    <div class="ai-testimonials-slider-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
      <div class="ai-testimonials-track-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
        
          

          
            <div class="ai-testimonial-card-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" data-testimonial="1">
              
                <div class="ai-testimonial-author-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">Sunita Bhatnagar</div>
              
              
              
                <div class="ai-testimonial-stars-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                </div>
              

              <blockquote class="ai-testimonial-quote-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
                This product completely exceeded my expectations. The quality is outstanding and the customer service is top-notch!
              </blockquote>
              
              
                <div class="ai-testimonial-position-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">Verified Customer</div>
              
            </div>
          
        
          

          
            <div class="ai-testimonial-card-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" data-testimonial="2">
              
                <div class="ai-testimonial-author-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">Manish singhla</div>
              
              
              
                <div class="ai-testimonial-stars-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                </div>
              

              <blockquote class="ai-testimonial-quote-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
                I've been using this for months now and it's become an essential part of my daily routine. Highly recommend!
              </blockquote>
              
              
                <div class="ai-testimonial-position-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">Regular Customer</div>
              
            </div>
          
        
          

          
            <div class="ai-testimonial-card-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" data-testimonial="3">
              
                <div class="ai-testimonial-author-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">KRISHIKA GUPTA</div>
              
              
              
                <div class="ai-testimonial-stars-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                    
                      <svg class="ai-testimonial-star-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac ai-testimonial-star-filled-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1">
                        <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                      </svg>
                    
                  
                </div>
              

              <blockquote class="ai-testimonial-quote-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
                Fast shipping, great packaging, and the product works exactly as described. Will definitely order again!
              </blockquote>
              
              
                <div class="ai-testimonial-position-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">Happy Customer</div>
              
            </div>
          
        
          

          
        
          

          
        
      </div>
    </div>

    
      <div class="ai-testimonials-loader-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac">
        <div class="ai-testimonials-progress-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac"></div>
      </div>
    
  </div>
</testimonials-slider-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac>

<script>
  (function() {
    class TestimonialsSliderawlk1ewpoagjxwvvubaigenblock2592bf1kvtiac extends HTMLElement {
      constructor() {
        super();
        this.currentSlide = 0;
        this.totalSlides = 0;
        this.autoplayInterval = null;
        this.progressInterval = null;
        this.startTime = 0;
        this.duration = 0;
      }

      connectedCallback() {
        this.track = this.querySelector('.ai-testimonials-track-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac');
        this.cards = this.querySelectorAll('.ai-testimonial-card-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac');
        this.progressBar = this.querySelector('.ai-testimonials-progress-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac');
        
        this.totalSlides = this.cards.length;
        this.duration = parseInt(this.dataset.autoplayInterval) * 1000;

        if (this.totalSlides > 0) {
          this.init();
        }
      }

      init() {
        this.updateSlide();
        this.startAutoplay();
      }

      updateSlide() {
        if (!this.track) return;

        const translateX = -this.currentSlide * 100;
        this.track.style.transform = `translateX(${translateX}%)`;
      }

      nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateSlide();
      }

      startAutoplay() {
        if (this.totalSlides <= 1) return;

        this.startTime = Date.now();
        this.updateProgress();

        this.autoplayInterval = setInterval(() => {
          this.nextSlide();
          this.startTime = Date.now();
        }, this.duration);

        this.progressInterval = setInterval(() => {
          this.updateProgress();
        }, 50);
      }

      updateProgress() {
        if (!this.progressBar) return;

        const elapsed = Date.now() - this.startTime;
        const progress = Math.min((elapsed / this.duration) * 100, 100);
        this.progressBar.style.width = `${progress}%`;
      }

      resetAutoplay() {
        if (this.autoplayInterval) {
          clearInterval(this.autoplayInterval);
        }
        if (this.progressInterval) {
          clearInterval(this.progressInterval);
        }
        this.startAutoplay();
      }

      disconnectedCallback() {
        if (this.autoplayInterval) {
          clearInterval(this.autoplayInterval);
        }
        if (this.progressInterval) {
          clearInterval(this.progressInterval);
        }
      }
    }

    customElements.define('testimonials-slider-awlk1ewpoagjxwvvubaigenblock2592bf1kvtiac', TestimonialsSliderawlk1ewpoagjxwvvubaigenblock2592bf1kvtiac);
  })();
</script>



    </div>
  </div>
</div>





</div><div id="shopify-section-template--25246412243246__product_list_X8Q7bi" class="shopify-section ui-test-product-list">



<div class="section-background color-scheme-1"></div>
<div
  class="
    section
    section--full-width
    color-scheme-1
    section-resource-list
    spacing-style
    gap-style
  "
  style="
    --padding-block-start: 0px;--padding-block-end: max(20px, calc(var(--spacing-scale) * 21px));
    --gap: 0px;
  "
>
  <div class="section-resource-list__header">
<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 8px;--padding-block-end: 6px;--padding-inline-start: 12px;--padding-inline-end: max(20px, calc(var(--spacing-scale) * 55px));
    --size-style-width: 100%;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--row
      
    "
    style="--flex-direction: row; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 0px;

--horizontal-alignment: space-between; --vertical-alignment: last baseline;
--vertical-alignment-mobile: last baseline;
"
  >










  <rte-formatter 
  class=" spacing-style text-block text-block--AbFpOM3dYOWYvNTFse__product_list_text_hyWwbh rte
     rte 
  "

  style="
    --padding-block-start: 10px; --padding-block-end:15px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: fit-content;
    --max-width: var(--max-width--body-normal);
    
    
  "

  
>
    <p>OUR CORE</p><h3>PRODUCTS</h3>
  </rte-formatter>









<a
  
    href="/collections/all"
  
  class="
    size-style
    link
    link--AYkM0SnoyaktLcmdoT__button_AjGjym
  "
  style="--size-style-width: fit-content;--size-style-height: ;--size-style-width-mobile: fit-content; --size-style-width-mobile-min: fit-content;"
>
  Shop now
</a>





</div>
</div>



</div>

  

  

  

<div
  class="
    resource-list
    
    
    resource-list--grid
  "
  style="--resource-list-column-gap-desktop: 1px;--resource-list-row-gap-desktop: 1px;--resource-list-columns: repeat(4, 1fr);--resource-list-columns-mobile: repeat(2, 1fr);--column-count-mobile: 2;"
  
    data-testid="resource-list-grid"
  
>
  
      
    
      
        
          <div
            class="resource-list__item"
          >
            
              





<style data-shopify>
  
</style>


<product-card-link
    data-product-id="8532502184238"
    data-featured-media-url="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&width=500"
    data-product-transition="true"
    
  ><product-card
  class="product-card"
  data-product-id="8532502184238"
  data-product-variants-size="1"
  id="product-card-AOGpvSlpyazVjdzIzR__static-product-card"
  data-product-transition="true"
  
  
  
>
  <a
    id="953cd73132750cbc88622e9ef23656f7"
    
      href="/products/multani-mitti-face-soap-pack-of-3?variant=46135519510830"
    
    class="product-card__link"
    ref="productCardLink"
  >
    <span class="visually-hidden">
      Multani Mitti Soaps (pack of 3)
    </span>
  </a>
  <div
    class="
      product-card__content
      layout-panel-flex
      layout-panel-flex--column
      product-grid__card
      spacing-style
      border-style
      gap-style
       color-scheme-2
    "
    style="
      --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

      --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;



--horizontal-alignment: ; --vertical-alignment: ;
--vertical-alignment-mobile: ;

      --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      --product-card-gap: 0px;
      --quick-add-display: flex;
      --quick-add-mobile-display: none;
      
      
      
      
    "
  >
    
  







<div
  ref="cardGallery"
  class="card-gallery card-gallery-ALzFMU21jZ0JtekNtZ__product_card_gallery_Gn6P7T spacing-style border-style"
  style="
    --border-width: 0px; --border-style: solid; --border-color:
rgb(var(--color-border-rgb) / 0.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --gallery-aspect-ratio: 1;
  "
  data-product-id="8532502184238"
  
    on:pointerenter="/previewImage"
    on:pointerleave="/resetImage"
  
  
    data-view-transition-to-main-product
  
  data-image-ratio="square"
  
>
    <a
      class="contents"
      ref="cardGalleryLink"
      href="
/products/multani-mitti-face-soap-pack-of-3?variant=46135519510830"
      aria-label="Multani Mitti Soaps (pack of 3)"
    >
      


<slideshow-component
  
    ref="slideshow"
  
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4;"
  
  initial-slide="0"
  
  
    infinite
  

  data-generic-media-size="4"
>
  
  <slideshow-container ref="slideshowContainer">
    
      <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

    
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
    >
      <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41094480888110"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41094480888110"
>
  
  <img src="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=3840" alt="Multani Mitti Soaps (pack of 3)" srcset="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=240 240w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=352 352w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=832 832w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="42565741805870"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0002000400080016"
  data-media-id="42565741805870"
>
  
  <img src="//mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=3840" alt="Multani Mitti Soaps (pack of 3)" srcset="//mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=240 240w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=352 352w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=832 832w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=3840 3840w" width="3840" height="3839" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/final_image_2.jpg?v=1760441873&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="42565692719406"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="42565692719406"
>
  
  <img src="//mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=3840" alt="Multani Mitti Soaps (pack of 3)" srcset="//mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=240 240w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=352 352w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=832 832w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/Soap_bar_listing_image-10.png?v=1760441873&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-4; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41094430097710"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41094430097710"
>
  
  <img src="//mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=3840" alt="Multani Mitti Soaps (pack of 3)" srcset="//mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=240 240w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=352 352w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=832 832w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/last.png?v=1760441873&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

    </a>
  
  
    <div
  class="product-badges product-badges--top-left"
  style="
    --badge-border-radius: 40px;
    --badge-font-family: var(--font-body--family); --badge-font-weight: var(--font-body--weight); --badge-text-transform: none;
  "
><div
      class="
        product-badges__badge product-badges__badge--rectangle
         color-scheme-4
      "
    >Sale
</div></div>



    
      

<quick-add-component
  class="quick-add color-scheme-1 "
  ref="quickAdd"
  data-product-title="Multani Mitti Soaps (pack of 3)"
>
  <product-form-component
    data-section-id="template--25246412243246__product_list_X8Q7bi"
    data-product-id="8532502184238"
    on:submit="/handleSubmit"
    class="
      quick-add__product-form-component
       quick-add__product-form-component--single-option 
       quick-add__product-form-component--single-variant 
    "
  >
    <div
      class="visually-hidden"
      aria-live="assertive"
      role="status"
      aria-atomic="true"
      ref="liveRegion"
    ></div><form method="post" action="/cart/add" id="QuickAdd-ProductForm-8532502184238-ALzFMU21jZ0JtekNtZ__product_card_gallery_Gn6P7T" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
        type="hidden"
        name="id"
        ref="variantId"
        value="46135519510830"
        
      >
      <input
        type="hidden"
        name="quantity"
        value="1"
      >
      
<add-to-cart-component
  ref="addToCartButtonContainer"
  data-product-variant-media="//mudaura.com/cdn/shop/files/1_lower.png?v=1737634298&width=100"
  data-add-to-cart-animation="true"
>
  <button
    id=""
    type="submit"
    name="add"
    ref="addToCartButton"
    on:click="/handleClick"
    class="button button quick-add__button quick-add__button--add"
    
  >
    <span
      class="add-to-cart-text"
    >
      
        <span class="svg-wrapper add-to-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M16.608 9.421V6.906H3.392v8.016c0 .567.224 1.112.624 1.513.4.402.941.627 1.506.627H8.63M8.818 3h2.333c.618 0 1.212.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.344c0-.622.246-1.218.683-1.658A2.33 2.33 0 0 1 8.82 3"/><path stroke="currentColor" stroke-linecap="round" stroke-width="var(--icon-stroke-width)" d="M14.608 12.563v5m2.5-2.5h-5"/></svg>
</span>
      
      <span class="add-to-cart-text__content is-visually-hidden-mobile">Add</span>
    </span>
    <span
      aria-hidden="true"
      class="add-to-cart-text--added"
    >
      <span class="svg-wrapper add-to-cart-icon--added"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-checkmark">
<path d="M4.75439 10.7485L7.68601 14.5888C7.79288 14.7288 7.84632 14.7988 7.91174 14.8242C7.96907 14.8466 8.03262 14.8469 8.09022 14.8253C8.15596 14.8007 8.21026 14.7314 8.31886 14.5927L15.2475 5.74658" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      <span class="is-visually-hidden-mobile">Added</span>
    </span>
  </button>
</add-to-cart-component>



<input type="hidden" name="product-id" value="8532502184238" /><input type="hidden" name="section-id" value="template--25246412243246__product_list_X8Q7bi" /></form></product-form-component>
</quick-add-component>



    
  

</div>





<div class="product-grid-view-zoom-out--details">
  
    <h3 class="h4">Multani Mitti Soaps (pack of 3)</h3>
    <div class="h6">
      <product-price data-product-id="8532502184238">
        <div ref="priceContainer">
  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 599.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 479.00</span>
    </span>
  

  
</div>

      </product-price>
    </div>
  
</div>






<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 12px;--padding-block-end: 12px;--padding-inline-start: 12px;--padding-inline-end: 12px;
    --size-style-width: 100%;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 4px;

--horizontal-alignment: flex-start; --vertical-alignment: space-between;
--vertical-alignment-mobile: space-between;
"
  >
  



<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: 100%;--size-style-height: fit;
  --size-style-width-mobile:75%; --size-style-width-mobile-min:75%;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--row
       mobile-column
    "
    style="--flex-direction: row; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 8px;

--horizontal-alignment: space-between; --vertical-alignment: center;
--vertical-alignment-mobile: center;
"
  >
  


  
  <a
    class="contents user-select-text"
    ref="productTitleLink"
    href="
/products/multani-mitti-face-soap-pack-of-3?variant=46135519510830"
  >
    





  <div 
  class=" spacing-style text-block text-block--AcG1ndHJCRXBBZzM2N__product_title_gtg38q h5
    
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    
--color: var(--color-foreground);
    --width: fit-content;
    --max-width: var(--max-width--body-normal);
    
    
  "

  
>
    <p>Multani Mitti Soaps (pack of 3)</p>
  </div>




  </a>






<product-price
  class="text-block text-block--align-left rte text-left paragraph spacing-style"
  data-block-id="ANUwrZEZ4Ry9UdU1Ib__price_Vz3EzL"
  data-product-id="8532502184238"
  style="
    
--color: var(--color-foreground);
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --width: 100%;
  "
  
>
  <div ref="priceContainer">
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 479.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 599.00</span>
    </span>
  
</div>


  
</product-price>







</div>
</div>









<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fit-content
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: fit-content;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: flex-start;
--vertical-alignment-mobile: flex-start;
"
  >
  













</div>
</div>






</div>
</div>







  </div>
</product-card></product-card-link>




            
          </div>

          
            <!--@list/split-->
          
        
          <div
            class="resource-list__item"
          >
            
              





<style data-shopify>
  
</style>


<product-card-link
    data-product-id="8662951133486"
    data-featured-media-url="//mudaura.com/cdn/shop/files/6.png?v=1736666187&width=500"
    data-product-transition="true"
    
  ><product-card
  class="product-card"
  data-product-id="8662951133486"
  data-product-variants-size="1"
  id="product-card-AOGpvSlpyazVjdzIzR__static-product-card-1"
  data-product-transition="true"
  
  
  
>
  <a
    id="9ad389aea9b0ca32d57ed1451e0c7111"
    
      href="/products/hair-oil?variant=46864405659950"
    
    class="product-card__link"
    ref="productCardLink"
  >
    <span class="visually-hidden">
      Radiant Roots Hair Oil
    </span>
  </a>
  <div
    class="
      product-card__content
      layout-panel-flex
      layout-panel-flex--column
      product-grid__card
      spacing-style
      border-style
      gap-style
       color-scheme-2
    "
    style="
      --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

      --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;



--horizontal-alignment: ; --vertical-alignment: ;
--vertical-alignment-mobile: ;

      --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      --product-card-gap: 0px;
      --quick-add-display: flex;
      --quick-add-mobile-display: none;
      
      
      
      
    "
  >
    
  







<div
  ref="cardGallery"
  class="card-gallery card-gallery-ALzFMU21jZ0JtekNtZ__product_card_gallery_Gn6P7T-1 spacing-style border-style"
  style="
    --border-width: 0px; --border-style: solid; --border-color:
rgb(var(--color-border-rgb) / 0.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --gallery-aspect-ratio: 1;
  "
  data-product-id="8662951133486"
  
    on:pointerenter="/previewImage"
    on:pointerleave="/resetImage"
  
  
    data-view-transition-to-main-product
  
  data-image-ratio="square"
  
>
    <a
      class="contents"
      ref="cardGalleryLink"
      href="
/products/hair-oil?variant=46864405659950"
      aria-label="Radiant Roots Hair Oil"
    >
      


<slideshow-component
  
    ref="slideshow"
  
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4;"
  
  initial-slide="0"
  
  
    infinite
  

  data-generic-media-size="4"
>
  
  <slideshow-container ref="slideshowContainer">
    
      <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

    
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
    >
      <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41014150758702"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41014150758702"
>
  
  <img src="//mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=3840" alt="Radiant Roots Hair Oil" srcset="//mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=240 240w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=352 352w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=832 832w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/6.png?v=1736666187&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41015360225582"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41015360225582"
>
  
  <img src="//mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=3840" alt="Radiant Roots Hair Oil" srcset="//mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=240 240w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=352 352w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=832 832w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/try2.png?v=1736698907&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41015790895406"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41015790895406"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=3840" alt="Radiant Roots Hair Oil" srcset="//mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_2_b.png?v=1736698907&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-4; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41015790600494"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41015790600494"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=3840" alt="Radiant Roots Hair Oil" srcset="//mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_3.png?v=1736698894&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

    </a>
  
  
    <div
  class="product-badges product-badges--top-left"
  style="
    --badge-border-radius: 40px;
    --badge-font-family: var(--font-body--family); --badge-font-weight: var(--font-body--weight); --badge-text-transform: none;
  "
><div
      class="
        product-badges__badge product-badges__badge--rectangle
         color-scheme-4
      "
    >Sale
</div></div>



    
      

<quick-add-component
  class="quick-add color-scheme-1 "
  ref="quickAdd"
  data-product-title="Radiant Roots Hair Oil"
>
  <product-form-component
    data-section-id="template--25246412243246__product_list_X8Q7bi"
    data-product-id="8662951133486"
    on:submit="/handleSubmit"
    class="
      quick-add__product-form-component
       quick-add__product-form-component--single-option 
       quick-add__product-form-component--single-variant 
    "
  >
    <div
      class="visually-hidden"
      aria-live="assertive"
      role="status"
      aria-atomic="true"
      ref="liveRegion"
    ></div><form method="post" action="/cart/add" id="QuickAdd-ProductForm-8662951133486-ALzFMU21jZ0JtekNtZ__product_card_gallery_Gn6P7T-1" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
        type="hidden"
        name="id"
        ref="variantId"
        value="46864405659950"
        
      >
      <input
        type="hidden"
        name="quantity"
        value="1"
      >
      
<add-to-cart-component
  ref="addToCartButtonContainer"
  data-product-variant-media="//mudaura.com/cdn/shop/files/6.png?v=1736666187&width=100"
  data-add-to-cart-animation="true"
>
  <button
    id=""
    type="submit"
    name="add"
    ref="addToCartButton"
    on:click="/handleClick"
    class="button button quick-add__button quick-add__button--add"
    
  >
    <span
      class="add-to-cart-text"
    >
      
        <span class="svg-wrapper add-to-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M16.608 9.421V6.906H3.392v8.016c0 .567.224 1.112.624 1.513.4.402.941.627 1.506.627H8.63M8.818 3h2.333c.618 0 1.212.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.344c0-.622.246-1.218.683-1.658A2.33 2.33 0 0 1 8.82 3"/><path stroke="currentColor" stroke-linecap="round" stroke-width="var(--icon-stroke-width)" d="M14.608 12.563v5m2.5-2.5h-5"/></svg>
</span>
      
      <span class="add-to-cart-text__content is-visually-hidden-mobile">Add</span>
    </span>
    <span
      aria-hidden="true"
      class="add-to-cart-text--added"
    >
      <span class="svg-wrapper add-to-cart-icon--added"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-checkmark">
<path d="M4.75439 10.7485L7.68601 14.5888C7.79288 14.7288 7.84632 14.7988 7.91174 14.8242C7.96907 14.8466 8.03262 14.8469 8.09022 14.8253C8.15596 14.8007 8.21026 14.7314 8.31886 14.5927L15.2475 5.74658" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      <span class="is-visually-hidden-mobile">Added</span>
    </span>
  </button>
</add-to-cart-component>



<input type="hidden" name="product-id" value="8662951133486" /><input type="hidden" name="section-id" value="template--25246412243246__product_list_X8Q7bi" /></form></product-form-component>
</quick-add-component>



    
  

</div>





<div class="product-grid-view-zoom-out--details">
  
    <h3 class="h4">Radiant Roots Hair Oil</h3>
    <div class="h6">
      <product-price data-product-id="8662951133486">
        <div ref="priceContainer">
  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 460.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 399.00</span>
    </span>
  

  
</div>

      </product-price>
    </div>
  
</div>






<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 12px;--padding-block-end: 12px;--padding-inline-start: 12px;--padding-inline-end: 12px;
    --size-style-width: 100%;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 4px;

--horizontal-alignment: flex-start; --vertical-alignment: space-between;
--vertical-alignment-mobile: space-between;
"
  >
  



<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: 100%;--size-style-height: fit;
  --size-style-width-mobile:75%; --size-style-width-mobile-min:75%;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--row
       mobile-column
    "
    style="--flex-direction: row; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 8px;

--horizontal-alignment: space-between; --vertical-alignment: center;
--vertical-alignment-mobile: center;
"
  >
  


  
  <a
    class="contents user-select-text"
    ref="productTitleLink"
    href="
/products/hair-oil?variant=46864405659950"
  >
    





  <div 
  class=" spacing-style text-block text-block--AcG1ndHJCRXBBZzM2N__product_title_gtg38q-1 h5
    
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    
--color: var(--color-foreground);
    --width: fit-content;
    --max-width: var(--max-width--body-normal);
    
    
  "

  
>
    <p>Radiant Roots Hair Oil</p>
  </div>




  </a>






<product-price
  class="text-block text-block--align-left rte text-left paragraph spacing-style"
  data-block-id="ANUwrZEZ4Ry9UdU1Ib__price_Vz3EzL-1"
  data-product-id="8662951133486"
  style="
    
--color: var(--color-foreground);
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --width: 100%;
  "
  
>
  <div ref="priceContainer">
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 399.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 460.00</span>
    </span>
  
</div>


  
</product-price>







</div>
</div>









<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fit-content
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: fit-content;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: flex-start;
--vertical-alignment-mobile: flex-start;
"
  >
  













</div>
</div>






</div>
</div>







  </div>
</product-card></product-card-link>




            
          </div>

          
            <!--@list/split-->
          
        
          <div
            class="resource-list__item"
          >
            
              





<style data-shopify>
  
</style>


<product-card-link
    data-product-id="9037025247534"
    data-featured-media-url="//mudaura.com/cdn/shop/files/5.png?v=1736666226&width=500"
    data-product-transition="true"
    
  ><product-card
  class="product-card"
  data-product-id="9037025247534"
  data-product-variants-size="1"
  id="product-card-AOGpvSlpyazVjdzIzR__static-product-card-2"
  data-product-transition="true"
  
  
  
>
  <a
    id="08f3e98171fefb6d491dbaf2696ad6fe"
    
      href="/products/charcoal-and-herbal-toothpowder?variant=47917202702638"
    
    class="product-card__link"
    ref="productCardLink"
  >
    <span class="visually-hidden">
      Charcoal and Herbal Toothpowder
    </span>
  </a>
  <div
    class="
      product-card__content
      layout-panel-flex
      layout-panel-flex--column
      product-grid__card
      spacing-style
      border-style
      gap-style
       color-scheme-2
    "
    style="
      --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

      --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;



--horizontal-alignment: ; --vertical-alignment: ;
--vertical-alignment-mobile: ;

      --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      --product-card-gap: 0px;
      --quick-add-display: flex;
      --quick-add-mobile-display: none;
      
      
      
      
    "
  >
    
  







<div
  ref="cardGallery"
  class="card-gallery card-gallery-ALzFMU21jZ0JtekNtZ__product_card_gallery_Gn6P7T-2 spacing-style border-style"
  style="
    --border-width: 0px; --border-style: solid; --border-color:
rgb(var(--color-border-rgb) / 0.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --gallery-aspect-ratio: 1;
  "
  data-product-id="9037025247534"
  
    on:pointerenter="/previewImage"
    on:pointerleave="/resetImage"
  
  
    data-view-transition-to-main-product
  
  data-image-ratio="square"
  
>
    <a
      class="contents"
      ref="cardGalleryLink"
      href="
/products/charcoal-and-herbal-toothpowder?variant=47917202702638"
      aria-label="Charcoal and Herbal Toothpowder"
    >
      


<slideshow-component
  
    ref="slideshow"
  
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4;"
  
  initial-slide="0"
  
  
    infinite
  

  data-generic-media-size="4"
>
  
  <slideshow-container ref="slideshowContainer">
    
      <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

    
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
    >
      <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41014154363182"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41014154363182"
>
  
  <img src="//mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=3840" alt="Charcoal and Herbal Toothpowder" srcset="//mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=240 240w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=352 352w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=832 832w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/5.png?v=1736666226&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41016492720430"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41016492720430"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=3840" alt="Charcoal and Herbal Toothpowder" srcset="//mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_1_b.png?v=1736709080&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41021046522158"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.4981711777615216"
  data-media-id="41021046522158"
>
  
  <img src="//mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=3840" alt="Charcoal and Herbal Toothpowder" srcset="//mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=240 240w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=352 352w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=832 832w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=3840 3840w" width="3840" height="2563" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/sli.png?v=1736765186&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-4; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41016523227438"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41016523227438"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=3840" alt="Charcoal and Herbal Toothpowder" srcset="//mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_3_977cda2b-ddb6-4f0d-aaf6-844ba291e64d.png?v=1736765186&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

    </a>
  
  
    <div
  class="product-badges product-badges--top-left"
  style="
    --badge-border-radius: 40px;
    --badge-font-family: var(--font-body--family); --badge-font-weight: var(--font-body--weight); --badge-text-transform: none;
  "
><div
      class="
        product-badges__badge product-badges__badge--rectangle
         color-scheme-4
      "
    >Sale
</div></div>



    
      

<quick-add-component
  class="quick-add color-scheme-1 "
  ref="quickAdd"
  data-product-title="Charcoal and Herbal Toothpowder"
>
  <product-form-component
    data-section-id="template--25246412243246__product_list_X8Q7bi"
    data-product-id="9037025247534"
    on:submit="/handleSubmit"
    class="
      quick-add__product-form-component
       quick-add__product-form-component--single-option 
       quick-add__product-form-component--single-variant 
    "
  >
    <div
      class="visually-hidden"
      aria-live="assertive"
      role="status"
      aria-atomic="true"
      ref="liveRegion"
    ></div><form method="post" action="/cart/add" id="QuickAdd-ProductForm-9037025247534-ALzFMU21jZ0JtekNtZ__product_card_gallery_Gn6P7T-2" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
        type="hidden"
        name="id"
        ref="variantId"
        value="47917202702638"
        
      >
      <input
        type="hidden"
        name="quantity"
        value="1"
      >
      
<add-to-cart-component
  ref="addToCartButtonContainer"
  data-product-variant-media="//mudaura.com/cdn/shop/files/5.png?v=1736666226&width=100"
  data-add-to-cart-animation="true"
>
  <button
    id=""
    type="submit"
    name="add"
    ref="addToCartButton"
    on:click="/handleClick"
    class="button button quick-add__button quick-add__button--add"
    
  >
    <span
      class="add-to-cart-text"
    >
      
        <span class="svg-wrapper add-to-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M16.608 9.421V6.906H3.392v8.016c0 .567.224 1.112.624 1.513.4.402.941.627 1.506.627H8.63M8.818 3h2.333c.618 0 1.212.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.344c0-.622.246-1.218.683-1.658A2.33 2.33 0 0 1 8.82 3"/><path stroke="currentColor" stroke-linecap="round" stroke-width="var(--icon-stroke-width)" d="M14.608 12.563v5m2.5-2.5h-5"/></svg>
</span>
      
      <span class="add-to-cart-text__content is-visually-hidden-mobile">Add</span>
    </span>
    <span
      aria-hidden="true"
      class="add-to-cart-text--added"
    >
      <span class="svg-wrapper add-to-cart-icon--added"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-checkmark">
<path d="M4.75439 10.7485L7.68601 14.5888C7.79288 14.7288 7.84632 14.7988 7.91174 14.8242C7.96907 14.8466 8.03262 14.8469 8.09022 14.8253C8.15596 14.8007 8.21026 14.7314 8.31886 14.5927L15.2475 5.74658" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      <span class="is-visually-hidden-mobile">Added</span>
    </span>
  </button>
</add-to-cart-component>



<input type="hidden" name="product-id" value="9037025247534" /><input type="hidden" name="section-id" value="template--25246412243246__product_list_X8Q7bi" /></form></product-form-component>
</quick-add-component>



    
  

</div>





<div class="product-grid-view-zoom-out--details">
  
    <h3 class="h4">Charcoal and Herbal Toothpowder</h3>
    <div class="h6">
      <product-price data-product-id="9037025247534">
        <div ref="priceContainer">
  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 479.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 399.00</span>
    </span>
  

  
</div>

      </product-price>
    </div>
  
</div>






<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 12px;--padding-block-end: 12px;--padding-inline-start: 12px;--padding-inline-end: 12px;
    --size-style-width: 100%;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 4px;

--horizontal-alignment: flex-start; --vertical-alignment: space-between;
--vertical-alignment-mobile: space-between;
"
  >
  



<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: 100%;--size-style-height: fit;
  --size-style-width-mobile:75%; --size-style-width-mobile-min:75%;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--row
       mobile-column
    "
    style="--flex-direction: row; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 8px;

--horizontal-alignment: space-between; --vertical-alignment: center;
--vertical-alignment-mobile: center;
"
  >
  


  
  <a
    class="contents user-select-text"
    ref="productTitleLink"
    href="
/products/charcoal-and-herbal-toothpowder?variant=47917202702638"
  >
    





  <div 
  class=" spacing-style text-block text-block--AcG1ndHJCRXBBZzM2N__product_title_gtg38q-2 h5
    
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    
--color: var(--color-foreground);
    --width: fit-content;
    --max-width: var(--max-width--body-normal);
    
    
  "

  
>
    <p>Charcoal and Herbal Toothpowder</p>
  </div>




  </a>






<product-price
  class="text-block text-block--align-left rte text-left paragraph spacing-style"
  data-block-id="ANUwrZEZ4Ry9UdU1Ib__price_Vz3EzL-2"
  data-product-id="9037025247534"
  style="
    
--color: var(--color-foreground);
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --width: 100%;
  "
  
>
  <div ref="priceContainer">
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 399.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 479.00</span>
    </span>
  
</div>


  
</product-price>







</div>
</div>









<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fit-content
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: fit-content;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: flex-start;
--vertical-alignment-mobile: flex-start;
"
  >
  













</div>
</div>






</div>
</div>







  </div>
</product-card></product-card-link>




            
          </div>

          
            <!--@list/split-->
          
        
          <div
            class="resource-list__item"
          >
            
              





<style data-shopify>
  
</style>


<product-card-link
    data-product-id="9037021577518"
    data-featured-media-url="//mudaura.com/cdn/shop/files/2.png?v=1736666271&width=500"
    data-product-transition="true"
    
  ><product-card
  class="product-card"
  data-product-id="9037021577518"
  data-product-variants-size="1"
  id="product-card-AOGpvSlpyazVjdzIzR__static-product-card-3"
  data-product-transition="true"
  
  
  
>
  <a
    id="bdebc067bcb41a9330090e3b73d08144"
    
      href="/products/amla-and-bhringraj-shampoo?variant=47917189267758"
    
    class="product-card__link"
    ref="productCardLink"
  >
    <span class="visually-hidden">
      Amla and Bhringraj Shampoo
    </span>
  </a>
  <div
    class="
      product-card__content
      layout-panel-flex
      layout-panel-flex--column
      product-grid__card
      spacing-style
      border-style
      gap-style
       color-scheme-2
    "
    style="
      --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

      --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;



--horizontal-alignment: ; --vertical-alignment: ;
--vertical-alignment-mobile: ;

      --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      --product-card-gap: 0px;
      --quick-add-display: flex;
      --quick-add-mobile-display: none;
      
      
      
      
    "
  >
    
  







<div
  ref="cardGallery"
  class="card-gallery card-gallery-ALzFMU21jZ0JtekNtZ__product_card_gallery_Gn6P7T-3 spacing-style border-style"
  style="
    --border-width: 0px; --border-style: solid; --border-color:
rgb(var(--color-border-rgb) / 0.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --gallery-aspect-ratio: 1;
  "
  data-product-id="9037021577518"
  
    on:pointerenter="/previewImage"
    on:pointerleave="/resetImage"
  
  
    data-view-transition-to-main-product
  
  data-image-ratio="square"
  
>
    <a
      class="contents"
      ref="cardGalleryLink"
      href="
/products/amla-and-bhringraj-shampoo?variant=47917189267758"
      aria-label="Amla and Bhringraj Shampoo"
    >
      


<slideshow-component
  
    ref="slideshow"
  
  
  style="--slideshow-timeline: --slide-1, --slide-2, --slide-3, --slide-4;"
  
  initial-slide="0"
  
  
    infinite
  

  data-generic-media-size="4"
>
  
  <slideshow-container ref="slideshowContainer">
    
      <slideshow-arrows
  position="center"
  
><button
  class="
    slideshow-control slideshow-control--previous
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
     flip-x
  "
  
  aria-label="Previous slide"
  
  on:click="/previous"
  ref="previous"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
<button
  class="
    slideshow-control slideshow-control--next
    
    
    slideshow-control--style-arrow
    button button-unstyled button-unstyled--transparent
    
  "
  
  aria-label="Next slide"
  
  on:click="/next"
  ref="next"
>
  <span class="svg-wrapper icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" vector-effect="non-scaling-stroke" d="M4.25 10h11.5m0 0-4-4m4 4-4 4"/></svg>
</span>
</button>
</slideshow-arrows>

    
    
    <slideshow-slides
      tabindex="-1"
      ref="scroller"
      
      
    >
      <slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-1; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41014155903278"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41014155903278"
>
  
  <img src="//mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=3840" alt="Amla and Bhringraj Shampoo" srcset="//mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=240 240w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=352 352w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=832 832w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/2.png?v=1736666271&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-2; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41015953981742"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41015953981742"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=3840" alt="Amla and Bhringraj Shampoo" srcset="//mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_1_re.png?v=1736701856&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-3; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41016249680174"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.5165876777251184"
  data-media-id="41016249680174"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=3840" alt="Amla and Bhringraj Shampoo" srcset="//mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=3840 3840w" width="3840" height="2532" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_2c.png?v=1736705818&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>
<slideshow-slide
  ref="slides[]"
  aria-hidden="true"
  style="view-timeline-name: --slide-4; --product-media-fit: cover;"
  
    class="product-media-container media-fit product-media-container--image"
  
  
  
  
    slide-id="41016230576430"
  
  
  
>
  

<div
  class="product-media"
  style="--ratio: 1.0"
  data-media-id="41016230576430"
>
  
  <img src="//mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=3840" alt="Amla and Bhringraj Shampoo" srcset="//mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=240 240w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=352 352w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=832 832w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=3840 3840w" width="3840" height="3840" loading="lazy" sizes="auto, (min-width: 750px) 25.0vw, 100vw" class="product-media__image" transitionToProduct="true" data_max_resolution="//mudaura.com/cdn/shop/files/slide_2_0f1c9ad2-d2c3-4749-9394-6e87e6a0e033.png?v=1736705818&amp;width=3840" fetchpriority="auto" style="--focal-point: 50.0% 50.0%;">

  
</div>



</slideshow-slide>

    </slideshow-slides>
  </slideshow-container>
  
</slideshow-component>

    </a>
  
  
    <div
  class="product-badges product-badges--top-left"
  style="
    --badge-border-radius: 40px;
    --badge-font-family: var(--font-body--family); --badge-font-weight: var(--font-body--weight); --badge-text-transform: none;
  "
><div
      class="
        product-badges__badge product-badges__badge--rectangle
         color-scheme-4
      "
    >Sale
</div></div>



    
      

<quick-add-component
  class="quick-add color-scheme-1 "
  ref="quickAdd"
  data-product-title="Amla and Bhringraj Shampoo"
>
  <product-form-component
    data-section-id="template--25246412243246__product_list_X8Q7bi"
    data-product-id="9037021577518"
    on:submit="/handleSubmit"
    class="
      quick-add__product-form-component
       quick-add__product-form-component--single-option 
       quick-add__product-form-component--single-variant 
    "
  >
    <div
      class="visually-hidden"
      aria-live="assertive"
      role="status"
      aria-atomic="true"
      ref="liveRegion"
    ></div><form method="post" action="/cart/add" id="QuickAdd-ProductForm-9037021577518-ALzFMU21jZ0JtekNtZ__product_card_gallery_Gn6P7T-3" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
        type="hidden"
        name="id"
        ref="variantId"
        value="47917189267758"
        
      >
      <input
        type="hidden"
        name="quantity"
        value="1"
      >
      
<add-to-cart-component
  ref="addToCartButtonContainer"
  data-product-variant-media="//mudaura.com/cdn/shop/files/2.png?v=1736666271&width=100"
  data-add-to-cart-animation="true"
>
  <button
    id=""
    type="submit"
    name="add"
    ref="addToCartButton"
    on:click="/handleClick"
    class="button button quick-add__button quick-add__button--add"
    
  >
    <span
      class="add-to-cart-text"
    >
      
        <span class="svg-wrapper add-to-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M16.608 9.421V6.906H3.392v8.016c0 .567.224 1.112.624 1.513.4.402.941.627 1.506.627H8.63M8.818 3h2.333c.618 0 1.212.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.344c0-.622.246-1.218.683-1.658A2.33 2.33 0 0 1 8.82 3"/><path stroke="currentColor" stroke-linecap="round" stroke-width="var(--icon-stroke-width)" d="M14.608 12.563v5m2.5-2.5h-5"/></svg>
</span>
      
      <span class="add-to-cart-text__content is-visually-hidden-mobile">Add</span>
    </span>
    <span
      aria-hidden="true"
      class="add-to-cart-text--added"
    >
      <span class="svg-wrapper add-to-cart-icon--added"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-checkmark">
<path d="M4.75439 10.7485L7.68601 14.5888C7.79288 14.7288 7.84632 14.7988 7.91174 14.8242C7.96907 14.8466 8.03262 14.8469 8.09022 14.8253C8.15596 14.8007 8.21026 14.7314 8.31886 14.5927L15.2475 5.74658" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
      <span class="is-visually-hidden-mobile">Added</span>
    </span>
  </button>
</add-to-cart-component>



<input type="hidden" name="product-id" value="9037021577518" /><input type="hidden" name="section-id" value="template--25246412243246__product_list_X8Q7bi" /></form></product-form-component>
</quick-add-component>



    
  

</div>





<div class="product-grid-view-zoom-out--details">
  
    <h3 class="h4">Amla and Bhringraj Shampoo</h3>
    <div class="h6">
      <product-price data-product-id="9037021577518">
        <div ref="priceContainer">
  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 499.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 395.00</span>
    </span>
  

  
</div>

      </product-price>
    </div>
  
</div>






<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 12px;--padding-block-end: 12px;--padding-inline-start: 12px;--padding-inline-end: 12px;
    --size-style-width: 100%;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 4px;

--horizontal-alignment: flex-start; --vertical-alignment: space-between;
--vertical-alignment-mobile: space-between;
"
  >
  



<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: 100%;--size-style-height: fit;
  --size-style-width-mobile:75%; --size-style-width-mobile-min:75%;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--row
       mobile-column
    "
    style="--flex-direction: row; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 8px;

--horizontal-alignment: space-between; --vertical-alignment: center;
--vertical-alignment-mobile: center;
"
  >
  


  
  <a
    class="contents user-select-text"
    ref="productTitleLink"
    href="
/products/amla-and-bhringraj-shampoo?variant=47917189267758"
  >
    





  <div 
  class=" spacing-style text-block text-block--AcG1ndHJCRXBBZzM2N__product_title_gtg38q-3 h5
    
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    
--color: var(--color-foreground);
    --width: fit-content;
    --max-width: var(--max-width--body-normal);
    
    
  "

  
>
    <p>Amla and Bhringraj Shampoo</p>
  </div>




  </a>






<product-price
  class="text-block text-block--align-left rte text-left paragraph spacing-style"
  data-block-id="ANUwrZEZ4Ry9UdU1Ib__price_Vz3EzL-3"
  data-product-id="9037021577518"
  style="
    
--color: var(--color-foreground);
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --width: 100%;
  "
  
>
  <div ref="priceContainer">
  

  
    <span role="group">
      <span class="visually-hidden">Sale price&nbsp;</span>
      <span class="price">Rs. 395.00</span>
    </span>
  

  
    <span role="group">
      <span class="visually-hidden">Regular price&nbsp;</span>
      <span class="compare-at-price">Rs. 499.00</span>
    </span>
  
</div>


  
</product-price>







</div>
</div>









<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fit-content
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: fit-content;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--column
       mobile-column
    "
    style="--flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: flex-start;
--vertical-alignment-mobile: flex-start;
"
  >
  













</div>
</div>






</div>
</div>







  </div>
</product-card></product-card-link>




            
          </div>

          
        
      
    
  

    
</div>





  <div
    class="section-resource-list__content"
    style="--horizontal-alignment: flex-start;"
  ></div>
</div>


</div><div id="shopify-section-template--25246412243246__175987527132430ff8" class="shopify-section section-wrapper">



<div class="section-background color-scheme-fe653a3d-86aa-46c7-9436-b8cf6c5a68d6"></div>
<div
  class="section section--full-width color-scheme-fe653a3d-86aa-46c7-9436-b8cf6c5a68d6"
  data-testid="ui-test-section"

  

  style="
    

    
  "
>
  <div class="custom-section-background">
    

  </div>

  <div
    class="border-style custom-section-content"
    style="--border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 
"
  >
    

    <div
      class="
        spacing-style
        layout-panel-flex
        layout-panel-flex--column
        section-content-wrapper
         mobile-column
      "
      style="
        --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: center; --vertical-alignment: center;
--vertical-alignment-mobile: center;

        --padding-block-start: 0px;--padding-block-end: max(20px, calc(var(--spacing-scale) * 48px));
      "
      data-testid="section-content"
    >
      
  


<style data-shopify>
  .ai-blog-section-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    padding: 40px 0 0px;
    background-color: #ffffff;
  }

  .ai-blog-container-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .ai-blog-header-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    text-align: center;
    margin-bottom: 60px;
  }

  .ai-blog-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 42px;
    color: #1f282f;
    margin: 0 0 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .ai-blog-subtitle-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    font-family: Inter, sans-serif;
    font-size: 16px;
    color: #000000;
    margin: 0;
    max-width: 600px;
    margin: 0 auto;
  }

  .ai-blog-grid-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    display: grid;
    gap: 30px;
    grid-template-columns: 1fr;
  }

  @media (min-width: 768px) {
    .ai-blog-grid-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      grid-template-columns: repeat(3, 1fr);
      align-items: stretch;
    }
  }

  .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    position: relative;
    overflow: hidden;
    border-radius: 0px;
    background-color: #ffffff;
    display: flex;
    flex-direction: column;
    height: 300px;
  }

  @media (min-width: 768px) {
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      height: 560px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child {
      height: 560px;
    }
  }

  .ai-blog-card-image-wrapper-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    position: relative;
    overflow: hidden;
    border-radius: 0px 0px 0 0;
    height: 300px;
  }

  @media (min-width: 768px) {
    .ai-blog-card-image-wrapper-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      height: 400px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-image-wrapper-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      position: relative;
      height: 100%;
      border-radius: 0px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-content-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 30px;
      background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
      color: white;
    }
  }

  .ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
    transform: scale(1);
  }

  .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:hover .ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    transform: scale(1.1);
  }

  .ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga.ai-scroll-scaled-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    transform: scale(1.05);
  }

  .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:hover .ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga.ai-scroll-scaled-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    transform: scale(1.15);
  }

  .ai-blog-card-content-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    padding: 20px;
    color: #000000;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .ai-blog-card-date-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    font-family: Inter, sans-serif;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 8px;
    opacity: 0.8;
  }

  .ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    font-family: "Barlow Condensed", sans-serif;
    font-weight: 600;
    font-size: 18px;
    margin: 0 0 12px;
    line-height: 1.2;
    text-transform: uppercase;
  }

  .ai-blog-card-excerpt-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    font-family: Inter, sans-serif;
    font-size: 14px;
    line-height: 1.5;
    margin: 0 0 16px;
    opacity: 0.9;
    flex: 1;
  }

  .ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    font-family: Inter, sans-serif;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #000000;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
    margin-top: auto;
  }

  .ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:hover {
    color: #000000;
  }

  @media (min-width: 768px) {
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-date-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga,
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga,
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-excerpt-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga,
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      color: white;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      font-size: 28px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:hover {
      color: #000000;
    }
  }

  .ai-blog-placeholder-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
    background-color: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
  }

  .ai-blog-placeholder-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga svg {
    width: 80px;
    height: 80px;
    opacity: 0.3;
  }

  @media (max-width: 767px) {
    .ai-blog-grid-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      gap: 20px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child {
      height: 420px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-image-wrapper-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      height: 420px;
      border-radius: 0px 0px 0 0;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:not(:first-child) {
      display: flex;
      flex-direction: row;
      gap: 15px;
      align-items: flex-start;
      height: auto;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:not(:first-child) .ai-blog-card-image-wrapper-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      width: 120px;
      height: 120px;
      flex-shrink: 0;
      border-radius: 0px 0 0 0px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:not(:first-child) .ai-blog-card-content-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      flex: 1;
      padding: 0;
    }

    .ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      font-size: 16.2px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      font-size: 22.4px;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-content-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 20px;
      background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
      color: white;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-date-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga,
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga,
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-excerpt-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga,
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      color: white;
    }

    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:first-child .ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:hover {
      color: #000000;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      transition: none;
    }
    
    .ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga:hover .ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga {
      transform: none;
    }
  }
</style>

<blog-section-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga class="ai-blog-section-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga" >
  <div class="ai-blog-container-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
    
      <div class="ai-blog-header-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
        
          <h2 class="ai-blog-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">Mudaura Chronicles</h2>
        
        
      </div>
    

    <div class="ai-blog-grid-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
      
        
        
          <article class="ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
            <div class="ai-blog-card-image-wrapper-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
              
                <img
                  src="//mudaura.com/cdn/shop/articles/5_1_1_a8be85a1-f210-4f48-a575-955180febdf1.jpg?v=1760034614&width=800"
                  alt="Are Multani Mitti Soaps Better Than Regular Soaps?"
                  class="ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga"
                  loading="lazy"
                  width="5888"
                  height="2816"
                >
              
            </div>
            
            <div class="ai-blog-card-content-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
              <time class="ai-blog-card-date-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga" datetime="2024-03-17">
                March 17, 2024
              </time>
              
              <h3 class="ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                <a href="/blogs/news/are-multani-mitti-soaps-better-than-regular-soaps-debunking-the-myths" class="ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                  Are Multani Mitti Soaps Better Than Regular Soaps?
                </a>
              </h3>
              
              
              
              <a href="/blogs/news/are-multani-mitti-soaps-better-than-regular-soaps-debunking-the-myths" class="ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                Read More
              </a>
            </div>
          </article>
        
          <article class="ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
            <div class="ai-blog-card-image-wrapper-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
              
                <img
                  src="//mudaura.com/cdn/shop/articles/wmremove-transformed_2.png?v=1760449592&width=800"
                  alt="Why Oiling Your Hair is Vital for Healthy hair"
                  class="ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga"
                  loading="lazy"
                  width="1676"
                  height="1123"
                >
              
            </div>
            
            <div class="ai-blog-card-content-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
              <time class="ai-blog-card-date-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga" datetime="2024-03-17">
                March 17, 2024
              </time>
              
              <h3 class="ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                <a href="/blogs/news/why-oiling-your-hair-is-vital-for-healthy-hair" class="ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                  Why Oiling Your Hair is Vital for Healthy hair
                </a>
              </h3>
              
              
              
              <a href="/blogs/news/why-oiling-your-hair-is-vital-for-healthy-hair" class="ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                Read More
              </a>
            </div>
          </article>
        
          <article class="ai-blog-card-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
            <div class="ai-blog-card-image-wrapper-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
              
                <img
                  src="//mudaura.com/cdn/shop/articles/tootg.jpg?v=1760449691&width=800"
                  alt="Why Our Ancestors Used Toothpowder"
                  class="ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga"
                  loading="lazy"
                  width="1024"
                  height="1024"
                >
              
            </div>
            
            <div class="ai-blog-card-content-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
              <time class="ai-blog-card-date-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga" datetime="2024-03-14">
                March 14, 2024
              </time>
              
              <h3 class="ai-blog-card-title-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                <a href="/blogs/news/why-our-ancestors-used-toothpowder" class="ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                  Why Our Ancestors Used Toothpowder
                </a>
              </h3>
              
              
              
              <a href="/blogs/news/why-our-ancestors-used-toothpowder" class="ai-blog-card-link-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga">
                Read More
              </a>
            </div>
          </article>
        
      
    </div>
  </div>
</blog-section-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga>

<script>
  (function() {
    class BlogSectionaakncafh5nmtgumzwvaigenblock07d90a7bl9nga extends HTMLElement {
      constructor() {
        super();
        this.setupScrollObserver();
      }

      setupScrollObserver() {
        if ('IntersectionObserver' in window) {
          const images = this.querySelectorAll('.ai-blog-card-image-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga');
          
          const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('ai-scroll-scaled-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga');
              } else {
                entry.target.classList.remove('ai-scroll-scaled-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga');
              }
            });
          }, {
            threshold: 0.1,
            rootMargin: '0px 0px -10% 0px'
          });

          images.forEach(img => {
            imageObserver.observe(img);
          });
        }
      }
    }

    customElements.define('blog-section-aakncafh5nmtgumzwvaigenblock07d90a7bl9nga', BlogSectionaakncafh5nmtgumzwvaigenblock07d90a7bl9nga);
  })();
</script>



    </div>
  </div>
</div>





</div><div id="shopify-section-template--25246412243246__17598711482281556b" class="shopify-section section-wrapper">



<div class="section-background color-scheme-1"></div>
<div
  class="section section--full-width color-scheme-1"
  data-testid="ui-test-section"

  

  style="
    

    
  "
>
  <div class="custom-section-background">
    

  </div>

  <div
    class="border-style custom-section-content"
    style="--border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 
"
  >
    

    <div
      class="
        spacing-style
        layout-panel-flex
        layout-panel-flex--column
        section-content-wrapper
         mobile-column
      "
      style="
        --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 0px;

--horizontal-alignment: center; --vertical-alignment: center;
--vertical-alignment-mobile: center;

        --padding-block-start: 0px;--padding-block-end: 20px;
      "
      data-testid="section-content"
    >
      
  







  <rte-formatter 
  class=" spacing-style text-block text-block--AbXFPcUZDVGw1b1ZrS__text_FfhLD9 rte
    text-block--align-center rte 
  "

  style="
    --padding-block-start: 40px; --padding-block-end:40px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: 100%;
    --max-width: var(--max-width--body-normal);
    
      --text-align: center;
    
    
  "

  
>
    <h2>FEEL THE ESSENCE</h2>
  </rte-formatter>









<style data-shopify>
  .ai-marquee-container-arthhnkpgstffueldaaigenblock89affaam7ixxi {
    width: 100%;
    overflow: hidden;
    position: relative;
    background-color: #ffffff;
    padding-top: 5px;
    padding-bottom: 10px;
  }

  .ai-marquee-track-arthhnkpgstffueldaaigenblock89affaam7ixxi {
    display: flex;
    align-items: center;
    gap: 20px;
    animation: ai-marquee-scroll-arthhnkpgstffueldaaigenblock89affaam7ixxi 120s linear infinite;
    width: max-content;
  }

  .ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi {
    flex-shrink: 0;
    width: 400px;
    height: 420px;
    position: relative;
    border-radius: 0px;
    overflow: hidden;
  }

  .ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 0px;
  }

  .ai-marquee-placeholder-arthhnkpgstffueldaaigenblock89affaam7ixxi {
    width: 100%;
    height: 100%;
    background-color: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0px;
    position: relative;
  }

  .ai-marquee-placeholder-arthhnkpgstffueldaaigenblock89affaam7ixxi svg {
    width: 60%;
    height: 60%;
    opacity: 0.3;
  }

  .ai-marquee-empty-state-arthhnkpgstffueldaaigenblock89affaam7ixxi {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 12px;
    color: #666;
    text-align: center;
    pointer-events: none;
    white-space: nowrap;
  }

  @keyframes ai-marquee-scroll-arthhnkpgstffueldaaigenblock89affaam7ixxi {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  
    .ai-marquee-track-arthhnkpgstffueldaaigenblock89affaam7ixxi:hover {
      animation-play-state: paused;
    }
  

  @media screen and (max-width: 749px) {
    .ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi {
      width: 300px;
      height: 340px;
    }

    .ai-marquee-track-arthhnkpgstffueldaaigenblock89affaam7ixxi {
      gap: 10px;
    }
  }
</style>

<div
  class="ai-marquee-container-arthhnkpgstffueldaaigenblock89affaam7ixxi"
  
>
  <div class="ai-marquee-track-arthhnkpgstffueldaaigenblock89affaam7ixxi">
    

    
      
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/tootg.jpg?v=1760449685&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-14_at_23.27.02.jpg?v=1760464660&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-14_at_23.26.38.jpg?v=1760464668&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/slideshow.jpg?v=1736687131&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/Screenshot_2024-12-25_at_7.38.40_PM.png?v=1735135825&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/Screenshot_2024-12-25_at_7.38.17_PM.png?v=1735135788&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/Screenshot_2024-12-25_at_7.33.28_PM.png?v=1735135516&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/Screenshot_2024-12-25_at_7.33.03_PM_37868419-b966-40ef-9889-e9f2f706744b.png?v=1735135481&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
      
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/tootg.jpg?v=1760449685&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-14_at_23.27.02.jpg?v=1760464660&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-14_at_23.26.38.jpg?v=1760464668&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/slideshow.jpg?v=1736687131&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/Screenshot_2024-12-25_at_7.38.40_PM.png?v=1735135825&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/Screenshot_2024-12-25_at_7.38.17_PM.png?v=1735135788&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/WhatsApp_Image_2025-10-11_at_16.34.02.jpg?v=1760180673&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/Screenshot_2024-12-25_at_7.33.28_PM.png?v=1735135516&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
          
          
          
            <div class="ai-marquee-item-arthhnkpgstffueldaaigenblock89affaam7ixxi">
              <img
                src="//mudaura.com/cdn/shop/files/Screenshot_2024-12-25_at_7.33.03_PM_37868419-b966-40ef-9889-e9f2f706744b.png?v=1735135481&width=2000"
                alt=""
                loading="lazy"
                width="400"
                height="420"
              >
            </div>
          
        
      
    
  </div>
</div>

<div id="shopify-block-Aa2U0dkZhbG14M3RYZ__ai_gen_block_af141c5_QQrU4L" class="shopify-block">


<style data-shopify>
  .ai-follow-button-container-aa2u0dkzhbg14m3ryzaigenblockaf141c5qqru4l {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 20px;
  }

  .ai-follow-button-aa2u0dkzhbg14m3ryzaigenblockaf141c5qqru4l {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 16px 24.0px;
    background-color: #ffffff;
    color: #000000;
    border: 1px solid #000000;
    border-radius: 0px;
    font-size: 12px;
    font-weight: 400;
    text-decoration: none;
    text-transform: none;
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .ai-follow-button-aa2u0dkzhbg14m3ryzaigenblockaf141c5qqru4l:hover {
    background-color: #000000;
    color: #ffffff;
    border-color: #000000;
    transform: translateY(-2px);
  }

  .ai-follow-button-aa2u0dkzhbg14m3ryzaigenblockaf141c5qqru4l:focus {
    outline: 2px solid #000000;
    outline-offset: 2px;
  }
</style>

<div class="ai-follow-button-container-aa2u0dkzhbg14m3ryzaigenblockaf141c5qqru4l" >
  <a href="https://www.instagram.com/mudaura/" class="ai-follow-button-aa2u0dkzhbg14m3ryzaigenblockaf141c5qqru4l">
    FOLLOW US ON INSTAGRAM @MUDAURA
  </a>
</div>

</div>


    </div>
  </div>
</div>





</div>
    </main>

    <!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--25246412374318__section_XxJMft" class="shopify-section shopify-section-group-footer-group section-wrapper">



<div class="section-background color-scheme-2"></div>
<div
  class="section section--page-width color-scheme-2"
  data-testid="ui-test-section"

  

  style="
    

    
  "
>
  <div class="custom-section-background">
    

  </div>

  <div
    class="border-style custom-section-content"
    style="--border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 
"
  >
    

    <div
      class="
        spacing-style
        layout-panel-flex
        layout-panel-flex--column
        section-content-wrapper
         mobile-column
      "
      style="
        --flex-direction: column; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 16px;

--horizontal-alignment: center; --vertical-alignment: center;
--vertical-alignment-mobile: center;

        --padding-block-start: max(20px, calc(var(--spacing-scale) * 40px));--padding-block-end: max(20px, calc(var(--spacing-scale) * 40px));
      "
      data-testid="section-content"
    >
      
  







  <rte-formatter 
  class=" spacing-style text-block text-block--AMGQ1bE5iTXc0M3hJZ__text_WjDWnU rte
    text-block--align-center rte 
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    

    --width: 100%;
    --max-width: var(--max-width--body-normal);
    
      --text-align: center;
    
    
  "

  
>
    <h2>Subscribe to our emails</h2>
  </rte-formatter>














  <rte-formatter 
  class=" spacing-style text-block text-block--AY2VSMFY2MFk1YzY2c__text_hUnaHX paragraph
    text-block--align-center rte 
  "

  style="
    --padding-block-start: 0px; --padding-block-end:0px; 
--padding-inline-start:0px; --padding-inline-end:0px; 

    
--color: var(--color-foreground);
    --width: 100%;
    --max-width: var(--max-width--body-normal);
    
      --text-align: center;
    
    
  "

  
>
    <p>Be the first to know about new collections and special offers. </p>
  </rte-formatter>









<email-signup-block
  class="email-signup-block size-style spacing-style"
  style="--size-style-width:50%;--size-style-height: ;--padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;"
  
>
  
<form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="email-signup__form spacing-style"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" />
    <div
      class="email-signup__input-group "
      style="--border-width: 1px; --border-radius: 100px;"
    >
      <label
        for="EmailInput-AbFBIRjh4aTYzTmprV__email_signup_yH3rE7"
        class="visually-hidden"
      >
        Email
      </label>
      <input
        id="EmailInput-AbFBIRjh4aTYzTmprV__email_signup_yH3rE7"
        class="email-signup__input email-signup__input--all paragraph "
        type="email"
        name="contact[email]"
        autocorrect="off"
        autocapitalize="off"
        autocomplete="email"
        placeholder="Email address"
        required
        
      >
      <button
        class="email-signup__button email-signup__button--integrated email-signup__button--arrow paragraph button-unstyled button-unstyled--AbFBIRjh4aTYzTmprV__email_signup_yH3rE7 "
        
          aria-label="Sign up"
        
      >
        
          <svg
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
            focusable="false"
            aria-hidden="true"
            class="email-signup__button-icon"
          >
            
<path
      clip-rule="evenodd"
      d="m11.246 5.31759c.0322-.07821.0833-.14723.1486-.20093.0654-.0537.143-.09041.2259-.10686.083-.01645.1688-.01214.2497.01257.0808.0247.1544.06902.214.12902l4.104 4.104c.0478.04765.0857.10426.1115.16659.0259.06232.0392.12913.0392.19661 0 .06747-.0133.13429-.0392.19661-.0258.06233-.0637.11893-.1115.16659l-4.104 4.10401c-.0963.0963-.227.1504-.3632.1504s-.2669-.0541-.3632-.1504-.1504-.227-.1504-.3632.0541-.2669.1504-.3632l3.2288-3.2278h-11.0736c-.13606 0-.26654-.0541-.36275-.15027-.0962-.0962-.15025-.22669-.15025-.36274 0-.13606.05405-.26654.15025-.36275.09621-.0962.22669-.15025.36275-.15025h11.0736l-3.2288-3.2278c-.0721-.07178-.1212-.16335-.1411-.2631s-.0097-.20316.0293-.2971z"
      fill="currentColor"
      fill-rule="evenodd"
    />
          </svg>
        
      </button>
    </div></form>

  <script
    src="//mudaura.com/cdn/shop/t/33/assets/email-signup.js?v=11926998321451148611759323088"
    defer
  ></script>
</email-signup-block>






    </div>
  </div>
</div>





</div><footer id="shopify-section-sections--25246412374318__footer_WnX4aJ" class="shopify-section shopify-section-group-footer-group section-wrapper">

<div class="section-background color-scheme-4"></div>
<div
  class="section section--page-width color-scheme-4"
>
  
  <div
    class="
      footer-content
      spacing-style
      
      
    "
    style="
      --padding-block-start: max(20px, calc(var(--spacing-scale) * 64px));--padding-block-end: max(20px, calc(var(--spacing-scale) * 64px));
      --footer-gap: 12px;
      --grid-columns: 2;
      --last-row-count: 2;
      --tablet-last-row-count: 2;
    "
  >
    



<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: 100%;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--row
       mobile-column
    "
    style="--flex-direction: row; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: center; --vertical-alignment: center;
--vertical-alignment-mobile: center;
"
  >
  


<div
  class="
    logo-block
    spacing-style
  "
  style="
    
      
        --logo-width: 48.0px;
      
    

    
    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
  "
  
>
  
    <div class="logo-block__image-wrapper">
      
<img src="//mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=3840" alt="MudAura" srcset="//mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=240 240w, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=352 352w, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=832 832w, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=1200 1200w, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=1600 1600w, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=1920 1920w, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=2560 2560w, //mudaura.com/cdn/shop/files/MudAura_20240312_173530_0000.pdf_20240312_174219_0000_2.png?v=1759323586&amp;width=3840 3840w" width="4000" height="4000" class="logo-block__image" sizes="(min-width: 750px) calc(var(--logo-width)), 100vw" style="object-position:49.846% 49.6407%;">
    </div>
  
</div>





</div>
</div>









<div
  class="
    group-block
    group-block--height-fit
    group-block--width-fill
    border-style
    spacing-style
    size-style
    
    
  "
  style="
    --border-width: 1px; --border-style: none; --border-color:
rgb(var(--color-border-rgb) / 1.0); --border-radius:
0px; 

    --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
    --size-style-width: 100%;--size-style-height: fit;--size-style-width-mobile: 100%; --size-style-width-mobile-min: 5rem;
    
  "
  
  data-testid="group-block"
><div class="group-block__media-wrapper">
    

    
  </div>

  <div
    class="
      group-block-content
      
      layout-panel-flex
      layout-panel-flex--row
       mobile-column
    "
    style="--flex-direction: row; --flex-wrap: nowrap; --flex-wrap-mobile: wrap;

--gap: 12px;

--horizontal-alignment: flex-start; --vertical-alignment: flex-start;
--vertical-alignment-mobile: flex-start;
"
  >
  

<div
  class="divider divider-ARHBHU2txcEpTQThpa__divider_DyAXPk spacing-style"
  style="
    --divider-justify-content: center;
    --padding-block-start: 0px;--padding-block-end: 0px;
  "
  

>
  <span
    class="divider__line"
    style="
      --divider-border-thickness: 1px;
      
        --divider-border-rounded: 0;
      
      --divider-flex-basis: 100%;
    "
  ></span>
</div>










  <accordion-custom
    class="
      menu
       menu--accordion menu--plus
      
    "
    data-disable-on-desktop="true"
    open-by-default-on-desktop
    
  >
    <details
      class="
        menu__details
        spacing-style
        
      "
      data-testid="menu-details"
      style="
        --spacing--size: 12px;
        --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      "
      
    >
      <summary class="menu__heading h6">
        <span class="menu__heading__default">Navigate</span>
        <span class="menu__heading__accordion">
          Navigate
          <span class="menu__heading__toggle svg-wrapper icon-caret icon-animated"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M11 5.5L7 9.5L3 5.5" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
          <span class="menu__heading__toggle svg-wrapper icon-plus"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path class="vertical" d="M2.75 7H11.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
  <path class="horizontal" d="M7 2.75L7 11.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
</svg>
</span>
        </span>
      </summary>

      <div class="details-content">
        
          <ul class="list-unstyled">
            
              <li class="menu__item paragraph">
                <a href="/">
                  Home
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/collections/all">
                  Shop
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/pages/contact">
                  Contact
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/blogs/news">
                  Blogs
                </a>
              </li>
            
          </ul>
        
      </div>
    </details>
  </accordion-custom>










  <accordion-custom
    class="
      menu
       menu--accordion menu--plus
      
    "
    data-disable-on-desktop="true"
    open-by-default-on-desktop
    
  >
    <details
      class="
        menu__details
        spacing-style
        
      "
      data-testid="menu-details"
      style="
        --spacing--size: 12px;
        --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      "
      
    >
      <summary class="menu__heading h6">
        <span class="menu__heading__default">COLLECTIONS</span>
        <span class="menu__heading__accordion">
          COLLECTIONS
          <span class="menu__heading__toggle svg-wrapper icon-caret icon-animated"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M11 5.5L7 9.5L3 5.5" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
          <span class="menu__heading__toggle svg-wrapper icon-plus"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path class="vertical" d="M2.75 7H11.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
  <path class="horizontal" d="M7 2.75L7 11.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
</svg>
</span>
        </span>
      </summary>

      <div class="details-content">
        
          <ul class="list-unstyled">
            
              <li class="menu__item paragraph">
                <a href="/collections/hair-products">
                  Hair
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/collections/face">
                  Face
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/collections/smile">
                  Smile
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/collections/essential-combos">
                  Combo
                </a>
              </li>
            
          </ul>
        
      </div>
    </details>
  </accordion-custom>










  <accordion-custom
    class="
      menu
       menu--accordion menu--plus
      
    "
    data-disable-on-desktop="true"
    open-by-default-on-desktop
    
  >
    <details
      class="
        menu__details
        spacing-style
        
      "
      data-testid="menu-details"
      style="
        --spacing--size: 12px;
        --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      "
      
    >
      <summary class="menu__heading h6">
        <span class="menu__heading__default">PRODUCTS</span>
        <span class="menu__heading__accordion">
          PRODUCTS
          <span class="menu__heading__toggle svg-wrapper icon-caret icon-animated"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M11 5.5L7 9.5L3 5.5" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
          <span class="menu__heading__toggle svg-wrapper icon-plus"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path class="vertical" d="M2.75 7H11.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
  <path class="horizontal" d="M7 2.75L7 11.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
</svg>
</span>
        </span>
      </summary>

      <div class="details-content">
        
          <ul class="list-unstyled">
            
              <li class="menu__item paragraph">
                <a href="/products/multani-mitti-face-soap-pack-of-3">
                  Soap
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/products/hair-oil">
                  Hair Oil
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/products/charcoal-and-herbal-toothpowder">
                  Toothpowder
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/products/amla-and-bhringraj-shampoo">
                  Shampoo
                </a>
              </li>
            
          </ul>
        
      </div>
    </details>
  </accordion-custom>










  <accordion-custom
    class="
      menu
       menu--accordion menu--plus
      
    "
    data-disable-on-desktop="true"
    open-by-default-on-desktop
    
  >
    <details
      class="
        menu__details
        spacing-style
        
      "
      data-testid="menu-details"
      style="
        --spacing--size: 12px;
        --padding-block-start: 0px;--padding-block-end: 0px;--padding-inline-start: 0px;--padding-inline-end: 0px;
      "
      
    >
      <summary class="menu__heading h6">
        <span class="menu__heading__default">Customer</span>
        <span class="menu__heading__accordion">
          Customer
          <span class="menu__heading__toggle svg-wrapper icon-caret icon-animated"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M11 5.5L7 9.5L3 5.5" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</span>
          <span class="menu__heading__toggle svg-wrapper icon-plus"><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path class="vertical" d="M2.75 7H11.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
  <path class="horizontal" d="M7 2.75L7 11.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round"/>
</svg>
</span>
        </span>
      </summary>

      <div class="details-content">
        
          <ul class="list-unstyled">
            
              <li class="menu__item paragraph">
                <a href="https://shopify.com/80712991022/account/orders?locale=en&buyer_flags=eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIzNTcyMDcubXlzaG9waWZ5LmNvbSIsImZsYWdzIjpbXSwiZXhwIjoxNzgxMjQxMjQxLCJuYmYiOjE3ODA2MzY0NDF9.4oVJOKme1dXojGa-gFviDUOXNGb2nhNuW2SI-9aUWYg&region_country=IN">
                  Orders
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="https://shopify.com/80712991022/account/profile?locale=en&buyer_flags=eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiIzNTcyMDcubXlzaG9waWZ5LmNvbSIsImZsYWdzIjpbXSwiZXhwIjoxNzgxMjQxMjQxLCJuYmYiOjE3ODA2MzY0NDF9.4oVJOKme1dXojGa-gFviDUOXNGb2nhNuW2SI-9aUWYg&region_country=IN">
                  Account
                </a>
              </li>
            
              <li class="menu__item paragraph">
                <a href="/pages/contact">
                  Contact
                </a>
              </li>
            
          </ul>
        
      </div>
    </details>
  </accordion-custom>






</div>
</div>






  </div>
</div>




</footer><div id="shopify-section-sections--25246412374318__utilities" class="shopify-section shopify-section-group-footer-group footer-utilities">

<div class="section-background color-scheme-4"></div>
<div
  class="section section--page-width color-scheme-4"
  
>
  <div
    class="utilities spacing-style"
    style="--padding-block-start: 20px;--padding-block-end: 20px; --border-width: 1px; --gap: 24px;"
    data-testid="footer-utilities"
  >
    

<div
  class="
    footer-utilities__group-copyright
    custom-typography
    footer-utilities__text
    custom-font-size
  "
  style="
--color: ;--font-size: 0.75rem;      --font-weight: ;--font-family: ;    --text-transform: none;    --text-wrap: ;          --line-height: var(--line-height--body-);        --letter-spacing: var(--letter-spacing--body-);"
  
>
  <span class="footer-utilities__text">
    &copy; 2026
    <a href="/" title="">MudAura</a>,  <a href="https://www.tracklockstudio.com" target="_blank" rel="noopener">Designed by Tracklock Studio</a>
  </span>
</div>




  <anchored-popover-component
    class="footer-utilities__policy-list footer-utilities__text"
    data-hover-triggered="true"
  >
    <button
      class="policy-list-trigger button-unstyled"
      popovertarget="terms-policies-popover"
      popovertargetaction="toggle"
      ref="trigger"
      style="
--color: ;--font-size: 0.75rem;      --font-weight: ;--font-family: ;    --text-transform: none;    --text-wrap: ;          --line-height: var(--line-height--body-);        --letter-spacing: var(--letter-spacing--body-);"
      
    >
      Terms and Policies
    </button>
    <div
      class="terms-policies-popover color-scheme-1"
      id="terms-policies-popover"
      popover="auto"
      ref="popover"
    >
      <ul
        class="
          policy_list list-unstyled
          custom-typography
          custom-font-size
        "
      ><li>
              <a
                href="/policies/refund-policy"
                class="footer-utilities__text"
              >Refund policy</a>
            </li><li>
              <a
                href="/policies/privacy-policy"
                class="footer-utilities__text"
              >Privacy policy</a>
            </li><li>
              <a
                href="/policies/terms-of-service"
                class="footer-utilities__text"
              >Terms of service</a>
            </li><li>
              <a
                href="/policies/shipping-policy"
                class="footer-utilities__text"
              >Shipping policy</a>
            </li><li>
              <a
                href="/policies/contact-information"
                class="footer-utilities__text"
              >Contact information</a>
            </li></ul>
    </div>
  </anchored-popover-component>







<div
  class="social-icons__wrapper footer-utilities__icons"
  
>
  

  
    

    
    
      
        <div
          class="social-icons__icon-wrapper"
        >
          <a
            href="https://www.facebook.com/mudauraa/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Facebook"
            
          >
            <span class="social-icons__icon-label">Facebook</span>
            
              <svg
                class="social-icons__icon"
                aria-hidden="true"
                focusable="false"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
<path d="M18 10.049C18 5.603 14.419 2 10 2c-4.419 0-8 3.603-8 8.049C2 14.067 4.925 17.396 8.75 18v-5.624H6.719v-2.328h2.03V8.275c0-2.017 1.195-3.132 3.023-3.132.874 0 1.79.158 1.79.158v1.98h-1.009c-.994 0-1.303.621-1.303 1.258v1.51h2.219l-.355 2.326H11.25V18c3.825-.604 6.75-3.933 6.75-7.951Z" /></svg>
            
          </a>
        </div>
      
    
  
    

    
    
      
        <div
          class="social-icons__icon-wrapper"
        >
          <a
            href="https://www.instagram.com/mudaura/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Instagram"
            
          >
            <span class="social-icons__icon-label">Instagram</span>
            
              <svg
                class="social-icons__icon"
                aria-hidden="true"
                focusable="false"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
<path
      fill-rule="evenodd"
      d="M13.23 3.492c-.84-.037-1.096-.046-3.23-.046-2.144 0-2.39.01-3.238.055-.776.027-1.195.164-1.487.273a2.43 2.43 0 0 0-.912.593 2.486 2.486 0 0 0-.602.922c-.11.282-.238.702-.274 1.486-.046.84-.046 1.095-.046 3.23 0 2.134.01 2.39.046 3.229.004.51.097 1.016.274 1.495.145.365.319.639.602.913.282.282.538.456.92.602.474.176.974.268 1.479.273.848.046 1.103.046 3.238.046 2.134 0 2.39-.01 3.23-.046.784-.036 1.203-.164 1.486-.273.374-.146.648-.329.921-.602.283-.283.447-.548.602-.922.177-.476.27-.979.274-1.486.037-.84.046-1.095.046-3.23 0-2.134-.01-2.39-.055-3.229-.027-.784-.164-1.204-.274-1.495a2.43 2.43 0 0 0-.593-.913 2.604 2.604 0 0 0-.92-.602c-.284-.11-.703-.237-1.488-.273ZM6.697 2.05c.857-.036 1.131-.045 3.302-.045 1.1-.014 2.202.001 3.302.045.664.014 1.321.14 1.943.374a3.968 3.968 0 0 1 1.414.922c.41.397.728.88.93 1.414.23.622.354 1.279.365 1.942C18 7.56 18 7.824 18 10.005c0 2.17-.01 2.444-.046 3.292-.036.858-.173 1.442-.374 1.943-.2.53-.474.976-.92 1.423a3.896 3.896 0 0 1-1.415.922c-.51.191-1.095.337-1.943.374-.857.036-1.122.045-3.302.045-2.171 0-2.445-.009-3.302-.055-.849-.027-1.432-.164-1.943-.364a4.152 4.152 0 0 1-1.414-.922 4.128 4.128 0 0 1-.93-1.423c-.183-.51-.329-1.085-.365-1.943C2.009 12.45 2 12.167 2 10.004c0-2.161 0-2.435.055-3.302.027-.848.164-1.432.365-1.942a4.44 4.44 0 0 1 .92-1.414 4.18 4.18 0 0 1 1.415-.93c.51-.183 1.094-.33 1.943-.366Zm.427 4.806a4.105 4.105 0 1 1 5.805 5.805 4.105 4.105 0 0 1-5.805-5.805Zm1.882 5.371a2.668 2.668 0 1 0 2.042-4.93 2.668 2.668 0 0 0-2.042 4.93Zm5.922-5.942a.958.958 0 1 1-1.355-1.355.958.958 0 0 1 1.355 1.355Z"
      clip-rule="evenodd"
    /></svg>
            
          </a>
        </div>
      
    
  
    

    
    
      
        <div
          class="social-icons__icon-wrapper"
        >
          <a
            href="https://www.youtube.com/@mudaura"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Youtube"
            
          >
            <span class="social-icons__icon-label">Youtube</span>
            
              <svg
                class="social-icons__icon"
                aria-hidden="true"
                focusable="false"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
<path d="M18.16 5.87c.34 1.309.34 4.08.34 4.08s0 2.771-.34 4.08a2.125 2.125 0 0 1-1.53 1.53c-1.309.34-6.63.34-6.63.34s-5.321 0-6.63-.34a2.125 2.125 0 0 1-1.53-1.53c-.34-1.309-.34-4.08-.34-4.08s0-2.771.34-4.08a2.173 2.173 0 0 1 1.53-1.53C4.679 4 10 4 10 4s5.321 0 6.63.34a2.173 2.173 0 0 1 1.53 1.53ZM8.3 12.5l4.42-2.55L8.3 7.4v5.1Z" /></svg>
            
          </a>
        </div>
      
    
  
    

    
    
  
    

    
    
  
    

    
    
  
    

    
    
  
    

    
    
  
    

    
    
  
    

    
    
  
    

    
    
  
    

    
    
  
    

    
    
  
</div>





  </div>
</div>




</div>
<!-- END sections: footer-group -->

    <script
  src="//mudaura.com/cdn/shop/t/33/assets/dialog.js?v=94382931671780430451759323088"
  type="module"
></script>

<dialog-component
  id="search-modal"
  class="search-modal"
  
>
  <dialog
    ref="dialog"
    on:click="/closeDialogOnClickOutside"
    on:keydown="/closeDialogOnEscapePress"
    class="search-modal__content dialog-modal"
    scroll-lock
  >
    <script
  src="//mudaura.com/cdn/shop/t/33/assets/predictive-search.js?v=53445493388242646041759323088"
  type="module"
  fetchpriority="low"
></script>

<predictive-search-component
  class="predictive-search color-scheme-1"
  style="--product-corner-radius: 0px; --card-corner-radius: 0px;"
  data-section-id="predictive-search"
  data-testid="search-component--modal"
  role="search"
  aria-label="Search"
>
  <form
    action="/search"
    method="get"
    role="search"
    class="predictive-search-form"
    ref="form"
    on:keydown="/onSearchKeyDown"
  >
    <div
      class="predictive-search-form__header"
    >
      <div class="predictive-search-form__header-inner">
        <label
          for="cmdk-input"
          class="visually-hidden"
        >Search</label>
        <input
          class="search-input"
          id="cmdk-input"
          type="search"
          name="q"
          role="combobox"
          aria-expanded="false"
          aria-owns="predictive-search-results"
          aria-controls="predictive-search-results"
          aria-haspopup="listbox"
          aria-autocomplete="list"
          autocomplete="off"
          placeholder="Search"
          ref="searchInput"
          on:input="/search"
          on:keydown="/onSearchKeyDown"
        >
        <input
          name="options[prefix]"
          type="hidden"
          value="last"
        >
        <span class="svg-wrapper predictive-search__icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><circle cx="9" cy="9" r="4.75" stroke="currentColor" stroke-width="var(--icon-stroke-width)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m12.5 12.5 3.25 3.25"/></svg>

        </span>
        <button
          type="button"
          class="button-unstyled predictive-search__reset-button"
          aria-label="Reset search"
          ref="resetButton"
          hidden
          on:click="/resetSearch"
        >
          <span class="svg-wrapper predictive-search__reset-button-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="6.25" stroke="currentColor" stroke-width="var(--icon-stroke-width)"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m12.5 7.5-5 5M12.5 12.5l-5-5"/></svg>

          </span>
          <span class="predictive-search__reset-button-text">Clear</span>
        </button>
      </div>
      <button
        type="button"
        class="button predictive-search__close-modal-button"
        aria-label="Close dialog"
        on:click="dialog-component/closeDialog"
        ref="closeModalButton"
      >
        <span class="svg-wrapper">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 2L2 12" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 12L2 2" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

        </span>
      </button>
    </div>

    <div class="predictive-search-form__content-wrapper">
      <div
        class="predictive-search-form__content"
        tabindex="-1"
        ref="predictiveSearchResults"
        on:click="/handleModalClick"
      >
        

<div
  id="predictive-search-results"
  class="predictive-search-dropdown"
  role="listbox"
  aria-expanded="true"
  style="--color-shadow: rgb(var(--color-foreground-rgb) / 0.1);"
>
  
</div>

      </div>

      <div class="predictive-search-form__footer">
        <button
          class="button button-primary predictive-search__search-button"
          ref="viewAllButton"
        >
          View all
        </button>
      </div>
    </div>
  </form>
</predictive-search-component>



  </dialog>
</dialog-component>




    
      <quick-add-dialog id="quick-add-dialog">
  <dialog
    class="quick-add-modal dialog-modal color-scheme-1"
    ref="dialog"
    scroll-lock
  >
    <button
      ref="closeButton"
      on:click="/closeDialog"
      class="button button-unstyled close-button quick-add-modal__close"
      aria-label="Close dialog"
    ><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 2L2 12" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 12L2 2" stroke="currentColor" stroke-width="var(--icon-stroke-width)" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</button>
    <div
      id="quick-add-modal-content"
      class="quick-add-modal__content"
    ></div>
  </dialog>
</quick-add-dialog>



    
    <script>
document.addEventListener('DOMContentLoaded', () => {
  const cartDialog = document.querySelector('.cart-drawer__dialog');

  if (cartDialog) {
    const observer = new MutationObserver(() => {
      if (cartDialog.hasAttribute('open')) {
        document.dispatchEvent(
          new CustomEvent('cart:update', { detail: { data: {} } })
        );
      }
    });

    observer.observe(cartDialog, { attributes: true, attributeFilter: ['open'] });
  }
});


      </script>
  <div id="shopify-block-AQTNyY2pVSHRaNnpiM__1710008633607995074" class="shopify-block shopify-app-block"><!-- BEGIN app snippet: rev-init --><script type="text/javascript" id="rev-app-embed-init">
  window.Tydal = window.Tydal || {};
  window.Tydal.embedded_version_enabled = true;
  window.Tydal.common = window.Tydal.common || {};
  window.Tydal.common.shop = {
    permanent_domain: '357207.myshopify.com',
    currency: "INR",
    money_format: "Rs. {{amount}}",
    id: 80712991022
  };
  

  window.Tydal.common.template = 'index';
  window.Tydal.common.cart = {};
  window.Tydal.global_config = {"asset_urls":{"loy":{},"rev":{"init_js":"https:\/\/reviews.rivo.io\/assets\/storefront\/ba_rev_init-1c423b5c8195bd58dd21b3b6829cdf9fcd998c7d862cdf2aa0feeae609135497.js","display_js":"https:\/\/reviews.rivo.io\/assets\/storefront\/ba_rev_display-ce7d26453bafa64afaa7a7ff51a351a5936fffab696d205049bf1a8f805918e4.js","modal_js":"https:\/\/reviews.rivo.io\/assets\/storefront\/ba_rev_modal-60bc649662af4ac540140b74ca51d4ed57f615fc06392aa9aff1970791f3e450.js","widget_css":"https:\/\/reviews.rivo.io\/assets\/frontend\/ba_rev_widget.css","modal_css":"https:\/\/reviews.rivo.io\/assets\/frontend\/ba_rev_modal.css"},"pu":{},"widgets":{},"forms":{},"global":{"helper_js":"https:\/\/reviews.rivo.io\/assets\/storefront\/ba_ty_tracking-2e53b53d821f62396b724dd3dc4d8c8e1756be16453c87ea459dad62a5a22558.js"}},"proxy_paths":{"rev":"\/apps\/ba-rev","app_metrics":"\/apps\/ba-rev\/app_metrics"},"aat":["rev"],"pv":false,"sts":false,"bam":false,"batc":false,"base_money_format":"Rs. {{amount}}","online_store_version":2,"shop":{"id":80712991022,"name":"MudAura","domain":"mudaura.com"}};
  window.Tydal.global_config.asset_urls = {
    ...window.Tydal.global_config.asset_urls,
    rev: {
      init_js: 'https://cdn.shopify.com/extensions/55fefd76-35ff-4656-98b5-29ebc814b57d/tydal-reviews-21/assets/ba_rev_init.js',
      display_js: 'https://cdn.shopify.com/extensions/55fefd76-35ff-4656-98b5-29ebc814b57d/tydal-reviews-21/assets/ba_rev_display.js',
      modal_js: 'https://cdn.shopify.com/extensions/55fefd76-35ff-4656-98b5-29ebc814b57d/tydal-reviews-21/assets/ba_rev_modal.js',
      widget_css: 'https://cdn.shopify.com/extensions/55fefd76-35ff-4656-98b5-29ebc814b57d/tydal-reviews-21/assets/ba_rev_widget.css',
      modal_css: 'https://cdn.shopify.com/extensions/55fefd76-35ff-4656-98b5-29ebc814b57d/tydal-reviews-21/assets/ba_rev_modal.css'
    },
    global: {
      helper_js: 'https://cdn.shopify.com/extensions/55fefd76-35ff-4656-98b5-29ebc814b57d/tydal-reviews-21/assets/ba_ty_tracking.js'
    }
  };

  
  window.Tydal.rev_config = {"api_endpoint":"\/apps\/ba-rev\/rev\/ratings","widget_enabled":true,"review_discount_email_enabled":false,"translations":{"back":"Back","done":"Done","next":"Next","skip":"Skip","email":"Email Address *","review":"Review","reviews":"Reviews","continue":"Continue","about_you":"Complete your review","last_name":"Last name","thank_you":"Thanks for your review!","first_name":"First name *","reviewed_on":"Reviewed on","show_it_off":"Upload a photo or video","choose_photo":"Click to add photo","choose_video":"Click to add video","modal_header":"How would you rate this product?","review_title":"Add a title for your review","shop_replied":"{{shop_name}} replied:","tell_us_more":"Share your experience","use_discount":"Here's your discount code for {{discount_amount}} off your next order","invalid_email":"Please enter a valid email address","star1_caption":"Hate it","star2_caption":"","star3_caption":"It's ok","star4_caption":"","star5_caption":"Love it!","vote_question":"Was this review helpful?","no_reviews_yet":"No reviews yet","privacy_policy":"Privacy Policy","required_field":"Required","write_a_review":"Write a review","first_person_to":"Be the first person to","get_percent_off":"Get {{discount_amount}} off your next order!","terms_of_service":"Terms of Service","show_more_reviews":"See more reviews","verified_customer":"Verified Customer","verified_review_on":"Verified review of {{product_title}}","is_recommended_text":"I recommended this product","not_recommended_text":"I do not recommend this product","review_was_submitted":"Your review was submitted.","share_your_experience":"How was your overall experience?","discount_sent_by_email":"We also sent it by email.","error_submitting_review":"Error submitting review, please try again later.","email_already_registered":"Email already left a review","by_submitting_i_acknowledge":"By completing, I acknowledge the","review_will_publicly_posted":"and that my review will be posted publicly online","we_love_to_see_it_in_action":"We'd love to showcase it on our website!","review_summary_based_on_reviews":"Based on {{reviews_count}} reviews"},"widget_css":{"theme_link_color":"#999999","theme_star_color":"#f1c645","theme_title_color":"#000000","theme_footer_color":"#999999","theme_subtext_color":"#888888","theme_button_bg_color":"#ffffff","theme_star_text_color":"#000000","theme_input_text_color":"#000000","theme_button_text_color":"#000000","theme_launcher_bg_color":"#000000","theme_button_hover_color":"#000000","theme_global_icons_color":"#000000","theme_input_border_color":"#c1c1c1","theme_reviews_body_color":"#000000","theme_button_border_color":"#000000","theme_launcher_text_color":"#ffffff","theme_reviews_title_color":"#000000","theme_global_primary_color":"#000000","theme_launcher_border_color":"#000000","theme_global_button_bg_color":"#000000","theme_global_secondary_color":"#2e8b57","theme_first_review_text_color":"#000000","theme_launcher_hover_bg_color":"#000000","theme_global_button_text_color":"#ffffff","theme_global_button_corner_type":"regular","theme_launcher_hover_text_color":"#000000"},"custom_css":"","widget_settings":{"display_per_page":10,"display_date_type":"relative","display_list_type":"grid","display_summary_type":"small","display_video_enabled":false,"display_star_fill_type":"full","display_voting_enabled":false,"display_panel_custom_css":"","display_rating_text_type":"words","display_panel_custom_class":"","display_storefront_enabled":true,"display_review_date_enabled":true,"display_star_rating_enabled":true,"display_panel_custom_selector":"","display_verified_badge_enabled":false,"display_recommendations_enabled":false,"display_product_stars_custom_selector":"","display_write_a_review_storefront_enabled":true},"removed_tydal_branding":true,"discount_info":{"discount_type":null,"discount_amount":15}};
</script>
<!-- END app snippet -->


</div><div id="shopify-block-AQmlVY0ljMTZab0xTd__8912919057760678768" class="shopify-block shopify-app-block">








  
  
    <script class="script-trap-1"></script>
  
    <script class="script-trap-2"></script>
  
    <script class="script-trap-3"></script>
  
    <script class="script-trap-4"></script>
  
    <script class="script-trap-5"></script>
  
    <script class="script-trap-6"></script>
  
    <script class="script-trap-7"></script>
  
    <script class="script-trap-8"></script>
  
    <script class="script-trap-9"></script>
  
    <script class="script-trap-10"></script>
  
    <script class="script-trap-11"></script>
  
    <script class="script-trap-12"></script>
  
    <script class="script-trap-13"></script>
  
    <script class="script-trap-14"></script>
  
    <script class="script-trap-15"></script>
  
    <script class="script-trap-16"></script>
  
    <script class="script-trap-17"></script>
  
    <script class="script-trap-18"></script>
  
    <script class="script-trap-19"></script>
  
    <script class="script-trap-20"></script>
  

  <script>
    window.subscription_box_builder = window.subscription_box_builder || {};
    window.subscription_box_builder.settings = {"settings_app_public_access_token":"a6ee4a64fe2e081cdefa7744505ee90c","settings_app_status":"1","settings_app_locale":"en","settings_app_cart_transform_enabled":"2","settings_app_out_of_stock_product_display":"1","settings_app_redirect_after_checkout_url":"\/checkout","settings_app_redirect_after_collection_page":"product_page","settings_app_add_to_box_no_variants_display":null,"settings_app_add_to_box_multiple_variants_type":null,"settings_app_add_to_box_multiple_variants_display":null,"settings_additional_theme_app_mode":"production","settings_box_set_auto_recreate_bundle_product":"1"};
    window.subscription_box_builder.shop = {
      money_format: 'Rs. {{amount}}',
      money_with_currency_format: 'Rs. {{amount}}',
      currency: 'INR',
      locale: 'en',
    }
  </script>

  
<!-- BEGIN app snippet: entrypoint-components -->


  <script src="https://cdn.shopify.com/extensions/019e95b5-b06d-7bee-b20b-b9a538224ff8/easify-box-builder-578/assets/boxBuilderPageEntrypoint-COyBbqJ-.js" type="module" crossorigin="anonymous"></script>
  <link rel="modulepreload" href="https://cdn.shopify.com/extensions/019e95b5-b06d-7bee-b20b-b9a538224ff8/easify-box-builder-578/assets/enums-o3Z4Vqbj.js" crossorigin="anonymous">

<!-- END app snippet -->
  



</div><div id="shopify-block-AcTRuQ2NGbmVqaUhWZ__10025992882218306672" class="shopify-block shopify-app-block">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" class="sp-whatsapp-embed"/>

<link rel="stylesheet" href="https://cdn.shopify.com/extensions/019dd761-485f-751e-8ff6-d8ba53ed958d/ctx-whatsapp-chat-marketing-30/assets/whatsapp-sharing.css" class="sp-whatsapp-embed"/>

<script type="text/javascript" src="https://cdn.shopify.com/extensions/019dd761-485f-751e-8ff6-d8ba53ed958d/ctx-whatsapp-chat-marketing-30/assets/whatsapp-sharing.js" defer class="sp-whatsapp-embed"></script>

</div><div id="shopify-block-AVFIySTFEaVpmWUFPS__144831480468751239" class="shopify-block shopify-app-block"><!-- BEGIN app snippet: vite-tag -->


  <script src="https://cdn.shopify.com/extensions/019e9263-ffce-7bdb-a913-252af73fda4d/essential-post-purchase-upsell-1524/assets/app-embed-CmOL_Jyc.js" type="module" crossorigin="anonymous"></script>
  <link rel="modulepreload" href="https://cdn.shopify.com/extensions/019e9263-ffce-7bdb-a913-252af73fda4d/essential-post-purchase-upsell-1524/assets/stylex-C6wAQLyo.js" crossorigin="anonymous">
  <link href="//cdn.shopify.com/extensions/019e9263-ffce-7bdb-a913-252af73fda4d/essential-post-purchase-upsell-1524/assets/stylex-DjYmBih2.css" rel="stylesheet" type="text/css" media="all" />

<!-- END app snippet -->


<essential-upsell-app-embed
  upsell-app-data="{&quot;funnels&quot;:[{&quot;id&quot;:&quot;39e4c799-46a8-426b-bf0d-32f8ad313d65&quot;,&quot;name&quot;:&quot;Product page offer&quot;,&quot;content&quot;:{&quot;offerType&quot;:&quot;FREQUENTLY_BOUGHT_TOGETHER&quot;,&quot;titleText&quot;:&quot;&quot;,&quot;buttonText&quot;:&quot;BUY COMBO • {total} {compared-at}&quot;,&quot;secondaryButtonText&quot;:&quot;Close&quot;},&quot;upsell&quot;:{&quot;productsType&quot;:&quot;SPECIFIC&quot;,&quot;recommendationIntent&quot;:&quot;RELATED&quot;,&quot;discountType&quot;:&quot;FIXED_AMOUNT&quot;,&quot;discountValue&quot;:39.5,&quot;applyDiscountType&quot;:&quot;ALWAYS&quot;,&quot;isHideProductInCart&quot;:false,&quot;isHideTriggerProduct&quot;:true,&quot;isPreselectProducts&quot;:true,&quot;isLimitDiscountedQuantity&quot;:false,&quot;discountedQuantityLimit&quot;:null,&quot;specificProducts&quot;:[{&quot;shopifyId&quot;:&quot;gid://shopify/Product/8532502184238&quot;,&quot;shopifyHandle&quot;:&quot;multani-mitti-face-soap-pack-of-3&quot;,&quot;variantIds&quot;:[]}],&quot;customDiscounts&quot;:[]},&quot;design&quot;:{&quot;layoutType&quot;:null,&quot;stackedProductsCount&quot;:null,&quot;backgroundType&quot;:&quot;MONOCHROME&quot;,&quot;monochromeBackgroundColor&quot;:&quot;#ffffff&quot;,&quot;gradientBackgroundStartColor&quot;:null,&quot;gradientBackgroundEndColor&quot;:null,&quot;gradientBackgroundAngle&quot;:null,&quot;borderRadius&quot;:8,&quot;borderSize&quot;:1,&quot;borderColor&quot;:&quot;#c5c8d1&quot;,&quot;insideTopSpacing&quot;:10,&quot;insideBottomSpacing&quot;:10,&quot;outsideTopSpacing&quot;:20,&quot;outsideBottomSpacing&quot;:20,&quot;font&quot;:&quot;INHERIT&quot;,&quot;titleSize&quot;:16,&quot;titleColor&quot;:&quot;#202223&quot;,&quot;productTitleSize&quot;:14,&quot;productTitleColor&quot;:&quot;#202223&quot;,&quot;productVariantSize&quot;:14,&quot;productVariantColor&quot;:&quot;#96a4b6&quot;,&quot;productPriceSize&quot;:14,&quot;productPriceColor&quot;:&quot;#96a4b6&quot;,&quot;discountedPriceSize&quot;:14,&quot;discountedPriceColor&quot;:&quot;#202223&quot;,&quot;buttonBackgroundColor&quot;:&quot;#202223&quot;,&quot;buttonTextSize&quot;:14,&quot;buttonTextColor&quot;:&quot;#fafafa&quot;,&quot;buttonBorderRadius&quot;:8,&quot;navigationIconColor&quot;:null,&quot;checkboxIconColor&quot;:&quot;#fafafa&quot;,&quot;checkboxBackgroundColor&quot;:&quot;#202223&quot;,&quot;checkboxBorderColor&quot;:&quot;#202223&quot;,&quot;popupBackgroundColor&quot;:&quot;#ffffff&quot;,&quot;popupCloseButtonColor&quot;:&quot;#202223&quot;,&quot;popupBorderRadius&quot;:16,&quot;secondaryButtonTextSize&quot;:14,&quot;secondaryButtonTextColor&quot;:&quot;#202223&quot;},&quot;placement&quot;:{&quot;type&quot;:&quot;PRODUCT_PAGE&quot;,&quot;triggerType&quot;:&quot;SPECIFIC_PRODUCTS&quot;,&quot;cartPagePositionType&quot;:null,&quot;popupPlacementType&quot;:&quot;PRODUCT_PAGE&quot;,&quot;specificProducts&quot;:[{&quot;shopifyId&quot;:&quot;gid://shopify/Product/9037025247534&quot;,&quot;shopifyHandle&quot;:&quot;charcoal-and-herbal-toothpowder&quot;,&quot;variantIds&quot;:[]}],&quot;specificCollections&quot;:[]},&quot;contentTranslations&quot;:[]},{&quot;id&quot;:&quot;5b071bb3-252e-4e98-86d4-e1e9f2dd545c&quot;,&quot;name&quot;:&quot;Product page oil&quot;,&quot;content&quot;:{&quot;offerType&quot;:&quot;FREQUENTLY_BOUGHT_TOGETHER&quot;,&quot;titleText&quot;:&quot;&quot;,&quot;buttonText&quot;:&quot;BUY COMBO • {total} {compared-at}&quot;,&quot;secondaryButtonText&quot;:null},&quot;upsell&quot;:{&quot;productsType&quot;:&quot;SPECIFIC&quot;,&quot;recommendationIntent&quot;:&quot;RELATED&quot;,&quot;discountType&quot;:&quot;FIXED_AMOUNT&quot;,&quot;discountValue&quot;:72.5,&quot;applyDiscountType&quot;:&quot;TRIGGER_PRODUCT&quot;,&quot;isHideProductInCart&quot;:false,&quot;isHideTriggerProduct&quot;:true,&quot;isPreselectProducts&quot;:true,&quot;isLimitDiscountedQuantity&quot;:false,&quot;discountedQuantityLimit&quot;:null,&quot;specificProducts&quot;:[{&quot;shopifyId&quot;:&quot;gid://shopify/Product/9037021577518&quot;,&quot;shopifyHandle&quot;:&quot;amla-and-bhringraj-shampoo&quot;,&quot;variantIds&quot;:[]},{&quot;shopifyId&quot;:&quot;gid://shopify/Product/8662951133486&quot;,&quot;shopifyHandle&quot;:&quot;hair-oil&quot;,&quot;variantIds&quot;:[]}],&quot;customDiscounts&quot;:[]},&quot;design&quot;:{&quot;layoutType&quot;:null,&quot;stackedProductsCount&quot;:null,&quot;backgroundType&quot;:&quot;MONOCHROME&quot;,&quot;monochromeBackgroundColor&quot;:&quot;#ffffff&quot;,&quot;gradientBackgroundStartColor&quot;:null,&quot;gradientBackgroundEndColor&quot;:null,&quot;gradientBackgroundAngle&quot;:null,&quot;borderRadius&quot;:8,&quot;borderSize&quot;:1,&quot;borderColor&quot;:&quot;#c5c8d1&quot;,&quot;insideTopSpacing&quot;:10,&quot;insideBottomSpacing&quot;:10,&quot;outsideTopSpacing&quot;:20,&quot;outsideBottomSpacing&quot;:20,&quot;font&quot;:&quot;INHERIT&quot;,&quot;titleSize&quot;:16,&quot;titleColor&quot;:&quot;#202223&quot;,&quot;productTitleSize&quot;:14,&quot;productTitleColor&quot;:&quot;#202223&quot;,&quot;productVariantSize&quot;:14,&quot;productVariantColor&quot;:&quot;#96a4b6&quot;,&quot;productPriceSize&quot;:14,&quot;productPriceColor&quot;:&quot;#96a4b6&quot;,&quot;discountedPriceSize&quot;:15,&quot;discountedPriceColor&quot;:&quot;#090909&quot;,&quot;buttonBackgroundColor&quot;:&quot;#1f282f&quot;,&quot;buttonTextSize&quot;:14,&quot;buttonTextColor&quot;:&quot;#fafafa&quot;,&quot;buttonBorderRadius&quot;:8,&quot;navigationIconColor&quot;:null,&quot;checkboxIconColor&quot;:&quot;#fafafa&quot;,&quot;checkboxBackgroundColor&quot;:&quot;#1f282f&quot;,&quot;checkboxBorderColor&quot;:&quot;#202223&quot;,&quot;popupBackgroundColor&quot;:null,&quot;popupCloseButtonColor&quot;:null,&quot;popupBorderRadius&quot;:null,&quot;secondaryButtonTextSize&quot;:null,&quot;secondaryButtonTextColor&quot;:null},&quot;placement&quot;:{&quot;type&quot;:&quot;PRODUCT_PAGE&quot;,&quot;triggerType&quot;:&quot;SPECIFIC_PRODUCTS&quot;,&quot;cartPagePositionType&quot;:null,&quot;popupPlacementType&quot;:null,&quot;specificProducts&quot;:[{&quot;shopifyId&quot;:&quot;gid://shopify/Product/9037021577518&quot;,&quot;shopifyHandle&quot;:&quot;amla-and-bhringraj-shampoo&quot;,&quot;variantIds&quot;:[]},{&quot;shopifyId&quot;:&quot;gid://shopify/Product/8662951133486&quot;,&quot;shopifyHandle&quot;:&quot;hair-oil&quot;,&quot;variantIds&quot;:[]}],&quot;specificCollections&quot;:[]},&quot;contentTranslations&quot;:[]},{&quot;id&quot;:&quot;291982fd-1a69-4f35-b459-027c16075ff3&quot;,&quot;name&quot;:&quot;Product page soap&quot;,&quot;content&quot;:{&quot;offerType&quot;:&quot;FREQUENTLY_BOUGHT_TOGETHER&quot;,&quot;titleText&quot;:&quot;&quot;,&quot;buttonText&quot;:&quot;BUY COMBO • {total} {compared-at}&quot;,&quot;secondaryButtonText&quot;:null},&quot;upsell&quot;:{&quot;productsType&quot;:&quot;SPECIFIC&quot;,&quot;recommendationIntent&quot;:&quot;RELATED&quot;,&quot;discountType&quot;:&quot;FIXED_AMOUNT&quot;,&quot;discountValue&quot;:89.5,&quot;applyDiscountType&quot;:&quot;TRIGGER_PRODUCT&quot;,&quot;isHideProductInCart&quot;:false,&quot;isHideTriggerProduct&quot;:true,&quot;isPreselectProducts&quot;:true,&quot;isLimitDiscountedQuantity&quot;:false,&quot;discountedQuantityLimit&quot;:null,&quot;specificProducts&quot;:[{&quot;shopifyId&quot;:&quot;gid://shopify/Product/8662951133486&quot;,&quot;shopifyHandle&quot;:&quot;hair-oil&quot;,&quot;variantIds&quot;:[]}],&quot;customDiscounts&quot;:[]},&quot;design&quot;:{&quot;layoutType&quot;:null,&quot;stackedProductsCount&quot;:null,&quot;backgroundType&quot;:&quot;MONOCHROME&quot;,&quot;monochromeBackgroundColor&quot;:&quot;#ffffff&quot;,&quot;gradientBackgroundStartColor&quot;:null,&quot;gradientBackgroundEndColor&quot;:null,&quot;gradientBackgroundAngle&quot;:null,&quot;borderRadius&quot;:8,&quot;borderSize&quot;:1,&quot;borderColor&quot;:&quot;#c5c8d1&quot;,&quot;insideTopSpacing&quot;:10,&quot;insideBottomSpacing&quot;:10,&quot;outsideTopSpacing&quot;:20,&quot;outsideBottomSpacing&quot;:20,&quot;font&quot;:&quot;INHERIT&quot;,&quot;titleSize&quot;:16,&quot;titleColor&quot;:&quot;#202223&quot;,&quot;productTitleSize&quot;:14,&quot;productTitleColor&quot;:&quot;#202223&quot;,&quot;productVariantSize&quot;:14,&quot;productVariantColor&quot;:&quot;#96a4b6&quot;,&quot;productPriceSize&quot;:14,&quot;productPriceColor&quot;:&quot;#96a4b6&quot;,&quot;discountedPriceSize&quot;:15,&quot;discountedPriceColor&quot;:&quot;#000000&quot;,&quot;buttonBackgroundColor&quot;:&quot;#1f282f&quot;,&quot;buttonTextSize&quot;:14,&quot;buttonTextColor&quot;:&quot;#fafafa&quot;,&quot;buttonBorderRadius&quot;:8,&quot;navigationIconColor&quot;:null,&quot;checkboxIconColor&quot;:&quot;#fafafa&quot;,&quot;checkboxBackgroundColor&quot;:&quot;#1f282f&quot;,&quot;checkboxBorderColor&quot;:&quot;#202223&quot;,&quot;popupBackgroundColor&quot;:null,&quot;popupCloseButtonColor&quot;:null,&quot;popupBorderRadius&quot;:null,&quot;secondaryButtonTextSize&quot;:null,&quot;secondaryButtonTextColor&quot;:null},&quot;placement&quot;:{&quot;type&quot;:&quot;PRODUCT_PAGE&quot;,&quot;triggerType&quot;:&quot;SPECIFIC_PRODUCTS&quot;,&quot;cartPagePositionType&quot;:null,&quot;popupPlacementType&quot;:null,&quot;specificProducts&quot;:[{&quot;shopifyId&quot;:&quot;gid://shopify/Product/8532502184238&quot;,&quot;shopifyHandle&quot;:&quot;multani-mitti-face-soap-pack-of-3&quot;,&quot;variantIds&quot;:[]}],&quot;specificCollections&quot;:[]},&quot;contentTranslations&quot;:[]}]}"
  upsell-app-config-data='{&quot;analyticsBaseUrl&quot;:&quot;https://essential-upsell-publisher.essential-apps.com&quot;,&quot;storefrontAccessTokenValue&quot;:&quot;69caed475873c5a52639849eccc0ebf4&quot;}'
  upsell-app-discounts-data="{&quot;f&quot;:[[&quot;39e4c799-46a8-426b-bf0d-32f8ad313d65&quot;,[2,39.5,4,7,[],[&quot;30vrzhx66&quot;],null,null,null],[13],[16,[[&quot;37bjvi4a6&quot;,null]],null],null],[&quot;5b071bb3-252e-4e98-86d4-e1e9f2dd545c&quot;,[2,72.5,6,7,[],[&quot;37bjtbgha&quot;,&quot;32jpdfmlq&quot;],null,null,null],[13],[16,[[&quot;37bjtbgha&quot;,null],[&quot;32jpdfmlq&quot;,null]],null],null],[&quot;291982fd-1a69-4f35-b459-027c16075ff3&quot;,[2,89.5,6,7,[],[&quot;32jpdfmlq&quot;],null,null,null],[13],[16,[[&quot;30vrzhx66&quot;,null]],null],null]]}"
  product-page-product="null"
  product-page-collection-ids="[]"
  cart-product-ids="[]"
  first-shop-product-id="9037021577518"
  shop-money-format="Rs. {{amount}}"
  cart-items='
[]'
></essential-upsell-app-embed>


</div><script src="https://cdn.shopify.com/storefront/standard-actions.js" type="module" data-source-attribution="shopify.standard_actions"></script>
</body>
</html>
