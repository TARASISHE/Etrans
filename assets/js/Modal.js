jQuery(document).ready(function ($) {
  const lang = document.querySelector('body').id;
  const modal = {
    openModal(btn) {
      if (btn.getAttribute("data-id") == "get-transport") {
        let weight = btn.closest(".transport").querySelector(".circle div.h1")
          .innerHTML;
        $(`#${btn.getAttribute("data-id")}`).attr("data-weight", +weight);
        $(`#${btn.getAttribute("data-id")}`)
          .find("div.h1 span")
          .text(`до ${weight} тонн`);
      }
      document.querySelector(".pop-up-wrapper").classList.remove("close");
      document.querySelector(".pop-up-wrapper").classList.add("open");
      $(`#${btn.getAttribute("data-id")}`).slideToggle(400);
    },
    closeModal(elemClose) {
      let inputs = $(elemClose.closest(".popup-form")).find("input");
      for (let input of inputs) {
        $(input).css("border", "1px transparent");
        input.value = "";
      }
      $(".popup-form .errors").css({
        height: "0px",
        width: "0px",
        "margin-top": "0px",
      });
      $(".popup-form .errors").val("");
      $(elemClose.closest(".popup-form")).hide(400);
      setTimeout(() => {
        document.querySelector(".pop-up-wrapper").classList.remove("open");
        document.querySelector(".pop-up-wrapper").classList.add("close");
      }, 400);
    },
    imgZoomToggle(imgZoom) {
      let wrapper = document.createElement("div");
      wrapper.className = "img-zoom-wrapper";
      let imgItem = document.createElement("img");
      imgItem.src = imgZoom.querySelector("img").src;
      let icon = document.createElement("i");
      icon.className = "zoom-close far fa-times-circle";
      wrapper.append(imgItem);
      wrapper.append(icon);
      document.body.append(wrapper);
      $(".zoom-close").on("click", function () {
        this.closest(".img-zoom-wrapper").remove();
      });
    },
  };
  const mainForm = {
    buttons: document.querySelectorAll(".modal .next-btn"),

    initClick: () => {
      for (let btn of mainForm.buttons) {
        btn.addEventListener("click", mainForm.mainModalSlide);
      }
    },

    validate: function (currentForm) {
      const inputs = currentForm.closest(".modal").querySelectorAll("input");
      const errors = [];
      for (let input of inputs) {
        if (input.value.length == 0) {
          errors.push(1);
          $(input).css("border", "1px solid red");
        } else {
          $(input).css("border", "1px solid green");
        }
      }
      return errors;
    },

    mainModalSlide: function (e) {
      e.preventDefault();
      let errors = mainForm.validate(this);
      if (errors.length > 0) {
        $(".modal .errors").css({
          height: "30px",
          width: "300px",
          "margin-top": "20px",
        });
        this.closest(".modal").querySelector(".errors").innerHTML = 
          lang == 'ru'?
          "*Все поля должны быть заполнены":
          '* Всі поля повинні бути заповнені'
        return;
      }
      let curr = this.closest(".modal").id;
      document.querySelector(`#${curr}`).style.transform = "translateX(-100vw)";
      let num = curr[curr.length - 1];
      num = num == 3 ? 0 : num;
      if (num == 1) {
        $(".main-form-section .container .row .left-col").css(
          "margin-bottom",
          "400px"
        );
        $(".main-form-section ").addClass('long-form');
      } else {
        $(".main-form-section .container .row .left-col").css(
          "margin-bottom",
          "0px"
        );
        if($(".main-form-section ").hasClass('long-form')){
          $(".main-form-section ").removeClass('long-form');
        }
      }
      document.querySelector(`#main-form-${+num + 1}`).style.transform =
        "translateX(0)";
      $(".modal .errors").css({
        height: "0px",
        width: "0px",
        "margin-top": "0px",
      });
    },
  };
  mainForm.initClick();
  $(".pop-up-btn").on("click", function () {
    modal.openModal(this);
  });
  $(".form-close").on("click", function () {
    modal.closeModal(this);
  });
  $(".img-zoom").on("click", function () {
    modal.imgZoomToggle(this);
  });
});
