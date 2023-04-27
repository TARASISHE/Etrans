"use strict";

$(document).ready(function () {
  const lang = document.querySelector('body').id;

  function closeModal(form) {
    if (form.closest("#main-form-3")) {
      document.querySelector(`#main-form-3`).style.transform =
        "translateX(-100vw)";
      document.querySelector(`#main-form-1`).style.transform =
        "translateX(0px)";
      let inputs = Array.from($("#main-form-1 input"))
        .concat(Array.from($("#main-form-2 input")))
        .concat(Array.from($("#main-form-3 input")));
      inputs.forEach((input) => {
        $(input).css("border", "1px solid #656565");
        input.value = "";
      });
    } else if (form.closest(".contact-form")) {
      const inputs = Array.from(form.querySelectorAll("input"));
      inputs.push(form.querySelector("textarea"));
      inputs.forEach((input) => {
        $(input).css("border", "1px solid #656565");
        input.value = "";
      });
      $(form.querySelector(".errors")).css({
        height: "0px",
        width: "0px",
        "margin-top": "0px",
      });
      $(form.querySelector(".errors")).val("");
    } else {
      let inputs = form.querySelectorAll("input");
      for (let input of inputs) {
        $(input).css("border", "1px solid #656565");
        input.value = "";
      }
      $(form.querySelector(".errors")).css({
        height: "0px",
        width: "0px",
        "margin-top": "0px",
      });
      $(form.querySelector(".errors")).val("");
      $(form.closest(".popup-form")).hide(400);
      setTimeout(() => {
        document.querySelector(".pop-up-wrapper").classList.remove("open");
        document.querySelector(".pop-up-wrapper").classList.add("close");
      }, 400);
    }
  }
  function closeAlert() {
    $(".alert").css({ top: "-100vh", opacity: "0" });
    setTimeout(() => {
      $(".alert").remove();
    }, 500);
  }
  function createAlert(html, alertClass) {
    let alert = document.createElement("div");
    alert.style.top = "-100vh";
    let icon = document.createElement("icon");
    let txt = document.createElement("p");
    txt.innerHTML = html;
    icon.className = "fas fa-exclamation-circle";
    alert.className = alertClass;
    alert.append(icon);
    alert.append(txt);
    document.body.append(alert);
  }
  function successAlert(formElem) {
    let html = lang == 'ru' ? "Спасибо за заявку!<br> Очень скоро мы вам ответим" : "Дякуємо за заявку! <br> Дуже скоро ми вам відповімо";
    let alertClass = "alert alert-success";
    createAlert(html, alertClass);
    setTimeout(() => {
      $(".alert").css({ top: "15%", opacity: "1" });
    }, 100);
    setTimeout(closeAlert, 5000);
  }
  function failAlert(formElem) {
    let html = lang == 'ru' ? "Ошибка!<br> Заявка не была отправлена, попробуйте еще раз" : "Помилка! <br> Заявка не була відправлена, спробуйте ще раз";
    let alertClass = "alert alert-fail";
    createAlert(html, alertClass);
    setTimeout(() => {
      $(".alert").css({ top: "15%", opacity: "1" });
    }, 100);
    setTimeout(closeAlert, 3000);
  }
  function validate(form) {
    let errors = [];
    const name = form.querySelector('input[name="name"]');
    const tel = form.querySelector('input[name="phone"]');
    let telVal = tel.value.replace(/\s/g, "").length;
    if (name.value.length == 0) {
     lang == 'ru' ? errors.push("*Имя не должно быть пустым") : errors.push("*Ім'я не повинно бути порожнім");

      $(name).css("border", "1px solid red");
    } else $(name).css("border", "1px solid green");
    if (telVal != 13 && telVal != 12 && telVal != 10) {
    lang == 'ru' ?  errors.push("*Некоректний номер телефона") : errors.push("*Некоректний номер телефону");
      $(tel).css("border", "1px solid red");
    } else $(tel).css("border", "1px solid green");
    if (errors.length > 0) {
      $(form.querySelector(".errors")).css({
        height: "30px",
        width: "375px",
        "margin-top": "20px",
      });
      form.querySelector(".errors").innerHTML = errors[0];
    }
    return errors;
  }
  function validateContactForm(form) {
    let errors = [];
    let inputs = Array.from(form.querySelectorAll(".input"));
    inputs.push(form.querySelector("textarea"));
    inputs.forEach((input) => {
      if (input.value.length == 0) {
        console.log(input);
      lang == 'ru' ?  errors.push("*Все поля должны быть заполнены") : errors.push("*Всі поля повинні бути заповнені");
        $(input).css("border", "1px solid red");
      } else {
        $(input).css("border", "1px solid green");
      }
    });
    if (!form.querySelector('input[name="check"]').checked) {
      lang == 'ru' ?  errors.push("*Согласитесь с обработкой персональных данных") : errors.push("*Погодьтеся з обробкою персональних даних");
    }
    if (errors.length > 0) {
      $(form.querySelector(".errors")).css({
        height: "60px",
        width: "375px",
        "margin-top": "20px",
      });
      form.querySelector(".errors").innerHTML = errors[0];
    }
    return errors;
  }
  function sendData(data, formElem) {
    let action = $(formElem).attr("action");
    $.ajax({
      url: action,
      type: "POST",
      data: data,
    })
      .done((data) => {
        if (data[data.length - 1] == 0 || data[data.length - 1] == 1) {
          data = data.substring(0, data.length - 1);
        }
        data = JSON.parse(data);
        if (data.success) {
          successAlert(formElem);
        } else failAlert(formElem);
      })
      .fail(() => {
        failAlert(formElem);
      })
      .always(() => {
        closeModal(formElem);
      });
  }

  $(".popup-form form").on("submit", function (e) {
    e.preventDefault();
    let errors = validate(this);
    if (errors.length > 0) return;
    let data = {
      form_id: this.closest(".popup-form").id,
      name: this.querySelector('input[name="name"]').value,
      phone: this.querySelector('input[name="phone"]').value,
    };
    if (this.closest(".popup-form").getAttribute("data-weight")) {
      data.data_weight = this.closest(".popup-form").getAttribute(
        "data-weight"
      );
    }
    sendData(data, this);
  });
  $("#main-form-3 form").on("submit", function (e) {
    e.preventDefault();
    let errors = validate(this);
    if (errors.length > 0) return;
    let data = {
      name: this.querySelector('input[name="name"]').value,
      phone: this.querySelector('input[name="phone"]').value,
      fromPoint: $('#main-form-1 input[name="from"]').val(),
      toPoint: $('#main-form-1 input[name="to"]').val(),
      date: $('#main-form-2 input[name="date"]').val(),
      productType: $('#main-form-2 input[name="productType"]').val(),
      transportType: $('#main-form-2 input[name="transportType"]').val(),
      weight: $('#main-form-2 input[name="weight"]').val(),
      metrics: $('#main-form-1 input[name="metrics"]').val(),
    };
    sendData(data, this);
  });

  $(".contact-form form").on("submit", function (e) {
    e.preventDefault();
    let errors = validateContactForm(this);
    if (errors.length > 0) return;
    let data = {
      name: this.querySelector('input[name="name"]').value,
      email: this.querySelector('input[name="email"]').value,
      message: this.querySelector('textarea[name="message"]').value,
    };
    sendData(data, this);
  });
});
