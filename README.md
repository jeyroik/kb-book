# kb-book

Пакет "Книга" для Килобука.

# Установка

`composer require jeyroik/kb-book:*`

# Использование

## Предустановка

### Шаблоны книг

```json
{
  "books_templates": [
      {
        "name": "fiction.default",
        "title": "Художественная",
        "description": "Художественная книга",
        "owner": "root",
        "parameters": [
          {
            "name": "kind",
            "title": "Жанр",
            "description": "Жанр книги",
            "value": "",
            "template": "list",
            "list": {
              "type": "multiple",
              "name": "kind",
              "items": [
                {
                  "name": "fantastic",
                  "title": "Фантастика",
                  "description": "Книга повествует о выдуманных событиях и вещах в будущем"
                },
                {
                  "name": "detective",
                  "title": "Детектив",
                  "description": "Книга повествует о расследовании какого-либо инцидента"
                },
                {
                  "name": "classic",
                  "title": "Классика",
                  "description": "Классическое произведение"
                }
              ]
            }
          },
          {
            "name": "printing",
            "title": "Тираж",
            "description": "Количество изданных экземпляров книги",
            "value": "",
            "template": "number",
            "number": {
              "min": 1,
              "type": "int"
            }
          }
        ]
      }
  ]
}
```

### Книги

```json
{
  "books": [
      {
        "name": "book.test",
        "title": "Тестовая книга",
        "description": "Это тестовая книга, её можно удалить",
        "template": "fiction.default",
        "authors_names": ["author.test"],
        "pages_count": 1,
        "edition_name": "edition.test",
        "published_at": 0,
        "owner": "root",
        "parameters": [
          {
            "name": "kind",
            "title": "Жанр",
            "description": "Жанр книги",
            "template": "list",
            "value": "fantastic"
          },
          {
            "name": "printing",
            "title": "Тираж",
            "description": "Количество изданных экземпляров книги",
            "template": "number",
            "value": 1
          }
        ]
      }
  ]
}
```

### Авторы

```json
{
  "authors": [
      {
        "name" : "author.test",
        "title": "Тестовый автор",
        "description": "Это тестовый автор, его можно удалить",
        "first_name": "Jey",
        "second_name": "Roik",
        "third_name": "Kilobook",
        "born_at": 1563289783,
        "dead_at": 0,
        "owner": "root",
        "aliases": ["author.test"],
        "identities": [
          {"id": "author.test", "secret": "group", "source": "api" }
        ],
        "settings": [
          {"name": "token", "id": "@directive.generate()"}
        ]
      }
  ]
}
```

### Издания

```json
{
  "editions": [
      {
        "name" : "edition.test",
        "title": "Тестовое издание",
        "description": "Это тестовое издание, его можно удалить",
        "owner": "root",
        "aliases": ["edition.test"],
        "identities": [
          {"id": "edition.test", "secret": "group", "source": "api" }
        ],
        "settings": [
          {"name": "token", "id": "@directive.generate()"}
        ]
      }
  ]
}
```