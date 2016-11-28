# Поисковая оптимизация
----------


Поисковая оптимизация — комплекс мер по внутренней и внешней оптимизации, 
для поднятия позиций сайта в результатах выдачи поисковых систем по определенным запросам пользователей,
с целью увеличения трафика и потенциальных клиентов и последующей монетизации этого трафика.

## Статические страницы


Orchid - даёт удобную возможность управлять метатегами для статических запросов пользователя
Для этого необходимо перейти "Инструменты" -> "Статические страницы", на открывшийся странице
представлен листинг страниц, которые система считает статичными.

Вы можете редактировать каждую такую страницу устанавливая основные метатеги.

## Динамические страницы

Для использования фасада SEO в динамических страницах, необходимо передать в метод обработки 
уникальный итендификатор поста.

## Использование генератора в шаблоне 

```php
{!! SEO::render() !!}
```

Пример сгенерированого html кода

```html
<title>Test Orchid</title>
<meta name="description" content="Test Orchid"/>
<meta name="keywords" content="Test Orchid"/>
<meta property="og:title" content="Test Orchid"/>
<meta property="og:description" content="Test Orchid"/>
<meta name="twitter:title" content="Test Orchid"/>
<meta name="twitter:description" content="Test Orchid"/>
```
