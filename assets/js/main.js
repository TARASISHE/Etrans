jQuery(document).ready(function ($) {
  const lang = document.querySelector('body').id;
  
  //////slick
  if (window.innerWidth <= 567) {
    $(".transport-types").slick({
      infinite: true,
      arrows: true,
      dots: true,
    });
  }
  $(".process-slider").slick({
    infinite: true,
    arrows: true,
    dots: true,
    slidesToShow: 2,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $("#team-slider").slick({
    slidesPerRow: 4,
    rows: 2,
    infinite: true,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesPerRow: 2,
        },
      },
    ],
  });
  $("#case-slider").slick({
    infinite: true,
    arrows: true,
    dots: false,
  });
  /////Adaptive styles///////////////
  if (window.innerWidth <= 567) {
    $(".road-map hr").css(
      "height",
      120 + +$(".case-example .target").height() + "px"
    );
  } else if (window.innerWidth <= 890) {
    $(".road-map hr").css(
      "height",
      150 + +$(".case-example .target").height() + "px"
    );
  }

  ///

  const mobNav = {
    open: document.querySelector(".small-nav-bars"),
    close: document.querySelector(".mob-nav .close"),
    initOpen: () => {
      $(".mob-nav").css("left", "0px");
    },
    initClose: () => {
      $(".mob-nav").css("left", "-100vw");
    },
  };
  mobNav.open.addEventListener("click", mobNav.initOpen);
  mobNav.close.addEventListener("click", mobNav.initClose);

  const howWeWork = {
    btns: document.querySelectorAll(".how-we-work-slider .btn"),
    infoH2: document.querySelector(".how-we-work-slider .col-right h2"),
    infoP: document.querySelector(".how-we-work-slider .col-right p"),
    number: document.querySelector(".how-we-work-slider .col-right .number"),
    changeContent: function () {
      let mainText = this.getAttribute("data-info");
      let headerText = this.innerHTML;
      let currNum = this.querySelector(".number").textContent;
      if (window.innerWidth <= 1280) {
        if (document.querySelector(".btn-info"))
          document.querySelector(".btn-info").remove();
        let info = document.createElement("div");
        info.className = "btn-info";
        info.textContent = mainText;
        this.after(info);
      } else {
        howWeWork.infoH2.innerHTML = headerText;
        howWeWork.number.textContent = currNum;
        document.querySelector(
          ".how-we-work-slider .col-right h2 .number"
        ).textContent = "";
        howWeWork.infoP.textContent = mainText;
      }
      for (let item of howWeWork.btns) {
        item.classList.remove("current");
      }
      this.classList.add("current");
    },
  };
  for (let item of howWeWork.btns) {
    item.addEventListener("click", howWeWork.changeContent);
  }
  
  /////////////////Nav menu toggle

  function appendMob() {
    if (window.innerWidth <= 1280) {
      const mobMenu = document.createElement("ul");
      mobMenu.className = "menu-tax-list";
      mobMenu.id = "menu-tax-list-mob";
      mobMenu.innerHTML = document.querySelector(".menu-tax-list").innerHTML;
      $(".menu-nav-list #menu-item-services ").append(mobMenu);
      $("header #menu-tax-list").remove();
    }
  }
  appendMob();

  const navMenu = {
    items: document.querySelectorAll(".sub-menu-item"),
    itemsMobTop: document.querySelector(".mob-nav #menu-item-services"),
    itemsMobMidd: document.querySelectorAll(".menu-toggle-item-midd"),
    itemsMobBottom: document.querySelectorAll(".menu-toggle-item-bottom"),
    nav: document.querySelector(".menu-tax-list").innerHTML,
    addData: () => {
      for (let item of navMenu.items) {
        item.setAttribute("data-height", item.querySelector("ul").offsetHeight);
        item.querySelector("ul").style.height = "0px";
        item.addEventListener("click", navMenu.initOpen);
      }
    },
    addDataMob: () => {
      let arr = Array.from(navMenu.itemsMobBottom).concat(
        Array.from(navMenu.itemsMobMidd)
      );
      arr.forEach((element) => {
        element.setAttribute(
          "data-height",
          element.querySelector("ul").offsetHeight
        );
        element.querySelector("ul").style.height = "0px";
      });
      navMenu.itemsMobTop.setAttribute(
        "data-height",
        navMenu.itemsMobTop.querySelector("ul").offsetHeight
      );
      $(".mob-nav #menu-item-services ul").css({ height: "0px" });
    },
    initOpen: function (e) {
      let currHeight = this.querySelector("ul").offsetHeight;
      if (currHeight == 0) {
        this.closest("li").querySelector("ul").style.height =
          e.target.getAttribute("data-height") + "px";
      } else {
        this.querySelector("ul").style.height = "0px";
      }
    },
    addHeightTopLvl: function (currHght, elem) {
      if (currHght == 0) {
        $(".menu-tax-list").css({
          height:
            +$(".menu-tax-list").height() + +$(elem).attr("data-height") + "px",
        });
      } else {
        $(".menu-tax-list").css({
          height:
            +$(".menu-tax-list").height() - +$(elem).attr("data-height") + "px",
        });
      }
    },
    addHeightMiddLvl: function (currHeight, elem) {
      if (currHeight == 0) {
        $(elem)
          .closest(".sub-menu")
          .css({
            height:
              +$(elem).closest(".sub-menu").height() +
              +$(elem).attr("data-height") +
              "px",
          });
      } else {
        $(elem)
          .closest(".sub-menu")
          .css({
            height:
              +$(elem).closest(".sub-menu").height() -
              +$(elem).attr("data-height") +
              "px",
          });
      }
    },
    setTime: () => {
    timeAfter = setTimeout(() => {
      $(".menu-tax-list").css({
        opacity: "0",
        visibility: "hidden",
      });
    }, 1000);
  },
   clearTime: () => {
    clearTimeout(timeAfter);
    timeAfter = false;
  },
    initShow: () => {
      $(".menu-tax-list").css({ opacity: "1", visibility: "visible" });
    },
    initHide: (e) => {
      if (window.innerWidth >= 1280) {
        let currOpacity = $(".menu-tax-list").css("opacity");
        if ( !e.target.closest(".menu-tax-list") && currOpacity == "1" && !e.target.closest("#menu-item-services ") ) {
          if (!timeAfter) navMenu.setTime();
        } else if (
          e.target.closest(".menu-tax-list") ||
          e.target.closest("#menu-item-services")
        ) {
          if (timeAfter) navMenu.clearTime();
        }
      }
    },
  };
    let timeAfter;
  if (window.innerWidth <= 1280) {
    $(".mob-nav #menu-item-services ").on("click", toggleTopLvl);
    $(".menu-toggle-item-midd").on("click", toggleMiddLvl);
    $(".menu-toggle-item-bottom").on("click", toggleBottomLvl);
    navMenu.addDataMob();
  } else {
    navMenu.addData();
  }
  document
    .querySelector("#menu-item-services ")
    .addEventListener("mouseover", navMenu.initShow);
  document
    .querySelector("body")
    .addEventListener("mousemove", navMenu.initHide);

  /////
  function toggleTopLvl(e) {
    if (e.target.className != "menu-toggle-item-top") return;
    let currHeight = $(".menu-tax-list").height();
    if (currHeight == 0) {
      $(".menu-tax-list").css({ height: $(this).attr("data-height") + "px" });
    } else {
      $(this).attr("data-height", $(".menu-tax-list").height());
      $(".menu-tax-list").css("height", "0px");
    }
  }
  function toggleMiddLvl(e) {
    if (e.target.className != "menu-toggle-item-midd") return;
    let currHeight = $(this).children(".sub-menu").height();
    if (currHeight == 0) {
      navMenu.addHeightTopLvl(currHeight, this);
      $(this)
        .children(".sub-menu")
        .css("height", $(this).attr("data-height") + "px");
    } else {
      $(this).attr("data-height", $(this).children(".sub-menu").height());
      $(this).children(".sub-menu").css("height", "0px");
      navMenu.addHeightTopLvl(currHeight, this);
    }
  }
  function toggleBottomLvl() {
    let currHeight = $(this).children(".sub-menu-terms").height();
    if (currHeight == 0) {
      navMenu.addHeightTopLvl(currHeight, this);
      navMenu.addHeightMiddLvl(currHeight, this);
      $(this)
        .children(".sub-menu-terms")
        .css("height", $(this).attr("data-height") + "px");
    } else {
      $(this).children(".sub-menu-terms").css("height", "0px");
      navMenu.addHeightTopLvl(currHeight, this);
      navMenu.addHeightMiddLvl(currHeight, this);
    }
  };

  document.querySelector('.mob-phone-toggle').addEventListener('click', function(e){
    if(e.target.tagName == 'I') return;
    this.querySelector('.phone-wrapper').style.display = 'flex';
    setTimeout(()=>{
      this.classList.add('opened');
    }, 100);
  });
  document.querySelector('.mob-phone-toggle .phone-modal_close').addEventListener('click', function(){
    this.closest('.mob-phone-toggle').classList.remove('opened');
    setTimeout(()=>{
      this.closest('.phone-wrapper').style.display = 'none';
    }, 300)
  });

  ////////////////
  // function scrollTopShow() {
  //   if (window.pageYOffset > 0) {
  //     if (window.innerWidth < 768) {
  //       $(".scroll-top").css("bottom", "30px");
  //     } else {
  //        $(".scroll-top").css("bottom", "50px");
  //    }
  //   } else {
  //     $(".scroll-top").css("bottom", "-100px");
  //   }
  // };
  // $(".scroll-top").click(function () {
  //   $("html, body").animate({ scrollTop: 0 }, 500);
  //   return false;
  // });
  // window.addEventListener('scroll', scrollTopShow);
});
