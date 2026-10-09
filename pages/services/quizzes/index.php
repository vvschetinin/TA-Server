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
                  Калькуляторы и квизы
                  <span>Инструменты, помогающие принять решение</span>
                </h1>
              </div>
              <p>
                Посетителю сложно самостоятельно разобраться в стоимости, выбрать подходящий вариант или понять, какая услуга ему нужна?
                <span class="display-block">
                  Калькулятор или квиз помогает провести его через последовательность простых действий и получить понятный персональный результат.
                </span>
              </p>
              <p>
                Это может быть предварительная стоимость, подходящий вариант продукта, рекомендации по услуге или другой результат, предусмотренный задачей бизнеса.
                Последовательность работы инструмента:
                <span class="display-block font-middle color-white mt-05">Вопрос → выбор → расчёт / результат → заявка.</span>
                <span class="display-block mt-05">Инструмент можно встроить в сайт, лендинг или использовать как самостоятельную страницу.</span>
                <span class="display-block">
                  Если готового сценария нет — помогу определить, какие вопросы, параметры и результаты необходимы для решения вашей задачи.
                </span>
              </p>
            </div>
          </div>
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h3-title deco-line mb-15">Что получает ваш бизнес</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Более понятный путь для клиента</h3>
                <p>
                  Посетителю не нужно самостоятельно изучать большое количество информации. Он отвечает на несколько вопросов и последовательно получает необходимые
                  данные для принятия решения.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Персонализированный результат</h3>
                <p>Вместо общего описания клиент получает результат, рассчитанный или подобранный с учётом его ответов и выбранных параметров.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Предварительный расчёт</h3>
                <p>Калькулятор позволяет показать ориентировочную стоимость или другой рассчитываемый показатель до обращения к сотруднику.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Дополнительные заявки</h3>
                <p>После получения результата посетителю можно предложить оставить контакты, заказать услугу или перейти к следующему этапу взаимодействия.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Более качественные обращения</h3>
                <p>Квиз позволяет собрать сведения о потребности клиента ещё до передачи обращения сотруднику.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Снижение количества рутинных консультаций</h3>
                <p>Часть стандартных вопросов и предварительных расчётов посетитель выполняет самостоятельно.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Для кого подходит</h2>
                <ul class="tariff-list mb-1">
                  <li>
                    <span class="font-middle color-white">Услуги с расчетом стоимости</span>
                    Если цена продукта зависит от нескольких параметров: объёма, количества, срока или других условий.
                  </li>
                  <li>
                    <span class="font-middle color-white">Компании со сложным выбором</span>
                    Если клиенту трудно самостоятельно определить подходящий продукт, тариф или вариант услуги.
                  </li>
                  <li>
                    <span class="font-middle color-white">Интернет-магазины</span>
                    Для подбора товара по характеристикам, потребностям или предпочтениям.
                  </li>
                  <li>
                    <span class="font-middle color-white">Строительство и ремонт</span>
                    Для предварительного расчёта стоимости работ или определения параметров проекта.
                  </li>
                  <li>
                    <span class="font-middle color-white">Профессиональные услуги</span>
                    Для предварительной оценки задачи и квалификации потенциального клиента.
                  </li>
                  <li>
                    <span class="font-middle color-white">Образовательные проекты</span>
                    Для подбора программы, курса или формата обучения.
                  </li>
                </ul>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h3-title deco-line mb-15">Какие инструменты создаю</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Калькулятор стоимости</h3>
                <p>Предварительный расчёт цены на основе заданных параметров.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Калькулятор параметров</h3>
                <p>Расчёт объёма, количества, сроков или другого показателя.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Квиз-подборщик</h3>
                <p>Определение подходящего продукта, услуги или решения.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Квалификационный квиз</h3>
                <p>Сбор информации о потребности потенциального клиента.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Квиз с рекомендацией</h3>
                <p>Последовательный выбор параметров с формированием персонального результата.</p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Комбинированный инструмент</h3>
                <p>Последовательность вопросов, расчёт и последующее предложение подходящего решения.</p>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Как проходит работа</h2>
                <ul class="number-list mb-1">
                  <li>
                    <span class="font-middle color-white">Определяем задачу.</span>
                    Что должен получить посетитель, какие данные необходимы, какие параметры влияют на результат.
                  </li>
                  <li>
                    <span class="font-middle color-white">Проработка сценариев.</span>
                    Определение перечня и последовательности вопросов, вариантов ответа, расчётов и результатов.
                  </li>
                  <li>
                    <span class="font-middle color-white">Настройка логики.</span>
                    Перевод согласованного сценария в работающий инструмент.
                  </li>
                  <li>
                    <span class="font-middle color-white">Создание интерфейса.</span>
                    Разработка понятного интерфейса, позволяющего посетителю быстро проходить сценарий и не теряться в процессе.
                  </li>
                  <li>
                    <span class="font-middle color-white">Сборка и тестирование.</span>
                    Проверка расчётов, вариантов ответов, логики переходов, отображения результатов, форм, передачи заявок, работы на мобильных устройствах.
                  </li>
                  <li>
                    <span class="font-middle color-white">Запуск.</span>
                    Размещение инструмента на сайте или лендинге, подключение необходимых форм, интеграций и других сервисов.
                  </li>
                </ul>
              </article>
            </div>
          </div>

          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h3-title deco-line mb-15">Дополнительные возможности</h2>
                <h3 class="h3-title mb-15">При необходимости калькулятор или квиз можно дополнить:</h3>
                <ul class="tariff-list mb-15">
                  <li>
                    <span class="font-middle color-white">Формой заявки</span>
                    — для получения контактов после прохождения;
                  </li>
                  <li>
                    <span class="font-middle color-white">Расчётом стоимости</span>
                    — с выводом предварительной цены;
                  </li>
                  <li>
                    <span class="font-middle color-white">Рекомендациями</span>
                    — с подбором подходящего варианта;
                  </li>
                  <li>
                    <span class="font-middle color-white">Квалификацией клиента</span>
                    — для предварительной оценки обращения;
                  </li>
                  <li>
                    <span class="font-middle color-white">Интеграциями</span>
                    — с CRM, сайтом и другими сервисами;
                  </li>
                  <li>
                    <span class="font-middle color-white">Аналитикой</span>
                    — для оценки прохождения сценария;
                  </li>
                  <li>
                    <span class="font-middle color-white">FAQ-ботом</span>
                    — для ответов на дополнительные вопросы;
                  </li>
                  <li>
                    <span class="font-middle color-white">Отправкой результата</span>
                    — например, на электронную почту или в другой согласованный канал.
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
                <p>Для простого калькулятора или квиза с ограниченным количеством параметров и сценариев. Включает:</p>
                <ul class="tariff-list mt-15 mb-15">
                  <li>анализ задачи;</li>
                  <li>разработку сценария;</li>
                  <li>структуру вопросов и результатов;</li>
                  <li>настройку логики;</li>
                  <li>создание интерфейса;</li>
                  <li>мобильную адаптацию;</li>
                  <li>базовое тестирование;</li>
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
                <p>
                  Для полноценного коммерческого инструмента.
                  <br />
                  Дополнительно к START:
                </p>
                <ul class="tariff-list mt-15 mb-15 pl-0">
                  <li>более сложный сценарий;</li>
                  <li>несколько вариантов результатов;</li>
                  <li>расчёты и условия;</li>
                  <li>квалификация заявок;</li>
                  <li>формы;</li>
                  <li>дополнительные интеграции;</li>
                  <li>расширенное тестирование;</li>
                  <li>аналитика прохождения.</li>
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
              <p>
                Цены, параметры расчётов, условия и сценарии могут меняться.
                <span class="display-block mb-05">Поэтому работающий инструмент требует периодического обслуживания.</span>
              </p>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  BASIC
                  <span class="titlecard">Стоимость: от 8 990&nbsp;&#8381; /месяц</span>
                </h3>
                <p>Базовая поддержка. Включает:</p>
                <ul class="tariff-list mt-15 mb-15">
                  <li>технический контроль;</li>
                  <li>проверка основных сценариев;</li>
                  <li>проверка расчётов;</li>
                  <li>небольшие исправления;</li>
                  <li>изменение цен и параметров;</li>
                  <li>небольшие изменения вопросов и вариантов ответа;</li>
                  <li>до 1 часа работ в месяц;</li>
                  <li>реакция на стандартный запрос — до 2 рабочих дней.</li>
                </ul>
              </article>
            </div>
            <div class="col-100 col-lg-50">
              <article class="card-tariff">
                <h3 class="h3-title lh-1 mb-05">
                  STANDARD
                  <span class="titlecard">Стоимость: от 15 990&nbsp;&#8381; /месяц</span>
                </h3>
                <p>Стандартная поддержка. Всё из BASIC плюс:</p>
                <ul class="tariff-list mt-15 mb-15 pl-0">
                  <li>регулярное тестирование сценариев;</li>
                  <li>изменение существующей логики;</li>
                  <li>добавление небольшого количества вопросов;</li>
                  <li>корректировка результатов;</li>
                  <li>небольшие изменения интерфейса;</li>
                  <li>контроль интеграций;</li>
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
                <p class="mb-1">Отдельно рассчитываются</p>
                <ul class="tariff-list mb-15">
                  <li>создание нового калькулятора или квиза;</li>
                  <li>существенная переработка сценария;</li>
                  <li>разработка новой логики расчётов;</li>
                  <li>новые интеграции;</li>
                  <li>существенная переработка интерфейса;</li>
                  <li>создание новых функциональных модулей;</li>
                  <li>разработка новых цифровых инструментов.</li>
                </ul>
                <p>
                  Поддержка обслуживает существующий инструмент.
                  <span class="display-block">Существенное изменение задачи или функциональности — отдельный проект.</span>
                </p>
              </article>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Как сделать первый шаг</h2>
                <p>
                  Расскажите, какую задачу должен решать ваш калькулятор или квиз. Необязательно иметь готовые формулы, сценарий или техническое задание.
                  <span class="display-block">
                    Опишите задачу своими словами — вместе определим, что должен спрашивать инструмент, какой результат выдавать и какое действие предлагать клиенту
                    дальше.
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
