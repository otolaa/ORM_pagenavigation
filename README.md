### Пагинация в ORM + bitrix:main.pagenavigation
<a target="_blank" href="https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=2741&LESSON_PATH=3913.5062.5748.2741">
Источник</a>

Исходные данные:
Инфоблок “Жители”
```
Свойства:
Fio - строка (ФИО)
Home - привязка к элементу инфоблока “Дома”
```

Инфоблока “Дома”
```
Свойства:
Number- Строка (Номер дома)
Street - Строка (улица)
City - Строка (Город)
```

Пример вывода:
```
Иванов Иван - Москва, Ленина, 1
Петров Петр - Самара, Пушкина, 5
[1,2...10] <- Навигация
```

![scrin](https://github.com/otolaa/ORM_pagenavigation/blob/main/ezgif-4-37c26f6f74.gif "scrin")