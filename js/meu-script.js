$(window).scroll(function() {
    // Verifique a posição da rolagem em relação à parte superior da janela
    var scrollTop = $(this).scrollTop();
    
    // Seletor para os elementos que você deseja animar
    var elementos = $('.wow');
    
    elementos.each(function() {
      var elementTop = $(this).offset().top;
      
      // Verifique se o elemento está visível na janela
      if (elementTop - scrollTop < $(window).height() - 100) {
        $(this).addClass('animated'); // Adicione uma classe CSS para aplicar a animação
      }
    });
  });
  