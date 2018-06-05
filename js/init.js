$(document).ready(function(){
    $('.sidenav').sidenav();
  });
$(document).ready(function(){
    $('.tabs').tabs();
  });

$(document).ready(function(){
    
    const Calender = document.querySelector('.datepicker');
        M.Datepicker.init(Calender,{
          format:'dd/mm/yyyy',
          showClearBtn:true,
          yearRange:27,
          autoClose:true
        });
  });
