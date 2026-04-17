// @ts-check
const ENABLE_PAGE_REVEALER = true;

const ENABLE_PAGE_PRELOADER = true;

const breakpoints = {
  xs: 0,
  sm: 576,
  md: 768,
  lg: 992,
  xl: 1200,
  xxl: 1400
};

{
  const updateScrollWidth = () => {
    document.documentElement.style.setProperty("--body-scroll-width", window.innerWidth - document.documentElement.clientWidth + "px");
  };
  window.addEventListener("resize", updateScrollWidth);
  updateScrollWidth();
}

// Breakpoints Classes
{
  const html = document.documentElement;
  /**
     *
     * @param {string} bp
     * @param {number} bpSize
     * @param {'min' | 'max'} type
     */  const setupBp = (bp, bpSize, type = "min") => {
    const media = matchMedia(`(${type}-width: ${bpSize}px)`);
    const update = () => {
      const cls = "bp-" + bp + (type === "max" ? "-max" : "");
      if (media.matches) {
        html.classList.add(cls);
      } else {
        html.classList.remove(cls);
      }
    };
    media.onchange = update;
    update();
  };
  Object.entries(breakpoints).forEach(([bp, bpSize]) => {
    setupBp(bp, bpSize, "min");
    setupBp(bp, bpSize - 1, "max");
  });
}

// Document ready class
{
  document.addEventListener("DOMContentLoaded", () => {
    document.documentElement.classList.add("dom-ready");
  });
}

// User color scheme prefered
const isDarkMode = () => document.documentElement.classList.contains("uc-dark");

const setDarkMode = (enableDark = true) => {
  const isDark = isDarkMode();
  if (isDark === enableDark) return;
  if (enableDark) {
    document.documentElement.classList.add("uc-dark");
  } else {
    document.documentElement.classList.remove("uc-dark");
  }
  window.dispatchEvent(new CustomEvent("darkmodechange"));
};

if (localStorage.getItem("darkMode")) {
  setDarkMode(localStorage.getItem("darkMode") === "1");
}

// Allow overriding dark mode via URL parameter in all builds (not only dev)
// ?dark=1 forces dark; ?dark=0 forces light
// NOTE: Do NOT persist this to localStorage so it affects only the current page
{
  const dark = new URLSearchParams(location.search).get("dark");
  if (dark === "1") {
    setDarkMode(true);
  } else if (dark === "0") {
    setDarkMode(false);
  }
}

// Page Revealer
const ENABLE_PAGE_REVEALER_USED = ENABLE_PAGE_REVEALER && localStorage.getItem("page-revealer") === "show";

if (ENABLE_PAGE_REVEALER) {
  const easing = "cubic-bezier(0.8, 0, 0.2, 1)";
  const duration = .5;
 // seconds
    {
    const style = document.createElement("style");
    // css variables is not available at this point so you should use direct values
        style.append(/*css*/ `\n            .page-revealer {\n                pointer-events: none;\n                visibility: hidden;\n                height: 100%;\n                width: 100%;\n                position: fixed;\n                right: 0;\n                bottom: 0;\n                left: 0;\n                transform: scaleY(0);\n                z-index: 12000;\n                background-color: #fff;\n            }\n            :where(.uc-dark) .page-revealer {\n                background-color: #011211;\n            }\n        `);
    document.head.append(style);
  }
  const revealer = document.createElement("div");
  revealer.classList.add("page-revealer");
  document.documentElement.append(revealer);
  window.addEventListener("pageshow", () => {
    revealer.style.visibility = "";
    revealer.style.transform = "";
    revealer.style.transformOrigin = "";
  });
  ENABLE_PAGE_REVEALER_USED && (async () => {
    localStorage.removeItem("page-revealer");
    revealer.style.transition = "";
    revealer.style.visibility = "visible";
    revealer.style.transform = "scaleY(1)";
    revealer.style.transformOrigin = "center bottom";
    await new Promise(r => document.addEventListener("DOMContentLoaded", r));
    await new Promise(r => requestAnimationFrame(r));
    revealer.style.transition = "transform " + duration + "s " + easing;
    revealer.style.transform = "scaleY(0)";
    revealer.style.transformOrigin = "center top";
    await new Promise(r => setTimeout(r, duration * 1100));
    revealer.style.visibility = "";
    revealer.style.transform = "";
    revealer.style.transformOrigin = "";
  })();
  /**
     *
     * @param {HTMLAnchorElement} anchor
     */  const shouldShowRevealer = anchor => {
    const isSameOrigin = location.protocol === anchor.protocol && location.origin === anchor.origin;
    // revealer works only when navigating to the same domain
        if (!isSameOrigin) return false;
    if (anchor.target === "_blank") return false;
    const isSamePage = location.pathname === anchor.pathname && location.search === anchor.search;
    // revealer works when changing page
        if (!isSamePage) return true;
    const hasHash = anchor.hash || anchor.href !== anchor.origin + anchor.pathname + anchor.search + anchor.hash;
    // revealer don't work when anchor has hash
        if (hasHash) return false;
    return true;
  };
  document.addEventListener("click", async e => {
    /** @type {HTMLElement} */
    // @ts-ignore
    const el = e.target;
    const anchor = el.closest("a");
    if (anchor && anchor instanceof HTMLAnchorElement && !e.defaultPrevented && shouldShowRevealer(anchor)) {
      e.preventDefault();
      revealer.style.transition = "transform " + duration + "s " + easing;
      revealer.style.visibility = "visible";
      revealer.style.transform = "scaleY(1)";
      revealer.style.transformOrigin = "center bottom";
      await new Promise(r => setTimeout(r, duration * 1e3));
      localStorage.setItem("page-revealer", "show");
      location.href = anchor.href;
    }
  });
}

// Page Preloader
if (!ENABLE_PAGE_REVEALER_USED && ENABLE_PAGE_PRELOADER) {
  const easing = "cubic-bezier(0.8, 0, 0.2, 1)";
  const duration = 1.1;
 // seconds
    {
    const style = document.createElement("style");
    // css variables is not available at this point so you should use direct values
        style.append(/*css*/ `\n        .uc-pageloader {\n            position: fixed;\n            top: 0;\n            left: 0;\n            bottom: 0;\n            right: 0;\n            display: flex;\n            justify-content: center;\n            align-items: center;\n            z-index: 99999;\n        }\n\n        .uc-pageloader {\n            background-color: white;\n        }\n\n        .uc-pageloader:where(.uc-dark),\n        :where(.uc-dark) .uc-pageloader {\n            background-color: #131313;\n        }\n\n        .uc-pageloader>.loading {\n            display: inline-block;\n            position: relative;\n            width: 40px;\n            height: 40px;\n        }\n\n        .uc-pageloader>.loading>div {\n            box-sizing: border-box;\n            display: block;\n            position: absolute;\n            width: 40px;\n            height: 40px;\n            margin: 0;\n            border: 4px solid transparent;\n            border-radius: 50%;\n            animation: uc-loading 1s cubic-bezier(0.5, 0, 0.5, 1) infinite;\n            border-color: var(--color-primary) transparent transparent transparent;\n        }\n\n        .uc-pageloader>.loading>div:nth-child(1) {\n            animation-delay: -0.1s;\n        }\n\n        .uc-pageloader>.loading>div:nth-child(2) {\n            animation-delay: -0.2s;\n        }\n\n        .uc-pageloader>.loading>div:nth-child(3) {\n            animation-delay: -0.3s;\n        }\n\n        @keyframes uc-loading {\n            0% {\n                transform: rotate(0deg);\n            }\n\n            100% {\n                transform: rotate(360deg);\n            }\n        }\n        html.show-preloader body {\n            display: none;\n        }\n        `);
    document.head.append(style);
  }
  const preloader = document.createElement("div");
  preloader.classList.add("uc-pageloader");
  preloader.innerHTML = `\n        <div class="loading">\n            <div></div><div></div><div></div><div></div>\n        </div>\n    `;
  document.documentElement.classList.add("show-preloader");
  document.documentElement.append(preloader);
  const t0 = Date.now();
  (async () => {
    await new Promise(r => document.addEventListener("DOMContentLoaded", r));
    document.documentElement.classList.remove("show-preloader");
    await new Promise(r => requestAnimationFrame(r));
    await new Promise(r => setTimeout(r, Math.max(0, 500 - (Date.now() - t0))));
    preloader.style.transition = "opacity " + duration + "s " + easing;
    preloader.style.opacity = 0;
    await new Promise(r => setTimeout(r, duration * 1e3));
    preloader.remove();
  })();
}

// START_DEV_ONLY (this code will not be included in theme.zip that is generated by 'npm run build-theme')
// WP dev.
window.addEventListener("message", e => {
  if (e.data.type === "scroll") {
    window.scrollTo(e.data.x, e.data.y);
  }
});

document.addEventListener("DOMContentLoaded", e => {
  document.documentElement.scrollTop = +(localStorage.getItem("scrollY") || 0) || 0;
  window.addEventListener("scroll", e => {
    localStorage.setItem("scrollY", document.documentElement.scrollTop + "");
  });
});

// Set dark mode via url.
// ?dark=1
{
  const dark = new URLSearchParams(location.search).get("dark");
  if (dark === "1") {
    document.documentElement.classList.add("uc-dark");
  } else if (dark === "0") {
    document.documentElement.classList.remove("uc-dark");
  }
}

// END_DEV_ONLY
// START_DEV_ONLY
if (new URLSearchParams(location.search).get("editor")) {
  import("./editor.js");
} else {
  const url = new URL(location.href);
  url.searchParams.set("editor", "1");
  const lines = [];
  lines.push("You can enable the editor mode by adding ?editor=1 to the url");
  lines.push(`Example: ${url.href}`);
  const maxLength = Math.max(...lines.map(l => l.length));
  console.log("%c" + lines.map(line => line.padEnd(maxLength, " ")).join("\n"), /*css*/ `\n    background-color: #222;\n    color: #bada55;\n    border: solid 1px #bada55;\n    padding: 5px 20px;\n    `);
}
// END_DEV_ONLY
// START_DEV_ONLY
// Object.assign(window, {
//     WebSocket: class {
//         addEventListener() {}
//     }
// });
// END_DEV_ONLY