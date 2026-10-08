<? header('Content-type: text/html; charset=utf-8'); ?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Yandex.Metrika counter -->
  <?php if (file_exists($root . "/interface/seo/metrics.php")): ?>
    <?php require_once $root . '/interface/seo/metrics.php'; ?>
  <?php endif; ?>
  <!-- End Yandex.Metrika counter -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Add Icons -->
  <link rel="icon" type="image/ico" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="160x160" href="/apple-touch-icon.png">
  <!-- Add Title + Meta -->
  <?php if (file_exists($root . "/interface/seo/headtitle.php")): ?>
    <?php require_once $root . '/interface/seo/headtitle.php'; ?>
  <?php endif; ?>
  <!-- Add Styles -->
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css">
  <!-- Add Metrics -->
</head>

<body>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/65009764" style="position:absolute; left:-9999px;" alt=""></div>
  </noscript>
  <div class="site-wrapper">
    <!-- Подключение Header -->
    <?php if (file_exists($root . "/template/shared/header.php")): ?>
      <?php require_once $root . '/template/shared/header.php'; ?>
    <?php endif; ?>
    <!-- End Подключение Header -->
    <main class="site-content">
      <section class="section-inner bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100">
              <div class="hero-inner">
                <h1 class="h1-inner deco-line mb-0">
                  Контент и копирайтинг
                  <span>Содержание, помогающее решать задачи</span>
                </h1>
              </div>
              <p>
                Рассмотрим подготовку контента для сайта. У вас есть сайт, но нет готовых текстов и материалов для его наполнения.
                <span class="display-block">
                  Или существующее содержание устарело, плохо структурировано и не помогает посетителю понять ваше предложение? Подготовлю контент, который
                  соответствует задаче сайта, особенностям продукта и потребностям целевой аудитории.
                </span>
              </p>
              <p>
                Это не просто набор текстов. Содержание выстраивается как часть общей логики сайта:
                <span class="display-block font-middle color-white mt-05">Информация → понимание → доверие → решение → действие</span>
                <span class="display-block mt-05">Если готовых материалов нет — помогу определить, что необходимо подготовить и в каком формате.</span>
              </p>
            </div>
          </div>
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h3-title deco-line mb-15">Что получает ваш бизнес</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Понятное содержание</h3>
                <p>
                  Посетитель получает ответы на основные вопросы: что предлагает компания, для кого предназначен продукт или услуга, какую задачу они решают, в чём их
                  особенности и что делать дальше.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Структурированную информацию</h3>
                <p>Материалы распределяются по страницам и блокам так, чтобы посетителю было проще воспринимать информацию и находить нужное.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Содержание под конкретную аудиторию</h3>
                <p>Формулировки и подача учитывают особенности продукта, целевой аудитории и задачи конкретной страницы.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Единый стиль</h3>
                <p>Заголовки, описания, преимущества, призывы к действию и другие материалы формируют целостное восприятие сайта.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Готовый контент для публикации</h3>
                <p>Подготовленные материалы можно использовать при создании нового сайта или обновлении существующего.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Для кого подходит</h2>
                <ul class="tariff-list mb-1">
                  <li>
                    <span class="font-middle color-white">Малый и средний бизнес</span>
                    Для наполнения нового сайта или обновления существующего контента.
                  </li>
                  <li>
                    <span class="font-middle color-white">Компании с объемными услугами</span>
                    Для структурированного описания направлений, продуктов и отдельных предложений.
                  </li>
                  <li>
                    <span class="font-middle color-white">Эксперты и специалисты</span>
                    Для представления компетенций, услуг, опыта и профессиональных продуктов.
                  </li>
                  <li>
                    <span class="font-middle color-white">Интернет-магазины и сервисы</span>
                    Для подготовки описаний товаров, услуг, категорий и информационных разделов.
                  </li>
                  <li>
                    <span class="font-middle color-white">Новый или обновляемый сайт</span>
                    Если структура уже определена, но качественного содержания для неё пока нет.
                  </li>
                </ul>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h3-title deco-line mb-15">Какие материалы создаю</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Тексты страниц</h3>
                <p>Главная, услуги, продукты, о компании, контакты и другие разделы.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Тексты для лендингов</h3>
                <p>Заголовки, блоки, преимущества, аргументы и призывы к действию.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Описания услуг и продуктов</h3>
                <p>Понятное представление предложения и его особенностей.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Карточки товаров</h3>
                <p>Структурированные описания характеристик, преимуществ и условий.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">FAQ</h3>
                <p>Ответы на часто возникающие вопросы клиентов.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">CTA и микротексты</h3>
                <p>Кнопки, подписи, подсказки, сообщения форм и другие элементы интерфейса.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Информационные материалы</h3>
                <p>Инструкции, пояснения, кейсы и другие материалы, необходимые для конкретного сайта.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Как проходит работа</h2>
                <ul class="number-list mb-1">
                  <li>
                    <span>Определяем задачу</span>
                    Изучаем назначение сайта, целевую аудиторию, продукт или услугу и необходимые действия посетителя.
                  </li>
                  <li>
                    <span>Определяем состав контента</span>
                    Формируем перечень страниц, блоков и материалов, которые необходимо подготовить.
                  </li>
                  <li>
                    <span>Сбор информации</span>
                    Используются предоставленные заказчиком материалы: описание компании; информацию о продуктах и услугах; существующие тексты и документы;
                    характеристики; ответы на вопросы и другие доступные материалы. При необходимости уточняется недостающая информацию.
                  </li>
                  <li>
                    <span class="font-middle color-white">Подготовка содержания</span>
                    Разрабатываются тексты и другие материалы с учётом структуры сайта, аудитории и поставленной задачи.
                  </li>
                  <li>
                    <span class="font-middle color-white">Редакция и согласование</span>
                    Проверка содержания, устранение неточностей и повторений, согласование необходимых изменений.
                  </li>
                  <li>
                    <span class="font-middle color-white">Передача готовых материалов</span>
                    Предоставляю контент в согласованном формате, подготовленный для размещения на сайте.
                  </li>
                </ul>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Дополнительные возможности</h2>
                <h3 class="h3-title mb-15">При необходимости подготовку контента можно дополнить:</h3>
                <ul class="tariff-list mb-15">
                  <li>
                    <span class="font-middle color-white">Структурированием</span>
                    существующих материалов;
                  </li>
                  <li>
                    <span class="font-middle color-white">Редактурой и обновлением</span>
                    старых текстов;
                  </li>
                  <li>
                    <span class="font-middle color-white">Разработкой FAQ</span>
                    для ответов на типовые вопросы;
                  </li>
                  <li>
                    <span class="font-middle color-white">Подготовкой контента</span>
                    для лендинга;
                  </li>
                  <li>
                    <span class="font-middle color-white">Описаниями</span>
                    отдельных товаров и услуг;
                  </li>
                  <li>
                    <span class="font-middle color-white">Подготовкой</span>
                    кейсов;
                  </li>
                  <li>
                    <span class="font-middle color-white">Контентом</span>
                    для дополнительных страниц;
                  </li>
                  <li>
                    <span class="font-middle color-white">Адаптацией материалов</span>
                    под разные форматы.
                  </li>
                </ul>
                <p>Дополнительные работы рассчитываются отдельно.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="title-wrap line-separation col-100">
              <h2 class="h3-title deco-line mb-15">Тарифы</h2>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  START
                  <span class="titlecard">Стоимость: от 29 000&nbsp;&#8381;</span>
                </h3>
                <p>Для небольшого объёма контента. Включает:</p>
                <ul class="tariff-list mt-15 mb-15">
                  <li>определение состава материалов;</li>
                  <li>подготовку текстов;</li>
                  <li>базовую редактуру;</li>
                  <li>структуру страниц и блоков;</li>
                  <li>согласование;</li>
                  <li>передачу готовых материалов.</li>
                </ul>
              </article>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  BUSINESS
                  <span class="titlecard">Стоимость: от 59 000&nbsp;&#8381;</span>
                </h3>
                <p>Для полноценного наполнения сайта или крупного раздела. Дополнительно к START:</p>
                <ul class="tariff-list mt-15 mb-15 pl-0">
                  <li>более глубокая проработка структуры;</li>
                  <li>подготовка нескольких типов материалов;</li>
                  <li>работа с исходными материалами заказчика;</li>
                  <li>FAQ;</li>
                  <li>CTA и микротексты;</li>
                  <li>расширенная редактура;</li>
                  <li>адаптация содержания под целевую аудиторию.</li>
                </ul>
              </article>
            </div>
            <div class="col-100">
              <p>Точная стоимость определяется после оценки объёма и состава материалов.</p>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="title-wrap line-separation col-100">
              <h2 class="h3-title deco-line mb-15">Поддержка после запуска</h2>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  BASIC
                  <span class="titlecard">Стоимость: от 5 990&nbsp;&#8381; /месяц</span>
                </h3>
                <p>Базовая поддержка. Включает:</p>
                <ul class="tariff-list mt-15 mb-15">
                  <li>обновление существующей информации;</li>
                  <li>небольшие правки текстов;</li>
                  <li>корректировка отдельных блоков;</li>
                  <li>актуализация FAQ;</li>
                  <li>до 1 часа работ в месяц;;</li>
                  <li>реакция на стандартный запрос — до 2 рабочих дней.</li>
                </ul>
              </article>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  STANDARD
                  <span class="titlecard">Стоимость: от 11 990&nbsp;&#8381; /месяц</span>
                </h3>
                <p>Всё из BASIC плюс:</p>
                <ul class="tariff-list mt-15 mb-15 pl-0">
                  <li>регулярное обновление контента;</li>
                  <li>изменение существующих материалов;</li>
                  <li>добавление небольших информационных блоков;</li>
                  <li>актуализация страниц услуг и продуктов;</li>
                  <li>расширенная редактура;</li>
                  <li>ежемесячный отчёт;</li>
                  <li>до 3 часов работ в месяц;</li>
                  <li>реакция — до 1 рабочего дня.</li>
                </ul>
              </article>
            </div>
            <div class="col-100">
              <p>Возможна коррекция стоимости при оплате на длительный срок.</p>
            </div>
            <div class="col-100">
              <article class="mt-3">
                <h3 class="h3-title line-separation deco-line mb-15">Что не входит в поддержку:</h3>
                <ul class="tariff-list mb-15">
                  <li>создание большого объёма нового контента;</li>
                  <li>разработка новых страниц;</li>
                  <li>полная переработка существующих материалов;</li>
                  <li>подготовка нового контентного раздела;</li>
                  <li>перевод материалов;</li>
                  <li>сложные специализированные тексты;</li>
                  <li>SEO-продвижение;</li>
                  <li>разработка новых цифровых инструментов.</li>
                </ul>
                <p>Поддержка обеспечивает актуальность существующего контента. Существенное расширение его объёма — отдельный проект.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Как сделать первый шаг</h2>
                <p>
                  Расскажите, какие материалы необходимо подготовить для вашего сайта. Необязательно иметь готовое техническое задание или структуру.
                  <span class="display-block">
                    Опишите задачу своими словами — вместе определим, какой контент нужен сайту и какие материалы необходимо подготовить.
                  </span>
                </p>
              </article>
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
              </div>
              <div class="revers-list flex justify-center justify-start--sm pb-15 pb-2--md mt-3">
                <a href="/services/" class="hover-rotate">Назад к каталогу услуг</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
        <?php require_once $root . '/template/shared/footer.php'; ?>
      <?php endif; ?>
