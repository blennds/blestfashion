  //LOCAL STORAGE
  let getNumber = localStorage.getItem("number") == null ? 0 : localStorage.getItem("number");
  $('.shopping-bag-number').text(getNumber);

  $(document).ready(function() {
    $('.btn-for-shop').click(function() {
      let currentNumber = $('.shopping-bag-number').text();
      localStorage.setItem("number" , ++currentNumber ); 
      $('.shopping-bag-number').text(currentNumber);

    });

  });




