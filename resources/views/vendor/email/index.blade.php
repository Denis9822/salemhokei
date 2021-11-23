<p>
    <strong>Email:</strong>
    <a href="mailto:{{ $email }}">{{ $email }}</a>
</p>
<p>
    <strong>Вопрос:</strong>
    <span>{{ $question->name }}</span>
</p>
<p>
    <strong>Категория вопроса:</strong>
    <span>{{ $section }}</span>
</p>
<p>
    <strong>Описание вопроса:</strong>
    <span>{{ $question->desc }}</span>
</p>