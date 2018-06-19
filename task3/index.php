<?php

class Emitter
{
    /**
     * Создает экземпляр класса Emitter.
     * @memberof Emitter
     */
    public function constructor()
    {
        // Ваш код
    }

    /**
     * связывает обработчик с событием
     *
     * @param string event - событие
     * @param Handler handler - обработчик
     */
    public function on($event, $handler)
    {
        // Ваш код
    }

    /**
     * Генерирует событие -- вызывает все обработчики, связанные с событием и
     *                       передает им аргумент data
     *
     * @param string event
     * @param mixed data
     */
    public function emit($event, $data)
    {
        // Ваш код
    }
}
