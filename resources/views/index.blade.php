<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css?v=1') }}">

</head>
<body>
    <div class="container-fluid">
        <section class="about">
            <div class="about-content">
                <div class="about-text">
                    <h1>Поможем вашему ребёнку войти в мир IT-профессий будущего!</h1>
                    <p>
                        Бесплатный первый урок — определим желание и потенциал ребёнка.
                        Только мотивированные дети смогут попасть в программу!
                    </p>
                    <button class="btn">Записаться на бесплатный урок</button>
                </div>

                <div class="about-image">
                    <img src="/img/img.png" alt="Ребёнок за ноутбуком">
                </div>
            </div>
        </section>



        <div class="why-for-child">
            <h1>
                IT — это не просто компьютеры. Это билет в будущее!
            </h1>
            <p>
                Сегодня специалисты по кибербезопасности, нейросетям и программированию — самые востребованные в мире. Мы готовим детей к профессиям, которые дают свободу, высокий доход и международные возможности.
            </p>
            <ul>
                <li><img src="/img/icons/dollar.svg" alt=""><p>Средняя зарплата IT-специалиста выше на 70%</p></li>
                <li><img src="/img/icons/browser.svg" alt=""><p>Международный сертификат — реальный шанс на трудоустройство</p></li>
                <li><img src="/img/icons/talk.svg" alt=""><p>Обучаем с элементами английского языка</p></li>
                <li><img src="/img/icons/brain.svg" alt=""><p>Развиваем логику, креативность и уверенность</p></li>
            </ul>
        </div>
        <div class="direction">
            <h1>Направления обучения</h1>
            <table>
                <tr>
                    <th>№</th>
                    <th>Направление</th>
                    <th>Краткое описание</th>
                    <th>Цена</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Кибербезопасность</td>
                    <td>Учим защищать данные, работать с паролями, антивирусами и сетевыми угрозами.</td>
                    <td>от 2000 ₽ / занятие</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Создание сайтов</td>
                    <td>HTML, CSS, JavaScript - ребёнок создаёт свой первый сайт.</td>
                    <td>от 2000 ₽</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Разработка мобильных приложений</td>
                    <td>Приложения для Android и iOS — от идеи до публикации. </td>
                    <td> от 2000 ₽</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Работа с нейросетями</td>
                    <td>ChatGPT, Midjourney, Copilot — учим использовать ИИ с умом.</td>
                    <td>от 2000 ₽</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Программирование игр</td>
                    <td>Unity и Python - создаём игры и анимации.</td>
                    <td>от 2000 ₽</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>IT-менеджмент и стартапы</td>
                    <td>Учим детей работать в команде, развиваем лидерство и мышление предпринимателя.</td>
                    <td>от 2000 ₽</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td> Веб-дизайн и UX/UI</td>
                    <td>Обучаем визуальному мышлению и проектированию интерфейсов.</td>
                    <td> от 2000 ₽</td>
                </tr>
            </table>
            <div class="feedbakers">
                <button class="btn btn-warning openModalBtn">Записаться на бесплатный урок</button>
                <i>Запишитесь на бесплатный первый урок и узнайте, подходит ли вашему ребёнку IT-путь!</i>
            </div>
        </div>
        <div class="roadmap_education">
            <h1>Практика на современном оборудовании — максимум вовлечения и результата!</h1>
            <p>
                Занятия проходят на компьютерах последнего поколения, чтобы ребёнок мог учиться на том, с чем реально работают IT-специалисты.
                Иногда мы проводим занятия на ноутбуках, чтобы дети привыкали к разным форматам работы.
                Ребята также учатся работать с роутерами, модемами, флеш-накопителями и другими системными устройствами, чтобы понимать, как устроен современный цифровой мир.
            </p>
            <div class="formats">
                <h3>Форматы:</h3>
                <ul>
                    <li> Очные занятия: г. Владикавказ, ул. Спутник, 37</li>
                    <li>Онлайн-обучение: если у ребёнка есть хороший компьютер — можно учиться дистанционно!</li>
                </ul>
            </div>
            <div class="steps">
                <h3>Этапы программы:</h3>
                <ul>
                    <li>Бесплатный вводный урок — определяем мотивацию.</li>
                    <li>Индивидуальный подбор направления.</li>
                    <li>Русский язык обучения с элементами английского.</li>
                    <li>Реальные мини-проекты.</li>
                    <li>Выпускной проект и международный сертификат.</li>
                </ul>
            </div>
        <p>«Мы берём только мотивированных детей — успех возможен только при реальном интересе!»</p>
        </div>
        <div class="reviews">
            <div class="review-card">
                <img src="" alt="Отзыв 1">
                <p>Мой сын создал свой первый сайт за месяц! Теперь хочет стать веб-разработчиком <i>Анна, мама Артёма, 11 лет</i></p>
            </div>
            <div class="review-card">
                <img src="" alt="Отзыв 1">
                <p>Дочь научилась работать с нейросетями и теперь делает школьные проекты в 3 раза быстрее! <i>Ольга, мама Алины, 12 </i></p>
            </div>
        </div>
        <div class="certificate_garant">
            <h1>Международный сертификат — первый шаг к будущей профессии!</h1>
            <p>По окончании курса ребёнок получает <b>международный сертификат</b>, подтверждающий его знания. Этот документ можно приложить к портфолио и использовать при поступлении в зарубежные IT-школы или при трудоустройстве.</p>
            <img src="/img/certificate.png" alt="">
        </div>
        <div class="footer">
            <div class="footer_telephone"><a href="tel:89858055950" class="btn btn-lg btn-warning"><img src="/img/tel.svg" alt="tel"> +7 985 805 59 50</a></div>
            <div class="footer_social">
                <a href=""><img src="/img/vk.svg" alt="vk"></a>
                <a href=""><img src="/img/tg.svg" alt="vk"></a>
            </div>
            <div class="footer_docs"><a href="">Политика конфиденциальности</a></div>
        </div>
        <div class="feedback">
            <h1>Запишитесь на бесплатный первый урок!</h1>
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for=""></label>
                    <input type="text" name="" id="">
                </div>
                <div class="mb-3">
                    <label for=""></label>
                    <input type="number" name="" id="">
                </div>
                <div class="mb-3">
                    <label for=""></label>
                    <input type="tel" name="" id="">
                </div>

                <button type="submit" class="btn btn-primary w-100">Отправить заявку</button>
            </form>
        </div>
    </div>
</body>
</html>
