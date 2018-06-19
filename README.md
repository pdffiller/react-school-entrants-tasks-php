# Вступительные Задания PDFfiller JS-React-School

## Всем привет. 

Данный репозиторий служит шаблоном для Ваших решений вступительных заданий
в школу JS-React-разработчиков.

Для решения заданий Вам понадобиться установить на Вашем компьютере следующее программное обеспечение:
   1. `git`
   1. `git bash` (*для Windows-пользователей*)
   1. `php`, версии 7.1 или выше (рекомендовано 7.2)
   1. Редактор кода или интегрированная среда разработки


Условия вступительных заданий Вы можете прочесть в соотвествующих `README`-файлах:
 - **Задание 1**. [Спиральная матрица](https://github.com/pdffiller/react-school-entrants-tasks-php/blob/master/task-1/README.md)
 - **Задание 2**. [Одинаковые элементы](https://github.com/pdffiller/react-school-entrants-tasks-php/blob/master/task-2/README.md)
 - **Задание 3**. [Реализовать шаблон проектирования `Publish-Subscribe`](https://github.com/pdffiller/react-school-entrants-tasks-php/blob/master/task-3/README.md)


## Как выполнять задания

Все инструкции в данном разделе расчитаны на то, что задания будут выполнятья под операционными системами `Linux`, `MacOS` или `Windows 10` (с `git bash` в качестве командной строки).

### 1. Скопируйте проект

Существует два способа скопировать проект:
 - ответвиться от данного репозитория (fork)
 - создать новый репозиторий, к-й инициализировать кодом из этого

Мы **НАСТОЯТЕЛЬНО ПРОСИМ** не делать форки, т.к. это будет спойлером решений для других желающих решить вступительные задачи.

Для копирования репозитория выполните следующие шаги:

  1. [создайте новый репозиторий на github](https://github.com/new) с именем `<your-name>-tasks`
  1. склонируйте данный репозиторий на Ваш компьютер:
      ```shell
      git clone git@github.com:pdffiller/react-school-entrants-tasks-php.git school-tasks
      cd school-tasks
      ```
  1. скопируйте url Вашего репозитория, созданного в п. 1.

      ![copy git url](https://help.github.com/assets/images/help/repository/remotes-url.png)
  
  1. переиницилизируйте локальный git-репозиторий:
      ```shell
      rm -rf .git
      git init
      git remote add origin <your-repository-url> # вставьте скопированную ссылку
      ```
  
  1. Запуште код данного репозитория в Ваш репозиторий на `github`:
      ```shell
      git add .
      git commit -m "Initial commit"
      git push origin master
      ```

### 2. Установите зависимости проекта

Просто выполните команду:

```shell
make install
```

### 3. Напишите решение заданий

Откройте проект в Вашем редакторе кода (или интегрированной среде разработки), перейдите в папку задачи (`./task1`, `./task2` или `./task3`), и внесите нужные изменения в файл `index.php`.

Пожалуйста, примите во внимания спецификацию функций/методов, которыми сопровожден код шаблона решения задачи.

Так, например, шаблон для решения задачи 1 выглядит так:
```php
/**
 * Создает матрицу размером n * n и заполняет ее по спирали
 *
 * @param int {Number} n - размерность матрицы
 * @returns array {Number[n][n]} - n * n - матрица, заполненная по спирали
 */
function fillSpiralMatrix($n)
{
    $result = [];

    // Ваш код

    return $result;
}

```

Спецификация означает, что функция `fillSpiralMatrix` принимает один числовой аргумент `n` и возвращает квадратную числовую матрицу размером `n` x `n`.


### 3. Запустите тесты

```shell
make test-1 # или test-2, test-3 соответственно
```

Если задача решена правильно, то Вы увидите примерно вот такой вот результат:

```
php vendor/bin/codecept run unit task1
Codeception PHP Testing Framework v2.4.2
Powered by PHPUnit 6.5.8 by Sebastian Bergmann and contributors.

Unit Tests (6) -----------------------------------------------------------------
✔ TaskTest: Array diff feature | "=> (task 1 - fill spiral matrix n = 1)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 5)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 6)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 10)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 20)" (0.00s)
✔ TaskTest: Array diff feature | "=> (n = 1000)" (0.40s)
--------------------------------------------------------------------------------


Time: 711 ms, Memory: 116.00MB

OK (6 tests, 6 assertions)
```

## 4. Примите изменения и отправьте их на `github`

Как минимум после решения каждой задачи отправьте решение на `github`, для этого выполните команду:

```shell
git add .
git commit -m "Task-1 solution" # или другое сообщение, которое описывает изменения
git push origin master
```

## 5. Отправьте решение в `PDFfiller`

После того, как Вы решили все задачи, пожалуйста отправьте ссылку на страницу Вашего репозитория в `PDFfiller`.

Перед отправкой убедитесь, что Вы все отправили на `github`, и что все тесты проходят, для чего:

```shell
cd ~/
git clone <your-repository-url> school-task-test
cd school-task-test
make install
make test
```

Если все тесты проходят отправьте ссыку на страницу Вашего репозитория на электронную почту:<br/>
[js-school@pdffiller.com](mailto:js-school@pdffiller.com?subject=JS%20School%20Entrants%20Tasks)

## 6. Зарегистрируйте проблему

Если в ходе выполнения задачи что-то пошло не так, [зарегистрируйте проблему](https://github.com/pdffiller/react-school-entrants-tasks-php/issues/new) в данном репозитории на сайте github.