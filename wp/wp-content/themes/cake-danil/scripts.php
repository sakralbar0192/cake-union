<?php wp_footer();?>

<script>
  if (document.querySelector('#map-container')) {
    const mapContainer = document.querySelector('#map-container');
    let isMapLoaded = false;
    let mapPosition = mapContainer.getBoundingClientRect().top + pageYOffset;

    function createYaMap(){
      var myMap = new ymaps.Map("map-container", {
        center: [<?php the_field('center_coordinates', 'options')?>],
        controls: [],
        zoom: <?php the_field('zoom', 'options')?>
      });

      var myPlacemark = new ymaps.Placemark([<?php the_field('placemark_coordinates', 'options')?>], {
        preset: 'islands#greenStretchyIcon'
      });

      myMap.geoObjects.add(myPlacemark);

      myMap.controls.remove();
      myMap.behaviors.disable('scrollZoom');

      //на мобильных устройствах... (проверяем по userAgent браузера)
      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        //... отключаем перетаскивание карты
        myMap.behaviors.disable('drag');
      }
    }

    function connectMapComponents() {
      const element = document.createElement("script");
      element.src = "https://api-maps.yandex.ru/2.1/?&lang=ru_RU&onload=createYaMap";
      document.body.appendChild(element);
    }

    const checkPosition = () => {
      if (pageYOffset+300 > mapPosition-window.innerHeight && !isMapLoaded) {
        connectMapComponents()
          isMapLoaded = true;
      }
    }

    window.addEventListener('scroll', checkPosition);
  }
</script>
