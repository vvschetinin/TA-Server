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
                  Разработка FAQ-ботов
                  <span>Ответы на типовые вопросы клиентов</span>
                </h1>
              </div>
              <p>
                Клиенты регулярно задают одни и те же вопросы о товарах, услугах, условиях работы, стоимости или порядке оформления?
                <span class="display-block">
                  FAQ-бот помогает автоматизировать ответы на типовые обращения и предоставить посетителю необходимую информацию без ожидания ответа сотрудника.
                </span>
              </p>
              <p>
                Он берёт на себя повторяющиеся вопросы, помогая посетителю быстро найти нужную информацию.
                <span class="display-block font-middle color-white mt-05">Информация → вопрос → ответ → следующее действие</span>
                <span class="display-block mt-05">Бот может работать на сайте, в мессенджере или в другой согласованной среде.</span>
              </p>
              <p>Если готовой базы вопросов и ответов нет — помогу определить основные категории и подготовить структуру базы знаний.</p>
            </div>
          </div>
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h3-title deco-line mb-15">Что получает ваш бизнес</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Быстрые ответы для клиентов</h3>
                <p>
                  Посетитель получает ответ на типовой вопрос непосредственно в момент обращения, без необходимости искать информацию самостоятельно или ждать
                  сотрудника.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Снижение нагрузки на сотрудников</h3>
                <p>Бот берёт на себя повторяющиеся информационные запросы, позволяя сотрудникам сосредоточиться на задачах, требующих их участия.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Единая база информации</h3>
                <p>Основные сведения о компании, продуктах, услугах и условиях работы собраны в структурированном виде.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Доступность 24/7</h3>
                <p>Бот может отвечать на типовые вопросы в любое время, в том числе за пределами рабочего графика сотрудников.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Понятный путь к следующему действию</h3>
                <p>
                  После получения ответа посетитель может перейти к нужному действию: оставить заявку, связаться с сотрудником, получить дополнительную информацию или
                  перейти к нужному разделу.
                </p>
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
                    Если сотрудники регулярно отвечают на большое количество однотипных вопросов.
                  </li>
                  <li>
                    <span class="font-middle color-white">Интернет-магазины</span>
                    Для информирования покупателей о товарах, доставке, оплате, возврате и других условиях.
                  </li>
                  <li>
                    <span class="font-middle color-white">Сервисные компании</span>
                    Для ответов на вопросы об услугах, стоимости, порядке работы и условиях обслуживания.
                  </li>
                  <li>
                    <span class="font-middle color-white">Образовательные проекты</span>
                    Для информирования о программах, формате обучения, условиях участия и других типовых вопросах.
                  </li>
                  <li>
                    <span class="font-middle color-white">Эксперты и специалисты</span>
                    Для автоматизации ответов на часто задаваемые вопросы потенциальных клиентов.
                  </li>
                </ul>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h3-title deco-line mb-15">Какие задачи решает FAQ-бот</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Ответы на вопросы</h3>
                <p>Предоставляет информацию по заранее определённым темам.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Навигация</h3>
                <p>Помогает посетителю найти нужную информацию или раздел сайта.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Предварительная квалификация</h3>
                <p>задаёт последовательность вопросов для понимания запроса клиента.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Получение заявки</h3>
                <p>Позволяет передать контактные данные или сформировать обращение.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Передача сотруднику</h3>
                <p>Переводит пользователя к человеку, если вопрос требует индивидуального ответа.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Информационная поддержка</h3>
                <p>предоставляет актуальные сведения о товарах, услугах, условиях и порядке работы.</p>
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
                    Изучается бизнес, аудитория и типовые вопросы, на которые должен отвечать бот.
                  </li>
                  <li>
                    <span class="font-middle color-white">Формирование базы знаний</span>
                    Собирается и структурируется информацию: вопросы клиентов и возможные ответы, сведения о товарах и услугах, условия работы, инструкции, контакты и
                    другие необходимые материалы.
                  </li>
                  <li>
                    <span class="font-middle color-white">Проектирование сценариев</span>
                    Определение логики диалога, варианты ответов и действия пользователя после получения информации.
                  </li>
                  <li>
                    <span class="font-middle color-white">Создание бота</span>
                    Настройка интерфейса, базы знаний, сценариев и необходимых функций.
                  </li>
                  <li>
                    <span class="font-middle color-white">Тестируем</span>
                    Проверка типовых вопросов, сценариев взаимодействия, корректность ответов и передачи обращений.
                  </li>
                  <li>
                    <span class="font-middle color-white">Запускаем</span>
                    Подключение бота к согласованной площадке и передача его в эксплуатацию.
                  </li>
                </ul>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Дополнительные возможности</h2>
                <h3 class="h3-title mb-15">При необходимости FAQ-бот можно дополнить:</h3>
                <ul class="tariff-list mb-15">
                  <li>
                    <span class="font-middle color-white">Формой заявки</span>
                    — для получения контактов потенциального клиента;
                  </li>
                  <li>
                    <span class="font-middle color-white">Квалификацией</span>
                    — для предварительного определения потребности;
                  </li>
                  <li>
                    <span class="font-middle color-white">Калькулятором</span>
                    — для расчёта стоимости или другого показателя;
                  </li>
                  <li>
                    <span class="font-middle color-white">Интеграциями</span>
                    — с сайтом, CRM и другими необходимыми сервисами;
                  </li>
                  <li>
                    <span class="font-middle color-white">Аналитикой</span>
                    — для оценки обращений и наиболее частых вопросов;
                  </li>
                  <li>
                    <span class="font-middle color-white">Передачей сотруднику</span>
                    — для обработки нестандартных запросов. Дополнительные функции рассчитываются отдельно.
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
                <p>Для простого FAQ-бота с ограниченным количеством тем и сценариев. Включает:</p>
                <ul class="tariff-list mt-15 mb-15">
                  <li>анализ задачи;</li>
                  <li>структуру базы знаний;</li>
                  <li>подготовку основных сценариев;</li>
                  <li>настройку бота;</li>
                  <li>добавление базы вопросов и ответов;</li>
                  <li>>базовое тестирование;</li>
                  <li>подключение к одной площадке;</li>
                  <li>запуск.</li>
                </ul>
              </article>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  BUSINESS
                  <span class="titlecard">Стоимость: от 89 000&nbsp;&#8381;</span>
                </h3>
                <p>Для бизнеса с большим количеством типовых обращений. Дополнительно к START:</p>
                <ul class="tariff-list mt-15 mb-15 pl-0">
                  <li>расширенная база знаний;</li>
                  <li>более сложные сценарии;</li>
                  <li>квалификация обращений;</li>
                  <li>формы заявок;</li>
                  <li>передача сотруднику;</li>
                  <li>дополнительные интеграции;</li>
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
              <p class="mb-05">Информация о компании, товарах и услугах меняется. Поэтому бот должен регулярно обновляться</p>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  BASIC
                  <span class="titlecard">Стоимость: от 11 990&nbsp;&#8381; /месяц</span>
                </h3>
                <p>Базовая поддержка. Включает:</p>
                <ul class="tariff-list mt-15 mb-15">
                  <li>технический контроль;</li>
                  <li>проверка основных сценариев;</li>
                  <li>обновление информации;</li>
                  <li>добавление и удаление типовых вопросов и ответов;</li>
                  <li>небольшие исправления;</li>
                  <li>до 1 часа работ в месяц;</li>
                  <li>реакция на стандартный запрос — до 2 рабочих дней.</li>
                </ul>
              </article>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  STANDARD
                  <span class="titlecard">Стоимость: от 19 990&nbsp;&#8381; /месяц</span>
                </h3>
                <p>Стандартная поддержка. Всё из BASIC плюс:</p>
                <ul class="tariff-list mt-15 mb-15 pl-0">
                  <li>регулярная проверка ответов;</li>
                  <li>актуализация базы знаний;</li>
                  <li>добавление новых вопросов и сценариев;</li>
                  <li>корректировка существующей логики;</li>
                  <li>контроль интеграций;</li>
                  <li>тестирование после изменений;</li>
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
                  <li>создание новых крупных функций;</li>
                  <li>существенная переработка сценариев;</li>
                  <li>новые интеграции;</li>
                  <li>подключение новых площадок;</li>
                  <li>существенная переработка базы знаний;</li>
                  <li>разработка нового бота;</li>
                  <li>создание сложной аналитики;</li>
                  <li>разработка новых цифровых инструментов.</li>
                </ul>
                <p>Поддержка поддерживает существующего бота. Новая функциональность — отдельный проект.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Как сделать первый шаг</h2>
                <p>
                  Расскажите, на какие вопросы сейчас приходится регулярно отвечать вашим сотрудникам. Необязательно иметь готовую базу вопросов, сценарии или ТЗ.
                  <span class="display-block">
                    Опишите проблему своими словами — вместе определим, какие задачи можно передать FAQ-боту и каким должен быть его сценарий работы.
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
