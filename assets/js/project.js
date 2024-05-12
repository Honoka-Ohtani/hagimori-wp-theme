window.addEventListener('load', (event) => {
  const works_list = document.querySelector('.works-list');

  if (works_list) {
    const magicGrid = new MagicGrid({
      container: '.works-list',
      maxColumns: 3,
      animate: true,
      gutter: 10,
      static: false,
      items: 3,
      useMin: true
    });
    
    magicGrid.listen();
  }

});