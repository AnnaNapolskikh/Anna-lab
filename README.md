# Лабораторная работа 1
## Задание
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP.
## Ход работы
- Разработаем пользовательский интерфейс и опишем пользовательские сценарии работы.

Первоначально пользователь попадает на главную страницу сайта - `index.php`, на которой он увидит три карточки с примерами иллюстраций, под которыми находится кнопка "Открыть", нажав на которую откроется изображение на новой вкладке на полный экран, а чуть выше, в шапке, переключатель `Галерея` и `Профиль автора`, а также кнопки `Войти` и `Зарегистрироваться`.

В случае, если пользователь нажмет на `Профиль автора`, то откроется страница `contacts.php`, где находится информация о создателе данных иллюстраций. 

- Авторизация пользователя
![Рис. 1 - Авторизация](https://github.com/AnnaNapolskikh/Anna-lab/blob/main/1img.jpg)

Если пользователь нажмет `Войти`, то ему откроется страница `login.php`, на которой находится форма авторизации и кнопка "Войти". 
В случае, если пользователь введет некорректные данные, то появится всплывающее окно, которое уведомит о том, что такой пользователь не найден.


Если у пользователя ещё нет аккаунта, то чуть ниже формочки будет находиться кнопка `Зарегистрируйтесь`, которая переадресует пользователя на страницу регистрации `sign-up.php`.

- Регистрация пользователя
![Рис. 2 - Регистрация](https://github.com/AnnaNapolskikh/Anna-lab/blob/main/3img.jpg)

На страницу регистрации (она же `sign-up.php`) можно попасть двумя способами:
1. С главной страницы сайта, в шапке, по кнопке `Зарегистрироваться`.
2. Со страницы авторизации, по кнопке `Зарегистрируйтесь!`.

На самой странице регистрации находится форма регистрации, со следующими полями:
1. Ваше имя (где необходимо указать Ваше имя).
2. Логин (где необходимо указать Ваш логин).
3. Почта (где необходимо указать Вашу почту).
4. Пароль (где Вам необходимо придумать свой пароль).
5. Подтверждение пароля (где необходимо ещё раз написать то, что Вы указали в предыдущем поле).
6. Желаемая аватарка (где можно сразу выбрать аватарку, которую Вы хотите).

Обязательными для заполнения являются:
1. Логин
2. Пароль

При регистрации существует правило:
1. Пароль должен состоять минимум из 5 символов.

Для регистрации Вам необходимо заполнить поля формы регистрации, и в случае успеха Вас переадресует на страницу `login.php` и появится уведомление о том, что регистрация прошла успешно.



Теперь, если Вы введете правильные данные в форме авторизации и нажмете "Войти", то Вас переадресует на страницу `profile.php`, где Вы увидите Вашу аватарку, логин и почту, а также кнопку "Выход", которая позволит Вам выйти из Вашего аккаунта.

- Выход из аккаунта
![Рис. 3 - Выход](https://github.com/AnnaNapolskikh/Anna-lab/blob/main/2img.jpg)

В случае нажатия на кнопку "Выход", Вас переадресует на страницу авторизации (`login.php`)



## База данных

Для хранения данных о пользователях, в частности, имени, логина, почты, пароля и аватарки нам необходимо место, в которое мы сможем заносить информацию. И здесь нам на помощь придёт база данных (далее - БД). 

Ниже представлена структура БД моего сайта:

| Имя | Тип данных | Длина| Дополнительно| Описание |
|----------|:----------:|:----------:|:------:| ----------:|
| id | int | - | AUTO_INCREMENT | Уникальный идентификатор пользователя |
| full_name | varchar | 255 | - | Имя пользователя |
| login | varchar | 100 | - | Логин пользователя|
| email | varchar | 255 | - | Почта пользователя |
| password | varchar | 500 | - | Пароль пользователя |
| avatar | varchar | 500 | - | Аватар пользователя |
