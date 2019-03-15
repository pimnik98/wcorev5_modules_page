<div class="mess">
Вы видите следующим потому что вы: 
{% if auth == 'false' %}
        Гость
    {% elseif auth.login == 'Admin' %}
        Ваш логин Администратор
    {% elseif auth != 'false' %}
        Вы авторизованы
    {% elseif auth.prv >= 2 %}
        У вас права модератора иль ввыше
    {% endif %}
</div>