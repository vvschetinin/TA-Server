<? header('Content-type: text/html; charset=utf-8'); ?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Yandex.Metrika counter -->
  <!-- Код метрики -->
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
  <!-- <noscript>
    <div><img src="https://mc.yandex.ru/watch/65009764" style="position:absolute; left:-9999px;" alt=""></div>
  </noscript> -->
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
                  Создание лендинга
                  <span>Сайт, который помогает продавать</span>
                </h1>
              </div>
              <p>
                У вас есть услуга, продукт или специальное предложение, но нет страницы, которая понятно и убедительно представляет его потенциальному клиенту?
                <span class="display-block">
                  Создам лендинг, который решает конкретную задачу бизнеса: представляет предложение, отвечает на основные вопросы посетителя и подводит его к целевому
                  действию.
                </span>
              </p>
              <p>
                Не просто красивая страница, а продуманная система подачи информации:
                <span class="display-block font-middle color-white mt-05">Предложение → ценность → аргументы → доверие → действие</span>
                <span class="display-block mt-05">Если готового ТЗ нет — помогу сформулировать задачу, определить структуру и необходимые материалы.</span>
              </p>
            </div>
          </div>
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h3-title deco-line mb-15">Что получает ваш бизнес</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Понятное предложение</h3>
                <p>
                  Посетитель быстро понимает: что и для кого вы предлагаете, какую проблему решает продукт, почему стоит выбрать ваше предложение и что делать дальше.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Логичную структуру</h3>
                <p>Информация располагается в последовательности, соответствующей пути потенциального клиента к решению.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Убедительное содержание</h3>
                <p>Тексты, факты, преимущества, кейсы и другие материалы работают на одну задачу — помочь посетителю принять решение.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Современную подачу</h3>
                <p>Аккуратный дизайн, понятная типографика, продуманная композиция и корректное отображение на мобильных устройствах.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Готовый инструмент продаж</h3>
                <p>После запуска сайт можно использовать в рекламе, социальных сетях, рассылках и других каналах привлечения клиентов.</p>
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
                    Для продвижения конкретной услуги, направления или специального предложения.
                  </li>
                  <li>
                    <span class="font-middle color-white">Эксперты и консультанты</span>
                    Для презентации компетенций, услуг, программ и продуктов
                  </li>
                  <li>
                    <span class="font-middle color-white">Стартапы и новые продукты</span>
                    Для представления продукта и проверки интереса аудитории.
                  </li>
                  <li>
                    <span class="font-middle color-white">Агентства и специалисты</span>
                    Для отдельных услуг, рекламных кампаний и специальных предложений.
                  </li>
                  <li>
                    <span class="font-middle color-white">Бизнес с устаревшим сайтом</span>
                    Если существующий сайт плохо представляет предложение, неудобен на мобильных устройствах или требует существенного обновления.
                  </li>
                </ul>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h3-title deco-line mb-15">Какие лендинги создаю</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Лендинг услуги</h3>
                <p>Презентация конкретной услуги с акцентом на ценность и получение заявки.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Лендинг продукта</h3>
                <p>Подробное представление продукта или сервиса.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Лендинг рекламной кампании</h3>
                <p>Страница под конкретное предложение и рекламный источник.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Лендинг мероприятия</h3>
                <p>Конференции, вебинара, обучения, презентации.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Персональный лендинг</h3>
                <p>Сайт эксперта, консультанта или специалиста.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Промо-страница</h3>
                <p>Специальное предложение, акция, запуск или новое направление.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Как проходит работа</h2>
                <ul class="number-list mb-1">
                  <li>
                    <span class="font-middle color-white">Определяем задачу</span>
                    Изучаем продукт, целевую аудиторию, предложение и желаемое действие посетителя.
                  </li>
                  <li>
                    <span class="font-middle color-white">Прорабатываем структуру</span>
                    Определяем необходимые блоки и последовательность подачи информации.
                  </li>
                  <li>
                    <span class="font-middle color-white">Готовим содержание</span>
                    Разрабатываем или адаптируем тексты, заголовки, преимущества, призывы к действию и другие материалы.
                  </li>
                  <li>
                    <span class="font-middle color-white">Создаём дизайн</span>
                    Формируем визуальную концепцию и оформление страницы с учётом особенностей бренда и аудитории.
                  </li>
                  <li>
                    <span class="font-middle color-white">Собираем и тестируем</span>
                    Проверяем отображение на разных устройствах, навигацию, кнопки, формы, ссылки и основные пользовательские сценарии.
                  </li>
                  <li>
                    <span class="font-middle color-white">Запускаем</span>
                    Передаём готовый лендинг и, при необходимости, подключаем домен, хостинг, формы, аналитику и другие необходимые сервисы.
                  </li>
                </ul>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Дополнительные возможности</h2>
                <h3 class="h3-title mb-15">При необходимости лендинг можно расширить:</h3>
                <ul class="tariff-list mb-15">
                  <li>
                    <span class="font-middle color-white">Калькулятором</span>
                    — для предварительного расчёта стоимости;
                  </li>
                  <li>
                    <span class="font-middle color-white">Квизом</span>
                    — для получения и квалификации заявок;
                  </li>
                  <li>
                    <span class="font-middle color-white">FAQ-ботом</span>
                    — для ответов на типовые вопросы;
                  </li>
                  <li>
                    <span class="font-middle color-white">Аналитикой</span>
                    — для оценки поведения посетителей;
                  </li>
                  <li>
                    <span class="font-middle color-white">Дополнительными</span>
                    страницами и разделами
                  </li>
                  <li>
                    <span class="font-middle color-white">Интеграциями</span>
                    с необходимыми сервисами.
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
                  <span class="titlecard">Стоимость: от 49 000&nbsp;&#8381;</span>
                </h3>
                <p>Для простого лендинга. Включает:</p>
                <ul class="tariff-list mt-15 mb-15">
                  <li>анализ задачи;</li>
                  <li>структуру;</li>
                  <li>подготовку содержания;</li>
                  <li>дизайн;</li>
                  <li>сборку;</li>
                  <li>>базовое тестирование;</li>
                  <li>публикацию.</li>
                </ul>
              </article>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  BUSINESS
                  <span class="titlecard">Стоимость: от 89 000&nbsp;&#8381;</span>
                </h3>
                <p>Дополнительно к START:</p>
                <ul class="tariff-list mt-15 mb-15 pl-0">
                  <li>глубокая проработка аудитории;</li>
                  <li>расширенная структура;</li>
                  <li>индивидуальная концепция;</li>
                  <li>дополнительные блоки;</li>
                  <li>формы заявок;</li>
                  <li>базовые интеграции;</li>
                  <li>расширенное тестирование.</li>
                </ul>
              </article>
            </div>
            <div class="col-100">
              <p>Точная стоимость определяется после детальной оценки задачи и состава работ.</p>
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
                  <li>технический контроль;</li>
                  <li>проверка страниц и форм;</li>
                  <li>небольшие исправления;</li>
                  <li>обновление информации;</li>
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
                <p>Стандартная поддержка. Включает:</p>
                <ul class="tariff-list mt-15 mb-15 pl-0">
                  <li>расширенный контроль;</li>
                  <li>регулярные обновления;</li>
                  <li>небольшие изменения существующих блоков;</li>
                  <li>контроль форм;</li>
                  <li>технические проверки;</li>
                  <li>ежемесячный отчёт;</li>
                  <li>до 3 часов работ в месяц;</li>
                  <li>реакция на стандартный запрос — до 1 рабочего дня.</li>
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
                  <li>новые страницы;</li>
                  <li>существенная переработка дизайна;</li>
                  <li>новые функции;</li>
                  <li>сложные интеграции;</li>
                  <li>большой объём нового контента;</li>
                  <li>SEO и рекламное продвижение;</li>
                  <li>разработка новых цифровых инструментов.</li>
                </ul>
                <p>Поддержка обслуживает существующий сайт. Перечисленные дополнения рассчитываются отдельно.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Как сделать первый шаг</h2>
                <p>
                  Расскажите, какую задачу должен решать ваш будущий лендинг. Необязательно иметь готовое ТЗ, структуру или тексты.
                  <span class="display-block">Опишите задачу своими словами — вместе определим, каким должен быть сайт, чтобы он решал её.</span>
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
