const toggler = document.querySelector(".btn");
toggler.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});


document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('ssn');

    input.addEventListener('input', function (event) {
      var value = event.target.value.replace(/\D/g, '');
      var formattedValue = '';

      if (value.length > 0) {
        formattedValue = value.slice(0, 3);
      }

      if (value.length > 3) {
        formattedValue += '-' + value.slice(3, 5);
      }

      if (value.length > 5) {
        formattedValue += '-' + value.slice(5, 9);
      }

      input.value = formattedValue;
    });

    input.addEventListener('keydown', function (event) {
      if (event.key === 'Backspace') {
        var caretPos = input.selectionStart;

        input.value =
          input.value.slice(0, caretPos - 1) +
          input.value.slice(caretPos);

        input.selectionStart = caretPos - 1;
        input.selectionEnd = caretPos - 1;

        event.preventDefault();
      }
    });
  });