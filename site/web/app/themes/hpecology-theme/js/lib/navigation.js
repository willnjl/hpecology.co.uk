((d, w) => {
  const header = d.querySelector("header");
  const navMask = d.querySelector("#nav-mask");

  header.addEventListener("mouseenter", () => {
    header.classList.add("nav-down");
  });

  const btn = d.getElementById("navicon");
  const body = d.querySelector("body");
  const siteNavigation = header;
  let className = "sidenav-open";
  let open = false;

  const toggleMenu = () => {
    open = !open;
    if (open) {
      body.classList.add(className);
      btn.classList.add("is-active");
    } else {
      body.classList.remove(className);
      btn.classList.remove("is-active");
    }
  };

  btn.addEventListener("click", () => {
    toggleMenu();
  });

  const sidenav = d.getElementById("site-navigation");
  document.addEventListener("click", function (event) {
    const isClickInside = siteNavigation.contains(event.target);
    const isClickLink = sidenav.contains(event.target);
    if (isClickLink || !isClickInside) {
      body.classList.remove(className);
      btn.classList.remove("is-active");
    }
  });

  w.addEventListener("scroll", () => {
    let posY = w.scrollY;
    if (scrollY > 10) {
      btn.classList.add("circled");
    } else {
      btn.classList.remove("circled");
    }
  });
})(document, window);
