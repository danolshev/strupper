# Str upper

Переводит часть строки в верхний регистр

## Требования

- PHP 7.3

## Установка

```bash
composer require danolshev/strupper
```

## Использование

```phpt
$stringProcessor = new StringProcessor('blabla');
echo $stringProcessor->toUpper(1, 3); // bLABla
```