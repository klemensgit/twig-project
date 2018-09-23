        <?php echo "name"; ?>

        {{ name }}

        <ul id="menu">
            {% for item in navigation %}
                <li><a href="{{ item.href }}">{{ item.name }}</a></li>
            {% endfor %}
        </ul>

        <h1>My Webpage</h1>

    </body>
</html>

