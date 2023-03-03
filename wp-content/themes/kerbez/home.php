<?php
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>

<section class="section info">

  <div class="container">

    <h2 class="title">
      Наши клиенты <span class="title__sub">доверяют нам:</span>
    </h2>

    <div class="info__content">

      <div class="info__item">

        <h3 class="info__title">
          Креативные идеи:
        </h3>

        <p class="info__text">
          мы умением сочетать различные элементы интерьера, чтобы создать уникальные решения.
        </p>

      </div>
      <div class="info__item">

        <h3 class="info__title">
          Профессиональный подход:
        </h3>

        <p class="info__text">
          наши дизайнеры имеют профессиональное образование и опыт работы в данной области.
        </p>

      </div>
      <div class="info__item">

        <h3 class="info__title">
          Экономия времени и денег:
        </h3>

        <p class="info__text">
          мы поможем выбрать материалы и мебель, что позволяет экономить время и снижать затраты.
        </p>

      </div>
      <div class="info__item">

        <h3 class="info__title">
          Индивидуальный подход:
        </h3>

        <p class="info__text">
          каждый проект для нас уникален и требует индивидуального подхода.
        </p>

      </div>

    </div>

  </div>

  <div class="container_2">
    <div class="info__images">
      <img class="info__img" src="<?php echo get_template_directory_uri(); ?>/images/info/1.png" alt="картинка">
    </div>
  </div>

</section>

<section class="section portfolio">

  <div class="container">

    <h2 class="title">Порфтолио:</h2>

    <ul class="portfolio__list">
      <li class="portfolio__item">
        <img class="portfolio__img" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/1.jpg" alt="картинки">
      </li>
      <li class="portfolio__item">
        <img class="portfolio__img" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/1.jpg" alt="картинки">
      </li>
      <li class="portfolio__item">
        <img class="portfolio__img" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/1.jpg" alt="картинки">
      </li>
      <li class="portfolio__item">
        <img class="portfolio__img" src="<?php echo get_template_directory_uri(); ?>/images/portfolio/1.jpg" alt="картинки">
      </li>
    </ul>

  </div>

</section>

<section class="section rate">

  <div class="container">

    <h2 class="title">Тарифы:</h2>

    <div class="rate__box">

      <div class="rate__item rate__item_top">

        <p class="rate__service_top rate__item_text">Вид услуги</p>

        <p class="rate__work_top rate__item_text">Виды работ</p>

        <p class="rate__price_top rate__item_text">Стоимость, тг.</p>

      </div>

      <div class="rate__item">

        <p class="rate__service  rate__item_text">Экспресс - проект</p>

        <p class="rate__work rate__item_text">- Подготовка технического задания;
          - Обмерный план;
          - Демонтажный план;
          - План возводимых перегородок;
          - Расстановка мебели (несколько вариантов)
        </p>

        <p class="rate__price rate__item_text">3000 тг/кв.м.</p>

      </div>

      <div class="rate__item">

        <p class="rate__service  rate__item_text">Усеченный дизайн-проект (планировочные решения+рабочая документация)</p>

        <p class="rate__work rate__item_text"> - Подготовка технического задания;
          - Обмерный план;
          - Демонтажный план;
          - План возводимых перегородок;
          - План расстановки мебели;
          - План розеток;
          - План светильников и выключателей,
          - План полов,
          - Детализация проекта;

        </p>

        <p class="rate__price rate__item_text">5000 тг/кв.м.</p>

      </div>

      <div class="rate__item">

        <p class="rate__service  rate__item_text">Полный дизайн-проект (планировочные решения+рабочая документация+подбор отделочных материалов, визуализация объекта)</p>

        <p class="rate__work rate__item_text"> - Подготовка технического задания;
          - Обмерный план;
          - Демонтажный план;
          - План возводимых перегородок;
          - План расстановки мебели;
          - План розеток;
          - План светильников и выключателей,
          - План полов,
          - Детализация проекта;
          - 3д визуализация основных комнат

        </p>

        <p class="rate__price rate__item_text">8000 тг/кв.м.</p>

      </div>

      <div class="rate__item">

        <p class="rate__service  rate__item_text">Авторский надзор</p>

        <p class="rate__work rate__item_text">- - Соблюдение идей и разработок дизайнера;
          - Выезд на объект и консультация со строителями (в неделю 2 раза, отдельно оговаривается в договоре);
          - Помощь в подборе отделочных материалов для будущего интерьера;
          - Консультация в подборе сантехники, плитки, мебели, и др.

        </p>

        <p class="rate__price rate__item_text">В месяц – 200000 тг,
          Разовый выезд на объект – 20000 тг
        </p>

      </div>

      <div class="rate__item">

        <p class="rate__service  rate__item_text">Консультация дизайнера</p>

        <p class="rate__work rate__item_text">- - Советы по выбору квартиры с учетом планируемого интерьера;
          - Возможные варианты перепланировки
          - Возможные варианты переделки старой квартиры или нежилого помещения;
          - Советы по декорированию интерьера;
          - Предварительные планировочные решения;
          - Оптимизация площадей, имеющихся в квартире

        </p>

        <p class="rate__price rate__item_text">20000 тг. за 2 ч. консультации</p>

      </div>

    </div>

  </div>

</section>

<section class="section review">

  <div class="container">

    <h2 class="title">Отзывы:</h2>
  </div>
  <div class="container_2">

    <div class="review__inner">

      <div class="review__box">

        <h4 class="review__name">Диана</h4>

        <p class="review__text">Мы из Павлодара, купили квартиру в Алматы в черновой отделке, встал вопрос ремонта, обратились в дизайн студию "Kerbez Design". В кратчайшие сроки разработали дизайн-проект, который утвердила в онлайн режиме. Приезжала в два месяца один раз, чтобы контролировать процесс строительства, остальное время работники студии вели авторский надзор. Все было закончено в оговоренные сроки. Очень довольны работой специалистов студии. Успехов вам и процветания в Вашем нелегком труде!</p>

      </div>

      <div class="review__box">

        <h4 class="review__name">Комеков Айбек</h4>

        <p class="review__text">Купил новую квартиру и встал вопрос с ремонтом. Я точно знал, чего я хочу, поэтому мы с дизайнером быстро нашли общий язык. Создали проект, визуализировали, сделали. Все вышло так, как я и хотел. Оперативно, качественно, профессионально. Молодцы.</p>

      </div>

      <div class="review__box">

        <h4 class="review__name">Кожахметов Бауыржан</h4>

        <p class="review__text">Данную студию мне посетовал мой знакомый. Сразу же заказал дизайн-проект. Девочки работают очень оперативно, работа шла параллельно, разрабатывалась 3d картинка и соответствующие чертежи к ним, и тут же реализовывалась. В итоге начав ремонт дома площадью 500 кв.м. весной, мы закончили его в сентябре. Очень благодарен данной студии и советую всем.</p>

      </div>

      <div class="review__box">

        <h4 class="review__name">Жанна</h4>

        <p class="review__text">Давно хотели с мужем обустроить квартиру. Обратились в эту студию и не прогадали! Дизайнеры учли все наши предпочтения и создали стильный проект, при этом уложились в бюджет. Сделали все качественно, быстрее чем мы ожидали. Рекомендуем.</p>

      </div>

    </div>

  </div>

</section>

<section class="section about">

  <div class="container">

    <h2 class="title">О компании:</h2>

    <div class="about__info">

      <h4 class="about__title">
        Каждый наш проект это не только часть нашей работы, но и часть нашей жизни, куда мы  вкладываем частичку
        души.
      </h4>

      <p class="about__text">
        Разработка проектов производится  на новых программах, что сокращает сроки реализации проекта. Также имеются
        строительные организации - партнеры, строительные бригады с которыми мы работаем на протяжении 5 лет. Все
        этапы работ,
        которые мы выполняем  в рамках проекта, оформляются отдельными  договорами. Данный формат позволяет
        заказчику
        разобраться, из чего состоит каждый этап работы, какой результат стоит ожидать, а также дает возможность
        заказчику
        привлекать дизайнера строго на определенный вид работ.
      </p>

    </div>

  </div>

  <div class="container_2">

    <div class="about__images">
      <img class="about__img" src="<?php echo get_template_directory_uri(); ?>/images/about/1.jpg" alt="картинка">
    </div>

  </div>

  <div class="container">

    <h2 class="title">
      Сотрудники <span class="title__sub">компании:</span>
    </h2>

    <div class="about__bottom">

      <div class="about__item">

        <img class="about__item_img" src="<?php echo get_template_directory_uri(); ?>/images/about/2.jpg" alt="сотрудники">

        <p class="about__item_text">
          Алтын – дизайнер интерьера со стажем более 7 лет, телефон
        </p>

      </div>
      <div class="about__item">

        <img class="about__item_img" src="<?php echo get_template_directory_uri(); ?>/images/about/2.jpg" alt="сотрудники">

        <p class="about__item_text">
          Айнур - дизайнер интерьера со стажем более 5 лет, телефон
        </p>

      </div>

    </div>

  </div>

</section>

<?php get_footer(); ?>